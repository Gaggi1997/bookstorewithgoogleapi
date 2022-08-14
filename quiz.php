<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/quiz.css">
</head>
<body>
<nav class="back-home">
            <ul>
            <li>
                <a href="index.php">Exit</a>
            </li>
            </ul>
        </nav>
   <div class="main-div">
    
       <div class="inner-div">
           <h2 class="question">Question comes here</h2>
           <ul>
               <li>
                   <input type="radio" name="answer" id="ans1" class="answer">
                   <label for="ans1" id="option1">Answer Options</label>
               </li>
               <li>
                <input type="radio" name="answer" id="ans2" class="answer">
                <label for="ans2" id="option2">Answer Options</label>
            </li>
            <li>
                <input type="radio" name="answer" id="ans3" class="answer">
                <label for="ans3" id="option3">Answer Options</label>
            </li>
            <li>
                <input type="radio" name="answer" id="ans4" class="answer">
                <label for="ans4" id="option4">Answer Options</label>
            </li>
           </ul>
           <button id="submit">submit</button>
           <div id="showScore" class="scoreArea"></div>
       </div>
      
   </div>
    
    <script>
        
        const  quizDB = [
    {
        question: "Q1: Who is the aurthor of Novel 'As you like it'?",
        a: "William Shakespeare",
        b: "Jk Rowling",
        c: "Stephen King",
        d: "Mark Twain",
        ans: "ans1"
    },
    {
        question: " Q2: In Which Year was 'HarryPotter' was Released?",
        a: "1997",
        b: "1998",
        c: "1999",
        d: "2000",
        ans: "ans1"
    },

    {
        question: " Q3: Which Aurthor won maximum Oscar Awards?",
        a: "Rabindernath Tagore",
        c: "Woddy Allen",
        d: "James Joyce",
        b: "Jane Austen",
        ans: "ans2"
    },{
        question: "Q4: What was the most Famous book of 'Charles Dickens'?",
        a: "The Great Gatsby",
        b: "Catch-22",
        c: "Anna Karenina",
        d: "A Christmas Carol",
        ans: "ans4"
    }
];


  const question = document.querySelector('.question');
  const option1 = document.querySelector('#option1');
  const option2 = document.querySelector('#option2');
  const option3 = document.querySelector('#option3');
  const option4 = document.querySelector('#option4');
  const answers = document.querySelectorAll('.answer');
  const submit = document.querySelector('#submit');
  const showScore = document.querySelector('#showScore');

let score = 0
let questionCount = 0;


const questionLoad = () => {
    
    const questionList = quizDB[questionCount];
    question.innerText = questionList.question;
    option1.innerText = questionList.a;
    option2.innerText = questionList.b;
    option3.innerText = questionList.c;
    option4.innerText = questionList.d;

}

    const deselectAll = () => {
    answers.forEach(currCheckedAns => currCheckedAns.checked = false);
}


questionLoad();
const getAnswerCheck = () => {

    let answer;

    answers.forEach(curAnsElem => {
        if(curAnsElem.checked) {
            answer = curAnsElem.id
        }
    })

    return answer;

}



submit.addEventListener('click', () => {
    const checkedAnswer = getAnswerCheck();
    console.log(checkedAnswer);

    if(checkedAnswer === quizDB[questionCount].ans){
        score++;  
    }

    questionCount++;
    deselectAll();

    if(questionCount < quizDB.length) {
        questionLoad();
       
    } else {
        showScore.innerHTML = 
        `<h3> You scored ${score}/${quizDB.length} </h3>
        <button class="btn" onclick="location.reload()">Play Again</button>`
            ;//location.reload() => W3Schools.com

        showScore.classList.remove('scoreArea');
    }
});


</script>
</body>
</html>