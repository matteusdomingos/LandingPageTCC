<!DOCTYPE html>
<html lang="en">

<?php include "./components/head.php" ?>

<body>

    <?php include "./components/header.php" ?>

    <main class="conteudo">
        <section class="conteudo-principal">
            <div class="conteudo-principal-escrito">
                <h1 class="conteudo-principal-escrito-titulo">Minhas Viagens</h1>
                <h2 class="conteudo-principal-escrito-subtitulo">Lorem ipsum dolor sit amet, consectetur adipisci elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua.</h2>

                <form class="formulario" action="salvarContato.php" method="POST">
                    <input type="text" name="nome" placeholder="Nome">
                    <input type="email" name="email" placeholder="Email">
                    <input type="submit" value="Eu quero!">
                </form>
                
                <!-- Apresentação da mensagem se formulário foi preenchido ou não-->
                <?php
                if (isset($_GET["msg"])) {              //isset acessa a variável onde $_GET vai copiar o que está após "?" na URL, que foi configurado em msg no arquivo salvarContato.php
                    echo "<div>{$_GET["msg"]}</div>";   //echo irá mostrar o valor que $_GET pegou de msg
                }
                ?>
                <!-- Fim Apresentação-->
                
            </div>
            <img class="conteudo-principal-imagem" src="../imagens/globo512px.png" alt="imagem do globo">
        </section>

        <section class="conteudo-secundario">
            <h3 class="conteudo-secundario-titulo">Voce vai ter acesso à:</h3>
            <p class="conteudo-secundario-paragrafo"><strong>Estratégias para compra</strong> de passagens aéreas mais em conta.</p>
            <p class="conteudo-secundario-paragrafo"><strong>Roteiros e dicas</strong> que eu próprio vivi.</p>
            <p class="conteudo-secundario-paragrafo">Listas com vários nomes de <strong>lugares imperdíveis</strong> que deve conhecer.</p>
        </section>
    </main>

    <footer class="rodape">
        <p>MATTEUS RAMOS DOMINGOS </p>
    </footer>


</body>

</html>