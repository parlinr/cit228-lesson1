<?php
echo <<<END
<table>
    <tr>
        <th>Celsius</th>
        <th>Fahrenheit</th>
    </tr>

END;
$counter = 0;
function celsiusToFahrenheit($celsius) {
    return 9/5 * ($celsius + 32);
}
for ($counter; $counter < 10; $counter++) {
    echo "<tr><td>".($counter * 5)."</td><td>".celsiusToFahrenheit(($counter * 5))."</td></tr>";
}
    
echo "</table>";    

?>