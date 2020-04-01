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

      <div class="row pt-3">
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
              <input type="text" name="nome" class="form-control">
            </div>
          </div>

          <div class="col-6">
            <div class="form-group">
              <label for="atuacao">Cargo de Atuação:</label>
              <input type="text" name="atuacao" class="form-control">
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
              <input type="email" name="email" class="form-control">
            </div>

            <div class="form-group">
              <label for="site">Site:</label>
              <input type="url" name="site" class="form-control">
            </div>

            <div class="form-group">
              <label for="cidade">Cidade:</label>
              <input type="text" name="cidade" class="form-control">
            </div>
          </div>

          <div class="col-6">
            <div class="form-group">
              <label for="tel">Telefone para Contato:</label>
              <input type="tel" name="tel" class="form-control">
            </div>

            <div class="form-group">
              <label for="endereco">Endereço:</label>
              <input type="text" name="endereco" class="form-control">
            </div>

            <div class="form-group">
              <label for="estado">Estado:</label>
              <input type="text" name="estado" class="form-control">
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
            <textarea name="objetivo"rows="2" class="form-control"></textarea>
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
              <label for="graduacao1">Graduação 1: </label>
              <input type="text" name="graduacao1" class="form-control">

              <label for="locGrad1">Instituição de Ensino: </label>
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
              <label for="graduacao2">Graduação 2: </label>
              <input type="text" name="graduacao2" class="form-control">

              <label for="locGrad2">Instituição de Ensino: </label>
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
              <label for="exper1">Cargo:</label>
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

              <label for="experEmpre1">Empresa:</label>
              <input type="text" name="experEmpre1" class="form-control">

              <label for="oqFazia1">Oque Fazia: </label>
              <input type="text" name="oqFazia1" class="form-control">

              <hr>
            </div>
          </div>

          <div class="col-6">
            <div class="form-group">
              
            <label for="exper2">Cargo:</label>
              <input type="text" name="exper2" class="form-control">

              <div class="form-row text-center">
                
                <div class="col-6">
                  <label for="anoExpDe2">Do Ano:</label>
                  <input type="number" name="anoExpDe2" class="form-control">
                </div>
                <div class="col-6">
                  <label for="anoExpAte2">Até:</label>
                  <input type="number" name="anoExpAte2" class="form-control">
                </div>
                
              </div>

              <label for="experEmpre2">Empresa:</label>
              <input type="text" name="experEmpre2" class="form-control">

              <label for="oqFazia2">Oque Fazia: </label>
              <input type="text" name="oqFazia2" class="form-control">

              <hr>
            </div>           
          </div>

          <div class="col-6">
            <div class="form-group">
              <label for="exper3">Cargo:</label>
              <input type="text" name="exper3" class="form-control">

              <div class="form-row text-center">
                
                <div class="col-6">
                  <label for="anoExpDe3">Do Ano:</label>
                  <input type="number" name="anoExpDe3" class="form-control">
                </div>
                <div class="col-6">
                  <label for="anoExpAte3">Até:</label>
                  <input type="number" name="anoExpAte3" class="form-control">
                </div>
                
              </div>

              <label for="experEmpre3">Empresa:</label>
              <input type="text" name="experEmpre3" class="form-control">

              <label for="oqFazia3">Oque Fazia: </label>
              <input type="text" name="oqFazia3" class="form-control">

              <hr>
            </div>
          </div>
          
          <div class="col-6">
            <div class="form-group">
              
            <label for="exper4">Cargo:</label>
              <input type="text" name="exper4" class="form-control">

              <div class="form-row text-center">
                
                <div class="col-6">
                  <label for="anoExpDe4">Do Ano:</label>
                  <input type="number" name="anoExpDe4" class="form-control">
                </div>
                <div class="col-6">
                  <label for="anoExpAte4">Até:</label>
                  <input type="number" name="anoExpAte4" class="form-control">
                </div>
                
              </div>

              <label for="experEmpre4">Empresa:</label>
              <input type="text" name="experEmpre4" class="form-control">

              <label for="oqFazia4">Oque Fazia: </label>
              <input type="text" name="oqFazia4" class="form-control">

              <hr>
            </div>           
          </div>
        </div>

        <div class="row mt-2">
          <div class="col-12">
            <h4 id="referencias" onclick="mostrar('contRefer')">
              Referências <br>
              <i class="fa fa-angle-down" aria-hidden="true"></i>
            </h4>
          </div>
        </div>

        <div class="row mt-2" id="contRefer">

          <div class="col-6">
            <div class="form-group">
              
            <label for="refer1">Pessoa:</label>
              <input type="text" name="refer1" class="form-control">

              <label for="cargoRef1">Cargo:</label>
              <input type="text" name="cargoRef1" class="form-control">

              <label for="telRef1">Telefone para Contato:</label>
              <input type="tel" name="telRef1" class="form-control">

              <hr>
            </div>           
          </div>

          <div class="col-6">
            <div class="form-group">
              
            <label for="refer2">Pessoa:</label>
              <input type="text" name="refer2" class="form-control">

              <label for="cargoRef2">Cargo: </label>
              <input type="text" name="cargoRef2" class="form-control">

              <label for="telRef2">Telefone para Contato:</label>
              <input type="tel" name="telRef2" class="form-control">

              <hr>
            </div>           
          </div>

        </div>

        <div class="row mt-2">
          <div class="col-12">
            <h4 id="habilidades" onclick="mostrar('contHabilidades')">
              Habilidades <br>
              <i class="fa fa-angle-down" aria-hidden="true"></i>
            </h4>
          </div>
        </div>

        <div class="row mt-2" id="contHabilidades">

          <div class="col-6">
            <div class="form-group">

              <label for="habil1">Habilidade:</label>
              <input type="text" name="habil1" class="form-control">

              <label for="porcentHabil1">Experiência de 0 - 100</label>
              <input type="number" name="porcentHabil1" class="form-control">

              <hr>
            </div>
          </div>

          <div class="col-6">
            <div class="form-group">

              <label for="habil2">Habilidade:</label>
              <input type="text" name="habil2" class="form-control">

              <label for="porcentHabil2">Experiência de 0 - 100</label>
              <input type="number" name="porcentHabil2" class="form-control">

              <hr>
            </div>
          </div>

          <div class="col-6">
            <div class="form-group">

              <label for="habil3">Habilidade:</label>
              <input type="text" name="habil3" class="form-control">

              <label for="porcentHabil3">Experiência de 0 - 100</label>
              <input type="number" name="porcentHabil3" class="form-control">

              <hr>
            </div>
          </div>

          <div class="col-6">
            <div class="form-group">

              <label for="habil4">Habilidade:</label>
              <input type="text" name="habil4" class="form-control">

              <label for="porcentHabil4">Experiência de 0 - 100</label>
              <input type="number" name="porcentHabil4" class="form-control">

              <hr>
            </div>
          </div>

          <div class="col-6">
            <div class="form-group">

              <label for="habil5">Habilidade:</label>
              <input type="text" name="habil5" class="form-control">

              <label for="porcentHabil5">Experiência de 0 - 100</label>
              <input type="number" name="porcentHabil5" class="form-control">

              <hr>
            </div>
          </div>

          <div class="col-6">
            <div class="form-group">

              <label for="habil6">Habilidade:</label>
              <input type="text" name="habil6" class="form-control">

              <label for="porcentHabil6">Experiência de 0 - 100</label>
              <input type="number" name="porcentHabil6" class="form-control">

              <hr>
            </div>
          </div>

        </div>

        <button type="submit" class="btn btn-primary btn-block mb-3 mt-3">
          <h2>Enviar</h2>
        </button>

      </form>

    </div>

    <!-- Scripts -->
    <script src="../lib/js/jquery.js"></script>
    <script src="./js/script.js"></script>

    <!-- PHP -->
    <?php

      if ($_POST) {
        
        $nome = $_POST['nome'];
        $atuacao = $_POST['atuacao'];
        $email = $_POST['email'];
        $site = $_POST['site'];
        $tel = $_POST['tel'];
        $endereco = $_POST['endereco'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];
        $objetivo = $_POST['objetivo'];


        $graduacao1 = $_POST['graduacao1'];
        $locGrad1 = $_POST['locGrad1'];
        $anoGradDe1 = $_POST['anoGradDe1'];
        $anoGradAte1 = $_POST['anoGradAte1'];
        $merito1 = $_POST['merito1'];

        $graduacao2 = $_POST['graduacao2'];
        $locGrad2 = $_POST['locGrad2'];
        $anoGradDe2 = $_POST['anoGradDe2'];
        $anoGradAte2 = $_POST['anoGradAte2'];
        $merito2 = $_POST['merito2'];


        $exper1 = $_POST['exper1'];
        $anoExpDe1 = $_POST['anoExpDe1'];
        $anoExpAte1 = $_POST['anoExpAte1'];
        $oqFazia1 = $_POST['oqFazia1'];
        $experEmpre1 = $_POST['experEmpre1'];

        $exper2 = $_POST['exper2'];
        $anoExpDe2 = $_POST['anoExpDe2'];
        $anoExpAte2 = $_POST['anoExpAte2'];
        $oqFazia2 = $_POST['oqFazia2'];
        $experEmpre2 = $_POST['experEmpre2'];

        $exper3 = $_POST['exper3'];
        $anoExpDe3 = $_POST['anoExpDe3'];
        $anoExpAte3 = $_POST['anoExpAte3'];
        $oqFazia3 = $_POST['oqFazia3'];
        $experEmpre3 = $_POST['experEmpre3'];

        $exper4 = $_POST['exper4'];
        $anoExpDe4 = $_POST['anoExpDe4'];
        $anoExpAte4 = $_POST['anoExpAte4'];
        $oqFazia4 = $_POST['oqFazia4'];
        $experEmpre4 = $_POST['experEmpre4'];


        $refer1 = $_POST['refer1'];
        $cargoRef1 = $_POST['cargoRef1'];
        $telRef1 = $_POST['telRef1'];

        $refer2 = $_POST['refer2'];
        $cargoRef2 = $_POST['cargoRef2'];
        $telRef2 = $_POST['telRef2'];


        $habil1 = $_POST['habil1'];
        $porcentHabil1 = $_POST['porcentHabil1'];

        $habil2 = $_POST['habil2'];
        $porcentHabil2 = $_POST['porcentHabil2'];

        $habil3 = $_POST['habil3'];
        $porcentHabil3 = $_POST['porcentHabil3'];

        $habil4 = $_POST['habil4'];
        $porcentHabil4 = $_POST['porcentHabil4'];

        $habil5 = $_POST['habil5'];
        $porcentHabil5 = $_POST['porcentHabil5'];

        $habil6 = $_POST['habil6'];
        $porcentHabil6 = $_POST['porcentHabil6'];


        $pagHtml = '
        <!doctype html>
        <html lang="pt-br">
          <head>
        
            <title>Currículo</title>
            <!-- Metas Tags-->
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <!-- Links -->
            <link rel="stylesheet" href="../lib/css/bootstrap.min.css">
            <link rel="stylesheet" href="./css/styleCurr.css">
            <link rel="stylesheet" href="../lib/css/all.min.css">
        
          <body class="bg-dark">
                    
            <div class="container mt-3 mb-3" id="pgn">
        
              <div class="container">
                <div class="row mt-3">
                  <div class="col-3 offset-1">
                    <img src="../img/avatar.png" alt="avatar" width="110px" class="float-right">
                  </div>
                  <div class="col-6 offset-1">
                    <h1 class="mt-3 text-info">' .$nome.'</h1>
                    <h5>' .$atuacao. '</h5>
                    <hr class="hr1"><hr class="hr2">
                  </div>
                </div>
              </div>
        
              <div class="container">
                <div class="row mt-3">
                  <div class="col-3 offset-1">
                    <h5 class="float-right"><b>Contato</b></h5>
                  </div>
                  <div class="col-6 offset-1">
                    <h5><b>Objetivo</b></h5>
                  </div>
                </div>
              </div>
        
              <div class="container">
                <div class="row mt-2">
        
                  <div class="col-3 offset-1" id="block">
                    <div class="row mt-1">
                      <div class="col-12">
                        <i class="float-right">
                          ' .$email. '
                          <i class="fa fa-envelope" aria-hidden="true"></i>
                        </i>
                        
                      </div>
                    </div>
                    <div class="row mt-1">
                      <div class="col-12">
                        <i class="float-right">
                          ' .$tel. '
                          <i class="fa fa-phone-alt" aria-hidden="true"></i>
                        </i>
                      </div>
                    </div>
                    <div class="row mt-1">
                      <div class="col-12">
                        <i class="float-right">
                          ' .$site. '
                          <i class="fa fa-laptop" aria-hidden="true"></i>
                        </i>
                      </div>
                    </div>
                    <div class="row mt-1">
                      <div class="col-12">
                        <i class="float-right">
                          ' .$endereco. ' <br> ' .$cidade. ' - ' .$estado. '
                          <i class="fa fa-map-marker-alt" aria-hidden="true"></i>
                        </i>
                      </div>
                    </div>
                  </div>
        
                  <div class="col-6 offset-1" id="block">
                    <div class="row mt-1">
                      <p>' .$objetivo. '.</p>
                      <p><a href="#" class="text-danger"><i>Veja aqui exemplos de objetivos prontos...</i></a></p>
                    </div>
                  </div>
        
                </div>
              </div>
        
              <div class="container">
                <div class="row mt-3">
                  <div class="col-3 offset-1">
                    <h5 class="float-right"><b>Formação</b></h5>
                  </div>
        
                  <div class="col-6 offset-1">
                    <h5><b>Experiências</b></h5>
                  </div>
                </div>
              </div>
        
              <div class="container">
                <div class="row mt-2">
        
                  <div class="col-3 offset-1" id="block">
                    <div class="row mt-1">
                      <div class="col-12">
                        <i class="float-right text-danger text-right"><b>' .$graduacao1. '</b></i>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-12">
                        <i class="float-right txtPeq text-right"><b>' .$locGrad1. '</b></i>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-12">
                        <small class="text-muted float-right">'.$anoGradDe1. ' - ' .$anoGradAte1.'</small>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-12">
                        <p class="txtPeq text-right">' .$merito1. '.</p>
                      </div>
                    </div>
        
                    <div class="row mt-4">
                      <div class="col-12">
                        <i class="float-right text-danger"><b>' .$graduacao2. '</b></i>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-12">
                        <i class="float-right txtPeq"><b>' .$locGrad2. '</b></i>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-12">
                        <small class="text-muted float-right">' .$anoGradDe2. ' - ' .$anoGradAte2. '</small>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-12">
                        <p class="txtPeq text-right">' .$merito2. '.</p>
                      </div>
                    </div>
                  </div>
        
                  <div class="col-6 offset-1" id="block">
                    <div class="row mt-1">
                      <div class="col-12">
                        <i class="text-danger"><b>' .$exper1.'</b></i>
                        <small class="text-muted"> / ' .$anoExpDe1. ' - ' .$anoExpAte1. '</small>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-12">
                        <i class="txtPeq"><b>' .$experEmpre1. '</b></i>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-12">
                        <i class="txtPeq text-left">
                          ' .$oqFazia1. '.
                        </i>
                      </div>
                    </div>
        
                    <div class="row mt-4">
                      <div class="col-12">
                        <i class="text-danger"><b>' .$exper2. '</b></i>
                        <small class="text-muted"> / ' .$anoExpDe2. ' - ' .$anoExpAte2. '</small>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-12">
                        <i class="txtPeq"><b>' .$experEmpre2. '</b></i>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-12">
                        <i class="txtPeq text-left">
                          ' .$oqFazia2. '.
                        </i>
                      </div>
                    </div>
        
                    <div class="row mt-4">
                      <div class="col-12">
                        <i class="text-danger"><b>' .$exper3. '</b></i>
                        <small class="text-muted"> / ' .$anoExpDe3. ' - ' .$anoExpAte3. '</small>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-12">
                        <i class="txtPeq"><b>' .$experEmpre3. '</b></i>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-12">
                        <i class="txtPeq text-left">
                          ' .$oqFazia3. '.
                        </i>
                      </div>
                    </div>
        
                    <div class="row mt-4">
                      <div class="col-12">
                        <i class="text-danger"><b>' .$exper4. '.</b></i>
                        <small class="text-muted"> / ' .$anoExpDe4. ' - ' .$anoExpAte4. '</small>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-12">
                        <i class="txtPeq"><b>' .$experEmpre4. '</b></i>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-12">
                        <i class="txtPeq text-left">
                          ' .$oqFazia4. '.
                        </i>
                      </div>
                    </div>
                  </div>
        
                </div>
        
                
              </div>
        
              <div class="container">
                <div class="row mt-3">
                  <div class="col-3 offset-1">
                    <h5 class="float-right"><b>Referências</b></h5>
                  </div>
          
                  <div class="col-6 offset-1">
                    <h5><b>Habilidades</b></h5>
                  </div>
                </div>
              </div>
        
              <div class="container">
                <div class="row mt-2">
                  <div class="col-3 offset-1" id="block">
                    <div class="row mt-1">
                      <div class="col-12">
                        <i class="float-right text-danger"><b>' .$refer1. '</b></i>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-12">
                        <i class="float-right txtPeq"><b>' .$cargoRef1. '.</b></i>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-12">
                        <small class="text-muted float-right">' .$telRef1. '</small>
                      </div>
                    </div>
        
                    <div class="row mt-4">
                      <div class="col-12">
                        <i class="float-right text-danger text-right"><b>' .$refer2. '</b></i>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-12">
                        <i class="float-right txtPeq"><b>' .$cargoRef2. '.</b></i>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-12">
                        <small class="text-muted float-right">' .$telRef2. '</small>
                      </div>
                    </div>
                  </div>
        
                  <div class="col-6 offset-1" id="block">
                      
                    <div class="row">
                      <div class="col-6">
        
                        <label for="">' .$habil1. '</label>
                        <div class="progress">
                          <div class="progress-bar progress-bar-striped bg-primary"
                            style="width: ' .$porcentHabil1. '%"
                            role="progressbar"
                            aria-valuenow="' .$porcentHabil1. '"
                            aria-valuemin="0"
                            aria-valuemax="100">
                          </div>
                        </div>
        
                        <label for="">' .$habil2. '</label>
                        <div class="progress">
                          <div class="progress-bar progress-bar-striped bg-primary"
                            style="width: ' .$porcentHabil2. '%"
                            role="progressbar"
                            aria-valuenow="' .$porcentHabil2. '"
                            aria-valuemin="0"
                            aria-valuemax="100">
                          </div>
                        </div>
        
                        <label for="">' .$habil3. '</label>
                        <div class="progress">
                          <div class="progress-bar progress-bar-striped bg-primary"
                            style="width: ' .$porcentHabil3. '%"
                            role="progressbar"
                            aria-valuenow="' .$porcentHabil3. '"
                            aria-valuemin="0"
                            aria-valuemax="100">
                          </div>
                        </div>
                      </div>
                      <div class="col-6">
        
                        <label for="">' .$habil4. '</label>
                        <div class="progress">
                          <div class="progress-bar progress-bar-striped bg-primary"
                          style="width: ' .$porcentHabil4. '%"
                          role="progressbar"
                          aria-valuenow="' .$porcentHabil4. '"
                          aria-valuemin="0"
                          aria-valuemax="100">
                        </div>
                        </div>
        
                        <label for="">' .$habil5. '</label>
                        <div class="progress">
                          <div class="progress-bar progress-bar-striped bg-primary"
                          style="width: ' .$porcentHabil5. '%"
                          role="progressbar"
                          aria-valuenow="' .$porcentHabil5. '"
                          aria-valuemin="0"
                          aria-valuemax="100">
                        </div>
                        </div>
        
                        <label for="">' .$habil6. '</label>
                        <div class="progress">
                          <div class="progress-bar progress-bar-striped bg-primary"
                          style="width: ' .$porcentHabil6. '%"
                          role="progressbar"
                          aria-valuenow="' .$porcentHabil6. '"
                          aria-valuemin="0"
                          aria-valuemax="100">
                        </div>
                        </div>
                      </div>
                    </div>
        
                  </div>
                </div>
              </div>
        
            </div>
        
            <!-- Scripts -->
            <script src="../lib/js/jquery.js"></script>
          </body>
        </html>';

        $curriculo = fopen('curriculo.html', 'a+');

        fwrite($curriculo, $pagHtml);

        fclose($curriculo);

        echo '<a href="./curriculo.html"><h3 class="container text-center btn-outline-success">
                Ver o Currículo...
              </h3></a>';

      }
    
    ?>

  </body>
</html>