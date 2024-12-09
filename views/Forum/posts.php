<main>

  <div class="mx-5 px-3 ">
    <!--TITTLE-->
    <div class="f-w text-center py-2 px-5"><span class="font f-30"><strong>Mensagens da academia
          Vamgark</strong></span></div>

    <!--POST-->
    <div class="forum">

      <table class="tabela font f-w">

        <tbody class="">
          <?php foreach ($resultData as $data) { 
            $dataPublicacao = new DateTime($data->getData());
            $dataAtual = new DateTime();
            $interval = $dataPublicacao->diff($dataAtual);

            if ($interval->d >= 1) {
              $tempoPassado = $interval->d . ' dias';
            } else if ($interval->h >= 6) {
              $tempoPassado = $interval->h . 'h';
            } else if ($interval->h < 6) {
              $tempoPassado = $interval->h . 'h ' . $interval->i . 'm';
            } else {
              $tempoPassado = $interval->i . 'm';
            }
          ?>
            <tr>
              <a href="#" class="text-decoration-none">
                <th>
                  <span class="f-16"><?= $data->getTitulo() ?></span><br>
                  <span class="font-light f-w f-16"><?= substr($data->getTexto(), 0, 80) ?>[...]</span>
                </th>
                <th class="px-5 text-center">
                  <span class="font f-w f-20"><strong><?= $tempoPassado ?></strong></span><br>
                  <span class="font-light f-w f-16 sb-post">atrás</span>
                </th>
                <th class="mx-5">
                  <span
                    class="font f-w f-20"><strong><?= $UsuarioController->findName($data->getIdUsuario()); ?></strong></span>
                </th>
              </a>
            </tr>
          <?php } ?>
        </tbody>
      </table>

</main>