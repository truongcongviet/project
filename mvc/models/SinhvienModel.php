<?php
class SinhVienModel extends DB{

    //insert data into database
  public function InsertSinhVien($username,$email,$password){

    $qr = "INSERT INTO user (username, email, password) VALUES('$username', '$email', '$password')";

    //hàm insert không cần trả về, Khi cần db trả về dữ liệu để làm gì đó mới thực hiện

    return (mysqli_query($this->con, $qr)) ? true : false;

  }

  public function CheckEmail($string){

    $string = trim($string);

    $qr = "SELECT email FROM user WHERE email='$string'";
    $result = mysqli_query($this->con, $qr);
    
    if(isset($_SESSION["email_exit"])){
      unset($_SESSION["email_exit"]);
    }

    if ($result->num_rows > 0) 
    {
      // output data of each row
        $_SESSION["email_exit"] ="email đã trùng, nhập email khác";
        return true;
    }
      else
      {
        return false;
      }

  }


   //Check login
  public function CheckLogin($stringuser,$stringpass){
    $stringuser = trim($stringuser);$stringpass = trim($stringpass);
    $qr = "SELECT * FROM user WHERE username='$stringuser' and password='$stringpass'";
   
    $result = mysqli_query($this->con, $qr);

    if(isset($_SESSION["checklogin"])){
      unset($_SESSION["checklogin"]);
    }

    if($result==true)
    {
      if ($result->num_rows > 0) 
      {  
          $row=mysqli_fetch_assoc($result);
          return $row;
      }
    
    } 
    else
    {
      $_SESSION["checklogin"] ="không đăng nhập được";
      return false;
    }
  }
}
