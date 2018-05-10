$(document).ready(function() {

	$("#username").after('<span id="usernameinfo"></span>');
	$("#password").after('<span id="passwordinfo"></span>');
	$("#email").after('<span id="emailinfo"></span>');

	$("#username").focus(function(){


		var infoMessage="The username field must contain only alphabetical or numeric characters.";
		$("#usernameinfo").text(infoMessage).removeClass('ok').removeClass('error').addClass("info").show();
	});


	$("#password").focus(function(){
		var infoMessage="The password field should be at least 8 characters long.";
		$("#passwordinfo").text(infoMessage).removeClass('ok').removeClass('error').addClass("info").show();
	});


	$("#email").focus(function(){

		var infoMessage="The email field should be a valid email address (abc@def.xyz)";
		$("#emailinfo").text(infoMessage).removeClass('ok').removeClass('error').addClass("info").show();
	});


	$('#username').blur(function(){
		$("#usernameinfo").hide();
		var infoMessage="The username field must contain only alphabetical or numeric characters.";
		var username = $("#username").val();
		var nameRegex = /^[a-zA-Z0-9]*$/;
		var validity = nameRegex.test(username);
		console.log(username+'  '+nameRegex+"  "+validity);
		if(username!="")
		{
			if(validity)
			{
				$("#usernameinfo").text("OK").removeClass('info').removeClass('error').addClass('ok').show();
			}
			else
			{
				$("#usernameinfo").text(infoMessage).removeClass('info').removeClass('ok').addClass('error').show();
			}
		}

	});


	$('#password').blur(function(){
		$("#passwordinfo").hide();
		var infoMessage="The password field should be at least 8 characters long.";
		var password = $("#password").val();
		if(password!="")
		{
			if(password.length>=8)
			{
				$("#passwordinfo").text("OK").removeClass('info').removeClass('error').addClass('ok').show();
				console.log("okkkkkk");
			}
			else
			{
				$("#passwordinfo").text(infoMessage).removeClass('info').removeClass('ok').addClass('error').show();
				console.log("errororor");
			}
		}

	});


	$('#email').blur(function(){
		$("#emailinfo").hide();
		var infoMessage="The email field should be a valid email address (abc@def.xyz)";
		var emailname = $("#email").val();
		var nameRegex = /^([A-Za-z0-9-/_]+)(@)([A-Za-z0-9-.]+)/;
		var validity = nameRegex.test(emailname);
		console.log(emailname+'  '+nameRegex+"  "+validity);
		if(emailname!="")
		{
			if(validity)
			{
				$("#emailinfo").text("OK").removeClass('info').removeClass('error').addClass('ok').show();
			}
			else
			{
				$("#emailinfo").text(infoMessage).removeClass('info').removeClass('ok').addClass('error').show();
			}
		}

	});




});
