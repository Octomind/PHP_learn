<?php
error_reporting(E_ALL);
$dir = '..';
$word = '0';
fileFilter($dir, $word);

/* 
function myGlob($dir, $world){
    $pattern = trim($dir, " \/\\");
    $pattern .= DIRECTORY_SEPARATOR."*$world*";
    $files = glob($pattern);
    print_pre($files);
} */


function fileFilter($dir, $word){
    $dir = trim($dir, " \/\\");
    var_dump($dir);
    if(!is_dir($dir)){
        exit('Это не директория');
    }
    $pattern = '/(^|[_\W])+'.$word.'.*/i';
    $files = scandir($dir);
    $files = array_filter($files, function($file)use($pattern, $dir){
        return is_file($dir.DIRECTORY_SEPARATOR.$file)
            && $file != '.'
            && $file != '..'
            && preg_match($pattern, $file);
    });
    print_pre($files);
}


function print_pre($data){
    echo '<pre>';
    print_r($data);
    echo '</pre>';
}