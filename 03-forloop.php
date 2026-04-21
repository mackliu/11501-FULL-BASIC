<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For Loop 迴圈</title>
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
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 40px;
            flex-wrap: wrap;
            gap: 20px;
        }

        .header-content h1 {
            font-size: 2rem;
            color: white;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        }

        .back-button {
            display: inline-block;
            padding: 12px 24px;
            background: white;
            color: #667eea;
            text-decoration: none;
            border-radius: 8px;
            font-weight: 600;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            border: 2px solid white;
        }

        .back-button:hover {
            background: transparent;
            color: white;
            transform: translateX(-5px);
        }

        .content {
            background: white;
            border-radius: 12px;
            padding: 40px;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
            line-height: 1.8;
        }

        .content h3 {
            color: #667eea;
            margin-top: 30px;
            margin-bottom: 15px;
            font-size: 1.3rem;
            border-bottom: 2px solid #667eea;
            padding-bottom: 10px;
        }

        .content h3:first-child {
            margin-top: 0;
        }

        .code-output {
            background: #f5f5f5;
            padding: 15px;
            border-left: 4px solid #667eea;
            border-radius: 4px;
            margin: 10px 0;
            font-family: 'Courier New', monospace;
            color: #333;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="header">
        <div class="header-content">
            <h1>📚 03 - For Loop 迴圈</h1>
            <p style="color: rgba(255,255,255,0.9);">深入學習迴圈結構</p>
        </div>
        <a href="index.html" class="back-button">← 返回首頁</a>
    </div>

    <div class="content">
        <h3>For...loop 練習</h3>
        <div class="code-output">    
<?php

for($i=1;$i<=10;$i=$i+1){
    echo "$i =>";
    echo $i * 10 . "<br>";
    
}

echo $i;

?>
        </div>
        <h3>For...loop 練習（遞增為2）</h3>
        <div class="code-output">
<?php

for($i=1;$i<=10;$i=$i+2){
    echo "$i =>";
    echo $i * 10 . "<br>";
    
}

echo $i;

?>
        </div>
        <h3>For...loop 練習（顯示為奇/偶數）</h3>
        <div class="code-output">
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
        </div>
        <h3>For...loop 練習（顯示為奇/偶數 - 進階）</h3>
        <div class="code-output">
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
        </div>
        <h3>WHILE loop 練習</h3>
        <div class="code-output">
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
        </div>
        <h3>Foreach 練習</h3>
        <div class="code-output">
<?php 
$score=[60,22,72,10,80];

foreach($score as $idx => $val){
    echo '第' . ($idx+1) . '位同學的成績為' . $val . '<br>';
}

for($i=0;$i<count($score);$i=$i+1){

    echo '第' . ($i+1) . '位同學的成績為' . $score[$i] . '<br>';

}

?>
        </div>
    </div>
</div>
</body>
</html>