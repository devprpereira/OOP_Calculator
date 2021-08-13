<?php
namespace classes\util;

class Requirer{
        
    public static function requireClassFile($classFolder, $class){
       //get full path of classes folder
       $fullPath = dirname(__DIR__, 1)."\\".$classFolder."\\". ucfirst($class) . ".php";
       
        file_exists($fullPath) ? require_once($fullPath) : false;
       
       
    }

    public static function listClassDirectory(string $dir){
        $dir = scandir("./classes/".$dir);
       
         //Remove the first 2 indexes of the array  ([0] . , [1] ..)
        return $dir = array_splice($dir, 2);
    }
}