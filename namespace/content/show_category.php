<?php


if(!isset($_GET['categ_id']) && !isset($_GET['id_sub_categ']))
{
    $category = $categ->db_get_category_and_sub();


    foreach($category as $categ)
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
    }
}



 ?>