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

            <?php
            $m1 = 9; // Предел первого множителя
            $m2 = 9; // Предел второго множителя
            $table = [];
            for ($i = 1; $i <= $m1; $i++) {
                for ($j = 1; $j <= $m2; $j++) {
                    $table[$i][$j] = $i * $j;
                }
            }

            echo '<div class="table-container">';
            foreach ($table as $k1 => $v1) {
                echo '<table><tbody>';
              foreach ($v1 as $k2 => $v2) {
                    echo '<tr><td>' . $k1 . ' * ' . $k2 . ' = ' . $v2 . '</td></tr>';
                }
              echo '</tbody></table>';
            }

            ?>
            </div>
        </div>
    </div>
</body>
</html>
