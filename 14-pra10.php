<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>天干地支年份 - PHP 學習</title>
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
            padding: 30px;
            border-radius: 8px;
            margin: 20px 0;
            text-align: center;
            box-shadow: 0 4px 15px rgba(102, 126, 234, 0.3);
        }

        .result-box .year {
            font-size: 1.2rem;
            margin-bottom: 10px;
            opacity: 0.9;
        }

        .result-box .zodiac {
            font-size: 3rem;
            font-weight: bold;
            font-family: 'Microsoft JhengHei', sans-serif;
            letter-spacing: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="header-content">
                <h1>🐉 14 - 天干地支年份</h1>
                <p>西元年轉換為天干地支年別</p>
            </div>
            <a href="index.html" class="back-button">← 返回首頁</a>
        </div>
        <div class="content">
            <h2>🔄 西元年 ↔ 天干地支年</h2>
            <h3>練習目標</h3>
            <p>已知西元 1024 年為甲子年，請設計一支程式，可以接受任一西元年份，輸出對應的天干地支的年別</p>
            
            <h3>天干地支說明</h3>
            <ul>
                <li><strong>天干</strong>：甲 乙 丙 丁 戊 己 庚 辛 壬 癸</li>
                <li><strong>地支</strong>：子 丑 寅 卯 辰 巳 午 未 申 酉 戌 亥</li>
                <li><strong>配對規律</strong>：甲子、乙丑、丙寅…甲戌、乙亥、丙子…(共60年一個循環)</li>
            </ul>
            
            <h3>計算結果</h3>
            <div class="result-box">
            <?php 
            $year = 2026;
            $heavenly_stems = ["甲", "乙", "丙", "丁", "戊", "己", "庚", "辛", "壬", "癸"];
            $earthly_branches = ["子", "丑", "寅", "卯", "辰", "巳", "午", "未", "申", "酉", "戌", "亥"];
            
            $diff = $year - 1024;
            $idx = $diff % 60;
            
            $sky = $heavenly_stems[$idx % 10];
            $earth = $earthly_branches[$idx % 12];
            ?>
                <div class="year">西元 <?php echo $year; ?> 年</div>
                <div class="zodiac"><?php echo $sky . $earth; ?></div>
            </div>
        </div>
    </div>
</body>
</html>