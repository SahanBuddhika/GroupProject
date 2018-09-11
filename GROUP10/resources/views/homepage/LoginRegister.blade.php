<html>
<head>
	<title>
		Login and Registration Form
	</title>
    <link rel="stylesheet"  href="/css/style2.css"> <!--link with css file-->
         <link rel="stylesheet" href="/css/bootstrap.css">
        <script src="js/bootstrap.js"></script> 
        
	<body>
		<div class="login-page">
			<div class="form">
				<form class="register-form">
					<input type="text" placeholder="First Name"/> <!--insert text feilds-->
					<input type="text" placeholder="Last Name"/>
					<input type="text" placeholder="E-Mail"/>
					<input type="text" placeholder="Clinic-ID"/>
					<button>Register</button> <!--insert a button-->
					<p class="message">Already Registered? <a href= "#">Login</a>
					</p>
				</form>
				<form class="login-form">
					<input type="text" placeholder="user name" />
					<input type="password" placeholder="password" />
					<button>Login</button>
					<p class="message">Not Registered? <a href="#">Register</a></p>
				</form>
			</div>
		</div>
		<script src=' https://code.jquery.com/jquery-3.3.1.min.js'></script>
		<script>
			$('.message a').click(function(){
				$('form').animate({height:"toggle",opacity:"toggle"},"medium");
			});
		</script>
	</body>
</head>
</html>