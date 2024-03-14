let questions = [
    {
        number:1,
        question:'Ի՞նչ է ալգորիթմը',
        answer:'Ալգորիթմը պրոցեդուրա կամ բանաձև է, որն օգտագործվում է խնդրի լուծման համար:',
        options:[
            'Ալգորիթմը համակարգչային տեխնիկայի տեսակ է:',
            'Ալգորիթմը ծրագրավորման լեզու է։',
            'Ալգորիթմը պրոցեդուրա կամ բանաձև է, որն օգտագործվում է խնդրի լուծման համար:',
            'Ալգորիթմը ֆիզիկական սարք է, որն օգտագործվում է տվյալների պահպանման համար:'
        ]
    },
    {
        number:2,
        question:' Ի՞նչ է փոփոխականը:',
        answer:'1:',
        options:[
            '2',
            '22։',
            '2',
            '22'
        ]
    },
    {
        number:3,
        question:'toString() մեթոդի նշանակությունը:',
        answer:'Ալգորիթմը պրոցեդուրա կամ բանաձև է, որն օգտագործվում է խնդրի լուծման համար:',
        options:[
            '3',
            '33։',
            '3',
            '33'
        ]
    },
    {
        number:4,
        question:'Ո՞րն է ունար օպերատորի դերը:',
        answer:'Ալգորիթմը պրոցեդուրա կամ բանաձև է, որն օգտագործվում է խնդրի լուծման համար:',
        options:[
            '4:',
            '44',
            '4:',
            '44'
        ]
    },
    {
        number:5,
        question:'parseInt և Number ֆունկցիաների տարբերությունը',
        answer:'Ալգորիթմը պրոցեդուրա կամ բանաձև է, որն օգտագործվում է խնդրի լուծման համար:',
        options:[
            '5',
            '55',
            '555',
            '5555'
        ]
    },

]

// start questions
let startBox = document.querySelector('.start-box')
let StartBoxTitle = document.querySelector('.start-box-title')
let boxWindow = document.querySelector('.box-window')
let endBoxWindow = document.querySelector('.end-box-window')
let questionText = document.querySelector('.questions');
let nextBtn = document.querySelector('.next-btn');
let answers = document.getElementsByClassName('answer');
let paddingTopStart = 180;
let questionIndex = 1;
let content = document.querySelector('.content')

endBoxWindow.style.display = 'none'

// start questions functions
let startBtn = document.querySelector('.start-btn')
startBtn.addEventListener('click', ()=>{
    boxWindow.style.display = 'none'
    questionText.innerText = questions[0].number + '. ' + questions[0].question;
    for (let i = 0; i < answers.length; i++) {
        answers[i].innerText = questions[0].options[i];
    }
})

let startAgainBtn = document.querySelector('.end-start-btn')
startAgainBtn.addEventListener('click', ()=>{
    window.location.href = 'testing_page.html'
})

// divs direction
for (let i = 0; i < answers.length; i++) {
    answers[i].style.top = paddingTopStart + i * 90 + 'px';
}

// next question function 
nextBtn.addEventListener('click', () => {
    
    let currentQuestion = questions[questionIndex];
    let firstOption = currentQuestion.options;
    for (let i = 0; i < answers.length; i++) {
        answers[i].style.border = '3px black solid'
        answers[i].style.boxShadow = 'none'
        questionText.innerText = questions[questionIndex].number + '. ' + questions[questionIndex].question;
        answers[i].innerText = firstOption[i];
    }
    questionIndex++;
    if (questionIndex === questions.length) {
        endBoxWindow.style.display = 'contents'
        content.style.filter = 'blur(2px)'
    }
    resetClick();
});


// go out functions
let wentBtn = document.querySelector('.went-btn')
wentBtn.addEventListener('click', ()=>{
        window.location.href = '../index.php' 
})

let endWentBtn = document.querySelector('.end-went-btn')
endWentBtn.addEventListener('click', ()=>{
    window.location.href = '../main/index.php' 
})

// right or wrong function with answers

let isClicked
let rightAnswers = []
let wrongAnswers = []

function clickButton(event) {
    isClicked = true;
    const clickedAnswer = event.target;
    const index = Array.from(answers).indexOf(clickedAnswer);

    if (clickedAnswer.innerText == questions[index].answer) {
        clickedAnswer.style.border = '3px rgb(142, 197, 58) solid';
        clickedAnswer.style.boxShadow = ' 0px 0px 5px 5px rgb(98, 199, 10)';
        rightAnswers.push(index); 
        console.log(rightAnswers);
        calculateRightAnswers()
    } else {
        clickedAnswer.style.border = '3px rgb(236, 69, 14) solid';
        clickedAnswer.style.boxShadow = ' 0px 0px 5px 5px rgb(214, 67, 18)';
        wrongAnswers.push(index); 
        console.log(wrongAnswers);
        
    }

    if (isClicked) {
        for (let i = 0; i < answers.length; i++) {
            answers[i].removeEventListener('click', clickButton);
        }
    }
}

//click event listeners to all answers
for (let i = 0; i < answers.length; i++) {
    answers[i].addEventListener('click', clickButton);
}

for (let i = 0; i < answers.length; i++) {
    answers[i].addEventListener('click', clickButton);
}
function resetClick() {
    for (let i = 0; i < answers.length; i++) {
        answers[i].addEventListener('click', clickButton);
    }
    isClicked = false;
}

// count of answers
let countOfAnswers = document.querySelector('.count-of-answers')
let currentQuestionIndex = 0
countOfAnswers.innerText = `${currentQuestionIndex} of ${questions.length}`;
function calculateRightAnswers() {
    console.log('okk');
    currentQuestionIndex++;
    countOfAnswers.innerText = `${currentQuestionIndex} of ${questions.length}`;
}

// timer

