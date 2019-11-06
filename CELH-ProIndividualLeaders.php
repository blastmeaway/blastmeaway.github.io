<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>CELH - Pro Individual Leaders</title>
<script src="CELH.js"></script>
<meta name="author" content="Simon Tremblay, sths.simont.info" />
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Decription" content="Marcus Winston - STHS - Version : 3.1.9.9 - CELH-STHS.db - CELH-STHSCareerStat.db"/>
<link href="STHSMain.css" rel="stylesheet" type="text/css" />
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
<b>Minimum Games Played: 15</b><br />
<script>$(function(){$("table").basictablesorter()});</script>
<table class="STHSTableFullW">
<tr><td colspan="3"><h2 class="STHSProIndividualLeader_Players">Players</h2></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Goals</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>G</th></tr></thead>
<tr><td>1</td><td>Marian Potoczny (MOR)</td><td>30</td><td>14</td></tr>
<tr><td>2</td><td>Dickie Pecker (BOH)</td><td>30</td><td>14</td></tr>
<tr><td>3</td><td>Merit Csonka (KLD)</td><td>30</td><td>13</td></tr>
<tr><td>4</td><td>Ondrej Ravchitikov (MOR)</td><td>30</td><td>13</td></tr>
<tr><td>5</td><td>Piotr Czerkawski (SBE)</td><td>30</td><td>10</td></tr>
<tr><td>6</td><td>Walter White (BOH)</td><td>30</td><td>9</td></tr>
<tr><td>7</td><td>Krysztof Kowalski (SBE)</td><td>30</td><td>8</td></tr>
<tr><td>8</td><td>Patrik Satan (KLD)</td><td>30</td><td>8</td></tr>
<tr><td>9</td><td>Slappy McDoodle (MOR)</td><td>30</td><td>7</td></tr>
<tr><td>10</td><td>Jakub Trocheck (SBE)</td><td>30</td><td>7</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Assists</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>A</th></tr></thead>
<tr><td>1</td><td>Ondrej Ravchitikov (MOR)</td><td>30</td><td>28</td></tr>
<tr><td>2</td><td>Walter White (BOH)</td><td>30</td><td>27</td></tr>
<tr><td>3</td><td>Zalleras Szlerchek (SBE)</td><td>30</td><td>18</td></tr>
<tr><td>4</td><td>Sachimo Zoidberg (MOR)</td><td>30</td><td>18</td></tr>
<tr><td>5</td><td>DeMaricus Smyth (BOH)</td><td>30</td><td>17</td></tr>
<tr><td>6</td><td>Marian Potoczny (MOR)</td><td>30</td><td>16</td></tr>
<tr><td>7</td><td>Schnitinfritz Jagr (KLD)</td><td>30</td><td>16</td></tr>
<tr><td>8</td><td>Slappy McDoodle (MOR)</td><td>30</td><td>16</td></tr>
<tr><td>9</td><td>Piotr Czerkawski (SBE)</td><td>30</td><td>14</td></tr>
<tr><td>10</td><td>Dickie Pecker (BOH)</td><td>30</td><td>14</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Shots</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>SHT</th></tr></thead>
<tr><td>1</td><td>Ondrej Ravchitikov (MOR)</td><td>30</td><td>161</td></tr>
<tr><td>2</td><td>Dickie Pecker (BOH)</td><td>30</td><td>150</td></tr>
<tr><td>3</td><td>Merit Csonka (KLD)</td><td>30</td><td>142</td></tr>
<tr><td>4</td><td>Walter White (BOH)</td><td>30</td><td>123</td></tr>
<tr><td>5</td><td>Marian Potoczny (MOR)</td><td>30</td><td>113</td></tr>
<tr><td>6</td><td>Vratislav Zbynek (SBE)</td><td>30</td><td>109</td></tr>
<tr><td>7</td><td>Matej Stransky (BOH)</td><td>30</td><td>103</td></tr>
<tr><td>8</td><td>Piotr Czerkawski (SBE)</td><td>30</td><td>98</td></tr>
<tr><td>9</td><td>Slappy McDoodle (MOR)</td><td>30</td><td>98</td></tr>
<tr><td>10</td><td>Zalleras Szlerchek (SBE)</td><td>30</td><td>93</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Shots %</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>SHT %</th></tr></thead>
<tr><td>1</td><td>Aviad Ratzon (MOR)</td><td>30</td><td>13.95%</td></tr>
<tr><td>2</td><td>Alex Winters (KLD)</td><td>30</td><td>12.90%</td></tr>
<tr><td>3</td><td>Marian Potoczny (MOR)</td><td>30</td><td>12.39%</td></tr>
<tr><td>4</td><td>Zivan Zidek (MOR)</td><td>30</td><td>11.11%</td></tr>
<tr><td>5</td><td>Krysztof Kowalski (SBE)</td><td>30</td><td>10.67%</td></tr>
<tr><td>6</td><td>Luke Thomason (BOH)</td><td>30</td><td>10.20%</td></tr>
<tr><td>7</td><td>Piotr Czerkawski (SBE)</td><td>30</td><td>10.20%</td></tr>
<tr><td>8</td><td>Patrik Satan (KLD)</td><td>30</td><td>9.64%</td></tr>
<tr><td>9</td><td>Dickie Pecker (BOH)</td><td>30</td><td>9.33%</td></tr>
<tr><td>10</td><td>Cash Savage (KLD)</td><td>30</td><td>9.23%</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Centers</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PTS</th></tr></thead>
<tr><td>1</td><td>Marian Potoczny (MOR)</td><td>30</td><td>14-16-30</td></tr>
<tr><td>2</td><td>Dickie Pecker (BOH)</td><td>30</td><td>14-14-28</td></tr>
<tr><td>3</td><td>Slappy McDoodle (MOR)</td><td>30</td><td>7-16-23</td></tr>
<tr><td>4</td><td>Zalleras Szlerchek (SBE)</td><td>30</td><td>5-18-23</td></tr>
<tr><td>5</td><td>DeMaricus Smyth (BOH)</td><td>30</td><td>3-17-20</td></tr>
<tr><td>6</td><td>Schnitinfritz Jagr (KLD)</td><td>30</td><td>3-16-19</td></tr>
<tr><td>7</td><td>Krysztof Kowalski (SBE)</td><td>30</td><td>8-10-18</td></tr>
<tr><td>8</td><td>Aviad Ratzon (MOR)</td><td>30</td><td>6-10-16</td></tr>
<tr><td>9</td><td>Patrik Satan (KLD)</td><td>30</td><td>8-7-15</td></tr>
<tr><td>10</td><td>Zivan Zidek (MOR)</td><td>30</td><td>6-8-14</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Left Wings</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PTS</th></tr></thead>
<tr><td>1</td><td>Marian Potoczny (MOR)</td><td>30</td><td>14-16-30</td></tr>
<tr><td>2</td><td>Dickie Pecker (BOH)</td><td>30</td><td>14-14-28</td></tr>
<tr><td>3</td><td>Piotr Czerkawski (SBE)</td><td>30</td><td>10-14-24</td></tr>
<tr><td>4</td><td>Slappy McDoodle (MOR)</td><td>30</td><td>7-16-23</td></tr>
<tr><td>5</td><td>Zalleras Szlerchek (SBE)</td><td>30</td><td>5-18-23</td></tr>
<tr><td>6</td><td>Merit Csonka (KLD)</td><td>30</td><td>13-9-22</td></tr>
<tr><td>7</td><td>DeMaricus Smyth (BOH)</td><td>30</td><td>3-17-20</td></tr>
<tr><td>8</td><td>Schnitinfritz Jagr (KLD)</td><td>30</td><td>3-16-19</td></tr>
<tr><td>9</td><td>Krysztof Kowalski (SBE)</td><td>30</td><td>8-10-18</td></tr>
<tr><td>10</td><td>Aviad Ratzon (MOR)</td><td>30</td><td>6-10-16</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Right Wings</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PTS</th></tr></thead>
<tr><td>1</td><td>Marian Potoczny (MOR)</td><td>30</td><td>14-16-30</td></tr>
<tr><td>2</td><td>Dickie Pecker (BOH)</td><td>30</td><td>14-14-28</td></tr>
<tr><td>3</td><td>Piotr Czerkawski (SBE)</td><td>30</td><td>10-14-24</td></tr>
<tr><td>4</td><td>Slappy McDoodle (MOR)</td><td>30</td><td>7-16-23</td></tr>
<tr><td>5</td><td>Zalleras Szlerchek (SBE)</td><td>30</td><td>5-18-23</td></tr>
<tr><td>6</td><td>Merit Csonka (KLD)</td><td>30</td><td>13-9-22</td></tr>
<tr><td>7</td><td>DeMaricus Smyth (BOH)</td><td>30</td><td>3-17-20</td></tr>
<tr><td>8</td><td>Schnitinfritz Jagr (KLD)</td><td>30</td><td>3-16-19</td></tr>
<tr><td>9</td><td>Krysztof Kowalski (SBE)</td><td>30</td><td>8-10-18</td></tr>
<tr><td>10</td><td>Aviad Ratzon (MOR)</td><td>30</td><td>6-10-16</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Defenseman</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PTS</th></tr></thead>
<tr><td>1</td><td>Ondrej Ravchitikov (MOR)</td><td>30</td><td>13-28-41</td></tr>
<tr><td>2</td><td>Walter White (BOH)</td><td>30</td><td>9-27-36</td></tr>
<tr><td>3</td><td>Sachimo Zoidberg (MOR)</td><td>30</td><td>7-18-25</td></tr>
<tr><td>4</td><td>Tomas Pylon (KLD)</td><td>30</td><td>1-13-14</td></tr>
<tr><td>5</td><td>Jakub Trocheck (SBE)</td><td>30</td><td>7-6-13</td></tr>
<tr><td>6</td><td>Pierre-Luc Laflamme (BOH)</td><td>30</td><td>4-5-9</td></tr>
<tr><td>7</td><td>Barret McCarthy (KLD)</td><td>30</td><td>2-6-8</td></tr>
<tr><td>8</td><td>Charlie Schieck (SBE)</td><td>30</td><td>3-4-7</td></tr>
<tr><td>9</td><td>Brady McIntyre (MOR)</td><td>30</td><td>1-6-7</td></tr>
<tr><td>10</td><td>Samee Iqbal (SBE)</td><td>30</td><td>1-5-6</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Points per 20 Minutes</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>P/20</th></tr></thead>
<tr><td>1</td><td>Ondrej Ravchitikov (MOR)</td><td>30</td><td>0.97</td></tr>
<tr><td>2</td><td>Dickie Pecker (BOH)</td><td>30</td><td>0.88</td></tr>
<tr><td>3</td><td>Marian Potoczny (MOR)</td><td>30</td><td>0.88</td></tr>
<tr><td>4</td><td>Walter White (BOH)</td><td>30</td><td>0.84</td></tr>
<tr><td>5</td><td>Slappy McDoodle (MOR)</td><td>30</td><td>0.67</td></tr>
<tr><td>6</td><td>Piotr Czerkawski (SBE)</td><td>30</td><td>0.63</td></tr>
<tr><td>7</td><td>Sachimo Zoidberg (MOR)</td><td>30</td><td>0.60</td></tr>
<tr><td>8</td><td>Schnitinfritz Jagr (KLD)</td><td>30</td><td>0.59</td></tr>
<tr><td>9</td><td>Zivan Zidek (MOR)</td><td>30</td><td>0.58</td></tr>
<tr><td>10</td><td>Krysztof Kowalski (SBE)</td><td>30</td><td>0.58</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Face-Off %</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>FO %</th></tr></thead>
<tr><td>1</td><td>Piotr Czerkawski (SBE)</td><td>30</td><td>56.21%</td></tr>
<tr><td>2</td><td>DeMaricus Smyth (BOH)</td><td>30</td><td>54.95%</td></tr>
<tr><td>3</td><td>Schnitinfritz Jagr (KLD)</td><td>30</td><td>52.54%</td></tr>
<tr><td>4</td><td>Zalleras Szlerchek (SBE)</td><td>30</td><td>52.20%</td></tr>
<tr><td>5</td><td>Slappy McDoodle (MOR)</td><td>30</td><td>52.18%</td></tr>
<tr><td>6</td><td>Shouta Aizawa (KLD)</td><td>30</td><td>50.54%</td></tr>
<tr><td>7</td><td>Michael Scarn (KLD)</td><td>30</td><td>50.52%</td></tr>
<tr><td>8</td><td>Krysztof Kowalski (SBE)</td><td>30</td><td>49.28%</td></tr>
<tr><td>9</td><td>Travis Jeziak (BOH)</td><td>30</td><td>49.23%</td></tr>
<tr><td>10</td><td>Mikhail Kladno (MOR)</td><td>30</td><td>47.49%</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Plus/Minus</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>+/-</th></tr></thead>
<tr><td>1</td><td>Marian Potoczny (MOR)</td><td>30</td><td>7</td></tr>
<tr><td>2</td><td>Aviad Ratzon (MOR)</td><td>30</td><td>6</td></tr>
<tr><td>3</td><td>Slappy McDoodle (MOR)</td><td>30</td><td>6</td></tr>
<tr><td>4</td><td>Alexander Zajac (SBE)</td><td>30</td><td>5</td></tr>
<tr><td>5</td><td>Przemyslaw Brzeszczyczkiewicz (SBE)</td><td>30</td><td>5</td></tr>
<tr><td>6</td><td>Matej Stransky (BOH)</td><td>30</td><td>5</td></tr>
<tr><td>7</td><td>Aron Hernadivic (SBE)</td><td>30</td><td>4</td></tr>
<tr><td>8</td><td>Pierre-Luc Laflamme (BOH)</td><td>30</td><td>4</td></tr>
<tr><td>9</td><td>Travis Jeziak (BOH)</td><td>30</td><td>4</td></tr>
<tr><td>10</td><td>Walter White (BOH)</td><td>30</td><td>4</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Penalty Minutes</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PIM</th></tr></thead>
<tr><td>1</td><td>Brady McIntyre (MOR)</td><td>30</td><td>30</td></tr>
<tr><td>2</td><td>Jakub Trocheck (SBE)</td><td>30</td><td>28</td></tr>
<tr><td>3</td><td>DeMaricus Smyth (BOH)</td><td>30</td><td>26</td></tr>
<tr><td>4</td><td>Matej Stransky (BOH)</td><td>30</td><td>26</td></tr>
<tr><td>5</td><td>Tokek Takshak (BOH)</td><td>30</td><td>25</td></tr>
<tr><td>6</td><td>Marian Potoczny (MOR)</td><td>30</td><td>24</td></tr>
<tr><td>7</td><td>Pierre-Luc Laflamme (BOH)</td><td>30</td><td>24</td></tr>
<tr><td>8</td><td>Schnitinfritz Jagr (KLD)</td><td>30</td><td>24</td></tr>
<tr><td>9</td><td>Sachimo Zoidberg (MOR)</td><td>30</td><td>24</td></tr>
<tr><td>10</td><td>Ty Justice (MOR)</td><td>30</td><td>22</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Shots Blocked</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>SB</th></tr></thead>
<tr><td>1</td><td>Jakub Trocheck (SBE)</td><td>30</td><td>58</td></tr>
<tr><td>2</td><td>Barret McCarthy (KLD)</td><td>30</td><td>47</td></tr>
<tr><td>3</td><td>Pierre-Luc Laflamme (BOH)</td><td>30</td><td>46</td></tr>
<tr><td>4</td><td>Walter White (BOH)</td><td>30</td><td>44</td></tr>
<tr><td>5</td><td>Brady McIntyre (MOR)</td><td>30</td><td>43</td></tr>
<tr><td>6</td><td>Tomas Pylon (KLD)</td><td>30</td><td>41</td></tr>
<tr><td>7</td><td>Sachimo Zoidberg (MOR)</td><td>30</td><td>39</td></tr>
<tr><td>8</td><td>Troy McClure III (KLD)</td><td>30</td><td>34</td></tr>
<tr><td>9</td><td>Ondrej Ravchitikov (MOR)</td><td>30</td><td>33</td></tr>
<tr><td>10</td><td>Charlie Schieck (SBE)</td><td>30</td><td>32</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Rookies</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PTS</th></tr></thead>
<tr><td>1</td><td>Ondrej Ravchitikov (MOR)</td><td>30</td><td>13-28-41</td></tr>
<tr><td>2</td><td>Walter White (BOH)</td><td>30</td><td>9-27-36</td></tr>
<tr><td>3</td><td>Marian Potoczny (MOR)</td><td>30</td><td>14-16-30</td></tr>
<tr><td>4</td><td>Dickie Pecker (BOH)</td><td>30</td><td>14-14-28</td></tr>
<tr><td>5</td><td>Sachimo Zoidberg (MOR)</td><td>30</td><td>7-18-25</td></tr>
<tr><td>6</td><td>Piotr Czerkawski (SBE)</td><td>30</td><td>10-14-24</td></tr>
<tr><td>7</td><td>Slappy McDoodle (MOR)</td><td>30</td><td>7-16-23</td></tr>
<tr><td>8</td><td>Zalleras Szlerchek (SBE)</td><td>30</td><td>5-18-23</td></tr>
<tr><td>9</td><td>Merit Csonka (KLD)</td><td>30</td><td>13-9-22</td></tr>
<tr><td>10</td><td>DeMaricus Smyth (BOH)</td><td>30</td><td>3-17-20</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Hits</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>HIT</th></tr></thead>
<tr><td>1</td><td>Merit Csonka (KLD)</td><td>30</td><td>92</td></tr>
<tr><td>2</td><td>Walter White (BOH)</td><td>30</td><td>89</td></tr>
<tr><td>3</td><td>Sachimo Zoidberg (MOR)</td><td>30</td><td>85</td></tr>
<tr><td>4</td><td>Troy McClure III (KLD)</td><td>30</td><td>73</td></tr>
<tr><td>5</td><td>DeMaricus Smyth (BOH)</td><td>30</td><td>68</td></tr>
<tr><td>6</td><td>Piotr Czerkawski (SBE)</td><td>30</td><td>64</td></tr>
<tr><td>7</td><td>Zalleras Szlerchek (SBE)</td><td>30</td><td>64</td></tr>
<tr><td>8</td><td>Slappy McDoodle (MOR)</td><td>30</td><td>62</td></tr>
<tr><td>9</td><td>Cash Savage (KLD)</td><td>30</td><td>61</td></tr>
<tr><td>10</td><td>Pierre-Luc Laflamme (BOH)</td><td>30</td><td>59</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Power Play Goals</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PP</th></tr></thead>
<tr><td>1</td><td>Walter White (BOH)</td><td>30</td><td>9</td></tr>
<tr><td>2</td><td>Ondrej Ravchitikov (MOR)</td><td>30</td><td>9</td></tr>
<tr><td>3</td><td>Merit Csonka (KLD)</td><td>30</td><td>8</td></tr>
<tr><td>4</td><td>Dickie Pecker (BOH)</td><td>30</td><td>7</td></tr>
<tr><td>5</td><td>Marian Potoczny (MOR)</td><td>30</td><td>5</td></tr>
<tr><td>6</td><td>Piotr Czerkawski (SBE)</td><td>30</td><td>5</td></tr>
<tr><td>7</td><td>Zivan Zidek (MOR)</td><td>30</td><td>5</td></tr>
<tr><td>8</td><td>Jakub Trocheck (SBE)</td><td>30</td><td>5</td></tr>
<tr><td>9</td><td>Patrik Satan (KLD)</td><td>30</td><td>5</td></tr>
<tr><td>10</td><td>Sachimo Zoidberg (MOR)</td><td>30</td><td>5</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Short Handed Goals</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>SH</th></tr></thead>
<tr><td>1</td><td>Dickie Pecker (BOH)</td><td>30</td><td>1</td></tr>
<tr><td>2</td><td>Krysztof Kowalski (SBE)</td><td>30</td><td>1</td></tr>
<tr><td>3</td><td>Ondrej Ravchitikov (MOR)</td><td>30</td><td>1</td></tr>
<tr><td>4</td><td>Sachimo Zoidberg (MOR)</td><td>30</td><td>1</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Game Winning Goals</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>GW</th></tr></thead>
<tr><td>1</td><td>Travis Jeziak (BOH)</td><td>30</td><td>5</td></tr>
<tr><td>2</td><td>Krysztof Kowalski (SBE)</td><td>30</td><td>4</td></tr>
<tr><td>3</td><td>Aviad Ratzon (MOR)</td><td>30</td><td>3</td></tr>
<tr><td>4</td><td>Ondrej Ravchitikov (MOR)</td><td>30</td><td>3</td></tr>
<tr><td>5</td><td>Sachimo Zoidberg (MOR)</td><td>30</td><td>3</td></tr>
<tr><td>6</td><td>Alex Winters (KLD)</td><td>30</td><td>2</td></tr>
<tr><td>7</td><td>Alexander Zajac (SBE)</td><td>30</td><td>2</td></tr>
<tr><td>8</td><td>Barret McCarthy (KLD)</td><td>30</td><td>2</td></tr>
<tr><td>9</td><td>Charlie Schieck (SBE)</td><td>30</td><td>2</td></tr>
<tr><td>10</td><td>Piotr Czerkawski (SBE)</td><td>30</td><td>2</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Game Tying Goals</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>GT</th></tr></thead>
<tr><td>1</td><td>Pierre-Luc Laflamme (BOH)</td><td>30</td><td>2</td></tr>
<tr><td>2</td><td>Petr Kolesnikovs (BOH)</td><td>30</td><td>2</td></tr>
<tr><td>3</td><td>Ondrej Ravchitikov (MOR)</td><td>30</td><td>2</td></tr>
<tr><td>4</td><td>Sachimo Zoidberg (MOR)</td><td>30</td><td>2</td></tr>
<tr><td>5</td><td>Dionyz Vyskoc (MOR)</td><td>30</td><td>1</td></tr>
<tr><td>6</td><td>Marian Potoczny (MOR)</td><td>30</td><td>1</td></tr>
<tr><td>7</td><td>Petr Mikulak (BOH)</td><td>30</td><td>1</td></tr>
<tr><td>8</td><td>Piotr Czerkawski (SBE)</td><td>30</td><td>1</td></tr>
<tr><td>9</td><td>Przemyslaw Brzeszczyczkiewicz (SBE)</td><td>30</td><td>1</td></tr>
<tr><td>10</td><td>Schnitinfritz Jagr (KLD)</td><td>30</td><td>1</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Empty Net Goals</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>ENG</th></tr></thead>
<tr><td>1</td><td>Dickie Pecker (BOH)</td><td>30</td><td>1</td></tr>
<tr><td>2</td><td>Merit Csonka (KLD)</td><td>30</td><td>1</td></tr>
<tr><td>3</td><td>Ondrej Ravchitikov (MOR)</td><td>30</td><td>1</td></tr>
<tr><td>4</td><td>Sachimo Zoidberg (MOR)</td><td>30</td><td>1</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Minutes Played</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>MP</th></tr></thead>
<tr><td>1</td><td>Tomas Pylon (KLD)</td><td>30</td><td>879</td></tr>
<tr><td>2</td><td>Walter White (BOH)</td><td>30</td><td>852</td></tr>
<tr><td>3</td><td>Pierre-Luc Laflamme (BOH)</td><td>30</td><td>844</td></tr>
<tr><td>4</td><td>Ondrej Ravchitikov (MOR)</td><td>30</td><td>843</td></tr>
<tr><td>5</td><td>Sachimo Zoidberg (MOR)</td><td>30</td><td>831</td></tr>
<tr><td>6</td><td>Jakub Trocheck (SBE)</td><td>30</td><td>831</td></tr>
<tr><td>7</td><td>Zalleras Szlerchek (SBE)</td><td>30</td><td>792</td></tr>
<tr><td>8</td><td>Barret McCarthy (KLD)</td><td>30</td><td>783</td></tr>
<tr><td>9</td><td>Merit Csonka (KLD)</td><td>30</td><td>771</td></tr>
<tr><td>10</td><td>Troy McClure III (KLD)</td><td>30</td><td>760</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Hat Tricks</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>HT</th></tr></thead>
<tr><td>1</td><td>Ondrej Ravchitikov (MOR)</td><td>30</td><td>1</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Goal Scoring Streak</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>GS</th></tr></thead>
<tr><td>1</td><td>Dickie Pecker (BOH)</td><td>30</td><td>3</td></tr>
<tr><td>2</td><td>Marian Potoczny (MOR)</td><td>30</td><td>2</td></tr>
<tr><td>3</td><td>Jakub Trocheck (SBE)</td><td>30</td><td>2</td></tr>
<tr><td>4</td><td>Michael Scarn (KLD)</td><td>30</td><td>1</td></tr>
<tr><td>5</td><td>Piotr Czerkawski (SBE)</td><td>30</td><td>1</td></tr>
<tr><td>6</td><td>Troy McClure III (KLD)</td><td>30</td><td>1</td></tr>
<tr><td>7</td><td>Tomas Pylon (KLD)</td><td>30</td><td>1</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Point Scoring Streak</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PS</th></tr></thead>
<tr><td>1</td><td>Dickie Pecker (BOH)</td><td>30</td><td>13</td></tr>
<tr><td>2</td><td>Ondrej Ravchitikov (MOR)</td><td>30</td><td>7</td></tr>
<tr><td>3</td><td>Zalleras Szlerchek (SBE)</td><td>30</td><td>6</td></tr>
<tr><td>4</td><td>Michael Scarn (KLD)</td><td>30</td><td>3</td></tr>
<tr><td>5</td><td>DeMaricus Smyth (BOH)</td><td>30</td><td>2</td></tr>
<tr><td>6</td><td>Marian Potoczny (MOR)</td><td>30</td><td>2</td></tr>
<tr><td>7</td><td>Schnitinfritz Jagr (KLD)</td><td>30</td><td>2</td></tr>
<tr><td>8</td><td>Jakub Trocheck (SBE)</td><td>30</td><td>2</td></tr>
<tr><td>9</td><td>Tomas Pylon (KLD)</td><td>30</td><td>2</td></tr>
<tr><td>10</td><td>Luke Thomason (BOH)</td><td>30</td><td>1</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Hits Taken</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>HTT</th></tr></thead>
<tr><td>1</td><td>Zalleras Szlerchek (SBE)</td><td>30</td><td>86</td></tr>
<tr><td>2</td><td>DeMaricus Smyth (BOH)</td><td>30</td><td>83</td></tr>
<tr><td>3</td><td>Jakub Trocheck (SBE)</td><td>30</td><td>68</td></tr>
<tr><td>4</td><td>Ondrej Ravchitikov (MOR)</td><td>30</td><td>67</td></tr>
<tr><td>5</td><td>Krysztof Kowalski (SBE)</td><td>30</td><td>64</td></tr>
<tr><td>6</td><td>Schnitinfritz Jagr (KLD)</td><td>30</td><td>61</td></tr>
<tr><td>7</td><td>Piotr Czerkawski (SBE)</td><td>30</td><td>60</td></tr>
<tr><td>8</td><td>Walter White (BOH)</td><td>30</td><td>60</td></tr>
<tr><td>9</td><td>Merit Csonka (KLD)</td><td>30</td><td>56</td></tr>
<tr><td>10</td><td>Slappy McDoodle (MOR)</td><td>30</td><td>54</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Penalty Shots</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PSG </th></tr></thead>
<tr><td>1</td><td>DeMaricus Smyth (BOH)</td><td>30</td><td>2</td></tr>
<tr><td>2</td><td>Luke Thomason (BOH)</td><td>30</td><td>2</td></tr>
<tr><td>3</td><td>Slappy McDoodle (MOR)</td><td>30</td><td>2</td></tr>
<tr><td>4</td><td>Zalleras Szlerchek (SBE)</td><td>30</td><td>2</td></tr>
<tr><td>5</td><td>Aviad Ratzon (MOR)</td><td>30</td><td>1</td></tr>
<tr><td>6</td><td>Bernik Vrzala (BOH)</td><td>30</td><td>1</td></tr>
<tr><td>7</td><td>Dionyz Vyskoc (MOR)</td><td>30</td><td>1</td></tr>
<tr><td>8</td><td>Samee Iqbal (SBE)</td><td>30</td><td>1</td></tr>
<tr><td>9</td><td>Travis Jeziak (BOH)</td><td>30</td><td>1</td></tr>
<tr><td>10</td><td>Dickie Pecker (BOH)</td><td>30</td><td>1</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Give Away</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>GA  </th></tr></thead>
<tr><td>1</td><td>Marian Potoczny (MOR)</td><td>30</td><td>44</td></tr>
<tr><td>2</td><td>Zalleras Szlerchek (SBE)</td><td>30</td><td>43</td></tr>
<tr><td>3</td><td>Merit Csonka (KLD)</td><td>30</td><td>43</td></tr>
<tr><td>4</td><td>Ondrej Ravchitikov (MOR)</td><td>30</td><td>40</td></tr>
<tr><td>5</td><td>Piotr Czerkawski (SBE)</td><td>30</td><td>34</td></tr>
<tr><td>6</td><td>Dickie Pecker (BOH)</td><td>30</td><td>33</td></tr>
<tr><td>7</td><td>Tomas Pylon (KLD)</td><td>30</td><td>33</td></tr>
<tr><td>8</td><td>Brady McIntyre (MOR)</td><td>30</td><td>32</td></tr>
<tr><td>9</td><td>Walter White (BOH)</td><td>30</td><td>32</td></tr>
<tr><td>10</td><td>Schnitinfritz Jagr (KLD)</td><td>30</td><td>30</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Take Away</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>TA   </th></tr></thead>
<tr><td>1</td><td>Sachimo Zoidberg (MOR)</td><td>30</td><td>40</td></tr>
<tr><td>2</td><td>Barret McCarthy (KLD)</td><td>30</td><td>39</td></tr>
<tr><td>3</td><td>Ondrej Ravchitikov (MOR)</td><td>30</td><td>36</td></tr>
<tr><td>4</td><td>Charlie Schieck (SBE)</td><td>30</td><td>32</td></tr>
<tr><td>5</td><td>Pierre-Luc Laflamme (BOH)</td><td>30</td><td>28</td></tr>
<tr><td>6</td><td>Brady McIntyre (MOR)</td><td>30</td><td>26</td></tr>
<tr><td>7</td><td>Walter White (BOH)</td><td>30</td><td>26</td></tr>
<tr><td>8</td><td>Ty Justice (MOR)</td><td>30</td><td>25</td></tr>
<tr><td>9</td><td>Zalleras Szlerchek (SBE)</td><td>30</td><td>25</td></tr>
<tr><td>10</td><td>Tomas Pylon (KLD)</td><td>30</td><td>25</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Total Fight</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>FT  </th></tr></thead>
<tr><td>1</td><td>Dionyz Vyskoc (MOR)</td><td>30</td><td>1</td></tr>
<tr><td>2</td><td>Krysztof Kowalski (SBE)</td><td>30</td><td>1</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Fight Won</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>FW   </th></tr></thead>
<tr><td>1</td><td>Krysztof Kowalski (SBE)</td><td>30</td><td>1</td></tr>
</table></td></tr>
<tr><td colspan="3"><h2 class="STHSProIndividualLeader_Goalies">Goalies</h2></td></tr><tr>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Save Percentage</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>SAVE %</th></tr></thead>
<tr><td>1</td><td>Mike Verminski (SBE)</td><td>30</td><td>0.944</td></tr>
<tr><td>2</td><td>Chris Partridge (BOH)</td><td>30</td><td>0.936</td></tr>
<tr><td>3</td><td>Georgette Pel (KLD)</td><td>30</td><td>0.933</td></tr>
<tr><td>4</td><td>Christoffer Bjornsson (MOR)</td><td>30</td><td>0.932</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Goals Against Average</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>GAA</th></tr></thead>
<tr><td>1</td><td>Mike Verminski (SBE)</td><td>30</td><td>1.65</td></tr>
<tr><td>2</td><td>Chris Partridge (BOH)</td><td>30</td><td>1.73</td></tr>
<tr><td>3</td><td>Christoffer Bjornsson (MOR)</td><td>30</td><td>1.82</td></tr>
<tr><td>4</td><td>Georgette Pel (KLD)</td><td>30</td><td>2.00</td></tr>
<tr><td colspan="4" class="STHSCenter">No Result</td></tr></table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Minutes Played</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>MP</th></tr></thead>
<tr><td>1</td><td>Christoffer Bjornsson (MOR)</td><td>30</td><td>1,846</td></tr>
<tr><td>2</td><td>Chris Partridge (BOH)</td><td>30</td><td>1,835</td></tr>
<tr><td>3</td><td>Georgette Pel (KLD)</td><td>30</td><td>1,826</td></tr>
<tr><td>4</td><td>Mike Verminski (SBE)</td><td>30</td><td>1,821</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Shots Faced</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>SHT</th></tr></thead>
<tr><td>1</td><td>Georgette Pel (KLD)</td><td>30</td><td>905</td></tr>
<tr><td>2</td><td>Mike Verminski (SBE)</td><td>30</td><td>891</td></tr>
<tr><td>3</td><td>Chris Partridge (BOH)</td><td>30</td><td>832</td></tr>
<tr><td>4</td><td>Christoffer Bjornsson (MOR)</td><td>30</td><td>819</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Shutouts</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>SO</th></tr></thead>
<tr><td>1</td><td>Mike Verminski (SBE)</td><td>30</td><td>2</td></tr>
<tr><td>2</td><td>Georgette Pel (KLD)</td><td>30</td><td>2</td></tr>
<tr><td>3</td><td>Christoffer Bjornsson (MOR)</td><td>30</td><td>2</td></tr>
<tr><td>4</td><td>Chris Partridge (BOH)</td><td>30</td><td>1</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Wins</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>W</th></tr></thead>
<tr><td>1</td><td>Mike Verminski (SBE)</td><td>30</td><td>18</td></tr>
<tr><td>2</td><td>Chris Partridge (BOH)</td><td>30</td><td>16</td></tr>
<tr><td>3</td><td>Christoffer Bjornsson (MOR)</td><td>30</td><td>16</td></tr>
<tr><td>4</td><td>Georgette Pel (KLD)</td><td>30</td><td>10</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Penalty Shots Percentage</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><td>PSA</td><th>PS SHT %</th></tr></thead>
<tr><td>1</td><td>Mike Verminski (SBE)</td><td>6</td><td>1.000</td></tr>
<tr><td>2</td><td>Chris Partridge (BOH)</td><td>25</td><td>0.800</td></tr>
<tr><td>3</td><td>Christoffer Bjornsson (MOR)</td><td>22</td><td>0.636</td></tr>
<tr><td>4</td><td>Georgette Pel (KLD)</td><td>8</td><td>0.625</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Losses</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>L</th></tr></thead>
<tr><td>1</td><td>Georgette Pel (KLD)</td><td>30</td><td>15</td></tr>
<tr><td>2</td><td>Chris Partridge (BOH)</td><td>30</td><td>11</td></tr>
<tr><td>3</td><td>Mike Verminski (SBE)</td><td>30</td><td>7</td></tr>
<tr><td>4</td><td>Christoffer Bjornsson (MOR)</td><td>30</td><td>6</td></tr>
</table></td></tr>
</table>
<?php include "Footer.php";?>
