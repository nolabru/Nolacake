<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Nolacake | Os Melhores Cupcakes do Brasil</title>
        <link rel="shortcut icon" href="assets/imgs/favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="assets/css/global.css">
        <link rel="stylesheet" href="assets/css/style.css">
    </head>
    <body>
        <nav id="navBar">
            <a href="#"><img id="logo" src="assets/imgs/logo.png" alt=""></a>
            <ul id="navBarList">
                <li class="navBarItem"><a href="#">Home</a></li>
                <li class="navBarItem"><a href="assets/html/cupcakes.php?usuario=<?php echo urlencode($_GET['usuario'] ?? '');?>">Cupcakes</a></li>
                <li class="navBarItem"><a href="assets/html/favoritos.php?usuario=<?php echo urlencode($_GET['usuario'] ?? '');?>">Favoritos</a></li>
                <li class="navBarItem"><a href="assets/html/avaliacoes.php?usuario=<?php echo urlencode($_GET['usuario'] ?? '');?>">Avaliações</a></li>
                <li class="navBarItem"><a href="assets/html/sobrenos.php?usuario=<?php echo urlencode($_GET['usuario'] ?? '');?>">Sobre Nós</a></li>
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
            <a href="assets/html/carrinho.php?usuario=<?php echo urlencode($_GET['usuario'] ?? '');?>"><img id="cart" src="assets/imgs/carrinhoCompras.png" alt=""></a>
        </nav>      
        <section id="infos">
            <h1>Nolacake</h1>
            <h3>Os Melhores Cupcakes do Brasil!</h3>
            <section id="redesSociais">
                <img src="assets/imgs/instagramIcon.png" alt="">
                <img src="assets/imgs/whatsappIcon.png" alt="">
                <img src="assets/imgs/facebookIcon.png" alt="">
            </section>
        </section>      
    </body>
</html>
