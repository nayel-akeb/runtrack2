<?php
$nombre = 0;
$goal = 1337;
$lavie = 42;
while ($nombre <= $goal) {

    if($nombre == $lavie)
    { 
        echo '<b>'.'<u>' .$nombre . '</b>'.'</u>'.'<br>';
        $nombre = $nombre+1;
    }
    else {
        echo $nombre.'<br>';
        $nombre = $nombre+1;
    }
}