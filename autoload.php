<?php

spl_autoload_register(
    function($class){
        $classPath = __DIR__."/classes/";

        if(
            file_exists($classPath.str_replace("\\","/",$class))
        ){
            echo "classe requerida: " . $class;
        }
    }
);
?>