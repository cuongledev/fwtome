$( document ).ready(function() {
	$('body').on('click','.lang_hd',function(){
		var lang = $(this).attr('data-lang'); 
		$.ajax({
			url: baseUrl + 'index.php?mod=home&controller=home&action=setLang',
			type: 'POST',
			dataType: 'json',
			data: {lang: lang},
		})
		.done(function(data) {
			if (data.status==true) {
				location.reload();
			}else{
				console.log("error");
			}
		});
		
		
	})
	
});