<!-- Dentro desse arquivo localiza-se a conexão com o banco e a mensagem de validação se formulário foi preenchido ou não. -->

<?php
    //inicio 2º passo para enviar os dados para o banco
    if (!empty($_POST) && $_POST['nome']!="" && $_POST['email']!="") {           
        include_once('config.php');

        //print_r($_POST['nome']);
        //print_r($_POST['email']);

        $text = $_POST['nome'];             //Atribuindo o valor POST as variáveis text e email
        $email = $_POST['email'];

        $result = mysqli_query($conexao, "INSERT INTO `usuarios` (`usuario_id`, `usuario_nome`, `usuario_email`)   
        VALUES (NULL, '$text', '$email');");
    //Fim 2º passo enviar dados para o banco

    // inicio validação se formulário está preenchido ou não
        $mensagem = "Pedido enviado com sucesso!";                    //Variável que será utilizada na próximo função(header) onde irá informar se foi inserido ou não dados no formulário. 
        header("Location: index.php?msg=$mensagem");         //Função header é usada para enviar uma mensagem ao cabeçalho, onde location define o local em que a $mensagem será retornada
    exit();                                                  //Para a execução desse código

    }else{
        $mensagem = "Falha ao enviar pedido, favor preencher corretamente!";
        header("Location: index.php?msg=$mensagem");
        exit();
    }
    //Fim validação
?>