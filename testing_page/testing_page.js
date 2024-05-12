document.addEventListener("DOMContentLoaded", function() {
    const quizContainer = document.getElementById('quiz-container');
    const questionContainer = document.getElementById('question');
    const answersContainer = document.getElementById('answers');
    const resultContainer = document.getElementById('result-container');
    const correctCountDisplay = document.getElementById('correct-count');
    const wrongCountDisplay = document.getElementById('wrong-count');
    const percentageDisplay = document.getElementById('percentage');
    const timerDisplay = document.getElementById('time-left');
    const progressBar = document.getElementById('progress-bar');
    const startButton = document.getElementById('start-btn');
    const nextButton = document.querySelector('.next-btn');
    let countAnswers = document.querySelector('.count-of-answers');
    let endMinTitle = document.querySelector('.end-min-title')
    let progressPercent = document.querySelector('.progress-percent')
    
    let currentQuestionIndex = 0;
    let correctCount = 0;
    let wrongCount = 0;
    let questions = [];
    let timer;
    let timeLeft = 20;
    let count = 0

    // Fetch questions from the server
    async function fetchQuestions() {
        const response = await fetch('fetch_questions.php');
        questions = await response.json();
        countAnswers.innerText = `0 / ${questions.length}`;

    }

    // Start the quiz
    function startQuiz() {
        startButton.style.display = 'none';
        document.querySelector('.box-window').style.display = "none"
        showQuestion();
        startTimer();
    }

    // Display current question and answers
    function showQuestion() {
        const currentQuestion = questions[currentQuestionIndex];
        questionContainer.innerText = currentQuestionIndex + 1 + '.' + currentQuestion.question;
        answersContainer.innerHTML = '';
    
        currentQuestion.options.forEach((option, index) => {
            const button = document.createElement('div');
            button.innerText = option;
            button.classList.add('answer-option'); // Add a class for styling
            button.addEventListener('click', () => {
                checkAnswer(index, button);
            });
            answersContainer.appendChild(button);
        });
    }

    function goToNextQuestion() {
        currentQuestionIndex++;
        if (currentQuestionIndex < questions.length) {
            showQuestion();
            startTimer(); 
            nextButton.style.display = 'none';
            updateProgressBar();
        } else {
            showResults();
            resultContainer.style.display = 'block';
        }
    }
    nextButton.addEventListener('click', goToNextQuestion);

function checkAnswer(selectedIndex, checkedButton) {
    clearInterval(timer);
    const currentQuestion = questions[currentQuestionIndex];

    if (timeLeft === 0 || selectedIndex === -1 || !checkedButton) {
    } else {
        if (selectedIndex === currentQuestion.options.indexOf(currentQuestion.correct_answer)) {
            correctCount++;
            if (checkedButton.classList) {
                checkedButton.classList.add('correct');
            }
        } else {
            wrongCount++;
            if (checkedButton.classList) {
                checkedButton.classList.add('wrong');
            }
        }
        if (checkedButton.style) {
            checkedButton.style.border = '';
            checkedButton.style.boxShadow = '';
        }
    }

    // Update countAnswers
    count++;
    countAnswers.innerHTML = `${count} / ${questions.length}`; 

    setTimeout(() => {
        currentQuestionIndex++;
        if (currentQuestionIndex < questions.length) {
            showQuestion();
            startTimer(); 
        } else {
            showResults();
            resultContainer.style.display = 'block'; // Show result container
        }
        updateProgressBar();
    }, 500);
}

    
    
     // Display quiz results
     function showResults() {
        resultContainer.style.display = 'block';
        correctCountDisplay.textContent = 'Ճիշտ պատասխաններ `' +  correctCount;
        wrongCountDisplay.textContent = 'Սխալ պատասխաններ `' + wrongCount
        const totalQuestions = correctCount + wrongCount;
        const percentage = totalQuestions === 0 ? 0 : (correctCount / totalQuestions) * 100;
        endMinTitle.textContent = percentage < 50 ? 'Ոչինչ։) հաջորդ անգամ ավելի լավ կպատրաստվես' :
                                percentage == 50 ? 'Ընտիիիր..., այդպես շարունակիր' :
                                percentage > 50 ? ':Օ ապրեեես' :
                                percentage == 100 ? 'Հրաշալի է ։)' :'';
        percentageDisplay.textContent = 'Առաջադիմություն `' + `${percentage.toFixed(2)}%`;
        progressBar.style.width = '100%'; 
    }

    // Update timer display
    function updateTimerDisplay() {
        timerDisplay.textContent = timeLeft + "s";
    }

    // Start the timer
    function startTimer() {
        timeLeft = 10;
        updateTimerDisplay();
        timer = setInterval(function() {
            timeLeft--;
            updateTimerDisplay();
            if (timeLeft === 0) {
                clearInterval(timer);
                checkAnswer(-1);
            }
        }, 1000);
    }

    // Update progress bar
    function updateProgressBar() {
        const totalQuestions = questions.length;
        const progress = (currentQuestionIndex / totalQuestions) * 100;
        progressBar.style.width = Math.min(progress/2, 50.5) + "%"
        progressPercent.innerText = Math.round(progress,1) + "%"
    }

    // Event listener for start button
    startButton.addEventListener('click', startQuiz);

    // Fetch questions and start the game
    document.querySelectorAll('.went-btn').forEach(btn => {
        btn.addEventListener('click', () => {
            window.location.href = '../main/index.php'
        })
    }); 

    document.querySelector('.end-start-btn').addEventListener('click', () => {
            window.location.href = '../testing_page/testing_page.php'
    }); 
    fetchQuestions();

    
});


let coordinates = [
    {
        'top': '67vh',
        'left': '4vh',
        'transform': 'rotate(-37deg)',
    },
    {
        'top': '64vh',
        'left': '8vh',
        'transform': 'rotate(-43deg)',
    },
    {
        'top': '60vh',
        'left': '12vh',
        'transform': 'rotate(-37deg)',
    },    
    {
        'top': '47vh',
        'left': '28vh',
        'transform': 'rotate(-37deg)',
    },    
    {
        'top': '44vh',
        'left': '32vh',
        'transform': 'rotate(-32deg)',
    },   
    { 
        'top': '41vh',
        'left': '36vh',
        'transform': 'rotate(-30deg)',
    },
    {    
        'top': '39vh',
        'left': '40.5vh',
        'transform': 'rotate(-25deg)',
    },   
    { 
        'top': '37vh',
        'left': '44.5vh',
        'transform': 'rotate(-15deg)',
    },   
    { 
        'top': '37vh',
        'left': '49vh',
        'transform': 'rotate(10deg)',
    },    
    {
        'top': '38vh',
        'left': '54vh',
        'transform': 'rotate(-2deg)',
    },
    {
        'top': '30vh',
        'left': '69vh',
        'transform': 'rotate(5deg)',
    },
    {
        'top': '32vh',
        'left': '74vh',
        'transform': 'rotate(35deg)',
    },
    {
        'top': '36vh',
        'left': '78vh',
        'transform': 'rotate(49deg)',
    },
    {
        'top': '41vh',
        'left': '81vh',
        'transform': 'rotate(56deg)',
    },
    {
        'top': '46vh',
        'left': '84vh',
        'transform': 'rotate(60deg)',
    },
];

document.addEventListener("DOMContentLoaded", () => {
    let lineContainer = document.querySelector('.line-container'); 
    
    coordinates.forEach((coordinate) => {
        let level = document.createElement('div');
        level.className = 'line';
        level.style.top = coordinate.top;
        level.style.left = coordinate.left;
        level.style.transform = coordinate.transform;
        lineContainer.appendChild(level);
    });
    
    document.body.appendChild(lineContainer);

});

let gamerBox = document.querySelector('.gamer-box');
let gamer = document.createElement('img');
gamer.src = '../images/lesson-page/game-removeb.png';
gamer.className = "gamer";
gamerBox.appendChild(gamer);

