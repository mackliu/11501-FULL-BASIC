<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>重覆結構</title>
</head>
<body>
<h3>For...loop 練習</h3>    
<?php

for($i=1;$i<=10;$i=$i+1){
    echo "$i =>";
    echo $i * 10 . "<br>";
    
}

echo $i;

?>
<h3>For...loop 練習（遞增為2）</h3>
<?php

for($i=1;$i<=10;$i=$i+2){
    echo "$i =>";
    echo $i * 10 . "<br>";
    
}

echo $i;

?>
<h3>For...loop 練習（顯示為奇/偶數）</h3>
<?php

for($i=0;$i<10;$i=$i+1){
    echo "$i =>";
    echo $i * 2 . "<br>";
    if($i*2>=10){
        break;
    }
    
}

echo $i;

?>
<h3>For...loop 練習（顯示為奇/偶數）</h3>
<?php

for($i=0;$i<10;$i=$i+1){
    echo "$i =>";
    echo $i * 2 +1 . "<br>";
    if(($i*2+1)>=10){
        break;
    }
    
}

echo $i;

?>
<h3>WHILE loop 練習</h3>
<?php
$score=43;

echo "成績為：" . $score . "分 <br>";
$count=0; //計算迴圈執行次數
while($score<60){
    $score=$score+10;
    $count=$count+1;
}

echo "登錄成績為：" . $score . "分 <br>";
echo "迴圈執行次數：" . $count . "次 <br>";


?>

<h3>foreach練習</h3>
<?php 
$score=[60,22,72,10,80];

foreach($score as $idx => $val){
    echo '第' . ($idx+1) . '位同學的成績為' . $val . '<br>';
}

for($i=0;$i<count($score);$i=$i+1){

    echo '第' . ($i+1) . '位同學的成績為' . $score[$i] . '<br>';

}

?>

<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
</body>
</html>