$(document).ready(function(){

	$("#formname").validate({
		rules: {
				cname: {
						required: true,
						minlength: 2
				},
				

				address: {
						required: true,
						minlength: 2
				},

				mobile: {

						required: true,
						number: true,
						minlength: 10
						
				}



		},

		messages: {


			cname: {

				required: "Please enter the company name",
				minlength: "Name must consist of at least 2 characters"


			},

			address: {

				required: "Please enter the company address",
				minlength: "Address must consist of at least 2 characters"


			},

			mobile:{

				required: "Please enter the phone number",
				minlength: "Phone number must consist of at least 10 numbers",
				number: "Please enter a valid number"


			}



		


		}




	});




});