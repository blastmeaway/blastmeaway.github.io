<!DOCTYPE html>
<?php include "Header.php";?>
<script>
function toggleDiv(divId) {$("#"+divId).toggle();}
</script>
<?php
$Active = 1; /* Show Webpage Top Menu */
If (file_exists($DatabaseFile) == false){
	$LeagueName = $DatabaseNotFound;
	$Transaction = Null;
	$Schedule = Null;
	echo "<title>" . $DatabaseNotFound . "</title>";
	echo "<style>";
	echo ".STHSIndex_Main{display:none;}";
	echo "#cssmenu{display:none;}";
}else{
	$LeagueName = (string)"";
	
	$db = new SQLite3($DatabaseFile);
	
	$Query = "Select Name, ScheduleNextDay, DefaultSimulationPerDay, PointSystemSO, OffSeason, Days73StarPro, Days303StarPro, Days73StarFarm, Days303StarFarm from LeagueGeneral";
	$LeagueGeneral = $db->querySingle($Query,true);		
	$LeagueName = $LeagueGeneral['Name'];	
	
	$Query = "SELECT LeagueLog.* FROM LeagueLog WHERE ((LeagueLog.TransactionType = 1) OR (LeagueLog.TransactionType = 2) OR  (LeagueLog.TransactionType = 3) OR  (LeagueLog.TransactionType = 6)) ORDER BY LeagueLog.Number DESC LIMIT 10";
	$Transaction = $db->query($Query);
	
	$Query = "Select ProMinimumGamePlayerLeader, ShowFarmScoreinPHPHomePage, NumberofNewsinPHPHomePage, NumberofLatestScoreinPHPHomePage from LeagueOutputOption";
	$LeagueOutputOption = $db->querySingle($Query,true);		
	
	If (file_exists($NewsDatabaseFile) == false){
		$LeagueNews = Null;
	}else{
		$dbNews = new SQLite3($NewsDatabaseFile);
		$Query = "Select * FROM LeagueNews WHERE Remove = 'False' ORDER BY Time DESC";
		$LeagueNews = $dbNews->query($Query);
	}
		
	If ($LeagueOutputOption['ShowFarmScoreinPHPHomePage'] == 'True'){
		$Query = "SELECT *,'Pro' as Type FROM SchedulePro WHERE Day = " . ($LeagueGeneral['ScheduleNextDay'] - $LeagueGeneral['DefaultSimulationPerDay']) . " UNION SELECT *,'Farm' as Type FROM ScheduleFarm WHERE Day = " . ($LeagueGeneral['ScheduleNextDay'] - $LeagueGeneral['DefaultSimulationPerDay']) . " ORDER BY TYPE DESC, GAMENUMBER";
		$QuerySchedule = "Select ProSchedule.*, 'Pro' AS Type FROM (SELECT TeamProStatVisitor.Last10W AS VLast10W, TeamProStatVisitor.Last10L AS VLast10L, TeamProStatVisitor.Last10T AS VLast10T, TeamProStatVisitor.Last10OTW AS VLast10OTW, TeamProStatVisitor.Last10OTL AS VLast10OTL, TeamProStatVisitor.Last10SOW AS VLast10SOW, TeamProStatVisitor.Last10SOL AS VLast10SOL, TeamProStatVisitor.GP AS VGP, TeamProStatVisitor.W AS VW, TeamProStatVisitor.L AS VL, TeamProStatVisitor.T AS VT, TeamProStatVisitor.OTW AS VOTW, TeamProStatVisitor.OTL AS VOTL, TeamProStatVisitor.SOW AS VSOW, TeamProStatVisitor.SOL AS VSOL, TeamProStatVisitor.Points AS VPoints, TeamProStatVisitor.Streak AS VStreak, TeamProStatHome.Last10W AS HLast10W, TeamProStatHome.Last10L AS HLast10L, TeamProStatHome.Last10T AS HLast10T, TeamProStatHome.Last10OTW AS HLast10OTW, TeamProStatHome.Last10OTL AS HLast10OTL, TeamProStatHome.Last10SOW AS HLast10SOW, TeamProStatHome.Last10SOL AS HLast10SOL, TeamProStatHome.GP AS HGP, TeamProStatHome.W AS HW, TeamProStatHome.L AS HL, TeamProStatHome.T AS HT, TeamProStatHome.OTW AS HOTW, TeamProStatHome.OTL AS HOTL, TeamProStatHome.SOW AS HSOW, TeamProStatHome.SOL AS HSOL, TeamProStatHome.Points AS HPoints, TeamProStatHome.Streak AS HStreak, SchedulePro.* FROM (SchedulePRO LEFT JOIN TeamProStat AS TeamProStatHome ON SchedulePRO.HomeTeam = TeamProStatHome.Number) LEFT JOIN TeamProStat AS TeamProStatVisitor ON SchedulePRO.VisitorTeam = TeamProStatVisitor.Number WHERE DAY >= " . $LeagueGeneral['ScheduleNextDay'] . " AND DAY <= " . ($LeagueGeneral['ScheduleNextDay'] + $LeagueGeneral['DefaultSimulationPerDay'] -1) . ") AS ProSchedule  UNION ALL Select FarmSchedule.*, 'Farm' AS Type FROM (SELECT TeamFarmStatVisitor.Last10W AS VLast10W, TeamFarmStatVisitor.Last10L AS VLast10L, TeamFarmStatVisitor.Last10T AS VLast10T, TeamFarmStatVisitor.Last10OTW AS VLast10OTW, TeamFarmStatVisitor.Last10OTL AS VLast10OTL, TeamFarmStatVisitor.Last10SOW AS VLast10SOW, TeamFarmStatVisitor.Last10SOL AS VLast10SOL, TeamFarmStatVisitor.GP AS VGP, TeamFarmStatVisitor.W AS VW, TeamFarmStatVisitor.L AS VL, TeamFarmStatVisitor.T AS VT, TeamFarmStatVisitor.OTW AS VOTW, TeamFarmStatVisitor.OTL AS VOTL, TeamFarmStatVisitor.SOW AS VSOW, TeamFarmStatVisitor.SOL AS VSOL, TeamFarmStatVisitor.Points AS VPoints, TeamFarmStatVisitor.Streak AS VStreak, TeamFarmStatHome.Last10W AS HLast10W, TeamFarmStatHome.Last10L AS HLast10L, TeamFarmStatHome.Last10T AS HLast10T, TeamFarmStatHome.Last10OTW AS HLast10OTW, TeamFarmStatHome.Last10OTL AS HLast10OTL, TeamFarmStatHome.Last10SOW AS HLast10SOW, TeamFarmStatHome.Last10SOL AS HLast10SOL, TeamFarmStatHome.GP AS HGP, TeamFarmStatHome.W AS HW, TeamFarmStatHome.L AS HL, TeamFarmStatHome.T AS HT, TeamFarmStatHome.OTW AS HOTW, TeamFarmStatHome.OTL AS HOTL, TeamFarmStatHome.SOW AS HSOW, TeamFarmStatHome.SOL AS HSOL, TeamFarmStatHome.Points AS HPoints, TeamFarmStatHome.Streak AS HStreak, ScheduleFarm.* FROM (ScheduleFarm LEFT JOIN TeamFarmStat AS TeamFarmStatHome ON ScheduleFarm.HomeTeam = TeamFarmStatHome.Number) LEFT JOIN TeamFarmStat AS TeamFarmStatVisitor ON ScheduleFarm.VisitorTeam = TeamFarmStatVisitor.Number WHERE DAY >= " . $LeagueGeneral['ScheduleNextDay'] . " AND DAY <= " . ($LeagueGeneral['ScheduleNextDay'] + $LeagueGeneral['DefaultSimulationPerDay'] -1) . ") AS FarmSchedule ORDER BY Day, Type DESC, GameNumber";
	}else{
		$Query = "SELECT * FROM SchedulePro WHERE Day = " . ($LeagueGeneral['ScheduleNextDay'] - $LeagueGeneral['DefaultSimulationPerDay']) . " ORDER BY GameNumber ";
		$QuerySchedule = "SELECT SchedulePro.*, 'Pro' AS Type, TeamProStatVisitor.Last10W AS VLast10W, TeamProStatVisitor.Last10L AS VLast10L, TeamProStatVisitor.Last10T AS VLast10T, TeamProStatVisitor.Last10OTW AS VLast10OTW, TeamProStatVisitor.Last10OTL AS VLast10OTL, TeamProStatVisitor.Last10SOW AS VLast10SOW, TeamProStatVisitor.Last10SOL AS VLast10SOL, TeamProStatVisitor.GP AS VGP, TeamProStatVisitor.W AS VW, TeamProStatVisitor.L AS VL, TeamProStatVisitor.T AS VT, TeamProStatVisitor.OTW AS VOTW, TeamProStatVisitor.OTL AS VOTL, TeamProStatVisitor.SOW AS VSOW, TeamProStatVisitor.SOL AS VSOL, TeamProStatVisitor.Points AS VPoints, TeamProStatVisitor.Streak AS VStreak, TeamProStatHome.Last10W AS HLast10W, TeamProStatHome.Last10L AS HLast10L, TeamProStatHome.Last10T AS HLast10T, TeamProStatHome.Last10OTW AS HLast10OTW, TeamProStatHome.Last10OTL AS HLast10OTL, TeamProStatHome.Last10SOW AS HLast10SOW, TeamProStatHome.Last10SOL AS HLast10SOL, TeamProStatHome.GP AS HGP, TeamProStatHome.W AS HW, TeamProStatHome.L AS HL, TeamProStatHome.T AS HT, TeamProStatHome.OTW AS HOTW, TeamProStatHome.OTL AS HOTL, TeamProStatHome.SOW AS HSOW, TeamProStatHome.SOL AS HSOL, TeamProStatHome.Points AS HPoints, TeamProStatHome.Streak AS HStreak FROM (SchedulePRO LEFT JOIN TeamProStat AS TeamProStatHome ON SchedulePRO.HomeTeam = TeamProStatHome.Number) LEFT JOIN TeamProStat AS TeamProStatVisitor ON SchedulePRO.VisitorTeam = TeamProStatVisitor.Number WHERE DAY >= " . $LeagueGeneral['ScheduleNextDay'] . " AND DAY <= " . ($LeagueGeneral['ScheduleNextDay'] + $LeagueGeneral['DefaultSimulationPerDay'] -1) . " ORDER BY Day, GameNumber";
	}
	
	$LatestScore = $db->query($Query);
	$Schedule = $db->query($QuerySchedule);
	
	echo "<title>" . $LeagueName . " - " . $IndexLang['IndexTitle'] . "</title>";
	echo "<style>";
}

Function PrintMainNews($row, $IndexLang, $dbNews){
	/* This Function Print a News */
	$UTC = new DateTimeZone("UTC");
	$ServerTimeZone = new DateTimeZone(date_default_timezone_get());
	echo "<h2>" . $row['Title'] . "</h2>";
	$Date = new DateTime($row['Time'], $UTC );
	$Date->setTimezone($ServerTimeZone);
	
	/* The following two lines publish the news */
	echo "<strong>" . $IndexLang['By'] . " " . $row['Owner'] . " " . $IndexLang['On'] . " " . $Date->format('l jS F Y / g:ia ')  . "</strong><br />";
	echo  $row['Message'] . "\n"; /* The \n is for a new line in the HTML Code */
	
	/* Get the Number of Reply */
	$NewsReplyCount = Null;
	$Query = "Select Count(Message) as CountMessage FROM LeagueNews WHERE Remove = 'False' AND AnswerNumber = " . $row['Number'] . " ORDER BY Number";
	$NewsReplyCount = $dbNews->querySingle($Query,true);
	
	If ($NewsReplyCount['CountMessage'] > 0 ){ /* If Reply are Found */

		/* Query Reply */
		$NewsReply = Null;
		$Query = "Select * FROM LeagueNews WHERE Remove = 'False' AND AnswerNumber = " . $row['Number'] . " ORDER BY Number";
		$NewsReply = $dbNews->query($Query);
	
		/* Show the Number of News + Create the Link */
		echo "<a href=\"javascript:toggleDiv('News" . $row['Number'] . "');\">" . $IndexLang['Viewcomments'] . " (" .  $NewsReplyCount['CountMessage'] . ")</a>"; 

		/* Publish all the Comments in Table */
		echo "<table class=\"STHSIndex_NewsReplyTable\" id=\"News" . $row['Number'] . "\"><tbody>";
		if (empty($NewsReply) == false){
			while ($ReplyRow = $NewsReply ->fetchArray()) { 
			$Date = new DateTime($ReplyRow['Time'], $UTC );
			$Date->setTimezone($ServerTimeZone);
			echo "<tr><td><span class=\"STHSIndex_NewsReplyOwner\">" . $ReplyRow['Owner'] . "</span> <span class=\"STHSIndex_NewsReplyTime\">" . $IndexLang['On'] . " " . $Date->format('jS F / g:ia ') . "</span> : " . $ReplyRow['Message'] . "</td></tr>";			
		}}
		echo "<tr><td><a href=\"NewsEditor.php?ReplyNews=" . $row['Number'] . "\">" . $IndexLang['Comment'] . "</a></td></tr>";
		echo "</tbody></table>";
	
	}else{
		/* No Reply, print link to create the first reply */
		echo "<a href=\"NewsEditor.php?ReplyNews=" . $row['Number'] . "\">" . $IndexLang['Comment'] . "</a>\n";	
	}
}
?>
.CarouselTable {border-width: 0.5px;border-style: solid;border-collapse: collapse; width: 92%;}
.CarouselTable th {font-weight: bold;}
.CarouselTable td {padding-left: 5px;padding-right: 10px;}
.CarouselTable td > a {text-decoration: none;}
<?php 
If ($LeagueGeneral['OffSeason'] == "True"){
	echo ".STHSIndex_Score{display:none;}";
	echo ".STHSIndex_Top5Table {display:none;}";
	echo "@media screen and (max-width: 890px) {.STHSIndex_Top5 {display:none;}}";
}else{
	echo ".STHSIndex_Top20FreeAgents {display:none;}";
	echo "@media screen and (max-width: 890px) {.STHSIndex_Score{display:none;}}";
	echo "@media screen and (max-width: 1200px) {.STHSIndex_Top5 {display:none;}}";
}?>
</style>
</head><body>
<?php include "Menu.php";
If (file_exists($DatabaseFile) == false){echo "<br /><br /><h1 class=\"STHSCenter\">" . $DatabaseNotFound . "</h1>";}
?>
<table class="STHSIndex_Main"><tr><td class="STHSIndex_Score" style="width:220px;">
<table class="STHSTableFullW"><tr><td>
<div class="STHSIndex_LastestResult"><?php echo $IndexLang['LatestScores'];?></div>
<?php
if (empty($LatestScore) == false){while ($row = $LatestScore ->fetchArray()) {
	echo "<table class=\"CarouselTable\">";
	echo "<tr><th>Day " . $row['Day']. "</th><th class=\"STHSW45\">#" . $row['GameNumber']. "</th></tr>";
	echo "<tr><td>" . $row['VisitorTeamName']. "</td><td class=\"STHSRight\">" . $row['VisitorScore'] . "</td></tr>";
	echo "<tr><td>" . $row['HomeTeamName']. "</td><td class=\"STHSRight\">" . $row['HomeScore'] . "</td></tr>";
	echo "<tr><td colspan=\"2\" class=\"STHSCenter\"><a href=\"" . $row['Link'] ."\">" . $TodayGamesLang['BoxScore'] .  "</a></td></tr>";
	echo "</table>";
}}
?>


</td></tr><tr><td>
<div class="STHSIndex_LastestResult"><?php echo $TodayGamesLang['NextGames'];?></div>
<?php
if (empty($Schedule) == false){while ($row = $Schedule ->fetchArray()) {
	echo "<table class=\"CarouselTable\">";
	echo "<tr><th>Day " . $row['Day']. " - " . $row['Type'] . " - " . $row['GameNumber']. "</th></tr>";
	echo "<tr><td><a href=\"" . $row['Type']  . "Team.php?Team=" . $row['VisitorTeam'] . "\">" . $row['VisitorTeamName']. "</a> (" . ($row['VW'] + $row['VOTW'] + $row['VSOW']) . "-";
	if ($LeagueGeneral['PointSystemSO'] == "True"){
		echo $row['VL'] . "-" . ($row['VOTL'] + $row['VSOL']);
	}else{
		echo ($row['VL'] + $row['VOTL'] + $row['VSOL']) . "-" . $row['VT'];
	}
	echo ") - " . $row['VStreak'] . "</td></tr>";
	echo "<tr><td><a href=\"" . $row['Type'] . "Team.php?Team=" . $row['HomeTeam'] . "\">" . $row['HomeTeamName']. "</a> (" . ($row['HW'] + $row['HOTW'] + $row['HSOW']) . "-";
	if ($LeagueGeneral['PointSystemSO'] == "True"){
		echo $row['HL'] . "-" . ($row['HOTL'] + $row['HSOL']);
	}else{
		echo ($row['HL'] + $row['HOTL'] + $row['HSOL']) . "-" . $row['HT'];
	}
	echo ") - " . $row['HStreak']. "</td></tr>";
	echo "</table>";
}}
?>

</td></tr></table>
</td><td class="STHSIndex_NewsTD">
<div class="STHSIndex_TheNews"><?php echo $LeagueName . $IndexLang['News'];?></div>
<?php
$NewsPublish = array(); /* Array that Contain News Publish Already Publish */
$CountNews = 0; /* Number of New Publish so we can apply the STHS option 'Number of News in Home Page' */

if (empty($LeagueNews) == false){while ($row = $LeagueNews ->fetchArray()) { /* Loop News in Reserve Order of Publish Time */
	if (in_array($row['Number'],$NewsPublish) == FALSE AND in_array($row['AnswerNumber'],$NewsPublish) == FALSE ){ /* Make sure we already didn't publish this news */
		if ($row['AnswerNumber'] == 0){
			/* This row of the Table is not answer comment so it's main news */
			PrintMainNews($row, $IndexLang, $dbNews);  /* Print the News */
			
			/* Increment the Number of News Publish */
			$CountNews +=1; 
			
			/* If we publish enough news based on the the STHS option 'Number of News in Home Page', we close the loop */
			If ($CountNews >= $LeagueOutputOption['NumberofNewsinPHPHomePage']){break;} 
		}else{
			/* This is row is answer to previous news. Finding the Main News Information */
			
			$Query = "Select * FROM LeagueNews WHERE Number = " . $row['AnswerNumber'];
			$NewsTemp = $dbNews->querySingle($Query,True);
					
			/* Print the News */
			PrintMainNews($NewsTemp, $IndexLang, $dbNews);  
			
			/* Increment the Number of News Publish */
			$CountNews +=1; 
			
			/* If we publish enough news based on the the STHS option 'Number of News in Home Page', we close the loop */
			If ($CountNews >= $LeagueOutputOption['NumberofNewsinPHPHomePage']){break;} 
			
			/* Add in the Array the Main News will be publish */
			array_push($NewsPublish, $row['AnswerNumber']); 
		}
	}
}}else{echo "<br /><h3>" . $NewsDatabaseNotFound . "</h3>";}
?>

<br /><br /><h2><?php echo $IndexLang['LatestTransactions'];?></h2>
<?php
if (empty($Transaction) == false){while ($row = $Transaction ->fetchArray()) { 
	echo "[" . $row['DateTime'] . "] " . $row['Text'] . "<br />\n"; /* The \n is for a new line in the HTML Code */
}}
?>
</td><td class="STHSIndex_Top5">

<table class="STHSIndex_Top5Table">
<tr><th colspan="2" class="STHSTop5"><?php echo $IndexLang['Top5Point'];?></th></tr>
<tr><td class="STHSIndex_Top5PointNameHeader"><?php echo $PlayersLang['PlayerName'];?></td><td class="STHSIndex_Top5PointResultHeader">G-A-P</td></tr>
<?php
$Query = "SELECT PlayerProStat.G, PlayerProStat.A, PlayerProStat.P, PlayerProStat.GP, PlayerProStat.Name, PlayerProStat.Number, TeamProInfo.Abbre FROM (PlayerInfo INNER JOIN PlayerProStat ON PlayerInfo.Number = PlayerProStat.Number) LEFT JOIN TeamProInfo ON PlayerInfo.Team = TeamProInfo.Number WHERE (PlayerProStat.GP >= " . $LeagueOutputOption['ProMinimumGamePlayerLeader'] . ") AND (PlayerInfo.Team > 0) AND (PlayerProStat.P > 0) ORDER BY PlayerProStat.P DESC, PlayerProStat.G DESC, PlayerProStat.GP ASC LIMIT 5";
$PlayerStat = $db->query($Query);
if (empty($PlayerStat) == false){while ($Row = $PlayerStat ->fetchArray()) {
	echo "<tr><td><a href=\"PlayerReport.php?Player=" . $Row['Number'] . "\">" . $Row['Name'] . " (" . $Row['Abbre'] . ")</a></td><td>" . $Row['G'] . "-" . $Row['A'] . "-" . $Row['P'] . "</td></tr>\n";
}}?>

<tr><th colspan="2" class="STHSTop5"><br /><br /><?php echo $IndexLang['Top5Goal'];?></th></tr>
<tr><td class="STHSIndex_Top5PointNameHeader"><?php echo $PlayersLang['PlayerName'];?></td><td class="STHSIndex_Top5PointResultHeader">GP-G</td></tr>
<?php
$Query = "SELECT PlayerProStat.G, PlayerProStat.A, PlayerProStat.P, PlayerProStat.GP, PlayerProStat.Name, PlayerProStat.Number, TeamProInfo.Abbre FROM (PlayerInfo INNER JOIN PlayerProStat ON PlayerInfo.Number = PlayerProStat.Number) LEFT JOIN TeamProInfo ON PlayerInfo.Team = TeamProInfo.Number WHERE (PlayerProStat.GP >= " . $LeagueOutputOption['ProMinimumGamePlayerLeader'] . ") AND (PlayerInfo.Team > 0) AND (PlayerProStat.P > 0) ORDER BY PlayerProStat.G DESC, PlayerProStat.GP ASC LIMIT 5";
$PlayerStat = $db->query($Query);
if (empty($PlayerStat) == false){while ($Row = $PlayerStat ->fetchArray()) {
	echo "<tr><td><a href=\"PlayerReport.php?Player=" . $Row['Number'] . "\">" . $Row['Name'] . " (" . $Row['Abbre'] . ")</a></td><td>" . $Row['GP'] . " - " . $Row['G'] . "</td></tr>\n";
}}?>

<tr><th colspan="2" class="STHSTop5"><br /><br /><?php echo $IndexLang['Top5Goalies'];?></th></tr>
<tr><td class="STHSIndex_Top5PointNameHeader"><?php echo $PlayersLang['GoalieName'];?></td><td class="STHSIndex_Top5PointResultHeader">W-PCT</td></tr>
<?php
$Query = "SELECT ROUND((CAST(GoalerProStat.SA - GoalerProStat.GA AS REAL) / (GoalerProStat.SA)),3) AS PCT, GoalerProStat.W, GoalerProStat.SecondPlay, GoalerProStat.Name, GoalerProStat.Number, TeamProInfo.Abbre FROM (GoalerInfo INNER JOIN GoalerProStat ON GoalerInfo.Number = GoalerProStat.Number) LEFT JOIN TeamProInfo ON GoalerInfo.Team = TeamProInfo.Number WHERE (GoalerProStat.SecondPlay >= (" . $LeagueOutputOption['ProMinimumGamePlayerLeader'] . "*3600)) AND (GoalerInfo.Team > 0) AND (PCT > 0) ORDER BY PCT DESC, GoalerProStat.W DESC LIMIT 5";
$PlayerStat = $db->query($Query);
if (empty($PlayerStat) == false){while ($Row = $PlayerStat ->fetchArray()) {
	echo "<tr><td><a href=\"GoalieReport.php?Goalie=" . $Row['Number'] . "\">" . $Row['Name'] . " (" . $Row['Abbre'] . ")</a></td><td>" . $Row['W'] . " - " . number_Format($Row['PCT'],3) .  "</td></tr>\n";
}}?>

<tr><th colspan="2" class="STHSTop5"><br /><br /><?php echo $IndexLang['Top5Defenseman'];?></th></tr>
<tr><td class="STHSIndex_Top5PointNameHeader"><?php echo $PlayersLang['PlayerName'];?></td><td class="STHSIndex_Top5PointResultHeader">G-A-P</td></tr>
<?php
$Query = "SELECT PlayerProStat.G, PlayerProStat.A, PlayerProStat.P, PlayerProStat.GP, PlayerProStat.Name, PlayerProStat.Number, TeamProInfo.Abbre FROM (PlayerInfo INNER JOIN PlayerProStat ON PlayerInfo.Number = PlayerProStat.Number) LEFT JOIN TeamProInfo ON PlayerInfo.Team = TeamProInfo.Number WHERE (PlayerProStat.GP >= " . $LeagueOutputOption['ProMinimumGamePlayerLeader'] . ") AND (PlayerInfo.Team > 0) AND (PlayerInfo.PosD='True') AND (PlayerProStat.P > 0) ORDER BY PlayerProStat.P DESC, PlayerProStat.G DESC, PlayerProStat.GP ASC LIMIT 5";
$PlayerStat = $db->query($Query);
if (empty($PlayerStat) == false){while ($Row = $PlayerStat ->fetchArray()) {
	echo "<tr><td><a href=\"PlayerReport.php?Player=" . $Row['Number'] . "\">" . $Row['Name'] . " (" . $Row['Abbre'] . ")</a></td><td>" . $Row['G'] . "-" . $Row['A'] . "-" . $Row['P'] . "</td></tr>\n";
}}?>

<tr><th colspan="2" class="STHSTop5"><br /><br /><?php echo $IndexLang['Top5Rookies'];?></th></tr>
<tr><td class="STHSIndex_Top5PointNameHeader"><?php echo $PlayersLang['PlayerName'];?></td><td class="STHSIndex_Top5PointResultHeader">G-A-P</td></tr>
<?php
$Query = "SELECT PlayerProStat.G, PlayerProStat.A, PlayerProStat.P, PlayerProStat.GP, PlayerProStat.Name, PlayerProStat.Number, TeamProInfo.Abbre FROM (PlayerInfo INNER JOIN PlayerProStat ON PlayerInfo.Number = PlayerProStat.Number) LEFT JOIN TeamProInfo ON PlayerInfo.Team = TeamProInfo.Number WHERE (PlayerProStat.GP >= " . $LeagueOutputOption['ProMinimumGamePlayerLeader'] . ") AND (PlayerInfo.Team > 0) AND (PlayerInfo.Rookie='True') AND (PlayerProStat.P > 0) ORDER BY PlayerProStat.P DESC, PlayerProStat.G DESC, PlayerProStat.GP ASC LIMIT 5";
$PlayerStat = $db->query($Query);
if (empty($PlayerStat) == false){while ($Row = $PlayerStat ->fetchArray()) {
	echo "<tr><td><a href=\"PlayerReport.php?Player=" . $Row['Number'] . "\">" . $Row['Name'] . " (" . $Row['Abbre'] . ")</a></td><td>" . $Row['G'] . "-" . $Row['A'] . "-" . $Row['P'] . "</td></tr>\n";
}}?>
<?php
if (strlen($LeagueGeneral['Days73StarPro']) > 20){echo "<tr><th colspan=\"2\" class=\"STHSTop5\"><br /><br />" . $IndexLang['7DaysStar'] . "</td></tr><tr><td colspan=\"2\">" . str_replace("/", "<br />",$LeagueGeneral['Days73StarPro']) . "</td></tr>";}
if (strlen($LeagueGeneral['Days303StarPro']) > 20){echo "<tr><th colspan=\"2\" class=\"STHSTop5\"><br /><br />" . $IndexLang['30DaysStar'] . "</td></tr><tr><td colspan=\"2\">" . str_replace("/", "<br />",$LeagueGeneral['Days303StarPro']) . "</td></tr>";}

If ($LeagueOutputOption['ShowFarmScoreinPHPHomePage'] == 'True'){
	if (strlen($LeagueGeneral['Days73StarFarm']) > 20){echo "<tr><th colspan=\"2\" class=\"STHSTop5\"><br /><br />" . $TopMenuLang['FarmLeague'] . " : " . $IndexLang['7DaysStar'] . "</td></tr><tr><td colspan=\"2\">" . str_replace("/", "<br />",$LeagueGeneral['Days73StarFarm']) . "</td></tr>";}
	if (strlen($LeagueGeneral['Days303StarFarm']) > 20){echo "<tr><th colspan=\"2\" class=\"STHSTop5\"><br /><br />" . $TopMenuLang['FarmLeague'] . " : " . $IndexLang['30DaysStar'] . "</td></tr><tr><td colspan=\"2\">" . str_replace("/", 	"<br />",$LeagueGeneral['Days303StarFarm']) . "</td></tr>";}
}

?>

</table>
<table class="STHSIndex_Top20FreeAgents">
<tr><th colspan="2" class="STHSTop5"><?php echo $IndexLang['Top20FreeAgents'];?></th></tr>
<tr><td class="STHSIndex_Top5PointNameHeader"><?php echo $PlayersLang['PlayerName'];?></td><td class="STHSIndex_Top5PointResultHeader">Overall-Age</td></tr>
<?php
$Query = "SELECT MainTable.*, GoalerInfo.PosG FROM ((SELECT PlayerInfo.Number, PlayerInfo.Name, PlayerInfo.Team, PlayerInfo.Age, PlayerInfo.Contract, PlayerInfo.SalaryAverage, PlayerInfo.Salary1, PlayerInfo.Overall FROM PlayerInfo WHERE Team >= 0 AND Number > 0 UNION ALL SELECT GoalerInfo.Number, GoalerInfo.Name, GoalerInfo.Team, GoalerInfo.Age, GoalerInfo.Contract, GoalerInfo.SalaryAverage, GoalerInfo.Salary1, GoalerInfo.Overall FROM GoalerInfo WHERE Team >= 0 AND Number > 0) AS MainTable) LEFT JOIN GoalerInfo ON MainTable.Name = GoalerInfo.Name WHERE (MainTable.Team >= 0 AND MainTable.Contract = 0) OR (MainTable.Team = 0) ORDER BY MainTable.Overall DESC LIMIT 20";
$PlayerStat = $db->query($Query);
if (empty($PlayerStat) == false){while ($Row = $PlayerStat ->fetchArray()) {
	echo "<tr><td>";
	if ($Row['PosG']== "True"){echo "<a href=\"GoalieReport.php?Goalie=";}else{echo "<a href=\"PlayerReport.php?Player=";}
	Echo $Row['Number'] . "\">" . $Row['Name'] . "</a></td>";
	echo "<td>" . $Row['Overall'] . " - " . $Row['Age'] . "</td></tr>\n";
}}?>
</table>
</td>
</tr>
</table>

<?php include "Footer.php";?>
