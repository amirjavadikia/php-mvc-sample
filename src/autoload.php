<?php
spl_autoload_register(function ($className) {

    if (str_contains($className,"Controller")) {
        $filename = lcfirst($className);
        $filename = str_replace("Controller","",$filename);
        $filename = 'app/controller/'. $filename .".php";
        if (file_exists($filename)) {
            require $filename;
        }
    }
    if (str_contains($className,"Model")) {
        $filename = lcfirst($className);
        $filename = str_replace("Model","",$filename);
        $filename = 'app/model/'. $filename .".php";
        if (file_exists($filename)) {
            require $filename;
        }
    }
});
