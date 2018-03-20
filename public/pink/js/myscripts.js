jQuery(document).ready(function($) {
	
	$('.commentlist li').each(function(i) {
		
		$(this).find('div.commentNumber').text('#' + (i + 1));
		
	});
	
	$('#commentform').on('click','#submit',function(e) {
		
		e.preventDefault();

		var comParent = $(this);
		
		$('.wrap_result').
					css('color','green').
					text('Сохранение комментария').
					fadeIn(500,function() {
						
						var data = $('#commentform').serializeArray();
						
						$.ajax({
							
							url:$('#commentform').attr('action'),
							data:data,
                            headers:{'X-CSRF-TOKEN': $('meta[name="crsrf-token"]').attr('content')},
							type:'POST',
							datatype:'JSON',
							success: function(html) {
								
							},
							error:function() {
								
							}
							
						});
					});

	});
	
});