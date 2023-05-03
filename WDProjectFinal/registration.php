<?php
     include 'navmenu.php'
?>
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
            background-image: url("data/arcade-unsplash.jpg");
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
            padding: 10px;
            position: relative;
        }
        .container2{
            border:3px;
            border-color: black;
        }
        .parent {
            position: relative;
        }

        .image1 {
            position: relative;
        }

        .image2 {
            position: absolute;
        }

        .error-text{
            margin: auto;
            color: red;
        }
    </style>
</head>

<body>
    <script>
        eyesImages = ['Emoji/Eyes/closed.png', 'Emoji/Eyes/laughing.png', 'Emoji/Eyes/long.png', 'Emoji/Eyes/normal.png', 'Emoji/Eyes/rolling.png', 'Emoji/Eyes/winking.png']
        mouthImages = ['Emoji/Mouth/open.png', 'Emoji/Mouth/sad.png', 'Emoji/Mouth/smiling.png', 'Emoji/Mouth/straight.png', 'Emoji/Mouth/surprise.png', 'Emoji/Mouth/teeth.png']
        skinImages = ['Emoji/Skin/green.png', 'Emoji/Skin/red.png', 'Emoji/Skin/yellow.png']
        eyesIndex = 0
        mouthIndex = 0
        skinIndex = 0
        function nextEyes(){
            eyesIndex += 1;
            if (eyesIndex == 6){
                eyesIndex = 0;
            }
            document.getElementById('eyes-image').setAttribute('src',eyesImages[eyesIndex])
            document.getElementById('pfp-eyes').setAttribute('value',eyesImages[eyesIndex])
        }
        function nextSkin(){
            skinIndex += 1;
            if (skinIndex == 3){
                skinIndex = 0;
            }
            document.getElementById('skin-image').setAttribute('src',skinImages[skinIndex])
            document.getElementById('pfp-skin').setAttribute('value',skinImages[skinIndex])
        }
        function nextMouth(){
            mouthIndex += 1;
            if (mouthIndex == 6){
                mouthIndex = 0;
            }
            if (mouthIndex == 4){
                document.getElementById('mouth-image').setAttribute('style','width: 500px; height: 500px;')
            }
            else{
                document.getElementById('mouth-image').setAttribute('style','')
            }
            document.getElementById('mouth-image').setAttribute('src',mouthImages[mouthIndex])
            document.getElementById('pfp-mouth').setAttribute('value',mouthImages[mouthIndex])
        }
        function validateForm(){
            let username = document.forms["register-form"]["user"].value;
            if (username.includes(' ') || username.includes('"') || username.includes('!') || username.includes('@') || username.includes('#') || username.includes('%') || username.includes('&') || username.includes('*') || username.includes('(') || username.includes(')') || username.includes('+') || username.includes('=') || username.includes('{') || username.includes('}') || username.includes('[') || username.includes(']') || username.includes('-') || username.includes('—') || username.includes(';') || username.includes(':') || username.includes('“') || username.includes('“') || username.includes('“') || username.includes('“') || username.includes('’') || username.includes('”') || username.includes('<') || username.includes('>') || username.includes('?') || username.includes('/') || username == ""){
                document.getElementById("error-text").setAttribute('style','color: red;')
                document.getElementById("temp").remove()
                document.getElementById("temp2").remove()
                document.getElementById("temp3").remove()
                return false;
            }
            else{
                document.getElementById("error-text").setAttribute('style','style="position: absolute; width: 1px; height: 1px; margin: -1px; border: 0; padding: 0; clip: rect(0 0 0 0); overflow: hidden; color: red;"')
            }
            return true;
        }
    </script>
    <div class="mainbody" id="main">
        <div class="container">
            <div class="center">
                <h1 style="color: black; font-size:50px;">
                    <b>Registration</b>
                </h1>
            </div>
            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
            <div class="center">
                <form name = "register-form" method="POST" action="register-complete.php" onsubmit="return validateForm()">
                    <b>Username:  <input type='text' name='user'>
                    <p class="error-text" id="error-text" style="position: absolute; width: 1px; height: 1px; margin: -1px; border: 0; padding: 0; clip: rect(0 0 0 0); overflow: hidden; color: red;">Error: Your username contains an illegal syntax or has been<br> left empty! Please try again.</p>
                    <br id="temp2"><br id="temp"><br id="temp3">
                    Profile Picture:    </b>
                    <br><br>
                    <button type="button" onclick="nextEyes()">Next Eyes</button>
                    <button type="button" onclick="nextMouth()">Next Mouth</button>
                    <button type="button" onclick="nextSkin()">Next Skin</button>
                    <br>
                    <div class="container2 card parent" style="height:500px; width:500px;">
                        <img id="skin-image" class="image1" src="Emoji/Skin/green.png">
                        <img id="eyes-image" class="image2" src="Emoji/Eyes/closed.png">
                        <img id="mouth-image" class="image2" src="Emoji/Mouth/open.png">
                    </div>
                    <br>

                    <input id="pfp-skin" style="position: absolute; width: 1px; height: 1px; margin: -1px; border: 0; padding: 0; clip: rect(0 0 0 0); overflow: hidden;" name="pfp-skin" value="Emoji/Skin/green.png">
                    <input id="pfp-eyes" style="position: absolute; width: 1px; height: 1px; margin: -1px; border: 0; padding: 0; clip: rect(0 0 0 0); overflow: hidden;" name="pfp-eyes" value="Emoji/Eyes/closed.png">
                    <input id="pfp-mouth" style="position: absolute; width: 1px; height: 1px; margin: -1px; border: 0; padding: 0; clip: rect(0 0 0 0); overflow: hidden;" name="pfp-mouth" value="Emoji/Mouth/open.png">

                    <input type="submit" value="Submit Registration" class="start-button btn btn-success center">
                </form>
            </div>
        </div>
    </div>
</body>
</html>