﻿<?php
If (isset($Active) == False){$Active = 1;} /* Show Webpage Top Menu */
$MenuFreeAgentYear = (integer)1;
If (file_exists($DatabaseFile) == false){
	$LeagueName = $DatabaseNotFound;
	$LeagueOutputOptionMenu = Null;
	$LeagueGeneralMenu = Null;
	$LeagueSimulationMenu = Null;
	$TeamProMenu = Null;
	$TeamProMenu1 = Null;
	$TeamProMenu2 = Null;
	$TeamFarmMenu = Null;
	$TeamFarmMenu1 = Null;
	$TeamFarmMenu2 = Null;
	echo "<h1>" . $DatabaseNotFound . "</h1>";
}else{
	$dbMenu = new SQLite3($DatabaseFile);
	If ($LeagueName == ""){
		$Query = "Select Name, LastTransactionOutput from LeagueGeneral";
		$LeagueGeneralMenu = $dbMenu->querySingle($Query,true);		
		$LeagueName = $LeagueGeneralMenu['Name'];
	}
	$Query = "Select ShowExpansionDraftLinkinTopMenu, ShowWebClientInDymanicWebsite, ProcessDatabaseTransaction, ShowRSSFeed, OutputCustomURL1, OutputCustomURL1Name, OutputCustomURL2, OutputCustomURL2Name, SplitTodayGames from LeagueOutputOption";
	$LeagueOutputOptionMenu = $dbMenu->querySingle($Query,true);
	$Query = "Select OutputName, OutputFileFormat, EntryDraftStart, OffSeason, DatabaseCreationDate, PlayOffStarted, ProConferenceName1, ProConferenceName2, FarmConferenceName1, FarmConferenceName2 from LeagueGeneral";
	$LeagueGeneralMenu = $dbMenu->querySingle($Query,true);
	$Query = "Select FarmEnable, WaiversEnable, ProTwoConference, FarmTwoConference from LeagueSimulation";
	$LeagueSimulationMenu = $dbMenu->querySingle($Query,true);	
	
	if ($LeagueGeneralMenu['OffSeason'] == "True"){$MenuFreeAgentYear = 0;}
}
If (file_exists("STHSMenuStart.php") == true){include "STHSMenuStart.php";}
?>

<div id='cssmenu'>

<ul>

<li><a href="./index.php"><?php echo $TopMenuLang['Home'];?></a></li>
<li><a href="#"><?php echo $TopMenuLang['Main'];?></a><ul>
<li><a href="<?php echo $LeagueGeneralMenu['OutputName'] . ".stc";?>"><?php echo $TopMenuLang['STHSClientLeagueFile'];?></a></li>
<?php if ($LeagueOutputOptionMenu['SplitTodayGames'] == "True"){echo "<li><a href=\"TodayGames.php?Type=1\">" . $DynamicTitleLang['Pro'] . $TopMenuLang['TodaysGames'] . "</a></li><li><a href=\"TodayGames.php?Type=2\">" . $DynamicTitleLang['Farm'] . $TopMenuLang['TodaysGames'] . "</a></li>";}else{echo "<li><a href=\"TodayGames.php\">" . $TopMenuLang['TodaysGames'] . "</a></li>";}?>
<li><a href="Transaction.php?SinceLast"><?php echo $TopMenuLang['TodaysTransactions'];?></a></li>
<li><a href="Search.php"><?php echo $TopMenuLang['Search'];?></a></li>
<li><a href="NewsManagement.php"><?php echo $TopMenuLang['LeagueNewsManagement'];?></a></li>
<li><a href="Upload.php"><?php echo $TopMenuLang['UploadLine'];?></a></li>
<?php 
if ($LeagueOutputOptionMenu['ProcessDatabaseTransaction'] == "True"){echo "<li><a href=\"Trade.php\">". $TopMenuLang['Trade'] . "</a></li>";}
if ($LeagueOutputOptionMenu['ShowWebClientInDymanicWebsite'] == "True"){echo "<li><a href=\"WebClientIndex.php\">" . $TopMenuLang['WebClient'] . "</a></li>";}
If ($LeagueOutputOptionMenu['OutputCustomURL1'] != "" and $LeagueOutputOptionMenu['OutputCustomURL1Name'] != ""){echo "<li><a href=\"" . $LeagueOutputOptionMenu['OutputCustomURL1'] . "\">" . $LeagueOutputOptionMenu['OutputCustomURL1Name'] . "</a></li>\n";}
If ($LeagueOutputOptionMenu['OutputCustomURL2'] != "" and $LeagueOutputOptionMenu['OutputCustomURL2Name'] != ""){echo "<li><a href=\"" . $LeagueOutputOptionMenu['OutputCustomURL2'] . "\">" . $LeagueOutputOptionMenu['OutputCustomURL2Name'] . "</a></li>\n";}
?>
</ul></li>

<li><a href="#2"><?php echo $TopMenuLang['ProLeague'];?></a><ul>
<li><a href="Standing.php"><?php echo $TopMenuLang['Standing'];?></a></li>
<li><a href="Schedule.php"><?php echo $TopMenuLang['Schedule'];?></a></li>
<li><a href="PlayersStat.php?Order=P&MinGP&Max=50"><?php echo $TopMenuLang['PlayersLeader'];?></a></li>
<li><a href="GoaliesStat.php?Order=P&MinGP&Max=10"><?php echo $TopMenuLang['GoaliesLeader'];?></a></li>
<li><a href="IndividualLeaders.php"><?php echo $TopMenuLang['IndividualLeaders'];?></a></li>
<li><a href="PlayersStat.php"><?php echo $TopMenuLang['AllPlayersStats'];?></a></li>
<li><a href="GoaliesStat.php"><?php echo $TopMenuLang['AllGoaliesStats'];?></a></li>
<li><a href="TeamsStat.php"><?php echo $TopMenuLang['TeamsStats'];?></a></li>
<li><a href="Finance.php"><?php echo $TopMenuLang['Finance'];?></a></li>
<li><a href="PowerRanking.php"><?php echo $TopMenuLang['PowerRanking'];?></a></li>
</ul></li>

<?php If ($LeagueSimulationMenu['FarmEnable'] == "True"){
	echo "<li><a href=\"#\">" . $TopMenuLang['FarmLeague'] . "</a><ul>";
	echo "<li><a href=\"Standing.php?Farm\">" . $TopMenuLang['Standing'] . "</a></li>";
	echo "<li><a href=\"Schedule.php?Farm\">" . $TopMenuLang['Schedule'] . "</a></li>";
	echo "<li><a href=\"PlayersStat.php?Farm&MinGP&Order=P&Max=50\">" . $TopMenuLang['PlayersLeader'] . "</a></li>";
	echo "<li><a href=\"GoaliesStat.php?Farm&MinGP&Order=P&Max=10\">" . $TopMenuLang['GoaliesLeader'] . "</a></li>";
	echo "<li><a href=\"IndividualLeaders.php?Farm\">" . $TopMenuLang['IndividualLeaders'] . "</a></li>";
	echo "<li><a href=\"PlayersStat.php?Farm\">" . $TopMenuLang['AllPlayersStats'] . "</a></li>";
	echo "<li><a href=\"GoaliesStat.php?Farm\">" . $TopMenuLang['AllGoaliesStats'] . "</a></li>";
	echo "<li><a href=\"TeamsStat.php?Farm\">" . $TopMenuLang['TeamsStats'] . "</a></li>";
	echo "<li><a href=\"Finance.php?Farm\">" . $TopMenuLang['Finance'] . "</a></li>";
	echo "<li><a href=\"PowerRanking.php?Farm\">" . $TopMenuLang['PowerRanking'] . "</a></li>";
	echo "</ul></li>";}
?>

<li><a href="#"><?php echo $TopMenuLang['League'];?></a><ul>
<?php if ($LeagueGeneralMenu['EntryDraftStart'] == "True" AND $LeagueGeneralMenu['OffSeason'] == "True"){
	echo "<li><a href=\"EntryDraft.php\">" . $TopMenuLang['EntryDraft'] . "</a></li>";
}else{
	echo "<li><a href=\"EntryDraftProjection.php\">" . $TopMenuLang['EntryDraftProjection'] . "</a></li>";
}?>
<li><a href="Coaches.php"><?php echo $TopMenuLang['Coaches'];?></a></li>
<li><a href="Transaction.php"><?php echo $TopMenuLang['Transactions'];?></a></li>
<?php If ($LeagueSimulationMenu['WaiversEnable'] == "True"){echo "<li><a href=\"Waivers.php\">" . $TopMenuLang['Waivers'] . "</a></li>";}?>
<?php if ($LeagueOutputOptionMenu['ShowExpansionDraftLinkinTopMenu'] == "True"){echo "<li><a href=\"#\">" . $TopMenuLang['ExpansionDraft'] . "</a><ul><li><a href=\"PlayersRoster.php?Expansion\">" . $TopMenuLang['Players'] . "</a></li><li><a href=\"GoaliesRoster.php?Expansion\">" . $TopMenuLang['Goalies'] . "</a></li></ul></li>";}?>
<li><a href="TeamsAndGMInfo.php"><?php echo $TopMenuLang['Team/GM'];?></a></li>
<li><a href="Transaction.php?TradeHistory"><?php echo $TopMenuLang['TradeHistory'];?></a></li>
<li><a href="Prospects.php"><?php echo $TopMenuLang['Prospects'];?></a></li>
<?php if ($LeagueOutputOptionMenu['ShowRSSFeed'] == "True"){echo "<li><a href=\"RSSFeed.xml\">" . $TopMenuLang['RSSFeed'] ."</a></li>";}?>
	<li><a href="#"><?php echo $TopMenuLang['Unassigned'];?></a><ul>
		<li><a href="PlayersRoster.php?Team=0&Type=0"><?php echo $TopMenuLang['Players'];?></a></li>
		<li><a href="GoaliesRoster.php?Team=0&Type=0"><?php echo $TopMenuLang['Goalies'];?></a></li>
	</ul></li>
	<li><a href="#"><?php echo $TopMenuLang['AvailableForTrade'];?></a><ul>
		<li><a href="PlayersRoster.php?AvailableForTrade"><?php echo $TopMenuLang['Players'];?></a></li>
		<li><a href="GoaliesRoster.php?AvailableForTrade"><?php echo $TopMenuLang['Goalies'];?></a></li>
	</ul></li>
	<li><a href="#"><?php echo $TopMenuLang['FreeAgents'];?></a><ul>
		<li><a href="PlayersRoster.php?Type=0&FreeAgent=<?php echo $MenuFreeAgentYear . "\">" . $TopMenuLang['Players'];?></a></li>
		<li><a href="GoaliesRoster.php?Type=0&FreeAgent=<?php echo $MenuFreeAgentYear . "\">" . $TopMenuLang['Goalies'];?></a></li>
	</ul>
</ul></li>


<li><a href="#"><?php If (file_exists($CareerStatDatabaseFile) == true){echo $TopMenuLang['RecordsAndCareerStat'];}else{echo $TopMenuLang['Records'];}?></a><ul>
<li><a style="width:375px;" href="LeagueRecords.php"><?php echo $TopMenuLang['LeagueRecords'];?></a></li>
<li><a style="width:375px;" href="TeamsRecords.php"><?php echo $TopMenuLang['TeamRecords'];?></a></li>
<?php 
	If (file_exists($CareerStatDatabaseFile) == true){
		echo "<li><a  style=\"width:375px;\" href=\"CareerStatTeamsStat.php\"> " . $TopMenuLang['TeamCareerStat'] . "</a></li>";
		echo "<li><a  style=\"width:375px;\" href=\"CareerStatPlayersStat.php\"> " . $TopMenuLang['PlayersCareerStat'] . "</a></li>";
		echo "<li><a  style=\"width:375px;\" href=\"CareerStatGoaliesStat.php\"> " . $TopMenuLang['GoaliesCareerStat'] . "</a></li>";
		echo "<li><a  style=\"width:375px;\" href=\"CareerStatIndividualLeaders.php\"> " . $TopMenuLang['CareerStatsIndividualLeaders'] . "</a></li>";
		echo "<li><a  style=\"width:375px;\" href=\"CareerStatTeamsStat.php?Playoff=on\"> " . $TopMenuLang['TeamCareerStat'] . $TopMenuLang['Playoff'] . "</a></li>";
		echo "<li><a  style=\"width:375px;\" href=\"CareerStatPlayersStat.php?Playoff=on\"> " . $TopMenuLang['PlayersCareerStat'] . $TopMenuLang['Playoff'] . "</a></li>";
		echo "<li><a  style=\"width:375px;\" href=\"CareerStatGoaliesStat.php?Playoff=on\"> " . $TopMenuLang['GoaliesCareerStat'] . $TopMenuLang['Playoff'] . "</a></li>";
		echo "<li><a  style=\"width:375px;\" href=\"CareerStatIndividualLeaders.php?Playoff=on\"> " . $TopMenuLang['CareerStatsIndividualLeaders'] . $TopMenuLang['Playoff'] . "</a></li>";		
	}
?>
</ul></li>


<li><a href="#"><?php echo $TopMenuLang['TeamsDirectLink'];?></a><ul>
<?php
If (file_exists($DatabaseFile) == True){
/* Pro */
echo "<li><a href=\"#\">". $TopMenuLang['ProTeam'] , "</a><ul>\n";

If ($LeagueSimulationMenu['ProTwoConference'] == "True"){
	/* 2 Conference */
	echo "<li><a href=\"#\">". $LeagueGeneralMenu['ProConferenceName1'] , "</a><ul>\n";
	$Query = "Select Number, Name, Abbre from TeamProInfo Where Conference = '" . str_replace("'","''",$LeagueGeneralMenu['ProConferenceName1']) . "' ORDER BY Name";
	$TeamProMenu1 = $dbMenu->query($Query);	
	if (empty($TeamProMenu1) == false){while ($Row = $TeamProMenu1 ->fetchArray()) {
		echo "<li><a href=\"ProTeam.php?Team=" . $Row['Number'] . "\">" . $Row['Name'] . "</a></li>\n"; 
	}}
	echo "</ul></li>\n";

	echo "<li><a href=\"#\">". $LeagueGeneralMenu['ProConferenceName2'] , "</a><ul>\n";
	$Query = "Select Number, Name, Abbre from TeamProInfo Where Conference = '" . str_replace("'","''",$LeagueGeneralMenu['ProConferenceName2'])  . "' ORDER BY Name";
	$TeamProMenu2 = $dbMenu->query($Query);	
	if (empty($TeamProMenu2) == false){while ($Row = $TeamProMenu2 ->fetchArray()) {
		echo "<li><a href=\"ProTeam.php?Team=" . $Row['Number'] . "\">" . $Row['Name'] . "</a></li>\n"; 
	}}
	echo "</ul></li>\n";
}else{
	/* 1 Conference Only */
	$Query = "Select Number, Name, Abbre from TeamProInfo ORDER BY Name";
	$TeamProMenu = $dbMenu->query($Query);	
	if (empty($TeamProMenu) == false){while ($Row = $TeamProMenu ->fetchArray()) {
		echo "<li><a href=\"ProTeam.php?Team=" . $Row['Number'] . "\">" . $Row['Name'] . "</a></li>\n"; 
	}}
}

echo "</ul></li>\n";

If ($LeagueSimulationMenu['FarmEnable'] == "True"){
	/* Farm */
	echo "<li><a href=\"#\">". $TopMenuLang['FarmTeam'] , "</a><ul>\n";
	
	If ($LeagueSimulationMenu['FarmTwoConference'] == "True"){
		/* 2 Conference */
		echo "<li><a href=\"#\">". $LeagueGeneralMenu['FarmConferenceName1'] , "</a><ul>\n";
		$Query = "Select Number, Name, Abbre from TeamFarmInfo Where Conference = '" . $LeagueGeneralMenu['FarmConferenceName1'] . "' ORDER BY Name";
		$TeamFarmMenu1 = $dbMenu->query($Query);	
		if (empty($TeamFarmMenu1) == false){while ($Row = $TeamFarmMenu1 ->fetchArray()) {
			echo "<li><a href=\"FarmTeam.php?Team=" . $Row['Number'] . "\">" . $Row['Name'] . "</a></li>\n"; 
		}}
		echo "</ul></li>\n";

		echo "<li><a href=\"#\">". $LeagueGeneralMenu['FarmConferenceName2'] , "</a><ul>\n";
		$Query = "Select Number, Name, Abbre from TeamFarmInfo Where Conference = '" . $LeagueGeneralMenu['FarmConferenceName2'] . "' ORDER BY Name";
		$TeamFarmMenu2 = $dbMenu->query($Query);	
		if (empty($TeamFarmMenu2) == false){while ($Row = $TeamFarmMenu2 ->fetchArray()) {
			echo "<li><a href=\"FarmTeam.php?Team=" . $Row['Number'] . "\">" . $Row['Name'] . "</a></li>\n"; 
		}}
		echo "</ul></li>\n";
	}else{
		/* 1 Conference Only */
		$Query = "Select Number, Name, Abbre from TeamFarmInfo ORDER BY Name";
		$TeamFarmMenu = $dbMenu->query($Query);	
		if (empty($TeamFarmMenu) == false){while ($Row = $TeamFarmMenu ->fetchArray()) {
			echo "<li><a href=\"FarmTeam.php?Team=" . $Row['Number'] . "\">" . $Row['Name'] . "</a></li>\n"; 
		}}
	}
	
	echo "</ul></li>\n";
}}
?>
</ul></li>
<li><a href="Search.php"><?php echo $TopMenuLang['Search'];?></a></li>
<?php
If (file_exists("STHSLegacy.dat") == True){
echo "<li><a href=\"#\">" . $TopMenuLang['OldWebsitePage'] . "</a><ul>\n";
$HTMLFiles = file("STHSLegacy.dat", FILE_IGNORE_NEW_LINES);
foreach($HTMLFiles As $File){
	$Data = explode(",",$File);
	echo "<li><a href=\"" . $Data[0] . "\">" . $Data[1] ."</a></li>\n";
}
echo "</ul></li>\n";
}?>

<?php
if ($LeagueGeneralMenu['PlayOffStarted'] == "True"){
	if ($LeagueGeneralMenu['PlayOffStarted'] == "True"){echo "<li><a href=\"#\">" . $TopMenuLang['SeasonStat'] . "</a><ul>\n";}
	echo "<li><a href=\"#\">" . $TopMenuLang['ProLeague'] . "</a><ul>\n";
	echo "<li><a  href=\"Standing.php?Season\">" . $TopMenuLang['Standing'] . "</a></li>\n";
	echo "<li><a  href=\"PlayersStat.php?Order=P&MinGP&Max=50&Season\">" .  $TopMenuLang['PlayersLeader'] . "</a></li>\n";
	echo "<li><a  href=\"GoaliesStat.php?Order=P&MinGP&Max=10&Season\">" .  $TopMenuLang['GoaliesLeader'] . "</a></li>\n";
	echo "<li><a  href=\"PlayersStat.php?Season\">" .  $TopMenuLang['AllPlayersStats'] . "</a></li>\n";
	echo "<li><a  href=\"GoaliesStat.php?Season\">" .  $TopMenuLang['AllGoaliesStats'] . "</a></li>\n";
	echo "<li><a  href=\"TeamsStat.php?Season\">" .  $TopMenuLang['TeamsStats'] . "</a></li>\n";	
	echo "</ul></li>";
    echo "<li><a href=\"#\">" .$TopMenuLang['FarmLeague'] . "</a><ul>\n";
	echo "<li><a  href=\"Standing.php?Season&Farm\">" . $TopMenuLang['Standing'] . "</a></li>\n";
	echo "<li><a  href=\"PlayersStat.php?Farm&MinGP&Order=P&Max=50&Season\">" .  $TopMenuLang['PlayersLeader'] . "</a></li>\n";
	echo "<li><a  href=\"GoaliesStat.php?Farm&MinGP&Order=P&Max=10&Season\">" .  $TopMenuLang['GoaliesLeader'] . "</a></li>\n";
	echo "<li><a  href=\"PlayersStat.php?Farm&Season\">" .  $TopMenuLang['AllPlayersStats'] . "</a></li>\n";
	echo "<li><a  href=\"GoaliesStat.php?Farm&Season\">" .  $TopMenuLang['AllGoaliesStats'] . "</a></li>\n";
	echo "<li><a  href=\"TeamsStat.php?Farm&Season\">" .  $TopMenuLang['TeamsStats'] . "</a></li>\n";	
	echo "</ul></li>\n";
	echo "</ul></li>\n";
}	
?>

<li><a href='#'><?php echo $TopMenuLang['Help'];?></a><ul>
	<li><a href="http://sths.simont.info/DownloadLatestClient.php"><?php echo $TopMenuLang['LatestSTHSClient'];?></a></li>
	<li><a href="http://sths.simont.info/ManualV2_En.php#Team_Management"><?php echo $TopMenuLang['ManualLinkTitle'];?></a></li>
</ul></li>

</ul>
</div>
<?php If (file_exists("STHSMenuEnd.php") == true){include "STHSMenuEnd.php";}?>

