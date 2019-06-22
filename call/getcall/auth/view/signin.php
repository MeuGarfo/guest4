<?php
view('home/inc/header',$data);
?>
<div class="container">
    <div class="row">
        <div class="offset3 span6">
            <?php view("home/inc/topo",$data); ?>
            <?php view('auth/form/signin',$data); ?>
        </div>
    </div>
</div>
