<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Carro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
        crossorigin="anonymous">


</head>

<body class="container w-50 my-5 m-auto">
 <h2 class="text-center my-3">Cadastro de Carro</h2>
    <form class="row g-3" action="cadastro-carro.php">
        <div class="form-container">
           

          
                <div class="mb-3">
                    <label for="modelo" class="form-label">Modelo:</label>
                    <input type="text" class="form-control"  name="modelo" required>
                </div>

                <div class="mb-3">
                    <label for="marca" class="form-label">Marca:</label>
                    <input type="text" class="form-control"  name="marca" required>
                </div>

                <div class="mb-3">
                    <label for="ano" class="form-label">Ano:</label>
                    <input type="number" class="form-control" name="ano" min="1900" max="2099" required>
                </div>

                <button type="submit" class="btn btn-primary w-100 mt-3">Cadastrar</button>
        </div>
    </form>
   
</body>

</html>

<!-- 
  <div class="form-container">
        <h2>Cadastro de Carro</h2>
        
        <form action="processa_cadastro_carro.php" method="POST">
            <div class="mb-3">
                <label for="modelo" class="form-label">Modelo:</label>
                <input type="text" class="form-control" id="modelo" name="modelo" required>
            </div>
            
            <div class="mb-3">
                <label for="marca" class="form-label">Marca:</label>
                <input type="text" class="form-control" id="marca" name="marca" required>
            </div>
            
            <div class="mb-3">
                <label for="ano" class="form-label">Ano:</label>
                <input type="number" class="form-control" id="ano" name="ano" min="1900" max="2099" required>
            </div>
            
            <button type="submit" class="btn btn-primary w-100 mt-3">Cadastrar</button>
        
    </div> -->