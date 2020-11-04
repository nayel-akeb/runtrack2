<?php
$nombre = 0;
$goal = 1000;
$nombre_verif = 1;
$multiple= 0;
while ($nombre <= $goal) {
    while ($nombre_verif <= $nombre)
    {
       if($nombre % $nombre_verif == 0)
       {
       $multiple++;
       }

       $nombre_verif ++;
    }

     if ($multiple == 2)
     echo $nombre. '<br>';

   $nombre++;

}