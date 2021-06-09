
<?php 
$title="Index";
include 'includes/header.php'?>

<h1>Hello HTML</h1>
<?php
//Printing to HTML using echo
    echo 'Hello PHP';
    echo '<br/>';
    echo 'Second line';
?>

<?php
    $name = 'Rashini Gamalath';
    $age =23;

    echo '<br/>'. $name;
    echo '<br/>';
    echo '<h1>My name is: '.$name.'</h1>';
    echo '<h1>My age is: '.$age.'</h1>';

    echo "<h1>My name is: $name</h1>";

?>
<button type="button" class="btn btn-dark">CLICK ME!</button>
<?php require 'includes/footer.php'?>

