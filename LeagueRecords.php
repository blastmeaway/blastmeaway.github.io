<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>CELH - League Records</title>
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
<h1 class="STHSLeagueRecord_TeamRecords">Team Records</h1>
<table class="STHSRecordTable">
<tr><td colspan="6"><b>Most Goals in 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW120">Link</td></tr>
<tr><td>1</td><td>HC Lions Bohemia</td><td>1</td><td>2</td><td>4</td><td><a href="CELH-PLF-2.html">Game Direct Link</a></td></tr><tr><td>2</td><td>HC Eagles Moravia</td><td>1</td><td>25</td><td>4</td><td><a href="CELH-PLF-25.html">Game Direct Link</a></td></tr><tr><td>3</td><td>HC Eagles Moravia</td><td>1</td><td>37</td><td>4</td><td><a href="CELH-PLF-37.html">Game Direct Link</a></td></tr><tr><td>4</td><td>HC Black Eagles Silesia</td><td>1</td><td>41</td><td>4</td><td><a href="CELH-PLF-41.html">Game Direct Link</a></td></tr><tr><td>5</td><td>HC Eagles Moravia</td><td>1</td><td>2</td><td>3</td><td><a href="CELH-PLF-2.html">Game Direct Link</a></td></tr><tr><td>6</td><td>HC Eagles Moravia</td><td>1</td><td>3</td><td>3</td><td><a href="CELH-PLF-3.html">Game Direct Link</a></td></tr><tr><td>7</td><td>HC Lynx Kladno</td><td>1</td><td>4</td><td>3</td><td><a href="CELH-PLF-4.html">Game Direct Link</a></td></tr><tr><td>8</td><td>HC Black Eagles Silesia</td><td>1</td><td>5</td><td>3</td><td><a href="CELH-PLF-5.html">Game Direct Link</a></td></tr><tr><td>9</td><td>HC Eagles Moravia</td><td>1</td><td>8</td><td>3</td><td><a href="CELH-PLF-8.html">Game Direct Link</a></td></tr><tr><td>10</td><td>HC Lions Bohemia</td><td>1</td><td>9</td><td>3</td><td><a href="CELH-PLF-9.html">Game Direct Link</a></td></tr>
<tr><td colspan="6"><b>Most Goals in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>HC Eagles Moravia</td><td>1</td><td>66</td><td></td><td></td></tr>
<tr><td>2</td><td>HC Lions Bohemia</td><td>1</td><td>61</td><td></td><td></td></tr>
<tr><td>3</td><td>HC Black Eagles Silesia</td><td>1</td><td>57</td><td></td><td></td></tr>
<tr><td>4</td><td>HC Lynx Kladno</td><td>1</td><td>49</td><td></td><td></td></tr>

<tr><td colspan="6"><b>Less Goal in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>HC Lynx Kladno</td><td>1</td><td>49</td><td></td><td></td></tr>
<tr><td>2</td><td>HC Black Eagles Silesia</td><td>1</td><td>57</td><td></td><td></td></tr>
<tr><td>3</td><td>HC Lions Bohemia</td><td>1</td><td>61</td><td></td><td></td></tr>
<tr><td>4</td><td>HC Eagles Moravia</td><td>1</td><td>66</td><td></td><td></td></tr>

<tr><td colspan="6"><b>Most Goals Against in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>HC Lynx Kladno</td><td>1</td><td>64</td><td></td><td></td></tr>
<tr><td>2</td><td>HC Eagles Moravia</td><td>1</td><td>62</td><td></td><td></td></tr>
<tr><td>3</td><td>HC Lions Bohemia</td><td>1</td><td>56</td><td></td><td></td></tr>
<tr><td>4</td><td>HC Black Eagles Silesia</td><td>1</td><td>51</td><td></td><td></td></tr>

<tr><td colspan="6"><b>Less Goal Against in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>HC Black Eagles Silesia</td><td>1</td><td>51</td><td></td><td></td></tr>
<tr><td>2</td><td>HC Lions Bohemia</td><td>1</td><td>56</td><td></td><td></td></tr>
<tr><td>3</td><td>HC Eagles Moravia</td><td>1</td><td>62</td><td></td><td></td></tr>
<tr><td>4</td><td>HC Lynx Kladno</td><td>1</td><td>64</td><td></td><td></td></tr>

<tr><td colspan="6"><b>Most Assists in 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW120">Link</td></tr>
<tr><td>1</td><td>HC Eagles Moravia</td><td>1</td><td>37</td><td>8</td><td><a href="CELH-PLF-37.html">Game Direct Link</a></td></tr><tr><td>2</td><td>HC Eagles Moravia</td><td>1</td><td>25</td><td>7</td><td><a href="CELH-PLF-25.html">Game Direct Link</a></td></tr><tr><td>3</td><td>HC Eagles Moravia</td><td>1</td><td>3</td><td>6</td><td><a href="CELH-PLF-3.html">Game Direct Link</a></td></tr><tr><td>4</td><td>HC Lynx Kladno</td><td>1</td><td>4</td><td>6</td><td><a href="CELH-PLF-4.html">Game Direct Link</a></td></tr><tr><td>5</td><td>HC Lions Bohemia</td><td>1</td><td>9</td><td>6</td><td><a href="CELH-PLF-9.html">Game Direct Link</a></td></tr><tr><td>6</td><td>HC Eagles Moravia</td><td>1</td><td>12</td><td>6</td><td><a href="CELH-PLF-12.html">Game Direct Link</a></td></tr><tr><td>7</td><td>HC Eagles Moravia</td><td>1</td><td>20</td><td>6</td><td><a href="CELH-PLF-20.html">Game Direct Link</a></td></tr><tr><td>8</td><td>HC Lynx Kladno</td><td>1</td><td>22</td><td>6</td><td><a href="CELH-PLF-22.html">Game Direct Link</a></td></tr><tr><td>9</td><td>HC Black Eagles Silesia</td><td>1</td><td>23</td><td>6</td><td><a href="CELH-PLF-23.html">Game Direct Link</a></td></tr><tr><td>10</td><td>HC Eagles Moravia</td><td>1</td><td>29</td><td>6</td><td><a href="CELH-PLF-29.html">Game Direct Link</a></td></tr>
<tr><td colspan="6"><b>Most Assists in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>HC Eagles Moravia</td><td>1</td><td>119</td><td></td><td></td></tr>
<tr><td>2</td><td>HC Lions Bohemia</td><td>1</td><td>102</td><td></td><td></td></tr>
<tr><td>3</td><td>HC Black Eagles Silesia</td><td>1</td><td>83</td><td></td><td></td></tr>
<tr><td>4</td><td>HC Lynx Kladno</td><td>1</td><td>80</td><td></td><td></td></tr>

<tr><td colspan="6"><b>Less Assist in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>HC Lynx Kladno</td><td>1</td><td>80</td><td></td><td></td></tr>
<tr><td>2</td><td>HC Black Eagles Silesia</td><td>1</td><td>83</td><td></td><td></td></tr>
<tr><td>3</td><td>HC Lions Bohemia</td><td>1</td><td>102</td><td></td><td></td></tr>
<tr><td>4</td><td>HC Eagles Moravia</td><td>1</td><td>119</td><td></td><td></td></tr>

<tr><td colspan="6"><b>Most Game Points in 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW120">Link</td></tr>
<tr><td>1</td><td>HC Eagles Moravia</td><td>1</td><td>37</td><td>12</td><td><a href="CELH-PLF-37.html">Game Direct Link</a></td></tr><tr><td>2</td><td>HC Eagles Moravia</td><td>1</td><td>25</td><td>11</td><td><a href="CELH-PLF-25.html">Game Direct Link</a></td></tr><tr><td>3</td><td>HC Black Eagles Silesia</td><td>1</td><td>41</td><td>10</td><td><a href="CELH-PLF-41.html">Game Direct Link</a></td></tr><tr><td>4</td><td>HC Lions Bohemia</td><td>1</td><td>2</td><td>9</td><td><a href="CELH-PLF-2.html">Game Direct Link</a></td></tr><tr><td>5</td><td>HC Eagles Moravia</td><td>1</td><td>3</td><td>9</td><td><a href="CELH-PLF-3.html">Game Direct Link</a></td></tr><tr><td>6</td><td>HC Lynx Kladno</td><td>1</td><td>4</td><td>9</td><td><a href="CELH-PLF-4.html">Game Direct Link</a></td></tr><tr><td>7</td><td>HC Lions Bohemia</td><td>1</td><td>9</td><td>9</td><td><a href="CELH-PLF-9.html">Game Direct Link</a></td></tr><tr><td>8</td><td>HC Eagles Moravia</td><td>1</td><td>12</td><td>9</td><td><a href="CELH-PLF-12.html">Game Direct Link</a></td></tr><tr><td>9</td><td>HC Eagles Moravia</td><td>1</td><td>20</td><td>9</td><td><a href="CELH-PLF-20.html">Game Direct Link</a></td></tr><tr><td>10</td><td>HC Lynx Kladno</td><td>1</td><td>22</td><td>9</td><td><a href="CELH-PLF-22.html">Game Direct Link</a></td></tr>
<tr><td colspan="6"><b>Most Game Points in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>HC Eagles Moravia</td><td>1</td><td>185</td><td></td><td></td></tr>
<tr><td>2</td><td>HC Lions Bohemia</td><td>1</td><td>163</td><td></td><td></td></tr>
<tr><td>3</td><td>HC Black Eagles Silesia</td><td>1</td><td>140</td><td></td><td></td></tr>
<tr><td>4</td><td>HC Lynx Kladno</td><td>1</td><td>129</td><td></td><td></td></tr>

<tr><td colspan="6"><b>Less Game Points  in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>HC Lynx Kladno</td><td>1</td><td>129</td><td></td><td></td></tr>
<tr><td>2</td><td>HC Black Eagles Silesia</td><td>1</td><td>140</td><td></td><td></td></tr>
<tr><td>3</td><td>HC Lions Bohemia</td><td>1</td><td>163</td><td></td><td></td></tr>
<tr><td>4</td><td>HC Eagles Moravia</td><td>1</td><td>185</td><td></td><td></td></tr>

<tr><td colspan="6"><b>Most Shots In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW120">Link</td></tr>
<tr><td>1</td><td>HC Lions Bohemia</td><td>1</td><td>24</td><td>47</td><td><a href="CELH-PLF-24.html">Game Direct Link</a></td></tr><tr><td>2</td><td>HC Eagles Moravia</td><td>1</td><td>37</td><td>42</td><td><a href="CELH-PLF-37.html">Game Direct Link</a></td></tr><tr><td>3</td><td>HC Lions Bohemia</td><td>1</td><td>2</td><td>41</td><td><a href="CELH-PLF-2.html">Game Direct Link</a></td></tr><tr><td>4</td><td>HC Lions Bohemia</td><td>1</td><td>30</td><td>41</td><td><a href="CELH-PLF-30.html">Game Direct Link</a></td></tr><tr><td>5</td><td>HC Eagles Moravia</td><td>1</td><td>2</td><td>40</td><td><a href="CELH-PLF-2.html">Game Direct Link</a></td></tr><tr><td>6</td><td>HC Lions Bohemia</td><td>1</td><td>36</td><td>40</td><td><a href="CELH-PLF-36.html">Game Direct Link</a></td></tr><tr><td>7</td><td>HC Lions Bohemia</td><td>1</td><td>5</td><td>39</td><td><a href="CELH-PLF-5.html">Game Direct Link</a></td></tr><tr><td>8</td><td>HC Eagles Moravia</td><td>1</td><td>33</td><td>39</td><td><a href="CELH-PLF-33.html">Game Direct Link</a></td></tr><tr><td>9</td><td>HC Lions Bohemia</td><td>1</td><td>60</td><td>38</td><td><a href="CELH-PLF-60.html">Game Direct Link</a></td></tr><tr><td>10</td><td>HC Eagles Moravia</td><td>1</td><td>12</td><td>37</td><td><a href="CELH-PLF-12.html">Game Direct Link</a></td></tr>
<tr><td colspan="6"><b>Most Shots In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>HC Lions Bohemia</td><td>1</td><td>979</td><td></td><td></td></tr>
<tr><td>2</td><td>HC Eagles Moravia</td><td>1</td><td>960</td><td></td><td></td></tr>
<tr><td>3</td><td>HC Lynx Kladno</td><td>1</td><td>770</td><td></td><td></td></tr>
<tr><td>4</td><td>HC Black Eagles Silesia</td><td>1</td><td>742</td><td></td><td></td></tr>

<tr><td colspan="6"><b>Less Shots In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>HC Black Eagles Silesia</td><td>1</td><td>742</td><td></td><td></td></tr>
<tr><td>2</td><td>HC Lynx Kladno</td><td>1</td><td>770</td><td></td><td></td></tr>
<tr><td>3</td><td>HC Eagles Moravia</td><td>1</td><td>960</td><td></td><td></td></tr>
<tr><td>4</td><td>HC Lions Bohemia</td><td>1</td><td>979</td><td></td><td></td></tr>

<tr><td colspan="6"><b>Most Shots Blocked In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW120">Link</td></tr>
<tr><td>1</td><td>HC Black Eagles Silesia</td><td>1</td><td>49</td><td>20</td><td><a href="CELH-PLF-49.html">Game Direct Link</a></td></tr><tr><td>2</td><td>HC Black Eagles Silesia</td><td>1</td><td>5</td><td>18</td><td><a href="CELH-PLF-5.html">Game Direct Link</a></td></tr><tr><td>3</td><td>HC Black Eagles Silesia</td><td>1</td><td>9</td><td>18</td><td><a href="CELH-PLF-9.html">Game Direct Link</a></td></tr><tr><td>4</td><td>HC Lynx Kladno</td><td>1</td><td>46</td><td>18</td><td><a href="CELH-PLF-46.html">Game Direct Link</a></td></tr><tr><td>5</td><td>HC Eagles Moravia</td><td>1</td><td>8</td><td>17</td><td><a href="CELH-PLF-8.html">Game Direct Link</a></td></tr><tr><td>6</td><td>HC Lynx Kladno</td><td>1</td><td>33</td><td>17</td><td><a href="CELH-PLF-33.html">Game Direct Link</a></td></tr><tr><td>7</td><td>HC Lions Bohemia</td><td>1</td><td>36</td><td>17</td><td><a href="CELH-PLF-36.html">Game Direct Link</a></td></tr><tr><td>8</td><td>HC Lions Bohemia</td><td>1</td><td>32</td><td>16</td><td><a href="CELH-PLF-32.html">Game Direct Link</a></td></tr><tr><td>9</td><td>HC Lynx Kladno</td><td>1</td><td>48</td><td>16</td><td><a href="CELH-PLF-48.html">Game Direct Link</a></td></tr><tr><td>10</td><td>HC Lynx Kladno</td><td>1</td><td>3</td><td>15</td><td><a href="CELH-PLF-3.html">Game Direct Link</a></td></tr>
<tr><td colspan="6"><b>Most Shots Blocked In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>HC Lynx Kladno</td><td>1</td><td>303</td><td></td><td></td></tr>
<tr><td>2</td><td>HC Lions Bohemia</td><td>1</td><td>277</td><td></td><td></td></tr>
<tr><td>3</td><td>HC Black Eagles Silesia</td><td>1</td><td>276</td><td></td><td></td></tr>
<tr><td>4</td><td>HC Eagles Moravia</td><td>1</td><td>272</td><td></td><td></td></tr>

<tr><td colspan="6"><b>Less Shots Block In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>HC Eagles Moravia</td><td>1</td><td>272</td><td></td><td></td></tr>
<tr><td>2</td><td>HC Black Eagles Silesia</td><td>1</td><td>276</td><td></td><td></td></tr>
<tr><td>3</td><td>HC Lions Bohemia</td><td>1</td><td>277</td><td></td><td></td></tr>
<tr><td>4</td><td>HC Lynx Kladno</td><td>1</td><td>303</td><td></td><td></td></tr>

<tr><td colspan="6"><b>Most Shots Against In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>HC Lynx Kladno</td><td>1</td><td>906</td><td></td><td></td></tr>
<tr><td>2</td><td>HC Black Eagles Silesia</td><td>1</td><td>892</td><td></td><td></td></tr>
<tr><td>3</td><td>HC Lions Bohemia</td><td>1</td><td>833</td><td></td><td></td></tr>
<tr><td>4</td><td>HC Eagles Moravia</td><td>1</td><td>820</td><td></td><td></td></tr>

<tr><td colspan="6"><b>Less Shots Against In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>HC Eagles Moravia</td><td>1</td><td>820</td><td></td><td></td></tr>
<tr><td>2</td><td>HC Lions Bohemia</td><td>1</td><td>833</td><td></td><td></td></tr>
<tr><td>3</td><td>HC Black Eagles Silesia</td><td>1</td><td>892</td><td></td><td></td></tr>
<tr><td>4</td><td>HC Lynx Kladno</td><td>1</td><td>906</td><td></td><td></td></tr>

<tr><td colspan="6"><b>Most Pim In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW120">Link</td></tr>
<tr><td>1</td><td>HC Eagles Moravia</td><td>1</td><td>29</td><td>23</td><td><a href="CELH-PLF-29.html">Game Direct Link</a></td></tr><tr><td>2</td><td>HC Eagles Moravia</td><td>1</td><td>41</td><td>18</td><td><a href="CELH-PLF-41.html">Game Direct Link</a></td></tr><tr><td>3</td><td>HC Black Eagles Silesia</td><td>1</td><td>38</td><td>14</td><td><a href="CELH-PLF-38.html">Game Direct Link</a></td></tr><tr><td>4</td><td>HC Black Eagles Silesia</td><td>1</td><td>29</td><td>13</td><td><a href="CELH-PLF-29.html">Game Direct Link</a></td></tr><tr><td>5</td><td>HC Lions Bohemia</td><td>1</td><td>55</td><td>13</td><td><a href="CELH-PLF-55.html">Game Direct Link</a></td></tr><tr><td>6</td><td>HC Lions Bohemia</td><td>1</td><td>2</td><td>12</td><td><a href="CELH-PLF-2.html">Game Direct Link</a></td></tr><tr><td>7</td><td>HC Eagles Moravia</td><td>1</td><td>12</td><td>12</td><td><a href="CELH-PLF-12.html">Game Direct Link</a></td></tr><tr><td>8</td><td>HC Black Eagles Silesia</td><td>1</td><td>13</td><td>12</td><td><a href="CELH-PLF-13.html">Game Direct Link</a></td></tr><tr><td>9</td><td>HC Eagles Moravia</td><td>1</td><td>14</td><td>12</td><td><a href="CELH-PLF-14.html">Game Direct Link</a></td></tr><tr><td>10</td><td>HC Black Eagles Silesia</td><td>1</td><td>23</td><td>12</td><td><a href="CELH-PLF-23.html">Game Direct Link</a></td></tr>
<tr><td colspan="6"><b>Most Pim In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>HC Eagles Moravia</td><td>1</td><td>231</td><td></td><td></td></tr>
<tr><td>2</td><td>HC Lions Bohemia</td><td>1</td><td>227</td><td></td><td></td></tr>
<tr><td>3</td><td>HC Lynx Kladno</td><td>1</td><td>208</td><td></td><td></td></tr>
<tr><td>4</td><td>HC Black Eagles Silesia</td><td>1</td><td>201</td><td></td><td></td></tr>

<tr><td colspan="6"><b>Less Pim In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>HC Black Eagles Silesia</td><td>1</td><td>201</td><td></td><td></td></tr>
<tr><td>2</td><td>HC Lynx Kladno</td><td>1</td><td>208</td><td></td><td></td></tr>
<tr><td>3</td><td>HC Lions Bohemia</td><td>1</td><td>227</td><td></td><td></td></tr>
<tr><td>4</td><td>HC Eagles Moravia</td><td>1</td><td>231</td><td></td><td></td></tr>

<tr><td colspan="6"><b>Most Hits In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW120">Link</td></tr>
<tr><td>1</td><td>HC Lynx Kladno</td><td>1</td><td>17</td><td>40</td><td><a href="CELH-PLF-17.html">Game Direct Link</a></td></tr><tr><td>2</td><td>HC Lynx Kladno</td><td>1</td><td>4</td><td>38</td><td><a href="CELH-PLF-4.html">Game Direct Link</a></td></tr><tr><td>3</td><td>HC Lynx Kladno</td><td>1</td><td>13</td><td>32</td><td><a href="CELH-PLF-13.html">Game Direct Link</a></td></tr><tr><td>4</td><td>HC Lions Bohemia</td><td>1</td><td>28</td><td>32</td><td><a href="CELH-PLF-28.html">Game Direct Link</a></td></tr><tr><td>5</td><td>HC Lynx Kladno</td><td>1</td><td>43</td><td>31</td><td><a href="CELH-PLF-43.html">Game Direct Link</a></td></tr><tr><td>6</td><td>HC Lions Bohemia</td><td>1</td><td>6</td><td>29</td><td><a href="CELH-PLF-6.html">Game Direct Link</a></td></tr><tr><td>7</td><td>HC Eagles Moravia</td><td>1</td><td>12</td><td>29</td><td><a href="CELH-PLF-12.html">Game Direct Link</a></td></tr><tr><td>8</td><td>HC Eagles Moravia</td><td>1</td><td>21</td><td>29</td><td><a href="CELH-PLF-21.html">Game Direct Link</a></td></tr><tr><td>9</td><td>HC Eagles Moravia</td><td>1</td><td>29</td><td>29</td><td><a href="CELH-PLF-29.html">Game Direct Link</a></td></tr><tr><td>10</td><td>HC Lynx Kladno</td><td>1</td><td>42</td><td>29</td><td><a href="CELH-PLF-42.html">Game Direct Link</a></td></tr>
<tr><td colspan="6"><b>Most Hits In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>HC Lynx Kladno</td><td>1</td><td>739</td><td></td><td></td></tr>
<tr><td>2</td><td>HC Lions Bohemia</td><td>1</td><td>633</td><td></td><td></td></tr>
<tr><td>3</td><td>HC Eagles Moravia</td><td>1</td><td>625</td><td></td><td></td></tr>
<tr><td>4</td><td>HC Black Eagles Silesia</td><td>1</td><td>544</td><td></td><td></td></tr>

<tr><td colspan="6"><b>Less Hit In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>HC Black Eagles Silesia</td><td>1</td><td>544</td><td></td><td></td></tr>
<tr><td>2</td><td>HC Eagles Moravia</td><td>1</td><td>625</td><td></td><td></td></tr>
<tr><td>3</td><td>HC Lions Bohemia</td><td>1</td><td>633</td><td></td><td></td></tr>
<tr><td>4</td><td>HC Lynx Kladno</td><td>1</td><td>739</td><td></td><td></td></tr>

<tr><td colspan="6"><b>Most Empty Net Goal In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>HC Eagles Moravia</td><td>1</td><td>1</td><td></td><td></td></tr>
<tr><td>2</td><td>HC Lions Bohemia</td><td>1</td><td>1</td><td></td><td></td></tr>
<tr><td>3</td><td>HC Black Eagles Silesia</td><td>1</td><td>1</td><td></td><td></td></tr>
<tr><td>4</td><td>HC Lynx Kladno</td><td>1</td><td>1</td><td></td><td></td></tr>

<tr><td colspan="6"><b>Best PP In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>HC Eagles Moravia</td><td>1</td><td>31.20%</td><td></td><td></td></tr>
<tr><td>2</td><td>HC Lions Bohemia</td><td>1</td><td>26.70%</td><td></td><td></td></tr>
<tr><td>3</td><td>HC Black Eagles Silesia</td><td>1</td><td>25.90%</td><td></td><td></td></tr>
<tr><td>4</td><td>HC Lynx Kladno</td><td>1</td><td>20.80%</td><td></td><td></td></tr>

<tr><td colspan="6"><b>Best PK In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>HC Eagles Moravia</td><td>1</td><td>75.90%</td><td></td><td></td></tr>
<tr><td>2</td><td>HC Black Eagles Silesia</td><td>1</td><td>75.00%</td><td></td><td></td></tr>
<tr><td>3</td><td>HC Lions Bohemia</td><td>1</td><td>73.20%</td><td></td><td></td></tr>
<tr><td>4</td><td>HC Lynx Kladno</td><td>1</td><td>70.90%</td><td></td><td></td></tr>

<tr><td colspan="6"><b>Worse PP In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>HC Lynx Kladno</td><td>1</td><td>20.80%</td><td></td><td></td></tr>
<tr><td>2</td><td>HC Black Eagles Silesia</td><td>1</td><td>25.90%</td><td></td><td></td></tr>
<tr><td>3</td><td>HC Lions Bohemia</td><td>1</td><td>26.70%</td><td></td><td></td></tr>
<tr><td>4</td><td>HC Eagles Moravia</td><td>1</td><td>31.20%</td><td></td><td></td></tr>

<tr><td colspan="6"><b>Worse PK In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>HC Lynx Kladno</td><td>1</td><td>70.90%</td><td></td><td></td></tr>
<tr><td>2</td><td>HC Lions Bohemia</td><td>1</td><td>73.20%</td><td></td><td></td></tr>
<tr><td>3</td><td>HC Black Eagles Silesia</td><td>1</td><td>75.00%</td><td></td><td></td></tr>
<tr><td>4</td><td>HC Eagles Moravia</td><td>1</td><td>75.90%</td><td></td><td></td></tr>

<tr><td colspan="6"><b>Most Win In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>HC Black Eagles Silesia</td><td>1</td><td>18</td><td></td><td></td></tr>
<tr><td>2</td><td>HC Eagles Moravia</td><td>1</td><td>16</td><td></td><td></td></tr>
<tr><td>3</td><td>HC Lions Bohemia</td><td>1</td><td>16</td><td></td><td></td></tr>
<tr><td>4</td><td>HC Lynx Kladno</td><td>1</td><td>10</td><td></td><td></td></tr>

<tr><td colspan="6"><b>Less Win In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>HC Lynx Kladno</td><td>1</td><td>10</td><td></td><td></td></tr>
<tr><td>2</td><td>HC Eagles Moravia</td><td>1</td><td>16</td><td></td><td></td></tr>
<tr><td>3</td><td>HC Lions Bohemia</td><td>1</td><td>16</td><td></td><td></td></tr>
<tr><td>4</td><td>HC Black Eagles Silesia</td><td>1</td><td>18</td><td></td><td></td></tr>

<tr><td colspan="6"><b>Most Lost In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>HC Lynx Kladno</td><td>1</td><td>20</td><td></td><td></td></tr>
<tr><td>2</td><td>HC Eagles Moravia</td><td>1</td><td>14</td><td></td><td></td></tr>
<tr><td>3</td><td>HC Lions Bohemia</td><td>1</td><td>14</td><td></td><td></td></tr>
<tr><td>4</td><td>HC Black Eagles Silesia</td><td>1</td><td>12</td><td></td><td></td></tr>

<tr><td colspan="6"><b>Less Lost In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>HC Black Eagles Silesia</td><td>1</td><td>12</td><td></td><td></td></tr>
<tr><td>2</td><td>HC Eagles Moravia</td><td>1</td><td>14</td><td></td><td></td></tr>
<tr><td>3</td><td>HC Lions Bohemia</td><td>1</td><td>14</td><td></td><td></td></tr>
<tr><td>4</td><td>HC Lynx Kladno</td><td>1</td><td>20</td><td></td><td></td></tr>

<tr><td colspan="6"><b>Most Points In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>HC Black Eagles Silesia</td><td>1</td><td>54</td><td></td><td></td></tr>
<tr><td>2</td><td>HC Eagles Moravia</td><td>1</td><td>50</td><td></td><td></td></tr>
<tr><td>3</td><td>HC Lions Bohemia</td><td>1</td><td>44</td><td></td><td></td></tr>
<tr><td>4</td><td>HC Lynx Kladno</td><td>1</td><td>32</td><td></td><td></td></tr>

<tr><td colspan="6"><b>Less Points In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>HC Lynx Kladno</td><td>1</td><td>32</td><td></td><td></td></tr>
<tr><td>2</td><td>HC Lions Bohemia</td><td>1</td><td>44</td><td></td><td></td></tr>
<tr><td>3</td><td>HC Eagles Moravia</td><td>1</td><td>50</td><td></td><td></td></tr>
<tr><td>4</td><td>HC Black Eagles Silesia</td><td>1</td><td>54</td><td></td><td></td></tr>

<tr><td colspan="6"><b>Most Win Home In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>HC Eagles Moravia</td><td>1</td><td>6</td><td></td><td></td></tr>
<tr><td>2</td><td>HC Black Eagles Silesia</td><td>1</td><td>6</td><td></td><td></td></tr>
<tr><td>3</td><td>HC Lions Bohemia</td><td>1</td><td>5</td><td></td><td></td></tr>
<tr><td>4</td><td>HC Lynx Kladno</td><td>1</td><td>3</td><td></td><td></td></tr>

<tr><td colspan="6"><b>Team Most Win Visitor In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>HC Black Eagles Silesia</td><td>1</td><td>7</td><td></td><td></td></tr>
<tr><td>2</td><td>HC Eagles Moravia</td><td>1</td><td>4</td><td></td><td></td></tr>
<tr><td>3</td><td>HC Lions Bohemia</td><td>1</td><td>4</td><td></td><td></td></tr>
<tr><td>4</td><td>HC Lynx Kladno</td><td>1</td><td>4</td><td></td><td></td></tr>

</table>
<h1 class="STHSLeagueRecord_PlayersRecords">Players Records</h1>
<table class="STHSRecordPlayerGoalerTable">
<tr><td colspan="7"><b>Most Ice Time In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Player Name</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW120">Link</td></tr>
<tr><td>1</td><td>Ondrej Ravchitikov</td><td>HC Eagles Moravia</td><td>1</td><td>2</td><td>33:12</td><td><a href="CELH-PLF-2.html">Game Direct Link</a></td></tr><tr><td>2</td><td>Tomas Pylon</td><td>HC Lynx Kladno</td><td>1</td><td>50</td><td>32:44</td><td><a href="CELH-PLF-50.html">Game Direct Link</a></td></tr><tr><td>3</td><td>Walter White</td><td>HC Lions Bohemia</td><td>1</td><td>2</td><td>32:13</td><td><a href="CELH-PLF-2.html">Game Direct Link</a></td></tr><tr><td>4</td><td>Ondrej Ravchitikov</td><td>HC Eagles Moravia</td><td>1</td><td>50</td><td>32:05</td><td><a href="CELH-PLF-50.html">Game Direct Link</a></td></tr><tr><td>5</td><td>Tomas Pylon</td><td>HC Lynx Kladno</td><td>1</td><td>30</td><td>31:45</td><td><a href="CELH-PLF-30.html">Game Direct Link</a></td></tr><tr><td>6</td><td>Sachimo Zoidberg</td><td>HC Eagles Moravia</td><td>1</td><td>2</td><td>31:42</td><td><a href="CELH-PLF-2.html">Game Direct Link</a></td></tr><tr><td>7</td><td>Tomas Pylon</td><td>HC Lynx Kladno</td><td>1</td><td>42</td><td>31:39</td><td><a href="CELH-PLF-42.html">Game Direct Link</a></td></tr><tr><td>8</td><td>Pierre-Luc Laflamme</td><td>HC Lions Bohemia</td><td>1</td><td>38</td><td>31:31</td><td><a href="CELH-PLF-38.html">Game Direct Link</a></td></tr><tr><td>9</td><td>Ondrej Ravchitikov</td><td>HC Eagles Moravia</td><td>1</td><td>16</td><td>31:30</td><td><a href="CELH-PLF-16.html">Game Direct Link</a></td></tr><tr><td>10</td><td>Pierre-Luc Laflamme</td><td>HC Lions Bohemia</td><td>1</td><td>42</td><td>31:24</td><td><a href="CELH-PLF-42.html">Game Direct Link</a></td></tr>
<tr><td colspan="7"><b>Most Ice Time In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Player Name</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Tomas Pylon</td><td>HC Lynx Kladno</td><td>1</td><td>879</td><td></td><td></td></tr>
<tr><td>2</td><td>Walter White</td><td>HC Lions Bohemia</td><td>1</td><td>852</td><td></td><td></td></tr>
<tr><td>3</td><td>Pierre-Luc Laflamme</td><td>HC Lions Bohemia</td><td>1</td><td>844</td><td></td><td></td></tr>
<tr><td>4</td><td>Ondrej Ravchitikov</td><td>HC Eagles Moravia</td><td>1</td><td>843</td><td></td><td></td></tr>
<tr><td>5</td><td>Sachimo Zoidberg</td><td>HC Eagles Moravia</td><td>1</td><td>831</td><td></td><td></td></tr>
<tr><td>6</td><td>Jakub Trocheck</td><td>HC Black Eagles Silesia</td><td>1</td><td>831</td><td></td><td></td></tr>
<tr><td>7</td><td>Zalleras Szlerchek</td><td>HC Black Eagles Silesia</td><td>1</td><td>792</td><td></td><td></td></tr>
<tr><td>8</td><td>Barret McCarthy</td><td>HC Lynx Kladno</td><td>1</td><td>783</td><td></td><td></td></tr>
<tr><td>9</td><td>Merit Csonka</td><td>HC Lynx Kladno</td><td>1</td><td>771</td><td></td><td></td></tr>
<tr><td>10</td><td>Troy McClure III</td><td>HC Lynx Kladno</td><td>1</td><td>760</td><td></td><td></td></tr>

<tr><td colspan="7"><b>Most Goals In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Player Name</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW120">Link</td></tr>
<tr><td>1</td><td>Ondrej Ravchitikov</td><td>HC Eagles Moravia</td><td>1</td><td>49</td><td>3</td><td><a href="CELH-PLF-49.html">Game Direct Link</a></td></tr><tr><td>2</td><td>Merit Csonka</td><td>HC Lynx Kladno</td><td>1</td><td>3</td><td>2</td><td><a href="CELH-PLF-3.html">Game Direct Link</a></td></tr><tr><td>3</td><td>Marian Potoczny</td><td>HC Eagles Moravia</td><td>1</td><td>12</td><td>2</td><td><a href="CELH-PLF-12.html">Game Direct Link</a></td></tr><tr><td>4</td><td>Alex Winters</td><td>HC Lynx Kladno</td><td>1</td><td>15</td><td>2</td><td><a href="CELH-PLF-15.html">Game Direct Link</a></td></tr><tr><td>5</td><td>Luke Thomason</td><td>HC Lions Bohemia</td><td>1</td><td>30</td><td>2</td><td><a href="CELH-PLF-30.html">Game Direct Link</a></td></tr><tr><td>6</td><td>Cash Savage</td><td>HC Lynx Kladno</td><td>1</td><td>32</td><td>2</td><td><a href="CELH-PLF-32.html">Game Direct Link</a></td></tr><tr><td>7</td><td>Ondrej Ravchitikov</td><td>HC Eagles Moravia</td><td>1</td><td>33</td><td>2</td><td><a href="CELH-PLF-33.html">Game Direct Link</a></td></tr><tr><td>8</td><td>Grayson St. Raegan</td><td>HC Lynx Kladno</td><td>1</td><td>37</td><td>2</td><td><a href="CELH-PLF-37.html">Game Direct Link</a></td></tr><tr><td>9</td><td>Dickie Pecker</td><td>HC Lions Bohemia</td><td>1</td><td>38</td><td>2</td><td><a href="CELH-PLF-38.html">Game Direct Link</a></td></tr><tr><td>10</td><td>Jakub Novak</td><td>HC Black Eagles Silesia</td><td>1</td><td>43</td><td>2</td><td><a href="CELH-PLF-43.html">Game Direct Link</a></td></tr>
<tr><td colspan="7"><b>Most Goals In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Player Name</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Marian Potoczny</td><td>HC Eagles Moravia</td><td>1</td><td>14</td><td></td><td></td></tr>
<tr><td>2</td><td>Dickie Pecker</td><td>HC Lions Bohemia</td><td>1</td><td>14</td><td></td><td></td></tr>
<tr><td>3</td><td>Merit Csonka</td><td>HC Lynx Kladno</td><td>1</td><td>13</td><td></td><td></td></tr>
<tr><td>4</td><td>Ondrej Ravchitikov</td><td>HC Eagles Moravia</td><td>1</td><td>13</td><td></td><td></td></tr>
<tr><td>5</td><td>Piotr Czerkawski</td><td>HC Black Eagles Silesia</td><td>1</td><td>10</td><td></td><td></td></tr>
<tr><td>6</td><td>Walter White</td><td>HC Lions Bohemia</td><td>1</td><td>9</td><td></td><td></td></tr>
<tr><td>7</td><td>Krysztof Kowalski</td><td>HC Black Eagles Silesia</td><td>1</td><td>8</td><td></td><td></td></tr>
<tr><td>8</td><td>Patrik Satan</td><td>HC Lynx Kladno</td><td>1</td><td>8</td><td></td><td></td></tr>
<tr><td>9</td><td>Slappy McDoodle</td><td>HC Eagles Moravia</td><td>1</td><td>7</td><td></td><td></td></tr>
<tr><td>10</td><td>Jakub Trocheck</td><td>HC Black Eagles Silesia</td><td>1</td><td>7</td><td></td><td></td></tr>

<tr><td colspan="7"><b>Most Assists In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Player Name</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW120">Link</td></tr>
<tr><td>1</td><td>Tomas Pylon</td><td>HC Lynx Kladno</td><td>1</td><td>4</td><td>3</td><td><a href="CELH-PLF-4.html">Game Direct Link</a></td></tr><tr><td>2</td><td>Ondrej Ravchitikov</td><td>HC Eagles Moravia</td><td>1</td><td>29</td><td>3</td><td><a href="CELH-PLF-29.html">Game Direct Link</a></td></tr><tr><td>3</td><td>Brady McIntyre</td><td>HC Eagles Moravia</td><td>1</td><td>45</td><td>3</td><td><a href="CELH-PLF-45.html">Game Direct Link</a></td></tr><tr><td>4</td><td>Marian Potoczny</td><td>HC Eagles Moravia</td><td>1</td><td>45</td><td>3</td><td><a href="CELH-PLF-45.html">Game Direct Link</a></td></tr><tr><td>5</td><td>Walter White</td><td>HC Lions Bohemia</td><td>1</td><td>46</td><td>3</td><td><a href="CELH-PLF-46.html">Game Direct Link</a></td></tr><tr><td>6</td><td>Slappy McDoodle</td><td>HC Eagles Moravia</td><td>1</td><td>2</td><td>2</td><td><a href="CELH-PLF-2.html">Game Direct Link</a></td></tr><tr><td>7</td><td>Ondrej Ravchitikov</td><td>HC Eagles Moravia</td><td>1</td><td>3</td><td>2</td><td><a href="CELH-PLF-3.html">Game Direct Link</a></td></tr><tr><td>8</td><td>Schnitinfritz Jagr</td><td>HC Lynx Kladno</td><td>1</td><td>3</td><td>2</td><td><a href="CELH-PLF-3.html">Game Direct Link</a></td></tr><tr><td>9</td><td>Walter White</td><td>HC Lions Bohemia</td><td>1</td><td>5</td><td>2</td><td><a href="CELH-PLF-5.html">Game Direct Link</a></td></tr><tr><td>10</td><td>Zalleras Szlerchek</td><td>HC Black Eagles Silesia</td><td>1</td><td>5</td><td>2</td><td><a href="CELH-PLF-5.html">Game Direct Link</a></td></tr>
<tr><td colspan="7"><b>Most Assists In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Player Name</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Ondrej Ravchitikov</td><td>HC Eagles Moravia</td><td>1</td><td>28</td><td></td><td></td></tr>
<tr><td>2</td><td>Walter White</td><td>HC Lions Bohemia</td><td>1</td><td>27</td><td></td><td></td></tr>
<tr><td>3</td><td>Zalleras Szlerchek</td><td>HC Black Eagles Silesia</td><td>1</td><td>18</td><td></td><td></td></tr>
<tr><td>4</td><td>Sachimo Zoidberg</td><td>HC Eagles Moravia</td><td>1</td><td>18</td><td></td><td></td></tr>
<tr><td>5</td><td>DeMaricus Smyth</td><td>HC Lions Bohemia</td><td>1</td><td>17</td><td></td><td></td></tr>
<tr><td>6</td><td>Marian Potoczny</td><td>HC Eagles Moravia</td><td>1</td><td>16</td><td></td><td></td></tr>
<tr><td>7</td><td>Schnitinfritz Jagr</td><td>HC Lynx Kladno</td><td>1</td><td>16</td><td></td><td></td></tr>
<tr><td>8</td><td>Slappy McDoodle</td><td>HC Eagles Moravia</td><td>1</td><td>16</td><td></td><td></td></tr>
<tr><td>9</td><td>Piotr Czerkawski</td><td>HC Black Eagles Silesia</td><td>1</td><td>14</td><td></td><td></td></tr>
<tr><td>10</td><td>Dickie Pecker</td><td>HC Lions Bohemia</td><td>1</td><td>14</td><td></td><td></td></tr>

<tr><td colspan="7"><b>Most Points In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Player Name</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW120">Link</td></tr>
<tr><td>1</td><td>Tomas Pylon</td><td>HC Lynx Kladno</td><td>1</td><td>4</td><td>3</td><td><a href="CELH-PLF-4.html">Game Direct Link</a></td></tr><tr><td>2</td><td>Marian Potoczny</td><td>HC Eagles Moravia</td><td>1</td><td>8</td><td>3</td><td><a href="CELH-PLF-8.html">Game Direct Link</a></td></tr><tr><td>3</td><td>Marian Potoczny</td><td>HC Eagles Moravia</td><td>1</td><td>12</td><td>3</td><td><a href="CELH-PLF-12.html">Game Direct Link</a></td></tr><tr><td>4</td><td>Ondrej Ravchitikov</td><td>HC Eagles Moravia</td><td>1</td><td>12</td><td>3</td><td><a href="CELH-PLF-12.html">Game Direct Link</a></td></tr><tr><td>5</td><td>Ondrej Ravchitikov</td><td>HC Eagles Moravia</td><td>1</td><td>29</td><td>3</td><td><a href="CELH-PLF-29.html">Game Direct Link</a></td></tr><tr><td>6</td><td>Walter White</td><td>HC Lions Bohemia</td><td>1</td><td>32</td><td>3</td><td><a href="CELH-PLF-32.html">Game Direct Link</a></td></tr><tr><td>7</td><td>Ondrej Ravchitikov</td><td>HC Eagles Moravia</td><td>1</td><td>37</td><td>3</td><td><a href="CELH-PLF-37.html">Game Direct Link</a></td></tr><tr><td>8</td><td>Brady McIntyre</td><td>HC Eagles Moravia</td><td>1</td><td>45</td><td>3</td><td><a href="CELH-PLF-45.html">Game Direct Link</a></td></tr><tr><td>9</td><td>Marian Potoczny</td><td>HC Eagles Moravia</td><td>1</td><td>45</td><td>3</td><td><a href="CELH-PLF-45.html">Game Direct Link</a></td></tr><tr><td>10</td><td>Walter White</td><td>HC Lions Bohemia</td><td>1</td><td>46</td><td>3</td><td><a href="CELH-PLF-46.html">Game Direct Link</a></td></tr>
<tr><td colspan="7"><b>Most Points In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Player Name</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Ondrej Ravchitikov</td><td>HC Eagles Moravia</td><td>1</td><td>41</td><td></td><td></td></tr>
<tr><td>2</td><td>Walter White</td><td>HC Lions Bohemia</td><td>1</td><td>36</td><td></td><td></td></tr>
<tr><td>3</td><td>Marian Potoczny</td><td>HC Eagles Moravia</td><td>1</td><td>30</td><td></td><td></td></tr>
<tr><td>4</td><td>Dickie Pecker</td><td>HC Lions Bohemia</td><td>1</td><td>28</td><td></td><td></td></tr>
<tr><td>5</td><td>Sachimo Zoidberg</td><td>HC Eagles Moravia</td><td>1</td><td>25</td><td></td><td></td></tr>
<tr><td>6</td><td>Piotr Czerkawski</td><td>HC Black Eagles Silesia</td><td>1</td><td>24</td><td></td><td></td></tr>
<tr><td>7</td><td>Slappy McDoodle</td><td>HC Eagles Moravia</td><td>1</td><td>23</td><td></td><td></td></tr>
<tr><td>8</td><td>Zalleras Szlerchek</td><td>HC Black Eagles Silesia</td><td>1</td><td>23</td><td></td><td></td></tr>
<tr><td>9</td><td>Merit Csonka</td><td>HC Lynx Kladno</td><td>1</td><td>22</td><td></td><td></td></tr>
<tr><td>10</td><td>DeMaricus Smyth</td><td>HC Lions Bohemia</td><td>1</td><td>20</td><td></td><td></td></tr>

<tr><td colspan="7"><b>Most Shots In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Player Name</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW120">Link</td></tr>
<tr><td>1</td><td>Dickie Pecker</td><td>HC Lions Bohemia</td><td>1</td><td>24</td><td>12</td><td><a href="CELH-PLF-24.html">Game Direct Link</a></td></tr><tr><td>2</td><td>Ondrej Ravchitikov</td><td>HC Eagles Moravia</td><td>1</td><td>49</td><td>11</td><td><a href="CELH-PLF-49.html">Game Direct Link</a></td></tr><tr><td>3</td><td>Merit Csonka</td><td>HC Lynx Kladno</td><td>1</td><td>52</td><td>11</td><td><a href="CELH-PLF-52.html">Game Direct Link</a></td></tr><tr><td>4</td><td>Ondrej Ravchitikov</td><td>HC Eagles Moravia</td><td>1</td><td>10</td><td>10</td><td><a href="CELH-PLF-10.html">Game Direct Link</a></td></tr><tr><td>5</td><td>Marian Potoczny</td><td>HC Eagles Moravia</td><td>1</td><td>45</td><td>10</td><td><a href="CELH-PLF-45.html">Game Direct Link</a></td></tr><tr><td>6</td><td>Dickie Pecker</td><td>HC Lions Bohemia</td><td>1</td><td>5</td><td>9</td><td><a href="CELH-PLF-5.html">Game Direct Link</a></td></tr><tr><td>7</td><td>Ondrej Ravchitikov</td><td>HC Eagles Moravia</td><td>1</td><td>37</td><td>9</td><td><a href="CELH-PLF-37.html">Game Direct Link</a></td></tr><tr><td>8</td><td>Merit Csonka</td><td>HC Lynx Kladno</td><td>1</td><td>48</td><td>9</td><td><a href="CELH-PLF-48.html">Game Direct Link</a></td></tr><tr><td>9</td><td>Sachimo Zoidberg</td><td>HC Eagles Moravia</td><td>1</td><td>50</td><td>9</td><td><a href="CELH-PLF-50.html">Game Direct Link</a></td></tr><tr><td>10</td><td>Merit Csonka</td><td>HC Lynx Kladno</td><td>1</td><td>27</td><td>8</td><td><a href="CELH-PLF-27.html">Game Direct Link</a></td></tr>
<tr><td colspan="7"><b>Most Shots In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Player Name</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Ondrej Ravchitikov</td><td>HC Eagles Moravia</td><td>1</td><td>161</td><td></td><td></td></tr>
<tr><td>2</td><td>Dickie Pecker</td><td>HC Lions Bohemia</td><td>1</td><td>150</td><td></td><td></td></tr>
<tr><td>3</td><td>Merit Csonka</td><td>HC Lynx Kladno</td><td>1</td><td>142</td><td></td><td></td></tr>
<tr><td>4</td><td>Walter White</td><td>HC Lions Bohemia</td><td>1</td><td>123</td><td></td><td></td></tr>
<tr><td>5</td><td>Marian Potoczny</td><td>HC Eagles Moravia</td><td>1</td><td>113</td><td></td><td></td></tr>
<tr><td>6</td><td>Vratislav Zbynek</td><td>HC Black Eagles Silesia</td><td>1</td><td>109</td><td></td><td></td></tr>
<tr><td>7</td><td>Matej Stransky</td><td>HC Lions Bohemia</td><td>1</td><td>103</td><td></td><td></td></tr>
<tr><td>8</td><td>Piotr Czerkawski</td><td>HC Black Eagles Silesia</td><td>1</td><td>98</td><td></td><td></td></tr>
<tr><td>9</td><td>Slappy McDoodle</td><td>HC Eagles Moravia</td><td>1</td><td>98</td><td></td><td></td></tr>
<tr><td>10</td><td>Zalleras Szlerchek</td><td>HC Black Eagles Silesia</td><td>1</td><td>93</td><td></td><td></td></tr>

<tr><td colspan="7"><b>Most Shots Blocked In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Player Name</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW120">Link</td></tr>
<tr><td>1</td><td>Jakub Trocheck</td><td>HC Black Eagles Silesia</td><td>1</td><td>28</td><td>7</td><td><a href="CELH-PLF-28.html">Game Direct Link</a></td></tr><tr><td>2</td><td>Brady McIntyre</td><td>HC Eagles Moravia</td><td>1</td><td>27</td><td>5</td><td><a href="CELH-PLF-27.html">Game Direct Link</a></td></tr><tr><td>3</td><td>Sean Stevenson Jr.</td><td>HC Lions Bohemia</td><td>1</td><td>32</td><td>5</td><td><a href="CELH-PLF-32.html">Game Direct Link</a></td></tr><tr><td>4</td><td>Pierre-Luc Laflamme</td><td>HC Lions Bohemia</td><td>1</td><td>36</td><td>5</td><td><a href="CELH-PLF-36.html">Game Direct Link</a></td></tr><tr><td>5</td><td>Charlie Schieck</td><td>HC Black Eagles Silesia</td><td>1</td><td>49</td><td>5</td><td><a href="CELH-PLF-49.html">Game Direct Link</a></td></tr><tr><td>6</td><td>Walter White</td><td>HC Lions Bohemia</td><td>1</td><td>59</td><td>5</td><td><a href="CELH-PLF-59.html">Game Direct Link</a></td></tr><tr><td>7</td><td>Pierre-Luc Laflamme</td><td>HC Lions Bohemia</td><td>1</td><td>2</td><td>4</td><td><a href="CELH-PLF-2.html">Game Direct Link</a></td></tr><tr><td>8</td><td>Tokek Takshak</td><td>HC Lions Bohemia</td><td>1</td><td>6</td><td>4</td><td><a href="CELH-PLF-6.html">Game Direct Link</a></td></tr><tr><td>9</td><td>Brady McIntyre</td><td>HC Eagles Moravia</td><td>1</td><td>8</td><td>4</td><td><a href="CELH-PLF-8.html">Game Direct Link</a></td></tr><tr><td>10</td><td>Samee Iqbal</td><td>HC Black Eagles Silesia</td><td>1</td><td>9</td><td>4</td><td><a href="CELH-PLF-9.html">Game Direct Link</a></td></tr>
<tr><td colspan="7"><b>Most Shots Blocked In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Player Name</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Jakub Trocheck</td><td>HC Black Eagles Silesia</td><td>1</td><td>58</td><td></td><td></td></tr>
<tr><td>2</td><td>Barret McCarthy</td><td>HC Lynx Kladno</td><td>1</td><td>47</td><td></td><td></td></tr>
<tr><td>3</td><td>Pierre-Luc Laflamme</td><td>HC Lions Bohemia</td><td>1</td><td>46</td><td></td><td></td></tr>
<tr><td>4</td><td>Walter White</td><td>HC Lions Bohemia</td><td>1</td><td>44</td><td></td><td></td></tr>
<tr><td>5</td><td>Brady McIntyre</td><td>HC Eagles Moravia</td><td>1</td><td>43</td><td></td><td></td></tr>
<tr><td>6</td><td>Tomas Pylon</td><td>HC Lynx Kladno</td><td>1</td><td>41</td><td></td><td></td></tr>
<tr><td>7</td><td>Sachimo Zoidberg</td><td>HC Eagles Moravia</td><td>1</td><td>39</td><td></td><td></td></tr>
<tr><td>8</td><td>Troy McClure III</td><td>HC Lynx Kladno</td><td>1</td><td>34</td><td></td><td></td></tr>
<tr><td>9</td><td>Ondrej Ravchitikov</td><td>HC Eagles Moravia</td><td>1</td><td>33</td><td></td><td></td></tr>
<tr><td>10</td><td>Charlie Schieck</td><td>HC Black Eagles Silesia</td><td>1</td><td>32</td><td></td><td></td></tr>

<tr><td colspan="7"><b>Most Plus Minus In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Player Name</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW120">Link</td></tr>
<tr><td>1</td><td>Sean Stevenson Jr.</td><td>HC Lions Bohemia</td><td>1</td><td>2</td><td>2</td><td><a href="CELH-PLF-2.html">Game Direct Link</a></td></tr><tr><td>2</td><td>Tokek Takshak</td><td>HC Lions Bohemia</td><td>1</td><td>2</td><td>2</td><td><a href="CELH-PLF-2.html">Game Direct Link</a></td></tr><tr><td>3</td><td>Matej Stransky</td><td>HC Lions Bohemia</td><td>1</td><td>2</td><td>2</td><td><a href="CELH-PLF-2.html">Game Direct Link</a></td></tr><tr><td>4</td><td>Troy McClure III</td><td>HC Lynx Kladno</td><td>1</td><td>4</td><td>2</td><td><a href="CELH-PLF-4.html">Game Direct Link</a></td></tr><tr><td>5</td><td>Tomas Pylon</td><td>HC Lynx Kladno</td><td>1</td><td>4</td><td>2</td><td><a href="CELH-PLF-4.html">Game Direct Link</a></td></tr><tr><td>6</td><td>Marian Potoczny</td><td>HC Eagles Moravia</td><td>1</td><td>8</td><td>2</td><td><a href="CELH-PLF-8.html">Game Direct Link</a></td></tr><tr><td>7</td><td>Slappy McDoodle</td><td>HC Eagles Moravia</td><td>1</td><td>8</td><td>2</td><td><a href="CELH-PLF-8.html">Game Direct Link</a></td></tr><tr><td>8</td><td>Radovan Hudec</td><td>HC Lynx Kladno</td><td>1</td><td>19</td><td>2</td><td><a href="CELH-PLF-19.html">Game Direct Link</a></td></tr><tr><td>9</td><td>Ravyn Tedisko</td><td>HC Lynx Kladno</td><td>1</td><td>19</td><td>2</td><td><a href="CELH-PLF-19.html">Game Direct Link</a></td></tr><tr><td>10</td><td>Merit Csonka</td><td>HC Lynx Kladno</td><td>1</td><td>19</td><td>2</td><td><a href="CELH-PLF-19.html">Game Direct Link</a></td></tr>
<tr><td colspan="7"><b>Most Plus Minus In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Player Name</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Marian Potoczny</td><td>HC Eagles Moravia</td><td>1</td><td>7</td><td></td><td></td></tr>
<tr><td>2</td><td>Aviad Ratzon</td><td>HC Eagles Moravia</td><td>1</td><td>6</td><td></td><td></td></tr>
<tr><td>3</td><td>Slappy McDoodle</td><td>HC Eagles Moravia</td><td>1</td><td>6</td><td></td><td></td></tr>
<tr><td>4</td><td>Alexander Zajac</td><td>HC Black Eagles Silesia</td><td>1</td><td>5</td><td></td><td></td></tr>
<tr><td>5</td><td>Przemyslaw Brzeszczyczkiewicz</td><td>HC Black Eagles Silesia</td><td>1</td><td>5</td><td></td><td></td></tr>
<tr><td>6</td><td>Matej Stransky</td><td>HC Lions Bohemia</td><td>1</td><td>5</td><td></td><td></td></tr>
<tr><td>7</td><td>Aron Hernadivic</td><td>HC Black Eagles Silesia</td><td>1</td><td>4</td><td></td><td></td></tr>
<tr><td>8</td><td>Pierre-Luc Laflamme</td><td>HC Lions Bohemia</td><td>1</td><td>4</td><td></td><td></td></tr>
<tr><td>9</td><td>Travis Jeziak</td><td>HC Lions Bohemia</td><td>1</td><td>4</td><td></td><td></td></tr>
<tr><td>10</td><td>Walter White</td><td>HC Lions Bohemia</td><td>1</td><td>4</td><td></td><td></td></tr>

<tr><td colspan="7"><b>Worse Plus Minus In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Player Name</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW120">Link</td></tr>
<tr><td>1</td><td>Ondrej Ravchitikov</td><td>HC Eagles Moravia</td><td>1</td><td>2</td><td>-2</td><td><a href="CELH-PLF-2.html">Game Direct Link</a></td></tr><tr><td>2</td><td>Sachimo Zoidberg</td><td>HC Eagles Moravia</td><td>1</td><td>2</td><td>-2</td><td><a href="CELH-PLF-2.html">Game Direct Link</a></td></tr><tr><td>3</td><td>Barret McCarthy</td><td>HC Lynx Kladno</td><td>1</td><td>3</td><td>-2</td><td><a href="CELH-PLF-3.html">Game Direct Link</a></td></tr><tr><td>4</td><td>Noctis Caelum</td><td>HC Lynx Kladno</td><td>1</td><td>3</td><td>-2</td><td><a href="CELH-PLF-3.html">Game Direct Link</a></td></tr><tr><td>5</td><td>DeMaricus Smyth</td><td>HC Lions Bohemia</td><td>1</td><td>5</td><td>-2</td><td><a href="CELH-PLF-5.html">Game Direct Link</a></td></tr><tr><td>6</td><td>Luke Thomason</td><td>HC Lions Bohemia</td><td>1</td><td>5</td><td>-2</td><td><a href="CELH-PLF-5.html">Game Direct Link</a></td></tr><tr><td>7</td><td>Dickie Pecker</td><td>HC Lions Bohemia</td><td>1</td><td>5</td><td>-2</td><td><a href="CELH-PLF-5.html">Game Direct Link</a></td></tr><tr><td>8</td><td>Alex Winters</td><td>HC Lynx Kladno</td><td>1</td><td>11</td><td>-2</td><td><a href="CELH-PLF-11.html">Game Direct Link</a></td></tr><tr><td>9</td><td>Tomas Pylon</td><td>HC Lynx Kladno</td><td>1</td><td>11</td><td>-2</td><td><a href="CELH-PLF-11.html">Game Direct Link</a></td></tr><tr><td>10</td><td>Jan Zacha</td><td>HC Lions Bohemia</td><td>1</td><td>20</td><td>-2</td><td><a href="CELH-PLF-20.html">Game Direct Link</a></td></tr>
<tr><td colspan="7"><b>Worse Plus Minus In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Player Name</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Jakub Novak</td><td>HC Black Eagles Silesia</td><td>1</td><td>-6</td><td></td><td></td></tr>
<tr><td>2</td><td>Vratislav Zbynek</td><td>HC Black Eagles Silesia</td><td>1</td><td>-6</td><td></td><td></td></tr>
<tr><td>3</td><td>Boruvka Banananak</td><td>HC Eagles Moravia</td><td>1</td><td>-5</td><td></td><td></td></tr>
<tr><td>4</td><td>Merit Csonka</td><td>HC Lynx Kladno</td><td>1</td><td>-5</td><td></td><td></td></tr>
<tr><td>5</td><td>Alex Winters</td><td>HC Lynx Kladno</td><td>1</td><td>-4</td><td></td><td></td></tr>
<tr><td>6</td><td>Schnitinfritz Jagr</td><td>HC Lynx Kladno</td><td>1</td><td>-4</td><td></td><td></td></tr>
<tr><td>7</td><td>Troy McClure III</td><td>HC Lynx Kladno</td><td>1</td><td>-4</td><td></td><td></td></tr>
<tr><td>8</td><td>Kornel Kasparek</td><td>HC Lynx Kladno</td><td>1</td><td>-3</td><td></td><td></td></tr>
<tr><td>9</td><td>Potato Chips</td><td>HC Eagles Moravia</td><td>1</td><td>-3</td><td></td><td></td></tr>
<tr><td>10</td><td>Samee Iqbal</td><td>HC Black Eagles Silesia</td><td>1</td><td>-3</td><td></td><td></td></tr>

<tr><td colspan="7"><b>Most Pim In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Player Name</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW120">Link</td></tr>
<tr><td>1</td><td>DeMaricus Smyth</td><td>HC Lions Bohemia</td><td>1</td><td>18</td><td>6</td><td><a href="CELH-PLF-18.html">Game Direct Link</a></td></tr><tr><td>2</td><td>Ty Justice</td><td>HC Eagles Moravia</td><td>1</td><td>29</td><td>6</td><td><a href="CELH-PLF-29.html">Game Direct Link</a></td></tr><tr><td>3</td><td>Petr Kolesnikovs</td><td>HC Lions Bohemia</td><td>1</td><td>32</td><td>6</td><td><a href="CELH-PLF-32.html">Game Direct Link</a></td></tr><tr><td>4</td><td>Samee Iqbal</td><td>HC Black Eagles Silesia</td><td>1</td><td>38</td><td>6</td><td><a href="CELH-PLF-38.html">Game Direct Link</a></td></tr><tr><td>5</td><td>Jakub Trocheck</td><td>HC Black Eagles Silesia</td><td>1</td><td>38</td><td>6</td><td><a href="CELH-PLF-38.html">Game Direct Link</a></td></tr><tr><td>6</td><td>Dionyz Vyskoc</td><td>HC Eagles Moravia</td><td>1</td><td>29</td><td>5</td><td><a href="CELH-PLF-29.html">Game Direct Link</a></td></tr><tr><td>7</td><td>Krysztof Kowalski</td><td>HC Black Eagles Silesia</td><td>1</td><td>29</td><td>5</td><td><a href="CELH-PLF-29.html">Game Direct Link</a></td></tr><tr><td>8</td><td>Tokek Takshak</td><td>HC Lions Bohemia</td><td>1</td><td>55</td><td>5</td><td><a href="CELH-PLF-55.html">Game Direct Link</a></td></tr><tr><td>9</td><td>Vratislav Zbynek</td><td>HC Black Eagles Silesia</td><td>1</td><td>1</td><td>4</td><td><a href="CELH-PLF-1.html">Game Direct Link</a></td></tr><tr><td>10</td><td>DeMaricus Smyth</td><td>HC Lions Bohemia</td><td>1</td><td>2</td><td>4</td><td><a href="CELH-PLF-2.html">Game Direct Link</a></td></tr>
<tr><td colspan="7"><b>Most Pim In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Player Name</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Brady McIntyre</td><td>HC Eagles Moravia</td><td>1</td><td>30</td><td></td><td></td></tr>
<tr><td>2</td><td>Jakub Trocheck</td><td>HC Black Eagles Silesia</td><td>1</td><td>28</td><td></td><td></td></tr>
<tr><td>3</td><td>DeMaricus Smyth</td><td>HC Lions Bohemia</td><td>1</td><td>26</td><td></td><td></td></tr>
<tr><td>4</td><td>Matej Stransky</td><td>HC Lions Bohemia</td><td>1</td><td>26</td><td></td><td></td></tr>
<tr><td>5</td><td>Tokek Takshak</td><td>HC Lions Bohemia</td><td>1</td><td>25</td><td></td><td></td></tr>
<tr><td>6</td><td>Marian Potoczny</td><td>HC Eagles Moravia</td><td>1</td><td>24</td><td></td><td></td></tr>
<tr><td>7</td><td>Pierre-Luc Laflamme</td><td>HC Lions Bohemia</td><td>1</td><td>24</td><td></td><td></td></tr>
<tr><td>8</td><td>Schnitinfritz Jagr</td><td>HC Lynx Kladno</td><td>1</td><td>24</td><td></td><td></td></tr>
<tr><td>9</td><td>Sachimo Zoidberg</td><td>HC Eagles Moravia</td><td>1</td><td>24</td><td></td><td></td></tr>
<tr><td>10</td><td>Ty Justice</td><td>HC Eagles Moravia</td><td>1</td><td>22</td><td></td><td></td></tr>

<tr><td colspan="7"><b>Most Hits In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Player Name</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW120">Link</td></tr>
<tr><td>1</td><td>Tomas Pylon</td><td>HC Lynx Kladno</td><td>1</td><td>13</td><td>7</td><td><a href="CELH-PLF-13.html">Game Direct Link</a></td></tr><tr><td>2</td><td>Merit Csonka</td><td>HC Lynx Kladno</td><td>1</td><td>15</td><td>7</td><td><a href="CELH-PLF-15.html">Game Direct Link</a></td></tr><tr><td>3</td><td>Dionyz Vyskoc</td><td>HC Eagles Moravia</td><td>1</td><td>16</td><td>7</td><td><a href="CELH-PLF-16.html">Game Direct Link</a></td></tr><tr><td>4</td><td>Sachimo Zoidberg</td><td>HC Eagles Moravia</td><td>1</td><td>16</td><td>7</td><td><a href="CELH-PLF-16.html">Game Direct Link</a></td></tr><tr><td>5</td><td>Tomas Pylon</td><td>HC Lynx Kladno</td><td>1</td><td>17</td><td>7</td><td><a href="CELH-PLF-17.html">Game Direct Link</a></td></tr><tr><td>6</td><td>Piotr Czerkawski</td><td>HC Black Eagles Silesia</td><td>1</td><td>47</td><td>7</td><td><a href="CELH-PLF-47.html">Game Direct Link</a></td></tr><tr><td>7</td><td>Walter White</td><td>HC Lions Bohemia</td><td>1</td><td>60</td><td>7</td><td><a href="CELH-PLF-60.html">Game Direct Link</a></td></tr><tr><td>8</td><td>Merit Csonka</td><td>HC Lynx Kladno</td><td>1</td><td>4</td><td>6</td><td><a href="CELH-PLF-4.html">Game Direct Link</a></td></tr><tr><td>9</td><td>Troy McClure III</td><td>HC Lynx Kladno</td><td>1</td><td>13</td><td>6</td><td><a href="CELH-PLF-13.html">Game Direct Link</a></td></tr><tr><td>10</td><td>Sachimo Zoidberg</td><td>HC Eagles Moravia</td><td>1</td><td>37</td><td>6</td><td><a href="CELH-PLF-37.html">Game Direct Link</a></td></tr>
<tr><td colspan="7"><b>Most Hits In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Player Name</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Merit Csonka</td><td>HC Lynx Kladno</td><td>1</td><td>92</td><td></td><td></td></tr>
<tr><td>2</td><td>Walter White</td><td>HC Lions Bohemia</td><td>1</td><td>89</td><td></td><td></td></tr>
<tr><td>3</td><td>Sachimo Zoidberg</td><td>HC Eagles Moravia</td><td>1</td><td>85</td><td></td><td></td></tr>
<tr><td>4</td><td>Troy McClure III</td><td>HC Lynx Kladno</td><td>1</td><td>73</td><td></td><td></td></tr>
<tr><td>5</td><td>DeMaricus Smyth</td><td>HC Lions Bohemia</td><td>1</td><td>68</td><td></td><td></td></tr>
<tr><td>6</td><td>Piotr Czerkawski</td><td>HC Black Eagles Silesia</td><td>1</td><td>64</td><td></td><td></td></tr>
<tr><td>7</td><td>Zalleras Szlerchek</td><td>HC Black Eagles Silesia</td><td>1</td><td>64</td><td></td><td></td></tr>
<tr><td>8</td><td>Slappy McDoodle</td><td>HC Eagles Moravia</td><td>1</td><td>62</td><td></td><td></td></tr>
<tr><td>9</td><td>Cash Savage</td><td>HC Lynx Kladno</td><td>1</td><td>61</td><td></td><td></td></tr>
<tr><td>10</td><td>Pierre-Luc Laflamme</td><td>HC Lions Bohemia</td><td>1</td><td>59</td><td></td><td></td></tr>

<tr><td colspan="7"><b>Most Empty Net Goal In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Player Name</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Dickie Pecker</td><td>HC Lions Bohemia</td><td>1</td><td>1</td><td></td><td></td></tr>
<tr><td>2</td><td>Merit Csonka</td><td>HC Lynx Kladno</td><td>1</td><td>1</td><td></td><td></td></tr>
<tr><td>3</td><td>Ondrej Ravchitikov</td><td>HC Eagles Moravia</td><td>1</td><td>1</td><td></td><td></td></tr>
<tr><td>4</td><td>Sachimo Zoidberg</td><td>HC Eagles Moravia</td><td>1</td><td>1</td><td></td><td></td></tr>

<tr><td colspan="7"><b>Most Hat Trick In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Player Name</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Ondrej Ravchitikov</td><td>HC Eagles Moravia</td><td>1</td><td>1</td><td></td><td></td></tr>

<tr><td colspan="7"><b>Best Faceoff in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Player Name</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Piotr Czerkawski</td><td>HC Black Eagles Silesia</td><td>1</td><td>56.20%</td><td></td><td></td></tr>
<tr><td>2</td><td>DeMaricus Smyth</td><td>HC Lions Bohemia</td><td>1</td><td>54.90%</td><td></td><td></td></tr>
<tr><td>3</td><td>Schnitinfritz Jagr</td><td>HC Lynx Kladno</td><td>1</td><td>52.50%</td><td></td><td></td></tr>
<tr><td>4</td><td>Slappy McDoodle</td><td>HC Eagles Moravia</td><td>1</td><td>52.20%</td><td></td><td></td></tr>
<tr><td>5</td><td>Zalleras Szlerchek</td><td>HC Black Eagles Silesia</td><td>1</td><td>52.20%</td><td></td><td></td></tr>
<tr><td>6</td><td>Michael Scarn</td><td>HC Lynx Kladno</td><td>1</td><td>50.50%</td><td></td><td></td></tr>
<tr><td>7</td><td>Shouta Aizawa</td><td>HC Lynx Kladno</td><td>1</td><td>50.50%</td><td></td><td></td></tr>
<tr><td>8</td><td>Krysztof Kowalski</td><td>HC Black Eagles Silesia</td><td>1</td><td>49.30%</td><td></td><td></td></tr>
<tr><td>9</td><td>Travis Jeziak</td><td>HC Lions Bohemia</td><td>1</td><td>49.20%</td><td></td><td></td></tr>
<tr><td>10</td><td>Mikhail Kladno</td><td>HC Eagles Moravia</td><td>1</td><td>47.50%</td><td></td><td></td></tr>

</table>
<h1 class="STHSLeagueRecord_GoaliesRecords">Goalies Records</h1>
<table class="STHSRecordTable">
<tr><td colspan="7"><b>Shutout In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Player Name</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Mike Verminski</td><td>HC Black Eagles Silesia</td><td>1</td><td>2</td><td></td><td></td></tr>
<tr><td>2</td><td>Georgette Pel</td><td>HC Lynx Kladno</td><td>1</td><td>2</td><td></td><td></td></tr>
<tr><td>3</td><td>Christoffer Bjornsson</td><td>HC Eagles Moravia</td><td>1</td><td>2</td><td></td><td></td></tr>
<tr><td>4</td><td>Chris Partridge</td><td>HC Lions Bohemia</td><td>1</td><td>1</td><td></td><td></td></tr>

<tr><td colspan="7"><b>Shots Received In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Player Name</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Georgette Pel</td><td>HC Lynx Kladno</td><td>1</td><td>905</td><td></td><td></td></tr>
<tr><td>2</td><td>Mike Verminski</td><td>HC Black Eagles Silesia</td><td>1</td><td>891</td><td></td><td></td></tr>
<tr><td>3</td><td>Chris Partridge</td><td>HC Lions Bohemia</td><td>1</td><td>832</td><td></td><td></td></tr>
<tr><td>4</td><td>Christoffer Bjornsson</td><td>HC Eagles Moravia</td><td>1</td><td>819</td><td></td><td></td></tr>

<tr><td colspan="7"><b>Win In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Player Name</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Mike Verminski</td><td>HC Black Eagles Silesia</td><td>1</td><td>18</td><td></td><td></td></tr>
<tr><td>2</td><td>Chris Partridge</td><td>HC Lions Bohemia</td><td>1</td><td>16</td><td></td><td></td></tr>
<tr><td>3</td><td>Christoffer Bjornsson</td><td>HC Eagles Moravia</td><td>1</td><td>16</td><td></td><td></td></tr>
<tr><td>4</td><td>Georgette Pel</td><td>HC Lynx Kladno</td><td>1</td><td>10</td><td></td><td></td></tr>

<tr><td colspan="7"><b>Lost In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Player Name</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Georgette Pel</td><td>HC Lynx Kladno</td><td>1</td><td>15</td><td></td><td></td></tr>
<tr><td>2</td><td>Chris Partridge</td><td>HC Lions Bohemia</td><td>1</td><td>11</td><td></td><td></td></tr>
<tr><td>3</td><td>Mike Verminski</td><td>HC Black Eagles Silesia</td><td>1</td><td>7</td><td></td><td></td></tr>
<tr><td>4</td><td>Christoffer Bjornsson</td><td>HC Eagles Moravia</td><td>1</td><td>6</td><td></td><td></td></tr>

</table>
<h1 class="STHSLeagueRecord_GameRecords">Game Records</h1>
<table class="STHSRecordPlayerGoalerTable">
<tr><td colspan="7"><b>Most Goals</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Home Team Name</td><td class="STHSW200">Visitor Team Name</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW120">Link</td></tr>
<tr><td>1</td><td>HC Lions Bohemia</td><td>HC Eagles Moravia</td><td>1</td><td>2</td><td>7</td><td><a href="CELH-PLF-2.html">Game Direct Link</a></td></tr><tr><td>2</td><td>HC Lynx Kladno</td><td>HC Eagles Moravia</td><td>1</td><td>37</td><td>7</td><td><a href="CELH-PLF-37.html">Game Direct Link</a></td></tr><tr><td>3</td><td>HC Eagles Moravia</td><td>HC Lynx Kladno</td><td>1</td><td>3</td><td>5</td><td><a href="CELH-PLF-3.html">Game Direct Link</a></td></tr><tr><td>4</td><td>HC Lions Bohemia</td><td>HC Black Eagles Silesia</td><td>1</td><td>5</td><td>5</td><td><a href="CELH-PLF-5.html">Game Direct Link</a></td></tr><tr><td>5</td><td>HC Eagles Moravia</td><td>HC Black Eagles Silesia</td><td>1</td><td>10</td><td>5</td><td><a href="CELH-PLF-10.html">Game Direct Link</a></td></tr><tr><td>6</td><td>HC Eagles Moravia</td><td>HC Lions Bohemia</td><td>1</td><td>12</td><td>5</td><td><a href="CELH-PLF-12.html">Game Direct Link</a></td></tr><tr><td>7</td><td>HC Lions Bohemia</td><td>HC Eagles Moravia</td><td>1</td><td>14</td><td>5</td><td><a href="CELH-PLF-14.html">Game Direct Link</a></td></tr><tr><td>8</td><td>HC Eagles Moravia</td><td>HC Lions Bohemia</td><td>1</td><td>16</td><td>5</td><td><a href="CELH-PLF-16.html">Game Direct Link</a></td></tr><tr><td>9</td><td>HC Lynx Kladno</td><td>HC Lions Bohemia</td><td>1</td><td>22</td><td>5</td><td><a href="CELH-PLF-22.html">Game Direct Link</a></td></tr><tr><td>10</td><td>HC Black Eagles Silesia</td><td>HC Eagles Moravia</td><td>1</td><td>23</td><td>5</td><td><a href="CELH-PLF-23.html">Game Direct Link</a></td></tr>
<tr><td colspan="7"><b>Most Assists</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Home Team Name</td><td class="STHSW200">Visitor Team Name</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW120">Link</td></tr>
<tr><td>1</td><td>HC Lynx Kladno</td><td>HC Eagles Moravia</td><td>1</td><td>37</td><td>14</td><td><a href="CELH-PLF-37.html">Game Direct Link</a></td></tr><tr><td>2</td><td>HC Lions Bohemia</td><td>HC Eagles Moravia</td><td>1</td><td>2</td><td>10</td><td><a href="CELH-PLF-2.html">Game Direct Link</a></td></tr><tr><td>3</td><td>HC Lynx Kladno</td><td>HC Lions Bohemia</td><td>1</td><td>22</td><td>10</td><td><a href="CELH-PLF-22.html">Game Direct Link</a></td></tr><tr><td>4</td><td>HC Black Eagles Silesia</td><td>HC Eagles Moravia</td><td>1</td><td>23</td><td>10</td><td><a href="CELH-PLF-23.html">Game Direct Link</a></td></tr><tr><td>5</td><td>HC Eagles Moravia</td><td>HC Lynx Kladno</td><td>1</td><td>3</td><td>9</td><td><a href="CELH-PLF-3.html">Game Direct Link</a></td></tr><tr><td>6</td><td>HC Lions Bohemia</td><td>HC Black Eagles Silesia</td><td>1</td><td>5</td><td>9</td><td><a href="CELH-PLF-5.html">Game Direct Link</a></td></tr><tr><td>7</td><td>HC Eagles Moravia</td><td>HC Lions Bohemia</td><td>1</td><td>12</td><td>9</td><td><a href="CELH-PLF-12.html">Game Direct Link</a></td></tr><tr><td>8</td><td>HC Lions Bohemia</td><td>HC Lynx Kladno</td><td>1</td><td>32</td><td>9</td><td><a href="CELH-PLF-32.html">Game Direct Link</a></td></tr><tr><td>9</td><td>HC Eagles Moravia</td><td>HC Black Eagles Silesia</td><td>1</td><td>45</td><td>9</td><td><a href="CELH-PLF-45.html">Game Direct Link</a></td></tr><tr><td>10</td><td>HC Lions Bohemia</td><td>HC Black Eagles Silesia</td><td>1</td><td>9</td><td>8</td><td><a href="CELH-PLF-9.html">Game Direct Link</a></td></tr>
<tr><td colspan="7"><b>Most Points</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Home Team Name</td><td class="STHSW200">Visitor Team Name</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW120">Link</td></tr>
<tr><td>1</td><td>HC Lynx Kladno</td><td>HC Eagles Moravia</td><td>1</td><td>37</td><td>21</td><td><a href="CELH-PLF-37.html">Game Direct Link</a></td></tr><tr><td>2</td><td>HC Lions Bohemia</td><td>HC Eagles Moravia</td><td>1</td><td>2</td><td>17</td><td><a href="CELH-PLF-2.html">Game Direct Link</a></td></tr><tr><td>3</td><td>HC Lynx Kladno</td><td>HC Lions Bohemia</td><td>1</td><td>22</td><td>15</td><td><a href="CELH-PLF-22.html">Game Direct Link</a></td></tr><tr><td>4</td><td>HC Black Eagles Silesia</td><td>HC Eagles Moravia</td><td>1</td><td>23</td><td>15</td><td><a href="CELH-PLF-23.html">Game Direct Link</a></td></tr><tr><td>5</td><td>HC Eagles Moravia</td><td>HC Lynx Kladno</td><td>1</td><td>3</td><td>14</td><td><a href="CELH-PLF-3.html">Game Direct Link</a></td></tr><tr><td>6</td><td>HC Lions Bohemia</td><td>HC Black Eagles Silesia</td><td>1</td><td>5</td><td>14</td><td><a href="CELH-PLF-5.html">Game Direct Link</a></td></tr><tr><td>7</td><td>HC Eagles Moravia</td><td>HC Lions Bohemia</td><td>1</td><td>12</td><td>14</td><td><a href="CELH-PLF-12.html">Game Direct Link</a></td></tr><tr><td>8</td><td>HC Lions Bohemia</td><td>HC Lynx Kladno</td><td>1</td><td>32</td><td>14</td><td><a href="CELH-PLF-32.html">Game Direct Link</a></td></tr><tr><td>9</td><td>HC Eagles Moravia</td><td>HC Black Eagles Silesia</td><td>1</td><td>45</td><td>14</td><td><a href="CELH-PLF-45.html">Game Direct Link</a></td></tr><tr><td>10</td><td>HC Eagles Moravia</td><td>HC Lions Bohemia</td><td>1</td><td>16</td><td>13</td><td><a href="CELH-PLF-16.html">Game Direct Link</a></td></tr>
<tr><td colspan="7"><b>Most Shots</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Home Team Name</td><td class="STHSW200">Visitor Team Name</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW120">Link</td></tr>
<tr><td>1</td><td>HC Lions Bohemia</td><td>HC Eagles Moravia</td><td>1</td><td>2</td><td>81</td><td><a href="CELH-PLF-2.html">Game Direct Link</a></td></tr><tr><td>2</td><td>HC Lions Bohemia</td><td>HC Lynx Kladno</td><td>1</td><td>24</td><td>79</td><td><a href="CELH-PLF-24.html">Game Direct Link</a></td></tr><tr><td>3</td><td>HC Lions Bohemia</td><td>HC Eagles Moravia</td><td>1</td><td>36</td><td>72</td><td><a href="CELH-PLF-36.html">Game Direct Link</a></td></tr><tr><td>4</td><td>HC Eagles Moravia</td><td>HC Lynx Kladno</td><td>1</td><td>33</td><td>71</td><td><a href="CELH-PLF-33.html">Game Direct Link</a></td></tr><tr><td>5</td><td>HC Lynx Kladno</td><td>HC Eagles Moravia</td><td>1</td><td>37</td><td>69</td><td><a href="CELH-PLF-37.html">Game Direct Link</a></td></tr><tr><td>6</td><td>HC Eagles Moravia</td><td>HC Lions Bohemia</td><td>1</td><td>20</td><td>68</td><td><a href="CELH-PLF-20.html">Game Direct Link</a></td></tr><tr><td>7</td><td>HC Lynx Kladno</td><td>HC Lions Bohemia</td><td>1</td><td>30</td><td>68</td><td><a href="CELH-PLF-30.html">Game Direct Link</a></td></tr><tr><td>8</td><td>HC Lions Bohemia</td><td>HC Eagles Moravia</td><td>1</td><td>14</td><td>67</td><td><a href="CELH-PLF-14.html">Game Direct Link</a></td></tr><tr><td>9</td><td>HC Black Eagles Silesia</td><td>HC Lions Bohemia</td><td>1</td><td>38</td><td>66</td><td><a href="CELH-PLF-38.html">Game Direct Link</a></td></tr><tr><td>10</td><td>HC Lions Bohemia</td><td>HC Black Eagles Silesia</td><td>1</td><td>5</td><td>64</td><td><a href="CELH-PLF-5.html">Game Direct Link</a></td></tr>
<tr><td colspan="7"><b>Most Pim</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Home Team Name</td><td class="STHSW200">Visitor Team Name</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW120">Link</td></tr>
<tr><td>1</td><td>HC Eagles Moravia</td><td>HC Black Eagles Silesia</td><td>1</td><td>29</td><td>36</td><td><a href="CELH-PLF-29.html">Game Direct Link</a></td></tr><tr><td>2</td><td>HC Black Eagles Silesia</td><td>HC Lions Bohemia</td><td>1</td><td>38</td><td>24</td><td><a href="CELH-PLF-38.html">Game Direct Link</a></td></tr><tr><td>3</td><td>HC Black Eagles Silesia</td><td>HC Lynx Kladno</td><td>1</td><td>13</td><td>22</td><td><a href="CELH-PLF-13.html">Game Direct Link</a></td></tr><tr><td>4</td><td>HC Eagles Moravia</td><td>HC Black Eagles Silesia</td><td>1</td><td>41</td><td>22</td><td><a href="CELH-PLF-41.html">Game Direct Link</a></td></tr><tr><td>5</td><td>HC Eagles Moravia</td><td>HC Black Eagles Silesia</td><td>1</td><td>45</td><td>22</td><td><a href="CELH-PLF-45.html">Game Direct Link</a></td></tr><tr><td>6</td><td>HC Eagles Moravia</td><td>HC Lions Bohemia</td><td>1</td><td>55</td><td>21</td><td><a href="CELH-PLF-55.html">Game Direct Link</a></td></tr><tr><td>7</td><td>HC Lions Bohemia</td><td>HC Lynx Kladno</td><td>1</td><td>32</td><td>20</td><td><a href="CELH-PLF-32.html">Game Direct Link</a></td></tr><tr><td>8</td><td>HC Eagles Moravia</td><td>HC Lions Bohemia</td><td>1</td><td>6</td><td>18</td><td><a href="CELH-PLF-6.html">Game Direct Link</a></td></tr><tr><td>9</td><td>HC Eagles Moravia</td><td>HC Lions Bohemia</td><td>1</td><td>12</td><td>18</td><td><a href="CELH-PLF-12.html">Game Direct Link</a></td></tr><tr><td>10</td><td>HC Lions Bohemia</td><td>HC Eagles Moravia</td><td>1</td><td>14</td><td>18</td><td><a href="CELH-PLF-14.html">Game Direct Link</a></td></tr>
<tr><td colspan="7"><b>Most Hits</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Home Team Name</td><td class="STHSW200">Visitor Team Name</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW120">Link</td></tr>
<tr><td>1</td><td>HC Lynx Kladno</td><td>HC Black Eagles Silesia</td><td>1</td><td>17</td><td>62</td><td><a href="CELH-PLF-17.html">Game Direct Link</a></td></tr><tr><td>2</td><td>HC Lynx Kladno</td><td>HC Black Eagles Silesia</td><td>1</td><td>4</td><td>55</td><td><a href="CELH-PLF-4.html">Game Direct Link</a></td></tr><tr><td>3</td><td>HC Black Eagles Silesia</td><td>HC Eagles Moravia</td><td>1</td><td>31</td><td>54</td><td><a href="CELH-PLF-31.html">Game Direct Link</a></td></tr><tr><td>4</td><td>HC Lynx Kladno</td><td>HC Lions Bohemia</td><td>1</td><td>42</td><td>53</td><td><a href="CELH-PLF-42.html">Game Direct Link</a></td></tr><tr><td>5</td><td>HC Eagles Moravia</td><td>HC Lions Bohemia</td><td>1</td><td>6</td><td>50</td><td><a href="CELH-PLF-6.html">Game Direct Link</a></td></tr><tr><td>6</td><td>HC Eagles Moravia</td><td>HC Lions Bohemia</td><td>1</td><td>16</td><td>50</td><td><a href="CELH-PLF-16.html">Game Direct Link</a></td></tr><tr><td>7</td><td>HC Eagles Moravia</td><td>HC Lynx Kladno</td><td>1</td><td>52</td><td>50</td><td><a href="CELH-PLF-52.html">Game Direct Link</a></td></tr><tr><td>8</td><td>HC Lynx Kladno</td><td>HC Lions Bohemia</td><td>1</td><td>11</td><td>49</td><td><a href="CELH-PLF-11.html">Game Direct Link</a></td></tr><tr><td>9</td><td>HC Black Eagles Silesia</td><td>HC Lynx Kladno</td><td>1</td><td>15</td><td>49</td><td><a href="CELH-PLF-15.html">Game Direct Link</a></td></tr><tr><td>10</td><td>HC Lions Bohemia</td><td>HC Lynx Kladno</td><td>1</td><td>24</td><td>48</td><td><a href="CELH-PLF-24.html">Game Direct Link</a></td></tr>
</table>
<?php include "Footer.php";?>
