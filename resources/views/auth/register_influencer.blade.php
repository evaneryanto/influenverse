<x-guest-layout>
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
							<x-input-label for="name" :value="__('Name')" />
							<x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" placeholder="Your name" required autofocus autocomplete="name" />
							<x-input-error :messages="$errors->get('name')" class="mt-2" />
						</div>
						<div>
							<x-input-label for="username" :value="__('Username')" />
							<x-text-input id="username" class="block mt-1 w-full" type="username" name="username" :value="old('username')" placeholder="username123" required autocomplete="username" />
							<x-input-error :messages="$errors->get('username')" class="mt-2" />
						</div>
						<div>
							<x-input-label for="email" :value="__('Email')" />
            				<x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" placeholder="example.email@gmail.com" required autocomplete="email" />
            				<x-input-error :messages="$errors->get('email')" class="mt-2" />
						</div>
						<div>
							<x-input-label for="password" :value="__('Password')" />
							<x-text-input id="password" class="block mt-1 w-full"
											type="password"
											name="password"
											required autocomplete="new-password"
											placeholder="Enter at least 8+ characters" />
            				<x-input-error :messages="$errors->get('password')" class="mt-2" />
						</div>
						<div>
							<x-input-label for="password_confirmation" :value="__('Confirm Password')" />
							<x-text-input id="password_confirmation" class="block mt-1 w-full"
											type="password"
											name="password_confirmation" placeholder="Retype your password" required autocomplete="new-password" />
							<x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
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
						<div>
							<!-- Google reCAPTCHA -->
							<div class="g-recaptcha" data-sitekey="YOUR_SITE_KEY" required></div>
							<!---- "YOUR_SITE_KEY mesti diganti dengan RReCaptCHa yang sudah ditautkan ---->
						</div>
						<!--- term & policy -->
						<div>
						<span>
							<input type="checkbox" id="terms-policy-checkbox" style="width: 5px; height: 5px;" required>
							<label for="terms-policy-checkbox" id="terms-policy-label" >I accept the Terms & Policy</label>
						</span>
						</div>
						
						<!-- Registration and influencer login links -->
						<div class="be-part-of-us">
							<span class="dont-have-account-yet">Already have an account?
							<a href="{{url('login_influencer')}}">Login now</a></span><br>
							
							<span class="influencer-login-regis">Want to explore as brand?
							<a href="{{url('signup_brand')}}">Sign Up here</a></span>
						</div>
					</form>
					<!-- Include Google reCAPTCHA script -->
					<script src="https://www.google.com/recaptcha/api.js" async defer></script>
				</div>
			</div>
		</div>
</x-guest-layout>


	