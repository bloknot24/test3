<?php

session_start();
unset($_SESSION['token']);
unset($_SESSION['name']);
setcookie ("token", "", time() - 1, '/');
setcookie ("name", "", time() - 1, '/');
header('Location: /');
exit();
