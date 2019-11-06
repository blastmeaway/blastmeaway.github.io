<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>CELH - Team Records</title>
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
$Active = 5; /* Show Webpage Top Menu */
include "Menu.php";?>
<div class="STHSTopLink"><a id="STHSRosterTop"></a> <a href="#HCBlackEaglesSilesia">HC Black Eagles Silesia</a> | <a href="#HCEaglesMoravia">HC Eagles Moravia</a> | <a href="#HCLionsBohemia">HC Lions Bohemia</a> | <a href="#HCLynxKladno">HC Lynx Kladno</a> | <a href="javascript:STHS_JS_CloseAll('');">Close All Team View</a> | <a href="javascript:STHS_JS_OpenAll('');">Open All Team View</a>
</div>
<h1 class="TeamRecordsPro_SBE"><a id="HCBlackEaglesSilesia">HC Black Eagles Silesia</a></h1>
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
<br /><table class="STHSRecordTable">
<tr><td colspan="5"><b>Most Goals in 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>1</td><td>41</td><td>4</td><td><a href="CELH-PLF-41.html">Game Direct Link</a></td></tr><tr><td>2</td><td>1</td><td>5</td><td>3</td><td><a href="CELH-PLF-5.html">Game Direct Link</a></td></tr><tr><td>3</td><td>1</td><td>10</td><td>3</td><td><a href="CELH-PLF-10.html">Game Direct Link</a></td></tr><tr><td>4</td><td>1</td><td>23</td><td>3</td><td><a href="CELH-PLF-23.html">Game Direct Link</a></td></tr><tr><td>5</td><td>1</td><td>38</td><td>3</td><td><a href="CELH-PLF-38.html">Game Direct Link</a></td></tr><tr><td>6</td><td>1</td><td>43</td><td>3</td><td><a href="CELH-PLF-43.html">Game Direct Link</a></td></tr><tr><td>7</td><td>1</td><td>51</td><td>3</td><td><a href="CELH-PLF-51.html">Game Direct Link</a></td></tr><tr><td>8</td><td>1</td><td>60</td><td>3</td><td><a href="CELH-PLF-60.html">Game Direct Link</a></td></tr><tr><td>9</td><td>1</td><td>7</td><td>2</td><td><a href="CELH-PLF-7.html">Game Direct Link</a></td></tr><tr><td>10</td><td>1</td><td>13</td><td>2</td><td><a href="CELH-PLF-13.html">Game Direct Link</a></td></tr>
<tr><td colspan="5"><b>Most Goals in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>1</td><td>0</td><td>57</td><td></td></tr>

<tr><td colspan="5"><b>Less Goal in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>1</td><td>0</td><td>57</td><td></td></tr>

<tr><td colspan="5"><b>Most Goals Against in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>1</td><td>0</td><td>51</td><td></td></tr>

<tr><td colspan="5"><b>Less Goal Against in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>1</td><td>0</td><td>51</td><td></td></tr>

<tr><td colspan="5"><b>Most Assists in 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>1</td><td>23</td><td>6</td><td><a href="CELH-PLF-23.html">Game Direct Link</a></td></tr><tr><td>2</td><td>1</td><td>41</td><td>6</td><td><a href="CELH-PLF-41.html">Game Direct Link</a></td></tr><tr><td>3</td><td>1</td><td>5</td><td>5</td><td><a href="CELH-PLF-5.html">Game Direct Link</a></td></tr><tr><td>4</td><td>1</td><td>13</td><td>4</td><td><a href="CELH-PLF-13.html">Game Direct Link</a></td></tr><tr><td>5</td><td>1</td><td>31</td><td>4</td><td><a href="CELH-PLF-31.html">Game Direct Link</a></td></tr><tr><td>6</td><td>1</td><td>43</td><td>4</td><td><a href="CELH-PLF-43.html">Game Direct Link</a></td></tr><tr><td>7</td><td>1</td><td>49</td><td>4</td><td><a href="CELH-PLF-49.html">Game Direct Link</a></td></tr><tr><td>8</td><td>1</td><td>56</td><td>4</td><td><a href="CELH-PLF-56.html">Game Direct Link</a></td></tr><tr><td>9</td><td>1</td><td>60</td><td>4</td><td><a href="CELH-PLF-60.html">Game Direct Link</a></td></tr><tr><td>10</td><td>1</td><td>7</td><td>3</td><td><a href="CELH-PLF-7.html">Game Direct Link</a></td></tr>
<tr><td colspan="5"><b>Most Assists in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>1</td><td>0</td><td>83</td><td></td></tr>

<tr><td colspan="5"><b>Less Assist in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>1</td><td>0</td><td>83</td><td></td></tr>

<tr><td colspan="5"><b>Most Game Points in 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>1</td><td>41</td><td>10</td><td><a href="CELH-PLF-41.html">Game Direct Link</a></td></tr><tr><td>2</td><td>1</td><td>23</td><td>9</td><td><a href="CELH-PLF-23.html">Game Direct Link</a></td></tr><tr><td>3</td><td>1</td><td>5</td><td>8</td><td><a href="CELH-PLF-5.html">Game Direct Link</a></td></tr><tr><td>4</td><td>1</td><td>43</td><td>7</td><td><a href="CELH-PLF-43.html">Game Direct Link</a></td></tr><tr><td>5</td><td>1</td><td>60</td><td>7</td><td><a href="CELH-PLF-60.html">Game Direct Link</a></td></tr><tr><td>6</td><td>1</td><td>13</td><td>6</td><td><a href="CELH-PLF-13.html">Game Direct Link</a></td></tr><tr><td>7</td><td>1</td><td>31</td><td>6</td><td><a href="CELH-PLF-31.html">Game Direct Link</a></td></tr><tr><td>8</td><td>1</td><td>38</td><td>6</td><td><a href="CELH-PLF-38.html">Game Direct Link</a></td></tr><tr><td>9</td><td>1</td><td>49</td><td>6</td><td><a href="CELH-PLF-49.html">Game Direct Link</a></td></tr><tr><td>10</td><td>1</td><td>51</td><td>6</td><td><a href="CELH-PLF-51.html">Game Direct Link</a></td></tr>
<tr><td colspan="5"><b>Most Game Points in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>1</td><td>0</td><td>140</td><td></td></tr>

<tr><td colspan="5"><b>Less Game Point In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>1</td><td>0</td><td>140</td><td></td></tr>

<tr><td colspan="5"><b>Most Shots In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>1</td><td>35</td><td>34</td><td><a href="CELH-PLF-35.html">Game Direct Link</a></td></tr><tr><td>2</td><td>1</td><td>7</td><td>31</td><td><a href="CELH-PLF-7.html">Game Direct Link</a></td></tr><tr><td>3</td><td>1</td><td>51</td><td>30</td><td><a href="CELH-PLF-51.html">Game Direct Link</a></td></tr><tr><td>4</td><td>1</td><td>23</td><td>29</td><td><a href="CELH-PLF-23.html">Game Direct Link</a></td></tr><tr><td>5</td><td>1</td><td>38</td><td>29</td><td><a href="CELH-PLF-38.html">Game Direct Link</a></td></tr><tr><td>6</td><td>1</td><td>47</td><td>29</td><td><a href="CELH-PLF-47.html">Game Direct Link</a></td></tr><tr><td>7</td><td>1</td><td>15</td><td>28</td><td><a href="CELH-PLF-15.html">Game Direct Link</a></td></tr><tr><td>8</td><td>1</td><td>34</td><td>28</td><td><a href="CELH-PLF-34.html">Game Direct Link</a></td></tr><tr><td>9</td><td>1</td><td>57</td><td>28</td><td><a href="CELH-PLF-57.html">Game Direct Link</a></td></tr><tr><td>10</td><td>1</td><td>10</td><td>27</td><td><a href="CELH-PLF-10.html">Game Direct Link</a></td></tr>
<tr><td colspan="5"><b>Most Shots In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>1</td><td>0</td><td>742</td><td></td></tr>

<tr><td colspan="5"><b>Less Shots In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>1</td><td>0</td><td>742</td><td></td></tr>

<tr><td colspan="5"><b>Most Shots Blocked In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>1</td><td>49</td><td>20</td><td><a href="CELH-PLF-49.html">Game Direct Link</a></td></tr><tr><td>2</td><td>1</td><td>5</td><td>18</td><td><a href="CELH-PLF-5.html">Game Direct Link</a></td></tr><tr><td>3</td><td>1</td><td>9</td><td>18</td><td><a href="CELH-PLF-9.html">Game Direct Link</a></td></tr><tr><td>4</td><td>1</td><td>47</td><td>14</td><td><a href="CELH-PLF-47.html">Game Direct Link</a></td></tr><tr><td>5</td><td>1</td><td>28</td><td>13</td><td><a href="CELH-PLF-28.html">Game Direct Link</a></td></tr><tr><td>6</td><td>1</td><td>51</td><td>12</td><td><a href="CELH-PLF-51.html">Game Direct Link</a></td></tr><tr><td>7</td><td>1</td><td>21</td><td>11</td><td><a href="CELH-PLF-21.html">Game Direct Link</a></td></tr><tr><td>8</td><td>1</td><td>26</td><td>11</td><td><a href="CELH-PLF-26.html">Game Direct Link</a></td></tr><tr><td>9</td><td>1</td><td>10</td><td>10</td><td><a href="CELH-PLF-10.html">Game Direct Link</a></td></tr><tr><td>10</td><td>1</td><td>15</td><td>10</td><td><a href="CELH-PLF-15.html">Game Direct Link</a></td></tr>
<tr><td colspan="5"><b>Most Shots Blocked In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>1</td><td>0</td><td>276</td><td></td></tr>

<tr><td colspan="5"><b>Less Shots Block In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>1</td><td>0</td><td>276</td><td></td></tr>

<tr><td colspan="5"><b>Most Shots Against In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>1</td><td>0</td><td>892</td><td></td></tr>

<tr><td colspan="5"><b>Less Shots Against In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>1</td><td>0</td><td>892</td><td></td></tr>

<tr><td colspan="5"><b>Most Pim In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>1</td><td>38</td><td>14</td><td><a href="CELH-PLF-38.html">Game Direct Link</a></td></tr><tr><td>2</td><td>1</td><td>29</td><td>13</td><td><a href="CELH-PLF-29.html">Game Direct Link</a></td></tr><tr><td>3</td><td>1</td><td>13</td><td>12</td><td><a href="CELH-PLF-13.html">Game Direct Link</a></td></tr><tr><td>4</td><td>1</td><td>23</td><td>12</td><td><a href="CELH-PLF-23.html">Game Direct Link</a></td></tr><tr><td>5</td><td>1</td><td>45</td><td>12</td><td><a href="CELH-PLF-45.html">Game Direct Link</a></td></tr><tr><td>6</td><td>1</td><td>1</td><td>8</td><td><a href="CELH-PLF-1.html">Game Direct Link</a></td></tr><tr><td>7</td><td>1</td><td>5</td><td>8</td><td><a href="CELH-PLF-5.html">Game Direct Link</a></td></tr><tr><td>8</td><td>1</td><td>19</td><td>8</td><td><a href="CELH-PLF-19.html">Game Direct Link</a></td></tr><tr><td>9</td><td>1</td><td>43</td><td>8</td><td><a href="CELH-PLF-43.html">Game Direct Link</a></td></tr><tr><td>10</td><td>1</td><td>49</td><td>8</td><td><a href="CELH-PLF-49.html">Game Direct Link</a></td></tr>
<tr><td colspan="5"><b>Most Pim In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>1</td><td>0</td><td>201</td><td></td></tr>

<tr><td colspan="5"><b>Less Pim In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>1</td><td>0</td><td>201</td><td></td></tr>

<tr><td colspan="5"><b>Most Hits In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>1</td><td>31</td><td>27</td><td><a href="CELH-PLF-31.html">Game Direct Link</a></td></tr><tr><td>2</td><td>1</td><td>26</td><td>26</td><td><a href="CELH-PLF-26.html">Game Direct Link</a></td></tr><tr><td>3</td><td>1</td><td>35</td><td>25</td><td><a href="CELH-PLF-35.html">Game Direct Link</a></td></tr><tr><td>4</td><td>1</td><td>47</td><td>25</td><td><a href="CELH-PLF-47.html">Game Direct Link</a></td></tr><tr><td>5</td><td>1</td><td>15</td><td>23</td><td><a href="CELH-PLF-15.html">Game Direct Link</a></td></tr><tr><td>6</td><td>1</td><td>23</td><td>23</td><td><a href="CELH-PLF-23.html">Game Direct Link</a></td></tr><tr><td>7</td><td>1</td><td>7</td><td>22</td><td><a href="CELH-PLF-7.html">Game Direct Link</a></td></tr><tr><td>8</td><td>1</td><td>17</td><td>22</td><td><a href="CELH-PLF-17.html">Game Direct Link</a></td></tr><tr><td>9</td><td>1</td><td>38</td><td>22</td><td><a href="CELH-PLF-38.html">Game Direct Link</a></td></tr><tr><td>10</td><td>1</td><td>60</td><td>22</td><td><a href="CELH-PLF-60.html">Game Direct Link</a></td></tr>
<tr><td colspan="5"><b>Most Hits In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>1</td><td>0</td><td>544</td><td></td></tr>

<tr><td colspan="5"><b>Less Hit In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>1</td><td>0</td><td>544</td><td></td></tr>

<tr><td colspan="5"><b>Most Empty Net Goal In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>1</td><td>0</td><td>1</td><td></td></tr>

<tr><td colspan="5"><b>Best PP In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>1</td><td>0</td><td>25.90%</td><td></td></tr>

<tr><td colspan="5"><b>Best PK In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>1</td><td>0</td><td>75.00%</td><td></td></tr>

<tr><td colspan="5"><b>Worse PP In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>1</td><td>0</td><td>25.90%</td><td></td></tr>

<tr><td colspan="5"><b>Worse PK In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>1</td><td>0</td><td>75.00%</td><td></td></tr>

<tr><td colspan="5"><b>Most Win In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>1</td><td>0</td><td>18</td><td></td></tr>

<tr><td colspan="5"><b>Less Win In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>1</td><td>0</td><td>18</td><td></td></tr>

<tr><td colspan="5"><b>Most Lost In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>1</td><td>0</td><td>12</td><td></td></tr>

<tr><td colspan="5"><b>Less Lost In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>1</td><td>0</td><td>12</td><td></td></tr>

<tr><td colspan="5"><b>Most Point In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>1</td><td>0</td><td>54</td><td></td></tr>

<tr><td colspan="5"><b>Less Points In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>1</td><td>0</td><td>54</td><td></td></tr>

<tr><td colspan="5"><b>Most Win Home In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>1</td><td>0</td><td>6</td><td></td></tr>

<tr><td colspan="5"><b>Most Win Visitor In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>1</td><td>0</td><td>7</td><td></td></tr>

</table></div>
<h1 class="TeamRecordsPro_MOR"><a id="HCEaglesMoravia">HC Eagles Moravia</a></h1>
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
<br /><table class="STHSRecordTable">
<tr><td colspan="5"><b>Most Goals in 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>1</td><td>25</td><td>4</td><td><a href="CELH-PLF-25.html">Game Direct Link</a></td></tr><tr><td>2</td><td>1</td><td>37</td><td>4</td><td><a href="CELH-PLF-37.html">Game Direct Link</a></td></tr><tr><td>3</td><td>1</td><td>2</td><td>3</td><td><a href="CELH-PLF-2.html">Game Direct Link</a></td></tr><tr><td>4</td><td>1</td><td>3</td><td>3</td><td><a href="CELH-PLF-3.html">Game Direct Link</a></td></tr><tr><td>5</td><td>1</td><td>8</td><td>3</td><td><a href="CELH-PLF-8.html">Game Direct Link</a></td></tr><tr><td>6</td><td>1</td><td>12</td><td>3</td><td><a href="CELH-PLF-12.html">Game Direct Link</a></td></tr><tr><td>7</td><td>1</td><td>14</td><td>3</td><td><a href="CELH-PLF-14.html">Game Direct Link</a></td></tr><tr><td>8</td><td>1</td><td>20</td><td>3</td><td><a href="CELH-PLF-20.html">Game Direct Link</a></td></tr><tr><td>9</td><td>1</td><td>29</td><td>3</td><td><a href="CELH-PLF-29.html">Game Direct Link</a></td></tr><tr><td>10</td><td>1</td><td>33</td><td>3</td><td><a href="CELH-PLF-33.html">Game Direct Link</a></td></tr>
<tr><td colspan="5"><b>Most Goals in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>1</td><td>0</td><td>66</td><td></td></tr>

<tr><td colspan="5"><b>Less Goal in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>1</td><td>0</td><td>66</td><td></td></tr>

<tr><td colspan="5"><b>Most Goals Against in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>1</td><td>0</td><td>62</td><td></td></tr>

<tr><td colspan="5"><b>Less Goal Against in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>1</td><td>0</td><td>62</td><td></td></tr>

<tr><td colspan="5"><b>Most Assists in 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>1</td><td>37</td><td>8</td><td><a href="CELH-PLF-37.html">Game Direct Link</a></td></tr><tr><td>2</td><td>1</td><td>25</td><td>7</td><td><a href="CELH-PLF-25.html">Game Direct Link</a></td></tr><tr><td>3</td><td>1</td><td>3</td><td>6</td><td><a href="CELH-PLF-3.html">Game Direct Link</a></td></tr><tr><td>4</td><td>1</td><td>12</td><td>6</td><td><a href="CELH-PLF-12.html">Game Direct Link</a></td></tr><tr><td>5</td><td>1</td><td>20</td><td>6</td><td><a href="CELH-PLF-20.html">Game Direct Link</a></td></tr><tr><td>6</td><td>1</td><td>29</td><td>6</td><td><a href="CELH-PLF-29.html">Game Direct Link</a></td></tr><tr><td>7</td><td>1</td><td>45</td><td>6</td><td><a href="CELH-PLF-45.html">Game Direct Link</a></td></tr><tr><td>8</td><td>1</td><td>2</td><td>5</td><td><a href="CELH-PLF-2.html">Game Direct Link</a></td></tr><tr><td>9</td><td>1</td><td>8</td><td>5</td><td><a href="CELH-PLF-8.html">Game Direct Link</a></td></tr><tr><td>10</td><td>1</td><td>33</td><td>5</td><td><a href="CELH-PLF-33.html">Game Direct Link</a></td></tr>
<tr><td colspan="5"><b>Most Assists in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>1</td><td>0</td><td>119</td><td></td></tr>

<tr><td colspan="5"><b>Less Assist in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>1</td><td>0</td><td>119</td><td></td></tr>

<tr><td colspan="5"><b>Most Game Points in 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>1</td><td>37</td><td>12</td><td><a href="CELH-PLF-37.html">Game Direct Link</a></td></tr><tr><td>2</td><td>1</td><td>25</td><td>11</td><td><a href="CELH-PLF-25.html">Game Direct Link</a></td></tr><tr><td>3</td><td>1</td><td>3</td><td>9</td><td><a href="CELH-PLF-3.html">Game Direct Link</a></td></tr><tr><td>4</td><td>1</td><td>12</td><td>9</td><td><a href="CELH-PLF-12.html">Game Direct Link</a></td></tr><tr><td>5</td><td>1</td><td>20</td><td>9</td><td><a href="CELH-PLF-20.html">Game Direct Link</a></td></tr><tr><td>6</td><td>1</td><td>29</td><td>9</td><td><a href="CELH-PLF-29.html">Game Direct Link</a></td></tr><tr><td>7</td><td>1</td><td>45</td><td>9</td><td><a href="CELH-PLF-45.html">Game Direct Link</a></td></tr><tr><td>8</td><td>1</td><td>2</td><td>8</td><td><a href="CELH-PLF-2.html">Game Direct Link</a></td></tr><tr><td>9</td><td>1</td><td>8</td><td>8</td><td><a href="CELH-PLF-8.html">Game Direct Link</a></td></tr><tr><td>10</td><td>1</td><td>33</td><td>8</td><td><a href="CELH-PLF-33.html">Game Direct Link</a></td></tr>
<tr><td colspan="5"><b>Most Game Points in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>1</td><td>0</td><td>185</td><td></td></tr>

<tr><td colspan="5"><b>Less Game Point In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>1</td><td>0</td><td>185</td><td></td></tr>

<tr><td colspan="5"><b>Most Shots In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>1</td><td>37</td><td>42</td><td><a href="CELH-PLF-37.html">Game Direct Link</a></td></tr><tr><td>2</td><td>1</td><td>2</td><td>40</td><td><a href="CELH-PLF-2.html">Game Direct Link</a></td></tr><tr><td>3</td><td>1</td><td>33</td><td>39</td><td><a href="CELH-PLF-33.html">Game Direct Link</a></td></tr><tr><td>4</td><td>1</td><td>12</td><td>37</td><td><a href="CELH-PLF-12.html">Game Direct Link</a></td></tr><tr><td>5</td><td>1</td><td>49</td><td>37</td><td><a href="CELH-PLF-49.html">Game Direct Link</a></td></tr><tr><td>6</td><td>1</td><td>20</td><td>36</td><td><a href="CELH-PLF-20.html">Game Direct Link</a></td></tr><tr><td>7</td><td>1</td><td>50</td><td>36</td><td><a href="CELH-PLF-50.html">Game Direct Link</a></td></tr><tr><td>8</td><td>1</td><td>10</td><td>34</td><td><a href="CELH-PLF-10.html">Game Direct Link</a></td></tr><tr><td>9</td><td>1</td><td>23</td><td>34</td><td><a href="CELH-PLF-23.html">Game Direct Link</a></td></tr><tr><td>10</td><td>1</td><td>27</td><td>34</td><td><a href="CELH-PLF-27.html">Game Direct Link</a></td></tr>
<tr><td colspan="5"><b>Most Shots In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>1</td><td>0</td><td>960</td><td></td></tr>

<tr><td colspan="5"><b>Less Shots In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>1</td><td>0</td><td>960</td><td></td></tr>

<tr><td colspan="5"><b>Most Shots Blocked In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>1</td><td>8</td><td>17</td><td><a href="CELH-PLF-8.html">Game Direct Link</a></td></tr><tr><td>2</td><td>1</td><td>58</td><td>14</td><td><a href="CELH-PLF-58.html">Game Direct Link</a></td></tr><tr><td>3</td><td>1</td><td>44</td><td>13</td><td><a href="CELH-PLF-44.html">Game Direct Link</a></td></tr><tr><td>4</td><td>1</td><td>55</td><td>13</td><td><a href="CELH-PLF-55.html">Game Direct Link</a></td></tr><tr><td>5</td><td>1</td><td>21</td><td>12</td><td><a href="CELH-PLF-21.html">Game Direct Link</a></td></tr><tr><td>6</td><td>1</td><td>27</td><td>12</td><td><a href="CELH-PLF-27.html">Game Direct Link</a></td></tr><tr><td>7</td><td>1</td><td>57</td><td>12</td><td><a href="CELH-PLF-57.html">Game Direct Link</a></td></tr><tr><td>8</td><td>1</td><td>23</td><td>11</td><td><a href="CELH-PLF-23.html">Game Direct Link</a></td></tr><tr><td>9</td><td>1</td><td>25</td><td>11</td><td><a href="CELH-PLF-25.html">Game Direct Link</a></td></tr><tr><td>10</td><td>1</td><td>52</td><td>11</td><td><a href="CELH-PLF-52.html">Game Direct Link</a></td></tr>
<tr><td colspan="5"><b>Most Shots Blocked In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>1</td><td>0</td><td>272</td><td></td></tr>

<tr><td colspan="5"><b>Less Shots Block In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>1</td><td>0</td><td>272</td><td></td></tr>

<tr><td colspan="5"><b>Most Shots Against In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>1</td><td>0</td><td>820</td><td></td></tr>

<tr><td colspan="5"><b>Less Shots Against In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>1</td><td>0</td><td>820</td><td></td></tr>

<tr><td colspan="5"><b>Most Pim In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>1</td><td>29</td><td>23</td><td><a href="CELH-PLF-29.html">Game Direct Link</a></td></tr><tr><td>2</td><td>1</td><td>41</td><td>18</td><td><a href="CELH-PLF-41.html">Game Direct Link</a></td></tr><tr><td>3</td><td>1</td><td>12</td><td>12</td><td><a href="CELH-PLF-12.html">Game Direct Link</a></td></tr><tr><td>4</td><td>1</td><td>14</td><td>12</td><td><a href="CELH-PLF-14.html">Game Direct Link</a></td></tr><tr><td>5</td><td>1</td><td>31</td><td>12</td><td><a href="CELH-PLF-31.html">Game Direct Link</a></td></tr><tr><td>6</td><td>1</td><td>50</td><td>12</td><td><a href="CELH-PLF-50.html">Game Direct Link</a></td></tr><tr><td>7</td><td>1</td><td>6</td><td>10</td><td><a href="CELH-PLF-6.html">Game Direct Link</a></td></tr><tr><td>8</td><td>1</td><td>16</td><td>10</td><td><a href="CELH-PLF-16.html">Game Direct Link</a></td></tr><tr><td>9</td><td>1</td><td>45</td><td>10</td><td><a href="CELH-PLF-45.html">Game Direct Link</a></td></tr><tr><td>10</td><td>1</td><td>21</td><td>8</td><td><a href="CELH-PLF-21.html">Game Direct Link</a></td></tr>
<tr><td colspan="5"><b>Most Pim In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>1</td><td>0</td><td>231</td><td></td></tr>

<tr><td colspan="5"><b>Less Pim In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>1</td><td>0</td><td>231</td><td></td></tr>

<tr><td colspan="5"><b>Most Hits In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>1</td><td>12</td><td>29</td><td><a href="CELH-PLF-12.html">Game Direct Link</a></td></tr><tr><td>2</td><td>1</td><td>21</td><td>29</td><td><a href="CELH-PLF-21.html">Game Direct Link</a></td></tr><tr><td>3</td><td>1</td><td>29</td><td>29</td><td><a href="CELH-PLF-29.html">Game Direct Link</a></td></tr><tr><td>4</td><td>1</td><td>16</td><td>28</td><td><a href="CELH-PLF-16.html">Game Direct Link</a></td></tr><tr><td>5</td><td>1</td><td>31</td><td>27</td><td><a href="CELH-PLF-31.html">Game Direct Link</a></td></tr><tr><td>6</td><td>1</td><td>52</td><td>26</td><td><a href="CELH-PLF-52.html">Game Direct Link</a></td></tr><tr><td>7</td><td>1</td><td>37</td><td>25</td><td><a href="CELH-PLF-37.html">Game Direct Link</a></td></tr><tr><td>8</td><td>1</td><td>45</td><td>25</td><td><a href="CELH-PLF-45.html">Game Direct Link</a></td></tr><tr><td>9</td><td>1</td><td>33</td><td>24</td><td><a href="CELH-PLF-33.html">Game Direct Link</a></td></tr><tr><td>10</td><td>1</td><td>18</td><td>23</td><td><a href="CELH-PLF-18.html">Game Direct Link</a></td></tr>
<tr><td colspan="5"><b>Most Hits In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>1</td><td>0</td><td>625</td><td></td></tr>

<tr><td colspan="5"><b>Less Hit In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>1</td><td>0</td><td>625</td><td></td></tr>

<tr><td colspan="5"><b>Most Empty Net Goal In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>1</td><td>0</td><td>1</td><td></td></tr>

<tr><td colspan="5"><b>Best PP In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>1</td><td>0</td><td>31.20%</td><td></td></tr>

<tr><td colspan="5"><b>Best PK In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>1</td><td>0</td><td>75.90%</td><td></td></tr>

<tr><td colspan="5"><b>Worse PP In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>1</td><td>0</td><td>31.20%</td><td></td></tr>

<tr><td colspan="5"><b>Worse PK In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>1</td><td>0</td><td>75.90%</td><td></td></tr>

<tr><td colspan="5"><b>Most Win In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>1</td><td>0</td><td>16</td><td></td></tr>

<tr><td colspan="5"><b>Less Win In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>1</td><td>0</td><td>16</td><td></td></tr>

<tr><td colspan="5"><b>Most Lost In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>1</td><td>0</td><td>14</td><td></td></tr>

<tr><td colspan="5"><b>Less Lost In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>1</td><td>0</td><td>14</td><td></td></tr>

<tr><td colspan="5"><b>Most Point In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>1</td><td>0</td><td>50</td><td></td></tr>

<tr><td colspan="5"><b>Less Points In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>1</td><td>0</td><td>50</td><td></td></tr>

<tr><td colspan="5"><b>Most Win Home In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>1</td><td>0</td><td>6</td><td></td></tr>

<tr><td colspan="5"><b>Most Win Visitor In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>1</td><td>0</td><td>4</td><td></td></tr>

</table></div>
<h1 class="TeamRecordsPro_BOH"><a id="HCLionsBohemia">HC Lions Bohemia</a></h1>
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
<br /><table class="STHSRecordTable">
<tr><td colspan="5"><b>Most Goals in 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>1</td><td>2</td><td>4</td><td><a href="CELH-PLF-2.html">Game Direct Link</a></td></tr><tr><td>2</td><td>1</td><td>9</td><td>3</td><td><a href="CELH-PLF-9.html">Game Direct Link</a></td></tr><tr><td>3</td><td>1</td><td>16</td><td>3</td><td><a href="CELH-PLF-16.html">Game Direct Link</a></td></tr><tr><td>4</td><td>1</td><td>24</td><td>3</td><td><a href="CELH-PLF-24.html">Game Direct Link</a></td></tr><tr><td>5</td><td>1</td><td>30</td><td>3</td><td><a href="CELH-PLF-30.html">Game Direct Link</a></td></tr><tr><td>6</td><td>1</td><td>32</td><td>3</td><td><a href="CELH-PLF-32.html">Game Direct Link</a></td></tr><tr><td>7</td><td>1</td><td>36</td><td>3</td><td><a href="CELH-PLF-36.html">Game Direct Link</a></td></tr><tr><td>8</td><td>1</td><td>46</td><td>3</td><td><a href="CELH-PLF-46.html">Game Direct Link</a></td></tr><tr><td>9</td><td>1</td><td>48</td><td>3</td><td><a href="CELH-PLF-48.html">Game Direct Link</a></td></tr><tr><td>10</td><td>1</td><td>55</td><td>3</td><td><a href="CELH-PLF-55.html">Game Direct Link</a></td></tr>
<tr><td colspan="5"><b>Most Goals in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>1</td><td>0</td><td>61</td><td></td></tr>

<tr><td colspan="5"><b>Less Goal in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>1</td><td>0</td><td>61</td><td></td></tr>

<tr><td colspan="5"><b>Most Goals Against in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>1</td><td>0</td><td>56</td><td></td></tr>

<tr><td colspan="5"><b>Less Goal Against in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>1</td><td>0</td><td>56</td><td></td></tr>

<tr><td colspan="5"><b>Most Assists in 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>1</td><td>9</td><td>6</td><td><a href="CELH-PLF-9.html">Game Direct Link</a></td></tr><tr><td>2</td><td>1</td><td>30</td><td>6</td><td><a href="CELH-PLF-30.html">Game Direct Link</a></td></tr><tr><td>3</td><td>1</td><td>36</td><td>6</td><td><a href="CELH-PLF-36.html">Game Direct Link</a></td></tr><tr><td>4</td><td>1</td><td>46</td><td>6</td><td><a href="CELH-PLF-46.html">Game Direct Link</a></td></tr><tr><td>5</td><td>1</td><td>55</td><td>6</td><td><a href="CELH-PLF-55.html">Game Direct Link</a></td></tr><tr><td>6</td><td>1</td><td>2</td><td>5</td><td><a href="CELH-PLF-2.html">Game Direct Link</a></td></tr><tr><td>7</td><td>1</td><td>32</td><td>5</td><td><a href="CELH-PLF-32.html">Game Direct Link</a></td></tr><tr><td>8</td><td>1</td><td>48</td><td>5</td><td><a href="CELH-PLF-48.html">Game Direct Link</a></td></tr><tr><td>9</td><td>1</td><td>5</td><td>4</td><td><a href="CELH-PLF-5.html">Game Direct Link</a></td></tr><tr><td>10</td><td>1</td><td>11</td><td>4</td><td><a href="CELH-PLF-11.html">Game Direct Link</a></td></tr>
<tr><td colspan="5"><b>Most Assists in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>1</td><td>0</td><td>102</td><td></td></tr>

<tr><td colspan="5"><b>Less Assist in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>1</td><td>0</td><td>102</td><td></td></tr>

<tr><td colspan="5"><b>Most Game Points in 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>1</td><td>2</td><td>9</td><td><a href="CELH-PLF-2.html">Game Direct Link</a></td></tr><tr><td>2</td><td>1</td><td>9</td><td>9</td><td><a href="CELH-PLF-9.html">Game Direct Link</a></td></tr><tr><td>3</td><td>1</td><td>30</td><td>9</td><td><a href="CELH-PLF-30.html">Game Direct Link</a></td></tr><tr><td>4</td><td>1</td><td>36</td><td>9</td><td><a href="CELH-PLF-36.html">Game Direct Link</a></td></tr><tr><td>5</td><td>1</td><td>46</td><td>9</td><td><a href="CELH-PLF-46.html">Game Direct Link</a></td></tr><tr><td>6</td><td>1</td><td>55</td><td>9</td><td><a href="CELH-PLF-55.html">Game Direct Link</a></td></tr><tr><td>7</td><td>1</td><td>32</td><td>8</td><td><a href="CELH-PLF-32.html">Game Direct Link</a></td></tr><tr><td>8</td><td>1</td><td>48</td><td>8</td><td><a href="CELH-PLF-48.html">Game Direct Link</a></td></tr><tr><td>9</td><td>1</td><td>16</td><td>7</td><td><a href="CELH-PLF-16.html">Game Direct Link</a></td></tr><tr><td>10</td><td>1</td><td>24</td><td>7</td><td><a href="CELH-PLF-24.html">Game Direct Link</a></td></tr>
<tr><td colspan="5"><b>Most Game Points in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>1</td><td>0</td><td>163</td><td></td></tr>

<tr><td colspan="5"><b>Less Game Point In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>1</td><td>0</td><td>163</td><td></td></tr>

<tr><td colspan="5"><b>Most Shots In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>1</td><td>24</td><td>47</td><td><a href="CELH-PLF-24.html">Game Direct Link</a></td></tr><tr><td>2</td><td>1</td><td>2</td><td>41</td><td><a href="CELH-PLF-2.html">Game Direct Link</a></td></tr><tr><td>3</td><td>1</td><td>30</td><td>41</td><td><a href="CELH-PLF-30.html">Game Direct Link</a></td></tr><tr><td>4</td><td>1</td><td>36</td><td>40</td><td><a href="CELH-PLF-36.html">Game Direct Link</a></td></tr><tr><td>5</td><td>1</td><td>5</td><td>39</td><td><a href="CELH-PLF-5.html">Game Direct Link</a></td></tr><tr><td>6</td><td>1</td><td>60</td><td>38</td><td><a href="CELH-PLF-60.html">Game Direct Link</a></td></tr><tr><td>7</td><td>1</td><td>22</td><td>37</td><td><a href="CELH-PLF-22.html">Game Direct Link</a></td></tr><tr><td>8</td><td>1</td><td>38</td><td>37</td><td><a href="CELH-PLF-38.html">Game Direct Link</a></td></tr><tr><td>9</td><td>1</td><td>40</td><td>37</td><td><a href="CELH-PLF-40.html">Game Direct Link</a></td></tr><tr><td>10</td><td>1</td><td>34</td><td>36</td><td><a href="CELH-PLF-34.html">Game Direct Link</a></td></tr>
<tr><td colspan="5"><b>Most Shots In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>1</td><td>0</td><td>979</td><td></td></tr>

<tr><td colspan="5"><b>Less Shots In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>1</td><td>0</td><td>979</td><td></td></tr>

<tr><td colspan="5"><b>Most Shots Blocked In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>1</td><td>36</td><td>17</td><td><a href="CELH-PLF-36.html">Game Direct Link</a></td></tr><tr><td>2</td><td>1</td><td>32</td><td>16</td><td><a href="CELH-PLF-32.html">Game Direct Link</a></td></tr><tr><td>3</td><td>1</td><td>16</td><td>13</td><td><a href="CELH-PLF-16.html">Game Direct Link</a></td></tr><tr><td>4</td><td>1</td><td>44</td><td>13</td><td><a href="CELH-PLF-44.html">Game Direct Link</a></td></tr><tr><td>5</td><td>1</td><td>59</td><td>13</td><td><a href="CELH-PLF-59.html">Game Direct Link</a></td></tr><tr><td>6</td><td>1</td><td>60</td><td>13</td><td><a href="CELH-PLF-60.html">Game Direct Link</a></td></tr><tr><td>7</td><td>1</td><td>26</td><td>12</td><td><a href="CELH-PLF-26.html">Game Direct Link</a></td></tr><tr><td>8</td><td>1</td><td>38</td><td>12</td><td><a href="CELH-PLF-38.html">Game Direct Link</a></td></tr><tr><td>9</td><td>1</td><td>40</td><td>12</td><td><a href="CELH-PLF-40.html">Game Direct Link</a></td></tr><tr><td>10</td><td>1</td><td>2</td><td>11</td><td><a href="CELH-PLF-2.html">Game Direct Link</a></td></tr>
<tr><td colspan="5"><b>Most Shots Blocked In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>1</td><td>0</td><td>277</td><td></td></tr>

<tr><td colspan="5"><b>Less Shots Block In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>1</td><td>0</td><td>277</td><td></td></tr>

<tr><td colspan="5"><b>Most Shots Against In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>1</td><td>0</td><td>833</td><td></td></tr>

<tr><td colspan="5"><b>Less Shots Against In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>1</td><td>0</td><td>833</td><td></td></tr>

<tr><td colspan="5"><b>Most Pim In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>1</td><td>55</td><td>13</td><td><a href="CELH-PLF-55.html">Game Direct Link</a></td></tr><tr><td>2</td><td>1</td><td>2</td><td>12</td><td><a href="CELH-PLF-2.html">Game Direct Link</a></td></tr><tr><td>3</td><td>1</td><td>22</td><td>10</td><td><a href="CELH-PLF-22.html">Game Direct Link</a></td></tr><tr><td>4</td><td>1</td><td>32</td><td>10</td><td><a href="CELH-PLF-32.html">Game Direct Link</a></td></tr><tr><td>5</td><td>1</td><td>38</td><td>10</td><td><a href="CELH-PLF-38.html">Game Direct Link</a></td></tr><tr><td>6</td><td>1</td><td>42</td><td>10</td><td><a href="CELH-PLF-42.html">Game Direct Link</a></td></tr><tr><td>7</td><td>1</td><td>44</td><td>10</td><td><a href="CELH-PLF-44.html">Game Direct Link</a></td></tr><tr><td>8</td><td>1</td><td>51</td><td>10</td><td><a href="CELH-PLF-51.html">Game Direct Link</a></td></tr><tr><td>9</td><td>1</td><td>5</td><td>8</td><td><a href="CELH-PLF-5.html">Game Direct Link</a></td></tr><tr><td>10</td><td>1</td><td>6</td><td>8</td><td><a href="CELH-PLF-6.html">Game Direct Link</a></td></tr>
<tr><td colspan="5"><b>Most Pim In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>1</td><td>0</td><td>227</td><td></td></tr>

<tr><td colspan="5"><b>Less Pim In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>1</td><td>0</td><td>227</td><td></td></tr>

<tr><td colspan="5"><b>Most Hits In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>1</td><td>28</td><td>32</td><td><a href="CELH-PLF-28.html">Game Direct Link</a></td></tr><tr><td>2</td><td>1</td><td>6</td><td>29</td><td><a href="CELH-PLF-6.html">Game Direct Link</a></td></tr><tr><td>3</td><td>1</td><td>40</td><td>25</td><td><a href="CELH-PLF-40.html">Game Direct Link</a></td></tr><tr><td>4</td><td>1</td><td>44</td><td>25</td><td><a href="CELH-PLF-44.html">Game Direct Link</a></td></tr><tr><td>5</td><td>1</td><td>24</td><td>24</td><td><a href="CELH-PLF-24.html">Game Direct Link</a></td></tr><tr><td>6</td><td>1</td><td>30</td><td>24</td><td><a href="CELH-PLF-30.html">Game Direct Link</a></td></tr><tr><td>7</td><td>1</td><td>42</td><td>24</td><td><a href="CELH-PLF-42.html">Game Direct Link</a></td></tr><tr><td>8</td><td>1</td><td>54</td><td>24</td><td><a href="CELH-PLF-54.html">Game Direct Link</a></td></tr><tr><td>9</td><td>1</td><td>9</td><td>23</td><td><a href="CELH-PLF-9.html">Game Direct Link</a></td></tr><tr><td>10</td><td>1</td><td>51</td><td>23</td><td><a href="CELH-PLF-51.html">Game Direct Link</a></td></tr>
<tr><td colspan="5"><b>Most Hits In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>1</td><td>0</td><td>633</td><td></td></tr>

<tr><td colspan="5"><b>Less Hit In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>1</td><td>0</td><td>633</td><td></td></tr>

<tr><td colspan="5"><b>Most Empty Net Goal In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>1</td><td>0</td><td>1</td><td></td></tr>

<tr><td colspan="5"><b>Best PP In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>1</td><td>0</td><td>26.70%</td><td></td></tr>

<tr><td colspan="5"><b>Best PK In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>1</td><td>0</td><td>73.20%</td><td></td></tr>

<tr><td colspan="5"><b>Worse PP In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>1</td><td>0</td><td>26.70%</td><td></td></tr>

<tr><td colspan="5"><b>Worse PK In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>1</td><td>0</td><td>73.20%</td><td></td></tr>

<tr><td colspan="5"><b>Most Win In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>1</td><td>0</td><td>16</td><td></td></tr>

<tr><td colspan="5"><b>Less Win In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>1</td><td>0</td><td>16</td><td></td></tr>

<tr><td colspan="5"><b>Most Lost In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>1</td><td>0</td><td>14</td><td></td></tr>

<tr><td colspan="5"><b>Less Lost In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>1</td><td>0</td><td>14</td><td></td></tr>

<tr><td colspan="5"><b>Most Point In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>1</td><td>0</td><td>44</td><td></td></tr>

<tr><td colspan="5"><b>Less Points In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>1</td><td>0</td><td>44</td><td></td></tr>

<tr><td colspan="5"><b>Most Win Home In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>1</td><td>0</td><td>5</td><td></td></tr>

<tr><td colspan="5"><b>Most Win Visitor In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>1</td><td>0</td><td>4</td><td></td></tr>

</table></div>
<h1 class="TeamRecordsPro_KLD"><a id="HCLynxKladno">HC Lynx Kladno</a></h1>
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
<br /><table class="STHSRecordTable">
<tr><td colspan="5"><b>Most Goals in 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>1</td><td>4</td><td>3</td><td><a href="CELH-PLF-4.html">Game Direct Link</a></td></tr><tr><td>2</td><td>1</td><td>19</td><td>3</td><td><a href="CELH-PLF-19.html">Game Direct Link</a></td></tr><tr><td>3</td><td>1</td><td>22</td><td>3</td><td><a href="CELH-PLF-22.html">Game Direct Link</a></td></tr><tr><td>4</td><td>1</td><td>37</td><td>3</td><td><a href="CELH-PLF-37.html">Game Direct Link</a></td></tr><tr><td>5</td><td>1</td><td>39</td><td>3</td><td><a href="CELH-PLF-39.html">Game Direct Link</a></td></tr><tr><td>6</td><td>1</td><td>50</td><td>3</td><td><a href="CELH-PLF-50.html">Game Direct Link</a></td></tr><tr><td>7</td><td>1</td><td>59</td><td>3</td><td><a href="CELH-PLF-59.html">Game Direct Link</a></td></tr><tr><td>8</td><td>1</td><td>1</td><td>2</td><td><a href="CELH-PLF-1.html">Game Direct Link</a></td></tr><tr><td>9</td><td>1</td><td>3</td><td>2</td><td><a href="CELH-PLF-3.html">Game Direct Link</a></td></tr><tr><td>10</td><td>1</td><td>15</td><td>2</td><td><a href="CELH-PLF-15.html">Game Direct Link</a></td></tr>
<tr><td colspan="5"><b>Most Goals in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>1</td><td>0</td><td>49</td><td></td></tr>

<tr><td colspan="5"><b>Less Goal in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>1</td><td>0</td><td>49</td><td></td></tr>

<tr><td colspan="5"><b>Most Goals Against in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>1</td><td>0</td><td>64</td><td></td></tr>

<tr><td colspan="5"><b>Less Goal Against in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>1</td><td>0</td><td>64</td><td></td></tr>

<tr><td colspan="5"><b>Most Assists in 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>1</td><td>4</td><td>6</td><td><a href="CELH-PLF-4.html">Game Direct Link</a></td></tr><tr><td>2</td><td>1</td><td>22</td><td>6</td><td><a href="CELH-PLF-22.html">Game Direct Link</a></td></tr><tr><td>3</td><td>1</td><td>37</td><td>6</td><td><a href="CELH-PLF-37.html">Game Direct Link</a></td></tr><tr><td>4</td><td>1</td><td>59</td><td>6</td><td><a href="CELH-PLF-59.html">Game Direct Link</a></td></tr><tr><td>5</td><td>1</td><td>19</td><td>5</td><td><a href="CELH-PLF-19.html">Game Direct Link</a></td></tr><tr><td>6</td><td>1</td><td>24</td><td>4</td><td><a href="CELH-PLF-24.html">Game Direct Link</a></td></tr><tr><td>7</td><td>1</td><td>32</td><td>4</td><td><a href="CELH-PLF-32.html">Game Direct Link</a></td></tr><tr><td>8</td><td>1</td><td>39</td><td>4</td><td><a href="CELH-PLF-39.html">Game Direct Link</a></td></tr><tr><td>9</td><td>1</td><td>50</td><td>4</td><td><a href="CELH-PLF-50.html">Game Direct Link</a></td></tr><tr><td>10</td><td>1</td><td>1</td><td>3</td><td><a href="CELH-PLF-1.html">Game Direct Link</a></td></tr>
<tr><td colspan="5"><b>Most Assists in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>1</td><td>0</td><td>80</td><td></td></tr>

<tr><td colspan="5"><b>Less Assist in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>1</td><td>0</td><td>80</td><td></td></tr>

<tr><td colspan="5"><b>Most Game Points in 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>1</td><td>4</td><td>9</td><td><a href="CELH-PLF-4.html">Game Direct Link</a></td></tr><tr><td>2</td><td>1</td><td>22</td><td>9</td><td><a href="CELH-PLF-22.html">Game Direct Link</a></td></tr><tr><td>3</td><td>1</td><td>37</td><td>9</td><td><a href="CELH-PLF-37.html">Game Direct Link</a></td></tr><tr><td>4</td><td>1</td><td>59</td><td>9</td><td><a href="CELH-PLF-59.html">Game Direct Link</a></td></tr><tr><td>5</td><td>1</td><td>19</td><td>8</td><td><a href="CELH-PLF-19.html">Game Direct Link</a></td></tr><tr><td>6</td><td>1</td><td>39</td><td>7</td><td><a href="CELH-PLF-39.html">Game Direct Link</a></td></tr><tr><td>7</td><td>1</td><td>50</td><td>7</td><td><a href="CELH-PLF-50.html">Game Direct Link</a></td></tr><tr><td>8</td><td>1</td><td>24</td><td>6</td><td><a href="CELH-PLF-24.html">Game Direct Link</a></td></tr><tr><td>9</td><td>1</td><td>32</td><td>6</td><td><a href="CELH-PLF-32.html">Game Direct Link</a></td></tr><tr><td>10</td><td>1</td><td>1</td><td>5</td><td><a href="CELH-PLF-1.html">Game Direct Link</a></td></tr>
<tr><td colspan="5"><b>Most Game Points in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>1</td><td>0</td><td>129</td><td></td></tr>

<tr><td colspan="5"><b>Less Game Point In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>1</td><td>0</td><td>129</td><td></td></tr>

<tr><td colspan="5"><b>Most Shots In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>1</td><td>24</td><td>32</td><td><a href="CELH-PLF-24.html">Game Direct Link</a></td></tr><tr><td>2</td><td>1</td><td>33</td><td>32</td><td><a href="CELH-PLF-33.html">Game Direct Link</a></td></tr><tr><td>3</td><td>1</td><td>48</td><td>31</td><td><a href="CELH-PLF-48.html">Game Direct Link</a></td></tr><tr><td>4</td><td>1</td><td>42</td><td>30</td><td><a href="CELH-PLF-42.html">Game Direct Link</a></td></tr><tr><td>5</td><td>1</td><td>43</td><td>30</td><td><a href="CELH-PLF-43.html">Game Direct Link</a></td></tr><tr><td>6</td><td>1</td><td>25</td><td>29</td><td><a href="CELH-PLF-25.html">Game Direct Link</a></td></tr><tr><td>7</td><td>1</td><td>46</td><td>29</td><td><a href="CELH-PLF-46.html">Game Direct Link</a></td></tr><tr><td>8</td><td>1</td><td>52</td><td>29</td><td><a href="CELH-PLF-52.html">Game Direct Link</a></td></tr><tr><td>9</td><td>1</td><td>56</td><td>29</td><td><a href="CELH-PLF-56.html">Game Direct Link</a></td></tr><tr><td>10</td><td>1</td><td>15</td><td>28</td><td><a href="CELH-PLF-15.html">Game Direct Link</a></td></tr>
<tr><td colspan="5"><b>Most Shots In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>1</td><td>0</td><td>770</td><td></td></tr>

<tr><td colspan="5"><b>Less Shots In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>1</td><td>0</td><td>770</td><td></td></tr>

<tr><td colspan="5"><b>Most Shots Blocked In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>1</td><td>46</td><td>18</td><td><a href="CELH-PLF-46.html">Game Direct Link</a></td></tr><tr><td>2</td><td>1</td><td>33</td><td>17</td><td><a href="CELH-PLF-33.html">Game Direct Link</a></td></tr><tr><td>3</td><td>1</td><td>48</td><td>16</td><td><a href="CELH-PLF-48.html">Game Direct Link</a></td></tr><tr><td>4</td><td>1</td><td>3</td><td>15</td><td><a href="CELH-PLF-3.html">Game Direct Link</a></td></tr><tr><td>5</td><td>1</td><td>58</td><td>15</td><td><a href="CELH-PLF-58.html">Game Direct Link</a></td></tr><tr><td>6</td><td>1</td><td>15</td><td>13</td><td><a href="CELH-PLF-15.html">Game Direct Link</a></td></tr><tr><td>7</td><td>1</td><td>19</td><td>13</td><td><a href="CELH-PLF-19.html">Game Direct Link</a></td></tr><tr><td>8</td><td>1</td><td>27</td><td>13</td><td><a href="CELH-PLF-27.html">Game Direct Link</a></td></tr><tr><td>9</td><td>1</td><td>32</td><td>12</td><td><a href="CELH-PLF-32.html">Game Direct Link</a></td></tr><tr><td>10</td><td>1</td><td>37</td><td>12</td><td><a href="CELH-PLF-37.html">Game Direct Link</a></td></tr>
<tr><td colspan="5"><b>Most Shots Blocked In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>1</td><td>0</td><td>303</td><td></td></tr>

<tr><td colspan="5"><b>Less Shots Block In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>1</td><td>0</td><td>303</td><td></td></tr>

<tr><td colspan="5"><b>Most Shots Against In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>1</td><td>0</td><td>906</td><td></td></tr>

<tr><td colspan="5"><b>Less Shots Against In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>1</td><td>0</td><td>906</td><td></td></tr>

<tr><td colspan="5"><b>Most Pim In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>1</td><td>25</td><td>12</td><td><a href="CELH-PLF-25.html">Game Direct Link</a></td></tr><tr><td>2</td><td>1</td><td>52</td><td>12</td><td><a href="CELH-PLF-52.html">Game Direct Link</a></td></tr><tr><td>3</td><td>1</td><td>3</td><td>10</td><td><a href="CELH-PLF-3.html">Game Direct Link</a></td></tr><tr><td>4</td><td>1</td><td>13</td><td>10</td><td><a href="CELH-PLF-13.html">Game Direct Link</a></td></tr><tr><td>5</td><td>1</td><td>15</td><td>10</td><td><a href="CELH-PLF-15.html">Game Direct Link</a></td></tr><tr><td>6</td><td>1</td><td>32</td><td>10</td><td><a href="CELH-PLF-32.html">Game Direct Link</a></td></tr><tr><td>7</td><td>1</td><td>53</td><td>10</td><td><a href="CELH-PLF-53.html">Game Direct Link</a></td></tr><tr><td>8</td><td>1</td><td>11</td><td>8</td><td><a href="CELH-PLF-11.html">Game Direct Link</a></td></tr><tr><td>9</td><td>1</td><td>33</td><td>8</td><td><a href="CELH-PLF-33.html">Game Direct Link</a></td></tr><tr><td>10</td><td>1</td><td>43</td><td>8</td><td><a href="CELH-PLF-43.html">Game Direct Link</a></td></tr>
<tr><td colspan="5"><b>Most Pim In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>1</td><td>0</td><td>208</td><td></td></tr>

<tr><td colspan="5"><b>Less Pim In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>1</td><td>0</td><td>208</td><td></td></tr>

<tr><td colspan="5"><b>Most Hits In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>1</td><td>17</td><td>40</td><td><a href="CELH-PLF-17.html">Game Direct Link</a></td></tr><tr><td>2</td><td>1</td><td>4</td><td>38</td><td><a href="CELH-PLF-4.html">Game Direct Link</a></td></tr><tr><td>3</td><td>1</td><td>13</td><td>32</td><td><a href="CELH-PLF-13.html">Game Direct Link</a></td></tr><tr><td>4</td><td>1</td><td>43</td><td>31</td><td><a href="CELH-PLF-43.html">Game Direct Link</a></td></tr><tr><td>5</td><td>1</td><td>42</td><td>29</td><td><a href="CELH-PLF-42.html">Game Direct Link</a></td></tr><tr><td>6</td><td>1</td><td>59</td><td>28</td><td><a href="CELH-PLF-59.html">Game Direct Link</a></td></tr><tr><td>7</td><td>1</td><td>11</td><td>27</td><td><a href="CELH-PLF-11.html">Game Direct Link</a></td></tr><tr><td>8</td><td>1</td><td>25</td><td>27</td><td><a href="CELH-PLF-25.html">Game Direct Link</a></td></tr><tr><td>9</td><td>1</td><td>53</td><td>27</td><td><a href="CELH-PLF-53.html">Game Direct Link</a></td></tr><tr><td>10</td><td>1</td><td>15</td><td>26</td><td><a href="CELH-PLF-15.html">Game Direct Link</a></td></tr>
<tr><td colspan="5"><b>Most Hits In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>1</td><td>0</td><td>739</td><td></td></tr>

<tr><td colspan="5"><b>Less Hit In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>1</td><td>0</td><td>739</td><td></td></tr>

<tr><td colspan="5"><b>Most Empty Net Goal In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>1</td><td>0</td><td>1</td><td></td></tr>

<tr><td colspan="5"><b>Best PP In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>1</td><td>0</td><td>20.80%</td><td></td></tr>

<tr><td colspan="5"><b>Best PK In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>1</td><td>0</td><td>70.90%</td><td></td></tr>

<tr><td colspan="5"><b>Worse PP In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>1</td><td>0</td><td>20.80%</td><td></td></tr>

<tr><td colspan="5"><b>Worse PK In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>1</td><td>0</td><td>70.90%</td><td></td></tr>

<tr><td colspan="5"><b>Most Win In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>1</td><td>0</td><td>10</td><td></td></tr>

<tr><td colspan="5"><b>Less Win In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>1</td><td>0</td><td>10</td><td></td></tr>

<tr><td colspan="5"><b>Most Lost In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>1</td><td>0</td><td>20</td><td></td></tr>

<tr><td colspan="5"><b>Less Lost In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>1</td><td>0</td><td>20</td><td></td></tr>

<tr><td colspan="5"><b>Most Point In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>1</td><td>0</td><td>32</td><td></td></tr>

<tr><td colspan="5"><b>Less Points In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>1</td><td>0</td><td>32</td><td></td></tr>

<tr><td colspan="5"><b>Most Win Home In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>1</td><td>0</td><td>3</td><td></td></tr>

<tr><td colspan="5"><b>Most Win Visitor In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>1</td><td>0</td><td>4</td><td></td></tr>

</table></div>
<?php include "Footer.php";?>
