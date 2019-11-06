<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>CELH - Pro Team Roster</title>
<script src="CELH.js"></script>
<meta name="author" content="Simon Tremblay, sths.simont.info" />
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Decription" content="Marcus Winston - STHS - Version : 3.1.9.9 - CELH-STHS.db - CELH-STHSCareerStat.db"/>
<link href="STHSMain.css" rel="stylesheet" type="text/css" />
<style>
@media screen and (max-width: 992px) {
.STHSRoster_GoaliesTable tbody td:nth-child(2){display:none;}
.STHSRoster_GoaliesTable thead th:nth-child(2){display:none;}
.STHSRoster_PlayersTable tbody td:nth-child(1){display:none;}
.STHSRoster_PlayersTable thead th:nth-child(1){display:none;}
.STHSRoster_PlayersTable tbody td:nth-child(3){display:none;}
.STHSRoster_PlayersTable thead th:nth-child(3){display:none;}
.STHSRoster_PlayersTable tbody td:nth-child(4){display:none;}
.STHSRoster_PlayersTable thead th:nth-child(4){display:none;}
.STHSRoster_PlayersTable tbody td:nth-child(5){display:none;}
.STHSRoster_PlayersTable thead th:nth-child(5){display:none;}
.STHSRoster_PlayersTable tbody td:nth-child(6){display:none;}
.STHSRoster_PlayersTable thead th:nth-child(6){display:none;}
.STHSRoster_Coach{display:none;}
.STHSRoster_TeamOverall{display:none;}
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
<script>jQuery(function($,undefined) {$.basictablesorter.addParser({id: 'thousands',is: function(s) {return false;}, format: function(s) { return s.replace('$','').replace(/,/g,'');}, type: 'numeric' }); 
$(".STHSRoster_PlayersTable").basictablesorter({headers:{30:{sorter:'thousands'}}});
$(".STHSRoster_GoaliesTable").basictablesorter({headers:{24:{sorter:'thousands'}}});});</script>
<div class="STHSTopLink"><a id="STHSRosterTop"></a> <a href="#HCBlackEaglesSilesia">HC Black Eagles Silesia</a> | <a href="#HCEaglesMoravia">HC Eagles Moravia</a> | <a href="#HCLionsBohemia">HC Lions Bohemia</a> | <a href="#HCLynxKladno">HC Lynx Kladno</a> | <a href="javascript:STHS_JS_CloseAll('');">Close All Team View</a> | <a href="javascript:STHS_JS_OpenAll('');">Open All Team View</a>
</div>
<h1 class="TeamRosterPro_SBE"><a id="HCBlackEaglesSilesia">HC Black Eagles Silesia</a></h1>
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
<br /><table class="STHSTableFullW"><tr>
<td class="STHSRoster_GM">General Manager : </td>
<td class="STHSRoster_Coach">Coach : </td>
<td class="STHSW120"><b>Morale</b> : 40</td>
<td class="STHSRoster_TeamOverall">Team Overall : 66</td></tr></table>
<table class="basictablesorter STHSRoster_PlayersTable"><thead><tr>
<th class="STHSW25">#</th><th class="STHSW200">Player Name</th><th class="STHSW10">C</th><th class="STHSW10">L</th><th class="STHSW10">R</th><th class="STHSW10">D</th><th class="STHSW25">CON</th><th class="STHSW25">IJ</th><th class="STHSW25">CK</th><th class="STHSW25">FG</th><th class="STHSW25">DI</th><th class="STHSW25">SK</th><th class="STHSW25">ST</th><th class="STHSW25">EN</th><th class="STHSW25">DU</th><th class="STHSW25">PH</th><th class="STHSW25">FO</th><th class="STHSW25">PA</th><th class="STHSW25">SC</th><th class="STHSW25">DF</th><th class="STHSW25">PS</th><th class="STHSW25">EX</th><th class="STHSW25">LD</th><th class="STHSW25">PO</th><th class="STHSW25">MO</th><th class="STHSW25">OV</th><th class="STHSW25">TA</th><th class="STHSW25">SP</th><th class="STHSW25">Age</th><th class="STHSW25">Contract</th><th class="STHSW100">Salary</th><th class="STHSW55">Link</th></tr></thead>
<tr><td>1</td><td><a href="PlayerReport.php?Player=49">Zalleras Szlerchek(R)</a></td><td>X</td><td>X</td><td>X</td><td></td><td>100.00</td><td></td><td>70</td><td>38</td><td>70</td><td>99</td><td>90</td><td>90</td><td>50</td><td>50</td><td>90</td><td>90</td><td>99</td><td>90</td><td>99</td><td>80</td><td>50</td><td>80</td><td>40</td><td>76</td><td></td><td>0</td><td>41</td><td>1</td><td>$0</td><td></td></tr>
<tr><td>2</td><td><a href="PlayerReport.php?Player=62">Krysztof Kowalski(R)</a></td><td>X</td><td>X</td><td>X</td><td></td><td>100.00</td><td></td><td>40</td><td>25</td><td>62</td><td>84</td><td>80</td><td>84</td><td>50</td><td>80</td><td>80</td><td>85</td><td>76</td><td>83</td><td>40</td><td>80</td><td>50</td><td>80</td><td>40</td><td>71</td><td></td><td>0</td><td>33</td><td>1</td><td>$0</td><td></td></tr>
<tr><td>3</td><td><a href="PlayerReport.php?Player=33">Piotr Czerkawski(R)</a></td><td></td><td>X</td><td>X</td><td></td><td>100.00</td><td></td><td>75</td><td>37</td><td>68</td><td>90</td><td>90</td><td>90</td><td>50</td><td>50</td><td>99</td><td>90</td><td>99</td><td>90</td><td>99</td><td>80</td><td>50</td><td>80</td><td>40</td><td>75</td><td></td><td>0</td><td>19</td><td>1</td><td>$0</td><td></td></tr>
<tr><td>4</td><td><a href="PlayerReport.php?Player=2">Alexander Zajac(R)</a></td><td></td><td>X</td><td>X</td><td></td><td>100.00</td><td></td><td>47</td><td>25</td><td>70</td><td>90</td><td>84</td><td>80</td><td>50</td><td>50</td><td>95</td><td>90</td><td>90</td><td>80</td><td>90</td><td>80</td><td>50</td><td>80</td><td>40</td><td>71</td><td></td><td>0</td><td>24</td><td>1</td><td>$0</td><td></td></tr>
<tr><td>5</td><td><a href="PlayerReport.php?Player=73">Vratislav Zbynek(R)</a></td><td></td><td>X</td><td>X</td><td></td><td>100.00</td><td></td><td>43</td><td>25</td><td>62</td><td>81</td><td>80</td><td>77</td><td>50</td><td>81</td><td>40</td><td>71</td><td>84</td><td>81</td><td>46</td><td>80</td><td>50</td><td>80</td><td>40</td><td>69</td><td></td><td>0</td><td>25</td><td>1</td><td>$0</td><td></td></tr>
<tr><td>6</td><td><a href="PlayerReport.php?Player=53">Jakub Novak(R)</a></td><td></td><td>X</td><td>X</td><td></td><td>100.00</td><td></td><td>40</td><td>25</td><td>62</td><td>82</td><td>75</td><td>72</td><td>50</td><td>50</td><td>82</td><td>80</td><td>77</td><td>86</td><td>93</td><td>80</td><td>50</td><td>80</td><td>40</td><td>67</td><td></td><td>0</td><td>15</td><td>1</td><td>$0</td><td></td></tr>
<tr><td>7</td><td><a href="PlayerReport.php?Player=13">David Kastrba(R)</a></td><td></td><td>X</td><td>X</td><td></td><td>100.00</td><td></td><td>77</td><td>25</td><td>62</td><td>90</td><td>90</td><td>70</td><td>50</td><td>50</td><td>97</td><td>40</td><td>92</td><td>82</td><td>90</td><td>80</td><td>50</td><td>80</td><td>40</td><td>66</td><td></td><td>0</td><td>17</td><td>1</td><td>$0</td><td></td></tr>
<tr><td>8</td><td><a href="PlayerReport.php?Player=21">Josef Kubinec(R)</a></td><td></td><td>X</td><td>X</td><td></td><td>100.00</td><td></td><td>40</td><td>27</td><td>62</td><td>85</td><td>72</td><td>70</td><td>50</td><td>50</td><td>84</td><td>40</td><td>80</td><td>90</td><td>85</td><td>80</td><td>50</td><td>80</td><td>40</td><td>63</td><td></td><td>0</td><td>13</td><td>1</td><td>$0</td><td></td></tr>
<tr><td>9</td><td><a href="PlayerReport.php?Player=35">Przemyslaw Brzeszczyczkiewicz(R)</a></td><td></td><td>X</td><td>X</td><td></td><td>100.00</td><td></td><td>56</td><td>25</td><td>62</td><td>80</td><td>50</td><td>80</td><td>50</td><td>50</td><td>80</td><td>43</td><td>78</td><td>90</td><td>90</td><td>80</td><td>50</td><td>80</td><td>40</td><td>62</td><td></td><td>0</td><td>13</td><td>1</td><td>$0</td><td></td></tr>
<tr><td>10</td><td><a href="PlayerReport.php?Player=4">Aron Hernadivic(R)</a></td><td></td><td>X</td><td>X</td><td></td><td>100.00</td><td></td><td>40</td><td>25</td><td>62</td><td>75</td><td>65</td><td>62</td><td>50</td><td>50</td><td>72</td><td>40</td><td>77</td><td>70</td><td>80</td><td>80</td><td>50</td><td>80</td><td>40</td><td>58</td><td></td><td>0</td><td>9</td><td>1</td><td>$0</td><td></td></tr>
<tr><td>11</td><td><a href="PlayerReport.php?Player=70">Simothy Drunkebird(R)</a></td><td></td><td>X</td><td>X</td><td></td><td>100.00</td><td></td><td>60</td><td>25</td><td>62</td><td>60</td><td>60</td><td>40</td><td>50</td><td>50</td><td>60</td><td>70</td><td>45</td><td>40</td><td>70</td><td>80</td><td>50</td><td>80</td><td>40</td><td>51</td><td></td><td>0</td><td>7</td><td>1</td><td>$0</td><td></td></tr>
<tr><td>12</td><td><a href="PlayerReport.php?Player=60">Jakub Trocheck(R)</a></td><td></td><td></td><td></td><td>X</td><td>100.00</td><td></td><td>40</td><td>25</td><td>62</td><td>89</td><td>69</td><td>73</td><td>50</td><td>83</td><td>40</td><td>75</td><td>85</td><td>90</td><td>40</td><td>80</td><td>50</td><td>80</td><td>40</td><td>70</td><td></td><td>0</td><td>26</td><td>1</td><td>$0</td><td></td></tr>
<tr><td>13</td><td><a href="PlayerReport.php?Player=12">Charlie Schieck(R)</a></td><td></td><td></td><td></td><td>X</td><td>100.00</td><td></td><td>60</td><td>25</td><td>80</td><td>90</td><td>90</td><td>90</td><td>50</td><td>50</td><td>99</td><td>40</td><td>99</td><td>90</td><td>99</td><td>80</td><td>50</td><td>80</td><td>40</td><td>68</td><td></td><td>0</td><td>18</td><td>1</td><td>$0</td><td></td></tr>
<tr><td>14</td><td><a href="PlayerReport.php?Player=38">Samee Iqbal(R)</a></td><td></td><td></td><td></td><td>X</td><td>100.00</td><td></td><td>52</td><td>48</td><td>62</td><td>87</td><td>85</td><td>85</td><td>50</td><td>50</td><td>86</td><td>50</td><td>93</td><td>85</td><td>95</td><td>80</td><td>50</td><td>80</td><td>40</td><td>67</td><td></td><td>0</td><td>27</td><td>1</td><td>$0</td><td></td></tr>
<tr><td>15</td><td><a href="PlayerReport.php?Player=26">Matej Elias(R)</a></td><td></td><td></td><td></td><td>X</td><td>100.00</td><td></td><td>41</td><td>25</td><td>62</td><td>84</td><td>65</td><td>75</td><td>50</td><td>50</td><td>81</td><td>40</td><td>70</td><td>80</td><td>86</td><td>80</td><td>50</td><td>80</td><td>40</td><td>62</td><td></td><td>0</td><td>19</td><td>1</td><td>$0</td><td></td></tr>
<tr><td>16</td><td><a href="PlayerReport.php?Player=28">Mikas Bieksa(R)</a></td><td></td><td></td><td></td><td>X</td><td>100.00</td><td></td><td>41</td><td>25</td><td>62</td><td>75</td><td>60</td><td>64</td><td>50</td><td>50</td><td>70</td><td>40</td><td>70</td><td>80</td><td>80</td><td>80</td><td>50</td><td>80</td><td>40</td><td>60</td><td></td><td>0</td><td>11</td><td>1</td><td>$0</td><td></td></tr>
<tr><td>17</td><td><a href="PlayerReport.php?Player=44">Tauras Karazija(R)</a></td><td></td><td></td><td></td><td>X</td><td>100.00</td><td></td><td>41</td><td>25</td><td>62</td><td>72</td><td>60</td><td>70</td><td>50</td><td>50</td><td>73</td><td>40</td><td>70</td><td>77</td><td>80</td><td>80</td><td>50</td><td>80</td><td>40</td><td>59</td><td></td><td>0</td><td>16</td><td>1</td><td>$0</td><td></td></tr>
<tr><td>18</td><td><a href="PlayerReport.php?Player=51">Flash Gordon(R)</a></td><td></td><td></td><td></td><td>X</td><td>100.00</td><td></td><td>60</td><td>25</td><td>70</td><td>70</td><td>65</td><td>70</td><td>50</td><td>50</td><td>73</td><td>40</td><td>50</td><td>40</td><td>80</td><td>80</td><td>50</td><td>80</td><td>40</td><td>52</td><td></td><td>0</td><td>9</td><td>1</td><td>$0</td><td></td></tr>
</table><table class="basictablesorter STHSRoster_GoaliesTable"><thead><tr>
<th class="STHSW200">Goalie Name</th><th class="STHSW25">PO</th><th class="STHSW25">CON</th><th class="STHSW25">IJ</th><th class="STHSW25">SK</th><th class="STHSW25">DU</th><th class="STHSW25">EN</th><th class="STHSW25">SZ</th><th class="STHSW25">AG</th><th class="STHSW25">RB</th><th class="STHSW25">SC</th><th class="STHSW25">HS</th><th class="STHSW25">RT</th><th class="STHSW25">PH</th><th class="STHSW25">PS</th><th class="STHSW25">EX</th><th class="STHSW25">LD</th><th class="STHSW25">PO</th><th class="STHSW25">MO</th><th class="STHSW25">OV</th><th class="STHSW25">TA</th><th class="STHSW25">SP</th><th class="STHSW25">Age</th><th class="STHSW35">Contract</th><th class="STHSW100">Salary</th><th class="STHSW55">Link</th></tr></thead>
<tr><td><a href="GoalieReport.php?Goalie=4">Mike Verminski(R)</a></td><td>G</td><td>100.00</td><td></td><td>80</td><td>90</td><td>50</td><td>86</td><td>87</td><td>92</td><td>50</td><td>91</td><td>92</td><td>92</td><td>80</td><td>50</td><td>80</td><td>50</td><td>40</td><td>77</td><td></td><td>0</td><td>49</td><td>1</td><td>$0</td><td></td></tr>
<tr><td><a href="GoalieReport.php?Goalie=11">Casimir Stevens(R)</a></td><td>G</td><td>100.00</td><td></td><td>70</td><td>50</td><td>73</td><td>70</td><td>70</td><td>80</td><td>50</td><td>86</td><td>85</td><td>85</td><td>54</td><td>50</td><td>80</td><td>50</td><td>40</td><td>69</td><td></td><td>0</td><td>13</td><td>1</td><td>$0</td><td></td></tr>
</table>
</div>
<h1 class="TeamRosterPro_MOR"><a id="HCEaglesMoravia">HC Eagles Moravia</a></h1>
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
<br /><table class="STHSTableFullW"><tr>
<td class="STHSRoster_GM">General Manager : </td>
<td class="STHSRoster_Coach">Coach : </td>
<td class="STHSW120"><b>Morale</b> : 40</td>
<td class="STHSRoster_TeamOverall">Team Overall : 67</td></tr></table>
<table class="basictablesorter STHSRoster_PlayersTable"><thead><tr>
<th class="STHSW25">#</th><th class="STHSW200">Player Name</th><th class="STHSW10">C</th><th class="STHSW10">L</th><th class="STHSW10">R</th><th class="STHSW10">D</th><th class="STHSW25">CON</th><th class="STHSW25">IJ</th><th class="STHSW25">CK</th><th class="STHSW25">FG</th><th class="STHSW25">DI</th><th class="STHSW25">SK</th><th class="STHSW25">ST</th><th class="STHSW25">EN</th><th class="STHSW25">DU</th><th class="STHSW25">PH</th><th class="STHSW25">FO</th><th class="STHSW25">PA</th><th class="STHSW25">SC</th><th class="STHSW25">DF</th><th class="STHSW25">PS</th><th class="STHSW25">EX</th><th class="STHSW25">LD</th><th class="STHSW25">PO</th><th class="STHSW25">MO</th><th class="STHSW25">OV</th><th class="STHSW25">TA</th><th class="STHSW25">SP</th><th class="STHSW25">Age</th><th class="STHSW25">Contract</th><th class="STHSW100">Salary</th><th class="STHSW55">Link</th></tr></thead>
<tr><td>1</td><td><a href="PlayerReport.php?Player=25">Marian Potoczny(R)</a></td><td>X</td><td>X</td><td>X</td><td></td><td>100.00</td><td></td><td>43</td><td>25</td><td>62</td><td>91</td><td>88</td><td>92</td><td>50</td><td>50</td><td>88</td><td>88</td><td>91</td><td>81</td><td>87</td><td>80</td><td>50</td><td>80</td><td>40</td><td>72</td><td></td><td>0</td><td>46</td><td>1</td><td>$0</td><td></td></tr>
<tr><td>2</td><td><a href="PlayerReport.php?Player=42">Slappy McDoodle(R)</a></td><td>X</td><td>X</td><td>X</td><td></td><td>100.00</td><td></td><td>89</td><td>28</td><td>70</td><td>85</td><td>99</td><td>85</td><td>50</td><td>50</td><td>90</td><td>90</td><td>90</td><td>77</td><td>99</td><td>80</td><td>50</td><td>80</td><td>40</td><td>72</td><td></td><td>0</td><td>36</td><td>1</td><td>$0</td><td></td></tr>
<tr><td>3</td><td><a href="PlayerReport.php?Player=5">Aviad Ratzon(R)</a></td><td>X</td><td>X</td><td>X</td><td></td><td>100.00</td><td></td><td>70</td><td>25</td><td>70</td><td>80</td><td>85</td><td>85</td><td>50</td><td>50</td><td>83</td><td>61</td><td>85</td><td>94</td><td>85</td><td>80</td><td>50</td><td>80</td><td>40</td><td>68</td><td></td><td>0</td><td>40</td><td>1</td><td>$0</td><td></td></tr>
<tr><td>4</td><td><a href="PlayerReport.php?Player=50">Zivan Zidek(R)</a></td><td>X</td><td>X</td><td>X</td><td></td><td>100.00</td><td></td><td>40</td><td>29</td><td>62</td><td>80</td><td>67</td><td>66</td><td>50</td><td>50</td><td>81</td><td>74</td><td>85</td><td>71</td><td>86</td><td>80</td><td>50</td><td>80</td><td>40</td><td>64</td><td></td><td>0</td><td>14</td><td>1</td><td>$0</td><td></td></tr>
<tr><td>5</td><td><a href="PlayerReport.php?Player=66">Mikhail Kladno(R)</a></td><td>X</td><td>X</td><td>X</td><td></td><td>100.00</td><td></td><td>64</td><td>25</td><td>62</td><td>71</td><td>72</td><td>58</td><td>40</td><td>71</td><td>68</td><td>83</td><td>44</td><td>82</td><td>40</td><td>80</td><td>50</td><td>80</td><td>40</td><td>63</td><td></td><td>0</td><td>45</td><td>1</td><td>$0</td><td></td></tr>
<tr><td>6</td><td><a href="PlayerReport.php?Player=34">Potato Chips(R)</a></td><td>X</td><td>X</td><td>X</td><td></td><td>100.00</td><td></td><td>40</td><td>25</td><td>62</td><td>77</td><td>61</td><td>65</td><td>50</td><td>50</td><td>70</td><td>70</td><td>79</td><td>73</td><td>70</td><td>80</td><td>50</td><td>80</td><td>40</td><td>62</td><td></td><td>0</td><td>34</td><td>1</td><td>$0</td><td></td></tr>
<tr><td>7</td><td><a href="PlayerReport.php?Player=16">Dionyz Vyskoc(R)</a></td><td></td><td>X</td><td>X</td><td></td><td>100.00</td><td></td><td>40</td><td>25</td><td>62</td><td>88</td><td>71</td><td>83</td><td>50</td><td>50</td><td>95</td><td>40</td><td>99</td><td>99</td><td>90</td><td>80</td><td>50</td><td>80</td><td>40</td><td>67</td><td></td><td>0</td><td>24</td><td>1</td><td>$0</td><td></td></tr>
<tr><td>8</td><td><a href="PlayerReport.php?Player=54">Marek Vyskoc(R)</a></td><td></td><td>X</td><td>X</td><td></td><td>100.00</td><td></td><td>40</td><td>25</td><td>62</td><td>82</td><td>70</td><td>86</td><td>50</td><td>50</td><td>80</td><td>74</td><td>70</td><td>88</td><td>50</td><td>80</td><td>50</td><td>80</td><td>40</td><td>65</td><td></td><td>0</td><td>41</td><td>1</td><td>$0</td><td></td></tr>
<tr><td>9</td><td><a href="PlayerReport.php?Player=9">Boruvka Banananak(R)</a></td><td></td><td>X</td><td>X</td><td></td><td>100.00</td><td></td><td>44</td><td>28</td><td>62</td><td>85</td><td>70</td><td>77</td><td>50</td><td>50</td><td>80</td><td>43</td><td>80</td><td>94</td><td>95</td><td>80</td><td>50</td><td>80</td><td>40</td><td>64</td><td></td><td>0</td><td>12</td><td>1</td><td>$0</td><td></td></tr>
<tr><td>10</td><td><a href="PlayerReport.php?Player=29">Nico Gross(R)</a></td><td></td><td>X</td><td>X</td><td></td><td>100.00</td><td></td><td>76</td><td>25</td><td>62</td><td>85</td><td>80</td><td>80</td><td>50</td><td>50</td><td>85</td><td>40</td><td>90</td><td>60</td><td>89</td><td>80</td><td>50</td><td>80</td><td>40</td><td>62</td><td></td><td>0</td><td>22</td><td>1</td><td>$0</td><td></td></tr>
<tr><td>11</td><td><a href="PlayerReport.php?Player=57">Daniel Garland(R)</a></td><td></td><td>X</td><td>X</td><td></td><td>100.00</td><td></td><td>47</td><td>25</td><td>62</td><td>70</td><td>51</td><td>68</td><td>50</td><td>68</td><td>40</td><td>60</td><td>70</td><td>67</td><td>40</td><td>80</td><td>50</td><td>80</td><td>40</td><td>60</td><td></td><td>0</td><td>20</td><td>1</td><td>$0</td><td></td></tr>
<tr><td>12</td><td><a href="PlayerReport.php?Player=52">Sasha Dangelchek(R)</a></td><td></td><td>X</td><td>X</td><td></td><td>100.00</td><td></td><td>61</td><td>25</td><td>69</td><td>76</td><td>52</td><td>48</td><td>50</td><td>50</td><td>70</td><td>40</td><td>72</td><td>52</td><td>73</td><td>80</td><td>50</td><td>80</td><td>40</td><td>54</td><td></td><td>0</td><td>10</td><td>1</td><td>$0</td><td></td></tr>
<tr><td>13</td><td><a href="PlayerReport.php?Player=67">Ondrej Ravchitikov(R)</a></td><td></td><td></td><td></td><td>X</td><td>100.00</td><td></td><td>50</td><td>25</td><td>76</td><td>99</td><td>90</td><td>74</td><td>50</td><td>95</td><td>50</td><td>99</td><td>99</td><td>93</td><td>50</td><td>80</td><td>50</td><td>80</td><td>40</td><td>79</td><td></td><td>0</td><td>46</td><td>1</td><td>$0</td><td></td></tr>
<tr><td>14</td><td><a href="PlayerReport.php?Player=69">Sachimo Zoidberg(R)</a></td><td></td><td></td><td></td><td>X</td><td>100.00</td><td></td><td>82</td><td>25</td><td>62</td><td>93</td><td>90</td><td>90</td><td>40</td><td>85</td><td>40</td><td>90</td><td>40</td><td>99</td><td>40</td><td>80</td><td>50</td><td>80</td><td>40</td><td>77</td><td></td><td>0</td><td>40</td><td>1</td><td>$0</td><td></td></tr>
<tr><td>15</td><td><a href="PlayerReport.php?Player=10">Brady McIntyre(R)</a></td><td></td><td></td><td></td><td>X</td><td>100.00</td><td></td><td>77</td><td>25</td><td>62</td><td>90</td><td>90</td><td>90</td><td>50</td><td>50</td><td>99</td><td>90</td><td>99</td><td>90</td><td>99</td><td>80</td><td>50</td><td>80</td><td>40</td><td>75</td><td></td><td>0</td><td>21</td><td>1</td><td>$0</td><td></td></tr>
<tr><td>16</td><td><a href="PlayerReport.php?Player=48">Ty Justice(R)</a></td><td></td><td></td><td></td><td>X</td><td>100.00</td><td></td><td>83</td><td>61</td><td>70</td><td>88</td><td>80</td><td>83</td><td>50</td><td>50</td><td>70</td><td>40</td><td>93</td><td>78</td><td>85</td><td>80</td><td>50</td><td>80</td><td>40</td><td>66</td><td></td><td>0</td><td>30</td><td>1</td><td>$0</td><td></td></tr>
<tr><td>17</td><td><a href="PlayerReport.php?Player=3">Andrej Doskocil(R)</a></td><td></td><td></td><td></td><td>X</td><td>100.00</td><td></td><td>71</td><td>29</td><td>70</td><td>90</td><td>76</td><td>65</td><td>50</td><td>50</td><td>90</td><td>40</td><td>81</td><td>65</td><td>98</td><td>80</td><td>50</td><td>80</td><td>40</td><td>62</td><td></td><td>0</td><td>14</td><td>1</td><td>$0</td><td></td></tr>
<tr><td>18</td><td><a href="PlayerReport.php?Player=6">Barak Obrana(R)</a></td><td></td><td></td><td></td><td>X</td><td>100.00</td><td></td><td>70</td><td>25</td><td>62</td><td>80</td><td>70</td><td>75</td><td>50</td><td>50</td><td>70</td><td>40</td><td>77</td><td>56</td><td>92</td><td>80</td><td>50</td><td>80</td><td>40</td><td>59</td><td></td><td>0</td><td>31</td><td>1</td><td>$0</td><td></td></tr>
</table><table class="basictablesorter STHSRoster_GoaliesTable"><thead><tr>
<th class="STHSW200">Goalie Name</th><th class="STHSW25">PO</th><th class="STHSW25">CON</th><th class="STHSW25">IJ</th><th class="STHSW25">SK</th><th class="STHSW25">DU</th><th class="STHSW25">EN</th><th class="STHSW25">SZ</th><th class="STHSW25">AG</th><th class="STHSW25">RB</th><th class="STHSW25">SC</th><th class="STHSW25">HS</th><th class="STHSW25">RT</th><th class="STHSW25">PH</th><th class="STHSW25">PS</th><th class="STHSW25">EX</th><th class="STHSW25">LD</th><th class="STHSW25">PO</th><th class="STHSW25">MO</th><th class="STHSW25">OV</th><th class="STHSW25">TA</th><th class="STHSW25">SP</th><th class="STHSW25">Age</th><th class="STHSW35">Contract</th><th class="STHSW100">Salary</th><th class="STHSW55">Link</th></tr></thead>
<tr><td><a href="GoalieReport.php?Goalie=7">Christoffer Bjornsson(R)</a></td><td>G</td><td>100.00</td><td></td><td>90</td><td>50</td><td>90</td><td>95</td><td>95</td><td>95</td><td>50</td><td>99</td><td>99</td><td>99</td><td>86</td><td>60</td><td>80</td><td>50</td><td>40</td><td>82</td><td></td><td>0</td><td>34</td><td>1</td><td>$0</td><td></td></tr>
<tr><td><a href="GoalieReport.php?Goalie=5">Ben Holtby(R)</a></td><td>G</td><td>100.00</td><td></td><td>50</td><td>50</td><td>69</td><td>70</td><td>70</td><td>88</td><td>50</td><td>80</td><td>89</td><td>89</td><td>50</td><td>50</td><td>80</td><td>50</td><td>40</td><td>69</td><td></td><td>0</td><td>23</td><td>1</td><td>$0</td><td></td></tr>
</table>
</div>
<h1 class="TeamRosterPro_BOH"><a id="HCLionsBohemia">HC Lions Bohemia</a></h1>
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
<br /><table class="STHSTableFullW"><tr>
<td class="STHSRoster_GM">General Manager : </td>
<td class="STHSRoster_Coach">Coach : </td>
<td class="STHSW120"><b>Morale</b> : 40</td>
<td class="STHSRoster_TeamOverall">Team Overall : 68</td></tr></table>
<table class="basictablesorter STHSRoster_PlayersTable"><thead><tr>
<th class="STHSW25">#</th><th class="STHSW200">Player Name</th><th class="STHSW10">C</th><th class="STHSW10">L</th><th class="STHSW10">R</th><th class="STHSW10">D</th><th class="STHSW25">CON</th><th class="STHSW25">IJ</th><th class="STHSW25">CK</th><th class="STHSW25">FG</th><th class="STHSW25">DI</th><th class="STHSW25">SK</th><th class="STHSW25">ST</th><th class="STHSW25">EN</th><th class="STHSW25">DU</th><th class="STHSW25">PH</th><th class="STHSW25">FO</th><th class="STHSW25">PA</th><th class="STHSW25">SC</th><th class="STHSW25">DF</th><th class="STHSW25">PS</th><th class="STHSW25">EX</th><th class="STHSW25">LD</th><th class="STHSW25">PO</th><th class="STHSW25">MO</th><th class="STHSW25">OV</th><th class="STHSW25">TA</th><th class="STHSW25">SP</th><th class="STHSW25">Age</th><th class="STHSW25">Contract</th><th class="STHSW100">Salary</th><th class="STHSW55">Link</th></tr></thead>
<tr><td>1</td><td><a href="PlayerReport.php?Player=15">DeMaricus Smyth(R)</a></td><td>X</td><td>X</td><td>X</td><td></td><td>100.00</td><td></td><td>74</td><td>36</td><td>70</td><td>90</td><td>90</td><td>90</td><td>50</td><td>50</td><td>99</td><td>90</td><td>90</td><td>99</td><td>99</td><td>80</td><td>50</td><td>80</td><td>40</td><td>75</td><td></td><td>0</td><td>21</td><td>1</td><td>$0</td><td></td></tr>
<tr><td>2</td><td><a href="PlayerReport.php?Player=58">Dickie Pecker(R)</a></td><td>X</td><td>X</td><td>X</td><td></td><td>100.00</td><td></td><td>40</td><td>25</td><td>92</td><td>80</td><td>80</td><td>80</td><td>40</td><td>85</td><td>68</td><td>85</td><td>80</td><td>88</td><td>40</td><td>80</td><td>50</td><td>80</td><td>40</td><td>71</td><td></td><td>0</td><td>33</td><td>1</td><td>$0</td><td></td></tr>
<tr><td>3</td><td><a href="PlayerReport.php?Player=46">Travis Jeziak(R)</a></td><td>X</td><td>X</td><td>X</td><td></td><td>100.00</td><td></td><td>66</td><td>25</td><td>62</td><td>84</td><td>79</td><td>82</td><td>50</td><td>50</td><td>84</td><td>85</td><td>87</td><td>62</td><td>89</td><td>80</td><td>50</td><td>80</td><td>40</td><td>68</td><td></td><td>0</td><td>29</td><td>1</td><td>$0</td><td></td></tr>
<tr><td>4</td><td><a href="PlayerReport.php?Player=61">Petr Kolesnikovs(R)</a></td><td>X</td><td>X</td><td>X</td><td></td><td>100.00</td><td></td><td>40</td><td>25</td><td>62</td><td>75</td><td>75</td><td>70</td><td>40</td><td>78</td><td>70</td><td>82</td><td>72</td><td>70</td><td>40</td><td>80</td><td>50</td><td>80</td><td>40</td><td>66</td><td></td><td>0</td><td>34</td><td>1</td><td>$0</td><td></td></tr>
<tr><td>5</td><td><a href="PlayerReport.php?Player=63">Konstantin Voloshin(R)</a></td><td>X</td><td>X</td><td>X</td><td></td><td>100.00</td><td></td><td>40</td><td>25</td><td>62</td><td>71</td><td>59</td><td>55</td><td>50</td><td>71</td><td>60</td><td>70</td><td>81</td><td>80</td><td>40</td><td>80</td><td>50</td><td>80</td><td>40</td><td>64</td><td></td><td>0</td><td>14</td><td>1</td><td>$0</td><td></td></tr>
<tr><td>6</td><td><a href="PlayerReport.php?Player=43">Soren Kierkegaard(R)</a></td><td>X</td><td>X</td><td>X</td><td></td><td>100.00</td><td></td><td>40</td><td>25</td><td>62</td><td>83</td><td>60</td><td>60</td><td>50</td><td>50</td><td>80</td><td>51</td><td>88</td><td>78</td><td>85</td><td>80</td><td>50</td><td>80</td><td>40</td><td>62</td><td></td><td>0</td><td>17</td><td>1</td><td>$0</td><td></td></tr>
<tr><td>7</td><td><a href="PlayerReport.php?Player=20">Jan Zacha(R)</a></td><td>X</td><td>X</td><td>X</td><td></td><td>100.00</td><td></td><td>41</td><td>25</td><td>62</td><td>72</td><td>60</td><td>60</td><td>50</td><td>50</td><td>74</td><td>70</td><td>80</td><td>72</td><td>79</td><td>80</td><td>50</td><td>80</td><td>40</td><td>61</td><td></td><td>0</td><td>11</td><td>1</td><td>$0</td><td></td></tr>
<tr><td>8</td><td><a href="PlayerReport.php?Player=24">Luke Thomason(R)</a></td><td></td><td>X</td><td>X</td><td></td><td>100.00</td><td></td><td>70</td><td>25</td><td>82</td><td>90</td><td>84</td><td>80</td><td>50</td><td>50</td><td>99</td><td>90</td><td>89</td><td>99</td><td>99</td><td>80</td><td>50</td><td>80</td><td>40</td><td>74</td><td></td><td>0</td><td>17</td><td>1</td><td>$0</td><td></td></tr>
<tr><td>9</td><td><a href="PlayerReport.php?Player=64">Matej Stransky(R)</a></td><td></td><td>X</td><td>X</td><td></td><td>100.00</td><td></td><td>58</td><td>25</td><td>62</td><td>81</td><td>72</td><td>81</td><td>70</td><td>80</td><td>50</td><td>70</td><td>91</td><td>70</td><td>50</td><td>80</td><td>50</td><td>80</td><td>40</td><td>70</td><td></td><td>0</td><td>42</td><td>1</td><td>$0</td><td></td></tr>
<tr><td>10</td><td><a href="PlayerReport.php?Player=31">Petr Mikulak(R)</a></td><td></td><td>X</td><td>X</td><td></td><td>100.00</td><td></td><td>48</td><td>25</td><td>62</td><td>90</td><td>73</td><td>70</td><td>50</td><td>50</td><td>88</td><td>50</td><td>77</td><td>87</td><td>90</td><td>80</td><td>50</td><td>80</td><td>40</td><td>64</td><td></td><td>0</td><td>13</td><td>1</td><td>$0</td><td></td></tr>
<tr><td>11</td><td><a href="PlayerReport.php?Player=11">Cameron Urbowicz(R)</a></td><td></td><td>X</td><td>X</td><td></td><td>100.00</td><td></td><td>40</td><td>25</td><td>64</td><td>90</td><td>90</td><td>90</td><td>50</td><td>50</td><td>90</td><td>40</td><td>92</td><td>70</td><td>90</td><td>80</td><td>50</td><td>80</td><td>40</td><td>64</td><td></td><td>0</td><td>38</td><td>1</td><td>$0</td><td></td></tr>
<tr><td>12</td><td><a href="PlayerReport.php?Player=71">Ruslan Zaporozhets(R)</a></td><td></td><td>X</td><td>X</td><td></td><td>100.00</td><td></td><td>41</td><td>25</td><td>62</td><td>65</td><td>61</td><td>64</td><td>50</td><td>50</td><td>65</td><td>40</td><td>63</td><td>74</td><td>70</td><td>80</td><td>50</td><td>80</td><td>40</td><td>55</td><td></td><td>0</td><td>9</td><td>1</td><td>$0</td><td></td></tr>
<tr><td>13</td><td><a href="PlayerReport.php?Player=55">Walter White(R)</a></td><td></td><td></td><td></td><td>X</td><td>100.00</td><td></td><td>90</td><td>25</td><td>70</td><td>95</td><td>90</td><td>91</td><td>50</td><td>95</td><td>52</td><td>95</td><td>80</td><td>99</td><td>50</td><td>80</td><td>50</td><td>80</td><td>40</td><td>81</td><td></td><td>0</td><td>43</td><td>1</td><td>$0</td><td></td></tr>
<tr><td>14</td><td><a href="PlayerReport.php?Player=32">Pierre-Luc Laflamme(R)</a></td><td></td><td></td><td></td><td>X</td><td>100.00</td><td></td><td>74</td><td>25</td><td>69</td><td>99</td><td>90</td><td>90</td><td>50</td><td>50</td><td>99</td><td>60</td><td>90</td><td>99</td><td>90</td><td>80</td><td>50</td><td>80</td><td>40</td><td>75</td><td></td><td>0</td><td>38</td><td>1</td><td>$0</td><td></td></tr>
<tr><td>15</td><td><a href="PlayerReport.php?Player=45">Tokek Takshak(R)</a></td><td></td><td></td><td></td><td>X</td><td>100.00</td><td></td><td>40</td><td>25</td><td>62</td><td>86</td><td>74</td><td>71</td><td>50</td><td>50</td><td>90</td><td>40</td><td>82</td><td>93</td><td>99</td><td>80</td><td>50</td><td>80</td><td>40</td><td>66</td><td></td><td>0</td><td>17</td><td>1</td><td>$0</td><td></td></tr>
<tr><td>16</td><td><a href="PlayerReport.php?Player=40">Sean Stevenson Jr.(R)</a></td><td></td><td></td><td></td><td>X</td><td>100.00</td><td></td><td>60</td><td>28</td><td>70</td><td>90</td><td>80</td><td>80</td><td>50</td><td>50</td><td>90</td><td>40</td><td>90</td><td>73</td><td>99</td><td>80</td><td>50</td><td>80</td><td>40</td><td>64</td><td></td><td>0</td><td>17</td><td>1</td><td>$0</td><td></td></tr>
<tr><td>17</td><td><a href="PlayerReport.php?Player=14">David Vent(R)</a></td><td></td><td></td><td></td><td>X</td><td>100.00</td><td></td><td>60</td><td>60</td><td>69</td><td>90</td><td>80</td><td>56</td><td>50</td><td>50</td><td>90</td><td>40</td><td>80</td><td>63</td><td>90</td><td>80</td><td>50</td><td>80</td><td>40</td><td>60</td><td></td><td>0</td><td>14</td><td>1</td><td>$0</td><td></td></tr>
<tr><td>18</td><td><a href="PlayerReport.php?Player=8">Bernik Vrzala(R)</a></td><td></td><td></td><td></td><td>X</td><td>100.00</td><td></td><td>82</td><td>25</td><td>62</td><td>85</td><td>75</td><td>80</td><td>50</td><td>50</td><td>80</td><td>40</td><td>82</td><td>43</td><td>99</td><td>80</td><td>50</td><td>80</td><td>40</td><td>59</td><td></td><td>0</td><td>13</td><td>1</td><td>$0</td><td></td></tr>
</table><table class="basictablesorter STHSRoster_GoaliesTable"><thead><tr>
<th class="STHSW200">Goalie Name</th><th class="STHSW25">PO</th><th class="STHSW25">CON</th><th class="STHSW25">IJ</th><th class="STHSW25">SK</th><th class="STHSW25">DU</th><th class="STHSW25">EN</th><th class="STHSW25">SZ</th><th class="STHSW25">AG</th><th class="STHSW25">RB</th><th class="STHSW25">SC</th><th class="STHSW25">HS</th><th class="STHSW25">RT</th><th class="STHSW25">PH</th><th class="STHSW25">PS</th><th class="STHSW25">EX</th><th class="STHSW25">LD</th><th class="STHSW25">PO</th><th class="STHSW25">MO</th><th class="STHSW25">OV</th><th class="STHSW25">TA</th><th class="STHSW25">SP</th><th class="STHSW25">Age</th><th class="STHSW35">Contract</th><th class="STHSW100">Salary</th><th class="STHSW55">Link</th></tr></thead>
<tr><td><a href="GoalieReport.php?Goalie=1">Chris Partridge(R)</a></td><td>G</td><td>100.00</td><td></td><td>90</td><td>50</td><td>95</td><td>95</td><td>90</td><td>99</td><td>50</td><td>99</td><td>95</td><td>99</td><td>80</td><td>80</td><td>50</td><td>80</td><td>40</td><td>81</td><td></td><td>0</td><td>21</td><td>1</td><td>$0</td><td></td></tr>
<tr><td><a href="GoalieReport.php?Goalie=2">Johnny Yuma(R)</a></td><td>G</td><td>100.00</td><td></td><td>75</td><td>50</td><td>77</td><td>89</td><td>89</td><td>88</td><td>50</td><td>87</td><td>87</td><td>88</td><td>70</td><td>51</td><td>80</td><td>50</td><td>40</td><td>75</td><td></td><td>0</td><td>22</td><td>1</td><td>$0</td><td></td></tr>
</table>
</div>
<h1 class="TeamRosterPro_KLD"><a id="HCLynxKladno">HC Lynx Kladno</a></h1>
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
<br /><table class="STHSTableFullW"><tr>
<td class="STHSRoster_GM">General Manager : </td>
<td class="STHSRoster_Coach">Coach : </td>
<td class="STHSW120"><b>Morale</b> : 40</td>
<td class="STHSRoster_TeamOverall">Team Overall : 67</td></tr></table>
<table class="basictablesorter STHSRoster_PlayersTable"><thead><tr>
<th class="STHSW25">#</th><th class="STHSW200">Player Name</th><th class="STHSW10">C</th><th class="STHSW10">L</th><th class="STHSW10">R</th><th class="STHSW10">D</th><th class="STHSW25">CON</th><th class="STHSW25">IJ</th><th class="STHSW25">CK</th><th class="STHSW25">FG</th><th class="STHSW25">DI</th><th class="STHSW25">SK</th><th class="STHSW25">ST</th><th class="STHSW25">EN</th><th class="STHSW25">DU</th><th class="STHSW25">PH</th><th class="STHSW25">FO</th><th class="STHSW25">PA</th><th class="STHSW25">SC</th><th class="STHSW25">DF</th><th class="STHSW25">PS</th><th class="STHSW25">EX</th><th class="STHSW25">LD</th><th class="STHSW25">PO</th><th class="STHSW25">MO</th><th class="STHSW25">OV</th><th class="STHSW25">TA</th><th class="STHSW25">SP</th><th class="STHSW25">Age</th><th class="STHSW25">Contract</th><th class="STHSW100">Salary</th><th class="STHSW55">Link</th></tr></thead>
<tr><td>1</td><td><a href="PlayerReport.php?Player=39">Schnitinfritz Jagr(R)</a></td><td>X</td><td>X</td><td>X</td><td></td><td>100.00</td><td></td><td>40</td><td>25</td><td>62</td><td>90</td><td>90</td><td>85</td><td>50</td><td>50</td><td>87</td><td>99</td><td>95</td><td>85</td><td>99</td><td>80</td><td>50</td><td>80</td><td>40</td><td>74</td><td></td><td>0</td><td>37</td><td>1</td><td>$0</td><td></td></tr>
<tr><td>2</td><td><a href="PlayerReport.php?Player=27">Michael Scarn(R)</a></td><td>X</td><td>X</td><td>X</td><td></td><td>100.00</td><td></td><td>46</td><td>25</td><td>62</td><td>90</td><td>81</td><td>80</td><td>50</td><td>50</td><td>90</td><td>80</td><td>87</td><td>96</td><td>90</td><td>80</td><td>50</td><td>80</td><td>40</td><td>71</td><td></td><td>0</td><td>14</td><td>1</td><td>$0</td><td></td></tr>
<tr><td>3</td><td><a href="PlayerReport.php?Player=68">Patrik Satan(R)</a></td><td>X</td><td>X</td><td>X</td><td></td><td>100.00</td><td></td><td>40</td><td>25</td><td>62</td><td>77</td><td>82</td><td>71</td><td>40</td><td>80</td><td>73</td><td>70</td><td>87</td><td>87</td><td>40</td><td>80</td><td>50</td><td>80</td><td>40</td><td>69</td><td></td><td>0</td><td>39</td><td>1</td><td>$0</td><td></td></tr>
<tr><td>4</td><td><a href="PlayerReport.php?Player=41">Shouta Aizawa(R)</a></td><td>X</td><td>X</td><td>X</td><td></td><td>100.00</td><td></td><td>52</td><td>25</td><td>62</td><td>80</td><td>62</td><td>73</td><td>50</td><td>50</td><td>78</td><td>80</td><td>76</td><td>90</td><td>85</td><td>80</td><td>50</td><td>80</td><td>40</td><td>67</td><td></td><td>0</td><td>16</td><td>1</td><td>$0</td><td></td></tr>
<tr><td>5</td><td><a href="PlayerReport.php?Player=59">Grayson St. Raegan(R)</a></td><td>X</td><td>X</td><td>X</td><td></td><td>100.00</td><td></td><td>41</td><td>25</td><td>62</td><td>65</td><td>65</td><td>69</td><td>50</td><td>70</td><td>65</td><td>80</td><td>70</td><td>75</td><td>40</td><td>80</td><td>50</td><td>80</td><td>40</td><td>64</td><td></td><td>0</td><td>20</td><td>1</td><td>$0</td><td></td></tr>
<tr><td>6</td><td><a href="PlayerReport.php?Player=22">Josef Novotny(R)</a></td><td>X</td><td>X</td><td>X</td><td></td><td>100.00</td><td></td><td>41</td><td>25</td><td>62</td><td>65</td><td>61</td><td>55</td><td>50</td><td>50</td><td>66</td><td>71</td><td>70</td><td>78</td><td>80</td><td>80</td><td>50</td><td>80</td><td>40</td><td>60</td><td></td><td>0</td><td>12</td><td>1</td><td>$0</td><td></td></tr>
<tr><td>7</td><td><a href="PlayerReport.php?Player=65">Merit Csonka(R)</a></td><td></td><td>X</td><td>X</td><td></td><td>100.00</td><td></td><td>53</td><td>25</td><td>65</td><td>90</td><td>86</td><td>86</td><td>51</td><td>86</td><td>55</td><td>85</td><td>90</td><td>86</td><td>50</td><td>80</td><td>50</td><td>80</td><td>40</td><td>75</td><td></td><td>0</td><td>40</td><td>1</td><td>$0</td><td></td></tr>
<tr><td>8</td><td><a href="PlayerReport.php?Player=1">Alex Winters(R)</a></td><td></td><td>X</td><td>X</td><td></td><td>100.00</td><td></td><td>45</td><td>25</td><td>67</td><td>90</td><td>90</td><td>76</td><td>50</td><td>50</td><td>99</td><td>76</td><td>99</td><td>90</td><td>99</td><td>80</td><td>50</td><td>80</td><td>40</td><td>72</td><td></td><td>0</td><td>17</td><td>1</td><td>$0</td><td></td></tr>
<tr><td>9</td><td><a href="PlayerReport.php?Player=56">Cash Savage(R)</a></td><td></td><td>X</td><td>X</td><td></td><td>100.00</td><td></td><td>50</td><td>34</td><td>62</td><td>76</td><td>70</td><td>70</td><td>50</td><td>75</td><td>49</td><td>70</td><td>90</td><td>90</td><td>47</td><td>80</td><td>50</td><td>80</td><td>40</td><td>69</td><td></td><td>0</td><td>19</td><td>1</td><td>$0</td><td></td></tr>
<tr><td>10</td><td><a href="PlayerReport.php?Player=17">Filip Zadina(R)</a></td><td></td><td>X</td><td>X</td><td></td><td>100.00</td><td></td><td>40</td><td>25</td><td>62</td><td>87</td><td>83</td><td>75</td><td>50</td><td>50</td><td>84</td><td>40</td><td>83</td><td>93</td><td>90</td><td>80</td><td>50</td><td>80</td><td>40</td><td>65</td><td></td><td>0</td><td>13</td><td>1</td><td>$0</td><td></td></tr>
<tr><td>11</td><td><a href="PlayerReport.php?Player=36">Radovan Hudec(R)</a></td><td></td><td>X</td><td>X</td><td></td><td>100.00</td><td></td><td>41</td><td>25</td><td>62</td><td>80</td><td>66</td><td>70</td><td>50</td><td>50</td><td>70</td><td>40</td><td>70</td><td>76</td><td>73</td><td>80</td><td>50</td><td>80</td><td>40</td><td>59</td><td></td><td>0</td><td>20</td><td>1</td><td>$0</td><td></td></tr>
<tr><td>12</td><td><a href="PlayerReport.php?Player=37">Ravyn Tedisko(R)</a></td><td></td><td>X</td><td>X</td><td></td><td>100.00</td><td></td><td>60</td><td>27</td><td>64</td><td>75</td><td>55</td><td>65</td><td>50</td><td>50</td><td>75</td><td>43</td><td>70</td><td>80</td><td>82</td><td>80</td><td>50</td><td>80</td><td>40</td><td>59</td><td></td><td>0</td><td>11</td><td>1</td><td>$0</td><td></td></tr>
<tr><td>13</td><td><a href="PlayerReport.php?Player=72">Tomas Pylon(R)</a></td><td></td><td></td><td></td><td>X</td><td>100.00</td><td></td><td>40</td><td>25</td><td>62</td><td>90</td><td>75</td><td>85</td><td>40</td><td>76</td><td>40</td><td>90</td><td>70</td><td>82</td><td>40</td><td>80</td><td>50</td><td>80</td><td>40</td><td>69</td><td></td><td>0</td><td>39</td><td>1</td><td>$0</td><td></td></tr>
<tr><td>14</td><td><a href="PlayerReport.php?Player=7">Barret McCarthy(R)</a></td><td></td><td></td><td></td><td>X</td><td>100.00</td><td></td><td>60</td><td>25</td><td>63</td><td>99</td><td>86</td><td>75</td><td>50</td><td>50</td><td>90</td><td>40</td><td>99</td><td>87</td><td>99</td><td>80</td><td>50</td><td>80</td><td>40</td><td>68</td><td></td><td>0</td><td>15</td><td>1</td><td>$0</td><td></td></tr>
<tr><td>15</td><td><a href="PlayerReport.php?Player=47">Troy McClure III(R)</a></td><td></td><td></td><td></td><td>X</td><td>100.00</td><td></td><td>80</td><td>31</td><td>62</td><td>90</td><td>89</td><td>90</td><td>50</td><td>50</td><td>98</td><td>46</td><td>91</td><td>76</td><td>99</td><td>80</td><td>50</td><td>80</td><td>40</td><td>67</td><td></td><td>0</td><td>17</td><td>1</td><td>$0</td><td></td></tr>
<tr><td>16</td><td><a href="PlayerReport.php?Player=30">Noctis Caelum(R)</a></td><td></td><td></td><td></td><td>X</td><td>100.00</td><td></td><td>56</td><td>28</td><td>62</td><td>90</td><td>85</td><td>87</td><td>50</td><td>50</td><td>90</td><td>46</td><td>96</td><td>86</td><td>99</td><td>80</td><td>50</td><td>80</td><td>40</td><td>67</td><td></td><td>0</td><td>28</td><td>1</td><td>$0</td><td></td></tr>
<tr><td>17</td><td><a href="PlayerReport.php?Player=23">Kornel Kasparek(R)</a></td><td></td><td></td><td></td><td>X</td><td>100.00</td><td></td><td>86</td><td>25</td><td>62</td><td>89</td><td>47</td><td>76</td><td>50</td><td>50</td><td>87</td><td>40</td><td>75</td><td>70</td><td>91</td><td>80</td><td>50</td><td>80</td><td>40</td><td>61</td><td></td><td>0</td><td>29</td><td>1</td><td>$0</td><td></td></tr>
<tr><td>18</td><td><a href="PlayerReport.php?Player=19">Jakob Hamr(R)</a></td><td></td><td></td><td></td><td>X</td><td>100.00</td><td></td><td>55</td><td>33</td><td>62</td><td>70</td><td>50</td><td>58</td><td>50</td><td>50</td><td>79</td><td>40</td><td>70</td><td>50</td><td>80</td><td>80</td><td>50</td><td>80</td><td>40</td><td>53</td><td></td><td>0</td><td>10</td><td>1</td><td>$0</td><td></td></tr>
</table><table class="basictablesorter STHSRoster_GoaliesTable"><thead><tr>
<th class="STHSW200">Goalie Name</th><th class="STHSW25">PO</th><th class="STHSW25">CON</th><th class="STHSW25">IJ</th><th class="STHSW25">SK</th><th class="STHSW25">DU</th><th class="STHSW25">EN</th><th class="STHSW25">SZ</th><th class="STHSW25">AG</th><th class="STHSW25">RB</th><th class="STHSW25">SC</th><th class="STHSW25">HS</th><th class="STHSW25">RT</th><th class="STHSW25">PH</th><th class="STHSW25">PS</th><th class="STHSW25">EX</th><th class="STHSW25">LD</th><th class="STHSW25">PO</th><th class="STHSW25">MO</th><th class="STHSW25">OV</th><th class="STHSW25">TA</th><th class="STHSW25">SP</th><th class="STHSW25">Age</th><th class="STHSW35">Contract</th><th class="STHSW100">Salary</th><th class="STHSW55">Link</th></tr></thead>
<tr><td><a href="GoalieReport.php?Goalie=6">Georgette Pel(R)</a></td><td>G</td><td>100.00</td><td></td><td>90</td><td>50</td><td>99</td><td>90</td><td>95</td><td>95</td><td>50</td><td>99</td><td>95</td><td>99</td><td>83</td><td>50</td><td>80</td><td>50</td><td>40</td><td>81</td><td></td><td>0</td><td>28</td><td>1</td><td>$0</td><td></td></tr>
<tr><td><a href="GoalieReport.php?Goalie=8">Knox Booth(R)</a></td><td>G</td><td>100.00</td><td></td><td>71</td><td>50</td><td>50</td><td>90</td><td>89</td><td>82</td><td>50</td><td>50</td><td>90</td><td>90</td><td>70</td><td>60</td><td>80</td><td>50</td><td>40</td><td>70</td><td></td><td>0</td><td>10</td><td>1</td><td>$0</td><td></td></tr>
</table>
</div>
<?php include "Footer.php";?>
