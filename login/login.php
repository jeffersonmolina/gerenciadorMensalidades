<?php
session_start();
?>
<!doctype html>
<html class="no-js" lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Login - ACDV</title>
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

<body>
    <?php
    if (isset($_SESSION['msg'])) {
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
    }
    ?>
    <div class="login-area" style="background-color: #E6E6FA;">
        <div class="container">
            <div class="login-box ptb--100">
                <form method="POST" action="valida.php" autocomplete="off" onsubmit="return confirmacao()">
                    <div class="login-form-head" style="background-color: #00BFFF;">
                        <img src="../assets/images/icon/logoMenu.png" />
                    </div>
                    <div class="login-form-body">
                        <div class="form-gp">
                            <label for="usuario">Usuário</label>
                            <input type="email" id="usuario" name="usuario">
                            <i class="ti-user"></i>
                        </div>
                        <div class="form-gp">
                            <label for="senha">Senha</label>
                            <input type="password" id="senha" name="senha">
                            <i class="ti-lock"></i>
                        </div>
                        <div class="row mb-4 rmber-area">
                            <div class="col-6">
                                <div class="custom-control custom-checkbox mr-sm-2">
                                    <input type="checkbox" class="custom-control-input" id="customControlAutosizing">
                                    <label class="custom-control-label" for="customControlAutosizing">Lembrar-me</label>
                                </div>
                            </div>
                        </div>
                        <button type="submit" value="acessar" name="botaoLogin" class="btn btn-success btn-lg btn-block">Entrar <i class="ti-arrow-right"></i></button><br />
                        <?php
                        if (isset($_GET['msg'])) {
                            $msg = $_GET['msg'];
                            switch ($msg) {
                                case 3:
                                    ?>
                                    <div class="message">
                                        <div class="alert alert-danger">
                                            <a href="login.php" class="close" data-dismiss="alert">&times</a>
                                            <h6 style="text-align: center;">Usuário ou Senha incorretos!</h6>
                                        </div>
                                    </div>
                                <?php
                                        break;
                                    case 2:
                                        ?>
                                    <div class="message">
                                        <div class="alert alert-success">
                                            <a href="login.php" class="close" data-dismiss="alert">&times</a>
                                            <h6 style="text-align: center;">Deslogado com sucesso!</h6>
                                        </div>
                                    </div>
                                <?php
                                        break;
                                    case 1:
                                        ?>
                                    <div class="message">
                                        <div class="alert alert-warning">
                                            <a href="login.php" class="close" data-dismiss="alert">&times</a>
                                            <h6 style="text-align: center;">Digite o usuário e a senha!</h6>
                                        </div>
                                    </div>
                                <?php
                                        break;
                                    case 4:
                                        ?>
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        <h6 style="text-align: center;">Você <strong>não tem</strong> permissão de acesso para entrar.</h6>
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                            <?php
                            }
                        }
                        ?>
                    </div>
                </form>
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