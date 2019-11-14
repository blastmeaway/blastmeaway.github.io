<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>CELH - index</title>
<script src="CELH-PLF.js"></script>
<meta name="author" content="Simon Tremblay, sths.simont.info" />
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Decription" content="Marcus Winston - STHS - Version : 3.1.9.9 - CELH-STHS.db - CELH-STHSCareerStat.db"/>
<link href="STHSMain.css" rel="stylesheet" type="text/css" />
<style>
.CarouselTable {border-width: 0.5px;border-style: solid;border-collapse: collapse; width: 92%;}
.CarouselTable th {font-weight: bold;}
.CarouselTable td {padding-left: 5px;padding-right: 10px;}
.CarouselTable td > a {text-decoration: none;}
@media screen and (max-width: 890px) {.STHSIndex_Score{display:none;}}
@media screen and (max-width: 1200px) {.STHSIndex_Top5 {display:none;}.STHSIndex_OutputSetting_Table{display:none;}}
</style>
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
<table class="STHSIndex_Main"><tr><td class="STHSIndex_Score">
<table class="STHSTableFullW"><tr><td>
<div class="STHSIndex_LastestResult">Latest Scores</div>
<table class="CarouselTable" style="width:200px;">
<tr><th>Day 20</th><th class="STHSCTRight">#20</th></tr>
<tr><td>HC Eagles Moravia</td><td class="STHSRight">3</td></tr>
<tr><td>HC Lions Bohemia</td><td class="STHSRight">2</td></tr>
<tr><td colspan="2" class="STHSCenter"><a href="CELH-PLF-20.html">Boxscore</a></td>
</tr></table>
</td></tr></table>
</td><td class="STHSIndex_NewsTD">
<div class="STHSIndex_TheNews">Czechia Extraliga News</div>
<br /><br /><h2>Latest Trade, Waiver, Injury & Suspension Transactions</h2>
[11/2/2019 2:00:24 PM] - Josef Novotny was added to HC Lynx Kladno.<br />
[11/2/2019 1:55:02 PM] - Walter White was added to HC Lions Bohemia.<br />
[11/2/2019 1:54:59 PM] - Vratislav Zbynek was added to HC Black Eagles Silesia.<br />
[11/2/2019 1:54:54 PM] - Tomas Pylon was added to HC Lynx Kladno.<br />
[11/2/2019 1:54:44 PM] - Simothy Drunkebird was added to HC Black Eagles Silesia.<br />
[11/2/2019 1:54:32 PM] - Sachimo Zoidberg was added to HC Eagles Moravia.<br />
[11/2/2019 1:54:28 PM] - Ruslan Zaporozhets was added to HC Lions Bohemia.<br />
[11/2/2019 1:54:19 PM] - Petr Kolesnikovs was added to HC Lions Bohemia.<br />
[11/2/2019 1:54:14 PM] - Patrik Satan was added to HC Lynx Kladno.<br />
[11/2/2019 1:54:10 PM] - Ondrej Ravchitikov was added to HC Eagles Moravia.<br />
</td><td class="STHSIndex_Top5">
<table class="STHSIndex_Top5Table">
<tr><th colspan="2" class="STHSTop5">Top 5 Point</th></tr>
<tr><td class="STHSIndex_Top5PointNameHeader">Name</td><td class="STHSIndex_Top5PointResultHeader">G-A-P</td></tr>
<tr><td>Dickie Pecker (BOH)</td><td>3-11-14</td></tr>
<tr><td>Walter White (BOH)</td><td>6-7-13</td></tr>
<tr><td>Ondrej Ravchitikov (MOR)</td><td>3-8-11</td></tr>
<tr><td>Dionyz Vyskoc (MOR)</td><td>5-4-9</td></tr>
<tr><td>DeMaricus Smyth (BOH)</td><td>2-7-9</td></tr>
<tr><th colspan="2" class="STHSTop5"><br /><br />Top 5 Goal</th></tr>
<tr><td class="STHSIndex_Top5PointNameHeader">Name</td><td class="STHSIndex_Top5PointResultHeader">GP-G</td></tr>
<tr><td>Walter White (BOH)</td><td>10 - 6</td></tr>
<tr><td>Matej Stransky (BOH)</td><td>10 - 5</td></tr>
<tr><td>Dionyz Vyskoc (MOR)</td><td>13 - 5</td></tr>
<tr><td>Jakub Trocheck (SBE)</td><td>7 - 4</td></tr>
<tr><td>Slappy McDoodle (MOR)</td><td>13 - 4</td></tr>
<tr><th colspan="2" class="STHSTop5"><br /><br />Top 5 Goalies</th></tr>
<tr><td class="STHSIndex_Top5PointNameHeader">Name</td><td class="STHSIndex_Top5PointResultHeader">W-PCT</td></tr>
<tr><td>Chris Partridge (BOH)</td><td>6 - 0.951</td></tr>
<tr><td>Mike Verminski (SBE)</td><td>3 - 0.936</td></tr>
<tr><td>Christoffer Bjornsson (MOR)</td><td>8 - 0.926</td></tr>
</table></td></tr></table>
<?php include "Footer.php";?>
