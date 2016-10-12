<?php
//include connfig structure
include_once("config/structure.php");
//autoload of the composer
if(file_exists(AUTOLOAD)){
  include_once(AUTOLOAD);
} else {
  echo "composer not installed run php init.php";
  exit();
}


require 'classes/router.class.php';

require 'classes/doctrine.class.php';

require 'classes/blade.class.php';
require 'classes/controller.class.php';

$router = new router();

require 'app/routing.php';

$router->init();
