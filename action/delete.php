<?php
// Sessão
session_start();
// Conexão
require_once 'db_connect.php';

if(isset($_POST['excluirFuncionario'])):	
	$id = $_POST['id']; 
	$sql = "DELETE FROM funcionario WHERE id = $id";
	if(mysqli_query($connect, $sql)):
        header('Location: ../funcionario/sucessoExcluir.php');
    else:
        header('Location: ../funcionario/erroExcluir.php');
    endif;
endif;

if(isset($_POST['excluirMensalidade'])):	
	 $idMensalidade = $_POST['idMensalidade']; 
	$sql = "DELETE FROM mensalidade WHERE idMensalidade = $idMensalidade";
	if(mysqli_query($connect, $sql)):
        header('Location: ../mensalidade/sucessoExcluir.php');
    else:
        header('Location: ../mensalidade/erroExcluir.php');
    endif;
endif;

if(isset($_POST['excluirDoacao'])):	
    $idDoacao = $_POST['idDoacao']; 
   $sql = "DELETE FROM doacao WHERE idDoacao = $idDoacao";
   if(mysqli_query($connect, $sql)):
       header('Location: ../doacoes/sucessoExcluir.php');
   else:
       header('Location: ../doacoes/erroExcluir.php');
   endif;
endif;