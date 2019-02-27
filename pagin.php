<?php
/**
 * Created by PhpStorm.
 * User: alina
 * Date: 27.02.19
 * Time: 1:48
 */
$page;
$count2;
    if (isset($_GET['index']))
    {
        $count2 = $_GET['index'];
    }else $count2 = 20;
    if (isset($_GET['page']))
    {
        $page = $_GET['page'];
    }else $page = 1;

$count1 = ($page * $count2) - $count2;
$emplAll = $conn2->countTable()[0]['COUNT(*)'];
$pageAll = ceil($emplAll/$count2);
    if ($page <= 3)
    {
        for ($i = 1; $i <= 6 & $i <= $pageAll; $i++){
        echo "<a href=../mytest.org/index.php?page=".$i."> Стр ".$i."</a>";
    }

    }elseif (3 < $page && $page < ($pageAll-3))
    {
        for ($i = ($page - 2); $i <= ($page + 3); $i++)
        {
            echo "<a href=../mytest.org/index.php?page=".$i."> Стр ".$i."</a>";
        }
    }elseif ($page = ($pageAll - 3))
    {
        for ($i = ($pageAll - 5); $i <= $pageAll; $i++)
        {
            echo "<a href=../mytest.org/index.php?page=".$i."> Стр ".$i."</a>";
        }
    }

$data = $conn2->getDb($count1, $count2);