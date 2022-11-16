$(".menu_name").click(function() {
	$.ajax({
		url: "test.php",
		success: function(result) {
			$("#result").html(result);
		}
	});
})