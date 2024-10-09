import Swal from 'sweetalert2';

document.addEventListener('DOMContentLoaded', function () {

    if (window.Laravel && window.Laravel.statusMessage) {
        console.log('Mensaje de SweetAlert2: ', window.Laravel.statusMessage); // Depuración
        Swal.fire({
            title: 'Éxito!',
            text: window.Laravel.statusMessage,
            icon: 'success',
            confirmButtonText: 'OK'
        });
    }

    // Use event delegation for dynamically created elements
    document.addEventListener('click', function(event) {
        if (event.target && event.target.classList.contains('deleteButton')) {
            const form = event.target.closest('form');
            Swal.fire({
                title: '¿Estás seguro?',
                text: "Esta acción no se puede deshacer",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Sí, eliminarlo!',
                cancelButtonText: 'Cancelar'
            }).then((result) => {
                if (result.isConfirmed) {
                    form.submit();
                }
            });
        }
    });
});
