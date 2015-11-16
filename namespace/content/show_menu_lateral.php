<?php
$menu = new \Evengyl\module\Menu_lateral();
$menu_lateral = $menu->db_get_architecture();



?>
<div class="hidden-xs col-sm-4 col-md-3 col-lg-2 " style="padding-left:10px; padding-right:0px;">
    <div class="hidden-xs col-sm-4 col-md-3 col-lg-12 col-without-padding"  style="border:1px solid #337AB7;">
        <div class="col-lg-12" style="margin-bottom:10px; background: rgb(51, 122, 183) none repeat scroll 0% 0%; color: white;">
            <h3>List of Category</h3>
        </div>

        <div class="col-lg-12 " style="padding:0px 10px 0px 10px;"><?php
            foreach($menu_lateral as $categ)
            {?>
                <div class="list-group"><?
                    echo $categ->name;
                    foreach($categ->sub_categ as $sub_categ)
                    {
                        echo $sub_categ;
                    }?>
                </div><?php
            }?>
        </div>
    </div>
</div>


