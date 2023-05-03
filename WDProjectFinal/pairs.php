<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Pairs</title>
    <script>
        eyesImages = ['Emoji/Eyes/closed.png', 'Emoji/Eyes/laughing.png', 'Emoji/Eyes/long.png', 'Emoji/Eyes/normal.png', 'Emoji/Eyes/rolling.png', 'Emoji/Eyes/winking.png']
        mouthImages = ['Emoji/Mouth/open.png', 'Emoji/Mouth/sad.png', 'Emoji/Mouth/smiling.png', 'Emoji/Mouth/straight.png', 'Emoji/Mouth/surprise.png', 'Emoji/Mouth/teeth.png']
        skinImages = ['Emoji/Skin/green.png', 'Emoji/Skin/red.png', 'Emoji/Skin/yellow.png']
        let availableImages = []
        let level = 1;
        let totalMoves = 0;
        let audioStarted = false;
        let levelHeaderCreated = false;
        var totalPoints = 0;
        let scorerAppended = false;
        let pointsByLevel = [];

        function start() {
            if (!scorerAppended){
                totalPointsActive = document.createElement('h2')
                totalPointsActive.innerHTML = totalPoints + ' Points'
                document.getElementById('activescoring').appendChild(totalPointsActive)
                scorerAppended = true
            }
            else{
                totalPointsActive.innerHTML = totalPoints + ' Points'
            }
            currentQueue = []
            queueIndex = 0
            const startTime = Date.now();
            availableImages = []
            if (level < 5){
                for (let j = 1; j <= level * 2; j++) {
                    let randomNumber6 = Math.floor(Math.random() * 6)
                    let randomNumber3 = Math.floor(Math.random() * 3)
                    let randomNumber62 = Math.floor(Math.random() * 6)
                    newImgDiv = []
                    newImgDiv.push(skinImages[randomNumber3] + '&' + eyesImages[randomNumber6] + '&' + mouthImages[randomNumber62])
                    availableImages.push(newImgDiv)
                    availableImages.push(newImgDiv)
                }
            }
            if (level >=5 && level < 9){
                let wMultiple = 0
                switch(level){
                    case 5:
                        wMultiple = 4;
                        break;
                    case 6:
                        wMultiple = 2;
                        break;
                    case 7:
                        wMultiple = 3;
                        break;
                    case 8:
                        wMultiple = 4;
                        break;
                }
                for (let j = 1; j <= wMultiple; j++){
                    let randomNumber6 = Math.floor(Math.random() * 6)
                    let randomNumber3 = Math.floor(Math.random() * 3)
                    let randomNumber62 = Math.floor(Math.random() * 6)
                    newImgDiv = []
                    newImgDiv.push(skinImages[randomNumber3] + '&' + eyesImages[randomNumber6] + '&' + mouthImages[randomNumber62])
                    switch(level){
                        case 5:
                            availableImages.push(newImgDiv)
                            availableImages.push(newImgDiv)
                            availableImages.push(newImgDiv)
                            break;
                        case 6:
                            availableImages.push(newImgDiv)
                            availableImages.push(newImgDiv)
                            availableImages.push(newImgDiv)
                            availableImages.push(newImgDiv)
                            break;
                        case 7:
                            availableImages.push(newImgDiv)
                            availableImages.push(newImgDiv)
                            availableImages.push(newImgDiv)
                            availableImages.push(newImgDiv)
                            break;
                        case 8:
                            availableImages.push(newImgDiv)
                            availableImages.push(newImgDiv)
                            availableImages.push(newImgDiv)
                            availableImages.push(newImgDiv)
                            break;
                    }
                }
                console.log(availableImages)

            }
            if (!audioStarted) {
                let luigiSong = document.createElement('audio');
                luigiSong.setAttribute('autoplay', true);
                luigiSong.setAttribute('loop', true);
                luigiSong.setAttribute('src', 'Audio/luigi.mp3');
                document.getElementById('audio').appendChild(luigiSong);
                audioStarted = true;
            }

            if (!levelHeaderCreated) {
                let levelHeader = document.createElement('h4');
                switch (level) {
                    case 1:
                        levelHeader.innerHTML = '<b>Level ' + level + '</b><br> Match 2 Groups of 2 Cards';
                        break;
                    case 2:
                        levelHeader.innerHTML = '<b>Level ' + level + '</b><br> Match 4 Groups of 2 Cards';
                        break;
                    case 3:
                        levelHeader.innerHTML = '<b>Level ' + level + '</b><br> Match 6 Groups of 2 Cards';
                        break;
                    case 4:
                        levelHeader.innerHTML = '<b>Level ' + level + '</b><br> Match 8 Groups of 2 Cards';
                        break;
                    case 5:
                        levelHeader.innerHTML = '<b>Level ' + level + '</b><br> Match 4 Groups of 3 Cards';
                        break;
                    case 6:
                        levelHeader.innerHTML = '<b>Level ' + level + '</b><br> Match 2 Groups of 4 Cards';
                        break;
                    case 7:
                        levelHeader.innerHTML = '<b>Level ' + level + '</b><br> Match 3 Groups of 4 Cards';
                        break;
                    case 8:
                        levelHeader.innerHTML = '<b>Level ' + level + '</b><br> Match 4 Groups of 4 Cards';
                        break;
                }
                levelHeader.setAttribute('id', 'levelHeader');
                document.getElementById('level').appendChild(levelHeader);
                levelHeaderCreated = true;
            }
            else {
                levelHeader = document.getElementById('levelHeader');
                switch (level) {
                    case 1:
                        levelHeader.innerHTML = '<b>Level ' + level + '</b><br> Match 2 Groups of 2 Cards';
                        break;
                    case 2:
                        levelHeader.innerHTML = '<b>Level ' + level + '</b><br> Match 4 Groups of 2 Cards';
                        break;
                    case 3:
                        levelHeader.innerHTML = '<b>Level ' + level + '</b><br> Match 6 Groups of 2 Cards';
                        break;
                    case 4:
                        levelHeader.innerHTML = '<b>Level ' + level + '</b><br> Match 8 Groups of 2 Cards';
                        break;
                    case 5:
                        levelHeader.innerHTML = '<b>Level ' + level + '</b><br> Match 4 Groups of 3 Cards';
                        break;
                    case 6:
                        levelHeader.innerHTML = '<b>Level ' + level + '</b><br> Match 2 Groups of 4 Cards';
                        break;
                    case 7:
                        levelHeader.innerHTML = '<b>Level ' + level + '</b><br> Match 3 Groups of 4 Cards';
                        break;
                    case 8:
                        levelHeader.innerHTML = '<b>Level ' + level + '</b><br> Match 4 Groups of 4 Cards';
                        break;
                }
            }
            document.getElementById('startButton').innerHTML = 'Restart Level';
            document.getElementById('startButton').setAttribute('class', 'red-button btn btn-danger')
            let moves = 0;
            let arrayFixed = false;
            const maindiv = document.getElementById("boardgame");
            while (maindiv.firstChild) {
                maindiv.removeChild(maindiv.lastChild);
            }
            const scorediv = document.getElementById("score");
            while (scorediv.firstChild) {
                scorediv.removeChild(scorediv.lastChild);
            }

            //creating total moves text area
            let totalMovesButton = document.createElement('button');
            totalMovesButton.innerHTML = 'Moves: ' + moves;
            document.getElementById('score').appendChild(totalMovesButton);
            totalMovesButton.setAttribute('id', 'totalMovesButton')


            var row = document.createElement('div')
            if (level < 5){
                jMultiple = level * 4;
            }
            switch(level){
                case 5:
                    jMultiple = 12;
                    break;
                case 6:
                    jMultiple = 8;
                    break;
                case 7:
                    jMultiple = 12;
                    break;
                case 8:
                    jMultiple = 16;
                    break;
            }
            for (let j = 1; j <= jMultiple; j++) {
                var div = document.createElement('div')
                var imageInfo = availableImages.splice(Math.floor(Math.random() * availableImages.length), 1);
                var img1 = document.createElement('img')
                var img2 = document.createElement('img')
                var img3 = document.createElement('img')
                img1.setAttribute('class', 'image1 img hide')
                img1.setAttribute('src', imageInfo[0][0].split('&')[0])
                img2.setAttribute('class', 'image2 img hide')
                img2.setAttribute('src', imageInfo[0][0].split('&')[1])
                img3.setAttribute('class', 'image2 img hide')
                img3.setAttribute('src', imageInfo[0][0].split('&')[2])
                div.setAttribute('class', 'imgdiv card parent');
                div.appendChild(img1)
                div.appendChild(img2)
                div.appendChild(img3)
                row.appendChild(div);

                if (j % 4 == 0) {
                    document.getElementById('boardgame').append(row)
                    row = document.createElement('div')
                }

                div.addEventListener('click', function (event) {
                    moves++;
                    document.getElementById('totalMovesButton').innerHTML = 'Moves: ' + moves;
                    let curr = event.currentTarget.children
                    curr[0].classList.add('showimg')
                    curr[1].classList.add('showimg')
                    curr[2].classList.add('showimg')
                    currentQueue[queueIndex] = curr;
                    if (level < 5){
                        try {
                            if (currentQueue[queueIndex - 1][0].src == currentQueue[queueIndex][0].src && currentQueue[queueIndex - 1][1].src == currentQueue[queueIndex][1].src && currentQueue[queueIndex - 1][2].src == currentQueue[queueIndex][2].src) {
                                currentQueue[queueIndex - 1][0].classList.add('match')
                                currentQueue[queueIndex - 1][1].classList.add('match')
                                currentQueue[queueIndex - 1][2].classList.add('match')
                                currentQueue[queueIndex][0].classList.add('match')
                                currentQueue[queueIndex][1].classList.add('match')
                                currentQueue[queueIndex][2].classList.add('match')
                                currentQueue = []
                                queueIndex = 0
                            }
                            else {
                                setTimeout(() => {
                                    currentQueue[queueIndex - 1][0].classList.remove('showimg');
                                    currentQueue[queueIndex - 1][1].classList.remove('showimg');
                                    currentQueue[queueIndex - 1][2].classList.remove('showimg');
                                    currentQueue[queueIndex][0].classList.remove('showimg');
                                    currentQueue[queueIndex][1].classList.remove('showimg');
                                    currentQueue[queueIndex][2].classList.remove('showimg');
                                    currentQueue = [];
                                    queueIndex = 0;
                                }, 300)
                            }
                        }
                        catch (err) {
                            queueIndex = 1
                        }
                    }
                    if (level >= 5 && level < 9){
                        switch (level){
                            case 5:
                                try {
                                    if (currentQueue.length == 3){
                                        if (currentQueue[0][0].src == currentQueue[1][0].src && currentQueue[0][1].src == currentQueue[1][1].src && currentQueue[0][2].src == currentQueue[1][2].src && currentQueue[0][0].src == currentQueue[2][0].src && currentQueue[0][1].src == currentQueue[2][1].src && currentQueue[0][2].src == currentQueue[2][2].src) {
                                            currentQueue[0][0].classList.add('match')
                                            currentQueue[0][1].classList.add('match')
                                            currentQueue[0][2].classList.add('match')
                                            currentQueue[1][0].classList.add('match')
                                            currentQueue[1][1].classList.add('match')
                                            currentQueue[1][2].classList.add('match')
                                            currentQueue[2][0].classList.add('match')
                                            currentQueue[2][1].classList.add('match')
                                            currentQueue[2][2].classList.add('match')
                                            currentQueue = []
                                            queueIndex = 0
                                        }
                                        else {
                                            setTimeout(() => {
                                                currentQueue[0][0].classList.remove('showimg')
                                                currentQueue[0][1].classList.remove('showimg')
                                                currentQueue[0][2].classList.remove('showimg')
                                                currentQueue[1][0].classList.remove('showimg')
                                                currentQueue[1][1].classList.remove('showimg')
                                                currentQueue[1][2].classList.remove('showimg')
                                                currentQueue[2][0].classList.remove('showimg')
                                                currentQueue[2][1].classList.remove('showimg')
                                                currentQueue[2][2].classList.remove('showimg')
                                                currentQueue = []
                                                queueIndex = 0
                                            }, 300)
                                        }
                                    }
                                    else{
                                        queueIndex += 1
                                    }
                                }
                                catch (err) {
                                    queueIndex += 1
                                }
                                break;
                            case 6:
                                try {
                                    if (currentQueue.length == 4){
                                        if (currentQueue[0][0].src == currentQueue[1][0].src && currentQueue[0][1].src == currentQueue[1][1].src && currentQueue[0][2].src == currentQueue[1][2].src && currentQueue[0][0].src == currentQueue[2][0].src && currentQueue[0][1].src == currentQueue[2][1].src && currentQueue[0][2].src == currentQueue[2][2].src && currentQueue[0][0].src == currentQueue[3][0].src && currentQueue[0][1].src == currentQueue[3][1].src && currentQueue[0][2].src == currentQueue[3][2].src) {
                                            currentQueue[0][0].classList.add('match')
                                            currentQueue[0][1].classList.add('match')
                                            currentQueue[0][2].classList.add('match')
                                            currentQueue[1][0].classList.add('match')
                                            currentQueue[1][1].classList.add('match')
                                            currentQueue[1][2].classList.add('match')
                                            currentQueue[2][0].classList.add('match')
                                            currentQueue[2][1].classList.add('match')
                                            currentQueue[2][2].classList.add('match')
                                            currentQueue[3][0].classList.add('match')
                                            currentQueue[3][1].classList.add('match')
                                            currentQueue[3][2].classList.add('match')
                                            currentQueue = []
                                            queueIndex = 0
                                        }
                                        else {
                                            setTimeout(() => {
                                                currentQueue[0][0].classList.remove('showimg')
                                                currentQueue[0][1].classList.remove('showimg')
                                                currentQueue[0][2].classList.remove('showimg')
                                                currentQueue[1][0].classList.remove('showimg')
                                                currentQueue[1][1].classList.remove('showimg')
                                                currentQueue[1][2].classList.remove('showimg')
                                                currentQueue[2][0].classList.remove('showimg')
                                                currentQueue[2][1].classList.remove('showimg')
                                                currentQueue[2][2].classList.remove('showimg')
                                                currentQueue[3][0].classList.remove('showimg')
                                                currentQueue[3][1].classList.remove('showimg')
                                                currentQueue[3][2].classList.remove('showimg')
                                                currentQueue = []
                                                queueIndex = 0
                                            }, 300)
                                        }
                                    }
                                    else{
                                        queueIndex += 1
                                    }
                                }
                                catch (err) {
                                    queueIndex += 1
                                    console.log(err)
                                }
                                break;
                            case 7:
                                try {
                                    if (currentQueue.length == 4){
                                        if (currentQueue[0][0].src == currentQueue[1][0].src && currentQueue[0][1].src == currentQueue[1][1].src && currentQueue[0][2].src == currentQueue[1][2].src && currentQueue[0][0].src == currentQueue[2][0].src && currentQueue[0][1].src == currentQueue[2][1].src && currentQueue[0][2].src == currentQueue[2][2].src && currentQueue[0][0].src == currentQueue[3][0].src && currentQueue[0][1].src == currentQueue[3][1].src && currentQueue[0][2].src == currentQueue[3][2].src) {
                                            currentQueue[0][0].classList.add('match')
                                            currentQueue[0][1].classList.add('match')
                                            currentQueue[0][2].classList.add('match')
                                            currentQueue[1][0].classList.add('match')
                                            currentQueue[1][1].classList.add('match')
                                            currentQueue[1][2].classList.add('match')
                                            currentQueue[2][0].classList.add('match')
                                            currentQueue[2][1].classList.add('match')
                                            currentQueue[2][2].classList.add('match')
                                            currentQueue[3][0].classList.add('match')
                                            currentQueue[3][1].classList.add('match')
                                            currentQueue[3][2].classList.add('match')
                                            currentQueue = []
                                            queueIndex = 0
                                        }
                                        else {
                                            setTimeout(() => {
                                                currentQueue[0][0].classList.remove('showimg')
                                                currentQueue[0][1].classList.remove('showimg')
                                                currentQueue[0][2].classList.remove('showimg')
                                                currentQueue[1][0].classList.remove('showimg')
                                                currentQueue[1][1].classList.remove('showimg')
                                                currentQueue[1][2].classList.remove('showimg')
                                                currentQueue[2][0].classList.remove('showimg')
                                                currentQueue[2][1].classList.remove('showimg')
                                                currentQueue[2][2].classList.remove('showimg')
                                                currentQueue[3][0].classList.remove('showimg')
                                                currentQueue[3][1].classList.remove('showimg')
                                                currentQueue[3][2].classList.remove('showimg')
                                                currentQueue = []
                                                queueIndex = 0
                                            }, 300)
                                        }
                                    }
                                    else{
                                        queueIndex += 1
                                    }
                                }
                                catch (err) {
                                    queueIndex += 1
                                    console.log(err)
                                }
                                break;
                            case 8:
                                try {
                                    if (currentQueue.length == 4){
                                        if (currentQueue[0][0].src == currentQueue[1][0].src && currentQueue[0][1].src == currentQueue[1][1].src && currentQueue[0][2].src == currentQueue[1][2].src && currentQueue[0][0].src == currentQueue[2][0].src && currentQueue[0][1].src == currentQueue[2][1].src && currentQueue[0][2].src == currentQueue[2][2].src && currentQueue[0][0].src == currentQueue[3][0].src && currentQueue[0][1].src == currentQueue[3][1].src && currentQueue[0][2].src == currentQueue[3][2].src) {
                                            currentQueue[0][0].classList.add('match')
                                            currentQueue[0][1].classList.add('match')
                                            currentQueue[0][2].classList.add('match')
                                            currentQueue[1][0].classList.add('match')
                                            currentQueue[1][1].classList.add('match')
                                            currentQueue[1][2].classList.add('match')
                                            currentQueue[2][0].classList.add('match')
                                            currentQueue[2][1].classList.add('match')
                                            currentQueue[2][2].classList.add('match')
                                            currentQueue[3][0].classList.add('match')
                                            currentQueue[3][1].classList.add('match')
                                            currentQueue[3][2].classList.add('match')
                                            currentQueue = []
                                            queueIndex = 0
                                        }
                                        else {
                                            setTimeout(() => {
                                                currentQueue[0][0].classList.remove('showimg')
                                                currentQueue[0][1].classList.remove('showimg')
                                                currentQueue[0][2].classList.remove('showimg')
                                                currentQueue[1][0].classList.remove('showimg')
                                                currentQueue[1][1].classList.remove('showimg')
                                                currentQueue[1][2].classList.remove('showimg')
                                                currentQueue[2][0].classList.remove('showimg')
                                                currentQueue[2][1].classList.remove('showimg')
                                                currentQueue[2][2].classList.remove('showimg')
                                                currentQueue[3][0].classList.remove('showimg')
                                                currentQueue[3][1].classList.remove('showimg')
                                                currentQueue[3][2].classList.remove('showimg')
                                                currentQueue = []
                                                queueIndex = 0
                                            }, 300)
                                        }
                                    }
                                    else{
                                        queueIndex += 1
                                    }
                                }
                                catch (err) {
                                    queueIndex += 1
                                    console.log(err)
                                }
                                break;
                        }
                    }
                    if (level < 5) {
                        levelMargin = level * 4 * 3
                    }
                    switch(level){
                        case 5:
                            levelMargin = 12 * 3
                            break;
                        case 6:
                            levelMargin = 8 * 3
                            break;
                        case 7:
                            levelMargin = 12 * 3
                            break;
                        case 8:
                            levelMargin = 16 * 3
                            break;
                    }
                    if (document.getElementsByClassName('match').length >= levelMargin) {
                        level++;
                        totalMoves += moves;
                        if (level < 9) {
                            totalMovesButton.remove();

                            //add level _ beaten in _ moves text area
                            let button = document.createElement('button');
                            button.setAttribute('class', 'btn btn-warning');
                            const endTime = Date.now()
                            button.innerHTML = "Moves Taken: " + moves + "<br> Time Taken: " + (endTime - startTime) / 1000 + "s";
                            document.getElementById('score').appendChild(button);

                            //set start game button to next level button
                            document.getElementById('startButton').innerHTML = 'Next Level';
                            document.getElementById('startButton').setAttribute('class', 'next-button btn btn-success')


                            /////////////////////////////////////////////////////////////////////////////////////////////////

                            levelHeader = document.getElementById('levelHeader');
                            if (level - 1 == 1 || level - 1 == 2 || level - 1 == 3 || level - 1 == 4){
                                scoreDivisor = 2
                            }
                            if(level - 1 == 5){
                                scoreDivisor = 3
                            }
                            else{
                                scoreDivisor = 4
                            }
                            var points = Math.round((((levelMargin/scoreDivisor) * 2 - moves) * 1000 + 10000) + ((levelMargin/scoreDivisor * 2 * 1000) - (endTime - startTime)) + 10000)
                            if (points < 0) {
                                points = 0
                            }
                            totalPoints += points
                            levelHeader.innerHTML = '<b>Level ' + (level - 1) + ' Beaten!</b><br> You Scored ' + points + ' Points';
                            pointsByLevel.push(points)
                        }
                        else {
                            levelHeader = document.getElementById('levelHeader');
                            levelHeader.remove();

                            totalMovesButton.remove();

                            //add <br>
                            var mybr = document.createElement('br');
                            document.getElementById('score').appendChild(mybr);

                            //add final level beaten text
                            let finalLevelBeat = document.createElement('h4');
                            const endTime = Date.now()
                            if (level - 1 == 1 || level - 1 == 2 || level - 1 == 3 || level - 1 == 4){
                                scoreDivisor = 2
                            }
                            if(level - 1 == 5){
                                scoreDivisor = 3
                            }
                            else{
                                scoreDivisor = 4
                            }
                            var points = Math.round((((levelMargin/scoreDivisor) * 2 - moves) * 1000 + 10000) + ((levelMargin/scoreDivisor * 2 * 1000) - (endTime - startTime)) + 10000)
                            if (points < 0) {
                                points = 0
                            }
                            totalPoints += points
                            finalLevelBeat.innerHTML = "<b>Level " + (level - 1) + " Info</b>:<br>Moves Taken: " + moves + "<br>Time Taken: " + (endTime - startTime) / 1000 + "s<br>Points: " + points + '<br><br>'
                            pointsByLevel.push(points)
                            document.getElementById('score').appendChild(finalLevelBeat);

                            //add game beaten text area
                            let gameFinishedButton = document.createElement('h3');
                            gameFinishedButton.innerHTML = "<b>Game Info:</b><br>" + totalMoves + " Total Moves<br>Level 1 Points: " + pointsByLevel[0] + "<br>Level 2 Points: " + pointsByLevel[1] + "<br>Level 3 Points: " + pointsByLevel[2] + "<br>Level 4 Points: " + pointsByLevel[3] + "<br>Level 5 Points: " + pointsByLevel[4] + "<br>Level 6 Points: " + pointsByLevel[5] + "<br>Level 7 Points: " + pointsByLevel[6] + "<br>Level 8 Points: " + pointsByLevel[7]//finish here
                            document.getElementById('score').appendChild(gameFinishedButton);
                            //removing the board at the end
                            while (maindiv.firstChild) {
                                maindiv.removeChild(maindiv.lastChild);
                            }

                            //remove active points div at end as we have total points
                            document.getElementById('activescoring').remove()

                            //removing br for aesthetics
                            document.getElementById('br1').remove()
                            document.getElementById('br2').remove()

                            //remove next level button
                            document.getElementById('startButton').remove();

                            //change main game text to 'you won'
                            document.getElementById('mainGameText').innerHTML = '<u>You Won!</u><br> Total <u>' + totalPoints + '</u> Points'

                            //end game stuff (restart, upload score)
                            let restartButton = document.createElement('button');
                            restartButton.innerHTML = 'Start Over'
                            restartButton.setAttribute('class', 'btn btn-success start-button');

                            var user = "<?php if (isset($_COOKIE['user']) && !empty($_COOKIE['user'])) {
                                echo $_COOKIE['user'];
                            }
                            else{
                                echo "!";
                            }; ?>"
                            if (user != "!"){ //if user exists
                                let uploadScoreButton = document.createElement('input');
                                uploadScoreButton.setAttribute('class', 'btn btn-success start-button');
                                uploadScoreButton.setAttribute('type', 'submit')
                                uploadScoreButton.innerHTML = 'Submit Score'

                                scoreForm = document.createElement('form')
                                scoreForm.setAttribute('method','POST')
                                scoreForm.setAttribute('action','submit.php')

                                totalScoreInput = document.createElement('input')
                                totalScoreInput.setAttribute('type','hidden')
                                totalScoreInput.setAttribute('name', 'score')
                                totalScoreInput.setAttribute('value', totalPoints)

                                l1score = document.createElement('input')
                                l1score.setAttribute('type','hidden')
                                l1score.setAttribute('name', 'l1')
                                l1score.setAttribute('value', pointsByLevel[0])

                                l2score = document.createElement('input')
                                l2score.setAttribute('type','hidden')
                                l2score.setAttribute('name', 'l2')
                                l2score.setAttribute('value', pointsByLevel[1])

                                l3score = document.createElement('input')
                                l3score.setAttribute('type','hidden')
                                l3score.setAttribute('name', 'l3')
                                l3score.setAttribute('value', pointsByLevel[2])

                                l4score = document.createElement('input')
                                l4score.setAttribute('type','hidden')
                                l4score.setAttribute('name', 'l4')
                                l4score.setAttribute('value', pointsByLevel[3])
                                
                                l5score = document.createElement('input')
                                l5score.setAttribute('type','hidden')
                                l5score.setAttribute('name', 'l5')
                                l5score.setAttribute('value', pointsByLevel[4])

                                l6score = document.createElement('input')
                                l6score.setAttribute('type','hidden')
                                l6score.setAttribute('name', 'l6')
                                l6score.setAttribute('value', pointsByLevel[5])

                                l7score = document.createElement('input')
                                l7score.setAttribute('type','hidden')
                                l7score.setAttribute('name', 'l7')
                                l7score.setAttribute('value', pointsByLevel[6])

                                l8score = document.createElement('input')
                                l8score.setAttribute('type','hidden')
                                l8score.setAttribute('name', 'l8')
                                l8score.setAttribute('value', pointsByLevel[7])

                                scoreForm.appendChild(totalScoreInput);

                                scoreForm.appendChild(l1score);
                                scoreForm.appendChild(l2score);
                                scoreForm.appendChild(l3score);
                                scoreForm.appendChild(l4score);
                                scoreForm.appendChild(l5score);
                                scoreForm.appendChild(l6score);
                                scoreForm.appendChild(l7score);
                                scoreForm.appendChild(l8score);

                                scoreForm.appendChild(uploadScoreButton);
                            }
                            
                            //scoreForm.appendChild(playerInput);
                            //playerInput =document.createElement('input') //for when player is signed in
                            document.getElementById('endgame').appendChild(restartButton);
                            restartButton.addEventListener('click', function (event) {
                                location.reload()
                            })
                            document.getElementById('endgame').appendChild(scoreForm);
                        }
                    }
                })
            }
        }
    </script>
    <style>
        .imgdiv {
            position: relative;
            display: inline-block;
            width: 150px;
            height: 150px;
            line-height: 150px;
            font-size: 20px;
            padding: 10px;
            text-align: center;
            border: 2px solid black;
            cursor: pointer;
        }

        img {
            width: 120px;
            height: 120px;
            padding: 10px;
            ;
        }

        .hide {
            padding: 10px;
            visibility: hidden;
            transition: 0.5s;
        }

        .match,
        .showimg {
            visibility: visible !important;
            transform: rotateY(180deg);
            transform-style: preserve-3d;
            transition: 0.5s;
        }

        .start-button {
            margin: auto;
            width: fit-content;
            border: 3px solid green;
            padding: 20px;
            position: relative;
        }

        .next-button {
            margin: auto;
            width: fit-content;
            border: 3px solid green;
            padding: 10px;
            position: relative;
        }

        .red-button {
            margin: auto;
            width: fit-content;
            border: 3px solid rgb(117, 8, 8);
            padding: 10px;
            position: relative;
        }

        .container {
            position: relative;
        }

        .parent {
            position: relative;
        }

        .image1 {
            position: relative;
            top: -10px;
            left: 0px;
        }

        .image2 {
            position: absolute;
            top: 7px;
            left: 10px;
        }

        .gameborder {
            position: absolute;
            top: 50%;
            left: 50%;
            margin-top: -24vw;
            margin-left: -25vw;
            width: 50vw;
            box-shadow: 5px;
        }

        .mainbody{
            background-image: url("data/arcade-unsplash.jpg");
            background-position: 100% 0%;
            background-repeat: no-repeat;
            background-size: cover;
            position: absolute;
            height:100%;
            width: 100%;
        }
    </style>
</head>
<?php
     include 'navmenu.php'
?>
<body>
    <div id="main" class="mainbody">
        <div id="game" class="gameborder card" style="background-color: rgb(184, 178, 178);">
            <div id="audio"></div>
            <div class="text-center">
                <br>
                <h1 id="mainGameText" style="font-size:3vw"><b>Main Game</b></h1>
                <div id="level"></div>
                <br>
                <button class="btn btn-success start-button" onclick="start()" id="startButton">Start the game</button><br id = br1><br id = br2>
                <div id="score"></div>
                <div id="boardgame"></div>
                <br><br><br>
                <div id="endgame"></div>
                <div id="activescoring"></div>
                <br><br>
            </div>
        </div>
    </div>
</body>

</html>