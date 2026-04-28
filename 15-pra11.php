<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>反轉陣列</title>
</head>
<body>
    <h2>請設計一支程式，在不產生新陣列的狀況下，將一個陣列的元素順序反轉(利用迴圈)</h2>
<p>例：$a=[2,4,6,1,8] 反轉後 $a=[8,1,6,4,2]</p>
<?php 
$a=[2,4,6,1,8,11];

echo "<pre>";
print_r($a);
echo "</pre>";

for($i=0;$i<count($a)/2;$i++){
    $max_idx=count($a)-1;
    $tmp=$a[$i];
    $a[$i]=$a[$max_idx-$i];
    $a[$max_idx-$i]=$tmp;
/*     echo "<pre>";
    print_r($a);
    echo "</pre>";
    echo "<br>"; */

}
echo "<pre>";
print_r($a);
echo "</pre>";


?>

</body>
</html>