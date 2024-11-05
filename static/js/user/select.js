const multiSelect = document.getElementById('multiSelect');
const selectedItemsDiv = document.getElementById('selectedItems');

// Función para agregar el ítem seleccionado
multiSelect.addEventListener('change', () => {
    selectedItemsDiv.innerHTML = ''; // Limpiar la lista
    Array.from(multiSelect.selectedOptions).forEach(option => {
        const div = document.createElement('div');
        div.classList.add('selected-item');
        div.textContent = option.text;

        // Botón de eliminar
        const removeBtn = document.createElement('span');
        removeBtn.classList.add('remove-btn');
        removeBtn.textContent = 'x';
        removeBtn.onclick = () => {
            option.selected = false;
            div.remove();
        };

        div.appendChild(removeBtn);
        selectedItemsDiv.appendChild(div);
    });
});