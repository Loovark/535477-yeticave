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
    $time_left = strtotime('tomorrow') - time();
    $hours = floor($time_left / 3600);
    $minutes = floor(($time_left / 60) - ($hours * 60));
    return ($hours.':'.$minutes);
}