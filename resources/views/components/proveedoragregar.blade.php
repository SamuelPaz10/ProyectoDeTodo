<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DeTodo</title>
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet"
        type="text/css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

</head>

<body>

    <section style="margin-top: 100px" class="page-section portfolio" id="portfolio">
        <div class="container">
            <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Crear Empleado</h2>

            <main class="flex-shrink-0">
                <div class="container">
                    <div class="row">
                        <div class="col-4">
                        </div>

                        <div style="background-color: rgba(179, 238, 218, 0.63); border-radius:20px; padding:20px"
                            class="col-4">
                            <form action=" {{ route('guardar.proveedor') }} " method="POST">
                                @csrf
                                <div class="col-12">
                                    <label for="descripcion" class="form-label">Nombre</label>
                                    <input type="text" class="form-control" id="nombre" name="nombre">
                                </div>
                                <br>

                                <div class="col-12">
                                    <label for="piso" class="form-label">Fecha de Registro</label>
                                    <input type="date" class="form-control" id="fechaRegistro" name="fechaRegistro">
                                </div>
                                <br>
                                
                                <div class="col-12">
                                    <label for="estado" class="form-label">Teléfono</label>
                                    <input type="text" class="form-control" id="telefono" name="telefono">
                                </div>
                                <br>
                                <div class="col-12">
                                    <label for="precio" class="form-label">Correo</label>
                                    <input type="text" class="form-control" id="correo" name="correo">
                                </div>
                                

                                <br>
                                <button type="submit" class="btn btn-success btn-sm">AGREGAR</button>
                            </form>
                        </div>

                        <div class="col-4">

                        </div>
                    </div>
                </div>
            </main>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('/js/scripts.js') }}"></script>
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>