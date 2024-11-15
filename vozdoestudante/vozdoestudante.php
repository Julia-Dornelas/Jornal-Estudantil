<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <?php include "../includes/head.php"; ?>
    <title>Voz do Estudante</title>
</head>

<body>
    <?php include "../includes/header.php"; ?>

    <h4 class="text-center p-3">Voz do Estudante</h4>

    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="../img-vozdoestudante/Carrosel1.png" alt="Primeiro Slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="../img-vozdoestudante/Carrosel2.png" alt="Segundo Slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src=".../800x400?auto=yes&bg=555&fg=333&text=Terceiro Slide" alt="Terceiro Slide">
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

    <div class="p-3 ">
        <h5 class="text-center p-3">Grêmio Estudantil</h5>
        <p class="text-justify">O Grêmio Estudantil do Instituto Federal do Triângulo Mineiro (IFTM) - Campus Patrocínio é a principal entidade de representação dos estudantes, atuando como um elo entre o corpo discente e a administração do instituto. Composto por uma equipe dedicada de alunos, o grêmio desempenha um papel crucial na promoção dos interesses estudantis, organização de eventos e fortalecimento da comunidade acadêmica.</p>
        <p class="text-justify">[...]</p>
        <p class="text-justify">O grêmio estudantil é fundamental para o fortalecimento da comunidade acadêmica, promovendo a participação ativa dos alunos e assegurando que suas vozes sejam ouvidas. Além disso, desempenha um papel vital no desenvolvimento de habilidades de liderança, organização e trabalho em equipe entre seus membros, preparando-os para futuros desafios pessoais e profissionais.</p>
        <a href="#" class="badge badge-success rounded mx-auto d-block" style="width: 200px; height: 23px; font-size: 15px;">Saber mais sobre!</a>
    </div>

    <div class="mx-3 mt-4" style="border-top: 1px solid black;"></div>

    <div class="p-3">
        <h5 class="text-center p-3">Grêmio Estudantil</h5>
        <p class="text-justify">Durante o mês de Outubro, coletamos experiências e opiniões de estudantes e egressos do nosso instituto, com o objetivo de fortalecer a comunidade acadêmica. Essas contribuições são fundamentais para entender as necessidades e expectativas de nossos alunos, ajudando-nos a criar um ambiente mais inclusivo e dinâmico. Agradecemos a todos que participaram e compartilharam suas histórias!</p>
        <h6 class="text-center"><u> Alunos</u></h6>
    </div>

    <!--CARD 1-->
    <div class="d-flex flex-wrap text-left">
        <div class="card rounded d-flex flex-wrap border border-dark ">
            <div class="d-flex flex-wrap">
                <img class="card-img-top" src="../img-vozdoestudante/Card1.png" alt="Imagem Card 1" />
            </div>
            <div class="card-body bg-success">
                <button type="submit" name="card" class="btn btn-success w-100 h-5  text-dark">“O 1° ano está sendo...”<p class="text-right">Ver mais...</p></button>
            </div>
        </div>
    </div>

    
    <br><br><br>
    <?php include "../includes/footer.php"; ?>

    <?php include "../includes/js.php"; ?>
</body>

</html>