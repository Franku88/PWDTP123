<html>
    
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title> Ejercicio 5 Validado </title>
</head>

<body>
    <div>
        <h1 class="position-relative border p-4"> Ejercicio 5 Validado </h1>
    </div>
    <div class="modal position-relative d-block p-5 py-md-5">
        <div class="rounded-4 shadow border p-3">
            <p class="fs-5"> Modificar el formulario del ejercicio anterior solicitando, tal que usando componentes
                “radios buttons” se ingrese el nivel de estudio de la persona: 1-no tiene estudios, 2-
                estudios primarios, 3-estudios secundarios. Agregar el componente que crea más
                apropiado para solicitar el sexo. En la página que procesa el formulario mostrar además
                un mensaje que indique el tipo de estudios que posee y su sexo.
            </p>
        </div>
        <div class="modal-dialog">
            <div class="modal-content rounded-4 shadow">
                <div class="modal-header p-5 pb-4 border-bottom-0">
                    <h1 class="fw-bold mb-0 fs-3"> Ingrese sus datos personales </h1>
                </div>
                <div class="modal-body p-5 pt-0">
                    <form id="miFormulario5" action="Action/verDatosPersonalesEj5.php" method="GET">
                        <div class="form-floating mb-3">
                            <input class="form-control rounded-3" type="text" name="nombre" id="nombre" placeholder="">
                            <label for="nombre">Nombre</label>
                            <span class="text-danger error" id="errorNombre"></span>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control rounded-3" type="text" name="apellido" id="apellido" placeholder="">
                            <label for="apellido">Apellido</label>
                            <span class="text-danger error" id="errorApellido"></span>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control rounded-3" type="number" name="edad" id="edad" placeholder="">
                            <label for="edad">Edad</label>
                            <span class="text-danger error" id="errorEdad"></span>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control rounded-3" type="text" name="direccion" id="direccion" placeholder="">
                            <label for="direccion">Direccion</label>
                            <span class="text-danger error" id="errorDireccion"></span>
                        </div>
                        <div class="form-floating m-3">
                            <p>Estudios</p>
                            <div class="form-check">
                                <input type="radio" id="ninguno" name="estudios" value="ninguno">
                                <label for="ninguno">1. Sin estudios</label><br>
                            </div>
                            <div class="form-check">
                                <input type="radio" id="primaria" name="estudios" value="primaria">
                                <label for="primaria">2. Estudios Primarios</label><br>
                            </div>
                            <div class="form-check">
                                <input type="radio" id="secundaria" name="estudios" value="secundaria">
                                <label for="secundaria">3. Estudios Secundarios</label><br>
                            </div>
                            <span class="text-danger error" id="errorEstudios"></span>
                        </div>
                        <div class="form-floating m-3">
                            <p>Sexo</p>
                            <div class="form-check">
                                <input type="radio" id="hombre" name="sexo" value="hombre">
                                <label for="hombre">Hombre</label><br>
                            </div>
                            <div class="form-check">
                                <input type="radio" id="mujer" name="sexo" value="mujer">
                                <label for="mujer">Mujer</label><br>
                            </div>
                            <span class="text-danger error" id="errorSexo"></span>
                        </div>
                        <div class="form-floating mb-2">
                            <button class="w-100 mb-2 btn btn-lg rounded-3 btn-primary" type="submit">Enviar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="Assets/validacion.js"></script>
</body>

</html>