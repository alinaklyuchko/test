<?php
/**
 * Created by PhpStorm.
 * User: alina
  */

require_once 'Connect.class.php';

$conn2 = new Connect();
require_once 'pagin.php';

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<table>
    <tr class="title">
        <td>ФИО</td>
        <td>Дата рождения</td>
        <td>Отдел</td>
        <td>Должность</td>
        <td>Ставка в месяц</td>
        <td>Почасовая оплата</td>
    </tr>
    <?php foreach ($data as $datum) : ?>
    <tr>
            <td><?= $datum->first_name.' '.$datum->name.' '.$datum->patronymic ?></td>
            <td><?= $datum->date_of_birth ?></td>
            <td><?= $datum->department ?></td>
            <td><?= $datum->position ?></td>
            <td><?= $datum->monthly_rate ?></td>
            <td><?= $datum->rate_per_hour*160 ?></td>

    </tr>
    <?php endforeach; ?>

</table>
<button><a href="../mytest.org/index.php?index=20">Вывести 20</a></button>
<button><a href="../mytest.org/index.php?index=40">Вывести 40</a></button>
<button><a href="../mytest.org/index.php?index=50">Вывести 50</a></button>
<button><a href="../mytest.org/index.php?index=100">Вывести 100</a></button>

<br>

</body>
</html>

