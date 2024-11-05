// Obtener elementos del DOM
const modal = document.getElementById("ticketModal");
const openModalBtn = document.getElementById("openModalBtn");
const closeBtn = document.getElementsByClassName("close")[0]; // Asegúrate que el selector sea correcto
const ticketForm = document.getElementById("ticketForm");

// Abrir modal
openModalBtn.onclick = function() {
    modal.style.display = "flex"; // Cambiar a 'flex' para activar el 'justify-content' y 'align-items'
}

// Cerrar modal
closeBtn.onclick = function() {
    modal.style.display = "none";
}

// Cerrar modal si se hace clic fuera de la ventana modal
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

// Evento de envío del formulario
ticketForm.addEventListener("submit", function(event) {
    event.preventDefault();

    // Aquí puedes manejar los datos del formulario, por ejemplo, enviarlos a un servidor

    alert("Ticket enviado con éxito");
    modal.style.display = "none";
});
