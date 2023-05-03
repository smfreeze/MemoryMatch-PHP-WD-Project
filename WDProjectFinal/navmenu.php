<nav class="navbar navbar-expand-lg bg-primary">
     <div class="container-fluid">
      <div id="pfp" style="position: absolute; width: 1px; height: 1px; margin: -1px; border: 0; padding: 0; clip: rect(0 0 0 0); overflow: hidden;">
        <img id="skin-image1" style="position: absolute; height: 50px; width: 50px;" src="Emoji/Skin/green.png">
        <img id="eyes-image1" style="position: absolute; height: 50px; width: 50px;" src="Emoji/Eyes/closed.png">
        <img id="mouth-image1" style="position: absolute; height: 50px; width: 50px;" src="Emoji/Mouth/open.png">
      </div>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php" name="home" style="font-family: Verdana; font-size: 12px; color: black;">Home</a>
          </li>
        </ul>
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="pairs.php" name="memory" style="font-family: Verdana; font-size: 12px; color: black;">Play Pairs</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="register-option" style="font-family: Verdana; font-size: 12px; color: black;"></a>
          </li>
        </ul>
      </div>
    </div>
</nav>
<script>
  var user = "<?php if (isset($_COOKIE['user']) && !empty($_COOKIE['user'])) {
            echo $_COOKIE['user'];
        }
        else{
            echo "!";
        }; ?>"
        if (user != "!"){
          document.getElementById('register-option').setAttribute('href','leaderboard.php');
          document.getElementById('register-option').innerHTML = 'Leaderboard';
          document.getElementById('register-option').setAttribute('name','leaderboard');

          document.getElementById('pfp').setAttribute('style','position: relative; height: 40px; width: 40px; top: -5px; left: -25px;'); //to make pfp visible, not just to DOM, but to user now.
          document.getElementById('pfp').setAttribute('class','img-header');
        }
        else{
          document.getElementById('register-option').setAttribute('href','registration.php');
          document.getElementById('register-option').innerHTML = 'Register';
          document.getElementById('register-option').setAttribute('name','register');
    }

  var skinImageObj = "<?php if (isset($_COOKIE['skin-image']) && !empty($_COOKIE['skin-image'])) {
            echo $_COOKIE['skin-image'];
        }
        else{
            echo "!";
        }; ?>"
  if (skinImageObj != '!' ){
    document.getElementById('skin-image1').setAttribute('src', skinImageObj)
  }
  var mouthImageObj = "<?php if (isset($_COOKIE['mouth-image']) && !empty($_COOKIE['mouth-image'])) {
            echo $_COOKIE['mouth-image'];
        }
        else{
            echo "!";
        }; ?>"
  if (mouthImageObj != '!' ){
    document.getElementById('mouth-image1').setAttribute('src', mouthImageObj)
  }
  var eyesImageObj = "<?php if (isset($_COOKIE['eyes-image']) && !empty($_COOKIE['eyes-image'])) {
            echo $_COOKIE['eyes-image'];
        }
        else{
            echo "!";
        }; ?>"
  if (eyesImageObj != '!' ){
    document.getElementById('eyes-image1').setAttribute('src', eyesImageObj)
  }
</script>