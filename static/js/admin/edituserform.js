// Función para mostrar/ocultar el campo "Área Operativa" según el rol seleccionado
function toggleAreaOperativa() {
    const editRol = document.getElementById("editRol").value;
    const areaOperativaContainer = document.getElementById("areaOperativaContainer");

    // Muestra el campo si el rol es "Operativo" (valor "6"), si no, lo oculta
    if (editRol === "6") {
        areaOperativaContainer.style.display = "block";
    } else {
        areaOperativaContainer.style.display = "none";
    }
}

// Función para abrir el modal y asignar los valores recibidos
function abrirModal(id, nombres, apellidos, ext, email, password, rol, sucursal, status, areaop) {
    document.getElementById("editId").value = id;
    document.getElementById("editNombres").value = nombres;
    document.getElementById("editApellidos").value = apellidos;
    document.getElementById("editExt").value = ext;
    document.getElementById("editEmail").value = email;
    document.getElementById("editPass").value = password;

    // Asigna el rol y muestra/oculta el campo "Área Operativa" si es necesario
    const editRol = document.getElementById("editRol");
    editRol.value = "";
    if (rol === "Second Admin") {
        editRol.value = "2";
    } else if (rol === "Soporte") {
        editRol.value = "3";
    } else if (rol === "Gerente") {
        editRol.value = "4";
    } else if (rol === "Coordinador") {
        editRol.value = "5";
    } else if (rol === "Operativo") {
        editRol.value = "6";
    }
    toggleAreaOperativa();

    // Asigna el área operativa
    const editareaop = document.getElementById("editareaop");
    editareaop.value = "";
    if (areaop === "Archivo") {
        editareaop.value = "1";
    } else if (areaop === "Informes") {
        editareaop.value = "2";
    } else if (areaop === "Pagares") {
        editareaop.value = "3";
    } else if (areaop === "Gerencia Adjunta") {
        editareaop.value = "4";
    } else if (areaop === "Recursos Humanos") {
        editareaop.value = "5";
    } else if (areaop === "Juridico") {
        editareaop.value = "6";
    } else if (areaop === "Cobranza") {
        editareaop.value = "7";
    } else if (areaop === "Salas") {
        editareaop.value = "8";
    } else if (areaop === "Mercadotecnia") {
        editareaop.value = "9";
    } else if (areaop === "Compras") {
        editareaop.value = "10";
    } else if (areaop === "Almacen") {
        editareaop.value = "11";
    } else if (areaop === "Riesgos") {
        editareaop.value = "12";
    } else if (areaop === "Normatividad") {
        editareaop.value = "13";
    } else if (areaop === "Coll center") {
        editareaop.value = "14";
    } else if (areaop === "Contraloria") {
        editareaop.value = "15";
    } else if (areaop === "Contabilidad") {
        editareaop.value = "16";
    } else if (areaop === "Bodega") {
        editareaop.value = "17";
    } else if (areaop === "Talleres") {
        editareaop.value = "18";
    }

    // Asigna la sucursal
    const editSucursal = document.getElementById("editSucursal");
    editSucursal.value = "";
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
    } else if (sucursal === "Centro Sur") {
        editSucursal.value = "13";
    } else if (sucursal === "Tlaquepaque") {
        editSucursal.value = "14";
    } else if (sucursal === "Ocotlan") {
        editSucursal.value = "15";
    } else if (sucursal === "Plaza Aleira") {
        editSucursal.value = "16";
    } else if (sucursal === "Belisario Dominguez") {
        editSucursal.value = "17";
    }

    // Asigna el estado
    const editStatus = document.getElementById("editStatus");
    editStatus.value = "";
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

// Función para cerrar la modal
function cerrarModal() {
    document.getElementById("modalEditar").style.display = "none";
}

// Cerrar modal si se hace clic fuera de la ventana modal
window.onclick = function(event) {
    if (event.target === document.getElementById("modalEditar")) {
        cerrarModal();
    }
};
