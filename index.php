<?php
include './controllers/Controller.php';
include './controllers/AboutController.php';
include './controllers/ContactController.php';
// include './router/router.php';

// $router = new Route();
// $router->getRoutes();
// var_dump($router);
// print_r( $router->getRoutes());
switch ($_SERVER['REQUEST_URI']) {
  case '/':
    $route = new Controller();
    $route->redirect("index");
    // Controller::redirect("index");
    break;
  case '/about':
    $route = new AboutController();
    $route->redirect("about");
    // Controller::redirect("about");

    break;
  case '/contact':
    $route = new ContactController();
    $route->redirect('contact');
    // Controller::redirect("contact");
    break;

  default:
    require './views/404.view.php';
}