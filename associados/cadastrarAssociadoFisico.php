<?php
session_start();
if (!empty($_SESSION['id'])) {
    ?>
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
                                            <a href="../index.php" tabindex="1" class="horizontal-menu"><i class="fa fa-tv"></i><span>In??cio</span></a>
                                        </li>
                                        <li>
                                            <a href="associado.php" tabindex="2"><i class="fa fa-group"></i><span>Associados</span></a>
                                        </li>
                                        <li>
                                            <a href="../mensalidade/mensalidade.php" tabindex="3"><i class="fa fa-credit-card"></i><span>Mensalidades</span></a>
                                        </li>
                                        <li class="mega-menu">
                                            <a href="../doacoes.php" tabindex="4"><i class="fa fa-money"></i><span>Doa????es</span></a>
                                        </li>
                                        <li class="mega-menu">
                                            <a href="../funcionario.php" tabindex="5"><i class="ti-user"></i> <span>Funcion??rios</span></a>
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
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="../index.php">In??cio</a></li>
                        <li class="breadcrumb-item"><a href="associado.php">Associados</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Cadastrar associado f??sico</li>
                    </ol>
                </nav>
                <div class="py-0">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <h3 class="text-center">Cadastrar Associado F??sico</h3>
                                <div class="card-body">
                                    <div class="tab-content mt-2">
                                        <div class="tab-pane fade show active" id="tabone" role="tabpanel">
                                            <p class="">
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col-md-11 col-sm-11 col-11 col-lg-11 mx-5 ml-auto">
                                                            <form action="../action/create.php" method="POST" autocomplete="off">
                                                                <div class="form-row">
                                                                    <div class="form-group col-md-2">
                                                                        <label for="tipo">Associado ??:</label>
                                                                        <div class="custom-control custom-radio">
                                                                            <input type="radio" id="adulto" value="adulto" name="tipo" class="custom-control-input">
                                                                            <label class="custom-control-label" for="adulto">Adulto</label>
                                                                        </div>
                                                                        <div class="custom-control custom-radio">
                                                                            <input type="radio" id="crianca" value="crianca" name="tipo" class="custom-control-input" required>
                                                                            <label class="custom-control-label" for="crianca">Crian??a</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group col-md-12">
                                                                        <label for="nome">Nome<b>*</b></label>
                                                                        <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite o nome completo" required autocomplete="off">
                                                                    </div>
                                                                </div>
                                                                <div class="form-row">
                                                                    <div class="form-group col-md-6">
                                                                        <label for="rg">RG<b>*</b></label>
                                                                        <input type="text" class="form-control" id="rg" name="rg" placeholder="Digite o RG" minlength="10" maxlength="10" required autocomplete="off">
                                                                    </div>
                                                                    <div class="form-group col-md-6">
                                                                        <label for="cpf">CPF</label>
                                                                        <input type="text" class="form-control" id="cpf" name="cpf" placeholder="Digite o CPF" minlength="11" maxlength="11" onkeypress="$(this).mask('000.000.000-00')" autocomplete="off">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="endereco">Endere??o<b>*</b></label>
                                                                    <input type="text" class="form-control" id="endereco" name="endereco" placeholder="Digite o endere??o" required autocomplete="off">
                                                                </div>
                                                                <div class="form-row">
                                                                    <div class="form-group col-md-3">
                                                                        <label for="numero">N??mero</label>
                                                                        <input type="number" class="form-control" id="numero" name="numero" placeholder="Digite o n??mero">
                                                                    </div>
                                                                    <div class="form-group col-md-3">
                                                                        <label for="complemento">Complemento</label>
                                                                        <input type="text" class="form-control" id="complemento" name="complemento" placeholder="Digite o complemento">
                                                                    </div>
                                                                    <div class="form-group col-md-3">
                                                                        <label for="bairro">Bairro</label>
                                                                        <input type="text" class="form-control" id="bairro" name="bairro" placeholder="Digite o bairro">
                                                                    </div>
                                                                    <div class="form-group col-md-3">
                                                                        <label for="cep">CEP</label>
                                                                        <input type="text" class="form-control" id="cep" name="cep" minlength="8" maxlength="8" onkeypress="$(this).mask('00.000-000')" placeholder="Digite o CEP">
                                                                    </div>
                                                                </div>
                                                                <div class="form-row">
                                                                    <div class="form-group col-md-6">
                                                                        <label for="telefone">Telefone<b>*</b></label>
                                                                        <input type="text" class="form-control" id="telefone" name="telefone" placeholder="Digite o telefone" onkeypress="$(this).mask('(00) 00009-0000')" required autocomplete="off">
                                                                    </div>
                                                                    <div class="form-group col-md-6">
                                                                        <label for="dataNascimento">Data de Nascimento</label>
                                                                        <input type="date" class="form-control" id="dataNascimento" name="dataNascimento" placeholder="Digite a data de nascimento">
                                                                    </div>
                                                                </div>
                                                                <div class="form-row">
                                                                    <div class="form-group col-md-2">
                                                                        <label for="usaProtese">Usa pr??tese?</label>
                                                                        <div class="custom-control custom-radio">
                                                                            <input type="radio" id="simusaProtese" value="sim" name="usaProtese" class="custom-control-input">
                                                                            <label class="custom-control-label" for="simusaProtese">Sim</label>
                                                                        </div>
                                                                        <div class="custom-control custom-radio">
                                                                            <input type="radio" id="naousaProtese" value="nao" name="usaProtese" class="custom-control-input">
                                                                            <label class="custom-control-label" for="naousaProtese">N??o</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group col-md-10">
                                                                        <label for="descricaoProtese">Se sim, qual?</label>
                                                                        <textarea class="form-control" id="descricaoProtese" name="descricaoProtese" rows="2"></textarea>
                                                                    </div>
                                                                </div>
                                                                <div class="form-row">
                                                                    <div class="form-group col-md-6">
                                                                        <label for="deficienteVisual">Deficiente visual?</label>
                                                                        <div class="custom-control custom-radio">
                                                                            <input type="radio" id="simDeficiente" value="sim" name="deficienteVisual" class="custom-control-input">
                                                                            <label class="custom-control-label" for="simDeficiente">Sim</label>
                                                                        </div>
                                                                        <div class="custom-control custom-radio">
                                                                            <input type="radio" id="naoDeficiente" value="nao" name="deficienteVisual" class="custom-control-input">
                                                                            <label class="custom-control-label" for="naoDeficiente">N??o</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <ul class="list-group">
                                                                    <li class="list-group-item list-group-item-warning">
                                                                        <h4 style="text-align: center;">
                                                                            <i class="fa fa-exclamation-triangle"></i>
                                                                            continue o cadastro apenas para associado crian??a
                                                                            <i class="fa fa-exclamation-triangle"></i>
                                                                        </h4>
                                                                    </li>
                                                                </ul><br />
                                                                <div class="form-row">
                                                                    <div class="form-group col-md-2">
                                                                        <label for="tomaMedicacao">Toma medica????o?</label>
                                                                        <div class="custom-control custom-radio">
                                                                            <input type="radio" id="simToma" value="sim" name="tomaMedicacao" class="custom-control-input">
                                                                            <label class="custom-control-label" for="simToma">Sim</label>
                                                                        </div>
                                                                        <div class="custom-control custom-radio">
                                                                            <input type="radio" id="naoToma" value="nao" name="tomaMedicacao" class="custom-control-input">
                                                                            <label class="custom-control-label" for="naoToma">N??o</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group col-md-10">
                                                                        <label for="qualMedicacao">Se sim, qual?</label>
                                                                        <textarea class="form-control" id="qualMedicacao" name="qualMedicacao" rows="2"></textarea>
                                                                    </div>
                                                                </div>
                                                                <div class="form-row">
                                                                    <div class="form-group col-md-2">
                                                                        <label for="fezCirurgia">J?? fez cirurgia?</label>
                                                                        <div class="custom-control custom-radio">
                                                                            <input type="radio" id="simCirurgia" value="sim" name="fezCirurgia" class="custom-control-input">
                                                                            <label class="custom-control-label" for="simCirurgia">Sim</label>
                                                                        </div>
                                                                        <div class="custom-control custom-radio">
                                                                            <input type="radio" id="naoCirurgia" value="nao" name="fezCirurgia" class="custom-control-input">
                                                                            <label class="custom-control-label" for="naoCirurgia">N??o</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group col-md-10">
                                                                        <label for="diagnostico">Diagn??stico m??dico:</label>
                                                                        <textarea class="form-control" id="diagnostico" name="diagnostico" rows="2"></textarea>
                                                                    </div>
                                                                </div>
                                                                <div class="form-row">
                                                                    <div class="form-group col-md-2">
                                                                        <label for="fazTratamento">Faz algum tratamento?</label>
                                                                        <div class="custom-control custom-radio">
                                                                            <input type="radio" id="simfazTratamento" value="sim" name="fazTratamento" class="custom-control-input">
                                                                            <label class="custom-control-label" for="simfazTratamento">Sim</label>
                                                                        </div>
                                                                        <div class="custom-control custom-radio">
                                                                            <input type="radio" id="naofazTratamento" value="nao" name="fazTratamento" class="custom-control-input">
                                                                            <label class="custom-control-label" for="naofazTratamento">N??o</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group col-md-10">
                                                                        <label for="qualTratamento">Se sim, qual?</label>
                                                                        <textarea class="form-control" id="qualTratamento" name="qualTratamento" rows="2"></textarea>
                                                                    </div>
                                                                </div>
                                                                <div class="form-row">
                                                                    <div class="form-group col-md-12">
                                                                        <label for="nomeOftalmo">Nome do oftalmo:</label>
                                                                        <input type="text" class="form-control" id="nomeOftalmo" name="nomeOftalmo" placeholder="Digite o nome do oftalmo">
                                                                    </div>
                                                                </div>
                                                                <div class="form-row">
                                                                    <div class="form-group col-md-2">
                                                                        <label for="tipoParto">Tipo de parto:</label>
                                                                        <div class="custom-control custom-radio">
                                                                            <input type="radio" id="normal" value="normal" name="tipoParto" class="custom-control-input">
                                                                            <label class="custom-control-label" for="normal">Normal</label>
                                                                        </div>
                                                                        <div class="custom-control custom-radio">
                                                                            <input type="radio" id="cesarea" value="cesarea" name="tipoParto" class="custom-control-input">
                                                                            <label class="custom-control-label" for="cesarea">Ces??rea</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group col-md-4">
                                                                        <label for="meses">Meses de gesta????o:</label>
                                                                        <input type="text" class="form-control" id="meses" name="meses" minlength="1" maxlength="2" placeholder="Digite a quantidade de meses">
                                                                    </div>
                                                                    <div class="form-group col-md-3">
                                                                        <label for="peso">Peso (kg):</label>
                                                                        <input type="text" class="form-control" id="peso" name="peso" minlength="1" maxlength="3" onkeypress="$(this).mask('9,000')" placeholder="Digite o peso">
                                                                    </div>
                                                                    <div class="form-group col-md-3">
                                                                        <label for="comprimento">Comprimento(cm):</label>
                                                                        <input type="text" class="form-control" id="comprimento" name="comprimento" minlength="1" maxlength="2" onkeypress="$(this).mask('99,99')" placeholder="Digite o comprimento em cent??metros">
                                                                    </div>
                                                                </div>
                                                                <div class="form-row">
                                                                    <div class="form-group col-md-6">
                                                                        <label for="nomePai">Nome Pai:</label>
                                                                        <input type="text" class="form-control" id="nomePai" name="nomePai" placeholder="Digite o nome do pai">
                                                                    </div>
                                                                    <div class="form-group col-md-6">
                                                                        <label for="nomeMae">Nome M??e:</label>
                                                                        <input type="text" class="form-control" id="nomeMae" name="nomeMae" placeholder="Digite o nome da m??e">
                                                                    </div>
                                                                </div>
                                                                <div class="form-row">
                                                                    <div class="form-group col-md-6">
                                                                        <label for="cidade">Cidade</label>
                                                                        <input type="text" class="form-control" id="cidade" name="cidade" placeholder="Digite o nome da cidade">
                                                                    </div>
                                                                    <div class="form-group col-md-6">
                                                                        <label for="recursosOpticos">Recursos opticos:</label>
                                                                        <input type="text" class="form-control" id="nomeMae" name="recursosOpticos" placeholder="Digite o recurso ??ptico">
                                                                    </div>
                                                                </div>
                                                                <div class="form-row">
                                                                    <div class="form-group col-md-6">
                                                                        <label for="quemDetectou">Quem detectou?</label>
                                                                        <input type="text" class="form-control" id="quemDetectou" name="quemDetectou" placeholder="Quem detectou?">
                                                                    </div>
                                                                    <div class="form-group col-md-6">
                                                                        <label for="motivoAtendimento">Motivo do atendimento:</label>
                                                                        <textarea class="form-control" id="motivoAtendimento" name="motivoAtendimento" rows="2"></textarea>
                                                                    </div>
                                                                </div>
                                                                <div class="form-row">
                                                                    <div class="form-group col-md-2">
                                                                        <label for="doencaOptica">J?? teve outra doen??a optica?</label>
                                                                        <div class="custom-control custom-radio">
                                                                            <input type="radio" id="simdoencaOptica" value="sim" name="doencaOptica" class="custom-control-input">
                                                                            <label class="custom-control-label" for="simdoencaOptica">Sim</label>
                                                                        </div>
                                                                        <div class="custom-control custom-radio">
                                                                            <input type="radio" id="naodoencaOptica" value="nao" name="doencaOptica" class="custom-control-input">
                                                                            <label class="custom-control-label" for="naodoencaOptica">N??o</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group col-md-10">
                                                                        <label for="qualDoenca">Se sim, qual?</label>
                                                                        <textarea class="form-control" id="qualDoenca" name="qualDoenca" rows="2"></textarea>
                                                                    </div>
                                                                </div>
                                                                <h6 class="text-danger">*Campos obrigat??rios</h6><br />
                                                                <div class="form-row">
                                                                    <div class="form-group col-lg-12">
                                                                        <button type="submit" name="cadastrarAssociado" class="btn btn-success btn-lg btn-block">Cadastrar</button>
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
                                                </div>
                                            </p>
                                        </div>
                                        <div class="tab-pane fade" id="tabtwo" role="tabpanel">
                                            <p class="">CRIAN??A</p>
                                        </div>
                                        <div class="tab-pane fade" id="tabthree" role="tabpanel">
                                            <p class="">JUR??DICO</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer>
            <div class="footer-area">
                <p>?? ACDV 2019. Sistema gerenciador de mensalidades.</p>
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