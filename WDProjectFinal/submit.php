<?php
        include 'navmenu.php'; 
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
         $new_score = $_POST['score'];
         $user = $_COOKIE['user'];
         $level1 = $_POST['l1'];
         $level2 = $_POST['l2'];
         $level3 = $_POST['l3'];
         $level4 = $_POST['l4'];
         $level5 = $_POST['l5'];
         $level6 = $_POST['l6'];
         $level7 = $_POST['l7'];
         $level8 = $_POST['l8'];
         
        $contents = file_get_contents('leaderboard.txt');
        $top_scores = explode(";", $contents);
        $score1 = explode("|",$top_scores[0])[0];
        $score2 = explode("|",$top_scores[1])[0];
        $score3 = explode("|",$top_scores[2])[0];
        $score4 = explode("|",$top_scores[3])[0];
        $score5 = explode("|",$top_scores[4])[0];
        $score6 = explode("|",$top_scores[5])[0];
        $score7 = explode("|",$top_scores[6])[0];
        $score8 = explode("|",$top_scores[7])[0];
        $score9 = explode("|",$top_scores[8])[0];
        $score10 = explode("|",$top_scores[9])[0];
        $in_sheet = false;
        $sheet_position;
        if ($new_score > $score1){
            $in_sheet = true;
            $sheet_position = 1;
        }
        if ($new_score > $score2 && $in_sheet == false){
            
            $in_sheet = true;
            $sheet_position = 2;
        }
        if ($new_score > $score3 && $in_sheet == false){
            
            $in_sheet = true;
            $sheet_position = 3;
        }
        if ($new_score > $score4 && $in_sheet == false){
            
            $in_sheet = true;
            $sheet_position = 4;
        }
        if ($new_score > $score5 && $in_sheet == false){
            
            $in_sheet = true;
            $sheet_position = 5;
        }
        if ($new_score > $score6 && $in_sheet == false){
            
            $in_sheet = true;
            $sheet_position = 6;
        }
        if ($new_score > $score7 && $in_sheet == false){
            
            $in_sheet = true;
            $sheet_position = 7;
        }
        if ($new_score > $score8 && $in_sheet == false){
            
            $in_sheet = true;
            $sheet_position = 8;
        }
        if ($new_score > $score9 && $in_sheet == false){
            
            $in_sheet = true;
            $sheet_position = 9;
        }
        if ($new_score > $score10 && $in_sheet == false){
            
            $in_sheet = true;
            $sheet_position = 10;
        }

        if ($sheet_position == 1){
            $top_scores[10] = $top_scores[9];
            $top_scores[9] = $top_scores[8];
            $top_scores[8] = $top_scores[7];
            $top_scores[7] = $top_scores[6];
            $top_scores[6] = $top_scores[5];
            $top_scores[5] = $top_scores[4];
            $top_scores[4] = $top_scores[3];
            $top_scores[3] = $top_scores[2];
            $top_scores[2] = $top_scores[1];
            $top_scores[1] = $top_scores[0];
            $top_scores[0] = $new_score . "|" .  $user . "|" . $level1 . "|" . $level2 . "|" . $level3 . "|" . $level4 . "|" . $level5 . "|" . $level6 . "|" . $level7 . "|" . $level8;
        }
        if ($sheet_position == 2){
            $top_scores[10] = $top_scores[9];
            $top_scores[9] = $top_scores[8];
            $top_scores[8] = $top_scores[7];
            $top_scores[7] = $top_scores[6];
            $top_scores[6] = $top_scores[5];
            $top_scores[5] = $top_scores[4];
            $top_scores[4] = $top_scores[3];
            $top_scores[3] = $top_scores[2];
            $top_scores[2] = $top_scores[1];
            $top_scores[1] = $new_score . "|" .  $user . "|" . $level1 . "|" . $level2 . "|" . $level3 . "|" . $level4 . "|" . $level5 . "|" . $level6 . "|" . $level7 . "|" . $level8;
        }
        if ($sheet_position == 3){
            $top_scores[10] = $top_scores[9];
            $top_scores[9] = $top_scores[8];
            $top_scores[8] = $top_scores[7];
            $top_scores[7] = $top_scores[6];
            $top_scores[6] = $top_scores[5];
            $top_scores[5] = $top_scores[4];
            $top_scores[4] = $top_scores[3];
            $top_scores[3] = $top_scores[2];
            $top_scores[2] = $new_score . "|" .  $user . "|" . $level1 . "|" . $level2 . "|" . $level3 . "|" . $level4 . "|" . $level5 . "|" . $level6 . "|" . $level7 . "|" . $level8;
        }
        if ($sheet_position == 4){
            $top_scores[10] = $top_scores[9];
            $top_scores[9] = $top_scores[8];
            $top_scores[8] = $top_scores[7];
            $top_scores[7] = $top_scores[6];
            $top_scores[6] = $top_scores[5];
            $top_scores[5] = $top_scores[4];
            $top_scores[4] = $top_scores[3];
            $top_scores[3] = $new_score . "|" .  $user . "|" . $level1 . "|" . $level2 . "|" . $level3 . "|" . $level4 . "|" . $level5 . "|" . $level6 . "|" . $level7 . "|" . $level8;
        }
        if ($sheet_position == 5){
            $top_scores[10] = $top_scores[9];
            $top_scores[9] = $top_scores[8];
            $top_scores[8] = $top_scores[7];
            $top_scores[7] = $top_scores[6];
            $top_scores[6] = $top_scores[5];
            $top_scores[5] = $top_scores[4];
            $top_scores[4] = $new_score . "|" .  $user . "|" . $level1 . "|" . $level2 . "|" . $level3 . "|" . $level4 . "|" . $level5 . "|" . $level6 . "|" . $level7 . "|" . $level8;
        }
        if ($sheet_position == 6){
            $top_scores[10] = $top_scores[9];
            $top_scores[9] = $top_scores[8];
            $top_scores[8] = $top_scores[7];
            $top_scores[7] = $top_scores[6];
            $top_scores[6] = $top_scores[5];
            $top_scores[5] = $new_score . "|" .  $user . "|" . $level1 . "|" . $level2 . "|" . $level3 . "|" . $level4 . "|" . $level5 . "|" . $level6 . "|" . $level7 . "|" . $level8;
        }
        if ($sheet_position == 7){
            $top_scores[10] = $top_scores[9];
            $top_scores[9] = $top_scores[8];
            $top_scores[8] = $top_scores[7];
            $top_scores[7] = $top_scores[6];
            $top_scores[6] = $new_score . "|" .  $user . "|" . $level1 . "|" . $level2 . "|" . $level3 . "|" . $level4 . "|" . $level5 . "|" . $level6 . "|" . $level7 . "|" . $level8;
        }
        if ($sheet_position == 8){
            $top_scores[10] = $top_scores[9];
            $top_scores[9] = $top_scores[8];
            $top_scores[8] = $top_scores[7];
            $top_scores[7] = $new_score . "|" .  $user . "|" . $level1 . "|" . $level2 . "|" . $level3 . "|" . $level4 . "|" . $level5 . "|" . $level6 . "|" . $level7 . "|" . $level8;
        }
        if ($sheet_position == 9){
            $top_scores[10] = $top_scores[9];
            $top_scores[9] = $top_scores[8];
            $top_scores[8] = $new_score . "|" .  $user . "|" . $level1 . "|" . $level2 . "|" . $level3 . "|" . $level4 . "|" . $level5 . "|" . $level6 . "|" . $level7 . "|" . $level8;
        }
        if ($sheet_position == 10){
            $top_scores[10] = $top_scores[9];
            $top_scores[9] = $new_score . "|" .  $user . "|" . $level1 . "|" . $level2 . "|" . $level3 . "|" . $level4 . "|" . $level5 . "|" . $level6 . "|" . $level7 . "|" . $level8;
        }

        $new_top_scores = array($top_scores[0],$top_scores[1],$top_scores[2],$top_scores[3],$top_scores[4],$top_scores[5],$top_scores[6],$top_scores[7],$top_scores[8],$top_scores[9]);
        $new_contents = implode(";", $new_top_scores);
        file_put_contents('leaderboard.txt', $new_contents);
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
                    <h1 style="color: orange;"><b>Score Submitted!</b></h1>
                </div>
                <div class="center">
                    <button class="btn btn-success start-button" onclick="window.location.href='leaderboard.php';">Leaderboard</button>
                </div>
            </div>
        </div>
    </body>
</html>
