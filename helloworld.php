<?php
    $name="Karthik";
    $name2="Emmadi";
    echo "<h1>$name $name2</h1>";
    $name3="name";
    echo "<h1>".$$name3."</h1>";
    $array1=array("Hello",1,"World",2);
    print_r($array1);
    for ($i=0; $i < count($array1); $i++) { 
        echo "<p>$array1[$i]</p>";
    }
    $array2["Hello"]="World";
    print_r($array2);
    $array3=array("My"=>"Name","World"=>"YOUR");
    print_r($array3);
    unset($array1[3]);
    for ($i=0; $i < count($array1); $i++) { 
        echo "<p>$array1[$i]</p>";
    }
    foreach ($array3 as $i=>$j){
        echo "<p>$i=>$j</p>";
    }
    print_r($_GET);
?>

<form method="get" action="helloworld.php">
    <label>Enter name:</label>
    <input type="text" />
    <br>
    <label>Enter password:</label>
    <input type="password" />
    <br>
    <input type="submit" value="Submit" />
</form>