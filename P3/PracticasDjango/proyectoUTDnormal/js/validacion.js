document.getElementById('registroForm').addEventListener('submit', function(event) {
    let isValid = true;

    // Obtener valores de los campos
    const username = document.getElementById('username').value;
    const email = document.getElementById('email').value;
    const firstName = document.getElementById('firstName').value;
    const lastName = document.getElementById('lastName').value;
    const password = document.getElementById('password').value;
    const confirmPassword = document.getElementById('confirmPassword').value;

    // Validar que todos los campos estén completos
    if (!username || !email || !firstName || !lastName || !password || !confirmPassword) {
        alert('Todos los campos son obligatorios');
        isValid = false;
    }

    // Validar que las contraseñas coincidan
    if (password !== confirmPassword) {
        alert('Las contraseñas no coinciden');
        isValid = false;
    }

    // Validar correo electrónico
    if (!validateEmail(email)) {
        alert('Por favor ingresa un correo electrónico válido');
        isValid = false;
    }

    // Si la validación falla, evitar el envío del formulario
    if (!isValid) {
        event.preventDefault();
    }
});

// Función para validar correo electrónico
function validateEmail(email) {
    const regex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
    return regex.test(email);
}