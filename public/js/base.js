jQuery(document).ready(function($) {
	var requestAjax = false;
	$('body').on('click', '#register_user', function(event) {
		event.preventDefault();

		var form = $('form#registerForm');
		
		if (requestAjax === true) {
			return;
		}

		requestAjax = true;

		$.ajax({
			url: form.prop('action'),
			type: form.prop('method'),
			dataType: 'json',
			data: form.serializeArray(),
			context: this
		})
		.done(function(response) {
			if (response.messages !== 'exito') {
				$('.alert').remove();
				$.each(response.messages, function(index, val) {
					 $('#'+index).after('<div class="alert alert-danger">'+val+'</div>');
				});
			}else{
				$(this).before('<div class="alert alert-success">Usuario agregado</div>');
				form[0].reset();
			}
			console.log("success");
		})
		.fail(function() {
			console.log("error");
		})
		.always(function() {
			console.log("complete");
			requestAjax = false;
		});
	});


	ajaxRequest2 = false;
	$('body').on('click', '.borrar', function(event) {
		event.preventDefault();
		
		var form = $(this).parent('.registerForm');

		var data = {
			id_user : $(this).data('id'),
			token : $(this).parent('.registerForm').find('input[name=_token]').val(),
			action: 'deleteUser'
		};

		$.ajax({
			url: form.prop('action'),
			type: form.prop('method'),
			dataType: 'json',
			data: data,
			context: this
		})
		.done(function(response) {
			if (response.messages !== 'exito') {
				$('.alert').remove();
				$.each(response.messages, function(index, val) {
					 $('#'+index).after('<div class="alert alert-danger">'+val+'</div>');
				});
			}else{
				$(this).before('<div class="alert alert-success">Usuario agregado</div>');
				form[0].reset();
			}
			console.log("success");
		})
		.fail(function() {
			console.log("error");
		})
		.always(function() {
			console.log("complete");
			requestAjax = false;
		});
	});
});