<?php
namespace Evengyl\contents;
?>
<div class="row"><?php
// \evengyl\talbe\client , classe séléctionnée pour avoir un objet de type client toujours avec fetchall Class
    foreach($res_pdo = $pdo->query_pdo("SELECT * FROM marketing_matedex ORDER BY id", '\Evengyl\module\Client') as $clients)
    {?>
        <div class="col-md-4 col-lg-4" style="margin-bottom: 15px; ">
            <div class="col-md-12 col-lg-12" style="height:270px; border:solid 1px grey; <?php echo($clients->is_done == '1')?"background:#5CB85C;":""; ?>">
                <h2><?php echo html_entity_decode($clients->nom); ?></h2>
                <p><?php echo $clients->adresse; ?></p>
                <p><?php echo $clients->tel; ?></p>
                <p><a href="<?php echo $clients->get_link_website(); ?>">Lien vers le site du client</a></p>
                <p><a class="btn btn-default" href="#" role="button">Valider &raquo;</a>
                    <a class="btn btn-default" href="<?php echo $clients->get_url(); ?>" role="button">Laisser un commentaire &raquo;</a></p>
                <a class="btn btn-default" href="#" role="button">Lire tout les commentaires &raquo;</a></p>
            </div>
        </div><?php
    }
    ?>
</div>

