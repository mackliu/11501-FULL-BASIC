<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>產生數列</title>
</head>
<body>

<h2>使用for迴圈來產生以下的數列</h2>

<ul>
    <li>1,3,5,7,9……n</li>
    <li>10,20,30,40,50,60……n</li>
    <li>3,5,7,11,13,17……97</li>
</ul>

<h3>1,3,5,7,9……n</h3>
<?php 
$n=100;
for($i=1;$i<=$n;$i+=2){
    echo $i." ";
}

?>

<h3>10,20,30,40,50,60……n</h3>
<?php 
$n=10;
for($i=1; $i <=$n ;$i=$i+1){
    echo ($i*10) ." , ";
}
echo "<br>";
$n=100;
for($i=10; $i <= $n ;$i=$i+10){
    echo $i ." , ";
}
?>
<h3>3,5,7,11,13,17……97</h3>
<?php 
$n=300;
$count=0;
for($j=1;$j<=$n;$j++){

    $flag=true;
    for($i=2;$i<$j;$i++){
        $count++;
        if($j % $i==0){
            $flag=false;
            break;
        }
    }
    if($flag==true && $j>1){
        echo $j.", ";
    }

    $count++;
}

echo "<br>迴圈執行次數:".$count;
echo "<hr>";
$n=300;
$count=0;
for($j=1;$j<=$n;$j++){

    $flag=true;
    for($i=2;$i<=sqrt($j);$i++){
        $count++;
        if($j % $i==0){
            $flag=false;
            break;
        }
    }
    if($flag==true && $j>1){
        echo $j.", ";
    }

    $count++;
}

echo "<br>迴圈執行次數:".$count;

/* if($flag){
    echo $n."是質數";
}else{
    echo $n."不是質數";
}
 */

?>
<br>

</body>
</html>