<?php
class Controller{
  public function model($model){
    require_once "./mvc/models/".$model.".php";
    return new $model;
  }
  public function validation($name){
    require_once "./mvc/core/".$name.".php";
    return new $name;
  }
  public  function isLogged(){
    if(isset($_SESSION["user_logged"])&& is_array( $_SESSION["user_logged"])&& count( $_SESSION["user_logged"])>0)
      {
        return true;
      }
      return false;
  }
}
?>