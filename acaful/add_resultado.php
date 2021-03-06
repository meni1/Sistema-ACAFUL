<?php
session_start();
if (!isset($_SESSION["email"]) || !isset($_SESSION["senha"])) {
    echo "<script>window.location.href='login.php'</script>";
    exit;
}
?>
<!DOCTYPE html>
<html>

<!-- Miguel Henrique -->
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <link rel="shortcut icon" href="assets/images/favicon_1.ico">

        <title>ACAFUL</title>

        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/style.css" rel="stylesheet" type="text/css" />

        <script src="assets/js/modernizr.min.js"></script>
    </head>

    <body class="fixed-left">
        <!-- Begin page -->
        <div id="wrapper">
            <!-- Top Bar Start -->
            <div class="topbar">
                <!-- LOGO -->
                <div class="topbar-left">
                    <div class="text-center">
                        <a href="index.php" class="logo"><i class="fa fa-code icon-c-logo"></i><span>ACA<i class="fa fa-soccer-ball-o"></i>FUL</span></a>
                    </div>
                </div>
                <!-- Button mobile view to collapse sidebar menu -->
                <nav class="navbar-custom">
                    <ul class="list-inline menu-left mb-0">
                        <li class="float-left">
                            <button class="button-menu-mobile open-left waves-light waves-effect">
                                <i class="dripicons-menu"></i>
                            </button>
                        </li>
                    </ul>
                </nav>
            </div>
            <!-- Top Bar End -->


            <!-- ========== Left Sidebar Start ========== -->
            <?php include_once'menu_lateral.php';?>
        
            <!-- Left Sidebar End -->



            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container-fluid">
                        <!-- Page-Title -->


                        <div class="row">
                            <div class="col-sm-12 card-box">
                                <h4 class="page-title">Adicionar Resultado Pt 1</h4>
                                <hr>

                <form method="POST" action="insert_resultado.php" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col">
                                    <label>Data</label>
                                    <input name="data" type="date" class="form-control" required="" style="width: 300px;">
                                    </div>
                                    <div class="col">
                                    <label>Hora</label>
                                    <input name="hora" type="time" class="form-control"  required="" style="width: 300px;">
                                    </div>
                                    <div class="col">
                                    <label>Local</label>
                                    <input placeholder="Exemplo: AABB Londrina" name="local" type="text" class="form-control"  required="" style="width: 300px;"><br>
                                    </div>
                                </div>
                                 <div class="row">
                                 <div class="col">
                                    <label>Rodada</label>
                                    <select id="rodada" name="rodada" class="form-control"  required="" style="width: 300px;">
                                    <option>Selecione</option>
                                    <?php
                                    include('conexao.php');
                                    $query = mysql_query("SELECT * FROM rodada");
                                    while ($rs2 = mysql_fetch_array($query)) {?>
                                    <option value="<?php echo $rs2['numero_rodada'];?>"><?php echo $rs2['numero_rodada']; ?></option>
                                    <?php } ?>
                                    </select>
                                 </div>

                                <div class="col">
                                    <label>Categoria</label>
                                    <select id="categoria" name="categoria" class="form-control"  required="" style="width: 300px;">
                                    <option>Selecione</option>
                                    <?php
                                    include('conexao.php');
                                    $query = mysql_query("SELECT * FROM categoria");
                                    while ($rs = mysql_fetch_array($query)) {?>
                                    <option value="<?php echo $rs['idCategoria'];?>"><?php echo $rs['Categoria']; ?></option>
                                    <?php } ?>
                                    </select><br>
                                 </div>
                                 <div class="col">
                                     <input type="hidden" name="" style="width: 300px;">
                                 </div>
                                 </div>

                                 <div class="row">
                                 <div class="col">
                                    <label >Time A</label>
                                    <select id="time" name="time" class="form-control" style="width: 300px; ">  
                                    <option>Selecione</option>
                                </select>
                                 </div>
                                 <div class="col">
                                    <label>Gols Time A</label>
                                    <input  placeholder="Exemplo: 8 Gols" name="golsA" type="number" class="form-control"  required="" style="width: 300px;"><br>
                                    </div>
                                    <div class="col">
                                    <label>Pontos Time A</label>
                                    <input  placeholder="Exemplo: 3 Pontos" name="pontosA" type="number" class="form-control"  required="" style="width: 300px;"><br>
                                    </div>
                                </div>
                                <div class="row">
                                 <div class="col">
                                    <label >Time B</label>
                                    <select id="time2" name="time2" class="form-control" style="width: 300px; ">  
                                    <option>Selecione</option>
                                </select>
                                 </div>
                                 <div class="col">
                                    <label>Gols Time B</label>
                                    <input placeholder="Exemplo: 8 Gols" name="golsB" type="number" class="form-control"  required="" style="width: 300px;"><br>
                                    </div>
                                    <div class="col">
                                    <label>Pontos Time B</label>
                                    <input placeholder="Exemplo: 3 Pontos" name="pontosB" type="number" class="form-control"  required="" style="width: 300px;"><br>
                                    </div>
                                </div>

            <input class="btn btn-primary" type="submit" value="Cadastrar">
            <a href="index.php"><button type="button" class="btn btn-success">Voltar</button></a>
                            </form>


                            </div>
                        </div>



                    </div> <!-- container -->

                </div> <!-- content -->

                <footer class="footer text-right">
                    &copy; 2018. Todos os direitos reservados.
                </footer>

            </div>


            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->
        </div>
        <!-- END wrapper -->

        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/popper.min.js"></script><!-- Popper for Bootstrap -->
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/detect.js"></script>
        <script src="assets/js/fastclick.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/jquery.blockUI.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/jquery.nicescroll.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>

        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>
        <script type="text/javascript" src="assets/js/funcao.js"></script>
        <script type="text/javascript" src="assets/js/adcresult.js"></script>
        <script type="text/javascript" src="assets/js/exibejA.js"></script>
        <script type="text/javascript" src="assets/js/exibejB.js"></script>


    </body>

<!-- Miguel Henrique -->
</html>
