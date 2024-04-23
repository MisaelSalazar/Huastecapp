// Función para mostrar/ocultar el menú al hacer clic en el botón hamburguesa
function toggleMenu () {
  var menu = document.getElementById('menu-container')
  if (menu.style.display === 'block') {
    menu.style.display = 'none'
  } else {
    menu.style.display = 'block'
  }
}

// Asignar el evento clic al botón hamburguesa
document.getElementById('menu-btn').addEventListener('click', toggleMenu)
