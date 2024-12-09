<?php 
include '../../controller/UsuarioController.php';
include '../../models/verifica_login.php';

if (isset($_SESSION['usuario_id'])){
  $UsuarioController = new UsuarioController();
  $usuario = $UsuarioController->findId($_SESSION['usuario_id']);
} 
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <?php include '../includes/head.php' ?>
    <link rel="stylesheet" href="style.css">
    <title>Sobre o Curso</title> <!-- Nome da Página -->
</head>
<body>
    <?php 
    $pagina_atual = 2; 
    include '../includes/header.php' ?>
    
    <main>

    <h1>Sobre o Curso</h1>
    <p>As Casas Mágicas: Na Vamgark Academy, cada aluno é parte de uma rica tradição mágica, refletida nas quatro casas que compõem nossa comunidade. Inspiradas nas icônicas casas de Hogwarts, elas são mais do que simples agrupamentos; representam valores e características que moldam a jornada de cada estudante. Na Vamgark Academy, a casa que você escolhe não é apenas um título; é uma extensão de quem você é. Prepare-se para descobrir sua verdadeira essência mágica enquanto embarca nesta jornada incrível!</p>

    <div style="background-color: #701E1E; border: 6px solid #3D0D0D;" class="casa-flag">
        <div class="pure-u-1 pure-u-md-1-5 flag">
            <img src="../../img/grifinoria-flag.png" alt="">
        </div>
        <div class="casa pure-u-1 pure-u-md-4-5">
            <h1>Grifinória</h1>
            <p>A Casa Grifinória da Vamgark Academy é perfeita para aqueles que possuem coragem e determinação. Valorizamos a bravura, a lealdade e um espírito aventureiro, criando um ambiente acolhedor onde os alunos são incentivados a enfrentar desafios e explorar novas experiências. Se você está pronto para embarcar em uma emocionante jornada de crescimento e amizade, a Grifinória é o lugar ideal para você!</p>
        </div>
    </div>
    <div style="background-color: #A97429; border: 6px solid #50340E;" class="casa-flag">
        <div class="casa pure-u-1 pure-u-md-4-5">
            <h1>Lufa-Lufa</h1>
            <p> Casa Lufa-Lufa é dedicada aos trabalhadores esforçados e justos. Valorizamos a lealdade, a paciência e a colaboração, promovendo um ambiente acolhedor onde todos se sentem bem-vindos. Nossos alunos são conhecidos por sua ética de trabalho e disposição para ajudar os outros. Se você busca justiça e amizade em uma comunidade unida, a Lufa-Lufa é o lugar perfeito para você!</p>
        </div>
        <div class="pure-u-1 pure-u-md-1-5 flag flag-mobile">
            <img src="../../img/lufalufa-flag.png" alt="">
        </div>
    </div>
    <div style="background-color: #211E70; border: 6px solid #0D0B44;" class="casa-flag">
        <div class="pure-u-1 pure-u-md-1-5 flag">
            <img src="../../img/corvinal-flag.png" alt="">
        </div>
        <div class="casa pure-u-1 pure-u-md-4-5">
            <h1>Corvinal</h1>
            <p>A Casa Corvinal é o refúgio dos curiosos e intelectuais. Valorizamos a sabedoria, a criatividade e a busca incessante pelo conhecimento. Nossos alunos são incentivados a pensar criticamente e a explorar novas ideias, promovendo um espaço estimulante e inovador. Se você é apaixonado pelo aprendizado e deseja se juntar a uma comunidade que valoriza o intelecto e a diversidade de opiniões, a Corvinal é o lugar ideal para você!
            </p>
        </div>
    </div>
    <div style="background-color: #1E7030; border: 6px solid #0B4117;" class="casa-flag">
        <div class="casa pure-u-1 pure-u-md-4-5">
            <h1>Sonserina</h1>
            <p>A Casa Sonserina é o lar dos astutos e ambiciosos. Aqui, valorizamos a inteligência e a liderança, incentivando nossos alunos a pensar estrategicamente em busca de seus objetivos. A lealdade entre os colegas é fundamental, criando uma forte rede de apoio. Se você aprecia poder e sabe que a astúcia pode levar ao sucesso, a Sonserina é o lugar certo para você!</p>
        </div>
        <div class="pure-u-1 pure-u-md-1-5 flag flag-mobile">
            <img src="../../img/sonserina-flag.png" alt="">
        </div>
    </div>

    <h1>Conheça também nossos livros:</h1>
    <p>Descubra "As Casas de Hogwarts", um guia fascinante que mergulha nas quatro icônicas casas da escola de magia: Grifinória, Sonserina, Corvinal e Lufa-Lufa.
    </p>

    <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="../../img/livro-grif.png" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="../../img/livro-lufa.png" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="../../img/livro-corv.png" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="../../img/livro-sons.png" alt="">
                </div>
            </div>
            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
    </div>

    <p>Com ilustrações e detalhes ricos, este livro não apenas aprofunda a história dos personagens, mas também ajuda os leitores a descobrir qual casa ressoa mais com sua própria personalidade. "As Casas de Hogwarts" é uma verdadeira celebração do espírito de Hogwarts, perfeita para fãs que desejam se aprofundar no mundo mágico. Não perca a chance de adquirir este livro e explorar as características que fazem cada casa única!</p>
    </main>

    <?php include '../includes/footer.php' ?>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        // Inicialização do Swiper para o slider
        document.addEventListener('DOMContentLoaded', function () {
            var swiper = new Swiper(".mySwiper", {
                autoplay: {
                delay: 5000,
                },
                navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
                },
                effect: "cards",
                grabCursor: true,
            });
        });
    </script>
</body>
</html>