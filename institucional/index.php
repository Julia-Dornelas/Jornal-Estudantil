<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jornal Institucional</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>

<body>
    <!-- Cabeçalho -->
    <?php
    include("../includes/header.php");
    ?>
    <main>
        <!-- Título Principal -->
        <section class="titulo">
            <h2>Destaques da Semana</h2>
            <hr>
        </section>

        <!-- Carrossel de Imagens -->
        <section class="slider">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="https://virtualif.iftm.edu.br/sdsgov/controlador2/load.php?src=70bc3f31a0224b951f947010bf3a540d&tipo=noticia" class="d-block w-1832" alt="Primeiro Slide">
                        <a href="#">
                            <div class="carousel-caption">
                                <h5>Pró-reitores dos Institutos Federais de Minas Gerais discutem parcerias estratégicas e apresentam demandas à FAPEMIG</h5>
                            </div>
                        </a>
                    </div>
                    <div class="carousel-item">
                        <img src="https://virtualif.iftm.edu.br/sdsgov/controlador2/load.php?src=66ce48e5896519e38f6b01d4682c4dd7&tipo=noticia" class="d-block w-1832" alt="Segundo Slide">
                        <a href="#">
                            <div class="carousel-caption">
                                <h5 href="https://virtualif.iftm.edu.br/noticias/2024/11/14/roda-de-conversa-vozes-do-negocio-promove-troca-de-experiencias-entre-empresarios-e-alunos-do-iftm-campus-uberaba/">Roda de Conversa "Vozes do Negócio" promove troca de experiências entre empresários e alunos do IFTM Campus Uberaba</h5>
                            </div>
                        </a>
                    </div>
                    <div class="carousel-item">
                        <img src="https://virtualif.iftm.edu.br/sdsgov/controlador2/load.php?src=e950ff43690dc0bc1be6f1bd4eb37401&tipo=noticia" class="d-block w-1832" alt="Terceiro Slide">
                        <a href="#">
                            <div class="carousel-caption">
                                <h5>Oficina "Do currículo à contratação: Apresentação profissional ao mercado" prepara alunos de Conceição das Alagoas para o mundo do trabalho</h5>
                            </div>
                        </a>
                    </div>
                    <!-- Adicione mais slides conforme necessário -->
                </div>
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1" class=""></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2" class=""></li>
                    <!-- Indicadores adicionais aqui -->
                </ol>
            </div>

        </section>

        <!-- Seção de Destaques -->
        <section class="destaques">
            <div class="left">
                <div class="left-img">
                    <img src="https://virtualif.iftm.edu.br/sdsgov/controlador2/load.php?src=dee8614ee7263bbc88ab4d473e4f2e04&tipo=noticia" alt="imagem-1">
                    <div class="caption">
                        <h5>Gestores do IFTM participam de reunião do Colégio de Dirigentes presencial durante o IV Conerer</h5>
                    </div>
                </div>
                <div class="left-img">
                    <img src="https://virtualif.iftm.edu.br/sdsgov/controlador2/load.php?src=2e4b19e8875181d12e457b68406706a4&tipo=noticia" alt="imagem-2">
                    <div class="caption">
                        <h5>Conerer ressalta a rica herança quilombola e afro-brasileira da cidade de Paracatu</h5>
                    </div>
                </div>
            </div>
            <div class="ritgh">
                <div class="rigth-img">
                    <img src="https://virtualif.iftm.edu.br/sdsgov/controlador2/load.php?src=c21cbe72481b0ecf49e650f46fd4e039&tipo=noticia" alt="imagem-3">
                    <div class="caption">
                        <h5>CAPES abre 270 vagas para curso de inglês nos EUA</h5>
                    </div>
                </div>
                <div class="rigth-img">
                    <img src="https://virtualif.iftm.edu.br/sdsgov/controlador2/load.php?src=1b8d8d53f2e228a09fe8c285ab3e028b&tipo=noticia" alt="imagem-4">
                    <div class="caption">
                        <h5>Quarta edição do Conerer trouxe discussões relevantes sobre relações étnico-raciais em sua programação</h5>
                    </div>
                </div>
                <div class="rigth-img">
                    <img src="https://virtualif.iftm.edu.br/sdsgov/controlador2/load.php?src=fd8b3e806961f9f5e35d8f5f53db5b41&tipo=noticia" alt="imagem-5">
                    <div class="caption">
                        <h5>Exposições no IV Conerer encantaram os olhos e evidenciaram diversos aspectos da cultura afro-brasileira em Paracatu</h5>
                    </div>
                </div>
            </div>
        </section>
        <!-- ADS -->
        <section class="ads">
            <div>
                <img src="../img-institucional/ads/Novo Projeto.png" alt="anuncio">
            </div>
        </section>
        <!-- ADS-Fim -->

        <!-- Canais e Redes -->
        <section class="redes">
            <div class="redes-titulo">
                <button class="seta-esquerda" onclick="scrollLeft()">←</button>
                <h2>Canais e Redes</h2>
                <button class="seta-direita" onclick="scrollRight()">→</button>
            </div>
            <div class="redes-conteudo">
                <div class="icons-container" id="icons-container">
                    <!-- Substitua pelas imagens reais -->
                    <a href="#"><img src="https://yt3.googleusercontent.com/ytc/AIdro_mbK-vxMIx7mnoiYqqhT9JjqBHeiiIjil9r2GFL4qy81Q=s176-c-k-c0x00ffffff-no-rj-mo" alt="Logo 1"></a>
                    <a href="#"><img src="https://yt3.ggpht.com/0WYy9ySqxozhG1jjGPL0mAZcC5wWD7D3tPFqEzRREKPZfO_YRRkO2laEHAp5NCB2I4z_XfzVPQ=s176-c-k-c0x00ffffff-no-rj-mo" alt="Logo 1"></a>
                    <a href="#"><img src="https://yt3.ggpht.com/jrYlKQfjKvJeVOwKwFOFrsn1bOZT1u1_xcwg7PUQ6TFPn39p0FrEfHZ9unhlAv-t93Q_RmYHsg=s176-c-k-c0x00ffffff-no-rj-mo" alt="Logo 1"></a>
                    <a href="#"><img src="https://yt3.googleusercontent.com/ytc/AIdro_nS0TF-uGIZksEUVQ8DkdT9vAOgSLW1MzUvM2ovjQJt3Q=s176-c-k-c0x00ffffff-no-rj-mo" alt="Logo 1"></a>
                    <a href="#"><img src="https://yt3.ggpht.com/ialqlyjQtiOXWwE41eeqS1gJKjLbc9rqaEk3iZC0zVlrmKnszCcfuzwB-T1vK75FzwGYG250-A=s176-c-k-c0x00ffffff-no-rj-mo" alt="Logo 1"></a>
                    <a href="#"><img src="https://yt3.ggpht.com/sOqEYE5aAtGXGaHO5vTCOFHA2h8GDDZ1FxuhpR8mlUBPwUxZlgfXDPVyckz2UMGPksBgYBlMmK0=s176-c-k-c0x00ffffff-no-rj-mo" alt="Logo 1"></a>
                    <a href="#"><img src="https://yt3.googleusercontent.com/ytc/AIdro_mGCnVyegZc6-SoXzSOFI4VEv6kldQwXuLj5yvFAVhn-w=s176-c-k-c0x00ffffff-no-rj-mo" alt="Logo 1"></a>
                    <a href="#"><img src="https://yt3.googleusercontent.com/ytc/AIdro_kKdfr8n5Pw1xoBaQHd8xbpiU11bC1NB8OGw-0MGa8D5w=s176-c-k-c0x00ffffff-no-rj-mo" alt="Logo 1"></a>
                    <a href="#"><img src="https://yt3.googleusercontent.com/ytc/AIdro_mnZj15Hxx3yaO2W-Rs3lF0S8flGDVNhmn7NDxrfCzK2w=s176-c-k-c0x00ffffff-no-rj-mo" alt="Logo 1"></a>
                    <a href="#"><img src="https://yt3.googleusercontent.com/ytc/AIdro_m2zFvimL5WKhc6ezE1rHsvcQWhS6OIMgoYQaZZtacdXw=s176-c-k-c0x00ffffff-no-rj-mo" alt="Logo 1"></a>
                    <a href="#"><img src="https://yt3.googleusercontent.com/ytc/AIdro_ky1_uYsmsD9xoLou14twc-ZZ8ienLS7wvgx3n_O6RzA60=s176-c-k-c0x00ffffff-no-rj-mo" alt="Logo 1"></a>
                    <a href="#"><img src="https://yt3.ggpht.com/HVwQMCY9Z3KRbKKZ67wPibBhIb4OYZZEYzv9k-2QsAXTvH8eJqIx2Ybe47zyTG0NTdnANDKf=s176-c-k-c0x00ffffff-no-rj-mo" alt="Logo 1"></a>
                    <a href="#"><img src="https://yt3.googleusercontent.com/ytc/AIdro_kLNVEtpKhUE0nEgJYZA6-nmlh4nOPYoLodKfspayv3VA=s176-c-k-c0x00ffffff-no-rj-mo" alt="Logo 1"></a>
                    <a href="#"><img src="https://yt3.ggpht.com/yxVqrHtjlxvFgYa_yirii9Z6JncJFNgfK37D1d7BE5WlfgsIUD2gJsiWBS-9sdQXdVAUJHnR=s176-c-k-c0x00ffffff-no-rj-mo" alt="Logo 1"></a>
                    <a href="#"><img src="https://yt3.ggpht.com/CEXvYQfwj4g49clW1_iCMxZB12oJDNhcYo0IohaoL_9qA14HYGlec47ss3o1hzSGIqamiPrW=s176-c-k-c0x00ffffff-no-rj-mo" alt="Logo 1"></a>
                    <a href="#"><img src="https://yt3.googleusercontent.com/ytc/AIdro_m7B-NKoVxokVjXLDDw43YNPdGxGb5Mo67iOZjWXaWYujA=s176-c-k-c0x00ffffff-no-rj-mo" alt="Logo 1"></a>
                </div>
            </div>
        </section>
        <!-- Canais e Redes-Fim -->

        <!-- ADS -->
        <section class="ads">
            <div>
                <img src="data:image/jpeg;base64,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" alt="anuncio-1">
            </div>
        </section>
        <!-- ADS-Fim -->

        <!-- Noticias -->
        <section class="noticias">
            <div class="noticias-titulo">
                <h2>Últimas Notícias</h2>
            </div>
            <div class="noticias-conteudo">
                <div class="noticia-item">
                    <img src="https://virtualif.iftm.edu.br/sdsgov/controlador2/load.php?src=c42acfb2ba0032c5d9bdf8333fff625d&tipo=noticia" alt="Imagem da notícia 1">
                    <p>Feira Sabores e Saberes atraiu muitos visitantes e foi uma das grandes atrações do IV Conerer, no IFTM Campus Paracatu</p>
                </div>
                <div class="noticia-item">
                    <img src="https://virtualif.iftm.edu.br/sdsgov/controlador2/load.php?src=c96a1ac8f1f34cc81d1792d446308c16&tipo=noticia" alt="Imagem da notícia 2">
                    <p>Dança afro-brasileira apresentada por estudantes do Campus Uberlândia Centro celebra força das mulheres pretas e encanta público no Conerer</p>
                </div>
                <div class="noticia-item imp">
                    <img src="https://virtualif.iftm.edu.br/sdsgov/controlador2/load.php?src=6cea01edaff77cc405cdad67a803e2f4&tipo=noticia" alt="Imagem da notícia 3">
                    <p>Vem aí o “Universo IFTM”, uma união dos eventos de ensino, pesquisa, inovação e extensão</p>
                </div>
                <div class="noticia-item">
                    <img src="https://virtualif.iftm.edu.br/sdsgov/controlador2/load.php?src=ea4e1119380e052bfc86fc8eb9e98f67&tipo=noticia" alt="Imagem da notícia 4">
                    <p>Biblioteca do Campus Patrocinio celebra a Semana Nacional do Livro e da Biblioteca com o tema "Biblioteca em Cena"</p>
                </div>
                <div class="noticia-item">
                    <img src="https://virtualif.iftm.edu.br/sdsgov/controlador2/load.php?src=c2ce59d0aad0ea8de11ea999fe963783&tipo=noticia" alt="Imagem da notícia 5">
                    <p>Edição 2024 do Conerer inicia sua programação em Paracatu e evidencia história de resistência e ancestralidade</p>
                </div>
                <div class="noticia-item">
                    <img src="https://virtualif.iftm.edu.br/sdsgov/controlador2/load.php?src=2a740a10183f03293238c6ff264f47b6&tipo=noticia" alt="Imagem da notícia 6">
                    <p>'Halloween de los Muertos' no Campus Patrocínio: evento solidário promove a arrecadação de absorventes para pessoas em situação de vulnerabilidade social e de gênero</p>
                </div>
                <div class="noticia-item">
                    <img src="https://virtualif.iftm.edu.br/sdsgov/controlador2/load.php?src=73f35d614e88b94c3d021bb20d72b922&tipo=noticia" alt="Imagem da notícia 7">
                    <p>Práticas Pedagógicas em Ação: Evento promove experiência educacional e cultural para estudantes do IFTM Campus Uberaba</p>
                </div>
                <div class="noticia-item">
                    <img src="https://virtualif.iftm.edu.br/sdsgov/controlador2/load.php?src=4106cdbdde854326df42f60f574d1c72&tipo=noticia" alt="Imagem da notícia 8">
                    <p>IFTM abre vagas para cursos de idiomas gratuitos e estão disponíveis 80 vagas no Campus Uberlândia Centro</p>
                </div>
            </div>
            <div class="ver-mais">
                <a href="#">Ver mais</a>
            </div>
        </section>
        <!-- Noticias-Fim -->
        <!-- ADS -->
        <section class="ads">
            <div>
                <img src="../img-institucional/ads/Novo Projeto (2).png" alt="anuncio-2">
            </div>
        </section>
        <!-- ADS-Fim -->

        <!-- Videos -->
        <section class="videos">
            <div class="videos-titulo">
                <button class="seta-esquerda" onclick="scrollLeft()">←</button>
                <h2>Videos</h2>
                <button class="seta-direita" onclick="scrollRight()">→</button>
            </div>
            <div class="videos-conteudo">
                <div class="videos-container" id="videos-container">
                    <!-- Substitua pelos videos -->
                    <div class="videos-blocos">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/JbxCsMOBpqE?si=d6TxXPf3qnqtXY94" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        <p>Processo Seletivo IFTM 2025/1 - Cursos técnicos e graduação - Live tira-dúvidas: como se inscrever</p>
                    </div>
                    <div class="videos-blocos">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/72cOQWNwarU?si=s35Jh3Yc9F8JzWXB" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        <p>IFTM | Vídeo Institucional (Legendado em português)</p>
                    </div>
                    <div class="videos-blocos">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/scCHNdo83sY?si=vXRyAsjEGKvQCgXK" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        <p>História do IFTM Campus Patrocínio</p>
                    </div>
                    <div class="videos-blocos">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/SXOz4luQ9bc?si=q6KVMzQOsN2VaKBh" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        <p>CONCURSO IFTM + PLANEJAMENTO DE ESTUDOS</p>
                    </div>
                    <div class="videos-blocos">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/ed2Kwmjt0Ig?si=yYwXAJ95h6R1vJTZ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        <p>II Encontro de Estudos Ambientais do IFTM</p>
                    </div>
                    <div class="videos-blocos">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/14brB_AfDvs?si=-86zRTtjD54U35-9" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        <p>IFTM - CAMPUS AVANÇADO UBERABA PARQUE TECNOLÓGICO</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Videos-Fim -->
        <!-- ADS -->
        <section class="ads">
            <div>
                <img src="../img-institucional/ads/Novo Projeto (3).png" alt="anuncio-3">
            </div>
        </section>
        <!-- ADS-Fim -->
    </main>
    <!-- Rodapé -->
    <?php
    include("../includes/footer.php");
    ?>
    <!-- Scripts -->
    <script defer src="script.js"></script>
    <!-- Scripts do Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>

</html>