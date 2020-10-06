<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="form.css">
</head>
<body>
    <section>
        <div class="container">
          <div class="form sign-in-form">
            <div class="wrapper">
              <form method="POST" action="validation.php">
                <h1>Sign In</h1>
                <p>use your email and password to sign in</p>
                <input type="text" name = "user" placeholder="Email">
                <input type="password" name="password" placeholder="password">
                <button type="submit" name="login_btn">Sign In</button>
              </form>
            </div>
          </div>
          <div class="form sign-up-form active">
            <div class="wrapper">
              <form action="#">
                <h1>Sign up</h1>
                <p>Please, provide all the correct info to create an account</p>
                <input type="text" placeholder="Full Name">
                <input type="email" placeholder="Email">
                <!--
                <input type="password" placeholder="password">
                -->
                <button>Continue Sign Up</button>
              </form>
            </div>
          </div>
          <div class="overlay-container">
            <div class="overlay">
              <div class="overlay-left">
                <h1>Create Account</h1>
                <p>or</p>
                <button id="signInButton">Log In</button>
              </div>
              <div class="overlay-right">
                <h1>Please, Log In</h1>
                <p>or</p>
                <button id="signUpButton">Create Account</button>
              </div>
            </div>
          </div>
        </div>
      </section>
      <script src="form.js"></script>
</body>
</html>

