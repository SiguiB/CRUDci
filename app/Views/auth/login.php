<?php /*
    session_start();
	if(isset($_POST['submit'])){
		$userregistrado = new Users($_POST['email'], $_POST['password']);
	}*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document title</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
        <button class="navbar-toggler" data-target="#my-nav" data-toggle="collapse" aria-controls="my-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </nav>
    <div class="container">
    <div class="fw-bold mt-2 fs-3 text">    
        Login
    </div>
    <div class="card mt-4">
        <div class="card-body">
            <h5 class="card-title">Ingresar datos de usuario</del></h5>
            <p class="card-text">

                <form method="post" action="<?=site_url('/validar')?>" enctype="multipart/form-data">

                    <div class="form-group">
                        <label for="my-input">Email:</label>
                        <input id="email" class="form-control" type="email" name="email" placeholder="nombre@ejemplo.com">
                    </div>
                
                    <div class="form-group">
                        <label for="my-input">Contraseña:</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Contraseña">
                    </div>
                    </br>
                    <button class="btn btn-success" type="submit">Ingresar</button>
                </form>
            </p>
        </div>
    </div>
    </div>
</body>
    <div class="navbar navbar-expand-lg fixed-bottom bg-dark position-absolute w-100 "> 
    </div> 
</html>