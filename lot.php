<?php
require_once('functions.php');
require_once ('data.php');

$lot = array_key_exists($_GET['id'], $lots_list) ? $lots_list[$_GET['id']] : null;
if (!$lot) {
    http_response_code(404);
exit;
}

$main = render_template('templates\lot.php', [
    'lot' => $lot
]);

$layout = render_template('templates\layout.php', [
    'title' => 'Информация о лоте',
    'is_auth' => $is_auth,
    'user_name' => $user_name,
    'user_avatar' => $user_avatar,
    'main' => $main,
    'categories' => $categories
]);



print ($layout);