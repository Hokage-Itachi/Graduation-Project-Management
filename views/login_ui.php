<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <!--    <link href="css/style.css" rel="stylesheet" type="text/css">-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style type="text/css">
        * {
            box-sizing: border-box;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
        }

        img {
            width: 220px;
            height: 220px;
        }

        .img_container {
            text-align: center;
            margin: 24px 0 12px 0;
            position: relative;
        }


        .form {
            border: 3px solid #f1f1f1;

        }

        input {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        button {
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
            font-weight: bold;
        }

        button:hover {
            opacity: 0.8;
        }

        .button {
            float: right;
        }

        .container {
            padding: 16px;
        }

        .modal-box {
            display: none;
            width: 100%;
            height: 100%;
            z-index: 10;
            position: fixed;
            left: 0;
            top: 0;
            padding-top: 60px;
            overflow: auto;
            /* Enable scroll if needed */
            background-color: rgb(0, 0, 0);
            /* Fallback color */
            background-color: rgba(0, 0, 0, 0.4);
            /* Black w/ opacity */
        }

        .modal-content {
            background-color: #fefefe;
            margin: 15% auto;
            /* 15% from the top and centered */
            padding: 20px;
            border: 1px solid #888;
            width: 40%;
            /* Could be more or less, depending on screen size */
        }

        .close {
            color: #000;
            float: right;
            font-size: 35px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }

        .container {
            padding: 16px;
        }

        span.psw {
            float: right;
            padding-bottom: 5px;
        }

        a {
            text-decoration: none;
            color: gray;
        }

        a:hover {
            color: black;
        }

        /* Add Zoom Animation */
        .animate {
            -webkit-animation: animatezoom 0.6s;
            animation: animatezoom 0.6s
        }

        @-webkit-keyframes animatezoom {
            from {
                -webkit-transform: scale(0)
            }

            to {
                -webkit-transform: scale(1)
            }
        }

        @keyframes animatezoom {
            from {
                transform: scale(0)
            }

            to {
                transform: scale(1)
            }
        }
    </style>
</head>

<body>

    <button class="button" id="login" style="width:auto"><i class="fa fa-sign-in"></i> Login as Student</button>

    <div id="modal_box" class="modal-box">
        <div class="modal-content animate">
            <span id="close_modal" class="close">&times;</span>
            <form class="form" action="/login" method="POST">
                <div class="img_container">
                    <img src="./asserts/Image/img_avatar2.png" class="avatar">
                </div>
                <div class="container">
                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                    <label for="uname"><b>Email</b></label>
                    <input id="uname" type="text" name="email" placeholder="Enter Username" required>
                    <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                    <label for="psw"><b>Password</b></label>
                    <input id="psw" type="password" name="password" placeholder="Enter Password" required>

                    <button type="submit"><i class="fa fa-sign-in"></i> Login</button>

                </div>

                <div class="container" style="background-color:#f1f1f1">
                    <span class="psw"><a href="#">Forgot Password?</a></span>
                </div>
            </form>

        </div>
    </div>
    <script language="JavaScript">
        const button = document.getElementById('login');
        const modal = document.getElementById('modal_box');

        button.onclick = function() {
            modal.style.display = 'block';
        }

        const close = document.getElementById('close_modal');
        close.onclick = function() {
            modal.style.display = "none";
        }
    </script>
</body>

</html>