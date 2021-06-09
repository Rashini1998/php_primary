<?php
$title="Arrays";
include 'includes/header.php'?>

<h1>Arrays</h1>
<?php
//a variable
    $num=3;
//an array
//only one datatype
    $numbers = array(1,2,3,4,5,6,7,8,9,10);

    echo $numbers[5];
    echo "<p>$numbers[9]</p>";

    $size= count($numbers);
    echo "<p>Array Numbers is size: $size</p>";

    for($counter=0;$counter<count($numbers);$counter++){
        echo $numbers[$counter];
        echo '<br/>';
    }



?>
    
    <?php require 'includes/footer.php'?>
