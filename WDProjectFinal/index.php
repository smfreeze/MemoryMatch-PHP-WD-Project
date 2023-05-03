<!doctype html>
<html>

<head>
    <title>Home</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
        .mainbody{
            background-image: url("http://ml-lab-4d78f073-aa49-4f0e-bce2-31e5254052c7.ukwest.cloudapp.azure.com:59942/data/arcade-unsplash.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            position: absolute;
            height:100%;
            width: 100%;
        }
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
    </style>
</head>

<?php
     include 'navmenu.php'
?>

<body>
    <div class="mainbody" id="main">
        <div class="container">
            <div class="center">
                <h1 style="color: black;">
                    <b>Welcome to Pairs</b>
                </h1>
            </div>
            <div class="center" style="position: absolute; width: 1px; height: 1px; margin: -1px; border: 0; padding: 0; clip: rect(0 0 0 0); overflow: hidden;" id="register-link">
                <h2>
                    You’re not using a registered session? <a href="registration.php" style="color:black;"><u>Register now</u></a>
                </h2>
            </div>

            <div class="center" id="play-button" style="position: absolute; width: 1px; height: 1px; margin: -1px; border: 0; padding: 0; clip: rect(0 0 0 0); overflow: hidden;">
                <button class="btn btn-success start-button" onclick="window.location.href='pairs.php';">Click here to Play</button>
            </div>
        </div>
    </div>

    <script>
        var user = "<?php if (isset($_COOKIE['user']) && !empty($_COOKIE['user'])) {
            echo $_COOKIE['user'];
        }
        else{
            echo "!";
        }; ?>"
        if (user != "!"){
            document.getElementById("play-button").setAttribute('style','')
        }
        else{
            document.getElementById("register-link").setAttribute('style','')
        }
    </script>
</body>

</html>
