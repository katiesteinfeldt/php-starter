<?php
    function calculateDistance($first, $second){
 return abs($first - $second);
}

function calculateTip($cost){
  return round(($cost * .18) + $cost);
}

echo calculateTip(20);
echo "\n";
?>