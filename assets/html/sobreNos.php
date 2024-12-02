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
    <section>   
        <div id="historia">
            <section id="imagemHistoria">

            </section>
            <section id="textoHistoria">
                <h1>Nossa História</h1>
                <p class="descricao">A Nolacake nasceu de uma paixão por criar momentos especiais e doces memoráveis. Fundada por um grupo de amigos que compartilham a adoração por cupcakes irresistíveis, nossa loja transforma cada mordida em uma experiência única, com receitas exclusivas e ingredientes de alta qualidade.</p>
                <p class="descricao">Inspirada pela alegria que um cupcake pode proporcionar, a Nolacake começou em uma cozinha caseira, onde testamos e aperfeiçoamos receitas para garantir que nossos produtos sejam deliciosos e feitos com carinho.</p>
                <p class="descricao">Nossa missão é tornar cada celebração mais doce, oferecendo cupcakes feitos para alegrar o seu dia, seja em aniversários, reuniões ou em qualquer momento especial, sempre com sabor e criatividade.</p>
                <p class="descricao">A Nolacake cresceu, mas nossa essência continua a mesma: fazer cupcakes que encantam. Estamos aqui para adoçar sua vida com a melhor confeitaria artesanal, criando experiências cheias de sabor.</p>
            </section>
        </div>
    </section>
</body>

</html>
