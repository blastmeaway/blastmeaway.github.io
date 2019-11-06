<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>CELH - Pro Team Lines</title>
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
<div class="STHSTopLink"><a id="STHSRosterTop"></a> <a href="#HCBlackEaglesSilesia">HC Black Eagles Silesia</a> | <a href="#HCEaglesMoravia">HC Eagles Moravia</a> | <a href="#HCLionsBohemia">HC Lions Bohemia</a> | <a href="#HCLynxKladno">HC Lynx Kladno</a> | <a href="javascript:STHS_JS_CloseAll('');">Close All Team View</a> | <a href="javascript:STHS_JS_OpenAll('');">Open All Team View</a>
</div>
<h1 class="TeamLinesPro_SBE"><a id="HCBlackEaglesSilesia">HC Black Eagles Silesia</a></h1>
<b>Lines are Complete</b><br />
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
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Zalleras Szlerchek       Piotr Czerkawski         Alexander Zajac          40     1   2  2  
 2 Krysztof Kowalski        Vratislav Zbynek         Jakub Novak              30     1   2  2  
 3 Zalleras Szlerchek       David Kastrba            Josef Kubinec            20     1   2  2  
 4 Piotr Czerkawski         Przemyslaw BrzeszczyczkieAron Hernadivic          10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Jakub Trocheck           Charlie Schieck                                   40     1   2  2  
 2 Samee Iqbal              Matej Elias                                       30     1   2  2  
 3 Mikas Bieksa             Tauras Karazija                                   20     1   2  2  
 4 Flash Gordon             Jakub Trocheck                                    10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Zalleras Szlerchek       Piotr Czerkawski         Alexander Zajac          60     1   2  2  
 2 Krysztof Kowalski        Vratislav Zbynek         Jakub Novak              40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Jakub Trocheck           Charlie Schieck                                   60     1   2  2  
 2 Samee Iqbal              Matej Elias                                       40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Zalleras Szlerchek       Piotr Czerkawski         60     1   2  2  
 2 Alexander Zajac          Krysztof Kowalski        40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Jakub Trocheck           Charlie Schieck          60     1   2  2  
 2 Samee Iqbal              Matej Elias              40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Zalleras Szlerchek                                60     1   2  2  
 2 Piotr Czerkawski                                  40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Jakub Trocheck           Charlie Schieck          60     1   2  2  
 2 Samee Iqbal              Matej Elias              40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Zalleras Szlerchek       Piotr Czerkawski         60     1   2  2  
 2 Alexander Zajac          Krysztof Kowalski        40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Jakub Trocheck           Charlie Schieck          60     1   2  2  
 2 Samee Iqbal              Matej Elias              40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Zalleras Szlerchek       Piotr Czerkawski         Alexander Zajac          Jakub Trocheck           Charlie Schieck          

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Zalleras Szlerchek       Piotr Czerkawski         Alexander Zajac          Jakub Trocheck           Charlie Schieck          

<b>Goaltenders</b>
Starting : Mike Verminski           
Backup : Casimir Stevens          

<b>Extra Forwards</b>
Normal : Simothy Drunkebird, David Kastrba, Josef Kubinec - PP : Simothy Drunkebird, David Kastrba - PK : Josef Kubinec
<b>Extra Defensemen</b>
Normal : Mikas Bieksa, Tauras Karazija, Flash Gordon - PP : Mikas Bieksa - PK : Tauras Karazija, Flash Gordon
<b>Penalty Shots</b>
Zalleras Szlerchek, Piotr Czerkawski, Alexander Zajac, Krysztof Kowalski, Vratislav Zbynek
<b>Custom OT Lines Forwards</b>
Zalleras Szlerchek, Piotr Czerkawski, Alexander Zajac, Krysztof Kowalski, Vratislav Zbynek, Jakub Novak, David Kastrba, Josef Kubinec, Przemyslaw Brzeszczyczkiewicz, Aron Hernadivic
<b>Custom OT Lines Defensemen</b>
Jakub Trocheck, Charlie Schieck, Samee Iqbal, Matej Elias, Mikas Bieksa

<b>Scratches</b>
None
</pre></div>
<h1 class="TeamLinesPro_MOR"><a id="HCEaglesMoravia">HC Eagles Moravia</a></h1>
<b>Lines are Complete</b><br />
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
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Slappy McDoodle          Marian Potoczny          Aviad Ratzon             40     1   2  2  
 2 Zivan Zidek              Dionyz Vyskoc            Marek Vyskoc             30     1   2  2  
 3 Mikhail Kladno           Boruvka Banananak        Nico Gross               20     1   2  2  
 4 Potato Chips             Daniel Garland           Sasha Dangelchek         10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Ondrej Ravchitikov       Sachimo Zoidberg                                  40     1   2  2  
 2 Brady McIntyre           Ty Justice                                        30     1   2  2  
 3 Andrej Doskocil          Barak Obrana                                      20     1   2  2  
 4 Ondrej Ravchitikov       Sachimo Zoidberg                                  10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Slappy McDoodle          Marian Potoczny          Aviad Ratzon             60     1   2  2  
 2 Zivan Zidek              Dionyz Vyskoc            Marek Vyskoc             40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Ondrej Ravchitikov       Sachimo Zoidberg                                  60     1   2  2  
 2 Brady McIntyre           Ty Justice                                        40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Slappy McDoodle          Marian Potoczny          60     1   2  2  
 2 Aviad Ratzon             Dionyz Vyskoc            40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Ondrej Ravchitikov       Sachimo Zoidberg         60     1   2  2  
 2 Brady McIntyre           Ty Justice               40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Slappy McDoodle                                   60     1   2  2  
 2 Marian Potoczny                                   40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Ondrej Ravchitikov       Sachimo Zoidberg         60     1   2  2  
 2 Brady McIntyre           Ty Justice               40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Slappy McDoodle          Marian Potoczny          60     1   2  2  
 2 Aviad Ratzon             Dionyz Vyskoc            40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Ondrej Ravchitikov       Sachimo Zoidberg         60     1   2  2  
 2 Brady McIntyre           Ty Justice               40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Slappy McDoodle          Marian Potoczny          Aviad Ratzon             Ondrej Ravchitikov       Sachimo Zoidberg         

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Slappy McDoodle          Marian Potoczny          Aviad Ratzon             Ondrej Ravchitikov       Sachimo Zoidberg         

<b>Goaltenders</b>
Starting : Christoffer Bjornsson    
Backup : Ben Holtby               

<b>Extra Forwards</b>
Normal : Boruvka Banananak, Mikhail Kladno, Nico Gross - PP : Boruvka Banananak, Mikhail Kladno - PK : Nico Gross
<b>Extra Defensemen</b>
Normal : Andrej Doskocil, Barak Obrana, Brady McIntyre - PP : Andrej Doskocil - PK : Barak Obrana, Brady McIntyre
<b>Penalty Shots</b>
Slappy McDoodle, Marian Potoczny, Aviad Ratzon, Dionyz Vyskoc, Marek Vyskoc
<b>Custom OT Lines Forwards</b>
Slappy McDoodle, Marian Potoczny, Aviad Ratzon, Dionyz Vyskoc, Marek Vyskoc, Boruvka Banananak, Zivan Zidek, Mikhail Kladno, Nico Gross, Potato Chips
<b>Custom OT Lines Defensemen</b>
Ondrej Ravchitikov, Sachimo Zoidberg, Brady McIntyre, Ty Justice, Andrej Doskocil

<b>Scratches</b>
None
</pre></div>
<h1 class="TeamLinesPro_BOH"><a id="HCLionsBohemia">HC Lions Bohemia</a></h1>
<b>Lines are Complete</b><br />
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
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 DeMaricus Smyth          Luke Thomason            Dickie Pecker            40     1   2  2  
 2 Travis Jeziak            Matej Stransky           Petr Kolesnikovs         30     1   2  2  
 3 Konstantin Voloshin      Petr Mikulak             Cameron Urbowicz         20     1   2  2  
 4 Jan Zacha                Soren Kierkegaard        Ruslan Zaporozhets       10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Walter White             Pierre-Luc Laflamme                               40     1   2  2  
 2 Tokek Takshak            Sean Stevenson Jr.                                30     1   2  2  
 3 David Vent               Bernik Vrzala                                     20     1   2  2  
 4 Walter White             Pierre-Luc Laflamme                               10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 DeMaricus Smyth          Luke Thomason            Dickie Pecker            60     1   2  2  
 2 Travis Jeziak            Matej Stransky           Petr Kolesnikovs         40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Walter White             Pierre-Luc Laflamme                               60     1   2  2  
 2 Tokek Takshak            Sean Stevenson Jr.                                40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 DeMaricus Smyth          Luke Thomason            60     1   2  2  
 2 Dickie Pecker            Matej Stransky           40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Walter White             Pierre-Luc Laflamme      60     1   2  2  
 2 Tokek Takshak            Sean Stevenson Jr.       40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 DeMaricus Smyth                                   60     1   2  2  
 2 Luke Thomason                                     40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Walter White             Pierre-Luc Laflamme      60     1   2  2  
 2 Tokek Takshak            Sean Stevenson Jr.       40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 DeMaricus Smyth          Luke Thomason            60     1   2  2  
 2 Dickie Pecker            Matej Stransky           40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Walter White             Pierre-Luc Laflamme      60     1   2  2  
 2 Tokek Takshak            Sean Stevenson Jr.       40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   DeMaricus Smyth          Luke Thomason            Dickie Pecker            Walter White             Pierre-Luc Laflamme      

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   DeMaricus Smyth          Luke Thomason            Dickie Pecker            Walter White             Pierre-Luc Laflamme      

<b>Goaltenders</b>
Starting : Chris Partridge          
Backup : Johnny Yuma              

<b>Extra Forwards</b>
Normal : Petr Mikulak, Cameron Urbowicz, Konstantin Voloshin - PP : Petr Mikulak, Cameron Urbowicz - PK : Konstantin Voloshin
<b>Extra Defensemen</b>
Normal : David Vent, Bernik Vrzala, Tokek Takshak - PP : David Vent - PK : Bernik Vrzala, Tokek Takshak
<b>Penalty Shots</b>
DeMaricus Smyth, Luke Thomason, Dickie Pecker, Matej Stransky, Travis Jeziak
<b>Custom OT Lines Forwards</b>
DeMaricus Smyth, Luke Thomason, Dickie Pecker, Matej Stransky, Travis Jeziak, Petr Kolesnikovs, Petr Mikulak, Cameron Urbowicz, Konstantin Voloshin, Jan Zacha
<b>Custom OT Lines Defensemen</b>
Walter White, Pierre-Luc Laflamme, Tokek Takshak, Sean Stevenson Jr., David Vent

<b>Scratches</b>
None
</pre></div>
<h1 class="TeamLinesPro_KLD"><a id="HCLynxKladno">HC Lynx Kladno</a></h1>
<b>Lines are Complete</b><br />
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
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Schnitinfritz Jagr       Merit Csonka             Alex Winters             40     1   2  2  
 2 Michael Scarn            Cash Savage              Patrik Satan             30     1   2  2  
 3 Shouta Aizawa            Filip Zadina             Grayson St. Raegan       20     1   2  2  
 4 Merit Csonka             Radovan Hudec            Ravyn Tedisko            10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Tomas Pylon              Troy McClure III                                  40     1   2  2  
 2 Barret McCarthy          Noctis Caelum                                     30     1   2  2  
 3 Kornel Kasparek          Barret McCarthy                                   20     1   2  2  
 4 Jakob Hamr               Tomas Pylon                                       10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Schnitinfritz Jagr       Merit Csonka             Alex Winters             60     1   2  2  
 2 Michael Scarn            Cash Savage              Patrik Satan             40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Tomas Pylon              Troy McClure III                                  60     1   2  2  
 2 Barret McCarthy          Noctis Caelum                                     40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Merit Csonka             Schnitinfritz Jagr       60     1   2  2  
 2 Alex Winters             Michael Scarn            40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Tomas Pylon              Troy McClure III         60     1   2  2  
 2 Barret McCarthy          Noctis Caelum            40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Merit Csonka                                      60     1   2  2  
 2 Schnitinfritz Jagr                                40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Tomas Pylon              Troy McClure III         60     1   2  2  
 2 Barret McCarthy          Noctis Caelum            40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Merit Csonka             Schnitinfritz Jagr       60     1   2  2  
 2 Alex Winters             Michael Scarn            40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Tomas Pylon              Troy McClure III         60     1   2  2  
 2 Barret McCarthy          Noctis Caelum            40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Schnitinfritz Jagr       Merit Csonka             Alex Winters             Tomas Pylon              Troy McClure III         

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Schnitinfritz Jagr       Merit Csonka             Alex Winters             Tomas Pylon              Troy McClure III         

<b>Goaltenders</b>
Starting : Georgette Pel            
Backup : Knox Booth               

<b>Extra Forwards</b>
Normal : Shouta Aizawa, Filip Zadina, Grayson St. Raegan - PP : Shouta Aizawa, Filip Zadina - PK : Grayson St. Raegan
<b>Extra Defensemen</b>
Normal : Kornel Kasparek, Tomas Pylon, Jakob Hamr - PP : Kornel Kasparek - PK : Tomas Pylon, Jakob Hamr
<b>Penalty Shots</b>
Merit Csonka, Schnitinfritz Jagr, Alex Winters, Michael Scarn, Cash Savage
<b>Custom OT Lines Forwards</b>
Merit Csonka, Schnitinfritz Jagr, Alex Winters, Michael Scarn, Cash Savage, Patrik Satan, Shouta Aizawa, Filip Zadina, Grayson St. Raegan, Radovan Hudec
<b>Custom OT Lines Defensemen</b>
Tomas Pylon, Troy McClure III, Barret McCarthy, Noctis Caelum, Kornel Kasparek

<b>Scratches</b>
None
</pre></div>
<?php include "Footer.php";?>
