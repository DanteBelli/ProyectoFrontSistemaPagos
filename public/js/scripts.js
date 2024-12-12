document.addEventListener("DOMContentLoaded", function() {
    const checkboxes = document.querySelectorAll('.check-row');
    let lastChecked = null;

    checkboxes.forEach(checkbox => {
        checkbox.addEventListener('change', function() {
            if (lastChecked && lastChecked !== this) {
                lastChecked.checked = false;
            }
            lastChecked = this;
        });
    });
});

// Función para filtrar los datos de la tabla
function filterData() {
    const category = document.getElementById('category-filter').value.toLowerCase();
    const name = document.getElementById('name-filter').value.toLowerCase();
    const rows = document.querySelectorAll('.custom-table tbody tr');

    rows.forEach(row => {
        const categoryCell = row.cells[6].textContent.toLowerCase(); // Columna de Proveedor (para este ejemplo)
        const nameCell = row.cells[1].textContent.toLowerCase(); // Columna de Entidad (para este ejemplo)

        if ((category === '' || categoryCell.includes(category)) && (name === '' || nameCell.includes(name))) {
            row.style.display = ''; // Muestra la fila
        } else {
            row.style.display = 'none'; // Oculta la fila
        }
    });
}

// Función para limpiar los filtros
function clearFilters() {
    document.getElementById('category-filter').value = '';
    document.getElementById('name-filter').value = '';
    filterData(); // Vuelve a mostrar todas las filas
}

// Función para redirigir a SDGConsultar
function sdgConsultar() {
    const selectedCheckbox = document.querySelector('.check-row:checked'); // Buscar la primera casilla de verificación seleccionada
    if (selectedCheckbox) {
        const row = selectedCheckbox.closest('tr'); // Obtener la fila (tr) que contiene el checkbox seleccionado
        const idCell = row.cells[2].textContent.trim(); // Obtener el valor de la columna "ID" (tercer columna)

        // Redirigir a la ruta con el ID de la fila seleccionada como parámetro
        window.location.href = `/sdgConsultar?id=${idCell}`;
    } else {
        // Mostrar el modal de error
        const modal = document.getElementById('errorModal');
        modal.classList.remove('hidden');
    }
}

// Función para cerrar el modal
function closeModal() {
    const modal = document.getElementById('errorModal');
    modal.classList.add('hidden');
}
