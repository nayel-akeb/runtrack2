<?php

$str= 'Dans l\'espace, personne ne vous entend crier.';
$i = 0;
while(@$str[$i]) {
    $i++;
}
echo 'Il y a ' . $i . ' caracteres dans cette phrase.';


