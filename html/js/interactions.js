
var set_interaction = function(id) {
	var request = new XMLHttpRequest();
	request.open('POST', 'http://localhost/garden/pauta/index.php/ajax/set_interaction/'+id,false);
	var formData = new FormData();
	formData.append('title', document.getElementById("title").value);
	formData.append('date', document.getElementById("date").value);
	formData.append('user_id', 1);
	formData.append('campaing_id', id);
	request.send(formData);
	clear_interaction_form();
	print_interaction(request.response);
};

var clear_interaction_form = function() {
	$("#title").val('');
	$("#date").val('');
}

var print_interaction = function(data) {
	var data = jQuery.parseJSON(data);
	var template = 	'<tr><td>'+data.title+'</td>';
	$('#tbody').prepend(template);
}