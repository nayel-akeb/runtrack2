<?php

 $str = 'On n est pas le meilleur quand on le croit mais quand on le sait.' ;
 $str = str_replace(CHR(32),"",$str);
 $dic = array
 (
     'voyelles' => 0,
    'consonnes' => 0
 );
 $voyelles = array ('a', 'e', 'i', 'o', 'u', 'y', 'A', 'E', 'I', 'O', 'U', 'Y');

 for ($i = 0 ; $i < strlen($str) ; $i ++)
    {
        if (in_array($str[$i], $voyelles))
        {
             $dic ['voyelles']++;
        }

        else
        {
             $dic ['consonnes']++;
        }
    }
 ?>
 <table>
    <tr>
        <th>Voyelles</th>
        <th>Consonnes</th>
    </tr>
    <tr>
        <td>
            <?php echo $dic ['voyelles']. '<br/>';?>
        </td>
        <td>
            <?php echo $dic ['consonnes'] ;?>
        </td>
    </tr>
 </table>
