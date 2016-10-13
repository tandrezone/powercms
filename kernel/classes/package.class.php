<?php
class package{
  private $packages;
  function __construct(){

  }
  function add($packages){
    $this->packages[] = $packages;
  }
  function get(){
    return $packages;
  }
}
?>
