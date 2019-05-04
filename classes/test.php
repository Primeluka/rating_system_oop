<?php
/*
class User {

    private $user = null;

    public function setUser($user) {
        return $this->user = $user;
    }

    public function getUser() {
        return $this->user;
    }

    public function setOptions(array $options) {
        
        $methods = get_class_methods($this); // tablica z nazwami metod

        foreach ($options as $key => $value) {
            $method = 'set' . ucfirst($key); // ex. setName
            if (in_array($method, $methods)) {
                $this->$method($value);
            }
        }
    
        //???? - return what ?
        return $this;
    }

    public function clnames() {
    echo '<pre>';
    print_r( get_class_methods($this) );
    echo '</pre>';
    }
}

$user = new User;
$user->setUser('Mateusz');
echo $user->getUser();

$user->clnames();

*/

class text {
    private $text;

    public function __construct($text = 'sample')
    {
        $this->text=$text;
    }

    public function reverse(){
        $count = strlen($this->text)-1;
        $j = $count;
        for ($i=0; $i <= $count; $i++) { 
            $reverse[$i] = $this->text[$j];
            $j--;
        }

        return implode($reverse);
    }
}

$dupa = new text('dupa');
echo $dupa->reverse();

