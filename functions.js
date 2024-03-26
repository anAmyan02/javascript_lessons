// ------------------------------------------------- Logo clicked -------------------------------------------

let jsLogo = document.querySelector('.js-logo')
let navbar = document.querySelector('.nav')

jsLogo.addEventListener('click', ()=>{
    window.location.href = "../main/index.php"
})

// -------------------------------------------------- search open-close -----------------------------------------

let searchIcon = document.querySelector('.search-icon')
searchIcon.classList.add('added-style-for-search-icon')

let searchInputStyle = {
    width:'210px',
    height:'30px',
    border:'2px white solid',
    borderRadius:'10px',
    position: 'absolute',
    top: '25px', 
    left: '900px',
    backgroundColor:'black',
    color:'white',
    paddingLeft:'10px'
}


let isSearchInputVisible = false;
let searchInput

searchIcon.addEventListener('click', () => {
    if (!isSearchInputVisible) {
        searchInput = document.createElement('input');
        searchInput.classList.add('search-input');
        searchInput.placeholder= 'Փնտրել...'
        navbar.appendChild(searchInput);
        Object.assign(searchInput.style, searchInputStyle);
        isSearchInputVisible = true;

    } else {
        searchInput.remove();
        isSearchInputVisible = false;

    }
});

// ------------------------------------------- user window open-close --------------------------------------------

let userWindow = document.querySelector('.user-window')
userWindow.style.display = 'none'

let OpenUserWindow = document.querySelector('.open-user')
OpenUserWindow.addEventListener('click',()=>{
    if(userWindow.style.display == 'none'){
        userWindow.style.display = 'block'
    }else{
        userWindow.style.display = 'none'
    }
})
let logOut = document.querySelector('.log-out-user')
logOut.addEventListener('click', ()=>{
    window.location.href = '../login/login.php'
})

//-------------------------------------------- go to user page --------------------------------------------

let userName = document.querySelector('.user-name')
userName.addEventListener('click', ()=>{
    window.location.href = '../user_page/user_page.php'
})

//-------------------------------------------- search logic --------------------------------------------

// let serachInput = document.querySelector('.search-input')
// console.log(serachInput);


const searchLogic = () => {
    if(searchInput){
        searchInput.addEventListener('onChange', () => {
                
        })
    }
}

// --------------------------------- comments input is clicked ---------------------------------------------

let commWrietBox = document.querySelector('.comments-write-box')
let commentsInput = document.querySelector('.comments-input')

commentsInput.addEventListener('click', () => {
    let comBtn = document.querySelector('.com-btn')
    comBtn.style.display = 'block'
    let newCommentInputStyle = {
        height: '90px',
    };
    let linksNewStyle = {
        top: '60px'
    };
    let comHrStyle = {
        position: 'absolute',
        top: '100px',
        left: '80px',
        width: '600px'
    };
    Object.assign(commentsInput.style, newCommentInputStyle);
    Object.assign(goodCom.style, linksNewStyle);
    Object.assign(newCom.style, linksNewStyle);
    Object.assign(oldCom.style, linksNewStyle);

    commWrietBox.style.position = 'absolute';

    
    let comHr = document.createElement('hr');
    commWrietBox.appendChild(comHr);
    Object.assign(comHr.style, comHrStyle);
});

