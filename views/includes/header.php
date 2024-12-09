<link rel="stylesheet" href="../style/header.css">

<header>
  <a id="topo" href=""></a>
  <div class="topo pure-g">
    <div class="pure-u-1 pure-u-md-1-3">
      <div class="header-left">
        <a href="../Extras/faq.php" class="social"><img src="../../img/Faq.png" alt="Ícone FAQ"></a>
        <a href="www.instagram.com/vamgarkacademy" class="icon-link social"><i class="fab fa-instagram"></i></a> 
        <a href="#" class="icon-link social"><i class="fab fa-facebook"></i></a>
        <a href="#" class="icon-link social"><i class="fab fa-twitter"></i></a>
      </div>
    </div>
    <div class="pure-u-1 pure-u-md-1-3">
      <div class="header-center">
        <a href="../Home/"><img class="logo-vamgark" src="../../img/logo-vamgark-whitesimple.png" alt="Logo Vamgark"></a>
      </div>
    </div>
    <div class="pure-u-1 pure-u-md-1-3">
      <div class="header-right">
        <div class="search">
          <input type="text" placeholder="Buscar">
          <i class="fas fa-search"></i>
        </div>
        <div class="minhaconta">
          <a href="../MinhaConta" class="button">
            <?php
            if ($usuario->getIdUsuario() == 1) {
              echo "Administração";
            }
            else{
              echo "Minha Conta";
            }
            ?>
          </a>
        </div>
      </div>
    </div>
     <a href="#" class="menu-toggle"> <i class="fas fa-bars"></i> </a> 
  </div>

  <div class="menu">
    <ul class="nav-menu pure-g">
      <div class="social search">
          <input type="text" placeholder="Buscar">
          <i class="fas fa-search"></i>
      </div>
      <li class="pure-u-1-6"><a href="../Home">Página Inicial</a></li>
      <li class="pure-u-1-6"><a href="../Sobre">Sobre o Curso</a></li>
      <li class="pure-u-1-6"><a href="../Eventos">Eventos</a></li>
      <li class="pure-u-1-6"><a href="../Forum">Fórum</a></li>
      <li class="pure-u-1-6"><a href="../Mercado">Mercado</a></li>
      <li class="pure-u-1-6"><a href="../Casa">Sua Casa</a></li>
      <li class="pure-u-1-6 minhaconta"><a href="../MinhaConta" class="button">Minha Conta</a></li>
      <div class="socials">
      <li class="social"><a href="../Faq"><img src="../../img/Faq.png" class="faq" alt="Ícone FAQ"></a></li>
      <li class="social"><a href="www.instagram.com/vamgarkacademy" class="icon-link"><i class="fab fa-instagram"></i></a></li>
      <li class="social"><a href="#" class="icon-link"><i class="fab fa-facebook"></i></a></li>
      <li class="social"><a href="#" class="icon-link"><i class="fab fa-twitter"></i></a></li>
      </div>
    </ul>
  </div>

  <div class="page-indicator">
    <span>Você está aqui</span>
  </div>

  <style>
    .page-indicator{
      margin-left: 20px;
      transform: translateX(calc(16.5vw * (<?php echo $pagina_atual - 1; ?>)));
    }
  </style>
</header>

<script>
  const menuToggle = document.querySelector('.menu-toggle');
const menu = document.querySelector('.menu');

menuToggle.addEventListener('click', () => {
  menu.classList.toggle('open');
});
</script>