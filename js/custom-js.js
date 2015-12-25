var $setter = null;
var $getter = null;
var $classExtend = null;
var $intefaces = null;


$(document).ready(function() { 
    $setter = $('#with-setters');
    $getter = $('#with-getters');
    $classExtend = $('#extend-class');
    $intefaces = $('#implement-interface');
    
    reloadClassList(true); 
});

//custom design
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
	$('#gen-class-content').empty();
	$('#gen-class-content').html('<pre>\nSelect a table</pre>');
	$('#label').empty();
}

//generating class
$(document).on('click', '.table-item', function(e) {
	e.preventDefault();
	var tableName = $(this).text();
	var for_tableName = tableName[0].toUpperCase()+tableName.substr(1,tableName.length)+".php";
	var postData = {
        tableData:tableName,
        setters: $setter.prop('checked'),
        getters: $getter.prop('checked'),
        classExtend: $classExtend.val(),
        intefaces: $intefaces.val()
    };
    
	$('#table-name').text("Generating...");
	$('#gen-class-content').html('<h4>Generating Class <img src="loader24.gif"> ...</h4>');
	
	$.get('gen/ajaxGen.php', postData, function(result){
      
		$('#table-name').text(result.className);
		$('.download').attr('href','generator.php?download=' + result.className + '.php');
		$('#gen-class-content').empty();
		$('#gen-class-content').html('<pre>'+result.classContent+'</pre>');
		
		reloadClassList(true);
	});
});  

//generate all classes
$('#gen-all').click(function(e){
	e.preventDefault();
	var postData = {
        all:true,
        setters: $setter.prop('checked'),
        getters: $getter.prop('checked'),
        classExtend: $classExtend.val(),
        intefaces: $intefaces.val()
    };
    
	$('#table-name').text("Generating...");
	$('#gen-class-content').html('<h4>Generating all table(s) to Class(es) <img src="loader24.gif"> ...</h4>');
	
	$.get('gen/ajaxGen.php', postData, function(result){	
		$('#gen-class-content').empty();
		$('#gen-class-content').html('<pre>Done!</pre>');
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
		$('#gen-class-content').empty();
		$('#gen-class-content').html('<pre>'+result+'</pre>');
	}); 
});


//reloading list of generated classes
function reloadClassList(val){
	$.get('gen/ajaxGen.php',{reload:val},function(result,textStatus,xhr){
		$('.table-list').remove();
		$('#genlist').after('<ol class="db table-list">'+result+'</ol>');
	});
};