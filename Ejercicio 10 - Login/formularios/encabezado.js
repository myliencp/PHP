let ventanaLogin = document.getElementById('login');

window.addEventListener('click', function(e){
    if(e.target == flex){
        login.style.display='none';
    }
});

function muestraLogin() {
    document.getElementById("formulario").reset();
    document.getElementById("respuesta").innerHTML = "";
    ventanaLogin.style.display='flex';
}