<?php
view('home/inc/header',$data);
?>
<div class="container">
    <div class="row">
        <div class="offset3 span6">
            <?php view("home/inc/topo",$data);
            print '<h2>'.$title.'</h2>';
            print '<p>'.$msg.'</p>';
            ?>
            <p>
                <a href="javascript:window.history.back(1);">Voltar</a>
            </p>
        </div>
    </div>
</div>
