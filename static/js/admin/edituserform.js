// Función para abrir la modal y rellenarla con los datos del usuario
function abrirModal(id, nombres, email, sucursal, status, fecha_creacion) {
    document.getElementById("editId").value = id;
    document.getElementById("editNombres").value = nombres;
    document.getElementById("editEmail").value = email;
    document.getElementById("editSucursal").value = sucursal;
    document.getElementById("editStatus").value = status;
    document.getElementById("editFecha").value = fecha_creacion;

    // Muestra la modal
    document.getElementById("modalEditar").style.display = "block";
}

// Función para cerrar la modal
function cerrarModal() {
    document.getElementById("modalEditar").style.display = "none";
}
