$(function(){
	$('button#btn-add-child').click(function(){
		$('#children-container').clone().appendTo('#dynamic-form-container');
	});
});