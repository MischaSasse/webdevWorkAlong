<?php

switch ($_SERVER['REQUEST_URI']) {
  case '/':
    require './views/index.view.php';
    break;
  case '/about':
    require './views/about.view.php';
    break;
  case '/contact':
    require './views/contact.view.php';
    break;

  default: require './views/404.view.php';
}
