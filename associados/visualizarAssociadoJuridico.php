<!doctype html>
<html class="no-js" lang="pt-br">
<?php
//Conexão
include_once '../action/db_connect.php';
session_start();
if (!empty($_SESSION['id'])) {
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
        <div id="imprimir">
            <script language="javascript">
                function imprime(text) {
                    text = document
                    print(text)
                }
            </script>
        </div>
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
                                            <a href="../associados/associado.php" tabindex="2"><i class="fa fa-group"></i><span>Associados</span></a>

                                        </li>
                                        <li>
                                            <a href="mensalidade.php" tabindex="3"><i class="fa fa-credit-card"></i><span>Mensalidades</span></a>

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
            <!-- page title area end -->
            <div class="main-content-inner">
                <div class="row">
                    <div class="col-lg-12 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <div class="invoice-area">
                                    <div class="invoice-head">
                                        <div class="row">
                                            <div class="iv-left col-6">
                                                <span>Dados do associado</span>
                                            </div>
                                            <div class="iv-right col-6 text-md-right">
                                                <button type="button" name="imprimir" value="imprimir" onclick="imprime()" class="btn btn-rounded btn-primary">Imprimir <i class="fa fa-print"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row align-items-left">
                                        <div class="col-md-6">
                                            <div class="invoice-address">
                                                <?php
                                                    $codigo = $_GET['idJuridico'];
                                                    $sql = "SELECT * FROM associadojuridico where idJuridico = $codigo";
                                                    $resultado = mysqli_query($connect, $sql);
                                                    $dados = mysqli_fetch_array($resultado);
                                                    ?>
                                                <h4><?php $nome = $dados['nome'];
                                                        echo $nome ?></h4><br />
                                                <h6><?php $cnpj = $dados['cnpj'];
                                                        echo "CNPJ: $cnpj" ?></h6><br />
                                                <h6><?php $telefone = $dados['telefone'];
                                                        echo "Telefone: $telefone" ?></h6><br />
                                                <h6><?php $endereco = $dados['endereco'];
                                                        echo "Endereço: $endereco" ?></h6><br />
                                                <h6><?php $numero = $dados['numero'];
                                                        echo "Numero: $numero" ?></h6><br />
                                                <h6><?php $complemento = $dados['complemento'];
                                                        echo "Complemento: $complemento" ?></h6><br />
                                                <h6><?php $bairro = $dados['bairro'];
                                                        echo "Bairro: $bairro" ?></h6><br />
                                                <h6><?php $cep = $dados['cep'];
                                                        echo "CEP: $cep" ?></h6><br />

                                                <h6><?php $email = $dados['email'];
                                                        echo "E-mail: $email" ?></h6><br />
                                            </div>
                                        </div>
                                        <div class="col-md-6 text-md-right">
                                        </div>
                                    </div>
                                    <div class="invoice-table table-responsive mt-5">
                                        <h5 style="text-align: right;">Tabela de valores doados</h5><br />
                                        <table class="table table-bordered table-hover text-right">
                                            <thead>
                                                <tr>
                                                    <th>Data de Pagamento</th>
                                                    <th>Tipo</th>
                                                    <th>Valor</th>
                                                </tr>
                                            </thead>
                                            <?php
                                                $sql = "SELECT idDoacao, date_format(`dataPagamento`,'%d/%m/%Y') as dataPagamento, doacao.tipo, valor FROM doacao, associadojuridico 
                                                WHERE doacao.idJuridico = associadojuridico.idJuridico
                                                AND doacao.idJuridico = $codigo ORDER BY dataPagamento DESC";
                                                $resultado = mysqli_query($connect, $sql);
                                                while ($dados = mysqli_fetch_array($resultado)) :
                                                    $idDoacao = $dados['idDoacao'];
                                                    if (isset($idDoacao)) { ?>
                                                    <tbody>
                                                        <tr>
                                                            <th><?php echo $dados['dataPagamento']; ?></th>
                                                            <th><?php echo $dados['tipo']; ?></th>
                                                            <th><?php echo $dados['valor']; ?></th>
                                                        </tr>
                                                    <?php } else { ?>
                                                        <h6>Não ha doações</h6>
                                                    <?php } ?>

                                                <?php endwhile; ?>
                                                    </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="text-right">
                                    <a href="listarJuridico.php" class="btn btn-warning">Voltar para a lista de associados jurídicos <i class="fa fa-arrow-circle-left"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
    </body>

</html>
<?php
} else {
    header("Location: login/login.php?msg=4");
}
?>