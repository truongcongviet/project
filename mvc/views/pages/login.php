<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./public/css/login.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  
  <title>Login</title>
</head>
<body>
   
    <?php 
        if(isset($_SESSION["checklogin"])){?>
          <div class="alert alert-danger" role="alert">
          <?php echo $_SESSION["checklogin"];?>
          </div>
    <?php } ?>
 
    <form action="/login/post" method="post">
      <div class="imgcontainer">
        <img src="img_avatar  2.png" alt="Avatar" class="avatar">
      </div>

      <div class="container">
        <label for="username"><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="username" required>

        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="psw" required>

        <button type="submit" name="loginbtn">Login</button>
        <label>
          <input type="checkbox" checked="checked" name="remember"> Remember me
        </label>
      </div>

      <div class="container" style="background-color:#f1f1f1">
        <button type="button" class="cancelbtn">Cancel</button>
        <span class="psw">Forgot <a href="#">password?</a></span>
      </div>
    </form>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>