<?php
function TimeUnix($mark_Unix): string
{
    $month = "";
    $i = date("m", $mark_Unix);
    $month = match ((int)$i) {
        1 => "Январь",
        2 => "Февраль",
        3 => "Март",
        4 => "Апрель",
        5 => "Май",
        6 => "Июнь",
        7 => "Июль",
        8 => "Август",
        9 => "Сентябрь",
        10 => "Октябрь",
        11 => "Ноябрь",
        12 => "Декабрь",
    };


    return date("d", $mark_Unix) . " " . $month . " " . date("Y", $mark_Unix);
}

$date_unix= $_POST["mark_Unix"];
echo TimeUnix($date_unix);
