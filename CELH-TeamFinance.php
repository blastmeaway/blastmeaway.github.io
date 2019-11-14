<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>CELH - Team Finance</title>
<script src="CELH.js"></script>
<meta name="author" content="Simon Tremblay, sths.simont.info" />
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Decription" content="Marcus Winston - STHS - Version : 3.1.9.9 - CELH-STHS.db - CELH-STHSCareerStat.db"/>
<link href="STHSMain.css" rel="stylesheet" type="text/css" />
<style>
@media screen and (max-width: 960px) {.STHSWarning {display:block;}
.STHSFinance_FarmSalaryTable {display:none;}
.STHSFinance_TeamTable tr > td:nth-child(6){display:none;}
.STHSFinance_TeamTable tr > td:nth-child(7){display:none;}
.STHSFinance_TeamTable tr > td:nth-child(8){display:none;}}
@media screen and (max-width: 720px) {.STHSFinance_ProSalaryTable{display:none}}
</style>
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
<div class="STHSTopLink"><a id="STHSRosterTop"></a> <a href="#HCBlackEaglesSilesia">HC Black Eagles Silesia</a> | <a href="#HCEaglesMoravia">HC Eagles Moravia</a> | <a href="#HCLionsBohemia">HC Lions Bohemia</a> | <a href="#HCLynxKladno">HC Lynx Kladno</a> | <a href="javascript:STHS_JS_CloseAll('');">Close All Team View</a> | <a href="javascript:STHS_JS_OpenAll('');">Open All Team View</a>
</div>
<h1 class="TeamFinancePro_SBE"><a id="HCBlackEaglesSilesia">HC Black Eagles Silesia</a></h1>
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
<br /><br /><table class="STHSTableFullW"><tr><td style="vertical-align: top;width:440px;">
<table class="STHSFinance_TeamTable">
<tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_AreanaCapacity">Arena Capacity - Ticket Price<br />Attendance - %</h3></td></tr>
<tr><td class="STHSW250">Arena Name</td><td class="STHSW200">Ostravar Aréna</td></tr>
<tr><td>Level 1: </td><td>6000 - $100 - 5,670 - 94.50%</td></tr>
<tr><td>Level 2: </td><td>5000 - $60 - 4,787 - 95.74%</td></tr>
<tr><td>Level 3: </td><td>2000 - $35 - 1,863 - 93.16%</td></tr>
<tr><td>Level 4: </td><td>4000 - $25 - 3,804 - 95.10%</td></tr>
<tr><td>Luxury : </td><td>1000 - $200 - 957 - 95.65%</td></tr>
<tr><td>Total Capacity :</td><td>18000</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>17,081 - 94.89%</td></tr>
<tr><td>Average Income per Game</td><td>$1,205,861</td></tr>
<tr><td>Year to Date Revenue</td><td>$18,087,920</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>$0</td></tr>
<tr><td>Farm Players Total Salaries</td><td>$0</td></tr>
<tr><td>Coaches Total Salaries</td><td>$0</td></tr>
<tr><td>Luxury Taxe Total</td><td>$0</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>$0</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>$0</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>$0</td></tr>
<tr><td>Pro Remaining Season Days</td><td>0</td></tr>
<tr><td>Pro Expenses Per Days</td><td>$0</td></tr>
<tr><td>Pro Estimated Expenses</td><td>$0</td></tr>
<tr><td>Farm Remaining Season Days</td><td>0</td></tr>
<tr><td>Farm Expenses Per Days</td><td>$0</td></tr>
<tr><td>Farm Estimated Expenses</td><td>$0</td></tr>
<tr><td>Estimated Season Expenses</td><td>$0</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>$118,087,920</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>$118,087,920</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Mikas Bieksa</td>
<td>$0 (1)</td></tr>
<tr><td>Matej Elias</td>
<td>$0 (1)</td></tr>
<tr><td>Piotr Czerkawski</td>
<td>$0 (1)</td></tr>
<tr><td>Samee Iqbal</td>
<td>$0 (1)</td></tr>
<tr><td>Przemyslaw Brzeszczyczkiewicz</td>
<td>$0 (1)</td></tr>
<tr><td>Aron Hernadivic</td>
<td>$0 (1)</td></tr>
<tr><td>Alexander Zajac</td>
<td>$0 (1)</td></tr>
<tr><td>Charlie Schieck</td>
<td>$0 (1)</td></tr>
<tr><td>Josef Kubinec</td>
<td>$0 (1)</td></tr>
<tr><td>David Kastrba</td>
<td>$0 (1)</td></tr>
<tr><td>Simothy Drunkebird</td>
<td>$0 (1)</td></tr>
<tr><td>Krysztof Kowalski</td>
<td>$0 (1)</td></tr>
<tr><td>Vratislav Zbynek</td>
<td>$0 (1)</td></tr>
<tr><td>Casimir Stevens</td>
<td>$0 (1)</td></tr>
<tr><td>Mike Verminski</td>
<td>$0 (1)</td></tr>
<tr><td>Zalleras Szlerchek</td>
<td>$0 (1)</td></tr>
<tr><td>Tauras Karazija</td>
<td>$0 (1)</td></tr>
<tr><td>Flash Gordon</td>
<td>$0 (1)</td></tr>
<tr><td>Jakub Trocheck</td>
<td>$0 (1)</td></tr>
<tr><td>Jakub Novak</td>
<td>$0 (1)</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>20</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 1 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 3 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 4 :</b> $0</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 1 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 3 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 4 :</b> $0</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 1 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 3 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 4 :</b> $0</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>0</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 1 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 3 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 4 :</b> $0</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 1 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 3 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 4 :</b> $0</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_MOR"><a id="HCEaglesMoravia">HC Eagles Moravia</a></h1>
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
<br /><br /><table class="STHSTableFullW"><tr><td style="vertical-align: top;width:440px;">
<table class="STHSFinance_TeamTable">
<tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_AreanaCapacity">Arena Capacity - Ticket Price<br />Attendance - %</h3></td></tr>
<tr><td class="STHSW250">Arena Name</td><td class="STHSW200">DRFG Arena</td></tr>
<tr><td>Level 1: </td><td>6000 - $100 - 5,621 - 93.69%</td></tr>
<tr><td>Level 2: </td><td>5000 - $60 - 4,655 - 93.11%</td></tr>
<tr><td>Level 3: </td><td>2000 - $35 - 1,838 - 91.88%</td></tr>
<tr><td>Level 4: </td><td>4000 - $25 - 3,733 - 93.33%</td></tr>
<tr><td>Luxury : </td><td>1000 - $200 - 979 - 97.88%</td></tr>
<tr><td>Total Capacity :</td><td>18000</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>16,826 - 93.48%</td></tr>
<tr><td>Average Income per Game</td><td>$1,194,850</td></tr>
<tr><td>Year to Date Revenue</td><td>$17,922,745</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>$0</td></tr>
<tr><td>Farm Players Total Salaries</td><td>$0</td></tr>
<tr><td>Coaches Total Salaries</td><td>$0</td></tr>
<tr><td>Luxury Taxe Total</td><td>$0</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>$0</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>$0</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>$0</td></tr>
<tr><td>Pro Remaining Season Days</td><td>0</td></tr>
<tr><td>Pro Expenses Per Days</td><td>$0</td></tr>
<tr><td>Pro Estimated Expenses</td><td>$0</td></tr>
<tr><td>Farm Remaining Season Days</td><td>0</td></tr>
<tr><td>Farm Expenses Per Days</td><td>$0</td></tr>
<tr><td>Farm Estimated Expenses</td><td>$0</td></tr>
<tr><td>Estimated Season Expenses</td><td>$0</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>$117,922,745</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>$117,922,745</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Marian Potoczny</td>
<td>$0 (1)</td></tr>
<tr><td>Dionyz Vyskoc</td>
<td>$0 (1)</td></tr>
<tr><td>Nico Gross</td>
<td>$0 (1)</td></tr>
<tr><td>Slappy McDoodle</td>
<td>$0 (1)</td></tr>
<tr><td>Potato Chips</td>
<td>$0 (1)</td></tr>
<tr><td>Aviad Ratzon</td>
<td>$0 (1)</td></tr>
<tr><td>Andrej Doskocil</td>
<td>$0 (1)</td></tr>
<tr><td>Barak Obrana</td>
<td>$0 (1)</td></tr>
<tr><td>Brady McIntyre</td>
<td>$0 (1)</td></tr>
<tr><td>Boruvka Banananak</td>
<td>$0 (1)</td></tr>
<tr><td>Ondrej Ravchitikov</td>
<td>$0 (1)</td></tr>
<tr><td>Mikhail Kladno</td>
<td>$0 (1)</td></tr>
<tr><td>Sachimo Zoidberg</td>
<td>$0 (1)</td></tr>
<tr><td>Christoffer Bjornsson</td>
<td>$0 (1)</td></tr>
<tr><td>Ben Holtby</td>
<td>$0 (1)</td></tr>
<tr><td>Zivan Zidek</td>
<td>$0 (1)</td></tr>
<tr><td>Ty Justice</td>
<td>$0 (1)</td></tr>
<tr><td>Sasha Dangelchek</td>
<td>$0 (1)</td></tr>
<tr><td>Daniel Garland</td>
<td>$0 (1)</td></tr>
<tr><td>Marek Vyskoc</td>
<td>$0 (1)</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>20</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 1 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 3 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 4 :</b> $0</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 1 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 3 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 4 :</b> $0</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 1 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 3 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 4 :</b> $0</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>0</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 1 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 3 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 4 :</b> $0</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 1 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 3 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 4 :</b> $0</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_BOH"><a id="HCLionsBohemia">HC Lions Bohemia</a></h1>
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
<br /><br /><table class="STHSTableFullW"><tr><td style="vertical-align: top;width:440px;">
<table class="STHSFinance_TeamTable">
<tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_AreanaCapacity">Arena Capacity - Ticket Price<br />Attendance - %</h3></td></tr>
<tr><td class="STHSW250">Arena Name</td><td class="STHSW200">O2 Arena</td></tr>
<tr><td>Level 1: </td><td>6000 - $100 - 5,672 - 94.54%</td></tr>
<tr><td>Level 2: </td><td>5000 - $60 - 4,788 - 95.76%</td></tr>
<tr><td>Level 3: </td><td>2000 - $35 - 1,908 - 95.42%</td></tr>
<tr><td>Level 4: </td><td>4000 - $25 - 3,795 - 94.87%</td></tr>
<tr><td>Luxury : </td><td>1000 - $200 - 959 - 95.94%</td></tr>
<tr><td>Total Capacity :</td><td>18000</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>17,123 - 95.13%</td></tr>
<tr><td>Average Income per Game</td><td>$1,208,036</td></tr>
<tr><td>Year to Date Revenue</td><td>$18,120,535</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>$0</td></tr>
<tr><td>Farm Players Total Salaries</td><td>$0</td></tr>
<tr><td>Coaches Total Salaries</td><td>$0</td></tr>
<tr><td>Luxury Taxe Total</td><td>$0</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>$0</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>$0</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>$0</td></tr>
<tr><td>Pro Remaining Season Days</td><td>0</td></tr>
<tr><td>Pro Expenses Per Days</td><td>$0</td></tr>
<tr><td>Pro Estimated Expenses</td><td>$0</td></tr>
<tr><td>Farm Remaining Season Days</td><td>0</td></tr>
<tr><td>Farm Expenses Per Days</td><td>$0</td></tr>
<tr><td>Farm Estimated Expenses</td><td>$0</td></tr>
<tr><td>Estimated Season Expenses</td><td>$0</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>$118,120,535</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>$118,120,535</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Petr Mikulak</td>
<td>$0 (1)</td></tr>
<tr><td>Luke Thomason</td>
<td>$0 (1)</td></tr>
<tr><td>Pierre-Luc Laflamme</td>
<td>$0 (1)</td></tr>
<tr><td>Soren Kierkegaard</td>
<td>$0 (1)</td></tr>
<tr><td>Sean Stevenson Jr.</td>
<td>$0 (1)</td></tr>
<tr><td>Cameron Urbowicz</td>
<td>$0 (1)</td></tr>
<tr><td>Bernik Vrzala</td>
<td>$0 (1)</td></tr>
<tr><td>David Vent</td>
<td>$0 (1)</td></tr>
<tr><td>Jan Zacha</td>
<td>$0 (1)</td></tr>
<tr><td>DeMaricus Smyth</td>
<td>$0 (1)</td></tr>
<tr><td>Matej Stransky</td>
<td>$0 (1)</td></tr>
<tr><td>Konstantin Voloshin</td>
<td>$0 (1)</td></tr>
<tr><td>Ruslan Zaporozhets</td>
<td>$0 (1)</td></tr>
<tr><td>Johnny Yuma</td>
<td>$0 (1)</td></tr>
<tr><td>Chris Partridge</td>
<td>$0 (1)</td></tr>
<tr><td>Travis Jeziak</td>
<td>$0 (1)</td></tr>
<tr><td>Tokek Takshak</td>
<td>$0 (1)</td></tr>
<tr><td>Walter White</td>
<td>$0 (1)</td></tr>
<tr><td>Petr Kolesnikovs</td>
<td>$0 (1)</td></tr>
<tr><td>Dickie Pecker</td>
<td>$0 (1)</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>20</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 1 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 3 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 4 :</b> $0</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 1 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 3 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 4 :</b> $0</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 1 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 3 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 4 :</b> $0</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>0</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 1 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 3 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 4 :</b> $0</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 1 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 3 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 4 :</b> $0</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_KLD"><a id="HCLynxKladno">HC Lynx Kladno</a></h1>
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
<br /><br /><table class="STHSTableFullW"><tr><td style="vertical-align: top;width:440px;">
<table class="STHSFinance_TeamTable">
<tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_AreanaCapacity">Arena Capacity - Ticket Price<br />Attendance - %</h3></td></tr>
<tr><td class="STHSW250">Arena Name</td><td class="STHSW200">Zimní Stadion</td></tr>
<tr><td>Level 1: </td><td>6000 - $100 - 5,724 - 95.40%</td></tr>
<tr><td>Level 2: </td><td>5000 - $60 - 4,747 - 94.93%</td></tr>
<tr><td>Level 3: </td><td>2000 - $35 - 1,865 - 93.27%</td></tr>
<tr><td>Level 4: </td><td>4000 - $25 - 3,756 - 93.89%</td></tr>
<tr><td>Luxury : </td><td>1000 - $200 - 946 - 94.59%</td></tr>
<tr><td>Total Capacity :</td><td>18000</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>17,038 - 94.65%</td></tr>
<tr><td>Average Income per Game</td><td>$1,205,588</td></tr>
<tr><td>Year to Date Revenue</td><td>$18,083,820</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>$0</td></tr>
<tr><td>Farm Players Total Salaries</td><td>$0</td></tr>
<tr><td>Coaches Total Salaries</td><td>$0</td></tr>
<tr><td>Luxury Taxe Total</td><td>$0</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>$0</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>$0</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>$0</td></tr>
<tr><td>Pro Remaining Season Days</td><td>0</td></tr>
<tr><td>Pro Expenses Per Days</td><td>$0</td></tr>
<tr><td>Pro Estimated Expenses</td><td>$0</td></tr>
<tr><td>Farm Remaining Season Days</td><td>0</td></tr>
<tr><td>Farm Expenses Per Days</td><td>$0</td></tr>
<tr><td>Farm Estimated Expenses</td><td>$0</td></tr>
<tr><td>Estimated Season Expenses</td><td>$0</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>$118,083,820</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>$118,083,820</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Michael Scarn</td>
<td>$0 (1)</td></tr>
<tr><td>Kornel Kasparek</td>
<td>$0 (1)</td></tr>
<tr><td>Noctis Caelum</td>
<td>$0 (1)</td></tr>
<tr><td>Ravyn Tedisko</td>
<td>$0 (1)</td></tr>
<tr><td>Radovan Hudec</td>
<td>$0 (1)</td></tr>
<tr><td>Barret McCarthy</td>
<td>$0 (1)</td></tr>
<tr><td>Alex Winters</td>
<td>$0 (1)</td></tr>
<tr><td>Filip Zadina</td>
<td>$0 (1)</td></tr>
<tr><td>Josef Novotny</td>
<td>$0 (1)</td></tr>
<tr><td>Jakob Hamr</td>
<td>$0 (1)</td></tr>
<tr><td>Patrik Satan</td>
<td>$0 (1)</td></tr>
<tr><td>Merit Csonka</td>
<td>$0 (1)</td></tr>
<tr><td>Tomas Pylon</td>
<td>$0 (1)</td></tr>
<tr><td>Knox Booth</td>
<td>$0 (1)</td></tr>
<tr><td>Georgette Pel</td>
<td>$0 (1)</td></tr>
<tr><td>Shouta Aizawa</td>
<td>$0 (1)</td></tr>
<tr><td>Schnitinfritz Jagr</td>
<td>$0 (1)</td></tr>
<tr><td>Troy McClure III</td>
<td>$0 (1)</td></tr>
<tr><td>Grayson St. Raegan</td>
<td>$0 (1)</td></tr>
<tr><td>Cash Savage</td>
<td>$0 (1)</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>20</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 1 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 3 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 4 :</b> $0</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 1 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 3 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 4 :</b> $0</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 1 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 3 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 4 :</b> $0</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>0</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 1 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 3 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 4 :</b> $0</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 1 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 3 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 4 :</b> $0</td></tr>
</table>
</td></tr></table>
</div>
<?php include "Footer.php";?>
