<!-- Criando conexão com o banco.

Inicio 1º passo para enviar os dados do formulário-->
<?php                                       
 $dbHost = 'Localhost';
 $dbUsername = 'root';
 $dbPassword = '';
 $dbName = 'cadastros-usuarios';

 $conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
//Fim 1º passo

                //if usado para confirmar a conexão com o banco
 //if($conexao->connect_errno)
 //{
 //    echo "Erro.";
 //}                      
 
 //else
 //{
 //    echo "Conexão efetuada com sucesso.";
 //}
                //Fim if confirmar
?>