<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Flood Monitoring</title>
    <style>
        @font-face {
            font-family: Rubik;
            src: url(assets/fonts/Rubik-Regular.ttf);
        }

        body, html {
            height: 100%;
            margin: 0;
        }

        .backgroundImage {
            background-image: url("assets/images/background_login.png");
            height: 100%;
            background-repeat: no-repeat;
            background-position: left bottom;
        }

        .titleMenu {
            padding-left: 3%;
            padding-top: 2%;
        }

        .titleAbove {
            font-family: Rubik;
            font-style: normal;
            font-weight: bold;
            font-size: 48px;

            color: #BB345C;
        }

        .titleBelow {
            font-family: Rubik;
            font-style: normal;
            font-weight: 300;
            font-size: 48px;

            color: #000000;
        }

        .formLogin {
             background-color: #ffffff;
            padding: 20px;
            width: 50%;
            float: right;
            position: relative;
            top: 20%;
        }

        input[type=email], input[type=password] {
            border: none;
            width: 100%;
            padding: 12px;
            /* border: 1px solid #ccc; */
            background: transparent;
            border-bottom: 1px solid black;
            box-sizing: border-box;
            margin-top: 6px;
            margin-bottom: 16px;
            resize: vertical;
        }

        .login {
            float: right;
            border: none;
            border-radius: 20px;
            padding: 2%;
            background-color: #4EBFB4;
            color: white;
            font-size: 16px;
            font-family: Rubik;
        }

        .login:hover {
            background-color: rgb(28, 117, 108);
            color: white;
            cursor: pointer;
        }

        label {
            font-family: Rubik;
        }
    </style>

    <!-- The core Firebase JS SDK is always required and must be listed first -->
    <script src="https://www.gstatic.com/firebasejs/7.8.0/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.8.0/firebase-analytics.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.8.0/firebase-auth.js"></script>

    <!-- Firebase -->
    <script src="assets/js/firebase.js"></script>

    <!-- session Script -->
    <script src="assets/js/sessionLogin.js"></script>

    <!-- Library MD5 Javascript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/3.1.9-1/core.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/3.1.9-1/md5.js"></script>
</head>
<body>
    <div class="backgroundImage" />

    <div class="titleMenu">
        <div class="titleAbove">Flood</div>
        <div class="titleBelow">Monitoring</div>
    </div>

    <div class="formLogin">
        <label for="email">Email Address</label>
        <input id="email_field" type="email" placeholder="Email Adress">
        <label for="password">Password</label>
        <input id="password_field" type="password" placeholder="Password">
        <button class="login" onclick="signIn()">LOGIN</button>
    </div>
</body>
</html>