<?php
require_once('functions.php');
require_once('data.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $lot = $_POST;
    $err = [];
    $required = ['name', 'category', 'description', 'lot-rate', 'lot-step', 'lot-date'];
    $blocks = [
        'name' => 'Наименование',
        'category' => 'Категория',
        'description' => 'Описание',
        'lot-rate' => 'Начальная цена',
        'lot-step' => 'Шаг ставки',
        'lot-date' => 'Дата окончания торгов'
    ];
    foreach ($required as $key) {
        if (empty($_POST[$key])) {
            $err[$key] = 'Заполните это поле.';
        }
    };
    if (isset($_FILES['image']['name'])) {
        $tmp_name = $_FILES['image']['tmp_name'];
        $path = $_FILES['image']['name'];

        $finfo = finfo_open(FILEINFO_MIME_TYPE);
        $file_type = finfo_file($finfo, $tmp_name);
        if ($file_type !== "image/jpeg") {
            $err['image'] = 'Загрузите картинку в формате JPEG';
        } else {
            move_uploaded_file($tmp_name, 'img/' . $path);
            $lot['path'] = $path;
        }
    } else {
        $err['image'] = 'Загрузите изображение.';
    }

    $main = render_template('lot.php', ['lot' => $lot]);
} else {
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