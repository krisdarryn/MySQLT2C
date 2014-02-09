<?php
	include_once 'helper/Session.php';
	
	if(!Session::isSessionEmpty()){
		header('Location:generator.php');
	} 
?>
<html>
	<head>
		<meta charset="utf-8">
		<title>Mysql DB table -> PHP class</title>
		<link type="text/css" rel="stylesheet" href="css/bootstrap.css">
		<link type="text/css" rel="stylesheet" href="css/mystyle.css">
	</head>
<body>
	<?php include_once 'title.php' ?>
	
	<div class="container">
		<form class="form-horizontal" method="post" action="generator.php">
			<div class="form-group">
				<label class="control-label col-sm-2" for="host">Host</label>
				<div class="col-sm-3">
					<input id="host" class="form-control" type="text" name="host" autofocus="on" placeholder="host/domain">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2" for="dbname">Database Name</label>
				<div class="col-sm-3">
					<input id="dbname" class="form-control" type="text" name="dbname" placeholder="database name">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2" for="uname">Username</label>
				<div class="col-sm-3">
					<input id="uname" class="form-control" type="text" name="username" placeholder="username">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2" for="pword">Password</label>
				<div class="col-sm-3">
					<input id="pword" class="form-control" type="password" name="password" placeholder="password">
				</div>
			</div>			
			<div class="form-group">	
				<div class="col-sm-offset-4 col-sm-3">
					<button class="btn btn-success">Next <span class="glyphicon glyphicon-chevron-right"></span></button>
				</div>
			</div>
		</form>
	</div>
</body>
</html>