<?php

use Evengyl\module\Construct_subcateg;
use Evengyl\module\Construct_articles;

if(isset($_GET['categ_id']) && !isset($_GET['id_sub_categ']))
{

    $__sub_categories = Construct_subcateg::db_get_sub_category($_GET['categ_id']);

    foreach($__sub_categories as $categ)
    {
        ?>
        <div class="col-sm-6 col-md-4 col-lg-3" style="padding-right:5px; padding-left:5px;">
            <div class="thumbnail">
                <div class="caption">
                    <h4><?php echo $sub_categ->name_simple; ?></h4>
                </div>
                <img src="http://placehold.it/350x150" alt="...">
                <hr>
                <p>
                    <?php
                    $articles = Construct_articles::db_get_articles($sub_categ->id, $_GET['categ_id']);
                    if($articles != '')
                    {
                        foreach($articles as $article)
                        {
                            echo $article->title_link_button;
                        }
                    }
                    ?>
                </p>

            </div>
        </div><?

    }



}
?>