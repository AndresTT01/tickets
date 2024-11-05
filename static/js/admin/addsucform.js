// Obtener elementos del DOM
const SucForm = document.getElementById("SucForm");
const openModalBt = document.getElementById("openSucBtn"); // Corregido el ID
const closeBt = document.getElementById("kill"); // Usamos querySelector para obtener el span con clase "close"
const cancelButto = document.getElementById("kil"); // Botón de cancelar en el formulario
const ticketFor = document.getElementById("SucFormm");

// Verificar si closeBt y cancelButton existen
//console.log(closeBt); // Debería mostrar el span con clase "close" en la consola
//console.log(cancelButto); // Debería mostrar el botón con clase "cerrar" en la consola

// Abrir modal
openModalBt.addEventListener("click", function() {
    SucForm.style.display = "flex"; // Cambiar a 'flex' para activar el 'justify-content' y 'align-items'
});

// Cerrar modal usando el span
if (closeBt) {
    closeBt.addEventListener("click", function() {
        SucForm.style.display = "none";
    });
}

// Cerrar modal usando el botón "Cancelar"
if (cancelButto) {
    cancelButto.addEventListener("click", function(event) {
        event.preventDefault(); // Evitar el comportamiento predeterminado de envío
        SucForm.style.display = "none";
    });
}

// Cerrar modal si se hace clic fuera de la ventana modal
window.addEventListener("click", function(event) {
    if (event.target === SucForm) {
        SucForm.style.display = "none";
    }
});

