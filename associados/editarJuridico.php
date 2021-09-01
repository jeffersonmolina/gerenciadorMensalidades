<?php
session_start();
if (!empty($_SESSION['id'])) {
?>
<!doctype html>
<html class="no-js" lang="pt-br">
<?php
//Conexão
include_once '../action/db_connect.php';
//Select
if (isset($_GET['idJuridico'])) :
    $idJuridico = mysqli_escape_string($connect, $_GET['idJuridico']);
    $sql = "SELECT * FROM associadojuridico WHERE idJuridico = '$idJuridico'";
    $resultado = mysqli_query($connect, $sql);
    $dados = mysqli_fetch_array($resultado);
endif;
?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Gerenciador Mensalidades - ACDV</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="../assets/images/icon/fiveicon.ico">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/css/themify-icons.css">
    <link rel="stylesheet" href="../assets/css/metisMenu.css">
    <link rel="stylesheet" href="../assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../assets/css/slicknav.min.css">
    <link rel="stylesheet" href="../assets/css/typography.css">
    <link rel="stylesheet" href="../assets/css/default-css.css">
    <link rel="stylesheet" href="../assets/css/styles.css">
    <link rel="stylesheet" href="../assets/css/responsive.css">
    <script src="../assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body class="body-bg">
    <div class="horizontal-main-wrapper">
        <div class="mainheader-area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-3">
                        <div class="logo">
                            <a href="index.php"><img src="../assets/images/icon/logoMenu.png" alt="logo"></a>
                        </div>
                    </div>
                    <div class="col-md-9 clearfix text-right">
                        <div class="d-md-inline-block d-block mr-md-4">
                            <ul class="notification-area">
                                <li id="full-view"><i class="ti-fullscreen"></i></li>
                                <li id="full-view-exit"><i class="ti-zoom-out"></i></li>
                            </ul>
                        </div>
                        <div class="clearfix d-md-inline-block d-block">
                            <div class="user-profile m-0">
                                <img class="avatar user-thumb" src="../assets/images/author/avatar.png" alt="avatar">
                                <h4 class="user-name dropdown-toggle" data-toggle="dropdown"><?php echo $_SESSION['nome'] ?> <i class="fa fa-angle-down"></i></h4>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="../login/sair.php">Sair &nbsp<i class="fa fa-sign-out" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-area header-bottom">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-9  d-none d-lg-block">
                        <div class="horizontal-menu">
                            <nav>
                                <ul id="nav_menu">
                                    <li>
                                        <a href="../index.php" tabindex="1" class="horizontal-menu"><i class="fa fa-tv"></i><span>Início</span></a>
                                    </li>
                                    <li>
                                        <a href="associado.php" tabindex="2"><i class="fa fa-group"></i><span>Associados</span></a>
                                    </li>
                                    <li>
                                        <a href="../mensalidade/mensalidade.php" tabindex="3"><i class="fa fa-credit-card"></i><span>Mensalidades</span></a>
                                    </li>
                                    <li class="mega-menu">
                                        <a href="../doacoes/doacoes.php" tabindex="4"><i class="fa fa-money"></i><span>Doações</span></a>
                                    </li>
                                    <li class="mega-menu">
                                        <a href="../funcionario/funcionario.php" tabindex="5"><i class="ti-user"></i> <span>Funcionários</span></a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <!-- mobile_menu -->
                    <div class="col-12 d-block d-lg-none">
                        <div id="mobile_menu"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-content-inner">
            <h3 class="centro text-center">Editar associado jurídico</h3>
            <div class="container">
                <div class="row">
                    <div class="col-md-11 col-sm-11 col-11 col-lg-11 mx-5 ml-auto">
                        <form action="../action/update.php" method="POST" autocomplete="off">
                            <input type="hidden" name="idJuridico" value="<?php echo $dados['idJuridico']; ?>">
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="nome">Nome<b>*</b></label>
                                    <input type="text" class="form-control" id="nome" name="nome" value="<?php echo $dados['nome']; ?>" placeholder="Digite o nome completo" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="cnpj">CNPJ<b>*</b></label>
                                    <input type="text" class="form-control" id="cnpj" name="cnpj" value="<?php echo $dados['cnpj']; ?>" minlength="18" maxlength="18" onkeypress="$(this).mask('00.000.000/0000-00')" required placeholder="Digite o CNPJ">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="telefone">Telefone<b>*</b></label>
                                    <input type="text" class="form-control" id="telefone" name="telefone" value="<?php echo $dados['telefone']; ?>" onkeypress="$(this).mask('(00) 00009-0000')" required placeholder="Digite o telefone">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="endereco">Endereço</label>
                                <input type="text" class="form-control" id="endereco" name="endereco" value="<?php echo $dados['endereco']; ?>" placeholder="Digite o endereço">
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-3">
                                    <label for="numero">Número</label>
                                    <input type="text" class="form-control" id="numero" name="numero" value="<?php echo $dados['numero']; ?>" placeholder="Digite o número">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="complemento">Complemento</label>
                                    <input type="text" class="form-control" id="complemento" name="complemento" value="<?php echo $dados['complemento']; ?>" placeholder="Digite o complemento">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="bairro">Bairro</label>
                                    <input type="text" class="form-control" id="bairro" name="bairro" value="<?php echo $dados['bairro']; ?>" placeholder="Digite o bairro">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="cep">CEP</label>
                                    <input type="text" class="form-control" id="cep" name="cep" value="<?php echo $dados['cep']; ?>" placeholder="Digite o CEP" minlength="8" maxlength="8" onkeypress="$(this).mask('00.000-000')">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="email">E-mail<b>*</b></label>
                                    <input type="text" class="form-control" id="email" name="email" value="<?php echo $dados['email']; ?>" placeholder="Digite o email" required>
                                </div>
                            </div>
                            <h6 class="text-danger">*Campos obrigatórios</h6><br />
                            <div class="form-row">
                                <div class="form-group col-lg-12">
                                    <button type="submit" name="editarJuridico" class="btn btn-success btn-lg btn-block">Atualizar</button>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-lg-12">
                                    <button type="reset" class="btn btn-danger btn-lg btn-block">Limpar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <footer>
                    <div class="footer-area">
                        <p>© ACDV 2019. Sistema gerenciador de mensalidades.</p>
                    </div>
                </footer>
            </div>
            <!-- jquery  -->
            <script src="../assets/js/vendor/jquery-2.2.4.min.js"></script>
            <!-- bootstrap 4 js -->
            <script src="../assets/js/popper.min.js"></script>
            <script src="../assets/js/bootstrap.min.js"></script>
            <script src="../assets/js/owl.carousel.min.js"></script>
            <!--Estilo dropdown-->
            <script src="../assets/js/metisMenu.min.js"></script>
            <!--Transforma DIV em barra de rolagem-->
            <script src="../assets/js/jquery.slimscroll.min.js"></script>
            <!--MENU MOBILE-->
            <script src="../assets/js/jquery.slicknav.min.js"></script>
            <script src="../assets/js/scripts.js"></script>
             <!--SCRIPT Mascaras -->
             <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
</body>

</html>
<?php
} else {
    header("Location: login/login.php?msg=4");
}
?>