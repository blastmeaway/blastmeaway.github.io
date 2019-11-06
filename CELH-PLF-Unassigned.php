<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>CELH - Unassigned</title>
<script src="CELH-PLF.js"></script>
<meta name="author" content="Simon Tremblay, sths.simont.info" />
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Decription" content="Marcus Winston - STHS - Version : 3.1.9.9 - CELH-STHS.db - CELH-STHSCareerStat.db"/>
<link href="STHSMain.css" rel="stylesheet" type="text/css" />
<style>
@media screen and (max-width: 992px) {
.STHSRoster_GoaliesTable tbody td:nth-child(2){display:none;}
.STHSRoster_GoaliesTable thead th:nth-child(2){display:none;}
}
@media screen and (max-width: 1200px) {
.STHSWarning {display:block;}
table.basictablesorter tbody td:nth-last-child(1){display:none;}
table.basictablesorter thead th:nth-last-child(1){display:none;}
table.basictablesorter tbody td:nth-last-child(2){display:none;}
table.basictablesorter thead th:nth-last-child(2){display:none;}
table.basictablesorter tbody td:nth-last-child(3){display:none;}
table.basictablesorter thead th:nth-last-child(3){display:none;}
table.basictablesorter tbody td:nth-last-child(4){display:none;}
table.basictablesorter thead th:nth-last-child(4){display:none;}
table.basictablesorter tbody td:nth-last-child(5){display:none;}
table.basictablesorter thead th:nth-last-child(5){display:none;}
table.basictablesorter tbody td:nth-last-child(6){display:none;}
table.basictablesorter thead th:nth-last-child(6){display:none;}
}</style>
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
<script>jQuery(function($,undefined) {$.basictablesorter.addParser({id: 'thousands',is: function(s) {return false;}, format: function(s) { return s.replace('$','').replace(/,/g,'');}, type: 'numeric' }); 
$(".STHSRoster_PlayersTable").basictablesorter({headers:{29:{sorter:'thousands'}}});
$(".STHSRoster_GoaliesTable").basictablesorter({headers:{24:{sorter:'thousands'}}});});</script>
<table class="basictablesorter STHSRoster_PlayersTable"><thead><tr>
<th class="STHSW200">Player Name</th><th class="STHSW10">C</th><th class="STHSW10">L</th><th class="STHSW10">R</th><th class="STHSW10">D</th><th class="STHSW25">CON</th><th class="STHSW25">IJ</th><th class="STHSW25">CK</th><th class="STHSW25">FG</th><th class="STHSW25">DI</th><th class="STHSW25">SK</th><th class="STHSW25">ST</th><th class="STHSW25">EN</th><th class="STHSW25">DU</th><th class="STHSW25">PH</th><th class="STHSW25">FO</th><th class="STHSW25">PA</th><th class="STHSW25">SC</th><th class="STHSW25">DF</th><th class="STHSW25">PS</th><th class="STHSW25">EX</th><th class="STHSW25">LD</th><th class="STHSW25">PO</th><th class="STHSW25">MO</th><th class="STHSW25">OV</th><th class="STHSW25">TA</th><th class="STHSW25">SP</th><th class="STHSW25">Age</th><th class="STHSW25">Contract</th><th class="STHSW100">Salary</th><th class="STHSW55">Link</th></tr></thead>
<tr><td><a href="PlayerReport.php?Player=18">Izem Abioye(R)</a></td><td></td><td></td><td></td><td>X</td><td>100.00</td><td></td><td>43</td><td>28</td><td>73</td><td>71</td><td>70</td><td>69</td><td>50</td><td>50</td><td>68</td><td>40</td><td>80</td><td>70</td><td>80</td><td>80</td><td>50</td><td>80</td><td>40</td><td>58</td><td></td><td>0</td><td>12</td><td><span style="color:red">0</span></td><td>$0</td><td></td></tr>
</table><br /><br /><table class="basictablesorter STHSRoster_GoaliesTable"><thead><tr>
<th class="STHSW200">Goalie Name</th><th class="STHSW25">PO</th><th class="STHSW25">CON</th><th class="STHSW25">IJ</th><th class="STHSW25">SK</th><th class="STHSW25">DU</th><th class="STHSW25">EN</th><th class="STHSW25">SZ</th><th class="STHSW25">AG</th><th class="STHSW25">RB</th><th class="STHSW25">SC</th><th class="STHSW25">HS</th><th class="STHSW25">RT</th><th class="STHSW25">PH</th><th class="STHSW25">PS</th><th class="STHSW25">EX</th><th class="STHSW25">LD</th><th class="STHSW25">PO</th><th class="STHSW25">MO</th><th class="STHSW25">OV</th><th class="STHSW25">TA</th><th class="STHSW25">SP</th><th class="STHSW25">Age</th><th class="STHSW35">Contract</th><th class="STHSW100">Salary</th><th class="STHSW55">Link</th></tr></thead>
<tr><td><a href="GoalieReport.php?Goalie=3">Petr Vrana(R)</a></td><td>G</td><td>100.00</td><td></td><td>70</td><td>50</td><td>70</td><td>78</td><td>76</td><td>81</td><td>50</td><td>82</td><td>85</td><td>84</td><td>51</td><td>80</td><td>50</td><td>80</td><td>40</td><td>71</td><td></td><td>0</td><td>17</td><td><span style="color:red">0</span></td><td>$0</td><td></td></tr>
</table>
<?php include "Footer.php";?>
