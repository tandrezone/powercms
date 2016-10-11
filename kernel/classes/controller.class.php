<?php
class controller{
  public $package;
  function __construct($ctrlpackages = array()){
    foreach ($ctrlpackages as $ctrlpackage) {
      $name = get_class($ctrlpackage);
      $this->package[$name] = $ctrlpackage;
    }
  }
  function index(){
    echo $this->package['blade']->make('index');
  }
  function midleware(){
    return true;
  }
}
?>
