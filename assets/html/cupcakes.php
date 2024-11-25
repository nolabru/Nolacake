<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nolacake | Cupcakes</title>
    <link rel="shortcut icon" href="../imgs/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/global.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/cupcakes.css">
</head>

<body>
    <nav id="navBar">
        <a href=""><img id="logo" src="../imgs/logoEscuro.png" alt=""></a>
        <ul id="navBarList">
            <li id="pesquisar">
                <span id="lupa"></span>
                <input type="text" id="searchInput" placeholder="Pesquisar" oninput="pesquisarCupcakes()">
            </li>
            <li class="navBarItem"><a href="">Home</a></li>
            <li class="navBarItem"><a href="#">Cupcakes</a></li>
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

                            // Divide o nome completo em partes (palavras) e pega o primeiro nome
                            $primeiroNome = explode(' ', $nomeCompleto)[0];

                            // Exibe o primeiro nome
                            echo htmlspecialchars($primeiroNome);
                        } else {
                            echo 'Registre-se/Faça Login';
                        }
                    ?>
                </a>
            </a></li>
        </ul>
        <a href=""><img id="cart" src="../imgs/carrinhoComprasEscuro.png" alt=""></a>
    </nav>

    <section id="cupcakes">
        <div class="cardCupcake" data-sabor="brigadeiro">
            <a href="detalhes.php?sabor=brigadeiro&usuario=<?php echo urlencode($_GET['usuario'] ?? ''); ?>">
                <img class="img" src="../imgs/cupcake-1.png" alt="Brigadeiro">
                <h1 class="title font">Brigadeiro</h1>
                <p class="descricao">Massa de chocolate com recheio e cobertura de brigadeiro</p>
                <h2 class="preco font">R$7,50</h2>
            </a>
            <a class="adicionar" href="#">Adicionar ao Carrinho</a>
        </div>
        <div class="cardCupcake" data-sabor="baunilha">
            <a href="detalhes.php?sabor=baunilha&usuario=<?php echo urlencode($_GET['usuario'] ?? ''); ?>">
                <img class="img" src="../imgs/cupcake-7.png" alt="Baunilha">
                <h1 class="title font">Baunilha</h1>
                <p class="descricao">Massa de baunilha com recheio e cobertura de baunilha</p>
                <h2 class="preco font">R$7,50</h2>
            </a>
            <a class="adicionar" href="#">Adicionar ao Carrinho</a>
        </div>
        <div class="cardCupcake" data-sabor="frutas-vermelhas">
            <a href="detalhes.php?sabor=frutas-vermelhas&usuario=<?php echo urlencode($_GET['usuario'] ?? ''); ?>">
                <img class="img" src="../imgs/cupcake-8.png" alt="Frutas Vermelhas">
                <h1 class="title font">Frutas Vermelhas</h1>
                <p class="descricao">Massa de chocolate com recheio e cobertura de frutas vermelhas</p>
                <h2 class="preco font">R$9,50</h2>
            </a>
            <a class="adicionar" href="#">Adicionar ao Carrinho</a>
        </div>
        <div class="cardCupcake" data-sabor="morango">
            <a href="detalhes.php?sabor=morango&usuario=<?php echo urlencode($_GET['usuario'] ?? ''); ?>">
                <img class="img" src="../imgs/cupcake-4.png" alt="Morango">
                <h1 class="title font">Morango</h1>
                <p class="descricao">Massa de baunilha com recheio e cobertura de morango</p>
                <h2 class="preco font">R$7,50</h2>
            </a>
            <a class="adicionar" href="#">Adicionar ao Carrinho</a>
        </div>
        <div class="cardCupcake" data-sabor="oreo">
            <a href="detalhes.php?sabor=oreo&usuario=<?php echo urlencode($_GET['usuario'] ?? ''); ?>">
                <img class="img" src="../imgs/cupcake-6.png" alt="Oreo">
                <h1 class="title font">Oreo</h1>
                <p class="descricao">Massa de chocolate com recheio e cobertura de oreo</p>
                <h2 class="preco font">R$9,50</h2>
            </a>
            <a class="adicionar" href="#">Adicionar ao Carrinho</a>
        </div>
        <div class="cardCupcake" data-sabor="red-velvet">
            <a href="detalhes.php?sabor=red-velvet&usuario=<?php echo urlencode($_GET['usuario'] ?? ''); ?>">
                <img class="img" src="../imgs/cupcake-5.png" alt="Red Velvet">
                <h1 class="title font">Red Velvet</h1>
                <p class="descricao">Massa de beterraba com recheio e cobertura de baunilha</p>
                <h2 class="preco font">R$9,50</h2>
            </a>
            <a class="adicionar" href="#">Adicionar ao Carrinho</a>
        </div>
        <div class="cardCupcake" data-sabor="sensacao">
            <a href="detalhes.php?sabor=sensacao&usuario=<?php echo urlencode($_GET['usuario'] ?? ''); ?>">
                <img class="img" src="../imgs/cupcake-2.png" alt="Sensação">
                <h1 class="title font">Sensação</h1>
                <p class="descricao">Massa de chocolate com recheio e cobertura de morango</p>
                <h2 class="preco font">R$8,50</h2>
            </a>
            <a class="adicionar" href="#">Adicionar ao Carrinho</a>
        </div>
        <div class="cardCupcake" data-sabor="tutti-frutti">
            <a href="detalhes.php?sabor=tutti-frutti&usuario=<?php echo urlencode($_GET['usuario'] ?? ''); ?>">
                <img class="img" src="../imgs/cupcake-3.png" alt="Tutti Frutti">
                <h1 class="title font">Tutti Frutti</h1>
                <p class="descricao">Massa de chocolate com recheio e cobertura de tutti frutti</p>
                <h2 class="preco font">R$8,50</h2>
            </a>
            <a class="adicionar" href="#">Adicionar ao Carrinho</a>
        </div>
    </section>
    <script src="../javascript/cupcakes.js"></script>
</body>

</html>