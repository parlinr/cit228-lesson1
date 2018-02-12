<?php
    $var1 = 42;
    $var2 = "Lorem ipsum";
    $var3 = [1, "red"];
    $var4 = true;
    $var5 = 5.6;

    echo("Is " .$var1 . " an integer: " . is_int($var1) . "<br>");
    echo("Is " .$var2 . " a bool: " .  is_bool($var2) ."<br>");
    echo("Is [1, 'red'] a string: " .is_string($var3)."<br>");
    echo("Is " .$var4 . " a bool: " .is_bool($var4)."<br>");
    echo("Is " .$var5 . " numeric: " .is_numeric($var5)."<br>");
?>