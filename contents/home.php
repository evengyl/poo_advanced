
<?php


$res_pdo = $pdo->query_pdo("SELECT * FROM marketing_matedex ORDER BY id");

?>
<div class="row"><?php

    foreach($res_pdo as $articles)
    {?>
        <div class="col-md-4 col-lg-4" style="margin-bottom: 15px; ">
            <div class="col-md-12 col-lg-12" style="height:270px; border:solid 1px grey; <?php echo($articles->is_done == '1')?"background:#5CB85C;":""; ?>">
                <h2><?php echo html_entity_decode($articles->nom); ?></h2>
                <p><?php echo $articles->adresse; ?></p>
                <p><?php echo $articles->tel; ?></p>
                <p><?php echo $articles->link_website; ?></p>
                <p><a class="btn btn-default" href="#" role="button">Valider &raquo;</a>
                <a class="btn btn-default" href="#" role="button">Laisser un commentaire &raquo;</a></p>
            </div>
        </div>
    <?php
    }?>

   </div>

