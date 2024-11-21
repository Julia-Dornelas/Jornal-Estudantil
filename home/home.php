<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <?php include "../includes/head.php"; ?>
    <title>Bem-vindo ao Jornal Estudantil! </title>
</head>

<body>
    <?php include "../includes/header.php"; ?>

    
<h3 class="text-center p-3 font-weight-bold">Bem-vindo ao Jornal Estudantil!</h3>
<p class="text-center">
    Aqui você encontra as principais notícias, eventos e opiniões dos alunos e do nosso instituto. 
    Fique por dentro de tudo o que acontece e participe compartilhando suas ideias!
</p>

<h3 class="text-center p-3 font-weight-bold">Principais Notícias</h3>

<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="../img-home/image1carrossel.png" alt="Primeiro Slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="../img-vozdoestudante/image2carrossel.png" alt="Segundo Slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="../img-vozdoestudante/image3carrossel.png" alt="Terceiro Slide">
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


<style>
    
    .carousel {
        max-width: 1280px; 
        margin: 0 auto; 
        
    }

    .carousel-inner img {
        height: auto; 
        max-height: 720px; 
        object-fit: cover; 
        height: 720px;
    }

    @media (max-width: 768px) {
        .carousel {
            max-width: 100%;
        }

        .carousel-inner img {
            max-height: 300px; 
        }
    }
</style>



    
<section class="noticias-recentes container my-5">
    <h2 class="text-center p-3 font-weight-bold">Notícias Recentes</h2>
    <div class="row">
        <div class="col-md-6 mb-4">
            <div class="card">
                
                <img src="../img-home/simposio.png" class="card-img-top" alt="Evento IDEATHON 2024">
                <div class="card-body">
                    <h3 class="card-title">Evento IDEATHON 2024</h3>
                    <p class="card-text">
                        
                        A competição IDEATHON, realizada de 18 a 26 de outubro, desafiou alunos a desenvolver soluções inovadoras em Inteligência Artificial com o tema "Biomas do Brasil: diversidade, saberes e tecnologias sociais". A turma vencedora foi o Terceiro Ano de Informática.
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-6 mb-4">
            <div class="card">
                
                <img src="../img-home/snct.png" class="card-img-top" alt="21ª Semana Nacional de Ciência e Tecnologia">
                <div class="card-body">
                    <h3 class="card-title">21ª Semana Nacional de Ciência e Tecnologia (SNCT)</h3>
                    <p class="card-text">
                        
                        A SNCT, realizada de 18 a 26 de outubro, promoveu reflexão e diálogo sobre os biomas brasileiros, reunindo a comunidade científica, professores, pesquisadores, estudantes e o público em geral.
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-6 mb-4">
            <div class="card">
                
                <img src="../img-home/evento.png" class="card-img-top" alt="Evento Simpósio de Administração e Contabilidade">
                <div class="card-body">
                    <h3 class="card-title">Evento Simpósio de Administração e Contabilidade</h3>
                    <p class="card-text">
                        
                        Nos dias 02 e 03 de abril, o Campus Patrocínio sediou o Simpósio de Administração e Contabilidade do IFTM, focado em Educação Empreendedora. O evento reuniu profissionais, servidores e estudantes para discutir a integração do empreendedorismo nas áreas de Administração e Contabilidade.
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-6 mb-4">
            <div class="card">
                
                <img src="../img-home/fenabom.png" class="card-img-top" alt="Fenabom 2024">
                <div class="card-body">
                    <h3 class="card-title">Fenabom 2024</h3>
                    <p class="card-text">
                        
                        Em 23 de agosto, os alunos do 2º ano do Curso Técnico em Contabilidade do Campus Patrocínio realizaram uma visita técnica à Feira de Negócios Agropecuários da Bom Negócio Nutrição Animal, conhecendo a fábrica de ração e interagindo com profissionais do agronegócio.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>


<style>
    .noticias-recentes h2 {
        font-size: 24px;
        color: #333;
    }
    .card {
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        border-radius: 5px;
    }
    .card-title {
        font-size: 18px;
        color: #555;
    }
    .card-text {
        font-size: 14px;
        color: #666;
    }
</style>


    <?php include "../includes/footer.php"; ?>

    <?php include "../includes/js.php"; ?>
</body>

</html>