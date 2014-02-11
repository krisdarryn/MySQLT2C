<?php include_once 'generatorHeader.php';?>

<html>
	<head>
		<meta charset="utf-8">
		<title>Mysql DB table -> PHP class</title>
		<link type="text/css" rel="stylesheet" href="css/bootstrap.css">
		<link type="text/css" rel="stylesheet" href="css/mystyle.css">
	</head>
<body>
	<?php include_once 'title.php' ?>

	<div class="pull-left" >
		<!-- database list of tables -->
		<h3>Database: <strong><em><?=Session::getDBName()?></em></strong></h3>
		<p>List of Tables</p>
		<ol class="db">
			<?php foreach($db->listTables() as $table):?>
				<li><a href="" id="table"><?=$table?></a></li>
			<?php endforeach;?>
		</ol>
		<a href="generator.php?db=change">Change Database</a><a href="" id="gen-all" style="float:right;">Generate all</a>
		<!-- end database list of tables -->
		
		<!-- list of generated class(es) -->
		<h3>Generated Class(es)</h3><span id="label" style="float:right"></span>
		<p id="genlist">List of Generated Class(es)</p>
		
		<span class="btn btn-link" id="gen-clear-all">Clear Generated Class(es)</span><a href="generator.php?dl_all=true" id="dl-all" style="margin-left:100px;">Download All</a>
		<!-- end list of generated class(es) -->
	</div>
	
	<!--right-->
	<div class="container  pull-right col-md-8">
		<div class="panel panel-success">
			<div class="panel-heading">
				<h3 id="table-name">Table Name</h3>
				<a href="" class="download">Download </a>
			</div>
			<div class="panel-body" style="height:600px;overflow:auto;">
				<pre>
					<?=ClassGenerator::getGenClassContent(null)?>
				</pre>
			</div>
		</div>
	</div>
	<script src="js/jquery-1.10.2.min.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/custom-js.js"></script>
</body>
</html>