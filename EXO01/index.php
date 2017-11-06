<?php
$h = date("H");
$m = date("i");
switch(true){
    case ($h >= 05 && $h <= 09): echo "Bonjour !"; break;
    case ($h >= 09 && $m >= 01): echo "Bonne journée !"; break;
    case ($h >= 12 && $m >= 01): echo "Bon après-midi !"; break;
    case ($h >= 16 && $m >= 01): echo "Bonne soirée !"; break;
    case ($h >= 21 && $m >= 01): default: echo "Bonne nuit !"; break;
}
?>