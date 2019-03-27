<!doctype html>
<html lang="ru-RU">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP / HW1 / Sergey Zhmailo</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <div class="wrapper">
        <div class="container">
            <h1>Таблица умножения</h1>
            <table>

            <?php
            $m1 = 9; // Предел первого множителя
            $m2 = 9; // Предел второго множителя
            $table = [];
            for ($i = 1; $i <= $m1; $i++) {
                for ($j = 1; $j <= $m2; $j++) {
                    $table[$i][$j] = $i * $j;
                }
            }

            foreach ($table as $k1 => $v1) {
                echo $k1 == 1 ? '<tr><td><div class="td-container">' : '<td><div class="td-container">';
                foreach ($v1 as $k2 => $v2) {
                    echo $k1 . ' * ' . $k2 . ' = ' . $v2 . '<br>';
                }
                echo '</div></td>';
                $numberElementsPerRow = 3; // Количество столбиков в ряду
                echo $k1 % $numberElementsPerRow == 0 ? '</tr>' : '';
            }
            ?>
            </table>
        </div>
    </div>
</body>
</html>
