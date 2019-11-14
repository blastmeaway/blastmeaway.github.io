<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>CELH - Pro Standing</title>
<script src="CELH.js"></script>
<meta name="author" content="Simon Tremblay, sths.simont.info" />
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Decription" content="Marcus Winston - STHS - Version : 3.1.9.9 - CELH-STHS.db - CELH-STHSCareerStat.db"/>
<link href="STHSMain.css" rel="stylesheet" type="text/css" />
<style>
@media screen and (max-width: 1060px) {
.STHSWarning {display:block;}
table.basictablesorter thead th:nth-last-child(3){display:none;}
table.basictablesorter tbody td:nth-last-child(3){display:none;}
table.basictablesorter thead th:nth-last-child(4){display:none;}
table.basictablesorter tbody td:nth-last-child(4){display:none;}
table.basictablesorter thead th:nth-last-child(5){display:none;}
table.basictablesorter tbody td:nth-last-child(5){display:none;}
}@media screen and (max-width: 890px) {
table.basictablesorter thead th:nth-last-child(6){display:none;}
table.basictablesorter tbody td:nth-last-child(6){display:none;}
table.basictablesorter thead th:nth-last-child(7){display:none;}
table.basictablesorter tbody td:nth-last-child(7){display:none;}
}
table.basictablesorter tbody td.staticTD {font-size:9pt;border-right:hidden; border-left:hidden;}
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
<script>$(function(){$("table").basictablesorter({ widgets: ['staticRow'] })});</script>
<div class="tabsmain standard"><ul class="tabmain-links">
<li class="activemain"><a href="#tabmain2">Conference</a></li>
<li><a href="#tabmain3">Division</a></li>
<li><a href="#tabmain4">Overall</a></li>
</ul><div class="tabmain-content">
<div class="tabmain active" id="tabmain2">
<h2 class="STHSStanding_H2Header">Conference 1</h2>
<table class="basictablesorter"><thead><tr><th class="STHSW35">PO</th><th class="STHSW200">Teams</th><th class="STHSW30">GP</th><th class="STHSW30">W</th><th class="STHSW30">L</th><th class="STHSW30">OTL</th><th class="STHSW30">P</th><th class="STHSW30">ROW</th><th class="STHSW30">GF</th><th class="STHSW30">GA</th><th class="STHSW30">Diff</th><th class="STHSW45">PCT</th><th class="STHSW75">Home</th><th class="STHSW75">Visitor</th><th class="STHSW75">Last 10</th><th class="STHSW75">Home L10</th><th class="STHSW75">Visitor L10</th><th class="STHSW30">STK</th><th class="STHSW30">PR</th></tr></thead>
<tbody>
<tr><td>1 - Z</td><td><a href="CELH-ProTeamRoster.php#HCLionsBohemia">HC Lions Bohemia</a></td><td>30</td><td>16</td><td>11</td><td>3</td><td><b>44</b></td><td>11</td><td>61</td><td>56</td><td>5</td><td>0.489</td><td>8-6-1</td><td>8-5-2</td><td>5-5-0</td><td>5-5-0</td><td>6-3-1</td><td>L2</td><td></td></tr>
<tr><td>2 - X</td><td><a href="CELH-ProTeamRoster.php#HCLynxKladno">HC Lynx Kladno</a></td><td>30</td><td>10</td><td>15</td><td>5</td><td><b>32</b></td><td>9</td><td>49</td><td>64</td><td>-15</td><td>0.356</td><td>5-7-3</td><td>5-8-2</td><td>4-5-1</td><td>3-5-2</td><td>3-6-1</td><td>W2</td><td></td></tr>
<tr class="static"><td colspan="19"><hr /></td></tr>
</tbody></table><br />
<h2 class="STHSStanding_H2Header">Conference 2</h2>
<table class="basictablesorter"><thead><tr><th class="STHSW35">PO</th><th class="STHSW200">Teams</th><th class="STHSW30">GP</th><th class="STHSW30">W</th><th class="STHSW30">L</th><th class="STHSW30">OTL</th><th class="STHSW30">P</th><th class="STHSW30">ROW</th><th class="STHSW30">GF</th><th class="STHSW30">GA</th><th class="STHSW30">Diff</th><th class="STHSW45">PCT</th><th class="STHSW75">Home</th><th class="STHSW75">Visitor</th><th class="STHSW75">Last 10</th><th class="STHSW75">Home L10</th><th class="STHSW75">Visitor L10</th><th class="STHSW30">STK</th><th class="STHSW30">PR</th></tr></thead>
<tbody>
<tr><td>1 - Z</td><td><a href="CELH-ProTeamRoster.php#HCBlackEaglesSilesia">HC Black Eagles Silesia</a></td><td>30</td><td>18</td><td>7</td><td>5</td><td><b>54</b></td><td>16</td><td>57</td><td>51</td><td>6</td><td>0.600</td><td>9-3-3</td><td>9-4-2</td><td>6-2-2</td><td>6-2-2</td><td>6-2-2</td><td>W3</td><td></td></tr>
<tr><td>2 - X</td><td><a href="CELH-ProTeamRoster.php#HCEaglesMoravia">HC Eagles Moravia</a></td><td>30</td><td>16</td><td>6</td><td>8</td><td><b>50</b></td><td>15</td><td>66</td><td>62</td><td>4</td><td>0.556</td><td>9-3-3</td><td>7-3-5</td><td>5-2-3</td><td>6-3-1</td><td>5-2-3</td><td>OTL2</td><td></td></tr>
<tr class="static"><td colspan="19"><hr /></td></tr>
</tbody></table><br />
x - Clinched Playoff Berth<br />
y - Clinched Division Title<br />
z - Clinched Conference Title<br />
e - Eliminated<br />
*Seeding 1 division leaders<br />
</div><div class="tabmain" id="tabmain3">
<h2 class="STHSStanding_H2Header">Division 1</h2>
<table class="basictablesorter"><thead><tr><th class="STHSW35">PO</th><th class="STHSW200">Teams</th><th class="STHSW30">GP</th><th class="STHSW30">W</th><th class="STHSW30">L</th><th class="STHSW30">OTL</th><th class="STHSW30">P</th><th class="STHSW30">ROW</th><th class="STHSW30">GF</th><th class="STHSW30">GA</th><th class="STHSW30">Diff</th><th class="STHSW45">PCT</th><th class="STHSW75">Home</th><th class="STHSW75">Visitor</th><th class="STHSW75">Last 10</th><th class="STHSW75">Home L10</th><th class="STHSW75">Visitor L10</th><th class="STHSW30">STK</th><th class="STHSW30">PR</th></tr></thead>
<tbody>
<tr><td>1 - Z</td><td><a href="CELH-ProTeamRoster.php#HCLionsBohemia">HC Lions Bohemia</a></td><td>30</td><td>16</td><td>11</td><td>3</td><td><b>44</b></td><td>11</td><td>61</td><td>56</td><td>5</td><td>0.489</td><td>8-6-1</td><td>8-5-2</td><td>5-5-0</td><td>5-5-0</td><td>6-3-1</td><td>L2</td><td></td></tr>
<tr><td>2 - X</td><td><a href="CELH-ProTeamRoster.php#HCLynxKladno">HC Lynx Kladno</a></td><td>30</td><td>10</td><td>15</td><td>5</td><td><b>32</b></td><td>9</td><td>49</td><td>64</td><td>-15</td><td>0.356</td><td>5-7-3</td><td>5-8-2</td><td>4-5-1</td><td>3-5-2</td><td>3-6-1</td><td>W2</td><td></td></tr>
</tbody></table>
<h2 class="STHSStanding_H2Header">Division 4</h2>
<table class="basictablesorter"><thead><tr><th class="STHSW35">PO</th><th class="STHSW200">Teams</th><th class="STHSW30">GP</th><th class="STHSW30">W</th><th class="STHSW30">L</th><th class="STHSW30">OTL</th><th class="STHSW30">P</th><th class="STHSW30">ROW</th><th class="STHSW30">GF</th><th class="STHSW30">GA</th><th class="STHSW30">Diff</th><th class="STHSW45">PCT</th><th class="STHSW75">Home</th><th class="STHSW75">Visitor</th><th class="STHSW75">Last 10</th><th class="STHSW75">Home L10</th><th class="STHSW75">Visitor L10</th><th class="STHSW30">STK</th><th class="STHSW30">PR</th></tr></thead>
<tbody>
<tr><td>1 - Z</td><td><a href="CELH-ProTeamRoster.php#HCBlackEaglesSilesia">HC Black Eagles Silesia</a></td><td>30</td><td>18</td><td>7</td><td>5</td><td><b>54</b></td><td>16</td><td>57</td><td>51</td><td>6</td><td>0.600</td><td>9-3-3</td><td>9-4-2</td><td>6-2-2</td><td>6-2-2</td><td>6-2-2</td><td>W3</td><td></td></tr>
<tr><td>2 - X</td><td><a href="CELH-ProTeamRoster.php#HCEaglesMoravia">HC Eagles Moravia</a></td><td>30</td><td>16</td><td>6</td><td>8</td><td><b>50</b></td><td>15</td><td>66</td><td>62</td><td>4</td><td>0.556</td><td>9-3-3</td><td>7-3-5</td><td>5-2-3</td><td>6-3-1</td><td>5-2-3</td><td>OTL2</td><td></td></tr>
</tbody></table>
</div><div class="tabmain" id="tabmain4">
<h2 class="STHSStanding_H2Header">Overall</h2>
<table class="basictablesorter"><thead><tr><th class="STHSW35">PO</th><th class="STHSW200">Teams</th><th class="STHSW30">GP</th><th class="STHSW30">W</th><th class="STHSW30">L</th><th class="STHSW30">OTL</th><th class="STHSW30">P</th><th class="STHSW30">ROW</th><th class="STHSW30">GF</th><th class="STHSW30">GA</th><th class="STHSW30">Diff</th><th class="STHSW45">PCT</th><th class="STHSW75">Home</th><th class="STHSW75">Visitor</th><th class="STHSW75">Last 10</th><th class="STHSW75">Home L10</th><th class="STHSW75">Visitor L10</th><th class="STHSW30">STK</th><th class="STHSW30">PR</th></tr></thead>
<tbody>
<tr><td>1 - Z</td><td><a href="CELH-ProTeamRoster.php#HCBlackEaglesSilesia">HC Black Eagles Silesia</a></td><td>30</td><td>18</td><td>7</td><td>5</td><td><b>54</b></td><td>16</td><td>57</td><td>51</td><td>6</td><td>0.600</td><td>9-3-3</td><td>9-4-2</td><td>6-2-2</td><td>6-2-2</td><td>6-2-2</td><td>W3</td><td></td></tr>
<tr><td>2 - X</td><td><a href="CELH-ProTeamRoster.php#HCEaglesMoravia">HC Eagles Moravia</a></td><td>30</td><td>16</td><td>6</td><td>8</td><td><b>50</b></td><td>15</td><td>66</td><td>62</td><td>4</td><td>0.556</td><td>9-3-3</td><td>7-3-5</td><td>5-2-3</td><td>6-3-1</td><td>5-2-3</td><td>OTL2</td><td></td></tr>
<tr><td>3 - Z</td><td><a href="CELH-ProTeamRoster.php#HCLionsBohemia">HC Lions Bohemia</a></td><td>30</td><td>16</td><td>11</td><td>3</td><td><b>44</b></td><td>11</td><td>61</td><td>56</td><td>5</td><td>0.489</td><td>8-6-1</td><td>8-5-2</td><td>5-5-0</td><td>5-5-0</td><td>6-3-1</td><td>L2</td><td></td></tr>
<tr><td>4 - X</td><td><a href="CELH-ProTeamRoster.php#HCLynxKladno">HC Lynx Kladno</a></td><td>30</td><td>10</td><td>15</td><td>5</td><td><b>32</b></td><td>9</td><td>49</td><td>64</td><td>-15</td><td>0.356</td><td>5-7-3</td><td>5-8-2</td><td>4-5-1</td><td>3-5-2</td><td>3-6-1</td><td>W2</td><td></td></tr>
</tbody></table></div></div></div>
<h2 class="STHSStanding_PointSystem">Point System</h2>
<b>Win :</b> 3 -- <b>Loss :</b> 0 -- <b>OT Win :</b> 2 -- <b>OT Loss :</b> 1 -- <b>SO Win :</b> 2 -- <b>SO Loss :</b> 1<br /><br />P.S. The simulator only uses points to give the title. If two team have the same amount of point, none of them will be award the title until your simulate the last game/day of your season.
<?php include "Footer.php";?>
