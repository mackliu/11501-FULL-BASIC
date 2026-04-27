<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>尋找字元</title>
</head>
<body>
<h2>尋找字元(使用while)</h2>    
<ul>
    <li>給定一個字串句子</li>
    <li>給定一個單字或字母</li>
    <li>尋找相符的內容</li>
    <li>印出尋找到的單字或字母所在句子中的位置</li>
</ul>
<?php 
$str="川普隨後回白宮舉行記者會，自嘲總統是危險職業，他也坦承危險威脅日增，但無意減少公開露面行程";
$target="生日快樂";

echo "字串: " . $str . "<br>";
echo "尋找的字: " . $target . "<br>";

$pos=0;
/* 1. 怎麼知道字串有多長 => mb_strlen()
2. 怎麼只取兩個字 => mb_substr()
3. 如何算位置? => $pos +1 
 */
$count=0;
$flag=false;
while($pos < mb_strlen($str)-mb_strlen($target)+1){
    $tmp=mb_substr($str,$pos,mb_strlen($target));
    if($tmp==$target){
        echo "找到了，位置在: " . ($pos+1) . "<br>";
        $flag=true;
    }
    $pos++;
    $count++;
}
if(!$flag){
    echo "沒有找到<br>";
}
echo "總共尋找了: " . $count . " 次<br>";

?>

</body>
</html>