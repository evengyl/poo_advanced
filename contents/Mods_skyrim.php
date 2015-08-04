<?php
namespace Evengyl\contents;
?>
<div class="row"><?php
    // \evengyl\talbe\client , classe séléctionnée pour avoir un objet de type client toujours avec fetchall Class

    foreach($res_pdo = $pdo->query_pdo("SELECT * FROM mods_bob_lennon ORDER BY id", '\Evengyl\module\Mods_skyrim') as $mods)
    {?>
        <div class="col-md-4 col-lg-4" style="margin-bottom: 15px; ">
            <div class="col-md-12 col-lg-12" style="height:300px; border:solid 1px grey;">
                <h2><?php echo html_entity_decode($mods->nom); ?></h2>
                <p><?php echo $mods->get_id_propre(); ?></p>
                <p><?php echo $mods->get_extrait(); ?></p>
                <p>
                    <a class="btn btn-default" href="#" role="button">Valider &raquo;</a>
                    <a class="btn btn-default" href="#" role="button">Laisser un commentaire &raquo;</a>
                </p>
                <p><a class="btn btn-default" href="#" role="button">Lire tout les commentaires &raquo;</a></p>
            </div>
        </div><?php
    }
    ?>
</div>

