<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Meta tags for character set and viewport -->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Title of the website -->
	<title>Influenverse - Register</title>
	<!-- External CSS file -->
	<link href="{{ asset('css/style.css') }}" rel="stylesheet">
	<!-- Fonts from Google Fonts -->
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Exo:wght@700&display=swap" rel="stylesheet">
	<!-- Icon fontawesome -->
	<script
		src="https://kit.fontawesome.com/3c21f5a91b.js"
		crossorigin="anonymous" >
	</script>
</head>

<body>
	<!-- Main container for the login form -->
	<div class="container">
		<!-- Left section with branding -->
		<div class="left-section">
			<div class="left-content">
				<!-- Brand name -->
				<span class="influenverse">Influenverse</span>
				<!-- Headline 1 -->
				<h1 class="top">Be Part of</h1>
				<!-- Headline 2 -->
				<h1 class="bottom">Our Creativity Community</h1>
			<!-- Image for branding -->
			<img align="center" src="{{ asset('img/register_influencer.png') }}" alt="Image">
			</div>
		</div>
		
		<!-- Right section with register form -->
		<div class="right-section">
			<div class="login-form">
				<!-- Login form heading -->
				<h2>Create an Account</h2>
				<form action="{{ route('register') }}" method="POST">
					@csrf
					<div>
						<label for="fullname">Full Name:</label>
						<input type="text" id="fullname" name="name" required><br>
					</div>
					<div>
						<label for="username">Username:</label>
						<input type="text" id="username" name="username" required><br>
					</div>
					<div>
						<label for="email">Email:</label>
						<input type="email" id="email" name="email"
						placeholder="example.email@gmail.com" required><br>
					</div>
					<div>
						<label for="password">Password:</label>
						<input type="password" id="password" name="password" 
						placeholder="Enter at least 8+ characters" required><br>
					</div>
					<div>
						<label for="confirm-password">Confirm Password:</label>
						<input type="password" id="confirm-password" name="password_confirmation" 
						placeholder="Enter at least 8+ characters" required><br>
					</div>
                    <input type="hidden" name="role" value="influencer">
					
					<!-- Submit button -->
					<button type="submit">Sign Up</button>

					<!-- Or sign in with social buttons -->
					<div class="or-sign-in-with">
						<span class="txt2">Or register with</span>
						<div class="social-buttons-container">
							<!-- Social buttons -->
							<a href="https://www.google.com" class="social-button">
								<i class="fab fa-google"></i>
							</a>
							<a href="https://www.facebook.com" class="social-button">
								<i class="fab fa-facebook"></i>
							</a>
							<a href="https://www.apple.com" class="social-button">
								<i class="fab fa-apple"></i>
							</a>
						</div>
					</div>

					<!--- Confirmation ReCaptcHA, Term & Policy --->
					{{-- <div>
						<!-- Google reCAPTCHA -->
						<div class="g-recaptcha" data-sitekey="YOUR_SITE_KEY" required></div>
						<!---- "YOUR_SITE_KEY mesti diganti dengan RReCaptCHa yang sudah ditautkan ---->
					</div> --}}
					<!--- term & policy -->
					<div>
					<span>
						<input type="checkbox" id="terms-policy-checkbox" required>
						<label for="terms-policy-checkbox" id="terms-policy-label" >I accept the Terms & Policy</label>
					</span>
					</div>
					
					<!-- Registration and influencer login links -->
					<div class="be-part-of-us">
						<span class="dont-have-account-yet">Have account yet?
						<a href="login-Influencer.html">Login now</a></span><br>
						
						<span class="influencer-login-regis">Are you brand company?
						<a href="influenverse-register-brand.html">Sign Up here</a></span>
					</div>
				</form>
				<!-- Include Google reCAPTCHA script -->
				<script src="https://www.google.com/recaptcha/api.js" async defer></script>
			</div>
		</div>
	</div>
</body>

</html>