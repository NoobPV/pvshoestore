<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Register</title>
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="stylesheet" href="https://jqueryvalidation.org/files/demo/site-demos.css">
	<!-- Main Style Css -->
    <link rel="stylesheet" href="<?php echo BASE_URL?>/public/css/style21.css"/>
</head>
<body class="form-v2">
	<div class="page-content">
		<div class="form-v2-content">
			<form class="form-detail" action="<?php echo BASE_URL?>/register/regis" method="post" id="myform">
				<h2>Registration Form</h2>
				<div class="form-row">
					<label for="full-name">Full Name:</label>
					<input type="text" name="full_name" id="full_name" class="input-text" required>
				</div>
                <div class="form-row">
					<label for="full-name">Phone:</label>
					<input type="text" name="phone" id="phone" class="input-text" required>
				</div>
                <div class="form-row">
					<label for="full-name">Address:</label>
					<input type="text" name="address" id="address" class="input-text" required>
				</div>
				<div class="form-row">
					<label for="your_email">Your Email:</label>
					<input type="text" name="email" id="email" class="input-text" required pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}">
				</div>
				<div class="form-row">
					<label for="password">Password:</label>
					<input type="password" name="password" id="password" class="input-text" required>
				</div>
				<div class="form-row">
					<label for="comfirm-password">Confirm Password:</label>
					<input type="password" name="confirm_password" id="confirm_password" class="input-text" required>
				</div>

				<div class="form-row-last">
					<input type="submit" name="register" class="register" value="Register">
				</div>
			</form>
		</div>
	</div>
	<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
	<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
	<script>
		// just for the demos, avoids form submit
		
		$( "#myform" ).validate({
		  	rules: {
		    	password: "required",
		    	confirm_password: {
		      		equalTo: "#password"
		    	}
		  	},
		  	messages: {
		  		full_name: {
		  			required: "Vui lòng nhập họ tên"
		  		},
                phone: {
		  		    required: "Vui lòng nhập số điện thoại"
		  		},
                address: {
		  		    required: "Vui lòng nhập địa chỉ"
		  		},
		  		email: {
		  			required: "Vui lòng nhập email"
		  		},
		  		password: {
	  				required: "Vui lòng nhập mật khẩu"
		  		},
		  		confirm_password: {
		  			required: "Vui lòng nhập mật khẩu",
		      		equalTo: "Mật khẩu không khớp"
		    	}
		  	}
		});
	</script>
</body>
</html>