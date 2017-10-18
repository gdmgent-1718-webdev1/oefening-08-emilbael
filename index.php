<?php
    function grijstint(){
        for($i = 50; $i >1; $i--){
            $j = 5 * $i;
            echo ("<div class='vierkant' style='background-color:rgb(${j},${j},${j})'></div>"). PHP_EOL;
            
        }
    }
    grijstint();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<style>
body{
    width :350px;
}
.vierkant{
    float:left;
    width: 40px;
    height:40px;
    display:block;
    margin: 1%;
}
</style>
    
</body>
</html>