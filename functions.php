<?php 
$title="Functions";
include 'includes/header.php'?>

<h1>Functions</h1>
<?php
    /*Defining a function */
    function writeMessage($name){
        echo "$name you are very nice.<br/>";
    }

    writeMessage("Rashini");
    echo '<hr/>';
    writeMessage("Rashini");
    echo '<hr/>';
    writeMessage("Rashini");
    echo '<hr/>';
    
    function addNumbers($num1,$num2){
        $sum=$num1+$num2;
        echo "Addition of $num1 and $num2: $sum<br/>";
    }

    function changeNumber($num){
        $num =$num+10;
        addNumbers($num,50);
    }
    changeNumber(10);
   
?>

<?php require 'includes/footer.php'?>
