let phoneBtn = document.querySelector('.phone-btn')
let emailBtn = document.querySelector('.email-btn')

let phone = document.querySelector('.phone')
let email = document.querySelector('.email')

phoneBtn.addEventListener('click',()=>{
    email.style.display = 'none'
    phone.style.display = 'block'

})
emailBtn.addEventListener('click',()=>{
    email.style.display = 'block'
    phone.style.display = 'none'

})




