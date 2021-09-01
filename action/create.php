<?php
//Conexão
require_once 'db_connect.php';

if (isset($_POST['cadastrarFuncionario'])) :
    $nome = mysqli_escape_string($connect, $_POST['nome']);
    $telefone = mysqli_escape_string($connect, $_POST['telefone']);
    $cpf = mysqli_escape_string($connect, $_POST['cpf']);
    $endereco = mysqli_escape_string($connect, $_POST['endereco']);
    $numero = mysqli_escape_string($connect, $_POST['numero']);
    $bairro = mysqli_escape_string($connect, $_POST['bairro']);
    $cep = mysqli_escape_string($connect, $_POST['cep']);
    $email = mysqli_escape_string($connect, $_POST['email']);

    $sql = "INSERT INTO funcionario (nome, telefone, cpf, endereco, numero, bairro, cep, email) 
    VALUES ('$nome','$telefone','$cpf','$endereco', '$numero','$bairro','$cep','$email')";

    if (mysqli_query($connect, $sql)) :
        header('Location: ../funcionario/sucesso.php');
    else :
        header('Location: ../funcionario/erro.php');
    endif;
endif;

if (isset($_POST['cadastrarAssociado'])) :
    $status = "ativo";
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

    $sql = "INSERT INTO associadofisico (tipo, nome, rg, cpf, endereco, numero, complemento, bairro, cep, telefone, dataNascimento, usaProtese,
    descricaoProtese, deficienteVisual, tomaMedicacao, qualMedicacao, fezCirurgia, diagnostico, fazTratamento, qualTratamento,
    nomeOftalmo, tipoParto, meses, peso, comprimento, nomePai, nomeMae, cidade, recursosOpticos, quemDetectou, motivoAtendimento, doencaOptica, qualDoenca, status) 
    VALUES ('$tipo', '$nome', '$rg', '$cpf', '$endereco', '$numero', '$complemento', '$bairro', '$cep', '$telefone', '$dataNascimento', '$usaProtese',
    '$descricaoProtese', '$deficienteVisual', '$tomaMedicacao', '$qualMedicacao', '$fezCirurgia', '$diagnostico', '$fazTratamento', '$qualTratamento',
    '$nomeOftalmo', '$tipoParto', '$meses', '$peso', '$comprimento', '$nomePai', '$nomeMae', '$cidade', '$recursosOpticos', '$quemDetectou', '$motivoAtendimento', 
    '$doencaOptica', '$qualDoenca', '$status')";
    if (mysqli_query($connect, $sql)) :
        header('Location: ../associados/sucesso.php');
    else :
        header('Location: ../associados/erro.php');
    endif;
endif;

if (isset($_POST['cadastrarJuridico'])) :
    $nome = mysqli_escape_string($connect, $_POST['nome']);
    $cnpj = mysqli_escape_string($connect, $_POST['cnpj']);
    $telefone = mysqli_escape_string($connect, $_POST['telefone']);
    $endereco = mysqli_escape_string($connect, $_POST['endereco']);
    $numero = mysqli_escape_string($connect, $_POST['numero']);
    $complemento = mysqli_escape_string($connect, $_POST['complemento']);
    $bairro = mysqli_escape_string($connect, $_POST['bairro']);
    $cep = mysqli_escape_string($connect, $_POST['cep']);
    $email = mysqli_escape_string($connect, $_POST['email']);
    $status = "ativo";
    $sql = "INSERT INTO associadojuridico (nome, cnpj, telefone, endereco, numero, complemento, bairro, cep, email, status) 
    VALUES ('$nome', '$cnpj', '$telefone', '$endereco', '$numero', '$complemento', '$bairro', '$cep', '$email', '$status')";

    if (mysqli_query($connect, $sql)) :
        header('Location: ../associados/sucesso.php');
    else :
        header('Location: ../associados/erro.php');
    endif;
endif;

if (isset($_POST['cadastrarDoacao'])) :
    $id = $_POST['nome'];
    $dataPagamento = $_POST['dataPagamento'];
    $tipo = $_POST['tipo'];
    $valor = $_POST['valor'];
    $sql = "INSERT INTO doacao (idJuridico, dataPagamento, tipo, valor)  
    VALUES ('$id','$dataPagamento', '$tipo', '$valor')";
    if (mysqli_query($connect, $sql)) :
        header('Location: ../doacoes/sucesso.php');
    else :
        header('Location: ../doacoes/erro.php');
    endif;
endif;

if (isset($_POST['cadastrarMensalidade'])) :
    echo $id = $_POST['nome'];
    echo $dataPagamento = $_POST['dataPagamento'];
    echo $tipo = $_POST['tipo'];
    echo $valor = $_POST['valor'];
    $sql = "INSERT INTO mensalidade (idAssociadoFisico, dataPagamento, tipo, valor)
            VALUES ('$id','$dataPagamento', '$tipo','$valor')";
    if (mysqli_query($connect, $sql)) :
        header('Location: ../mensalidade/sucesso.php');
    else :
        header('Location: ../mensalidade/erro.php');
    endif;
endif;
