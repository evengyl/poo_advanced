<?php
namespace Evengyl\contents;
?>
<div class="row"><?php
    // \evengyl\talbe\client , classe séléctionnée pour avoir un objet de type client toujours avec fetchall Class

    foreach($res_pdo = $pdo->query_pdo("SELECT * FROM mods_bob_lennon ORDER BY id LIMIT 0, 50", '\Evengyl\module\Mods_skyrim' )as $mods)
    {?>
        <div class="col-md-4 col-lg-4" style="margin-bottom: 15px; ">
            <div class="col-md-12 col-lg-12" style="height:330px; border:solid 1px grey;">
                <h2><?php echo $mods->get_nom(); ?></h2>
                <p style="font-size: 16px;"><?php echo ucfirst($mods->get_extrait()); ?></p>
                <p><?php echo $mods->get_id(); ?></p>
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

