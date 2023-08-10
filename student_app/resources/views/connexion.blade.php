<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>login</title>
	<link rel="stylesheet" />

	<link rel="stylesheet" href="login.css" />
</head>

<body>
	<form action="{{route('traitement_login')}}" method="post" class="login_form_container">
		@csrf
		<div class="login_form">
			<h2>Conection</h2>
			<div class="input_group">
				<i class="fa fa-user"></i>

				<input type="email" placeholder="email" class="input_text"  name="email" />
			</div>
			<div class="input_group">
				<i class="fa fa-unlock-alt"></i>
				<input type="password" placeholder="password" class="input_text" autocomplete="off" name="password" />
			</div>
			<div </div>
				<div class="fotter">
					<a>Forgot Password ?</a>
					<button type="submit">SingUp</button>
				</div>
			</div>
	</form>

	<script src="login.js"></script>
</body>

</html>