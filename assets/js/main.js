$(document).ready(function(){



	function card_toggle(btn1, btn2, btn1_msg, btn2_msg, card1, card2){
			$(btn1).on('click', function(){

			$(card1).slideToggle();
			$(btn2).html(btn2_msg);
			$(card2).hide();

			var text = $(btn1).html();

			if(text === btn1_msg){
				$(btn1).html('Close');
			}else{

				$(btn1).html(btn1_msg);
			}

		});
	}

	card_toggle('#edit_profile_card_btn', '#register_complaint_card_btn', 'Edit Profile', 'Register Complaint', '#edit_profile_card', '#register_complaint_card');
	card_toggle('#register_complaint_card_btn', '#edit_profile_card_btn', 'Register Complaint', 'Edit Profile', '#register_complaint_card', '#edit_profile_card');
	// $('#edit_profile_card_btn').on('click', function(){

	// 	$('#edit_profile_card').slideToggle();
	// 	$('#register_complaint_card_btn').html('Register Complaint');
	// 	$('#register_complaint_card').hide();

	// 	var text = $('#edit_profile_card_btn').html();

	// 	if(text === "Edit Profile"){
	// 		$('#edit_profile_card_btn').html('Close');
	// 	}else{

	// 		$('#edit_profile_card_btn').html('Edit Profile');
	// 	}

	// });


	// $('#register_complaint_card_btn').on('click', function(){

	// 	$('#register_complaint_card').slideToggle();
	// 	$('#edit_profile_card_btn').html('Edit Profile');
	// 	$('#edit_profile_card').hide();
		
	// 	var text2 = $('#register_complaint_card_btn').html();

	// 	if(text2 === "Register Complaint"){
	// 		$('#register_complaint_card_btn').html('Close');
	// 	}else{

	// 		$('#register_complaint_card_btn').html('Register Complaint');
	// 	}
	// });

});