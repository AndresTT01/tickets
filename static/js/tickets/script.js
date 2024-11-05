const allSideMenu = document.querySelectorAll('#sidebar .side-menu.top li a');


allSideMenu.forEach(item => {
  const li = item.parentElement;

  item.addEventListener('click', function (event) {
    const href = item.getAttribute('href');

    // Evitar la redirección solo si el enlace no tiene un href o es un "#"
    if (!href || href === "#") {
      event.preventDefault();
    } else {
      // Si el enlace tiene un href válido, redirigir la página
      window.location.href = href;
    }

    // Remover la clase 'active' de todos los elementos del menú
    allSideMenu.forEach(i => i.parentElement.classList.remove('active'));

    // Agregar la clase 'active' al menú seleccionado
    li.classList.add('active');

    // Guardar el enlace del menú activo en localStorage
    localStorage.setItem('active-menu', href);
  });
});


// TOGGLE SIDEBAR
const menuBar = document.querySelector('#content nav .bx.bx-menu');
const sidebar = document.getElementById('sidebar');

// Verificar si la barra lateral está oculta en localStorage y aplicarlo
if (localStorage.getItem('sidebar-hidden') === 'true') {
  sidebar.classList.add('hide');
}

menuBar.addEventListener('click', function () {
  sidebar.classList.toggle('hide');

  // Guardar el estado de la barra lateral en localStorage
  if (sidebar.classList.contains('hide')) {
    localStorage.setItem('sidebar-hidden', 'true');
  } else {
    localStorage.setItem('sidebar-hidden', 'false');
  }
});









const switchMode = document.getElementById('switch-mode');

// Verifica si el modo oscuro ya está activado en localStorage
if (localStorage.getItem('dark-mode') === 'enabled') {
  document.body.classList.add('dark');
  switchMode.checked = true; // Mantén el switch activado
}

switchMode.addEventListener('change', function () {
  if (this.checked) {
    document.body.classList.add('dark');
    localStorage.setItem('dark-mode', 'enabled'); // Guarda el estado en localStorage
  } else {
    document.body.classList.remove('dark');
    localStorage.setItem('dark-mode', 'disabled'); // Guarda el estado en localStorage
  }
});
