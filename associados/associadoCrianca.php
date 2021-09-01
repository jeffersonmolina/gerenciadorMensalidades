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
                                        <a href="associado.php" tabindex="2"><i class="fa fa-group"></i><span>Associados</span></a>
                                    </li>
                                    <li>
                                        <a href="../mensalidade/mensalidade.php" tabindex="3"><i class="fa fa-credit-card"></i><span>Mensalidades</span></a>
                                    </li>
                                    <li class="mega-menu">
                                        <a href="../doacoes.php" tabindex="4"><i class="fa fa-money"></i><span>Doações</span></a>
                                    </li>
                                    <li class="mega-menu">
                                        <a href="../funcionario.php" tabindex="5"><i class="ti-user"></i> <span>Funcionários</span></a>
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
            <h3 class="centro text-center">Cadastrar associado criança</h3>
            <div class="container">
                <div class="row">
                    <div class="col-md-11 col-sm-11 col-11 col-lg-11 mx-5 ml-auto">
                        <form>
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="nome">Nome<b>*</b></label>
                                    <input type="email" class="form-control" id="nome" placeholder="Digite o nome completo">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="rg">RG<b>*</b></label>
                                    <input type="text" class="form-control" id="rg" placeholder="Digite o RG">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="cpf">CPF</label>
                                    <input type="text" class="form-control" id="cpf" placeholder="Digite o CPF">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="endereco">Endereço<b>*</b></label>
                                <input type="text" class="form-control" id="endereco" placeholder="Digite o endereço">
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-3">
                                    <label for="numero">Número</label>
                                    <input type="text" class="form-control" id="numero" placeholder="Digite o número">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="complemento">Complemento</label>
                                    <input type="text" class="form-control" id="numero" placeholder="Digite o complemento">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="bairro">Bairro</label>
                                    <input type="text" class="form-control" id="bairro" placeholder="Digite o bairro">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="cep">CEP</label>
                                    <input type="text" class="form-control" id="inputZip" placeholder="Digite o CEP">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="telefone">Telefone<b>*</b></label>
                                    <input type="text" class="form-control" id="telefone" placeholder="Digite o telefone">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="date">Data de Nascimento</label>
                                    <input type="date" class="form-control" id="dataNascimento" placeholder="Digite a data de nascimento">
                                </div>
                            </div>
                            <form>
                                <div class="form-row">
                                    <div class="form-group col-md-2">
                                        <label for="medicacao">Toma medicação</label>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="medicamento1" name="medicamento" class="custom-control-input">
                                            <label class="custom-control-label" for="medicamento1">Sim</label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="medicamento12" name="medicamento1" class="custom-control-input">
                                            <label class="custom-control-label" for="medicamento12">Não</label>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-10">
                                        <label for="text">Se sim, qual?</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="2"></textarea>
                                    </div>
                                </div>
                            </form>
                            <form>
                                <div class="form-row">
                                    <div class="form-group col-md-2">
                                        <label for="text">Já fez cirurgia</label>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="toma1" name="toma" class="custom-control-input">
                                            <label class="custom-control-label" for="toma1">Sim</label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="toma2" name="toma" class="custom-control-input">
                                            <label class="custom-control-label" for="toma2">Não</label>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-10">
                                        <label for="text">Diagnóstico médico:</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="2"></textarea>
                                    </div>
                                </div>
                            </form>
                            <form>
                                <div class="form-row">
                                    <div class="form-group col-md-2">
                                        <label for="text">Faz algum tratamento?</label>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="tratamento1" name="tratamento" class="custom-control-input">
                                            <label class="custom-control-label" for="tratamento1">Sim</label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="tratamento2" name="tratamento" class="custom-control-input">
                                            <label class="custom-control-label" for="tratamento2">Não</label>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-10">
                                        <label for="text">Se sim, qual?</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="2"></textarea>
                                    </div>
                                </div>
                            </form>
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="inputCity">Nome do oftalmo:</label>
                                    <input type="text" class="form-control" id="nomeOftalmo" placeholder="Digite o nome do oftalmo">
                                </div>
                            </div>
                            <form>
                                <div class="form-row">
                                    <div class="form-group col-md-2">
                                        <label for="text">Tipo de parto:</label>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="parto1" name="parto" class="custom-control-input">
                                            <label class="custom-control-label" for="parto1">Normal</label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="parto2" name="parto" class="custom-control-input">
                                            <label class="custom-control-label" for="parto2">Cesárea</label>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="text">Meses de gestação:</label>
                                        <input type="text" class="form-control" id="meses" placeholder="Digite a quantidade de meses">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="text">Peso:</label>
                                        <input type="text" class="form-control" id="peso" placeholder="Digite o peso">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="text">Comprimento(cm):</label>
                                        <input type="text" class="form-control" id="peso" placeholder="Digite o comprimento em centímetros">
                                    </div>
                                </div>
                            </form>

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputCity">Nome Pai:</label>
                                    <input type="text" class="form-control" id="nomePai" placeholder="Digite o nome do pai">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputCity">Nome Mãe:</label>
                                    <input type="text" class="form-control" id="nomeMae" placeholder="Digite o nome da mãe">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputCity">Cidade</label>
                                    <input type="text" class="form-control" id="cidade" placeholder="Digite o nome da cidade">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputCity">Nome Mãe:</label>
                                    <input type="text" class="form-control" id="nomeMae" placeholder="Digite o nome da mãe">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputCity">Quem detectou?</label>
                                    <input type="text" class="form-control" id="motivo" placeholder="Quem detectou?">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputCity">Cidade:</label>
                                    <input type="text" class="form-control" id="cidade" placeholder="Digite o nome da cidade">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="inputCity">Motivo do atendimento:</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="2"></textarea>
                                </div>
                            </div>
                            <form>
                                <div class="form-row">
                                    <div class="form-group col-md-2">
                                        <label for="text">Já teve outra doença optica?</label>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="doenca1" name="doenca" class="custom-control-input">
                                            <label class="custom-control-label" for="doenca1">Sim</label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="doenca2" name="doenca" class="custom-control-input">
                                            <label class="custom-control-label" for="doenca2">Não</label>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-10">
                                        <label for="text">Se sim, qual?</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="2"></textarea>
                                    </div>
                                </div>
                            </form>
                            <h6 class="text-danger">*Campos obrigatórios</h6><br />
                            <div class="form-row">
                                <div class="form-group col-lg-12">
                                    <button type="submit" class="btn btn-success btn-lg btn-block">Cadastrar</button>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-lg-12">
                                    <button type="reset" value="reset" class="btn btn-danger btn-lg btn-block">Limpar</button>
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