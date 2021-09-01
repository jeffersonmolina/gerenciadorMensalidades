<?php
session_start();
include_once("../action/db_connect.php");
$botaoLogin = filter_input(INPUT_POST, 'botaoLogin', FILTER_SANITIZE_STRING);
if ($botaoLogin) {
    $usuario = filter_input(INPUT_POST, 'usuario', FILTER_SANITIZE_STRING);
    $senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
    //echo "$usuario - $senha";
    if ((!empty($usuario)) AND (!empty($senha))) {
        //GERAR A SENHA CRIPTOGRAFADA
        //echo password_hash($senha, PASSWORD_DEFAULT);
        //Pesquisar o usuario no banco de dados
        $result_usuario = "SELECT id, nome, email, senha FROM usuarios WHERE usuario = '$usuario' LIMIT 1";
        $resultado_usuario = mysqli_query($connect, $result_usuario);
        if ($resultado_usuario) {
            $row_usuario = mysqli_fetch_assoc($resultado_usuario);
            if (password_verify($senha, $row_usuario['senha'])) { 
                $_SESSION['id'] = $row_usuario['id'];
                $_SESSION['nome'] = $row_usuario['nome'];
                $_SESSION['email'] = $row_usuario['email'];
                header("Location: ../index.php");
            } else {
                //$_SESSION['msg'] = "não entrou";
                header("Location: login.php?msg=3");
            }
        } 
        else {

         }
    } else {
        //$_SESSION['msg'] = "Login ou Senha incorretos";
        header("Location: login.php?msg=1");
    } 
}
