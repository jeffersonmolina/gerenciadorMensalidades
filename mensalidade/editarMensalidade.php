<!doctype html>
<html class="no-js" lang="pt-br">
<?php
//Conexão
include_once '../action/db_connect.php';
session_start();
if (!empty($_SESSION['id'])) {
    //Select
    if (isset($_GET['idMensalidade'])) :
        $idMensalidade = mysqli_escape_string($connect, $_GET['idMensalidade']);
        $sql = "SELECT * FROM mensalidade WHERE idMensalidade = $idMensalidade";
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
        <script type="text/javascript">
            function BlockKeybord() {
                if (window.event) // IE
                {
                    if ((event.keyCode < 48) || (event.keyCode > 57)) {
                        event.returnValue = false;
                    }
                } else if (e.which) // Netscape/Firefox/Opera
                {
                    if ((event.which < 48) || (event.which > 57)) {
                        event.returnValue = false;
                    }
                }
            }

            function troca(str, strsai, strentra) {
                while (str.indexOf(strsai) > -1) {
                    str = str.replace(strsai, strentra);
                }
                return str;
            }

            function FormataMoeda(campo, tammax, teclapres, caracter) {
                if (teclapres == null || teclapres == "undefined") {
                    var tecla = -1;
                } else {
                    var tecla = teclapres.keyCode;
                }
                if (caracter == null || caracter == "undefined") {
                    caracter = ".";
                }
                vr = campo.value;
                if (caracter != "") {
                    vr = troca(vr, caracter, "");
                }
                vr = troca(vr, "/", "");
                vr = troca(vr, ",", "");
                vr = troca(vr, ".", "");
                tam = vr.length;
                if (tecla > 0) {
                    if (tam < tammax && tecla != 8) {
                        tam = vr.length + 1;
                    }
                    if (tecla == 8) {
                        tam = tam - 1;
                    }
                }
                if (tecla == -1 || tecla == 8 || tecla >= 48 && tecla <= 57 || tecla >= 96 && tecla <= 105) {
                    if (tam <= 2) {
                        campo.value = vr;
                    }
                    if ((tam > 2) && (tam <= 5)) {
                        campo.value = vr.substr(0, tam - 2) + ',' + vr.substr(tam - 2, tam);
                    }
                    if ((tam >= 6) && (tam <= 8)) {
                        campo.value = vr.substr(0, tam - 5) + caracter + vr.substr(tam - 5, 3) + ',' + vr.substr(tam - 2, tam);
                    }
                    if ((tam >= 9) && (tam <= 11)) {
                        campo.value = vr.substr(0, tam - 8) + caracter + vr.substr(tam - 8, 3) + caracter + vr.substr(tam - 5, 3) + ',' + vr.substr(tam - 2, tam);
                    }
                    if ((tam >= 12) && (tam <= 14)) {
                        campo.value = vr.substr(0, tam - 11) + caracter + vr.substr(tam - 11, 3) + caracter + vr.substr(tam - 8, 3) + caracter + vr.substr(tam - 5, 3) + ',' + vr.substr(tam - 2, tam);
                    }
                    if ((tam >= 15) && (tam <= 17)) {
                        campo.value = vr.substr(0, tam - 14) + caracter + vr.substr(tam - 14, 3) + caracter + vr.substr(tam - 11, 3) + caracter + vr.substr(tam - 8, 3) + caracter + vr.substr(tam - 5, 3) + ',' + vr.substr(tam - 2, tam);
                    }
                }
            }

            function maskKeyPress(objEvent) {
                var iKeyCode;
                if (window.event) // IE
                {
                    iKeyCode = objEvent.keyCode;
                    if (iKeyCode >= 48 && iKeyCode <= 57) return true;
                    return false;
                } else if (e.which) // Netscape/Firefox/Opera
                {
                    iKeyCode = objEvent.which;
                    if (iKeyCode >= 48 && iKeyCode <= 57) return true;
                    return false;
                }
            }
        </script>
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
            <div class="main-content-inner">
                <h3 class="centro text-center">Editar Mensalidades</h3>
                <div class="container">
                    <div class="row">
                        <div class="col-md-11 col-sm-11 col-11 col-lg-11 mx-5 ml-auto">
                            <form action="../action/update.php" method="POST">
                                <input type="hidden" name="idMensalidade" value="<?php echo $dados['idMensalidade']; ?>">
                                <div class="form-row">
                                    <div class="form-group col-lg-12">
                                        <label for="nome">Nome:</label>
                                        <select id="nome" name="nome" class="form-control form-control-lg" required>
                                            <option>
                                                <?php
                                                    if ($dados == 0) {
                                                        echo "<option value='0'>Escolha um nome</option>";
                                                    }
                                                    $sql = "SELECT nome, associadofisico.idAssociadoFisico FROM associadofisico ORDER BY nome";
                                                    $res = mysqli_query($connect, $sql);
                                                    if ($sql) {
                                                        while ($id = mysqli_fetch_assoc($res)) {
                                                            if ($id['idAssociadoFisico'] == $dados['idAssociadoFisico']) {
                                                                echo "<option value='" . $id['idAssociadoFisico'] . "'selected>" . $id['nome'] . "</option>";
                                                            } else {
                                                                echo "<option value='" . $id['idAssociadoFisico'] . "'>" . $id['nome'] . "</option>";
                                                            }
                                                        }
                                                    }
                                                    ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="dataPagamento">Data de pagamento</label>
                                        <input type="date" class="form-control" id="dataPagamento" value="<?php echo $dados['dataPagamento']; ?>" name="dataPagamento" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="tipo">Tipo de pagamento</label>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="dinheiro" value="dinheiro" <?php echo ($dados['tipo'] == 'Dinheiro') ? 'checked' : ''; ?> name="tipo" class="custom-control-input">
                                            <label class="custom-control-label" for="dinheiro">Dinheiro</label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="cheque" value="cheque" name="tipo" <?php echo ($dados['tipo'] == 'Cheque') ? 'checked' : ''; ?> class="custom-control-input">
                                            <label class="custom-control-label" for="cheque">Cheque</label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="cartao" value="cartao" name="tipo" <?php echo ($dados['tipo'] == 'Cartao') ? 'checked' : ''; ?> class="custom-control-input">
                                            <label class="custom-control-label" for="cartao">Cartão</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label for="valor">Valor do pagamento</label>
                                        <input type="valor" class="form-control" id="valor" value="<?php echo $dados['valor']; ?>" name="valor" size="10" maxlength="10" onkeydown="FormataMoeda(this,10,event)" onkeypress="return maskKeyPress(event)" required>
                                    </div>
                                </div>
                                <button type="submit" name="editarMensalidade" class="btn btn-success btn-block">Atualizar</button>
                                <button type="reset" class="btn btn-danger btn-block">Limpar</button>
                            </form>
                        </div>
                    </div>
                    <footer>
                        <div class="footer-area">
                            <p>© ACDV 2019. Sistema gerenciador de mensalidades.</p>
                        </div>
                    </footer>
                </div>
            </div>
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