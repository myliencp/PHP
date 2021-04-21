let cuadroR = document.getElementById('cuadroR');


window.addEventListener('click', function(e){
   
    if(e.target == cuadroR){
        cerrar();
    }
});
   

function cerrar() {
    document.getElementById('registro').style.display='none';
   
}

function comprobar() {
    let c1 = document.getElementById('contraseña').value;
    let c2 = document.getElementById('contraseña1').value;
    if (c1 != c2) {
        document.getElementById('cartel').innerHTML = "Las contraseñas no coinciden , ¡reviselas por favor!";
    }
    else{
        document.getElementById('cartel').innerHTML ="";
        document.getElementById('formularioR').submit();
    }
   
}