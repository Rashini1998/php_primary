<?php 
$title="While and Do-while Loop";
include 'includes/header.php'?>

<h1 style="color:red">While Loop</h1>
<?php
$grade=0;
//pre- condition loop
    while($grade<10){
        echo '<p style="color: blue">I am less than 10.</p>';
        $grade++;
    }
    echo 'EXIT LOOP!!';

?>

<h1 style="color:Red">Do-while Loop</h1>
<?php
   //post-condition loop
   $grade=0;
    do{
        echo '<p style="color:pink">I am do-while loop.</p>';
        $grade++;
    }while($grade<10);
    echo 'EXIT LOOP!';

?>

<?php require 'includes/footer.php'?>
