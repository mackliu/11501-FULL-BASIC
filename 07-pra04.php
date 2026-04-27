<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>九九乘法表</title>
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

        .table1 {
            border-collapse: collapse;
            width: 100%;
            margin-top: 20px;
        }

        .table1 td {
            border: 2px solid white;
            padding: 10px;
            text-align: center;
            color: white;
            background: rgba(255, 255, 255, 0.1);
        }

        .table1 tr:nth-child(even) td {
            background: rgba(255, 255, 255, 0.2);
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
    <h2>九九乘法表</h2>
<?php 

echo "<table class='table1'>";
for($j=1 ;$j<=9;$j++){
    echo "<tr>";
    for($i=1;$i<=9;$i++){
        echo "<td>";
        echo $i . " x  $j = ". ($j*$i);
        echo "</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>
<hr>
<?php 

echo "<table class='table1'>";
echo "<tr style='background-color:#eee'>";
echo "    <td></td>";
echo "    <td>1</td>";
echo "    <td>2</td>";
echo "    <td>3</td>";
echo "    <td>4</td>";
echo "    <td>5</td>";
echo "    <td>6</td>";
echo "    <td>7</td>";
echo "    <td>8</td>";
echo "    <td>9</td>";
echo "</tr>";

for($j=1 ;$j<=9;$j++){
    echo "<tr>";
    echo "<td style='background-color:#eee'> $j </td>";
    for($i=1;$i<=9;$i++){
        echo "<td>";
        echo ($j*$i);
        echo "</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>
<hr>
<?php 

echo "<table class='table1'>\n";
echo "<tr style='background-color:#eee'>\n";
echo "    <td></td>\n";
echo "    <td>1</td>\n";
echo "    <td>2</td>\n";
echo "    <td>3</td>\n";
echo "    <td>4</td>\n";
echo "    <td>5</td>\n";
echo "    <td>6</td>\n";
echo "    <td>7</td>\n";
echo "    <td>8</td>\n";
echo "    <td>9</td>\n";
echo "</tr>\n";

for($j=1 ;$j<=9;$j++){
    echo "<tr>\n";
    echo "    <td style='background-color:#eee'> $j </td>\n";
    for($i=1;$i<=9;$i++){
        echo "    <td>";
        if($i<=$j){
            echo ($j*$i);
        }
        echo "</td>\n";
    }
    echo "</tr>\n";
    }
echo "</table>\n";
?>
<a href="index.html" class="back-button">返回首頁</a>
</div>

</body>
</html>
