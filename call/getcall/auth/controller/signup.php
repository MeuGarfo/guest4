<?php
if(method()=='POST'){
    $result=signup();
    if(isset($result['error'])){
        redirect($_ENV['SITE_URL'].'auth/signup?erro');
    }else{
        redirect($_ENV['SITE_URL'].'auth/signup/done');
    }
}else{
    if(segment(3)=='done'){
        $data=[
            'title'=>"Sucesso",
            'msg'=>"Conta criada com sucesso. Você já pode fazer entrar no site."
        ];
        view("home/msg",$data);
    }else{
        $data=[
            'title'=>"Criar conta"
        ];
        view("auth/signup",$data);
    }
}
?>
