<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>CELH - Team Injury Suspension</title>
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
<h1 class="TeamInjurySuspension_SBE"><a id="HCBlackEaglesSilesia">HC Black Eagles Silesia</a></h1>
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
<br />
No Injury or Suspension.
</div>
<h1 class="TeamInjurySuspension_MOR"><a id="HCEaglesMoravia">HC Eagles Moravia</a></h1>
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
<br />
No Injury or Suspension.
</div>
<h1 class="TeamInjurySuspension_BOH"><a id="HCLionsBohemia">HC Lions Bohemia</a></h1>
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
<br />
No Injury or Suspension.
</div>
<h1 class="TeamInjurySuspension_KLD"><a id="HCLynxKladno">HC Lynx Kladno</a></h1>
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
<br />
No Injury or Suspension.
</div>
<h3 class="STHSTeamInjurySuspension_RecoverySpeed">Pro Injury Recovery Rate is 1.<br />Farm Injury Recovery Rate is 1.</h3>
<?php include "Footer.php";?>
