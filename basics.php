<?php

$roomLength = 5; // длина
$roomWidth = 3; // ширина
$roomHeight = 4; // высота
$ceilingFinishCost = 175; // при цене 175 за м2
$flooringCost = 350; // при цене 350 за м2
$wallPlasteringCost = 200; // при цене 200 за м2

$floorAndCeilingArea = 5 * 3;
$WallArea = 4 * 5;
$ceilingFinishCost = 175 * 15;
$flooringCost = 350 * 15;
$wallPlasteringCost = 200 * 20;


echo "Floor and ceiling area: {$floorAndCeilingArea}. <br />";
echo "Wall area: {$WallArea}. <br />";
echo "Ceiling finish cost: {$ceilingFinishCost}. <br />";
echo "Flooring cost: {$flooringCost}. <br />";
echo "Wall plastering cost: {$wallPlasteringCost} <br />";