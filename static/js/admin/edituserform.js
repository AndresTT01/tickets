// Mapeos para roles, áreas operativas, sucursales y estados
const roleMapping = {
    "Second Admin": "2",
    "Soporte": "3",
    "Gerente": "4",
    "Coordinador": "5",
    "Operativo": "6"
};

const areaOpMapping = {
    "Archivo": "1",
    "Informes": "2",
    "Pagares": "3",
    "Gerencia Adjunta": "4",
    "Recursos Humanos": "5",
    "Jurídico": "6",
    "Cobranza": "7",
    "Salas": "8",
    "Mercadotecnia": "9",
    "Compras": "10",
    "Almacén": "11",
    "Riesgos": "12",
    "Normatividad": "13",
    "Call Center": "14",
    "Contraloría": "15",
    "Contabilidad": "16",
    "Bodega": "17",
    "Talleres": "18"
};

const branchMapping = {
    "Operativo (Matriz)": "1",
    "Matriz": "2",
    "Zalatitan": "3",
    "José María Iglesias": "4",
    "Zapopan": "5",
    "San Pedrito": "6",
    "Santa Fe": "7",
    "Chapala": "8",
    "Centro": "9",
    "Obrero": "10",
    "Tonalá": "11",
    "San José Del Castillo": "12",
    "Centro Sur": "13",
    "Tlaquepaque": "14",
    "Ocotlán": "15",
    "Plaza Aleira": "16",
    "Belisario Domínguez": "17"
};

const statusMapping = {
    "Activo": "1",
    "Suspendido": "2",
    "Desactivado": "3"
};

// Función para abrir el modal y asignar los valores recibidos
function abrirModal(id, nombres, apellidos, ext, email, password, roles_nombre, sucursal_nombre, status_descripcion, aop_nombre) {
    try {
        // Validar datos básicos
        if (!id || !roles_nombre || !sucursal_nombre) {
            console.warn("Faltan datos importantes para abrir el modal:", { id, roles_nombre, sucursal_nombre });
            return;
        }

        // Asignar valores a los campos de texto
        document.getElementById("editId").value = id || "";
        document.getElementById("editNombres").value = nombres || "";
        document.getElementById("editApellidos").value = apellidos || "";
        document.getElementById("editExt").value = ext || "";
        document.getElementById("editEmail").value = email || "";
        document.getElementById("editPass").value = password || "";

        // Asignar valores a los campos select usando los mapeos
        document.getElementById("editRol").value = roleMapping[roles_nombre] || "";
        document.getElementById("editareaop").value = areaOpMapping[aop_nombre] || "";
        document.getElementById("editSucursal").value = branchMapping[sucursal_nombre] || "";
        document.getElementById("editStatus").value = statusMapping[status_descripcion] || "";

        // Mostrar/ocultar el área operativa si el rol es "Operativo"
        toggleAreaOperativa();

        // Mostrar el modal
        document.getElementById("modalEditar").style.display = "flex";

        // Para depuración
        console.log("Modal abierto con datos del usuario:", { id, nombres, apellidos, roles_nombre, sucursal_nombre, status_descripcion, aop_nombre });
    } catch (error) {
        console.error("Error al abrir el modal:", error);
    }
}

// Función para mostrar/ocultar área operativa
function toggleAreaOperativa() {
    const editRol = document.getElementById("editRol").value;
    const areaOperativaContainer = document.getElementById("areaOperativaContainer");
    const editareaop = document.getElementById("editareaop");

    // Mostrar el campo si el rol es "Operativo" (valor "6"), si no, ocultarlo y limpiar el valor
    areaOperativaContainer.style.display = editRol === "6" ? "block" : "none";
    if (editRol !== "6") editareaop.value = ""; // Limpiar valor si no es "Operativo"
}

// Función para cerrar el modal
function cerrarModal() {
    document.getElementById("modalEditar").style.display = "none";
}

// Cerrar modal al hacer clic fuera de la ventana modal
window.onclick = function (event) {
    if (event.target === document.getElementById("modalEditar")) {
        cerrarModal();
    }
};