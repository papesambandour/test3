<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" type="image/x-icon" href="/public/img/favicon.ico" />
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/public/css/app.css" id="bootstrap-css">

    <link rel="stylesheet" media="screen" href="/public/css/login.css">
    <title><?=$title ?></title>
</head>
<body>

<div class="container">
    <div class="h1">

    </div>
    <?php \src\Helper::flashSuccess();\src\Helper::flashError() ?>
    <div class="card card-container">
        <!-- <img class="profile-img-card" src="//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120" alt="" /> -->
        <img id="profile-img" class="profile-img-card" src="/public/img/login.png" />
        <p id="profile-name" class="profile-name-card"></p>
        <form class="form-signin" method="post" action="/auth/logcheck">
            <span id="reauth-email" class="reauth-email"></span>
            <input type="text" id="inputEmail" value="" name="matLogin" class="form-control" placeholder="Matricule " required autofocus>
            <input type="password" id="inputPassword" value="" name="passwordLogin" class="form-control" placeholder="Mot de passe" required>
            <div id="remember" class="checkbox">
                <label>
                    <input type="checkbox" id="remember-me" name="remember-me" value="remember-me"> Se souvenir de moi
                </label>
            </div>
            <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Connecter</button>
        </form><!-- /form -->
        <a href="#" class="forgot-password">
            Mot de pass oublier?
        </a>
    </div><!-- /card-container -->
</div><!-- /container -->
    <script src="/public/js/jquery.min.js"></script>

    <script src="/public/js/mymenu.js"></script>
</body>
</html>