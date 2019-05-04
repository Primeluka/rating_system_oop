<?php

    require_once 'core/init.php';



    if(isset($_GET['id'])) {

        $id = (int)$_GET['id'];

    $article = DB::getInstance()->action('SELECT *','articles', array('id','=',$id))->results();
    }

?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Articles</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col">
    <?php

        foreach ($article as $row) {
            echo '<h1 class="display-4">'.$row->title.'</h1>';
            echo '<p>'.$row->content.'</p>';
        }

        echo '<div>Oceń artykuł: ';

        for ($i=1; $i <= 5; $i++) { 
            echo '<a href="article.php?id='.$id.'&rate='.$i.'">'. $i .' </a>';
        }

        if(isset($_GET['rate'])) {
            $rate = new Rating();
            $rate->addRate($_GET['id'], $_GET['rate']);
        }

        echo '</div>';
    ?>
        </div>
    </div>
</div>
</body>
</html>