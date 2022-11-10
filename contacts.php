<?php include_once 'header.php';
if(isset($_COOKIE['token']) && isset($_SESSION['token'])): ?>

<section id="first">
    <?php include_once 'menu.php'; ?>
    <div class="container__first">
        <h1>Contacts page</h1>
        Hello <?=$_SESSION['name']?> в третий раз <a class="form__block-login-link" href="logout.php">Выйти</a>
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
