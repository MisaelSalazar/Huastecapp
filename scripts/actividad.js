// Lista de colores y sus nombres correspondientes
const colores = [
    { nombre: "U'", src: "../../img/actividadPame/El.png" },
    { nombre: "Nduyajat", src: "../../img/actividadPame/Ellos.png" },
    { nombre: "Kiaguan", src: "../../img/actividadPame/Nosotros.png" },
    { nombre: "Jt'iu", src: "../../img/actividadPame/Tu.png" },
    { nombre: "Jiikan", src: "../../img/actividadPame/Ustedes.png" },
    { nombre: "Kiau", src: "../../img/actividadPame/Yo.png" }
];

// Función para iniciar el juego
function iniciarJuego() {
    // Seleccionar un color al azar
    const colorCorrecto = colores[Math.floor(Math.random() * colores.length)];
    document.getElementById('colorImage').src = colorCorrecto.src;

    // Seleccionar dos colores incorrectos al azar
    let opciones = [colorCorrecto];
    while (opciones.length < 3) {
        const colorIncorrecto = colores[Math.floor(Math.random() * colores.length)];
        if (!opciones.includes(colorIncorrecto)) {
            opciones.push(colorIncorrecto);
        }
    }

    // Mezclar las opciones para que el botón correcto no siempre esté en la misma posición
    opciones = opciones.sort(() => Math.random() - 0.5);

    // Asignar los nombres a los botones
    document.getElementById('btn1').textContent = opciones[0].nombre;
    document.getElementById('btn2').textContent = opciones[1].nombre;
    document.getElementById('btn3').textContent = opciones[2].nombre;

    // Guardar la respuesta correcta
    document.getElementById('btn1').dataset.correcto = opciones[0] === colorCorrecto;
    document.getElementById('btn2').dataset.correcto = opciones[1] === colorCorrecto;
    document.getElementById('btn3').dataset.correcto = opciones[2] === colorCorrecto;
}

// Función para verificar la respuesta
function checkAnswer(button) {
    if (button.dataset.correcto === "true") {
        alert("¡Correcto!");
    } else {
        alert("Incorrecto, intenta de nuevo.");
    }
}

// Iniciar el juego cuando la página se carga
window.onload = iniciarJuego;