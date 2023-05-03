<?php
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
         $skin = $_POST['pfp-skin'];
         $eyes = $_POST['pfp-eyes'];
         $mouth = $_POST['pfp-mouth'];
         $user = $_POST['user'];

         setcookie('user', $user, time() + (86400 * 30), "/");
         setcookie('mouth-image', $mouth, time() + (86400 * 30), "/");
         setcookie('eyes-image', $eyes, time() + (86400 * 30), "/");
         setcookie('skin-image', $skin, time() + (86400 * 30), "/");
        }
?>

<!doctype html>
<html>
    <head>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
            integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <title>Submitted!</title>
        <style>
            .container {
            height: 200px;
            position: relative;
            }

            .center {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100px;
            }
            .start-button {
            margin: auto;
            width: fit-content;
            border: 3px solid green;
            padding: 20px;
            position: relative;
            }
            .mainbody{
            background-image: url("data/arcade-unsplash.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            position: absolute;
            height:100%;
            width: 100%;
            }
        </style>
    </head>
    <body>
        <div class="mainbody" id="main">
            <div class="container">
                <div class="center">
                    <h1 style="color: orange;"><b>Registration Completed!</b></h1>
                </div>
                <div class="center">
                    <button class="btn btn-success start-button" onclick="window.location.href='index.php';">Home</button>
                </div>
            </div>
        </div>
    </body>
</html>