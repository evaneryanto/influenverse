<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Meta tags for character set and viewport -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Title of the document -->
  <title>Login Form</title>
  <!-- External CSS file -->
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">
  <!-- Fonts from Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Exo:wght@700&display=swap" rel="stylesheet">
  <!-- Icon fontawesome -->
  <script src="https://kit.fontawesome.com/1590548db6.js" crossorigin="anonymous"></script>
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
        <h1 class="top">Grow Your</h1>
        <!-- Headline 2 -->
        <h1 class="bottom">Influence With Us</h1>
      </div>
      <!-- Image for branding -->
      <img src="{{ asset('img/login_influencer.png') }}" alt="Image">
    </div>
    <!-- Right section with login form -->
    <div class="right-section">
      <div class="login-form">
        <!-- Login form heading -->
        <h2>Login</h2>
        <form action="#">
          <!-- Username input field -->
          <label for="username">Email</label>
          <input type="text" id="username" name="username" placeholder="example.email@gmail.com" required>

          <!-- Password input field -->
          <label for="password">Password</label>
          <input type="password" id="password" name="password" placeholder="Enter at least 8+ characters" required>

          <!-- Submit button -->
          <button type="submit">Sign In</button>

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
            <span class="dont-have-account-yet">Don't have account yet? <a href="#registration-form">Register now</a></span><br>
            <span class="influencer-login">Are you influencer? <a href="/login_influencer">Login here</a></span>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>

</html>