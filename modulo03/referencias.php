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

                        <!-- REFERÊNCIAS  -->
                        <h2 class="Titulo">Referências</h2>
                        <p class="Texto wow fadeIn" data-wow-delay="0.1s"> <i class="bi bi-book me-2"></i>
                            BARBOSA, Simone; SILVA, Bruno. <strong>Interação humano-computador.</strong> Elsevier Brasil, 2010.
                        </p>

                        

                    </div> <!-- col-md-10 col-sm-8 container-fluid -->

                </div> <!-- row -->
            </div> <!-- main-content container-fluid -->
        </section> <!-- section -->
    </div> <!-- all-conteudo -->
    <!-- CONTEUDO - End -->


    <!-- BOTÕES DE NAVEGAÇÃO -->
    <div class="text-center">
        <a href="topico05.php" class="btn btn-outline-success" role="button" aria-pressed="true">
            <i class="fa-solid fa-chevron-left"></i> Voltar </a>
        <a href="#" class="btn btn-outline-success" role="button" aria-pressed="true">Realizar a Atividade Avaliativa <i class="fa-solid fa-chevron-right"></i></a>
    </div>

    <!-- BARRA DE PROGRESSO -->
    <div id="progress-bar"></div>


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