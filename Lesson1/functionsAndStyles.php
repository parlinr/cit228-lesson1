<?php
    function printBR($txt, $color, $size)
    {
        echo "<span style=\"color:$color;font-size:$size\">".$txt."</span><br>";
    }

    printBR("Lorem ipsum","red", "20pt");
    printBR("dolor sit","green","20pt");
    printBR("amet","blue","20pt");

?>