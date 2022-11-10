<?php

include_once '../classes/Login.php';
$error[] = '';
$user = new Login();
$data = $_POST;

$data['login'] = htmlspecialchars($data['login']);
$data['email'] = htmlspecialchars($data['email']);
$data['password'] = trim($data['password']);
$data['name'] = trim($data['name']);

// Выполняем проверки
if(trim($data['login']) == '') {
    $user->error("Введите логин");
} elseif(mb_strlen($data['login'], 'UTF-8') < 6) {
    $user->error("Логин не короче 6 символов");
} elseif(preg_match('/^[A-Za-z0-9_]*$/iu', $data['login']) == 0) {
    $user->error("Логин только цифры или буквы");
} elseif(preg_match('/^[A-Za-zА-Яа-яЁё]*$/iu', $data['name']) == 0) {
    $user->error("Имя только буквы, без пробелов");
} elseif($data['name'] == '') {
    $user->error("Введите имя!");
} elseif(mb_strlen($data['name'], 'UTF-8') < 2) {
    $user->error("Имя не менее 2 символов!");
} elseif(mb_strlen($data['name'], 'UTF-8') > 30) {
    $user->error("Имя не более 30 символов!");
} elseif(trim($data['email']) == '') {
    $user->error("Введите email!");
} elseif(preg_match('/^([a-z0-9_-]+\.)*[a-z0-9_-]+@[a-z0-9_-]+(\.[a-z0-9_-]+)*\.[a-z]{2,6}$/', $data['email']) == 0) {
    $user->error("Поле e-mail заполнено с ошибками!");
} elseif($data['password'] == '') {
    $user->error("Введите пароль!");
} elseif(mb_strlen($data['password'], 'UTF-8') < 6) {
    $user->error("Пароль должен быть не менее 6 символов!");
} elseif(preg_match('/^[A-Za-zА-Яа-яЁё0-9]*$/iu', $data['password']) == 0) {
    $user->error("Пароль должен содержать только буквы или цифры");
} elseif($data['password_2'] == '') {
    $user->error("Повторите пароль!");
} elseif($data['password_2'] != $data['password']) {
    $user->error("Повторный пароль введен не верно! Пробелы недопустимы!");
} elseif ($user->doubleUniq($data, 'login')) {
    $user->error("Пользователь с указанным логином существует");
} elseif ($user->doubleUniq($data, 'email')) {
    $user->error("Пользователь с указанным email существует");
} else {
    // Успех
    $user->addFile($data);
    echo '1';
}
