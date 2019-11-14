<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>CELH - Today Games</title>
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
<h3 class="STHSTodayGame_Today3Star">Today 3 Star : <br />Pro : 1 - Mike Verminski (HC Black Eagles Silesia) / 2 - Christoffer Bjornsson (HC Eagles Moravia) / 3 - Marian Potoczny (HC Eagles Moravia)</h3>
<table class="STHSTodayGame_MainTable">
<tr><td class="STHSTodayGame_GameOverall">
<table class="STHSTodayGame_GameTitle"><tr><td class="STHSTodayGame_GameNumber"><h3>Pro Game 1</h3></td><td class="STHSTodayGame_Boxscore"><h3><a href="CELH-1.html">Boxscore</a></h3></td></tr></table><table class="STHSTodayGame_GameData">
<tr><td class="STHSTodayGame_TeamName"><h3>HC Lynx Kladno</h3></td><td class="STHSTodayGame_TeamScore"><h3><span style="color:red">2</span></h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Michael Scarn(1), Merit Csonka(1)<br /><br />
Georgette Pel (KLD), 17 saves from 17 shots - (1.000), W, 1-0-0, 60:00 minutes<br /><br /></td></tr>
<tr><td class="STHSTodayGame_TeamName"><h3>HC Black Eagles Silesia</h3></td><td class="STHSTodayGame_TeamScore"><h3>0</h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote"><br /><br />
Mike Verminski (SBE), 23 saves from 24 shots - (0.958), L, 0-1-0, 59:36 minutes<br /><br /></td></tr></table>

<hr class="STHSTodayGame_HR"><br /></td>
<td class="STHSTodayGame_GameOverall">
<table class="STHSTodayGame_GameTitle"><tr><td class="STHSTodayGame_GameNumber"><h3>Pro Game 2 - End in Shootout</h3></td><td class="STHSTodayGame_Boxscore"><h3><a href="CELH-2.html">Boxscore</a></h3></td></tr></table><table class="STHSTodayGame_GameData">
<tr><td class="STHSTodayGame_TeamName"><h3>HC Eagles Moravia</h3></td><td class="STHSTodayGame_TeamScore"><h3>3</h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">
Aviad Ratzon(1), Marian Potoczny(1), Ty Justice(1)<br /><br />
Christoffer Bjornsson (MOR), 38 saves from 41 shots - (0.927), OTL, 0-0-1, 65:00 minutes<br /><br /></td></tr>
<tr><td class="STHSTodayGame_TeamName"><h3>HC Lions Bohemia</h3></td><td class="STHSTodayGame_TeamScore"><h3><span style="color:red">4</span></h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Jan Zacha(1), Dickie Pecker(1), Matej Stransky(1)<br /><br />
Chris Partridge (BOH), 37 saves from 40 shots - (0.925), W, 1-0-0, 65:00 minutes<br /><br /></td></tr></table>

<hr class="STHSTodayGame_HR"><br /></td></tr>
<tr><td class="STHSTodayGame_GameOverall">
<table class="STHSTodayGame_GameTitle"><tr><td class="STHSTodayGame_GameNumber"><h3>Pro Game 3</h3></td><td class="STHSTodayGame_Boxscore"><h3><a href="CELH-3.html">Boxscore</a></h3></td></tr></table><table class="STHSTodayGame_GameData">
<tr><td class="STHSTodayGame_TeamName"><h3>HC Lynx Kladno</h3></td><td class="STHSTodayGame_TeamScore"><h3>2</h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">
Merit Csonka(2,3)<br /><br />
Georgette Pel (KLD), 28 saves from 31 shots - (0.903), L, 1-1-0, 59:54 minutes<br /><br /></td></tr>
<tr><td class="STHSTodayGame_TeamName"><h3>HC Eagles Moravia</h3></td><td class="STHSTodayGame_TeamScore"><h3><span style="color:red">3</span></h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Slappy McDoodle(1), Zivan Zidek(1), Sachimo Zoidberg(1)<br /><br />
Christoffer Bjornsson (MOR), 24 saves from 26 shots - (0.923), W, 1-0-1, 60:00 minutes<br /><br /></td></tr></table>

<hr class="STHSTodayGame_HR"><br /></td>
<td class="STHSTodayGame_GameOverall">
<table class="STHSTodayGame_GameTitle"><tr><td class="STHSTodayGame_GameNumber"><h3>Pro Game 4</h3></td><td class="STHSTodayGame_Boxscore"><h3><a href="CELH-4.html">Boxscore</a></h3></td></tr></table><table class="STHSTodayGame_GameData">
<tr><td class="STHSTodayGame_TeamName"><h3>HC Black Eagles Silesia</h3></td><td class="STHSTodayGame_TeamScore"><h3>1</h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">
Jakub Novak(1)<br /><br />
Mike Verminski (SBE), 20 saves from 23 shots - (0.870), L, 0-2-0, 60:00 minutes<br /><br /></td></tr>
<tr><td class="STHSTodayGame_TeamName"><h3>HC Lynx Kladno</h3></td><td class="STHSTodayGame_TeamScore"><h3><span style="color:red">3</span></h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Schnitinfritz Jagr(1), Grayson St. Raegan(1), Merit Csonka(4)<br /><br />
Georgette Pel (KLD), 17 saves from 18 shots - (0.944), W, 2-1-0, 60:00 minutes<br /><br /></td></tr></table>

<hr class="STHSTodayGame_HR"><br /></td></tr>
<tr><td class="STHSTodayGame_GameOverall">
<table class="STHSTodayGame_GameTitle"><tr><td class="STHSTodayGame_GameNumber"><h3>Pro Game 5</h3></td><td class="STHSTodayGame_Boxscore"><h3><a href="CELH-5.html">Boxscore</a></h3></td></tr></table><table class="STHSTodayGame_GameData">
<tr><td class="STHSTodayGame_TeamName"><h3>HC Black Eagles Silesia</h3></td><td class="STHSTodayGame_TeamScore"><h3><span style="color:red">3</span></h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Piotr Czerkawski(1), Jakub Novak(2), Jakub Trocheck(1)<br /><br />
Mike Verminski (SBE), 37 saves from 39 shots - (0.949), W, 1-2-0, 60:00 minutes<br /><br /></td></tr>
<tr><td class="STHSTodayGame_TeamName"><h3>HC Lions Bohemia</h3></td><td class="STHSTodayGame_TeamScore"><h3>2</h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Luke Thomason(1), Pierre-Luc Laflamme(1)<br /><br />
Chris Partridge (BOH), 22 saves from 25 shots - (0.880), L, 1-1-0, 59:54 minutes<br /><br /></td></tr></table>

<hr class="STHSTodayGame_HR"><br /></td>
<td class="STHSTodayGame_GameOverall">
<table class="STHSTodayGame_GameTitle"><tr><td class="STHSTodayGame_GameNumber"><h3>Pro Game 6</h3></td><td class="STHSTodayGame_Boxscore"><h3><a href="CELH-6.html">Boxscore</a></h3></td></tr></table><table class="STHSTodayGame_GameData">
<tr><td class="STHSTodayGame_TeamName"><h3>HC Lions Bohemia</h3></td><td class="STHSTodayGame_TeamScore"><h3>0</h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">
<br /><br />
Chris Partridge (BOH), 18 saves from 19 shots - (0.947), L, 1-2-0, 59:09 minutes<br /><br /></td></tr>
<tr><td class="STHSTodayGame_TeamName"><h3>HC Eagles Moravia</h3></td><td class="STHSTodayGame_TeamScore"><h3><span style="color:red">1</span></h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Daniel Garland(1)<br /><br />
Christoffer Bjornsson (MOR), 25 saves from 25 shots - (1.000), W, 2-0-1, 60:00 minutes<br /><br /></td></tr></table>

<hr class="STHSTodayGame_HR"><br /></td></tr>
<tr><td class="STHSTodayGame_GameOverall">
<table class="STHSTodayGame_GameTitle"><tr><td class="STHSTodayGame_GameNumber"><h3>Pro Game 7 - End in Overtime</h3></td><td class="STHSTodayGame_Boxscore"><h3><a href="CELH-7.html">Boxscore</a></h3></td></tr></table><table class="STHSTodayGame_GameData">
<tr><td class="STHSTodayGame_TeamName"><h3>HC Lynx Kladno</h3></td><td class="STHSTodayGame_TeamScore"><h3>1</h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">
Cash Savage(1)<br /><br />
Georgette Pel (KLD), 29 saves from 31 shots - (0.935), OTL, 2-1-1, 62:37 minutes<br /><br /></td></tr>
<tr><td class="STHSTodayGame_TeamName"><h3>HC Black Eagles Silesia</h3></td><td class="STHSTodayGame_TeamScore"><h3><span style="color:red">2</span></h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Josef Kubinec(1), Piotr Czerkawski(2)<br /><br />
Mike Verminski (SBE), 26 saves from 27 shots - (0.963), W, 2-2-0, 62:37 minutes<br /><br /></td></tr></table>

<hr class="STHSTodayGame_HR"><br /></td>
<td class="STHSTodayGame_GameOverall">
<table class="STHSTodayGame_GameTitle"><tr><td class="STHSTodayGame_GameNumber"><h3>Pro Game 8</h3></td><td class="STHSTodayGame_Boxscore"><h3><a href="CELH-8.html">Boxscore</a></h3></td></tr></table><table class="STHSTodayGame_GameData">
<tr><td class="STHSTodayGame_TeamName"><h3>HC Eagles Moravia</h3></td><td class="STHSTodayGame_TeamScore"><h3><span style="color:red">3</span></h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Marian Potoczny(2), Ondrej Ravchitikov(1), Sachimo Zoidberg(2)<br /><br />
Christoffer Bjornsson (MOR), 26 saves from 27 shots - (0.963), W, 3-0-1, 60:00 minutes<br /><br /></td></tr>
<tr><td class="STHSTodayGame_TeamName"><h3>HC Lynx Kladno</h3></td><td class="STHSTodayGame_TeamScore"><h3>1</h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Patrik Satan(1)<br /><br />
Georgette Pel (KLD), 28 saves from 30 shots - (0.933), L, 2-2-1, 59:52 minutes<br /><br /></td></tr></table>

<hr class="STHSTodayGame_HR"><br /></td></tr>
<tr><td class="STHSTodayGame_GameOverall">
<table class="STHSTodayGame_GameTitle"><tr><td class="STHSTodayGame_GameNumber"><h3>Pro Game 9</h3></td><td class="STHSTodayGame_Boxscore"><h3><a href="CELH-9.html">Boxscore</a></h3></td></tr></table><table class="STHSTodayGame_GameData">
<tr><td class="STHSTodayGame_TeamName"><h3>HC Black Eagles Silesia</h3></td><td class="STHSTodayGame_TeamScore"><h3>1</h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">
Krysztof Kowalski(1)<br /><br />
Mike Verminski (SBE), 30 saves from 33 shots - (0.909), L, 2-3-0, 60:00 minutes<br /><br /></td></tr>
<tr><td class="STHSTodayGame_TeamName"><h3>HC Lions Bohemia</h3></td><td class="STHSTodayGame_TeamScore"><h3><span style="color:red">3</span></h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Pierre-Luc Laflamme(2), Travis Jeziak(1), Walter White(1)<br /><br />
Chris Partridge (BOH), 23 saves from 24 shots - (0.958), W, 2-2-0, 60:00 minutes<br /><br /></td></tr></table>

<hr class="STHSTodayGame_HR"><br /></td>
<td class="STHSTodayGame_GameOverall">
<table class="STHSTodayGame_GameTitle"><tr><td class="STHSTodayGame_GameNumber"><h3>Pro Game 10 - End in Shootout</h3></td><td class="STHSTodayGame_Boxscore"><h3><a href="CELH-10.html">Boxscore</a></h3></td></tr></table><table class="STHSTodayGame_GameData">
<tr><td class="STHSTodayGame_TeamName"><h3>HC Black Eagles Silesia</h3></td><td class="STHSTodayGame_TeamScore"><h3><span style="color:red">3</span></h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Zalleras Szlerchek(1), Jakub Novak(3)<br /><br />
Mike Verminski (SBE), 32 saves from 34 shots - (0.941), W, 3-3-0, 65:00 minutes<br /><br /></td></tr>
<tr><td class="STHSTodayGame_TeamName"><h3>HC Eagles Moravia</h3></td><td class="STHSTodayGame_TeamScore"><h3>2</h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Slappy McDoodle(2), Ondrej Ravchitikov(2)<br /><br />
Christoffer Bjornsson (MOR), 25 saves from 27 shots - (0.926), OTL, 3-0-2, 64:22 minutes<br /><br /></td></tr></table>

<hr class="STHSTodayGame_HR"><br /></td></tr>
<tr><td class="STHSTodayGame_GameOverall">
<table class="STHSTodayGame_GameTitle"><tr><td class="STHSTodayGame_GameNumber"><h3>Pro Game 11 - End in Overtime</h3></td><td class="STHSTodayGame_Boxscore"><h3><a href="CELH-11.html">Boxscore</a></h3></td></tr></table><table class="STHSTodayGame_GameData">
<tr><td class="STHSTodayGame_TeamName"><h3>HC Lions Bohemia</h3></td><td class="STHSTodayGame_TeamScore"><h3><span style="color:red">2</span></h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Travis Jeziak(2), Petr Kolesnikovs(1)<br /><br />
Chris Partridge (BOH), 22 saves from 23 shots - (0.957), W, 3-2-0, 61:48 minutes<br /><br /></td></tr>
<tr><td class="STHSTodayGame_TeamName"><h3>HC Lynx Kladno</h3></td><td class="STHSTodayGame_TeamScore"><h3>1</h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Cash Savage(2)<br /><br />
Georgette Pel (KLD), 32 saves from 34 shots - (0.941), OTL, 2-2-2, 61:48 minutes<br /><br /></td></tr></table>

<hr class="STHSTodayGame_HR"><br /></td>
<td class="STHSTodayGame_GameOverall">
<table class="STHSTodayGame_GameTitle"><tr><td class="STHSTodayGame_GameNumber"><h3>Pro Game 12 - End in Overtime</h3></td><td class="STHSTodayGame_Boxscore"><h3><a href="CELH-12.html">Boxscore</a></h3></td></tr></table><table class="STHSTodayGame_GameData">
<tr><td class="STHSTodayGame_TeamName"><h3>HC Lions Bohemia</h3></td><td class="STHSTodayGame_TeamScore"><h3>2</h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">
Walter White(2), Matej Stransky(2)<br /><br />
Chris Partridge (BOH), 34 saves from 37 shots - (0.919), OTL, 3-2-1, 63:04 minutes<br /><br /></td></tr>
<tr><td class="STHSTodayGame_TeamName"><h3>HC Eagles Moravia</h3></td><td class="STHSTodayGame_TeamScore"><h3><span style="color:red">3</span></h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Marian Potoczny(3,4), Ondrej Ravchitikov(3)<br /><br />
Christoffer Bjornsson (MOR), 25 saves from 27 shots - (0.926), W, 4-0-2, 63:04 minutes<br /><br /></td></tr></table>

<hr class="STHSTodayGame_HR"><br /></td></tr>
<tr><td class="STHSTodayGame_GameOverall">
<table class="STHSTodayGame_GameTitle"><tr><td class="STHSTodayGame_GameNumber"><h3>Pro Game 13</h3></td><td class="STHSTodayGame_Boxscore"><h3><a href="CELH-13.html">Boxscore</a></h3></td></tr></table><table class="STHSTodayGame_GameData">
<tr><td class="STHSTodayGame_TeamName"><h3>HC Lynx Kladno</h3></td><td class="STHSTodayGame_TeamScore"><h3>1</h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">
Merit Csonka(5)<br /><br />
Georgette Pel (KLD), 19 saves from 21 shots - (0.905), L, 2-3-2, 58:52 minutes<br /><br /></td></tr>
<tr><td class="STHSTodayGame_TeamName"><h3>HC Black Eagles Silesia</h3></td><td class="STHSTodayGame_TeamScore"><h3><span style="color:red">2</span></h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Przemyslaw Brzeszczyczkiewicz(1), Jakub Trocheck(2)<br /><br />
Mike Verminski (SBE), 12 saves from 13 shots - (0.923), W, 4-3-0, 60:00 minutes<br /><br /></td></tr></table>

<hr class="STHSTodayGame_HR"><br /></td>
<td class="STHSTodayGame_GameOverall">
<table class="STHSTodayGame_GameTitle"><tr><td class="STHSTodayGame_GameNumber"><h3>Pro Game 14 - End in Shootout</h3></td><td class="STHSTodayGame_Boxscore"><h3><a href="CELH-14.html">Boxscore</a></h3></td></tr></table><table class="STHSTodayGame_GameData">
<tr><td class="STHSTodayGame_TeamName"><h3>HC Eagles Moravia</h3></td><td class="STHSTodayGame_TeamScore"><h3><span style="color:red">3</span></h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Aviad Ratzon(2), Ty Justice(2)<br /><br />
Christoffer Bjornsson (MOR), 33 saves from 35 shots - (0.943), W, 5-0-2, 65:00 minutes<br /><br /></td></tr>
<tr><td class="STHSTodayGame_TeamName"><h3>HC Lions Bohemia</h3></td><td class="STHSTodayGame_TeamScore"><h3>2</h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Pierre-Luc Laflamme(3), Walter White(3)<br /><br />
Chris Partridge (BOH), 30 saves from 32 shots - (0.938), OTL, 3-2-2, 65:00 minutes<br /><br /></td></tr></table>

<hr class="STHSTodayGame_HR"><br /></td></tr>
<tr><td class="STHSTodayGame_GameOverall">
<table class="STHSTodayGame_GameTitle"><tr><td class="STHSTodayGame_GameNumber"><h3>Pro Game 15 - End in Overtime</h3></td><td class="STHSTodayGame_Boxscore"><h3><a href="CELH-15.html">Boxscore</a></h3></td></tr></table><table class="STHSTodayGame_GameData">
<tr><td class="STHSTodayGame_TeamName"><h3>HC Lynx Kladno</h3></td><td class="STHSTodayGame_TeamScore"><h3><span style="color:red">2</span></h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Alex Winters(1,2)<br /><br />
Georgette Pel (KLD), 27 saves from 28 shots - (0.964), W, 3-3-2, 62:20 minutes<br /><br /></td></tr>
<tr><td class="STHSTodayGame_TeamName"><h3>HC Black Eagles Silesia</h3></td><td class="STHSTodayGame_TeamScore"><h3>1</h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Piotr Czerkawski(3)<br /><br />
Mike Verminski (SBE), 26 saves from 28 shots - (0.929), OTL, 4-3-1, 62:08 minutes<br /><br /></td></tr></table>

<hr class="STHSTodayGame_HR"><br /></td>
<td class="STHSTodayGame_GameOverall">
<table class="STHSTodayGame_GameTitle"><tr><td class="STHSTodayGame_GameNumber"><h3>Pro Game 16 - End in Shootout</h3></td><td class="STHSTodayGame_Boxscore"><h3><a href="CELH-16.html">Boxscore</a></h3></td></tr></table><table class="STHSTodayGame_GameData">
<tr><td class="STHSTodayGame_TeamName"><h3>HC Lions Bohemia</h3></td><td class="STHSTodayGame_TeamScore"><h3><span style="color:red">3</span></h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Sean Stevenson Jr.(1), Dickie Pecker(2)<br /><br />
Chris Partridge (BOH), 30 saves from 32 shots - (0.938), W, 4-2-2, 65:00 minutes<br /><br /></td></tr>
<tr><td class="STHSTodayGame_TeamName"><h3>HC Eagles Moravia</h3></td><td class="STHSTodayGame_TeamScore"><h3>2</h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Dionyz Vyskoc(1), Marian Potoczny(5)<br /><br />
Christoffer Bjornsson (MOR), 24 saves from 26 shots - (0.923), OTL, 5-0-3, 65:00 minutes<br /><br /></td></tr></table>

<hr class="STHSTodayGame_HR"><br /></td></tr>
<tr><td class="STHSTodayGame_GameOverall">
<table class="STHSTodayGame_GameTitle"><tr><td class="STHSTodayGame_GameNumber"><h3>Pro Game 17</h3></td><td class="STHSTodayGame_Boxscore"><h3><a href="CELH-17.html">Boxscore</a></h3></td></tr></table><table class="STHSTodayGame_GameData">
<tr><td class="STHSTodayGame_TeamName"><h3>HC Black Eagles Silesia</h3></td><td class="STHSTodayGame_TeamScore"><h3><span style="color:red">2</span></h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Alexander Zajac(1), Krysztof Kowalski(2)<br /><br />
Mike Verminski (SBE), 23 saves from 23 shots - (1.000), W, 5-3-1, 60:00 minutes<br /><br /></td></tr>
<tr><td class="STHSTodayGame_TeamName"><h3>HC Lynx Kladno</h3></td><td class="STHSTodayGame_TeamScore"><h3>0</h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote"><br /><br />
Georgette Pel (KLD), 21 saves from 23 shots - (0.913), L, 3-4-2, 60:00 minutes<br /><br /></td></tr></table>

<hr class="STHSTodayGame_HR"><br /></td>
<td class="STHSTodayGame_GameOverall">
<table class="STHSTodayGame_GameTitle"><tr><td class="STHSTodayGame_GameNumber"><h3>Pro Game 18 - End in Shootout</h3></td><td class="STHSTodayGame_Boxscore"><h3><a href="CELH-18.html">Boxscore</a></h3></td></tr></table><table class="STHSTodayGame_GameData">
<tr><td class="STHSTodayGame_TeamName"><h3>HC Eagles Moravia</h3></td><td class="STHSTodayGame_TeamScore"><h3>1</h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">
Slappy McDoodle(3)<br /><br />
Christoffer Bjornsson (MOR), 28 saves from 29 shots - (0.966), OTL, 5-0-4, 65:00 minutes<br /><br /></td></tr>
<tr><td class="STHSTodayGame_TeamName"><h3>HC Lions Bohemia</h3></td><td class="STHSTodayGame_TeamScore"><h3><span style="color:red">2</span></h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Tokek Takshak(1)<br /><br />
Chris Partridge (BOH), 32 saves from 33 shots - (0.970), W, 5-2-2, 65:00 minutes<br /><br /></td></tr></table>

<hr class="STHSTodayGame_HR"><br /></td></tr>
<tr><td class="STHSTodayGame_GameOverall">
<table class="STHSTodayGame_GameTitle"><tr><td class="STHSTodayGame_GameNumber"><h3>Pro Game 19</h3></td><td class="STHSTodayGame_Boxscore"><h3><a href="CELH-19.html">Boxscore</a></h3></td></tr></table><table class="STHSTodayGame_GameData">
<tr><td class="STHSTodayGame_TeamName"><h3>HC Black Eagles Silesia</h3></td><td class="STHSTodayGame_TeamScore"><h3>0</h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">
<br /><br />
Mike Verminski (SBE), 17 saves from 20 shots - (0.850), L, 5-4-1, 60:00 minutes<br /><br /></td></tr>
<tr><td class="STHSTodayGame_TeamName"><h3>HC Lynx Kladno</h3></td><td class="STHSTodayGame_TeamScore"><h3><span style="color:red">3</span></h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Barret McCarthy(1), Ravyn Tedisko(1), Patrik Satan(2)<br /><br />
Georgette Pel (KLD), 18 saves from 18 shots - (1.000), W, 4-4-2, 60:00 minutes<br /><br /></td></tr></table>

<hr class="STHSTodayGame_HR"><br /></td>
<td class="STHSTodayGame_GameOverall">
<table class="STHSTodayGame_GameTitle"><tr><td class="STHSTodayGame_GameNumber"><h3>Pro Game 20</h3></td><td class="STHSTodayGame_Boxscore"><h3><a href="CELH-20.html">Boxscore</a></h3></td></tr></table><table class="STHSTodayGame_GameData">
<tr><td class="STHSTodayGame_TeamName"><h3>HC Lions Bohemia</h3></td><td class="STHSTodayGame_TeamScore"><h3>1</h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">
Konstantin Voloshin(1)<br /><br />
Chris Partridge (BOH), 33 saves from 35 shots - (0.943), L, 5-3-2, 59:01 minutes<br /><br /></td></tr>
<tr><td class="STHSTodayGame_TeamName"><h3>HC Eagles Moravia</h3></td><td class="STHSTodayGame_TeamScore"><h3><span style="color:red">3</span></h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Marek Vyskoc(1), Ondrej Ravchitikov(4), Sachimo Zoidberg(3)<br /><br />
Christoffer Bjornsson (MOR), 31 saves from 32 shots - (0.969), W, 6-0-4, 60:00 minutes<br /><br /></td></tr></table>

<hr class="STHSTodayGame_HR"><br /></td></tr>
<tr><td class="STHSTodayGame_GameOverall">
<table class="STHSTodayGame_GameTitle"><tr><td class="STHSTodayGame_GameNumber"><h3>Pro Game 21</h3></td><td class="STHSTodayGame_Boxscore"><h3><a href="CELH-21.html">Boxscore</a></h3></td></tr></table><table class="STHSTodayGame_GameData">
<tr><td class="STHSTodayGame_TeamName"><h3>HC Eagles Moravia</h3></td><td class="STHSTodayGame_TeamScore"><h3>1</h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">
Nico Gross(1)<br /><br />
Christoffer Bjornsson (MOR), 23 saves from 25 shots - (0.920), L, 6-1-4, 60:00 minutes<br /><br /></td></tr>
<tr><td class="STHSTodayGame_TeamName"><h3>HC Black Eagles Silesia</h3></td><td class="STHSTodayGame_TeamScore"><h3><span style="color:red">2</span></h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Charlie Schieck(1), Przemyslaw Brzeszczyczkiewicz(2)<br /><br />
Mike Verminski (SBE), 29 saves from 30 shots - (0.967), W, 6-4-1, 60:00 minutes<br /><br /></td></tr></table>

<hr class="STHSTodayGame_HR"><br /></td>
<td class="STHSTodayGame_GameOverall">
<table class="STHSTodayGame_GameTitle"><tr><td class="STHSTodayGame_GameNumber"><h3>Pro Game 22</h3></td><td class="STHSTodayGame_Boxscore"><h3><a href="CELH-22.html">Boxscore</a></h3></td></tr></table><table class="STHSTodayGame_GameData">
<tr><td class="STHSTodayGame_TeamName"><h3>HC Lions Bohemia</h3></td><td class="STHSTodayGame_TeamScore"><h3>2</h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">
DeMaricus Smyth(1), Walter White(4)<br /><br />
Chris Partridge (BOH), 13 saves from 16 shots - (0.813), L, 5-4-2, 59:19 minutes<br /><br /></td></tr>
<tr><td class="STHSTodayGame_TeamName"><h3>HC Lynx Kladno</h3></td><td class="STHSTodayGame_TeamScore"><h3><span style="color:red">3</span></h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Barret McCarthy(2), Cash Savage(3), Merit Csonka(6)<br /><br />
Georgette Pel (KLD), 35 saves from 37 shots - (0.946), W, 5-4-2, 60:00 minutes<br /><br /></td></tr></table>

<hr class="STHSTodayGame_HR"><br /></td></tr>
<tr><td class="STHSTodayGame_GameOverall">
<table class="STHSTodayGame_GameTitle"><tr><td class="STHSTodayGame_GameNumber"><h3>Pro Game 23 - End in Overtime</h3></td><td class="STHSTodayGame_Boxscore"><h3><a href="CELH-23.html">Boxscore</a></h3></td></tr></table><table class="STHSTodayGame_GameData">
<tr><td class="STHSTodayGame_TeamName"><h3>HC Eagles Moravia</h3></td><td class="STHSTodayGame_TeamScore"><h3>2</h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">
Aviad Ratzon(3), Marian Potoczny(6)<br /><br />
Christoffer Bjornsson (MOR), 26 saves from 29 shots - (0.897), OTL, 6-1-5, 60:06 minutes<br /><br /></td></tr>
<tr><td class="STHSTodayGame_TeamName"><h3>HC Black Eagles Silesia</h3></td><td class="STHSTodayGame_TeamScore"><h3><span style="color:red">3</span></h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Zalleras Szlerchek(2), Jakub Trocheck(3), Krysztof Kowalski(3)<br /><br />
Mike Verminski (SBE), 32 saves from 34 shots - (0.941), W, 7-4-1, 59:21 minutes<br /><br /></td></tr></table>

<hr class="STHSTodayGame_HR"><br /></td>
<td class="STHSTodayGame_GameOverall">
<table class="STHSTodayGame_GameTitle"><tr><td class="STHSTodayGame_GameNumber"><h3>Pro Game 24 - End in Shootout</h3></td><td class="STHSTodayGame_Boxscore"><h3><a href="CELH-24.html">Boxscore</a></h3></td></tr></table><table class="STHSTodayGame_GameData">
<tr><td class="STHSTodayGame_TeamName"><h3>HC Lynx Kladno</h3></td><td class="STHSTodayGame_TeamScore"><h3>2</h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">
Alex Winters(3), Patrik Satan(3)<br /><br />
Georgette Pel (KLD), 45 saves from 47 shots - (0.957), OTL, 5-4-3, 65:00 minutes<br /><br /></td></tr>
<tr><td class="STHSTodayGame_TeamName"><h3>HC Lions Bohemia</h3></td><td class="STHSTodayGame_TeamScore"><h3><span style="color:red">3</span></h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Petr Mikulak(1), Dickie Pecker(3)<br /><br />
Chris Partridge (BOH), 30 saves from 32 shots - (0.938), W, 6-4-2, 65:00 minutes<br /><br /></td></tr></table>

<hr class="STHSTodayGame_HR"><br /></td></tr>
<tr><td class="STHSTodayGame_GameOverall">
<table class="STHSTodayGame_GameTitle"><tr><td class="STHSTodayGame_GameNumber"><h3>Pro Game 25</h3></td><td class="STHSTodayGame_Boxscore"><h3><a href="CELH-25.html">Boxscore</a></h3></td></tr></table><table class="STHSTodayGame_GameData">
<tr><td class="STHSTodayGame_TeamName"><h3>HC Lynx Kladno</h3></td><td class="STHSTodayGame_TeamScore"><h3>1</h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">
Merit Csonka(7)<br /><br />
Georgette Pel (KLD), 23 saves from 27 shots - (0.852), L, 5-5-3, 60:00 minutes<br /><br /></td></tr>
<tr><td class="STHSTodayGame_TeamName"><h3>HC Eagles Moravia</h3></td><td class="STHSTodayGame_TeamScore"><h3><span style="color:red">4</span></h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Boruvka Banananak(1), Brady McIntyre(1), Marian Potoczny(7), Ondrej Ravchitikov(5)<br /><br />
Christoffer Bjornsson (MOR), 28 saves from 29 shots - (0.966), W, 7-1-5, 60:00 minutes<br /><br /></td></tr></table>

<hr class="STHSTodayGame_HR"><br /></td>
<td class="STHSTodayGame_GameOverall">
<table class="STHSTodayGame_GameTitle"><tr><td class="STHSTodayGame_GameNumber"><h3>Pro Game 26</h3></td><td class="STHSTodayGame_Boxscore"><h3><a href="CELH-26.html">Boxscore</a></h3></td></tr></table><table class="STHSTodayGame_GameData">
<tr><td class="STHSTodayGame_TeamName"><h3>HC Lions Bohemia</h3></td><td class="STHSTodayGame_TeamScore"><h3>0</h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">
<br /><br />
Chris Partridge (BOH), 26 saves from 27 shots - (0.963), L, 6-5-2, 58:48 minutes<br /><br /></td></tr>
<tr><td class="STHSTodayGame_TeamName"><h3>HC Black Eagles Silesia</h3></td><td class="STHSTodayGame_TeamScore"><h3><span style="color:red">1</span></h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Charlie Schieck(2)<br /><br />
Mike Verminski (SBE), 27 saves from 27 shots - (1.000), W, 8-4-1, 60:00 minutes<br /><br /></td></tr></table>

<hr class="STHSTodayGame_HR"><br /></td></tr>
<tr><td class="STHSTodayGame_GameOverall">
<table class="STHSTodayGame_GameTitle"><tr><td class="STHSTodayGame_GameNumber"><h3>Pro Game 27</h3></td><td class="STHSTodayGame_Boxscore"><h3><a href="CELH-27.html">Boxscore</a></h3></td></tr></table><table class="STHSTodayGame_GameData">
<tr><td class="STHSTodayGame_TeamName"><h3>HC Eagles Moravia</h3></td><td class="STHSTodayGame_TeamScore"><h3><span style="color:red">1</span></h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Sachimo Zoidberg(4)<br /><br />
Christoffer Bjornsson (MOR), 24 saves from 24 shots - (1.000), W, 8-1-5, 60:00 minutes<br /><br /></td></tr>
<tr><td class="STHSTodayGame_TeamName"><h3>HC Lynx Kladno</h3></td><td class="STHSTodayGame_TeamScore"><h3>0</h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote"><br /><br />
Georgette Pel (KLD), 33 saves from 34 shots - (0.971), L, 5-6-3, 58:47 minutes<br /><br /></td></tr></table>

<hr class="STHSTodayGame_HR"><br /></td>
<td class="STHSTodayGame_GameOverall">
<table class="STHSTodayGame_GameTitle"><tr><td class="STHSTodayGame_GameNumber"><h3>Pro Game 28</h3></td><td class="STHSTodayGame_Boxscore"><h3><a href="CELH-28.html">Boxscore</a></h3></td></tr></table><table class="STHSTodayGame_GameData">
<tr><td class="STHSTodayGame_TeamName"><h3>HC Black Eagles Silesia</h3></td><td class="STHSTodayGame_TeamScore"><h3>0</h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">
<br /><br />
Mike Verminski (SBE), 28 saves from 29 shots - (0.966), L, 8-5-1, 59:21 minutes<br /><br /></td></tr>
<tr><td class="STHSTodayGame_TeamName"><h3>HC Lions Bohemia</h3></td><td class="STHSTodayGame_TeamScore"><h3><span style="color:red">1</span></h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Matej Stransky(3)<br /><br />
Chris Partridge (BOH), 21 saves from 21 shots - (1.000), W, 7-5-2, 60:00 minutes<br /><br /></td></tr></table>

<hr class="STHSTodayGame_HR"><br /></td></tr>
<tr><td class="STHSTodayGame_GameOverall">
<table class="STHSTodayGame_GameTitle"><tr><td class="STHSTodayGame_GameNumber"><h3>Pro Game 29 - End in Overtime</h3></td><td class="STHSTodayGame_Boxscore"><h3><a href="CELH-29.html">Boxscore</a></h3></td></tr></table><table class="STHSTodayGame_GameData">
<tr><td class="STHSTodayGame_TeamName"><h3>HC Black Eagles Silesia</h3></td><td class="STHSTodayGame_TeamScore"><h3>2</h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">
Jakub Trocheck(4), Krysztof Kowalski(4)<br /><br />
Mike Verminski (SBE), 25 saves from 28 shots - (0.893), OTL, 8-5-2, 61:03 minutes<br /><br /></td></tr>
<tr><td class="STHSTodayGame_TeamName"><h3>HC Eagles Moravia</h3></td><td class="STHSTodayGame_TeamScore"><h3><span style="color:red">3</span></h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Aviad Ratzon(4), Marian Potoczny(8), Sachimo Zoidberg(5)<br /><br />
Christoffer Bjornsson (MOR), 25 saves from 27 shots - (0.926), W, 9-1-5, 61:03 minutes<br /><br /></td></tr></table>

<hr class="STHSTodayGame_HR"><br /></td>
<td class="STHSTodayGame_GameOverall">
<table class="STHSTodayGame_GameTitle"><tr><td class="STHSTodayGame_GameNumber"><h3>Pro Game 30</h3></td><td class="STHSTodayGame_Boxscore"><h3><a href="CELH-30.html">Boxscore</a></h3></td></tr></table><table class="STHSTodayGame_GameData">
<tr><td class="STHSTodayGame_TeamName"><h3>HC Lions Bohemia</h3></td><td class="STHSTodayGame_TeamScore"><h3><span style="color:red">3</span></h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Luke Thomason(2,3), Petr Mikulak(2)<br /><br />
Chris Partridge (BOH), 26 saves from 27 shots - (0.963), W, 8-5-2, 60:00 minutes<br /><br /></td></tr>
<tr><td class="STHSTodayGame_TeamName"><h3>HC Lynx Kladno</h3></td><td class="STHSTodayGame_TeamScore"><h3>1</h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Radovan Hudec(1)<br /><br />
Georgette Pel (KLD), 38 saves from 41 shots - (0.927), L, 5-7-3, 60:00 minutes<br /><br /></td></tr></table>

<hr class="STHSTodayGame_HR"><br /></td></tr>
<tr><td class="STHSTodayGame_GameOverall">
<table class="STHSTodayGame_GameTitle"><tr><td class="STHSTodayGame_GameNumber"><h3>Pro Game 31</h3></td><td class="STHSTodayGame_Boxscore"><h3><a href="CELH-31.html">Boxscore</a></h3></td></tr></table><table class="STHSTodayGame_GameData">
<tr><td class="STHSTodayGame_TeamName"><h3>HC Eagles Moravia</h3></td><td class="STHSTodayGame_TeamScore"><h3>1</h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">
Ondrej Ravchitikov(6)<br /><br />
Christoffer Bjornsson (MOR), 18 saves from 20 shots - (0.900), L, 9-2-5, 60:00 minutes<br /><br /></td></tr>
<tr><td class="STHSTodayGame_TeamName"><h3>HC Black Eagles Silesia</h3></td><td class="STHSTodayGame_TeamScore"><h3><span style="color:red">2</span></h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Alexander Zajac(2), Vratislav Zbynek(1)<br /><br />
Mike Verminski (SBE), 24 saves from 25 shots - (0.960), W, 9-5-2, 60:00 minutes<br /><br /></td></tr></table>

<hr class="STHSTodayGame_HR"><br /></td>
<td class="STHSTodayGame_GameOverall">
<table class="STHSTodayGame_GameTitle"><tr><td class="STHSTodayGame_GameNumber"><h3>Pro Game 32</h3></td><td class="STHSTodayGame_Boxscore"><h3><a href="CELH-32.html">Boxscore</a></h3></td></tr></table><table class="STHSTodayGame_GameData">
<tr><td class="STHSTodayGame_TeamName"><h3>HC Lynx Kladno</h3></td><td class="STHSTodayGame_TeamScore"><h3>2</h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">
Cash Savage(4,5)<br /><br />
Georgette Pel (KLD), 19 saves from 22 shots - (0.864), L, 5-8-3, 60:00 minutes<br /><br /></td></tr>
<tr><td class="STHSTodayGame_TeamName"><h3>HC Lions Bohemia</h3></td><td class="STHSTodayGame_TeamScore"><h3><span style="color:red">3</span></h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Pierre-Luc Laflamme(4), Travis Jeziak(3), Walter White(5)<br /><br />
Chris Partridge (BOH), 25 saves from 27 shots - (0.926), W, 9-5-2, 60:00 minutes<br /><br /></td></tr></table>

<hr class="STHSTodayGame_HR"><br /></td></tr>
<tr><td class="STHSTodayGame_GameOverall">
<table class="STHSTodayGame_GameTitle"><tr><td class="STHSTodayGame_GameNumber"><h3>Pro Game 33</h3></td><td class="STHSTodayGame_Boxscore"><h3><a href="CELH-33.html">Boxscore</a></h3></td></tr></table><table class="STHSTodayGame_GameData">
<tr><td class="STHSTodayGame_TeamName"><h3>HC Lynx Kladno</h3></td><td class="STHSTodayGame_TeamScore"><h3>1</h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">
Patrik Satan(4)<br /><br />
Georgette Pel (KLD), 36 saves from 39 shots - (0.923), L, 5-9-3, 60:00 minutes<br /><br /></td></tr>
<tr><td class="STHSTodayGame_TeamName"><h3>HC Eagles Moravia</h3></td><td class="STHSTodayGame_TeamScore"><h3><span style="color:red">3</span></h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Slappy McDoodle(4), Ondrej Ravchitikov(7,8)<br /><br />
Christoffer Bjornsson (MOR), 31 saves from 32 shots - (0.969), W, 10-2-5, 60:00 minutes<br /><br /></td></tr></table>

<hr class="STHSTodayGame_HR"><br /></td>
<td class="STHSTodayGame_GameOverall">
<table class="STHSTodayGame_GameTitle"><tr><td class="STHSTodayGame_GameNumber"><h3>Pro Game 34 - End in Overtime</h3></td><td class="STHSTodayGame_Boxscore"><h3><a href="CELH-34.html">Boxscore</a></h3></td></tr></table><table class="STHSTodayGame_GameData">
<tr><td class="STHSTodayGame_TeamName"><h3>HC Lions Bohemia</h3></td><td class="STHSTodayGame_TeamScore"><h3><span style="color:red">2</span></h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">DeMaricus Smyth(2), Matej Stransky(4)<br /><br />
Chris Partridge (BOH), 27 saves from 28 shots - (0.964), W, 10-5-2, 61:33 minutes<br /><br /></td></tr>
<tr><td class="STHSTodayGame_TeamName"><h3>HC Black Eagles Silesia</h3></td><td class="STHSTodayGame_TeamScore"><h3>1</h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Piotr Czerkawski(4)<br /><br />
Mike Verminski (SBE), 34 saves from 36 shots - (0.944), OTL, 9-5-3, 61:33 minutes<br /><br /></td></tr></table>

<hr class="STHSTodayGame_HR"><br /></td></tr>
<tr><td class="STHSTodayGame_GameOverall">
<table class="STHSTodayGame_GameTitle"><tr><td class="STHSTodayGame_GameNumber"><h3>Pro Game 35</h3></td><td class="STHSTodayGame_Boxscore"><h3><a href="CELH-35.html">Boxscore</a></h3></td></tr></table><table class="STHSTodayGame_GameData">
<tr><td class="STHSTodayGame_TeamName"><h3>HC Black Eagles Silesia</h3></td><td class="STHSTodayGame_TeamScore"><h3><span style="color:red">2</span></h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Jakub Trocheck(5), Vratislav Zbynek(2)<br /><br />
Mike Verminski (SBE), 26 saves from 27 shots - (0.963), W, 10-5-3, 60:00 minutes<br /><br /></td></tr>
<tr><td class="STHSTodayGame_TeamName"><h3>HC Lynx Kladno</h3></td><td class="STHSTodayGame_TeamScore"><h3>1</h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Merit Csonka(8)<br /><br />
Georgette Pel (KLD), 32 saves from 34 shots - (0.941), L, 5-10-3, 60:00 minutes<br /><br /></td></tr></table>

<hr class="STHSTodayGame_HR"><br /></td>
<td class="STHSTodayGame_GameOverall">
<table class="STHSTodayGame_GameTitle"><tr><td class="STHSTodayGame_GameNumber"><h3>Pro Game 36</h3></td><td class="STHSTodayGame_Boxscore"><h3><a href="CELH-36.html">Boxscore</a></h3></td></tr></table><table class="STHSTodayGame_GameData">
<tr><td class="STHSTodayGame_TeamName"><h3>HC Eagles Moravia</h3></td><td class="STHSTodayGame_TeamScore"><h3>1</h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">
Marian Potoczny(9)<br /><br />
Christoffer Bjornsson (MOR), 37 saves from 39 shots - (0.949), L, 10-3-5, 59:50 minutes<br /><br /></td></tr>
<tr><td class="STHSTodayGame_TeamName"><h3>HC Lions Bohemia</h3></td><td class="STHSTodayGame_TeamScore"><h3><span style="color:red">3</span></h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Luke Thomason(4), Travis Jeziak(4), Dickie Pecker(4)<br /><br />
Chris Partridge (BOH), 31 saves from 32 shots - (0.969), W, 11-5-2, 60:00 minutes<br /><br /></td></tr></table>

<hr class="STHSTodayGame_HR"><br /></td></tr>
<tr><td class="STHSTodayGame_GameOverall">
<table class="STHSTodayGame_GameTitle"><tr><td class="STHSTodayGame_GameNumber"><h3>Pro Game 37 - End in Overtime</h3></td><td class="STHSTodayGame_Boxscore"><h3><a href="CELH-37.html">Boxscore</a></h3></td></tr></table><table class="STHSTodayGame_GameData">
<tr><td class="STHSTodayGame_TeamName"><h3>HC Eagles Moravia</h3></td><td class="STHSTodayGame_TeamScore"><h3><span style="color:red">4</span></h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Aviad Ratzon(5), Nico Gross(2), Ondrej Ravchitikov(9), Sachimo Zoidberg(6)<br /><br />
Christoffer Bjornsson (MOR), 24 saves from 27 shots - (0.889), W, 11-3-5, 64:30 minutes<br /><br /></td></tr>
<tr><td class="STHSTodayGame_TeamName"><h3>HC Lynx Kladno</h3></td><td class="STHSTodayGame_TeamScore"><h3>3</h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Grayson St. Raegan(2,3), Patrik Satan(5)<br /><br />
Georgette Pel (KLD), 38 saves from 42 shots - (0.905), OTL, 5-10-4, 64:45 minutes<br /><br /></td></tr></table>

<hr class="STHSTodayGame_HR"><br /></td>
<td class="STHSTodayGame_GameOverall">
<table class="STHSTodayGame_GameTitle"><tr><td class="STHSTodayGame_GameNumber"><h3>Pro Game 38 - End in Shootout</h3></td><td class="STHSTodayGame_Boxscore"><h3><a href="CELH-38.html">Boxscore</a></h3></td></tr></table><table class="STHSTodayGame_GameData">
<tr><td class="STHSTodayGame_TeamName"><h3>HC Lions Bohemia</h3></td><td class="STHSTodayGame_TeamScore"><h3>2</h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">
Dickie Pecker(5,6)<br /><br />
Chris Partridge (BOH), 27 saves from 29 shots - (0.931), OTL, 11-5-3, 65:00 minutes<br /><br /></td></tr>
<tr><td class="STHSTodayGame_TeamName"><h3>HC Black Eagles Silesia</h3></td><td class="STHSTodayGame_TeamScore"><h3><span style="color:red">3</span></h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Piotr Czerkawski(5), Vratislav Zbynek(3)<br /><br />
Mike Verminski (SBE), 35 saves from 37 shots - (0.946), W, 11-5-3, 65:00 minutes<br /><br /></td></tr></table>

<hr class="STHSTodayGame_HR"><br /></td></tr>
<tr><td class="STHSTodayGame_GameOverall">
<table class="STHSTodayGame_GameTitle"><tr><td class="STHSTodayGame_GameNumber"><h3>Pro Game 39</h3></td><td class="STHSTodayGame_Boxscore"><h3><a href="CELH-39.html">Boxscore</a></h3></td></tr></table><table class="STHSTodayGame_GameData">
<tr><td class="STHSTodayGame_TeamName"><h3>HC Lynx Kladno</h3></td><td class="STHSTodayGame_TeamScore"><h3><span style="color:red">3</span></h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Shouta Aizawa(1), Merit Csonka(9), Patrik Satan(6)<br /><br />
Georgette Pel (KLD), 31 saves from 33 shots - (0.939), W, 6-10-4, 60:00 minutes<br /><br /></td></tr>
<tr><td class="STHSTodayGame_TeamName"><h3>HC Eagles Moravia</h3></td><td class="STHSTodayGame_TeamScore"><h3>2</h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Dionyz Vyskoc(2), Marian Potoczny(10)<br /><br />
Christoffer Bjornsson (MOR), 18 saves from 21 shots - (0.857), L, 11-4-5, 59:30 minutes<br /><br /></td></tr></table>

<hr class="STHSTodayGame_HR"><br /></td>
<td class="STHSTodayGame_GameOverall">
<table class="STHSTodayGame_GameTitle"><tr><td class="STHSTodayGame_GameNumber"><h3>Pro Game 40</h3></td><td class="STHSTodayGame_Boxscore"><h3><a href="CELH-40.html">Boxscore</a></h3></td></tr></table><table class="STHSTodayGame_GameData">
<tr><td class="STHSTodayGame_TeamName"><h3>HC Black Eagles Silesia</h3></td><td class="STHSTodayGame_TeamScore"><h3><span style="color:red">2</span></h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Josef Kubinec(2), Krysztof Kowalski(5)<br /><br />
Mike Verminski (SBE), 36 saves from 37 shots - (0.973), W, 12-5-3, 60:00 minutes<br /><br /></td></tr>
<tr><td class="STHSTodayGame_TeamName"><h3>HC Lions Bohemia</h3></td><td class="STHSTodayGame_TeamScore"><h3>1</h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Dickie Pecker(7)<br /><br />
Chris Partridge (BOH), 23 saves from 25 shots - (0.920), L, 11-6-3, 58:43 minutes<br /><br /></td></tr></table>

<hr class="STHSTodayGame_HR"><br /></td></tr>
<tr><td class="STHSTodayGame_GameOverall">
<table class="STHSTodayGame_GameTitle"><tr><td class="STHSTodayGame_GameNumber"><h3>Pro Game 41</h3></td><td class="STHSTodayGame_Boxscore"><h3><a href="CELH-41.html">Boxscore</a></h3></td></tr></table><table class="STHSTodayGame_GameData">
<tr><td class="STHSTodayGame_TeamName"><h3>HC Black Eagles Silesia</h3></td><td class="STHSTodayGame_TeamScore"><h3><span style="color:red">4</span></h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Charlie Schieck(3), Zalleras Szlerchek(3), Jakub Novak(4), Vratislav Zbynek(4)<br /><br />
Mike Verminski (SBE), 29 saves from 30 shots - (0.967), W, 13-5-3, 60:00 minutes<br /><br /></td></tr>
<tr><td class="STHSTodayGame_TeamName"><h3>HC Eagles Moravia</h3></td><td class="STHSTodayGame_TeamScore"><h3>1</h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Slappy McDoodle(5)<br /><br />
Christoffer Bjornsson (MOR), 22 saves from 26 shots - (0.846), L, 11-5-5, 60:00 minutes<br /><br /></td></tr></table>

<hr class="STHSTodayGame_HR"><br /></td>
<td class="STHSTodayGame_GameOverall">
<table class="STHSTodayGame_GameTitle"><tr><td class="STHSTodayGame_GameNumber"><h3>Pro Game 42 - End in Shootout</h3></td><td class="STHSTodayGame_Boxscore"><h3><a href="CELH-42.html">Boxscore</a></h3></td></tr></table><table class="STHSTodayGame_GameData">
<tr><td class="STHSTodayGame_TeamName"><h3>HC Lions Bohemia</h3></td><td class="STHSTodayGame_TeamScore"><h3><span style="color:red">2</span></h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Luke Thomason(5)<br /><br />
Chris Partridge (BOH), 29 saves from 30 shots - (0.967), W, 12-6-3, 65:00 minutes<br /><br /></td></tr>
<tr><td class="STHSTodayGame_TeamName"><h3>HC Lynx Kladno</h3></td><td class="STHSTodayGame_TeamScore"><h3>1</h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Cash Savage(6)<br /><br />
Georgette Pel (KLD), 28 saves from 29 shots - (0.966), OTL, 6-10-5, 65:00 minutes<br /><br /></td></tr></table>

<hr class="STHSTodayGame_HR"><br /></td></tr>
<tr><td class="STHSTodayGame_GameOverall">
<table class="STHSTodayGame_GameTitle"><tr><td class="STHSTodayGame_GameNumber"><h3>Pro Game 43</h3></td><td class="STHSTodayGame_Boxscore"><h3><a href="CELH-43.html">Boxscore</a></h3></td></tr></table><table class="STHSTodayGame_GameData">
<tr><td class="STHSTodayGame_TeamName"><h3>HC Lynx Kladno</h3></td><td class="STHSTodayGame_TeamScore"><h3>1</h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">
Grayson St. Raegan(4)<br /><br />
Georgette Pel (KLD), 20 saves from 23 shots - (0.870), L, 6-11-5, 60:00 minutes<br /><br /></td></tr>
<tr><td class="STHSTodayGame_TeamName"><h3>HC Black Eagles Silesia</h3></td><td class="STHSTodayGame_TeamScore"><h3><span style="color:red">3</span></h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Samee Iqbal(1), Jakub Novak(5,6)<br /><br />
Mike Verminski (SBE), 29 saves from 30 shots - (0.967), W, 14-5-3, 60:00 minutes<br /><br /></td></tr></table>

<hr class="STHSTodayGame_HR"><br /></td>
<td class="STHSTodayGame_GameOverall">
<table class="STHSTodayGame_GameTitle"><tr><td class="STHSTodayGame_GameNumber"><h3>Pro Game 44</h3></td><td class="STHSTodayGame_Boxscore"><h3><a href="CELH-44.html">Boxscore</a></h3></td></tr></table><table class="STHSTodayGame_GameData">
<tr><td class="STHSTodayGame_TeamName"><h3>HC Eagles Moravia</h3></td><td class="STHSTodayGame_TeamScore"><h3><span style="color:red">3</span></h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Dionyz Vyskoc(3), Marian Potoczny(11), Zivan Zidek(2)<br /><br />
Christoffer Bjornsson (MOR), 25 saves from 26 shots - (0.962), W, 12-5-5, 60:00 minutes<br /><br /></td></tr>
<tr><td class="STHSTodayGame_TeamName"><h3>HC Lions Bohemia</h3></td><td class="STHSTodayGame_TeamScore"><h3>1</h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Dickie Pecker(8)<br /><br />
Chris Partridge (BOH), 31 saves from 34 shots - (0.912), L, 12-7-3, 60:00 minutes<br /><br /></td></tr></table>

<hr class="STHSTodayGame_HR"><br /></td></tr>
<tr><td class="STHSTodayGame_GameOverall">
<table class="STHSTodayGame_GameTitle"><tr><td class="STHSTodayGame_GameNumber"><h3>Pro Game 45 - End in Overtime</h3></td><td class="STHSTodayGame_Boxscore"><h3><a href="CELH-45.html">Boxscore</a></h3></td></tr></table><table class="STHSTodayGame_GameData">
<tr><td class="STHSTodayGame_TeamName"><h3>HC Black Eagles Silesia</h3></td><td class="STHSTodayGame_TeamScore"><h3>2</h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">
Piotr Czerkawski(6), Krysztof Kowalski(6)<br /><br />
Mike Verminski (SBE), 30 saves from 33 shots - (0.909), OTL, 14-5-4, 61:39 minutes<br /><br /></td></tr>
<tr><td class="STHSTodayGame_TeamName"><h3>HC Eagles Moravia</h3></td><td class="STHSTodayGame_TeamScore"><h3><span style="color:red">3</span></h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Aviad Ratzon(6), Slappy McDoodle(6), Zivan Zidek(3)<br /><br />
Christoffer Bjornsson (MOR), 17 saves from 19 shots - (0.895), W, 13-5-5, 61:39 minutes<br /><br /></td></tr></table>

<hr class="STHSTodayGame_HR"><br /></td>
<td class="STHSTodayGame_GameOverall">
<table class="STHSTodayGame_GameTitle"><tr><td class="STHSTodayGame_GameNumber"><h3>Pro Game 46</h3></td><td class="STHSTodayGame_Boxscore"><h3><a href="CELH-46.html">Boxscore</a></h3></td></tr></table><table class="STHSTodayGame_GameData">
<tr><td class="STHSTodayGame_TeamName"><h3>HC Lions Bohemia</h3></td><td class="STHSTodayGame_TeamScore"><h3><span style="color:red">3</span></h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">DeMaricus Smyth(3), Dickie Pecker(9), Konstantin Voloshin(2)<br /><br />
Chris Partridge (BOH), 28 saves from 29 shots - (0.966), W, 13-7-3, 60:00 minutes<br /><br /></td></tr>
<tr><td class="STHSTodayGame_TeamName"><h3>HC Lynx Kladno</h3></td><td class="STHSTodayGame_TeamScore"><h3>1</h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Merit Csonka(10)<br /><br />
Georgette Pel (KLD), 29 saves from 32 shots - (0.906), L, 6-12-5, 60:00 minutes<br /><br /></td></tr></table>

<hr class="STHSTodayGame_HR"><br /></td></tr>
<tr><td class="STHSTodayGame_GameOverall">
<table class="STHSTodayGame_GameTitle"><tr><td class="STHSTodayGame_GameNumber"><h3>Pro Game 47 - End in Overtime</h3></td><td class="STHSTodayGame_Boxscore"><h3><a href="CELH-47.html">Boxscore</a></h3></td></tr></table><table class="STHSTodayGame_GameData">
<tr><td class="STHSTodayGame_TeamName"><h3>HC Eagles Moravia</h3></td><td class="STHSTodayGame_TeamScore"><h3><span style="color:red">3</span></h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Marek Vyskoc(2), Ondrej Ravchitikov(10), Sachimo Zoidberg(7)<br /><br />
Christoffer Bjornsson (MOR), 27 saves from 29 shots - (0.931), W, 14-5-5, 60:08 minutes<br /><br /></td></tr>
<tr><td class="STHSTodayGame_TeamName"><h3>HC Black Eagles Silesia</h3></td><td class="STHSTodayGame_TeamScore"><h3>2</h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Aron Hernadivic(1), Vratislav Zbynek(5)<br /><br />
Mike Verminski (SBE), 28 saves from 31 shots - (0.903), OTL, 14-5-5, 60:08 minutes<br /><br /></td></tr></table>

<hr class="STHSTodayGame_HR"><br /></td>
<td class="STHSTodayGame_GameOverall">
<table class="STHSTodayGame_GameTitle"><tr><td class="STHSTodayGame_GameNumber"><h3>Pro Game 48</h3></td><td class="STHSTodayGame_Boxscore"><h3><a href="CELH-48.html">Boxscore</a></h3></td></tr></table><table class="STHSTodayGame_GameData">
<tr><td class="STHSTodayGame_TeamName"><h3>HC Lynx Kladno</h3></td><td class="STHSTodayGame_TeamScore"><h3>1</h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">
Merit Csonka(11)<br /><br />
Georgette Pel (KLD), 29 saves from 32 shots - (0.906), L, 6-13-5, 60:00 minutes<br /><br /></td></tr>
<tr><td class="STHSTodayGame_TeamName"><h3>HC Lions Bohemia</h3></td><td class="STHSTodayGame_TeamScore"><h3><span style="color:red">3</span></h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Travis Jeziak(5), Walter White(6), Dickie Pecker(10)<br /><br />
Chris Partridge (BOH), 30 saves from 31 shots - (0.968), W, 14-7-3, 60:00 minutes<br /><br /></td></tr></table>

<hr class="STHSTodayGame_HR"><br /></td></tr>
<tr><td class="STHSTodayGame_GameOverall">
<table class="STHSTodayGame_GameTitle"><tr><td class="STHSTodayGame_GameNumber"><h3>Pro Game 49</h3></td><td class="STHSTodayGame_Boxscore"><h3><a href="CELH-49.html">Boxscore</a></h3></td></tr></table><table class="STHSTodayGame_GameData">
<tr><td class="STHSTodayGame_TeamName"><h3>HC Eagles Moravia</h3></td><td class="STHSTodayGame_TeamScore"><h3><span style="color:red">3</span></h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Ondrej Ravchitikov(11,12,13)<br /><br />
Christoffer Bjornsson (MOR), 19 saves from 21 shots - (0.905), W, 15-5-5, 60:00 minutes<br /><br /></td></tr>
<tr><td class="STHSTodayGame_TeamName"><h3>HC Black Eagles Silesia</h3></td><td class="STHSTodayGame_TeamScore"><h3>2</h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Alexander Zajac(3), Piotr Czerkawski(7)<br /><br />
Mike Verminski (SBE), 34 saves from 37 shots - (0.919), L, 14-6-5, 60:00 minutes<br /><br /></td></tr></table>

<hr class="STHSTodayGame_HR"><br /></td>
<td class="STHSTodayGame_GameOverall">
<table class="STHSTodayGame_GameTitle"><tr><td class="STHSTodayGame_GameNumber"><h3>Pro Game 50 - End in Shootout</h3></td><td class="STHSTodayGame_Boxscore"><h3><a href="CELH-50.html">Boxscore</a></h3></td></tr></table><table class="STHSTodayGame_GameData">
<tr><td class="STHSTodayGame_TeamName"><h3>HC Eagles Moravia</h3></td><td class="STHSTodayGame_TeamScore"><h3>2</h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">
Marian Potoczny(12), Zivan Zidek(4)<br /><br />
Christoffer Bjornsson (MOR), 16 saves from 18 shots - (0.889), OTL, 15-5-6, 65:00 minutes<br /><br /></td></tr>
<tr><td class="STHSTodayGame_TeamName"><h3>HC Lynx Kladno</h3></td><td class="STHSTodayGame_TeamScore"><h3><span style="color:red">3</span></h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Michael Scarn(2), Schnitinfritz Jagr(2)<br /><br />
Georgette Pel (KLD), 34 saves from 36 shots - (0.944), W, 7-13-5, 65:00 minutes<br /><br /></td></tr></table>

<hr class="STHSTodayGame_HR"><br /></td></tr>
<tr><td class="STHSTodayGame_GameOverall">
<table class="STHSTodayGame_GameTitle"><tr><td class="STHSTodayGame_GameNumber"><h3>Pro Game 51</h3></td><td class="STHSTodayGame_Boxscore"><h3><a href="CELH-51.html">Boxscore</a></h3></td></tr></table><table class="STHSTodayGame_GameData">
<tr><td class="STHSTodayGame_TeamName"><h3>HC Black Eagles Silesia</h3></td><td class="STHSTodayGame_TeamScore"><h3><span style="color:red">3</span></h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Piotr Czerkawski(8), Zalleras Szlerchek(4), Krysztof Kowalski(7)<br /><br />
Mike Verminski (SBE), 28 saves from 30 shots - (0.933), W, 15-6-5, 60:00 minutes<br /><br /></td></tr>
<tr><td class="STHSTodayGame_TeamName"><h3>HC Lions Bohemia</h3></td><td class="STHSTodayGame_TeamScore"><h3>2</h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Walter White(7), Ruslan Zaporozhets(1)<br /><br />
Chris Partridge (BOH), 27 saves from 30 shots - (0.900), L, 14-8-3, 59:30 minutes<br /><br /></td></tr></table>

<hr class="STHSTodayGame_HR"><br /></td>
<td class="STHSTodayGame_GameOverall">
<table class="STHSTodayGame_GameTitle"><tr><td class="STHSTodayGame_GameNumber"><h3>Pro Game 52</h3></td><td class="STHSTodayGame_Boxscore"><h3><a href="CELH-52.html">Boxscore</a></h3></td></tr></table><table class="STHSTodayGame_GameData">
<tr><td class="STHSTodayGame_TeamName"><h3>HC Lynx Kladno</h3></td><td class="STHSTodayGame_TeamScore"><h3>1</h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">
Patrik Satan(7)<br /><br />
Georgette Pel (KLD), 30 saves from 32 shots - (0.938), L, 7-14-5, 59:42 minutes<br /><br /></td></tr>
<tr><td class="STHSTodayGame_TeamName"><h3>HC Eagles Moravia</h3></td><td class="STHSTodayGame_TeamScore"><h3><span style="color:red">2</span></h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Slappy McDoodle(7), Zivan Zidek(5)<br /><br />
Christoffer Bjornsson (MOR), 28 saves from 29 shots - (0.966), W, 16-5-6, 60:00 minutes<br /><br /></td></tr></table>

<hr class="STHSTodayGame_HR"><br /></td></tr>
<tr><td class="STHSTodayGame_GameOverall">
<table class="STHSTodayGame_GameTitle"><tr><td class="STHSTodayGame_GameNumber"><h3>Pro Game 53</h3></td><td class="STHSTodayGame_Boxscore"><h3><a href="CELH-53.html">Boxscore</a></h3></td></tr></table><table class="STHSTodayGame_GameData">
<tr><td class="STHSTodayGame_TeamName"><h3>HC Lynx Kladno</h3></td><td class="STHSTodayGame_TeamScore"><h3><span style="color:red">2</span></h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Merit Csonka(12,13)<br /><br />
Georgette Pel (KLD), 26 saves from 27 shots - (0.963), W, 8-14-5, 60:00 minutes<br /><br /></td></tr>
<tr><td class="STHSTodayGame_TeamName"><h3>HC Lions Bohemia</h3></td><td class="STHSTodayGame_TeamScore"><h3>1</h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Dickie Pecker(11)<br /><br />
Chris Partridge (BOH), 24 saves from 26 shots - (0.923), L, 14-9-3, 60:00 minutes<br /><br /></td></tr></table>

<hr class="STHSTodayGame_HR"><br /></td>
<td class="STHSTodayGame_GameOverall">
<table class="STHSTodayGame_GameTitle"><tr><td class="STHSTodayGame_GameNumber"><h3>Pro Game 54</h3></td><td class="STHSTodayGame_Boxscore"><h3><a href="CELH-54.html">Boxscore</a></h3></td></tr></table><table class="STHSTodayGame_GameData">
<tr><td class="STHSTodayGame_TeamName"><h3>HC Lions Bohemia</h3></td><td class="STHSTodayGame_TeamScore"><h3><span style="color:red">2</span></h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Walter White(8,9)<br /><br />
Chris Partridge (BOH), 20 saves from 21 shots - (0.952), W, 15-9-3, 60:00 minutes<br /><br /></td></tr>
<tr><td class="STHSTodayGame_TeamName"><h3>HC Black Eagles Silesia</h3></td><td class="STHSTodayGame_TeamScore"><h3>1</h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Zalleras Szlerchek(5)<br /><br />
Mike Verminski (SBE), 29 saves from 31 shots - (0.935), L, 15-7-5, 60:00 minutes<br /><br /></td></tr></table>

<hr class="STHSTodayGame_HR"><br /></td></tr>
<tr><td class="STHSTodayGame_GameOverall">
<table class="STHSTodayGame_GameTitle"><tr><td class="STHSTodayGame_GameNumber"><h3>Pro Game 55</h3></td><td class="STHSTodayGame_Boxscore"><h3><a href="CELH-55.html">Boxscore</a></h3></td></tr></table><table class="STHSTodayGame_GameData">
<tr><td class="STHSTodayGame_TeamName"><h3>HC Lions Bohemia</h3></td><td class="STHSTodayGame_TeamScore"><h3><span style="color:red">3</span></h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Dickie Pecker(12), Petr Kolesnikovs(2), Matej Stransky(5)<br /><br />
Chris Partridge (BOH), 18 saves from 19 shots - (0.947), W, 16-9-3, 60:00 minutes<br /><br /></td></tr>
<tr><td class="STHSTodayGame_TeamName"><h3>HC Eagles Moravia</h3></td><td class="STHSTodayGame_TeamScore"><h3>1</h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Zivan Zidek(6)<br /><br />
Christoffer Bjornsson (MOR), 26 saves from 29 shots - (0.897), L, 16-6-6, 60:00 minutes<br /><br /></td></tr></table>

<hr class="STHSTodayGame_HR"><br /></td>
<td class="STHSTodayGame_GameOverall">
<table class="STHSTodayGame_GameTitle"><tr><td class="STHSTodayGame_GameNumber"><h3>Pro Game 56</h3></td><td class="STHSTodayGame_Boxscore"><h3><a href="CELH-56.html">Boxscore</a></h3></td></tr></table><table class="STHSTodayGame_GameData">
<tr><td class="STHSTodayGame_TeamName"><h3>HC Black Eagles Silesia</h3></td><td class="STHSTodayGame_TeamScore"><h3><span style="color:red">2</span></h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Alexander Zajac(4), David Kastrba(1)<br /><br />
Mike Verminski (SBE), 28 saves from 29 shots - (0.966), W, 16-7-5, 60:00 minutes<br /><br /></td></tr>
<tr><td class="STHSTodayGame_TeamName"><h3>HC Lynx Kladno</h3></td><td class="STHSTodayGame_TeamScore"><h3>1</h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Patrik Satan(8)<br /><br />
Georgette Pel (KLD), 23 saves from 25 shots - (0.920), L, 8-15-5, 59:20 minutes<br /><br /></td></tr></table>

<hr class="STHSTodayGame_HR"><br /></td></tr>
<tr><td class="STHSTodayGame_GameOverall">
<table class="STHSTodayGame_GameTitle"><tr><td class="STHSTodayGame_GameNumber"><h3>Pro Game 57 - End in Overtime</h3></td><td class="STHSTodayGame_Boxscore"><h3><a href="CELH-57.html">Boxscore</a></h3></td></tr></table><table class="STHSTodayGame_GameData">
<tr><td class="STHSTodayGame_TeamName"><h3>HC Black Eagles Silesia</h3></td><td class="STHSTodayGame_TeamScore"><h3><span style="color:red">2</span></h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Jakub Trocheck(6), Krysztof Kowalski(8)<br /><br />
Mike Verminski (SBE), 27 saves from 28 shots - (0.964), W, 17-7-5, 63:49 minutes<br /><br /></td></tr>
<tr><td class="STHSTodayGame_TeamName"><h3>HC Eagles Moravia</h3></td><td class="STHSTodayGame_TeamScore"><h3>1</h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Marian Potoczny(13)<br /><br />
Christoffer Bjornsson (MOR), 26 saves from 28 shots - (0.929), OTL, 16-6-7, 63:49 minutes<br /><br /></td></tr></table>

<hr class="STHSTodayGame_HR"><br /></td>
<td class="STHSTodayGame_GameOverall">
<table class="STHSTodayGame_GameTitle"><tr><td class="STHSTodayGame_GameNumber"><h3>Pro Game 58 - End in Overtime</h3></td><td class="STHSTodayGame_Boxscore"><h3><a href="CELH-58.html">Boxscore</a></h3></td></tr></table><table class="STHSTodayGame_GameData">
<tr><td class="STHSTodayGame_TeamName"><h3>HC Eagles Moravia</h3></td><td class="STHSTodayGame_TeamScore"><h3>1</h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">
Marian Potoczny(14)<br /><br />
Christoffer Bjornsson (MOR), 24 saves from 26 shots - (0.923), OTL, 16-6-8, 62:50 minutes<br /><br /></td></tr>
<tr><td class="STHSTodayGame_TeamName"><h3>HC Lynx Kladno</h3></td><td class="STHSTodayGame_TeamScore"><h3><span style="color:red">2</span></h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Alex Winters(4), Schnitinfritz Jagr(3)<br /><br />
Georgette Pel (KLD), 30 saves from 31 shots - (0.968), W, 9-15-5, 62:50 minutes<br /><br /></td></tr></table>

<hr class="STHSTodayGame_HR"><br /></td></tr>
<tr><td class="STHSTodayGame_GameOverall">
<table class="STHSTodayGame_GameTitle"><tr><td class="STHSTodayGame_GameNumber"><h3>Pro Game 59</h3></td><td class="STHSTodayGame_Boxscore"><h3><a href="CELH-59.html">Boxscore</a></h3></td></tr></table><table class="STHSTodayGame_GameData">
<tr><td class="STHSTodayGame_TeamName"><h3>HC Lynx Kladno</h3></td><td class="STHSTodayGame_TeamScore"><h3><span style="color:red">3</span></h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Michael Scarn(3), Troy McClure III(1), Tomas Pylon(1)<br /><br />
Georgette Pel (KLD), 29 saves from 31 shots - (0.935), W, 10-15-5, 60:00 minutes<br /><br /></td></tr>
<tr><td class="STHSTodayGame_TeamName"><h3>HC Lions Bohemia</h3></td><td class="STHSTodayGame_TeamScore"><h3>2</h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Jan Zacha(2), Dickie Pecker(13)<br /><br />
Chris Partridge (BOH), 22 saves from 25 shots - (0.880), L, 16-10-3, 58:45 minutes<br /><br /></td></tr></table>

<hr class="STHSTodayGame_HR"><br /></td>
<td class="STHSTodayGame_GameOverall">
<table class="STHSTodayGame_GameTitle"><tr><td class="STHSTodayGame_GameNumber"><h3>Pro Game 60</h3></td><td class="STHSTodayGame_Boxscore"><h3><a href="CELH-60.html">Boxscore</a></h3></td></tr></table><table class="STHSTodayGame_GameData">
<tr><td class="STHSTodayGame_TeamName"><h3>HC Lions Bohemia</h3></td><td class="STHSTodayGame_TeamScore"><h3>1</h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">
Dickie Pecker(14)<br /><br />
Chris Partridge (BOH), 20 saves from 23 shots - (0.870), L, 16-11-3, 60:00 minutes<br /><br /></td></tr>
<tr><td class="STHSTodayGame_TeamName"><h3>HC Black Eagles Silesia</h3></td><td class="STHSTodayGame_TeamScore"><h3><span style="color:red">3</span></h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Piotr Czerkawski(9,10), Jakub Trocheck(7)<br /><br />
Mike Verminski (SBE), 37 saves from 38 shots - (0.974), W, 18-7-5, 60:00 minutes<br /><br /></td></tr></table>

<hr class="STHSTodayGame_HR"><br /></td></tr>
</table>
<h1 class="STHSTomorrowGame_TomorrowGame">Tomorrow's Games</h1>
End of Season
<table class="STHSSchedule_MainTable"><tr><td class="STHSSchedule_TitleGameNumber"><b>Game #</b></td><td class="STHSSchedule_TitleSchedule"><b>Schedule</b></td>
</tr>
<tr><td colspan="2" class="STHSTomorrowGame_GameDay"><b>Day 51</b></td></tr>
<tr><td colspan="2" class="STHSAlignTop">
<table class="STHSTomorrowGame_SubTable">
</table>
</td></tr>
</table>
<?php include "Footer.php";?>
