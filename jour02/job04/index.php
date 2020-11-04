<?php
$nombre = 1;
$goal = 100;
while ($nombre <= $goal) {
    if ($nombre %3 == 0 AND $nombre %5 == 0)
    {
        echo 'FizzBuzz <br>';
        $number++;
    }

    elseif ($nombre %3 == 0)
    {
        echo 'Fizz <br>';
        $number++;
    }

    elseif ($nombre %5 ==0)
    {
        echo  'Buzz <br>';
        $number++;
    }
    else
    {
        echo $nombre. '<br>';
        $nombre++;
    }
}