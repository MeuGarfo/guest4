<?php
if(!defined('ROOT')){
    require_once '../basic/basic.php';
}
inc([
    'asset',
    'env',
    'controller',
    'error',
    'model',
    'view'
]);
error(true);
controller('home/home');
