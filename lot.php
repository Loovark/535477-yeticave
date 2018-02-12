<?php
require_once('functions.php');
require_once ('lots_list.php');

$lot = null;

if (isset($_GET['lot_id'])) {
    $lot_id = $_GET['lot_id'];

    foreach ($lots_list as $item) {
        if ($item['lot_id'] == $lot_id) {
            $lot = $item;
            break;
        }
    }
}

if (!$lot) {
    http_response_code(404);
}

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