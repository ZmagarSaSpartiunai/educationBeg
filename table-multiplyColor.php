<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/tableMulty.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <?php
            $i = 1;

            while ($i <= 10) {
                $y = 1;                
                if ($i == 6) {
                    echo "<tr>";
                }
                echo "<td>";
                while ($y <=10) {
                    $result = strval($i * $y);
                    
                    if ($result < 10) {
                        echo "<span class='color$i'>$i</span>*<span class='color$y'>$y</span>=<span class='color$result[0]'>$result[0]</span>\n";
                    }
                    else {
                        echo "<span class='color$i'>$i</span>*<span class='color$y'>$y</span>=<span class='color$result[0]'>$result[0]</span><span class='color$result[1]'>$result[1]</span>\n";
                    }
                    $y++;
                }
                echo "</td>";
                $i++;  
            }

        ?> 
    </table>
</body>
</html>