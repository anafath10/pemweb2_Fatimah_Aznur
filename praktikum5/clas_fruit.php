<?php
class Fruits{
    public $name;
    public $color;

    public function __construct($name, $color)
    
    {
        $this->name = $name;
        $this->color = $color;
    }

    public function intro(){
        echo "The fruit is {$this->name} nad the color is {$this->color}";


    }
}

?>