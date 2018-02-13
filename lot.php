<?php
require_once('functions.php');
require_once ('lots_list.php');

$lot = null;

if (isset($_GET['id'])) {
    $lot = $lot_list[$_GET['id']];

    foreach ($lots_list as $item) {
        if ($item['id'] == $lots_list['id']) {
            $lot = $item;
            break;
        }
    }
}

if (!$lot) {
    http_response_code(404);
}

$main = render_template('templates\info.php', [
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