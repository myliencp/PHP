let cuadro = document.getElementById('cuadro'); 


window.addEventListener('click', function(e){
    if(e.target == cuadro){
        cerrar();
    }
});

function cerrar() {
    document.getElementById('login').style.display='none';
}

function comprobar() {
    let c1 = document.getElementById('contraseña').value;
    let c2 = document.getElementById('contraseña1').value;
    if (c1 != c2) {
        document.getElementById('cartel').innerHTML = "Las Contraseñas no coinciden , revise !";
    } else {
        document.getElementById('cartel').innerHTML ="";
        document.getElementById('formularioRegistro').submit();
    }
}