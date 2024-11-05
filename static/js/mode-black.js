const allSideMenu = document.querySelectorAll('#sidebar .side-menu.top li a');

// Verificar el menú activo desde localStorage y aplicarlo
const activeMenu = localStorage.getItem('active-menu');
if (activeMenu) {
  const activeItem = document.querySelector(`#sidebar .side-menu.top li a[href="${activeMenu}"]`);
  
  // Verificar si el elemento existe antes de intentar acceder a parentElement
  if (activeItem) {
    activeItem.parentElement.classList.add('active');
  }
}

allSideMenu.forEach(item => {
  const li = item.parentElement;

  item.addEventListener('click', function () {
    // Remover la clase 'active' de todos los elementos del menú
    allSideMenu.forEach(i => {
      i.parentElement.classList.remove('active');
    });

    // Agregar la clase 'active' al menú seleccionado
    li.classList.add('active');

    // Guardar el enlace del menú activo en localStorage
    localStorage.setItem('active-menu', item.getAttribute('href'));
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
  if (switchMode) switchMode.checked = true; // Mantén el switch activado
}

if (switchMode) {
  switchMode.addEventListener('change', function () {
    if (this.checked) {
      document.body.classList.add('dark');
      localStorage.setItem('dark-mode', 'enabled'); // Guarda el estado en localStorage
    } else {
      document.body.classList.remove('dark');
      localStorage.setItem('dark-mode', 'disabled'); // Guarda el estado en localStorage
    }
  });
}
 