<!DOCTYPE html>
<head>
<title>Visitors an Admin Panel Category Bootstrap Responsive Website Template | Registration :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="{{asset('style/css/bootstrap.min.css')}}" >
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="{{asset('style/css/style.css')}}" rel='stylesheet' type='text/css' />
<link href="{{asset('style/css/style-responsive.css')}}" rel="stylesheet"/>
<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="{{asset('style/css/font.css')}}" type="text/css"/>
<link href="{{asset('style/css/font-awesome.css')}}" rel="stylesheet"> 
<!-- //font-awesome icons -->
<script src="{{ asset('style/js/jquery2.0.3.min.js')}}"></script>
</head>
<body>
<div class="reg-w3">
<div class="w3layouts-main">
	<h2>Register Now</h2>
		<form method="POST" action="{{ route('register') }}">
			@csrf
			<input id="name" type="text" class="ggg" name="name" placeholder="NAME" equired autocomplete="name" autofocus>
            @error('name')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
            @enderror
			<input id="email" type="email" class="ggg" name="email" placeholder="E-MAIL" required autocomplete="email">
            @error('email')
            	<span class="invalid-feedback" role="alert">
            	<strong>{{ $message }}</strong>
            	</span>
            @enderror
			<input id="password" type="password" class="ggg" name="password" placeholder="PASSWORD" required autocomplete="new-password"">
            @error('password')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
            @enderror
			<input id="password-confirm" type="password" class="ggg" name="password_confirmation" placeholder="PASSWORD CONFIRMATION" required autocomplete="new-password">
			<h4><input type="checkbox" />I agree to the Terms of Service and Privacy Policy</h4>
				<div class="clearfix"></div>
				<br>
				<button type="submit" value="submit" class="btn btn-outline-light btn-block" name="register"> REGISTER</button>
		</form>
		<br>
		<p>Already Registered.<a href="{{ asset('login')}}">Login</a></p>
</div>
</div>
<script src="{{ asset('style/js/bootstrap.js')}}"></script>
<script src="{{ asset('style/js/jquery.dcjqaccordion.2.7.js')}}"></script>
<script src="{{ asset('style/js/scripts.js')}}"></script>
<script src="{{ asset('style/js/jquery.slimscroll.js')}}"></script>
<script src="{{ asset('style/js/jquery.nicescroll.js')}}"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="{{ asset('style/js/flot-chart/excanvas.min.js')}}"></script><![endif]-->
<script src="{{ asset('style/js/jquery.scrollTo.js')}}"></script>
</body>
</html>
