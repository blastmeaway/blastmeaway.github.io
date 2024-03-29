﻿<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>CELH - Transactions</title>
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
[11/3/2019 3:39:25 PM] - Rest Day - All players have rest for one day.<br />
[11/3/2019 3:39:21 PM] - New Record for Goalie (Georgette Pel) Most Lost (15) in 1 Year!<br />
[11/3/2019 3:39:21 PM] - New Record for Goalie (Georgette Pel) Most Shots Received (905) in 1 Year!<br />
[11/3/2019 3:39:21 PM] - New Record for Goalie (Mike Verminski) Most Win (18) in 1 Year!<br />
[11/3/2019 3:39:21 PM] - New Record for Goalie (Mike Verminski) Most Shots Received (891) in 1 Year!<br />
[11/3/2019 3:39:21 PM] - New Record for Goalie (Mike Verminski) Most Shutout (2) in 1 Year!<br />
[11/3/2019 3:39:21 PM] - New Record for Goalie (Chris Partridge) Most Lost (11) in 1 Year!<br />
[11/3/2019 3:39:21 PM] - New Record for Goalie (Chris Partridge) Most Win (16) in 1 Year!<br />
[11/3/2019 3:39:21 PM] - New Record for Goalie (Chris Partridge) Most Shots Received (832) in 1 Year!<br />
[11/3/2019 3:39:21 PM] - New Record for Goalie (Chris Partridge) Most Shutout (1) in 1 Year!<br />
[11/3/2019 3:39:21 PM] - New Record for Player (Tomas Pylon) Most Ice Time (14:39) in 1 Year!<br />
[11/3/2019 3:39:21 PM] - New Record for Player (Ondrej Ravchitikov) Most Hat Trick (1) in 1 Year!<br />
[11/3/2019 3:39:21 PM] - New Record for Player (Ondrej Ravchitikov) Most Shots (161) in 1 Year!<br />
[11/3/2019 3:39:21 PM] - New Record for Player (Ondrej Ravchitikov) Most Points (41) in 1 Year!<br />
[11/3/2019 3:39:21 PM] - New Record for Player (Ondrej Ravchitikov) Most Assists (28) in 1 Year!<br />
[11/3/2019 3:39:21 PM] - New Record for Player (Merit Csonka) Most Hits (92) in 1 Year!<br />
[11/3/2019 3:39:21 PM] - New Record for Player (Jakub Trocheck) Most Shots Blocked (58) in 1 Year!<br />
[11/3/2019 3:39:21 PM] - New Record for Player (Dickie Pecker) Most Empty Net Goal (1) in 1 Year!<br />
[11/3/2019 3:39:21 PM] - New Record for Player (Dickie Pecker) Most Shots (150) in 1 Year!<br />
[11/3/2019 3:39:21 PM] - New Record for Player (Walter White) Most Hits (89) in 1 Year!<br />
[11/3/2019 3:39:21 PM] - New Record for Player (Walter White) Most Shots (123) in 1 Year!<br />
[11/3/2019 3:39:21 PM] - New Record for Player (Walter White) Most Points (36) in 1 Year!<br />
[11/3/2019 3:39:21 PM] - New Record for Player (Walter White) Most Assists (27) in 1 Year!<br />
[11/3/2019 3:39:21 PM] - New Record for Player (Walter White) Most Ice Time (14:12) in 1 Year!<br />
[11/3/2019 3:39:21 PM] - New Record for Player (Jakub Novak) Worse Plus/Minus (-6) in 1 Year!<br />
[11/3/2019 3:39:21 PM] - New Record for Player (Zalleras Szlerchek) Most Assists (18) in 1 Year!<br />
[11/3/2019 3:39:21 PM] - New Record for Player (Troy McClure III) Most Hits (73) in 1 Year!<br />
[11/3/2019 3:39:21 PM] - New Record for Player (Piotr Czerkawski) Best Faceoff Percent (562) in 1 Year!<br />
[11/3/2019 3:39:21 PM] - New Record for Player (Pierre-Luc Laflamme) Most Ice Time (14:04) in 1 Year!<br />
[11/3/2019 3:39:21 PM] - New Record for Player (Marian Potoczny) Best Plus/Minus (7) in 1 Year!<br />
[11/3/2019 3:39:21 PM] - New Record for Player (Marian Potoczny) Most Shots (113) in 1 Year!<br />
[11/3/2019 3:39:21 PM] - New Record for Player (Marian Potoczny) Most Points (30) in 1 Year!<br />
[11/3/2019 3:39:21 PM] - New Record for Player (Marian Potoczny) Most Goals (14) in 1 Year!<br />
[11/3/2019 3:39:21 PM] - New Record for Player (DeMaricus Smyth) Best Faceoff Percent (549) in 1 Year!<br />
[11/3/2019 3:39:21 PM] - New Record for Player (DeMaricus Smyth) Most Hits (68) in 1 Year!<br />
[11/3/2019 3:39:21 PM] - New Record for Player (DeMaricus Smyth) Most Points (20) in 1 Year!<br />
[11/3/2019 3:39:21 PM] - New Record for Player (DeMaricus Smyth) Most Assists (17) in 1 Year!<br />
[11/3/2019 3:39:21 PM] - New Record for Player (Brady McIntyre) Most Penalties Minutes (30) in 1 Year!<br />
[11/3/2019 3:39:21 PM] - New Record for Player (Brady McIntyre) Most Shots (70) in 1 Year!<br />
[11/3/2019 3:39:21 PM] - New Record for Player (Boruvka Banananak) Worse Plus/Minus (-5) in 1 Year!<br />
[11/3/2019 3:39:21 PM] - New Record for Player (Barret McCarthy) Most Shots Blocked (47) in 1 Year!<br />
[11/3/2019 3:39:21 PM] - New Record for Player (Barret McCarthy) Most Ice Time (13:03) in 1 Year!<br />
[11/3/2019 3:39:21 PM] - New Record for Player (Aviad Ratzon) Most Hits (57) in 1 Year!<br />
[11/3/2019 3:39:21 PM] - New Record for Player (Aviad Ratzon) Best Plus/Minus (6) in 1 Year!<br />
[11/3/2019 3:39:21 PM] - New Record for Player (Aviad Ratzon) Most Points (16) in 1 Year!<br />
[11/3/2019 3:39:21 PM] - New Record for Player (Aviad Ratzon) Most Assists (10) in 1 Year!<br />
[11/3/2019 3:39:21 PM] - New Record for Player (Aviad Ratzon) Most Goals (6) in 1 Year!<br />
[11/3/2019 3:39:21 PM] - New Record for Player (Aviad Ratzon) Most Ice Time (10:51) in 1 Year!<br />
[11/3/2019 3:39:21 PM] - New Record for Player (Alexander Zajac) Best Plus/Minus (5) in 1 Year!<br />
[11/3/2019 3:39:21 PM] - New Record for Player (Alexander Zajac) Most Shots (64) in 1 Year!<br />
[11/3/2019 3:39:21 PM] - New Record for Player (Alexander Zajac) Most Points (10) in 1 Year!<br />
[11/3/2019 3:39:21 PM] - New Record for Player (Alexander Zajac) Most Assists (6) in 1 Year!<br />
[11/3/2019 3:39:21 PM] - New Record for Player (Alex Winters) Most Hits (42) in 1 Year!<br />
[11/3/2019 3:39:21 PM] - New Record for Player (Alex Winters) Most Penalties Minutes (18) in 1 Year!<br />
[11/3/2019 3:39:21 PM] - New Record for Player (Alex Winters) Worse Plus/Minus (-4) in 1 Year!<br />
[11/3/2019 3:39:21 PM] - New Record for Player (Alex Winters) Most Shots Blocked (15) in 1 Year!<br />
[11/3/2019 3:39:21 PM] - New Record for Player (Alex Winters) Most Shots (31) in 1 Year!<br />
[11/3/2019 3:39:21 PM] - New Record for Player (Alex Winters) Most Points (6) in 1 Year!<br />
[11/3/2019 3:39:21 PM] - New Record for Player (Alex Winters) Most Assists (2) in 1 Year!<br />
[11/3/2019 3:39:21 PM] - New Record for Player (Alex Winters) Most Goals (4) in 1 Year!<br />
[11/3/2019 3:39:21 PM] - New Record for Player (Alex Winters) Most Ice Time (10:13) in 1 Year!<br />
[11/3/2019 3:39:21 PM] - Rest Day - All players have rest for one day.<br />
[11/3/2019 3:39:21 PM] - HC Black Eagles Silesia lines for next game are empty. Current rosters/lines are not erased.<br />
[11/3/2019 3:39:21 PM] - HC Lions Bohemia lines for next game are empty. Current rosters/lines are not erased.<br />
[11/3/2019 3:39:21 PM] - Last 7 Days Pro Star : 1 - Mike Verminski of HC Black Eagles Silesia (0.960) / 2 - Zalleras Szlerchek of HC Black Eagles Silesia (1-5-6) / 3 - Walter White of HC Lions Bohemia (2-2-4)<br />
[11/3/2019 3:39:21 PM] - HC Lynx Kladno lines for next game are empty. Current rosters/lines are not erased.<br />
[11/3/2019 3:39:21 PM] - HC Lions Bohemia lines for next game are empty. Current rosters/lines are not erased.<br />
[11/3/2019 3:39:21 PM] - HC Lynx Kladno lines for next game are empty. Current rosters/lines are not erased.<br />
[11/3/2019 3:39:21 PM] - HC Eagles Moravia lines for next game are empty. Current rosters/lines are not erased.<br />
[11/3/2019 3:39:21 PM] - HC Black Eagles Silesia lines for next game are empty. Current rosters/lines are not erased.<br />
[11/3/2019 3:39:21 PM] - HC Eagles Moravia lines for next game are empty. Current rosters/lines are not erased.<br />
[11/3/2019 3:39:20 PM] - HC Lynx Kladno lines for next game are empty. Current rosters/lines are not erased.<br />
[11/3/2019 3:39:20 PM] - HC Black Eagles Silesia lines for next game are empty. Current rosters/lines are not erased.<br />
[11/3/2019 3:39:20 PM] - HC Lions Bohemia lines for next game are empty. Current rosters/lines are not erased.<br />
[11/3/2019 3:39:20 PM] - HC Eagles Moravia lines for next game are empty. Current rosters/lines are not erased.<br />
[11/3/2019 3:39:20 PM] - New Record for Team's Most Penalties Minutes (13) in 1 Game for HC Lions Bohemia!<br />
[11/3/2019 3:39:20 PM] - HC Black Eagles Silesia lines for next game are empty. Current rosters/lines are not erased.<br />
[11/3/2019 3:39:20 PM] - HC Lions Bohemia lines for next game are empty. Current rosters/lines are not erased.<br />
[11/3/2019 3:39:20 PM] - HC Lynx Kladno lines for next game are empty. Current rosters/lines are not erased.<br />
[11/3/2019 3:39:20 PM] - HC Lions Bohemia lines for next game are empty. Current rosters/lines are not erased.<br />
[11/3/2019 3:39:20 PM] - Last 7 Days Pro Star : 1 - Ondrej Ravchitikov of HC Eagles Moravia (4-3-7) / 2 - Merit Csonka of HC Lynx Kladno (3-1-4) / 3 - Georgette Pel of HC Lynx Kladno (0.937)<br />
[11/3/2019 3:39:20 PM] - HC Lynx Kladno lines for next game are empty. Current rosters/lines are not erased.<br />
[11/3/2019 3:39:20 PM] - HC Eagles Moravia lines for next game are empty. Current rosters/lines are not erased.<br />
[11/3/2019 3:39:20 PM] - HC Black Eagles Silesia lines for next game are empty. Current rosters/lines are not erased.<br />
[11/3/2019 3:39:20 PM] - HC Lions Bohemia lines for next game are empty. Current rosters/lines are not erased.<br />
[11/3/2019 3:39:19 PM] - HC Lynx Kladno lines for next game are empty. Current rosters/lines are not erased.<br />
[11/3/2019 3:39:19 PM] - HC Eagles Moravia lines for next game are empty. Current rosters/lines are not erased.<br />
[11/3/2019 3:39:19 PM] - HC Black Eagles Silesia lines for next game are empty. Current rosters/lines are not erased.<br />
[11/3/2019 3:39:19 PM] - HC Eagles Moravia lines for next game are empty. Current rosters/lines are not erased.<br />
[11/3/2019 3:39:19 PM] - New Record for Player (Ondrej Ravchitikov) Most Goals (3) in 1 Game!<br />
[11/3/2019 3:39:19 PM] - Ondrej Ravchitikov from HC Eagles Moravia has scored a Hat Trick!<br />
[11/3/2019 3:39:19 PM] - New Record for Team's Most Shots Blocked (20) in 1 Game for HC Black Eagles Silesia!<br />
[11/3/2019 3:39:19 PM] - New Record for Team's Most Shots Blocked (20) in 1 Game for HC Black Eagles Silesia!<br />
[11/3/2019 3:39:19 PM] - HC Lynx Kladno lines for next game are empty. Current rosters/lines are not erased.<br />
[11/3/2019 3:39:19 PM] - HC Lions Bohemia lines for next game are empty. Current rosters/lines are not erased.<br />
[11/3/2019 3:39:19 PM] - HC Black Eagles Silesia lines for next game are empty. Current rosters/lines are not erased.<br />
[11/3/2019 3:39:19 PM] - HC Eagles Moravia lines for next game are empty. Current rosters/lines are not erased.<br />
[11/3/2019 3:39:19 PM] - HC Lynx Kladno lines for next game are empty. Current rosters/lines are not erased.<br />
[11/3/2019 3:39:19 PM] - HC Lions Bohemia lines for next game are empty. Current rosters/lines are not erased.<br />
[11/3/2019 3:39:19 PM] - Last 7 Days Pro Star : 1 - Mike Verminski of HC Black Eagles Silesia (0.954) / 2 - Krysztof Kowalski of HC Black Eagles Silesia (2-4-6) / 3 - Chris Partridge of HC Lions Bohemia (0.941)<br />
[11/3/2019 3:39:19 PM] - New Record for Team's Most Shots Blocked (18) in 1 Game for HC Lynx Kladno!<br />
[11/3/2019 3:39:18 PM] - HC Black Eagles Silesia lines for next game are empty. Current rosters/lines are not erased.<br />
[11/3/2019 3:39:18 PM] - HC Eagles Moravia lines for next game are empty. Current rosters/lines are not erased.<br />
[11/3/2019 3:39:18 PM] - HC Lions Bohemia lines for next game are empty. Current rosters/lines are not erased.<br />
[11/3/2019 3:39:18 PM] - HC Eagles Moravia lines for next game are empty. Current rosters/lines are not erased.<br />
[11/3/2019 3:39:18 PM] - HC Lynx Kladno lines for next game are empty. Current rosters/lines are not erased.<br />
[11/3/2019 3:39:18 PM] - HC Black Eagles Silesia lines for next game are empty. Current rosters/lines are not erased.<br />
[11/3/2019 3:39:18 PM] - HC Lynx Kladno lines for next game are empty. Current rosters/lines are not erased.<br />
[11/3/2019 3:39:18 PM] - HC Lions Bohemia lines for next game are empty. Current rosters/lines are not erased.<br />
[11/3/2019 3:39:18 PM] - HC Black Eagles Silesia lines for next game are empty. Current rosters/lines are not erased.<br />
[11/3/2019 3:39:18 PM] - HC Eagles Moravia lines for next game are empty. Current rosters/lines are not erased.<br />
[11/3/2019 3:39:18 PM] - Last 30 Days Pro Star : 1 - Mike Verminski of HC Black Eagles Silesia (0.945) / 2 - Chris Partridge of HC Lions Bohemia (0.940) / 3 - Christoffer Bjornsson of HC Eagles Moravia (0.934)<br />
[11/3/2019 3:39:18 PM] - New Record for Team's Most Points (10) in 1 Game for HC Black Eagles Silesia!<br />
[11/3/2019 3:39:18 PM] - New Record for Team's Most Goals (4) in 1 Game for HC Black Eagles Silesia!<br />
[11/3/2019 3:39:17 PM] - HC Lynx Kladno lines for next game are empty. Current rosters/lines are not erased.<br />
[11/3/2019 3:39:17 PM] - HC Black Eagles Silesia lines for next game are empty. Current rosters/lines are not erased.<br />
[11/3/2019 3:39:17 PM] - HC Lions Bohemia lines for next game are empty. Current rosters/lines are not erased.<br />
[11/3/2019 3:39:17 PM] - HC Eagles Moravia lines for next game are empty. Current rosters/lines are not erased.<br />
[11/3/2019 3:39:17 PM] - HC Lynx Kladno lines for next game are empty. Current rosters/lines are not erased.<br />
[11/3/2019 3:39:17 PM] - HC Black Eagles Silesia lines for next game are empty. Current rosters/lines are not erased.<br />
[11/3/2019 3:39:17 PM] - HC Lions Bohemia lines for next game are empty. Current rosters/lines are not erased.<br />
[11/3/2019 3:39:17 PM] - HC Eagles Moravia lines for next game are empty. Current rosters/lines are not erased.<br />
[11/3/2019 3:39:17 PM] - Last 7 Days Pro Star : 1 - Chris Partridge of HC Lions Bohemia (0.951) / 2 - Walter White of HC Lions Bohemia (1-8-9) / 3 - Mike Verminski of HC Black Eagles Silesia (0.952)<br />
[11/3/2019 3:39:17 PM] - New Record for Team's Most Penalties Minutes (14) in 1 Game for HC Black Eagles Silesia!<br />
[11/3/2019 3:39:17 PM] - New Record for Most Points (21) in a game!<br />
[11/3/2019 3:39:17 PM] - New Record for Most Assists (14) in a game!<br />
[11/3/2019 3:39:17 PM] - New Record for Team's Most Shots (42) in 1 Game for HC Eagles Moravia!<br />
[11/3/2019 3:39:17 PM] - New Record for Team's Most Points (12) in 1 Game for HC Eagles Moravia!<br />
[11/3/2019 3:39:17 PM] - New Record for Team's Most Assists (8) in 1 Game for HC Eagles Moravia!<br />
[11/3/2019 3:39:17 PM] - New Record for Team's Most Points (12) in 1 Game for HC Eagles Moravia!<br />
[11/3/2019 3:39:17 PM] - New Record for Team's Most Assists (8) in 1 Game for HC Eagles Moravia!<br />
[11/3/2019 3:39:17 PM] - HC Lions Bohemia lines for next game are empty. Current rosters/lines are not erased.<br />
[11/3/2019 3:39:17 PM] - HC Eagles Moravia lines for next game are empty. Current rosters/lines are not erased.<br />
[11/3/2019 3:39:17 PM] - New Record for Team's Most Shots Blocked (17) in 1 Game for HC Lions Bohemia!<br />
[11/3/2019 3:39:16 PM] - HC Lynx Kladno lines for next game are empty. Current rosters/lines are not erased.<br />
[11/3/2019 3:39:16 PM] - HC Black Eagles Silesia lines for next game are empty. Current rosters/lines are not erased.<br />
[11/3/2019 3:39:16 PM] - New Record for Team's Most Shots (34) in 1 Game for HC Black Eagles Silesia!<br />
[11/3/2019 3:39:16 PM] - HC Black Eagles Silesia lines for next game are empty. Current rosters/lines are not erased.<br />
[11/3/2019 3:39:16 PM] - HC Lions Bohemia lines for next game are empty. Current rosters/lines are not erased.<br />
[11/3/2019 3:39:16 PM] - HC Lynx Kladno lines for next game are empty. Current rosters/lines are not erased.<br />
[11/3/2019 3:39:16 PM] - HC Eagles Moravia lines for next game are empty. Current rosters/lines are not erased.<br />
[11/3/2019 3:39:16 PM] - New Record for Team's Most Shots Blocked (17) in 1 Game for HC Lynx Kladno!<br />
[11/3/2019 3:39:16 PM] - HC Lynx Kladno lines for next game are empty. Current rosters/lines are not erased.<br />
[11/3/2019 3:39:16 PM] - HC Black Eagles Silesia lines for next game are empty. Current rosters/lines are not erased.<br />
[11/3/2019 3:39:16 PM] - HC Lions Bohemia lines for next game are empty. Current rosters/lines are not erased.<br />
[11/3/2019 3:39:16 PM] - HC Eagles Moravia lines for next game are empty. Current rosters/lines are not erased.<br />
[11/3/2019 3:39:16 PM] - New Record for Team's Most Shots Blocked (16) in 1 Game for HC Lions Bohemia!<br />
[11/3/2019 3:39:16 PM] - New Record for Team's Most Hits (27) in 1 Game for HC Black Eagles Silesia!<br />
[11/3/2019 3:39:16 PM] - HC Lynx Kladno lines for next game are empty. Current rosters/lines are not erased.<br />
[11/3/2019 3:39:16 PM] - HC Lions Bohemia lines for next game are empty. Current rosters/lines are not erased.<br />
[11/3/2019 3:39:15 PM] - HC Black Eagles Silesia lines for next game are empty. Current rosters/lines are not erased.<br />
[11/3/2019 3:39:15 PM] - HC Eagles Moravia lines for next game are empty. Current rosters/lines are not erased.<br />
[11/3/2019 3:39:15 PM] - Last 7 Days Pro Star : 1 - Mike Verminski of HC Black Eagles Silesia (0.953) / 2 - Christoffer Bjornsson of HC Eagles Moravia (0.940) / 3 - Georgette Pel of HC Lynx Kladno (0.938)<br />
[11/3/2019 3:39:15 PM] - New Record for Most Penalties Minutes (36) in a game!<br />
[11/3/2019 3:39:15 PM] - New Record for Team's Most Penalties Minutes (13) in 1 Game for HC Black Eagles Silesia!<br />
[11/3/2019 3:39:15 PM] - New Record for Team's Most Penalties Minutes (23) in 1 Game for HC Eagles Moravia!<br />
[11/3/2019 3:39:15 PM] - New Record for Team's Most Penalties Minutes (23) in 1 Game for HC Eagles Moravia!<br />
[11/3/2019 3:39:15 PM] - HC Black Eagles Silesia lines for next game are empty. Current rosters/lines are not erased.<br />
[11/3/2019 3:39:15 PM] - HC Lions Bohemia lines for next game are empty. Current rosters/lines are not erased.<br />
[11/3/2019 3:39:15 PM] - New Record for Player (Jakub Trocheck) Most Shots Blocked (7) in 1 Game!<br />
[11/3/2019 3:39:15 PM] - New Record for Team's Most Hits (32) in 1 Game for HC Lions Bohemia!<br />
[11/3/2019 3:39:15 PM] - HC Lynx Kladno lines for next game are empty. Current rosters/lines are not erased.<br />
[11/3/2019 3:39:15 PM] - HC Black Eagles Silesia lines for next game are empty. Current rosters/lines are not erased.<br />
[11/3/2019 3:39:15 PM] - HC Lions Bohemia lines for next game are empty. Current rosters/lines are not erased.<br />
[11/3/2019 3:39:15 PM] - HC Eagles Moravia lines for next game are empty. Current rosters/lines are not erased.<br />
[11/3/2019 3:39:15 PM] - New Record for Player (Brady McIntyre) Most Shots Blocked (5) in 1 Game!<br />
[11/3/2019 3:39:15 PM] - New Record for Team's Most Hits (26) in 1 Game for HC Black Eagles Silesia!<br />
[11/3/2019 3:39:15 PM] - HC Lynx Kladno lines for next game are empty. Current rosters/lines are not erased.<br />
[11/3/2019 3:39:15 PM] - HC Eagles Moravia lines for next game are empty. Current rosters/lines are not erased.<br />
[11/3/2019 3:39:15 PM] - New Record for Team's Most Penalties Minutes (12) in 1 Game for HC Lynx Kladno!<br />
[11/3/2019 3:39:15 PM] - New Record for Team's Most Points (11) in 1 Game for HC Eagles Moravia!<br />
[11/3/2019 3:39:15 PM] - New Record for Team's Most Assists (7) in 1 Game for HC Eagles Moravia!<br />
[11/3/2019 3:39:15 PM] - New Record for Team's Most Goals (4) in 1 Game for HC Eagles Moravia!<br />
[11/3/2019 3:39:15 PM] - New Record for Team's Most Points (11) in 1 Game for HC Eagles Moravia!<br />
[11/3/2019 3:39:15 PM] - New Record for Team's Most Assists (7) in 1 Game for HC Eagles Moravia!<br />
[11/3/2019 3:39:14 PM] - HC Lynx Kladno lines for next game are empty. Current rosters/lines are not erased.<br />
[11/3/2019 3:39:14 PM] - HC Lions Bohemia lines for next game are empty. Current rosters/lines are not erased.<br />
[11/3/2019 3:39:14 PM] - New Record for Team's Most Shots (32) in 1 Game for HC Lynx Kladno!<br />
[11/3/2019 3:39:14 PM] - New Record for Team's Most Shots (47) in 1 Game for HC Lions Bohemia!<br />
[11/3/2019 3:39:14 PM] - New Record for Team's Most Shots (47) in 1 Game for HC Lions Bohemia!<br />
[11/3/2019 3:39:14 PM] - New Record for Player (Dickie Pecker) Most Shots (12) in 1 Game!<br />
[11/3/2019 3:39:14 PM] - HC Lynx Kladno lines for next game are empty. Current rosters/lines are not erased.<br />
[11/3/2019 3:39:14 PM] - HC Black Eagles Silesia lines for next game are empty. Current rosters/lines are not erased.<br />
[11/3/2019 3:39:14 PM] - HC Lions Bohemia lines for next game are empty. Current rosters/lines are not erased.<br />
[11/3/2019 3:39:14 PM] - HC Eagles Moravia lines for next game are empty. Current rosters/lines are not erased.<br />
[11/3/2019 3:39:14 PM] - New Record for Team's Most Points (9) in 1 Game for HC Black Eagles Silesia!<br />
[11/3/2019 3:39:14 PM] - New Record for Team's Most Assists (6) in 1 Game for HC Black Eagles Silesia!<br />
[11/3/2019 3:39:14 PM] - HC Black Eagles Silesia lines for next game are empty. Current rosters/lines are not erased.<br />
[11/3/2019 3:39:14 PM] - HC Eagles Moravia lines for next game are empty. Current rosters/lines are not erased.<br />
[11/3/2019 3:39:14 PM] - HC Lions Bohemia lines for next game are empty. Current rosters/lines are not erased.<br />
[11/3/2019 3:39:14 PM] - HC Eagles Moravia lines for next game are empty. Current rosters/lines are not erased.<br />
[11/3/2019 3:39:14 PM] - Last 7 Days Pro Star : 1 - Christoffer Bjornsson of HC Eagles Moravia (0.946) / 2 - Chris Partridge of HC Lions Bohemia (0.941) / 3 - Ondrej Ravchitikov of HC Eagles Moravia (2-5-7)<br />
[11/3/2019 3:39:14 PM] - HC Lynx Kladno lines for next game are empty. Current rosters/lines are not erased.<br />
[11/3/2019 3:39:14 PM] - HC Black Eagles Silesia lines for next game are empty. Current rosters/lines are not erased.<br />
[11/3/2019 3:39:14 PM] - HC Lions Bohemia lines for next game are empty. Current rosters/lines are not erased.<br />
[11/3/2019 3:39:14 PM] - HC Eagles Moravia lines for next game are empty. Current rosters/lines are not erased.<br />
[11/3/2019 3:39:13 PM] - New Record for Player (DeMaricus Smyth) Most Penalties Minutes (6) in 1 Game!<br />
[11/3/2019 3:39:13 PM] - HC Lynx Kladno lines for next game are empty. Current rosters/lines are not erased.<br />
[11/3/2019 3:39:13 PM] - HC Black Eagles Silesia lines for next game are empty. Current rosters/lines are not erased.<br />
[11/3/2019 3:39:13 PM] - New Record for Most Hits (62) in a game!<br />
[11/3/2019 3:39:13 PM] - New Record for Team's Most Hits (40) in 1 Game for HC Lynx Kladno!<br />
[11/3/2019 3:39:13 PM] - New Record for Team's Most Hits (40) in 1 Game for HC Lynx Kladno!<br />
[11/3/2019 3:39:13 PM] - HC Lynx Kladno lines for next game are empty. Current rosters/lines are not erased.<br />
[11/3/2019 3:39:13 PM] - HC Black Eagles Silesia lines for next game are empty. Current rosters/lines are not erased.<br />
[11/3/2019 3:39:13 PM] - HC Lions Bohemia lines for next game are empty. Current rosters/lines are not erased.<br />
[11/3/2019 3:39:13 PM] - HC Eagles Moravia lines for next game are empty. Current rosters/lines are not erased.<br />
[11/3/2019 3:39:13 PM] - New Record for Team's Most Shots Blocked (13) in 1 Game for HC Lions Bohemia!<br />
[11/3/2019 3:39:13 PM] - New Record for Team's Most Shots (28) in 1 Game for HC Lynx Kladno!<br />
[11/3/2019 3:39:13 PM] - New Record for Team's Most Hits (23) in 1 Game for HC Black Eagles Silesia!<br />
[11/3/2019 3:39:13 PM] - HC Lions Bohemia lines for next game are empty. Current rosters/lines are not erased.<br />
[11/3/2019 3:39:13 PM] - HC Eagles Moravia lines for next game are empty. Current rosters/lines are not erased.<br />
[11/3/2019 3:39:13 PM] - HC Lynx Kladno lines for next game are empty. Current rosters/lines are not erased.<br />
[11/3/2019 3:39:13 PM] - HC Black Eagles Silesia lines for next game are empty. Current rosters/lines are not erased.<br />
[11/3/2019 3:39:13 PM] - New Record for Most Penalties Minutes (22) in a game!<br />
[11/3/2019 3:39:13 PM] - New Record for Player (Tomas Pylon) Most Hits (7) in 1 Game!<br />
[11/3/2019 3:39:13 PM] - New Record for Team's Most Penalties Minutes (12) in 1 Game for HC Black Eagles Silesia!<br />
[11/3/2019 3:39:12 PM] - HC Lions Bohemia lines for next game are empty. Current rosters/lines are not erased.<br />
[11/3/2019 3:39:12 PM] - HC Eagles Moravia lines for next game are empty. Current rosters/lines are not erased.<br />
[11/3/2019 3:39:12 PM] - New Record for Team's Most Hits (29) in 1 Game for HC Eagles Moravia!<br />
[11/3/2019 3:39:12 PM] - New Record for Team's Most Penalties Minutes (12) in 1 Game for HC Eagles Moravia!<br />
[11/3/2019 3:39:12 PM] - HC Lynx Kladno lines for next game are empty. Current rosters/lines are not erased.<br />
[11/3/2019 3:39:12 PM] - HC Black Eagles Silesia lines for next game are empty. Current rosters/lines are not erased.<br />
[11/3/2019 3:39:12 PM] - HC Lions Bohemia lines for next game are empty. Current rosters/lines are not erased.<br />
[11/3/2019 3:39:12 PM] - HC Eagles Moravia lines for next game are empty. Current rosters/lines are not erased.<br />
[11/3/2019 3:39:12 PM] - Last 7 Days Pro Star : 1 - Christoffer Bjornsson of HC Eagles Moravia (0.945) / 2 - Georgette Pel of HC Lynx Kladno (0.938) / 3 - Mike Verminski of HC Black Eagles Silesia (0.933)<br />
[11/3/2019 3:39:12 PM] - New Record for Player (Ondrej Ravchitikov) Most Shots (10) in 1 Game!<br />
[11/3/2019 3:39:12 PM] - HC Lynx Kladno lines for next game are empty. Current rosters/lines are not erased.<br />
[11/3/2019 3:39:12 PM] - HC Black Eagles Silesia lines for next game are empty. Current rosters/lines are not erased.<br />
[11/3/2019 3:39:12 PM] - HC Lions Bohemia lines for next game are empty. Current rosters/lines are not erased.<br />
[11/3/2019 3:39:12 PM] - HC Eagles Moravia lines for next game are empty. Current rosters/lines are not erased.<br />
[11/3/2019 3:39:12 PM] - New Record for Team's Most Assists (6) in 1 Game for HC Lions Bohemia!<br />
[11/3/2019 3:39:12 PM] - New Record for Team's Most Shots Blocked (17) in 1 Game for HC Eagles Moravia!<br />
[11/3/2019 3:39:12 PM] - HC Lynx Kladno lines for next game are empty. Current rosters/lines are not erased.<br />
[11/3/2019 3:39:12 PM] - HC Black Eagles Silesia lines for next game are empty. Current rosters/lines are not erased.<br />
[11/3/2019 3:39:12 PM] - HC Lions Bohemia lines for next game are empty. Current rosters/lines are not erased.<br />
[11/3/2019 3:39:12 PM] - HC Eagles Moravia lines for next game are empty. Current rosters/lines are not erased.<br />
[11/3/2019 3:39:12 PM] - New Record for Team's Most Shots (27) in 1 Game for HC Lynx Kladno!<br />
[11/3/2019 3:39:12 PM] - New Record for Team's Most Hits (22) in 1 Game for HC Black Eagles Silesia!<br />
[11/3/2019 3:39:12 PM] - New Record for Team's Most Shots (31) in 1 Game for HC Black Eagles Silesia!<br />
[11/3/2019 3:39:11 PM] - New Record for Most Penalties Minutes (18) in a game!<br />
[11/3/2019 3:39:11 PM] - New Record for Team's Most Hits (29) in 1 Game for HC Lions Bohemia!<br />
[11/3/2019 3:39:11 PM] - New Record for Team's Most Hits (21) in 1 Game for HC Eagles Moravia!<br />
[11/3/2019 3:39:11 PM] - New Record for Team's Most Penalties Minutes (10) in 1 Game for HC Eagles Moravia!<br />
[11/3/2019 3:39:11 PM] - HC Black Eagles Silesia lines for next game are empty. Current rosters/lines are not erased.<br />
[11/3/2019 3:39:11 PM] - HC Lions Bohemia lines for next game are empty. Current rosters/lines are not erased.<br />
[11/3/2019 3:39:11 PM] - New Record for Most Penalties Minutes (16) in a game!<br />
[11/3/2019 3:39:11 PM] - New Record for Team's Most Shots Blocked (18) in 1 Game for HC Black Eagles Silesia!<br />
[11/3/2019 3:39:11 PM] - New Record for Team's Most Shots (25) in 1 Game for HC Black Eagles Silesia!<br />
[11/3/2019 3:39:11 PM] - New Record for Team's Most Points (8) in 1 Game for HC Black Eagles Silesia!<br />
[11/3/2019 3:39:11 PM] - New Record for Team's Most Assists (5) in 1 Game for HC Black Eagles Silesia!<br />
[11/3/2019 3:39:11 PM] - New Record for Team's Most Goals (3) in 1 Game for HC Black Eagles Silesia!<br />
[11/3/2019 3:39:11 PM] - New Record for Team's Most Shots Blocked (18) in 1 Game for HC Black Eagles Silesia!<br />
[11/3/2019 3:39:11 PM] - New Record for Team's Most Hits (18) in 1 Game for HC Lions Bohemia!<br />
[11/3/2019 3:39:11 PM] - New Record for Player (Dickie Pecker) Most Shots (9) in 1 Game!<br />
[11/3/2019 3:39:11 PM] - HC Lynx Kladno lines for next game are empty. Current rosters/lines are not erased.<br />
[11/3/2019 3:39:11 PM] - HC Black Eagles Silesia lines for next game are empty. Current rosters/lines are not erased.<br />
[11/3/2019 3:39:11 PM] - New Record for Most Hits (55) in a game!<br />
[11/3/2019 3:39:11 PM] - New Record for Team's Most Hits (17) in 1 Game for HC Black Eagles Silesia!<br />
[11/3/2019 3:39:11 PM] - New Record for Team's Most Shots Blocked (8) in 1 Game for HC Black Eagles Silesia!<br />
[11/3/2019 3:39:11 PM] - New Record for Team's Most Shots (18) in 1 Game for HC Black Eagles Silesia!<br />
[11/3/2019 3:39:11 PM] - New Record for Team's Most Points (2) in 1 Game for HC Black Eagles Silesia!<br />
[11/3/2019 3:39:11 PM] - New Record for Team's Most Assists (1) in 1 Game for HC Black Eagles Silesia!<br />
[11/3/2019 3:39:11 PM] - New Record for Team's Most Goals (1) in 1 Game for HC Black Eagles Silesia!<br />
[11/3/2019 3:39:11 PM] - New Record for Team's Most Hits (38) in 1 Game for HC Lynx Kladno!<br />
[11/3/2019 3:39:11 PM] - New Record for Team's Most Points (9) in 1 Game for HC Lynx Kladno!<br />
[11/3/2019 3:39:11 PM] - New Record for Team's Most Assists (6) in 1 Game for HC Lynx Kladno!<br />
[11/3/2019 3:39:11 PM] - New Record for Team's Most Goals (3) in 1 Game for HC Lynx Kladno!<br />
[11/3/2019 3:39:11 PM] - New Record for Team's Most Hits (38) in 1 Game for HC Lynx Kladno!<br />
[11/3/2019 3:39:11 PM] - New Record for Player (Tomas Pylon) Most Points (3) in 1 Game!<br />
[11/3/2019 3:39:11 PM] - New Record for Player (Tomas Pylon) Most Assists (3) in 1 Game!<br />
[11/3/2019 3:39:11 PM] - New Record for Player (Merit Csonka) Most Hits (6) in 1 Game!<br />
[11/3/2019 3:39:11 PM] - HC Lynx Kladno lines for next game are empty. Current rosters/lines are not erased.<br />
[11/3/2019 3:39:11 PM] - HC Eagles Moravia lines for next game are empty. Current rosters/lines are not erased.<br />
[11/3/2019 3:39:11 PM] - New Record for Team's Most Penalties Minutes (10) in 1 Game for HC Lynx Kladno!<br />
[11/3/2019 3:39:11 PM] - New Record for Team's Most Shots Blocked (15) in 1 Game for HC Lynx Kladno!<br />
[11/3/2019 3:39:11 PM] - New Record for Team's Most Shots (26) in 1 Game for HC Lynx Kladno!<br />
[11/3/2019 3:39:11 PM] - New Record for Team's Most Shots Blocked (15) in 1 Game for HC Lynx Kladno!<br />
[11/3/2019 3:39:11 PM] - New Record for Player (Merit Csonka) Most Goals (2) in 1 Game!<br />
[11/3/2019 3:39:11 PM] - New Record for Team's Most Shots Blocked (10) in 1 Game for HC Eagles Moravia!<br />
[11/3/2019 3:39:11 PM] - New Record for Team's Most Points (9) in 1 Game for HC Eagles Moravia!<br />
[11/3/2019 3:39:11 PM] - New Record for Team's Most Assists (6) in 1 Game for HC Eagles Moravia!<br />
[11/3/2019 3:39:11 PM] - New Record for Team's Most Assists (6) in 1 Game for HC Eagles Moravia!<br />
[11/3/2019 3:39:11 PM] - HC Lynx Kladno lines for next game are empty. Current rosters/lines are not erased.<br />
[11/3/2019 3:39:11 PM] - HC Black Eagles Silesia lines for next game are empty. Current rosters/lines are not erased.<br />
[11/3/2019 3:39:11 PM] - HC Lions Bohemia lines for next game are empty. Current rosters/lines are not erased.<br />
[11/3/2019 3:39:11 PM] - HC Eagles Moravia lines for next game are empty. Current rosters/lines are not erased.<br />
[11/3/2019 3:39:11 PM] - New Record for Most Hits (36) in a game!<br />
[11/3/2019 3:39:11 PM] - New Record for Most Shots (81) in a game!<br />
[11/3/2019 3:39:11 PM] - New Record for Most Points (17) in a game!<br />
[11/3/2019 3:39:11 PM] - New Record for Most Assists (10) in a game!<br />
[11/3/2019 3:39:11 PM] - New Record for Most Goals (7) in a game!<br />
[11/3/2019 3:39:11 PM] - New Record for Team's Most Hits (20) in 1 Game for HC Eagles Moravia!<br />
[11/3/2019 3:39:11 PM] - New Record for Team's Most Penalties Minutes (2) in 1 Game for HC Eagles Moravia!<br />
[11/3/2019 3:39:11 PM] - New Record for Team's Most Shots Blocked (8) in 1 Game for HC Eagles Moravia!<br />
[11/3/2019 3:39:11 PM] - New Record for Team's Most Shots (40) in 1 Game for HC Eagles Moravia!<br />
[11/3/2019 3:39:11 PM] - New Record for Team's Most Points (8) in 1 Game for HC Eagles Moravia!<br />
[11/3/2019 3:39:11 PM] - New Record for Team's Most Assists (5) in 1 Game for HC Eagles Moravia!<br />
[11/3/2019 3:39:11 PM] - New Record for Team's Most Goals (3) in 1 Game for HC Eagles Moravia!<br />
[11/3/2019 3:39:11 PM] - New Record for Team's Most Hits (20) in 1 Game for HC Eagles Moravia!<br />
[11/3/2019 3:39:11 PM] - New Record for Player (Ondrej Ravchitikov) Worse Plus/Minus (-2) in 1 Game!<br />
[11/3/2019 3:39:11 PM] - New Record for Player (Ondrej Ravchitikov) Most Ice Time (33:12) in 1 Game!<br />
[11/3/2019 3:39:11 PM] - New Record for Player (Slappy McDoodle) Most Assists (2) in 1 Game!<br />
[11/3/2019 3:39:11 PM] - New Record for Player (Brady McIntyre) Most Hits (5) in 1 Game!<br />
[11/3/2019 3:39:11 PM] - New Record for Team's Most Hits (16) in 1 Game for HC Lions Bohemia!<br />
[11/3/2019 3:39:11 PM] - New Record for Team's Most Penalties Minutes (12) in 1 Game for HC Lions Bohemia!<br />
[11/3/2019 3:39:11 PM] - New Record for Team's Most Shots Blocked (11) in 1 Game for HC Lions Bohemia!<br />
[11/3/2019 3:39:11 PM] - New Record for Team's Most Shots (41) in 1 Game for HC Lions Bohemia!<br />
[11/3/2019 3:39:11 PM] - New Record for Team's Most Points (9) in 1 Game for HC Lions Bohemia!<br />
[11/3/2019 3:39:11 PM] - New Record for Team's Most Assists (5) in 1 Game for HC Lions Bohemia!<br />
[11/3/2019 3:39:11 PM] - New Record for Team's Most Goals (4) in 1 Game for HC Lions Bohemia!<br />
[11/3/2019 3:39:11 PM] - New Record for Team's Most Penalties Minutes (12) in 1 Game for HC Lions Bohemia!<br />
[11/3/2019 3:39:11 PM] - New Record for Team's Most Shots Blocked (11) in 1 Game for HC Lions Bohemia!<br />
[11/3/2019 3:39:11 PM] - New Record for Team's Most Shots (41) in 1 Game for HC Lions Bohemia!<br />
[11/3/2019 3:39:11 PM] - New Record for Team's Most Points (9) in 1 Game for HC Lions Bohemia!<br />
[11/3/2019 3:39:11 PM] - New Record for Team's Most Assists (5) in 1 Game for HC Lions Bohemia!<br />
[11/3/2019 3:39:11 PM] - New Record for Team's Most Goals (4) in 1 Game for HC Lions Bohemia!<br />
[11/3/2019 3:39:11 PM] - New Record for Player (Matej Stransky) Most Shots (7) in 1 Game!<br />
[11/3/2019 3:39:11 PM] - New Record for Player (Matej Stransky) Most Points (2) in 1 Game!<br />
[11/3/2019 3:39:11 PM] - New Record for Player (Dickie Pecker) Most Shots (6) in 1 Game!<br />
[11/3/2019 3:39:11 PM] - New Record for Player (Walter White) Most Ice Time (32:13) in 1 Game!<br />
[11/3/2019 3:39:11 PM] - New Record for Player (Sean Stevenson Jr.) Best Plus/Minus (2) in 1 Game!<br />
[11/3/2019 3:39:11 PM] - New Record for Player (Pierre-Luc Laflamme) Most Shots Blocked (4) in 1 Game!<br />
[11/3/2019 3:39:11 PM] - New Record for Player (Pierre-Luc Laflamme) Most Ice Time (29:19) in 1 Game!<br />
[11/3/2019 3:39:11 PM] - New Record for Player (Luke Thomason) Most Ice Time (27:30) in 1 Game!<br />
[11/3/2019 3:39:11 PM] - New Record for Player (DeMaricus Smyth) Most Shots (5) in 1 Game!<br />
[11/3/2019 3:39:11 PM] - New Record for Player (Bernik Vrzala) Most Shots Blocked (3) in 1 Game!<br />
[11/3/2019 3:39:10 PM] - New Record for Most Hits (35) in a game!<br />
[11/3/2019 3:39:10 PM] - New Record for Most Penalties Minutes (14) in a game!<br />
[11/3/2019 3:39:10 PM] - New Record for Most Shots (42) in a game!<br />
[11/3/2019 3:39:10 PM] - New Record for Most Points (5) in a game!<br />
[11/3/2019 3:39:10 PM] - New Record for Most Assists (3) in a game!<br />
[11/3/2019 3:39:10 PM] - New Record for Most Goals (2) in a game!<br />
[11/3/2019 3:39:10 PM] - New Record for Team's Most Hits (19) in 1 Game for HC Lynx Kladno!<br />
[11/3/2019 3:39:10 PM] - New Record for Team's Most Penalties Minutes (6) in 1 Game for HC Lynx Kladno!<br />
[11/3/2019 3:39:10 PM] - New Record for Team's Most Shots Blocked (2) in 1 Game for HC Lynx Kladno!<br />
[11/3/2019 3:39:10 PM] - New Record for Team's Most Shots (25) in 1 Game for HC Lynx Kladno!<br />
[11/3/2019 3:39:10 PM] - New Record for Team's Most Points (5) in 1 Game for HC Lynx Kladno!<br />
[11/3/2019 3:39:10 PM] - New Record for Team's Most Assists (3) in 1 Game for HC Lynx Kladno!<br />
[11/3/2019 3:39:10 PM] - New Record for Team's Most Goals (2) in 1 Game for HC Lynx Kladno!<br />
[11/3/2019 3:39:10 PM] - New Record for Team's Most Hits (19) in 1 Game for HC Lynx Kladno!<br />
[11/3/2019 3:39:10 PM] - New Record for Team's Most Shots (25) in 1 Game for HC Lynx Kladno!<br />
[11/3/2019 3:39:10 PM] - New Record for Team's Most Points (5) in 1 Game for HC Lynx Kladno!<br />
[11/3/2019 3:39:10 PM] - New Record for Team's Most Assists (3) in 1 Game for HC Lynx Kladno!<br />
[11/3/2019 3:39:10 PM] - New Record for Team's Most Goals (2) in 1 Game for HC Lynx Kladno!<br />
[11/3/2019 3:39:10 PM] - New Record for Player (Michael Scarn) Most Goals (1) in 1 Game!<br />
[11/3/2019 3:39:10 PM] - New Record for Player (Alex Winters) Best Plus/Minus (1) in 1 Game!<br />
[11/3/2019 3:39:10 PM] - New Record for Player (Alex Winters) Most Points (1) in 1 Game!<br />
[11/3/2019 3:39:10 PM] - New Record for Player (Alex Winters) Most Assists (1) in 1 Game!<br />
[11/3/2019 3:39:10 PM] - New Record for Team's Most Hits (16) in 1 Game for HC Black Eagles Silesia!<br />
[11/3/2019 3:39:10 PM] - New Record for Team's Most Penalties Minutes (8) in 1 Game for HC Black Eagles Silesia!<br />
[11/3/2019 3:39:10 PM] - New Record for Team's Most Shots Blocked (7) in 1 Game for HC Black Eagles Silesia!<br />
[11/3/2019 3:39:10 PM] - New Record for Team's Most Shots (17) in 1 Game for HC Black Eagles Silesia!<br />
[11/3/2019 3:39:10 PM] - New Record for Team's Most Hits (16) in 1 Game for HC Black Eagles Silesia!<br />
[11/3/2019 3:39:10 PM] - New Record for Team's Most Penalties Minutes (8) in 1 Game for HC Black Eagles Silesia!<br />
[11/3/2019 3:39:10 PM] - New Record for Team's Most Shots Blocked (7) in 1 Game for HC Black Eagles Silesia!<br />
[11/3/2019 3:39:10 PM] - New Record for Team's Most Shots (17) in 1 Game for HC Black Eagles Silesia!<br />
[11/3/2019 3:39:10 PM] - New Record for Player (Vratislav Zbynek) Most Penalties Minutes (4) in 1 Game!<br />
[11/3/2019 3:39:10 PM] - New Record for Player (Jakub Trocheck) Most Shots Blocked (2) in 1 Game!<br />
[11/3/2019 3:39:10 PM] - New Record for Player (Jakub Trocheck) Most Ice Time (27:27) in 1 Game!<br />
[11/3/2019 3:39:10 PM] - New Record for Player (Zalleras Szlerchek) Most Ice Time (24:48) in 1 Game!<br />
[11/3/2019 3:39:10 PM] - New Record for Player (Piotr Czerkawski) Most Shots (4) in 1 Game!<br />
[11/3/2019 3:39:10 PM] - New Record for Player (Piotr Czerkawski) Most Ice Time (23:34) in 1 Game!<br />
[11/3/2019 3:39:10 PM] - New Record for Player (Josef Kubinec) Most Shots (2) in 1 Game!<br />
[11/3/2019 3:39:10 PM] - New Record for Player (David Kastrba) Most Hits (3) in 1 Game!<br />
[11/3/2019 3:39:10 PM] - New Record for Player (Charlie Schieck) Most Penalties Minutes (2) in 1 Game!<br />
[11/3/2019 3:39:10 PM] - New Record for Player (Charlie Schieck) Most Shots Blocked (1) in 1 Game!<br />
[11/3/2019 3:39:10 PM] - New Record for Player (Charlie Schieck) Most Ice Time (22:13) in 1 Game!<br />
[11/3/2019 3:39:10 PM] - New Record for Player (Aron Hernadivic) Worse Plus/Minus (-1) in 1 Game!<br />
[11/3/2019 3:39:10 PM] - New Record for Player (Alexander Zajac) Most Hits (2) in 1 Game!<br />
[11/3/2019 3:39:10 PM] - New Record for Player (Alexander Zajac) Most Shots (1) in 1 Game!<br />
[11/3/2019 3:39:10 PM] - New Record for Player (Alexander Zajac) Most Ice Time (16:28) in 1 Game!<br />
[11/3/2019 3:39:07 PM] - Auto Lines Partial Function has been run for HC Lynx Kladno.<br />
[11/3/2019 3:38:58 PM] - Pro Game Option - Injuries Active Option Deactivated<br />
[11/3/2019 3:38:57 PM] - Pro Game Option - Injuries Value Modified to 7<br />
[11/3/2019 3:38:57 PM] - Pro Game Option - Injuries Value Modified to 6<br />
[11/3/2019 3:38:57 PM] - Pro Game Option - Injuries Value Modified to 6<br />
[11/3/2019 3:38:57 PM] - Pro Game Option - Injuries Value Modified to 5<br />
[11/3/2019 3:38:55 PM] - Pro Game Option - Goals Value Modified to 20<br />
[11/3/2019 3:38:55 PM] - Pro Game Option - Goals Value Modified to 19<br />
[11/3/2019 3:38:55 PM] - Pro Game Option - Goals Value Modified to 19<br />
[11/3/2019 3:38:55 PM] - Pro Game Option - Goals Value Modified to 18<br />
[11/3/2019 3:38:55 PM] - Pro Game Option - Goals Value Modified to 18<br />
[11/3/2019 3:38:55 PM] - Pro Game Option - Goals Value Modified to 17<br />
[11/3/2019 3:38:55 PM] - Pro Game Option - Goals Value Modified to 17<br />
[11/3/2019 3:38:55 PM] - Pro Game Option - Goals Value Modified to 16<br />
[11/3/2019 3:38:54 PM] - Pro Game Option - Goals Value Modified to 16<br />
[11/3/2019 3:38:54 PM] - Pro Game Option - Goals Value Modified to 15<br />
[11/3/2019 3:38:54 PM] - Pro Game Option - Goals Value Modified to 15<br />
[11/3/2019 3:38:54 PM] - Pro Game Option - Goals Value Modified to 14<br />
[11/3/2019 3:38:54 PM] - Pro Game Option - Goals Value Modified to 14<br />
[11/3/2019 3:38:54 PM] - Pro Game Option - Goals Value Modified to 13<br />
[11/3/2019 3:38:53 PM] - Pro Game Option - Goals Value Modified to 13<br />
[11/3/2019 3:38:53 PM] - Pro Game Option - Goals Value Modified to 12<br />
[11/3/2019 3:38:53 PM] - Pro Game Option - Goals Value Modified to 12<br />
[11/3/2019 3:38:53 PM] - Pro Game Option - Goals Value Modified to 11<br />
[11/3/2019 3:38:53 PM] - Pro Game Option - Goals Value Modified to 11<br />
[11/3/2019 3:38:53 PM] - Pro Game Option - Goals Value Modified to 10<br />
[11/3/2019 3:38:53 PM] - Pro Game Option - Goals Value Modified to 10<br />
[11/3/2019 3:38:53 PM] - Pro Game Option - Goals Value Modified to 9<br />
[11/3/2019 3:38:53 PM] - Pro Game Option - Goals Value Modified to 9<br />
[11/3/2019 3:38:53 PM] - Pro Game Option - Goals Value Modified to 8<br />
[11/3/2019 3:38:53 PM] - Pro Game Option - Goals Value Modified to 8<br />
[11/3/2019 3:38:52 PM] - Pro Game Option - Goals Value Modified to 7<br />
[11/3/2019 3:38:49 PM] - Farm Simulating Engine is now version 2.0<br />
[11/3/2019 3:38:48 PM] - Pro Simulating Engine is now version 2.0<br />
[11/3/2019 3:16:39 PM] - Pro Game Option - Goals Value Modified to 7<br />
[11/3/2019 3:16:39 PM] - Pro Game Option - Goals Value Modified to 8<br />
[11/3/2019 3:16:39 PM] - Pro Game Option - Goals Value Modified to 8<br />
[11/3/2019 3:16:39 PM] - Pro Game Option - Goals Value Modified to 9<br />
[11/3/2019 3:16:39 PM] - Pro Game Option - Goals Value Modified to 9<br />
[11/3/2019 3:16:39 PM] - Pro Game Option - Goals Value Modified to 10<br />
[11/3/2019 3:16:30 PM] - Season #1 has started!<br />
[11/3/2019 3:16:26 PM] - Pro Schedule has been created.<br />
[11/3/2019 3:15:40 PM] - Pro Game Option - PP Value Modified to 30<br />
[11/3/2019 3:15:39 PM] - Pro Game Option - PP Value Modified to 29<br />
[11/3/2019 3:15:39 PM] - Pro Game Option - PP Value Modified to 29<br />
[11/3/2019 3:15:39 PM] - Pro Game Option - PP Value Modified to 28<br />
[11/3/2019 3:15:38 PM] - Pro Game Option - PP Value Modified to 28<br />
[11/3/2019 3:15:38 PM] - Pro Game Option - PP Value Modified to 29<br />
[11/3/2019 3:15:38 PM] - Pro Game Option - PP Value Modified to 30<br />
[11/3/2019 3:15:38 PM] - Pro Game Option - PP Value Modified to 31<br />
[11/3/2019 3:15:38 PM] - Pro Game Option - PP Value Modified to 32<br />
[11/3/2019 3:15:38 PM] - Pro Game Option - PP Value Modified to 33<br />
[11/3/2019 3:15:38 PM] - Pro Game Option - PP Value Modified to 34<br />
[11/3/2019 3:15:38 PM] - Pro Game Option - PP Value Modified to 35<br />
[11/3/2019 3:15:38 PM] - Pro Game Option - PP Value Modified to 36<br />
[11/3/2019 3:15:38 PM] - Pro Game Option - PP Value Modified to 37<br />
[11/3/2019 3:15:38 PM] - Pro Game Option - PP Value Modified to 38<br />
[11/3/2019 3:15:38 PM] - Pro Game Option - PP Value Modified to 39<br />
[11/3/2019 3:15:38 PM] - Pro Game Option - PP Value Modified to 40<br />
[11/3/2019 3:15:38 PM] - Pro Game Option - PP Value Modified to 41<br />
[11/3/2019 3:15:38 PM] - Pro Game Option - PP Value Modified to 42<br />
[11/3/2019 3:15:37 PM] - Pro Game Option - PP Value Modified to 43<br />
[11/3/2019 3:15:37 PM] - Pro Game Option - PP Value Modified to 44<br />
[11/3/2019 3:15:37 PM] - Pro Game Option - PP Value Modified to 45<br />
[11/3/2019 3:15:37 PM] - Pro Game Option - PP Value Modified to 46<br />
[11/3/2019 3:15:37 PM] - Pro Game Option - PP Value Modified to 47<br />
[11/3/2019 3:15:37 PM] - Pro Game Option - PP Value Modified to 48<br />
[11/3/2019 3:15:37 PM] - Pro Game Option - PP Value Modified to 49<br />
[11/3/2019 3:15:37 PM] - Pro Game Option - PP Value Modified to 50<br />
[11/3/2019 3:15:23 PM] - Pro Game Option - Injuries Value Modified to 5<br />
[11/3/2019 3:15:23 PM] - Pro Game Option - Injuries Value Modified to 6<br />
[11/3/2019 3:15:23 PM] - Pro Game Option - Injuries Value Modified to 6<br />
[11/3/2019 3:15:23 PM] - Pro Game Option - Injuries Value Modified to 7<br />
[11/3/2019 3:15:22 PM] - Pro Game Option - Injuries Value Modified to 7<br />
[11/3/2019 3:15:22 PM] - Pro Game Option - Injuries Value Modified to 8<br />
[11/3/2019 3:15:22 PM] - Pro Game Option - Injuries Value Modified to 9<br />
[11/3/2019 3:15:22 PM] - Pro Game Option - Injuries Value Modified to 10<br />
[11/3/2019 3:15:22 PM] - Pro Game Option - Injuries Value Modified to 11<br />
[11/3/2019 3:15:22 PM] - Pro Game Option - Injuries Value Modified to 12<br />
[11/3/2019 3:15:22 PM] - Pro Game Option - Injuries Value Modified to 13<br />
[11/3/2019 3:15:22 PM] - Pro Game Option - Injuries Value Modified to 14<br />
[11/3/2019 3:15:22 PM] - Pro Game Option - Injuries Value Modified to 15<br />
[11/3/2019 3:15:22 PM] - Pro Game Option - Injuries Value Modified to 16<br />
[11/3/2019 3:15:22 PM] - Pro Game Option - Injuries Value Modified to 17<br />
[11/3/2019 3:15:22 PM] - Pro Game Option - Injuries Value Modified to 18<br />
[11/3/2019 3:15:21 PM] - Pro Game Option - Injuries Value Modified to 19<br />
[11/3/2019 3:15:21 PM] - Pro Game Option - Injuries Value Modified to 19<br />
[11/3/2019 3:15:21 PM] - Pro Game Option - Injuries Value Modified to 20<br />
[11/3/2019 3:15:21 PM] - Pro Game Option - Goals Value Modified to 10<br />
[11/3/2019 3:15:20 PM] - Pro Game Option - Goals Value Modified to 11<br />
[11/3/2019 3:15:20 PM] - Pro Game Option - Goals Value Modified to 11<br />
[11/3/2019 3:15:20 PM] - Pro Game Option - Goals Value Modified to 12<br />
[11/3/2019 3:15:20 PM] - Pro Game Option - Goals Value Modified to 13<br />
[11/3/2019 3:15:20 PM] - Pro Game Option - Goals Value Modified to 14<br />
[11/3/2019 3:15:20 PM] - Pro Game Option - Goals Value Modified to 15<br />
[11/3/2019 3:15:20 PM] - Pro Game Option - Goals Value Modified to 16<br />
[11/3/2019 3:15:20 PM] - Pro Game Option - Goals Value Modified to 17<br />
[11/3/2019 3:15:20 PM] - Pro Game Option - Goals Value Modified to 18<br />
[11/3/2019 3:15:20 PM] - Pro Game Option - Goals Value Modified to 19<br />
[11/3/2019 3:15:20 PM] - Pro Game Option - Goals Value Modified to 20<br />
[11/3/2019 3:15:20 PM] - Pro Game Option - Goals Value Modified to 21<br />
[11/3/2019 3:15:20 PM] - Pro Game Option - Goals Value Modified to 22<br />
[11/3/2019 3:15:19 PM] - Pro Game Option - Goals Value Modified to 23<br />
[11/3/2019 3:15:19 PM] - Pro Game Option - Goals Value Modified to 24<br />
[11/3/2019 3:15:19 PM] - Pro Game Option - Goals Value Modified to 25<br />
[11/3/2019 3:15:19 PM] - Pro Game Option - Goals Value Modified to 26<br />
[11/3/2019 3:15:19 PM] - Pro Game Option - Goals Value Modified to 27<br />
[11/3/2019 3:15:19 PM] - Pro Game Option - Goals Value Modified to 28<br />
[11/3/2019 3:15:19 PM] - Pro Game Option - Goals Value Modified to 29<br />
[11/3/2019 3:15:19 PM] - Pro Game Option - Goals Value Modified to 30<br />
[11/3/2019 3:15:19 PM] - Pro Game Option - Goals Value Modified to 31<br />
[11/3/2019 3:15:19 PM] - Pro Game Option - Goals Value Modified to 32<br />
[11/3/2019 3:15:19 PM] - Pro Game Option - Goals Value Modified to 33<br />
[11/3/2019 3:15:19 PM] - Pro Game Option - Goals Value Modified to 34<br />
[11/3/2019 3:15:19 PM] - Pro Game Option - Goals Value Modified to 35<br />
[11/3/2019 3:15:19 PM] - Pro Game Option - Goals Value Modified to 36<br />
[11/3/2019 3:15:19 PM] - Pro Game Option - Goals Value Modified to 37<br />
[11/3/2019 3:15:19 PM] - Pro Game Option - Goals Value Modified to 38<br />
[11/3/2019 3:15:18 PM] - Pro Game Option - Goals Value Modified to 39<br />
[11/3/2019 3:15:18 PM] - Pro Game Option - Goals Value Modified to 40<br />
[11/3/2019 11:47:57 AM] - Pro Game Option - Shots Value Modified to 40<br />
[11/3/2019 11:47:57 AM] - Pro Game Option - Shots Value Modified to 41<br />
[11/3/2019 11:47:56 AM] - Pro Game Option - Shots Value Modified to 41<br />
[11/3/2019 11:47:56 AM] - Pro Game Option - Shots Value Modified to 42<br />
[11/3/2019 11:47:56 AM] - Pro Game Option - Shots Value Modified to 42<br />
[11/3/2019 11:47:56 AM] - Pro Game Option - Shots Value Modified to 43<br />
[11/3/2019 11:47:56 AM] - Pro Game Option - Shots Value Modified to 43<br />
[11/3/2019 11:47:56 AM] - Pro Game Option - Shots Value Modified to 44<br />
[11/3/2019 11:47:56 AM] - Pro Game Option - Shots Value Modified to 44<br />
[11/3/2019 11:47:55 AM] - Pro Game Option - Shots Value Modified to 45<br />
[11/3/2019 11:47:54 AM] - Pro Game Option - Penalties Value Modified to 45<br />
[11/3/2019 11:47:54 AM] - Pro Game Option - Penalties Value Modified to 46<br />
[11/3/2019 11:47:53 AM] - Pro Game Option - Penalties Value Modified to 46<br />
[11/3/2019 11:47:53 AM] - Pro Game Option - Penalties Value Modified to 47<br />
[11/3/2019 11:47:53 AM] - Pro Game Option - Penalties Value Modified to 47<br />
[11/3/2019 11:47:53 AM] - Pro Game Option - Penalties Value Modified to 48<br />
[11/3/2019 11:47:53 AM] - Pro Game Option - Penalties Value Modified to 48<br />
[11/3/2019 11:47:53 AM] - Pro Game Option - Penalties Value Modified to 49<br />
[11/3/2019 11:47:52 AM] - Pro Game Option - Penalties Value Modified to 49<br />
[11/3/2019 11:47:52 AM] - Pro Game Option - Penalties Value Modified to 50<br />
[11/3/2019 11:47:51 AM] - Pro Game Option - Injuries Value Modified to 20<br />
[11/3/2019 11:47:51 AM] - Pro Game Option - Injuries Value Modified to 21<br />
[11/3/2019 11:47:51 AM] - Pro Game Option - Injuries Value Modified to 21<br />
[11/3/2019 11:47:51 AM] - Pro Game Option - Injuries Value Modified to 22<br />
[11/3/2019 11:47:50 AM] - Pro Game Option - Injuries Value Modified to 22<br />
[11/3/2019 11:47:50 AM] - Pro Game Option - Injuries Value Modified to 23<br />
[11/3/2019 11:47:50 AM] - Pro Game Option - Injuries Value Modified to 23<br />
[11/3/2019 11:47:49 AM] - Pro Game Option - Injuries Value Modified to 24<br />
[11/3/2019 11:47:49 AM] - Pro Game Option - Injuries Value Modified to 24<br />
[11/3/2019 11:47:49 AM] - Pro Game Option - Injuries Value Modified to 25<br />
[11/3/2019 11:47:49 AM] - Pro Game Option - Injuries Value Modified to 25<br />
[11/3/2019 11:47:49 AM] - Pro Game Option - Injuries Value Modified to 26<br />
[11/3/2019 11:47:48 AM] - Pro Game Option - Injuries Value Modified to 26<br />
[11/3/2019 11:47:48 AM] - Pro Game Option - Injuries Value Modified to 27<br />
[11/3/2019 11:47:48 AM] - Pro Game Option - Injuries Value Modified to 27<br />
[11/3/2019 11:47:48 AM] - Pro Game Option - Injuries Value Modified to 28<br />
[11/3/2019 11:47:48 AM] - Pro Game Option - Injuries Value Modified to 28<br />
[11/3/2019 11:47:48 AM] - Pro Game Option - Injuries Value Modified to 29<br />
[11/3/2019 11:47:48 AM] - Pro Game Option - Injuries Value Modified to 29<br />
[11/3/2019 11:47:47 AM] - Pro Game Option - Injuries Value Modified to 30<br />
[11/3/2019 11:47:47 AM] - Pro Game Option - Goals Value Modified to 40<br />
[11/3/2019 11:47:47 AM] - Pro Game Option - Goals Value Modified to 41<br />
[11/3/2019 11:47:46 AM] - Pro Game Option - Goals Value Modified to 41<br />
[11/3/2019 11:47:46 AM] - Pro Game Option - Goals Value Modified to 42<br />
[11/3/2019 11:47:46 AM] - Pro Game Option - Goals Value Modified to 42<br />
[11/3/2019 11:47:46 AM] - Pro Game Option - Goals Value Modified to 43<br />
[11/3/2019 11:47:45 AM] - Pro Game Option - Goals Value Modified to 43<br />
[11/3/2019 11:47:45 AM] - Pro Game Option - Goals Value Modified to 44<br />
[11/3/2019 11:47:45 AM] - Pro Game Option - Goals Value Modified to 44<br />
[11/3/2019 11:47:45 AM] - Pro Game Option - Goals Value Modified to 45<br />
[11/3/2019 11:47:44 AM] - Pro Game Option - Fights Value Modified to 35<br />
[11/3/2019 11:47:44 AM] - Pro Game Option - Fights Value Modified to 36<br />
[11/3/2019 11:47:43 AM] - Pro Game Option - Fights Value Modified to 36<br />
[11/3/2019 11:47:43 AM] - Pro Game Option - Fights Value Modified to 37<br />
[11/3/2019 11:47:43 AM] - Pro Game Option - Fights Value Modified to 37<br />
[11/3/2019 11:47:43 AM] - Pro Game Option - Fights Value Modified to 38<br />
[11/3/2019 11:47:43 AM] - Pro Game Option - Fights Value Modified to 38<br />
[11/3/2019 11:47:42 AM] - Pro Game Option - Fights Value Modified to 39<br />
[11/3/2019 11:47:42 AM] - Pro Game Option - Fights Value Modified to 39<br />
[11/3/2019 11:47:42 AM] - Pro Game Option - Fights Value Modified to 40<br />
[11/2/2019 2:02:07 PM] - Auto Lines Function has been run for HC Eagles Moravia.<br />
[11/2/2019 2:01:49 PM] - HC Eagles Moravia roster errors : Not enough Defenseman available in Pro Team! 4 Dressed. 6 Required.
Not enough Players available in Pro Team! 14 Dressed. 18 Required.
Some errors will be automatically fixed.
<br />
[11/2/2019 2:01:33 PM] - Auto Lines Function has been run for HC Black Eagles Silesia.<br />
[11/2/2019 2:01:27 PM] - Pro Roster Limit Minimum Center Value Modified to 1<br />
[11/2/2019 2:01:27 PM] - Pro Roster Limit Minimum Left Wing Value Modified to 1<br />
[11/2/2019 2:01:26 PM] - Pro Roster Limit Minimum Right Wing Value Modified to 1<br />
[11/2/2019 2:01:26 PM] - Pro Roster Limit Minimum Right Wing Value Modified to 2<br />
[11/2/2019 2:01:25 PM] - Pro Roster Limit Minimum Left Wing Value Modified to 2<br />
[11/2/2019 2:01:24 PM] - Pro Roster Limit Minimum Center Value Modified to 2<br />
[11/2/2019 2:01:04 PM] - HC Black Eagles Silesia roster errors : Not enough Centers available in Pro Team! 2 Dressed. 3 Required.
Some errors will be automatically fixed.
<br />
[11/2/2019 2:01:01 PM] - HC Black Eagles Silesia roster errors : Not enough Centers available in Pro Team! 2 Dressed. 3 Required.
Some errors will be automatically fixed.
<br />
[11/2/2019 2:00:53 PM] - Izem Abioye was released by HC Lynx Kladno.<br />
[11/2/2019 2:00:53 PM] - HC Lynx Kladno paid $0 to release Izem Abioye.<br />
[11/2/2019 2:00:24 PM] - Josef Novotny was added to HC Lynx Kladno.<br />
[11/2/2019 2:00:00 PM] - Josef Novotny was released by HC Black Eagles Silesia.<br />
[11/2/2019 2:00:00 PM] - HC Black Eagles Silesia paid $0 to release Josef Novotny.<br />
[11/2/2019 1:57:29 PM] - HC Black Eagles Silesia roster errors : Not enough Centers available in Pro Team! 2 Dressed. 3 Required.
Not enough Players available in Pro Team! 15 Dressed. 18 Required.
Some errors will be automatically fixed.
<br />
[11/2/2019 1:57:10 PM] - Auto Lines Function has been run for HC Lynx Kladno.<br />
[11/2/2019 1:57:02 PM] - HC Lynx Kladno roster errors : Not enough Players available in Pro Team! 13 Dressed. 18 Required.
Some errors will be automatically fixed.
<br />
[11/2/2019 1:56:59 PM] - HC Lions Bohemia Email Address was changed to .<br />
[11/2/2019 1:55:40 PM] - Auto Lines Function has been run for HC Lions Bohemia.<br />
[11/2/2019 1:55:08 PM] - HC Lions Bohemia roster errors : Not enough Defenseman available in Pro Team! 5 Dressed. 6 Required.
Not enough Players available in Pro Team! 12 Dressed. 18 Required.
Some errors will be automatically fixed.
<br />
[11/2/2019 1:55:02 PM] - Walter White was added to HC Lions Bohemia.<br />
[11/2/2019 1:54:59 PM] - Vratislav Zbynek was added to HC Black Eagles Silesia.<br />
[11/2/2019 1:54:54 PM] - Tomas Pylon was added to HC Lynx Kladno.<br />
[11/2/2019 1:54:44 PM] - Simothy Drunkebird was added to HC Black Eagles Silesia.<br />
[11/2/2019 1:54:32 PM] - Sachimo Zoidberg was added to HC Eagles Moravia.<br />
[11/2/2019 1:54:28 PM] - Ruslan Zaporozhets was added to HC Lions Bohemia.<br />
[11/2/2019 1:54:19 PM] - Petr Kolesnikovs was added to HC Lions Bohemia.<br />
[11/2/2019 1:54:14 PM] - Patrik Satan was added to HC Lynx Kladno.<br />
[11/2/2019 1:54:10 PM] - Ondrej Ravchitikov was added to HC Eagles Moravia.<br />
[11/2/2019 1:54:05 PM] - Mikhail Kladno was added to HC Eagles Moravia.<br />
[11/2/2019 1:53:59 PM] - Merit Csonka was added to HC Lynx Kladno.<br />
[11/2/2019 1:53:52 PM] - Matej Stransky was added to HC Lions Bohemia.<br />
[11/2/2019 1:53:42 PM] - Krysztof Kowalski was added to HC Black Eagles Silesia.<br />
[11/2/2019 1:53:33 PM] - Konstantin Voloshin was added to HC Lions Bohemia.<br />
[11/2/2019 1:53:28 PM] - Jakub Trocheck was added to HC Black Eagles Silesia.<br />
[11/2/2019 1:52:58 PM] - Grayson St. Raegan was added to HC Lynx Kladno.<br />
[11/2/2019 1:52:52 PM] - Dickie Pecker was added to HC Lions Bohemia.<br />
[11/2/2019 1:52:46 PM] - Daniel Garland was added to HC Eagles Moravia.<br />
[11/2/2019 1:52:38 PM] - Cash Savage was added to HC Lynx Kladno.<br />
[11/2/2019 1:51:06 PM] - Farm Team 2 roster errors : Not enough Players available in Pro Team! 14 Dressed. 20 Required.
Some errors will be automatically fixed.
<br />
[11/2/2019 1:51:06 PM] - HC Lions Bohemia roster errors : Not enough Defenseman available in Pro Team! 5 Dressed. 6 Required.
Not enough Players available in Pro Team! 12 Dressed. 18 Required.
Some errors will be automatically fixed.
<br />
[11/2/2019 1:46:18 PM] - Update Stats Function for Players has been run.<br />
[11/2/2019 1:46:18 PM] - 82 Players were imported correctly!<br />
[11/2/2019 1:44:29 PM] - Farm Team 2 roster errors : Not enough Players available in Pro Team! 14 Dressed. 20 Required.
Some errors will be automatically fixed.
<br />
[11/2/2019 1:44:29 PM] - HC Lions Bohemia roster errors : Not enough Left Wings available in Pro Team! 1 Dressed. 3 Required.
Not enough Right Wings available in Pro Team! 2 Dressed. 3 Required.
Not enough Defenseman available in Pro Team! 5 Dressed. 6 Required.
Not enough Players available in Pro Team! 12 Dressed. 18 Required.
Some errors will be automatically fixed.
<br />
[10/26/2019 3:08:23 PM] - Farm Team 1 roster errors : Not enough Players available in Pro Team! 16 Dressed. 20 Required.
Some errors will be automatically fixed.
<br />
[10/26/2019 3:08:23 PM] - HC Eagles Moravia roster errors : Not enough Left Wings available in Pro Team! 1 Dressed. 3 Required.
Not enough Defenseman available in Pro Team! 4 Dressed. 6 Required.
Not enough Players available in Pro Team! 14 Dressed. 18 Required.
Some errors will be automatically fixed.
<br />
[10/26/2019 1:12:44 PM] - Farm Team 1 roster errors : Not enough Players available in Pro Team! 16 Dressed. 20 Required.
Some errors will be automatically fixed.
<br />
[10/26/2019 1:12:44 PM] - HC Eagles Moravia roster errors : Not enough Left Wings available in Pro Team! 1 Dressed. 3 Required.
Not enough Defenseman available in Pro Team! 4 Dressed. 6 Required.
Not enough Players available in Pro Team! 14 Dressed. 18 Required.
Some errors will be automatically fixed.
<br />
[10/26/2019 1:12:39 PM] - Farm Team 3 roster errors : Not enough Players available in Pro Team! 17 Dressed. 20 Required.
Some errors will be automatically fixed.
<br />
[10/26/2019 1:12:39 PM] - HC Black Eagles Silesia roster errors : Not enough Centers available in Pro Team! 2 Dressed. 3 Required.
Not enough Right Wings available in Pro Team! 1 Dressed. 3 Required.
Not enough Players available in Pro Team! 15 Dressed. 18 Required.
Some errors will be automatically fixed.
<br />
[10/26/2019 1:12:33 PM] - Farm Team 2 roster errors : Not enough Players available in Pro Team! 14 Dressed. 20 Required.
Some errors will be automatically fixed.
<br />
[10/26/2019 1:12:33 PM] - HC Lions Bohemia roster errors : Not enough Left Wings available in Pro Team! 1 Dressed. 3 Required.
Not enough Right Wings available in Pro Team! 2 Dressed. 3 Required.
Not enough Defenseman available in Pro Team! 5 Dressed. 6 Required.
Not enough Players available in Pro Team! 12 Dressed. 18 Required.
Some errors will be automatically fixed.
<br />
[10/26/2019 1:12:27 PM] - Farm Team 4 roster errors : Not enough Players available in Pro Team! 15 Dressed. 20 Required.
Some errors will be automatically fixed.
<br />
[10/26/2019 1:12:27 PM] - HC Lynx Kladno roster errors : Not enough Left Wings available in Pro Team! 0 Dressed. 3 Required.
Not enough Players available in Pro Team! 13 Dressed. 18 Required.
Some errors will be automatically fixed.
<br />
[10/16/2019 3:57:52 PM] - Farm Team 1 roster errors : Not enough Players available in Pro Team! 16 Dressed. 20 Required.
Some errors will be automatically fixed.
<br />
[10/16/2019 3:57:52 PM] - HC Eagles Moravia roster errors : Not enough Centers available in Pro Team! 1 Dressed. 3 Required.
Not enough Left Wings available in Pro Team! 0 Dressed. 3 Required.
Not enough Forward available in Pro Team! 5 Dressed. 6 Required.
Not enough Defenseman available in Pro Team! 2 Dressed. 6 Required.
Not enough Goalie available in Pro Team! 1 Dressed. 2 Required.
Not enough Players available in Pro Team! 7 Dressed. 18 Required.
Some errors will be automatically fixed.
<br />
[10/16/2019 3:57:44 PM] - Farm Team 3 roster errors : Not enough Players available in Pro Team! 17 Dressed. 20 Required.
Some errors will be automatically fixed.
<br />
[10/16/2019 3:57:44 PM] - HC Black Eagles Silesia roster errors : Not enough Centers available in Pro Team! 1 Dressed. 3 Required.
Not enough Right Wings available in Pro Team! 1 Dressed. 3 Required.
Not enough Goalie available in Pro Team! 0 Dressed. 2 Required.
Not enough Players available in Pro Team! 14 Dressed. 18 Required.
Some errors will be automatically fixed.
<br />
[10/16/2019 3:57:35 PM] - Farm Team 4 roster errors : Not enough Players available in Pro Team! 15 Dressed. 20 Required.
Some errors will be automatically fixed.
<br />
[10/16/2019 3:57:35 PM] - HC Lynx Kladno roster errors : Not enough Centers available in Pro Team! 2 Dressed. 3 Required.
Not enough Left Wings available in Pro Team! 0 Dressed. 3 Required.
Not enough Players available in Pro Team! 12 Dressed. 18 Required.
Some errors will be automatically fixed.
<br />
[10/16/2019 3:57:13 PM] - Farm Team 2 roster errors : Not enough Players available in Pro Team! 14 Dressed. 20 Required.
Some errors will be automatically fixed.
<br />
[10/16/2019 3:57:13 PM] - HC Lions Bohemia roster errors : Not enough Left Wings available in Pro Team! 1 Dressed. 3 Required.
Not enough Right Wings available in Pro Team! 1 Dressed. 3 Required.
Not enough Defenseman available in Pro Team! 4 Dressed. 6 Required.
Not enough Players available in Pro Team! 10 Dressed. 18 Required.
Some errors will be automatically fixed.
<br />
[10/16/2019 3:57:10 PM] - Ty Justice was added to HC Eagles Moravia.<br />
[10/16/2019 3:57:08 PM] - Slappy McDoodle was added to HC Eagles Moravia.<br />
[10/16/2019 3:56:55 PM] - Schnitinfritz Jagr was added to HC Lynx Kladno.<br />
[10/16/2019 3:56:44 PM] - Potato Chips was added to HC Eagles Moravia.<br />
[10/16/2019 3:56:34 PM] - Pierre-Luc Laflamme was added to HC Lions Bohemia.<br />
[10/16/2019 3:56:29 PM] - Christoffer Bjornsson was added to HC Eagles Moravia.<br />
[10/16/2019 3:56:13 PM] - Cameron Urbowicz was added to HC Lions Bohemia.<br />
[10/16/2019 3:56:09 PM] - Barak Obrana was added to HC Eagles Moravia.<br />
[10/16/2019 3:56:07 PM] - Aviad Ratzon was added to HC Eagles Moravia.<br />
[10/16/2019 3:55:50 PM] - Update Stats Function for Players has been run.<br />
[10/16/2019 3:55:50 PM] - 63 Players were imported correctly!<br />
[10/16/2019 3:55:49 PM] - Creator Comment is Based on Simulation Hockey League league rating<br />
[10/16/2019 3:54:16 PM] - Use Date instead of Now for Age Calculation Date was set to 9/16/1960<br />
[10/16/2019 3:54:04 PM] - Use Date instead of Now for Age Calculation Date was set to 9/16/2019<br />
[10/16/2019 3:54:00 PM] - Use Date instead of Now for Age Calculation Option Activated<br />
[10/16/2019 3:51:21 PM] - Update Stats Function for Players has been run.<br />
[10/16/2019 3:51:21 PM] - 9 Player(s) on 63 were not imported correctly!<br />
[10/16/2019 3:51:20 PM] - Aviad Ratzon was erased.<br />
[10/16/2019 3:51:20 PM] - Ty Justice was not imported. Age field didn't pass the validation test.<br />
[10/16/2019 3:51:20 PM] - Slappy McDoodle was not imported. Age field didn't pass the validation test.<br />
[10/16/2019 3:51:20 PM] - Schnitinfritz Jagr was not imported. Age field didn't pass the validation test.<br />
[10/16/2019 3:51:20 PM] - Potato Chips was not imported. Age field didn't pass the validation test.<br />
[10/16/2019 3:51:20 PM] - Pierre-Luc Laflamme was not imported. Age field didn't pass the validation test.<br />
[10/16/2019 3:51:20 PM] - Christoffer Bjornsson was not imported. Age field didn't pass the validation test.<br />
[10/16/2019 3:51:20 PM] - Cameron Urbowicz was not imported. Age field didn't pass the validation test.<br />
[10/16/2019 3:51:20 PM] - Barak Obrana was not imported. Age field didn't pass the validation test.<br />
[10/16/2019 3:51:20 PM] - Aviad Ratzon was not imported. Age field didn't pass the validation test.<br />
[10/16/2019 3:51:20 PM] - Creator Comment is Based on Simulation Hockey League league rating<br />
[10/16/2019 3:51:06 PM] - Aviad Ratzon was created.<br />
[10/16/2019 3:49:58 PM] - Marian Potoczny was added to HC Eagles Moravia.<br />
[10/16/2019 3:49:56 PM] - Marek Vyskoc was added to HC Eagles Moravia.<br />
[10/16/2019 3:49:44 PM] - Zalleras Szlerchek was added to HC Black Eagles Silesia.<br />
[10/16/2019 3:49:42 PM] - Mike Verminski was added to HC Black Eagles Silesia.<br />
[10/16/2019 3:49:36 PM] - Casimir Stevens was added to HC Black Eagles Silesia.<br />
[10/16/2019 3:49:00 PM] - Update Stats Function for Players has been run.<br />
[10/16/2019 3:49:00 PM] - 9 Player(s) on 63 were not imported correctly!<br />
[10/16/2019 3:48:26 PM] - Mike Verminski was erased.<br />
[10/16/2019 3:48:26 PM] - Casmir Stevens was erased.<br />
[10/16/2019 3:48:26 PM] - Christoffer Bjornsson was erased.<br />
[10/16/2019 3:48:26 PM] - Zalleras Szlerchek was erased.<br />
[10/16/2019 3:48:26 PM] - Ty Justice was erased.<br />
[10/16/2019 3:48:26 PM] - Slappy McDoodle was erased.<br />
[10/16/2019 3:48:26 PM] - Schnitinfritz Jagr was erased.<br />
[10/16/2019 3:48:26 PM] - Potato Chips was erased.<br />
[10/16/2019 3:48:26 PM] - Pierre-Luc Laflamme was erased.<br />
[10/16/2019 3:48:26 PM] - Cameron Urbowicz was erased.<br />
[10/16/2019 3:48:26 PM] - Barak Obrana was erased.<br />
[10/16/2019 3:48:26 PM] - Aviad Ratzon was erased.<br />
[10/16/2019 3:48:26 PM] - Ty Justice was not imported. Age field didn't pass the validation test.<br />
[10/16/2019 3:48:26 PM] - Slappy McDoodle was not imported. Age field didn't pass the validation test.<br />
[10/16/2019 3:48:26 PM] - Schnitinfritz Jagr was not imported. Age field didn't pass the validation test.<br />
[10/16/2019 3:48:26 PM] - Potato Chips was not imported. Age field didn't pass the validation test.<br />
[10/16/2019 3:48:26 PM] - Pierre-Luc Laflamme was not imported. Age field didn't pass the validation test.<br />
[10/16/2019 3:48:26 PM] - Christoffer Bjornsson was not imported. Age field didn't pass the validation test.<br />
[10/16/2019 3:48:26 PM] - Cameron Urbowicz was not imported. Age field didn't pass the validation test.<br />
[10/16/2019 3:48:26 PM] - Barak Obrana was not imported. Age field didn't pass the validation test.<br />
[10/16/2019 3:48:26 PM] - Aviad Ratzon was not imported. Age field didn't pass the validation test.<br />
[10/16/2019 3:48:26 PM] - Creator Comment is Based on Simulation Hockey League league rating<br />
[10/16/2019 3:41:25 PM] - Zalleras Szlerchek was added to HC Black Eagles Silesia.<br />
[10/16/2019 3:41:05 PM] - Zalleras Szlerchek was created.<br />
[10/16/2019 3:40:29 PM] - Farm Team 3 roster errors : Not enough Players available in Pro Team! 16 Dressed. 20 Required.
Some errors will be automatically fixed.
<br />
[10/16/2019 3:40:29 PM] - HC Black Eagles Silesia roster errors : Not enough Centers available in Pro Team! 1 Dressed. 3 Required.
Not enough Right Wings available in Pro Team! 1 Dressed. 3 Required.
Not enough Goalie available in Pro Team! 1 Dressed. 2 Required.
Not enough Players available in Pro Team! 14 Dressed. 18 Required.
Some errors will be automatically fixed.
<br />
[10/16/2019 3:40:26 PM] - Mike Verminski was added to HC Black Eagles Silesia.<br />
[10/16/2019 3:40:07 PM] - Mike Verminski was created.<br />
[10/16/2019 3:39:36 PM] - Farm Team 3 roster errors : Not enough Players available in Pro Team! 15 Dressed. 20 Required.
Some errors will be automatically fixed.
<br />
[10/16/2019 3:39:36 PM] - HC Black Eagles Silesia roster errors : Not enough Centers available in Pro Team! 1 Dressed. 3 Required.
Not enough Right Wings available in Pro Team! 1 Dressed. 3 Required.
Not enough Goalie available in Pro Team! 0 Dressed. 2 Required.
Not enough Players available in Pro Team! 14 Dressed. 18 Required.
Some errors will be automatically fixed.
<br />
[10/16/2019 3:39:31 PM] - Casmir Stevens was added to HC Black Eagles Silesia.<br />
[10/16/2019 3:39:16 PM] - Casmir Stevens was created.<br />
[10/16/2019 3:34:41 PM] - Farm Team 3 roster errors : Not enough Players available in Pro Team! 14 Dressed. 20 Required.
Some errors will be automatically fixed.
<br />
[10/16/2019 3:34:41 PM] - HC Black Eagles Silesia roster errors : Not enough Centers available in Pro Team! 1 Dressed. 3 Required.
Not enough Right Wings available in Pro Team! 1 Dressed. 3 Required.
Not enough Goalie available in Pro Team! 0 Dressed. 2 Required.
Not enough Players available in Pro Team! 13 Dressed. 18 Required.
Some errors will be automatically fixed.
<br />
[10/16/2019 3:34:34 PM] - Jakub Novak was added to HC Black Eagles Silesia.<br />
[10/16/2019 3:33:55 PM] - Update Stats Function for Players has been run.<br />
[10/16/2019 3:33:55 PM] - 62 Players were imported correctly!<br />
[10/16/2019 3:33:53 PM] - Creator Comment is Based on Simulation Hockey League league rating<br />
[10/16/2019 3:19:40 PM] - Update Stats Function for Players has been run.<br />
[10/16/2019 3:19:40 PM] - 1 Player(s) on 61 were not imported correctly!<br />
[10/16/2019 3:19:23 PM] - Jakub Novak was not imported. Position field didn't pass the validation test.<br />
[10/16/2019 3:19:23 PM] - Creator Comment is Based on Simulation Hockey League league rating<br />
[10/16/2019 3:18:44 PM] - Auto Lines Farm Function has been run for Farm Team 4.<br />
[10/16/2019 3:18:42 PM] - Auto Lines Farm Function has been run for Farm Team 3.<br />
[10/16/2019 3:18:40 PM] - Auto Lines Farm Function has been run for Farm Team 2.<br />
[10/16/2019 3:18:39 PM] - Auto Lines Farm Function has been run for Farm Team 1.<br />
[10/16/2019 3:09:56 PM] - Farm Team 1 roster errors : Not enough Players available in Pro Team! 13 Dressed. 20 Required.
Some errors will be automatically fixed.
<br />
[10/16/2019 3:09:56 PM] - HC Eagles Moravia roster errors : Not enough Centers available in Pro Team! 0 Dressed. 3 Required.
Not enough Left Wings available in Pro Team! 0 Dressed. 3 Required.
Not enough Right Wings available in Pro Team! 0 Dressed. 3 Required.
Not enough Forward available in Pro Team! 0 Dressed. 6 Required.
Not enough Defenseman available in Pro Team! 0 Dressed. 6 Required.
Not enough Goalie available in Pro Team! 0 Dressed. 2 Required.
Not enough Players available in Pro Team! 0 Dressed. 18 Required.
Some errors will be automatically fixed.
<br />
[10/16/2019 3:09:49 PM] - Farm Team 3 roster errors : Not enough Players available in Pro Team! 13 Dressed. 20 Required.
Some errors will be automatically fixed.
<br />
[10/16/2019 3:09:49 PM] - HC Black Eagles Silesia roster errors : Not enough Centers available in Pro Team! 0 Dressed. 3 Required.
Not enough Left Wings available in Pro Team! 0 Dressed. 3 Required.
Not enough Right Wings available in Pro Team! 0 Dressed. 3 Required.
Not enough Forward available in Pro Team! 0 Dressed. 6 Required.
Not enough Defenseman available in Pro Team! 0 Dressed. 6 Required.
Not enough Goalie available in Pro Team! 0 Dressed. 2 Required.
Not enough Players available in Pro Team! 0 Dressed. 18 Required.
Some errors will be automatically fixed.
<br />
[10/16/2019 3:09:40 PM] - Farm Team 4 roster errors : Not enough Players available in Pro Team! 15 Dressed. 20 Required.
Some errors will be automatically fixed.
<br />
[10/16/2019 3:09:40 PM] - HC Lynx Kladno roster errors : Not enough Centers available in Pro Team! 0 Dressed. 3 Required.
Not enough Left Wings available in Pro Team! 0 Dressed. 3 Required.
Not enough Right Wings available in Pro Team! 0 Dressed. 3 Required.
Not enough Forward available in Pro Team! 0 Dressed. 6 Required.
Not enough Defenseman available in Pro Team! 0 Dressed. 6 Required.
Not enough Goalie available in Pro Team! 0 Dressed. 2 Required.
Not enough Players available in Pro Team! 0 Dressed. 18 Required.
Some errors will be automatically fixed.
<br />
[10/16/2019 3:09:26 PM] - Farm Team 2 roster errors : Not enough Players available in Pro Team! 14 Dressed. 20 Required.
Some errors will be automatically fixed.
<br />
[10/16/2019 3:09:26 PM] - HC Lions Bohemia roster errors : Not enough Centers available in Pro Team! 0 Dressed. 3 Required.
Not enough Left Wings available in Pro Team! 0 Dressed. 3 Required.
Not enough Right Wings available in Pro Team! 0 Dressed. 3 Required.
Not enough Forward available in Pro Team! 0 Dressed. 6 Required.
Not enough Defenseman available in Pro Team! 0 Dressed. 6 Required.
Not enough Goalie available in Pro Team! 0 Dressed. 2 Required.
Not enough Players available in Pro Team! 0 Dressed. 18 Required.
Some errors will be automatically fixed.
<br />
[10/16/2019 3:08:18 PM] - TRADE : From HC Eagles Moravia to HC Lions Bohemia : Tokek Takshak (67).<br />
[10/16/2019 3:08:18 PM] - TRADE : From HC Lions Bohemia to HC Eagles Moravia : Barak Obrana (60).<br />
[10/16/2019 3:07:34 PM] - Soren Kierkegaard was added to HC Lions Bohemia.<br />
[10/16/2019 3:06:58 PM] - Dionyz Vyskoc was added to HC Eagles Moravia.<br />
[10/16/2019 3:04:21 PM] - Georgette Pel was added to HC Lynx Kladno.<br />
[10/16/2019 3:03:55 PM] - Knox Booth was added to HC Lynx Kladno.<br />
[10/16/2019 3:03:50 PM] - Jakob Hamr was added to HC Lynx Kladno.<br />
[10/16/2019 3:03:46 PM] - Izem Abioye was added to HC Lynx Kladno.<br />
[10/16/2019 3:03:43 PM] - Barret McCarthy was added to HC Lynx Kladno.<br />
[10/16/2019 3:03:39 PM] - Noctis Caelum was added to HC Lynx Kladno.<br />
[10/16/2019 3:03:35 PM] - Radovan Hudec was added to HC Lynx Kladno.<br />
[10/16/2019 3:03:33 PM] - Ravyn Tedisko was added to HC Lynx Kladno.<br />
[10/16/2019 3:03:28 PM] - Alex Winters was added to HC Lynx Kladno.<br />
[10/16/2019 3:03:15 PM] - Shouta Aizawa was added to HC Lynx Kladno.<br />
[10/16/2019 3:03:11 PM] - Michael Scarn was added to HC Lynx Kladno.<br />
[10/16/2019 3:03:08 PM] - Filip Zadina was added to HC Lynx Kladno.<br />
[10/16/2019 3:03:04 PM] - Kornel Kasparek was added to HC Lynx Kladno.<br />
[10/16/2019 3:03:01 PM] - Troy McClure III was added to HC Lynx Kladno.<br />
[10/16/2019 3:02:59 PM] - Schnitinfritz Jagr was added to HC Lynx Kladno.<br />
[10/16/2019 3:02:50 PM] - Tauras Karazija was added to HC Black Eagles Silesia.<br />
[10/16/2019 3:02:30 PM] - Przemyslaw Brzeszczyczkiewicz was added to HC Black Eagles Silesia.<br />
[10/16/2019 3:02:24 PM] - Piotr Czerkawski was added to HC Black Eagles Silesia.<br />
[10/16/2019 3:02:22 PM] - Mikas Bieksa was added to HC Black Eagles Silesia.<br />
[10/16/2019 3:02:16 PM] - Flash Gordon was added to HC Black Eagles Silesia.<br />
[10/16/2019 3:02:10 PM] - Matej Elias was added to HC Black Eagles Silesia.<br />
[10/16/2019 3:02:05 PM] - Samee Iqbal was added to HC Black Eagles Silesia.<br />
[10/16/2019 3:01:58 PM] - Charlie Schieck was added to HC Black Eagles Silesia.<br />
[10/16/2019 3:01:55 PM] - Aron Hernadivic was added to HC Black Eagles Silesia.<br />
[10/16/2019 3:01:50 PM] - Josef Kubinec was added to HC Black Eagles Silesia.<br />
[10/16/2019 3:01:46 PM] - David Kastrba was added to HC Black Eagles Silesia.<br />
[10/16/2019 3:01:28 PM] - Josef Novotny was added to HC Black Eagles Silesia.<br />
[10/16/2019 3:01:24 PM] - Alexander Zajac was added to HC Black Eagles Silesia.<br />
[10/16/2019 3:01:17 PM] - Travis Jeziak was added to HC Lions Bohemia.<br />
[10/16/2019 3:01:09 PM] - Johnny Yuma was added to HC Lions Bohemia.<br />
[10/16/2019 3:01:05 PM] - Chris Partridge was added to HC Lions Bohemia.<br />
[10/16/2019 3:01:02 PM] - David Vent was added to HC Lions Bohemia.<br />
[10/16/2019 3:00:55 PM] - Sean Stevenson Jr. was added to HC Lions Bohemia.<br />
[10/16/2019 3:00:52 PM] - Pierre-Luc Laflamme was added to HC Lions Bohemia.<br />
[10/16/2019 3:00:29 PM] - Petr Mikulak was added to HC Lions Bohemia.<br />
[10/16/2019 3:00:24 PM] - Cameron Urbowicz was added to HC Lions Bohemia.<br />
[10/16/2019 3:00:20 PM] - DeMaricus Smyth was added to HC Lions Bohemia.<br />
[10/16/2019 3:00:16 PM] - Jan Zacha was added to HC Lions Bohemia.<br />
[10/16/2019 3:00:12 PM] - Luke Thomason was added to HC Lions Bohemia.<br />
[10/16/2019 3:00:07 PM] - Bernik Vrzala was added to HC Lions Bohemia.<br />
[10/16/2019 3:00:04 PM] - Barak Obrana was added to HC Lions Bohemia.<br />
[10/16/2019 2:59:59 PM] - Tokek Takshak was added to HC Eagles Moravia.<br />
[10/16/2019 2:59:37 PM] - Andrej Doskocil was added to HC Eagles Moravia.<br />
[10/16/2019 2:59:26 PM] - Ty Justice was added to HC Eagles Moravia.<br />
[10/16/2019 2:59:19 PM] - Brady McIntyre was added to HC Eagles Moravia.<br />
[10/16/2019 2:58:44 PM] - Sasha Dangelchek was added to HC Eagles Moravia.<br />
[10/16/2019 2:58:38 PM] - Boruvka Banananak was added to HC Eagles Moravia.<br />
[10/16/2019 2:58:31 PM] - Nico Gross was added to HC Eagles Moravia.<br />
[10/16/2019 2:58:26 PM] - Potato Chips was added to HC Eagles Moravia.<br />
[10/16/2019 2:58:19 PM] - Zivan Zidek was added to HC Eagles Moravia.<br />
[10/16/2019 2:58:12 PM] - Slappy McDoodle was added to HC Eagles Moravia.<br />
[10/16/2019 2:57:30 PM] - Ben Holtby was added to HC Eagles Moravia.<br />
[10/16/2019 2:57:26 PM] - Christoffer Bjornsson was added to HC Eagles Moravia.<br />
[10/16/2019 2:56:36 PM] - Farm Team 4 roster errors : Not enough Players available in Pro Team! 0 Dressed. 20 Required.
Some errors will be automatically fixed.
<br />
[10/16/2019 2:56:36 PM] - HC Lynx Kladno roster errors : Not enough Centers available in Pro Team! 0 Dressed. 3 Required.
Not enough Left Wings available in Pro Team! 0 Dressed. 3 Required.
Not enough Right Wings available in Pro Team! 0 Dressed. 3 Required.
Not enough Forward available in Pro Team! 0 Dressed. 6 Required.
Not enough Defenseman available in Pro Team! 0 Dressed. 6 Required.
Not enough Goalie available in Pro Team! 0 Dressed. 2 Required.
Not enough Players available in Pro Team! 0 Dressed. 18 Required.
Some errors will be automatically fixed.
<br />
[10/16/2019 2:55:56 PM] - Farm Team 2 roster errors : Not enough Players available in Pro Team! 0 Dressed. 20 Required.
Some errors will be automatically fixed.
<br />
[10/16/2019 2:55:56 PM] - HC Lions Bohemia roster errors : Not enough Centers available in Pro Team! 0 Dressed. 3 Required.
Not enough Left Wings available in Pro Team! 0 Dressed. 3 Required.
Not enough Right Wings available in Pro Team! 0 Dressed. 3 Required.
Not enough Forward available in Pro Team! 0 Dressed. 6 Required.
Not enough Defenseman available in Pro Team! 0 Dressed. 6 Required.
Not enough Goalie available in Pro Team! 0 Dressed. 2 Required.
Not enough Players available in Pro Team! 0 Dressed. 18 Required.
Some errors will be automatically fixed.
<br />
[10/16/2019 2:55:08 PM] - Farm Team 2 roster errors : Not enough Players available in Pro Team! 0 Dressed. 20 Required.
Some errors will be automatically fixed.
<br />
[10/16/2019 2:55:08 PM] - HC Lions Bohemia roster errors : Not enough Centers available in Pro Team! 0 Dressed. 3 Required.
Not enough Left Wings available in Pro Team! 0 Dressed. 3 Required.
Not enough Right Wings available in Pro Team! 0 Dressed. 3 Required.
Not enough Forward available in Pro Team! 0 Dressed. 6 Required.
Not enough Defenseman available in Pro Team! 0 Dressed. 6 Required.
Not enough Goalie available in Pro Team! 0 Dressed. 2 Required.
Not enough Players available in Pro Team! 0 Dressed. 18 Required.
Some errors will be automatically fixed.
<br />
[10/16/2019 2:54:18 PM] - Update Stats Function for Players has been run.<br />
[10/16/2019 2:54:18 PM] - 1 Player(s) on 61 were not imported correctly!<br />
[10/16/2019 2:54:14 PM] - Jakub Novak was not imported. Position field didn't pass the validation test.<br />
[10/16/2019 2:54:14 PM] - Creator Comment is Based on Simulation Hockey League league rating<br />
[10/16/2019 2:50:54 PM] - Farm Game Option - Active Option Deactivated<br />
[10/16/2019 2:50:45 PM] - Pro Game Option - Coaches Disabled Option Activated<br />
[10/16/2019 2:50:44 PM] - Pro Game Option - Morale Disabled Option Activated<br />
[10/16/2019 2:50:31 PM] - Salary Cap Value Modified to None<br />
[10/16/2019 2:50:17 PM] - Fix incorrect lines with the Partial Auto Lines Function Option Activated<br />
[10/16/2019 2:49:30 PM] - Goalies Default - Save PCT Under Value Modified to 75%<br />
[10/16/2019 2:49:21 PM] - Goalies Default - 3 Period Pull Second Value Modified to 90<br />
[10/16/2019 2:49:16 PM] - Goalies Default - Minimum # of Goals Value Modified to 5<br />
[10/16/2019 2:49:03 PM] - Block Free Agents for GM Option Option Activated<br />
[10/16/2019 2:48:54 PM] - Number of Draft Picks By Year Value Value Modified to 1<br />
[10/16/2019 2:48:54 PM] - Number of Draft Picks By Year Value Value Modified to 1<br />
[10/16/2019 2:48:54 PM] - Number of Draft Picks By Year Value Value Modified to 1<br />
[10/16/2019 2:48:54 PM] - Number of Draft Picks By Year Value Value Modified to 2<br />
[10/16/2019 2:48:53 PM] - Number of Draft Picks By Year Value Value Modified to 2<br />
[10/16/2019 2:48:53 PM] - Number of Draft Picks By Year Value Value Modified to 3<br />
[10/16/2019 2:48:53 PM] - Number of Draft Picks By Year Value Value Modified to 3<br />
[10/16/2019 2:48:51 PM] - Number of Draft Picks By Year Value Value Modified to 4<br />
[10/16/2019 2:48:50 PM] - Number of Draft Picks By Year Value Value Modified to 4<br />
[10/16/2019 2:48:42 PM] - Number of Draft Picks By Year Value Value Modified to 5<br />
[10/16/2019 2:48:40 PM] - 2015 Percentages Draft Lottery Option Deactivated<br />
[10/16/2019 2:48:34 PM] - Off-Season - Remove 1 to Contract Length Option Deactivated<br />
[10/16/2019 2:48:28 PM] - Use New Draft Rules Option Deactivated<br />
[10/16/2019 2:48:27 PM] - Draft Lottery Option Deactivated<br />
[10/16/2019 2:47:59 PM] - How many division leaders in Pro Playoff Value Modified to 1<br />
[10/16/2019 2:47:57 PM] - How many division leaders in Pro Playoff Value Modified to 2<br />
[10/16/2019 2:47:52 PM] - How many Teams in Pro Playoff Value Modified to 4<br />
[10/16/2019 2:47:49 PM] - How many Teams in Pro Playoff Value Modified to 2<br />
[10/16/2019 2:47:38 PM] - Point System Win Value Modified to 3<br />
[10/16/2019 2:47:38 PM] - Point System Win Value Modified to 2<br />
[10/16/2019 2:47:00 PM] - Farm Team 2 roster errors : Not enough Players available in Pro Team! 0 Dressed. 20 Required.
Some errors will be automatically fixed.
<br />
[10/16/2019 2:47:00 PM] - HC Lions Bohemia roster errors : Not enough Centers available in Pro Team! 0 Dressed. 3 Required.
Not enough Left Wings available in Pro Team! 0 Dressed. 3 Required.
Not enough Right Wings available in Pro Team! 0 Dressed. 3 Required.
Not enough Forward available in Pro Team! 0 Dressed. 6 Required.
Not enough Defenseman available in Pro Team! 0 Dressed. 6 Required.
Not enough Goalie available in Pro Team! 0 Dressed. 2 Required.
Not enough Players available in Pro Team! 0 Dressed. 18 Required.
Some errors will be automatically fixed.
<br />
[10/16/2019 12:59:28 PM] - The Czechia Extraliga was created successfully!<br />
[10/16/2019 12:59:28 PM] - 0 Referees were imported correctly!<br />
[10/16/2019 12:59:27 PM] - 0 Coaches were imported correctly!<br />
[10/16/2019 12:59:27 PM] - 0 Players were imported correctly!<br />
[10/16/2019 12:59:16 PM] - Creator Comment is Based on Simulation Hockey League league rating<br />
<?php include "Footer.php";?>
