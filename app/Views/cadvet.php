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
      <a class="navbar-brand text-white" href="#">Bem-vindo, veterinário! Que tal começarmos seu cadastro?</a>
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
            </div>
            <div class="form-row">
              <label for="">Email</label>
              <input type="email" name="email" id="email" class="form-control" placeholder="nome@dominio.com">
            </div>
            <div class="form-row mt-3">
              <div class="col-md-6">
                <label for="">Senha</label>
                <input type="password" name="senha" id="senha" class="form-control" placeholder="Sua senha">
              </div>
              <div class="col-md-6">
                <label class=""for="">CPF</label>
                <input type="text" name="cpf" id="cpf" class="form-control" placeholder="Insira o seu CPF">
              </div>
            </div>
            <div class="col-md-6">
                <label class=""for="">CRMV</label>
                <input type="text" name="crmv" id="crmv" class="form-control" placeholder="Insira o seu CRMV">
              </div>
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
        <div class="breadcrumb"><h3>Veterinários Cadastrados</h3></div>
        <div class="row ml-1">
          <table class="table table-hover table-sm table-responsive table-bordered">
            <thead class=" text-dark">
              <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Cpf</th>
                <th>Crmv</th>
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