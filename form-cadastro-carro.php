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

<!--     <style>
        body {
            background-color: #212529; 
            color: #f8f9fa; 
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        .form-container {
            background-color: #343a40; /* Darker background for the form area */
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.5);
            width: 100%;
            max-width: 400px; /* Limit max width for better appearance */
        }
        h2 {
            color: #0dcaf0; /
            
            margin-bottom: 25px;
        }
        .form-label {
            color: #adb5bd; /* Lighter grey for labels */
        }
        .form-control {
            background-color: #495057; /* Darker input background */
            color: #f8f9fa; /* Light text in inputs */
            border: 1px solid #6c757d; /* Input border */
        }
        .form-control:focus {
            border-color: #0d6efd; /* Blue focus border */
            box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.25);
        }
        .btn-primary {
            background-color: #0d6efd; /* Bootstrap primary blue */
            border-color: #0d6efd;
        }
        .btn-primary:hover {
            background-color: #0b5ed7;
            border-color: #0a58ca;
        } 
    </style> --> 
</head>

<body class="container w-50 my-5 m-auto">
 <h2 class="text-center my-3">Cadastro de Carro</h2>
    <form class="row g-3">
        <div class="form-container">
           

          
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
        </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
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