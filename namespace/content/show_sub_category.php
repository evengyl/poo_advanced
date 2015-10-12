<?php

if(isset($_GET['categ_id']) && !isset($_GET['id_sub_categ']))
{
    $category = $categ->db_get_category_and_sub();
    foreach($category as $categ)
    {
        if(isset($categ->sub_category))
        {
            foreach($categ->sub_category as $sub_categ)
            {
                if($sub_categ->id_categ == $_GET['categ_id'])
                {?>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="thumbnail">
                            <div class="caption">
                                <h4><?php echo$sub_categ->name_simple; ?></h4>
                            </div>
                            <img src="http://placehold.it/350x150" alt="...">

                        </div>
                    </div><?
                }
                else
                {

                }
            }
        }
    }
}
?>