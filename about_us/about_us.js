let isWhite = localStorage.getItem('backgroundChanged') === 'true';

if (isWhite) {
    document.body.style.backgroundColor = '#fff';
}

let moon = document.querySelector('.sun-icon');
console.log(moon);

moon.addEventListener('click', () => {
    if (!isWhite) {
        document.body.style.backgroundColor = '#fff';
        moon.src = "../images/sun.png"
    } else {
        document.body.style.backgroundColor = ''; 
        moon.src = "../images/moon.png"

    }
    isWhite = !isWhite;
    localStorage.setItem('backgroundChanged', isWhite ? 'true' : 'false');
});
