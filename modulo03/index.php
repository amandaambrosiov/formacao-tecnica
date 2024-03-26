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

                        <h2 class="Titulo">Apresentação</h2><br>

                        <div class="apresentacao_inicial">

                            <div class="img_resp wow zoomIn" data-wow-delay="0.3s">
                                <img src="imgs/apresentacao04.png" style="width: 13rem;" alt="Mulher apontando para direita.">
                                <p class="apresentacao_descricao">Fonte: Imagem retirada do Freepik</p>
                            </div>

                            <!-- Apresentação -->
                            <div>
                                <p class="texto_dark apresentacao_texto wow zoomIn" data-wow-delay="0.3s">
                                    <strong>Olá, <?php echo $NomeUsuario ?> bem-vindo(a) ao módulo 03 do curso Formação Técnica para a execução e acompanhamento das Medidas Socioeducativas do Estado do Ceará.</strong>
                                </p>
                            </div>
                        </div>



                    </div> <!-- col-md-10 col-sm-8 container-fluid -->

                </div> <!-- row -->
            </div> <!-- main-content container-fluid -->
        </section> <!-- section -->
    </div> <!-- all-conteudo -->
    <!-- CONTEUDO - End -->

    <!-- BOTÕES DE NAVEGAÇÃO -->
    <div class="text-center">
        <a href="topico01.php" class="btn btn-outline-success" role="button" aria-pressed="true">Próximo <i class="fa-solid fa-chevron-right"></i></a>
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