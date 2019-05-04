<?php

class Rating {
    private $_rate,
            $_db = null,
            $_article_id;

    public function __construct() {
        $this->_db = DB::getInstance();
    }

    public function addRate($id, $rate) {

        if($rate < 1 || $rate > 5){
            echo 'Wartość spoza zakresu';
            die();
        };

        $this->_article_id=$id;
        $this->_rate = $rate;

        $result = $this->_db -> query("INSERT INTO articles_rating VALUES('',?,?)",array(
            $this->_article_id,
            $this->_rate
        ));


        if($result)
        {
            echo '<div class="alert alert-success mt-2" role="alert">
            Pomyślnie dodano ocenę artykułu</div>';
        }
        else
        {
            echo '<div class="alert alert-warning mt-2" role="alert">
            Wystąpił błąd</div>';
        }
    }
}