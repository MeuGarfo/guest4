<?php
require 'basic/basic.php';
inc([
    'asset',
    'env',
    'error',
    'route',
    'segment',
    'view'
]);
error(true);
$route=segment(1);
if($route=='/'){
    $route='mensagem';
}
switch ($route) {
    case 'auth':
    route($route);
    break;
    case 'mensagem':
    route($route);
    break;
    default:
    view('home/404');
    break;
}
