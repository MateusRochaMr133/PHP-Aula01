<!doctype html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    
    <div class="container">
        <h1>Formulário</h1>

        <hr>
        <form action="script.php" method="POST">

            <div class="row jutify-content-center mt-5">

                <div class="col-md3">

                    <div class="mb-3">
                        <label for="inputNome" class="form-label">Valor 01</label>
                        <input type="text" class="form-control" name="valor1" placeholder="Digite um Valor">
                    </div>

                </div>

            </div>
            

            <div class="row jutify-content-center mt-5">

                <div class="col-md3">

                    <div class="mb-3">
                        <label for="inputNome" class="form-label">Valor 02</label>
                        <input type="text" class="form-control" name="valor2" placeholder="Digite um Valor">
                    </div>

                </div>

            </div>

            <button type="submit" class="btn btn-primary">Verificar</button>
        
        </form>

    </div>

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>   
    
</body>

</html>