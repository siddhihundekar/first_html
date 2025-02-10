<!-- Union Operator (+) -->
<!-- index value or key value must not be the same -->
<?php
    
    $a = array("Name"=>"Siddhi", "Age"=>"20", "Education"=>"BCA Student");     // Associative array
    $b = array("X","Y","Z");                                                   // Indexed array
    
    print_r($a + $b);

    echo "</br>";


    $a = array("Name"=>"Siddhi", "Age"=>"20", "Education"=>"BCA Student");     // Associative array
    $b = array("Fruit"=>"Mango", "Color"=>"Yellow", "Taste"=>"Sweet");         // Associative array

    print_r($a + $b);

    echo "</br>";
?>

<br>
<br>
<br>

<!-- Equality Operator(==) -->
<!-- To check whether array has same elements or not -->
<?php
    $a = array("X","Y","Z");                                                   // Indexed array
    $b = array("X","Y","Z");                                                   // Indexed array

    if ($a==$b){
        print("Array is Equal");
    }else{
        print("Array is not Equal");
    }

    echo "</br>";



    $a = array("A","B","C");                                                   // Indexed array
    $b = array("X","Y","Z");                                                   // Indexed array

    if ($a==$b){
        print("Array is Equal");
    }else{
        print("Array is not Equal");
    }

    echo "</br>";



    $a = array("Z","X","Y");                                                   // Indexed array
    $b = array("X","Y","Z");                                                   // Indexed array

    if ($a==$b){
        print("Array is Equal");
    }else{
        print("Array is not Equal");
    }

    echo "</br>";
    echo "</br>";


    $a = array("Name"=>"Siddhi", "Age"=>"20", "Education"=>"BCA Student");     // Associative array
    $b = array("Name"=>"Siddhi", "Age"=>"20", "Education"=>"BCA Student");     // Associative array

    if ($a==$b){
        print("Array is Equal");
    }else{
        print("Array is not Equal");
    }

    echo "</br>";



    $a = array("Name"=>"Siddhi", "Age"=>"20", "Education"=>"BCA Student");     // Associative array
    $b = array("Fruit"=>"Mango", "Color"=>"Yellow", "Taste"=>"Sweet");         // Associative array

    if ($a==$b){
        print("Array is Equal");
    }else{
        print("Array is not Equal");
    }

    echo "</br>";



    $a = array("Name"=>"Siddhi", "Age"=>"20", "Education"=>"BCA Student");     // Associative array
    $b = array("Education"=>"BCA Student","Name"=>"Siddhi","Age"=>"20");     // Associative array

    if ($a==$b){
        print("Array is Equal");
    }else{
        print("Array is not Equal");
    }

    echo "</br>";
    echo "</br>";




    $a = array("Name"=>"Siddhi", "Age"=>"20", "Education"=>"BCA Student");     // Associative array
    $b = array("X","Y","Z");                                                   // Indexed array

    if ($a==$b){
        print("Array is Equal");
    }else{
        print("Array is not Equal");
    }

    echo "</br>";
    echo "</br>";
?>

<br>
<br>
<br>

<!-- Identical Operator(==) -->
<!-- To check whether array is exactly same in same order -->
<?php
    $a = array("X","Y","Z");                                                   // Indexed array
    $b = array("X","Y","Z");                                                   // Indexed array

    if ($a===$b){
        print("Array is Equal");
    }else{
        print("Array is not Equal");
    }

    echo "</br>";



    $a = array("A","B","C");                                                   // Indexed array
    $b = array("X","Y","Z");                                                   // Indexed array

    if ($a===$b){
        print("Array is Equal");
    }else{
        print("Array is not Equal");
    }

    echo "</br>";



    $a = array("Z","X","Y");                                                   // Indexed array
    $b = array("X","Y","Z");                                                   // Indexed array

    if ($a===$b){
        print("Array is Equal");
    }else{
        print("Array is not Equal");
    }

    echo "</br>";
    echo "</br>";


    $a = array("Name"=>"Siddhi", "Age"=>"20", "Education"=>"BCA Student");     // Associative array
    $b = array("Name"=>"Siddhi", "Age"=>"20", "Education"=>"BCA Student");     // Associative array

    if ($a===$b){
        print("Array is Equal");
    }else{
        print("Array is not Equal");
    }

    echo "</br>";



    $a = array("Name"=>"Siddhi", "Age"=>"20", "Education"=>"BCA Student");     // Associative array
    $b = array("Fruit"=>"Mango", "Color"=>"Yellow", "Taste"=>"Sweet");         // Associative array

    if ($a===$b){
        print("Array is Equal");
    }else{
        print("Array is not Equal");
    }

    echo "</br>";



    $a = array("Name"=>"Siddhi", "Age"=>"20", "Education"=>"BCA Student");     // Associative array
    $b = array("Education"=>"BCA Student","Name"=>"Siddhi","Age"=>"20");     // Associative array

    if ($a===$b){
        print("Array is Equal");
    }else{
        print("Array is not Equal");
    }

    echo "</br>";
    echo "</br>";




    $a = array("Name"=>"Siddhi", "Age"=>"20", "Education"=>"BCA Student");     // Associative array
    $b = array("X","Y","Z");                                                   // Indexed array

    if ($a===$b){
        print("Array is Equal");
    }else{
        print("Array is not Equal");
    }

    echo "</br>";
    echo "</br>";
?>
