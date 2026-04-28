<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>威力彩電腦選號 - PHP 學習</title>
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
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 25px;
            border-radius: 8px;
            margin: 20px 0;
            font-size: 1.2rem;
            font-weight: bold;
            text-align: center;
            box-shadow: 0 4px 15px rgba(102, 126, 234, 0.3);
        }

        .result-box .label {
            font-size: 1rem;
            opacity: 0.9;
            display: block;
            margin-bottom: 10px;
        }

        .result-box .number {
            font-size: 1.8rem;
            font-family: 'Courier New', monospace;
            letter-spacing: 8px;
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
                <h1>🎰 12 - 威力彩選號</h1>
                <p>電腦隨機選號，不重複號碼</p>
            </div>
            <a href="index.html" class="back-button">← 返回首頁</a>
        </div>
        <div class="content">
            <h2>🎲 威力彩電腦選號</h2>
            <h3>練習目標</h3>
            <ul>
                <li>使用亂數函式 rand($a,$b) 來產生號碼</li>
                <li>將產生的號碼順序存入陣列中</li>
                <li>每次存入陣列中時會先檢查陣列中的資料有沒有重覆</li>
                <li>完成選號後將陣列內容印出</li>
            </ul>
            <h3>選號結果</h3>
            <div class="result-box">
                <span class="label">中獎號碼</span>
                <span class="number">
                    <?php
                    $lotto=[];
                    while(count($lotto)<6){
                        $tmp=rand(1,38);
                        if(!in_array($tmp,$lotto)){
                            $lotto[]=$tmp;
                        }
                    }
                    foreach($lotto as $num){
                        echo str_pad($num, 2, '0', STR_PAD_LEFT) . " ";
                    }
                    ?>
                </span>
            </div>
            <div class="result-box" style="background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);">
                <span class="label">特別號</span>
                <span class="number"><?php echo str_pad(rand(1,8), 2, '0', STR_PAD_LEFT); ?></span>
            </div>
        </div>
    </div>
</body>
</html>