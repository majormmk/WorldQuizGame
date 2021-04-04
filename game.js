let easyQuestionsArray = ["Which is the largest continent?", "Which is the largest country in the world?", "Which is the smallest continent?",
  "What country has the most population", "How many stars are there on the flag of China?", "What is the largest ocean in the world?",
  "What is the largest island in the world?", "Which is the tallest building in the world?", "What is the capital of Australia?",
  "Is Iceland covered in Ice? True Or False", "Which is the World's highest mountain?", "Which one is the smallest ocean in the world?"];

let easyAnswersArray = ["Asia", "Russia", "Australia", "China", "5", "Pacific Ocean", "Greenland", "Burj Khalifa", "Canberra", "False",
  "Mount Everest", "Arctic",
];

const easyAnswersLowerArray = easyAnswersArray.map(function (answer) {
  return answer.toLowerCase()
})

let toughQuestionsArray = ["In which year, the Danish East India company was formed?", "The pioneer of Communism in India was:",
  "What party did Margaret Thatcher lead?", "The parliment of Great Britain was formed in which year?"];

let toughAnswersArray = ["1616", "M.N.Roy", "Conservative", "1857"];
const toughAnswersLowerArray = toughAnswersArray.map(function (answer) {
  return answer.toLowerCase()
})

let score = 0;

var question = document.getElementById("question");
var answer = document.getElementById("answer-text");
var submit = document.getElementById("submitGeo");
var earthpic =document.getElementById("earth");

// Selection of level 

function selectionCategory() {
  document.getElementById("welcome-message").style.display = "none";
  document.getElementById("start-game").style.display = "none";
  document.getElementById("selection1").style.display = "inline-block";
  document.getElementById("selection2").style.display = "inline-block";
  document.getElementById("selection-message").style.display = "inline";
  document.getElementById("game-score").style.display = "none";
}
// Geography Quiz
function startGame() {
  document.getElementById("start-game").style.display = "none";
  document.getElementById("selection1").style.display = "none";
  document.getElementById("selection2").style.display = "none";
  document.getElementById("game-score").style.display = "block";

  let currentLeaderboard = localStorage.getItem('leaderboard')
  if (!currentLeaderboard) {
    const newLeaderboard = []
    localStorage.setItem('leaderboard', JSON.stringify(newLeaderboard))
  }

  answer.style.display = "inline-block";
  document.getElementById("submitGeo").style.display = "inline-block";
  question.innerHTML = easyQuestionsArray[0];
  document.getElementById("selection-message").style.display = "none";
}
var pos=85;
function startGeography() {
  
  const currentAnswer = answer.value.toLowerCase()

  if (currentAnswer === easyAnswersLowerArray[0]) {
    
    document.getElementById("answer-status").innerHTML = "Correct Answer";
    question.innerHTML = easyQuestionsArray[1];
    answer.value = "";
    score += 10;
    document.getElementById("game-score").innerHTML = score;
    earthpic.style.left = pos + "px";
  }

      

  else if (currentAnswer === easyAnswersLowerArray[1]) {
    question.innerHTML = easyQuestionsArray[2];
    answer.value = "";
    score += 10;
    document.getElementById("game-score").innerHTML = score;
    pos+=85;
    earthpic.style.left = pos + "px";

  }
  else if (currentAnswer === easyAnswersLowerArray[2]) {
    question.innerHTML = easyQuestionsArray[3];
    answer.value = "";
    score += 10;
    document.getElementById("game-score").innerHTML = score;
    pos+=85;
    earthpic.style.left = pos + "px";


  }
  else if (currentAnswer === easyAnswersLowerArray[3]) {
    question.innerHTML = easyQuestionsArray[4];
    answer.value = "";
    score += 10;
    document.getElementById("game-score").innerHTML = score;
    pos+=85;
    earthpic.style.left = pos + "px";


  }
  else if (currentAnswer === easyAnswersLowerArray[4]) {
    question.innerHTML = easyQuestionsArray[5];
    answer.value = "";
    score += 10;
    document.getElementById("game-score").innerHTML = score;
    pos+=85;
    earthpic.style.left = pos + "px";


  }
  else if (currentAnswer === easyAnswersLowerArray[5]) {
    question.innerHTML = easyQuestionsArray[6];
    answer.value = "";
    score += 10;
    document.getElementById("game-score").innerHTML = score;
    pos+=85;
    earthpic.style.left = pos + "px";
  }
  else if (currentAnswer === easyAnswersLowerArray[6]) {
    question.innerHTML = easyQuestionsArray[7];
    answer.value = "";
    score += 10;
    document.getElementById("game-score").innerHTML = score;
    pos+=85;
    earthpic.style.left = pos + "px";
  }
  else if (currentAnswer === easyAnswersLowerArray[7]) {
    question.innerHTML = easyQuestionsArray[8];
    answer.value = "";
    score += 10;
    document.getElementById("game-score").innerHTML = score;
    pos+=85;
    earthpic.style.left = pos + "px";

  }
  else if (currentAnswer === easyAnswersLowerArray[8]) {
    question.innerHTML = easyQuestionsArray[9];
    answer.value = "";
    score += 10;
    document.getElementById("game-score").innerHTML = score;
    pos+=85;
    earthpic.style.left = pos + "px";

  }
  else if (currentAnswer === easyAnswersLowerArray[9]) {
    question.innerHTML = easyQuestionsArray[10];
    answer.value = "";
    score += 10;
    document.getElementById("game-score").innerHTML = score;
    pos+=85;
    earthpic.style.left = pos + "px";


  }
  else if (currentAnswer === easyAnswersLowerArray[10]) {
    question.innerHTML = easyQuestionsArray[11];
    answer.value = "";
    score += 10;
    document.getElementById("game-score").innerHTML = score;
    pos+=85;
    earthpic.style.left = pos + "px";


  }
  else if (currentAnswer === easyAnswersLowerArray[11]) {
    document.getElementById("final-message").style.display = "inherit";
    document.getElementById("submitGeo").style.display = "none";
    document.getElementById("answer-status").style.display = "none";
    let currentUser = sessionStorage["username"]
  
    let leaderboardEntry = { username: currentUser, score: score, quiz: 'Geography' }
    let currentLeaderboard = JSON.parse(localStorage.getItem('leaderboard'))

    currentLeaderboard.push(leaderboardEntry)

    localStorage.setItem('leaderboard', JSON.stringify(currentLeaderboard))
    alert("You have completed the Quiz");
    alert(score);
    pos+=85;
    earthpic.style.left = pos + "px";

  }
  else {
    alert("Answer wrong please start Again");
    let currentUser = sessionStorage["username"]
  
    let leaderboardEntry = { username: currentUser, score: score, quiz: 'Geography' }
    let currentLeaderboard = JSON.parse(localStorage.getItem('leaderboard'))

    currentLeaderboard.push(leaderboardEntry)

    localStorage.setItem('leaderboard', JSON.stringify(currentLeaderboard))
    document.getElementById("answer-status").innerHTML = "Wrong Answer";
    location.replace("game.php");
  }

}
function startHistoryGame() {
  document.getElementById("start-game").style.display = "none";
  document.getElementById("selection1").style.display = "none";
  document.getElementById("selection2").style.display = "none";

  answer.style.display = "inline-block";
  document.getElementById("submitHistory").style.display = "inline-block";
  question.innerHTML = toughQuestionsArray[0];
  document.getElementById("selection-message").style.display = "none";
  document.getElementById("game-score").style.display = "block";

  let currentLeaderboard = localStorage.getItem('leaderboard')
  if (!currentLeaderboard) {
    const newLeaderboard = []
    localStorage.setItem('leaderboard', JSON.stringify(newLeaderboard))
  }
}

var pos1=250;

function startHistory() {
  const currentAnswer = answer.value.toLowerCase()

  if (answer.value === toughAnswersLowerArray[0]) {
    question.innerHTML = easyQuestionsArray[0];
    document.getElementById("answer-status").innerHTML = "Correct Answer";
    question.innerHTML = toughQuestionsArray[1];
    answer.value = "";
    score += 10;
    document.getElementById("game-score").innerHTML = score;
    earthpic.style.left = pos1 + "px";
  }

  else if (currentAnswer=== toughAnswersLowerArray[1]) {
    question.innerHTML = toughQuestionsArray[2];
    answer.value = "";
    score += 10;
    document.getElementById("game-score").innerHTML = score;
    pos1+=250;
    earthpic.style.left = pos1 + "px";

  }
  else if (currentAnswer === toughAnswersLowerArray[2]) {
    question.innerHTML = toughQuestionsArray[3];
    answer.value = "";
    score += 10;
    document.getElementById("game-score").innerHTML = score;
    pos1+=250;
    earthpic.style.left = pos1 + "px";

  }

  else if (currentAnswer === toughAnswersLowerArray[3]) {
    document.getElementById("final-message").style.display = "inherit";
    document.getElementById("submitGeo").style.display = "none";
    document.getElementById("answer-status").style.display = "none";
    let currentUser = sessionStorage["username"]
  
    let leaderboardEntry = { username: currentUser, score: score, quiz: 'History' }
    let currentLeaderboard = JSON.parse(localStorage.getItem('leaderboard'))

    currentLeaderboard.push(leaderboardEntry)

    localStorage.setItem('leaderboard', JSON.stringify(currentLeaderboard))
    alert("You have completed the Quiz");
    alert(score);
    pos1+=250;
    earthpic.style.left = pos1 + "px";
  }
  else {
    alert("Answer wrong please start Again");
    let currentUser = sessionStorage["username"]
  
    let leaderboardEntry = { username: currentUser, score: score, quiz: 'History' }
    let currentLeaderboard = JSON.parse(localStorage.getItem('leaderboard'))

    currentLeaderboard.push(leaderboardEntry)

    localStorage.setItem('leaderboard', JSON.stringify(currentLeaderboard))
    document.getElementById("answer-status").innerHTML = "Wrong Answer";
    location.replace("game.php");
  }

}
