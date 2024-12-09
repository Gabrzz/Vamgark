<?php 
include '../../controller/UsuarioController.php';
include '../../models/verifica_login.php';
include '../../models/funcoes_votos.php'; 

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
  <title>Página Inicial</title>
</head>
<body>
  <?php 
    $pagina_atual = 1; 
    include '../includes/header.php';
  ?>

  <main>
    <div class="swiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide pure-g">
          <div class="metade-1 pure-u-1 pure-u-md-1-3">
            <img class="simbolo-swiper" src="../../img/christmas.png" alt="Festividades de Natal">
          </div>
          <div class="metade-2 pure-u-1 pure-u-md-2-3">
            <h1>Festividades de Natal!</h1>
            <p>🎄✨ O Grande Salão está todo decorado! Junte-se a nós na Vamgark para celebrar o Natal com magia, música e deliciosas iguarias. Venha criar memórias inesquecíveis em uma noite repleta de encantos e surpresas! 🧙‍♂️🎁</p>
          </div>
        </div>

        <div class="swiper-slide pure-g">
          <div class="metade-1 pure-u-1 pure-u-md-1-3">
            <img class="simbolo-swiper" src="../../img/potion.png" alt="Poções Mágicas"> 
          </div>
          <div class="metade-2 pure-u-1 pure-u-md-2-3">
            <h1>Poções Mágicas</h1>
            <p>⚗️ Aprenda a preparar poções incríveis como a Felix Felicis e o Elixir da Vida! Domine a arte da poção com nossos mestres e descubra os segredos por trás de cada ingrediente. 🧪✨</p>
          </div>
        </div>

        <div class="swiper-slide pure-g">
          <div class="metade-1 pure-u-1 pure-u-md-1-3">
            <img class="simbolo-swiper" src="../../img/quadribol.png" alt="Quadribol"> 
          </div>
          <div class="metade-2 pure-u-1 pure-u-md-2-3">
            <h1>Quadribol</h1>
            <p> 🧹💨 Voe alto com a Vamgark! Junte-se ao nosso time de Quadribol e vivencie a emoção do esporte bruxo mais famoso. Treine suas habilidades, marque gols e conquiste a taça das casas! 🏆</p>
          </div>
        </div>
      </div>

      <div class="swiper-button-prev"></div>
      <div class="swiper-button-next"></div>
    </div>

    <div class="welcome">
    <h1>Vamgark só existe porque você está aqui, <?php echo $usuario->getNome() ?>!</h1>
    <h2>Comece a Explorar!</h2>
    <h1><i class="fas fa-arrow-down"></i></h1>
    </div>

    <div class="container pure-g">
        <div class="pure-u-1 pure-u-md-4-6 pure-g principais">
            <div class="pure-u-md-1-2 item">
                <div class="item-titulo">COMECE A ESTUDAR</div>
                <img src="../../img/livros.png" alt="">
                <p>Os cursos da <a id="dourado" href="#">Vamgark</a> são ricos em conteúdos precisos e são renovados todos os anos, <a id="dourado" href="#">comece já!</a></p>
            </div>
            <div class="pure-u-md-1-2 item">
                <div class="item-titulo">OFERTAS IMPERDÍVEIS</div>
                <img src="../../img/varinha.png" alt="">
                <p>Nossa Loja está receada de novidades quentinhas, <a id="dourado" href="#">venha conferir!</a></p>
            </div>
            <div class="pure-u-md-1-2 item">
                <div class="item-titulo">AGENDE UMA VISITA</div>
                <img src="../../img/loja.png" alt="">
                <p>Estamos abertos para visitação em <a id="dourado" href="#">várias</a> épocas do ano, com incriveis <a id="dourado" href="#">oficinas interativas!</a></p>
            </div>
            <div class="pure-u-md-1-2 item">
                <div class="item-titulo">O QUE ESTÃO FALANDO</div>
                <div class="posts"><h1><a id="dourado" href="#">+137</a> POSTS</h1>
                <h5>Na última hora!</h5></div>
                <p>Você sabia que em <a id="dourado" href="#">Vamgark</a> há uma comunidade ativa <a id="dourado" href="#">livre de filtros e censura</a> promovendo o pensamento de nossos alunos? <a id="dourado" href="#">Seja um deles!</a></p>
            </div>
        </div>
        <div class="pure-u-1 pure-u-md-2-6 quiz-container">
        <div class="quiz-item">
  <h1>Enquete!</h1>
  <p>Vote na melhor casa e ajude a sua a <a id="dourado" href="#">vencer!</a></p>
  <div class="quiz-buttons">

    <button id="grifinoria" data-votos="<?php echo calcularPorcentagemVotos($conexao, 'grifinoria'); ?>"> 
      Grifinória
      <div class="barra-progresso barra-progresso-invisivel"> 
        <div class="porcentagem"></div> 
      </div>
    </button>

    <button id="lufa-lufa" data-votos="<?php echo calcularPorcentagemVotos($conexao, 'lufa-lufa'); ?>">
      Lufa-Lufa
      <div class="barra-progresso barra-progresso-invisivel">
        <div class="porcentagem"></div> 
      </div>
    </button>

    <button id="corvinal" data-votos="<?php echo calcularPorcentagemVotos($conexao, 'corvinal'); ?>">
      Corvinal
      <div class="barra-progresso barra-progresso-invisivel">
        <div class="porcentagem"></div> 
      </div>
    </button>

    <button id="sonserina" data-votos="<?php echo calcularPorcentagemVotos($conexao, 'sonserina'); ?>">
      Sonserina
      <div class="barra-progresso barra-progresso-invisivel">
        <div class="porcentagem"></div> 
      </div>
    </button>

  </div>
</div>
    </div>
    </div>
    <div class="pure-g container">
    <div class="centralizado pure-g pure-u-1 pure-u-md-1-2">
      <div class="barrinha"></div>
      <div class="pure-u-1-4 flag">
        <img src="../../img/grifinoria-flag.png" alt="">
        <h1>1º  <a id="dourado">650pts</a></h1>
      </div>
      <div class="pure-u-1-4 flag">
        <img src="../../img/corvinal-flag.png" alt="">
        <h1>3º  <a id="dourado">365pts</a></h1>
      </div>
      <div class="pure-u-1-4 flag">
        <img src="../../img/lufalufa-flag.png" alt="">
        <h1>2º  <a id="dourado">520pts</a></h1>
      </div>
      <div class="pure-u-1-4 flag">
        <img src="../../img/sonserina-flag.png" alt="">
        <h1>4º  <a id="dourado">105pts</a></h1>
      </div>
    </div>
    <div class="pontuacao pure-u-1 pure-u-md-1-2">
        <h1><a id="dourado">Pontuação Geral </a>das casas em tempo real!</h1>
        <button class="botao">Sua Casa</button>
    </div>
    </div>
  <div class="titulocontainer">
    <img class="barra" src="../../img/barstar-left.png" alt="">
    <h1>Faça o QUIZ das Casas!</h1>
    <img class="barra" src="../../img/barstar-right.png" alt="">
  </div>

  <div class="pure-g">
    <div class="casas corv pure-u-1 pure-u-md-5-8">
        <h1>SÁBIOS</h1>
        <p>Inteligência e conhecimento movem suas ações. Amam aprender, explorar e questionar, guiados pela lógica e pela criatividade.</p>
    </div>
    <div class="casas grif pure-u-1 pure-u-md-3-8">
        <h1>VALENTES</h1>
        <p>Coragem é seu maior dom. Determinados e destemidos, enfrentam desafios de frente e nunca abandonam os seus.</p>
    </div>
    <div class="casas lufa pure-u-1 pure-u-md-3-8">
        <h1>LEAIS</h1>
        <p>Lealdade e trabalho são suas marcas. Pacientes, acolhedores e honestos, sempre dispostos a ajudar e lutar por justiça.</p>  
      </div>
    <div class="casas sons pure-u-1 pure-u-md-5-8">
        <h1>AMBICIOSOS</h1>
        <p>Astúcia é seu segredo. Visam o sucesso, com inteligência afiada e um olhar estratégico que os destaca.</p>
    </div>
  </div>
  <div class="container" style="flex-direction: column; margin: 0px 20px;">
    <h1>Qual dessas é mais como a <a id="dourado">SUA</a> essência?</h1>
    <a href="../Quiz/"><button class="botao">DESCUBRA JÁ</button></a>
  </div>
  
  </main>

  <?php include '../includes/footer.php' ?>

  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script>
    document.addEventListener('DOMContentLoaded', () => {
      const swiper = new Swiper('.swiper', {
        direction: 'horizontal',
        loop: true,
        navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
          
        },
        autoplay: {
      delay: 3000, // Tempo de espera entre os slides em milissegundos
      disableOnInteraction: false, // Continua o autoplay mesmo após a interação do usuário
    },
      });
    });
    const botoes = document.querySelectorAll('.quiz-buttons button');

botoes.forEach(botao => {
  botao.addEventListener('click', () => {
    // Desabilita todos os botões
    botoes.forEach(b => b.disabled = true);

    // Mostra e anima as barras de progresso
    const barras = document.querySelectorAll('.barra-progresso');
    barras.forEach(barra => {
      barra.style.display = 'block';
      setTimeout(() => {
        barra.style.width = barra.parentElement.dataset.votos + '%';
      }, 100); 
    });

    // Adiciona a classe "clicado" a todos os botões
    botoes.forEach(b => b.classList.add('clicado'));

    // Envia o voto para o servidor via AJAX
    const casa = botao.id; 
    const xhr = new XMLHttpRequest();
    xhr.open('POST', '../../database/votar.php', true); 
    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xhr.onload = function () {
      if (this.status == 200) {
        console.log(this.responseText);
        atualizaPorcentagem();
      }
    }
    xhr.send('casa=' + casa); 
  });
});

function atualizaPorcentagem() {
  const xhr = new XMLHttpRequest();
  xhr.open('GET', '../../database/obter_votos.php', true); 
  xhr.onload = function () {
    if (this.status == 200) {
      const votos = JSON.parse(this.responseText);
      for (const casa in votos) {
        const botao = document.getElementById(casa);
        if (botao) {
          botao.dataset.votos = votos[casa];
          botao.querySelector('.porcentagem').style.width = votos[casa] + '%';
        }
      }
    }
  }
  xhr.send();
}
  </script>
</body>
</html>