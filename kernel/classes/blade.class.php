<?php
class blade{
  private $package;
  function __construct() {
    $path = ['app/view'];         // your view file path, it's an array
    $cachePath = 'tmp/views';     // compiled file path

    $compiler = new \Xiaoler\Blade\Compilers\BladeCompiler($cachePath);
    $engine = new \Xiaoler\Blade\Engines\CompilerEngine($compiler);
    $finder = new \Xiaoler\Blade\FileViewFinder($path);

    // get an instance of factory
    $this->package = new \Xiaoler\Blade\Factory($engine, $finder);
  }
  function make($template, $datasource = array()){
    return $this->package->make($template, $datasource)->render();
  }
}
