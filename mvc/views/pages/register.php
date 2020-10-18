
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./public/css/register.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <title>Register</title>
</head>
<body>
  <?php 
    if(isset($_SESSION["user"])){?>
       <div class="alert alert-danger" role="alert">
      <?php echo $_SESSION["user"];?>
      </div>
    
  <?php } ?>
  <?php 
    if(isset($_SESSION["email_format"])){?>
       <div class="alert alert-danger" role="alert">
      <?php echo $_SESSION["email_format"];?>
      </div>
    
  <?php } ?>
  <?php 
    if(isset($_SESSION["email_exit"])){?>
       <div class="alert alert-danger" role="alert">
      <?php echo $_SESSION["email_exit"];?>
      </div>
  <?php } ?>

  <?php 
    if(isset($_SESSION["pass"])){?>
       <div class="alert alert-danger" role="alert">
      <?php echo $_SESSION["pass"];?>
      </div>
  <?php } ?>

  <?php 
    if(isset($_SESSION["pass_count"])){?>
       <div class="alert alert-danger" role="alert">
      <?php echo $_SESSION["pass_count"];?>
      </div>
  <?php } ?>
   

<form action ="/register/post" method ="POST">
  <div class="container">
    <h1>Register</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>
    <label for="username"><b>username</b></label>
 
    <input type="text" placeholder="Enter username" name="username" id="username" required>
    
    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" id="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" id="psw" required>

    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="psw-repeat" id="psw-repeat" required>
    <hr>

    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
    <button type="submit"  name="registerbtn">Register</button>
  </div>

  <div class="container signin">
    <p>Already have an account? <a href="#">Sign in</a>.</p>
  </div>
</form>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>