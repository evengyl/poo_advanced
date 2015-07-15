<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="x-ua-compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Test formulaire avec héritage de bootstrap</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>
<?php
require_once 'formulaire.class.php';
require_once 'bootstrap.class.php';

$formulaire = new Bootstrap($_POST); //methode 1 d'appel


// génération des champs grave au appel de methode
?>
<div class="container-fluid">

        <div class="col-lg-4">
            <?
            echo $formulaire->start_form($method = 'post',$action = '#');
            echo $formulaire->input('mail');
            echo $formulaire->input('username');
            echo $formulaire->input('password');
            echo $formulaire->submit();
            echo $formulaire->end_form();
            ?>
        </div>


</div>


<? var_dump($_POST); ?>

</body>
</html>