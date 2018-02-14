<?php
require_once('functions.php');
require_once ('lots_list.php');

$lot = null;

$id = $lots_list[$_GET['id']] ?? http_response_code(404);
if (isset($_GET['id'])) {
    foreach ($lots_list as $id => $info) {
        if ($id == $_GET['id']) {
            $lot = $info;
            break;
        }
    }
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