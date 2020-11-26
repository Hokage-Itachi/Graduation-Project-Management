<!DOCTYPE html>
<!-- saved from url=(0047)https://colorlib.com/etc/lf/Login_v1/index.html -->
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Login</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" type="image/png" href="/assets/Image/favicon.ico">

    <link rel="stylesheet" type="text/css" href="/assets/css/login-css/style.css">


</head>

<body>


    <div class="container">
        <div class="info">
            <h1>Login to continue</h1>
        </div>
    </div>
    <div class="form">
        <div class="thumbnail"><img src="./assets/Image/hat.svg" /></div>
        <form class="login-form" action="/login" method="POST">
            <input type="text" placeholder="Email" name="email" />
            <input type="password" placeholder="Password" name="password" />
            <button>Login</button>
            <p class="message"><a href="#">Forgot Password?</a></p>
            <p class="message"><a href="/library">Go to library</a></p>
        </form>
    </div>
</body>

</html>