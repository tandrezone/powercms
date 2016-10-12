<?php
class home extends controller{
  function index(){
    echo $this->package['blade']->make('home');
  }
}
?>
