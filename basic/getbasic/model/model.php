<?php
//Criado por Anderson Ismael
//20 de Dezembro de 2018

function model($name){
    $filename=ROOT.'app/model/'.$name.'.php';
    $name2=explode('/',$name);
    $repoName=@$name2[0];
    $modelName=@$name2[1];
    $filename2=ROOT.$repoName.'/model/'.$modelName.'.php';
    if(file_exists($filename)){
        return require_once($filename);
    }elseif(file_exists($filename2)){
        return require_once($filename2);
    }else{
        die('model <b>'.$name.'</b> not found');
    }
}

