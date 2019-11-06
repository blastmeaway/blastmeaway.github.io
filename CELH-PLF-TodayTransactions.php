<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>CELH - Today Transactions</title>
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
[11/6/2019 11:02:35 AM] - Rest Day - All players have rest for one day.<br />
[11/6/2019 11:02:34 AM] - HC Eagles Moravia are the Playoffs Champions!<br />
[11/6/2019 11:02:34 AM] - In between playoff round rest day - All players have rest for one day.<br />
[11/6/2019 11:02:34 AM] - Playoff Final Round - All players have rest for one day.<br />
[11/6/2019 11:02:34 AM] - HC Lions Bohemia lines for next game are empty. Current rosters/lines are not erased.<br />
[11/6/2019 11:02:34 AM] - HC Eagles Moravia lines for next game are empty. Current rosters/lines are not erased.<br />
[11/6/2019 11:02:34 AM] - Playoff Final Round - All players have rest for one day.<br />
[11/6/2019 11:02:34 AM] - HC Lions Bohemia lines for next game are empty. Current rosters/lines are not erased.<br />
[11/6/2019 11:02:34 AM] - HC Eagles Moravia lines for next game are empty. Current rosters/lines are not erased.<br />
[11/6/2019 11:02:34 AM] - Playoff Final Round - All players have rest for one day.<br />
[11/6/2019 11:02:34 AM] - HC Lions Bohemia lines for next game are empty. Current rosters/lines are not erased.<br />
[11/6/2019 11:02:34 AM] - HC Eagles Moravia lines for next game are empty. Current rosters/lines are not erased.<br />
[11/6/2019 11:02:34 AM] - Playoff Final Round - All players have rest for one day.<br />
[11/6/2019 11:02:34 AM] - HC Lions Bohemia lines for next game are empty. Current rosters/lines are not erased.<br />
[11/6/2019 11:02:34 AM] - HC Eagles Moravia lines for next game are empty. Current rosters/lines are not erased.<br />
[11/6/2019 11:02:34 AM] - Playoff Final Round - All players have rest for one day.<br />
[11/6/2019 11:02:34 AM] - HC Lions Bohemia lines for next game are empty. Current rosters/lines are not erased.<br />
[11/6/2019 11:02:34 AM] - HC Eagles Moravia lines for next game are empty. Current rosters/lines are not erased.<br />
[11/6/2019 11:02:33 AM] - Playoff Final Round - All players have rest for one day.<br />
[11/6/2019 11:02:33 AM] - HC Lions Bohemia lines for next game are empty. Current rosters/lines are not erased.<br />
[11/6/2019 11:02:33 AM] - HC Eagles Moravia lines for next game are empty. Current rosters/lines are not erased.<br />
[11/6/2019 11:02:33 AM] - Playoff #1 - Round #2 has started!<br />
[11/6/2019 11:02:33 AM] - In between playoff round rest day - All players have rest for one day.<br />
[11/6/2019 11:02:33 AM] - HC Black Eagles Silesia lines for next game are empty. Current rosters/lines are not erased.<br />
[11/6/2019 11:02:33 AM] - HC Eagles Moravia lines for next game are empty. Current rosters/lines are not erased.<br />
[11/6/2019 11:02:33 AM] - Last 7 Days Pro Star : 1 - Christoffer Bjornsson of HC Eagles Moravia (0.926) / 2 - Brady McIntyre of HC Eagles Moravia (0-4-4) / 3 - Vratislav Zbynek of HC Black Eagles Silesia (2-2-4)<br />
[11/6/2019 11:02:33 AM] - Rest Day - All players have rest for one day.<br />
[11/6/2019 11:02:33 AM] - HC Black Eagles Silesia lines for next game are empty. Current rosters/lines are not erased.<br />
[11/6/2019 11:02:33 AM] - HC Eagles Moravia lines for next game are empty. Current rosters/lines are not erased.<br />
[11/6/2019 11:02:33 AM] - Rest Day - All players have rest for one day.<br />
[11/6/2019 11:02:33 AM] - HC Black Eagles Silesia lines for next game are empty. Current rosters/lines are not erased.<br />
[11/6/2019 11:02:33 AM] - HC Eagles Moravia lines for next game are empty. Current rosters/lines are not erased.<br />
[11/6/2019 11:02:33 AM] - Rest Day - All players have rest for one day.<br />
[11/6/2019 11:02:33 AM] - HC Black Eagles Silesia lines for next game are empty. Current rosters/lines are not erased.<br />
[11/6/2019 11:02:33 AM] - HC Eagles Moravia lines for next game are empty. Current rosters/lines are not erased.<br />
[11/6/2019 11:02:32 AM] - HC Lynx Kladno lines for next game are empty. Current rosters/lines are not erased.<br />
[11/6/2019 11:02:32 AM] - HC Lions Bohemia lines for next game are empty. Current rosters/lines are not erased.<br />
[11/6/2019 11:02:32 AM] - Last 7 Days Pro Star : 1 - Chris Partridge of HC Lions Bohemia (0.981) / 2 - Dickie Pecker of HC Lions Bohemia (2-6-8) / 3 - Walter White of HC Lions Bohemia (1-3-4)<br />
[11/6/2019 11:02:32 AM] - HC Black Eagles Silesia lines for next game are empty. Current rosters/lines are not erased.<br />
[11/6/2019 11:02:32 AM] - HC Eagles Moravia lines for next game are empty. Current rosters/lines are not erased.<br />
[11/6/2019 11:02:32 AM] - HC Lynx Kladno lines for next game are empty. Current rosters/lines are not erased.<br />
[11/6/2019 11:02:32 AM] - HC Lions Bohemia lines for next game are empty. Current rosters/lines are not erased.<br />
[11/6/2019 11:02:32 AM] - HC Black Eagles Silesia lines for next game are empty. Current rosters/lines are not erased.<br />
[11/6/2019 11:02:32 AM] - HC Eagles Moravia lines for next game are empty. Current rosters/lines are not erased.<br />
[11/6/2019 11:02:32 AM] - HC Lynx Kladno lines for next game are empty. Current rosters/lines are not erased.<br />
[11/6/2019 11:02:32 AM] - HC Lions Bohemia lines for next game are empty. Current rosters/lines are not erased.<br />
[11/6/2019 11:02:31 AM] - HC Black Eagles Silesia lines for next game are empty. Current rosters/lines are not erased.<br />
[11/6/2019 11:02:31 AM] - HC Eagles Moravia lines for next game are empty. Current rosters/lines are not erased.<br />
[11/6/2019 11:02:31 AM] - HC Lynx Kladno lines for next game are empty. Current rosters/lines are not erased.<br />
[11/6/2019 11:02:31 AM] - HC Lions Bohemia lines for next game are empty. Current rosters/lines are not erased.<br />
[11/3/2019 3:40:02 PM] - Playoff #1 - Round #1 has started!<br />
<?php include "Footer.php";?>
