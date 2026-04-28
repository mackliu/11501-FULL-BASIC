<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>五百年內的閏年 - PHP 學習</title>
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

        .content ul {
            margin-left: 20px;
            margin-bottom: 20px;
        }

        .content li {
            margin-bottom: 8px;
            color: #333;
        }

        .result-box {
            background: #f5f5f5;
            padding: 20px;
            border-left: 4px solid #667eea;
            border-radius: 4px;
            margin: 20px 0;
            line-height: 2;
        }

        .check-year {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 15px;
            border-radius: 8px;
            margin-top: 20px;
            text-align: center;
            font-weight: bold;
            font-size: 1.1rem;
        }

        hr {
            border: none;
            border-top: 2px solid #667eea;
            margin: 20px 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="header-content">
                <h1>📅 13 - 五百年內的閏年</h1>
                <p>找出閏年並檢查指定年份</p>
            </div>
            <a href="index.html" class="back-button">← 返回首頁</a>
        </div>
        <div class="content">
            <h2>📆 五百年內的閏年</h2>
            <h3>練習目標</h3>
            <ul>
                <li>請依照閏年公式找出五百年內的閏年</li>
                <li>使用陣列來儲存閏年</li>
                <li>使用迴圈來印出閏年</li>
            </ul>
            <h3>閏年列表 (2026 ~ 2525年)</h3>
            <div class="result-box">
            <?php 
            $year = 2026;
            $years= [];
            for($i=$year;$i<$year+500;$i++){
                if(($i % 4== 0 && $i % 100 != 0) OR $i %400 ==0){
                    $years[]= $i;
                }
            }
            foreach($years as $idx => $leap_year){
                echo "$leap_year ";
                if(($idx+1) % 10 == 0){
                    echo "<br>";
                }
            }
            ?>
            </div>
            <h3>年份檢查</h3>
            <div class="check-year">
                <?php 
                $the_year = 2400;
                if(in_array($the_year,$years)){
                    echo "✓ $the_year 是閏年";
                }else{
                    echo "✗ $the_year 不是閏年";
                }
                ?>
            </div>
        </div>
    </div>
</body>
</html>