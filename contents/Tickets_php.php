<?php
namespace Evengyl\contents;
?>
<div class="row"><?php
    // \evengyl\talbe\client , classe séléctionnée pour avoir un objet de type client toujours avec fetchall Class

    $res_pdo = $pdo->query_pdo("SELECT * FROM ticket_php ORDER BY id", '\Evengyl\module\Tickets_php' );

    foreach( $res_pdo as $ticket)
    {?>
        <div class="col-md-4 col-lg-4" style="margin-bottom: 15px; ">
        <div class="col-md-12 col-lg-12" style="height:330px; border:solid 1px grey;">

            <p style="font-size: 16px;"><?php echo $ticket->get_commentaire(); ?></p>
            <p><?php echo $ticket->get_date(); ?></p>

        </div>
        </div><?php
    }
    ?>
</div>

