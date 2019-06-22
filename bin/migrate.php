<?php
require_once __DIR__."/../basic/basic.php";
system("clear");
inc([
    'db',
    'migrate'
]);
if(createDB()){
    print 'banco de dados criado'.PHP_EOL;
}
$db=db();
echo 'migrando tabelas...'.PHP_EOL;
$repos=[
    'auth',
    'home',
    'mensagem'
];
if(migrate($db,$repos)){
    print 'tabelas migradas com sucesso'.PHP_EOL;
}else{
    print 'erro ao migrar as tabelas';
}
?>
