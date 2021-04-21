let ventanaLogin = document.getElementById('login');

window.addEventListener('click', function(e){
    if(e.target == flex){
        login.style.display='none';
    }
});

function muestraLogin() {
    ventanaLogin.style.display='flex';
}