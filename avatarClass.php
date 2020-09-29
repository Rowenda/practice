<?php
 require "vendor/autoload.php";

 class  Avatar{

    public $avatar;
     
     /* $size = nombre de cases du tableau  $colors = les couleurs voulues par l'utilisateur*/
    public function __construct(int $size, array $colors){
        $avatar= [];
        $midle= ($size/2);

            for ($x= 0; $x< $size ; $x++) {
                $avatar [] = [];

                for ($y=0; $y < $size ; $y++){
            
                    if ($y < $midle) {
                    $randcolors = array_rand( array_flip($colors), 1 );
                    $avatar[$x][$y] = $randcolors;
                    }
                    else {
                    $avatar[$x][$y] = $avatar [$x][$size-$y-1];
                    }
                }
            }
     $this->avatar =$avatar;
    }

    public function display() {
        
        dump ($this->avatar);
    }

}
