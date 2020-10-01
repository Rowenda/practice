<?php
require "vendor/autoload.php";

class SvgRenderer{

    private $matrix=[];
    private $x;
    private $y;
    private $size;

    public function __construct(Avatar $grille, int $x=200, int $y=200){

    $this->matrix= $grille->getAvatar();
    $this->size=50;
    $this->x= $x;
    $this->y = $y;
    }


    function square ($color, $size, $x, $y){
            return '<rect x=" '. $x .' " y=" '.$y.' " width=" '.$size.' " height=" '.$size.' " stroke="black" fill=" '.$color.' "/>';
        }

    function render(){
        $results='';
   
        foreach ($this->matrix as $rows){
            $this->y += $this->size;

            foreach($rows as $color){
            $this->x += $this->size;
            $results .= $this->square($color, $this->size, $this->x, $this->y);
            }
            $this->x=200;
        }
        return $results;
    }
}