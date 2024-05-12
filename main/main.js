// -------------------------------- hover div for commenmts --------------------------------

let beforeComments = document.querySelector('.before-comments');
let commRules = document.querySelector('.comments-rules');

beforeComments.addEventListener('mouseenter', () => {
    commRules.style.display = 'block'
});

beforeComments.addEventListener('mouseleave', () => { 
    if (commRules) {
        commRules.style.display = 'none'
    }
});


//  ---------------------------------  button to go testing_page from part 3  --------------------------------- 

let thirdButtonToTestin = document.querySelector('.part-three')
thirdButtonToTestin.addEventListener('click', ()=>{
    window.location.href = '../testing_rules/testing_rules.html'
})

//  ---------------------------------  user message window loaded --------------------------------- 

let executed = false;

document.addEventListener('DOMContentLoaded', function () {
    if (!executed) {
        var statisticWindow = document.querySelector('.statistic_window');
        statisticWindow.classList.add('show');
        executed = true;
    }
});

//  ---------------------------------  user message window closed --------------------------------- 


document.querySelector('.statistic_window_close_btn').addEventListener('click',
() => document.querySelector('.statistic_window').style.display = 'none')

setTimeout(() => {
    const message = document.querySelector('.message').value.trim();
    if (message === '') {
        document.querySelector('.statistic_window').style.display = 'none';
    }
}, 5000);


//  ---------------------------------  user message window empty clicked --------------------------------- 

document.querySelector('.statistic_btn').addEventListener('click', () => {
    const messageTextarea = document.querySelector('.message');
    if (messageTextarea.value.trim() === '') {
        messageTextarea.style.border = '2px red solid';
    } else {
        messageTextarea.style.border = '2px black solid';
    }
});

//  ---------------------------------  slide bg --------------------------------- 


document.addEventListener("DOMContentLoaded", function() {
    const images = document.querySelectorAll('.background-slide img');
    let currentIndex = 0;
    let timeout;

    function showNextImage() {
        images.forEach((img, i) => {
            img.style.opacity = i === currentIndex ? '1' : '0';
        });
        currentIndex = (currentIndex + 1) % images.length;
        timeout = setTimeout(showNextImage, 3000); // Store the timeout ID
    }

    showNextImage(); // Start showing images

    // Add event listener to the button to stop the image rotation
    const sunIcon = document.querySelector('.sun-icon');
    sunIcon.addEventListener('click', () => {
        clearTimeout(timeout); // Clear the timeout
         // Reset src attribute of .photo3
    });
});

