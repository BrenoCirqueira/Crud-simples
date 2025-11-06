<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./assets/css/index.css">
    <link
    href="https://cdn.jsdelivr.net/npm/remixicon@4.7.0/fonts/remixicon.css"
    rel="stylesheet"
/>
</head>
<body>
    <header><i class="ri-php-fill"></i><p id="logo">Breno Cirqueira 2025</p></header>
    <main>
        <div class="ConteinerIntro">
            <h1>Administre seu Banco de Dados</h1> 
            <p>Adcione, Visualize e Delete seus usuários, sinta-se o administrador da sua vida.</p>
        </div>
        <div class="Forms">
            <form action="./view/criarUsuario.php" method="GET">
                <button id="bt1">Criar <br> Usuario</button>
            </form>
            <form action="./view/listaUsuario.php" method="GET">
                <button id="bt2">Visualizar <br> Usuarios</button>
            </form>
        </div>
    </main>
</body>
</html>