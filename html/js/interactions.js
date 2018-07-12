
function print_date() {
	var dayName = new Array ("domingo", "segunda", "terça", "quarta", "quinta", "sexta", "sábado");
	var monName = new Array ("janeiro", "fevereiro", "março", "abril", "maio", "junho", "agosto", "outubro", "novembro", "dezembro");
	var now = new Date;
	document.getElementById("time_display").innerHTML = (now.getHours() + ":" + now.getMinutes() + " | " +dayName[now.getDay()] + ", " + now.getDate() + " de " + monName[now.getMonth()] + " de " + now.getFullYear() );
	setTimeout(function() {print_date()}, 15000);
}

print_date();

function nl2br (str) {
    var breakTag = '<br>';
    return str.replace(/([^>\r\n]?)(\r\n|\n\r|\r|\n)/g, breakTag);
}

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

var set_comment = function(id) {
	var request = new XMLHttpRequest();
	request.open('POST', 'http://localhost/garden/pauta/index.php/ajax/set_comment/'+id,false);
	var formData = new FormData();
	formData.append('comment', nl2br(document.getElementById("comment").value));
	formData.append('time', '');
	formData.append('user_id', 1);
	formData.append('pit_id', id);
	request.send(formData);
	clear_comment_form();
	print_comment(request.response);
	console.log(request.response);
};

var clear_interaction_form = function() {
	$("#title").val('');
	$("#date").val('');
}

var clear_comment_form = function() {
	$("#comment").val('');
	$("#time").val('');
}

var print_interaction = function(data) {
	var data = jQuery.parseJSON(data);
	var template = 	'<tr><td>'+data.title+'</td>';
	$('#tbody').prepend(template);
}

var print_comment = function(data) {
	var data = jQuery.parseJSON(data);
	var template = 	'<tr><td>'+data.comment+'</td>';
	$('#tbody').prepend(template);
}