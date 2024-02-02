<x-guest-layout>
  <div class="container">
      <!-- Left section with branding -->
      <div class="left-section">
      <div class="left-content">
          <!-- Brand name -->
          <span class="influenverse">Influenverse</span>
          <!-- Headline 1 -->
          <h1 class="top">Unlock Your</h1>
          <!-- Headline 2 -->
          <h1 class="bottom">World of Influence</h1>
      </div>
      <!-- Image for branding -->
      <img src="{{ asset('img/login_brand.png') }}" alt="Image">
      </div>
  <!-- Right section with login form -->
  <div class="right-section">
    <div class="login-form">
      <!-- Login form heading -->
      <h2>Login</h2>
  <!-- Session Status -->
  <x-auth-session-status class="mb-4" :status="session('status')" />

  <form method="POST" action="{{ route('login') }}">
      @csrf

      <!-- Email Address -->
      <div>
          <x-input-label for="email" :value="__('Email')" />
          <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
          <x-input-error :messages="$errors->get('email')" class="mt-2" />
      </div>

      <!-- Password -->
      <div class="mt-4">
          <x-input-label for="password" :value="__('Password')" />

          <x-text-input id="password" class="block mt-1 w-full"
                          type="password"
                          name="password"
                          required autocomplete="current-password" />

          <x-input-error :messages="$errors->get('password')" class="mt-2" />
      </div>

      <!-- Remember Me -->
      <!-- <div class="block mt-4">
          <label for="remember_me" class="inline-flex items-center">
              <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
              <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
          </label>
      </div> -->

      <x-primary-button >
              {{ __('Sign in') }}
          </x-primary-button>
      <!-- Or sign in with social buttons -->
      <div class="or-sign-in-with">
          <span class="txt2">Or sign in with</span>
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
        <!-- Registration and influencer login links -->
        <div class="be-part-of-us">
          <span class="dont-have-account-yet">Don't have account yet? <a href="{{url('signup_brand')}}">Register now</a></span><br>
          <span class="influencer-login">Are you influencer? <a href="{{ url('login_influencer') }}">Login here</a></span>
        </div>

      <!-- <div class="flex items-center justify-end mt-4">
          @if (Route::has('password.request'))
              <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                  {{ __('Forgot your password?') }}
              </a>
          @endif
      </div> -->
  </form>

  </div>
</x-guest-layout>
