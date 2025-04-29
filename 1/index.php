<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 4</title>
    <link href="styles.css" rel="stylesheet" >
</head>
<body>
<div class = "chickenjockey">
<h1>ÍMPAR OU PAR</h1>
<form method="post">
    <button type="submit" name="sortear">Girar</button>
</form>
<?php
$nuns = [rand(0, 99), rand(0, 99), rand(0, 99), rand(0, 99), rand(0, 99), rand(0, 99), rand(0, 99), rand(0, 99), rand(0, 99), rand(0, 99)];
$par = "Os números pares são: ";
$imp = "Os números ímpares são: ";

for($i = 0; $i < count($nuns); $i++)
{
    if($nuns[$i]%2==0)
    {
        $par .= "- $nuns[$i] ";
    }else{
        $imp .= "- $nuns[$i] ";
    }
}

echo "$par<br>";
echo "$imp<br>";

?>
</div>
</body>
</html> 