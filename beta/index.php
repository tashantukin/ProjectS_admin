<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin- Dashboard</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/datepicker3.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	
	<!--Custom Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span></button>
				<a class="navbar-brand" href="#"><span></span>Admin</a>
			</div>
		</div><!-- /.container-fluid -->
	</nav>
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<div class="profile-sidebar">
			<div class="profile-userpic">
				<img src="http://placehold.it/50/30a5ff/fff" class="img-responsive" alt="">
			</div>
			<div class="profile-usertitle">
				<div class="profile-usertitle-name">Username</div>
				<div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="divider">
		<div class="row">

<div class="col-md-12"  style="margin-left:10px";>

	<p class= "text-info" >Toggle the switch to START / STOP bet. </p>
	<h2 id="betlabel"></h2>
	<label class="rocker">
	  <input type="checkbox" checked id="betswitch" >
	  
	  <span class="switch-left">START BET</span>
	  <span class="switch-right">STOP BET</span>
	</label>
</div>

</div>
		</div>
		
		<ul class="nav menu">
			<li class="active"><a href="index.html"><em class="fa fa-dashboard">&nbsp;</em> Dashboard</a></li>
			<li><a href="widgets.html"><em class="fa fa-calendar">&nbsp;</em> Widgets</a></li>
			<li><a href="charts.html"><em class="fa fa-bar-chart">&nbsp;</em> Charts</a></li>
			<li><a href="elements.html"><em class="fa fa-toggle-off">&nbsp;</em> UI Elements</a></li>
			<li><a href="panels.html"><em class="fa fa-clone">&nbsp;</em> Alerts &amp; Panels</a></li>
			<li class="parent "><a data-toggle="collapse" href="#sub-item-1">
				<em class="fa fa-navicon">&nbsp;</em> Multilevel <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="fa fa-plus"></em></span>
				</a>
				<ul class="children collapse" id="sub-item-1">
					<li><a class="" href="#">
						<span class="fa fa-arrow-right">&nbsp;</span> Sub Item 1
					</a></li>
					<li><a class="" href="#">
						<span class="fa fa-arrow-right">&nbsp;</span> Sub Item 2
					</a></li>
					<li><a class="" href="#">
						<span class="fa fa-arrow-right">&nbsp;</span> Sub Item 3
					</a></li>
				</ul>
			</li>
			<li><a href="login.html"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
		</ul>
	</div><!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<!-- <div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Dashboard</li>
			</ol>
		</div> -->
		<!-- /.row -->
		
		<!-- <div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Dashboard</h1>
			</div>
		</div>/.row -->
		
		<div class="row">
			<div class="col-md-12">
			
				<div class="row">
					<div class="col-lg-12">
						<h2>Game Controls</h2>
						<div class="col-lg-12" style="padding-bottom: 5px;">
						<button type="button" class="btn btn-lg btn-danger" onclick="newGame()">New Game</button>
						<!-- <button type="button" class=" pull-right btn btn-lg btn-info" onclick="">Odds</button>
						<button type="button" class=" pull-right  btn btn-lg btn-success" onclick="">Winner</button>
						<button type="button" class=" pull-right  btn btn-lg btn-success" onclick="">Sultada</button> -->
							<script src="js/scripts.js"></script>
						</div>
						<div class="row">

					</div>
					<div class="col-md-4">
						<div class="panel panel-primary">
							<div class="panel-heading">SULTADA
								<span class="pull-right clickable panel-toggle"><em class="fa fa-toggle-down"></em></span></div>
							<div class="panel-body" id="sultada">
								<div class ="col-md-6">
								<label for="betamounts">Game</label>
								<input type="text" id="game" placeholder="Game" class="form-control" />
								<!-- <label for="nof">NOF</label>  -->
							  </div>

							  <div class ="col-md-6">
								<label for="betamounts">No.of Fights</label>
								<input type="text" id="nof" placeholder="1-100" class="form-control" />
							  </div>

							  <!-- <hr> -->
							  <div class ="col-md-6">
								<label for="betamounts">Maximum Bet Limit</label>
								<input type="text" id="maxbet" placeholder="5000" class="form-control" />
							  </div>
							  <hr>
							  <div class ="col-md-12">
								<hr>
							  <button type="button" class="btn btn-default">Cancel</button>
							  <button type="button" class="btn btn-primary swalDefaultSuccess" onclick="SaveSultadaDetails()">Save Changes</button>
							  </div>
							</div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="panel panel-primary">
							<div class="panel-heading">ODDS
								<span class="pull-right clickable panel-toggle"><em class="fa fa-toggle-down"></em></span></div>
								<div class="panel-body" id="odds">
									<div class ="col-md-6">
										<?php 
										include("./db.php");
										$sql = "SELECT value  from settings where id = 3";
										$resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn)); 
										$walarecord = mysqli_fetch_assoc($resultset);
										
										$sql = "SELECT value  from settings where id = 4";
										$resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn)); 
										$meronrecord = mysqli_fetch_assoc($resultset);
			
										$sql = "SELECT value  from settings where id = 1";
										$resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn)); 
										$betlimitrecord = mysqli_fetch_assoc($resultset);
			
										?>
											  <label for="betamounts">WALA ODDS</label>
											  <input type="text" id="walaodds" placeholder="1-100" class="form-control" value = "<?php echo $walarecord['value'] ?>" />
									</div>
		  
									<div class ="col-md-6">
										<label for="betamounts">MERON ODDS </label>
										<input type="text" id="meronodds" placeholder="5000" class="form-control" value = "<?php echo $meronrecord['value'] ?>" />
									</div>
								
									<div class ="col-md-12">
									<hr>
										<button type="button" class="btn btn-primary swalDefaultSuccess" onclick="saveOdds()">Save Changes</button>
									</div>
									<script src="js/scripts.js"></script>
							 	
							  </div>
							</div>
						</div>
					
					<div class="col-md-4">
						<div class="panel panel-success">
							<div class="panel-heading">DECLARE WINNER
								<span class="pull-right clickable panel-toggle"><em class="fa fa-toggle-down"></em></span></div>
							<div class="panel-body" id ="winner">
							<div class = "col-md-12" id ="divwinner">
                                          <!-- <label for="betamounts">Maximum Bet</label>
                                        <input type="text" id="maxbet1" placeholder="Max Bet" class="form-control" value = "<?php echo $betlimitrecord['value'] ?>" /> -->
                                        <input id="toggle-on" class="toggle toggle-left" name="toggle" value="MERON" type="radio" checked>
              
                                          <label for="toggle-on" class="btn">MERON</label>
                                          <input id="toggle-off" class="toggle toggle-right" name="toggle" value="WALA" type="radio">
                                          <label for="toggle-off" class="btn">WALA</label>
                                          <input id="toggle-draw" class="toggle toggle-left" name="toggle" value="DRAW" type="radio" checked>
                                          <label for="toggle-on" class="btn">DRAW</label>
                                        </div>
                                    <!-- </div> -->
									
									<div class="col-md-12">
									<hr>
                                    <!-- <button type="button" class="btn btn-default">Cancel</button> -->
									<button type="button" class="btn btn-success" onclick="declareWinner()">Save</button>
									</div>
                  </div>
							</div>
						
					<!-- </div> -->
				</div><!-- /.row -->
			</div>
		</div><!--/.row-->

		<div class="row">
			<div class="col-xs-6 col-md-3">
				<div class="panel panel-default">
					<div class="panel-body easypiechart-panel">
						<h2 class="bg-danger text-white font-weight-bold">MERON</h2>
							<!-- <div class="col-md-6">
							<h5 class="font-weight-bold">Computed Revenue</h5>
							
							<h1 class="font-weight-bolder" style="font-size:40px">12677</h1>	
							<small class="font-weight-bold">Computed Loss</small>
							<h1 class="font-weight-bolder" style="font-size:40px">1266</h1>	
							</div> -->
							<!-- <div class="col-md-6"> -->
							<div class="row">
								<h5 class="font-weight-bold">Count</h5>	
								<h1 class="font-weight-bolder" id="meroncount" style="font-size:70px">
								<?php
								require('Bet.php');
						
								?>
									<script type ="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js">
												</script>
												<script type ="text/javascript">
													$(document).ready(function() {
														setInterval(function() {        
															$('#meroncount').load('betCountMeron.php')
														},3000);
													});
												</script>
								</h1>
								<hr>
								<h5 class="font-weight-bold">Total Amount</h5>	
								<h1 class="font-weight-bolder" id ="totalmeron" style="font-size:70px">
								<script type ="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js">
												</script>
												<script type ="text/javascript">
													$(document).ready(function() {
														setInterval(function() {        
															$('#totalmeron').load('betTotalMeron.php')
														},3000);
													});
												</script>					
							
							</h1>
							</div>
						<!-- </div> -->
					</div>
				</div>
			</div>
			<div class="col-xs-6 col-md-3">
				<div class="panel panel-default">
					<div class="panel-body easypiechart-panel">
						<h2 class="bg-info text-white font-weight-bold">WALA</h2>
						<div class="row">
								<h5 class="font-weight-bold">Count</h5>	
								<h1 class="font-weight-bolder" id="walacount" style="font-size:70px">
								<script type ="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js">
												</script>
												<script type ="text/javascript">
													$(document).ready(function() {
														setInterval(function() {                           
															$('#walacount').load('betCountWala.php')
														},3000);
													});
												</script>
								</h1>
								<hr>
								<h5 class="font-weight-bold">Total Amount</h5>	
								<h1 class="font-weight-bolder" id ="totalwala"style="font-size:70px">
								<script type ="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js">
												</script>
												<script type ="text/javascript">
													$(document).ready(function() {
														setInterval(function() {                           
															$('#totalwala').load('betTotalWala.php')
														},3000);
													});
												</script>
								</h1>
							</div>
						</div>
				</div>
			</div>
			<div class="col-xs-6 col-md-3">
				<div class="panel panel-default">
					<div class="panel-body easypiechart-panel">
					
						<h2 class="bg-warning text-white font-weight-bold" >TOTAL BETS</h2>
						<h5 class="font-weight-bold">All Branches</h5>	
						<h1 class="font-weight-bolder" id = "totalcount"  style="font-size:80px">
						<script type ="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js">
												</script>
												<script type ="text/javascript">
													$(document).ready(function() {
														setInterval(function() {                           
															$('#totalcount').load('betCount.php')
														},3000);
													});
												</script>		
					
					</h1>
						<hr>
								<a class="font-weight-bold" href="">View By Branch</a>	
								<h1 class="font-weight-bolder" style="font-size:70px">---</h1>
					</div>
				</div>
			</div>
			<div class="col-xs-6 col-md-3">
				<div class="panel panel-default">
					<div class="panel-body easypiechart-panel">
						<h2 class="bg-success text-white font-weight-bold"> TOTAL AMOUNT</h2>
					
						<h5 class="font-weight-bold">All Branches</h5>	
						<h1 class="font-weight-bolder" id ="totalamount" style="font-size:75px"> 
						<script type ="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js">
												</script>
												<script type ="text/javascript">
													$(document).ready(function() {
														setInterval(function() {        
															$('#totalamount').load('betTotalAmount.php')
														},3000);
													});
												</script>
				
				</h1>
						<hr>
								<a class="font-weight-bold" href="">View By Branch</a>	
								<h1 class="font-weight-bolder" style="font-size:70px">---</h1>
					</div>
				</div>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-md-6">

			<div class="panel panel-default articles">
					<div class="panel-heading">
						Recent Fights
						<span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span></div>
					<div class="panel-body articles-container">
			
									<?php
									  $sql = "SELECT FightNo, FightWinner,TotalBetCount,TotalBetAmount, TotalWinner, TotalWinningAmount, TotalClaimed, TotalUnclaimed FROM tblFight where Status != 1 order by FightID desc limit 3";
									  $resultset = mysqli_query($conn, $sql);// or die("database error:". mysqli_error($conn));  
									  while( $record = mysqli_fetch_assoc($resultset)) {
										 echo "<div class='article border-top'>";
										// echo "<hr>";
										echo "<div class='col-xs-12'>";
										echo "<div class='row'>";
										echo "<div class='col-xs-2 col-md-2 date'>";
										echo "<div class='' style='color:darkred'>" . "Fight No:" . "</div>";
										echo "<div class='large' >" . $record['FightNo']. "</div>";  
										echo "<p id ='winner'>"  . $record['FightWinner'] ."</p>";
										echo "</div>";
										echo "<div class='col-xs-2 col-md-2 date'>";
										echo "<div class='' style='color:red'>" . "Total Count" . "</div>";
										echo "<div class='large' id ='win'>" . $record['TotalBetCount']. "</div>";  
										echo "</div>";
										echo "<div class='col-xs-2 col-md-2 date'>";
										echo "<div class='' style='color:green'>" . "Total Amount" . "</div>";
										echo "<div class='large' id ='win'>" . number_format(floatval($record['TotalBetAmount'])). "</div>";  
										echo "</div>";
										echo "<div class='col-xs-2 col-md-2 date'>";
										echo "<div class='' style='color:blue'>" . "Revenue" . "</div>";
										echo "<div class='large' id ='win'>" . number_format(floatval($record['TotalWinningAmount'])). "</div>";  
										echo "</div>";
										echo "<div class='col-xs-2 col-md-2 date'>";
										echo "<div class='' style='color:indigo'>" . "Claimed" . "</div>";
										echo "<div class='large' id ='win'>" . $record['TotalClaimed']. "</div>";  
										echo "</div>";
										echo "<div class='col-xs-2 col-md-2 date'>";
										echo "<div class='' style='color:indigo'>" . "Unclaimed" . "</div>";
										echo "<div class='large' id ='win'>" . $record['TotalUnclaimed']. "</div>";  
										echo "</div>";
										echo "</div>";
										echo "</div>";
										// echo "</div>";
										echo "<div class='clear'></div>";
									  }
									 
									
									?>				
			
			</div><!--/.col-->
			
			<div class="col-sm-12">
				<!-- <p class="back-link">Lumino Theme by <a href="https://www.medialoot.com">Medialoot</a></p> -->
			</div>
		</div><!--/.row-->
	</div>	<!--/.main-->
	
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/custom.js"></script>
	<script src="js/scripts.js"></script>
	<script>
		window.onload = function () {
	var chart1 = document.getElementById("line-chart").getContext("2d");
	window.myLine = new Chart(chart1).Line(lineChartData, {
	responsive: true,
	scaleLineColor: "rgba(0,0,0,.2)",
	scaleGridLineColor: "rgba(0,0,0,.05)",
	scaleFontColor: "#c5c7cc"
	});
};



	</script>
		
</body>
</html>