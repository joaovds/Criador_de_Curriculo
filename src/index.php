<!doctype html>
<html lang="pt-br">
  <head>

    <title>Formulário para Currículo</title>
    <!-- Metas Tags-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Links -->
    <link rel="stylesheet" href="../lib/css/bootstrap.min.css">
    <link rel="stylesheet" href="../lib/css/all.min.css">
    <link rel="stylesheet" href="./css/style.css">

  <body class="bg-dark text-light">

    <div class="container">

      <div class="row mt-2">
        <div class="col-12">
          <h3 class="text-center">Preencha o Formulário a seguir para a criação do seu Currículo:</h3>
          <hr class="sepTitle">
        </div>
      </div>

      <form action="./index.php" method="post" class="mt-4">

        <div class="row">
          <div class="col-12">
            <h4 id="cabecalho" onclick="mostrar('contCabecalho')">
              Cabeçalho <br>
              <i class="fa fa-angle-down" aria-hidden="true"></i>
            </h4>
          </div>
        </div>

        <div class="row mt-2" id="contCabecalho">
          <div class="col-6">
            <div class="form-group">
              <label for="nome">Nome:</label>
              <input type="text" name="nome" id="nome" class="form-control">
            </div>
          </div>

          <div class="col-6">
            <div class="form-group">
              <label for="atuacao">Cargo de Atuação:</label>
              <input type="text" name="atuacao" id="atuacao" class="form-control">
            </div>
          </div>
        </div>

        <div class="row mt-2">
          <div class="col-12">
            <h4 id="contato" onclick="mostrar('contContato')">
              Contato <br>
              <i class="fa fa-angle-down" aria-hidden="true"></i>
            </h4>
          </div>
        </div>

        <div class="row mt-2" id="contContato">
          <div class="col-6">
            <div class="form-group">
              <label for="email">E-mail:</label>
              <input type="email" name="email" id="email" class="form-control">
            </div>

            <div class="form-group">
              <label for="site">Site:</label>
              <input type="url" name="site" id="site" class="form-control">
            </div>
          </div>

          <div class="col-6">
            <div class="form-group">
              <label for="tel">Telefone para Contato:</label>
              <input type="tel" name="tel" id="tel" class="form-control">
            </div>

            <div class="form-group">
              <label for="endereco">Endereço:</label>
              <input type="text" name="endereco" id="endereco" class="form-control">
            </div>
          </div>
        </div>

        <div class="row mt-2">
          <div class="col-12">
            <h4 id="objetivo" onclick="mostrar('contObjetivo')">
              Objetivo <br>
              <i class="fa fa-angle-down" aria-hidden="true"></i>
            </h4>
          </div>
        </div>

        <div class="row mt-2" id="contObjetivo">
          <div class="col-12">
            <textarea name="objetivo" id="objetivo" rows="2" class="form-control"></textarea>
          </div>
        </div>

        <div class="row mt-2">
          <div class="col-12">
            <h4 id="formacao" onclick="mostrar('contFormacao')">
              Formação <br>
              <i class="fa fa-angle-down" aria-hidden="true"></i>
            </h4>
          </div>
        </div>

        <div class="row mt-2" id="contFormacao">

          <div class="col-6">
            <div class="form-group">
              <label for="graduacao">Graduação 1: </label>
              <input type="text" name="graduacao1" id="graduacao1" class="form-control">

              <label for="locGrad">Instituição de Ensino: </label>
              <input type="text" name="locGrad1" class="form-control">

              <div class="form-row text-center">
                
                <div class="col-6">
                  <label for="anoGradDe1">Do Ano:</label>
                  <input type="number" name="anoGradDe1" class="form-control">
                </div>
                <div class="col-6">
                  <label for="anoGradAte1">Até:</label>
                  <input type="number" name="anoGradAte1" class="form-control">
                </div>
                
              </div>

              <label for="merito1">Mérito(s)</label>
              <input type="text" name="merito1" class="form-control">

              <hr>
            </div>
          </div>
          <div class="col-6">
            <div class="form-group">
              <label for="graduacao">Graduação 2: </label>
              <input type="text" name="graduacao2" id="graduacao1" class="form-control">

              <label for="locGrad">Instituição de Ensino: </label>
              <input type="text" name="locGrad2" class="form-control">

              <div class="form-row text-center">

                <div class="col-6">
                  <label for="anoGradDe2">Do Ano:</label>
                  <input type="number" name="anoGradDe2" class="form-control">
                </div>
                <div class="col-6">
                  <label for="anoGradAte2">Até:</label>
                  <input type="number" name="anoGradAte2" class="form-control">
                </div>
                
              </div>

              <label for="merito2">Mérito(s)</label>
              <input type="text" name="merito2" class="form-control">

              <hr>
            </div>           
          </div>
        </div>

        <div class="row mt-2">
          <div class="col-12">
            <h4 id="experiencias" onclick="mostrar('contExperiencias')">
              Experiências <br>
              <i class="fa fa-angle-down" aria-hidden="true"></i>
            </h4>
          </div>
        </div>

        <div class="row mt-2" id="contExperiencias">

          <div class="col-6">
            <div class="form-group">
              <label for="exper1">Experiência 1</label>
              <input type="text" name="exper1" class="form-control">

              <div class="form-row text-center">
                
                <div class="col-6">
                  <label for="anoExpDe1">Do Ano:</label>
                  <input type="number" name="anoExpDe1" class="form-control">
                </div>
                <div class="col-6">
                  <label for="anoExpAte1">Até:</label>
                  <input type="number" name="anoExpAte1" class="form-control">
                </div>
                
              </div>

              <hr>
            </div>
          </div>

          <div class="col-6">
            <div class="form-group">
              

              <hr>
            </div>           
          </div>

          <div class="col-6">
            <div class="form-group">
              <label for="exper1">Experiência 2</label>
              <input type="text" name="exper2" class="form-control">

              <hr>
            </div>
          </div>
          
          <div class="col-6">
            <div class="form-group">
              

              <hr>
            </div>           
          </div>
        </div>

        </div>

      </form>

    </div>

    <!-- Scripts -->
    <script src="../lib/js/jquery.js"></script>
    <script src="./js/script.js"></script>

    <?php

    ?>

  </body>
</html>