<?php

use Evengyl\module\Construct_categ;

if(!isset($_GET['categ_id']) && !isset($_GET['id_sub_categ']))
{
    $__categories_list = Construct_categ::db_get_category_and_sub();?>

    <div class="<?php echo ($_GET['page'] == 'home' || !isset($_GET['page']))?"col-lg-10":"col-lg-12";?>">
        <div class="col-lg-12 col-without-padding" style="padding-bottom: 15px; border:1px solid #337AB7;">
            <h1 style="padding:5px; background:#337AB7; padding-left:50px; margin-top:0px; margin-bottom: 15px; font-size: 30px; color:white;"><?php echo $current_categ; ?></h1><?
            foreach($__categories_list as $categ)
            {?>
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="thumbnail">
                        <img src="http://placehold.it/350x150" alt="...">
                        <div class="caption">
                            <?php echo "<h3>" . $categ->name. "</h3>"; ?>
                            <p><?php echo $categ->description; ?></p>
                            <p><?php
                                if(isset($categ->sub_category))
                                {
                                    foreach($categ->sub_category as $sub_categ)
                                    {
                                        echo $sub_categ->name;
                                    }
                                }
                                ?>
                            </p>
                        </div>
                    </div>
                </div>
            <?php
            }?>
        </div>
    </div><?php
}



 ?>