jQuery(document).ready(function( $ ) {
 	$('#agencies-list').footable({
 		"paging":{
			"enabled": true,
			"size": 20
		},
		"columns": jQuery.get('../data/columns.json'),
		"rows": jQuery.get('../data/rows.json'),
	});

	$('.table').on('click','tr', function(){
	    $(this).addClass('selected').siblings().removeClass('selected');    
	   var value=$(this).find('td:last').html();
	   // alert(value);    
	});

	$('nav').on('click', '.nav-item', function(){
	    $(this).addClass('active').siblings().removeClass('active');    
	});
});
