document.addEventListener('DOMContentLoaded', function () {
    // Seleccionar todos los enlaces de la navegación
    const links = document.querySelectorAll('.side-menu a');
    // Seleccionar todas las secciones de contenido
    const sections = document.querySelectorAll('.content-section');
    
    // Obtener la última sección vista desde localStorage
    const lastSectionId = localStorage.getItem('lastSectionId');

    // Añadir un manejador de eventos para cada enlace
    links.forEach(link => {
        link.addEventListener('click', function (e) {
            e.preventDefault();
            // Obtener el id de la sección a mostrar desde el atributo data-section
            const sectionId = link.getAttribute('data-section');
            
            // Guardar el id de la sección en localStorage
            localStorage.setItem('lastSectionId', sectionId);

            // Ocultar todas las secciones
            sections.forEach(section => {
                section.style.display = 'none';
            });

            // Mostrar la sección correspondiente
            const targetSection = document.getElementById(sectionId);
            if (targetSection) {
                targetSection.style.display = 'block';
            }

            // Opcional: actualizar la clase activa en el menú
            links.forEach(link => {
                link.parentElement.classList.remove('active');
            });
            link.parentElement.classList.add('active');
        });
    });

    // Mostrar la última sección vista o la primera sección por defecto
    if (lastSectionId) {
        sections.forEach(section => {
            section.style.display = 'none';
        });
        const lastSection = document.getElementById(lastSectionId);
        if (lastSection) {
            lastSection.style.display = 'block';
        }
        // Actualizar el enlace activo en el menú
        links.forEach(link => {
            link.parentElement.classList.remove('active');
            if (link.getAttribute('data-section') === lastSectionId) {
                link.parentElement.classList.add('active');
            }
        });
    } else if (sections.length > 0) {
        sections.forEach(section => {
            section.style.display = 'none';
        });
        sections[0].style.display = 'block';
    }
});
