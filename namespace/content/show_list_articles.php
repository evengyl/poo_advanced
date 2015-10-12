<?php
//affichera tout les articles de la sub categ
if(isset($_GET['categ_id']) && $_GET['categ_id'] != "" && isset($_GET['id_sub_categ']) && $_GET['id_sub_categ'] != "" && !isset($_GET['id_article']))
{


    $id_sub_categ = $_GET['id_sub_categ'];
    $id_categ = $_GET['categ_id'];

    $list_articles = $categ->db_get_articles($id_sub_categ, $id_categ);

    foreach($list_articles as $article)
    {?>


        <div class="col-sm-4 col-md-4 col-lg-3" style="height:400px;">
            <div class="thumbnail">
                <img src="http://placehold.it/320x150" alt="">
                <div class="caption">
                    <h4 class="pull-right">$24.99</h4>
                    <h4><?php echo $article->title_link; ?></h4>
                    <p><?php echo $article->resumer; ?></p>
                </div>
            </div>
        </div>
    <?php
    }
}
?>