// Alternar la visibilidad de la caja de respuesta
function toggleReplyBox(button) {
    const replyBox = button.nextElementSibling;
    replyBox.style.display = replyBox.style.display === "none" ? "block" : "none";
}

// Función para formatear el texto (negrita, cursiva, subrayado)
function formatText(command) {
    document.execCommand(command, false, null);
}

// Función para alinear el texto (izquierda, centro, derecha)
function alignText(alignment) {
    document.execCommand('justify' + alignment.charAt(0).toUpperCase() + alignment.slice(1), false, null);
}

// Mostrar u ocultar la caja de emojis
function toggleEmojiBox() {
    const emojiBox = document.getElementById("emojiBox");
    emojiBox.style.display = emojiBox.style.display === "none" ? "block" : "none";
}

// Función para agregar emoji al área editable
function addEmojiToTextarea(emoji) {
    const replyText = document.getElementById('replyText');
    replyText.innerHTML += emoji; // Usar innerHTML para mantener formato
}
