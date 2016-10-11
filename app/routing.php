<?php
// map homepage
$router->map( 'GET', '/', 'home');

// map user details page
$router->map( 'GET', '/user/[i:id]', function( $id ) {
  global $blade;
  echo $blade->make('route',array("route" => "/user/$id"));
});
?>
