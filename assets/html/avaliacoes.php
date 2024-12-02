<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nolacake | Cupcakes</title>
    <link rel="shortcut icon" href="../imgs/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/global.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/sobrenos.css">
    <link rel="stylesheet" href="../css/avaliacoes.css">
</head>

<body>
    <nav id="navBar">
        <a href="/Nolacake/index.php?usuario=<?php echo urlencode($_GET['usuario'] ?? '');?>"><img id="logo" src="../imgs/logoEscuro.png" alt="Logo Nolacake"></a>
        <ul id="navBarList">
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
    <section id="avaliacoes">   
        <div class="avaliacao um">
            <h1>Simone</h1>
            <p>A Nolacake é simplesmente maravilhosa! Os cupcakes são incrivelmente fofos e deliciosos, com uma variedade de sabores que agradam a todos os gostos. Já comprei várias vezes para festas e sempre são um sucesso. Super recomendo!</p>
            <img src="../imgs/estrelas.png" alt="">
        </div>
        <div class="avaliacao dois">
            <h1>Sophia</h1>
            <p>A Nolacake tem cupcakes bem gostosos, mas acredito que a variedade de opções poderia ser maior. O atendimento foi bom, e a entrega foi dentro do prazo. No geral, foi uma experiência positiva, mas espero ver mais opções no futuro.</p>
            <img src="../imgs/estrelas2.png" alt="">
        </div>
        <div class="avaliacao tres">
            <h1>Ronaldo</h1>
            <p>Eu sou fã de cupcakes e, depois de conhecer a Nolacake, não compro mais em outro lugar. Os sabores são incríveis e a textura dos bolos é perfeita. Todo mundo adora quando levo para as festas. Super satisfeita!</p>
            <img src="../imgs/estrelas.png" alt="">
        </div>
        <div class="avaliacao quatro">
            <h1>Erick</h1>
            <p>Adoro a Nolacake! Os cupcakes são fresquinhos e com uma qualidade excelente. O atendimento é sempre muito simpático e atencioso, e a entrega é rápida. Com certeza é a minha loja favorita para doces!</p>
            <img src="../imgs/estrelas.png" alt="">
        </div>
    </section>
</body>

</html>
