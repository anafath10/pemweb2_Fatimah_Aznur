<?php

require_once "class_fruit.php";
class strawberry extends Fruits{
    public function message()

    {
        echo "Am I a fruit or a berry? ";
    }
}


$strawberry = new Strawberry("Strawberry", "red");
$strawberry->message();
$strawberry->intro();


?>