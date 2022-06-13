<!DOCTYPE html>
<html lang="en">
<?php include "./components/head.php" ?>

<body>
  <?php include "./components/header.php" ?>

  <main class="cadastrados">
    <section class="conteudo-cadastrados">
      <div class="conteudo-cadastrados-titulo">
        <h1 class="titulo-cadastrados">Usuários cadastrados</h1>
      </div>
    </section>
    <section class="lista-usuarios">
      <!-- Inicio 1º passo mostrar dados formulário.-->
      <?php                                                                       
      include_once('config.php');                                                 //incluído pois é a onde a variável $conexao está
      $sql = "SELECT * FROM `usuarios` ORDER BY `usuarios`.`usuario_id` ASC ";   //SELECT usado para pegar os dados no banco na tabela usuários e apresentando de forma crescente
      $result = $conexao->query($sql);                                           //Inserindo os dados na variável result, com a conexão em config.php e executar a query $sql

      //print_r($result);                                                        //Para apresentar a variável $result, e assim verificar se está funcionando
      ?>
      <!--Fim 1º passo mostrar-->
      
      <table class="tabelas-cadastrados">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nome</th>
            <th scope="col">Email</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $i = 0;
          while ($user_data = mysqli_fetch_assoc($result)) {
            $i++;
            $class = $i % 2 == 0 ? "realce" : "";

            echo "<tr class='{$class}'>";
              echo "<td>" . $i . "</td>";
              echo "<td>" . $user_data['usuario_nome'] . "</td>";
              echo "<td>" . $user_data['usuario_email'] . "</td>";
            echo "</tr>";
          }
          ?>
        </tbody>
      </table>
    </section>
  </main>
</body>

</html>