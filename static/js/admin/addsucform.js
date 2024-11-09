// Obtener elementos del DOM
const SucForm = document.getElementById("SucForm");
const openModalBt = document.getElementById("openSucBtn");
const closeBt = document.getElementById("kill");
const cancelButto = document.getElementById("kil");
const ticketFor = document.getElementById("SucFormm");

// Función para limpiar los campos del formulario
function clearForm() {
    ticketFor.reset(); // reset() limpia todos los campos del formulario
}

// Abrir modal
openModalBt.addEventListener("click", function() {
    SucForm.style.display = "flex";
    clearForm();
});

// Cerrar modal usando el span
if (closeBt) {
    closeBt.addEventListener("click", function() {
        SucForm.style.display = "none";
        clearForm();
    });
}

// Cerrar modal usando el botón "Cancelar"
if (cancelButto) {
    cancelButto.addEventListener("click", function(event) {
        event.preventDefault();
        SucForm.style.display = "none";
        clearForm();
    });
}

// Cerrar modal si se hace clic fuera de la ventana modal
window.addEventListener("click", function(event) {
    if (event.target === SucForm) {
        SucForm.style.display = "none";
        clearForm();
    }
});
