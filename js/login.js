window.onload = function() {
    let inp_login = document.querySelector('#form-login'),
        inp_pass = document.querySelector('#form-password');

    document.querySelector('#blogin').onclick = function() {
        let params = 'login=' + inp_login.value + '&' +
                     'password=' + inp_pass.value;

        ajax(params, 'widgets/login.php', 'index-page.php', 'Вы вошли!');
    }
}
