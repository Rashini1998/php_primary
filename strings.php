<?php
$title="Strings";
include 'includes/header.php'?>

<h1>String Manipulation</h1>
<?php
//concatenation of string
    $phrase1 ="Student who came late";
    $phrase2 ="in class, stand with Rock";
    $name="rashini gamalath";

    echo $phrase1 .",named Rashini, ". $phrase2;
    echo '<br/>';
    echo '<hr/>';

    //string transformation
    echo 'Uppercase first letter: '.ucfirst($name).'<br/>';
    echo 'Uppercase first letter of each word: '.ucwords($name).'<br/>';
    echo 'Uppercase: '. strtoupper($name).'<br/>';
    echo 'Lowercase: '. strtolower($name).'<br/>';
    echo '<hr/>';
    echo 'Repeat string: '.strtoupper( str_repeat('a',10)) . '<br/>';
    echo 'Repeat string: '. str_repeat('a',10) . '<br/>';
    echo 'Get a substring: '. substr($name,5,10).'<br/>';
    echo 'Get position of string: '. strpos($name,'h').'<br/>';
    echo 'Length: '. strlen($name).'<br/>';
    echo 'Without trim: '. 'A' ."B C D" . "E" . '<br/>';
    echo 'Trim spaces on both sides: '. 'A' . trim(" B C D "). '<br/>';

    echo 'Replace string with another: '. str_replace("stand","sit",$phrase2). '<br/>';

?>
<?php require 'includes/footer.php'?>
