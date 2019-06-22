<?php
if(!defined('ROOT')){
    require_once '../basic/basic.php';
}
inc([
    'auth',
    'e',
    'env',
    'error',
    'controller',
    'method',
    'model',
    'redirect',
    'segment',
    'view'
]);
$controller='auth/'.segment(2);
if(controller($controller)){

}else{
    view('home/404');
}
?>
