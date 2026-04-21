<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>練習題</title>
</head>
<body>
<h3>分配成績等級</h3>

<ul>
    <li>給定一個成績數字，根據成績所在的區間，給定等級</li>
    <li>0 ~ 59 => E</li>
    <li>60 ~ 69 => D</li>
    <li>70 ~ 79 => C</li>
    <li>80 ~ 89 => B</li>
    <li>90 ~ 100 => A</li>
</ul>
<?php
$score=132;
$level='';

if($score>=0 && $score<60){
    $level="E";
}else if($score>=60 && $score<70){
    $level="D";
}else if($score>=70 && $score<80){
    $level="C";
}else if($score>=80 && $score<90){
    $level="B";
}else if($score>=90 && $score<=100){
    $level="A";
}else{
    $level="成績輸入錯誤";
}

echo $level;
?>

<h3>簡化寫法</h3>

<?php
$score=82;
$level='';
if($score<0 || $score >100){
    $level="成績輸入錯誤";
}else if($score<60){
    $level="E";
}else if($score<70){
    $level="D";
}else if($score<80){
    $level="C";
}else if($score<90){
    $level="B";
}else if($score<=100){
    $level="A";
}


?>

<h3>依據學生成績等級給予評價</h3>

<div>根據學生不同的成績等級在網頁上印出不同的文字評價</div>

<?php
echo "成績為：" . $score . "分 <br>";
echo "成績等級為：" . $level . "<br>";

echo "評語：";

switch($level){
    case "A":
        echo "表現優良，請繼續保持";
    break;
    case "B":
        echo "值得肯定，還有進步空間";
    break;
    case "C":
        echo "需要更多的練習";
    break;
    case "D":
        echo "需要加強基本功";
    break;
    default:
        echo "是否無心學業?";

}
?>

</body>
</html>