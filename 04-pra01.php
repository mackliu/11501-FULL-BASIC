<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>綜合練習一</title>
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

        .content ul {
            margin-left: 30px;
            margin-bottom: 15px;
        }

        .content li {
            margin-bottom: 8px;
            color: #555;
        }

        .content div {
            background: #f9f9f9;
            padding: 10px;
            border-radius: 4px;
            margin-bottom: 10px;
            color: #666;
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
            <h1>📚 04 - 綜合練習一</h1>
            <p style="color: rgba(255,255,255,0.9);">知識驗證與應用</p>
        </div>
        <a href="index.html" class="back-button">← 返回首頁</a>
    </div>

    <div class="content">
        <h3>分配成績等級</h3>

        <ul>
    <li>給定一個成績數字，根據成績所在的區間，給定等級</li>
    <li>0 ~ 59 => E</li>
    <li>60 ~ 69 => D</li>
    <li>70 ~ 79 => C</li>
    <li>80 ~ 89 => B</li>
    <li>90 ~ 100 => A</li>
</ul>
        <div class="code-output">
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
        </div>

        <h3>簡化寫法</h3>
        <div class="code-output">
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
        </div>

        <h3>依據學生成績等級給予評價</h3>
        <div>根據學生不同的成績等級在網頁上印出不同的文字評價</div>
        <div class="code-output">
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
        </div>
    </div>
</div>
</body>
</html>