<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-without-padding header" style="z-index: 10000;">
    <div class="col-lg-3" style="padding-left:25px;">
        <?php
        use \Evengyl\db\App;
        $name_website = App::set_logo_website();

        ?><img style='margin-top: 45px; ' class='img-responsive' src='<?php echo $base_path.''.$name_website; ?>'/>
    </div>
    <div class="col-lg-5">

    </div>
    <div class="col-lg-4" style="margin-top: auto">
        <img style='margin-top: 25px;' class='img-responsive' src='<?php echo $base_path; ?>/images/logo_matedex.png'/>
    </div>
</div>

