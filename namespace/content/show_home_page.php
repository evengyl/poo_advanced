<?php
use Evengyl\module\Home_page;
use Evengyl\db\App;

$number_max = Home_page::db_get_number_articles();
// va aller faire la requère pour compter le nombre d'entrée dans la base de données des articles

$array_number_random = array();
$i=0;

while($i < App::$_nb_articles_random_home_page)
{
    $array_number_random[] = rand(0,$number_max);
    $i++;
}

$list_articles = Home_page::db_get_random_article($array_number_random);
//affichera tout les articles de la sub categ
if(isset($_GET['page']) && $_GET['page'] == "home" || $page == 'home')
{
    ?>
    <div class="col-lg-12">
        <hr>
        <div class="col-lg-12 col-without-padding" style="padding-bottom: 15px; border:1px solid #337AB7;">
            <h1 style="padding:5px; background:#337AB7; padding-left:50px; margin-top:0px; margin-bottom: 15px; font-size: 30px; color:white;">Random products</h1>
                <?php
                foreach($list_articles as $article)
                {?>

                    <div class="col-sm-4 col-md-4 col-lg-3" style="height:380px;">
                        <div class="thumbnail">
                            <img src="http://placehold.it/320x150" alt="">
                            <div class="caption">
                                <h4 style="height:40px;"><?php echo $article[0]->title_link; ?></h4>
                                <p><?php echo $article[0]->resumer; ?></p>
                            </div>
                        </div>
                    </div>
                <?php
                }?>
        </div>
    </div><?php
}
?>
