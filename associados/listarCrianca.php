<!doctype html>
<html class="no-js" lang="pt-br">

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
                            <a href="../index.php"><img src="../assets/images/icon/logoMenu.png" alt="logo"></a>
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
                                <h4 class="user-name dropdown-toggle" data-toggle="dropdown">Administrador<i class="fa fa-angle-down"></i></h4>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Sair &nbsp<i class="fa fa-sign-out" aria-hidden="true"></i></a>
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
            <div class="py-5">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="table-responsive">
                                <table class="table table-striped table-hover">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th>Nome</th>
                                            <th>Telefone</th>
                                            <th>Nome da Mãe</th>
                                            <th>Status</th>
                                            <th>Opções</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th>Andressa Lima Berro</th>
                                            <th>(55) 99965-2055</th>
                                            <th>Maria Antônia Berro</th>
                                            <th>
                                                <button type="button" class="btn btn-success">
                                                    Ativo <i class="fa fa-thumbs-o-up"></i>
                                                </button></th>
                                            <th>
                                                <button type="button" class="btn btn-lg btn-primary">Visualizar <i class="fa fa-eye"></i></button>
                                                <button type="button" class="btn btn-lg btn-warning">Editar <i class="fa fa-edit"></i></button>
                                                <button type="button" class="btn btn-lg btn-danger">Desativar <i class="fa fa-ban"></i></button>
                                            </th>
                                        </tr>
                                        <tr>
                                            <th>Carlos Eduardo Menezes</th>
                                            <th>(55) 99436-3960</th>
                                            <th>Luzia Menezes Silva</th>
                                            <th>
                                                <button type="button" class="btn btn-success">
                                                    Ativo <i class="fa fa-thumbs-o-up"></i>
                                                </button></th>
                                            </th>
                                            <th>
                                                <button type="button" class="btn btn-lg btn-primary">Visualizar <i class="fa fa-eye"></i></button>
                                                <button type="button" class="btn btn-lg btn-warning">Editar <i class="fa fa-edit"></i></button>
                                                <button type="button" class="btn btn-lg btn-danger">Desativar <i class="fa fa-ban"></i></button>
                                            </th>
                                        </tr>
                                        <tr>
                                            <th>Enzo Gabriel Vinuzzi</th>
                                            <th>(55) 99633-5598</th>
                                            <th>Elisabete Simas Vinuzzi</th>
                                            <th>
                                                <button type="button" class="btn btn-danger">
                                                    Desativado <i class="fa fa-thumbs-o-down"></i>
                                                </button></th>
                                            </th>
                                            <th>
                                                <button type="button" class="btn btn-lg btn-primary" disabled>Visualizar <i class="fa fa-eye"></i></button>
                                                <button type="button" class="btn btn-lg btn-warning" disabled>Editar <i class="fa fa-edit"></i></button>
                                                <button type="button" class="btn btn-lg btn-success">Ativar <i class="fa fa-check"></i></button>
                                            </th>
                                        </tr>
                                        <tr>
                                            <th>Gabriela Rodrigues Gomes</th>
                                            <th>(55) 99155-3636</th>
                                            <th>Roberta Rodrigues Gomes</th>
                                            <th>
                                                <button type="button" class="btn btn-success">
                                                    Ativo <i class="fa fa-thumbs-o-up"></i>
                                                </button></th>
                                            </th>
                                            <th>
                                                <button type="button" class="btn btn-lg btn-primary">Visualizar <i class="fa fa-eye"></i></button>
                                                <button type="button" class="btn btn-lg btn-warning">Editar <i class="fa fa-edit"></i></button>
                                                <button type="button" class="btn btn-lg btn-danger">Desativar <i class="fa fa-ban"></i></button>
                                            </th>
                                        </tr>
                                        <tr>
                                            <th>Guilherme Fantinel Figueiredo</th>
                                            <th>(55) 99122-5348</th>
                                            <th>Cíntia Figueiredo</th>
                                            <th>
                                                <button type="button" class="btn btn-danger">
                                                    Dasativado <i class="fa fa-thumbs-o-down"></i>
                                                </button></th>
                                            </th>
                                            <th>
                                                <button type="button" class="btn btn-lg btn-primary" disabled>Visualizar <i class="fa fa-eye"></i></button>
                                                <button type="button" class="btn btn-lg btn-warning" disabled>Editar <i class="fa fa-edit"></i></button>
                                                <button type="button" class="btn btn-lg btn-success">Ativar <i class="fa fa-check"></i></button>
                                            </th>
                                        </tr>
                                    </tbody>
                                </table>
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