<!doctype html>
<html class="no-js" lang="en">

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
            <h3 class="centro text-center">Cadastrar associado adulto</h3>
            <div class="container">
                <div class="row">
                    <div class="col-md-11 col-sm-11 col-11 col-lg-11 mx-5 ml-auto">
                        <form>
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="text">Nome<b>*</b></label>
                                    <input type="email" class="form-control" id="nome" placeholder="Digite o nome completo">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputPassword4">RG</label>
                                    <input type="text" class="form-control" id="rg" placeholder="Digite o RG">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputAddress">CPF<b>*</b></label>
                                    <input type="text" class="form-control" id="cpf" placeholder="Digite o CPF">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputAddress2">Endereço<b>*</b></label>
                                <input type="text" class="form-control" id="endereco" placeholder="Digite o endereço">
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-3">
                                    <label for="inputCity">Número</label>
                                    <input type="text" class="form-control" id="numero" placeholder="Digite o número">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="inputCity">Complemento</label>
                                    <input type="text" class="form-control" id="numero" placeholder="Digite o complemento">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="inputState">Bairro</label>
                                    <input type="text" class="form-control" id="bairro" placeholder="Digite o bairro">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="inputZip">CEP</label>
                                    <input type="text" class="form-control" id="inputZip" placeholder="Digite o CEP">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="inputCity">E-mail</label>
                                    <input type="text" class="form-control" id="email" placeholder="Digite o email">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputCity">Telefone<b>*</b></label>
                                    <input type="text" class="form-control" id="telefone" placeholder="Digite o telefone">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="date">Data de Nascimento</label>
                                    <input type="date" class="form-control" id="dataNascimento" placeholder="Digite a data de nascimento">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-lg-12">
                                    <label for="inputCity">Nome do problema</label>
                                    <input type="text" class="form-control" id="nomeProblema" placeholder="Digite o nome do problema">
                                </div>
                            </div>
                            <form>
                                <div class="form-row">
                                    <div class="form-group col-md-2">
                                        <label for="text">Usa prótese?</label>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="protese1" name="protese" class="custom-control-input">
                                            <label class="custom-control-label" for="protese1">Sim</label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="protese2" name="protese" class="custom-control-input">
                                            <label class="custom-control-label" for="protese2">Não</label>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-10">
                                        <label for="text">Se sim, qual?</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="2"></textarea>
                                    </div>
                                </div>
                            </form>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="text">Deficiente visual?</label>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="defVisual1" name="protese" class="custom-control-input">
                                        <label class="custom-control-label" for="defVisual1">Sim</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="defVisual2" name="protese" class="custom-control-input">
                                        <label class="custom-control-label" for="defVisual2">Não</label>
                                    </div>
                                </div>
                            </div>
                            <h6 class="text-danger">*Campos obrigatórios</h6><br />
                            <div class="form-row">
                                <div class="form-group col-lg-12">
                                    <button type="submit" class="btn btn-success btn-lg btn-block">Cadastrar</button>
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
</body>

</html>