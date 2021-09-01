<?php
// Sessão
session_start();
// Conexão
require_once 'db_connect.php';

if (isset($_POST['editarFuncionario'])) :
    $nome = mysqli_escape_string($connect, $_POST['nome']);
    $telefone = mysqli_escape_string($connect, $_POST['telefone']);
    $cpf = mysqli_escape_string($connect, $_POST['cpf']);
    $endereco = mysqli_escape_string($connect, $_POST['endereco']);
    $numero = mysqli_escape_string($connect, $_POST['numero']);
    $bairro = mysqli_escape_string($connect, $_POST['bairro']);
    $cep = mysqli_escape_string($connect, $_POST['cep']);
    $email = mysqli_escape_string($connect, $_POST['email']);

    $id = mysqli_escape_string($connect, $_POST['id']);

    $sql = "UPDATE funcionario SET nome = '$nome', telefone = '$telefone', cpf = '$cpf', endereco = '$endereco' , numero = '$numero',
	 bairro = '$bairro', cep = '$cep', email = '$email' WHERE id = '$id'";

    if (mysqli_query($connect, $sql)) :
        header('Location: ../funcionario/sucessoEditar.php');
    else :
        header('Location: ../funcionario/erroEditar.php');
    endif;
endif;

if (isset($_POST['editarAssociadoFisico'])) :
    $tipo = mysqli_escape_string($connect, $_POST['tipo']);
    $nome = mysqli_escape_string($connect, $_POST['nome']);
    $rg = mysqli_escape_string($connect, $_POST['rg']);
    $cpf = mysqli_escape_string($connect, $_POST['cpf']);
    $endereco = mysqli_escape_string($connect, $_POST['endereco']);
    $numero = mysqli_escape_string($connect, $_POST['numero']);
    $complemento = mysqli_escape_string($connect, $_POST['complemento']);
    $bairro = mysqli_escape_string($connect, $_POST['bairro']);
    $cep = mysqli_escape_string($connect, $_POST['cep']);
    $telefone = mysqli_escape_string($connect, $_POST['telefone']);
    $dataNascimento = mysqli_escape_string($connect, $_POST['dataNascimento']);
    $usaProtese = mysqli_escape_string($connect, $_POST['usaProtese']);
    $descricaoProtese = mysqli_escape_string($connect, $_POST['descricaoProtese']);
    $deficienteVisual = mysqli_escape_string($connect, $_POST['deficienteVisual']);
    $tomaMedicacao = mysqli_escape_string($connect, $_POST['tomaMedicacao']);
    $qualMedicacao = mysqli_escape_string($connect, $_POST['qualMedicacao']);
    $fezCirurgia = mysqli_escape_string($connect, $_POST['fezCirurgia']);
    $diagnostico = mysqli_escape_string($connect, $_POST['diagnostico']);
    $fazTratamento = mysqli_escape_string($connect, $_POST['fazTratamento']);
    $qualTratamento = mysqli_escape_string($connect, $_POST['qualTratamento']);
    $nomeOftalmo = mysqli_escape_string($connect, $_POST['nomeOftalmo']);
    $tipoParto = mysqli_escape_string($connect, $_POST['tipoParto']);
    $meses = mysqli_escape_string($connect, $_POST['meses']);
    $peso = mysqli_escape_string($connect, $_POST['peso']);
    $comprimento = mysqli_escape_string($connect, $_POST['comprimento']);
    $nomePai = mysqli_escape_string($connect, $_POST['nomePai']);
    $nomeMae = mysqli_escape_string($connect, $_POST['nomeMae']);
    $cidade = mysqli_escape_string($connect, $_POST['cidade']);
    $recursosOpticos = mysqli_escape_string($connect, $_POST['recursosOpticos']);
    $quemDetectou = mysqli_escape_string($connect, $_POST['quemDetectou']);
    $motivoAtendimento = mysqli_escape_string($connect, $_POST['motivoAtendimento']);
    $doencaOptica = mysqli_escape_string($connect, $_POST['doencaOptica']);
    $qualDoenca = mysqli_escape_string($connect, $_POST['qualDoenca']);

    $idAssociadoFisico = mysqli_escape_string($connect, $_POST['idAssociadoFisico']);

    $sql = "UPDATE associadofisico SET tipo = '$tipo', nome = '$nome', rg = '$rg', cpf = '$cpf', endereco = '$endereco', 
    numero = '$numero', complemento = '$complemento', bairro = '$bairro', cep = '$cep',
    telefone = '$telefone', dataNascimento = '$dataNascimento', descricaoProtese = '$descricaoProtese', 
    deficienteVisual = '$deficienteVisual', tomaMedicacao = '$tomaMedicacao', qualMedicacao = '$qualMedicacao', 
    fezCirurgia = '$fezCirurgia', diagnostico = '$diagnostico', fazTratamento = '$fazTratamento', 
    qualTratamento = '$qualTratamento', nomeOftalmo = '$nomeOftalmo', tipoParto ='$tipoParto', meses = '$meses', 
    peso = '$peso', comprimento = '$comprimento', nomePai = '$nomePai', nomeMae = '$nomeMae', cidade = '$cidade', 
    recursosOpticos = '$recursosOpticos', quemDetectou = '$quemDetectou', motivoAtendimento = '$motivoAtendimento', 
    doencaOptica = '$doencaOptica', qualDoenca = '$qualDoenca' 
    WHERE idAssociadoFisico = '$idAssociadoFisico'";

    if (mysqli_query($connect, $sql)) :
        header('Location: ../associados/sucessoEditar.php');
    else :
        header('Location: ../associados/erroEditar.php');
    endif;
endif;

if (isset($_POST['editarJuridico'])) :
    $nome = mysqli_escape_string($connect, $_POST['nome']);
    $cnpj = mysqli_escape_string($connect, $_POST['cnpj']);
    $telefone = mysqli_escape_string($connect, $_POST['telefone']);
    $endereco = mysqli_escape_string($connect, $_POST['endereco']);
    $numero = mysqli_escape_string($connect, $_POST['numero']);
    $complemento = mysqli_escape_string($connect, $_POST['complemento']);
    $bairro = mysqli_escape_string($connect, $_POST['bairro']);
    $cep = mysqli_escape_string($connect, $_POST['cep']);
    $email = mysqli_escape_string($connect, $_POST['email']);
    $idJuridico = mysqli_escape_string($connect, $_POST['idJuridico']);

    $sql = "UPDATE associadojuridico SET nome = '$nome', cnpj = '$cnpj', telefone = '$telefone', endereco = '$endereco', 
    numero = '$numero', complemento = '$complemento', bairro = '$bairro', cep = '$cep', email = '$email' WHERE idJuridico = '$idJuridico'";

    if (mysqli_query($connect, $sql)) :
        header('Location: ../associados/sucessoEditarJuridico.php');
    else :
        header('Location: ../associados/erroEditarJuridico.php');
    endif;
endif;

if (isset($_POST['editarDoacao'])) :
    $id = $_POST['nome'];
    $dataPagamento = $_POST['dataPagamento'];
    $tipo = $_POST['tipo'];
    $valor = $_POST['valor'];

    $idDoacao = mysqli_escape_string($connect, $_POST['idDoacao']);

    $sql = "UPDATE doacao SET idJuridico = '$id', dataPagamento = '$dataPagamento', tipo = '$tipo', valor = '$valor' 
    WHERE idDoacao = $idDoacao";

    if (mysqli_query($connect, $sql)) :
        header('Location: ../doacoes/sucessoEditar.php');
    else :
        header('Location: ../doacoes/erroEditar.php');
    endif;
endif;

if (isset($_POST['editarMensalidade'])) :
    $id = $_POST['nome'];
    $dataPagamento = $_POST['dataPagamento'];
    $tipo = $_POST['tipo'];
    $valor = $_POST['valor'];

    $idMensalidade = mysqli_escape_string($connect, $_POST['idMensalidade']);

    $sql = "UPDATE mensalidade SET idAssociadoFisico = '$id', dataPagamento = '$dataPagamento', tipo = '$tipo', valor = '$valor' 
            WHERE idMensalidade = $idMensalidade";

    if (mysqli_query($connect, $sql)) :
        header('Location: ../mensalidade/sucessoEditar.php');
    else :
        header('Location: ../mensalidade/erroEditar.php');
    endif;
endif;

if (isset($_POST['mudarStatus'])) :
    echo $desativado = "desativado";
    echo $id = $_POST['idAssociadoFisico'];
    echo $status = $desativado;

    $idAssociadoFisico = mysqli_escape_string($connect, $_POST['idAssociadoFisico']);

    $sql = "UPDATE associadofisico SET status = '$status' 
            WHERE idAssociadoFisico = $idAssociadoFisico";

    if (mysqli_query($connect, $sql)) :
        header('Location: ../associados/sucessoEditarDesativado.php');
    else :
        header('Location: ../associados/erroEditarDesativado.php');
    endif;
endif;

if (isset($_POST['mudarStatusAtivado'])) :
    echo $ativado = "ativo";
    echo $id = $_POST['idAssociadoFisico'];
    echo $status = $ativado;

    $idAssociadoFisico = mysqli_escape_string($connect, $_POST['idAssociadoFisico']);

    $sql = "UPDATE associadofisico SET status = '$status' 
            WHERE idAssociadoFisico = $idAssociadoFisico";

    if (mysqli_query($connect, $sql)) :
        header('Location: ../associados/sucessoEditarAtivo.php');
    else :
        header('Location: ../associados/erroEditarAtivo.php');
    endif;
endif;

if (isset($_POST['mudarStatusJuridico'])) :
    echo $desativado = "desativado";
    echo $id = $_POST['idJuridico'];
    echo $status = $desativado;

    $idJuridico = mysqli_escape_string($connect, $_POST['idJuridico']);

    $sql = "UPDATE associadojuridico SET status = '$status' 
            WHERE idJuridico = $idJuridico";

    if (mysqli_query($connect, $sql)) :
        header('Location: ../associados/sucessoEditarJuridicoDesativado.php');
    else :
        header('Location: ../associados/erroEditarJuridicoDesativado.php');
    endif;
endif;

if (isset($_POST['mudarStatusAtivadoJuridico'])) :
    echo $ativado = "ativo";
    echo $id = $_POST['idJuridico'];
    echo $status = $ativado;

    $idJuridico = mysqli_escape_string($connect, $_POST['idJuridico']);

    $sql = "UPDATE associadojuridico SET status = '$status' 
            WHERE idJuridico = $idJuridico";

    if (mysqli_query($connect, $sql)) :
        header('Location: ../associados/sucessoEditarJuridicoAtivo.php');
    else :
        header('Location: ../associados/erroEditarJuridicoAtivo.php');
    endif;
endif;


