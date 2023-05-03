eyesImages = ['Emoji/Eyes/closed.png','Emoji/Eyes/laughing.png','Emoji/Eyes/long.png','Emoji/Eyes/normal.png','Emoji/Eyes/rolling.png','Emoji/Eyes/winking.png']
mouthImages = ['Emoji/Mouth/open.png','Emoji/Mouth/sad.png','Emoji/Mouth/smiling.png','Emoji/Mouth/straight.png','Emoji/Mouth/surprise.png','Emoji/Mouth/teeth.png']
skinImages = ['Emoji/Skin/green.png','Emoji/Skin/red.png','Emoji/Skin/yellow.png']
let availableImages = []
let level = 1;
let totalMoves = 0;
let audioStarted = false;
let levelHeaderCreated = false;
let currentQueue = []
let queueIndex = 0
var totalPoints = 0


function start(){
    const startTime = Date.now();
    availableImages = []
    for(let j=1;j<=level*2;j++){ 
        let randomNumber6 = Math.floor(Math.random() * 6)
        let randomNumber3 = Math.floor(Math.random() * 3)
        let randomNumber62 = Math.floor(Math.random() * 6)
        newImgDiv = []
        newImgDiv.push(skinImages[randomNumber3]+'&'+eyesImages[randomNumber6]+'&'+mouthImages[randomNumber62])
        console.log(newImgDiv + 'new div')
        availableImages.push(newImgDiv)
        availableImages.push(newImgDiv)
    }
    if (!audioStarted){
        let luigiSong = document.createElement('audio');
        luigiSong.setAttribute('autoplay', true);
        luigiSong.setAttribute('loop', true);
        luigiSong.setAttribute('src','Audio/luigi.mp3');
        document.getElementById('audio').appendChild(luigiSong);
        audioStarted = true;
    }

    if (!levelHeaderCreated){
        let levelHeader = document.createElement('h4');
        switch (level){
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
        }
        levelHeader.setAttribute('id','levelHeader');
        document.getElementById('level').appendChild(levelHeader);
        levelHeaderCreated = true;
    }
    else {
        levelHeader = document.getElementById('levelHeader');
        switch (level){
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
        }
    }
    document.getElementById('startButton').innerHTML = 'Restart Level';
    document.getElementById('startButton').setAttribute('class','red-button btn btn-danger')
    let moves =0;
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
    totalMovesButton.setAttribute('id','totalMovesButton')


    var row = document.createElement('div')
    for(let j=1;j<=level*4;j++){
        var div = document.createElement('div')
        var imageInfo = availableImages.splice(Math.floor(Math.random() * availableImages.length),1);
        var img1 = document.createElement('img')
        var img2 = document.createElement('img')
        var img3 = document.createElement('img')
        console.log(imageInfo)
        console.log(imageInfo[0][0].split('&')[0] + imageInfo[0][0].split('&')[1] + imageInfo[0][0].split('&')[2])
        img1.setAttribute('class','image1 img hide')
        img1.setAttribute('src', imageInfo[0][0].split('&')[0])
        img2.setAttribute('class','image2 img hide')
        img2.setAttribute('src', imageInfo[0][0].split('&')[1])
        img3.setAttribute('class','image2 img hide')
        img3.setAttribute('src', imageInfo[0][0].split('&')[2])
        div.setAttribute('class','imgdiv card parent');
        div.appendChild(img1)
        div.appendChild(img2)
        div.appendChild(img3)
        row.appendChild(div);
        
        if(j%4==0){
            document.getElementById('boardgame').append(row)
            row = document.createElement('div')
        }

        div.addEventListener('click',function(event){
            moves++;
            document.getElementById('totalMovesButton').innerHTML = 'Moves: ' + moves;
            let curr = event.currentTarget.children
            curr[0].classList.add('showimg')
            curr[1].classList.add('showimg')
            curr[2].classList.add('showimg')
            currentQueue[queueIndex] = curr;
            try {
                if (currentQueue[queueIndex - 1][0].src == currentQueue[queueIndex][0].src && currentQueue[queueIndex - 1][1].src == currentQueue[queueIndex][1].src && currentQueue[queueIndex - 1][2].src == currentQueue[queueIndex][2].src){
                    console.log('match')
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
                    currentQueue[queueIndex - 1][0].classList.remove('showimg')
                    currentQueue[queueIndex - 1][1].classList.remove('showimg')
                    currentQueue[queueIndex - 1][2].classList.remove('showimg')
                    currentQueue[queueIndex - 1] = currentQueue[queueIndex]
                    currentQueue.pop()
                    queueIndex = 1
                }
            }
            catch(err) {
                queueIndex = 1
            }

            if(document.getElementsByClassName('match').length>=level*4*3){
                level++;
                totalMoves += moves;
                if (level < 5){
                    totalMovesButton.remove();

                    //add level _ beaten in _ moves text area
                    let button = document.createElement('button');
                    button.setAttribute('class' , 'btn btn-warning');
                    const endTime = Date.now()
                    button.innerHTML = "Moves Taken: " + moves + "<br> Time Taken: " + (endTime-startTime)/1000 + "s";
                    document.getElementById('score').appendChild(button);

                    //set start game button to next level button
                    document.getElementById('startButton').innerHTML = 'Next Level';
                    document.getElementById('startButton').setAttribute('class', 'next-button btn btn-success')


                    /////////////////////////////////////////////////////////////////////////////////////////////////

                    levelHeader = document.getElementById('levelHeader');
                    var points = Math.round((level*4*2 - moves)*1000+(((level*4 + 3)*1000)-(endTime-startTime)))
                    if (points < 0){
                        points = 0
                    }
                    totalPoints += points
                    levelHeader.innerHTML = '<b>Level ' + (level - 1) + ' Beaten!</b><br> You Scored ' + points + ' Points';
                }
                else {
                    levelHeader = document.getElementById('levelHeader');
                    levelHeader.remove();

                    totalMovesButton.remove();

                    //add <br>
                    var mybr = document.createElement('br');
                    document.getElementById('score').appendChild(mybr);

                    //add final level beaten text
                    let finalLevelBeat = document.createElement('h2');
                    const endTime = Date.now()
                    var points = Math.round((level*4*2 - moves)*1000+(((level*4 + 3)*1000)-(endTime-startTime)))
                    if (points < 0){
                        points = 0
                    }
                    totalPoints += points
                    finalLevelBeat.innerHTML = "<b>Level "+(level-1)+" Info</b>:<br>Moves Taken: " + moves + "<br>Time Taken: " + (endTime-startTime)/1000 + "s<br>Points: " + points + '<br><br>'
                    document.getElementById('score').appendChild(finalLevelBeat);

                    //add game beaten text area
                    let gameFinishedButton = document.createElement('h2');
                    gameFinishedButton.innerHTML = "<b>Game Info:</b><br>Total Moves Taken: " + totalMoves
                    document.getElementById('score').appendChild(gameFinishedButton);
                    //removing the board at the end
                    while (maindiv.firstChild) {
                        maindiv.removeChild(maindiv.lastChild);
                    }

                    //remove next level button
                    document.getElementById('startButton').remove();

                    //change main game text to 'you won'
                    document.getElementById('mainGameText').innerHTML = '<u>You Won!</u><br> Total <u>' + totalPoints + '</u> Points'

                    //end game stuff (restart, upload score)
                    let restartButton = document.createElement('button');
                    restartButton.innerHTML = 'Restart'
                    restartButton.setAttribute('class', 'btn btn-success start-button');
                    let uploadScoreButton = document.createElement('button');
                    uploadScoreButton.innerHTML = 'Upload Score'
                    uploadScoreButton.setAttribute('class', 'btn btn-success start-button');
                    document.getElementById('endgame').appendChild(restartButton);
                    restartButton.addEventListener('click',function(event){
                        location.reload()
                    })
                    document.getElementById('endgame').appendChild(uploadScoreButton);
                    restartButton.addEventListener('click',function(event){
                        location.reload()
                    })
                }
            }
        })
    }
}
