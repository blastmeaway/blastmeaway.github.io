<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>CELH - Today Games</title>
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
<h3 class="STHSTodayGame_Today3Star">Today 3 Star : <br />Pro : 1 - Walter White (HC Lions Bohemia) / 2 - Chris Partridge (HC Lions Bohemia) / 3 - Christoffer Bjornsson (HC Eagles Moravia)</h3>
<table class="STHSTodayGame_MainTable">
<tr><td class="STHSTodayGame_GameOverall">
<table class="STHSTodayGame_GameTitle"><tr><td class="STHSTodayGame_GameNumber"><h3>Pro Game 1</h3></td><td class="STHSTodayGame_Boxscore"><h3><a href="CELH-PLF-1.html">Boxscore</a></h3></td></tr></table><table class="STHSTodayGame_GameData">
<tr><td class="STHSTodayGame_TeamName"><h3>HC Lynx Kladno</h3></td><td class="STHSTodayGame_TeamScore"><h3>0</h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">
<br /><br />
Georgette Pel (KLD), 26 saves from 30 shots - (0.867), L, 0-1-0, 60:00 minutes<br /><br /></td></tr>
<tr><td class="STHSTodayGame_TeamName"><h3>HC Lions Bohemia</h3></td><td class="STHSTodayGame_TeamScore"><h3><span style="color:red">4</span></h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Luke Thomason(1), Dickie Pecker(1), Matej Stransky(1,2)<br /><br />
Chris Partridge (BOH), 26 saves from 26 shots - (1.000), W, 1-0-0, 60:00 minutes<br /><br /></td></tr></table>

<hr class="STHSTodayGame_HR"><br /></td>
<td class="STHSTodayGame_GameOverall">
<table class="STHSTodayGame_GameTitle"><tr><td class="STHSTodayGame_GameNumber"><h3>Pro Game 2</h3></td><td class="STHSTodayGame_Boxscore"><h3><a href="CELH-PLF-2.html">Boxscore</a></h3></td></tr></table><table class="STHSTodayGame_GameData">
<tr><td class="STHSTodayGame_TeamName"><h3>HC Eagles Moravia</h3></td><td class="STHSTodayGame_TeamScore"><h3><span style="color:red">2</span></h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Dionyz Vyskoc(1), Ondrej Ravchitikov(1)<br /><br />
Christoffer Bjornsson (MOR), 27 saves from 27 shots - (1.000), W, 1-0-0, 60:00 minutes<br /><br /></td></tr>
<tr><td class="STHSTodayGame_TeamName"><h3>HC Black Eagles Silesia</h3></td><td class="STHSTodayGame_TeamScore"><h3>0</h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote"><br /><br />
Mike Verminski (SBE), 23 saves from 25 shots - (0.920), L, 0-1-0, 60:00 minutes<br /><br /></td></tr></table>

<hr class="STHSTodayGame_HR"><br /></td></tr>
<tr><td class="STHSTodayGame_GameOverall">
<table class="STHSTodayGame_GameTitle"><tr><td class="STHSTodayGame_GameNumber"><h3>Pro Game 3</h3></td><td class="STHSTodayGame_Boxscore"><h3><a href="CELH-PLF-3.html">Boxscore</a></h3></td></tr></table><table class="STHSTodayGame_GameData">
<tr><td class="STHSTodayGame_TeamName"><h3>HC Lynx Kladno</h3></td><td class="STHSTodayGame_TeamScore"><h3>0</h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">
<br /><br />
Georgette Pel (KLD), 23 saves from 25 shots - (0.920), L, 0-2-0, 60:00 minutes<br /><br /></td></tr>
<tr><td class="STHSTodayGame_TeamName"><h3>HC Lions Bohemia</h3></td><td class="STHSTodayGame_TeamScore"><h3><span style="color:red">2</span></h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Tokek Takshak(1), Dickie Pecker(2)<br /><br />
Chris Partridge (BOH), 26 saves from 26 shots - (1.000), W, 2-0-0, 60:00 minutes<br /><br /></td></tr></table>

<hr class="STHSTodayGame_HR"><br /></td>
<td class="STHSTodayGame_GameOverall">
<table class="STHSTodayGame_GameTitle"><tr><td class="STHSTodayGame_GameNumber"><h3>Pro Game 4</h3></td><td class="STHSTodayGame_Boxscore"><h3><a href="CELH-PLF-4.html">Boxscore</a></h3></td></tr></table><table class="STHSTodayGame_GameData">
<tr><td class="STHSTodayGame_TeamName"><h3>HC Eagles Moravia</h3></td><td class="STHSTodayGame_TeamScore"><h3>1</h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">
Ty Justice(1)<br /><br />
Christoffer Bjornsson (MOR), 25 saves from 28 shots - (0.893), L, 1-1-0, 60:00 minutes<br /><br /></td></tr>
<tr><td class="STHSTodayGame_TeamName"><h3>HC Black Eagles Silesia</h3></td><td class="STHSTodayGame_TeamScore"><h3><span style="color:red">3</span></h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Piotr Czerkawski(1), Samee Iqbal(1), Jakub Trocheck(1)<br /><br />
Mike Verminski (SBE), 25 saves from 26 shots - (0.962), W, 1-1-0, 60:00 minutes<br /><br /></td></tr></table>

<hr class="STHSTodayGame_HR"><br /></td></tr>
<tr><td class="STHSTodayGame_GameOverall">
<table class="STHSTodayGame_GameTitle"><tr><td class="STHSTodayGame_GameNumber"><h3>Pro Game 5</h3></td><td class="STHSTodayGame_Boxscore"><h3><a href="CELH-PLF-5.html">Boxscore</a></h3></td></tr></table><table class="STHSTodayGame_GameData">
<tr><td class="STHSTodayGame_TeamName"><h3>HC Lions Bohemia</h3></td><td class="STHSTodayGame_TeamScore"><h3><span style="color:red">2</span></h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">DeMaricus Smyth(1), Luke Thomason(2)<br /><br />
Chris Partridge (BOH), 19 saves from 20 shots - (0.950), W, 3-0-0, 60:00 minutes<br /><br /></td></tr>
<tr><td class="STHSTodayGame_TeamName"><h3>HC Lynx Kladno</h3></td><td class="STHSTodayGame_TeamScore"><h3>1</h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Merit Csonka(1)<br /><br />
Georgette Pel (KLD), 31 saves from 33 shots - (0.939), L, 0-3-0, 58:58 minutes<br /><br /></td></tr></table>

<hr class="STHSTodayGame_HR"><br /></td>
<td class="STHSTodayGame_GameOverall">
<table class="STHSTodayGame_GameTitle"><tr><td class="STHSTodayGame_GameNumber"><h3>Pro Game 6</h3></td><td class="STHSTodayGame_Boxscore"><h3><a href="CELH-PLF-6.html">Boxscore</a></h3></td></tr></table><table class="STHSTodayGame_GameData">
<tr><td class="STHSTodayGame_TeamName"><h3>HC Black Eagles Silesia</h3></td><td class="STHSTodayGame_TeamScore"><h3><span style="color:red">3</span></h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Piotr Czerkawski(2), Jakub Trocheck(2,3)<br /><br />
Mike Verminski (SBE), 38 saves from 40 shots - (0.950), W, 2-1-0, 60:00 minutes<br /><br /></td></tr>
<tr><td class="STHSTodayGame_TeamName"><h3>HC Eagles Moravia</h3></td><td class="STHSTodayGame_TeamScore"><h3>2</h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Ty Justice(2), Ondrej Ravchitikov(2)<br /><br />
Christoffer Bjornsson (MOR), 26 saves from 29 shots - (0.897), L, 1-2-0, 59:07 minutes<br /><br /></td></tr></table>

<hr class="STHSTodayGame_HR"><br /></td></tr>
<tr><td class="STHSTodayGame_GameOverall">
<table class="STHSTodayGame_GameTitle"><tr><td class="STHSTodayGame_GameNumber"><h3>Pro Game 7</h3></td><td class="STHSTodayGame_Boxscore"><h3><a href="CELH-PLF-7.html">Boxscore</a></h3></td></tr></table><table class="STHSTodayGame_GameData">
<tr><td class="STHSTodayGame_TeamName"><h3>HC Lions Bohemia</h3></td><td class="STHSTodayGame_TeamScore"><h3><span style="color:red">3</span></h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">DeMaricus Smyth(2), Walter White(1), Petr Kolesnikovs(1)<br /><br />
Chris Partridge (BOH), 31 saves from 32 shots - (0.969), W, 4-0-0, 60:00 minutes<br /><br /></td></tr>
<tr><td class="STHSTodayGame_TeamName"><h3>HC Lynx Kladno</h3></td><td class="STHSTodayGame_TeamScore"><h3>1</h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Cash Savage(1)<br /><br />
Georgette Pel (KLD), 25 saves from 27 shots - (0.926), L, 0-4-0, 59:42 minutes<br /><br /></td></tr></table>

<hr class="STHSTodayGame_HR"><br /></td>
<td class="STHSTodayGame_GameOverall">
<table class="STHSTodayGame_GameTitle"><tr><td class="STHSTodayGame_GameNumber"><h3>Pro Game 8</h3></td><td class="STHSTodayGame_Boxscore"><h3><a href="CELH-PLF-8.html">Boxscore</a></h3></td></tr></table><table class="STHSTodayGame_GameData">
<tr><td class="STHSTodayGame_TeamName"><h3>HC Black Eagles Silesia</h3></td><td class="STHSTodayGame_TeamScore"><h3>0</h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">
<br /><br />
Mike Verminski (SBE), 24 saves from 26 shots - (0.923), L, 2-2-0, 60:00 minutes<br /><br /></td></tr>
<tr><td class="STHSTodayGame_TeamName"><h3>HC Eagles Moravia</h3></td><td class="STHSTodayGame_TeamScore"><h3><span style="color:red">2</span></h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Zivan Zidek(1), Sachimo Zoidberg(1)<br /><br />
Christoffer Bjornsson (MOR), 21 saves from 21 shots - (1.000), W, 2-2-0, 60:00 minutes<br /><br /></td></tr></table>

<hr class="STHSTodayGame_HR"><br /></td></tr>
<tr><td class="STHSTodayGame_GameOverall">
<table class="STHSTodayGame_GameTitle"><tr><td class="STHSTodayGame_GameNumber"><h3>Pro Game 10</h3></td><td class="STHSTodayGame_Boxscore"><h3><a href="CELH-PLF-10.html">Boxscore</a></h3></td></tr></table><table class="STHSTodayGame_GameData">
<tr><td class="STHSTodayGame_TeamName"><h3>HC Eagles Moravia</h3></td><td class="STHSTodayGame_TeamScore"><h3>1</h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">
Dionyz Vyskoc(2)<br /><br />
Christoffer Bjornsson (MOR), 25 saves from 29 shots - (0.862), L, 2-3-0, 60:00 minutes<br /><br /></td></tr>
<tr><td class="STHSTodayGame_TeamName"><h3>HC Black Eagles Silesia</h3></td><td class="STHSTodayGame_TeamScore"><h3><span style="color:red">4</span></h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Alexander Zajac(1), David Kastrba(1), Krysztof Kowalski(1), Vratislav Zbynek(1)<br /><br />
Mike Verminski (SBE), 28 saves from 29 shots - (0.966), W, 3-2-0, 60:00 minutes<br /><br /></td></tr></table>

<hr class="STHSTodayGame_HR"><br /></td>
<td class="STHSTodayGame_GameOverall">
<table class="STHSTodayGame_GameTitle"><tr><td class="STHSTodayGame_GameNumber"><h3>Pro Game 12 - End in Overtime</h3></td><td class="STHSTodayGame_Boxscore"><h3><a href="CELH-PLF-12.html">Boxscore</a></h3></td></tr></table><table class="STHSTodayGame_GameData">
<tr><td class="STHSTodayGame_TeamName"><h3>HC Black Eagles Silesia</h3></td><td class="STHSTodayGame_TeamScore"><h3>1</h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">
Jakub Trocheck(4)<br /><br />
Mike Verminski (SBE), 32 saves from 34 shots - (0.941), OTL, 3-2-1, 66:17 minutes<br /><br /></td></tr>
<tr><td class="STHSTodayGame_TeamName"><h3>HC Eagles Moravia</h3></td><td class="STHSTodayGame_TeamScore"><h3><span style="color:red">2</span></h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Dionyz Vyskoc(3), Daniel Garland(1)<br /><br />
Christoffer Bjornsson (MOR), 31 saves from 32 shots - (0.969), W, 3-3-0, 66:17 minutes<br /><br /></td></tr></table>

<hr class="STHSTodayGame_HR"><br /></td></tr>
<tr><td class="STHSTodayGame_GameOverall">
<table class="STHSTodayGame_GameTitle"><tr><td class="STHSTodayGame_GameNumber"><h3>Pro Game 14 - End in Overtime</h3></td><td class="STHSTodayGame_Boxscore"><h3><a href="CELH-PLF-14.html">Boxscore</a></h3></td></tr></table><table class="STHSTodayGame_GameData">
<tr><td class="STHSTodayGame_TeamName"><h3>HC Eagles Moravia</h3></td><td class="STHSTodayGame_TeamScore"><h3><span style="color:red">4</span></h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Dionyz Vyskoc(4), Nico Gross(1), Zivan Zidek(2), Sasha Dangelchek(1)<br /><br />
Christoffer Bjornsson (MOR), 23 saves from 26 shots - (0.885), W, 4-3-0, 65:37 minutes<br /><br /></td></tr>
<tr><td class="STHSTodayGame_TeamName"><h3>HC Black Eagles Silesia</h3></td><td class="STHSTodayGame_TeamScore"><h3>3</h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Josef Kubinec(1), Piotr Czerkawski(3), Vratislav Zbynek(2)<br /><br />
Mike Verminski (SBE), 35 saves from 39 shots - (0.897), OTL, 3-2-2, 65:37 minutes<br /><br /></td></tr></table>

<hr class="STHSTodayGame_HR"><br /></td>
<td class="STHSTodayGame_GameOverall">
<table class="STHSTodayGame_GameTitle"><tr><td class="STHSTodayGame_GameNumber"><h3>Pro Game 15</h3></td><td class="STHSTodayGame_Boxscore"><h3><a href="CELH-PLF-15.html">Boxscore</a></h3></td></tr></table><table class="STHSTodayGame_GameData">
<tr><td class="STHSTodayGame_TeamName"><h3>HC Lions Bohemia</h3></td><td class="STHSTodayGame_TeamScore"><h3><span style="color:red">7</span></h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Cameron Urbowicz(1), Travis Jeziak(1), Walter White(2,3), Dickie Pecker(3), Petr Kolesnikovs(2), Matej Stransky(3)<br /><br />
Chris Partridge (BOH), 29 saves from 30 shots - (0.967), W, 5-0-0, 60:00 minutes<br /><br /></td></tr>
<tr><td class="STHSTodayGame_TeamName"><h3>HC Eagles Moravia</h3></td><td class="STHSTodayGame_TeamScore"><h3>1</h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Marian Potoczny(1)<br /><br />
Christoffer Bjornsson (MOR), 28 saves from 35 shots - (0.800), L, 4-4-0, 60:00 minutes<br /><br /></td></tr></table>

<hr class="STHSTodayGame_HR"><br /></td></tr>
<tr><td class="STHSTodayGame_GameOverall">
<table class="STHSTodayGame_GameTitle"><tr><td class="STHSTodayGame_GameNumber"><h3>Pro Game 16</h3></td><td class="STHSTodayGame_Boxscore"><h3><a href="CELH-PLF-16.html">Boxscore</a></h3></td></tr></table><table class="STHSTodayGame_GameData">
<tr><td class="STHSTodayGame_TeamName"><h3>HC Lions Bohemia</h3></td><td class="STHSTodayGame_TeamScore"><h3><span style="color:red">3</span></h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Walter White(4,5), Matej Stransky(4)<br /><br />
Chris Partridge (BOH), 31 saves from 33 shots - (0.939), W, 6-0-0, 60:00 minutes<br /><br /></td></tr>
<tr><td class="STHSTodayGame_TeamName"><h3>HC Eagles Moravia</h3></td><td class="STHSTodayGame_TeamScore"><h3>2</h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Aviad Ratzon(1), Dionyz Vyskoc(5)<br /><br />
Christoffer Bjornsson (MOR), 32 saves from 35 shots - (0.914), L, 4-5-0, 58:58 minutes<br /><br /></td></tr></table>

<hr class="STHSTodayGame_HR"><br /></td>
<td class="STHSTodayGame_GameOverall">
<table class="STHSTodayGame_GameTitle"><tr><td class="STHSTodayGame_GameNumber"><h3>Pro Game 17</h3></td><td class="STHSTodayGame_Boxscore"><h3><a href="CELH-PLF-17.html">Boxscore</a></h3></td></tr></table><table class="STHSTodayGame_GameData">
<tr><td class="STHSTodayGame_TeamName"><h3>HC Eagles Moravia</h3></td><td class="STHSTodayGame_TeamScore"><h3><span style="color:red">2</span></h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Slappy McDoodle(1), Sachimo Zoidberg(2)<br /><br />
Christoffer Bjornsson (MOR), 25 saves from 25 shots - (1.000), W, 5-5-0, 60:00 minutes<br /><br /></td></tr>
<tr><td class="STHSTodayGame_TeamName"><h3>HC Lions Bohemia</h3></td><td class="STHSTodayGame_TeamScore"><h3>0</h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote"><br /><br />
Chris Partridge (BOH), 30 saves from 32 shots - (0.938), L, 6-1-0, 60:00 minutes<br /><br /></td></tr></table>

<hr class="STHSTodayGame_HR"><br /></td></tr>
<tr><td class="STHSTodayGame_GameOverall">
<table class="STHSTodayGame_GameTitle"><tr><td class="STHSTodayGame_GameNumber"><h3>Pro Game 18 - End in Overtime</h3></td><td class="STHSTodayGame_Boxscore"><h3><a href="CELH-PLF-18.html">Boxscore</a></h3></td></tr></table><table class="STHSTodayGame_GameData">
<tr><td class="STHSTodayGame_TeamName"><h3>HC Eagles Moravia</h3></td><td class="STHSTodayGame_TeamScore"><h3><span style="color:red">2</span></h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Slappy McDoodle(2), Marek Vyskoc(1)<br /><br />
Christoffer Bjornsson (MOR), 33 saves from 34 shots - (0.971), W, 6-5-0, 63:45 minutes<br /><br /></td></tr>
<tr><td class="STHSTodayGame_TeamName"><h3>HC Lions Bohemia</h3></td><td class="STHSTodayGame_TeamScore"><h3>1</h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Konstantin Voloshin(1)<br /><br />
Chris Partridge (BOH), 24 saves from 26 shots - (0.923), OTL, 6-1-1, 63:45 minutes<br /><br /></td></tr></table>

<hr class="STHSTodayGame_HR"><br /></td>
<td class="STHSTodayGame_GameOverall">
<table class="STHSTodayGame_GameTitle"><tr><td class="STHSTodayGame_GameNumber"><h3>Pro Game 19</h3></td><td class="STHSTodayGame_Boxscore"><h3><a href="CELH-PLF-19.html">Boxscore</a></h3></td></tr></table><table class="STHSTodayGame_GameData">
<tr><td class="STHSTodayGame_TeamName"><h3>HC Lions Bohemia</h3></td><td class="STHSTodayGame_TeamScore"><h3>1</h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">
Konstantin Voloshin(2)<br /><br />
Chris Partridge (BOH), 24 saves from 26 shots - (0.923), L, 6-2-1, 58:35 minutes<br /><br /></td></tr>
<tr><td class="STHSTodayGame_TeamName"><h3>HC Eagles Moravia</h3></td><td class="STHSTodayGame_TeamScore"><h3><span style="color:red">2</span></h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Slappy McDoodle(3,4)<br /><br />
Christoffer Bjornsson (MOR), 29 saves from 30 shots - (0.967), W, 7-5-0, 60:00 minutes<br /><br /></td></tr></table>

<hr class="STHSTodayGame_HR"><br /></td></tr>
<tr><td class="STHSTodayGame_GameOverall">
<table class="STHSTodayGame_GameTitle"><tr><td class="STHSTodayGame_GameNumber"><h3>Pro Game 20 - End in Overtime</h3></td><td class="STHSTodayGame_Boxscore"><h3><a href="CELH-PLF-20.html">Boxscore</a></h3></td></tr></table><table class="STHSTodayGame_GameData">
<tr><td class="STHSTodayGame_TeamName"><h3>HC Eagles Moravia</h3></td><td class="STHSTodayGame_TeamScore"><h3><span style="color:red">3</span></h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Brady McIntyre(1), Marian Potoczny(2), Ondrej Ravchitikov(3)<br /><br />
Christoffer Bjornsson (MOR), 24 saves from 26 shots - (0.923), W, 8-5-0, 64:11 minutes<br /><br /></td></tr>
<tr><td class="STHSTodayGame_TeamName"><h3>HC Lions Bohemia</h3></td><td class="STHSTodayGame_TeamScore"><h3>2</h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Walter White(6), Matej Stransky(5)<br /><br />
Chris Partridge (BOH), 31 saves from 34 shots - (0.912), OTL, 6-2-2, 64:11 minutes<br /><br /></td></tr></table>

<hr class="STHSTodayGame_HR"><br /></td>
<td></td></tr></table>
<h1 class="STHSTomorrowGame_TomorrowGame">Tomorrow's Games</h1>
End of Season
<table class="STHSSchedule_MainTable"><tr><td class="STHSSchedule_TitleGameNumber"><b>Game #</b></td><td class="STHSSchedule_TitleSchedule"><b>Schedule</b></td>
</tr>
<tr><td colspan="2" class="STHSTomorrowGame_GameDay"><b>Day 22</b></td></tr>
<tr><td colspan="2" class="STHSAlignTop">
<table class="STHSTomorrowGame_SubTable">
</table>
</td></tr>
</table>
<?php include "Footer.php";?>
