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
<hr>
<?php 

echo "<table class='table1'>";
echo "<tr style='background-color:#eee'>";
echo "    <td></td>";
echo "    <td>1</td>";
echo "    <td>2</td>";
echo "    <td>3</td>";
echo "    <td>4</td>";
echo "    <td>5</td>";
echo "    <td>6</td>";
echo "    <td>7</td>";
echo "    <td>8</td>";
echo "    <td>9</td>";
echo "</tr>";

for($j=1 ;$j<=9;$j++){
    echo "<tr>";
    echo "<td style='background-color:#eee'> $j </td>";
    for($i=1;$i<=9;$i++){
        echo "<td>";
        echo ($j*$i);
        echo "</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>
<hr>
<?php 

echo "<table class='table1'>";
echo "<tr style='background-color:#eee'>";
echo "    <td></td>";
echo "    <td>1</td>";
echo "    <td>2</td>";
echo "    <td>3</td>";
echo "    <td>4</td>";
echo "    <td>5</td>";
echo "    <td>6</td>";
echo "    <td>7</td>";
echo "    <td>8</td>";
echo "    <td>9</td>";
echo "</tr>";

for($j=1 ;$j<=9;$j++){
    echo "<tr>";
    echo "<td style='background-color:#eee'> $j </td>";
    for($i=1;$i<=9;$i++){
        echo "<td>";
        if($i<=$j){
            echo ($j*$i);
        }
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