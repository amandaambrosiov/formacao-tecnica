<?php
// EGPCE - Header
include('layouts/header.php');
?>

<body>
    <?php
    // MENU   
    include('layouts/menu.php');
    // NAV
    include('layouts/nav.php');
    ?>

    <!-- CONTEUDO - Begin -->
    <div class="all-conteudo">
        <section class="conteiner-principal">
            <div class="main-content container-fluid">
                <div class="row">

                    <div class="col-md-10 col-sm-8 container-fluid">

                        <div class="apresentacao_inicial">

                            <div class="wow zoomIn" data-wow-delay="0.3s">
                                <img src="./imgs/Group 10.png" style="width: 13rem;" alt="">
                                <p class="apresentacao_descricao">Fonte: Imagem retirada do Freepik</p>
                            </div>

                            <!-- Apresentação -->
                            <div>
                                <p class="apresentacao_texto wow zoomIn" data-wow-delay="0.3s">
                                    Olá, <!--<?php echo $NomeUsuario ?> --> bem-vindo ao <strong> módulo 01 </strong> do curso Lorem ipsum dolor sit amet consectetur, adipisicing elit. Atque corporis quo non id rerum, ipsam cum dicta itaque. Modi sed maiores quam harum nobis iure itaque possimus vero nihil corrupti.
                                </p>
                            </div>
                        </div>

                        <!-- Título Pricipal -->
                        <h2 class="Titulo">Apresentação</h2>
                        <p class="wow fadeIn" data-wow-delay="0.3s">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam quaerat atque aut deserunt mollitia ut saepe, dignissimos repudiandae, doloremque quas repellat excepturi consectetur. Porro voluptate beatae, totam minima vero ipsam? Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                        </p>

                        <!-- Subtopico -->
                        <h3 class="Subtopico">Subtópico</h3>
                        <p class="wow fadeIn" data-wow-delay="0.3s">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam quaerat atque aut deserunt mollitia ut saepe, dignissimos repudiandae, doloremque quas repellat excepturi consectetur. Porro voluptate beatae, totam minima vero ipsam? Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                        </p>

                        <!-- Subsubtopico  -->
                        <h4 class="subsubtopico">Subsubtopico</h4>
                        <p class="wow fadeIn" data-wow-delay="0.3s">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam quaerat atque aut deserunt mollitia ut saepe, dignissimos repudiandae, doloremque quas repellat excepturi consectetur. Porro voluptate beatae, totam minima vero ipsam? Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                        </p>

                        <br>

                        <!-- Parágrafo sem a biblioteca de animação com exemplo de tooltip  -->
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam quaerat atque aut deserunt mollitia ut saepe, doloremque quas
                            <a class="link_tooltip" data-bs-custom-class="custom-tooltip" data-bs-toggle="tooltip" data-bs-title="Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam quaerat atque aut deserunt mollitia ut saepe">
                                Porro voluptate
                            </a>
                            repellat excepturi consectetur. Porro voluptate beatae, totam minima vero ipsam? Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                        </p>

                        <!-- Destaque verde -->
                        <div class="content_box_padrao">
                            <p class="wow fadeIn" data-wow-delay="0.3s">
                                Lorem ipsum dolor sit amet <strong>consectetur adipisicing</strong> elit. Aliquam quaerat atque aut deserunt mollitia ut saepe, dignissimos repudiandae, doloremque quas repellat excepturi consectetur. <strong>Porro voluptate beatae, totam minima vero ipsam?</strong> Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                            </p>
                        </div>

                        <!-- Destaque padrão -->
                        <div class="content_box_padrao2">
                            <p class="wow fadeIn" data-wow-delay="0.3s">
                                Lorem ipsum dolor sit amet <strong>consectetur adipisicing</strong> elit. Aliquam quaerat atque aut deserunt mollitia ut saepe, dignissimos repudiandae, doloremque quas repellat excepturi consectetur. <strong>Porro voluptate beatae, totam minima vero ipsam?</strong> Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                            </p>
                        </div>

                        <!-- Destaque padrão cinza -->
                        <div class="content_box_padrao_cinza">
                            <p class="wow fadeIn" data-wow-delay="0.3s">
                                Lorem ipsum dolor sit amet <strong>consectetur adipisicing</strong> elit. Aliquam quaerat atque aut deserunt mollitia ut saepe, dignissimos repudiandae, doloremque quas repellat excepturi consectetur. <strong>Porro voluptate beatae, totam minima vero ipsam?</strong> Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                            </p>
                        </div>

                        <!-- Destaque padrão cinza 2 -->
                        <div class="content_box_padrao_cinza2">
                            <p class="wow fadeIn" data-wow-delay="0.3s">
                                Lorem ipsum dolor sit amet <strong>consectetur adipisicing</strong> elit. Aliquam quaerat atque aut deserunt mollitia ut saepe, dignissimos repudiandae, doloremque quas repellat excepturi consectetur. <strong>Porro voluptate beatae, totam minima vero ipsam?</strong> Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                            </p>
                        </div>

                        <!-- Caixa interativas -->
                        <div class="wow fadeIn" data-wow-delay="0.3s" id="txt_final">
                            <div class="row">
                                <div class="col d-flex justify-content-center gap-3">
                                    <a class="li_interativo wow fadeInLeft" data-wow-delay="0.1s">Informação</a>
                                    <a class="li_interativo wow fadeInLeft" data-wow-delay="0.3s">Informação</a>
                                    <a class="li_interativo wow fadeInLeft" data-wow-delay="0.6s">Informação</a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col d-flex justify-content-center gap-3">
                                    <a class="li_interativo wow fadeInLeft" data-wow-delay="0.8s">Informação</a>
                                    <a class="li_interativo wow fadeInLeft" data-wow-delay="0.9s">Informação</a>
                                </div>
                            </div>
                        </div>

                        <!-- Balão informativo -->
                        <div class="wow fadeIn balao_informativo1" data-wow-delay="0.3s">
                            <strong><i class="fa-solid fa-lightbulb"></i> Clique nos títulos abaixo para mais informações</strong>
                        </div>

                        <!-- Caixas de texto com botões interativos -->
                        <div class="link_pagina">
                            <a href="#escuta-ativa" class="col-sm-6 col-md-2 fs-5 content_btn_link color-dark wow zoomIn" data-wow-delay="0.2s">
                                <div class="btn_link_pagina">
                                    <i class="fa-solid fa-ear-listen"></i>
                                    <p>Escuta ativa</p>
                                </div>
                            </a>

                            <a href="#rapport" class="col-sm-6 col-md-2 fs-5 content_btn_link color-dark wow zoomIn" data-wow-delay="0.2s">
                                <div class="btn_link_pagina">
                                    <i class="fa-solid fa-eye-low-vision"></i>
                                    <p>Rapport</p>
                                </div>
                            </a>

                            <a href="#caucus" class="col-sm-6 col-md-2 fs-5 content_btn_link color-dark wow zoomIn" data-wow-delay="0.2s">
                                <div class="btn_link_pagina">
                                    <i class="fa-solid fa-user-large"></i>
                                    <p>Caucaus</p>
                                </div>
                            </a>

                            <a href="#brains" class="col-sm-6 col-md-2 fs-5 content_btn_link color-dark wow zoomIn" data-wow-delay="0.2s">
                                <div class="btn_link_pagina">
                                    <i class="fa-solid fa-brain"></i>
                                    <p>Brain</p>
                                </div>
                            </a>

                            <a href="#parafra" class="col-sm-6 col-md-2 fs-5 content_btn_link color-dark wow zoomIn" data-wow-delay="0.2s">
                                <div class="btn_link_pagina">
                                    <i class="fa-solid fa-arrows-turn-to-dots"></i>
                                    <p>Somente um Teste</p>
                                </div>
                            </a>

                            <a href="#resumo" class="col-sm-6 col-md-2 fs-5 content_btn_link color-dark wow zoomIn" data-wow-delay="0.2s">
                                <div class="btn_link_pagina">
                                    <i class="fa-solid fa-bookmark"></i>
                                    <p>Resumo</p>
                                </div>
                            </a>
                        </div>

                        <!-- Lista -->
                        <div class="wow fadeIn col-sm-12 col-md-12" data-wow-delay="0.3s">
                            <ul class="card-style list-group list-group-flush">
                                <li class="list-group-item"><i class="seta bi bi-arrow-right-short"></i> Nunca seja agressivo;</li>
                                <li class="list-group-item"><i class="seta bi bi-arrow-right-short"></i> Evite supor coisas, seja direto em suas afirmações;</li>
                                <li class="list-group-item"><i class="seta bi bi-arrow-right-short"></i> Use pausas para ouvir e entender a outra parte;</li>
                                <li class="list-group-item"><i class="seta bi bi-arrow-right-short"></i> Ao sentir que está no caminho certo, repita o que disse de forma resumida e aguarde a resposta para se certificar;</li>
                            </ul>
                        </div>

                        <!-- Lista ordenada  -->
                        <ol id="txt_final">
                            <li>Aliquam quaerat atque aut deserunt mollitia ut saepe.</li>
                            <li>Dignissimos repudiandae, doloremque quas repellat excepturi consectetur.</li>
                            <li>Feserunt mollitia ut saepe, dignissimos repudiandae, doloremque quas repellat.</li>
                            <li>Aoloremque quas repellat excepturi consectetur.</li>
                        </ol>

                        <!-- Lista  -->
                        <ul class="list">
                            <li class="wow fadeInLeft" data-wow-delay="0.3s">
                                <i class="fa fa-dot-circle text-success"></i> Somente um teste;
                            </li>
                            <li class="wow fadeInLeft" data-wow-delay="0.3s">
                                <i class="fa fa-dot-circle text-success"></i> Aqui vai ficar outro texto;
                            </li>
                            <li class="wow fadeInLeft" data-wow-delay="0.3s">
                                <i class="fa fa-dot-circle text-success"></i> Nesse espaço será inserido um texto;
                            </li>
                            <li class="wow fadeInLeft" data-wow-delay="0.3s">
                                <i class="fa fa-dot-circle text-success"></i> Espaço livre para texto.
                            </li>
                        </ul>

                        <!-- Accordion com texto sobre o que será visto no curso -->
                        <div class="accordion destaques wow fadeInLeftBig" data-wow-delay="0.3s">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false">
                                <h5>O que você verá agora?<span class="fw-lighter"><br>(Clique aqui para saber mais)</span></h5>
                            </button>
                            <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse">
                                <div class="accordion-content">
                                    Tendo tudo isso como base, nas próximas seções deste curso você perceberá os benefícios da gestão do tempo, como visualizar uma nova vida para si mesmo e planejar a sua realização através de objetivos e hábitos.
                                </div>
                            </div>
                        </div>

                        <!-- DESTAQUE COM VÁRIOS ACCORDIONS -->
                        <div class="accordion destaques" id="accordionExample">
                            <div>
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        CONFLITO LATENTE
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>Existe, mas ainda não se manifestou de maneira aberta.</p>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        CONFLITO PERCEBIDO
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>Sua existência é notória, apesar de não haver ainda ações e declarações dos envolvidos.</p>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        CONFLITO SENTIDO
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>As partes envolvidas são afetadas emocionalmente pela situação de conflito.</p>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <h2 class="accordion-header" id="headingFour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        CONFLITO MANIFESTO
                                    </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>A situação conflituosa sai da esfera interpessoal e passa a afetar a organização negativamente ou equipe como um todo.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- CAIXA DE TEXTO IMPORTANTE -->
                        <div class="destaques wow fadeIn" data-wow-delay="0.3s">
                            <div class="caixaprincipal" id="titulo_importante">
                                <i class="fa-solid fa-triangle-exclamation"></i>
                                IMPORTANTE
                            </div>
                            <div class="content_box" id="conteudo_importante">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi obcaecati magni saepe. Eum unde nisi, a quis laboriosam quam iste expedita quia non ad, iure, quaerat nostrum voluptatum.</p>
                            </div>
                        </div>

                        <!-- CAIXA DE TEXTO FIQUE ATENTO -->
                        <div class="destaques wow fadeIn" data-wow-delay="0.3s">
                            <div class="caixaprincipal" id="titulo_fiqueatento">
                                <i class="fa-solid fa-person-circle-exclamation"></i>
                                FIQUE ATENTO
                            </div>
                            <div class="content_box" id="conteudo_fiqueatento">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi obcaecati magni saepe. Eum unde nisi, a quis laboriosam quam iste expedita quia non ad, iure, quaerat nostrum voluptatum.</p>
                            </div>
                        </div>

                        <!-- CAIXA DE TEXTO REFLITA -->
                        <div class="destaques wow fadeIn" data-wow-delay="0.3s">
                            <div class="caixaprincipal" id="titulo_reflita">
                                <i class="fa-solid fa-head-side-virus"></i>
                                REFLITA
                            </div>
                            <div class="content_box" id="conteudo_reflita">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi obcaecati magni saepe. Eum unde nisi, a quis laboriosam quam iste expedita quia non ad, iure, quaerat nostrum voluptatum.</p>
                            </div>
                        </div>

                        <!-- CAIXA DE TEXTO EXEMPLO -->
                        <div class="destaques wow fadeIn" data-wow-delay="0.3s">
                            <div class="caixaprincipal" id="titulo_exemplo">
                                <i class="fa-regular fa-pen-to-square"></i>
                                EXEMPLO
                            </div>
                            <div class="content_box" id="conteudo_exemplo">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi obcaecati magni saepe. Eum unde nisi, a quis laboriosam quam iste expedita quia non ad, iure, quaerat nostrum voluptatum.</p>
                            </div>
                        </div>

                        <!-- CAIXA DE TEXTO SAIBA MAIS -->
                        <div class="destaques wow fadeIn" data-wow-delay="0.3s">
                            <div class="caixaprincipal" id="titulo_saibamais">
                                <i class="fa-solid fa-plus"></i>
                                SAIBA MAIS
                            </div>
                            <div class="content_box" id="conteudo_saibamais">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi obcaecati magni saepe. Eum unde nisi, a quis laboriosam quam iste expedita quia non ad, iure, quaerat nostrum voluptatum.</p>
                            </div>
                        </div>

                        <!-- CAIXA DE TEXTO CURIOSIDADE -->
                        <div class="destaques wow fadeIn" data-wow-delay="0.3s">
                            <div class="caixaprincipal" id="titulo_curiosidade">
                                <i class="fa-solid fa-magnifying-glass"></i>
                                CURIOSIDADE
                            </div>
                            <div class="content_box" id="conteudo_curiosidade">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi obcaecati magni saepe. Eum unde nisi, a quis laboriosam quam iste expedita quia non ad, iure, quaerat nostrum voluptatum.</p>
                            </div>
                        </div>

                        <!-- CAIXA DE TEXTO RESUMO -->
                        <div class="destaques wow fadeIn" data-wow-delay="0.3s">
                            <div class="caixaprincipal" id="titulo_resumo">
                                <i class="bi bi-bookmark-fill"></i>
                                RESUMO
                            </div>
                            <div class="content_box" id="conteudo_resumo">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi obcaecati magni saepe. Eum unde nisi, a quis laboriosam quam iste expedita quia non ad, iure, quaerat nostrum voluptatum.</p>
                            </div>
                        </div>

                        <!-- CITAÇÃO -->
                        <div class="citacao_texto">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
                            <p class="citacao blockquote-footer"><strong>(Jones (2020, p7))</strong></p>
                        </div>

                        <!-- FLIPS -->
                        <div class="flips">
                            <label id="summary">
                                <input type="checkbox" />
                                <article class="flip-mini" data-aos="fade-down">
                                    <div class="front flip-blue">
                                        <header><i class="fa-solid fa-hand-pointer fa-beat-fade"></i></header>
                                        <h3 class="text-light"><strong>Conflitos racionais</strong> </h3>
                                    </div>
                                    <div class="back flip-blue">
                                        <header><i class="bi bi-x-lg"></i></header>
                                        <p class="flip_back_text">
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                                        </p>
                                    </div>
                                </article>
                            </label>

                            <label id="summary">
                                <input type="checkbox" />
                                <article class="flip-mini" data-aos="fade-down">
                                    <div class="front flip-green">
                                        <header><i class="fa-solid fa-hand-pointer fa-beat-fade"></i></header>
                                        <h3 class="text-light"><strong>Conflitos emocionais</strong> </h3>
                                    </div>
                                    <div class="back flip-green">
                                        <header><i class="bi bi-x-lg"></i></header>
                                        <p class="flip_back_text">
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                                        </p>
                                    </div>
                                </article>
                            </label>
                        </div>

                        <!-- TIMELINE -->
                        <div class="timelinemae">
                            <div class="timeline01">
                                <div class="outer">
                                    <div class="card01">
                                        <div class="info wow animate__backInRight">
                                            <h3 class="title01"> 3.1 - Promova uma comunicação eficiente e facilite o diálogo:</h3>
                                            <p>Os conflitos impactam diretamente no clima organizacional, nesse sentido a realização de pesquisas de clima ajuda a identificar eventuais conflitos que podem inclusive estar no estágio latente.</p>
                                            <p>Esse tipo de pesquisa vai ajudar a chegar na causa-raiz dos conflitos para, assim, solucioná-los de uma vez por todas e impedir que eles venham a repetir.</p>
                                        </div>
                                    </div>
                                    <div class="card01">
                                        <div class="info wow animate__backInLeft">
                                            <h3 class="title01"> 3.2 - Dê preferência ao pronome “nós”:</h3>
                                            <p>Os conflitos impactam diretamente no clima organizacional, nesse sentido a realização de pesquisas de clima ajuda a identificar eventuais conflitos que podem inclusive estar no estágio latente.</p>
                                            <p>Esse tipo de pesquisa vai ajudar a chegar na causa-raiz dos conflitos para, assim, solucioná-los de uma vez por todas e impedir que eles venham a repetir.</p>
                                        </div>
                                    </div>
                                    <div class="card01">
                                        <div class="info wow animate__backInRight">
                                            <h3 class="title01"> 3.3 - Faça pesquisas de clima organizacional:</h3>
                                            <p>Os conflitos impactam diretamente no clima organizacional, nesse sentido a realização de pesquisas de clima ajuda a identificar eventuais conflitos que podem inclusive estar no estágio latente.</p>
                                            <p>Esse tipo de pesquisa vai ajudar a chegar na causa-raiz dos conflitos para, assim, solucioná-los de uma vez por todas e impedir que eles venham a repetir.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- BOTÃO GRANDE COM IMAGEM E TEXTO -->
                        <div class="row gap-2 card_dis">
                            <div class="col">
                                <p class="FonteFigura FonteMenor text-secondary d-flex justify-content-center">
                                    <strong>Fonte:</strong>
                                    <a href="https://www.freepik.com/free-vector/flat-illustration-secretary-s-day-celebration_39431981.htm#query=woman%20illustration%20work&position=0&from_view=keyword&track=ais&uuid=597a7d63-6726-430f-9e03-4025b3b9b520" target="_blank" rel="noopener noreferrer">Imagem retirada do Freepik</a>
                                </p>
                                <div class="conteudo-card">
                                    <div class="card">
                                        <img src="./imgs/group_12.jpg" class="img" alt="">
                                        <div class="content">
                                            <p class="desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate quos vel tenetur ratione culpa deserunt voluptatum nihil beatae minus, officia eum natus dolor, nostrum? Provident laborum ipsam ullam facere?</p>
                                        </div>
                                        <div class="text-fixo-card">Título
                                            <span class="arrow">&#8673;</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <br><br>

                            <div class="col">
                                <p class="FonteFigura FonteMenor text-secondary d-flex justify-content-center">
                                    <strong>Fonte:</strong>
                                    <a href="https://www.freepik.com/free-vector/staycation-backyard_9010394.htm#query=vetor%20homem%20relaxando%20e%20lendo%20na%20praia%20como%20coco&position=36&from_view=search&track=ais&uuid=86ff0c43-879e-4cde-bd58-e5f207d79c18" target="_blank" rel="noopener noreferrer">Imagem retirada do Freepik</a>
                                </p>

                                <div class="conteudo-card">
                                    <div class="card">
                                        <img src="./imgs/group_13.jpg" class="img" alt="">
                                        <div class="content">
                                            <p class="desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate quos vel tenetur ratione culpa deserunt voluptatum nihil beatae minus, officia eum natus dolor, nostrum? Provident laborum ipsam ullam facere?<br>Voluptatum nihil beatae minus, officia eum natus dolor, nostrum? Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                        </div>
                                        <div class="text-fixo-card">Título
                                            <span class="arrow">&#8673;</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- IMAGEM COM BOTÕES -->
                        <div class="apresentacao_inicial">
                            <div class="wow zoomIn" data-wow-delay="0.3s">
                                <img src="./imgs/group1.png" style="width: 23rem;" alt="">
                                <p class="apresentacao_descricao">Fonte: Imagem retirada do Freepik</p>
                            </div>
                            <div class="informativo_btn">
                                <div>
                                    <div class="wow fadeIn balao_informativo2" data-wow-delay="0.3s">
                                        <strong><i class="fa-solid fa-lightbulb"></i> Clique nos títulos abaixo para mais informações</strong>
                                    </div>
                                </div>
                                <br>

                                <div class="row">
                                    <div class="col">
                                        <p class="d-flex justify-content-center wow zoomIn">
                                            <a class="btn CorVerdeEstado" id="buton-t3" data-bs-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">
                                                <i class="fa-solid fa-computer"><strong>Vida Profissional</strong></i>
                                            </a>
                                        </p><br>

                                        <div class="collapse multi-collapse" id="multiCollapseExample1">
                                            <table class="table table-bordered border-success">
                                                <tbody>
                                                    <tr>
                                                        <td colspan="4">Objetivo:</td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="4">Quando: [ x ] curto prazo [ ] médio prazo [ ] longo prazo</td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="4">legado</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                    <div class="col">
                                        <p class="d-flex justify-content-center wow zoomIn">
                                            <button class="btn CorVerdeEstado" id="buton-t3" type="button" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">
                                                <i class="fa-solid fa-umbrella-beach"><strong>Vida Pessoal</strong></i>
                                            </button>
                                        </p><br>

                                        <div class="collapse multi-collapse" id="multiCollapseExample2">
                                            <table class="table table-bordered border-success">
                                                <tbody>
                                                    <tr>
                                                        <td colspan="4">Objetivo:</td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="4">Quando: [ x ] curto prazo [ ] médio prazo [ ] longo prazo</td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="4">legado</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- IMAGEM COM CAIXAS -->
                        <div class="apresentacao_inicial">
                            <div class="wow zoomIn" data-wow-delay="0.3s">
                                <img src="./imgs/pessoa.png" style="width: 13rem;" alt="">
                                <p class="apresentacao_descricao">Fonte: Imagem retirada do Freepik</p>
                            </div>
                            <div>
                                <ul class="box_list wow fadeIn" data-wow-delay="0.3s" id="txt_final">
                                    <li class="wow zoomIn texto_apresentacao_lista" data-wow-delay="0.3s">
                                        <i class="bi bi-1-circle"></i> Planejamento para atingir metas e aumentar a produtividade e eficiência do tempo;
                                    </li>
                                    <li class="wow zoomIn texto_apresentacao_lista" data-wow-delay="0.5s">
                                        <i class="bi bi-2-circle"></i> A mudança de hábitos e da mentalidade sobre o tempo. A combinação dessas vantagens, por sua vez, pode trazer felicidade e satisfação pessoal.
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <!-- IMAGEM NO SITE  -->

                        <div class="text-center img-01 wow zoomIn">
                            <p class="TituloFigura FonteMenor text-secondary p-2"><strong>Figura 1:</strong>
                                Negociação e gestão de conflitos</p>
                            <div class="zoom">
                                <a href="imgs/Figura01.png" data-bs-toggle="modal" data-bs-target="#Imagem1">
                                    <img src="imgs/Figura01.png" alt="Imagem que remete a organização" id="img-1">
                                </a>
                            </div>
                            <p class="FonteFigura FonteMenor text-secondary"><strong>Fonte: </strong><a href="http://www.bstorytelling.com.br/wp-content/uploads/2020/01/Capa-01-1.png" target="_blank" rel="noopener noreferrer">bstorytelling</a></p>
                        </div>

                        <!-- Imagem - MODAL-->
                        <div class="modal fade text-center" id="Imagem1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg d-flex justify-content-center flex-column">
                                <div class="modal-content w-75">
                                    <img class="img-fluid" src="imgs/Figura01.png" alt="Alt da imagem fica aqui">
                                </div>
                                <div class="modal-footer w-75 bg-light justify-content-center">
                                    <p class="text-secondary"><strong>Fonte:</strong><a href="http://www.bstorytelling.com.br/wp-content/uploads/2020/01/Capa-01-1.png" target="_blank" rel="noopener noreferrer">https://www.bstorytelling.com.br/wp-content/uploads/2020/01/Capa-01-1.png</a></p>
                                </div>
                            </div>
                        </div>
                        <!-- Imagem - End-->

                        <!-- FIM DA IMAGEM NO SITE  -->

                        <!-- VÍDEO DO YOUTUBE -->
                        <div class="video wow fadeInDown">
                            <div>
                                <iframe class="iframe" height="300" src="https://www.youtube.com/embed/Kr13qBAPA9k?si=UZ5xl8lhs4lGu-dn" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                            </div>
                            <div>
                                <div class="titulo_video">
                                    Animação sobre mediação
                                </div>

                                <div class="descricao">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi obcaecati magni saepe. Eum unde nisi, a quis laboriosam quam iste expedita quia non ad, iure, quaerat nostrum voluptatum.</p>
                                </div>
                            </div>
                        </div>

                        <!-- REFERÊNCIAS  -->
                        <h2 class="Titulo">Referências</h2><br>
                        <p class="Texto"> <i class="bi bi-book me-2"></i>
                            Referencia aqui
                        </p>

                        <!-- BOTÕES DE NAVEGAÇÃO -->
                        <div class="text-center">
                            <a href="#" class="btn btn-outline-success" role="button" aria-pressed="true">
                                <i class="fa-solid fa-chevron-left"></i> Voltar </a>
                            <a href="#" class="btn btn-outline-success" role="button" aria-pressed="true">Realizar a Atividade Avaliativa <i class="fa-solid fa-chevron-right"></i></a>
                        </div>

                        <!-- BOTÕES DE NAVEGAÇÃO -->
                        <div class="text-center">
                            <a href="#" class="btn btn-outline-success" role="button" aria-pressed="true">
                                <i class="fa-solid fa-chevron-left"></i> Voltar </a>
                            <a href="#" class="btn btn-outline-success" role="button" aria-pressed="true">Próximo <i class="fa-solid fa-chevron-right"></i></a>
                        </div>

                        <!-- BARRA DE PROGRESSO -->
                        <div id="progress-bar"></div>

                        <!-- FOOTER -->
                        <?php include('./layouts/footer.php') ?>
                    </div> <!-- apresentacao_inicial -->
                </div> <!-- col-md-10 col-sm-8 container-fluid -->

            </div> <!-- row -->
    </div> <!-- main-content container-fluid -->
    </section> <!-- section -->
    </div> <!-- all-conteudo -->
    <!-- CONTEUDO - End -->


    <!-- BACK TO TOP -->
    <div id="back_to_top">
        <div id="btn_back">
            <i id="icon_up" class="fa-solid fa-arrow-up"></i>
        </div>
    </div>

</body>

</html>