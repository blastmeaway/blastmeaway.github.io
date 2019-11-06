<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>CELH - Pro Team Stats</title>
<script src="CELH.js"></script>
<meta name="author" content="Simon Tremblay, sths.simont.info" />
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Decription" content="Marcus Winston - STHS - Version : 3.1.9.9 - CELH-STHS.db - CELH-STHSCareerStat.db"/>
<link href="STHSMain.css" rel="stylesheet" type="text/css" />
<style>
@media screen and (min-width: 1380px) {
.STHSTeamStat_Table2 thead th:nth-child(2){display:none;}
.STHSTeamStat_Table2 tbody td:nth-child(2){display:none;}
.STHSTeamStat_Table2 tfoot td:nth-child(2){display:none;}}
@media screen and (max-width: 1380px) {
.STHSTeamStat_Table2 thead th:nth-child(1){display:none;}
.STHSTeamStat_Table2 tbody td:nth-child(1){display:none;}
.STHSTeamStat_Table2 tfoot td:nth-child(1){display:none;}}
@media screen and (max-width: 1200px) {
.STHSWarning {display:block;}
.STHSTeamStat_Table2 thead th:nth-last-child(3){display:none;}
.STHSTeamStat_Table2 tbody td:nth-last-child(3){display:none;}
.STHSTeamStat_Table2 tfoot td:nth-last-child(3){display:none;}
.STHSTeamStat_Table2 thead th:nth-last-child(4){display:none;}
.STHSTeamStat_Table2 tbody td:nth-last-child(4){display:none;}
.STHSTeamStat_Table2 tfoot td:nth-last-child(4){display:none;}
.STHSTeamStat_Table2 thead th:nth-last-child(5){display:none;}
.STHSTeamStat_Table2 tbody td:nth-last-child(5){display:none;}
.STHSTeamStat_Table2 tfoot td:nth-last-child(5){display:none;}
.STHSTeamStat_Table2 thead th:nth-last-child(6){display:none;}
.STHSTeamStat_Table2 tbody td:nth-last-child(6){display:none;}
.STHSTeamStat_Table2 tfoot td:nth-last-child(6){display:none;}
.STHSTeamStat_Table2 thead th:nth-last-child(7){display:none;}
.STHSTeamStat_Table2 tbody td:nth-last-child(7){display:none;}
.STHSTeamStat_Table2 tfoot td:nth-last-child(7){display:none;}
.STHSTeamStat_Table2 thead th:nth-last-child(8){display:none;}
.STHSTeamStat_Table2 tbody td:nth-last-child(8){display:none;}
.STHSTeamStat_Table2 tfoot td:nth-last-child(8){display:none;}
.STHSTeamStat_Table1 thead th:nth-last-child(4){display:none;}
.STHSTeamStat_Table1 tbody td:nth-last-child(4){display:none;}
.STHSTeamStat_Table1 tfoot td:nth-last-child(4){display:none;}
.STHSTeamStat_Table1 thead th:nth-last-child(5){display:none;}
.STHSTeamStat_Table1 tbody td:nth-last-child(5){display:none;}
.STHSTeamStat_Table1 tfoot td:nth-last-child(5){display:none;}
.STHSTeamStat_Table1 thead th:nth-last-child(6){display:none;}
.STHSTeamStat_Table1 tbody td:nth-last-child(6){display:none;}
.STHSTeamStat_Table1 tfoot td:nth-last-child(6){display:none;}
.STHSTeamStat_Table1 thead th:nth-last-child(7){display:none;}
.STHSTeamStat_Table1 tbody td:nth-last-child(7){display:none;}
.STHSTeamStat_Table1 tfoot td:nth-last-child(7){display:none;}
.STHSTeamStat_Table1 thead th:nth-last-child(8){display:none;}
.STHSTeamStat_Table1 tbody td:nth-last-child(8){display:none;}
.STHSTeamStat_Table1 tfoot td:nth-last-child(8){display:none;}
.STHSTeamStat_Table1 thead th:nth-last-child(9){display:none;}
.STHSTeamStat_Table1 tbody td:nth-last-child(9){display:none;}
.STHSTeamStat_Table1 tfoot td:nth-last-child(9){display:none;}
.STHSTeamStat_Table1 thead th:nth-last-child(10){display:none;}
.STHSTeamStat_Table1 tbody td:nth-last-child(10){display:none;}
.STHSTeamStat_Table1 tfoot td:nth-last-child(10){display:none;}
.STHSTeamStat_Table1 thead th:nth-last-child(11){display:none;}
.STHSTeamStat_Table1 tbody td:nth-last-child(11){display:none;}
.STHSTeamStat_Table1 tfoot td:nth-last-child(11){display:none;}
.STHSTeamStat_Table1 thead th:nth-last-child(12){display:none;}
.STHSTeamStat_Table1 tbody td:nth-last-child(12){display:none;}
.STHSTeamStat_Table1 tfoot td:nth-last-child(12){display:none;}
.STHSTeamStat_Table1 thead td:nth-last-child(2){display:none;}
}
@media screen and (max-width: 960px) {
.STHSTeamStat_Table2 thead th:nth-child(3){display:none;}
.STHSTeamStat_Table2 tbody td:nth-child(3){display:none;}
.STHSTeamStat_Table2 tfoot td:nth-child(3){display:none;}
.STHSTeamStat_Table2 thead th:nth-child(4){display:none;}
.STHSTeamStat_Table2 tbody td:nth-child(4){display:none;}
.STHSTeamStat_Table2 tfoot td:nth-child(4){display:none;}
.STHSTeamStat_Table2 thead th:nth-child(5){display:none;}
.STHSTeamStat_Table2 tbody td:nth-child(5){display:none;}
.STHSTeamStat_Table2 tfoot td:nth-child(5){display:none;}
.STHSTeamStat_Table2 thead th:nth-child(6){display:none;}
.STHSTeamStat_Table2 tbody td:nth-child(6){display:none;}
.STHSTeamStat_Table2 tfoot td:nth-child(6){display:none;}
.STHSTeamStat_Table2 thead th:nth-child(8){display:none;}
.STHSTeamStat_Table2 tbody td:nth-child(8){display:none;}
.STHSTeamStat_Table2 tfoot td:nth-child(8){display:none;}
.STHSTeamStat_Table2 thead th:nth-child(9){display:none;}
.STHSTeamStat_Table2 tbody td:nth-child(9){display:none;}
.STHSTeamStat_Table2 tfoot td:nth-child(9){display:none;}
.STHSTeamStat_Table2 thead th:nth-child(10){display:none;}
.STHSTeamStat_Table2 tbody td:nth-child(10){display:none;}
.STHSTeamStat_Table2 tfoot td:nth-child(10){display:none;}
.STHSTeamStat_Table2 thead th:nth-child(11){display:none;}
.STHSTeamStat_Table2 tbody td:nth-child(11){display:none;}
.STHSTeamStat_Table2 tfoot td:nth-child(11){display:none;}
.STHSTeamStat_Table1 thead th:nth-last-child(13){display:none;}
.STHSTeamStat_Table1 tbody td:nth-last-child(13){display:none;}
.STHSTeamStat_Table1 tfoot td:nth-last-child(13){display:none;}
.STHSTeamStat_Table1 thead th:nth-last-child(14){display:none;}
.STHSTeamStat_Table1 tbody td:nth-last-child(14){display:none;}
.STHSTeamStat_Table1 tfoot td:nth-last-child(14){display:none;}
.STHSTeamStat_Table1 thead th:nth-last-child(15){display:none;}
.STHSTeamStat_Table1 tbody td:nth-last-child(15){display:none;}
.STHSTeamStat_Table1 tfoot td:nth-last-child(15){display:none;}
.STHSTeamStat_Table1 thead th:nth-last-child(16){display:none;}
.STHSTeamStat_Table1 tbody td:nth-last-child(16){display:none;}
.STHSTeamStat_Table1 tfoot td:nth-last-child(16){display:none;}
.STHSTeamStat_Table1 thead th:nth-last-child(17){display:none;}
.STHSTeamStat_Table1 tbody td:nth-last-child(17){display:none;}
.STHSTeamStat_Table1 tfoot td:nth-last-child(17){display:none;}
.STHSTeamStat_Table1 thead th:nth-last-child(18){display:none;}
.STHSTeamStat_Table1 tbody td:nth-last-child(18){display:none;}
.STHSTeamStat_Table1 tfoot td:nth-last-child(18){display:none;}
.STHSTeamStat_Table1 thead th:nth-last-child(19){display:none;}
.STHSTeamStat_Table1 tbody td:nth-last-child(19){display:none;}
.STHSTeamStat_Table1 tfoot td:nth-last-child(19){display:none;}
.STHSTeamStat_Table1 thead th:nth-last-child(20){display:none;}
.STHSTeamStat_Table1 tbody td:nth-last-child(20){display:none;}
.STHSTeamStat_Table1 tfoot td:nth-last-child(20){display:none;}
.STHSTeamStat_Table1 thead th:nth-last-child(21){display:none;}
.STHSTeamStat_Table1 tbody td:nth-last-child(21){display:none;}
.STHSTeamStat_Table1 tfoot td:nth-last-child(21){display:none;}
.STHSTeamStat_Table1 thead td:nth-last-child(3){display:none;}
}
}</style>
<link href="CELH.css" rel="stylesheet" type="text/css" />
<?php If (file_exists("STHSMain-CSSOverwrite.css") == True){echo "<link href=\"STHSMain-CSSOverwrite.css\" rel=\"stylesheet\" type=\"text/css\" />";}?>
</head><body>
<?php $LeagueName = (string)"";
$DatabaseFile = (string)"CELH-STHS.db";
$LangOverwrite = (boolean)FALSE;
$CareerStatDatabaseFile = (string)"CELH-STHSCareerStat.db";
$lang = (string)"en"; /* The $lang option must be either "en" or "fr" */
if(isset($_GET['Lang'])){$lang  = filter_var($_GET['Lang'], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW || FILTER_FLAG_STRIP_HIGH);$LangOverwrite=TRUE;}  /* Allow Users Language Overwrite */
If ($lang == "fr"){include 'LanguageFR.php';}else{include 'LanguageEN.php';}
$db = new SQLite3($DatabaseFile);
$Active = 1; /* Show Webpage Top Menu */
include "Menu.php";?>
<script>$(function(){$("table").basictablesorter()});</script>
<table class="basictablesorter STHSTeamStat_Table1"><thead><tr>
<td></td><td colspan="9">Overall</td><td colspan="9">Home</td><td colspan="9">Visitor</td><td colspan="3"></td></tr><tr>
<th class="STHSW200">Team</th><th class="STHSW25">GP</th><th class="STHSW25">W</th><th class="STHSW25">L</th><th class="STHSW25">OTW</th><th class="STHSW25">OTL</th><th class="STHSW25">SOW</th><th class="STHSW25">SOL</th><th class="STHSW25">GF</th><th class="STHSW25">GA</th><th class="STHSW25">GP</th><th class="STHSW25">W</th><th class="STHSW25">L</th><th class="STHSW25">OTW</th><th class="STHSW25">OTL</th><th class="STHSW25">SOW</th><th class="STHSW25">SOL</th><th class="STHSW25">GF</th><th class="STHSW25">GA</th><th class="STHSW25">GP</th><th class="STHSW25">W</th><th class="STHSW25">L</th><th class="STHSW25">OTW</th><th class="STHSW25">OTL</th><th class="STHSW25">SOW</th><th class="STHSW25">SOL</th><th class="STHSW25">GF</th><th class="STHSW25">GA</th><th class="STHSW25">G</th><th class="STHSW25">A</th><th class="STHSW25">P</th></tr></thead>
<tr><td>HC Black Eagles Silesia</td><td>30</td><td>13</td><td>7</td><td>3</td><td>5</td><td>2</td><td>0</td><td>57</td><td>51</td><td>15</td><td>6</td><td>3</td><td>2</td><td>3</td><td>1</td><td>0</td><td>28</td><td>24</td><td>15</td><td>7</td><td>4</td><td>1</td><td>2</td><td>1</td><td>0</td><td>29</td><td>27</td><td>57</td><td>83</td><td>140</td></tr>
<tr><td>HC Eagles Moravia</td><td>30</td><td>10</td><td>6</td><td>5</td><td>3</td><td>1</td><td>5</td><td>66</td><td>62</td><td>15</td><td>6</td><td>3</td><td>3</td><td>1</td><td>0</td><td>2</td><td>34</td><td>30</td><td>15</td><td>4</td><td>3</td><td>2</td><td>2</td><td>1</td><td>3</td><td>32</td><td>32</td><td>66</td><td>119</td><td>185</td></tr>
<tr><td>HC Lions Bohemia</td><td>30</td><td>9</td><td>11</td><td>2</td><td>1</td><td>5</td><td>2</td><td>61</td><td>56</td><td>15</td><td>5</td><td>6</td><td>0</td><td>0</td><td>3</td><td>1</td><td>33</td><td>30</td><td>15</td><td>4</td><td>5</td><td>2</td><td>1</td><td>2</td><td>1</td><td>28</td><td>26</td><td>61</td><td>102</td><td>163</td></tr>
<tr><td>HC Lynx Kladno</td><td>30</td><td>7</td><td>15</td><td>2</td><td>3</td><td>1</td><td>2</td><td>49</td><td>64</td><td>15</td><td>3</td><td>7</td><td>1</td><td>2</td><td>1</td><td>1</td><td>24</td><td>30</td><td>15</td><td>4</td><td>8</td><td>1</td><td>1</td><td>0</td><td>1</td><td>25</td><td>34</td><td>49</td><td>80</td><td>129</td></tr>
</table>
<table class="basictablesorter STHSTeamStat_Table2"><thead><tr>
<th class="STHSW200">Team</th><th class="STHSW25">Team</th><th class="STHSW25">GP1</th><th class="STHSW25">GP2</th><th class="STHSW25">GP3</th><th class="STHSW25">GP4</th><th class="STHSW25">SHF</th><th class="STHSW25">SP1</th><th class="STHSW25">SP2</th><th class="STHSW25">SP3</th><th class="STHSW25">SP4</th><th class="STHSW25">SHA</th><th class="STHSW25">SHB</th><th class="STHSW25">Pim</th><th class="STHSW25">Hit</th><th class="STHSW25">PPA</th><th class="STHSW25">PPG</th><th class="STHSW35">PP%</th><th class="STHSW25">PKA</th><th class="STHSW25">PK GA</th><th class="STHSW35">PK%</th><th class="STHSW25">PK GF</th><th class="STHSW35">FO% DZ</th><th class="STHSW35">FO% OZ</th><th class="STHSW35">FO% NT</th><th class="STHSW25">PZ DF</th><th class="STHSW25">PZ OF</th><th class="STHSW25">PZ NT</th><th class="STHSW25">PC DF</th><th class="STHSW25">PC OF</th><th class="STHSW25">PC NT</th><th class="STHSW25">SO</th><th class="STHSW25">EG</th></tr></thead>
<tr><td>HC Black Eagles Silesia</td><td>SBE</td><td>12</td><td>18</td><td>22</td><td>5</td><td>742</td><td>260</td><td>240</td><td>229</td><td>18</td><td>892</td><td>276</td><td>201</td><td>544</td><td>116</td><td>30</td><td>25.86%</td><td>100</td><td>25</td><td>75.00%</td><td>1</td><td>52.70%</td><td>54.01%</td><td>46.50%</td><td>666</td><td>585</td><td>571</td><td>301</td><td>297</td><td>288</td><td>2</td><td>1</td></tr>
<tr><td>HC Eagles Moravia</td><td>MOR</td><td>6</td><td>30</td><td>24</td><td>9</td><td>960</td><td>296</td><td>318</td><td>315</td><td>54</td><td>820</td><td>272</td><td>231</td><td>625</td><td>109</td><td>34</td><td>31.19%</td><td>112</td><td>27</td><td>75.89%</td><td>2</td><td>48.01%</td><td>49.48%</td><td>56.84%</td><td>617</td><td>681</td><td>549</td><td>286</td><td>393</td><td>274</td><td>2</td><td>1</td></tr>
<tr><td>HC Lions Bohemia</td><td>BOH</td><td>11</td><td>22</td><td>21</td><td>10</td><td>979</td><td>315</td><td>339</td><td>305</td><td>45</td><td>833</td><td>277</td><td>227</td><td>633</td><td>101</td><td>27</td><td>26.73%</td><td>112</td><td>30</td><td>73.21%</td><td>1</td><td>52.67%</td><td>50.78%</td><td>49.32%</td><td>624</td><td>668</td><td>550</td><td>285</td><td>379</td><td>270</td><td>1</td><td>1</td></tr>
<tr><td>HC Lynx Kladno</td><td>KLD</td><td>12</td><td>13</td><td>21</td><td>3</td><td>770</td><td>235</td><td>250</td><td>268</td><td>25</td><td>906</td><td>303</td><td>208</td><td>739</td><td>101</td><td>21</td><td>20.79%</td><td>103</td><td>30</td><td>70.87%</td><td>0</td><td>48.40%</td><td>50.45%</td><td>51.14%</td><td>650</td><td>622</td><td>558</td><td>286</td><td>330</td><td>278</td><td>2</td><td>1</td></tr>
</table>
<table><tr><td class="STHSAlignTop"><h1 class="STHSProStats_GoalsFor">
Goals For</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 1.94</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>HC Eagles Moravia</td><td>2.20</td></tr>
<tr><td>2</td><td>HC Lions Bohemia</td><td>2.03</td></tr>
<tr><td>3</td><td>HC Black Eagles Silesia</td><td>1.90</td></tr>
<tr><td>4</td><td>HC Lynx Kladno</td><td>1.63</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_GoalsAgainst">
Goals Against</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 1.94</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>HC Black Eagles Silesia</td><td>1.70</td></tr>
<tr><td>2</td><td>HC Lions Bohemia</td><td>1.87</td></tr>
<tr><td>3</td><td>HC Eagles Moravia</td><td>2.07</td></tr>
<tr><td>4</td><td>HC Lynx Kladno</td><td>2.13</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_GoalsForAgainst">
Goals For / Against</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tbody><tr><td>1</td><td>HC Black Eagles Silesia</td><td>111.76%</td></tr>
<tr><td>2</td><td>HC Lions Bohemia</td><td>108.93%</td></tr>
<tr><td>3</td><td>HC Eagles Moravia</td><td>106.45%</td></tr>
<tr><td>4</td><td>HC Lynx Kladno</td><td>76.56%</td></tr>
</tbody></table>
</td></tr></table>
<table><tr><td class="STHSAlignTop"><h1 class="STHSProStats_PowerPlay">
PowerPlay %</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 26.23%</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>HC Eagles Moravia</td><td>31.19%</td></tr>
<tr><td>2</td><td>HC Lions Bohemia</td><td>26.73%</td></tr>
<tr><td>3</td><td>HC Black Eagles Silesia</td><td>25.86%</td></tr>
<tr><td>4</td><td>HC Lynx Kladno</td><td>20.79%</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_PenaltyKill">
Penalty Kill %</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 73.77%</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>HC Eagles Moravia</td><td>75.89%</td></tr>
<tr><td>2</td><td>HC Black Eagles Silesia</td><td>75.00%</td></tr>
<tr><td>3</td><td>HC Lions Bohemia</td><td>73.21%</td></tr>
<tr><td>4</td><td>HC Lynx Kladno</td><td>70.87%</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_PPPK">
PP + PK</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tbody><tr><td>1</td><td>HC Eagles Moravia</td><td>107.09%</td></tr>
<tr><td>2</td><td>HC Black Eagles Silesia</td><td>100.86%</td></tr>
<tr><td>3</td><td>HC Lions Bohemia</td><td>99.95%</td></tr>
<tr><td>4</td><td>HC Lynx Kladno</td><td>91.67%</td></tr>
</tbody></table>
</td></tr></table>
<table><tr><td class="STHSAlignTop"><h1 class="STHSProStats_ShotsFor">
Shots For</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 28.76</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>HC Lions Bohemia</td><td>32.63</td></tr>
<tr><td>2</td><td>HC Eagles Moravia</td><td>32.00</td></tr>
<tr><td>3</td><td>HC Lynx Kladno</td><td>25.67</td></tr>
<tr><td>4</td><td>HC Black Eagles Silesia</td><td>24.73</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_ShotsAgainst">
Shots Against</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 28.76</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>HC Eagles Moravia</td><td>27.33</td></tr>
<tr><td>2</td><td>HC Lions Bohemia</td><td>27.77</td></tr>
<tr><td>3</td><td>HC Black Eagles Silesia</td><td>29.73</td></tr>
<tr><td>4</td><td>HC Lynx Kladno</td><td>30.20</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_ShotsForAgainst">
Shots For / Against</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tbody><tr><td>1</td><td>HC Lions Bohemia</td><td>117.53%</td></tr>
<tr><td>2</td><td>HC Eagles Moravia</td><td>117.07%</td></tr>
<tr><td>3</td><td>HC Lynx Kladno</td><td>84.99%</td></tr>
<tr><td>4</td><td>HC Black Eagles Silesia</td><td>83.18%</td></tr>
</tbody></table>
</td></tr></table>
<table><tr><td class="STHSAlignTop"><h1 class="STHSProStats_PIMGP">
Pim / GP</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 7.23</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>HC Black Eagles Silesia</td><td>6.70</td></tr>
<tr><td>2</td><td>HC Lynx Kladno</td><td>6.93</td></tr>
<tr><td>3</td><td>HC Lions Bohemia</td><td>7.57</td></tr>
<tr><td>4</td><td>HC Eagles Moravia</td><td>7.70</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_HitsGP">
Hits / GP</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 21.18</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>HC Lynx Kladno</td><td>24.63</td></tr>
<tr><td>2</td><td>HC Lions Bohemia</td><td>21.10</td></tr>
<tr><td>3</td><td>HC Eagles Moravia</td><td>20.83</td></tr>
<tr><td>4</td><td>HC Black Eagles Silesia</td><td>18.13</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_Faceoff">
Faceoff %</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tbody><tr><td>1</td><td>HC Black Eagles Silesia</td><td>51.90%</td></tr>
<tr><td>2</td><td>HC Lions Bohemia</td><td>51.23%</td></tr>
<tr><td>3</td><td>HC Eagles Moravia</td><td>50.46%</td></tr>
<tr><td>4</td><td>HC Lynx Kladno</td><td>49.72%</td></tr>
</tbody></table>
</td></tr></table>
<?php include "Footer.php";?>
