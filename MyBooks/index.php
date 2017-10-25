<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>My Books</title>

        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
        <link rel="stylesheet" href="style.css">
        <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
        <script src="https://www.gstatic.com/firebasejs/4.6.0/firebase.js"></script>
        <script src="https://www.gstatic.com/firebasejs/4.2.0/firebase-app.js"></script>
        <script src="https://www.gstatic.com/firebasejs/4.2.0/firebase-auth.js"></script>
        <script src="https://www.gstatic.com/firebasejs/4.2.0/firebase-database.js"></script>
        <script type="text/javascript">
            var config = {
              apiKey: "AIzaSyBEfNolVrTP71DCgEQBMRzB-VFfAIV3BFQ",
              authDomain: "mybooks-c4b5e.firebaseapp.com",
              databaseURL: "https://mybooks-c4b5e.firebaseio.com",
              projectId: "mybooks-c4b5e",
              storageBucket: "mybooks-c4b5e.appspot.com",
              messagingSenderId: "1084787551709"
            };
            firebase.initializeApp(config);
        </script>
    </head>
    <body>
        <script type="text/javascript">
          function logarUsuario(){
              var email = document.getElementById('email').value;
              var senha = document.getElementById('senha').value;

              firebase.auth().signInWithEmailAndPassword(email, senha)
              .catch(function(error) {
                  // Handle Errors here.
                  var errorCode = error.code;
                  var errorMessage = error.message;
                  console.log(errorMessage);
                  // ...
              });

              getUsuario();
          }

          function getUsuario(){
              firebase.auth().onAuthStateChanged(function(user) {
                  if (user) {
                      console.log(user);
                      return true;
                  }
                  else{
                      console.log(user);
                      return false;
                  }
              });
          }

        </script>

        <div class="mdl-layout mdl-js-layout">
            <header class="mdl-layout__header mdl-layout__header--scroll">

                <div class="mdl-layout__header-row">
                    <span class="mdl-layout__title">My Books</span>
                </div>
            </header>
            <main class="mdl-layout__content login-main">

                    <div class="">
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
                        <button type="button" onclick="logarUsuario()" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored button-login">
                            Entrar
                        </button>
                    </div>
            </main>
        </div>

    </body>
</html>
