<?php

function calculateArea($width , $length){
    $area = $width * $length;
    return $area;
}

echo "The area of a rectangle with a width of 10 and 6 is ". calculateArea(10,6);
?>