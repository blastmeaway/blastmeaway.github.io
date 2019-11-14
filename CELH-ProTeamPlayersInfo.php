<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>CELH - Pro Team PlayersInfo</title>
<script src="CELH.js"></script>
<meta name="author" content="Simon Tremblay, sths.simont.info" />
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Decription" content="Marcus Winston - STHS - Version : 3.1.9.9 - CELH-STHS.db - CELH-STHSCareerStat.db"/>
<link href="STHSMain.css" rel="stylesheet" type="text/css" />
<style>
@media screen and (max-width: 1200px) {
.STHSWarning {display:block;}
table.basictablesorter tbody td:nth-child(15){display:none;}
table.basictablesorter thead th:nth-child(15){display:none;}
table.basictablesorter tbody td:nth-child(16){display:none;}
table.basictablesorter thead th:nth-child(16){display:none;}
table.basictablesorter tbody td:nth-child(17){display:none;}
table.basictablesorter thead th:nth-child(17){display:none;}
}@media screen and (max-width: 960px) {
table.basictablesorter tbody td:nth-child(8){display:none;}
table.basictablesorter thead th:nth-child(8){display:none;}
table.basictablesorter tbody td:nth-child(9){display:none;}
table.basictablesorter thead th:nth-child(9){display:none;}
table.basictablesorter tbody td:nth-child(11){display:none;}
table.basictablesorter thead th:nth-child(11){display:none;}
table.basictablesorter tbody td:nth-child(12){display:none;}
table.basictablesorter thead th:nth-child(12){display:none;}
}@media screen and (max-width: 720px) {
table.basictablesorter tbody td:nth-child(2){display:none;}
table.basictablesorter thead th:nth-child(2){display:none;}
table.basictablesorter tbody td:nth-child(3){display:none;}
table.basictablesorter thead th:nth-child(3){display:none;}
}</style>
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
<script>jQuery(function($,undefined) {$.basictablesorter.addParser({id: 'thousands',is: function(s) {return false;}, format: function(s) { return s.replace('$','').replace(/,/g,'');}, type: 'numeric' }); $("table").basictablesorter({headers:{11:{sorter:'thousands'},12:{sorter:'thousands'},13:{sorter:'thousands'},14:{sorter:'thousands'},15:{sorter:'thousands'}}});});</script>
<div class="STHSTopLink"><a id="STHSRosterTop"></a> <a href="#HCBlackEaglesSilesia">HC Black Eagles Silesia</a> | <a href="#HCEaglesMoravia">HC Eagles Moravia</a> | <a href="#HCLionsBohemia">HC Lions Bohemia</a> | <a href="#HCLynxKladno">HC Lynx Kladno</a> | <a href="javascript:STHS_JS_CloseAll('');">Close All Team View</a> | <a href="javascript:STHS_JS_OpenAll('');">Open All Team View</a>
</div>
<h1 class="TeamPlayerInfoPro_SBE"><a id="HCBlackEaglesSilesia">HC Black Eagles Silesia</a></h1>
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
<table class="basictablesorter"><thead><tr>
<th class="STHSW200">Player Name</th><th class="STHSW25">CNT</th><th class="STHSW65">PO</th><th class="STHSW25">Age</th><th class="STHSW65">Birthday</th><th class="STHSW65">Weight</th><th class="STHSW55">Height</th><th class="STHSW45">Health<br /># Loss</th><th class="STHSW45">Force<br />Waiver</th><th class="STHSW65">Contract</th><th class="STHSW100">Type</th><th class="STHSW75">One Way<br />Contract</th><th class="STHSW85">Salary #1</th><th class="STHSW85">Salary #2</th><th class="STHSW85">Salary #3</th><th class="STHSW85">Salary #4</th><th class="STHSW85">Salary #5</th></tr></thead>
<tr><td>Alexander Zajac</td><td>USA</td><td>LW/RW</td><td>24</td><td>7/13/1936</td><td>210 Lbs</td><td>5 ft11</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$0</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Aron Hernadivic</td><td>CZE</td><td>LW/RW</td><td>9</td><td>10/30/1950</td><td>180 Lbs</td><td>5 ft10</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$0</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Casimir Stevens</td><td>CAN</td><td>G</td><td>13</td><td>12/18/1946</td><td>194 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$0</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Charlie Schieck</td><td>CAN</td><td>D</td><td>18</td><td>4/20/1942</td><td>190 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$0</td><td></td><td></td><td></td><td></td></tr>
<tr><td>David Kastrba</td><td>CZE</td><td>LW/RW</td><td>17</td><td>12/4/1942</td><td>173 Lbs</td><td>5 ft10</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$0</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Flash Gordon</td><td>CZE</td><td>D</td><td>9</td><td>11/7/1950</td><td>225 Lbs</td><td>6 ft4</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$0</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Jakub Novak</td><td>CZE</td><td>LW/RW</td><td>15</td><td>2/20/1945</td><td>189 Lbs</td><td>5 ft9</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$0</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Jakub Trocheck</td><td>CZE</td><td>D</td><td>26</td><td>1/13/1934</td><td>212 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$0</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Josef Kubinec</td><td>CZE</td><td>LW/RW</td><td>13</td><td>2/28/1947</td><td>197 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$0</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Krysztof Kowalski</td><td>POL</td><td>C/LW/RW</td><td>33</td><td>2/20/1927</td><td>201 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$0</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Matej Elias</td><td>CZE</td><td>D</td><td>19</td><td>2/3/1941</td><td>180 Lbs</td><td>5 ft11</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$0</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Mikas Bieksa</td><td>LTU</td><td>D</td><td>11</td><td>6/19/1949</td><td>205 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$0</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Mike Verminski</td><td>USA</td><td>G</td><td>49</td><td>7/15/1911</td><td>280 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$0</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Piotr Czerkawski</td><td>POL</td><td>LW/RW</td><td>19</td><td>4/22/1941</td><td>220 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$0</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Przemyslaw Brzeszczyczkiewicz</td><td>POL</td><td>LW/RW</td><td>13</td><td>2/16/1947</td><td>215 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$0</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Samee Iqbal</td><td>SWE</td><td>D</td><td>27</td><td>11/11/1932</td><td>210 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$0</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Simothy Drunkebird</td><td>CZE</td><td>LW/RW</td><td>7</td><td>10/22/1952</td><td>183 Lbs</td><td>5 ft6</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$0</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Tauras Karazija</td><td>LTU</td><td>D</td><td>16</td><td>8/4/1944</td><td>205 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$0</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Vratislav Zbynek</td><td>CZE</td><td>LW/RW</td><td>25</td><td>10/18/1934</td><td>220 Lbs</td><td>6 ft4</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$0</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Zalleras Szlerchek</td><td>CZE</td><td>C/LW/RW</td><td>41</td><td>9/13/1919</td><td>240 Lbs</td><td>6 ft7</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$0</td><td></td><td></td><td></td><td></td></tr>
</table><br />
<table class="basictablesorter"><tr>
<td class="STHSW100">Total Players</td><td class="STHSW100">Average Age</td><td class="STHSW120">Average Weight</td><td class="STHSW120">Average Height</td><td class="STHSW120">Average Contract</td><td class="STHSW120">Average Salary</td><td class="STHSW140">Players who can play<br />both Pro and Farm </td><td class="STHSW140">Players who can play<br />Pro Only</td><td class="STHSW140">Players who can play<br />Farm Only</td></tr>
<tr><td>20</td><td>20.2</td><td>206 Lbs</td><td>6 ft 1</td><td>1.00 years</td><td>$0</td>
<td>20</td><td>0</td><td>0</td></tr></table></div>
<h1 class="TeamPlayerInfoPro_MOR"><a id="HCEaglesMoravia">HC Eagles Moravia</a></h1>
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
<table class="basictablesorter"><thead><tr>
<th class="STHSW200">Player Name</th><th class="STHSW25">CNT</th><th class="STHSW65">PO</th><th class="STHSW25">Age</th><th class="STHSW65">Birthday</th><th class="STHSW65">Weight</th><th class="STHSW55">Height</th><th class="STHSW45">Health<br /># Loss</th><th class="STHSW45">Force<br />Waiver</th><th class="STHSW65">Contract</th><th class="STHSW100">Type</th><th class="STHSW75">One Way<br />Contract</th><th class="STHSW85">Salary #1</th><th class="STHSW85">Salary #2</th><th class="STHSW85">Salary #3</th><th class="STHSW85">Salary #4</th><th class="STHSW85">Salary #5</th></tr></thead>
<tr><td>Andrej Doskocil</td><td>CZE</td><td>D</td><td>14</td><td>3/7/1946</td><td>215 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$0</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Aviad Ratzon</td><td>ISR</td><td>C/LW/RW</td><td>40</td><td>2/17/1920</td><td>205 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$0</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Barak Obrana</td><td>CZE</td><td>D</td><td>31</td><td>2/27/1929</td><td>210 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$0</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Ben Holtby</td><td>NZL</td><td>G</td><td>23</td><td>9/16/1937</td><td>210 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$0</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Boruvka Banananak</td><td>CZE</td><td>LW/RW</td><td>12</td><td>10/13/1947</td><td>160 Lbs</td><td>5 ft2</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$0</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Brady McIntyre</td><td>USA</td><td>D</td><td>21</td><td>4/5/1939</td><td>220 Lbs</td><td>6 ft4</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$0</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Christoffer Bjornsson</td><td>SWE</td><td>G</td><td>34</td><td>1/13/1926</td><td>205 Lbs</td><td>6 ft5</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$0</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Daniel Garland</td><td>CZE</td><td>LW/RW</td><td>20</td><td>9/16/1940</td><td>210 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$0</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Dionyz Vyskoc</td><td>CZE</td><td>LW/RW</td><td>24</td><td>5/30/1936</td><td>204 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$0</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Marek Vyskoc</td><td>SVK</td><td>LW/RW</td><td>41</td><td>7/27/1919</td><td>220 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$0</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Marian Potoczny</td><td>SVK</td><td>C/LW/RW</td><td>46</td><td>8/24/1914</td><td>195 Lbs</td><td>6 ft4</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$0</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Mikhail Kladno</td><td>CZE</td><td>C/LW/RW</td><td>45</td><td>2/17/1915</td><td>197 Lbs</td><td>6 ft4</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$0</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Nico Gross</td><td>SUI</td><td>LW/RW</td><td>22</td><td>7/17/1938</td><td>198 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$0</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Ondrej Ravchitikov</td><td>SVK</td><td>D</td><td>46</td><td>3/31/1914</td><td>191 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$0</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Potato Chips</td><td>GBR</td><td>C/LW/RW</td><td>34</td><td>1/1/1926</td><td>310 Lbs</td><td>7 ft6</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$0</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Sachimo Zoidberg</td><td>NLD</td><td>D</td><td>40</td><td>3/2/1920</td><td>233 Lbs</td><td>6 ft4</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$0</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Sasha Dangelchek</td><td>CZE</td><td>LW/RW</td><td>10</td><td>7/29/1950</td><td>220 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$0</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Slappy McDoodle</td><td>USA</td><td>C/LW/RW</td><td>36</td><td>9/22/1923</td><td>240 Lbs</td><td>6 ft4</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$0</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Ty Justice</td><td>CAN</td><td>D</td><td>30</td><td>3/12/1930</td><td>190 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$0</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Zivan Zidek</td><td>CZE</td><td>C/LW/RW</td><td>14</td><td>10/14/1945</td><td>199 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$0</td><td></td><td></td><td></td><td></td></tr>
</table><br />
<table class="basictablesorter"><tr>
<td class="STHSW100">Total Players</td><td class="STHSW100">Average Age</td><td class="STHSW120">Average Weight</td><td class="STHSW120">Average Height</td><td class="STHSW120">Average Contract</td><td class="STHSW120">Average Salary</td><td class="STHSW140">Players who can play<br />both Pro and Farm </td><td class="STHSW140">Players who can play<br />Pro Only</td><td class="STHSW140">Players who can play<br />Farm Only</td></tr>
<tr><td>20</td><td>29.2</td><td>212 Lbs</td><td>6 ft 2</td><td>1.00 years</td><td>$0</td>
<td>20</td><td>0</td><td>0</td></tr></table></div>
<h1 class="TeamPlayerInfoPro_BOH"><a id="HCLionsBohemia">HC Lions Bohemia</a></h1>
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
<table class="basictablesorter"><thead><tr>
<th class="STHSW200">Player Name</th><th class="STHSW25">CNT</th><th class="STHSW65">PO</th><th class="STHSW25">Age</th><th class="STHSW65">Birthday</th><th class="STHSW65">Weight</th><th class="STHSW55">Height</th><th class="STHSW45">Health<br /># Loss</th><th class="STHSW45">Force<br />Waiver</th><th class="STHSW65">Contract</th><th class="STHSW100">Type</th><th class="STHSW75">One Way<br />Contract</th><th class="STHSW85">Salary #1</th><th class="STHSW85">Salary #2</th><th class="STHSW85">Salary #3</th><th class="STHSW85">Salary #4</th><th class="STHSW85">Salary #5</th></tr></thead>
<tr><td>Bernik Vrzala</td><td>CZE</td><td>D</td><td>13</td><td>9/30/1946</td><td>210 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$0</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Cameron Urbowicz</td><td>USA</td><td>LW/RW</td><td>38</td><td>9/19/1921</td><td>185 Lbs</td><td>5 ft11</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$0</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Chris Partridge</td><td>CAN</td><td>G</td><td>21</td><td>7/1/1939</td><td>192 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$0</td><td></td><td></td><td></td><td></td></tr>
<tr><td>David Vent</td><td>CZE</td><td>D</td><td>14</td><td>2/4/1946</td><td>265 Lbs</td><td>6 ft6</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$0</td><td></td><td></td><td></td><td></td></tr>
<tr><td>DeMaricus Smyth</td><td>CZE</td><td>C/LW/RW</td><td>21</td><td>4/1/1939</td><td>197 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$0</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Dickie Pecker</td><td>HRV</td><td>C/LW/RW</td><td>33</td><td>6/23/1927</td><td>220 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$0</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Jan Zacha</td><td>CZE</td><td>C/LW/RW</td><td>11</td><td>6/1/1949</td><td>215 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$0</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Johnny Yuma</td><td>CZE</td><td>G</td><td>22</td><td>9/19/1937</td><td>220 Lbs</td><td>6 ft4</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$0</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Konstantin Voloshin</td><td>UKR</td><td>C/LW/RW</td><td>14</td><td>12/6/1945</td><td>198 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$0</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Luke Thomason</td><td>CZE</td><td>LW/RW</td><td>17</td><td>6/13/1943</td><td>185 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$0</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Matej Stransky</td><td>CZE</td><td>LW/RW</td><td>42</td><td>11/28/1917</td><td>215 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$0</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Petr Kolesnikovs</td><td>CZE</td><td>C/LW/RW</td><td>34</td><td>3/23/1926</td><td>215 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$0</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Petr Mikulak</td><td>CZE</td><td>LW/RW</td><td>13</td><td>10/19/1946</td><td>178 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$0</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Pierre-Luc Laflamme</td><td>FRA</td><td>D</td><td>38</td><td>9/9/1922</td><td>189 Lbs</td><td>5 ft11</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$0</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Ruslan Zaporozhets</td><td>UKR</td><td>LW/RW</td><td>9</td><td>9/15/1951</td><td>200 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$0</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Sean Stevenson Jr.</td><td>USA</td><td>D</td><td>17</td><td>3/29/1943</td><td>226 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$0</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Soren Kierkegaard</td><td>DNK</td><td>C/LW/RW</td><td>17</td><td>11/11/1942</td><td>200 Lbs</td><td>5 ft11</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$0</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Tokek Takshak</td><td>IDN</td><td>D</td><td>17</td><td>11/25/1942</td><td>175 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$0</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Travis Jeziak</td><td>CZE</td><td>C/LW/RW</td><td>29</td><td>3/15/1931</td><td>192 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$0</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Walter White</td><td>USA</td><td>D</td><td>43</td><td>9/7/1917</td><td>190 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$0</td><td></td><td></td><td></td><td></td></tr>
</table><br />
<table class="basictablesorter"><tr>
<td class="STHSW100">Total Players</td><td class="STHSW100">Average Age</td><td class="STHSW120">Average Weight</td><td class="STHSW120">Average Height</td><td class="STHSW120">Average Contract</td><td class="STHSW120">Average Salary</td><td class="STHSW140">Players who can play<br />both Pro and Farm </td><td class="STHSW140">Players who can play<br />Pro Only</td><td class="STHSW140">Players who can play<br />Farm Only</td></tr>
<tr><td>20</td><td>23.2</td><td>203 Lbs</td><td>6 ft 2</td><td>1.00 years</td><td>$0</td>
<td>20</td><td>0</td><td>0</td></tr></table></div>
<h1 class="TeamPlayerInfoPro_KLD"><a id="HCLynxKladno">HC Lynx Kladno</a></h1>
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
<table class="basictablesorter"><thead><tr>
<th class="STHSW200">Player Name</th><th class="STHSW25">CNT</th><th class="STHSW65">PO</th><th class="STHSW25">Age</th><th class="STHSW65">Birthday</th><th class="STHSW65">Weight</th><th class="STHSW55">Height</th><th class="STHSW45">Health<br /># Loss</th><th class="STHSW45">Force<br />Waiver</th><th class="STHSW65">Contract</th><th class="STHSW100">Type</th><th class="STHSW75">One Way<br />Contract</th><th class="STHSW85">Salary #1</th><th class="STHSW85">Salary #2</th><th class="STHSW85">Salary #3</th><th class="STHSW85">Salary #4</th><th class="STHSW85">Salary #5</th></tr></thead>
<tr><td>Alex Winters</td><td>CZE</td><td>LW/RW</td><td>17</td><td>5/13/1943</td><td>225 Lbs</td><td>6 ft4</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$0</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Barret McCarthy</td><td>USA</td><td>D</td><td>15</td><td>11/27/1944</td><td>225 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$0</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Cash Savage</td><td>CAN</td><td>LW/RW</td><td>19</td><td>3/10/1941</td><td>220 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$0</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Filip Zadina</td><td>CZE</td><td>LW/RW</td><td>13</td><td>1/20/1947</td><td>196 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$0</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Georgette Pel</td><td>CZE</td><td>G</td><td>28</td><td>12/25/1931</td><td>185 Lbs</td><td>5 ft10</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$0</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Grayson St. Raegan</td><td>LIE</td><td>C/LW/RW</td><td>20</td><td>11/29/1939</td><td>200 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$0</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Jakob Hamr</td><td>CZE</td><td>D</td><td>10</td><td>7/23/1950</td><td>250 Lbs</td><td>6 ft5</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$0</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Josef Novotny</td><td>CZE</td><td>C/LW/RW</td><td>12</td><td>4/22/1948</td><td>220 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$0</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Knox Booth</td><td>CAN</td><td>G</td><td>10</td><td>5/24/1950</td><td>215 Lbs</td><td>6 ft5</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$0</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Kornel Kasparek</td><td>CZE</td><td>D</td><td>29</td><td>7/9/1931</td><td>220 Lbs</td><td>6 ft5</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$0</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Merit Csonka</td><td>HUN</td><td>LW/RW</td><td>40</td><td>3/3/1920</td><td>215 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$0</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Michael Scarn</td><td>CZE</td><td>C/LW/RW</td><td>14</td><td>3/15/1946</td><td>195 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$0</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Noctis Caelum</td><td>CZE</td><td>D</td><td>28</td><td>2/29/1932</td><td>215 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$0</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Patrik Satan</td><td>SVK</td><td>C/LW/RW</td><td>39</td><td>5/7/1921</td><td>204 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$0</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Radovan Hudec</td><td>CZE</td><td>LW/RW</td><td>20</td><td>1/1/1940</td><td>215 Lbs</td><td>6 ft4</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$0</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Ravyn Tedisko</td><td>CZE</td><td>LW/RW</td><td>11</td><td>12/29/1948</td><td>180 Lbs</td><td>5 ft11</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$0</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Schnitinfritz Jagr</td><td>CZE</td><td>C/LW/RW</td><td>37</td><td>2/15/1923</td><td>230 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$0</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Shouta Aizawa</td><td>CZE</td><td>C/LW/RW</td><td>16</td><td>2/29/1944</td><td>215 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$0</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Tomas Pylon</td><td>CZE</td><td>D</td><td>39</td><td>3/7/1921</td><td>210 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$0</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Troy McClure III</td><td>CZE</td><td>D</td><td>17</td><td>12/20/1942</td><td>271 Lbs</td><td>6 ft8</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$0</td><td></td><td></td><td></td><td></td></tr>
</table><br />
<table class="basictablesorter"><tr>
<td class="STHSW100">Total Players</td><td class="STHSW100">Average Age</td><td class="STHSW120">Average Weight</td><td class="STHSW120">Average Height</td><td class="STHSW120">Average Contract</td><td class="STHSW120">Average Salary</td><td class="STHSW140">Players who can play<br />both Pro and Farm </td><td class="STHSW140">Players who can play<br />Pro Only</td><td class="STHSW140">Players who can play<br />Farm Only</td></tr>
<tr><td>20</td><td>21.7</td><td>215 Lbs</td><td>6 ft 3</td><td>1.00 years</td><td>$0</td>
<td>20</td><td>0</td><td>0</td></tr></table></div>
<?php include "Footer.php";?>
