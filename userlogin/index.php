<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register & Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1 class="site-title">Hospitality & Home Services</h1>
    </header>

    <div class="container" id="signup" style="display:none;">
      <h1 class="form-title">User Register</h1>
      <form method="post" action="register.php">
        <div class="input-group">
           <input type="text" name="fName" id="fName" placeholder="" required>
           <label for="fname">First Name</label>
        </div>
        <div class="input-group">
            <input type="text" name="lName" id="lName" placeholder="" required>
            <label for="lName">Last Name</label>
        </div>
        <div class="input-group">
            <input type="email" name="email" id="email" placeholder="" required>
            <label for="email">Email</label>
        </div>
        <div class="input-group">
            <input type="password" name="password" id="password" placeholder="" required>
            <label for="password">Password</label>
        </div>
       <input type="submit" class="btn" value="Sign Up" name="signUp">
      </form>
      <p class="or">
        ----------or--------
      </p>
      <div class="links">
        <p>Already Have Account ?</p>
        <button id="signInButton">Sign In</button>
      </div>
    </div>

    <div class="container" id="signIn">
        <h1 class="form-title">Sign In</h1>
        <form method="post" action="register.php">
          <div class="input-group">
              <input type="email" name="email" id="email" placeholder="" required>
              <label for="email">Email</label>
          </div>
          <div class="input-group">
              <input type="password" name="password" id="password" placeholder="" required>
              <label for="password">Password</label>
          </div>
          <p class="recover">
            <a href="#">Recover Password</a>
          </p>
         <input type="submit" class="btn" value="Sign In" name="signIn">
        </form>
        <p class="or">
          ----------or--------
        </p>
        <div class="links">
          <p>Don't have account yet?</p>
          <button id="signUpButton">Sign Up</button>
        </div>
      </div>
      <script src="script.js"></script>
</body>
</html>
