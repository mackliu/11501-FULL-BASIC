<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>利用程式來產生陣列</h2>

<ul>
    <li>以迴圈的方式產生一個九九乘法表</li>
    <li>將九九乘法表的每個項目以字串型式存入陣列中</li>
    <li>再以迴圈方式將陣列內容印出</li>
</ul>
<h3>以迴圈的方式產生一個九九乘法表</h3>
<?php 
$nine=[];
for($i=1;$i<=9;$i++){
    for($j=1;$j<=9;$j++){

        $nine[]="$i x $j = ".($i*$j);

    }
}
echo "<pre>";
print_r($nine);
echo "</pre>";
?>
<style>
    table{
        border-collapse: collapse;
        border:3px double black;
        background-color: white;
    }
    td{
        border:1px solid black;
        text-align: center;
        padding:5px 10px;
    }
</style>
<table>
    <tr>
<?php 
foreach($nine as $idx => $item){
    if($idx>0 && $idx%9==0){
        echo "</tr><tr><td>$item</td>";

    }else{
        echo "<td>$item</td>";
    }

}


?>
</tr>
</table>   

</body>
</html>