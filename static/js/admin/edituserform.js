function abrirModal(id, nombres, apellidos, ext, email, password, rol, sucursal, status) {

    document.getElementById("editRol").value = "";
    document.getElementById("editSucursal").value = "";
    document.getElementById("editStatus").value = "";


    document.getElementById("editId").value = id;
    document.getElementById("editNombres").value = nombres;
    document.getElementById("editApellidos").value = apellidos;
    document.getElementById("editExt").value = ext;
    document.getElementById("editEmail").value = email;
    document.getElementById("editPass").value = password;

    // Validar y asignar el valor correcto en el selector editRol
    const editRol = document.getElementById("editRol");
    if (rol === "Second Admin") {
        editRol.value = "2";
    } else if (rol === "Soporte") {
        editRol.value = "3";
    } else if (rol === "Gerente") {
        editRol.value = "4";
    } else if (rol === "Coordinador") {
        editRol.value = "5";
    }

    // Validar y asignar el valor correcto en el selector editSucursal
    const editSucursal = document.getElementById("editSucursal");
    if (sucursal === "Operativo (Matriz)") {
        editSucursal.value = "1";
    } else if (sucursal === "Matriz") {
        editSucursal.value = "2";
    } else if (sucursal === "Zalatitan") {
        editSucursal.value = "3";
    } else if (sucursal === "Jose Maria Iglesias") {
        editSucursal.value = "4";
    } else if (sucursal === "Zapopan") {
        editSucursal.value = "5";
    } else if (sucursal === "San Pedrito") {
        editSucursal.value = "6";
    } else if (sucursal === "Santa Fe") {
        editSucursal.value = "7";
    } else if (sucursal === "Chapala") {
        editSucursal.value = "8";
    } else if (sucursal === "Centro") {
        editSucursal.value = "9";
    } else if (sucursal === "Obrero") {
        editSucursal.value = "10";
    } else if (sucursal === "Tonala") {
        editSucursal.value = "11";
    } else if (sucursal === "San José Del Castillo") {
        editSucursal.value = "12";
    } else if (sucursal === " Centro Sur") {
        editSucursal.value = "13";
    } else if (sucursal === "Tlaquepaque") {
        editSucursal.value = "14";
    } else if (sucursal === "Ocotlan") {
        editSucursal.value = "15";
    } else if (sucursal === "Plaza Aleira") {
        editSucursal.value = "16";
    } else if (sucursal === "Belisario Dominguez"){
        editSucursal.value = "17";
    }

    // Validar y asignar el valor correcto en el selector editStatus
    const editStatus = document.getElementById("editStatus");
    if (status === "Activo") {
        editStatus.value = "1";
    } else if (status === "Suspendido") {
        editStatus.value = "2";
    } else if (status === "Desactivado") {
        editStatus.value = "3";
    }

    // Muestra la modal
    document.getElementById("modalEditar").style.display = "flex";
}


const modall = document.getElementById("modalEditar");

// Función para cerrar la modal
function cerrarModal() {
    document.getElementById("modalEditar").style.display = "none";
}


// Cerrar modal si se hace clic fuera de la ventana modal
window.onclick = function(event) {
    if (event.target === modall) {
        modall.style.display = "none";
    }
};
