$(document).ready(function() {
	$("form").submit(function() {
		$.ajax({
			url: "mail.php",
			type: "POST",
			data: new FormData(this),
			processData: false,
			contentType: false
		}).done(function() {
			alert("Ready!");
		});
		return false;
	});
});