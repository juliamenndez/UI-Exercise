jQuery(document).ready(function( $ ) {
 	$('#agencies-list').footable({
 		"paging":{
			"enabled": true,
			"size": 20
		},
		"columns": $.getJSON('../data/columns.json'),
		"rows": $.getJSON('../data/rows.json'),
	});

	$('.table').on('click','tr', function(){
	    $(this).addClass('selected').siblings().removeClass('selected');    
	   var value=$(this).find('td:last').html();
	});

	$('#info-tab').on('click', function(){
		$('#information-content').addClass('visible').siblings().removeClass('visible');
	});

	$('#states-tab').on('click', function(){
		$('#states-content').addClass('visible').siblings().removeClass('visible');
	});

	$('#policies-tab').on('click', function(){
		$('#policies-content').addClass('visible').siblings().removeClass('visible');
	});
});
