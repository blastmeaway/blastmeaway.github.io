<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>CELH - Pro Team Stats VS</title>
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
<div class="STHSTopLink"><a id="STHSRosterTop"></a> <a href="#HCBlackEaglesSilesia">HC Black Eagles Silesia</a> | <a href="#HCEaglesMoravia">HC Eagles Moravia</a> | <a href="#HCLionsBohemia">HC Lions Bohemia</a> | <a href="#HCLynxKladno">HC Lynx Kladno</a> | <a href="javascript:STHS_JS_CloseAll('');">Close All Team View</a> | <a href="javascript:STHS_JS_OpenAll('');">Open All Team View</a>
</div>
<h1 class="TeamStatsVSPro_SBE"><a id="HCBlackEaglesSilesia">HC Black Eagles Silesia</a></h1>
<div class="STHSTeamLink">
[ <a href="CELH-ProTeamRoster.php#HCBlackEaglesSilesia">Pro Team Roster</a> ]
[ <a href="CELH-ProTeamScoring.php#HCBlackEaglesSilesia">Pro Team Scoring</a> ]
[ <a href="CELH-TeamFinance.php#HCBlackEaglesSilesia">Team Finance</a> ]
[ <a href="CELH-ProTeamPlayersInfo.php#HCBlackEaglesSilesia">Pro Team PlayersInfo</a> ]
[ <a href="CELH-ProTeamLines.php#HCBlackEaglesSilesia">Pro Team Lines</a> ]
[ <a href="CELH-TeamProspects.php#HCBlackEaglesSilesia">Team Prospects</a> ]
[ <a href="CELH-ProTeamSchedule.php#HCBlackEaglesSilesia">Pro Team Schedule</a> ]
[ <a href="CELH-ProTeamStats.php#HCBlackEaglesSilesia">Pro Team Stats</a> ]
[ <a href="CELH-ProTeamStatsVS.php#HCBlackEaglesSilesia">Pro Team Stats VS</a> ]
[ <a href="CELH-TeamInjurySuspension.php#HCBlackEaglesSilesia">Team Injury Suspension</a> ]
[ <a href="CELH-TeamHistory.php#HCBlackEaglesSilesia">Team History</a> ]
[ <a href="CELH-TeamRecords.php#HCBlackEaglesSilesia">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_HCBlackEaglesSilesia');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_HCBlackEaglesSilesia" style="display: block;">
<table class="basictablesorter STHSTeamStat_Table1"><thead><tr>
<td colspan="2"></td><td colspan="9">Overall</td><td colspan="9">Home</td><td colspan="9">Visitor</td><td colspan="3"></td></tr><tr>
<th class="STHSW200">Team</th><th class="STHSW25">TGP</th><th class="STHSW25">GP</th><th class="STHSW25">W</th><th class="STHSW25">L</th><th class="STHSW25">OTW</th><th class="STHSW25">OTL</th><th class="STHSW25">SOW</th><th class="STHSW25">SOL</th><th class="STHSW25">GF</th><th class="STHSW25">GA</th><th class="STHSW25">GP</th><th class="STHSW25">W</th><th class="STHSW25">L</th><th class="STHSW25">OTW</th><th class="STHSW25">OTL</th><th class="STHSW25">SOW</th><th class="STHSW25">SOL</th><th class="STHSW25">GF</th><th class="STHSW25">GA</th><th class="STHSW25">GP</th><th class="STHSW25">W</th><th class="STHSW25">L</th><th class="STHSW25">OTW</th><th class="STHSW25">OTL</th><th class="STHSW25">SOW</th><th class="STHSW25">SOL</th><th class="STHSW25">GF</th><th class="STHSW25">GA</th><th class="STHSW25">G</th><th class="STHSW25">A</th><th class="STHSW25">P</th></tr></thead>
<tfoot>
<tr><td>Vs Division</td><td></td><td>10</td><td>3</td><td>1</td><td>2</td><td>3</td><td>1</td><td>0</td><td>24</td><td>20</td><td>5</td><td>2</td><td>1</td><td>1</td><td>1</td><td>0</td><td>0</td><td>11</td><td>10</td><td>5</td><td>1</td><td>0</td><td>1</td><td>2</td><td>1</td><td>0</td><td>13</td><td>10</td><td>24</td><td>36</td><td>60</td></tr>
<tr><td>Vs Conference</td><td></td><td>10</td><td>3</td><td>1</td><td>2</td><td>3</td><td>1</td><td>0</td><td>24</td><td>20</td><td>5</td><td>2</td><td>1</td><td>1</td><td>1</td><td>0</td><td>0</td><td>11</td><td>10</td><td>5</td><td>1</td><td>0</td><td>1</td><td>2</td><td>1</td><td>0</td><td>13</td><td>10</td><td>24</td><td>36</td><td>60</td></tr>
<tr><td>Since Last GM Reset</td><td></td><td>30</td><td>13</td><td>7</td><td>3</td><td>5</td><td>2</td><td>0</td><td>57</td><td>51</td><td>15</td><td>6</td><td>3</td><td>2</td><td>3</td><td>1</td><td>0</td><td>28</td><td>24</td><td>15</td><td>7</td><td>4</td><td>1</td><td>2</td><td>1</td><td>0</td><td>29</td><td>27</td><td>57</td><td>83</td><td>140</td></tr>
</tfoot><tbody>
<tr><td>HC Eagles Moravia</td><td>10</td><td>10</td><td>3</td><td>1</td><td>2</td><td>3</td><td>1</td><td>0</td><td>24</td><td>20</td><td>5</td><td>2</td><td>1</td><td>1</td><td>1</td><td>0</td><td>0</td><td>11</td><td>10</td><td>5</td><td>1</td><td>0</td><td>1</td><td>2</td><td>1</td><td>0</td><td>13</td><td>10</td><td>24</td><td>36</td><td>60</td></tr>
<tr><td>HC Lions Bohemia</td><td>10</td><td>10</td><td>5</td><td>3</td><td>0</td><td>1</td><td>1</td><td>0</td><td>18</td><td>16</td><td>5</td><td>2</td><td>1</td><td>0</td><td>1</td><td>1</td><td>0</td><td>9</td><td>7</td><td>5</td><td>3</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>9</td><td>9</td><td>18</td><td>24</td><td>42</td></tr>
<tr><td>HC Lynx Kladno</td><td>10</td><td>10</td><td>5</td><td>3</td><td>1</td><td>1</td><td>0</td><td>0</td><td>15</td><td>15</td><td>5</td><td>2</td><td>1</td><td>1</td><td>1</td><td>0</td><td>0</td><td>8</td><td>7</td><td>5</td><td>3</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>7</td><td>8</td><td>15</td><td>23</td><td>38</td></tr>
</tbody></table>
<table class="basictablesorter STHSTeamStat_Table2"><thead><tr>
<th class="STHSW200">Team</th><th class="STHSW25">Team</th><th class="STHSW25">GP1</th><th class="STHSW25">GP2</th><th class="STHSW25">GP3</th><th class="STHSW25">GP4</th><th class="STHSW25">SHF</th><th class="STHSW25">SP1</th><th class="STHSW25">SP2</th><th class="STHSW25">SP3</th><th class="STHSW25">SP4</th><th class="STHSW25">SHA</th><th class="STHSW25">SHB</th><th class="STHSW25">Pim</th><th class="STHSW25">Hit</th><th class="STHSW25">PPA</th><th class="STHSW25">PPG</th><th class="STHSW35">PP%</th><th class="STHSW25">PKA</th><th class="STHSW25">PK GA</th><th class="STHSW35">PK%</th><th class="STHSW25">PK GF</th><th class="STHSW35">FO% DZ</th><th class="STHSW35">FO% OZ</th><th class="STHSW35">FO% NT</th><th class="STHSW25">PZ DF</th><th class="STHSW25">PZ OF</th><th class="STHSW25">PZ NT</th><th class="STHSW25">PC DF</th><th class="STHSW25">PC OF</th><th class="STHSW25">PC NT</th><th class="STHSW25">SO</th><th class="STHSW25">EG</th></tr></thead>
<tfoot>
<tr><td>Vs Division</td><td>Div</td><td>2</td><td>8</td><td>11</td><td>3</td><td>251</td><td>80</td><td>93</td><td>70</td><td>11</td><td>310</td><td>102</td><td>73</td><td>177</td><td>45</td><td>13</td><td>28.89%</td><td>35</td><td>10</td><td>71.43%</td><td>1</td><td>54.69%</td><td>55.83%</td><td>45.08%</td><td>225</td><td>198</td><td>189</td><td>99</td><td>101</td><td>96</td><td>0</td><td>0</td></tr>
<tr><td>Vs Conference</td><td>Conf</td><td>2</td><td>8</td><td>11</td><td>3</td><td>251</td><td>80</td><td>93</td><td>70</td><td>11</td><td>310</td><td>102</td><td>73</td><td>177</td><td>45</td><td>13</td><td>28.89%</td><td>35</td><td>10</td><td>71.43%</td><td>1</td><td>54.69%</td><td>55.83%</td><td>45.08%</td><td>225</td><td>198</td><td>189</td><td>99</td><td>101</td><td>96</td><td>0</td><td>0</td></tr>
<tr><td>Since Last GM Reset</td><td>GMR</td><td>12</td><td>18</td><td>22</td><td>5</td><td>742</td><td>260</td><td>240</td><td>229</td><td>18</td><td>892</td><td>276</td><td>201</td><td>544</td><td>116</td><td>30</td><td>25.86%</td><td>100</td><td>25</td><td>75.00%</td><td>1</td><td>52.70%</td><td>54.01%</td><td>46.50%</td><td>666</td><td>585</td><td>571</td><td>301</td><td>297</td><td>288</td><td>2</td><td>1</td></tr>
</tfoot><tbody>
<tr><td>HC Eagles Moravia</td><td>MOR</td><td>2</td><td>8</td><td>11</td><td>3</td><td>251</td><td>80</td><td>93</td><td>70</td><td>11</td><td>310</td><td>102</td><td>73</td><td>177</td><td>45</td><td>13</td><td>28.89%</td><td>35</td><td>10</td><td>71.43%</td><td>1</td><td>54.69%</td><td>55.83%</td><td>45.08%</td><td>225</td><td>198</td><td>189</td><td>99</td><td>101</td><td>96</td><td>0</td><td>0</td></tr>
<tr><td>HC Lions Bohemia</td><td>BOH</td><td>4</td><td>7</td><td>6</td><td>1</td><td>253</td><td>89</td><td>86</td><td>76</td><td>4</td><td>337</td><td>105</td><td>66</td><td>183</td><td>39</td><td>11</td><td>28.21%</td><td>33</td><td>10</td><td>69.70%</td><td>0</td><td>50.99%</td><td>49.55%</td><td>42.15%</td><td>226</td><td>194</td><td>187</td><td>98</td><td>98</td><td>94</td><td>1</td><td>0</td></tr>
<tr><td>HC Lynx Kladno</td><td>KLD</td><td>6</td><td>3</td><td>5</td><td>1</td><td>238</td><td>91</td><td>61</td><td>83</td><td>3</td><td>245</td><td>69</td><td>62</td><td>184</td><td>32</td><td>6</td><td>18.75%</td><td>32</td><td>5</td><td>84.38%</td><td>0</td><td>52.43%</td><td>56.76%</td><td>52.63%</td><td>216</td><td>194</td><td>195</td><td>104</td><td>98</td><td>98</td><td>1</td><td>1</td></tr>
</tbody></table></div>
<h1 class="TeamStatsVSPro_MOR"><a id="HCEaglesMoravia">HC Eagles Moravia</a></h1>
<div class="STHSTeamLink">
[ <a href="CELH-ProTeamRoster.php#HCEaglesMoravia">Pro Team Roster</a> ]
[ <a href="CELH-ProTeamScoring.php#HCEaglesMoravia">Pro Team Scoring</a> ]
[ <a href="CELH-TeamFinance.php#HCEaglesMoravia">Team Finance</a> ]
[ <a href="CELH-ProTeamPlayersInfo.php#HCEaglesMoravia">Pro Team PlayersInfo</a> ]
[ <a href="CELH-ProTeamLines.php#HCEaglesMoravia">Pro Team Lines</a> ]
[ <a href="CELH-TeamProspects.php#HCEaglesMoravia">Team Prospects</a> ]
[ <a href="CELH-ProTeamSchedule.php#HCEaglesMoravia">Pro Team Schedule</a> ]
[ <a href="CELH-ProTeamStats.php#HCEaglesMoravia">Pro Team Stats</a> ]
[ <a href="CELH-ProTeamStatsVS.php#HCEaglesMoravia">Pro Team Stats VS</a> ]
[ <a href="CELH-TeamInjurySuspension.php#HCEaglesMoravia">Team Injury Suspension</a> ]
[ <a href="CELH-TeamHistory.php#HCEaglesMoravia">Team History</a> ]
[ <a href="CELH-TeamRecords.php#HCEaglesMoravia">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_HCEaglesMoravia');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_HCEaglesMoravia" style="display: block;">
<table class="basictablesorter STHSTeamStat_Table1"><thead><tr>
<td colspan="2"></td><td colspan="9">Overall</td><td colspan="9">Home</td><td colspan="9">Visitor</td><td colspan="3"></td></tr><tr>
<th class="STHSW200">Team</th><th class="STHSW25">TGP</th><th class="STHSW25">GP</th><th class="STHSW25">W</th><th class="STHSW25">L</th><th class="STHSW25">OTW</th><th class="STHSW25">OTL</th><th class="STHSW25">SOW</th><th class="STHSW25">SOL</th><th class="STHSW25">GF</th><th class="STHSW25">GA</th><th class="STHSW25">GP</th><th class="STHSW25">W</th><th class="STHSW25">L</th><th class="STHSW25">OTW</th><th class="STHSW25">OTL</th><th class="STHSW25">SOW</th><th class="STHSW25">SOL</th><th class="STHSW25">GF</th><th class="STHSW25">GA</th><th class="STHSW25">GP</th><th class="STHSW25">W</th><th class="STHSW25">L</th><th class="STHSW25">OTW</th><th class="STHSW25">OTL</th><th class="STHSW25">SOW</th><th class="STHSW25">SOL</th><th class="STHSW25">GF</th><th class="STHSW25">GA</th><th class="STHSW25">G</th><th class="STHSW25">A</th><th class="STHSW25">P</th></tr></thead>
<tfoot>
<tr><td>Vs Division</td><td></td><td>10</td><td>1</td><td>3</td><td>3</td><td>2</td><td>0</td><td>1</td><td>20</td><td>24</td><td>5</td><td>0</td><td>1</td><td>2</td><td>1</td><td>0</td><td>1</td><td>10</td><td>13</td><td>5</td><td>1</td><td>2</td><td>1</td><td>1</td><td>0</td><td>0</td><td>10</td><td>11</td><td>20</td><td>36</td><td>56</td></tr>
<tr><td>Vs Conference</td><td></td><td>10</td><td>1</td><td>3</td><td>3</td><td>2</td><td>0</td><td>1</td><td>20</td><td>24</td><td>5</td><td>0</td><td>1</td><td>2</td><td>1</td><td>0</td><td>1</td><td>10</td><td>13</td><td>5</td><td>1</td><td>2</td><td>1</td><td>1</td><td>0</td><td>0</td><td>10</td><td>11</td><td>20</td><td>36</td><td>56</td></tr>
<tr><td>Since Last GM Reset</td><td></td><td>30</td><td>10</td><td>6</td><td>5</td><td>3</td><td>1</td><td>5</td><td>66</td><td>62</td><td>15</td><td>6</td><td>3</td><td>3</td><td>1</td><td>0</td><td>2</td><td>34</td><td>30</td><td>15</td><td>4</td><td>3</td><td>2</td><td>2</td><td>1</td><td>3</td><td>32</td><td>32</td><td>66</td><td>119</td><td>185</td></tr>
</tfoot><tbody>
<tr><td>HC Black Eagles Silesia</td><td>10</td><td>10</td><td>1</td><td>3</td><td>3</td><td>2</td><td>0</td><td>1</td><td>20</td><td>24</td><td>5</td><td>0</td><td>1</td><td>2</td><td>1</td><td>0</td><td>1</td><td>10</td><td>13</td><td>5</td><td>1</td><td>2</td><td>1</td><td>1</td><td>0</td><td>0</td><td>10</td><td>11</td><td>20</td><td>36</td><td>56</td></tr>
<tr><td>HC Lions Bohemia</td><td>10</td><td>10</td><td>3</td><td>2</td><td>1</td><td>0</td><td>1</td><td>3</td><td>21</td><td>21</td><td>5</td><td>2</td><td>1</td><td>1</td><td>0</td><td>0</td><td>1</td><td>10</td><td>9</td><td>5</td><td>1</td><td>1</td><td>0</td><td>0</td><td>1</td><td>2</td><td>11</td><td>12</td><td>21</td><td>36</td><td>57</td></tr>
<tr><td>HC Lynx Kladno</td><td>10</td><td>10</td><td>6</td><td>1</td><td>1</td><td>1</td><td>0</td><td>1</td><td>25</td><td>17</td><td>5</td><td>4</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>14</td><td>8</td><td>5</td><td>2</td><td>0</td><td>1</td><td>1</td><td>0</td><td>1</td><td>11</td><td>9</td><td>25</td><td>47</td><td>72</td></tr>
</tbody></table>
<table class="basictablesorter STHSTeamStat_Table2"><thead><tr>
<th class="STHSW200">Team</th><th class="STHSW25">Team</th><th class="STHSW25">GP1</th><th class="STHSW25">GP2</th><th class="STHSW25">GP3</th><th class="STHSW25">GP4</th><th class="STHSW25">SHF</th><th class="STHSW25">SP1</th><th class="STHSW25">SP2</th><th class="STHSW25">SP3</th><th class="STHSW25">SP4</th><th class="STHSW25">SHA</th><th class="STHSW25">SHB</th><th class="STHSW25">Pim</th><th class="STHSW25">Hit</th><th class="STHSW25">PPA</th><th class="STHSW25">PPG</th><th class="STHSW35">PP%</th><th class="STHSW25">PKA</th><th class="STHSW25">PK GA</th><th class="STHSW35">PK%</th><th class="STHSW25">PK GF</th><th class="STHSW35">FO% DZ</th><th class="STHSW35">FO% OZ</th><th class="STHSW35">FO% NT</th><th class="STHSW25">PZ DF</th><th class="STHSW25">PZ OF</th><th class="STHSW25">PZ NT</th><th class="STHSW25">PC DF</th><th class="STHSW25">PC OF</th><th class="STHSW25">PC NT</th><th class="STHSW25">SO</th><th class="STHSW25">EG</th></tr></thead>
<tfoot>
<tr><td>Vs Division</td><td>Div</td><td>1</td><td>6</td><td>10</td><td>3</td><td>310</td><td>96</td><td>98</td><td>106</td><td>13</td><td>251</td><td>81</td><td>97</td><td>227</td><td>35</td><td>10</td><td>28.57%</td><td>45</td><td>13</td><td>71.11%</td><td>1</td><td>46.60%</td><td>46.53%</td><td>59.02%</td><td>198</td><td>225</td><td>189</td><td>97</td><td>126</td><td>93</td><td>0</td><td>0</td></tr>
<tr><td>Vs Conference</td><td>Conf</td><td>1</td><td>6</td><td>10</td><td>3</td><td>310</td><td>96</td><td>98</td><td>106</td><td>13</td><td>251</td><td>81</td><td>97</td><td>227</td><td>35</td><td>10</td><td>28.57%</td><td>45</td><td>13</td><td>71.11%</td><td>1</td><td>46.60%</td><td>46.53%</td><td>59.02%</td><td>198</td><td>225</td><td>189</td><td>97</td><td>126</td><td>93</td><td>0</td><td>0</td></tr>
<tr><td>Since Last GM Reset</td><td>GMR</td><td>6</td><td>30</td><td>24</td><td>9</td><td>960</td><td>296</td><td>318</td><td>315</td><td>54</td><td>820</td><td>272</td><td>231</td><td>625</td><td>109</td><td>34</td><td>31.19%</td><td>112</td><td>27</td><td>75.89%</td><td>2</td><td>48.01%</td><td>49.48%</td><td>56.84%</td><td>617</td><td>681</td><td>549</td><td>286</td><td>393</td><td>274</td><td>2</td><td>1</td></tr>
</tfoot><tbody>
<tr><td>HC Black Eagles Silesia</td><td>SBE</td><td>1</td><td>6</td><td>10</td><td>3</td><td>310</td><td>96</td><td>98</td><td>106</td><td>13</td><td>251</td><td>81</td><td>97</td><td>227</td><td>35</td><td>10</td><td>28.57%</td><td>45</td><td>13</td><td>71.11%</td><td>1</td><td>46.60%</td><td>46.53%</td><td>59.02%</td><td>198</td><td>225</td><td>189</td><td>97</td><td>126</td><td>93</td><td>0</td><td>0</td></tr>
<tr><td>HC Lions Bohemia</td><td>BOH</td><td>1</td><td>12</td><td>6</td><td>5</td><td>314</td><td>87</td><td>100</td><td>111</td><td>33</td><td>310</td><td>82</td><td>70</td><td>205</td><td>36</td><td>10</td><td>27.78%</td><td>35</td><td>7</td><td>80.00%</td><td>0</td><td>50.00%</td><td>51.13%</td><td>57.46%</td><td>218</td><td>224</td><td>180</td><td>96</td><td>130</td><td>91</td><td>1</td><td>1</td></tr>
<tr><td>HC Lynx Kladno</td><td>KLD</td><td>4</td><td>12</td><td>8</td><td>1</td><td>336</td><td>113</td><td>120</td><td>98</td><td>8</td><td>259</td><td>109</td><td>64</td><td>193</td><td>38</td><td>14</td><td>36.84%</td><td>32</td><td>7</td><td>78.13%</td><td>1</td><td>47.06%</td><td>50.57%</td><td>54.03%</td><td>201</td><td>232</td><td>180</td><td>93</td><td>137</td><td>90</td><td>1</td><td>0</td></tr>
</tbody></table></div>
<h1 class="TeamStatsVSPro_BOH"><a id="HCLionsBohemia">HC Lions Bohemia</a></h1>
<div class="STHSTeamLink">
[ <a href="CELH-ProTeamRoster.php#HCLionsBohemia">Pro Team Roster</a> ]
[ <a href="CELH-ProTeamScoring.php#HCLionsBohemia">Pro Team Scoring</a> ]
[ <a href="CELH-TeamFinance.php#HCLionsBohemia">Team Finance</a> ]
[ <a href="CELH-ProTeamPlayersInfo.php#HCLionsBohemia">Pro Team PlayersInfo</a> ]
[ <a href="CELH-ProTeamLines.php#HCLionsBohemia">Pro Team Lines</a> ]
[ <a href="CELH-TeamProspects.php#HCLionsBohemia">Team Prospects</a> ]
[ <a href="CELH-ProTeamSchedule.php#HCLionsBohemia">Pro Team Schedule</a> ]
[ <a href="CELH-ProTeamStats.php#HCLionsBohemia">Pro Team Stats</a> ]
[ <a href="CELH-ProTeamStatsVS.php#HCLionsBohemia">Pro Team Stats VS</a> ]
[ <a href="CELH-TeamInjurySuspension.php#HCLionsBohemia">Team Injury Suspension</a> ]
[ <a href="CELH-TeamHistory.php#HCLionsBohemia">Team History</a> ]
[ <a href="CELH-TeamRecords.php#HCLionsBohemia">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_HCLionsBohemia');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_HCLionsBohemia" style="display: block;">
<table class="basictablesorter STHSTeamStat_Table1"><thead><tr>
<td colspan="2"></td><td colspan="9">Overall</td><td colspan="9">Home</td><td colspan="9">Visitor</td><td colspan="3"></td></tr><tr>
<th class="STHSW200">Team</th><th class="STHSW25">TGP</th><th class="STHSW25">GP</th><th class="STHSW25">W</th><th class="STHSW25">L</th><th class="STHSW25">OTW</th><th class="STHSW25">OTL</th><th class="STHSW25">SOW</th><th class="STHSW25">SOL</th><th class="STHSW25">GF</th><th class="STHSW25">GA</th><th class="STHSW25">GP</th><th class="STHSW25">W</th><th class="STHSW25">L</th><th class="STHSW25">OTW</th><th class="STHSW25">OTL</th><th class="STHSW25">SOW</th><th class="STHSW25">SOL</th><th class="STHSW25">GF</th><th class="STHSW25">GA</th><th class="STHSW25">GP</th><th class="STHSW25">W</th><th class="STHSW25">L</th><th class="STHSW25">OTW</th><th class="STHSW25">OTL</th><th class="STHSW25">SOW</th><th class="STHSW25">SOL</th><th class="STHSW25">GF</th><th class="STHSW25">GA</th><th class="STHSW25">G</th><th class="STHSW25">A</th><th class="STHSW25">P</th></tr></thead>
<tfoot>
<tr><td>Vs Division</td><td></td><td>10</td><td>4</td><td>3</td><td>1</td><td>0</td><td>2</td><td>0</td><td>24</td><td>17</td><td>5</td><td>2</td><td>2</td><td>0</td><td>0</td><td>1</td><td>0</td><td>12</td><td>10</td><td>5</td><td>2</td><td>1</td><td>1</td><td>0</td><td>1</td><td>0</td><td>12</td><td>7</td><td>24</td><td>40</td><td>64</td></tr>
<tr><td>Vs Conference</td><td></td><td>10</td><td>4</td><td>3</td><td>1</td><td>0</td><td>2</td><td>0</td><td>24</td><td>17</td><td>5</td><td>2</td><td>2</td><td>0</td><td>0</td><td>1</td><td>0</td><td>12</td><td>10</td><td>5</td><td>2</td><td>1</td><td>1</td><td>0</td><td>1</td><td>0</td><td>12</td><td>7</td><td>24</td><td>40</td><td>64</td></tr>
<tr><td>Since Last GM Reset</td><td></td><td>30</td><td>9</td><td>11</td><td>2</td><td>1</td><td>5</td><td>2</td><td>61</td><td>56</td><td>15</td><td>5</td><td>6</td><td>0</td><td>0</td><td>3</td><td>1</td><td>33</td><td>30</td><td>15</td><td>4</td><td>5</td><td>2</td><td>1</td><td>2</td><td>1</td><td>28</td><td>26</td><td>61</td><td>102</td><td>163</td></tr>
</tfoot><tbody>
<tr><td>HC Black Eagles Silesia</td><td>10</td><td>10</td><td>3</td><td>5</td><td>1</td><td>0</td><td>0</td><td>1</td><td>16</td><td>18</td><td>5</td><td>2</td><td>3</td><td>0</td><td>0</td><td>0</td><td>0</td><td>9</td><td>9</td><td>5</td><td>1</td><td>2</td><td>1</td><td>0</td><td>0</td><td>1</td><td>7</td><td>9</td><td>16</td><td>30</td><td>46</td></tr>
<tr><td>HC Eagles Moravia</td><td>10</td><td>10</td><td>2</td><td>3</td><td>0</td><td>1</td><td>3</td><td>1</td><td>21</td><td>21</td><td>5</td><td>1</td><td>1</td><td>0</td><td>0</td><td>2</td><td>1</td><td>12</td><td>11</td><td>5</td><td>1</td><td>2</td><td>0</td><td>1</td><td>1</td><td>0</td><td>9</td><td>10</td><td>21</td><td>32</td><td>53</td></tr>
<tr><td>HC Lynx Kladno</td><td>10</td><td>10</td><td>4</td><td>3</td><td>1</td><td>0</td><td>2</td><td>0</td><td>24</td><td>17</td><td>5</td><td>2</td><td>2</td><td>0</td><td>0</td><td>1</td><td>0</td><td>12</td><td>10</td><td>5</td><td>2</td><td>1</td><td>1</td><td>0</td><td>1</td><td>0</td><td>12</td><td>7</td><td>24</td><td>40</td><td>64</td></tr>
</tbody></table>
<table class="basictablesorter STHSTeamStat_Table2"><thead><tr>
<th class="STHSW200">Team</th><th class="STHSW25">Team</th><th class="STHSW25">GP1</th><th class="STHSW25">GP2</th><th class="STHSW25">GP3</th><th class="STHSW25">GP4</th><th class="STHSW25">SHF</th><th class="STHSW25">SP1</th><th class="STHSW25">SP2</th><th class="STHSW25">SP3</th><th class="STHSW25">SP4</th><th class="STHSW25">SHA</th><th class="STHSW25">SHB</th><th class="STHSW25">Pim</th><th class="STHSW25">Hit</th><th class="STHSW25">PPA</th><th class="STHSW25">PPG</th><th class="STHSW35">PP%</th><th class="STHSW25">PKA</th><th class="STHSW25">PK GA</th><th class="STHSW35">PK%</th><th class="STHSW25">PK GF</th><th class="STHSW35">FO% DZ</th><th class="STHSW35">FO% OZ</th><th class="STHSW35">FO% NT</th><th class="STHSW25">PZ DF</th><th class="STHSW25">PZ OF</th><th class="STHSW25">PZ NT</th><th class="STHSW25">PC DF</th><th class="STHSW25">PC OF</th><th class="STHSW25">PC NT</th><th class="STHSW25">SO</th><th class="STHSW25">EG</th></tr></thead>
<tfoot>
<tr><td>Vs Division</td><td>Div</td><td>4</td><td>7</td><td>10</td><td>3</td><td>332</td><td>85</td><td>129</td><td>113</td><td>10</td><td>266</td><td>93</td><td>74</td><td>213</td><td>33</td><td>10</td><td>30.30%</td><td>37</td><td>9</td><td>75.68%</td><td>0</td><td>53.50%</td><td>50.56%</td><td>45.61%</td><td>206</td><td>223</td><td>182</td><td>95</td><td>129</td><td>89</td><td>0</td><td>0</td></tr>
<tr><td>Vs Conference</td><td>Conf</td><td>4</td><td>7</td><td>10</td><td>3</td><td>332</td><td>85</td><td>129</td><td>113</td><td>10</td><td>266</td><td>93</td><td>74</td><td>213</td><td>33</td><td>10</td><td>30.30%</td><td>37</td><td>9</td><td>75.68%</td><td>0</td><td>53.50%</td><td>50.56%</td><td>45.61%</td><td>206</td><td>223</td><td>182</td><td>95</td><td>129</td><td>89</td><td>0</td><td>0</td></tr>
<tr><td>Since Last GM Reset</td><td>GMR</td><td>11</td><td>22</td><td>21</td><td>10</td><td>979</td><td>315</td><td>339</td><td>305</td><td>45</td><td>833</td><td>277</td><td>227</td><td>633</td><td>101</td><td>27</td><td>26.73%</td><td>112</td><td>30</td><td>73.21%</td><td>1</td><td>52.67%</td><td>50.78%</td><td>49.32%</td><td>624</td><td>668</td><td>550</td><td>285</td><td>379</td><td>270</td><td>1</td><td>1</td></tr>
</tfoot><tbody>
<tr><td>HC Black Eagles Silesia</td><td>SBE</td><td>3</td><td>8</td><td>4</td><td>1</td><td>337</td><td>122</td><td>105</td><td>105</td><td>8</td><td>253</td><td>77</td><td>78</td><td>221</td><td>33</td><td>10</td><td>30.30%</td><td>39</td><td>11</td><td>71.79%</td><td>0</td><td>50.91%</td><td>49.41%</td><td>58.68%</td><td>194</td><td>226</td><td>187</td><td>96</td><td>128</td><td>92</td><td>1</td><td>0</td></tr>
<tr><td>HC Eagles Moravia</td><td>MOR</td><td>4</td><td>7</td><td>7</td><td>6</td><td>310</td><td>108</td><td>105</td><td>87</td><td>27</td><td>314</td><td>107</td><td>75</td><td>199</td><td>35</td><td>7</td><td>20.00%</td><td>36</td><td>10</td><td>72.22%</td><td>1</td><td>53.38%</td><td>52.38%</td><td>44.03%</td><td>224</td><td>218</td><td>180</td><td>94</td><td>122</td><td>88</td><td>0</td><td>1</td></tr>
<tr><td>HC Lynx Kladno</td><td>KLD</td><td>4</td><td>7</td><td>10</td><td>3</td><td>332</td><td>85</td><td>129</td><td>113</td><td>10</td><td>266</td><td>93</td><td>74</td><td>213</td><td>33</td><td>10</td><td>30.30%</td><td>37</td><td>9</td><td>75.68%</td><td>0</td><td>53.50%</td><td>50.56%</td><td>45.61%</td><td>206</td><td>223</td><td>182</td><td>95</td><td>129</td><td>89</td><td>0</td><td>0</td></tr>
</tbody></table></div>
<h1 class="TeamStatsVSPro_KLD"><a id="HCLynxKladno">HC Lynx Kladno</a></h1>
<div class="STHSTeamLink">
[ <a href="CELH-ProTeamRoster.php#HCLynxKladno">Pro Team Roster</a> ]
[ <a href="CELH-ProTeamScoring.php#HCLynxKladno">Pro Team Scoring</a> ]
[ <a href="CELH-TeamFinance.php#HCLynxKladno">Team Finance</a> ]
[ <a href="CELH-ProTeamPlayersInfo.php#HCLynxKladno">Pro Team PlayersInfo</a> ]
[ <a href="CELH-ProTeamLines.php#HCLynxKladno">Pro Team Lines</a> ]
[ <a href="CELH-TeamProspects.php#HCLynxKladno">Team Prospects</a> ]
[ <a href="CELH-ProTeamSchedule.php#HCLynxKladno">Pro Team Schedule</a> ]
[ <a href="CELH-ProTeamStats.php#HCLynxKladno">Pro Team Stats</a> ]
[ <a href="CELH-ProTeamStatsVS.php#HCLynxKladno">Pro Team Stats VS</a> ]
[ <a href="CELH-TeamInjurySuspension.php#HCLynxKladno">Team Injury Suspension</a> ]
[ <a href="CELH-TeamHistory.php#HCLynxKladno">Team History</a> ]
[ <a href="CELH-TeamRecords.php#HCLynxKladno">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_HCLynxKladno');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_HCLynxKladno" style="display: block;">
<table class="basictablesorter STHSTeamStat_Table1"><thead><tr>
<td colspan="2"></td><td colspan="9">Overall</td><td colspan="9">Home</td><td colspan="9">Visitor</td><td colspan="3"></td></tr><tr>
<th class="STHSW200">Team</th><th class="STHSW25">TGP</th><th class="STHSW25">GP</th><th class="STHSW25">W</th><th class="STHSW25">L</th><th class="STHSW25">OTW</th><th class="STHSW25">OTL</th><th class="STHSW25">SOW</th><th class="STHSW25">SOL</th><th class="STHSW25">GF</th><th class="STHSW25">GA</th><th class="STHSW25">GP</th><th class="STHSW25">W</th><th class="STHSW25">L</th><th class="STHSW25">OTW</th><th class="STHSW25">OTL</th><th class="STHSW25">SOW</th><th class="STHSW25">SOL</th><th class="STHSW25">GF</th><th class="STHSW25">GA</th><th class="STHSW25">GP</th><th class="STHSW25">W</th><th class="STHSW25">L</th><th class="STHSW25">OTW</th><th class="STHSW25">OTL</th><th class="STHSW25">SOW</th><th class="STHSW25">SOL</th><th class="STHSW25">GF</th><th class="STHSW25">GA</th><th class="STHSW25">G</th><th class="STHSW25">A</th><th class="STHSW25">P</th></tr></thead>
<tfoot>
<tr><td>Vs Division</td><td></td><td>10</td><td>3</td><td>4</td><td>0</td><td>1</td><td>0</td><td>2</td><td>17</td><td>24</td><td>5</td><td>1</td><td>2</td><td>0</td><td>1</td><td>0</td><td>1</td><td>7</td><td>12</td><td>5</td><td>2</td><td>2</td><td>0</td><td>0</td><td>0</td><td>1</td><td>10</td><td>12</td><td>17</td><td>31</td><td>48</td></tr>
<tr><td>Vs Conference</td><td></td><td>10</td><td>3</td><td>4</td><td>0</td><td>1</td><td>0</td><td>2</td><td>17</td><td>24</td><td>5</td><td>1</td><td>2</td><td>0</td><td>1</td><td>0</td><td>1</td><td>7</td><td>12</td><td>5</td><td>2</td><td>2</td><td>0</td><td>0</td><td>0</td><td>1</td><td>10</td><td>12</td><td>17</td><td>31</td><td>48</td></tr>
<tr><td>Since Last GM Reset</td><td></td><td>30</td><td>7</td><td>15</td><td>2</td><td>3</td><td>1</td><td>2</td><td>49</td><td>64</td><td>15</td><td>3</td><td>7</td><td>1</td><td>2</td><td>1</td><td>1</td><td>24</td><td>30</td><td>15</td><td>4</td><td>8</td><td>1</td><td>1</td><td>0</td><td>1</td><td>25</td><td>34</td><td>49</td><td>80</td><td>129</td></tr>
</tfoot><tbody>
<tr><td>HC Black Eagles Silesia</td><td>10</td><td>10</td><td>3</td><td>5</td><td>1</td><td>1</td><td>0</td><td>0</td><td>15</td><td>15</td><td>5</td><td>2</td><td>3</td><td>0</td><td>0</td><td>0</td><td>0</td><td>8</td><td>7</td><td>5</td><td>1</td><td>2</td><td>1</td><td>1</td><td>0</td><td>0</td><td>7</td><td>8</td><td>15</td><td>25</td><td>40</td></tr>
<tr><td>HC Eagles Moravia</td><td>10</td><td>10</td><td>1</td><td>6</td><td>1</td><td>1</td><td>1</td><td>0</td><td>17</td><td>25</td><td>5</td><td>0</td><td>2</td><td>1</td><td>1</td><td>1</td><td>0</td><td>9</td><td>11</td><td>5</td><td>1</td><td>4</td><td>0</td><td>0</td><td>0</td><td>0</td><td>8</td><td>14</td><td>17</td><td>24</td><td>41</td></tr>
<tr><td>HC Lions Bohemia</td><td>10</td><td>10</td><td>3</td><td>4</td><td>0</td><td>1</td><td>0</td><td>2</td><td>17</td><td>24</td><td>5</td><td>1</td><td>2</td><td>0</td><td>1</td><td>0</td><td>1</td><td>7</td><td>12</td><td>5</td><td>2</td><td>2</td><td>0</td><td>0</td><td>0</td><td>1</td><td>10</td><td>12</td><td>17</td><td>31</td><td>48</td></tr>
</tbody></table>
<table class="basictablesorter STHSTeamStat_Table2"><thead><tr>
<th class="STHSW200">Team</th><th class="STHSW25">Team</th><th class="STHSW25">GP1</th><th class="STHSW25">GP2</th><th class="STHSW25">GP3</th><th class="STHSW25">GP4</th><th class="STHSW25">SHF</th><th class="STHSW25">SP1</th><th class="STHSW25">SP2</th><th class="STHSW25">SP3</th><th class="STHSW25">SP4</th><th class="STHSW25">SHA</th><th class="STHSW25">SHB</th><th class="STHSW25">Pim</th><th class="STHSW25">Hit</th><th class="STHSW25">PPA</th><th class="STHSW25">PPG</th><th class="STHSW35">PP%</th><th class="STHSW25">PKA</th><th class="STHSW25">PK GA</th><th class="STHSW35">PK%</th><th class="STHSW25">PK GF</th><th class="STHSW35">FO% DZ</th><th class="STHSW35">FO% OZ</th><th class="STHSW35">FO% NT</th><th class="STHSW25">PZ DF</th><th class="STHSW25">PZ OF</th><th class="STHSW25">PZ NT</th><th class="STHSW25">PC DF</th><th class="STHSW25">PC OF</th><th class="STHSW25">PC NT</th><th class="STHSW25">SO</th><th class="STHSW25">EG</th></tr></thead>
<tfoot>
<tr><td>Vs Division</td><td>Div</td><td>4</td><td>6</td><td>7</td><td>0</td><td>266</td><td>79</td><td>92</td><td>91</td><td>10</td><td>332</td><td>108</td><td>66</td><td>249</td><td>37</td><td>9</td><td>24.32%</td><td>33</td><td>10</td><td>69.70%</td><td>0</td><td>50.19%</td><td>47.74%</td><td>57.02%</td><td>223</td><td>206</td><td>182</td><td>94</td><td>111</td><td>92</td><td>0</td><td>0</td></tr>
<tr><td>Vs Conference</td><td>Conf</td><td>4</td><td>6</td><td>7</td><td>0</td><td>266</td><td>79</td><td>92</td><td>91</td><td>10</td><td>332</td><td>108</td><td>66</td><td>249</td><td>37</td><td>9</td><td>24.32%</td><td>33</td><td>10</td><td>69.70%</td><td>0</td><td>50.19%</td><td>47.74%</td><td>57.02%</td><td>223</td><td>206</td><td>182</td><td>94</td><td>111</td><td>92</td><td>0</td><td>0</td></tr>
<tr><td>Since Last GM Reset</td><td>GMR</td><td>12</td><td>13</td><td>21</td><td>3</td><td>770</td><td>235</td><td>250</td><td>268</td><td>25</td><td>906</td><td>303</td><td>208</td><td>739</td><td>101</td><td>21</td><td>20.79%</td><td>103</td><td>30</td><td>70.87%</td><td>0</td><td>48.40%</td><td>50.45%</td><td>51.14%</td><td>650</td><td>622</td><td>558</td><td>286</td><td>330</td><td>278</td><td>2</td><td>1</td></tr>
</tfoot><tbody>
<tr><td>HC Black Eagles Silesia</td><td>SBE</td><td>4</td><td>5</td><td>5</td><td>1</td><td>245</td><td>74</td><td>87</td><td>78</td><td>6</td><td>238</td><td>86</td><td>66</td><td>273</td><td>32</td><td>5</td><td>15.63%</td><td>32</td><td>6</td><td>81.25%</td><td>0</td><td>43.24%</td><td>48.54%</td><td>49.12%</td><td>194</td><td>216</td><td>195</td><td>96</td><td>112</td><td>97</td><td>2</td><td>0</td></tr>
<tr><td>HC Eagles Moravia</td><td>MOR</td><td>4</td><td>2</td><td>9</td><td>2</td><td>259</td><td>82</td><td>71</td><td>99</td><td>9</td><td>336</td><td>109</td><td>76</td><td>217</td><td>32</td><td>7</td><td>21.88%</td><td>38</td><td>14</td><td>63.16%</td><td>0</td><td>50.96%</td><td>55.20%</td><td>47.58%</td><td>232</td><td>201</td><td>180</td><td>95</td><td>107</td><td>89</td><td>0</td><td>1</td></tr>
<tr><td>HC Lions Bohemia</td><td>BOH</td><td>4</td><td>6</td><td>7</td><td>0</td><td>266</td><td>79</td><td>92</td><td>91</td><td>10</td><td>332</td><td>108</td><td>66</td><td>249</td><td>37</td><td>9</td><td>24.32%</td><td>33</td><td>10</td><td>69.70%</td><td>0</td><td>50.19%</td><td>47.74%</td><td>57.02%</td><td>223</td><td>206</td><td>182</td><td>94</td><td>111</td><td>92</td><td>0</td><td>0</td></tr>
</tbody></table></div>
<?php include "Footer.php";?>
