<?php

include '../../controller/UsuarioController.php';
include '../../models/verifica_login.php';

if (isset($_SESSION['usuario_id'])) {
    $UsuarioController = new UsuarioController();
    $usuario = $UsuarioController->findId($_SESSION['usuario_id']);
}



?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regras</title>
    <link rel="stylesheet" href="style.css">
    <?php include '../includes/head.php'; ?>
    <?php include '../includes/bs-h.php'; ?>
</head>

<body>
    <?php include '../includes/header.php' ?>


    <main>
        <div class="f-w font f-20 text-center p-5 col-8 m-auto">

            Regras do Fórum da Academia Vamgark<br><br>

            Bem-vindo ao Fórum da Academia Vamgark! Este é um espaço dedicado aos fãs e membros da comunidade para
            discutir e compartilhar suas experiências mágicas. Para manter o fórum seguro e acolhedor para todos,
            pedimos que você siga as regras abaixo:<br><br>

            1. Respeito Mútuo<br>

            Trate todos os membros com respeito e cortesia. Discussões saudáveis são incentivadas, mas comportamentos
            agressivos ou ofensivos não serão tolerados.
            Não use linguagem abusiva, discriminatória ou que incite ódio.<br><br>

            2. Conteúdo Apropriado<br>

            Mantenha as discussões relevantes ao tema do fórum e evite postar conteúdo irrelevante ou spam.
            Não compartilhe material inadequado ou proibido, incluindo conteúdos explícitos, violentos ou protegidos por
            direitos autorais.<br><br>

            3. Privacidade e Segurança<br>

            Não compartilhe informações pessoais suas ou de outros membros publicamente. Proteja sua privacidade e a dos
            demais.
            Evite solicitações de informações pessoais ou contato fora do fórum.<br><br>

            4. Moderação<br>

            Respeite as decisões dos moderadores. Eles estão aqui para garantir que o fórum permaneça um ambiente seguro
            e acolhedor.
            Se você encontrar conteúdo ou comportamento que viole as regras, utilize as ferramentas de denúncia para
            notificar a moderação.<br><br>

            5. Conteúdo Construtivo<br>

            Ao criar novos tópicos ou responder a discussões, seja construtivo e agregue valor à conversa.
            Use títulos descritivos para suas postagens e forneça contexto sempre que possível.<br><br>

            6. Participação Positiva<br>

            Incentivamos a participação ativa e positiva no fórum. Compartilhe suas ideias, participe de eventos e apoie
            outros membros da comunidade.
            Seja acolhedor e ajude novos membros a se integrarem ao fórum.<br><br>

            7. Diretrizes Específicas<br>

            Algumas áreas do fórum podem ter regras adicionais. Certifique-se de ler e seguir quaisquer diretrizes
            específicas antes de postar nessas seções.<br><br>

            Consequências para Violações<br>

            Violações das regras podem resultar em advertências, suspensão ou banimento do fórum, dependendo da
            gravidade e recorrência da infração.<br><br><br>

            Obrigado por fazer parte da comunidade Vamgark. Esperamos que você tenha uma experiência mágica e
            enriquecedora no fórum. Vamos juntos fazer deste espaço um lugar vibrante e seguro para todos os entusiastas
            de magia!<br>


        </div>
    </main>


    <?php include '../includes/bs-f.php' ?>
    <?php include '../includes/footer.php' ?>
</body>

</html>