

<?php 
$title= "Switch Statement";
include 'includes/header.php'?>


<?php
    $grade='B';
    switch($grade){
        case 'A':
            echo '<h2 style="color:green">YOU ARE A SUPERSTAR</h2>';
            break;
        case 'B':
            echo '<h2 style="color:blue">YOU ARE Fail</h2>';
            break;
        default:
            echo '<h2 style="color: red">You are fail...</h2>';


    }

?>
    
    <?php require 'includes/footer.php'?>
