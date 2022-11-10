<?php include_once 'header.php'; ?>
    <section id="first">
        <div class="container__first">
            <form class="form__block-login">
                <label for="login">Введите логин:</label><br>
                <input type="text" name="login" placeholder="Введите логин" id="form-login" require><br>
                <label for="password">Введите пароль:</label><br>
                <input type="password" name="password" placeholder="Введите пароль" id="form-password" require><br>
                <button type="button" id="blogin">Войти</button>
                <p>Нет учетной записи? <a class="form__block-login-link" href="signup.php">Зарегистрируйтесь!</a></p>
                <script src="js/login.js"></script>
                <div class="form__block-login-error" id="form-error"></div>
                <div class="form__block-login-success" id="form-success"></div>
            </form>
        </div>
    </section>
<?php include_once 'footer.php'; ?>
