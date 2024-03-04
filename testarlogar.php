<?php
//iniciando a sessão
session_start();
/*Testando retorno na tela
print_r($_REQUEST);
*/

if(isset($_POST['submit' ]) && !empty($_POST['email']) && !empty($_POST['senha'])){
    include_once('config.php');

    $email = $_POST['email'];
    $senha = $_POST['senha'];

/* Testando dados digitados
    print_r('Email: '. $email );
    print_r('<br>');
    print_r('Senha: '. $senha );
*/

    $sql = "SELECT * FROM formulariocadastro WHERE email = '$email' and senha = '$senha'";
    $result = $conexao -> query($sql);
    /*Testando o funcionamento do select
    print_r($sql);
    print_r($result);
    */

    if(mysqli_num_rows($result) == 0){
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: login.php');
    }
    else {
        $_SESSION['email'] = $email;
        $_SESSION['senha'] = $senha;
        header('Location: homeDoSistema.php');
    }
}

else{
    $_SESSION['$email'] = $email;
    header('Location: login.php');
}

?>