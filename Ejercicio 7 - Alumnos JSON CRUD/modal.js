let modal = document.getElementById('miModal');
let flex = document.getElementById('flex');
let eliminar = document.getElementById('eliminar');
let cerrar = document.getElementById('close');

window.onload = function() {
    carga();
};

function carga() {
    eliminar.addEventListener('click', function(){
        console.log("paso por aqui");
        modal.style.display='block';
    });
    
    cerrar.addEventListener('click', function(){
        modal.style.display='none';
    });
    
    window.addEventListener('click', function(e){
        if(e.target == flex){
            modal.style.display='none';
        }
    });
}
