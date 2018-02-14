<?php

require_once ('lots_list.php');

require_once ('functions.php');

$main = render_template('templates\index.php', [
    'lots_list' => $lots_list,
]);

$layout = render_template('templates\layout.php', [
    'title' => 'Главная',
    'is_auth' => $is_auth,
    'user_name' => $user_name,
    'user_avatar' => $user_avatar,
    'main' => $main,
    'categories' => $categories
]);



print ($layout);


