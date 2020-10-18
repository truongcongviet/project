<?php

class Login extends Controller{
  public $Validation;
  public $SinhvienModel;
  public function __construct(){
    
    $this->SinhvienModel = $this->model("SinhVienModel");
    $this->Validation = $this->validation("Validation");
    
    $this->login();
    // $this->logout();
  }
  public function login(){
    
      $username = $_POST["username"];
      $password = md5($_POST["psw"]);
    //vardump chỗ này vẫn nhận kq. 
      

    $kq = $this->SinhvienModel->CheckLogin($username,$password);
    //vardump chỗ này báo false
  
    if($kq!=false)
    {
      //session login
      $_SESSION["user_logged"] = $kq;

      if(isset($_SESSION["user_logged"])&& is_array( $_SESSION["user_logged"])&& count( $_SESSION["user_logged"])>0)
      {
        header('Location: '."/homesuccess");
      }
      
    }
    else
    {
      $_SESSION["checklogin"];
      header('Location: '."/login");
    }
  }


}


?>