<?php include_once 'header.php';
if(isset($_COOKIE['token']) && isset($_SESSION['token'])): ?>

<section id="first">
    <?php include_once 'menu.php'; ?>
    <div class="container__first">
        <h1>Index page</h1>
        Hello <?=$_SESSION['name']?> <a class="form__block-login-link" href="logout.php">Выйти</a><br>
        <div class="first__block">
            На эту страницу невозможно попасть, если два массива <b>$_COOKIE</b> и <b>$_SESSION</b> пусты.
        </div>
    </div>
</section>

<? else : ?>

<div class="container__first">
    <div class="first__array_empty">
        Доступ для неавторизованного пользователя закрыт! <a class="form__block-login-link" href="index.php">Авторизуйтесь!</a>
    </div>
</div>

<? endif; ?>
<?php include_once 'footer.php'; ?>
