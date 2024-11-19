<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <?php include "../includes/head.php"; ?>
    <link rel="stylesheet" href="voz.css">
    <title>Voz do Estudante</title>
</head>

<body>
    <?php include "../includes/header.php"; ?>

    <h4 class="text-center p-3 font-weight-bold g-font-40">Voz do Estudante</h4>

    <div class="Tam-Carrosel">
        <div id="carouselExampleControls" class="carousel slide carrosel" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class=" w-100" src="../img-vozdoestudante/CARD1.png" alt="Primeiro Slide">
                </div>
                <div class="carousel-item">
                    <img class=" w-100" src="../img-vozdoestudante/Carrosel2.png" alt="Segundo Slide">
                </div>
                <div class="carousel-item">
                    <img class=" w-100" src="../img-vozdoestudante/CARD5.png" alt="Terceiro Slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Anterior</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Próximo</span>
            </a>
        </div>
    </div>
    <div class="p-3 ">
        <h5 class="text-center p-3 g-font-40">Grêmio Estudantil</h5>
        <p class="text-justify  g-font-20">O Grêmio Estudantil do Instituto Federal do Triângulo Mineiro (IFTM) - Campus
            Patrocínio
            é a principal entidade de representação dos estudantes, atuando como um elo entre o corpo discente e a
            administração do instituto. Composto por uma equipe dedicada de alunos, o grêmio desempenha um papel crucial
            na promoção dos interesses estudantis, organização de eventos e fortalecimento da comunidade acadêmica.</p>
        <p class="text-justify  g-font-20">[...]</p>
        <p class="text-justify  g-font-20">O grêmio estudantil é fundamental para o fortalecimento da comunidade
            acadêmica,
            promovendo a participação ativa dos alunos e assegurando que suas vozes sejam ouvidas. Além disso,
            desempenha um papel vital no desenvolvimento de habilidades de liderança, organização e trabalho em equipe
            entre seus membros, preparando-os para futuros desafios pessoais e profissionais.</p>

        <a href="gremio.php" class="badge badge-success rounded mx-auto d-block"
            style="width: 200px; height: 23px; font-size: 15px;">Saber mais sobre!</a>
    </div>

    <div class="mx-3 mt-4" style="border-top: 1px solid black;"></div>

    <div class="p-3">
        <h5 class="text-center p-3 g-font-40">Fortalecendo a Comunidade Acadêmica</h5>
        <p class="text-justify g-font-20">Durante o mês de Outubro, coletamos experiências e opiniões de estudantes e
            egressos do
            nosso instituto, com o objetivo de fortalecer a comunidade acadêmica. Essas contribuições são fundamentais
            para entender as necessidades e expectativas de nossos alunos, ajudando-nos a criar um ambiente mais
            inclusivo e dinâmico. Agradecemos a todos que participaram e compartilharam suas histórias!</p>

        <h6 class="text-center g-font-25"><u> Alunos</u></h6>
    </div>

    <div class="w-100 g-cards espacamento">
        <div class="g-coluna">
            <!--CARD 1-->
            <div class="d-flex flex-wrap text-left mt-3">
                <div class="card rounded d-flex flex-wrap border border-dark ">
                    <div class="d-flex flex-wrap">
                        <img class="card-img-top" src="../img-vozdoestudante/Card1.png" alt="Imagem Card 1" />
                    </div>
                    <div class="card-body bg-success p-0 m-0">
                        <a style="text-decoration: none;" href="CARD1.php">
                            <button type="submit" name="card" class="btn btn-success w-100 h-5 text-dark">
                                <p class="text-left p-0 m-0" style="font-size: 30px;">“O 1° ano está sendo...”</p>
                                <p class="text-right p-0 m-0">VER MAIS</p>
                            </button></a>
                    </div>
                </div>
            </div>

            <!--CARD 2-->
            <div class="d-flex flex-wrap text-left mt-3 Espacamento-Card">
                <div class="card rounded d-flex flex-wrap border border-dark ">
                    <div class="d-flex flex-wrap">
                        <img class="card-img-top" src="../img-vozdoestudante/Carrosel2.png" alt="Imagem Card 1" />
                    </div>
                    <div class="card-body bg-success p-0 m-0">
                        <a style="text-decoration: none;" href="CARD2.php">
                            <button type="submit" name="card" class="btn btn-success w-100 h-5 text-dark">
                                <p class="text-left p-0 m-0" style="font-size: 30px;">“Acho desnecessario..”</p>
                                <p class="text-right p-0 m-0">VER MAIS</p>
                            </button></a>
                    </div>
                </div>
            </div>

            <!--CARD 3-->
            <div class="d-flex flex-wrap text-left mt-3 Espacamento-Card">
                <div class="card rounded d-flex flex-wrap border border-dark ">
                    <div class="d-flex flex-wrap">
                        <img class="card-img-top" src="../img-vozdoestudante/Card3.png" alt="Imagem Card 1" />
                    </div>
                    <div class="card-body bg-success p-0 m-0">
                        <a style="text-decoration: none;" href="CARD3.php">
                            <button type="submit" name="card" class="btn btn-success w-100 h-5 text-dark">
                                <p class="text-left p-0 m-0" style="font-size: 25px;">“O curso em si é perfeito,
                                    porém...”
                                </p>
                                <p class="text-right p-0 m-0">VER MAIS</p>
                            </button></a>
                    </div>
                </div>
            </div>
        </div>


        <div class="g-coluna">
            <!--CARD 4-->
            <div class="d-flex flex-wrap text-left mt-3 Espacamento-Card">
                <div class="card rounded d-flex flex-wrap border border-dark ">
                    <div class="d-flex flex-wrap">
                        <img class="card-img-top" src="../img-vozdoestudante/Card4.png" alt="Imagem Card 1" />
                    </div>
                    <div class="card-body bg-success p-0 m-0">
                        <a style="text-decoration: none;" href="CARD4.php">
                            <button type="submit" name="card" class="btn btn-success w-100 h-5 text-dark">
                                <p class="text-left p-0 m-0" style="font-size: 30px;">“O IFTM precisa...”</p>
                                <p class="text-right p-0 m-0">VER MAIS</p>
                            </button></a>
                    </div>
                </div>
            </div>

            <!--CARD 5-->
            <div class="d-flex flex-wrap text-left mt-3 Espacamento-Card">
                <div class="card rounded d-flex flex-wrap border border-dark ">
                    <div class="d-flex flex-wrap">
                        <img class="card-img-top" src="../img-vozdoestudante/Card5.png" alt="Imagem Card 1" />
                    </div>
                    <div class="card-body bg-success p-0 m-0">
                        <a style="text-decoration: none;" href="CARD5.php">
                            <button type="submit" name="card" class="btn btn-success w-100 h-5 text-dark">
                                <p class="text-left p-0 m-0" style="font-size: 19px;">“A comunicação entre alunos e
                                    professsores...”</p>
                                <p class="text-right p-0 m-0">VER MAIS</p>
                            </button></a>
                    </div>
                </div>
            </div>



            <!--CARD 6-->
            <div class="d-flex flex-wrap text-left mt-3 Espacamento-Card">
                <div class="card rounded d-flex flex-wrap border border-dark ">
                    <div class="d-flex flex-wrap">
                        <img class="card-img-top" src="../img-vozdoestudante/Card6.png" alt="Imagem Card 1" />
                    </div>
                    <div class="card-body bg-success p-0 m-0">
                        <a style="text-decoration: none;" href="CARD6.php">
                            <button type="submit" name="card" class="btn btn-success w-100 h-5 text-dark">
                                <p class="text-left p-0 m-0" style="font-size: 30px;">“A estrutura da escola...”</p>
                                <p class="text-right p-0 m-0">VER MAIS</p>
                            </button></a>
                    </div>
                </div>
            </div>
        </div>



        <div class="g-coluna">
            <!--CARD 7-->
            <div class="d-flex flex-wrap text-left mt-3 Espacamento-Card">
                <div class="card rounded d-flex flex-wrap border border-dark ">
                    <div class="d-flex flex-wrap">
                        <img class="card-img-top" src="../img-vozdoestudante/Card7.png" alt="Imagem Card 1" />
                    </div>
                    <div class="card-body bg-success p-0 m-0">
                        <a style="text-decoration: none;" href="CARD7.php">
                            <button type="submit" name="card" class="btn btn-success w-100 h-5 text-dark">
                                <p class="text-left p-0 m-0" style="font-size: 30px;">“Minha experiência esta...”</p>
                                <p class="text-right p-0 m-0">VER MAIS</p>
                            </button></a>
                    </div>
                </div>
            </div>


            <!--CARD 8-->
            <div class="d-flex flex-wrap text-left mt-3 Espacamento-Card">
                <div class="card rounded d-flex flex-wrap border border-dark ">
                    <div class="d-flex flex-wrap">
                        <img class="card-img-top" src="../img-vozdoestudante/Card8.png" alt="Imagem Card 1" />
                    </div>
                    <div class="card-body bg-success p-0 m-0">
                        <a style="text-decoration: none;" href="CARD8.php">
                            <button type="submit" name="card" class="btn btn-success w-100 h-5 text-dark">
                                <p class="text-left p-0 m-0" style="font-size: 30px;">“De fato muito...”</p>
                                <p class="text-right p-0 m-0">VER MAIS</p>
                            </button></a>
                    </div>
                </div>
            </div>

            <!--CARD 9-->
            <div class="d-flex flex-wrap text-left mt-3 Espacamento-Card">
                <div class="card rounded d-flex flex-wrap border border-dark ">
                    <div class="d-flex flex-wrap">
                        <img class="card-img-top" src="../img-vozdoestudante/Card9.png" alt="Imagem Card 1" />
                    </div>
                    <div class="card-body bg-success p-0 m-0">
                        <a style="text-decoration: none;" href="CARD9.php">
                            <button type="submit" name="card" class="btn btn-success w-100 h-5 text-dark">
                                <p class="text-left p-0 m-0" style="font-size: 30px;">“É uma montanha russa...”</p>
                                <p class="text-right p-0 m-0">VER MAIS</p>
                            </button></a>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="p-3">
        <h6 class="text-center g-font-25"><u>Egressos</u></h6>
    </div>

    <div class="w-100 g-cards espacamento">

        <div class="g-coluna">
            <!--CARD 10-->
            <div class="d-flex flex-wrap text-left mt-3">
                <div class="card rounded d-flex flex-wrap border border-dark ">
                    <div class="d-flex flex-wrap">
                        <img class="card-img-top" src="../img-vozdoestudante/Card10.png" alt="Imagem Card 1" />
                    </div>
                    <div class="card-body bg-danger p-0 m-0">
                        <a style="text-decoration: none;" href="CARD10.php">
                            <button type="submit" name="card" class="btn btn-danger w-100 h-5 text-dark">
                                <p class="text-left p-0 m-0" style="font-size: 30px;">“Extraordinaria...”</p>
                                <p class="text-right p-0 m-0">VER MAIS</p>
                            </button></a>
                    </div>
                </div>
            </div>

            <!--CARD 11-->
            <div class="d-flex flex-wrap text-left mt-3">
                <div class="card rounded d-flex flex-wrap border border-dark ">
                    <div class="d-flex flex-wrap">
                        <img class="card-img-top" src="../img-vozdoestudante/Card11.png" alt="Imagem Card 1" />
                    </div>
                    <div class="card-body bg-danger p-0 m-0">
                        <a style="text-decoration: none;" href="CARD11.php">
                            <button type="submit" name="card" class="btn btn-danger w-100 h-5 text-dark">
                                <p class="text-left p-0 m-0" style="font-size: 30px;">“Boa, o IF é...”</p>
                                <p class="text-right p-0 m-0">VER MAIS</p>
                            </button></a>
                    </div>
                </div>
            </div>

            <!--CARD 12-->
            <div class="d-flex flex-wrap text-left mt-3">
                <div class="card rounded d-flex flex-wrap border border-dark ">
                    <div class="d-flex flex-wrap">
                        <img class="card-img-top" src="../img-vozdoestudante/Card12.png" alt="Imagem Card 1" />
                    </div>
                    <div class="card-body bg-danger p-0 m-0">
                        <a style="text-decoration: none;" href="CARD12.php">
                            <button type="submit" name="card" class="btn btn-danger w-100 h-5 text-dark">
                                <p class="text-left p-0 m-0" style="font-size: 30px;">“Foi uma experiência...”</p>
                                <p class="text-right p-0 m-0">VER MAIS</p>
                            </button></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="g-coluna">
            <!--CARD 13-->
            <div class="d-flex flex-wrap text-left mt-3">
                <div class="card rounded d-flex flex-wrap border border-dark ">
                    <div class="d-flex flex-wrap">
                        <img class="card-img-top" src="../img-vozdoestudante/Card13.png" alt="Imagem Card 1" />
                    </div>
                    <div class="card-body bg-danger p-0 m-0">
                        <a style="text-decoration: none;" href="CARD13.php">
                            <button type="submit" name="card" class="btn btn-danger w-100 h-5 text-dark">
                                <p class="text-left p-0 m-0" style="font-size: 30px;">“Ímpar; de muito...”</p>
                                <p class="text-right p-0 m-0">VER MAIS</p>
                            </button></a>
                    </div>
                </div>
            </div>

            <!--CARD 14-->
            <div class="d-flex flex-wrap text-left mt-3 ">
                <div class="card rounded d-flex flex-wrap border border-dark ">
                    <div class="d-flex flex-wrap">
                        <img class="card-img-top" src="../img-vozdoestudante/Card14.png" alt="Imagem Card 1" />
                    </div>
                    <div class="card-body bg-danger p-0 m-0">
                        <a style="text-decoration: none;" href="CARD14.php">
                            <button type="submit" name="card" class="btn btn-danger w-100 h-5 text-dark">
                                <p class="text-left p-0 m-0" style="font-size: 30px;">“So acho que...”</p>
                                <p class="text-right p-0 m-0">VER MAIS</p>
                            </button></a>
                    </div>
                </div>
            </div>

            <!--CARD 15-->
            <div class="d-flex flex-wrap text-left mt-3 ">
                <div class="card rounded d-flex flex-wrap border border-dark ">
                    <div class="d-flex flex-wrap">
                        <img class="card-img-top img-card15" src="../img-vozdoestudante/Card15.jpeg"
                            alt="Imagem Card 15" />
                    </div>
                    <div class="card-body bg-danger p-0 m-0">
                        <a style="text-decoration: none;" href="CARD15.php">
                            <button type="submit" name="card" class="btn btn-danger w-100 h-5 text-dark">
                                <p class="text-left p-0 m-0" style="font-size: 30px;">“Mesmo sendo...”</p>
                                <p class="text-right p-0 m-0">VER MAIS</p>
                            </button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="mx-3 mt-5 " style="border-top: 1px solid black;"></div>

    <div class="p-3">
        <h5 class="text-center p-3 g-font-40">Destaques</h5>
    </div>

    <!--DESTAQUE 1-->
    <div class="w-100 d-flex flex-wrap">

        <div class="card rounded mx-auto d-block border border-dark p-1 shadow-lg mb-5 bg-white rounded "
            style="width: 23rem;">
            <img class="card-img-top" src="../img-vozdoestudante/DESTAQUE1.png" alt="Imagem de capa do card">
            <div class="card-body">
                <h6 class="text-center"><u>Medalhistas OBMEP</u></h6>
                <p class="card-text text-justify ">O professor Wilson, representando a equipe de matemática,
                    realizou a
                    cerimônia de entrega de prêmios aos medalhistas do Campus Patrocínio, vencedores da Olimpíada
                    Brasileira de Matemática das Escolas Públicas (OBMEP) e do concurso Canguru.</p>
            </div>
        </div>

        <!--DESTAQUE 2-->
        <div class="card rounded mx-auto d-block border border-dark p-1 shadow-lg mb-5 bg-white rounded"
            style="width: 23rem;">
            <img class="card-img-top" src="../img-vozdoestudante/DESTAQUE2.png" alt="Imagem de capa do card">
            <div class="card-body">
                <h6 class="text-center"><u>Medalhistas OBLI</u></h6>
                <p class="card-text text-justify ">O IFTM Campus Patrocínio participou pela primeira vez
                    da Olimpíada
                    Brasileira de Língua Inglesa (OBLI), aplicada em todo Brasil, em diferentes níveis. A
                    instituição
                    contou com a participação de vários alunos dos cursos técnicos integrados ao Ensino Médio. </p>
            </div>
        </div>

        <!--DESTAQUE 3-->
        <div class="card rounded mx-auto d-block border border-dark p-1 shadow-lg mb-5 bg-white rounded"
            style="width: 23rem;">
            <img class="card-img-top" src="../img-vozdoestudante/DESTAQUE3.png" alt="Imagem de capa do card">
            <div class="card-body">
                <h6 class="text-center"><u>Festival Cultural</u></h6>
                <p class="card-text text-justify ">O Festival Cultural foi um sucesso! A noite do dia 31 de Agosto
                    foi
                    recheada de momentos especiais. As apresentações artísticas de estudantes, servidores e
                    convidados
                    presentearam as famílias do Campus Patrocínio na nossa comemoração de aniversário.</p>
            </div>
        </div>

        <!--DESTAQUE 4-->
        <div class="card rounded mx-auto d-block border border-dark p-1 shadow-lg mb-5 bg-white rounded"
            style="width: 23rem;">
            <img class="card-img-top" src="../img-vozdoestudante/DESTAQUE4.png" alt="Imagem de capa do card">
            <div class="card-body">
                <h6 class="text-center"><u>Visíta Técnica</u></h6>
                <p class="card-text text-justify ">No dia 08 de outubro, professor e alunos da disciplina de
                    Produção,
                    Estoque e Logística do segundo período do curso técnico em administração integrado ao ensino
                    médio
                    participaram de uma visita técnica na Fábrica da Nestlé de Ibiá/MG.</p>
            </div>
        </div>

        <!--DESTAQUE 5-->
        <div class="card rounded mx-auto d-block border border-dark p-1 shadow-lg mb-5 bg-white rounded"
            style="width: 23rem;">
            <img class="card-img-top" src="../img-vozdoestudante/DESTAQUE5.png" alt="Imagem de capa do card">
            <div class="card-body">
                <h6 class="text-center"><u>Colação de grau</u></h6>
                <p class="card-text text-justify ">Parabéns aos formandos dos cursos de Engenharia Elétrica, de
                    Análise
                    e Desenvolvimento de Sistemas e de Gestão Comercial pela conquista! O IFTM Campus Patrocínio tem
                    orgulho de fazer parte de pessoas tão incríveis.</p>
            </div>
        </div>
    </div>

    <?php include "../includes/footer.php"; ?>  
    <?php include "../includes/js.php"; ?>
</body>

</html>