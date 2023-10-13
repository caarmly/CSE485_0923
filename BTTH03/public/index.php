<?php

require_once('../app/config/config.php');
require_once APP_ROOT.'/app/libs/DBConnection.php';
require_once APP_ROOT.'/app/controllers/BookController.php';
require_once APP_ROOT.'/app/controllers/AuthorController.php';

$bookController = new BookController();
$bookController->index();

$authorController = new AuthorController();
$authorController->index();

// $controller = isset($_GET['controller'])?$_GET['controller']:'home';
// $action = isset($_GET['action'])?$_GET['action']:'index';

// if($controller=='home'){
//     require_once APP_ROOT.'/app/controllers/BookController.php';
//     $bookController = new BookController();
//     $bookController->index();
// }

// else if($controller == 'author'){
//     require_once APP_ROOT.'/app/controllers/AuthorController.php';
//     $authorController = new AuthorController();
//     $authorController->index(); 
// }
// else {
//     echo "Not Found";
// }

?>