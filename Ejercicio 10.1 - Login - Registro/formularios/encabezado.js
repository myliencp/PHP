let ventanaLogin = document.getElementById('login');
let ventanaRegistro = document.getElementById('registro');

// window.addEventListener('click', function(e){
//     if(e.target == flex){
//         login.style.display='none';        
//     }
// });
// window.addEventListener('click', function(e){
//     if(e.target == flex){
//         registro.style.display = 'none';
//     }
// });

function muestraLogin() {
    document.getElementById("formulario").reset();
    document.getElementById("respuesta").innerHTML = "";
    ventanaLogin.style.display='flex';
}

function muestraRegistro() {
    document.getElementById("formularioR").reset();
    document.getElementById("respuesta").innerHTML = "";
    ventanaRegistro.style.display='flex';
}