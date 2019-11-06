<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>CELH - Pro Team Schedule</title>
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
<script>$(function(){$("table").basictablesorter()});</script>
<div class="STHSTopLink"><a id="STHSRosterTop"></a> <a href="#HCBlackEaglesSilesia">HC Black Eagles Silesia</a> | <a href="#HCEaglesMoravia">HC Eagles Moravia</a> | <a href="#HCLionsBohemia">HC Lions Bohemia</a> | <a href="#HCLynxKladno">HC Lynx Kladno</a> | <a href="javascript:STHS_JS_CloseAll('');">Close All Team View</a> | <a href="javascript:STHS_JS_OpenAll('');">Open All Team View</a>
</div>
<h1 class="TeamSchedulePro_SBE"><a id="HCBlackEaglesSilesia">HC Black Eagles Silesia</a></h1>
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
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
<tr><td>1</td><td>1</td><td><a href="CELH-ProTeamRoster.php#HCLynxKladno">HC Lynx Kladno</a></td><td>2</td><td><a href="CELH-ProTeamRoster.php#HCBlackEaglesSilesia">HC Black Eagles Silesia</a></td><td>0</td><td>L</td><td></td><td></td><td></td><td><a href="CELH-1.html">Game Direct Link</a></td></tr>
<tr><td>3</td><td>4</td><td><a href="CELH-ProTeamRoster.php#HCBlackEaglesSilesia">HC Black Eagles Silesia</a></td><td>1</td><td><a href="CELH-ProTeamRoster.php#HCLynxKladno">HC Lynx Kladno</a></td><td>3</td><td>L</td><td></td><td></td><td></td><td><a href="CELH-4.html">Game Direct Link</a></td></tr>
<tr><td>4</td><td>5</td><td><a href="CELH-ProTeamRoster.php#HCBlackEaglesSilesia">HC Black Eagles Silesia</a></td><td>3</td><td><a href="CELH-ProTeamRoster.php#HCLionsBohemia">HC Lions Bohemia</a></td><td>2</td><td>W</td><td></td><td></td><td></td><td><a href="CELH-5.html">Game Direct Link</a></td></tr>
<tr><td>5</td><td>7</td><td><a href="CELH-ProTeamRoster.php#HCLynxKladno">HC Lynx Kladno</a></td><td>1</td><td><a href="CELH-ProTeamRoster.php#HCBlackEaglesSilesia">HC Black Eagles Silesia</a></td><td>2</td><td>W</td><td>*</td><td></td><td></td><td><a href="CELH-7.html">Game Direct Link</a></td></tr>
<tr><td>6</td><td>9</td><td><a href="CELH-ProTeamRoster.php#HCBlackEaglesSilesia">HC Black Eagles Silesia</a></td><td>1</td><td><a href="CELH-ProTeamRoster.php#HCLionsBohemia">HC Lions Bohemia</a></td><td>3</td><td>L</td><td></td><td></td><td></td><td><a href="CELH-9.html">Game Direct Link</a></td></tr>
<tr><td>7</td><td>10</td><td><a href="CELH-ProTeamRoster.php#HCBlackEaglesSilesia">HC Black Eagles Silesia</a></td><td>3</td><td><a href="CELH-ProTeamRoster.php#HCEaglesMoravia">HC Eagles Moravia</a></td><td>2</td><td>W</td><td></td><td>*</td><td></td><td><a href="CELH-10.html">Game Direct Link</a></td></tr>
<tr><td>9</td><td>13</td><td><a href="CELH-ProTeamRoster.php#HCLynxKladno">HC Lynx Kladno</a></td><td>1</td><td><a href="CELH-ProTeamRoster.php#HCBlackEaglesSilesia">HC Black Eagles Silesia</a></td><td>2</td><td>W</td><td></td><td></td><td></td><td><a href="CELH-13.html">Game Direct Link</a></td></tr>
<tr><td>11</td><td>15</td><td><a href="CELH-ProTeamRoster.php#HCLynxKladno">HC Lynx Kladno</a></td><td>2</td><td><a href="CELH-ProTeamRoster.php#HCBlackEaglesSilesia">HC Black Eagles Silesia</a></td><td>1</td><td>L</td><td>*</td><td></td><td></td><td><a href="CELH-15.html">Game Direct Link</a></td></tr>
<tr><td>12</td><td>17</td><td><a href="CELH-ProTeamRoster.php#HCBlackEaglesSilesia">HC Black Eagles Silesia</a></td><td>2</td><td><a href="CELH-ProTeamRoster.php#HCLynxKladno">HC Lynx Kladno</a></td><td>0</td><td>W</td><td></td><td></td><td></td><td><a href="CELH-17.html">Game Direct Link</a></td></tr>
<tr><td>13</td><td>19</td><td><a href="CELH-ProTeamRoster.php#HCBlackEaglesSilesia">HC Black Eagles Silesia</a></td><td>0</td><td><a href="CELH-ProTeamRoster.php#HCLynxKladno">HC Lynx Kladno</a></td><td>3</td><td>L</td><td></td><td></td><td></td><td><a href="CELH-19.html">Game Direct Link</a></td></tr>
<tr><td>15</td><td>21</td><td><a href="CELH-ProTeamRoster.php#HCEaglesMoravia">HC Eagles Moravia</a></td><td>1</td><td><a href="CELH-ProTeamRoster.php#HCBlackEaglesSilesia">HC Black Eagles Silesia</a></td><td>2</td><td>W</td><td></td><td></td><td></td><td><a href="CELH-21.html">Game Direct Link</a></td></tr>
<tr><td>16</td><td>23</td><td><a href="CELH-ProTeamRoster.php#HCEaglesMoravia">HC Eagles Moravia</a></td><td>2</td><td><a href="CELH-ProTeamRoster.php#HCBlackEaglesSilesia">HC Black Eagles Silesia</a></td><td>3</td><td>W</td><td>*</td><td></td><td></td><td><a href="CELH-23.html">Game Direct Link</a></td></tr>
<tr><td>19</td><td>26</td><td><a href="CELH-ProTeamRoster.php#HCLionsBohemia">HC Lions Bohemia</a></td><td>0</td><td><a href="CELH-ProTeamRoster.php#HCBlackEaglesSilesia">HC Black Eagles Silesia</a></td><td>1</td><td>W</td><td></td><td></td><td></td><td><a href="CELH-26.html">Game Direct Link</a></td></tr>
<tr><td>20</td><td>28</td><td><a href="CELH-ProTeamRoster.php#HCBlackEaglesSilesia">HC Black Eagles Silesia</a></td><td>0</td><td><a href="CELH-ProTeamRoster.php#HCLionsBohemia">HC Lions Bohemia</a></td><td>1</td><td>L</td><td></td><td></td><td></td><td><a href="CELH-28.html">Game Direct Link</a></td></tr>
<tr><td>21</td><td>29</td><td><a href="CELH-ProTeamRoster.php#HCBlackEaglesSilesia">HC Black Eagles Silesia</a></td><td>2</td><td><a href="CELH-ProTeamRoster.php#HCEaglesMoravia">HC Eagles Moravia</a></td><td>3</td><td>L</td><td>*</td><td></td><td></td><td><a href="CELH-29.html">Game Direct Link</a></td></tr>
<tr><td>23</td><td>31</td><td><a href="CELH-ProTeamRoster.php#HCEaglesMoravia">HC Eagles Moravia</a></td><td>1</td><td><a href="CELH-ProTeamRoster.php#HCBlackEaglesSilesia">HC Black Eagles Silesia</a></td><td>2</td><td>W</td><td></td><td></td><td></td><td><a href="CELH-31.html">Game Direct Link</a></td></tr>
<tr><td>25</td><td>34</td><td><a href="CELH-ProTeamRoster.php#HCLionsBohemia">HC Lions Bohemia</a></td><td>2</td><td><a href="CELH-ProTeamRoster.php#HCBlackEaglesSilesia">HC Black Eagles Silesia</a></td><td>1</td><td>L</td><td>*</td><td></td><td></td><td><a href="CELH-34.html">Game Direct Link</a></td></tr>
<tr><td>26</td><td>35</td><td><a href="CELH-ProTeamRoster.php#HCBlackEaglesSilesia">HC Black Eagles Silesia</a></td><td>2</td><td><a href="CELH-ProTeamRoster.php#HCLynxKladno">HC Lynx Kladno</a></td><td>1</td><td>W</td><td></td><td></td><td></td><td><a href="CELH-35.html">Game Direct Link</a></td></tr>
<tr><td>28</td><td>38</td><td><a href="CELH-ProTeamRoster.php#HCLionsBohemia">HC Lions Bohemia</a></td><td>2</td><td><a href="CELH-ProTeamRoster.php#HCBlackEaglesSilesia">HC Black Eagles Silesia</a></td><td>3</td><td>W</td><td></td><td>*</td><td></td><td><a href="CELH-38.html">Game Direct Link</a></td></tr>
<tr><td>29</td><td>40</td><td><a href="CELH-ProTeamRoster.php#HCBlackEaglesSilesia">HC Black Eagles Silesia</a></td><td>2</td><td><a href="CELH-ProTeamRoster.php#HCLionsBohemia">HC Lions Bohemia</a></td><td>1</td><td>W</td><td></td><td></td><td></td><td><a href="CELH-40.html">Game Direct Link</a></td></tr>
<tr><td>30</td><td>41</td><td><a href="CELH-ProTeamRoster.php#HCBlackEaglesSilesia">HC Black Eagles Silesia</a></td><td>4</td><td><a href="CELH-ProTeamRoster.php#HCEaglesMoravia">HC Eagles Moravia</a></td><td>1</td><td>W</td><td></td><td></td><td></td><td><a href="CELH-41.html">Game Direct Link</a></td></tr>
<tr><td>32</td><td>43</td><td><a href="CELH-ProTeamRoster.php#HCLynxKladno">HC Lynx Kladno</a></td><td>1</td><td><a href="CELH-ProTeamRoster.php#HCBlackEaglesSilesia">HC Black Eagles Silesia</a></td><td>3</td><td>W</td><td></td><td></td><td></td><td><a href="CELH-43.html">Game Direct Link</a></td></tr>
<tr><td>34</td><td>45</td><td><a href="CELH-ProTeamRoster.php#HCBlackEaglesSilesia">HC Black Eagles Silesia</a></td><td>2</td><td><a href="CELH-ProTeamRoster.php#HCEaglesMoravia">HC Eagles Moravia</a></td><td>3</td><td>L</td><td>*</td><td></td><td></td><td><a href="CELH-45.html">Game Direct Link</a></td></tr>
<tr><td>36</td><td>47</td><td><a href="CELH-ProTeamRoster.php#HCEaglesMoravia">HC Eagles Moravia</a></td><td>3</td><td><a href="CELH-ProTeamRoster.php#HCBlackEaglesSilesia">HC Black Eagles Silesia</a></td><td>2</td><td>L</td><td>*</td><td></td><td></td><td><a href="CELH-47.html">Game Direct Link</a></td></tr>
<tr><td>38</td><td>49</td><td><a href="CELH-ProTeamRoster.php#HCEaglesMoravia">HC Eagles Moravia</a></td><td>3</td><td><a href="CELH-ProTeamRoster.php#HCBlackEaglesSilesia">HC Black Eagles Silesia</a></td><td>2</td><td>L</td><td></td><td></td><td></td><td><a href="CELH-49.html">Game Direct Link</a></td></tr>
<tr><td>40</td><td>51</td><td><a href="CELH-ProTeamRoster.php#HCBlackEaglesSilesia">HC Black Eagles Silesia</a></td><td>3</td><td><a href="CELH-ProTeamRoster.php#HCLionsBohemia">HC Lions Bohemia</a></td><td>2</td><td>W</td><td></td><td></td><td></td><td><a href="CELH-51.html">Game Direct Link</a></td></tr>
<tr><td>43</td><td>54</td><td><a href="CELH-ProTeamRoster.php#HCLionsBohemia">HC Lions Bohemia</a></td><td>2</td><td><a href="CELH-ProTeamRoster.php#HCBlackEaglesSilesia">HC Black Eagles Silesia</a></td><td>1</td><td>L</td><td></td><td></td><td></td><td><a href="CELH-54.html">Game Direct Link</a></td></tr>
<tr><td>45</td><td>56</td><td><a href="CELH-ProTeamRoster.php#HCBlackEaglesSilesia">HC Black Eagles Silesia</a></td><td>2</td><td><a href="CELH-ProTeamRoster.php#HCLynxKladno">HC Lynx Kladno</a></td><td>1</td><td>W</td><td></td><td></td><td></td><td><a href="CELH-56.html">Game Direct Link</a></td></tr>
<tr><td>46</td><td>57</td><td><a href="CELH-ProTeamRoster.php#HCBlackEaglesSilesia">HC Black Eagles Silesia</a></td><td>2</td><td><a href="CELH-ProTeamRoster.php#HCEaglesMoravia">HC Eagles Moravia</a></td><td>1</td><td>W</td><td>*</td><td></td><td></td><td><a href="CELH-57.html">Game Direct Link</a></td></tr>
<tr><td>49</td><td>60</td><td><a href="CELH-ProTeamRoster.php#HCLionsBohemia">HC Lions Bohemia</a></td><td>1</td><td><a href="CELH-ProTeamRoster.php#HCBlackEaglesSilesia">HC Black Eagles Silesia</a></td><td>3</td><td>W</td><td></td><td></td><td></td><td><a href="CELH-60.html">Game Direct Link</a></td></tr>
</table></div>
<h1 class="TeamSchedulePro_MOR"><a id="HCEaglesMoravia">HC Eagles Moravia</a></h1>
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
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
<tr><td>1</td><td>2</td><td><a href="CELH-ProTeamRoster.php#HCEaglesMoravia">HC Eagles Moravia</a></td><td>3</td><td><a href="CELH-ProTeamRoster.php#HCLionsBohemia">HC Lions Bohemia</a></td><td>4</td><td>L</td><td></td><td>*</td><td></td><td><a href="CELH-2.html">Game Direct Link</a></td></tr>
<tr><td>2</td><td>3</td><td><a href="CELH-ProTeamRoster.php#HCLynxKladno">HC Lynx Kladno</a></td><td>2</td><td><a href="CELH-ProTeamRoster.php#HCEaglesMoravia">HC Eagles Moravia</a></td><td>3</td><td>W</td><td></td><td></td><td></td><td><a href="CELH-3.html">Game Direct Link</a></td></tr>
<tr><td>5</td><td>6</td><td><a href="CELH-ProTeamRoster.php#HCLionsBohemia">HC Lions Bohemia</a></td><td>0</td><td><a href="CELH-ProTeamRoster.php#HCEaglesMoravia">HC Eagles Moravia</a></td><td>1</td><td>W</td><td></td><td></td><td></td><td><a href="CELH-6.html">Game Direct Link</a></td></tr>
<tr><td>6</td><td>8</td><td><a href="CELH-ProTeamRoster.php#HCEaglesMoravia">HC Eagles Moravia</a></td><td>3</td><td><a href="CELH-ProTeamRoster.php#HCLynxKladno">HC Lynx Kladno</a></td><td>1</td><td>W</td><td></td><td></td><td></td><td><a href="CELH-8.html">Game Direct Link</a></td></tr>
<tr><td>7</td><td>10</td><td><a href="CELH-ProTeamRoster.php#HCBlackEaglesSilesia">HC Black Eagles Silesia</a></td><td>3</td><td><a href="CELH-ProTeamRoster.php#HCEaglesMoravia">HC Eagles Moravia</a></td><td>2</td><td>L</td><td></td><td>*</td><td></td><td><a href="CELH-10.html">Game Direct Link</a></td></tr>
<tr><td>8</td><td>12</td><td><a href="CELH-ProTeamRoster.php#HCLionsBohemia">HC Lions Bohemia</a></td><td>2</td><td><a href="CELH-ProTeamRoster.php#HCEaglesMoravia">HC Eagles Moravia</a></td><td>3</td><td>W</td><td>*</td><td></td><td></td><td><a href="CELH-12.html">Game Direct Link</a></td></tr>
<tr><td>10</td><td>14</td><td><a href="CELH-ProTeamRoster.php#HCEaglesMoravia">HC Eagles Moravia</a></td><td>3</td><td><a href="CELH-ProTeamRoster.php#HCLionsBohemia">HC Lions Bohemia</a></td><td>2</td><td>W</td><td></td><td>*</td><td></td><td><a href="CELH-14.html">Game Direct Link</a></td></tr>
<tr><td>11</td><td>16</td><td><a href="CELH-ProTeamRoster.php#HCLionsBohemia">HC Lions Bohemia</a></td><td>3</td><td><a href="CELH-ProTeamRoster.php#HCEaglesMoravia">HC Eagles Moravia</a></td><td>2</td><td>L</td><td></td><td>*</td><td></td><td><a href="CELH-16.html">Game Direct Link</a></td></tr>
<tr><td>13</td><td>18</td><td><a href="CELH-ProTeamRoster.php#HCEaglesMoravia">HC Eagles Moravia</a></td><td>1</td><td><a href="CELH-ProTeamRoster.php#HCLionsBohemia">HC Lions Bohemia</a></td><td>2</td><td>L</td><td></td><td>*</td><td></td><td><a href="CELH-18.html">Game Direct Link</a></td></tr>
<tr><td>14</td><td>20</td><td><a href="CELH-ProTeamRoster.php#HCLionsBohemia">HC Lions Bohemia</a></td><td>1</td><td><a href="CELH-ProTeamRoster.php#HCEaglesMoravia">HC Eagles Moravia</a></td><td>3</td><td>W</td><td></td><td></td><td></td><td><a href="CELH-20.html">Game Direct Link</a></td></tr>
<tr><td>15</td><td>21</td><td><a href="CELH-ProTeamRoster.php#HCEaglesMoravia">HC Eagles Moravia</a></td><td>1</td><td><a href="CELH-ProTeamRoster.php#HCBlackEaglesSilesia">HC Black Eagles Silesia</a></td><td>2</td><td>L</td><td></td><td></td><td></td><td><a href="CELH-21.html">Game Direct Link</a></td></tr>
<tr><td>16</td><td>23</td><td><a href="CELH-ProTeamRoster.php#HCEaglesMoravia">HC Eagles Moravia</a></td><td>2</td><td><a href="CELH-ProTeamRoster.php#HCBlackEaglesSilesia">HC Black Eagles Silesia</a></td><td>3</td><td>L</td><td>*</td><td></td><td></td><td><a href="CELH-23.html">Game Direct Link</a></td></tr>
<tr><td>18</td><td>25</td><td><a href="CELH-ProTeamRoster.php#HCLynxKladno">HC Lynx Kladno</a></td><td>1</td><td><a href="CELH-ProTeamRoster.php#HCEaglesMoravia">HC Eagles Moravia</a></td><td>4</td><td>W</td><td></td><td></td><td></td><td><a href="CELH-25.html">Game Direct Link</a></td></tr>
<tr><td>19</td><td>27</td><td><a href="CELH-ProTeamRoster.php#HCEaglesMoravia">HC Eagles Moravia</a></td><td>1</td><td><a href="CELH-ProTeamRoster.php#HCLynxKladno">HC Lynx Kladno</a></td><td>0</td><td>W</td><td></td><td></td><td></td><td><a href="CELH-27.html">Game Direct Link</a></td></tr>
<tr><td>21</td><td>29</td><td><a href="CELH-ProTeamRoster.php#HCBlackEaglesSilesia">HC Black Eagles Silesia</a></td><td>2</td><td><a href="CELH-ProTeamRoster.php#HCEaglesMoravia">HC Eagles Moravia</a></td><td>3</td><td>W</td><td>*</td><td></td><td></td><td><a href="CELH-29.html">Game Direct Link</a></td></tr>
<tr><td>23</td><td>31</td><td><a href="CELH-ProTeamRoster.php#HCEaglesMoravia">HC Eagles Moravia</a></td><td>1</td><td><a href="CELH-ProTeamRoster.php#HCBlackEaglesSilesia">HC Black Eagles Silesia</a></td><td>2</td><td>L</td><td></td><td></td><td></td><td><a href="CELH-31.html">Game Direct Link</a></td></tr>
<tr><td>24</td><td>33</td><td><a href="CELH-ProTeamRoster.php#HCLynxKladno">HC Lynx Kladno</a></td><td>1</td><td><a href="CELH-ProTeamRoster.php#HCEaglesMoravia">HC Eagles Moravia</a></td><td>3</td><td>W</td><td></td><td></td><td></td><td><a href="CELH-33.html">Game Direct Link</a></td></tr>
<tr><td>27</td><td>36</td><td><a href="CELH-ProTeamRoster.php#HCEaglesMoravia">HC Eagles Moravia</a></td><td>1</td><td><a href="CELH-ProTeamRoster.php#HCLionsBohemia">HC Lions Bohemia</a></td><td>3</td><td>L</td><td></td><td></td><td></td><td><a href="CELH-36.html">Game Direct Link</a></td></tr>
<tr><td>28</td><td>37</td><td><a href="CELH-ProTeamRoster.php#HCEaglesMoravia">HC Eagles Moravia</a></td><td>4</td><td><a href="CELH-ProTeamRoster.php#HCLynxKladno">HC Lynx Kladno</a></td><td>3</td><td>W</td><td>*</td><td></td><td></td><td><a href="CELH-37.html">Game Direct Link</a></td></tr>
<tr><td>29</td><td>39</td><td><a href="CELH-ProTeamRoster.php#HCLynxKladno">HC Lynx Kladno</a></td><td>3</td><td><a href="CELH-ProTeamRoster.php#HCEaglesMoravia">HC Eagles Moravia</a></td><td>2</td><td>L</td><td></td><td></td><td></td><td><a href="CELH-39.html">Game Direct Link</a></td></tr>
<tr><td>30</td><td>41</td><td><a href="CELH-ProTeamRoster.php#HCBlackEaglesSilesia">HC Black Eagles Silesia</a></td><td>4</td><td><a href="CELH-ProTeamRoster.php#HCEaglesMoravia">HC Eagles Moravia</a></td><td>1</td><td>L</td><td></td><td></td><td></td><td><a href="CELH-41.html">Game Direct Link</a></td></tr>
<tr><td>33</td><td>44</td><td><a href="CELH-ProTeamRoster.php#HCEaglesMoravia">HC Eagles Moravia</a></td><td>3</td><td><a href="CELH-ProTeamRoster.php#HCLionsBohemia">HC Lions Bohemia</a></td><td>1</td><td>W</td><td></td><td></td><td></td><td><a href="CELH-44.html">Game Direct Link</a></td></tr>
<tr><td>34</td><td>45</td><td><a href="CELH-ProTeamRoster.php#HCBlackEaglesSilesia">HC Black Eagles Silesia</a></td><td>2</td><td><a href="CELH-ProTeamRoster.php#HCEaglesMoravia">HC Eagles Moravia</a></td><td>3</td><td>W</td><td>*</td><td></td><td></td><td><a href="CELH-45.html">Game Direct Link</a></td></tr>
<tr><td>36</td><td>47</td><td><a href="CELH-ProTeamRoster.php#HCEaglesMoravia">HC Eagles Moravia</a></td><td>3</td><td><a href="CELH-ProTeamRoster.php#HCBlackEaglesSilesia">HC Black Eagles Silesia</a></td><td>2</td><td>W</td><td>*</td><td></td><td></td><td><a href="CELH-47.html">Game Direct Link</a></td></tr>
<tr><td>38</td><td>49</td><td><a href="CELH-ProTeamRoster.php#HCEaglesMoravia">HC Eagles Moravia</a></td><td>3</td><td><a href="CELH-ProTeamRoster.php#HCBlackEaglesSilesia">HC Black Eagles Silesia</a></td><td>2</td><td>W</td><td></td><td></td><td></td><td><a href="CELH-49.html">Game Direct Link</a></td></tr>
<tr><td>39</td><td>50</td><td><a href="CELH-ProTeamRoster.php#HCEaglesMoravia">HC Eagles Moravia</a></td><td>2</td><td><a href="CELH-ProTeamRoster.php#HCLynxKladno">HC Lynx Kladno</a></td><td>3</td><td>L</td><td></td><td>*</td><td></td><td><a href="CELH-50.html">Game Direct Link</a></td></tr>
<tr><td>41</td><td>52</td><td><a href="CELH-ProTeamRoster.php#HCLynxKladno">HC Lynx Kladno</a></td><td>1</td><td><a href="CELH-ProTeamRoster.php#HCEaglesMoravia">HC Eagles Moravia</a></td><td>2</td><td>W</td><td></td><td></td><td></td><td><a href="CELH-52.html">Game Direct Link</a></td></tr>
<tr><td>44</td><td>55</td><td><a href="CELH-ProTeamRoster.php#HCLionsBohemia">HC Lions Bohemia</a></td><td>3</td><td><a href="CELH-ProTeamRoster.php#HCEaglesMoravia">HC Eagles Moravia</a></td><td>1</td><td>L</td><td></td><td></td><td></td><td><a href="CELH-55.html">Game Direct Link</a></td></tr>
<tr><td>46</td><td>57</td><td><a href="CELH-ProTeamRoster.php#HCBlackEaglesSilesia">HC Black Eagles Silesia</a></td><td>2</td><td><a href="CELH-ProTeamRoster.php#HCEaglesMoravia">HC Eagles Moravia</a></td><td>1</td><td>L</td><td>*</td><td></td><td></td><td><a href="CELH-57.html">Game Direct Link</a></td></tr>
<tr><td>47</td><td>58</td><td><a href="CELH-ProTeamRoster.php#HCEaglesMoravia">HC Eagles Moravia</a></td><td>1</td><td><a href="CELH-ProTeamRoster.php#HCLynxKladno">HC Lynx Kladno</a></td><td>2</td><td>L</td><td>*</td><td></td><td></td><td><a href="CELH-58.html">Game Direct Link</a></td></tr>
</table></div>
<h1 class="TeamSchedulePro_BOH"><a id="HCLionsBohemia">HC Lions Bohemia</a></h1>
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
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
<tr><td>1</td><td>2</td><td><a href="CELH-ProTeamRoster.php#HCEaglesMoravia">HC Eagles Moravia</a></td><td>3</td><td><a href="CELH-ProTeamRoster.php#HCLionsBohemia">HC Lions Bohemia</a></td><td>4</td><td>W</td><td></td><td>*</td><td></td><td><a href="CELH-2.html">Game Direct Link</a></td></tr>
<tr><td>4</td><td>5</td><td><a href="CELH-ProTeamRoster.php#HCBlackEaglesSilesia">HC Black Eagles Silesia</a></td><td>3</td><td><a href="CELH-ProTeamRoster.php#HCLionsBohemia">HC Lions Bohemia</a></td><td>2</td><td>L</td><td></td><td></td><td></td><td><a href="CELH-5.html">Game Direct Link</a></td></tr>
<tr><td>5</td><td>6</td><td><a href="CELH-ProTeamRoster.php#HCLionsBohemia">HC Lions Bohemia</a></td><td>0</td><td><a href="CELH-ProTeamRoster.php#HCEaglesMoravia">HC Eagles Moravia</a></td><td>1</td><td>L</td><td></td><td></td><td></td><td><a href="CELH-6.html">Game Direct Link</a></td></tr>
<tr><td>6</td><td>9</td><td><a href="CELH-ProTeamRoster.php#HCBlackEaglesSilesia">HC Black Eagles Silesia</a></td><td>1</td><td><a href="CELH-ProTeamRoster.php#HCLionsBohemia">HC Lions Bohemia</a></td><td>3</td><td>W</td><td></td><td></td><td></td><td><a href="CELH-9.html">Game Direct Link</a></td></tr>
<tr><td>7</td><td>11</td><td><a href="CELH-ProTeamRoster.php#HCLionsBohemia">HC Lions Bohemia</a></td><td>2</td><td><a href="CELH-ProTeamRoster.php#HCLynxKladno">HC Lynx Kladno</a></td><td>1</td><td>W</td><td>*</td><td></td><td></td><td><a href="CELH-11.html">Game Direct Link</a></td></tr>
<tr><td>8</td><td>12</td><td><a href="CELH-ProTeamRoster.php#HCLionsBohemia">HC Lions Bohemia</a></td><td>2</td><td><a href="CELH-ProTeamRoster.php#HCEaglesMoravia">HC Eagles Moravia</a></td><td>3</td><td>L</td><td>*</td><td></td><td></td><td><a href="CELH-12.html">Game Direct Link</a></td></tr>
<tr><td>10</td><td>14</td><td><a href="CELH-ProTeamRoster.php#HCEaglesMoravia">HC Eagles Moravia</a></td><td>3</td><td><a href="CELH-ProTeamRoster.php#HCLionsBohemia">HC Lions Bohemia</a></td><td>2</td><td>L</td><td></td><td>*</td><td></td><td><a href="CELH-14.html">Game Direct Link</a></td></tr>
<tr><td>11</td><td>16</td><td><a href="CELH-ProTeamRoster.php#HCLionsBohemia">HC Lions Bohemia</a></td><td>3</td><td><a href="CELH-ProTeamRoster.php#HCEaglesMoravia">HC Eagles Moravia</a></td><td>2</td><td>W</td><td></td><td>*</td><td></td><td><a href="CELH-16.html">Game Direct Link</a></td></tr>
<tr><td>13</td><td>18</td><td><a href="CELH-ProTeamRoster.php#HCEaglesMoravia">HC Eagles Moravia</a></td><td>1</td><td><a href="CELH-ProTeamRoster.php#HCLionsBohemia">HC Lions Bohemia</a></td><td>2</td><td>W</td><td></td><td>*</td><td></td><td><a href="CELH-18.html">Game Direct Link</a></td></tr>
<tr><td>14</td><td>20</td><td><a href="CELH-ProTeamRoster.php#HCLionsBohemia">HC Lions Bohemia</a></td><td>1</td><td><a href="CELH-ProTeamRoster.php#HCEaglesMoravia">HC Eagles Moravia</a></td><td>3</td><td>L</td><td></td><td></td><td></td><td><a href="CELH-20.html">Game Direct Link</a></td></tr>
<tr><td>16</td><td>22</td><td><a href="CELH-ProTeamRoster.php#HCLionsBohemia">HC Lions Bohemia</a></td><td>2</td><td><a href="CELH-ProTeamRoster.php#HCLynxKladno">HC Lynx Kladno</a></td><td>3</td><td>L</td><td></td><td></td><td></td><td><a href="CELH-22.html">Game Direct Link</a></td></tr>
<tr><td>17</td><td>24</td><td><a href="CELH-ProTeamRoster.php#HCLynxKladno">HC Lynx Kladno</a></td><td>2</td><td><a href="CELH-ProTeamRoster.php#HCLionsBohemia">HC Lions Bohemia</a></td><td>3</td><td>W</td><td></td><td>*</td><td></td><td><a href="CELH-24.html">Game Direct Link</a></td></tr>
<tr><td>19</td><td>26</td><td><a href="CELH-ProTeamRoster.php#HCLionsBohemia">HC Lions Bohemia</a></td><td>0</td><td><a href="CELH-ProTeamRoster.php#HCBlackEaglesSilesia">HC Black Eagles Silesia</a></td><td>1</td><td>L</td><td></td><td></td><td></td><td><a href="CELH-26.html">Game Direct Link</a></td></tr>
<tr><td>20</td><td>28</td><td><a href="CELH-ProTeamRoster.php#HCBlackEaglesSilesia">HC Black Eagles Silesia</a></td><td>0</td><td><a href="CELH-ProTeamRoster.php#HCLionsBohemia">HC Lions Bohemia</a></td><td>1</td><td>W</td><td></td><td></td><td></td><td><a href="CELH-28.html">Game Direct Link</a></td></tr>
<tr><td>22</td><td>30</td><td><a href="CELH-ProTeamRoster.php#HCLionsBohemia">HC Lions Bohemia</a></td><td>3</td><td><a href="CELH-ProTeamRoster.php#HCLynxKladno">HC Lynx Kladno</a></td><td>1</td><td>W</td><td></td><td></td><td></td><td><a href="CELH-30.html">Game Direct Link</a></td></tr>
<tr><td>23</td><td>32</td><td><a href="CELH-ProTeamRoster.php#HCLynxKladno">HC Lynx Kladno</a></td><td>2</td><td><a href="CELH-ProTeamRoster.php#HCLionsBohemia">HC Lions Bohemia</a></td><td>3</td><td>W</td><td></td><td></td><td></td><td><a href="CELH-32.html">Game Direct Link</a></td></tr>
<tr><td>25</td><td>34</td><td><a href="CELH-ProTeamRoster.php#HCLionsBohemia">HC Lions Bohemia</a></td><td>2</td><td><a href="CELH-ProTeamRoster.php#HCBlackEaglesSilesia">HC Black Eagles Silesia</a></td><td>1</td><td>W</td><td>*</td><td></td><td></td><td><a href="CELH-34.html">Game Direct Link</a></td></tr>
<tr><td>27</td><td>36</td><td><a href="CELH-ProTeamRoster.php#HCEaglesMoravia">HC Eagles Moravia</a></td><td>1</td><td><a href="CELH-ProTeamRoster.php#HCLionsBohemia">HC Lions Bohemia</a></td><td>3</td><td>W</td><td></td><td></td><td></td><td><a href="CELH-36.html">Game Direct Link</a></td></tr>
<tr><td>28</td><td>38</td><td><a href="CELH-ProTeamRoster.php#HCLionsBohemia">HC Lions Bohemia</a></td><td>2</td><td><a href="CELH-ProTeamRoster.php#HCBlackEaglesSilesia">HC Black Eagles Silesia</a></td><td>3</td><td>L</td><td></td><td>*</td><td></td><td><a href="CELH-38.html">Game Direct Link</a></td></tr>
<tr><td>29</td><td>40</td><td><a href="CELH-ProTeamRoster.php#HCBlackEaglesSilesia">HC Black Eagles Silesia</a></td><td>2</td><td><a href="CELH-ProTeamRoster.php#HCLionsBohemia">HC Lions Bohemia</a></td><td>1</td><td>L</td><td></td><td></td><td></td><td><a href="CELH-40.html">Game Direct Link</a></td></tr>
<tr><td>31</td><td>42</td><td><a href="CELH-ProTeamRoster.php#HCLionsBohemia">HC Lions Bohemia</a></td><td>2</td><td><a href="CELH-ProTeamRoster.php#HCLynxKladno">HC Lynx Kladno</a></td><td>1</td><td>W</td><td></td><td>*</td><td></td><td><a href="CELH-42.html">Game Direct Link</a></td></tr>
<tr><td>33</td><td>44</td><td><a href="CELH-ProTeamRoster.php#HCEaglesMoravia">HC Eagles Moravia</a></td><td>3</td><td><a href="CELH-ProTeamRoster.php#HCLionsBohemia">HC Lions Bohemia</a></td><td>1</td><td>L</td><td></td><td></td><td></td><td><a href="CELH-44.html">Game Direct Link</a></td></tr>
<tr><td>35</td><td>46</td><td><a href="CELH-ProTeamRoster.php#HCLionsBohemia">HC Lions Bohemia</a></td><td>3</td><td><a href="CELH-ProTeamRoster.php#HCLynxKladno">HC Lynx Kladno</a></td><td>1</td><td>W</td><td></td><td></td><td></td><td><a href="CELH-46.html">Game Direct Link</a></td></tr>
<tr><td>37</td><td>48</td><td><a href="CELH-ProTeamRoster.php#HCLynxKladno">HC Lynx Kladno</a></td><td>1</td><td><a href="CELH-ProTeamRoster.php#HCLionsBohemia">HC Lions Bohemia</a></td><td>3</td><td>W</td><td></td><td></td><td></td><td><a href="CELH-48.html">Game Direct Link</a></td></tr>
<tr><td>40</td><td>51</td><td><a href="CELH-ProTeamRoster.php#HCBlackEaglesSilesia">HC Black Eagles Silesia</a></td><td>3</td><td><a href="CELH-ProTeamRoster.php#HCLionsBohemia">HC Lions Bohemia</a></td><td>2</td><td>L</td><td></td><td></td><td></td><td><a href="CELH-51.html">Game Direct Link</a></td></tr>
<tr><td>42</td><td>53</td><td><a href="CELH-ProTeamRoster.php#HCLynxKladno">HC Lynx Kladno</a></td><td>2</td><td><a href="CELH-ProTeamRoster.php#HCLionsBohemia">HC Lions Bohemia</a></td><td>1</td><td>L</td><td></td><td></td><td></td><td><a href="CELH-53.html">Game Direct Link</a></td></tr>
<tr><td>43</td><td>54</td><td><a href="CELH-ProTeamRoster.php#HCLionsBohemia">HC Lions Bohemia</a></td><td>2</td><td><a href="CELH-ProTeamRoster.php#HCBlackEaglesSilesia">HC Black Eagles Silesia</a></td><td>1</td><td>W</td><td></td><td></td><td></td><td><a href="CELH-54.html">Game Direct Link</a></td></tr>
<tr><td>44</td><td>55</td><td><a href="CELH-ProTeamRoster.php#HCLionsBohemia">HC Lions Bohemia</a></td><td>3</td><td><a href="CELH-ProTeamRoster.php#HCEaglesMoravia">HC Eagles Moravia</a></td><td>1</td><td>W</td><td></td><td></td><td></td><td><a href="CELH-55.html">Game Direct Link</a></td></tr>
<tr><td>48</td><td>59</td><td><a href="CELH-ProTeamRoster.php#HCLynxKladno">HC Lynx Kladno</a></td><td>3</td><td><a href="CELH-ProTeamRoster.php#HCLionsBohemia">HC Lions Bohemia</a></td><td>2</td><td>L</td><td></td><td></td><td></td><td><a href="CELH-59.html">Game Direct Link</a></td></tr>
<tr><td>49</td><td>60</td><td><a href="CELH-ProTeamRoster.php#HCLionsBohemia">HC Lions Bohemia</a></td><td>1</td><td><a href="CELH-ProTeamRoster.php#HCBlackEaglesSilesia">HC Black Eagles Silesia</a></td><td>3</td><td>L</td><td></td><td></td><td></td><td><a href="CELH-60.html">Game Direct Link</a></td></tr>
</table></div>
<h1 class="TeamSchedulePro_KLD"><a id="HCLynxKladno">HC Lynx Kladno</a></h1>
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
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
<tr><td>1</td><td>1</td><td><a href="CELH-ProTeamRoster.php#HCLynxKladno">HC Lynx Kladno</a></td><td>2</td><td><a href="CELH-ProTeamRoster.php#HCBlackEaglesSilesia">HC Black Eagles Silesia</a></td><td>0</td><td>W</td><td></td><td></td><td></td><td><a href="CELH-1.html">Game Direct Link</a></td></tr>
<tr><td>2</td><td>3</td><td><a href="CELH-ProTeamRoster.php#HCLynxKladno">HC Lynx Kladno</a></td><td>2</td><td><a href="CELH-ProTeamRoster.php#HCEaglesMoravia">HC Eagles Moravia</a></td><td>3</td><td>L</td><td></td><td></td><td></td><td><a href="CELH-3.html">Game Direct Link</a></td></tr>
<tr><td>3</td><td>4</td><td><a href="CELH-ProTeamRoster.php#HCBlackEaglesSilesia">HC Black Eagles Silesia</a></td><td>1</td><td><a href="CELH-ProTeamRoster.php#HCLynxKladno">HC Lynx Kladno</a></td><td>3</td><td>W</td><td></td><td></td><td></td><td><a href="CELH-4.html">Game Direct Link</a></td></tr>
<tr><td>5</td><td>7</td><td><a href="CELH-ProTeamRoster.php#HCLynxKladno">HC Lynx Kladno</a></td><td>1</td><td><a href="CELH-ProTeamRoster.php#HCBlackEaglesSilesia">HC Black Eagles Silesia</a></td><td>2</td><td>L</td><td>*</td><td></td><td></td><td><a href="CELH-7.html">Game Direct Link</a></td></tr>
<tr><td>6</td><td>8</td><td><a href="CELH-ProTeamRoster.php#HCEaglesMoravia">HC Eagles Moravia</a></td><td>3</td><td><a href="CELH-ProTeamRoster.php#HCLynxKladno">HC Lynx Kladno</a></td><td>1</td><td>L</td><td></td><td></td><td></td><td><a href="CELH-8.html">Game Direct Link</a></td></tr>
<tr><td>7</td><td>11</td><td><a href="CELH-ProTeamRoster.php#HCLionsBohemia">HC Lions Bohemia</a></td><td>2</td><td><a href="CELH-ProTeamRoster.php#HCLynxKladno">HC Lynx Kladno</a></td><td>1</td><td>L</td><td>*</td><td></td><td></td><td><a href="CELH-11.html">Game Direct Link</a></td></tr>
<tr><td>9</td><td>13</td><td><a href="CELH-ProTeamRoster.php#HCLynxKladno">HC Lynx Kladno</a></td><td>1</td><td><a href="CELH-ProTeamRoster.php#HCBlackEaglesSilesia">HC Black Eagles Silesia</a></td><td>2</td><td>L</td><td></td><td></td><td></td><td><a href="CELH-13.html">Game Direct Link</a></td></tr>
<tr><td>11</td><td>15</td><td><a href="CELH-ProTeamRoster.php#HCLynxKladno">HC Lynx Kladno</a></td><td>2</td><td><a href="CELH-ProTeamRoster.php#HCBlackEaglesSilesia">HC Black Eagles Silesia</a></td><td>1</td><td>W</td><td>*</td><td></td><td></td><td><a href="CELH-15.html">Game Direct Link</a></td></tr>
<tr><td>12</td><td>17</td><td><a href="CELH-ProTeamRoster.php#HCBlackEaglesSilesia">HC Black Eagles Silesia</a></td><td>2</td><td><a href="CELH-ProTeamRoster.php#HCLynxKladno">HC Lynx Kladno</a></td><td>0</td><td>L</td><td></td><td></td><td></td><td><a href="CELH-17.html">Game Direct Link</a></td></tr>
<tr><td>13</td><td>19</td><td><a href="CELH-ProTeamRoster.php#HCBlackEaglesSilesia">HC Black Eagles Silesia</a></td><td>0</td><td><a href="CELH-ProTeamRoster.php#HCLynxKladno">HC Lynx Kladno</a></td><td>3</td><td>W</td><td></td><td></td><td></td><td><a href="CELH-19.html">Game Direct Link</a></td></tr>
<tr><td>16</td><td>22</td><td><a href="CELH-ProTeamRoster.php#HCLionsBohemia">HC Lions Bohemia</a></td><td>2</td><td><a href="CELH-ProTeamRoster.php#HCLynxKladno">HC Lynx Kladno</a></td><td>3</td><td>W</td><td></td><td></td><td></td><td><a href="CELH-22.html">Game Direct Link</a></td></tr>
<tr><td>17</td><td>24</td><td><a href="CELH-ProTeamRoster.php#HCLynxKladno">HC Lynx Kladno</a></td><td>2</td><td><a href="CELH-ProTeamRoster.php#HCLionsBohemia">HC Lions Bohemia</a></td><td>3</td><td>L</td><td></td><td>*</td><td></td><td><a href="CELH-24.html">Game Direct Link</a></td></tr>
<tr><td>18</td><td>25</td><td><a href="CELH-ProTeamRoster.php#HCLynxKladno">HC Lynx Kladno</a></td><td>1</td><td><a href="CELH-ProTeamRoster.php#HCEaglesMoravia">HC Eagles Moravia</a></td><td>4</td><td>L</td><td></td><td></td><td></td><td><a href="CELH-25.html">Game Direct Link</a></td></tr>
<tr><td>19</td><td>27</td><td><a href="CELH-ProTeamRoster.php#HCEaglesMoravia">HC Eagles Moravia</a></td><td>1</td><td><a href="CELH-ProTeamRoster.php#HCLynxKladno">HC Lynx Kladno</a></td><td>0</td><td>L</td><td></td><td></td><td></td><td><a href="CELH-27.html">Game Direct Link</a></td></tr>
<tr><td>22</td><td>30</td><td><a href="CELH-ProTeamRoster.php#HCLionsBohemia">HC Lions Bohemia</a></td><td>3</td><td><a href="CELH-ProTeamRoster.php#HCLynxKladno">HC Lynx Kladno</a></td><td>1</td><td>L</td><td></td><td></td><td></td><td><a href="CELH-30.html">Game Direct Link</a></td></tr>
<tr><td>23</td><td>32</td><td><a href="CELH-ProTeamRoster.php#HCLynxKladno">HC Lynx Kladno</a></td><td>2</td><td><a href="CELH-ProTeamRoster.php#HCLionsBohemia">HC Lions Bohemia</a></td><td>3</td><td>L</td><td></td><td></td><td></td><td><a href="CELH-32.html">Game Direct Link</a></td></tr>
<tr><td>24</td><td>33</td><td><a href="CELH-ProTeamRoster.php#HCLynxKladno">HC Lynx Kladno</a></td><td>1</td><td><a href="CELH-ProTeamRoster.php#HCEaglesMoravia">HC Eagles Moravia</a></td><td>3</td><td>L</td><td></td><td></td><td></td><td><a href="CELH-33.html">Game Direct Link</a></td></tr>
<tr><td>26</td><td>35</td><td><a href="CELH-ProTeamRoster.php#HCBlackEaglesSilesia">HC Black Eagles Silesia</a></td><td>2</td><td><a href="CELH-ProTeamRoster.php#HCLynxKladno">HC Lynx Kladno</a></td><td>1</td><td>L</td><td></td><td></td><td></td><td><a href="CELH-35.html">Game Direct Link</a></td></tr>
<tr><td>28</td><td>37</td><td><a href="CELH-ProTeamRoster.php#HCEaglesMoravia">HC Eagles Moravia</a></td><td>4</td><td><a href="CELH-ProTeamRoster.php#HCLynxKladno">HC Lynx Kladno</a></td><td>3</td><td>L</td><td>*</td><td></td><td></td><td><a href="CELH-37.html">Game Direct Link</a></td></tr>
<tr><td>29</td><td>39</td><td><a href="CELH-ProTeamRoster.php#HCLynxKladno">HC Lynx Kladno</a></td><td>3</td><td><a href="CELH-ProTeamRoster.php#HCEaglesMoravia">HC Eagles Moravia</a></td><td>2</td><td>W</td><td></td><td></td><td></td><td><a href="CELH-39.html">Game Direct Link</a></td></tr>
<tr><td>31</td><td>42</td><td><a href="CELH-ProTeamRoster.php#HCLionsBohemia">HC Lions Bohemia</a></td><td>2</td><td><a href="CELH-ProTeamRoster.php#HCLynxKladno">HC Lynx Kladno</a></td><td>1</td><td>L</td><td></td><td>*</td><td></td><td><a href="CELH-42.html">Game Direct Link</a></td></tr>
<tr><td>32</td><td>43</td><td><a href="CELH-ProTeamRoster.php#HCLynxKladno">HC Lynx Kladno</a></td><td>1</td><td><a href="CELH-ProTeamRoster.php#HCBlackEaglesSilesia">HC Black Eagles Silesia</a></td><td>3</td><td>L</td><td></td><td></td><td></td><td><a href="CELH-43.html">Game Direct Link</a></td></tr>
<tr><td>35</td><td>46</td><td><a href="CELH-ProTeamRoster.php#HCLionsBohemia">HC Lions Bohemia</a></td><td>3</td><td><a href="CELH-ProTeamRoster.php#HCLynxKladno">HC Lynx Kladno</a></td><td>1</td><td>L</td><td></td><td></td><td></td><td><a href="CELH-46.html">Game Direct Link</a></td></tr>
<tr><td>37</td><td>48</td><td><a href="CELH-ProTeamRoster.php#HCLynxKladno">HC Lynx Kladno</a></td><td>1</td><td><a href="CELH-ProTeamRoster.php#HCLionsBohemia">HC Lions Bohemia</a></td><td>3</td><td>L</td><td></td><td></td><td></td><td><a href="CELH-48.html">Game Direct Link</a></td></tr>
<tr><td>39</td><td>50</td><td><a href="CELH-ProTeamRoster.php#HCEaglesMoravia">HC Eagles Moravia</a></td><td>2</td><td><a href="CELH-ProTeamRoster.php#HCLynxKladno">HC Lynx Kladno</a></td><td>3</td><td>W</td><td></td><td>*</td><td></td><td><a href="CELH-50.html">Game Direct Link</a></td></tr>
<tr><td>41</td><td>52</td><td><a href="CELH-ProTeamRoster.php#HCLynxKladno">HC Lynx Kladno</a></td><td>1</td><td><a href="CELH-ProTeamRoster.php#HCEaglesMoravia">HC Eagles Moravia</a></td><td>2</td><td>L</td><td></td><td></td><td></td><td><a href="CELH-52.html">Game Direct Link</a></td></tr>
<tr><td>42</td><td>53</td><td><a href="CELH-ProTeamRoster.php#HCLynxKladno">HC Lynx Kladno</a></td><td>2</td><td><a href="CELH-ProTeamRoster.php#HCLionsBohemia">HC Lions Bohemia</a></td><td>1</td><td>W</td><td></td><td></td><td></td><td><a href="CELH-53.html">Game Direct Link</a></td></tr>
<tr><td>45</td><td>56</td><td><a href="CELH-ProTeamRoster.php#HCBlackEaglesSilesia">HC Black Eagles Silesia</a></td><td>2</td><td><a href="CELH-ProTeamRoster.php#HCLynxKladno">HC Lynx Kladno</a></td><td>1</td><td>L</td><td></td><td></td><td></td><td><a href="CELH-56.html">Game Direct Link</a></td></tr>
<tr><td>47</td><td>58</td><td><a href="CELH-ProTeamRoster.php#HCEaglesMoravia">HC Eagles Moravia</a></td><td>1</td><td><a href="CELH-ProTeamRoster.php#HCLynxKladno">HC Lynx Kladno</a></td><td>2</td><td>W</td><td>*</td><td></td><td></td><td><a href="CELH-58.html">Game Direct Link</a></td></tr>
<tr><td>48</td><td>59</td><td><a href="CELH-ProTeamRoster.php#HCLynxKladno">HC Lynx Kladno</a></td><td>3</td><td><a href="CELH-ProTeamRoster.php#HCLionsBohemia">HC Lions Bohemia</a></td><td>2</td><td>W</td><td></td><td></td><td></td><td><a href="CELH-59.html">Game Direct Link</a></td></tr>
</table></div>
<?php include "Footer.php";?>
