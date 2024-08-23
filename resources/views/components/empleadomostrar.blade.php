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
            <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">EMPLEADOS</h2>

            <div class="divider-custom">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>

            <main class="flex-shrink-0">
                <div class="container">

                    <a href="{{ route('index') }}" class="btn btn-success">Volver</a>
                    

                    <table class="table table-hover table-bordered my-3" aria-describedby="titulo">
                        <thead class="table-dark">
                            <tr>
                                <th scope="col">Id Empleado</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Apellido</th>
                                <th scope="col">Fecha de Ingreso</th>
                                <th scope="col">Salario</th>
                                <th scope="col">Opciones</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($empleados as $empleado)
                                <tr>
                                    <td> {{ $empleado['idEmpleado'] }} </td>
                                    <td> {{ $empleado['nombre'] }} </td>
                                    <td> {{ $empleado['apellido'] }} </td>
                                    <td> {{ $empleado['fechaIngreso'] }} </td>
                                    <td> {{ $empleado['salario'] }} </td>
                                    <td>
                                        {{-- <a href="{{ route('editar.habitacion.admin', ['id' => $habitacion['id']]) }}"
                                            class="btn btn-warning btn-sm me-2">Editar</a>

                                        <a href="{{ route('eliminar.habitacion.admin', ['id' => $habitacion['id']]) }} "
                                            class="btn rounded-pill btn-danger">Eliminar</a> --}}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <a href="{{ route('crear.empleado') }}" class="btn btn-success">Agregar empleado</a>
                </div>
            </main>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('/js/scripts.js') }}"></script>
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>