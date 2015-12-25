<?php 
   ini_set('display_errors',1);
   ini_set('display_startup_errors',1);
   error_reporting(-1);

   include_once 'helper/Session.php';
   
   /* if(Session::isSessionEmpty()){
		header('Location:index.php');
	}  */
   
   include_once 'generatorHeader.php';
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
        
        <div class="row">
            <div class="col-xs-12">
                
                <div class="pull-left" >
                    <!-- database list of tables -->
                    <h3>Database: <strong><em><?=Session::getDBName()?></em></strong></h3>
                    
                    <div class="panel panel-primary">
                        <div class="panel-heading class-prop-header">
                            <a class="btn-class-prop" role="button" data-toggle="collapse" href="#class-prop" aria-expanded="false" aria-controls="class-prop">
                                Class Properties
                                <span class="cp-indicator glyphicon glyphicon-chevron-down"></span>
                            </a>
                        </div>
                        <div class="panel-body collapse" id="class-prop">
                            <div class="form-group">
                                <label><input type="checkbox" id="with-setters" name="with_setters"/> With Setters</label>
                                <label><input type="checkbox" id="with-getters" name="with_getters"/> With Getters</label>
                            </div>
                            <div class="form-group">
                                <label for="extend-class">Class to Extend</label>
                                <input type="text" class="form-control" id="extend-class" name="extend_class" placeholder="Class to Extend" />
                            </div>
                            <div class="form-group">
                                <label for="implement-interface">Interfaces to implement</label>
                                <input type="text" class="form-control" id="implement-interface" name="implement_interface" placeholder="Interfaces to implement" />
                                <small>If more than 1 interface separate it by <strong>comma ( , ) </strong>.</small>
                            </div>
                        </div>
                    </div>
                    
                    <h4>List of Tables</h4>
                    
                    <ol class="db">
                        <?php foreach($db->listTables() as $table):?>
                            <li><a href="" class="table-item"><?=$table?></a></li>
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
                        <div class="panel-body" id="gen-class-content" style="height:600px;overflow:auto;">
                            <pre>
                                <?=ClassGenerator::getGenClassContent(null)?>
                            </pre>
                        </div>
                    </div>
                </div>
        
            </div>
        </div>
    </div>
    
	<script src="js/jquery-1.10.2.min.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/custom-js.js"></script>
</body>
</html>