<?php 
$title="If Statement";
include 'includes/header.php'?>

<h3 style="color: green"></h3>
<?php

echo '<h2>If statement</h2>';
$grade=50;
if($grade>=50){
    echo '<h3 style="color: green">YOU HAVE PASSED</h3>';
}
else{
    echo '<h3 style="color: red">YOU HAVE FAILED</h3>';
}
//If-Else If-Else

$grade='C';
if($grade=='A' ){
    echo '<h2 style="color: purple">YOU ARE A SUPERSTAR</h2>';
}else if($grade=='B')
{
    echo '<h2 style="color: pink">YOU ARE GOOD</h2>';
}else{
    echo '<h2 style="color: blue">YOU ARE FAIL....</h2>';
}
?>
<?php require 'includes/footer.php'?>
