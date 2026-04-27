<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>產生數列</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', 'Microsoft JhengHei', sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            padding: 40px 20px;
        }

        .container {
            max-width: 900px;
            margin: 0 auto;
            background: rgba(255, 255, 255, 0.1);
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.2);
        }

        h2 {
            color: white;
            font-size: 1.8rem;
            margin-bottom: 20px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        }

        h3 {
            color: white;
            font-size: 1.3rem;
            margin-top: 25px;
            margin-bottom: 10px;
        }

        .result {
            background: rgba(255, 255, 255, 0.15);
            padding: 15px;
            border-radius: 8px;
            color: white;
            font-size: 1rem;
            line-height: 1.6;
        }

        .back-button {
            display: inline-block;
            margin-top: 30px;
            padding: 12px 24px;
            background: white;
            color: #667eea;
            text-decoration: none;
            border-radius: 8px;
            font-weight: 600;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        .back-button:hover {
            background: #667eea;
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>
<body>

<div class="container">
    <h2>使用 for 迴圈來產生以下的數列</h2>

        <h3>1,3,5,7,9……n</h3>
    <div class="result">
    <?php 
    $n=100;
    for($i=1;$i<=$n;$i+=2){
        echo $i." ";
    }
    ?>
    </div>

    <h3>10,20,30,40,50,60……n</h3>
    <div class="result">
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
    </div>
    <h3>3,5,7,11,13,17……97</h3>
    <div class="result">
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
    ?>
    </div>
    <a href="index.html" class="back-button">返回首頁</a>
</div>

</body>
</html>