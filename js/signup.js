window.onload = function() {
    let inp_login = document.querySelector('#form-login'),
        inp_name = document.querySelector('#form-name'),
        inp_email = document.querySelector('#form-email'),
        inp_pass = document.querySelector('#form-password'),
        inp_pass2 = document.querySelector('#form-password2');

    document.querySelector('#bsignup').onclick = function() {
        let params = 'login=' + inp_login.value + '&' +
                     'name=' + inp_name.value + '&' +
                     'email=' + inp_email.value + '&' +
                     'password=' + inp_pass.value + '&' +
                     'password_2=' + inp_pass2.value;

        ajax(params, 'widgets/signup.php', 'index.php', 'Вы зарегистрировались!');
    }
}
