const container= document.querySelector('.container');
const loginlink= document.querySelector('.login-link');
const registerlink= document.querySelector('.register-link');

register-link.addEventListener('click', ()=>{
    container.classList.add('active');
});

login-link.addEventListener('click', ()=>{
    container.classList.remove('active');
});