let closEye = document.querySelector('.eye-image');
let passInput = document.querySelector('.pass-input');
let isEyeOpen = false;

closEye.addEventListener('click', () => {
    if (isEyeOpen) {
        closEye.src = "../images/icons8-eyes-32.png";
        passInput.type = "password"

    } else {
        closEye.src = "../images/icons8-opened-eye.png";
        passInput.type = "text"
    }
    isEyeOpen = !isEyeOpen;
});
