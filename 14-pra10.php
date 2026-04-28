<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>西元年 <=> 天干地支年</title>
</head>
<body>
<h2>已知西元1024年為甲子年，請設計一支程式，可以接受任一西元年份，輸出對應的天干地支的年別。(利用迴圈)</h2>

<ul>
    <li>天干：甲乙丙丁戊己庚辛壬癸</li>
    <li>地支：子丑寅卯辰巳午未申酉戌亥</li>
    <li>天干地支配對：甲子、乙丑、丙寅….甲戌、乙亥、丙子….</li>
</ul>
<?php 
$year =2026;
$heavenly_stems = ["甲", "乙", "丙", "丁", "戊", "己", "庚", "辛", "壬", "癸"];
$earthly_branches = ["子", "丑", "寅", "卯", "辰", "巳", "午", "未", "申", "酉", "戌", "亥"];

$diff=$year-1024;
$idx=$diff%60;

$sky=$heavenly_stems[$idx%10];
$earth=$earthly_branches[$idx%12];

echo "西元{$year}年是{$sky}{$earth}年。";

?>

</body>
</html>