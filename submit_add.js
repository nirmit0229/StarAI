function submitformData() {
//	var name = $("#name").val();
//	var email = $("#email").val();
//	var phone = $("#phone").val();
	var gender = $("input[type=radio]:checked").val();
	$.post("submit_add.php", { gender: gender },
	   function(data) {
		 $('#results').html(data);
		 // $('#myForm')[0].reset();
	   });

	return false;


}

