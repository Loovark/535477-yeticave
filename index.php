<?php

$is_auth = (bool) rand(0, 1);

$user_name = 'Константин';
$user_avatar = 'img/user.jpg';


$catigories = ["Доски и лыжи", "Крепления", "Ботинки", "Одежда", "Инструменты", "Разное"];

$lots_list = [
    [
        'name' => '2014 Rossignol District Snowboard',
        'category' => $catigories[0],
        'price' => 10999,
        'image' => 'img/lot-1.jpg'
    ],
    [
        'name' => 'DC Ply Mens 2016/2017 Snowboard',
        'category' => $catigories[0],
        'price' => 159999,
        'image' => 'img/lot-2.jpg'
    ],
    [
        'name' => 'Крепления Union Contact Pro 2015 года размер L/XL',
        'category' => $catigories[1],
        'price' => 8000,
        'image' => 'img/lot-3.jpg'
    ],
    [
        'name' => 'Ботинки для сноуборда DC Mutiny Charocal',
        'category' => $catigories[2],
        'price' => 10999,
        'image' => 'img/lot-4.jpg'
    ],
    [
        'name' => 'Куртка для сноуборда DC Mutiny Charocal',
        'category' => $catigories[3],
        'price' => 7500,
        'image' => 'img/lot-5.jpg'
    ],
    [
        'name' => 'Маска Oakley Canopy',
        'category' => $catigories[5],
        'price' => 5400,
        'image' => 'img/lot-6.jpg'
    ]
];

require_once ('functions.php');
$main = get_template($file, $massive);


function set_price($price) {
    $price = ceil($price) . " " . "₽";

    if ($price > 1000) {
        $price = number_format(ceil($price), 0, ',', ' ') . " " . "₽";
    }
    return $price;
}

?>
