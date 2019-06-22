<?php
//Criado por Anderson Ismael
//23 de janeiro de 2019

require_once('Migration.php');

function dropAll($db){
    $Migration=new Basic\Migration($db);
    return $Migration->dropAll();
}

function migrate($db,$repos=false){
    return migrateAll($db,$repos);
}

function migrateAll($db,$repos){
    $Migration=new Basic\Migration($db);
    return $Migration->migrateAll($repos);
}

function truncate($db){
    return truncateAll($db);
}

function truncateAll($db){
    $Migration=new Basic\Migration($db);
    return $Migration->trincaAll();
}
?>
