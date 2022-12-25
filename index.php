<?php

require_once './autoload.php';
require_once './controllers/HomeController.php';

$home = new HomeController();

$pages = ['home','add','update','delete','logout','dashbord','login','loginuser','signup','booking'];



if(isset($_GET['page']) && in_array($_GET['page'],$pages)){
  $page=$_GET['page'];
  $home->index($page);
}else if (!isset($_GET['page'])) {
  $home->index('home');
}else{
  include('views/includes/404.php');
}

