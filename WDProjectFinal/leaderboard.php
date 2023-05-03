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
        .gameborder {
            position: absolute;
            top: 50%;
            left: 50%;
            margin-top: -24vw;
            margin-left: -25vw;
            width: 50vw;
	    box-shadow: 5px;
	    width: fit-content;
        }
        .center {
            margin-left: auto;
            margin-right: auto;
        }
        table{
            border: 4px solid black;
            font-size: 30px;
            border-spacing: 2px;
            background-color: blue;
            color: yellowgreen;
            padding: 5px;
        }
        th, td {
            border: 2px solid rgb(184, 178, 178);
            font-size: 30px;
            border-spacing: 2px;
            background-color: blue;
            color: yellowgreen;
            padding: 5px;
        }
    </style>
</head>
<body>
    <div class="mainbody" id="main">
        <div id="game" class="gameborder card" style="background-color: rgb(184, 178, 178);">
        <div class="text-center">
            <h1 style="font-size:3vw"><b>Leaderboard</b></h1>
            <table id="leaderboard" class="center">
                <tr style="color: blueviolet;">
                    <td style="color: orange;"><b><u>Score</u></b></td>
                    <td style="color: orange;"><b><u>Username</u></b></td>
                    <td style="color: orange;"><b><u>Level 1</u></b></td>
                    <td style="color: orange;"><b><u>Level 2</u></b></td>
                    <td style="color: orange;"><b><u>Level 3</u></b></td>
                    <td style="color: orange;"><b><u>Level 4</u></b></td>
                    <td style="color: orange;"><b><u>Level 5</u></b></td>
                    <td style="color: orange;"><b><u>Level 6</u></b></td>
                    <td style="color: orange;"><b><u>Level 7</u></b></td>
                    <td style="color: orange;"><b><u>Level 8</u></b></td>
                </tr>
                <tr id="position1">
                    <td id="1x1" style="color: rgb(255, 87, 51);">129000</td>
                    <td id="1x2" style="color: rgb(255, 87, 51);">Laurence</td>
                    <td id="1x3" style="color: rgb(255, 87, 51);">31444</td>
                    <td id="1x4" style="color: rgb(255, 87, 51);">12555</td>
                    <td id="1x5" style="color: rgb(255, 87, 51);">341</td>
                    <td id="1x6" style="color: rgb(255, 87, 51);">134134</td>
                    <td id="1x7" style="color: rgb(255, 87, 51);">13414</td>
                    <td id="1x8" style="color: rgb(255, 87, 51);">4314</td>
                    <td id="1x9" style="color: rgb(255, 87, 51);">43413</td>
                    <td id="1x10" style="color: rgb(255, 87, 51);">43443</td>
                </tr>
                <tr id="position2">
                    <td id="2x1" style="color: pink;">129000</td>
                    <td id="2x2" style="color: pink;">Laurence</td>
                    <td id="2x3" style="color: pink;">31444</td>
                    <td id="2x4" style="color: pink;">12555</td>
                    <td id="2x5" style="color: pink;">341</td>
                    <td id="2x6" style="color: pink;">134134</td>
                    <td id="2x7" style="color: pink;">13414</td>
                    <td id="2x8" style="color: pink;">4314</td>
                    <td id="2x9" style="color: pink;">43413</td>
                    <td id="2x10" style="color: pink;">43443</td>
                </tr>
                <tr id="position3">
                    <td id="3x1" style="color: brown;">129000</td>
                    <td id="3x2" style="color: brown;">Laurence</td>
                    <td id="3x3" style="color: brown;">31444</td>
                    <td id="3x4" style="color: brown;">12555</td>
                    <td id="3x5" style="color: brown;">341</td>
                    <td id="3x6" style="color: brown;">134134</td>
                    <td id="3x7" style="color: brown;">13414</td>
                    <td id="3x8" style="color: brown;">4314</td>
                    <td id="3x9" style="color: brown;">43413</td>
                    <td id="3x10" style="color: brown;">43443</td>
                </tr>
                <tr id="position4">
                    <td id="4x1">129000</td>
                    <td id="4x2">Laurence</td>
                    <td id="4x3">31444</td>
                    <td id="4x4">12555</td>
                    <td id="4x5">341</td>
                    <td id="4x6">134134</td>
                    <td id="4x7">13414</td>
                    <td id="4x8">4314</td>
                    <td id="4x9">43413</td>
                    <td id="4x10">43443</td>
                </tr>
                <tr id="position5">
                    <td id="5x1">129000</td>
                    <td id="5x2">Laurence</td>
                    <td id="5x3">31444</td>
                    <td id="5x4">12555</td>
                    <td id="5x5">341</td>
                    <td id="5x6">134134</td>
                    <td id="5x7">13414</td>
                    <td id="5x8">4314</td>
                    <td id="5x9">43413</td>
                    <td id="5x10">43443</td>
                </tr>
                <tr id="position6">
                    <td id="6x1">129000</td>
                    <td id="6x2">Laurence</td>
                    <td id="6x3">31444</td>
                    <td id="6x4">12555</td>
                    <td id="6x5">341</td>
                    <td id="6x6">134134</td>
                    <td id="6x7">13414</td>
                    <td id="6x8">4314</td>
                    <td id="6x9">43413</td>
                    <td id="6x10">43443</td>
                </tr>
                <tr id="position7">
                    <td id="7x1">129000</td>
                    <td id="7x2">Laurence</td>
                    <td id="7x3">31444</td>
                    <td id="7x4">12555</td>
                    <td id="7x5">341</td>
                    <td id="7x6">134134</td>
                    <td id="7x7">13414</td>
                    <td id="7x8">4314</td>
                    <td id="7x9">43413</td>
                    <td id="7x10">43443</td>
                </tr>
                <tr id="position8">
                    <td id="8x1">129000</td>
                    <td id="8x2">Laurence</td>
                    <td id="8x3">31444</td>
                    <td id="8x4">12555</td>
                    <td id="8x5">341</td>
                    <td id="8x6">134134</td>
                    <td id="8x7">13414</td>
                    <td id="8x8">4314</td>
                    <td id="8x9">43413</td>
                    <td id="8x10">43443</td>
                </tr>
                <tr id="position9">
                    <td id="9x1">129000</td>
                    <td id="9x2">Laurence</td>
                    <td id="9x3">31444</td>
                    <td id="9x4">12555</td>
                    <td id="9x5">341</td>
                    <td id="9x6">134134</td>
                    <td id="9x7">13414</td>
                    <td id="9x8">4314</td>
                    <td id="9x9">43413</td>
                    <td id="9x10">43443</td>
                </tr>
                <tr id="position10">
                    <td id="10x1">129000</td>
                    <td id="10x2">Laurence</td>
                    <td id="10x3">31444</td>
                    <td id="10x4">12555</td>
                    <td id="10x5">341</td>
                    <td id="10x6">134134</td>
                    <td id="10x7">13414</td>
                    <td id="10x8">4314</td>
                    <td id="10x9">43413</td>
                    <td id="10x10">43443</td>
                </tr>
            </table>
            <script>
                var leaderboardContents = "<?php
                    $contents = file_get_contents('leaderboard.txt');
		    echo $contents; ?>"
                var individuals = leaderboardContents.split(";");
                for (let i = 0; i < individuals.length; i++) {
                    var individualData = individuals[i].split("|");
                    for (let j = 0; j  < individualData.length; j++) {
                        document.getElementById((i+1)+"x"+(j+1)).innerHTML = individualData[j]
                    }
                }
            </script>
            <br>
        </div>
        </div>
    </div>
</body>

</html>
