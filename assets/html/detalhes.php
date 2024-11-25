<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nolacake | Cupcakes</title>
    <link rel="shortcut icon" href="../imgs/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../css/global.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/detalhes.css">
</head>

<body>
    <nav id="navBar">
        <a href=""><img id="logo" src="../imgs/logoEscuro.png" alt=""></a>
        <ul id="navBarList">
            <li class="navBarItem"><a href="">Home</a></li>
            <li class="navBarItem"><a href="">Cupcakes</a></li>
            <li class="navBarItem"><a href="">Favoritos</a></li>
            <li class="navBarItem"><a href="">Pedidos</a></li>
            <li class="navBarItem"><a href="">Avaliações</a></li>
            <li class="navBarItem"><a href="">Sobre Nós</a></li>
            <li class="navBarItem">
                    <a href="assets/html/login.html">
                        <?php 
                            if (isset($_GET['usuario'])) {
                                // Pega o nome completo
                                $nomeCompleto = $_GET['usuario'];

                                // Divide o nome completo em partes e pega o primeiro nome
                                $primeiroNome = explode(' ', $nomeCompleto)[0];

                                // Exibe o primeiro nome
                                echo htmlspecialchars($primeiroNome);
                            } else {
                                echo 'Registre-se/Faça Login';
                            }
                        ?>
                    </a>
                </li>
        </ul>
        <a href=""><img id="cart" src="../imgs/carrinhoComprasEscuro.png" alt=""></a>
    </nav>      
    <section id="cupcake-detail">
        <section id="cardCupcake-detail">
            <img id="cupcake-img" alt="Imagem do cupcake">
            <section>
                <h1 id="cupcake-name"></h1>
                <h2 id="cupcake-price"></h2>
                <p id="cupcake-description"></p>
                <a class="adicionar" href="#">Adicionar ao Carrinho</a>
            </section>
        </section>
    </section>
    <script src="../javascript/cupcakes.js"></script>
</body>

</html>