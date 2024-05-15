<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Cambiador de Imágenes con Audio</title>
<style>
  /* Estilos básicos para centrar y dar un estilo a las imágenes */
  #imagen {
    display: block;
    margin: 0 auto;
    max-width: 100%;
    max-height: 300px; /* Ajusta el tamaño máximo de la imagen según tus necesidades */
  }
</style>
</head>
<body>

<!-- Aquí colocaremos las imágenes -->
<img id="imagen" src="ruta-de-la-primera-imagen.jpg" alt="Imagen">

<!-- Botones para cambiar la imagen -->
<button onclick="cambiarImagen(-1)">Anterior</button>
<button onclick="reproducirAudio()">Reproducir Audio</button>
<button onclick="cambiarImagen(1)">Siguiente</button>

<!-- Elemento de audio -->
<audio id="audio" src="" preload="auto"></audio>

<script>
  // Array con las rutas de las imágenes y los audios asociados
  var datos = [
    { imagen: "img/btn_nahuatl.png", audio: "ruta-del-primer-audio.mp3" },
    { imagen: "img/btn_tenek.png", audio: "ruta-del-segundo-audio.mp3" },
    { imagen: "img/btn_xioi.png", audio: "ruta-del-tercer-audio.mp3" }
    // Agrega aquí las rutas de todas tus imágenes y audios asociados
  ];

  // Variable para almacenar el índice de la imagen actual
  var indiceImagen = 0;

  // Función para cambiar la imagen
  function cambiarImagen(cambio) {
    indiceImagen += cambio; // Suma o resta al índice según el botón presionado
    
    // Verifica si el índice está dentro del rango de imágenes
    if (indiceImagen < 0) {
      indiceImagen = datos.length - 1; // Si es menor que cero, vuelve a la última imagen
    } else if (indiceImagen >= datos.length) {
      indiceImagen = 0; // Si es mayor o igual al tamaño del array, vuelve a la primera imagen
    }
    
    // Obtiene el elemento de la imagen y actualiza su src
    var imgElement = document.getElementById("imagen");
    imgElement.src = datos[indiceImagen].imagen;

    // Obtiene el elemento de audio y actualiza su src
    var audioElement = document.getElementById("audio");
    audioElement.src = datos[indiceImagen].audio;
    audioElement.pause(); // Pausa la reproducción del audio si estaba reproduciéndose
  }

  // Función para reproducir el audio asociado a la imagen actual
  function reproducirAudio() {
    var audioElement = document.getElementById("audio");
    audioElement.play(); // Reproduce el audio
  }
</script>

</body>
</html>
