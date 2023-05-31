<?php

$x = array(
    array('1', '2', '3'),
    array('4', '5', '6'),
    array('7', '8', '9')
);

array_unshift($x[0], $x[0][2]);
array_pop($x[0]);

array_unshift($x[1], $x[1][2]);
array_pop($x[1]);

array_unshift($x[1], $x[1][2]);
array_pop($x[1]);

echo "<pre>";
print_r($x);