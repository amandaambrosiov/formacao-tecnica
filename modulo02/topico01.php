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

                        <h2 class="Titulo">01 - Interação Humano-Computador</h2>

                        <p class="wow fadeIn" data-wow-delay="0.3s">
                            O exemplo que foi apresentado na seção de “Apresentação” explora conceitos de Interação Humano-Computador aplicados a produtos físicos. IHC, entretanto, tem foco em sistemas computacionais. Desta forma seguiremos a partir daqui com exemplos de sistemas que podem ser aplicativos de celulares, como <i>Whatsapp</i>, <i>softwares</i> que você utiliza no computador, como <i>Microsoft Word</i>, sistemas embarcados em outros dispositivos, como sistemas que estão presentes nos caixas eletrônicos do seu banco, dentre outros. Isto não impede, porém, que os conceitos sejam utilizados de forma ampla em outros aspectos da vida.
                        </p>


                        <p class="wow fadeIn" data-wow-delay="0.3s">
                            <strong>Interação Humano-Computador (IHC)</strong> é uma subárea da computação que está interessada na qualidade de uso de sistemas e no impacto destes sistemas na vida de seus usuários (<a class="link_tooltip" data-bs-custom-class="custom-tooltip" data-bs-toggle="tooltip" data-bs-title="Professora associada do Departamento de Informática da PUC-Rio, Simone Diniz Junqueira Barbosa atua principalmente na área de Interação Humano-Computador. Pesquisadora nível 2 do CNPq, seus interesses de pesquisa incluem atualmente: exploração e análise visual enarrativa de dados; engenharia semiótica; design de sistemas interativos com base em modelos; e meios de aumentar a qualidade de uso de sistemas interativos em diversos domínios, através de adaptação, mecanismos de analogia e outras técnicas de inteligência artificial.">BARBOSA</a>; <a class="link_tooltip" data-bs-custom-class="custom-tooltip" data-bs-toggle="tooltip" data-bs-title="Possui graduação em Ciência da Computação pela Universidade Federal Fluminense(2003), mestrado em Informática pela Pontifícia Universidade Católica do Rio de Janeiro(2005), doutorado em Informática pela Pontifícia Universidade Católica do Rio de Janeiro(2010), ensino-fundamental-primeiro-grau pela Escola Municipal Rachide da Glória Salim Saquer(1995) e ensino-medio-segundo-grau pelo Colégio Estadual Aurelino Leal(1998).">SILVA</a>, 2010). IHC tem um foco diferente de Engenharia de <i>Software</i>, que busca proporcionar sistemas interativos mais eficientes, robustos, livres de erros e de fácil manutenção. Essas características de Engenharia de <i>Software</i> não garantem qualidade de uso, logo é possível ter um sistema robusto e livre de erros, que seja difícil de ser compreendido pelo usuário e pouco útil para ele.
                        </p>


                        <p class="wow fadeIn" data-wow-delay="0.3s">
                            Diante desse cenário, há duas possibilidades para construção de um <i>software</i>:
                        </p>

                        <br>

                        <!-- COLUNA COM AS DUAS IMAGENS -->
                        <!-- Imagem 01 -->
                        <div class="row">
                            <div class="text-center col-12 col-md-6 wow zoomIn">
                                <p class="TituloFigura"><strong>(a) De dentro para fora</strong></p><br>
                                <div class="zoom">
                                    <a href="imagens/Figura01.png" data-bs-toggle="modal" data-bs-target="#Imagem01">
                                        <img class="w-50" src="imgs/Figura02.png" alt="possibilidades para construção de um software" id="img-1">
                                    </a>
                                </div>
                                <p class="FonteFigura FonteMenor text-secondary"><strong>Fonte: </strong> BARBOSA; SILVA,
                                    2010</p>
                            </div>

                            <!-- imagem 03 -->
                            <div class="text-center col-12 col-md-6 wow zoomIn">
                                <p class="TituloFigura"><strong>(b) De fora para dentro</strong></p><br>
                                <div class="zoom">
                                    <a href="imgs/Figura02.1.png" data-bs-toggle="modal" data-bs-target="#Imagem02">
                                        <img class="w-50" src="imgs/Figura02.1.png" alt="possibilidades para construção de um software" id="img-1">
                                    </a>
                                </div>
                                <p class="FonteFigura FonteMenor text-secondary"><strong>Fonte: </strong> BARBOSA; SILVA,
                                    2010</p>
                            </div>
                        </div>
                        <br>
                        <!-- Imagem 02 - MODAL (Audi)-->
                        <div class="modal fade text-center" id="Imagem01" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg d-flex justify-content-center flex-column">
                                <div class="modal-content w-75">
                                    <img class="img-fluid" src="imgs/Figura02.png" alt="possibilidades para construção de um software">
                                </div>
                                <div class="modal-footer w-75 bg-light justify-content-center">
                                    <p class="text-secondary"><strong>Figura 02</strong> - Abordagens de desenvolvimento
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- Imagem 02 - End  (Audi)-->



                        <!-- Imagem 03 - MODAL (Audi)-->
                        <div class="modal fade text-center" id="Imagem02" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg d-flex justify-content-center flex-column">
                                <div class="modal-content w-75">
                                    <img class="img-fluid" src="imgs/Figura02.1.png" alt="possibilidades para construção de um software">
                                </div>
                                <div class="modal-footer w-75 bg-light justify-content-center">
                                    <p class="text-secondary"><strong>Fonte:</strong> - Abordagens de desenvolvimento
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- Imagem 03 - End  (Audi)-->
                        <!-- COLUNA COM AS DUAS IMAGENS -->

                        <p class="wow fadeIn" data-wow-delay="0.3s">Qual destas abordagens você considera a mais correta? A resposta é que não há
                            uma abordagem correta e sim especificidades de construção do <i>software</i> que necessitam de uma
                            ou outra abordagem.</p>

                        <!-- CAIXA DE TEXTO FIQUE ATENTO -->
                        <div class="destaques wow fadeIn" data-wow-delay="0.3s">
                            <div class="caixaprincipal" id="titulo_fiqueatento">
                                <i class="fa-solid fa-person-circle-exclamation"></i>
                                FIQUE ATENTO
                            </div>
                            <div class="content_box" id="conteudo_fiqueatento">
                                <p>Cada projeto possui uma realidade própria que
                                    inclui tecnologias escolhidas, limitações de recursos, processo de
                                    desenvolvimento etc, assim como há um propósito para o qual o projeto
                                    existe. É necessário analisar esta realidade para definir características de
                                    projeto, como, por exemplo, a abordagem de desenvolvimento. Este é um dos
                                    papéis dos analistas de sistemas.</p>
                            </div>
                        </div>

                        <p class="wow fadeIn" data-wow-delay="0.3s">A concepção de <strong>dentro para fora</strong> tem ênfase na representação de dados e
                            algoritmos que processam estes dados, assim como na arquitetura do sistema. Não é dada
                            atenção a como esse <i>software</i> será utilizado e normalmente se pressupõe que haverá um esforço
                            de quem o utiliza para que compreendê-lo bem. Por exemplo, sistemas que interagem somente
                            com outros sistemas podem utilizar-se bem dessa abordagem para ter qualidade de construção
                            como prioritária e se ajustar corretamente às limitações dos projetos.</p>


                        <!-- CAIXA DE TEXTO CURIOSIDADE -->
                        <div class="destaques wow fadeIn" data-wow-delay="0.3s">
                            <div class="caixaprincipal" id="titulo_curiosidade">
                                <i class="fa-solid fa-magnifying-glass"></i>
                                CURIOSIDADE
                            </div>
                            <div class="content_box" id="conteudo_curiosidade">
                                <p>Esta abordagem é concebida em grande parte da
                                    Computação (<a class="link_tooltip" data-bs-custom-class="custom-tooltip" data-bs-toggle="tooltip" data-bs-title="Professora associada do Departamento de Informática da PUC-Rio, Simone Diniz Junqueira Barbosa atua principalmente na área de Interação Humano-Computador. Pesquisadora nível 2 do CNPq, seus interesses de pesquisa incluem atualmente: exploração e análise visual enarrativa de dados; engenharia semiótica; design de sistemas interativos com base em modelos; e meios de aumentar a qualidade de uso de sistemas interativos em diversos domínios, através de adaptação, mecanismos de analogia e outras técnicas de inteligência artificial.">BARBOSA</a>; <a class="link_tooltip" data-bs-custom-class="custom-tooltip" data-bs-toggle="tooltip" data-bs-title="Possui graduação em Ciência da Computação pela Universidade Federal Fluminense(2003), mestrado em Informática pela Pontifícia Universidade Católica do Rio de Janeiro(2005), doutorado em Informática pela Pontifícia Universidade Católica do Rio de Janeiro(2010), ensino-fundamental-primeiro-grau pela Escola Municipal Rachide da Glória Salim Saquer(1995) e ensino-medio-segundo-grau pelo Colégio Estadual Aurelino Leal(1998).">SILVA</a>, 2010) e como resultado é comum que sistemas que
                                    possuem uma grande abrangência de usuários tenham interfaces não
                                    apropriadas.</p>
                            </div>
                        </div>

                        <p class="wow fadeIn" data-wow-delay="0.3s">Para uma interface mais alinhada com o uso real do sistema, podemos utilizar a
                            abordagem de <strong>fora para dentro</strong>, que começa investigando os atores envolvidos, seus
                            interesses, objetivos, atividades, responsabilidades, motivações, os artefatos utilizados, o
                            domínio, o contexto de uso, dentre outros (<a class="link_tooltip" data-bs-custom-class="custom-tooltip" data-bs-toggle="tooltip" data-bs-title="Professora associada do Departamento de Informática da PUC-Rio, Simone Diniz Junqueira Barbosa atua principalmente na área de Interação Humano-Computador. Pesquisadora nível 2 do CNPq, seus interesses de pesquisa incluem atualmente: exploração e análise visual enarrativa de dados; engenharia semiótica; design de sistemas interativos com base em modelos; e meios de aumentar a qualidade de uso de sistemas interativos em diversos domínios, através de adaptação, mecanismos de analogia e outras técnicas de inteligência artificial.">BARBOSA</a>; <a class="link_tooltip" data-bs-custom-class="custom-tooltip" data-bs-toggle="tooltip" data-bs-title="Possui graduação em Ciência da Computação pela Universidade Federal Fluminense(2003), mestrado em Informática pela Pontifícia Universidade Católica do Rio de Janeiro(2005), doutorado em Informática pela Pontifícia Universidade Católica do Rio de Janeiro(2010), ensino-fundamental-primeiro-grau pela Escola Municipal Rachide da Glória Salim Saquer(1995) e ensino-medio-segundo-grau pelo Colégio Estadual Aurelino Leal(1998).">SILVA</a>, 2010), para somente depois
                            identificar oportunidades de intervenção na interação atual e como essa estrutura será
                            viabilizada pelas tecnologias utilizadas.</p>

                        <h3 class="Subtopico" id="item">01.1 - Áreas de estudo em IHC</h3>


                        <div class="apresentacao">
                            <div>
                                <div class="text-center img-01 wow zoomIn">
                                    <p class="FonteFigura FonteMenor text-secondary"><strong>Figura 03:</strong> Principais conceitos de IHC</p>

                                    <div class="zoom">
                                        <a href="imagens/Figura03.png" data-bs-toggle="modal" data-bs-target="#Imagem03">
                                            <img class="w-75" src="imgs/figura03.png" alt="Principais conceitos de IHC" id="img-1">
                                        </a>
                                    </div>
                                    <p class="FonteFigura FonteMenor text-secondary"><strong>Fonte: </strong><a class="link_tooltip" data-bs-custom-class="custom-tooltip" data-bs-toggle="tooltip" data-bs-title="Professora associada do Departamento de Informática da PUC-Rio, Simone Diniz Junqueira Barbosa atua principalmente na área de Interação Humano-Computador. Pesquisadora nível 2 do CNPq, seus interesses de pesquisa incluem atualmente: exploração e análise visual enarrativa de dados; engenharia semiótica; design de sistemas interativos com base em modelos; e meios de aumentar a qualidade de uso de sistemas interativos em diversos domínios, através de adaptação, mecanismos de analogia e outras técnicas de inteligência artificial.">BARBOSA</a>; <a class="link_tooltip" data-bs-custom-class="custom-tooltip" data-bs-toggle="tooltip" data-bs-title="Possui graduação em Ciência da Computação pela Universidade Federal Fluminense(2003), mestrado em Informática pela Pontifícia Universidade Católica do Rio de Janeiro(2005), doutorado em Informática pela Pontifícia Universidade Católica do Rio de Janeiro(2010), ensino-fundamental-primeiro-grau pela Escola Municipal Rachide da Glória Salim Saquer(1995) e ensino-medio-segundo-grau pelo Colégio Estadual Aurelino Leal(1998).">SILVA</a>, 2010
                                    </p>
                                </div>

                                <!-- Imagem 01 - MODAL (Audi)-->
                                <div class="modal fade text-center" id="Imagem03" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg d-flex justify-content-center flex-column">
                                        <div class="modal-content w-75">
                                            <img class="img-fluid" src="imgs/figura03.png" alt="Principais conceitos de IHC">
                                        </div>
                                        <div class="modal-footer w-75 bg-light justify-content-center">
                                            <p class="text-secondary"><strong>Fonte: </strong><a class="link_tooltip" data-bs-custom-class="custom-tooltip" data-bs-toggle="tooltip" data-bs-title="Professora associada do Departamento de Informática da PUC-Rio, Simone Diniz Junqueira Barbosa atua principalmente na área de Interação Humano-Computador. Pesquisadora nível 2 do CNPq, seus interesses de pesquisa incluem atualmente: exploração e análise visual enarrativa de dados; engenharia semiótica; design de sistemas interativos com base em modelos; e meios de aumentar a qualidade de uso de sistemas interativos em diversos domínios, através de adaptação, mecanismos de analogia e outras técnicas de inteligência artificial.">BARBOSA</a>; <a class="link_tooltip" data-bs-custom-class="custom-tooltip" data-bs-toggle="tooltip" data-bs-title="Possui graduação em Ciência da Computação pela Universidade Federal Fluminense(2003), mestrado em Informática pela Pontifícia Universidade Católica do Rio de Janeiro(2005), doutorado em Informática pela Pontifícia Universidade Católica do Rio de Janeiro(2010), ensino-fundamental-primeiro-grau pela Escola Municipal Rachide da Glória Salim Saquer(1995) e ensino-medio-segundo-grau pelo Colégio Estadual Aurelino Leal(1998).">SILVA</a>, 2010
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Imagem 01 - End  (Audi)-->
                            </div>
                            <div>
                                <p class="wow fadeIn" data-wow-delay="0.3s">IHC é uma disciplina interessada no projeto, implementação e avaliação
                                    de sistemas computacionais interativos (HEWETT et al., 1992). <strong>IHC, nesse
                                        sentido, fornece explicações e previsões para fenômenos de interação
                                        usuário-sistema e resultados práticos para <i>design</i> da interface de
                                        usuário.</strong> A <strong>Figura 03</strong> apresenta essa definição, estabelecendo a conexão entre
                                    previsão e <i>design</i> e entre explicação e avaliação. <i>Design</i> e avaliação são duas
                                    áreas de atuação em IHC e consequentemente em <i>design</i> UX.
                                </p>

                            </div>
                        </div>

                        <p class="wow fadeIn" data-wow-delay="0.3s">De acordo com Hewett, em seu livro sobre currículo para <i>IHC ACM
                                SIGCHI curricula for human-computer interaction</i> (HEWETT et al., 1992), é
                            possível entender IHC dentro de um contexto de 5 aspectos inter relacionados:
                        </p>


                        <!-- Caixa interativas -->
                        <div class="wow fadeIn" data-wow-delay="0.3s">
                            <div class="row">
                                <div class="col d-flex justify-content-center gap-3">
                                    <a class="li_interativo wow fadeInLeft" data-wow-delay="0.1s">Natureza da interação;</a>
                                    <a class="li_interativo wow fadeInLeft" data-wow-delay="0.3s">Contexto de uso;</a>
                                    <a class="li_interativo wow fadeInLeft" data-wow-delay="0.6s">Características humanas;</a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col d-flex justify-content-center gap-3">
                                    <a class="li_interativo wow fadeInLeft" data-wow-delay="0.8s">Sistemas computacionais;</a>
                                    <a class="li_interativo wow fadeInLeft" data-wow-delay="0.9s">Processo de desenvolvimento.</a>
                                </div>
                            </div>
                        </div>



                        <p class="wow fadeIn" data-wow-delay="0.3s">Algumas das inter-relações entre esses tópicos estão representadas na
                            <strong>Figura 04</strong> (HEWETT et al., 1992).
                        </p>


                        <div class="apresentacao">
                            <div>
                                <!-- IMAGEM NO SITE  -->

                                <div class="text-center img-01 wow zoomIn">
                                    <p class="TituloFigura FonteMenor text-secondary p-2"><strong>Figura 04:</strong>
                                        Abordagens de desenvolvimento.</p>
                                    <div class="zoom">
                                        <a href="imgs/figura04.png" data-bs-toggle="modal" data-bs-target="#Imagem04">
                                            <img class="w-50" src="imgs/figura04.png" alt="Abordagens de desenvolvimento" id="img-1">
                                        </a>
                                    </div>
                                    <p class="FonteFigura FonteMenor text-secondary"><strong>Fonte: </strong>autor.</p>
                                </div>

                                <!-- Imagem - MODAL-->
                                <div class="modal fade text-center" id="Imagem04" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg d-flex justify-content-center flex-column">
                                        <div class="modal-content w-75">
                                            <img class="img-fluid" src="imgs/figura04.png" alt="Abordagens de desenvolvimento">
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
                                <p class="wow fadeIn" data-wow-delay="0.3s">Na imagem, vemos que os sistemas computacionais existem em um
                                    ambiente <strong>social, organizacional e de trabalho </strong> mais amplo. Dentro deste
                                    contexto existem <strong>aplicações</strong> para as quais desejamos empregar esses
                                    sistemas. Porém o processo de colocar os computadores para funcionar
                                    significa que os <strong>aspectos humanos,</strong> técnicos e de trabalho da situação do
                                    aplicativo devem ser ajustados uns aos outros por meio da aprendizagem
                                    humana, adaptabilidade do sistema ou outras estratégias. </p><br>


                                <p class="wow fadeIn" data-wow-delay="0.3s">Além do uso e do contexto social dos computadores, do lado humano
                                    também devemos levar em consideração as características de
                                    <strong>processamento da informação </strong>humana, <strong>comunicação</strong> e
                                    características
                                    físicas dos usuários, que envolvem a <strong>ergonomia.</strong>
                                </p>
                            </div>
                        </div>


                        <p class="wow fadeIn" data-wow-delay="0.3s">Do lado do computador dispositivos, como <i>smartphones</i>, relógios inteligentes (<i>smartwatches</i>),
                            dispositivos de assistentes inteligentes e outros, temos uma variedade de tecnologias
                            desenvolvidas para dar suporte à interação com humanos. Essas
                            tecnologias estabelecem <strong>dispositivos de entrada e saída</strong> que conectam o
                            humano e a máquina. Estes dispositivos, também conhecidos por periféricos,
                            que podem ser teclados, câmeras e até batimentos cardíacos, são usados a
                            partir de várias <strong>técnicas</strong> para organizar um diálogo. Essas técnicas, por
                            sua
                            vez, são usadas para implementar elementos de <i>design</i> maiores, como a
                            metáfora da interface. Aprofundando-se nos substratos da máquina que dão
                            suporte ao diálogo, o diálogo pode fazer uso extensivo de técnicas de
                            computação gráfica. </p>

                        <!-- VÍDEO DO YOUTUBE -->
                        <div class="video wow fadeInDown">
                            <div>
                                <iframe class="iframe" height="300" src="https://www.youtube.com/embed/NuvN03WzCB4?si=UDBzTkc9eDOvYx7i" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                            </div>
                            <div>
                                <div class="titulo_video">
                                    Interação Humano Computador (IHC)
                                </div>

                                <div class="descricao">
                                    <p>Em resumo, a Interação Humano-Computador é um campo vasto e dinâmico, moldando a forma como nos relacionamos com a tecnologia. Se você gostou do assunto, clica no vídeo para entender melhor sobre o assunto.</p>
                                </div>
                            </div>
                        </div>

                        <p class="wow fadeIn" data-wow-delay="0.3s">
                            Nas seções seguintes vamos expandir cada uma das cinco áreas de estudo para compreender melhor essas conexões e a importância da presença de IHC na construção de sistemas.
                        </p>


                        <h4 class="subsubtopico">01.1.1 - Natureza da Interação</h4>

                        <p class="wow fadeIn" data-wow-delay="0.3s">
                            A natureza da interação envolve investigar o que ocorre enquanto as pessoas utilizam sistemas interativos em suas atividades (HEWETT et al., 1992). Envolve também entender alguns paradigmas dessa comunicação, como avaliar os diversos pontos de vista, como do ponto de vista de trabalho, onde se vê o sistema como ferramenta, ou do ponto de vista de controle, quando é necessário supervisionar atividades de alguém.
                        </p>

                        <p class="wow fadeIn" data-wow-delay="0.3s">
                            É também parte da natureza da interação que se compreenda os objetivos de uso de um sistema, por exemplo, produtividade ou capacitação do usuário. É neste âmbito que deve se discutir qual a consequência da interação do uso de um sistema para as pessoas e para sociedade.
                        </p>

                        <p class="wow fadeIn" data-wow-delay="0.3s">
                            <strong>Você em algum momento já ouviu seu telefone tocar ou vibrar sem ele estar tocando de fato?</strong> Se sim, este fenômeno pode ser considerado como a “Síndrome do Toque Fantasma”. Ele pode estar relacionado à nomofobia.
                        </p>

                        <!-- CAIXA DE TEXTO CURIOSIDADE -->
                        <div class="destaques wow fadeIn" data-wow-delay="0.3s">
                            <div class="caixaprincipal" id="titulo_curiosidade">
                                <i class="fa-solid fa-magnifying-glass"></i>
                                CURIOSIDADE
                            </div>
                            <div class="content_box" id="conteudo_curiosidade">
                                <p>A <strong>nomofobia</strong> é a fobia causada pelo desconforto ou angústia resultante da incapacidade de acesso à comunicação por meio de aparelhos celulares ou computadores. Surge quando alguém se sente impossibilitado de se comunicar ou se vê incontactável estando em algum lugar sem um aparelho de celular ou dispositivo com internet. É um termo muito recente e tem origem nos diminutivos ingleses <i>No-Mo</i>, ou <i>No-Mobile</i>, que significa sem celular. Daí a expressão "nomofobia" ou fobia de ficar sem um aparelho de comunicação móvel.</p>
                            </div>
                        </div>

                        <p class="wow fadeIn" data-wow-delay="0.3s">
                            Recentemente uma reportagem do jornal Diário do Nordeste apresentou uma matéria sobre o uso abusivo de celulares. No texto, a psicóloga Anna Lucia Spear King, doutora em saúde mental do Instituto Delete (UFRJ), explica que a dependência por celulares, também chamada de nomofobia, tem vários níveis: vai da falta de educação digital, que inclui a dificuldade de equilíbrio sobre o tempo e locais de uso, até o nível patológico.
                        </p>

                        <p class="wow fadeIn" data-wow-delay="0.3s">
                            Pesquisadores do Instituto Delete identificaram transtornos relacionados ao uso abusivo de celulares, como “o medo de ficar sem o celular”. Entre os transtornos estudados, citam o “Efeito Google”, que é quando as pessoas começam a reter menos informações já que podem obter respostas rápidas no Google.
                        </p>

                        <p class="wow fadeIn" data-wow-delay="0.3s">
                            Outro transtorno relacionado que causa comportamentos não esperados do indivíduo em sociedade é a “Invisibilidade Social”. A invisibilidade social vem sendo bastante explorada em filmes e séries que trazem a tecnologia como tema principal. Dois filmes que trazem essa discussão de forma mais leve são: o filme “Modo avião”, que explora de forma divertida a falta do celular em uma jovem que é influenciadora digital e é obrigada a ir à casa do avô, onde não pega rede de celular, após pôr em risco sua própria vida em função da vida digital; e o filme “Nada a esconder”, que coloca em discussão o impacto das informações pessoais que recebemos pelos celulares em um jogo entre amigos. Apesar de a discussão nestes filmes ocorrer de forma mais leve, o problema é sério e pode desenvolver transtornos mais graves.
                        </p>

                        <!-- CAIXA DE TEXTO CURIOSIDADE -->
                        <div class="destaques wow fadeIn" data-wow-delay="0.3s">
                            <div class="caixaprincipal" id="titulo_curiosidade">
                                <i class="fa-solid fa-magnifying-glass"></i>
                                CURIOSIDADE
                            </div>
                            <div class="content_box" id="conteudo_curiosidade">
                                <p>Você já se deu conta destes efeitos e de como o <i>design</i> tem responsabilidade sobre isto? Em outro exemplo recente, o documentário “O Dilema das Redes” expõe uma opinião sobre a manipulação sofrida pelos usuários das redes sociais com o objetivo de propiciar ganhos financeiros às empresas, analisando o papel das redes sociais e os danos que elas causam à sociedade.</p>
                            </div>
                        </div>

                        <p class="wow fadeIn" data-wow-delay="0.3s">
                            Outro ponto importante sobre a natureza da interação é como a comunicação é estabelecida com os usuários. A UNESCO apresentou em 2019 um documento intitulado como <i>“I'd blush if I could"</i> (WEST et al., 2019). O título da publicação toma emprestado o nome da resposta dada por Siri, a assistente de voz feminina usada nos iPhones, quando um usuário dizia a 'ela' um insulto de gênero, e a resposta era “Eu ficaria envergonhada se pudesse”. De acordo com o manual, essa resposta apresenta submissão da assistente em face ao abuso. Apesar de já ter sido corrigida, essa situação fornece uma ilustração poderosa dos preconceitos de gênero codificados em produtos de tecnologia, difundidos no setor de tecnologia e aparentes na educação de habilidades digitais.
                        </p>

                        <br>

                        <div class="apresentacao">
                            <div>
                                <!-- IMAGEM NO SITE  -->

                                <div class="text-center img-01 wow zoomIn">
                                    <p class="TituloFigura FonteMenor text-secondary p-2"><strong>Figura 05:</strong>
                                        Documento da UNESCO sobre gêneros em sistemas computacionais</p>
                                    <div class="zoom">
                                        <a href="imgs/figura05.png" data-bs-toggle="modal" data-bs-target="#Imagem05">
                                            <img class="w-50" src="imgs/figura05.png" alt="Documento da UNESCO sobre gêneros em sistemas computacionais" id="img-1">
                                        </a>
                                    </div>
                                    <p class="FonteFigura FonteMenor text-secondary"><strong>Fonte: </strong>UNESCO.</p>
                                </div>

                                <!-- Imagem - MODAL-->
                                <div class="modal fade text-center" id="Imagem05" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg d-flex justify-content-center flex-column">
                                        <div class="modal-content w-75">
                                            <img class="img-fluid" src="imgs/figura05.png" alt="Documento da UNESCO sobre gêneros em sistemas computacionais">
                                        </div>
                                        <div class="modal-footer w-75 bg-light justify-content-center">
                                            <p class="text-secondary"><strong>Fonte: </strong>UNESCO.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Imagem - End-->

                                <!-- FIM DA IMAGEM NO SITE  -->
                            </div>
                            <div class="d-flex align-items-center">
                                <p class="wow fadeIn" data-wow-delay="0.3s">
                                    Na área da comunicação com sistemas, o “Manual para uso não sexista da linguagem”, do Governo do Rio Grande do Sul, levanta questões sobre o uso da linguagem e expõe soluções práticas e aplicadas a textos para uma comunicação mais apropriada. Esses conceitos surgem em áreas distintas e devem ser incorporados ao <i>design</i> de sistemas. O efeito dessa evolução pode ser visto como o que a plataforma GitHub realizou ao substituir termos considerados,
                                    racistas, como '<i>master</i>' (mestre) e '<i>slave</i>' (escravo) por alternativas como 'principal', 'padrão', 'primário' e 'secundário'.
                                </p>

                            </div>
                        </div>



                        <p class="wow fadeIn" data-wow-delay="0.3s">
                            Há muita responsabilidade no <i>design</i> de sistemas, mas também é fato que essa responsabilidade se altera com o tempo. Cada geração resolve novos problemas e se depara com outros. A exemplo disso, vejam na <strong>Figura 06</strong> a evolução da embalagem de um chocolate voltado para crianças que teve em sua primeira versão em 1959 uma imitação aos cigarros, que eram comuns na época e representavam status e elegância.
                        </p>

                        <div class="text-center img-01 wow zoomIn">
                            <p class="TituloFigura FonteMenor text-secondary p-2"><strong>Figura 06:</strong>
                                Evolução das embalagens do produto Reprodução.</p>
                            <div class="zoom">
                                <a href="imgs/figura06.png" data-bs-toggle="modal" data-bs-target="#Imagem06">
                                    <img src="imgs/figura06.png" alt="Evolução das embalagens do produto Reprodução" id="img-1">
                                </a>
                            </div>
                            <p class="FonteFigura FonteMenor text-secondary"><strong>Fonte: </strong>Veja, SP, 2017.</p>
                        </div>

                        <!-- Imagem - MODAL-->
                        <div class="modal fade text-center" id="Imagem06" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg d-flex justify-content-center flex-column">
                                <div class="modal-content w-75">
                                    <img class="img-fluid" src="imgs/figura06.png" alt="Evolução das embalagens do produto Reprodução">
                                </div>
                                <div class="modal-footer w-75 bg-light justify-content-center">
                                    <p class="text-secondary"><strong>Fonte: </strong>Veja, SP, 2017.</p>
                                </div>
                            </div>
                        </div>
                        <!-- Imagem - End-->

                        <!-- FIM DA IMAGEM NO SITE  -->

                        <br>

                        <p class="wow fadeIn" data-wow-delay="0.3s">
                            Olhando para o futuro, nos deparamos com a responsabilidade de planejar sistemas com tecnologias como inteligência artificial. De acordo com o artigo científico de Bostrom e Yudkowsky (2014) <i>“The Cambridge handbook of artificial intelligence”</i>, a possibilidade de criar máquinas pensantes levanta uma série de questões éticas. Essas questões se referem tanto a garantir que tais máquinas não prejudiquem os humanos e outros seres moralmente relevantes, quanto ao status moral das próprias máquinas. Para essas tecnologias mais avançadas e complexas, se espera critérios de aceitação como responsabilidade, transparência e auditabilidade.
                        </p>

                        <!-- CAIXA DE TEXTO FIQUE ATENTO -->
                        <div class="destaques wow fadeIn" data-wow-delay="0.3s">
                            <div class="caixaprincipal" id="titulo_fiqueatento">
                                <i class="fa-solid fa-person-circle-exclamation"></i>
                                FIQUE ATENTO
                            </div>
                            <div class="content_box" id="conteudo_fiqueatento">
                                <p>Todo produto é de responsabilidade de quem o planeja (<i>designer</i>), de quem o constrói e de quem o utiliza.</p>
                            </div>
                        </div>

                        <h4 class="subsubtopico">01.1.2 - Contexto de Uso</h4>

                        <p class="wow fadeIn" data-wow-delay="0.3s">
                            O contexto de uso envolve investigar a interação de pessoas com sistemas levando em conta a cultura, a sociedade, a organização e a linguagem. Assim como lidamos com os fenômenos da natureza, no contexto de uso entendemos as diferenças entre como as pessoas utilizam os sistemas computacionais e os dispositivos de acordo com seu contexto de uso.
                        </p>

                        <p class="wow fadeIn" data-wow-delay="0.3s">
                            Um problema comum no desenvolvimento de sistemas está ligado ao fato de que a equipe que desenvolve não está no contexto de uso do sistema e pode inferir de forma errada como alguém interagirá com o sistema. A <strong>Figura 07</strong> mostra como estes mundos podem ser distintos.
                        </p><br>

                        <div class="container text-center">
                            <div class="row">
                                <div class="col">
                                    <!-- IMAGEM NO SITE  -->

                                    <div class="text-center img-01 wow zoomIn">
                                        <p class="TituloFigura FonteMenor text-secondary p-2"><strong>Figura 07:</strong>
                                            Contexto de uso</p>
                                        <div class="zoom">
                                            <a href="imgs/figura07.png" data-bs-toggle="modal" data-bs-target="#Imagem07">
                                                <img src="imgs/figura07.png" alt="Contexto de uso" id="img-1">
                                            </a>
                                        </div>
                                        <p class="FonteFigura FonteMenor text-secondary"><strong>Fonte: </strong>Vídeo do Instituto Socioambiental.</p>
                                    </div>

                                    <!-- Imagem - MODAL-->
                                    <div class="modal fade text-center" id="Imagem07" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered modal-lg d-flex justify-content-center flex-column">
                                            <div class="modal-content w-75">
                                                <img class="img-fluid" src="imgs/figura07.png" alt="Contexto de uso">
                                            </div>
                                            <div class="modal-footer w-75 bg-light justify-content-center">
                                                <p class="text-secondary"><strong>Fonte: </strong>Vídeo do Instituto Socioambiental.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Imagem - End-->

                                    <!-- FIM DA IMAGEM NO SITE  -->
                                </div>
                                <div class="col">
                                    <!-- IMAGEM NO SITE  -->

                                    <div class="text-center img-01 wow zoomIn">
                                        <p class="TituloFigura FonteMenor text-secondary p-2"><strong>Figura 7.1:</strong>
                                            Contexto de uso </p>
                                        <div class="zoom">
                                            <a href="imgs/figura07-1.png" data-bs-toggle="modal" data-bs-target="#Imagem07-1">
                                                <img src="imgs/figura07-1.png" alt="Contexto de uso" id="img-1">
                                            </a>
                                        </div>
                                        <p class="FonteFigura FonteMenor text-secondary"><strong>Fonte: </strong>Pexels.</p>
                                    </div>

                                    <!-- Imagem - MODAL-->
                                    <div class="modal fade text-center" id="Imagem07-1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered modal-lg d-flex justify-content-center flex-column">
                                            <div class="modal-content w-75">
                                                <img class="img-fluid" src="imgs/Figura07-1.png" alt="Contexto de uso">
                                            </div>
                                            <div class="modal-footer w-75 bg-light justify-content-center">
                                                <p class="text-secondary"><strong>Fonte: </strong>Pexels.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Imagem - End-->

                                    <!-- FIM DA IMAGEM NO SITE  -->
                                </div>
                            </div>
                        </div>

                        <p class="wow fadeIn" data-wow-delay="0.3s">
                            De acordo com o contexto, um sistema pode utilizar uma linguagem mais formal ou menos formal. Esta também é uma decisão de <i>design</i>. Veja na <strong>Figura 08</strong> três exemplos de recursos de linguagem: (1) uma linguagem informal para um site de intercâmbio, (2) uma linguagem mais amigável para informar um erro no Google Chrome e (3) uma linguagem conversacional para a ferramenta <i>Paper</i> do <i>Dropbox</i>. Veja que cada exemplo está dentro de um contexto de uso e possivelmente a escolha das palavras foi uma decisão tomada no momento do planejamento do sistema. Isto pode acontecer para se aproximar do público-alvo, como no primeiro exemplo da agência de intercâmbio ao apresentar uma linguagem mais jovem, ou para facilitar o uso, como no exemplo do <i>Paper</i>.
                        </p>

                        <!-- IMAGEM NO SITE  -->

                        <div class="text-center img-01 wow zoomIn">
                            <p class="TituloFigura FonteMenor text-secondary p-2"><strong>Figura 08, 08.1 e 08.2:</strong>
                                Linguagens e contextos de uso.</p>
                            <div class="zoom">
                                <a href="imgs/figura08.png" data-bs-toggle="modal" data-bs-target="#Imagem08">
                                    <img src="imgs/figura08.png" alt="Linguagens e contextos de uso" id="img-1">
                                </a>
                            </div>

                        </div>

                        <!-- Imagem - MODAL-->
                        <div class="modal fade text-center" id="Imagem08" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg d-flex justify-content-center flex-column">
                                <div class="modal-content w-75">
                                    <img class="img-fluid" src="imgs/Figura08.png" alt="Linguagens e contextos de uso">
                                </div>
                                <div class="modal-footer w-75 bg-light justify-content-center">
                                    <p class="text-secondary"><strong>Fonte: </strong>Worldpackers</p>
                                </div>
                            </div>
                        </div>
                        <!-- Imagem - End-->

                        <!-- FIM DA IMAGEM NO SITE  -->
                        <!-- IMAGEM NO SITE  -->

                        <div class="text-center img-01 wow zoomIn">

                            <div class="zoom">
                                <a href="imgs/figura08-1.png" data-bs-toggle="modal" data-bs-target="#Imagem08-1">
                                    <img src="imgs/figura08-1.png" alt="Linguagens e contextos de uso" id="img-1">
                                </a>
                            </div>

                        </div>

                        <!-- Imagem - MODAL-->
                        <div class="modal fade text-center" id="Imagem08-1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg d-flex justify-content-center flex-column">
                                <div class="modal-content w-75">
                                    <img class="img-fluid" src="imgs/Figura08-1.png" alt="Linguagens e contextos de uso">
                                </div>
                                <div class="modal-footer w-75 bg-light justify-content-center">
                                    <p class="text-secondary"><strong>Fonte: </strong>Google Chrome</p>
                                </div>
                            </div>
                        </div>
                        <!-- Imagem - End-->

                        <!-- FIM DA IMAGEM NO SITE  -->
                        <!-- IMAGEM NO SITE  -->

                        <div class="text-center img-01 wow zoomIn">

                            <div class="zoom">
                                <a href="imgs/figura08-2.png" data-bs-toggle="modal" data-bs-target="#Imagem08-2">
                                    <img src="imgs/figura08-2.png" alt="Linguagens e contextos de uso" id="img-1">
                                </a>
                            </div>
                            <p class="FonteFigura FonteMenor text-secondary"><strong>Fonte: </strong>(1) Worldpackers e (2) Google Chrome e (3)Dropbox Paper</p>
                        </div>

                        <!-- Imagem - MODAL-->
                        <div class="modal fade text-center" id="Imagem08-2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg d-flex justify-content-center flex-column">
                                <div class="modal-content w-75">
                                    <img class="img-fluid" src="imgs/Figura08-2.png" alt="Linguagens e contextos de uso">
                                </div>
                                <div class="modal-footer w-75 bg-light justify-content-center">
                                    <p class="text-secondary"><strong>Fonte: </strong>Dropbox Paper</p>
                                </div>
                            </div>
                        </div>
                        <!-- Imagem - End-->

                        <!-- FIM DA IMAGEM NO SITE  -->

                        <br>

                        <p class="wow fadeIn" data-wow-delay="0.3s">
                            O contexto de uso pode destacar uma cultura, como mostra o artigo científico “<i>Kawaii</i>/ Interação fofa", do inglês “<i>Kawaii/Cute Interactive Media</i>”, (CHEOK, 2010). Se você já teve contato com cultura japonesa possivelmente já ouviu falar sobre o termo <i>Kawaii</i>. De acordo com o artigo, a aplicação de elementos considerados fofos em sistemas interativos têm raízes na estética de muitos elementos históricos e culturais, como a cultura japonesa <i>Kawaii</i>. Nesse estudo o autor percebeu que há uma correlação entre o que se percebe como atraente e bonito em interfaces com a presença de elementos fofos. Essa é uma forma de mostrar a ligação do <i>design</i> à cultura.
                        </p>

                        <!-- CAIXA DE TEXTO CURIOSIDADE -->
                        <div class="destaques wow fadeIn" data-wow-delay="0.3s">
                            <div class="caixaprincipal" id="titulo_curiosidade">
                                <i class="fa-solid fa-magnifying-glass"></i>
                                CURIOSIDADE
                            </div>
                            <div class="content_box" id="conteudo_curiosidade">
                                <p>A palavra <i>Kawaii</i> surgiu em 1970 na cultura japonesa e pode ser considerada um neologismo. O <i>kanji</i> (可爱) utilizado para representar o termo é semelhante ao que usam na China. <i>Kawaii</i> é uma palavra japonesa com vários significados por não ter uma tradução exata. Ela pode ser usada para adjetivos como fofo, adorável, amável, doce, doçura e etc. A palavra é usada principalmente pelos otakus, os fãs de anime e cultura pop japonesa, como uma forma de elogio.</p>
                            </div>
                        </div>

                        <h4 class="subsubtopico">01.1.3 - Características Humanas</h4>

                        <p class="wow fadeIn" data-wow-delay="0.3s">
                            As características humanas envolvem investigar a forma como as pessoas se comunicam e interagem entre si e com outros artefatos utilizando visão, audição, processos cognitivos e outros fenômenos humanos para compreensão. A interação com qualquer artefato novo, principalmente os sistemas computacionais interativos, que lidam com informações, requer capacidade cognitiva para processar informações e aprender a utilizá-los (<a class="link_tooltip" data-bs-custom-class="custom-tooltip" data-bs-toggle="tooltip" data-bs-title="Professora associada do Departamento de Informática da PUC-Rio, Simone Diniz Junqueira Barbosa atua principalmente na área de Interação Humano-Computador. Pesquisadora nível 2 do CNPq, seus interesses de pesquisa incluem atualmente: exploração e análise visual enarrativa de dados; engenharia semiótica; design de sistemas interativos com base em modelos; e meios de aumentar a qualidade de uso de sistemas interativos em diversos domínios, através de adaptação, mecanismos de analogia e outras técnicas de inteligência artificial.">BARBOSA</a>; <a class="link_tooltip" data-bs-custom-class="custom-tooltip" data-bs-toggle="tooltip" data-bs-title="Possui graduação em Ciência da Computação pela Universidade Federal Fluminense(2003), mestrado em Informática pela Pontifícia Universidade Católica do Rio de Janeiro(2005), doutorado em Informática pela Pontifícia Universidade Católica do Rio de Janeiro(2010), ensino-fundamental-primeiro-grau pela Escola Municipal Rachide da Glória Salim Saquer(1995) e ensino-medio-segundo-grau pelo Colégio Estadual Aurelino Leal(1998).">SILVA</a>, 2010).
                        </p>
                        <p class="wow fadeIn" data-wow-delay="0.3s">
                            Voltando ao exemplo inicial deste curso, do rádio <i>bluetooth</i>, podemos relembrar que houve uma expectativa de funcionalidade para o elemento da interface que parecia um botão comum em outros dispositivos semelhantes. Isto é explicado pela nossa tendência a repetir interações cotidianas.
                        </p>

                        <p class="wow fadeIn" data-wow-delay="0.3s">
                            É possível aproveitar essas capacidades do usuário respeitando suas limitações. Por exemplo, algumas interfaces de sistemas que tocam músicas apresentam elementos semelhantes aos botões de volume de dispositivos físicos. Esse estilo de <i>design</i> é chamado de <strong>skeumorfismo</strong>.
                        </p><br>

                        <div class="container text-center">
                            <div class="row">
                                <div class="col">
                                    <!-- IMAGEM NO SITE  -->

                                    <div class="text-center img-01 wow zoomIn">
                                        <p class="TituloFigura FonteMenor text-secondary p-2"><strong>Figura 09:</strong>
                                            Contexto de uso.</p>
                                        <div class="zoom">
                                            <a href="imgs/figura09.png" data-bs-toggle="modal" data-bs-target="#Imagem09">
                                                <img class="w-75" src="imgs/figura09.png" alt="Contexto de uso" id="img-1">
                                            </a>
                                        </div>
                                        <p class="FonteFigura FonteMenor text-secondary"><strong>Fonte: </strong>Google.</p>
                                    </div>

                                    <!-- Imagem - MODAL-->
                                    <div class="modal fade text-center" id="Imagem09" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered modal-lg d-flex justify-content-center flex-column">
                                            <div class="modal-content w-75">
                                                <img class="img-fluid" src="imgs/Figura09.png" alt="Contexto de uso">
                                            </div>
                                            <div class="modal-footer w-75 bg-light justify-content-center">
                                                <p class="text-secondary"><strong>Fonte: </strong>Google.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Imagem - End-->

                                    <!-- FIM DA IMAGEM NO SITE  -->
                                </div>
                                <div class="col">
                                    <!-- IMAGEM NO SITE  -->

                                    <div class="text-center img-01 wow zoomIn">
                                        <p class="TituloFigura FonteMenor text-secondary p-2"><strong>Figura 09.1:</strong>
                                            Contexto de Desenvolvimento.</p>
                                        <div class="zoom">
                                            <a href="imgs/figura09-1.png" data-bs-toggle="modal" data-bs-target="#Imagem09-1">
                                                <img src="imgs/figura09-1.png" alt="Contexto de Desenvolvimento" id="img-1">
                                            </a>
                                        </div>
                                        <p class="FonteFigura FonteMenor text-secondary"><strong>Fonte: </strong>Google.</p>
                                    </div>

                                    <!-- Imagem - MODAL-->
                                    <div class="modal fade text-center" id="Imagem09-1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered modal-lg d-flex justify-content-center flex-column">
                                            <div class="modal-content w-75">
                                                <img class="img-fluid" src="imgs/Figura09-1.png" alt="Contexto de Desenvolvimento">
                                            </div>
                                            <div class="modal-footer w-75 bg-light justify-content-center">
                                                <p class="text-secondary"><strong>Fonte: </strong>Google.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Imagem - End-->

                                    <!-- FIM DA IMAGEM NO SITE  -->
                                </div>
                            </div>
                        </div>


                        <!-- CAIXA DE TEXTO SAIBA MAIS -->
                        <div class="destaques wow fadeIn" data-wow-delay="0.3s">
                            <div class="caixaprincipal" id="titulo_saibamais">
                                <i class="fa-solid fa-plus"></i>
                                SAIBA MAIS
                            </div>
                            <div class="content_box" id="conteudo_saibamais">
                                <p><strong>Skeumorfismo</strong>, do grego, <i>skeuos</i>, recipiente ou ferramenta; e <i>morphe</i>, forma. O termo se refere a truques visuais ou ao uso de talhes e ornamentações para imitar outros materiais e formas físicas. A estratégia existe pelo menos desde a GUI (Interface Gráfica do Usuário) dos computadores da <i>Apple</i>, de 1984, que introduziu o conceito de área de trabalho com ícones semelhantes às pastas e pedaços de papel. O recurso se mostrou extremamente útil naquela época, pois tais interfaces gráficas constituíam conceitos estranhos para a maioria dos usuários, de modo que o uso desses itens familiares representava um auxílio significativo para a compreensão do seu funcionamento e operação (DE SOUSA; GRIMALDI, 2015).</p>
                            </div>
                        </div>

                        <br>

                        <div class="apresentacao">
                            <div>
                                <!-- IMAGEM NO SITE  -->

                                <div class="text-center img-01 wow zoomIn">
                                    <p class="TituloFigura FonteMenor text-secondary p-2"><strong>Figura 10:</strong>
                                        Sistema - Interface - Usuário.</p>
                                    <div class="zoom">
                                        <a href="imgs/figura10.png" data-bs-toggle="modal" data-bs-target="#Imagem10">
                                            <img class="w-75" src="imgs/figura10.png" alt="Sistema - Interface - Usuário" id="img-1">
                                        </a>
                                    </div>
                                    <p class="FonteFigura FonteMenor text-secondary"><strong>Fonte: </strong>Blog Thiago Esser</p>
                                </div>

                                <!-- Imagem - MODAL-->
                                <div class="modal fade text-center" id="Imagem10" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg d-flex justify-content-center flex-column">
                                        <div class="modal-content w-75">
                                            <img class="img-fluid" src="imgs/Figura10.png" alt="Sistema - Interface - Usuário">
                                        </div>
                                        <div class="modal-footer w-75 bg-light justify-content-center">
                                            <p class="text-secondary"><strong>Fonte: </strong>Blog Thiago Esser</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Imagem - End-->

                                <!-- FIM DA IMAGEM NO SITE  -->
                            </div>
                            <div class="d-flex align-items-center">
                                <p class="wow fadeIn" data-wow-delay="0.3s">
                                    Para compreender as características humanas envolvidas, é necessário separar os elementos principais da interação: o sistema, a interface e o usuário (<strong>Figura 10</strong>). A interface compreende toda a opção do sistema com a qual o usuário mantém contato físico (motor ou perceptivo) ou conceitual durante a interação (MORAN, 1996). A interface é muitas vezes confundida com o próprio sistema, mas o sistema pode envolver outras partes de uma arquitetura que é invisível ou inacessível ao usuário. Entre o usuário e o sistema nós temos os processos de ação e de interpretação por meio da interface.
                                </p>
                            </div>
                        </div>

                        <!-- VÍDEO DO YOUTUBE -->
                        <div class="video wow fadeInDown">
                            <div>
                                <iframe class="iframe" height="300" src="https://www.youtube.com/embed/PfMCYFZ4FIc?si=Tz7CtuujOMRqv9Ww" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                            </div>
                            <div>
                                <div class="titulo_video">
                                    <i>Pet-commerce</i>
                                </div>

                                <div class="descricao">
                                    <p>Caso queira expandir um pouco mais os conceitos de usuário e interface, veja o vídeo de um comercial de um Pet-commerce.</p>
                                </div>
                            </div>
                        </div>

                        <div class="apresentacao">
                            <div>
                                <!-- IMAGEM NO SITE  -->

                                <div class="text-center img-01 wow zoomIn">
                                    <p class="TituloFigura FonteMenor text-secondary p-2"><strong>Figura 11:</strong>
                                        Modelo mental de leitura no iPad.</p>
                                    <div class="zoom">
                                        <a href="imgs/figura11.png" data-bs-toggle="modal" data-bs-target="#Imagem11">
                                            <img src="imgs/figura11.png" alt="Modelo mental de leitura no iPad" id="img-1">
                                        </a>
                                    </div>
                                    <p class="FonteFigura FonteMenor text-secondary"><strong>Fonte: </strong>UX Mag</p>
                                </div>

                                <!-- Imagem - MODAL-->
                                <div class="modal fade text-center" id="Imagem11" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg d-flex justify-content-center flex-column">
                                        <div class="modal-content w-75">
                                            <img class="img-fluid" src="imgs/Figura11.png" alt="Modelo mental de leitura no iPad">
                                        </div>
                                        <div class="modal-footer w-75 bg-light justify-content-center">
                                            <p class="text-secondary"><strong>Fonte: </strong>UX Mag</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Imagem - End-->

                                <!-- FIM DA IMAGEM NO SITE  -->
                            </div>
                            <div class="d-flex align-items-center">
                                <p class="wow fadeIn" data-wow-delay="0.3s">
                                    Imagine agora que você nunca viu um <i>iPad</i>, mas acabei de lhe entregar um e dizer que você pode ler livros nele. Antes de ligar o <i>iPad</i>, antes de usá-lo, você tem um modelo em sua cabeça de como será a leitura de um livro no <i>iPad</i>. Você tem suposições sobre como o livro será apresentado na tela, como será possível interagir, como passar uma página. Você tem um <strong>“modelo mental”</strong> de leitura de um livro no <i>iPad</i>, mesmo que nunca o tenha feito antes (<strong>Figura 11</strong>).
                                    <br><br>
                                    A aparência e o comportamento desse modelo mental na sua cabeça depende de muitas coisas: se você já usou um <i>iPad</i> antes, seu modelo mental de ler um livro em um <i>iPad</i> será diferente do de alguém que nunca usou um. Assim que você utilizar o <i>iPad</i> para ler algum livro, qualquer modelo mental que você tinha em sua cabeça antes começará a mudar e se ajustar para refletir sua experiência (WEINSCHENK, 2010).
                                </p>
                            </div>
                        </div>

                        <!-- CAIXA DE TEXTO SAIBA MAIS -->
                        <div class="destaques wow fadeIn" data-wow-delay="0.3s">
                            <div class="caixaprincipal" id="titulo_saibamais">
                                <i class="fa-solid fa-plus"></i>
                                SAIBA MAIS
                            </div>
                            <div class="content_box" id="conteudo_saibamais">
                                <p>Modelo mental é a representação do processo de <strong>pensamento de alguém para saber como algo funciona</strong> (ou seja, a compreensão da pessoa sobre o mundo que a envolve). Os modelos mentais são <strong>baseados em informações incompletas, experiências passadas e até mesmo percepções intuitivas.</strong> Eles ajudam a moldar ações e comportamentos, influenciando naquilo que as pessoas devem prestar atenção em situações complicadas e como elas abordam e resolvem os problemas (CAREY, 1986).</p>
                            </div>
                        </div>

                        <p class="wow fadeIn" data-wow-delay="0.3s">
                            Para entender por que os modelos mentais são tão importantes para projetar interfaces de usuário, você também precisa entender o que é um modelo conceitual. Um <strong>modelo conceitual</strong> é o modelo real que é fornecido ao usuário por meio da interface do produto (WEINSCHENK, 2010). No exemplo da leitura do livro no <i>iPad</i>, você tem um modelo mental sobre como será a leitura de um livro no dispositivo, como funcionará e o que você pode fazer com o dispositivo pela interface. Mas quando você senta com o <i>iPad</i>, o “sistema” (o <i>iPad</i>) exibe o que o modelo conceitual do aplicativo de livro realmente é. <strong>O modelo conceitual é formado por telas, botões e ações que acontecem independentemente do que você esperava</strong> (WEINSCHENK, 2010). A interface real representa o modelo conceitual. Alguém projetou uma interface de usuário e essa interface está comunicando a você o modelo conceitual do produto.
                        </p><br>

                        <p class="wow fadeIn" data-wow-delay="0.3s">
                            Encerramos esta sessão de características humanas com dois conceitos importantes para <i>design</i> UX: modelos conceituais e modelos mentais. O <i>designer</i>, ou quem tenha esse papel na equipe, é um elo entre os dois modelos. Com técnicas apropriadas e uma visão ampla dos projetos, ele é capaz de reduzir a distância entre o que se espera (modelo mental) do que se projeta e constrói (modelo conceitual).
                        </p>


                        <!-- VÍDEO DO YOUTUBE -->
                        <div class="video wow fadeInDown">
                            <div class="d-flex align-items-center">
                                <iframe class="iframe" height="300" src="https://player.vimeo.com/video/128873380?h=61e2314396&color=ffffff&title=0&byline=0&portrait=0" width="640" height="360" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
                            </div>
                            <div>
                                <div class="titulo_video">
                                    <i>Uninvited Guests</i>
                                </div>

                                <div class="descricao">
                                    <p>Este vídeo Uninvited Guests - "Convidados Não Convidados" é um curta-metragem que explora os atritos entre um homem idoso e sua casa inteligente.
                                        <br><br>
                                        Thomas, de 70 anos, vive sozinho depois que sua esposa morreu no ano passado. Seus filhos lhe enviam dispositivos inteligentes para rastrear e monitorar sua dieta, saúde e sono à distância. Mas Thomas sempre foi extremamente independente, feliz por viver numa confusão organizada. Ele luta com a ordem e as regras que lhe são impostas pelos objetos que pretendem facilitar sua vida. Num mundo onde os “objetos inteligentes” serão cada vez mais utilizados para prestar cuidados à distância, como iremos conviver com estes hóspedes indesejados?
                                        <br><br>
                                        Vale a pena conferir!
                                    </p>
                                </div>
                            </div>
                        </div>


                        <h4 class="subsubtopico">01.1.4 - Sistemas Computacionais</h4>

                        <div class="apresentacao">
                            <div>
                                <!-- IMAGEM NO SITE  -->

                                <div class="text-center img-01 wow zoomIn">
                                    <p class="TituloFigura FonteMenor text-secondary p-2"><strong>Figura 12:</strong>
                                        ARTRADE.</p>
                                    <div class="zoom">
                                        <a href="imgs/figura12.png" data-bs-toggle="modal" data-bs-target="#Imagem12">
                                            <img class="w-75" src="imgs/figura12.png" alt="ARTRADE" id="img-1">
                                        </a>
                                    </div>
                                    <p class="FonteFigura FonteMenor text-secondary"><strong>Fonte: </strong>LEAD</p>
                                </div>

                                <!-- Imagem - MODAL-->
                                <div class="modal fade text-center" id="Imagem12" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg d-flex justify-content-center flex-column">
                                        <div class="modal-content w-75">
                                            <img class="img-fluid" src="imgs/Figura12.png" alt="ARTRADE">
                                        </div>
                                        <div class="modal-footer w-75 bg-light justify-content-center">
                                            <p class="text-secondary"><strong>Fonte: </strong>LEAD</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Imagem - End-->

                                <!-- FIM DA IMAGEM NO SITE  -->

                            </div>
                            <div class="d-flex align-items-center">
                                <p class="wow fadeIn" data-wow-delay="0.3s">
                                    Sistemas de computadores envolvem utilizar arquiteturas, técnicas e interfaces buscando construir sistemas que favoreçam a experiência de uso. É possível aproveitar modelos conceituais para entregar sistemas mais adequados aos usuários. Diversas tecnologias e dispositivos têm sido desenvolvidos para permitir e facilitar a interação com pessoas (<a class="link_tooltip" data-bs-custom-class="custom-tooltip" data-bs-toggle="tooltip" data-bs-title="Professora associada do Departamento de Informática da PUC-Rio, Simone Diniz Junqueira Barbosa atua principalmente na área de Interação Humano-Computador. Pesquisadora nível 2 do CNPq, seus interesses de pesquisa incluem atualmente: exploração e análise visual enarrativa de dados; engenharia semiótica; design de sistemas interativos com base em modelos; e meios de aumentar a qualidade de uso de sistemas interativos em diversos domínios, através de adaptação, mecanismos de analogia e outras técnicas de inteligência artificial.">BARBOSA</a>; <a class="link_tooltip" data-bs-custom-class="custom-tooltip" data-bs-toggle="tooltip" data-bs-title="Possui graduação em Ciência da Computação pela Universidade Federal Fluminense(2003), mestrado em Informática pela Pontifícia Universidade Católica do Rio de Janeiro(2005), doutorado em Informática pela Pontifícia Universidade Católica do Rio de Janeiro(2010), ensino-fundamental-primeiro-grau pela Escola Municipal Rachide da Glória Salim Saquer(1995) e ensino-medio-segundo-grau pelo Colégio Estadual Aurelino Leal(1998).">SILVA</a>, 2010).
<br><br>
                                    O uso de técnicas de Computação Gráfica e Inteligência Artificial podem beneficiar a interação com um sistema a partir do poder das tecnologias. Mas o que poderia de fato ser esse benefício? Em que áreas podemos melhorar com tecnologias mais avançadas?
                                </p>
                            </div>
                        </div>



                        <p class="wow fadeIn" data-wow-delay="0.3s">
                            O LEAD, Centro de Pesquisa, Desenvolvimento e Inovação Dell, por exemplo, é um local que explora conhecimento avançado em tecnologia para resolver problemas de acessibilidade. Um dos projetos de pesquisa que desenvolvem é o ARTRADE (<strong>Figura 12</strong>). O ARTRADE é uma aplicação <i>mobile</i>, para <i>smartphones</i>, que auxilia na montagem de <i>hardware</i>, ensinando os funcionários da fábrica da Dell a como montar peças completas de dispositivos da marca. Este projeto utiliza óculos de realidade aumentada e é acessível para pessoas com deficiência auditiva.
                        </p><br>


                        <h4 class="subsubtopico">01.1.5 - Processo de Desenvolvimento</h4>

                        <div class="apresentacao">
                            <div class="d-flex align-items-center center">
                                <div>
                                    <!-- IMAGEM NO SITE  -->

                                    <div class="text-center img-01 wow zoomIn">
                                        <p class="TituloFigura FonteMenor text-secondary p-2"><strong>Figura 13:</strong>
                                            Prototipação.</p>
                                        <div class="zoom">
                                            <a href="imgs/figura13.png" data-bs-toggle="modal" data-bs-target="#Imagem13">
                                                <img height="300" width="800" src="imgs/figura13.png" alt="Prototipação" id="img-1">
                                            </a>
                                        </div>
                                        <p class="FonteFigura FonteMenor text-secondary"><strong>Fonte: </strong>Ironhack ux design.</p>
                                    </div>

                                    <!-- Imagem - MODAL-->
                                    <div class="modal fade text-center" id="Imagem13" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered modal-lg d-flex justify-content-center flex-column">
                                            <div class="modal-content w-75">
                                                <img class="img-fluid" src="imgs/Figura13.png" alt="Prototipação">
                                            </div>
                                            <div class="modal-footer w-75 bg-light justify-content-center">
                                                <p class="text-secondary"><strong>Fonte: </strong>Ironhack ux design.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Imagem - End-->

                                    <!-- FIM DA IMAGEM NO SITE  -->
                                </div>
                            </div>
                            <div class="d-flex align-items-center">
                                <p class="wow fadeIn" data-wow-delay="0.3s">
                                    O processo de desenvolvimento influencia na qualidade do produto final. É no processo de desenvolvimento que é possível aplicar abordagens de IHC, que podem ser métodos, técnicas e ferramentas de construção de interface e de avaliação. O processo de desenvolvimento pode incluir, por exemplo, uma análise de casos de sucesso e de insucesso de interfaces.
                                    <br><br>
                                    A prototipação é uma prática comum no processo de desenvolvimento. O <strong>protótipo</strong> é uma representação do sistema ou produto real de forma que seja possível imaginá-lo sem a necessidade de ser desenvolvido. É uma técnica utilizada para discutir, testar e documentar uma solução. É possível trabalhar com prototipação em vários níveis de fidelidade. A <strong>Figura 13</strong> apresenta protótipos que vão de um nível de fidelidade mais baixos, também conhecidos por <i>wireframes</i>, até níveis de fidelidade com a realidade mais altos, que podem ser feitos em <i>softwares</i> especializados, como <i>Adobe XD</i>, <i>Figma</i>, dentre outros.
                                </p>
                            </div>
                        </div>

                        <p class="wow fadeIn" data-wow-delay="0.3s">
                            No processo de desenvolvimento, devemos estabelecer qual nível de qualidade que se espera de um sistema ou produto. De acordo com <a class="link_tooltip" data-bs-custom-class="custom-tooltip" data-bs-toggle="tooltip" data-bs-title="Professora associada do Departamento de Informática da PUC-Rio, Simone Diniz Junqueira Barbosa atua principalmente na área de Interação Humano-Computador. Pesquisadora nível 2 do CNPq, seus interesses de pesquisa incluem atualmente: exploração e análise visual enarrativa de dados; engenharia semiótica; design de sistemas interativos com base em modelos; e meios de aumentar a qualidade de uso de sistemas interativos em diversos domínios, através de adaptação, mecanismos de analogia e outras técnicas de inteligência artificial.">Barbosa</a> e <a class="link_tooltip" data-bs-custom-class="custom-tooltip" data-bs-toggle="tooltip" data-bs-title="Possui graduação em Ciência da Computação pela Universidade Federal Fluminense(2003), mestrado em Informática pela Pontifícia Universidade Católica do Rio de Janeiro(2005), doutorado em Informática pela Pontifícia Universidade Católica do Rio de Janeiro(2010), ensino-fundamental-primeiro-grau pela Escola Municipal Rachide da Glória Salim Saquer(1995) e ensino-medio-segundo-grau pelo Colégio Estadual Aurelino Leal(1998).">Silva</a> (2010), os critérios de qualidade de uso enfatizam certas características da interação e da interface que as tornam adequadas aos efeitos esperados do uso do sistema. Os critérios de qualidade de uso são:
                        </p>

                        <!-- TIMELINE -->
                        <div class="timelinemae">
                            <div class="timeline01">
                                <div class="outer">
                                    <div class="card01">
                                        <div class="info wow animate__backInRight">
                                            <h3 class="title01"> 1 - Usabilidade:</h3>
                                            <p>Facilidade de aprendizado da interface e satisfação do usuário;</p>
                                        </div>
                                    </div>
                                    <div class="card01">
                                        <div class="info wow animate__backInLeft">
                                            <h3 class="title01"> 2 - Experiência do usuário:</h3>
                                            <p>Emoções e sentimentos do usuário;</p>
                                        </div>
                                    </div>
                                    <div class="card01">
                                        <div class="info wow animate__backInRight">
                                            <h3 class="title01"> 3 - Acessibilidade:</h3>
                                            <p>Remoção das barreiras que impedem os usuários de interagir com a interface;</p>
                                        </div>
                                    </div>
                                    <div class="card01">
                                        <div class="info wow animate__backInLeft">
                                            <h3 class="title01"> 4 - Comunicabilidade:</h3>
                                            <p>Comunicar ao usuário as intenções de <i>design</i> e a lógica que rege o comportamento da interface.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <p class="wow fadeIn" data-wow-delay="0.3s">
                            A parte do processo de desenvolvimento que engloba as práticas e conceitos de qualidade em IHC é chamada de “Processo de Design”. Existem diversas metodologias para processos de <i>design</i>, como <i>Design</i> de Interação (ROGER; PREECE, 2013), <i>Design Sprint</i>, <i>Lean UX</i> (GOTHELF, 2013), dentre outros.
                        </p>







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
        <a href="index.php" class="btn btn-outline-success" role="button" aria-pressed="true">
            <i class="fa-solid fa-chevron-left"></i> Voltar </a>
        <a href="topico02.php" class="btn btn-outline-success" role="button" aria-pressed="true">Próximo <i class="fa-solid fa-chevron-right"></i></a>
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