<!DOCTYPE html>
<html>
    <head> 
        <meta charset= "utf-8">
        <title>Tentative de tableau </title>
        <meta name = "author"
		content = "Nayel Akeb" >
	<meta name = "description"
		content = "Aujourd'hui j'essaye de faire un tableau en combinant le HTML et le PHP  " >
</head>
<body>
<main>

<?php

$bool=true;
$str= 'Hello ';
$int= 42;
$float= 4.2;

;?>


<table>
    <tr>
        <th>Name</th>
        <th>Value</th>
        <th>Type</th>
    </tr>
    <tr>    
        <td> <?php echo gettype($bool) ?> </td>
        <td> <?php echo $bool ?> </td>
        <td> <?php echo '$bool' ?> </td>
    </tr>   
    <tr>    
        <td> <?php echo gettype($str) ?> </td>
        <td> <?php echo $str ?> </td>
        <td> <?php echo '$str' ?> </td>
    </tr>
    <tr>    
        <td> <?php echo gettype($int) ?> </td>
        <td> <?php echo $int ?> </td>
        <td> <?php echo '$int' ?> </td>
    </tr>
    <tr>    
        <td> <?php echo gettype($float) ?> </td>
        <td> <?php echo $float ?> </td>
        <td> <?php echo '$float' ?> </td>
    </tr>
</table>
</main>
</body>
</html>