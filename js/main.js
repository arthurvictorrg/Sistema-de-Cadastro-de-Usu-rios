document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('cadastroForm').addEventListener('submit', function(event) {
        const email = document.getElementById('email').value;
        const senha = document.getElementById('senha').value;

        // Validação do email
        const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailPattern.test(email)) {
            alert('Por favor, insira um email válido.');
            event.preventDefault();
        }

        // Validação da senha
        if (senha.length < 8) {
            alert('A senha deve ter pelo menos 8 caracteres.');
            event.preventDefault();
        }
    });
});