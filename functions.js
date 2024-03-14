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
// console.log(userName)
userName.addEventListener('click', ()=>{
    window.location.href = '../user_page/user_page.html'
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