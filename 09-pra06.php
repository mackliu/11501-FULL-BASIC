<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>畫星星</title>
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
            font-family: 'Courier New', Courier, monospace;
            font-size: 1rem;
            line-height: 1.8;
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
    <h2>以 * 符號為基礎在網頁上排列出下列圖形:</h2>

    <div class="result">
        <h3>直角三角型</h3>
        <?php 
        for($i=0;$i<5;$i++){
            for($j=0;$j<=$i;$j++){
                echo "*";
            }
            echo "<br>";
        }

        echo "<hr style='border: 1px solid rgba(255,255,255,0.3); margin: 15px 0;'>";

        for($i=0;$i<5;$i++){
            for($j=0;$j<5;$j++){
                if($i>=$j){
                    echo "*";
                }
            }
            echo "<br>";
        }
        ?>

        <h3 style="margin-top: 20px;">倒直角三角型</h3>
        <?php 
        for($i=5;$i>0;$i--){
            for($j=0;$j<$i;$j++){
                echo "*";
            }
            echo "<br>";
        }
        ?>

        <h3 style="margin-top: 20px;">正三角型</h3>
        <?php 
        for($i=0;$i<5;$i++){
            for($j=0;$j<4-$i;$j++){
                echo "&nbsp;";
            }
            for($k=0;$k<2*$i+1;$k++){
                echo "*";
            }
            echo "<br>";
        }
        ?>

        <h3 style="margin-top: 20px;">菱型</h3>
        <h3>矩形</h3>
        <h3>內含對角線的矩形</h3>
    </div>
    <a href="index.html" class="back-button">返回首頁</a>
</div>

</body>
</html>