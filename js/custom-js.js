$(document).ready(function(){ reloadClassList(true); });

$(document).delegate('.del-class','mouseenter mouseleave',function(){
	if( $(this).siblings().hasClass('hilight') ){
		$(this).siblings().addClass('hilight-non');
		$(this).siblings().removeClass('hilight');
	}else{
		$(this).siblings().removeClass('hilight-non');
		$(this).siblings().addClass('hilight');
	}
});

//deleting selected generated class
$(document).delegate('.del-class','click',function(){
	var filename = $(this).siblings().text();
	$(this).text('deleting...');
	$(this).parent().remove(); 
	
	$.get('gen/ajaxGen.php',{deleteClass:filename},function(result){
		clear();
	});
});

//deleting all generated classes
$('#gen-clear-all').click(function(){
	$('#label').html('Deleting &nbsp;&nbsp;<img src="loader24.gif"> ...');
	$.get('gen/ajaxGen.php',{deleteAll:true},function(result){
		var res = JSON.parse(result);
		if(res.deleteAll){
			$('.table-list li').remove();
			clear();
		}
	});
});

//clearing generated class section
function clear(){
	$('#table-name').text("Table Name");
	$('.download').attr('href','');
	$('.panel-body').empty();
	$('.panel-body').html('<pre>\nSelect a table</pre>');
	$('#label').empty();
}

//generating class
$('a').filter('#table').click(function(e){
	e.preventDefault();
	var tableName = $(this).text();
	var for_tableName = tableName[0].toUpperCase()+tableName.substr(1,tableName.length)+".php";
	
	$('#table-name').text("Generating...");
	$('.panel-body').html('<h4>Generating Class <img src="loader24.gif"> ...</h4>');
	
	$.get('gen/ajaxGen.php',{tableData:tableName},function(result){
		$('#table-name').text(for_tableName);
		$('.download').attr('href','generator.php?download='+for_tableName);
		$('.panel-body').empty();
		$('.panel-body').html('<pre>'+result+'</pre>');
		
		reloadClassList(true);
	});
});

//generate all classes
$('#gen-all').click(function(e){
	e.preventDefault();
	
	$('#table-name').text("Generating...");
	$('.panel-body').html('<h4>Generating all table(s) to Class(es) <img src="loader24.gif"> ...</h4>');
	
	$.get('gen/ajaxGen.php',{all:true},function(result){	
		$('.panel-body').empty();
		$('.panel-body').html('<pre>Done!</pre>');
		$('#table-name').text("Table Name");
		
		reloadClassList(true);
	});
});

//displaying generated class
$(document).delegate('#genClass','click',function(e){
	e.preventDefault();
	var genClass = $(this).text();
	$('#table-name').text(genClass);
	
	$.get('gen/ajaxGen.php',{renFile:genClass},function(result,textStatus,xhr){
		$('.download').attr('href','generator.php?download='+genClass);
		$('.panel-body').empty();
		$('.panel-body').html('<pre>'+result+'</pre>');
	}); 
});


//reloading list of generated classes
function reloadClassList(val){
	$.get('gen/ajaxGen.php',{reload:val},function(result,textStatus,xhr){
		$('.table-list').remove();
		$('#genlist').after('<ol class="db table-list">'+result+'</ol>');
	});
};