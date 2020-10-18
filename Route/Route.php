
<?php

include('./mvc/core/Route.php');

// Add base route (startpage)
Route::add('/login',function(){
  
  $controller = new Controller();
  if($controller->isLogged()){
    header('Location: '."/homesuccess");
    return;
  }
  require_once "./mvc/views/pages/login.php";
  if(isset($_SESSION["checklogin"])){
    unset($_SESSION["checklogin"]);
  }
}, 'get');

// Simple test route that simulates static html file
Route::add('/register', function () {
  
 require_once "./mvc/views/pages/register.php";
 
  if(isset($_SESSION["user"])){
    unset($_SESSION["user"]);
  }
  if(isset($_SESSION["email_format"])){
    unset($_SESSION["email_format"]);
  }
  if(isset($_SESSION["email_exit"])){
    unset($_SESSION["email_exit"]);
  }
  if(isset($_SESSION["pass"])){
    unset($_SESSION["pass"]);
  }
  if(isset($_SESSION["pass_count"])){
    unset($_SESSION["pass_count"]);
  }
}, 'get');

Route::add('/register/post', function () {
  require_once "./mvc/controllers/Register.php";
  new Register();
}, 'post');

// Post route example
Route::add('/home', function () {
  require_once "./mvc/views/pages/home.php";
}, 'get');

// Post route example
Route::add('/login/post', function () {
  require_once "./mvc/controllers/Login.php";
  new Login();
}, 'post');

Route::add('/homesuccess', function () {
 
  require_once "./mvc/views/pages/successlogin.php";
 
}, 'get');

Route::run('/');
?>