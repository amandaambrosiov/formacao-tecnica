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
                                <img src="imgs/apresentacao.png" style="width: 15rem;" alt="">
                                <p class="apresentacao_descricao">Fonte: Imagem retirada do Freepik</p>
                            </div>

                            <!-- Apresentação -->
                            <div>
                                <p class="texto_dark apresentacao_texto wow zoomIn" data-wow-delay="0.3s">
                                    <strong>Olá, <?php echo $NomeUsuario ?> bem-vindo ao módulo 01 do curso "<i>Design</i> de Experiência: O que é UX?".</strong> Antes de entender o que é de fato <i>design</i> UX, ou <i>design</i> de experiência do usuário, precisamos entender conceitos fundamentais da área. O que vamos aprender neste curso são os conceitos básicos, a história e quem é o usuário. Ao longo deste material vamos utilizar o termo <i>design</i> UX, como é comumente chamado no mundo da tecnologia da informação. UX é um acrônimo do termo inglês <i>User Experience</i>, que em português é <strong>experiência do usuário</strong>.
                                </p>
                            </div>
                        </div>

                        <h2 class="Titulo">Objetivos</h2><br>

                        <!-- IMAGEM COM CAIXAS -->
                        <div class="apresentacao_inicial">
                            <div class="img_resp wow zoomIn" data-wow-delay="0.3s">
                                <img src="imgs/pessoa.png" style="width: 20rem;" alt="Homem apontando para direita">
                                <p class="apresentacao_descricao">Fonte: Imagem retirada do Freepik</p>
                            </div>
                            <div>
                                <ul class="box_list">
                                    <li class="wow zoomIn texto_apresentacao_lista" data-wow-delay="0.1s">
                                        <i class="bi bi-1-circle"></i> Apresentar o termo UX (experiência do usuário);
                                    </li>
                                    <li class="wow zoomIn texto_apresentacao_lista" data-wow-delay="0.2s">
                                        <i class="bi bi-2-circle"></i> Discutir as áreas de estudo relacionadas ao tema;
                                    </li>
                                    <li class="wow zoomIn texto_apresentacao_lista" data-wow-delay="0.3s">
                                        <i class="bi bi-3-circle"></i> Apresentar uma breve história de UX;
                                    </li>
                                    <li class="wow zoomIn texto_apresentacao_lista" data-wow-delay="0.4s">
                                        <i class="bi bi-4-circle"></i> Questionar quem é o usuário;
                                    </li>
                                    <li class="wow zoomIn texto_apresentacao_lista" data-wow-delay="0.5s">
                                        <i class="bi bi-5-circle"></i> Entender os benefícios da aplicação de <i>design</i> UX.
                                    </li>
                                </ul>
                            </div>
                        </div>


                        <h2 class="Titulo">Introdução</h2>

                        <!-- CAIXA DE TEXTO IMPORTANTE -->
                        <div class="destaques wow fadeIn" data-wow-delay="0.3s">
                            <div class="caixaprincipal" id="titulo_importante">
                                <i class="fa-solid fa-triangle-exclamation"></i>
                                IMPORTANTE
                            </div>
                            <div class="content_box" id="conteudo_importante">
                                <p>Este é um curso introdutório. Então vamos conhecer o que é fundamental para você entender <i>design</i> UX na área de tecnologia ou em outros âmbitos da vida.</p>
                            </div>
                        </div>

                        <p class="wow fadeIn" data-wow-delay="0.3s">
                            Quando você compra algum dispositivo, objeto ou mesmo um aplicativo de celular, alguém pensou e planejou como esse objeto ou aplicativo iria se comunicar com você, isto é, de que forma você interage com ele. Vamos a um exemplo prático!
                        </p>


                        <div class="apresentacao">
                            <div>
                                <!-- IMAGEM NO SITE  -->

                                <div class="text-center img-01 wow zoomIn">
                                    <p class="TituloFigura FonteMenor text-secondary p-2"><strong>Figura 01:</strong>
                                        Radio Bluetooth N80.</p>
                                    <div class="zoom">
                                        <a href="imgs/figura1.png" data-bs-toggle="modal" data-bs-target="#Imagem1">
                                            <img class="w-75" src="imgs/figura1.png" alt="Radio Bluetooth N80" id="img-1">
                                        </a>
                                    </div>
                                    <p class="FonteFigura FonteMenor text-secondary"><strong>Fonte: </strong>autor.</p>
                                </div>

                                <!-- Imagem - MODAL-->
                                <div class="modal fade text-center" id="Imagem1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg d-flex justify-content-center flex-column">
                                        <div class="modal-content w-75">
                                            <img class="img-fluid" src="imgs/figura1.png" alt="Radio Bluetooth N80">
                                        </div>
                                        <div class="modal-footer w-75 bg-light justify-content-center">
                                            <p class="text-secondary"><strong>Fonte: </strong>autor.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Imagem - End-->

                                <!-- FIM DA IMAGEM NO SITE  -->
                            </div>
                            <div>
                                <p class="wow fadeIn" data-wow-delay="0.3s">Na <strong>Figura 01</strong> você está vendo um rádio bluetooth que foi comprado em uma loja de eletrônicos no Beco da Poeira, no Centro de Fortaleza. Com uma marca desconhecida que o identifica como N80, o dispositivo tinha um “ar” <i>vintage</i>, que trazia características belas e antigas, como o acabamento externo que lembrava madeira, e funcionalidades modernas, como tocar áudio se conectado ao celular. Com um valor bem mais acessível que as marcas famosas, o objeto ganhou apreço e um espaço na minha sala de estar. Apesar de não conhecer a marca ou o dispositivo, o vendedor falou de funcionalidades e características que eu já conhecia:</p>

                            </div>
                        </div>


                        <!-- Lista -->
                        <div class="wow fadeIn col-sm-12 col-md-12" data-wow-delay="0.3s">
                            <ul class="card-style list-group list-group-flush">
                                <li class="list-group-item"><i class="seta bi bi-arrow-right-short"></i> Tem caixas de som;</li>
                                <li class="list-group-item"><i class="seta bi bi-arrow-right-short"></i> Toca som via <i>bluetooth</i> ou pen drive (dispositivo de armazenamento USB);</li>
                                <li class="list-group-item"><i class="seta bi bi-arrow-right-short"></i> Toca rádio AM e FM.</li>
                            </ul>
                        </div><br><br>


                        <p class="wow fadeIn" data-wow-delay="0.3s">
                            Em casa, após retirá-lo da caixa, analisei o objeto que acabei de comprar e olhei tudo aquilo que parecia ser clicável ou que se movimentava: botões, antena etc. É comum analisarmos objetos novos. Algo que chamou bastante atenção foi um item brilhante logo na parte da frente dele...
                        </p>


                        <p class="wow fadeIn" data-wow-delay="0.3s">
                            <strong>Para você fazer parte dessa experiência de primeiro uso, analise o N80, <strong>Figura 01</strong>. O que este item metálico faz? Qual a sua principal funcionalidade? Escolha uma das opções abaixo:</strong>
                        </p>


                        <div class="wow fadeIn" data-wow-delay="0.3s" id="txt_final">
                            <div class="row">
                                <div class="col d-flex justify-content-center gap-3">
                                    <a class="li_interativo wow fadeInLeft" data-wow-delay="0.1s">a) Sintoniza as rádios;</a>
                                    <a class="li_interativo wow fadeInLeft" data-wow-delay="0.3s">b) Passa e retorna as músicas;</a>
                                    <a class="li_interativo wow fadeInLeft" data-wow-delay="0.6s">c) Aumenta e reduz o volume;</a>
                                    <a class="li_interativo wow fadeInLeft" data-wow-delay="0.6s">d) É um item de enfeite.</a>
                                </div>
                            </div>
                        </div>


                        <p class="wow fadeIn" data-wow-delay="0.3s">
                            A resposta correta é o <strong>item d</strong>, mas provavelmente você escolheu um dos itens a, b ou c. Por que isso acontece?
                        </p>


                        <p class="wow fadeIn" data-wow-delay="0.3s">
                            Isso acontece porque guardamos lembranças dos dispositivos que já utilizamos. Este componente visual e físico lembra botões que aumentam volume ou têm outras ações conhecidas de outros rádios que já utilizamos. Tornar um item que se assemelha a um botão como item decorativo é algo que pode confundir quem o utiliza. O <i>design</i> de um produto ou de um processo deve ser algo bem estruturado e pautado em quem o utiliza, que chamaremos de <strong>usuário</strong>.
                        </p>


                        <p class="wow fadeIn" data-wow-delay="0.3s">
                            Neste exemplo podemos fazer perguntas importantes que devem ser respondidas pelo processo de <i>design</i> e que são a base do conceito de <i>design</i> UX:
                        </p>


                        <div class="wow fadeIn" data-wow-delay="0.3s" id="txt_final">
                            <div class="row">
                                <div class="col d-flex justify-content-center gap-3">
                                    <a class="li_interativo wow fadeInLeft" data-wow-delay="0.1s">É fácil de aprender?</a>
                                    <a class="li_interativo wow fadeInLeft" data-wow-delay="0.3s">É fácil de recordar?</a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col d-flex justify-content-center gap-3">
                                    <a class="li_interativo wow fadeInLeft" data-wow-delay="0.6s">Você se sente satisfeito?</a>
                                </div>
                            </div>
                        </div>


                        <!-- CAIXA DE TEXTO FIQUE ATENTO -->
                        <div class="destaques wow fadeIn" data-wow-delay="0.3s">
                            <div class="caixaprincipal" id="titulo_fiqueatento">
                                <i class="fa-solid fa-person-circle-exclamation"></i>
                                FIQUE ATENTO
                            </div>
                            <div class="content_box" id="conteudo_fiqueatento">
                                <p>Estas perguntas podem ser direcionadas somente ao “botão”, um item da interface, mas também podem ser aplicadas de forma global ao produto. Em alguns aspectos do <i>design</i> UX, é possível mensurar até a experiência completa que se inicia na compra ou no ato de desembalar o produto da caixa após comprar. Vamos à teoria?</p>
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