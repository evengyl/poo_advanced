<?php
$home_page = new \Evengyl\module\Home_page();


$number_max = $home_page->db_get_number_articles();
// va aller faire la requère pour compter le nombre d'entrée dans la base de données des articles

$array_number_random = array();
$i=0;

while($i < 4)
{
    $array_number_random[] = rand(0,$number_max);
    $i++;
}

$list_articles = $home_page->db_get_random_article($array_number_random);
//affichera tout les articles de la sub categ
if(isset($_GET['page']) && $_GET['page'] == "home" || $page == 'home')
{

    foreach($list_articles as $article)
    {?>
        <div class="col-sm-4 col-md-4 col-lg-3" style="height:350px;">
            <div class="thumbnail">
                <img src="http://placehold.it/320x150" alt="">
                <div class="caption">
                    <h4><?php echo $article[0]->title_link; ?></h4>
                    <p><?php echo $article[0]->resumer; ?></p>
                </div>
            </div>
        </div>
    <?php
    }
}
?>
