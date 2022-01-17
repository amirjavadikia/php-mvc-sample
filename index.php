<?php

require_once 'src/require.php';

$uri = $_SERVER['REQUEST_URI'];
$uri = explode("/" , $uri);

$class = $uri[1];
$method = $uri[2];
$params = array();

for ($i = 3; $i<count($uri); $i++){
    $params[] = $uri[$i];
}


$className = ucfirst($class)."Controller";
$instance = new $className();

call_user_func_array(array($instance,$method),$params);


