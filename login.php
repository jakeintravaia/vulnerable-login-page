<?php

function checkLogin(){
  $username = $_POST['username'];
  $password = $_POST['password'];
  if(md5($username) != "21232f297a57a5a743894a0e4a801fc3" || md5($password) != "5f4dcc3b5aa765d61d8327deb882cf99"){
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
