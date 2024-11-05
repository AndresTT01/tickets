// Obtener elementos del DOM
const modal = document.getElementById("UserFormModal");
const openModalBtn = document.getElementById("openUserModalBtn");
const closeBtn = document.querySelector(".close"); // Span para cerrar el modal
const cancelButton = document.querySelector(".cerrar"); // Botón cancelar
const ticketForm = document.getElementById("UserForm");

// Verificar si closeBtn existe
//console.log(closeBtn); // Esto debería mostrar el elemento en la consola

// Abrir modal
openModalBtn.addEventListener("click", function() {
    modal.style.display = "flex"; // Cambiar a 'flex' para activar el 'justify-content' y 'align-items'
});

// Cerrar modal usando el span
if (closeBtn) {
    closeBtn.addEventListener("click", function() {
        modal.style.display = "none";
    });
}

// Cerrar modal usando el botón "Cancelar"
if (cancelButton) {
    cancelButton.addEventListener("click", function(event) {
        event.preventDefault(); // Evitar el comportamiento predeterminado de envío
        modal.style.display = "none";
    });
}

// Cerrar modal si se hace clic fuera de la ventana modal
window.onclick = function(event) {
    if (event.target === modal) {
        modal.style.display = "none";
    }
};

