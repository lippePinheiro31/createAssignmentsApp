<?require_once "validador_acesso.php"?>

<?php 

$tarefas = array();


// abrir o arquivo .as
$arquivo = fopen('arquivo.as','r');

//enquanto houverem registros (linhas) a aserem recuperados
while(!feof($arquivo)){
  //testa pelo fim de um arquivo
 $registro = fgets($arquivo);
 $tarefas[] = $registro;
}

fclose($arquivo);

?>

<html>
  <head>
    <meta charset="utf-8" />
    <title>App Help Desk</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
      .card-consultar-chamado {
        padding: 30px 0 0 0;
        width: 100%;
        margin: 0 auto;
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
    <a class="nav-link active" href="home2.php">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Ver tarefas</a>
  </li>
  <li class="nav-item" id="disabled">
    <a class="nav-link disabled" href="logoff.php">Sair</a>
  </li>
</ul>
    </nav>

    <div class="container">    
      <div class="row">

        <div class="card-consultar-chamado">
          <div class="card">
            <div class="card-header">
              Tarefas Disponíveis:
            </div>
            
            <div class="card-body">
            <?php foreach($tarefas as $tarefa){ ?>
            <?php 
              
              $tarefa_dados = explode('#', $tarefa);

            if($_SESSION['perfil_id'] == 2){
              if($_SESSION['id'] != $tarefa_dados[0]){
                continue;
              }
            }

     if(count($tarefa_dados) < 4){
       continue;
     }
              ?>
              <div class="card mb-3 bg-light">
                <div class="card-body">
                  <h5 class="card-title"><?=$tarefa_dados[0];?></h5>
                  <h6 class="card-subtitle mb-2 text-muted"><?=$tarefa_dados[1];?></h6>
                  <p class="card-text"><?=$tarefa_dados[2];?></p>
                  <p class="card-text"><?=$tarefa_dados[3];?></p>

                </div>
              </div>
              <? } ?>
              <div class="row mt-5">
                <div class="col-6">
                <a class="btn btn-lg btn-warning btn-block" href="home2.php">Voltar</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>