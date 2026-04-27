<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>閏年判斷</title>
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
            color: white;
        }

        .container {
            max-width: 900px;
            margin: 0 auto;
            background: rgba(255, 255, 255, 0.1);
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        }

        h2 {
            font-size: 1.8rem;
            margin-bottom: 20px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        }

        ul {
            margin-bottom: 20px;
            padding-left: 20px;
        }

        ul li {
            margin-bottom: 10px;
            line-height: 1.6;
        }

        .result {
            font-size: 1.2rem;
            font-weight: bold;
            text-align: center;
            margin-top: 20px;
            padding: 10px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 8px;
        }

        .back-button {
            margin-top: 20px;
            padding: 10px 20px;
            background: #f4f4f4;
            border: 1px solid #ccc;
            border-radius: 8px;
            color: #333;
            text-decoration: none;
            font-size: 1rem;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>閏年判斷，給定一個西元年份，判斷是否為閏年</h2>

        <ul>
            <li>地球對太陽的公轉一年的真實時間大約是365天5小時48分46秒，因此以365天定為一年 的狀況下，每年會多出近六小時的時間，所以每隔四年設置一個閏年來消除這多出來的一天。</li>
            <li>公元年除以4不可整除，為平年。</li>
            <li>公元年除以4可整除但除以100不可整除，為閏年。</li>
            <li>公元年除以100可整除但除以400不可整除，為平年。</li>
        </ul>

        <?php 
        $year = 2000;

        $result = "";

        if(($year % 4== 0 && $year % 100 != 0) OR $year %400 ==0){
            $result= "閏年";
        }else{
            $result="平年";
        }

        echo "<div class='result'>西元 $year 年是 $result</div>";
        ?>
    </div>

    <a href="index.html" class="back-button">返回首頁</a>
</body>
</html>