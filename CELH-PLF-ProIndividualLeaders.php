<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>CELH - Pro Individual Leaders</title>
<script src="CELH-PLF.js"></script>
<meta name="author" content="Simon Tremblay, sths.simont.info" />
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Decription" content="Marcus Winston - STHS - Version : 3.1.9.9 - CELH-STHS.db - CELH-STHSCareerStat.db"/>
<link href="STHSMain.css" rel="stylesheet" type="text/css" />
<link href="CELH-PLF.css" rel="stylesheet" type="text/css" />
<?php If (file_exists("STHSMain-CSSOverwrite.css") == True){echo "<link href=\"STHSMain-CSSOverwrite.css\" rel=\"stylesheet\" type=\"text/css\" />";}?>
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
<b>Minimum Games Played: 4</b><br />
<script>$(function(){$("table").basictablesorter()});</script>
<table class="STHSTableFullW">
<tr><td colspan="3"><h2 class="STHSProIndividualLeader_Players">Players</h2></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Goals</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>G</th></tr></thead>
<tr><td>1</td><td>Walter White (BOH)</td><td>10</td><td>6</td></tr>
<tr><td>2</td><td>Matej Stransky (BOH)</td><td>10</td><td>5</td></tr>
<tr><td>3</td><td>Dionyz Vyskoc (MOR)</td><td>13</td><td>5</td></tr>
<tr><td>4</td><td>Jakub Trocheck (SBE)</td><td>7</td><td>4</td></tr>
<tr><td>5</td><td>Slappy McDoodle (MOR)</td><td>13</td><td>4</td></tr>
<tr><td>6</td><td>Piotr Czerkawski (SBE)</td><td>7</td><td>3</td></tr>
<tr><td>7</td><td>Dickie Pecker (BOH)</td><td>10</td><td>3</td></tr>
<tr><td>8</td><td>Ondrej Ravchitikov (MOR)</td><td>13</td><td>3</td></tr>
<tr><td>9</td><td>Vratislav Zbynek (SBE)</td><td>7</td><td>2</td></tr>
<tr><td>10</td><td>DeMaricus Smyth (BOH)</td><td>10</td><td>2</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Assists</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>A</th></tr></thead>
<tr><td>1</td><td>Dickie Pecker (BOH)</td><td>10</td><td>11</td></tr>
<tr><td>2</td><td>Ondrej Ravchitikov (MOR)</td><td>13</td><td>8</td></tr>
<tr><td>3</td><td>DeMaricus Smyth (BOH)</td><td>10</td><td>7</td></tr>
<tr><td>4</td><td>Walter White (BOH)</td><td>10</td><td>7</td></tr>
<tr><td>5</td><td>Brady McIntyre (MOR)</td><td>13</td><td>6</td></tr>
<tr><td>6</td><td>Sachimo Zoidberg (MOR)</td><td>13</td><td>6</td></tr>
<tr><td>7</td><td>Zalleras Szlerchek (SBE)</td><td>7</td><td>5</td></tr>
<tr><td>8</td><td>Luke Thomason (BOH)</td><td>10</td><td>4</td></tr>
<tr><td>9</td><td>Dionyz Vyskoc (MOR)</td><td>13</td><td>4</td></tr>
<tr><td>10</td><td>Slappy McDoodle (MOR)</td><td>13</td><td>4</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Shots</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>SHT</th></tr></thead>
<tr><td>1</td><td>Ondrej Ravchitikov (MOR)</td><td>13</td><td>60</td></tr>
<tr><td>2</td><td>Walter White (BOH)</td><td>10</td><td>47</td></tr>
<tr><td>3</td><td>Dickie Pecker (BOH)</td><td>10</td><td>45</td></tr>
<tr><td>4</td><td>Marian Potoczny (MOR)</td><td>13</td><td>41</td></tr>
<tr><td>5</td><td>Sachimo Zoidberg (MOR)</td><td>13</td><td>39</td></tr>
<tr><td>6</td><td>Slappy McDoodle (MOR)</td><td>13</td><td>35</td></tr>
<tr><td>7</td><td>Matej Stransky (BOH)</td><td>10</td><td>33</td></tr>
<tr><td>8</td><td>Marek Vyskoc (MOR)</td><td>13</td><td>27</td></tr>
<tr><td>9</td><td>Vratislav Zbynek (SBE)</td><td>7</td><td>26</td></tr>
<tr><td>10</td><td>Zivan Zidek (MOR)</td><td>13</td><td>26</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Shots %</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>SHT %</th></tr></thead>
<tr><td>1</td><td>Dionyz Vyskoc (MOR)</td><td>13</td><td>31.25%</td></tr>
<tr><td>2</td><td>Jakub Trocheck (SBE)</td><td>7</td><td>16.67%</td></tr>
<tr><td>3</td><td>Matej Stransky (BOH)</td><td>10</td><td>15.15%</td></tr>
<tr><td>4</td><td>Cash Savage (KLD)</td><td>4</td><td>14.29%</td></tr>
<tr><td>5</td><td>Petr Kolesnikovs (BOH)</td><td>10</td><td>14.29%</td></tr>
<tr><td>6</td><td>Walter White (BOH)</td><td>10</td><td>12.77%</td></tr>
<tr><td>7</td><td>Piotr Czerkawski (SBE)</td><td>7</td><td>12.50%</td></tr>
<tr><td>8</td><td>Luke Thomason (BOH)</td><td>10</td><td>12.50%</td></tr>
<tr><td>9</td><td>Slappy McDoodle (MOR)</td><td>13</td><td>11.43%</td></tr>
<tr><td>10</td><td>DeMaricus Smyth (BOH)</td><td>10</td><td>10.53%</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Centers</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PTS</th></tr></thead>
<tr><td>1</td><td>Dickie Pecker (BOH)</td><td>10</td><td>3-11-14</td></tr>
<tr><td>2</td><td>DeMaricus Smyth (BOH)</td><td>10</td><td>2-7-9</td></tr>
<tr><td>3</td><td>Slappy McDoodle (MOR)</td><td>13</td><td>4-4-8</td></tr>
<tr><td>4</td><td>Zivan Zidek (MOR)</td><td>13</td><td>2-3-5</td></tr>
<tr><td>5</td><td>Zalleras Szlerchek (SBE)</td><td>7</td><td>0-5-5</td></tr>
<tr><td>6</td><td>Petr Kolesnikovs (BOH)</td><td>10</td><td>2-2-4</td></tr>
<tr><td>7</td><td>Konstantin Voloshin (BOH)</td><td>10</td><td>2-2-4</td></tr>
<tr><td>8</td><td>Marian Potoczny (MOR)</td><td>13</td><td>2-2-4</td></tr>
<tr><td>9</td><td>Krysztof Kowalski (SBE)</td><td>7</td><td>1-3-4</td></tr>
<tr><td>10</td><td>Travis Jeziak (BOH)</td><td>10</td><td>1-3-4</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Left Wings</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PTS</th></tr></thead>
<tr><td>1</td><td>Dickie Pecker (BOH)</td><td>10</td><td>3-11-14</td></tr>
<tr><td>2</td><td>Dionyz Vyskoc (MOR)</td><td>13</td><td>5-4-9</td></tr>
<tr><td>3</td><td>DeMaricus Smyth (BOH)</td><td>10</td><td>2-7-9</td></tr>
<tr><td>4</td><td>Slappy McDoodle (MOR)</td><td>13</td><td>4-4-8</td></tr>
<tr><td>5</td><td>Matej Stransky (BOH)</td><td>10</td><td>5-2-7</td></tr>
<tr><td>6</td><td>Piotr Czerkawski (SBE)</td><td>7</td><td>3-3-6</td></tr>
<tr><td>7</td><td>Luke Thomason (BOH)</td><td>10</td><td>2-4-6</td></tr>
<tr><td>8</td><td>Zivan Zidek (MOR)</td><td>13</td><td>2-3-5</td></tr>
<tr><td>9</td><td>Zalleras Szlerchek (SBE)</td><td>7</td><td>0-5-5</td></tr>
<tr><td>10</td><td>Vratislav Zbynek (SBE)</td><td>7</td><td>2-2-4</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Right Wings</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PTS</th></tr></thead>
<tr><td>1</td><td>Dickie Pecker (BOH)</td><td>10</td><td>3-11-14</td></tr>
<tr><td>2</td><td>Dionyz Vyskoc (MOR)</td><td>13</td><td>5-4-9</td></tr>
<tr><td>3</td><td>DeMaricus Smyth (BOH)</td><td>10</td><td>2-7-9</td></tr>
<tr><td>4</td><td>Slappy McDoodle (MOR)</td><td>13</td><td>4-4-8</td></tr>
<tr><td>5</td><td>Matej Stransky (BOH)</td><td>10</td><td>5-2-7</td></tr>
<tr><td>6</td><td>Piotr Czerkawski (SBE)</td><td>7</td><td>3-3-6</td></tr>
<tr><td>7</td><td>Luke Thomason (BOH)</td><td>10</td><td>2-4-6</td></tr>
<tr><td>8</td><td>Zivan Zidek (MOR)</td><td>13</td><td>2-3-5</td></tr>
<tr><td>9</td><td>Zalleras Szlerchek (SBE)</td><td>7</td><td>0-5-5</td></tr>
<tr><td>10</td><td>Vratislav Zbynek (SBE)</td><td>7</td><td>2-2-4</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Defenseman</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PTS</th></tr></thead>
<tr><td>1</td><td>Walter White (BOH)</td><td>10</td><td>6-7-13</td></tr>
<tr><td>2</td><td>Ondrej Ravchitikov (MOR)</td><td>13</td><td>3-8-11</td></tr>
<tr><td>3</td><td>Sachimo Zoidberg (MOR)</td><td>13</td><td>2-6-8</td></tr>
<tr><td>4</td><td>Jakub Trocheck (SBE)</td><td>7</td><td>4-3-7</td></tr>
<tr><td>5</td><td>Brady McIntyre (MOR)</td><td>13</td><td>1-6-7</td></tr>
<tr><td>6</td><td>Ty Justice (MOR)</td><td>13</td><td>2-1-3</td></tr>
<tr><td>7</td><td>Matej Elias (SBE)</td><td>7</td><td>0-2-2</td></tr>
<tr><td>8</td><td>Pierre-Luc Laflamme (BOH)</td><td>10</td><td>0-2-2</td></tr>
<tr><td>9</td><td>Samee Iqbal (SBE)</td><td>7</td><td>1-0-1</td></tr>
<tr><td>10</td><td>Tokek Takshak (BOH)</td><td>10</td><td>1-0-1</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Points per 20 Minutes</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>P/20</th></tr></thead>
<tr><td>1</td><td>Dickie Pecker (BOH)</td><td>10</td><td>1.32</td></tr>
<tr><td>2</td><td>Walter White (BOH)</td><td>10</td><td>0.92</td></tr>
<tr><td>3</td><td>Matej Stransky (BOH)</td><td>10</td><td>0.80</td></tr>
<tr><td>4</td><td>DeMaricus Smyth (BOH)</td><td>10</td><td>0.79</td></tr>
<tr><td>5</td><td>Dionyz Vyskoc (MOR)</td><td>13</td><td>0.78</td></tr>
<tr><td>6</td><td>Jakub Trocheck (SBE)</td><td>7</td><td>0.71</td></tr>
<tr><td>7</td><td>Konstantin Voloshin (BOH)</td><td>10</td><td>0.66</td></tr>
<tr><td>8</td><td>Piotr Czerkawski (SBE)</td><td>7</td><td>0.66</td></tr>
<tr><td>9</td><td>Alexander Zajac (SBE)</td><td>7</td><td>0.66</td></tr>
<tr><td>10</td><td>Ondrej Ravchitikov (MOR)</td><td>13</td><td>0.61</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Face-Off %</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>FO %</th></tr></thead>
<tr><td>1</td><td>Piotr Czerkawski (SBE)</td><td>7</td><td>57.50%</td></tr>
<tr><td>2</td><td>Schnitinfritz Jagr (KLD)</td><td>4</td><td>55.88%</td></tr>
<tr><td>3</td><td>DeMaricus Smyth (BOH)</td><td>10</td><td>53.73%</td></tr>
<tr><td>4</td><td>Travis Jeziak (BOH)</td><td>10</td><td>53.57%</td></tr>
<tr><td>5</td><td>Slappy McDoodle (MOR)</td><td>13</td><td>52.38%</td></tr>
<tr><td>6</td><td>Michael Scarn (KLD)</td><td>4</td><td>51.28%</td></tr>
<tr><td>7</td><td>Zalleras Szlerchek (SBE)</td><td>7</td><td>50.21%</td></tr>
<tr><td>8</td><td>Zivan Zidek (MOR)</td><td>13</td><td>48.41%</td></tr>
<tr><td>9</td><td>Shouta Aizawa (KLD)</td><td>4</td><td>47.83%</td></tr>
<tr><td>10</td><td>Konstantin Voloshin (BOH)</td><td>10</td><td>44.62%</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Plus/Minus</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>+/-</th></tr></thead>
<tr><td>1</td><td>Brady McIntyre (MOR)</td><td>13</td><td>8</td></tr>
<tr><td>2</td><td>Ty Justice (MOR)</td><td>13</td><td>8</td></tr>
<tr><td>3</td><td>Aviad Ratzon (MOR)</td><td>13</td><td>4</td></tr>
<tr><td>4</td><td>Dionyz Vyskoc (MOR)</td><td>13</td><td>4</td></tr>
<tr><td>5</td><td>Marian Potoczny (MOR)</td><td>13</td><td>3</td></tr>
<tr><td>6</td><td>Slappy McDoodle (MOR)</td><td>13</td><td>3</td></tr>
<tr><td>7</td><td>Zivan Zidek (MOR)</td><td>13</td><td>3</td></tr>
<tr><td>8</td><td>Marek Vyskoc (MOR)</td><td>13</td><td>3</td></tr>
<tr><td>9</td><td>Cameron Urbowicz (BOH)</td><td>10</td><td>2</td></tr>
<tr><td>10</td><td>David Vent (BOH)</td><td>10</td><td>2</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Penalty Minutes</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PIM</th></tr></thead>
<tr><td>1</td><td>Pierre-Luc Laflamme (BOH)</td><td>10</td><td>18</td></tr>
<tr><td>2</td><td>Sachimo Zoidberg (MOR)</td><td>13</td><td>14</td></tr>
<tr><td>3</td><td>Marian Potoczny (MOR)</td><td>13</td><td>12</td></tr>
<tr><td>4</td><td>Walter White (BOH)</td><td>10</td><td>10</td></tr>
<tr><td>5</td><td>Aron Hernadivic (SBE)</td><td>7</td><td>8</td></tr>
<tr><td>6</td><td>Piotr Czerkawski (SBE)</td><td>7</td><td>8</td></tr>
<tr><td>7</td><td>DeMaricus Smyth (BOH)</td><td>10</td><td>8</td></tr>
<tr><td>8</td><td>Tokek Takshak (BOH)</td><td>10</td><td>8</td></tr>
<tr><td>9</td><td>Aviad Ratzon (MOR)</td><td>13</td><td>8</td></tr>
<tr><td>10</td><td>Brady McIntyre (MOR)</td><td>13</td><td>8</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Shots Blocked</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>SB</th></tr></thead>
<tr><td>1</td><td>Ty Justice (MOR)</td><td>13</td><td>24</td></tr>
<tr><td>2</td><td>Ondrej Ravchitikov (MOR)</td><td>13</td><td>23</td></tr>
<tr><td>3</td><td>Brady McIntyre (MOR)</td><td>13</td><td>21</td></tr>
<tr><td>4</td><td>Sachimo Zoidberg (MOR)</td><td>13</td><td>20</td></tr>
<tr><td>5</td><td>Pierre-Luc Laflamme (BOH)</td><td>10</td><td>16</td></tr>
<tr><td>6</td><td>Walter White (BOH)</td><td>10</td><td>13</td></tr>
<tr><td>7</td><td>Aviad Ratzon (MOR)</td><td>13</td><td>12</td></tr>
<tr><td>8</td><td>Sean Stevenson Jr. (BOH)</td><td>10</td><td>11</td></tr>
<tr><td>9</td><td>Charlie Schieck (SBE)</td><td>7</td><td>10</td></tr>
<tr><td>10</td><td>Jakub Trocheck (SBE)</td><td>7</td><td>10</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Rookies</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PTS</th></tr></thead>
<tr><td>1</td><td>Dickie Pecker (BOH)</td><td>10</td><td>3-11-14</td></tr>
<tr><td>2</td><td>Walter White (BOH)</td><td>10</td><td>6-7-13</td></tr>
<tr><td>3</td><td>Ondrej Ravchitikov (MOR)</td><td>13</td><td>3-8-11</td></tr>
<tr><td>4</td><td>Dionyz Vyskoc (MOR)</td><td>13</td><td>5-4-9</td></tr>
<tr><td>5</td><td>DeMaricus Smyth (BOH)</td><td>10</td><td>2-7-9</td></tr>
<tr><td>6</td><td>Slappy McDoodle (MOR)</td><td>13</td><td>4-4-8</td></tr>
<tr><td>7</td><td>Sachimo Zoidberg (MOR)</td><td>13</td><td>2-6-8</td></tr>
<tr><td>8</td><td>Matej Stransky (BOH)</td><td>10</td><td>5-2-7</td></tr>
<tr><td>9</td><td>Jakub Trocheck (SBE)</td><td>7</td><td>4-3-7</td></tr>
<tr><td>10</td><td>Brady McIntyre (MOR)</td><td>13</td><td>1-6-7</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Hits</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>HIT</th></tr></thead>
<tr><td>1</td><td>Sachimo Zoidberg (MOR)</td><td>13</td><td>45</td></tr>
<tr><td>2</td><td>Walter White (BOH)</td><td>10</td><td>28</td></tr>
<tr><td>3</td><td>Aviad Ratzon (MOR)</td><td>13</td><td>28</td></tr>
<tr><td>4</td><td>Pierre-Luc Laflamme (BOH)</td><td>10</td><td>23</td></tr>
<tr><td>5</td><td>Brady McIntyre (MOR)</td><td>13</td><td>23</td></tr>
<tr><td>6</td><td>Marian Potoczny (MOR)</td><td>13</td><td>23</td></tr>
<tr><td>7</td><td>Travis Jeziak (BOH)</td><td>10</td><td>22</td></tr>
<tr><td>8</td><td>Ty Justice (MOR)</td><td>13</td><td>22</td></tr>
<tr><td>9</td><td>DeMaricus Smyth (BOH)</td><td>10</td><td>21</td></tr>
<tr><td>10</td><td>Nico Gross (MOR)</td><td>13</td><td>20</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Power Play Goals</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PP</th></tr></thead>
<tr><td>1</td><td>Jakub Trocheck (SBE)</td><td>7</td><td>4</td></tr>
<tr><td>2</td><td>Walter White (BOH)</td><td>10</td><td>4</td></tr>
<tr><td>3</td><td>Piotr Czerkawski (SBE)</td><td>7</td><td>3</td></tr>
<tr><td>4</td><td>Dickie Pecker (BOH)</td><td>10</td><td>3</td></tr>
<tr><td>5</td><td>Matej Stransky (BOH)</td><td>10</td><td>3</td></tr>
<tr><td>6</td><td>Ondrej Ravchitikov (MOR)</td><td>13</td><td>3</td></tr>
<tr><td>7</td><td>DeMaricus Smyth (BOH)</td><td>10</td><td>2</td></tr>
<tr><td>8</td><td>Luke Thomason (BOH)</td><td>10</td><td>2</td></tr>
<tr><td>9</td><td>Slappy McDoodle (MOR)</td><td>13</td><td>2</td></tr>
<tr><td>10</td><td>Ty Justice (MOR)</td><td>13</td><td>2</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Short Handed Goals</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>SH</th></tr></thead>
<tr><td>1</td><td>Dionyz Vyskoc (MOR)</td><td>13</td><td>1</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Game Winning Goals</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>GW</th></tr></thead>
<tr><td>1</td><td>Dionyz Vyskoc (MOR)</td><td>13</td><td>3</td></tr>
<tr><td>2</td><td>Slappy McDoodle (MOR)</td><td>13</td><td>3</td></tr>
<tr><td>3</td><td>Matej Stransky (BOH)</td><td>10</td><td>2</td></tr>
<tr><td>4</td><td>Alexander Zajac (SBE)</td><td>7</td><td>1</td></tr>
<tr><td>5</td><td>Piotr Czerkawski (SBE)</td><td>7</td><td>1</td></tr>
<tr><td>6</td><td>Samee Iqbal (SBE)</td><td>7</td><td>1</td></tr>
<tr><td>7</td><td>DeMaricus Smyth (BOH)</td><td>10</td><td>1</td></tr>
<tr><td>8</td><td>Luke Thomason (BOH)</td><td>10</td><td>1</td></tr>
<tr><td>9</td><td>Walter White (BOH)</td><td>10</td><td>1</td></tr>
<tr><td>10</td><td>Dickie Pecker (BOH)</td><td>10</td><td>1</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Game Tying Goals</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>GT</th></tr></thead>
<tr><td>1</td><td>Piotr Czerkawski (SBE)</td><td>7</td><td>1</td></tr>
<tr><td>2</td><td>Jakub Trocheck (SBE)</td><td>7</td><td>1</td></tr>
<tr><td>3</td><td>DeMaricus Smyth (BOH)</td><td>10</td><td>1</td></tr>
<tr><td>4</td><td>Walter White (BOH)</td><td>10</td><td>1</td></tr>
<tr><td>5</td><td>Petr Kolesnikovs (BOH)</td><td>10</td><td>1</td></tr>
<tr><td>6</td><td>Daniel Garland (MOR)</td><td>13</td><td>1</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Empty Net Goals</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>ENG</th></tr></thead>
<tr><td>1</td><td>Walter White (BOH)</td><td>10</td><td>1</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Minutes Played</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>MP</th></tr></thead>
<tr><td>1</td><td>Ondrej Ravchitikov (MOR)</td><td>13</td><td>363</td></tr>
<tr><td>2</td><td>Sachimo Zoidberg (MOR)</td><td>13</td><td>356</td></tr>
<tr><td>3</td><td>Slappy McDoodle (MOR)</td><td>13</td><td>299</td></tr>
<tr><td>4</td><td>Marian Potoczny (MOR)</td><td>13</td><td>297</td></tr>
<tr><td>5</td><td>Aviad Ratzon (MOR)</td><td>13</td><td>283</td></tr>
<tr><td>6</td><td>Walter White (BOH)</td><td>10</td><td>283</td></tr>
<tr><td>7</td><td>Pierre-Luc Laflamme (BOH)</td><td>10</td><td>280</td></tr>
<tr><td>8</td><td>Brady McIntyre (MOR)</td><td>13</td><td>276</td></tr>
<tr><td>9</td><td>Ty Justice (MOR)</td><td>13</td><td>275</td></tr>
<tr><td>10</td><td>Dionyz Vyskoc (MOR)</td><td>13</td><td>232</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Hat Tricks</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>HT</th></tr></thead>
<tr><td colspan="4" class="STHSCenter">No Result</td></tr></table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Goal Scoring Streak</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>GS</th></tr></thead>
<tr><td>1</td><td>Cash Savage (KLD)</td><td>4</td><td>1</td></tr>
<tr><td>2</td><td>Josef Kubinec (SBE)</td><td>7</td><td>1</td></tr>
<tr><td>3</td><td>Piotr Czerkawski (SBE)</td><td>7</td><td>1</td></tr>
<tr><td>4</td><td>Vratislav Zbynek (SBE)</td><td>7</td><td>1</td></tr>
<tr><td>5</td><td>Walter White (BOH)</td><td>10</td><td>1</td></tr>
<tr><td>6</td><td>Matej Stransky (BOH)</td><td>10</td><td>1</td></tr>
<tr><td>7</td><td>Brady McIntyre (MOR)</td><td>13</td><td>1</td></tr>
<tr><td>8</td><td>Marian Potoczny (MOR)</td><td>13</td><td>1</td></tr>
<tr><td>9</td><td>Ondrej Ravchitikov (MOR)</td><td>13</td><td>1</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Point Scoring Streak</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PS</th></tr></thead>
<tr><td>1</td><td>Ondrej Ravchitikov (MOR)</td><td>13</td><td>7</td></tr>
<tr><td>2</td><td>Slappy McDoodle (MOR)</td><td>13</td><td>4</td></tr>
<tr><td>3</td><td>Jakub Trocheck (SBE)</td><td>7</td><td>3</td></tr>
<tr><td>4</td><td>Krysztof Kowalski (SBE)</td><td>7</td><td>3</td></tr>
<tr><td>5</td><td>Vratislav Zbynek (SBE)</td><td>7</td><td>3</td></tr>
<tr><td>6</td><td>Cash Savage (KLD)</td><td>4</td><td>1</td></tr>
<tr><td>7</td><td>Patrik Satan (KLD)</td><td>4</td><td>1</td></tr>
<tr><td>8</td><td>Alexander Zajac (SBE)</td><td>7</td><td>1</td></tr>
<tr><td>9</td><td>David Kastrba (SBE)</td><td>7</td><td>1</td></tr>
<tr><td>10</td><td>Josef Kubinec (SBE)</td><td>7</td><td>1</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Hits Taken</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>HTT</th></tr></thead>
<tr><td>1</td><td>DeMaricus Smyth (BOH)</td><td>10</td><td>28</td></tr>
<tr><td>2</td><td>Zalleras Szlerchek (SBE)</td><td>7</td><td>26</td></tr>
<tr><td>3</td><td>Ondrej Ravchitikov (MOR)</td><td>13</td><td>26</td></tr>
<tr><td>4</td><td>Pierre-Luc Laflamme (BOH)</td><td>10</td><td>25</td></tr>
<tr><td>5</td><td>Jakub Trocheck (SBE)</td><td>7</td><td>22</td></tr>
<tr><td>6</td><td>Sachimo Zoidberg (MOR)</td><td>13</td><td>22</td></tr>
<tr><td>7</td><td>Slappy McDoodle (MOR)</td><td>13</td><td>21</td></tr>
<tr><td>8</td><td>Dickie Pecker (BOH)</td><td>10</td><td>19</td></tr>
<tr><td>9</td><td>Walter White (BOH)</td><td>10</td><td>18</td></tr>
<tr><td>10</td><td>Brady McIntyre (MOR)</td><td>13</td><td>18</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Penalty Shots</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PSG </th></tr></thead>
<tr><td colspan="4" class="STHSCenter">No Result</td></tr></table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Give Away</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>GA  </th></tr></thead>
<tr><td>1</td><td>Ondrej Ravchitikov (MOR)</td><td>13</td><td>23</td></tr>
<tr><td>2</td><td>Walter White (BOH)</td><td>10</td><td>16</td></tr>
<tr><td>3</td><td>Zivan Zidek (MOR)</td><td>13</td><td>13</td></tr>
<tr><td>4</td><td>Konstantin Voloshin (BOH)</td><td>10</td><td>12</td></tr>
<tr><td>5</td><td>Dickie Pecker (BOH)</td><td>10</td><td>11</td></tr>
<tr><td>6</td><td>Sachimo Zoidberg (MOR)</td><td>13</td><td>11</td></tr>
<tr><td>7</td><td>Piotr Czerkawski (SBE)</td><td>7</td><td>9</td></tr>
<tr><td>8</td><td>Zalleras Szlerchek (SBE)</td><td>7</td><td>8</td></tr>
<tr><td>9</td><td>Brady McIntyre (MOR)</td><td>13</td><td>8</td></tr>
<tr><td>10</td><td>Slappy McDoodle (MOR)</td><td>13</td><td>8</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Take Away</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>TA   </th></tr></thead>
<tr><td>1</td><td>Ondrej Ravchitikov (MOR)</td><td>13</td><td>18</td></tr>
<tr><td>2</td><td>Sachimo Zoidberg (MOR)</td><td>13</td><td>16</td></tr>
<tr><td>3</td><td>Brady McIntyre (MOR)</td><td>13</td><td>13</td></tr>
<tr><td>4</td><td>Jakub Trocheck (SBE)</td><td>7</td><td>12</td></tr>
<tr><td>5</td><td>Walter White (BOH)</td><td>10</td><td>12</td></tr>
<tr><td>6</td><td>Ty Justice (MOR)</td><td>13</td><td>12</td></tr>
<tr><td>7</td><td>Zalleras Szlerchek (SBE)</td><td>7</td><td>9</td></tr>
<tr><td>8</td><td>Charlie Schieck (SBE)</td><td>7</td><td>7</td></tr>
<tr><td>9</td><td>Samee Iqbal (SBE)</td><td>7</td><td>7</td></tr>
<tr><td>10</td><td>Sean Stevenson Jr. (BOH)</td><td>10</td><td>7</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Total Fight</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>FT  </th></tr></thead>
<tr><td colspan="4" class="STHSCenter">No Result</td></tr></table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Fight Won</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>FW   </th></tr></thead>
<tr><td colspan="4" class="STHSCenter">No Result</td></tr></table></td></tr>
<tr><td colspan="3"><h2 class="STHSProIndividualLeader_Goalies">Goalies</h2></td></tr><tr>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Save Percentage</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>SAVE %</th></tr></thead>
<tr><td>1</td><td>Chris Partridge (BOH)</td><td>10</td><td>0.951</td></tr>
<tr><td>2</td><td>Mike Verminski (SBE)</td><td>7</td><td>0.936</td></tr>
<tr><td>3</td><td>Christoffer Bjornsson (MOR)</td><td>13</td><td>0.926</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Goals Against Average</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>GAA</th></tr></thead>
<tr><td>1</td><td>Chris Partridge (BOH)</td><td>10</td><td>1.38</td></tr>
<tr><td>2</td><td>Mike Verminski (SBE)</td><td>7</td><td>1.94</td></tr>
<tr><td>3</td><td>Christoffer Bjornsson (MOR)</td><td>13</td><td>2.11</td></tr>
<tr><td colspan="4" class="STHSCenter">No Result</td></tr></table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Minutes Played</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>MP</th></tr></thead>
<tr><td>1</td><td>Christoffer Bjornsson (MOR)</td><td>13</td><td>798</td></tr>
<tr><td>2</td><td>Chris Partridge (BOH)</td><td>10</td><td>607</td></tr>
<tr><td>3</td><td>Mike Verminski (SBE)</td><td>7</td><td>432</td></tr>
<tr><td>4</td><td>Georgette Pel (KLD)</td><td>4</td><td>239</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Shots Faced</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>SHT</th></tr></thead>
<tr><td>1</td><td>Christoffer Bjornsson (MOR)</td><td>13</td><td>377</td></tr>
<tr><td>2</td><td>Chris Partridge (BOH)</td><td>10</td><td>285</td></tr>
<tr><td>3</td><td>Mike Verminski (SBE)</td><td>7</td><td>219</td></tr>
<tr><td>4</td><td>Georgette Pel (KLD)</td><td>4</td><td>115</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Shutouts</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>SO</th></tr></thead>
<tr><td>1</td><td>Christoffer Bjornsson (MOR)</td><td>13</td><td>3</td></tr>
<tr><td>2</td><td>Chris Partridge (BOH)</td><td>10</td><td>2</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Wins</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>W</th></tr></thead>
<tr><td>1</td><td>Christoffer Bjornsson (MOR)</td><td>13</td><td>8</td></tr>
<tr><td>2</td><td>Chris Partridge (BOH)</td><td>10</td><td>6</td></tr>
<tr><td>3</td><td>Mike Verminski (SBE)</td><td>7</td><td>3</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Penalty Shots Percentage</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><td>PSA</td><th>PS SHT %</th></tr></thead>
<tr><td colspan="4" class="STHSCenter">No Result</td></tr></table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Losses</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>L</th></tr></thead>
<tr><td>1</td><td>Christoffer Bjornsson (MOR)</td><td>13</td><td>5</td></tr>
<tr><td>2</td><td>Georgette Pel (KLD)</td><td>4</td><td>4</td></tr>
<tr><td>3</td><td>Mike Verminski (SBE)</td><td>7</td><td>2</td></tr>
<tr><td>4</td><td>Chris Partridge (BOH)</td><td>10</td><td>2</td></tr>
</table></td></tr>
</table>
<?php include "Footer.php";?>
