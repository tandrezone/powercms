<?php
class router{
  private $package;
  private $method;
  private $route;
  private $callable;
  private $callable_type;

  private $blade;
  private $doctrine;

  function __construct() {
    $this->package = new AltoRouter();
    $this->blade = new blade();

  }
  function map($method, $route, $callable){
    return $this->package->map($method, $route, $callable);
  }
  function match(){
    return $this->package->match();
  }
  function init(){
    $match = $this->match();

    if($match){
      if(is_callable( $match['target'] ) ) {
        call_user_func_array( $match['target'], $match['params'] );
      } else if (gettype($match['target']) == 'string'){
        $callable = explode("@",$match['target']);
        if(sizeof($callable) == 1 ){
          $controller = $callable[0];
          $function = "index";
        } else {
          $function = $callable[1];
        }
        //call controller and function
        require 'app/controller/'.$controller.'.ctrl.php';
        $ctrl = new $controller(array($this->blade));
        echo $ctrl->$function();
      }
    } else {
      echo "route not found";
    }
  }
}
?>
