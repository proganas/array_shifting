<?php

$x = array(
    array('1', '2', '3'),
    array('4', '5', '6'),
    array('7', '8', '9')
);

foreach ($x as $key => $value) {
    for ($i = 0; $i <= $key; $i++) {
        array_unshift($x[$key], $x[$key][count($value) - 1]);
        array_pop($x[$key]);
    }
}

echo "<pre>";
print_r($x);
