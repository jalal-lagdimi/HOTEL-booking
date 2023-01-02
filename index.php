<?php

require_once './autoload.php';
require_once './controllers/HomeController.php';

$home = new HomeController();


$adminPages = ['add','update','logout','dashbord','login'];

$pages = ['home','loginuser','signup'];

$userPages = ['booking','guest','loginuser','signup','logoutuser','reservation'];



if (isset($_GET['page']) && in_array($_GET['page'],$adminPages)) {

  if (isset($_SESSION['logged']) && isset($_SESSION['logged']) === true) {
    if ($_GET['page'] === "login") {
      $home->index("dashbord");
    } else {
      $page = $_GET['page'];
      $home->index($page);
    }
    
  }else{
    $home->index('login');
  }

}else if (isset($_GET['page']) && in_array($_GET['page'],$userPages)) {

  if (isset($_SESSION['loggeduser']) && isset($_SESSION['loggeduser']) === true) {
    if ($_GET['page'] === "loginuser" || $_GET['page'] === "signup") {
      $home->index("booking");
    } else {
      $page = $_GET['page'];
      $home->index($page);
    }
    
  }else if($_GET['page'] === "loginuser"){
    $home->index('loginuser');
  }else if($_GET['page'] === "signup"){
    $home->index('signup');
  }else{
    $home->index('loginuser');
  }
   
}else if(isset($_GET['page']) && in_array($_GET['page'],$pages)){
      $page=$_GET['page'];
      $home->index($page);
    }else if (!isset($_GET['page'])) {
        $home->index('home');
      }else{
        include('views/includes/404.php');
      }


