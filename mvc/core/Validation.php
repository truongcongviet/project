<?php

class Validation {
   
  function checkmail($string){
    
    if(isset($_SESSION["email"]))
    {
      unset($_SESSION["email"]);
    }

    //kiểm tra định dạng mail

    if (filter_var($string, FILTER_VALIDATE_EMAIL)) 
    {
      return true;
    } 
    else 
    {
      $_SESSION["email_format"] ="vui lòng nhập email đúng định dạng";
      return false;
    }


  }

  //check element in username

  function checkusers($string){

    if(isset($_SESSION["user"])){
      unset($_SESSION["user"]);
    }

    if(strlen($string)<6){

      $_SESSION["user"]  = "user cần lớn hơn 6 ký tự";
      return false;
    }
    else 
    {  
      return true;
    }
    
  }
  function checkpass($password, $repeatpass){
    if(isset($_SESSION["pass"])){
      unset($_SESSION["pass"]);
    }
    if($password!=$repeatpass){
      $_SESSION["pass"] = "Pass không trùng, nhập lại pass";
      return false;
    }
    else{
      return true;
    }
    
  }
  function checkpass_count($password){
    if(isset($_SESSION["pass_count"])){
      unset($_SESSION["pass_count"]);
    }
    if(strlen($password)<5){
      $_SESSION["pass_count"] = "cần nhập thêm số ký tự pass";
      return false;
    }
    else{
      return true;
    }
    
  }
}


?>