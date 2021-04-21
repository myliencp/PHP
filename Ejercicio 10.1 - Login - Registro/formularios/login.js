let cuadro = document.getElementById('cuadro'); 



window.addEventListener('click', function(e){
    if(e.target == cuadro){
        cerrar();
    }
 
});
   

function cerrar() {
    document.getElementById('login').style.display='none';
}