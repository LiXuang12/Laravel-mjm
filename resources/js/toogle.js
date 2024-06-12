//toggle side bar
document.addEventListener("DOMContentLoaded", function () {
    const sidebarToggle = document.getElementById('sidebarToggle');
    const sidebar = document.getElementById('default-sidebar');

    console.log('sidebarToggle:', sidebarToggle);
    console.log('sidebar:', sidebar);

    if (sidebarToggle && sidebar) {
        sidebarToggle.addEventListener('click', function () {
            sidebar.classList.toggle('-translate-x-full');
            console.log('Sidebar toggled');
        });
    }
    else {
        console.error('Sidebar toggle button or sidebar element not found.');
    }
});

//togle password and confirm password

document.addEventListener('DOMContentLoaded', (event) => {
    const passwordField = document.getElementById('password');
    const confirmPasswordField = document.getElementById('confirm-password');
    const togglePasswordIcon = document.getElementById('togglePassword');

    togglePasswordIcon.addEventListener('click', function () {
        togglePasswordVisibility(passwordField);
        togglePasswordVisibility(confirmPasswordField);
        togglePasswordIcon.classList.toggle('bi-eye-slash');
        togglePasswordIcon.classList.toggle('bi-eye');
    });

    function togglePasswordVisibility(field) {
        const fieldType = field.getAttribute('type');
        if (fieldType === 'password') {
            field.setAttribute('type', 'text');
        } else {
            field.setAttribute('type', 'password');
        }
    }

    // prevent form submit
    const form = document.querySelector('form');
    form.addEventListener('submit', function (e) {
        e.preventDefault();
    });
});