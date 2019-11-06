<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>CELH - Team History</title>
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
<div class="STHSTopLink"><a id="STHSRosterTop"></a> <a href="#HCBlackEaglesSilesia">HC Black Eagles Silesia</a> | <a href="#HCEaglesMoravia">HC Eagles Moravia</a> | <a href="#HCLionsBohemia">HC Lions Bohemia</a> | <a href="#HCLynxKladno">HC Lynx Kladno</a> | <a href="javascript:STHS_JS_CloseAll('');">Close All Team View</a> | <a href="javascript:STHS_JS_OpenAll('');">Open All Team View</a>
</div>
<h1 class="TeamHistory_SBE"><a id="HCBlackEaglesSilesia">HC Black Eagles Silesia</a></h1>
<div class="STHSTeamLink">
[ <a href="CELH-PLF-ProTeamRoster.php#HCBlackEaglesSilesia">Pro Team Roster</a> ]
[ <a href="CELH-PLF-ProTeamScoring.php#HCBlackEaglesSilesia">Pro Team Scoring</a> ]
[ <a href="CELH-PLF-TeamFinance.php#HCBlackEaglesSilesia">Team Finance</a> ]
[ <a href="CELH-PLF-ProTeamPlayersInfo.php#HCBlackEaglesSilesia">Pro Team PlayersInfo</a> ]
[ <a href="CELH-PLF-ProTeamLines.php#HCBlackEaglesSilesia">Pro Team Lines</a> ]
[ <a href="CELH-PLF-TeamProspects.php#HCBlackEaglesSilesia">Team Prospects</a> ]
[ <a href="CELH-PLF-ProTeamSchedule.php#HCBlackEaglesSilesia">Pro Team Schedule</a> ]
[ <a href="CELH-PLF-ProTeamStats.php#HCBlackEaglesSilesia">Pro Team Stats</a> ]
[ <a href="CELH-PLF-ProTeamStatsVS.php#HCBlackEaglesSilesia">Pro Team Stats VS</a> ]
[ <a href="CELH-PLF-TeamInjurySuspension.php#HCBlackEaglesSilesia">Team Injury Suspension</a> ]
[ <a href="CELH-PLF-TeamHistory.php#HCBlackEaglesSilesia">Team History</a> ]
[ <a href="CELH-PLF-TeamRecords.php#HCBlackEaglesSilesia">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_HCBlackEaglesSilesia');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_HCBlackEaglesSilesia" style="display: block;">
<br /><br />
[11/6/2019 11:02:33 AM] - HC Black Eagles Silesia was eliminated at round 1 of year 1.<br />
[11/3/2019 3:39:19 PM] - New Record for Team's Most Shots Blocked (20) in 1 Game for HC Black Eagles Silesia!<br />
[11/3/2019 3:39:19 PM] - New Record for Team's Most Shots Blocked (20) in 1 Game for HC Black Eagles Silesia!<br />
[11/3/2019 3:39:18 PM] - New Record for Team's Most Points (10) in 1 Game for HC Black Eagles Silesia!<br />
[11/3/2019 3:39:18 PM] - New Record for Team's Most Goals (4) in 1 Game for HC Black Eagles Silesia!<br />
[11/3/2019 3:39:17 PM] - New Record for Team's Most Penalties Minutes (14) in 1 Game for HC Black Eagles Silesia!<br />
[11/3/2019 3:39:16 PM] - New Record for Team's Most Shots (34) in 1 Game for HC Black Eagles Silesia!<br />
[11/3/2019 3:39:16 PM] - New Record for Team's Most Hits (27) in 1 Game for HC Black Eagles Silesia!<br />
[11/3/2019 3:39:15 PM] - New Record for Team's Most Penalties Minutes (13) in 1 Game for HC Black Eagles Silesia!<br />
[11/3/2019 3:39:15 PM] - New Record for Team's Most Hits (26) in 1 Game for HC Black Eagles Silesia!<br />
[11/3/2019 3:39:14 PM] - New Record for Team's Most Points (9) in 1 Game for HC Black Eagles Silesia!<br />
[11/3/2019 3:39:14 PM] - New Record for Team's Most Assists (6) in 1 Game for HC Black Eagles Silesia!<br />
[11/3/2019 3:39:13 PM] - New Record for Team's Most Hits (23) in 1 Game for HC Black Eagles Silesia!<br />
[11/3/2019 3:39:13 PM] - New Record for Team's Most Penalties Minutes (12) in 1 Game for HC Black Eagles Silesia!<br />
[11/3/2019 3:39:12 PM] - New Record for Team's Most Hits (22) in 1 Game for HC Black Eagles Silesia!<br />
[11/3/2019 3:39:12 PM] - New Record for Team's Most Shots (31) in 1 Game for HC Black Eagles Silesia!<br />
[11/3/2019 3:39:11 PM] - New Record for Team's Most Shots Blocked (18) in 1 Game for HC Black Eagles Silesia!<br />
[11/3/2019 3:39:11 PM] - New Record for Team's Most Shots (25) in 1 Game for HC Black Eagles Silesia!<br />
[11/3/2019 3:39:11 PM] - New Record for Team's Most Points (8) in 1 Game for HC Black Eagles Silesia!<br />
[11/3/2019 3:39:11 PM] - New Record for Team's Most Assists (5) in 1 Game for HC Black Eagles Silesia!<br />
[11/3/2019 3:39:11 PM] - New Record for Team's Most Goals (3) in 1 Game for HC Black Eagles Silesia!<br />
[11/3/2019 3:39:11 PM] - New Record for Team's Most Shots Blocked (18) in 1 Game for HC Black Eagles Silesia!<br />
[11/3/2019 3:39:11 PM] - New Record for Team's Most Hits (17) in 1 Game for HC Black Eagles Silesia!<br />
[11/3/2019 3:39:11 PM] - New Record for Team's Most Shots Blocked (8) in 1 Game for HC Black Eagles Silesia!<br />
[11/3/2019 3:39:11 PM] - New Record for Team's Most Shots (18) in 1 Game for HC Black Eagles Silesia!<br />
[11/3/2019 3:39:11 PM] - New Record for Team's Most Points (2) in 1 Game for HC Black Eagles Silesia!<br />
[11/3/2019 3:39:11 PM] - New Record for Team's Most Assists (1) in 1 Game for HC Black Eagles Silesia!<br />
[11/3/2019 3:39:11 PM] - New Record for Team's Most Goals (1) in 1 Game for HC Black Eagles Silesia!<br />
[11/3/2019 3:39:10 PM] - New Record for Team's Most Hits (16) in 1 Game for HC Black Eagles Silesia!<br />
[11/3/2019 3:39:10 PM] - New Record for Team's Most Penalties Minutes (8) in 1 Game for HC Black Eagles Silesia!<br />
[11/3/2019 3:39:10 PM] - New Record for Team's Most Shots Blocked (7) in 1 Game for HC Black Eagles Silesia!<br />
[11/3/2019 3:39:10 PM] - New Record for Team's Most Shots (17) in 1 Game for HC Black Eagles Silesia!<br />
[11/3/2019 3:39:10 PM] - New Record for Team's Most Hits (16) in 1 Game for HC Black Eagles Silesia!<br />
[11/3/2019 3:39:10 PM] - New Record for Team's Most Penalties Minutes (8) in 1 Game for HC Black Eagles Silesia!<br />
[11/3/2019 3:39:10 PM] - New Record for Team's Most Shots Blocked (7) in 1 Game for HC Black Eagles Silesia!<br />
[11/3/2019 3:39:10 PM] - New Record for Team's Most Shots (17) in 1 Game for HC Black Eagles Silesia!<br />
[11/2/2019 2:00:00 PM] - Josef Novotny was released.<br />
[11/2/2019 2:00:00 PM] - HC Black Eagles Silesia paid $0 to release Josef Novotny.<br />
[11/2/2019 1:54:59 PM] - Vratislav Zbynek was added to HC Black Eagles Silesia.<br />
[11/2/2019 1:54:44 PM] - Simothy Drunkebird was added to HC Black Eagles Silesia.<br />
[11/2/2019 1:53:42 PM] - Krysztof Kowalski was added to HC Black Eagles Silesia.<br />
[11/2/2019 1:53:28 PM] - Jakub Trocheck was added to HC Black Eagles Silesia.<br />
[10/16/2019 3:49:44 PM] - Zalleras Szlerchek was added to HC Black Eagles Silesia.<br />
[10/16/2019 3:49:42 PM] - Mike Verminski was added to HC Black Eagles Silesia.<br />
[10/16/2019 3:49:36 PM] - Casimir Stevens was added to HC Black Eagles Silesia.<br />
[10/16/2019 3:41:25 PM] - Zalleras Szlerchek was added to HC Black Eagles Silesia.<br />
[10/16/2019 3:40:26 PM] - Mike Verminski was added to HC Black Eagles Silesia.<br />
[10/16/2019 3:39:31 PM] - Casmir Stevens was added to HC Black Eagles Silesia.<br />
[10/16/2019 3:34:34 PM] - Jakub Novak was added to HC Black Eagles Silesia.<br />
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
[10/16/2019 2:44:36 PM] - Team Name Change : Team 3 changed name to HC Black Eagles Silesia<br />
</div>
<h1 class="TeamHistory_MOR"><a id="HCEaglesMoravia">HC Eagles Moravia</a></h1>
<div class="STHSTeamLink">
[ <a href="CELH-PLF-ProTeamRoster.php#HCEaglesMoravia">Pro Team Roster</a> ]
[ <a href="CELH-PLF-ProTeamScoring.php#HCEaglesMoravia">Pro Team Scoring</a> ]
[ <a href="CELH-PLF-TeamFinance.php#HCEaglesMoravia">Team Finance</a> ]
[ <a href="CELH-PLF-ProTeamPlayersInfo.php#HCEaglesMoravia">Pro Team PlayersInfo</a> ]
[ <a href="CELH-PLF-ProTeamLines.php#HCEaglesMoravia">Pro Team Lines</a> ]
[ <a href="CELH-PLF-TeamProspects.php#HCEaglesMoravia">Team Prospects</a> ]
[ <a href="CELH-PLF-ProTeamSchedule.php#HCEaglesMoravia">Pro Team Schedule</a> ]
[ <a href="CELH-PLF-ProTeamStats.php#HCEaglesMoravia">Pro Team Stats</a> ]
[ <a href="CELH-PLF-ProTeamStatsVS.php#HCEaglesMoravia">Pro Team Stats VS</a> ]
[ <a href="CELH-PLF-TeamInjurySuspension.php#HCEaglesMoravia">Team Injury Suspension</a> ]
[ <a href="CELH-PLF-TeamHistory.php#HCEaglesMoravia">Team History</a> ]
[ <a href="CELH-PLF-TeamRecords.php#HCEaglesMoravia">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_HCEaglesMoravia');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_HCEaglesMoravia" style="display: block;">
<br /><br />
[11/6/2019 11:02:34 AM] - HC Eagles Moravia are the Playoffs Champions for year 1!<br />
[11/3/2019 3:39:17 PM] - New Record for Team's Most Shots (42) in 1 Game for HC Eagles Moravia!<br />
[11/3/2019 3:39:17 PM] - New Record for Team's Most Points (12) in 1 Game for HC Eagles Moravia!<br />
[11/3/2019 3:39:17 PM] - New Record for Team's Most Assists (8) in 1 Game for HC Eagles Moravia!<br />
[11/3/2019 3:39:17 PM] - New Record for Team's Most Points (12) in 1 Game for HC Eagles Moravia!<br />
[11/3/2019 3:39:17 PM] - New Record for Team's Most Assists (8) in 1 Game for HC Eagles Moravia!<br />
[11/3/2019 3:39:15 PM] - New Record for Team's Most Penalties Minutes (23) in 1 Game for HC Eagles Moravia!<br />
[11/3/2019 3:39:15 PM] - New Record for Team's Most Penalties Minutes (23) in 1 Game for HC Eagles Moravia!<br />
[11/3/2019 3:39:15 PM] - New Record for Team's Most Points (11) in 1 Game for HC Eagles Moravia!<br />
[11/3/2019 3:39:15 PM] - New Record for Team's Most Assists (7) in 1 Game for HC Eagles Moravia!<br />
[11/3/2019 3:39:15 PM] - New Record for Team's Most Goals (4) in 1 Game for HC Eagles Moravia!<br />
[11/3/2019 3:39:15 PM] - New Record for Team's Most Points (11) in 1 Game for HC Eagles Moravia!<br />
[11/3/2019 3:39:15 PM] - New Record for Team's Most Assists (7) in 1 Game for HC Eagles Moravia!<br />
[11/3/2019 3:39:12 PM] - New Record for Team's Most Hits (29) in 1 Game for HC Eagles Moravia!<br />
[11/3/2019 3:39:12 PM] - New Record for Team's Most Penalties Minutes (12) in 1 Game for HC Eagles Moravia!<br />
[11/3/2019 3:39:12 PM] - New Record for Team's Most Shots Blocked (17) in 1 Game for HC Eagles Moravia!<br />
[11/3/2019 3:39:11 PM] - New Record for Team's Most Hits (21) in 1 Game for HC Eagles Moravia!<br />
[11/3/2019 3:39:11 PM] - New Record for Team's Most Penalties Minutes (10) in 1 Game for HC Eagles Moravia!<br />
[11/3/2019 3:39:11 PM] - New Record for Team's Most Shots Blocked (10) in 1 Game for HC Eagles Moravia!<br />
[11/3/2019 3:39:11 PM] - New Record for Team's Most Points (9) in 1 Game for HC Eagles Moravia!<br />
[11/3/2019 3:39:11 PM] - New Record for Team's Most Assists (6) in 1 Game for HC Eagles Moravia!<br />
[11/3/2019 3:39:11 PM] - New Record for Team's Most Assists (6) in 1 Game for HC Eagles Moravia!<br />
[11/3/2019 3:39:11 PM] - New Record for Team's Most Hits (20) in 1 Game for HC Eagles Moravia!<br />
[11/3/2019 3:39:11 PM] - New Record for Team's Most Penalties Minutes (2) in 1 Game for HC Eagles Moravia!<br />
[11/3/2019 3:39:11 PM] - New Record for Team's Most Shots Blocked (8) in 1 Game for HC Eagles Moravia!<br />
[11/3/2019 3:39:11 PM] - New Record for Team's Most Shots (40) in 1 Game for HC Eagles Moravia!<br />
[11/3/2019 3:39:11 PM] - New Record for Team's Most Points (8) in 1 Game for HC Eagles Moravia!<br />
[11/3/2019 3:39:11 PM] - New Record for Team's Most Assists (5) in 1 Game for HC Eagles Moravia!<br />
[11/3/2019 3:39:11 PM] - New Record for Team's Most Goals (3) in 1 Game for HC Eagles Moravia!<br />
[11/3/2019 3:39:11 PM] - New Record for Team's Most Hits (20) in 1 Game for HC Eagles Moravia!<br />
[11/2/2019 1:54:32 PM] - Sachimo Zoidberg was added to HC Eagles Moravia.<br />
[11/2/2019 1:54:10 PM] - Ondrej Ravchitikov was added to HC Eagles Moravia.<br />
[11/2/2019 1:54:05 PM] - Mikhail Kladno was added to HC Eagles Moravia.<br />
[11/2/2019 1:52:46 PM] - Daniel Garland was added to HC Eagles Moravia.<br />
[10/16/2019 3:57:10 PM] - Ty Justice was added to HC Eagles Moravia.<br />
[10/16/2019 3:57:08 PM] - Slappy McDoodle was added to HC Eagles Moravia.<br />
[10/16/2019 3:56:44 PM] - Potato Chips was added to HC Eagles Moravia.<br />
[10/16/2019 3:56:29 PM] - Christoffer Bjornsson was added to HC Eagles Moravia.<br />
[10/16/2019 3:56:09 PM] - Barak Obrana was added to HC Eagles Moravia.<br />
[10/16/2019 3:56:07 PM] - Aviad Ratzon was added to HC Eagles Moravia.<br />
[10/16/2019 3:49:58 PM] - Marian Potoczny was added to HC Eagles Moravia.<br />
[10/16/2019 3:49:56 PM] - Marek Vyskoc was added to HC Eagles Moravia.<br />
[10/16/2019 3:08:18 PM] - TRADE : From HC Eagles Moravia to HC Lions Bohemia : Tokek Takshak (67).<br />
[10/16/2019 3:08:18 PM] - TRADE : From HC Lions Bohemia to HC Eagles Moravia : Barak Obrana (60).<br />
[10/16/2019 3:06:58 PM] - Dionyz Vyskoc was added to HC Eagles Moravia.<br />
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
[10/16/2019 2:38:54 PM] - Team Name Change : Team 1 changed name to HC Eagles Moravia<br />
</div>
<h1 class="TeamHistory_BOH"><a id="HCLionsBohemia">HC Lions Bohemia</a></h1>
<div class="STHSTeamLink">
[ <a href="CELH-PLF-ProTeamRoster.php#HCLionsBohemia">Pro Team Roster</a> ]
[ <a href="CELH-PLF-ProTeamScoring.php#HCLionsBohemia">Pro Team Scoring</a> ]
[ <a href="CELH-PLF-TeamFinance.php#HCLionsBohemia">Team Finance</a> ]
[ <a href="CELH-PLF-ProTeamPlayersInfo.php#HCLionsBohemia">Pro Team PlayersInfo</a> ]
[ <a href="CELH-PLF-ProTeamLines.php#HCLionsBohemia">Pro Team Lines</a> ]
[ <a href="CELH-PLF-TeamProspects.php#HCLionsBohemia">Team Prospects</a> ]
[ <a href="CELH-PLF-ProTeamSchedule.php#HCLionsBohemia">Pro Team Schedule</a> ]
[ <a href="CELH-PLF-ProTeamStats.php#HCLionsBohemia">Pro Team Stats</a> ]
[ <a href="CELH-PLF-ProTeamStatsVS.php#HCLionsBohemia">Pro Team Stats VS</a> ]
[ <a href="CELH-PLF-TeamInjurySuspension.php#HCLionsBohemia">Team Injury Suspension</a> ]
[ <a href="CELH-PLF-TeamHistory.php#HCLionsBohemia">Team History</a> ]
[ <a href="CELH-PLF-TeamRecords.php#HCLionsBohemia">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_HCLionsBohemia');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_HCLionsBohemia" style="display: block;">
<br /><br />
[11/6/2019 11:02:34 AM] - HC Lions Bohemia was eliminated at round 2 of year 1.<br />
[11/3/2019 3:39:20 PM] - New Record for Team's Most Penalties Minutes (13) in 1 Game for HC Lions Bohemia!<br />
[11/3/2019 3:39:17 PM] - New Record for Team's Most Shots Blocked (17) in 1 Game for HC Lions Bohemia!<br />
[11/3/2019 3:39:16 PM] - New Record for Team's Most Shots Blocked (16) in 1 Game for HC Lions Bohemia!<br />
[11/3/2019 3:39:15 PM] - New Record for Team's Most Hits (32) in 1 Game for HC Lions Bohemia!<br />
[11/3/2019 3:39:14 PM] - New Record for Team's Most Shots (47) in 1 Game for HC Lions Bohemia!<br />
[11/3/2019 3:39:14 PM] - New Record for Team's Most Shots (47) in 1 Game for HC Lions Bohemia!<br />
[11/3/2019 3:39:13 PM] - New Record for Team's Most Shots Blocked (13) in 1 Game for HC Lions Bohemia!<br />
[11/3/2019 3:39:12 PM] - New Record for Team's Most Assists (6) in 1 Game for HC Lions Bohemia!<br />
[11/3/2019 3:39:11 PM] - New Record for Team's Most Hits (29) in 1 Game for HC Lions Bohemia!<br />
[11/3/2019 3:39:11 PM] - New Record for Team's Most Hits (18) in 1 Game for HC Lions Bohemia!<br />
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
[11/2/2019 1:55:02 PM] - Walter White was added to HC Lions Bohemia.<br />
[11/2/2019 1:54:28 PM] - Ruslan Zaporozhets was added to HC Lions Bohemia.<br />
[11/2/2019 1:54:19 PM] - Petr Kolesnikovs was added to HC Lions Bohemia.<br />
[11/2/2019 1:53:52 PM] - Matej Stransky was added to HC Lions Bohemia.<br />
[11/2/2019 1:53:33 PM] - Konstantin Voloshin was added to HC Lions Bohemia.<br />
[11/2/2019 1:52:52 PM] - Dickie Pecker was added to HC Lions Bohemia.<br />
[10/16/2019 3:56:34 PM] - Pierre-Luc Laflamme was added to HC Lions Bohemia.<br />
[10/16/2019 3:56:13 PM] - Cameron Urbowicz was added to HC Lions Bohemia.<br />
[10/16/2019 3:08:18 PM] - TRADE : From HC Eagles Moravia to HC Lions Bohemia : Tokek Takshak (67).<br />
[10/16/2019 3:08:18 PM] - TRADE : From HC Lions Bohemia to HC Eagles Moravia : Barak Obrana (60).<br />
[10/16/2019 3:07:34 PM] - Soren Kierkegaard was added to HC Lions Bohemia.<br />
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
[10/16/2019 2:41:34 PM] - Team Name Change : Bohemia Lions changed name to HC Lions Bohemia<br />
[10/16/2019 2:41:24 PM] - Team Name Change : Team 2 changed name to Bohemia Lions<br />
</div>
<h1 class="TeamHistory_KLD"><a id="HCLynxKladno">HC Lynx Kladno</a></h1>
<div class="STHSTeamLink">
[ <a href="CELH-PLF-ProTeamRoster.php#HCLynxKladno">Pro Team Roster</a> ]
[ <a href="CELH-PLF-ProTeamScoring.php#HCLynxKladno">Pro Team Scoring</a> ]
[ <a href="CELH-PLF-TeamFinance.php#HCLynxKladno">Team Finance</a> ]
[ <a href="CELH-PLF-ProTeamPlayersInfo.php#HCLynxKladno">Pro Team PlayersInfo</a> ]
[ <a href="CELH-PLF-ProTeamLines.php#HCLynxKladno">Pro Team Lines</a> ]
[ <a href="CELH-PLF-TeamProspects.php#HCLynxKladno">Team Prospects</a> ]
[ <a href="CELH-PLF-ProTeamSchedule.php#HCLynxKladno">Pro Team Schedule</a> ]
[ <a href="CELH-PLF-ProTeamStats.php#HCLynxKladno">Pro Team Stats</a> ]
[ <a href="CELH-PLF-ProTeamStatsVS.php#HCLynxKladno">Pro Team Stats VS</a> ]
[ <a href="CELH-PLF-TeamInjurySuspension.php#HCLynxKladno">Team Injury Suspension</a> ]
[ <a href="CELH-PLF-TeamHistory.php#HCLynxKladno">Team History</a> ]
[ <a href="CELH-PLF-TeamRecords.php#HCLynxKladno">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_HCLynxKladno');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_HCLynxKladno" style="display: block;">
<br /><br />
[11/6/2019 11:02:32 AM] - HC Lynx Kladno was eliminated at round 1 of year 1.<br />
[11/3/2019 3:39:19 PM] - New Record for Team's Most Shots Blocked (18) in 1 Game for HC Lynx Kladno!<br />
[11/3/2019 3:39:16 PM] - New Record for Team's Most Shots Blocked (17) in 1 Game for HC Lynx Kladno!<br />
[11/3/2019 3:39:15 PM] - New Record for Team's Most Penalties Minutes (12) in 1 Game for HC Lynx Kladno!<br />
[11/3/2019 3:39:14 PM] - New Record for Team's Most Shots (32) in 1 Game for HC Lynx Kladno!<br />
[11/3/2019 3:39:13 PM] - New Record for Team's Most Hits (40) in 1 Game for HC Lynx Kladno!<br />
[11/3/2019 3:39:13 PM] - New Record for Team's Most Hits (40) in 1 Game for HC Lynx Kladno!<br />
[11/3/2019 3:39:13 PM] - New Record for Team's Most Shots (28) in 1 Game for HC Lynx Kladno!<br />
[11/3/2019 3:39:12 PM] - New Record for Team's Most Shots (27) in 1 Game for HC Lynx Kladno!<br />
[11/3/2019 3:39:11 PM] - New Record for Team's Most Hits (38) in 1 Game for HC Lynx Kladno!<br />
[11/3/2019 3:39:11 PM] - New Record for Team's Most Points (9) in 1 Game for HC Lynx Kladno!<br />
[11/3/2019 3:39:11 PM] - New Record for Team's Most Assists (6) in 1 Game for HC Lynx Kladno!<br />
[11/3/2019 3:39:11 PM] - New Record for Team's Most Goals (3) in 1 Game for HC Lynx Kladno!<br />
[11/3/2019 3:39:11 PM] - New Record for Team's Most Hits (38) in 1 Game for HC Lynx Kladno!<br />
[11/3/2019 3:39:11 PM] - New Record for Team's Most Penalties Minutes (10) in 1 Game for HC Lynx Kladno!<br />
[11/3/2019 3:39:11 PM] - New Record for Team's Most Shots Blocked (15) in 1 Game for HC Lynx Kladno!<br />
[11/3/2019 3:39:11 PM] - New Record for Team's Most Shots (26) in 1 Game for HC Lynx Kladno!<br />
[11/3/2019 3:39:11 PM] - New Record for Team's Most Shots Blocked (15) in 1 Game for HC Lynx Kladno!<br />
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
[11/2/2019 2:00:53 PM] - Izem Abioye was released.<br />
[11/2/2019 2:00:53 PM] - HC Lynx Kladno paid $0 to release Izem Abioye.<br />
[11/2/2019 2:00:24 PM] - Josef Novotny was added to HC Lynx Kladno.<br />
[11/2/2019 1:54:54 PM] - Tomas Pylon was added to HC Lynx Kladno.<br />
[11/2/2019 1:54:14 PM] - Patrik Satan was added to HC Lynx Kladno.<br />
[11/2/2019 1:53:59 PM] - Merit Csonka was added to HC Lynx Kladno.<br />
[11/2/2019 1:52:58 PM] - Grayson St. Raegan was added to HC Lynx Kladno.<br />
[11/2/2019 1:52:38 PM] - Cash Savage was added to HC Lynx Kladno.<br />
[10/16/2019 3:56:55 PM] - Schnitinfritz Jagr was added to HC Lynx Kladno.<br />
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
[10/16/2019 2:42:23 PM] - Team Name Change : Team 4 changed name to HC Lynx Kladno<br />
</div>
<?php include "Footer.php";?>
