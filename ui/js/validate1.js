$(document).ready(function(){

	$("#x").validate({
		rules: {
				dates: {
						required: true,
						date: true
				},
				

				grn_no: "required",

				supplier: {

						required: true,
						minlength: 2
						
				}



		},

		messages: {


			dates: {

				required: "Please enter the date"
				


			},

			grn_no: "Please enter the number",

			supplier:{

				required: "Please enter the supplier name",
				minlength: "Supplier name must consist of at least 2 numbers"
				


			}



		


		}




	});




});