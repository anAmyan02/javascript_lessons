// Function to apply light mode styles
const applyLightModeStyles = () => {
    document.querySelector('.sun-icon').src = "../images/sun.png";

    document.querySelectorAll('.back-img').length > 0  && 
    document.querySelectorAll('.back-img').forEach(img => {
        img.src = "../images/light-mode/back1.jpeg";
    });
    document.body.style.backgroundColor = 'rgb(224, 224, 232)';
    document.querySelectorAll('.box').length > 0 && 
    document.querySelectorAll('.box').forEach(box => {
        box.style.background = '#0e355c'; 
        box.style.border = '1px #5f82be solid';
    });
    document.querySelectorAll('.before-comments').length > 0 && 
    document.querySelectorAll('.before-comments').forEach(comment => { 
        comment.style.color = '#181616';
    });
    if (document.querySelector('.comments-title')) {
        document.querySelector('.comments-title').style.color = '#181616';
    }
    if (document.querySelector('.comments')) {
        document.querySelector('.comments').style.color = '#181616';
    }
    if (document.querySelectorAll('.comment-details').length > 0) {
        document.querySelectorAll('.comment-details').forEach(el => {
            el.style.color = 'black'; 
        });
    }
    if (document.querySelectorAll('.likes-box').length > 0) {
        document.querySelectorAll('.likes-box').forEach(el => {
            el.style.color = 'black'; 
            el.querySelector('.likes').src = "../images/light-mode/black-like.png";
        });
    }
    if (document.querySelector('.comm-container')) {
        document.querySelector('.comm-container').style.top = '5130px'; 
    }
};

// Function to apply dark mode styles

const applyDarkModeStyles = () => {
    document.querySelector('.sun-icon').src = "../images/moon.png";
    if (document.querySelectorAll('.back-img').length > 0) {
        document.querySelectorAll('.back-img').forEach(img => {
            img.src = "../images/main/figmabg2.jpg";
        });
    }
    document.body.style.backgroundColor = 'rgb(6, 4, 28)';
    if (document.querySelectorAll('.box').length > 0) {
        document.querySelectorAll('.box').forEach(box => {
            box.style.background = '#5B0E12'; 
            box.style.border = '1px #FF0000 solid';
        });
    }
    if (document.querySelectorAll('.before-comments').length > 0) {
        document.querySelectorAll('.before-comments').forEach(comment => { 
            comment.style.color = 'white';
        });
    }
    if (document.querySelector('.comments-title')) {
        document.querySelector('.comments-title').style.color = 'white';
    }
    if (document.querySelector('.comments')) {
        document.querySelector('.comments').style.color = 'white';
    }
    if (document.querySelectorAll('.comment-details').length > 0) {
        document.querySelectorAll('.comment-details').forEach(el => {
            el.style.color = 'white'; 
        });
    }
    if (document.querySelectorAll('.likes-box').length > 0) {
        document.querySelectorAll('.likes-box').forEach(el => {
            el.style.color = 'white'; 
            el.querySelector('.likes').src = "../images/main/like.png";
        });
    }
    if (document.querySelector('.comm-container')) {
        document.querySelector('.comm-container').style.top = '5400px';
    }
};

const toggleMode = () => {
    let mode = localStorage.getItem('mode');
    mode = mode === 'true'; 
    if (mode) {
        applyLightModeStyles();
    } else {
        applyDarkModeStyles();
    }
};

document.addEventListener('DOMContentLoaded', () => {
    toggleMode();

    document.querySelector('.sun-icon').addEventListener('click', () => {
        let mode = localStorage.getItem('mode');
        mode = mode === 'true'; 
        mode = !mode;
        localStorage.setItem('mode', mode); 

        if (mode) {
            applyLightModeStyles();
        } else {
            applyDarkModeStyles();
        }
    });
});
