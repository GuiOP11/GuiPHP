<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
        crossorigin="anonymous">

    <title>Pesquisar Carro</title>
</head>
<body class="container w-50 my-5 m-auto">
     <h2 class="text-center my-3">Pesquisar  Carro</h2>


   <table class="table table-striped">

    <tr>
      <th >ID</th>
      <th >Modelo</th>
      <th >Marca</th>
      <th >Ano</th>
    </tr>
    <?php 

    require_once "CarroDAO.php";

    $dados = CarroDAO::consultar();
    for ($i=0; $i <count($dados) ; $i++) { 
        # code...
    
    
    ?>
 
 
    <tr>
      <td ><?=$dados[$i]['idcarro']?></td>
      <td><?=$dados[$i]['modelo']?></td>
      <td><?=$dados[$i]['marca']?></td>
      <td><?=$dados[$i]['ano']?></td>
    </tr>

    <?php
    }
    ?>
   
</table>


</body>
</html>