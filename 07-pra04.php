<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>九九乘法表</title>
    <style>
        .table1{
            border-collapse:collapse;
        }
        .table1 td{
            border:1px solid black;
            padding:5px 10px;
        }
    </style>
</head>
<body>
<h2>九九乘法表</h2>    
<img src="99.png" alt="">
<?php 

echo "<table class='table1'>";
for($j=1 ;$j<=9;$j++){
    echo "<tr>";
    for($i=1;$i<=9;$i++){
        echo "<td>";
        echo $i . " x  $j = ". ($j*$i);
        echo "</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>


<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>

</body>
</html>