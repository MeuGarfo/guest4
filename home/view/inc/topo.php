<h1><?php e($_ENV['SITE_NAME']); ?></h1>
<p>
    <a href="<?php print $_ENV['SITE_URL']; ?>">Home</a> /
    <?php
    $user=isAuth();
    if($user){
        ?>
        Olá <b><?php e($user['name']); ?></b>
        (<a href="<?php print $_ENV['SITE_URL']; ?>auth/logout">Sair</a>)
        <?php
    }else{
        ?>
        <a href="<?php print $_ENV['SITE_URL']; ?>auth/signup">Criar conta</a> /
        <a href="<?php print $_ENV['SITE_URL']; ?>auth/signin">Entrar</a>
        <?php
    }
    ?>
</p>
