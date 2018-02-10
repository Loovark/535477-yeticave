<?php

function render_template($file_name, $array) {
    $content = '';
    if (file_exists($file_name)) {
        ob_start();
        extract($array);
        require_once($file_name);
        $content = ob_get_clean();
    }
    return($content);
}

function set_price($price) {
    $price = ceil($price) . " " . "₽";

    if ($price > 1000) {
        $price = number_format(ceil($price), 0, ',', ' ') . " " . "₽";
    }
    return $price;
}

function time_counter () {
    date_default_timezone_set('Europe/Moscow');
    $s_min = 60;
    $s_hour = $s_min * 60;
    $cur_time = time();
    $deadline = strtotime('tomorrow');
    $time_left = $deadline - $cur_time;
    $hours_left = floor($time_left / $s_hour);
    $min_left = floor($time_left % $s_min);
    return ($hours_left.':'.$min_left);
}