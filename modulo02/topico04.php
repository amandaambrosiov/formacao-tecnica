<!DOCTYPE html>
<html lang="pt-br">

<?php
include('layout/header.php');
?>

<body>

    <?php
    include('layout/nav.php');
    ?>

    <?php
    include('layout/menu.php');
    ?>

    <!-- CONTEUDO - Begin -->
    <div class="all-conteudo">
        <section class="conteiner-principal">
            <div class="main-content container-fluid">
                <div class="row">
                    <div class="col-md-10 col-sm-8 container-fluid">

                        <h2 class="Titulo">01 - Fluxo dos Procedimentos das Medidas Socioeducativas em Meio Aberto</h2>



                        <!-- BARRA DE PROGRESSO -->
                        <div id="progress-bar"></div>


                    </div> <!-- apresentacao_inicial -->
                </div> <!-- col-md-10 col-sm-8 container-fluid -->

            </div> <!-- row -->
    </div> <!-- main-content container-fluid -->
    </section> <!-- section -->
    </div> <!-- all-conteudo -->
    <!-- CONTEUDO - End -->

    <!-- BOTÕES DE NAVEGAÇÃO -->
    <div class="text-center">
        <a href="topico03.php" class="btn btn-outline-success" role="button" aria-pressed="true">
            <i class="fa-solid fa-chevron-left"></i> Voltar </a>
        <a href="referencias.php" class="btn btn-outline-success" role="button" aria-pressed="true">Próximo <i class="fa-solid fa-chevron-right"></i></a>
    </div>

    <!-- BACK TO TOP -->
    <div id="back_to_top">
        <div id="btn_back">
            <i id="icon_up" class="fa-solid fa-arrow-up"></i>
        </div>
    </div>
    <!-- FOOTER -->
    <?php include('layout/footer.php') ?>
    <br>
</body>

</html>