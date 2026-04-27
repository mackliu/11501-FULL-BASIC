<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>尋找字元</title>
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

        .result {
            background: rgba(255, 255, 255, 0.15);
            padding: 15px;
            border-radius: 8px;
            color: white;
            font-size: 1rem;
            line-height: 1.6;
            margin-top: 20px;
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
    <h2>尋找字元 (使用 while)</h2>
    <div class="result">
    <?php 
    $str="川普隨後回白宮舉行記者會，自嘲總統是危險職業，他也坦承危險威脅日增，但無意減少公開露面行程";
    $target="生日快樂";

    echo "字串: " . $str . "<br>";
    echo "尋找的字: " . $target . "<br>";

    $pos=0;
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
    </div>
    <a href="index.html" class="back-button">返回首頁</a>
</div>

</body>
</html>