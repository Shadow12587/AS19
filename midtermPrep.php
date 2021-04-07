<?php
$arr = array (
1 => "ant",
2 => "grasshopper",
"three" => "butterfly"
);

echo '<select>';

foreach ($arr as $value) {
 echo ('<option value='. $value.'>'.$value.'</option>');   
} 

echo '</select>';
?>