<!-- Aquí colocaremos las imágenes -->
<img id="imagenCarrusel" src="<?php echo $primeraImagen?>" alt="Imagen">

<center>
    <!-- Botones para cambiar la imagen -->
    <button class="botonCarrusel" onclick="cambiarImagen(-1)"><i class="fa-solid fa-chevron-left"></i></button>
    <button class="botonCarrusel" onclick="reproducirAudio()"><i class="fa-solid fa-volume-high"></i></button>
    <button class="botonCarrusel" onclick="cambiarImagen(1)"><i class="fa-solid fa-chevron-right"></i></button>
</center>

<!-- Elemento de audio -->
<audio id="audio" src="" preload="auto"></audio>
