<?php
require_once "core/init.php";

    $connection = DB::getInstance();
    $articles = $connection->query('SELECT * FROM articles')->results();

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

    <?php 


        foreach ($articles as $article) {
            echo '<div class="row"><div class="col mb-4 py-2 border border-secondary">';
            echo '<div class="h3"><a href="article.php?id='.$article->id.'">'.$article->title.'</a></div>';
            echo '<p>'.$article->content.'</p>';

            $ratings = $connection->action('SELECT rating', 'articles_rating', array('article_id', '=', $article->id))->results();

            $ratings_sum=0;
            foreach($ratings as $rating) {
                $ratings_sum+=$rating->rating;
            }

            $num_of_ratings = count($ratings);

            echo '<div class="text-muted">Rating ';
            
            if($num_of_ratings>0){
                echo round($ratings_sum/$num_of_ratings, 1);
            };
            
            echo '/5</div>';
            echo '</div></div>';
        }

    ?>
    
</div>    
</body>
</html>