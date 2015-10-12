<?php


$breadcrumb = new \Evengyl\module\Breadcrumb();
$current_categ = $breadcrumb->db_get_current_categ();


$bread = array();

if(isset($current_categ) && !empty($current_categ))
{
    if(isset($_GET['page']))
    {

            array_push($bread, '<a href="' . $base_path . '?page=home">Home</a>');


        if($_GET['page'] == 'category')
        {
            if(isset($_GET['categ_id']))
            {
                array_push($bread, $current_categ->name);
            }
            else
            {
                array_push($bread, "Category");
            }

            if(isset($_GET['id_sub_categ']))
            {
                $current_sub_categ = $breadcrumb->db_get_current_sub_categ();
                array_push($bread, $current_sub_categ->name);
            }
        }
    }
}


?>&nbsp;<ol class="breadcrumb"><?php

    foreach($bread as $line)
    {
    ?>

            <li><a href="#"><?php echo $line; ?></a></li>

    <?php
    }?>
</ol>


<!--<li class="active">Data</li>-->