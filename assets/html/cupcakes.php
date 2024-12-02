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
        <a href="/Nolacake/index.php?usuario=<?php echo urlencode($_GET['usuario'] ?? '');?>"><img id="logo" src="../imgs/logoEscuro.png" alt="Logo Nolacake"></a>
        <ul id="navBarList">
            <li id="pesquisar">
                <span id="lupa"></span>
                <input type="text" id="searchInput" placeholder="Pesquisar" oninput="pesquisarCupcakes()">
            </li>
                <li class="navBarItem"><a href="/Nolacake/index.php?usuario=<?php echo urlencode($_GET['usuario'] ?? '');?>">Home</a></li>
                <li class="navBarItem"><a href="../html/cupcakes.php?usuario=<?php echo urlencode($_GET['usuario'] ?? '');?>">Cupcakes</a></li>
                <li class="navBarItem"><a href="../html/favoritos.php?usuario=<?php echo urlencode($_GET['usuario'] ?? '');?>">Favoritos</a></li>
                <li class="navBarItem"><a href="../html/avaliacoes.php?usuario=<?php echo urlencode($_GET['usuario'] ?? '');?>">Avaliações</a></li>
                <li class="navBarItem"><a href="../html/sobrenos.php?usuario=<?php echo urlencode($_GET['usuario'] ?? '');?>">Sobre Nós</a></li>
                <li class="navBarItem">
                    <a href="../html/login.html">
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
        <a href="../html/carrinho.php?usuario=<?php echo urlencode($_GET['usuario'] ?? ''); ?>">
            <img id="cart" src="../imgs/carrinhoComprasEscuro.png" alt="Carrinho de compras">
        </a>
    </nav>

    <section id="cupcakes">
        <!-- Brigadeiro -->
        <div class="cardCupcake" data-sabor="brigadeiro">
            <a href="detalhes.php?sabor=brigadeiro&usuario=<?php echo urlencode($_GET['usuario'] ?? ''); ?>">
                <img class="img" src="../imgs/cupcake-1.png" alt="Brigadeiro">
                <h1 class="title font">Brigadeiro</h1>
                <p class="descricao">Massa de chocolate com recheio e cobertura de brigadeiro</p>
                <h2 class="preco font">R$7,50</h2>
            </a>
            <div class="interacao">
                <button class="adicionar" 
                        data-sabor="brigadeiro" 
                        data-preco="7.50" 
                        data-imagem="../imgs/cupcake-1.png">
                    Adicionar ao Carrinho
                </button>
                <span class="curtir" onclick="adicionarFavorito('brigadeiro', 'Massa de chocolate com recheio e cobertura de brigadeiro', '7.50', '../imgs/cupcake-1.png')"></span>
            </div>
        </div>

        <!-- Baunilha -->
        <div class="cardCupcake" data-sabor="baunilha">
            <a href="detalhes.php?sabor=baunilha&usuario=<?php echo urlencode($_GET['usuario'] ?? ''); ?>">
                <img class="img" src="../imgs/cupcake-7.png" alt="Baunilha">
                <h1 class="title font">Baunilha</h1>
                <p class="descricao">Massa de baunilha com recheio e cobertura de baunilha</p>
                <h2 class="preco font">R$7,50</h2>
            </a>
            <div class="interacao">
                <button class="adicionar" 
                        data-sabor="baunilha" 
                        data-preco="7.50" 
                        data-imagem="../imgs/cupcake-7.png">
                    Adicionar ao Carrinho
                </button>
                <span class="curtir" onclick="adicionarFavorito('baunilha', 'Massa de baunilha com recheio e cobertura de baunilha', '7.50', '../imgs/cupcake-7.png')"></span>
            </div>
        </div>

        <!-- Frutas Vermelhas -->
        <div class="cardCupcake" data-sabor="frutas-vermelhas">
            <a href="detalhes.php?sabor=frutas-vermelhas&usuario=<?php echo urlencode($_GET['usuario'] ?? ''); ?>">
                <img class="img" src="../imgs/cupcake-8.png" alt="Frutas Vermelhas">
                <h1 class="title font">Frutas Vermelhas</h1>
                <p class="descricao">Massa de chocolate com recheio e cobertura de frutas vermelhas</p>
                <h2 class="preco font">R$9,50</h2>
            </a>
            <div class="interacao">
                <button class="adicionar" 
                        data-sabor="frutas-vermelhas" 
                        data-preco="9.50" 
                        data-imagem="../imgs/cupcake-8.png">
                    Adicionar ao Carrinho
                </button>
                <span class="curtir" onclick="adicionarFavorito('frutas-vermelhas', 'Massa de chocolate com recheio e cobertura de frutas vermelhas', '9.50', '../imgs/cupcake-8.png')"></span>
            </div>
        </div>

        <!-- Morango -->
        <div class="cardCupcake" data-sabor="morango">
            <a href="detalhes.php?sabor=morango&usuario=<?php echo urlencode($_GET['usuario'] ?? ''); ?>">
                <img class="img" src="../imgs/cupcake-4.png" alt="Morango">
                <h1 class="title font">Morango</h1>
                <p class="descricao">Massa de baunilha com recheio e cobertura de morango</p>
                <h2 class="preco font">R$7,50</h2>
            </a>
            <div class="interacao">
                <button class="adicionar" 
                        data-sabor="morango" 
                        data-preco="7.50" 
                        data-imagem="../imgs/cupcake-4.png">
                    Adicionar ao Carrinho
                </button>
                <span class="curtir" onclick="adicionarFavorito('morango', 'Massa de baunilha com recheio e cobertura de morango', '7.50', '../imgs/cupcake-4.png')"></span>
            </div>
        </div>

        <!-- Oreo -->
        <div class="cardCupcake" data-sabor="oreo">
            <a href="detalhes.php?sabor=oreo&usuario=<?php echo urlencode($_GET['usuario'] ?? ''); ?>">
                <img class="img" src="../imgs/cupcake-6.png" alt="Oreo">
                <h1 class="title font">Oreo</h1>
                <p class="descricao">Massa de chocolate com recheio e cobertura de Oreo</p>
                <h2 class="preco font">R$9,50</h2>
            </a>
            <div class="interacao">
                <button class="adicionar" 
                        data-sabor="oreo" 
                        data-preco="9.50" 
                        data-imagem="../imgs/cupcake-6.png">
                    Adicionar ao Carrinho
                </button>
                <span class="curtir" onclick="adicionarFavorito('oreo', 'Massa de chocolate com recheio e cobertura de Oreo', '9.50', '../imgs/cupcake-6.png')"></span>
            </div>
        </div>

        <!-- Red Velvet -->
        <div class="cardCupcake" data-sabor="red-velvet">
            <a href="detalhes.php?sabor=red-velvet&usuario=<?php echo urlencode($_GET['usuario'] ?? ''); ?>">
                <img class="img" src="../imgs/cupcake-5.png" alt="Red Velvet">
                <h1 class="title font">Red Velvet</h1>
                <p class="descricao">Massa de beterraba com recheio e cobertura de baunilha</p>
                <h2 class="preco font">R$9,50</h2>
            </a>
            <div class="interacao">
                <button class="adicionar" 
                        data-sabor="red-velvet" 
                        data-preco="9.50" 
                        data-imagem="../imgs/cupcake-5.png">
                    Adicionar ao Carrinho
                </button>
                <span class="curtir" onclick="adicionarFavorito('red-velvet', 'Massa de beterraba com recheio e cobertura de baunilha', '9.50', '../imgs/cupcake-5.png')"></span>
            </div>
        </div>

        <!-- Sensação -->
        <div class="cardCupcake" data-sabor="sensacao">
            <a href="detalhes.php?sabor=sensacao&usuario=<?php echo urlencode($_GET['usuario'] ?? ''); ?>">
                <img class="img" src="../imgs/cupcake-2.png" alt="Sensação">
                <h1 class="title font">Sensação</h1>
                <p class="descricao">Massa de chocolate com recheio e cobertura de morango</p>
                <h2 class="preco font">R$8,50</h2>
            </a>
            <div class="interacao">
                <button class="adicionar" 
                        data-sabor="sensacao" 
                        data-preco="8.50" 
                        data-imagem="../imgs/cupcake-2.png">
                    Adicionar ao Carrinho
                </button>
                <span class="curtir" onclick="adicionarFavorito('sensacao', 'Massa de chocolate com recheio e cobertura de morango', '8.50', '../imgs/cupcake-2.png')"></span>
            </div>
        </div>

        <!-- Tutti Frutti -->
        <div class="cardCupcake" data-sabor="tutti-frutti">
            <a href="detalhes.php?sabor=tutti-frutti&usuario=<?php echo urlencode($_GET['usuario'] ?? ''); ?>">
                <img class="img" src="../imgs/cupcake-3.png" alt="Tutti Frutti">
                <h1 class="title font">Tutti Frutti</h1>
                <p class="descricao">Massa de chocolate com recheio e cobertura de tutti frutti</p>
                <h2 class="preco font">R$8,50</h2>
            </a>
            <div class="interacao">
                <button class="adicionar" 
                        data-sabor="tutti-frutti" 
                        data-preco="8.50" 
                        data-imagem="../imgs/cupcake-3.png">
                    Adicionar ao Carrinho
                </button>
                <span class="curtir" onclick="adicionarFavorito('tutti-frutti', 'Massa de chocolate com recheio e cobertura de tutti frutti', '8.50', '../imgs/cupcake-3.png')"></span>
            </div>
        </div>
    </section>
    >

    <!-- Carregamento dos scripts -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // Seleciona todos os botões "Adicionar ao Carrinho"
            const botoesAdicionar = document.querySelectorAll('.adicionar');

            if (botoesAdicionar.length > 0) {
                botoesAdicionar.forEach(botao => {
                    botao.addEventListener('click', (event) => {
                        event.preventDefault();

                        // Obtém os dados do botão clicado
                        const sabor = botao.getAttribute('data-sabor');
                        const preco = botao.getAttribute('data-preco');
                        const imagem = botao.getAttribute('data-imagem');

                        // Monta o objeto do cupcake
                        const cupcake = {
                            sabor,
                            preco: parseFloat(preco),
                            imagem,
                            quantidade: 1
                        };

                        // Adiciona ao localStorage
                        adicionarAoCarrinho(cupcake);
                    });
                });
            }

            function adicionarAoCarrinho(cupcake) {
                let carrinho = JSON.parse(localStorage.getItem('carrinho')) || [];

                const itemExistente = carrinho.find(item => item.sabor === cupcake.sabor);
                if (itemExistente) {
                    itemExistente.quantidade += 1;
                } else {
                    carrinho.push(cupcake);
                }

                localStorage.setItem('carrinho', JSON.stringify(carrinho));
                alert(`${cupcake.sabor} foi adicionado ao Carrinho!`);
            }
        });
    </script>
    <script src="../javascript/cupcakes.js"></script>
    <script src="../javascript/carrinho.js"></script>
</body>

</html>
        