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
                                <img src="imgs/apresentacao04.png" style="width: 13rem;" alt="">
                                <p class="apresentacao_descricao">Fonte: Imagem retirada do Freepik</p>
                            </div>

                            <!-- Apresentação -->
                            <div>
                                <p class="texto_dark apresentacao_texto wow zoomIn" data-wow-delay="0.3s">
                                    <strong>Olá, <?php echo $NomeUsuario ?> bem-vindo ao módulo 01 do curso "Formação Técnica para a execução e acompanhamento das Medidas Socioeducativas do Estado do Ceará.".</strong> Neste módulo faremos uma explanação sobre a Proteção Social para adolescentes em cumprimento de Medida Socioeducativa, suas previsões legais e o SUAS.
                                </p>
                            </div>
                        </div>

                        <p>
                        A proteção social para adolescentes em cumprimento de medida socioeducativa é um tema de extrema importância, envolvendo aspectos legais e práticas sociais voltadas para garantir o desenvolvimento integral desses jovens e sua reintegração na sociedade. As medidas socioeducativas são aplicadas a adolescentes que cometem atos infracionais, com o objetivo de promover sua responsabilização e ressocialização.
                        </p>

                        <p>
                        No Brasil, as medidas socioeducativas são regidas pelo <a target="_blank" rel="noopener noreferrer" href="https://www.gov.br/mdh/pt-br/navegue-por-temas/crianca-e-adolescente/publicacoes/o-estatuto-da-crianca-e-do-adolescente">Estatuto da Criança e do Adolescente (ECA)</a>, que estabelece diretrizes e princípios para a proteção integral dos adolescentes em conflito com a lei. O ECA prevê as medidas socioeducativas: advertência, obrigação de reparar o dano, prestação de serviços à comunidade, liberdade assistida, semiliberdade e internação. Do mesmo modo, a Lei nº 12.594/2012 institui o Sistema Nacional de Atendimento Socioeducativo (Sinase) e regulamenta a execução das medidas destinadas a adolescente que pratique ato infracional.
                        </p>

                        <p>
                        O <a href="https://www.gov.br/mds/pt-br/acoes-e-programas/suas/gestao-do-suas" target="_blank" rel="noopener noreferrer">Sistema Único de Assistência Social (SUAS)</a> também desempenha um papel relevante na proteção social dos adolescentes em cumprimento de medida socioeducativa. O SUAS é uma política pública que visa promover a garantia de direitos e a inclusão social por meio da oferta de serviços e benefícios socioassistenciais. Ele é responsável por articular os diferentes órgãos e entidades governamentais e não governamentais envolvidos na assistência social, incluindo as medidas socioeducativas.
                        </p>

                        <p>
                        Dentro do SUAS, existem serviços específicos voltados para os adolescentes em cumprimento de medidas socioeducativas em meio aberto através dos Centros de Referência Especializado de Assistência Social – CREAS. Esses centros têm como objetivo prestar apoio técnico e acompanhamento socioassistencial aos adolescentes e suas famílias, buscando promover sua reinserção social e prevenir a reincidência em atos infracionais.
                        </p>

                        <p>
                        Além do ECA e do SUAS, é importante destacar que a proteção social para adolescentes em cumprimento de medida socioeducativa deve ser garantida de acordo com os princípios e diretrizes estabelecidos pela Constituição Federal, a Lei n º 12.594/2012 e documentos internacionais correlatos. Que assegura a proteção integral dos direitos da criança e do adolescente.
                        </p>

                        <p>
                        Em suma, a proteção social para adolescentes em cumprimento de medida socioeducativa é fundamentada em previsões legais, e é implementada por meio de políticas públicas, visando à responsabilização e ressocialização desses jovens, buscando sua reintegração na sociedade de forma plena e consciente.
                        </p>
                        

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