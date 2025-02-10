
<?php

// Ascending sort for Indexed Array

    $fruits = array("mango","banana","apple","qwer");
    sort($fruits);
    print_r($fruits);

    echo "</br>";

    $numbers = array(11,29,7,23,5,37,97);
    sort($numbers);
    print_r($numbers);

    echo "</br>";


// Descending sort for Indexed Array
    $fruits = array("mango","banana","apple","qwer");
    rsort($fruits);
    print_r($fruits);

    echo "</br>";

    $numbers = array(11,29,7,23,5,37,97);
    rsort($numbers);
    print_r($numbers);

    echo "</br>";


// Ascending sort for Associative Array with respect to value
    $fruits = array ("Fruit"=>"Mango", "Color"=>"Yellow", "Taste"=>"Sweet");
    asort($fruits);
    print_r($fruits);

    echo "</br>";


// Descending sort for Associative Array with respect to value
    $fruits = array ("Fruit"=>"Mango", "Color"=>"Yellow", "Taste"=>"Sweet");
    arsort($fruits);
    print_r($fruits);

    echo "</br>";


// Ascending sort for Associative Array with respect to key
    $fruits = array ("Fruit"=>"Mango", "Color"=>"Yellow", "Taste"=>"Sweet");
    ksort($fruits);
    print_r($fruits);

    echo "</br>";


// Descending sort for Associative Array with respect to key
    $fruits = array ("Fruit"=>"Mango", "Color"=>"Yellow", "Taste"=>"Sweet");
    krsort($fruits);
    print_r($fruits);

    echo "</br>";
    
?>
