<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>陣列 - PHP 學習</title>
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

        .header-content p {
            color: rgba(255, 255, 255, 0.9);
            font-size: 0.95rem;
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

        .content h2 {
            color: #667eea;
            font-size: 1.8rem;
            margin-bottom: 20px;
            border-bottom: 3px solid #667eea;
            padding-bottom: 15px;
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

        table {
            border-collapse: collapse;
            border: 2px solid #667eea;
            background-color: #f9f9f9;
            margin: 20px 0;
            width: 100%;
        }

        table thead {
            background-color: #667eea;
            color: white;
        }

        td, th {
            border: 1px solid #ddd;
            text-align: center;
            padding: 12px 10px;
        }

        tr:nth-child(even) {
            background-color: #f5f5f5;
        }

        tr:hover {
            background-color: #e8e8ff;
        }

        img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
            margin: 20px 0;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="header-content">
                <h1>📚 10 - 陣列</h1>
                <p>設計一個陣列(一維或多維)來存放學生的成績資料</p>
            </div>
            <a href="index.html" class="back-button">← 返回首頁</a>
        </div>
        <div class="content">
            <h2>📊 學生成績表</h2>
            <img src="array.png" style="width:300px;">
<?php

$students=[
    "judy"=>[
        "國文"=>95,
        "英文"=>64,
        "數學"=>70,
        "地理"=>90,
        "歷史"=>84
        ],
    "amo"=>["國文"=>88,"英文"=>78,"數學"=>54,"地理"=>81,"歷史"=>71],
    "john"=>["國文"=>45,"英文"=>60,"數學"=>68,"地理"=>70,"歷史"=>62],
    "peter"=>["國文"=>59,"英文"=>32,"數學"=>77,"地理"=>54,"歷史"=>42],
    "hebe"=>["國文"=>71,"英文"=>62,"數學"=>80,"地理"=>62,"歷史"=>64],
];

echo "<table>";
echo "<thead><tr>";
echo "<th>姓名</th>";
echo "<th>國文</th>";
echo "<th>英文</th>";
echo "<th>數學</th>";
echo "<th>地理</th>";
echo "<th>歷史</th>";
echo "</tr></thead><tbody>";
foreach($students as $student => $scores){
   echo "<tr><td><strong>$student</strong></td>";
   foreach($scores as $score){
       echo "<td>$score</td>";
   }
    echo "</tr>";
}
echo "</tbody>";


echo "</table>";
?>
        </div>
    </div>
</body>
</html>
</body>
</html>