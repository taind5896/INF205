// JavaScript Document
/*
function kiemtra() {
	var user = document.getElementById("txtUser");
	var pass = document.getElementById("txtPass");
	
	if(user.value=="") {
		alert("Yêu cầu nhập vào Ký danh!");
		user.focus();
		return false;
	} 
	else if(user.value.length<5 || user.value.length>16) {
		alert("Yêu cầu nhập vào trong khoảng 4-16 ký tự!");
		user.focus();
		return false;
	}
	
	if(pass.value=="") {
		alert("Yêu cầu nhập vào Mật khẩu!");
		pass.focus();
		return false;
	}
	
	return true;
}
*/

$(document).ready(function() {
	$("#btnSubmit").click(function() {
	
		if($("#txtUser").val()=="") {
			alert("Yêu cầu nhập vào Ký danh!");
			$("#txtUser").focus();
			return false;
		} 
		else if($("#txtUser").val().length<5 || $("#txtUser").val().length>16) {
			alert("Yêu cầu nhập vào trong khoảng 4-16 ký tự!");
			$("#txtUser").focus();
			return false;
		}
		
		if($("#txtPass").val()=="") {
			alert("Yêu cầu nhập vào Mật khẩu!");
			$("#txtPass").focus();
			return false;
		}
	});
	
	$("#txtUser").mouseover(function() {
		if($("#txtUser").val()=="Nhập ký danh") {
			$("#txtUser").val("");
		}
	});
	$("#txtUser").mouseout(function() {
		if($("#txtUser").val()=="") {
			$("#txtUser").val("Nhập ký danh");
		}
	});
	$("#txtPass").mouseover(function() {
		$("#txtPass").focus();
	});
});


	$.validator.setDefaults({
		submitHandler: function() {
			alert("submitted!");
		}
	});

	$().ready(function() {
		// validate the comment form when it is submitted
		$("#commentForm").validate();

		// validate signup form on keyup and submit
		$("#signupForm").validate({
			rules: {
				firstname: "required",
				lastname: "required",
				username: {
					required: true,
					minlength: 2
				},
				password: {
					required: true,
					minlength: 5
				},
				confirm_password: {
					required: true,
					minlength: 5,
					equalTo: "#password"
				},
				email: {
					required: true,
					email: true
				},
				topic: {
					required: "#newsletter:checked",
					minlength: 2
				},
				agree: "required"
			},
			messages: {
				firstname: "Please enter your firstname",
				lastname: "Please enter your lastname",
				username: {
					required: "Please enter a username",
					minlength: "Your username must consist of at least 2 characters"
				},
				password: {
					required: "Please provide a password",
					minlength: "Your password must be at least 5 characters long"
				},
				confirm_password: {
					required: "Please provide a password",
					minlength: "Your password must be at least 5 characters long",
					equalTo: "Please enter the same password as above"
				},
				email: "Please enter a valid email address",
				agree: "Please accept our policy"
			}
		});

		// propose username by combining first- and lastname
		$("#username").focus(function() {
			var firstname = $("#firstname").val();
			var lastname = $("#lastname").val();
			if (firstname && lastname && !this.value) {
				this.value = firstname + "." + lastname;
			}
		});

		//code to hide topic selection, disable for demo
		var newsletter = $("#newsletter");
		// newsletter topics are optional, hide at first
		var inital = newsletter.is(":checked");
		var topics = $("#newsletter_topics")[inital ? "removeClass" : "addClass"]("gray");
		var topicInputs = topics.find("input").attr("disabled", !inital);
		// show when newsletter is checked
		newsletter.click(function() {
			topics[this.checked ? "removeClass" : "addClass"]("gray");
			topicInputs.attr("disabled", !this.checked);
		});
	});