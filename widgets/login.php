<?php

session_start();
include_once '../classes/Login.php';
$user = new Login();
$data = $_POST;
$find = $user->findUser($data);

if($data['login'] == '' && $data['password'] == '') {
    $user->error("Введите данные");
} elseif(!$find) {
    $user->error("Пароль или логин введен не верно!");
} elseif($find && password_verify($data['password'], $find['pass'])) {
    $token = substr(bin2hex(random_bytes(128)), 0, 128);
    setcookie('token', $token, time() + 3600 * 24 * 30, '/');
    setcookie('name', $find['name'], time() + 3600 * 24 * 30, '/');
    $_SESSION['token'] = $token;
    $_SESSION['name'] = $find['name'];
    echo '1';
} else {
    $user->error("Пароль или логин введен не верно!");
}
