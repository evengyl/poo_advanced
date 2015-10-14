<?php


if(isset($_GET['categ_id']) &&
    $_GET['categ_id'] != "" &&
    isset($_GET['id_sub_categ']) &&
    $_GET['id_sub_categ'] != "" &&
    isset($_GET['id_article']) &&
    $_GET['id_article'] != "")
{
    $id_sub_categ = $_GET['id_sub_categ'];
    $id_categ = $_GET['categ_id'];
    $id_article = $_GET['id_article'];


    $article = $categ->db_get_article_simple($id_article);
    $title_page = $article->title;?>

    <div class="col-md-12 col-lg-12">
        <div class="col-lg-6">
            <div class="thumbnail">
                <img class="img-responsive" src="<?php echo $article->url_image; ?>" alt="">
                <div class="caption-full">
                    <h4 class="pull-right">$24.99</h4>
                    <h4><?php echo $article->title; ?></h4>
                    <p><h5><?php echo $article->sub_title; ?></h5></p>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="thumbnail" style="padding:0px;">
                <h4 style="margin-top:0px; margin-bottom:0px;"><a href="#" style="display: block; padding: 10px; border-top-left-radius: 4px; border-top-right-radius: 4px; color: #FFF; background-color: #337AB7; border-color: #337AB7;">Caractéristiques(s)</a></h4>
                <div class="text-left" style="padding: 15px; font-size: 15px; line-height: 23px;">
                    <p>- <?php echo $article->content; ?></p>
                    <p>- <?php echo $article->content; ?></p>
                    <p>- <?php echo $article->content; ?></p>
                </div>
                <hr>
            </div>
        </div>


        <div class="col-lg-12">
            <div class="well">
                <div class="text-right">
                    <center><a class="btn btn-success">Options</a></center>
                </div>
                <hr>
            </div>
        </div>
    </div>

        <?php

}
?>





