<?php
exec("composer install");
exec("bower install";)
exec("npm install grunt --save-dev");
exec("npm install grunt-wiredep --save-dev");
exec("grunt wiredep");
?>
