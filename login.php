<?php

function checkLogin(){
  $username = $_POST['username'];
  $password = $_POST['password'];
  if($username != "admin" || $password != "password"){
    return false;
  }
  return true;
}

if(checkLogin()){
  header("Location: home.php");
}else{
  header("Location: index.html");
}
?>
