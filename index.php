<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="viewport" content="width=device-width, user-scalable=no">
  <title>Registro de Votos</title>
      <link rel="stylesheet" href="src/css/bootstrap.min.css">
<style type="text/css">
/*h2 {
  background-color: black;
  color: white;
}*/
#subtitulo {
  background-color: rgb(187, 187, 187);
  color: black;
  padding: 5 px;
  padding-top: 5px;
  padding-bottom: 5px;
}
label {
  font-weight: bold;
}
h2{
    background-color:rgb(228, 228, 228);
      padding: 5px;
}
/*form{
    background-color: aliceblue;
}*/
#cuerpo{
        background-color: rgb(247, 247, 247);
}
</style>
</head>
<body>


    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
      <!-- Logo -->
      <a class="navbar-brand" href="#">Sistema Votos</a>
      <button
        class="navbar-toggler collapsed"
        type="button"
        data-toggle="collapse"
        data-target="#ca-navbar"
        aria-controls="ca-navbar"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- Menu Area -->
      <div class="navbar-collapse collapse" id="ca-navbar" style>
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
              <a class="nav-link">Home</a>
          </li>
          <li class="nav-item">
              <a class="nav-link">Salir</a>
          </li>

        </ul>
      </div>
    </nav>
    
  <div id="cuerpo" class="container">
    <hr>
    <div id="titulo">
      <h2 class="text-center">
        <b>REGISTRO DE VOTOS</b>
      </h2>
    </div>
    <hr>
    <div>
      <h4>Seleccione el Establecimiento</h4>
    </div>
      <div class="form-group">
    <select class="form-control" id="exampleFormControlSelect1">
      <option>Escuela N°312</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
  </div>
    <div>
      <h4>Seleccione la Mesa</h4>
    </div>
      <div class="form-group">
    <select class="form-control" id="exampleFormControlSelect1">
      <option>Mesa N°12</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
  </div>
    <hr>
    <div class="card">
      <div>
        <h4 id="subtitulo" class="text-center">
          <b>Ingrese las cantidades de Votos</b>
        </h4>
      </div>
      <form class="card-body">
        <div class="form-group">
          <label for="exampleFormControlInput1">Cantidad de votantes</label>
          <input type="number" class="form-control" id="exampleFormControlInput1" placeholder>
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Cantidad de votos validos</label>
          <input type="number" class="form-control" id="exampleFormControlInput1" placeholder>
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Cantidad de votos nulos</label>
          <input type="number" class="form-control" id="exampleFormControlInput1" placeholder>
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Cantidad de votos en blanco</label>
          <input type="number" class="form-control" id="exampleFormControlInput1" placeholder>
        </div>
        <div class="form-group">
          <label for="exampleFormControlSelect1">Cantidad de Votos por Partido Politico</label>
          <table class="table table-striped">
            <thead class="thead-dark">
              <tr>
                <th scope="col">Lista</th>
                <th scope="col">Partido</th>
                <th scope="col">Votos</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">123</th>
                <td>Frente para la Victoria</td>
                <td>
                    <input type="number" class="form-control">
                </td>
              </tr>
              <tr>
                <th scope="row">223</th>
                <td>Cambiemos</td>
                <td>
                    <input type="number" class="form-control">
                </td>
              </tr>
              <tr>
                <th scope="row">321</th>
                <td>Partido Renovador</td>
                <td>
                    <input type="number" class="form-control">
                </td>
              </tr>
            </tbody>
          </table>

        </div>
        <button type="submit" class="btn btn-primary btn-lg btn-block"><b>GUARDAR REGISTRO</b></button>
      </form>
    </div> 
          <br>
  </div>


    <script src="https://cdn.jsdelivr.net/jquery/2.1.3/jquery.min.js"></script>
    <script src="src/js/bootstrap.min.js"></script>

  </body>


</html>