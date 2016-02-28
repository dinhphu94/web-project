<!doctype html>

<head>

	<!-- Basics -->
	
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	
	<title>Login</title>

	<!-- CSS -->
	
	<link rel="stylesheet" href="{{Asset('login/css/reset.css')}}">
	<link rel="stylesheet" href="{{Asset('login/css/animate.css')}}">
	<link rel="stylesheet" href="{{Asset('login/css/styles.css')}}">
	
</head>

	<!-- Main HTML -->
	
<body>
	
	<!-- Begin Page Content -->
	
	<div id="container">
		@include('errors.check')
		<form class="form-horizontal" role="form" method="POST" action="{!! URL::to('auth/login') !!}">
		
		<label for="name">Email:</label>
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<input type="name" id="email" placeholder="Email" name="email"/>
		
		<label for="username">Password:</label>
		
		<p><a href="#">Forgot your password?</a>
		
		<input type="password" autocomplete="off" id="password" placeholder="Password" name="password"/>
		
		<div id="lower">
		
		<input type="checkbox"><label class="check" for="checkbox">Keep me logged in</label>
		
		<input type="submit" value="Login">
		
		</div>
		
		</form>
		
	</div>
	
	
	<!-- End Page Content -->
	
</body>

</html>
	
	
	
	
	
		
	