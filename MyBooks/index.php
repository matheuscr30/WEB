<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Books</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"
    integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <script src="https://www.gstatic.com/firebasejs/4.2.0/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/4.2.0/firebase-auth.js"></script>
    <script src="https://www.gstatic.com/firebasejs/4.2.0/firebase-database.js"></script>
    <script src="configFirebase.js"></script>
</head>
<body>
    <script type="text/javascript">

    $(document).ready(function () {
        document.getElementById('login-button').addEventListener("click", logarUsuario);
        document.getElementById('register-button').addEventListener("click", function () {
            window.location.replace('register.php');
        });

        firebase.auth().onAuthStateChanged(function(user) {
            if (user) window.location.replace('home.php');
        });
    });

    function logarUsuario(){
        var email = document.getElementById('email').value;
        var senha = document.getElementById('senha').value;

        firebase.auth().signInWithEmailAndPassword(email, senha)
        .catch(function(error) {
            // Handle Errors here.
            var errorCode = error.code;
            var errorMessage = error.message;
            console.log(errorMessage);

            var snackbarContainer = document.querySelector('#toast-error');
            var data = {message: "Email e/ou Senha Invalidos"};
            snackbarContainer.MaterialSnackbar.showSnackbar(data);
        });
    }
    </script>

    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
        <header class="mdl-layout__header">

            <div class="mdl-layout__header-row">
                <span class="mdl-layout__title">My Books</span>
                <div class="mdl-layout-spacer"></div>

                <button id="menu-right" class="mdl-button mdl-js-button mdl-button--icon">
                    <i class="material-icons">more_vert</i>
                </button>

                <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" for="menu-right">
                    <li id="register-button" class="mdl-menu__item">Cadastrar</li>
                </ul>
            </div>
        </header>
        <main class="mdl-layout__content login-main">
            <div>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <input class="mdl-textfield__input" type="text" id="email" name="email">
                    <label class="mdl-textfield__label" for="email">Email</label>
                </div>
                <br>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <input class="mdl-textfield__input" type="password" id="senha" name="senha">
                    <label class="mdl-textfield__label" for="senha">Senha</label>
                </div>
                <br><br>
                <button id="login-button" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored button-login">
                    Entrar
                </button>
            </div>

            <div id="toast-error" class="mdl-js-snackbar mdl-snackbar">
                <div class="mdl-snackbar__text"></div>
                <button class="mdl-snackbar__action" type="button"></button>
            </div>

        </main>
    </div>

</body>
</html>
