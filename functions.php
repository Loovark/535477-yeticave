<?php

function get_template($file_name, $array) {
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