<?php
/*
Класс Login для работы системой логирования и авторизации.
Метод doubleUniq() проверяет уникальные поля, сравнивая значения -> получаемое и то, что в базе.
Метод addFile() подавляет наши данные в файл-базу, аккуратно их сортируя.
Метод fingUser() сравнивает логин пользователя с уже имеющимся логином в базе.
Метод error() просто преобразует текст ошибки в формат json для работы с ajax.
*/
class Login
{
    public function doubleUniq(array $data, $params): bool
    {
        $lines = file('../db/data.xml');
        $arr = array_map(function($line) {
            $log = json_decode(rtrim($line), true);
            return $log;
        }, $lines);
        foreach($arr as $arr_num) {
            if($arr_num[$params] == $data[$params]) {
                return true;
            }
        }
        return false;
    }

    public function addFile(array $data)
    {
        $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
        $info = [
            'login' => $data['login'],
            'pass' => $data['password'],
            'email' => $data['email'],
            'name' => $data['name']
        ];
        $data = json_encode($info) . "\n";
        file_put_contents('../db/data.xml', $data, FILE_APPEND);
    }

    public function findUser(array $data)
    {
        $lines = file('../db/data.xml');
        $arr = array_map(function($line) {
            $log = json_decode(rtrim($line), true);
            return $log;
        }, $lines);
        foreach($arr as $arr_num) {
            if($arr_num['login'] == $data['login']) {
                return $arr_num;
            }
        }
    }

    public function error(string $text) {
        $error = [
            "error" => $text
        ];
        echo json_encode($error);
    }
}
