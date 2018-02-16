<?php
require_once('functions.php');
require_once('data.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $lot = $_POST;

    if (isset($_FILES['photo_img']['name'])) {
        $path = $_FILES['photo_img']['name'];
        $res = move_uploaded_file($_FILES['photo_img']['tmp_name'], 'img/' . $path);
    }

    if (isset($path)) {
        $lot['path'] = $path;
    }

    $main = render_template('view.php', ['lot' => $lot]);
}
else {
    $main = render_template('templates\add.php', []);
}

$layout = render_template('templates\layout.php', [
    'title' => 'Информация о лоте',
    'is_auth' => $is_auth,
    'user_name' => $user_name,
    'user_avatar' => $user_avatar,
    'main' => $main,
    'categories' => $categories
]);

print($layout);