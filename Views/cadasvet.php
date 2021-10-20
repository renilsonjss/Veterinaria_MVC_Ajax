<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <title>VacinaPet</title>
</head>
<body>
  <div class="container-fluid">
    <nav class="navbar navbar-expand-xl navbar-light bg-dark row">
      <a class="navbar-brand text-white" href="#">Bem-vindo, vet! Que tal começarmos seu cadastro?</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link text-white" href="#">Home <span class="sr-only ">(current)</span></a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0" id="pesquisar">
          <input class="form-control mr-sm-2 pesquisa" type="search" placeholder="Search" aria-label="Search">
        </form>  
      </div>
    </nav>


    <div class="row">
      <div class="col-md-5 ">
        <form name="FormCad" id="form-user" class="mt-3">
          <legend class=""><h3 class="">Formulário de Cadastro</h3></legend>
          <fieldset>
          <div class="form-row">
              <div class="col-md-6">
                <label class=""for="">Nome</label>
                <input type="hidden" name="id">
                <input type="text" name="nome" id="mome" class="form-control" placeholder="Insira o seu nome">
              </div>
              <div class="col-md-6">
                <label for="">Sobrenome</label>
                <input type="text" name="sobreNome" id="sobreNome" class="form-control" placeholder="Insira a sua senha">
              </div>
            </div>
            <div class="form-row">
              <label for="">Email</label>
              <input type="email" name="email" id="email" class="form-control" placeholder="nome@dominio.com">
            </div>
            <div class="form-row mt-2">
              <div class="col-md-5">
                <label for="">Data de nascimento</label>
                <input type="date" name="nascimento" id="nascimento" class="form-control">
              </div>
              <div class="col-md-6">
                <div>
                <label for=""> Nacionalidade</label>
                </div>
                <div class="form-row">
                  <select name="pais" id="pais" class="custom-select">
                    <option value="Angola" selected>Angola</option>
                    <option value="Africa do Sul">Africa do Sul</option>
                    <option value="USA"> USA</option>
                    <option value="Brasil">Brasil</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="mt-2 d-blok form-row mt-4">
              <label for="">Sexo:</label>
                <div class="px-3">
                  <input type="radio" name="sexo" id="masc" value="masculino"class="">
                  <label for="masc" class="custom-control-label">Masculino</label>
                </div>
                <div class="px-3">
                  <input type="radio" name="sexo" id="fem" value="femenino" class="">
                  <label for="fem" class="custom-control-label">Femenino</label>
                </div>
            </div>
            
            <div class="form-row mt-3">
              <div class="col-md-6">
                <label for="">Senha</label>
                <input type="password" name="senha" id="senha" class="form-control" placeholder="Sua senha">
              </div>
              <div class="col-md-6">
                <label for="" class="">Confirmar Senha</label>
                <input type="password" name="confirmaSenha" class="form-control" id="confirmaSenha" placeholder="Repita a senha">
              </div>
            </div>

            <div id="resposta"></div>
            <div class="form-row mt-2">
              <input type="submit" class="btn btn-lg btn-block btn-success mt-3 form-check" value="Cadastrar">
            </div>
          </fieldset>
        </form>
      </div>
      <div class="col-md-7 mt-3">
        <div class="breadcrumb"><h3>Usuários Cadastrados</h3></div>
        <div class="row ml-1">
          <table class="table table-hover table-sm table-responsive table-bordered">
            <thead class=" text-dark">
              <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Sobre Nome</th>
                <th>Email</th>
                <th>Nascimento</th>
                <th>Nacionalidade</th>
                <th>Sexo</th>
                <th>Operações</th>
                <th></th>
              </tr>
            </thead>
            <tbody id="usuarios">
              
            </tbody>
          </table>

        </div>
      </div>
  </div>
    
      

  <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/funcoes.js"></script>
  <script src="js/js.js"></script>
</body>
</html>
