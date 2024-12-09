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
    <?php include '../includes/bs-h.php' ?>
    <link rel="stylesheet" href="style.css">
    <title>Conta</title> <!-- Nome da Página -->
</head>
<body>
    <?php include '../includes/header.php' ?>
    
    <main>
    
    <div class="background profile">

        <div class="indicator">
            <span class="font">Olá <?php echo $usuario->getNome(); ?>, essa é sua conta!</span>
        </div>
        
        <div class="profile-image">
            <a href="./editar.php">
                <img class="profile-image-img" src="../../img/profile-image.png" alt="Profile Image">
                <div class="profile-edit-icon" ><box-icon size="md" color='#FFFFFF' name='edit' type='solid' ></box-icon></div>
            </a>
        </div>


        <div class="mt-3">
            <span class="font f-40 f-w"><?php echo $usuario->getNome()?></span>
        </div>
        <div>
            <span class="font-light f-20 f-w">Griffindor</span>
        </div>
    </div>

    <div class="d-flex w-100 info">
        <!-- Casa -->
        <div class="px-5">
            <div class="text-center my-4"><span class="font f-w f-40">Casa</span></div>
            <div class="my-4" style="width:38vw; height:245px; border-radius:50px; background-color: #5B5151;"><img src="" alt="Imagem Tema da Casa"></div>
            <div class="mt-4 mb-5 px-4 pt-3">
                <span class="font-light f-w f-25 "><strong class="font-bold">Pontos:</strong> 680 pts.</span></br></br>
                <span class="font-light f-w f-25 "><strong class="font-bold">Integrantes:</strong> 112 Magos.</span></br></br>
                <span class="font-light f-w f-25 "><strong class="font-bold">Professores:</strong> Arnaldo, Lênis, Colbert, Stuart.</span></br>
            </div>
            <div class="my-4 text-center"><button class="botao"><span class="mx-5 font f-w f-24">Visitar a Casa</span></button></div>
            <div class="my-4 text-center"><span class="f-lema f-w f-24">“O lema da casa bem bolado vai aqui</br>desse modelo divertido”</span></div>
        
        </div>
        

        
        <div class="divisor-line mx-1">

        </div>

        <!-- Mago -->
        <div class="px-5 ">
            <div class="text-center my-4"><span class="font f-w f-40">Mago</span></div>
            <div class="my-4 insignias">
                <div class="insignias-tittle"><span class="font f-b f-16">Insígnias</span></div>      
                <div class="d-flex flex-column pb-1">
                    <div class="d-flex flex-inline justify-content-around mt-4 mb-3 px-4">
                        <div class="insignia"></div>
                        <div class="insignia"></div>
                        <div class="insignia"></div>
                        <div class="insignia"></div>
                        <div class="insignia"></div>
                    </div>
                    <div class="d-flex flex-inline justify-content-around mt-3 mb-4 px-4">
                        <div class="insignia"></div>
                        <div class="insignia"></div>
                        <div class="insignia"></div>
                        <div class="insignia"></div>
                        <div class="insignia"></div>
                    </div>
                </div>
            </div>
            <div class="my-4 px-4 pt-3">
                <span class="font-light f-w f-25"><strong class="font-bold">Pontuação Pessoal:</strong> 20 pts.</span></br></br>
                <span class="font-light f-w f-25"><strong class="font-bold">História:</strong> "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi.”</span></br>
            </div>
            <div class="d-flex justify-content-around">
                <a class="f-w" href="#"><span>Histórico de compras</span></a>
                <a class="f-w px-3" href="#"><span>Consertar minha varinha</span></a> 
            </div>
        </div>
    </div>

    <div style="height: 50px" ></div>
    
    <!--    MATÉRIAS    -->
    <div class="col-md-10 m-auto my-5">
        <div class="f-w container">
            <div class="my-3 text-center"><span class="font-bold f-50">Minhas Matérias</span></div>

            <div class="d-flex">
                <div class="f-20 m-auto">
                    <div class="d-flex flex-md-row flex-column f-20 m-auto my-3">

                        <a href="" class="text-decoration-none f-w">
                            <div class="card-materia">
                                <div class="text-center tittle-materia"><span class="px-3 mx-4"><strong>Materia</strong></span></div>
                                <div class="d-flex justify-content-around">
                                    <img class="img-materia" src="../../img/mario.jpeg" alt="">
                                    <div class="d-flex flex-column justify-content-center">
                                        <span><strong>P. Mario Calebe</strong></span>
                                        <span>Da aula de fudeção bolada na sala 214.</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="" class="text-decoration-none f-w">
                            <div class="card-materia">
                                <div class="text-center tittle-materia"><span class="px-3 mx-4"><strong>Materia</strong></span></div>
                                <div class="d-flex justify-content-around">
                                    <img class="img-materia" src="../../img/mario.jpeg" alt="">
                                    <div class="d-flex flex-column justify-content-center">
                                        <span><strong>P. Mario Calebe</strong></span>
                                        <span>Da aula de fudeção bolada na sala 214.</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="" class="text-decoration-none f-w">
                            <div class="card-materia">
                                <div class="text-center tittle-materia"><span class="px-3 mx-4"><strong>Materia</strong></span></div>
                                <div class="d-flex justify-content-around">
                                    <img class="img-materia" src="../../img/mario.jpeg" alt="">
                                    <div class="d-flex flex-column justify-content-center">
                                        <span><strong>P. Mario Calebe</strong></span>
                                        <span>Da aula de fudeção bolada na sala 214.</span>
                                    </div>
                                </div>
                            </div>
                        </a>

                      

                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div style="height: 50px" ></div>
    
    
    
</main>
    
    <?php include '../includes/bs-f.php' ?>
    <?php include '../includes/footer.php' ?>
</body>
</html>