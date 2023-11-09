<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

    <div class="container-fluid py-5 mt-5">
        <div class="row">
            <div class="col-6 col-md-4 col-xl-4 mx-auto">
                <div class="shadow p-4 bg-body-tertiary rounded border border-black">
                    <p class="fw-bold fs-1 text-center">
                        TIENDA VIRTUAL
                    </p>
                    <form action="conexBDlogin.php" method="post">
                        <div class="col-md-12 mt-3">
                            <label for="inputCorreo" class="col-sm-12 col-form-label col-form-label-lg fw-medium">Correo Electronico</label>
                            <input type="email" name="correo" class="form-control form-control-lg" id="inputCorreo">
                        </div>
                        <div class="col-md-12 mt-3">
                            <label for="inputPassword" class="col-sm-12 col-form-label col-form-label-lg fw-medium">Contraseña</label>
                            <input type="password" name="clave" class="form-control form-control-lg" id="inputPassword">
                        </div>
                        <div class="col-md-12 mt-3">
                            <div class="d-grid gap-2 mt-3">
                                <input type="submit" class="btn btn-primary btn-lg" value="INICIAR SESION">
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>