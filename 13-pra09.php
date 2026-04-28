<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>五百年內的閏年</title>
</head>
<body>
<h2>找出五百年內的閏年</h2>

<ul>
    <li>請依照閏年公式找出五百年內的閏年</li>
    <li>使用陣列來儲存閏年</li>
    <li>使用迴圈來印出閏年</li>
</ul>
        <?php 
        $year = 2026;

        $years= [];
        for($i=$year;$i<$year+500;$i++){

            if(($i % 4== 0 && $i % 100 != 0) OR $i %400 ==0){
                $years[]= $i;
            }
        }
/*         echo "<pre>";
        print_r($years);
        echo "</pre>";
 */
    foreach($years as $idx => $leap_year){
        echo "$leap_year ,";
        if($idx>0 && $idx %10 == 9){
            echo "<br>";
        }
    }
    echo "<hr>";
        $the_year = 2400;
        if(in_array($the_year,$years)){
            echo "$the_year 是閏年";
        }else{
            echo "$the_year 不是閏年";
        }
        ?>
</body>
</html>