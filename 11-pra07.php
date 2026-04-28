<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>九九乘法表 - PHP 學習</title>
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

        .code-output {
            background: #f5f5f5;
            padding: 15px;
            border-left: 4px solid #667eea;
            border-radius: 4px;
            margin: 10px 0;
            font-family: 'Courier New', monospace;
            color: #333;
            font-size: 0.9rem;
        }

        table {
            border-collapse: collapse;
            border: 2px solid #667eea;
            background-color: #f9f9f9;
            margin: 20px 0;
            width: 100%;
        }

        td {
            border: 1px solid #ddd;
            text-align: center;
            padding: 10px;
            font-size: 0.95rem;
        }

        tr:nth-child(even) {
            background-color: #f5f5f5;
        }

        tr:hover {
            background-color: #e8e8ff;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="header-content">
                <h1>📚 11 - 九九乘法表</h1>
                <p>利用迴圈產生陣列並顯示九九乘法表</p>
            </div>
            <a href="index.html" class="back-button">← 返回首頁</a>
        </div>
        <div class="content">
            <h2>📊 九九乘法表</h2>
            <h3>練習目標</h3>
            <ul>
                <li>以迴圈的方式產生一個九九乘法表</li>
                <li>將九九乘法表的每個項目以字串型式存入陣列中</li>
                <li>再以迴圈方式將陣列內容印出</li>
            </ul>
            <h3>陣列內容</h3>
            <div class="code-output">
            <?php 
            $nine=[];
            for($i=1;$i<=9;$i++){
                for($j=1;$j<=9;$j++){
                    $nine[]="$i x $j = ".($i*$j);
                }
            }
            echo "<pre>";
            print_r($nine);
            echo "</pre>";
            ?>
            </div>
            <h3>乘法表 - 表格顯示</h3>
<table>
    <tr>
<?php 
foreach($nine as $idx => $item){
    if($idx>0 && $idx%9==0){
        echo "</tr><tr><td>$item</td>";

    }else{
        echo "<td>$item</td>";
    }

}


?>
</tr>
            </table>
        </div>
    </div>
</body>
</html>