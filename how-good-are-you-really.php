<?php
// https://www.codewars.com/kata/5601409514fc93442500010b

function betterThanAverage($classPoints, $yourPoints)
{
    $average = array_sum($classPoints)/count($classPoints);
    if ($average < $yourPoints) {
        return true;
    }
    return false;
}

?>