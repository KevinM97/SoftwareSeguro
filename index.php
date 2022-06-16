<?php include("db.php") ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">    
    <link rel="stylesheet" href="style.css">
    <title>Grupo 4 Software seguro</title>
</head>
<body>
    <div id="template-bg-1">
        <div
        class="d-flex flex-column min-vh-100 justify-content-center align-items-center">
        <div class="card p-4 text-light bg-dark mb-5">
        <div class="card-header">
        <h3>Iniciar sesión </h3>
        </div>
        <div class="card-body w-100">
        <form name="login" action="login.php" method="post">
        <div class="input-group form-group mt-3">
        <div class="bg-secondary rounded-start">
        <span class="m-3"><i class="fas fa-user mt-2"></i></span>
        </div>
        <input type="text" class="form-control" placeholder="Usuario"
        name="username">
        </div>
        <div class="input-group form-group mt-3">
        <div class="bg-secondary rounded-start">
        <span class="m-3"><i class="fas fa-key mt-2"></i></span>
        </div>
        <input type="password" class="form-control" placeholder="Contraseña"
        name="password">
        </div>
        
        <div class="form-group mt-3">
        <input type="submit" value="Acceder"
        class="btn bg-secondary float-end text-white w-100"
        name="login-btn">
        </div>
        </form>
        <?php if(!empty($loginResult)){?>
        <div class="text-danger"><?php echo $loginResult;?></div>
        <?php }?>
        </div>
        <div class="card-footer">
        <div class="d-flex justify-content-center">
        <div class="text-primary">Si es un usuario registrado, inicie sesión aquí.</div>
        </div>
        </div>
        </div>
        </div>
        </div>
</body>
</html>