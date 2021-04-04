<?require_once "validador_acesso.php"?>

<html>
  <head>
    <meta charset="utf-8" />
    <title>App Help Desk</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
      .card-home {
        padding: 30px 0 0 0;
        width: 100%;
        margin: 0 auto;
      }

#disabled a{

color:red;
}
.card-body{
  display:flex;
  justify-content:center;
}

    </style>
  </head>

  <body>

    <nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="#">
        <img src="logo1.png" width="30" height="30" class="d-inline-block align-top" alt="">
        App Assignments
      </a>
  <li class="nav-item" id="disabled">
    <a class="nav-link disabled" href="logoff.php">Sair</a>
  </li>
</ul>
    </nav>

    <div class="container">    
      <div class="row">

        <div class="card-home">
          <div class="card">
            <div class="card-header">
              Menu
            </div>
            <div class="card-body">
                <div class="col-6 d-flex justify-content-center">
                <a href="consultar_tarefa_user.php">
                  <img src="formulario_tarefa.png" id="img" width="70" height="70">
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
  </body>
</html>