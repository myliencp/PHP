function cargafoto(camino) {
    imagen.src = camino+fotos.value;
}

var http = new XMLHttpRequest(); 

function elijofoto(camino) {
    var x = document.getElementById("seleccion").value;
    try {
       document.getElementById("imagen").src = camino+x;
       document.getElementById("fotoActual").value = camino+x;
       document.getElementById("elementoActual").value = document.getElementById("seleccion").selectedIndex;
   } catch (error) {
       console.log("Error:",error);
    }
}

