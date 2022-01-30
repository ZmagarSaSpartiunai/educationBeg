<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/button.css"> 
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    echo "Введённая строка: ".htmlspecialchars($_POST['string'])." <br>" ;
    echo "Перевёрнутая строка: ".strrev(htmlspecialchars($_POST['string']))." <br>" ;
?>    
<a href="FormStrRev.php" class="previous">« Назад</a>

</body>
</html>


