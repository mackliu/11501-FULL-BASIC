<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>反轉陣列 - PHP 學習</title>
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

        .code-output {
            background: #f5f5f5;
            padding: 20px;
            border-left: 4px solid #667eea;
            border-radius: 4px;
            margin: 20px 0;
            font-family: 'Courier New', monospace;
            color: #333;
            font-size: 0.95rem;
        }

        .comparison {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
            margin: 20px 0;
        }

        .comparison-item {
            text-align: center;
            padding: 20px;
            background: #f5f5f5;
            border-radius: 8px;
            border: 2px solid #667eea;
        }

        .comparison-item h4 {
            color: #667eea;
            margin-bottom: 10px;
            font-size: 0.95rem;
        }

        .comparison-item pre {
            background: white;
            padding: 10px;
            border-radius: 4px;
            font-size: 0.9rem;
            overflow-x: auto;
        }

        @media (max-width: 600px) {
            .comparison {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="header-content">
                <h1>🔄 15 - 反轉陣列</h1>
                <p>在不產生新陣列的狀況下反轉陣列元素</p>
            </div>
            <a href="index.html" class="back-button">← 返回首頁</a>
        </div>
        <div class="content">
            <h2>🔃 陣列反轉程式</h2>
            <h3>練習目標</h3>
            <p>請設計一支程式，在不產生新陣列的狀況下，將一個陣列的元素順序反轉(利用迴圈)</p>
            <p><strong>例：</strong>$a=[2,4,6,1,8] 反轉後 $a=[8,1,6,4,2]</p>
            
            <h3>執行結果</h3>
            <div class="comparison">
                <div class="comparison-item">
                    <h4>✓ 反轉前</h4>
                    <div class="code-output">
                    <?php 
                    $a = [2,4,6,1,8,11];
                    echo "<pre>";
                    print_r($a);
                    echo "</pre>";
                    ?>
                    </div>
                </div>
                <div class="comparison-item">
                    <h4>✓ 反轉後</h4>
                    <div class="code-output">
                    <?php 
                    for($i=0;$i<count($a)/2;$i++){
                        $max_idx=count($a)-1;
                        $tmp=$a[$i];
                        $a[$i]=$a[$max_idx-$i];
                        $a[$max_idx-$i]=$tmp;
                    }
                    echo "<pre>";
                    print_r($a);
                    echo "</pre>";
                    ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>