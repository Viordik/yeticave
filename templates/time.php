<?php
    $nowDayTime = strtotime('z');
    $lastDayTime = strtotime('9-05-2018 00:00');

    $differenceTime = (($lastDayTime - $nowDayTime) % 86400);
    $remainingTime = date('H:i', $differenceTime);
?>
