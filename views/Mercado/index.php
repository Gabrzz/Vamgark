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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>Mercado</title> <!-- Nome da Página -->
</head>

<body>
    <?php
    $pagina_atual = 5;
    include '../includes/header.php' ?>

    <main>

        <div class="d-flex  my-5 py-4 f-30">
            <div class="hr"></div>
            <div class="m-auto "><a class="text-decoration-none f-w" href="#">PARA COLEÇÃO</a></div>
            <div class="hr-2"></div>
            <div class="m-auto "><a class="text-decoration-none f-w" href="#">DEPARTAMENTOS</a></div>
            <div class="hr"></div>
        </div>

        <div class="poster">
            <div class="poster-l">
                <div><span class="font f-w f-60"><strong>COLEÇÃO DE NATAL</strong></span></div>
                <a class="text-decoration-none" href=""><div class="poster-comprar f-30 font f-w"><span class="">COMPRAR</span></div></a>
            </div>
            <div class="poster-card">
                <span class="f-w f-20"><strong>
                    Comemore as festas de fim de ano com o melhor presente de Natal para os fãs de Harry Potter! Repleto
                    de roupas festivas, utensílios para casa, este Baú de Presentes de Natal em Hogwarts é a maneira
                    perfeita de colocar um pouco de magia de baixo da árvore!</strong>
                </span>
            </div>
        </div>

        <div class="divisor"></div>


        <div class="">
            <div class="d-flex justify-content-between">
                <div class="hr"></div>
                <div class="f-w font f-30">BEST SELLER</div> 
                <div class="hr"></div> 
            </div>
            <div class="mercado">

                <div class="d-flex align-items-center flex-column m-auto">
                    <div class="item-comprar mb-4 d-flex justify-contetn-center">
                        <img class="img-comprar" src="../../img/varinha.png" alt="Item-Loja">
                    </div>
                    <div>
                        <a class="text-decoration-none" href=""><div class="comprar f-30 font f-w"><span class="">WAND SHOP</span></div></a>
                    </div>
                </div>
                <div class="d-flex align-items-center flex-column m-auto">
                    <div class="item-comprar mb-4 d-flex justify-contetn-center">
                        <img class="img-comprar" src="../../img/varinha.png" alt="Item-Loja">
                    </div>
                    <div>
                        <a class="text-decoration-none" href=""><div class="comprar f-30 font f-w"><span class="">WAND SHOP</span></div></a>
                    </div>
                </div>
                <div class="d-flex align-items-center flex-column m-auto">
                    <div class="item-comprar mb-4 d-flex justify-contetn-center">
                        <img class="img-comprar" src="../../img/varinha.png" alt="Item-Loja">
                    </div>
                    <div>
                        <a class="text-decoration-none" href=""><div class="comprar f-30 font f-w"><span class="">WAND SHOP</span></div></a>
                    </div>
                </div>
                

            </div>
        </div>

<div class="divisor"></div>

        <div class="">
            <div class="d-flex justify-content-between">
                <div class="hr"></div>
                <div class="f-w font f-30">NOVO</div> 
                <div class="hr"></div> 
            </div>
            <div class="mercado">

                <div class="d-flex align-items-center flex-column m-auto">
                    <div class="item-comprar mb-4 d-flex justify-contetn-center">
                        <img class="img-comprar" src="../../img/varinha.png" alt="Item-Loja">
                    </div>
                    <div>
                        <a class="text-decoration-none" href=""><div class="comprar f-30 font f-w"><span class="">WAND SHOP</span></div></a>
                    </div>
                </div>
                <div class="d-flex align-items-center flex-column m-auto">
                    <div class="item-comprar mb-4 d-flex justify-contetn-center">
                        <img class="img-comprar" src="../../img/varinha.png" alt="Item-Loja">
                    </div>
                    <div>
                        <a class="text-decoration-none" href=""><div class="comprar f-30 font f-w"><span class="">WAND SHOP</span></div></a>
                    </div>
                </div>
                <div class="d-flex align-items-center flex-column m-auto">
                    <div class="item-comprar mb-4 d-flex justify-contetn-center">
                        <img class="img-comprar" src="../../img/varinha.png" alt="Item-Loja">
                    </div>
                    <div>
                        <a class="text-decoration-none" href=""><div class="comprar f-30 font f-w"><span class="">WAND SHOP</span></div></a>
                    </div>
                </div>
                

            </div>
        </div>


    </main>

    <?php include '../includes/footer.php' ?>
</body>

</html>