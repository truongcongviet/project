<?php
 
  class Register extends Controller{
    public $Validation;
    public $SinhvienModel;
   
    public function __construct(){
      
      $this->SinhvienModel = $this->model("SinhVienModel");
      
      $this->Validation = $this->validation("Validation");

      $this->CheckRegister();
      
    }
    public function CheckRegister(){
        
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password =md5($_POST['psw']); //mã hóa mật khẩu
        $repeatpass =md5($_POST['psw-repeat']);// mã hóa mật khẩu nhập lại
        
        if(!$this->Validation->checkusers($username))
        {
          header('Location: '."/register");
          return;
        }

        if(!$this->Validation->checkmail($email)){
          header('Location: '."/register");
          return;
        }

        if($this->SinhvienModel->CheckEmail($email)){
          header('Location: '."/register");
          return;
        }
        
        if(!$this->Validation->checkpass($password, $repeatpass))
        {
          header('Location: '."/register");
          return;
        }

        if(!$this->Validation->checkpass_count($password)){
          header('Location: '."/register");
          return;
        }

        $this->SinhvienModel->InsertSinhVien($username, $email, $password);
        header('Location: '."/login");
      }
    }



?>