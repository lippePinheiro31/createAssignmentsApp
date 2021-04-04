<?require_once "validador_acesso.php"?>
<html>
  <head>
    <meta charset="utf-8" />
    <title>App Help Desk</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
      .card-abrir-chamado {
        padding: 30px 0 0 0;
        width: 100%;
        margin: 0 auto;
      }
      #date{
        margin:12px;
      }
      .nav-item a{
        color:#fff;
      }
#disabled a{

color:red;
}
    </style>
  </head>

  <body>

    <nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="#">
        <img src="logo1.png" width="30" height="30" class="d-inline-block align-top" alt="">
        App Assignments
      </a>
      <ul class="nav justify-content-end">
  <li class="nav-item">
    <a class="nav-link active" href="home.php">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="consultar_tarefa.php">Ver tarefas</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="criar_tarefa.php">Criar Tarefa +</a>
  </li>
  <li class="nav-item" id="disabled">
    <a class="nav-link disabled" href="logoff.php">Sair</a>
  </li>
</ul>
    </nav>

    <div class="container">    
      <div class="row">

        <div class="card-abrir-chamado">
          <div class="card">
            <div class="card-header">
              Criação de Tarefa
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col">
                  
                  <form method="post" action="registra_tarefa.php">
                    <div class="form-group">
                      <label>Título</label>
                      <input type="text" class="form-control" name="titulo" placeholder="Título">
                    </div>
                    
                    <div class="form-group">
                      <label>Disciplina</label>
                      <select class="form-control" name="disciplina">
                        <option>Programação Mobile</option>
                        <option>Desenvolvimento de Sistemas</option>
                        <option>Banco de Dados</option>
                        <option>Programação Web</option>
                        <option>Redes</option>
                        <option>Análise e Projeto de Sistemas</option>
                        <option>Design Digital</option>
                      </select>
                    </div>
                    <label for="date">Data de entrega:</label>  <input id="date" name="data" type="date">
                    <div class="form-group">
                      <label>Descrição</label>
                      <textarea class="form-control" name="descricao"rows="3"></textarea>
                    </div>
                 
                    <div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
  </div>
  <div class="custom-file">
    <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
    <label class="custom-file-label" for="inputGroupFile01">Escolher arquivo</label>
  </div>
</div>
                    <div class="row mt-5">
                      <div class="col-6">
                        <a class="btn btn-lg btn-warning btn-block" href="home.php">Voltar</a>
                      </div>

                      <div class="col-6">
                        <button class="btn btn-lg btn-info btn-block" type="submit">Criar</button>
                      </div>
                    </div>
                  </form>

                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
  </body>
</html>