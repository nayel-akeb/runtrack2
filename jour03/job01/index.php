<?php
$nombre=array(200, 204, 173, 98, 171, 404, 459);
for($i=0; $i!=count($nombre); $i++)
{
    if($nombre[$i] % 2 == 0)
    {
        echo $nombre[$i]. ' est pair<br/>';

    }
    else
    {
      echo $nombre[$i]. ' est impair<br/>';
    }
}