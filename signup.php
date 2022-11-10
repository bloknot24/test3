<?php include_once 'header.php'; ?>
    <section id="first">
        <div class="container__first">
            <form class="form__block-login">
                <label for="login">Ваш логин:</label><br>
                <input type="text" name="login" placeholder="Введите логин" id="form-login" require value="<?=@$data['login']?>"><br>
                <label for="name">Ваше имя:</label><br>
                <input type="text" name="name" placeholder="Введите имя" id="form-name" require value="<?=@$data['name']?>"><br>
                <label for="email">Ваш email:</label><br>
                <input type="email" name="email" placeholder="Введите email" id="form-email" require value="<?=@$data['email']?>"><br>
                <label for="password">Ваш пароль:</label><br>
                <input type="password" name="password" placeholder="Введите пароль" id="form-password" require value="<?=@$data['password']?>"><br>
                <label for="password">Введите пароль еще раз:</label><br>
                <input type="password" name="password_2" placeholder="Подтвердите пароль" id="form-password2" require value="<?=@$data['password_2']?>"><br>
                <button type="button" id="bsignup">Зарегистрироваться</button>
                <p>Есть учетная запись? <a class="form__block-login-link" href="index.php">Войти!</a></p>
                <script src="js/signup.js"></script>
                <div class="form__block-login-error" id="form-error"></div>
                <div class="form__block-login-success" id="form-success"></div>
            </form>
        </div>
    </section>
<?php include_once 'footer.php'; ?>
