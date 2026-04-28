<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>陣列</title>
</head>
<body>
<H2>陣列</H2>    
<H3>設計一個陣列(一維或多維)來存放學生的成績資料</H3>
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
<img src="array.png" style="width:300px;">
<?php

$students=[
    "judy"=>[
        "國文"=>95,
        "英文"=>64,
        "數學"=>70,
        "地理"=>90,
        "歷史"=>84
        ],
    "amo"=>["國文"=>88,"英文"=>78,"數學"=>54,"地理"=>81,"歷史"=>71],
    "john"=>["國文"=>45,"英文"=>60,"數學"=>68,"地理"=>70,"歷史"=>62],
    "peter"=>["國文"=>59,"英文"=>32,"數學"=>77,"地理"=>54,"歷史"=>42],
    "hebe"=>["國文"=>71,"英文"=>62,"數學"=>80,"地理"=>62,"歷史"=>64],
];

echo "<table>";
echo "<tr>";
echo "<td></td>";
echo "<td>國文</td>";
echo "<td>英文</td>";
echo "<td>數學</td>";
echo "<td>地理</td>";
echo "<td>歷史</td>";
echo "</tr>";
foreach($students as $student => $scores){
   echo "<tr><td>$student</td>";
   foreach($scores as $score){
       echo "<td>$score</td>";
   }
    echo "</tr>";
}


echo "</table>";
?>
</body>
</html>