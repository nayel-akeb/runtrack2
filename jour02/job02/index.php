<?php
$nombre = 0;
$goal = 1337;
$exception1 = 26;
$exception2 = 37;
$exception3 = 88;
$exception4 = 1111;
$exception5 = 3233;
while ($nombre <= $goal) {

    if($nombre != $exception1 and $nombre != $exception2 and $nombre != $exception3 and $nombre != $exception4 and $nombre != $exception5)

    { 
        echo $nombre.'<br>';
        $nombre = $nombre+1;
        
    }
    else {
        $nombre = $nombre+1;
        
    }
}