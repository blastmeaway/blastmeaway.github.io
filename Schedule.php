<!DOCTYPE html>
<?php include "Header.php";?>
<?php
$Title = (string)"";
$Active = 2; /* Show Webpage Top Menu */
If (file_exists($DatabaseFile) == false){
	$LeagueName = $DatabaseNotFound;
	$Schedule = Null;
	$LeagueOutputOption = Null;
	$LeagueGeneral = Null;
	echo "<title>" . $DatabaseNotFound . "</title>";
	$Title = $DatabaseNotFound;
}else{
	$Team = (integer)0; /* 0 All Team */
	$TypeText = (string)"Pro";$TitleType = $DynamicTitleLang['Pro'];
	$LeagueName = (string)"";
	if(isset($_GET['Farm'])){$TypeText = "Farm";$TitleType = $DynamicTitleLang['Farm'];$Active = 3;}
	if(isset($_GET['Team'])){$Team = filter_var($_GET['Team'], FILTER_SANITIZE_NUMBER_INT);}

	$db = new SQLite3($DatabaseFile);
	
	$Query = "Select ScheduleUseDateInsteadofDay, ScheduleRealDate from LeagueOutputOption";
	$LeagueOutputOption = $db->querySingle($Query,true);	
	$Query = "Select Name, DefaultSimulationPerDay, TradeDeadLine, ProScheduleTotalDay, ScheduleNextDay, PlayOffStarted from LeagueGeneral";
	$LeagueGeneral = $db->querySingle($Query,true);		
	$LeagueName = $LeagueGeneral['Name'];
	
	If ($Team == 0){
		$Title = $ScheduleLang['ScheduleTitle1'] . $ScheduleLang['ScheduleTitle2'] . " " . $TitleType;
		$Query = "SELECT * FROM Schedule" . $TypeText . " ORDER BY GameNumber";
		$RivalryQuery = "SELECT * FROM " . $TypeText . "RivalryInfo";
	}else{
		$Query = "SELECT Name FROM Team" . $TypeText . "Info WHERE Number = " . $Team ;
		$TeamName = $db->querySingle($Query);
		$Title =  $ScheduleLang['TeamTitle'] . $TitleType . " " .  $TeamName;
		
		$Query = "SELECT * FROM Schedule" . $TypeText . " WHERE (VisitorTeam = " . $Team . " OR HomeTeam = " . $Team . ") ORDER BY GameNumber";
		$RivalryQuery = "SELECT * FROM " . $TypeText . "RivalryInfo WHERE Team1 = " . $Team . " ORDER BY Team2";
	}
	$Schedule = $db->query($Query);
	$RivalryInfo = $db->query($RivalryQuery);	

	echo "<title>" . $LeagueName . " - " . $Title . "</title>";
}?>
</head><body>
<?php include "Menu.php";?>
<?php echo "<h1>" . $Title . "</h1>"; ?>
<script>
$(function() {
  $(".STHSPHPSchedule_ScheduleTable").tablesorter({
    widgets: ['columnSelector', 'stickyHeaders', 'filter', 'staticRow', 'output'],
    widgetOptions : {
      columnSelector_container : $('#tablesorter_ColumnSelector'),
      columnSelector_layout : '<label><input type="checkbox">{name}</label>',
      columnSelector_name  : 'title',
      columnSelector_mediaquery: true,
      columnSelector_mediaqueryName: 'Automatic',
      columnSelector_mediaqueryState: true,
      columnSelector_mediaqueryHidden: true,
      columnSelector_breakpoints : [ '20em', '40em', '60em', '80em', '90em', '95em' ],
	  filter_columnFilters: true,
      filter_placeholder: { search : '<?php echo $TableSorterLang['Search'];?>' },
	  filter_searchDelay : 500,	  
      filter_reset: '.tablesorter_Reset',	 
	  output_delivery: 'd',
	  output_saveFileName: 'STHSSchedule.CSV'
    }
  });
  $('.download').click(function(){
      var $table = $('.STHSPHPSchedule_ScheduleTable'),
      wo = $table[0].config.widgetOptions;
      $table.trigger('outputTable');
      return false;
  });  
});
</script>

<div style="width:99%;margin:auto;">

<div class="tablesorter_ColumnSelectorWrapper">
	<a href="#Last_Simulate_Day" style="background: #99bfe6;  border: #888 1px solid;  color: #111;  border-radius: 5px;  padding: 5px; text-decoration: none"><?php echo $ScheduleLang['LastPlayedGames'];?></a>
    <input id="tablesorter_colSelect1" type="checkbox" class="hidden">
    <label class="tablesorter_ColumnSelectorButton" for="tablesorter_colSelect1"><?php echo $TableSorterLang['ShoworHideColumn'];?></label>
	<button class="tablesorter_Output download" type="button">Output</button>
    <div id="tablesorter_ColumnSelector" class="tablesorter_ColumnSelector"></div>
	<?php include "FilterTip.php";?>
	</div>



<table class="tablesorter STHSPHPSchedule_ScheduleTable"><thead><tr>
<?php include "ScheduleSub.php";?>
</tbody></table>

<br />
</div>

<?php include "Footer.php";?>
