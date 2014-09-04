$(document).ready(function(){
	$('body').on('click','.alert-box > a.close', function() { $(this).closest('[data-alert]').fadeOut('slow'); });
});

function sendAjax(mUrl, mData, callback, mThis) {
	$.ajax({
		url: '/backend/'+mUrl,
		type: 'POST',
		timeout: 10000,
		data: mData,
		context: mThis,
		success: callback,
		error: function (xhr, ajaxOptions, thrownError) {
           	alert(xhr.responseText);
       	}
	});
}

function showError(result) {
	$('#error_indicator').append(
		'<div data-alert class="alert-box alert round">'+result.data+
			'<a href="#" class="close">&times;</a>'+
		'</div>'
	);
}