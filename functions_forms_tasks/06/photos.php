<?php
if(!empty($_FILES['photos'])){
    imagesUpload();
}
function imagesUpload(){
    if(!file_exists('gallery') || !is_dir('gallery')){
        mkdir('gallery');
    }
    foreach($_FILES['photos']['tmp_name'] as $k=>$tmp){
        $fileName = __DIR__
            .DIRECTORY_SEPARATOR
            .'gallery'
            .DIRECTORY_SEPARATOR.$_FILES['photos']['name'][$k];
        move_uploaded_file($tmp, $fileName);
    }
}
function getImages(){
    $dir = __DIR__
        .DIRECTORY_SEPARATOR
        .'gallery';
    $files = scandir($dir);
    $files = array_filter($files, function($a){
        return $a != '.' && $a != '..';
    });
    return $files;
}
function showGallery_2($chunkSize){
    $dir = __DIR__
        .DIRECTORY_SEPARATOR
        .'gallery';
    $files = scandir($dir);
    $files = array_filter($files, function($a){
        return $a != '.' && $a != '..';
    });
    if(!$files){
        return;
    }
    $trs = array_chunk($files, $chunkSize);
    $cntTd = $chunkSize;
    echo '<table style="width: 100%;">';
    foreach($trs as $row){
        include 'row_template.html';
    }
    echo '</table>';
}
function showGallery(){
    $dir = __DIR__
        .DIRECTORY_SEPARATOR
        .'gallery';
    $files = scandir($dir);
    $files = array_filter($files, function($a){
        return $a != '.' && $a != '..';
    });
    if(!$files){
        return;
    }
    echo '<table style="width: 100%;">';
    $i = 0;
    foreach($files as $file){
        if($i == 0){
            echo '<tr>';
        }
        echo '<td width="33%">',
            "<img src=\"/fs/gallery/$file\" style=\"width: 100%;\"/>",
            '</td>';
        $i++;
        if($i == 3){
            echo '</tr>';
            $i=0;
        }
    }
    if($i != 0){
        for($j=$i; $j < 3; $j++){
            echo '<td width="33%"></td>';
        }
        echo '</tr>';
    }
    echo '</table>';
}
function print_pre($data){
    echo '<pre>';
    print_r($data);
    echo '</pre>';
}