<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- Link do CSS -->
    <link rel="stylesheet" href="{{ asset( 'css/app.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

</head>

<body>
    
    @include("includes.header")

    @include('includes.menu')

    <main>

        @yield('content')

    </main>

    @include('includes.footer')

    <div class="modal-container" id="loginModal">
        <div class="modal">
            <h2>Login</h2>
            <form>
                <label for="username">Usuário</label>
                <input type="text" id="username" placeholder="Digite seu usuário" required>
                
                <label for="password">Senha</label>
                <input type="password" id="password" placeholder="Digite sua senha" required>
                
                <button type="submit">Entrar</button>
            </form>
            <button class="close-modal" id="closeModal">&times;</button>
        </div>
    </div>



    <script>
        // Seleciona elementos
        const loginButton = document.querySelector('.user-login a');
        const modalContainer = document.getElementById('loginModal');
        const closeModalButton = document.getElementById('closeModal');

        // Abrir modal ao clicar no link de login
        loginButton.addEventListener('click', (event) => {
            event.preventDefault(); // Evita redirecionamento
            modalContainer.style.display = 'flex'; // Mostra o modal
        });

        // Fechar modal ao clicar no botão de fechar
        closeModalButton.addEventListener('click', () => {
            modalContainer.style.display = 'none';
        });

        // Fechar modal ao clicar fora dele
        window.addEventListener('click', (event) => {
            if (event.target === modalContainer) {
                modalContainer.style.display = 'none';
            }
        });
    </script>

</body>



</html>








