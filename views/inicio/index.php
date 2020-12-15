<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link
        href="<?php echo constant('URL') ?>views/inicio/vendor/fontawesome-free/css/all.min.css"
        rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link
        href="<?php echo constant('URL') ?>views/inicio/css/sb-admin-2.min.css"
        rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Pio Lenguaje</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.html">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Editar Codigo</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Mis Codigos</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Estos son tus archivos <br> .PIO privados</h6>
                        <?php
                            $archivos = $this->archivos;
                            foreach ($archivos as $archivo) :
                        ?>
                        <a class="collapse-item" href="inicio/cargar/<?php
                        echo $archivo->idpioscripts;
                        ?>"><?php echo $archivo->nombre . ".pio"?></a>
                        <?php endforeach; ?>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>De la comunidad</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">estos son codigos que
                            <br> comparte la comunidad:
                        </h6>
                        <?php
                            $compartidos = $this->compartidos;
                            foreach ($compartidos as $compartido) :
                        ?>
                        <a class="collapse-item" href="inicio/cargar/<?php
                        echo $compartido->idpioscripts;
                        ?>"><?php echo $compartido->nombre . ".pio"?></a>
                        <?php endforeach; ?>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Aprende a Usar Pio lenguaje
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Ejemplos pio</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Ejemplos de codigo pio:</h6>
                        <?php
                            $compartidos = $this->compartidos;
                            foreach ($compartidos as $compartido) :
                        ?>
                        <?php
                        $pos = strpos($compartido->nombre, "ejemplo");
                        if (!($pos === false) && $compartido->usuarios_idusuarios == 1) :
                        ?>
                        <a class="collapse-item" href="inicio/cargar/<?php
                            echo $compartido->idpioscripts;
                            ?>"><?php echo $compartido->nombre . ".pio"?></a>
                        <?php endif; ?>
                        <?php endforeach; ?>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Charts -->

            <!-- Nav Item - Tables -->

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            <!-- Sidebar Message -->
            <div class="sidebar-card">
                <p class="text-center mb-2"><strong>Pio Lenguaje</strong> fue realizado por:</p>
                <ul>
                    <li>Ernesto Polo</li>
                    <li>Ana Buenahora</li>
                    <li>Andres Valencia</li>
                    <li>Evert Reales</li>
                </ul>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>
                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php
                                    echo $_SESSION['usuario'][0]->nombre . " ". $_SESSION['usuario'][0]->apellido

                                ?>
                                </span>
                                <img class="img-profile rounded-circle"
                                    src="<?php echo constant('URL')?>views/inicio/img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href=" <?php echo constant('URL')
                                ?>inicio/deslogeo">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Deslogearme
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Edición</h1>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Area Chart -->
                        <div class="col-xl-8 col-lg-7">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Nombre del archivo:
                                        <input type="text" id="nombre" value="<?php
                                            if (isset($this->datos->nombre)) {
                                                echo $this->datos->nombre . ".pio";
                                            } else {
                                                echo 'index';
                                            }
                                        ?>">
                                    </h6>

                                    <h6 class="m-0 font-weight-bold" style="color: #F00;">
                                        <?php
                                            if (isset($_SESSION['error'])) {
                                                echo $_SESSION['error'];
                                            }
                                        ?>
                                    </h6>

                                    <div class="dropdown no-arrow">
                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Ejecutar
                                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                            aria-labelledby="dropdownMenuLink">
                                            <div class="dropdown-header">Opciones</div>
                                            <button id="ejecutar" class="dropdown-item">Guardar y Ejecutar</button>
                                            <a id="compartir" href="<?php echo constant('URL') ?>inicio/compartir/<?php
                                                if (isset($this->datos->idpioscripts)) {
                                                    echo $this->datos->idpioscripts;
                                                } else {
                                                    echo -1;
                                                }
                                            ?>" class="dropdown-item">Compartir Con Todos</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body p-0">
                                    <div class="chart-area form-group">
                                        <textarea name="codigo" id="codigo" class="form-control p-0"
                                            style="height: 100%; text-align: left !important;">
                                        <?php
                                            if (isset($this->datos->codigopio)) {
                                                echo $this->datos->codigopio;
                                            } else {
                                                echo 'pioimprecion("hola mundo con pio")';
                                            }
                                        ?>
                                        </textarea>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pie Chart -->
                        <div class="col-xl-4 col-lg-5">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Salida de codigo</h6>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body" id="salida">

                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Content Column -->
                        <div class="col-lg-6 mb-4">
                            <!-- Project Card Example -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Pio lenguaje comparado con otros
                                        Lenguajes en rapidez</h6>
                                </div>
                                <div class="card-body">
                                    <h4 class="small font-weight-bold">PHP <span class="float-right">20%</span></h4>
                                    <div class="progress mb-4">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 20%"
                                            aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <h4 class="small font-weight-bold">C++ <span class="float-right">40%</span></h4>
                                    <div class="progress mb-4">
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 40%"
                                            aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <h4 class="small font-weight-bold">C# <span class="float-right">60%</span></h4>
                                    <div class="progress mb-4">
                                        <div class="progress-bar" role="progressbar" style="width: 60%"
                                            aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <h4 class="small font-weight-bold"> Ruby <span class="float-right">80%</span></h4>
                                    <div class="progress mb-4">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 80%"
                                            aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <h4 class="small font-weight-bold">Lenguaje Pio <span
                                            class="float-right">Complete!</span></h4>
                                    <div class="progress">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 100%"
                                            aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Ciclo Pio (FUNCION: buclepio())</h6>
                                </div>
                                <div class="card-body">
                                    <div class="text-center">
                                        <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;"
                                            src="img/undraw_posting_photo.svg" alt="">
                                    </div>
                                    <p>Para poder hacer ciclos en lenguaje pio se debe llamar a la funcion
                                        <strong>buclepio</strong>() y pasarle la funcion <strong>rangopio()</strong>
                                        <Strong>MIRA LA SECCION FUNCIONES CORE PARA SABER MAS.</Strong> <br>
                                    </p>
                                    <p><strong>EJEMPLO:</strong> <br> buclepio(rangopio(1 10) <br>
                                        &nbsp &nbsp &nbsp &nbsp &nbsp(numero) => { <br>
                                        &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp pioimprecion(" el numero es " numero) <br>
                                        &nbsp &nbsp &nbsp &nbsp &nbsp }
                                        <br>) <br> <strong>Entonces:</strong> <br> la segunda funcion es a tu criterio y recivira el index actual en el que va el siclo para que hagas tus operaciones. <br> Para conocer mas mira la seccion <strong>EJEMPLOS PIO</strong> o codigos compartidos por la comunidad en <strong>DE LA COMUNIDAD</strong></p>

                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 mb-4">

                            <!-- Illustrations -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Acerca De Pio Lenguaje!</h6>
                                </div>
                                <div class="card-body">
                                    <div class="text-center">
                                        <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;"
                                            src="img/undraw_posting_photo.svg" alt="">
                                    </div>
                                    <p>El lenguaje <strong>Pio</strong> es un homenaje a la tematica de pollos porque
                                        solamente nos
                                        parecio divertido hacerlo asi, te daras cuenta que su sintaxis hace ilusion a
                                        ellos y sus tipo de archivo son .pio en honor a su sonido. <br> <br>

                                        si quieres conocer el codigo fuente visita:</p>
                                    <a target="_blank" rel="nofollow"
                                        href="https://github.com/FelipePolo/piolenguaje">PioLenguaje.com/developer
                                        &rarr;</a>
                                </div>
                            </div>

                            <!-- Approach -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Operadores pio</h6>
                                </div>
                                <div class="card-body">
                                    <p>asignacion "=" -> "?>"</p>
                                    <p>igualdad "a == b" -> "pollitosiguales(a b)"</p>
                                    <p>suma "a + b" -> "sumapollitos(a b)"</p>
                                    <p>resta "a - b" -> "restarpollitos(a b)"</p>
                                    <p>multiplicacion "a * b" -> "multiplicarpollitos(a b)"</p>
                                    <p>divicion "a / b" -> "dividirpollitos(a b)"</p>
                                    <p>raiz "sqrt(a)" -> "pollitoraiz(a)"</p>
                                    <p>potencia "pow(b e)" -> "pollitoelevado(b e)"</p>
                                </div>
                            </div>

                        </div>

                    </div>
                    <div class="row">

                        <!-- Content Column -->
                        <div class="col-lg-6 mb-4">
                            <!-- Approach -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Sintaxis Del Lenguaje Pio</h6>
                                </div>
                                <div class="card-body">
                                    <p><strong>En el lenguaje pio debes seguir estas reglas para tener una sintaxis
                                            correcta y que funcionen tus codigos pio!</strong></p>
                                    <p>1) Deja de usar ";" en PIO las lineas de codigo terminan con un salto de linea,
                                        osea precionando la tecla <strong>ENTER</strong></p>
                                    <p>2) Si creas Funciones la ultima linea de Codigo de tu funcion sera por defecto un
                                        <strong>RETURN</strong></p>
                                    <p><strong>EJEMPLO:</strong> <br> funcion ?> () => {
                                        sumapollitos(1 2)
                                        } <br> <strong>ES IGUAL A DECIR:</strong> <br> funcion ?> () => {
                                        RETURN sumapollitos(1 2)
                                        }</p>
                                    <p>3) las cadenas van entre " "</p>
                                    <p><strong>EJEMPLO:</strong> <br> piovariable ?> "Hola Mundo" <br>
                                        <strong>Incorrecto es:</strong> <br> piovariable ?> hola mundo</p>

                                    <p>4) Los tipos de datos que soporta el lenguaje PIO son <strong>CADENAS</strong> y
                                        <strong>ENTEROS</strong></p>
                                    <p>5) Los parametros a las funciones se pasan separados por  <strong>ESPACIOS</strong> y no por
                                        <strong>COMAS</strong> como normalmente se conoce</p>
                                    <p>6) Las variables son <strong>ALFANUMERICAS</strong>:</p>
                                    <p><strong>EJEMPLO:</strong> <br> piovariable ?> 1 <br> piovariable2 ?> "pollitos en
                                        fuga"
                                        <br> <strong>Incorrecto es:</strong> <br> piovariable&%$ ?> "hola mundo pio"
                                    </p>

                                    <p>Si quieres aprender a programar en lenguaje pio mira los ejemplos en la seccion
                                        <strong>Ejemplos Pio</strong></p>

                                </div>
                            </div>

                        </div>

                        <div class="col-lg-6 mb-4">

                            <!-- Illustrations -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Funciones Core</h6>
                                </div>
                                <div class="card-body">
                                    <div class="text-center">
                                        <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;"
                                            src="img/undraw_posting_photo.svg" alt="">
                                    </div>
                                    <p><strong>rangopio(a b):</strong> <br>
                                    Esta funcion recive dos enteros y retorna un array con el tamaño = b - 1 elementos</p>

                                    <p><strong>pioimprecion(cadena1 cadena2 cadenaN):</strong> <br>
                                    Esta funcion recive N variables y las imprime en la consola</p>
                                    <a target="_blank" rel="nofollow"
                                        href="https://github.com/FelipePolo/piolenguaje">PioLenguaje.com/developers
                                        &rarr;</a>
                                    <p>Desplazate hacia abajo para mirar todas sus caracteristicas</p>
                                </div>
                            </div>

                            <!-- Approach -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Condicionales En Pio</h6>
                                </div>
                                <div class="card-body">
                                    <p>El condicional <strong>sipollito()</strong> recive 3 funciones la primera es la <strong>CONDICION</strong> la segunda es el <strong>PRIMER CASO</strong> y la tercera es el <strong>CASO CONTRARIO</strong></p>

                                    <p><strong>EJEMPLO:</strong> <br> 
                                    condicion ?> () => true <br>
                                    primercaso ?> () => pioimprecion("la condicion fue verdadera") <br>
                                    casocontrario ?> () => { <br>
                                        &nbsp &nbsp &nbsp &nbsp pioimprecion("la condicion fue falsa")
                                    <br> } <br>
                                    sipollito(condicion primercaso casocontrario) <br>

                                    <strong>SE IMPRIME: "la condicion fue verdadera"</strong>

                                 </p>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Todos los derechos reservados a &copy;pioLenguaje</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
    <!-- Bootstrap core JavaScript-->
    <script
        src="<?php echo constant('URL') ?>views/inicio/vendor/jquery/jquery.min.js">
    </script>
    <script
        src="<?php echo constant('URL') ?>views/inicio/vendor/bootstrap/js/bootstrap.bundle.min.js">
    </script>

    <!-- Core plugin JavaScript-->
    <script
        src="<?php echo constant('URL') ?>views/inicio/vendor/jquery-easing/jquery.easing.min.js">
    </script>

    <!-- Custom scripts for all pages-->
    <script
        src="<?php echo constant('URL') ?>views/inicio/js/sb-admin-2.min.js">
    </script>

    <!-- Page level plugins -->
    <script
        src="<?php echo constant('URL') ?>views/inicio/vendor/chart.js/Chart.min.js">
    </script>

    <!-- Page level custom scripts -->
    <script
        src="<?php echo constant('URL') ?>views/inicio/js/demo/chart-area-demo.js">
    </script>
    <script
        src="<?php echo constant('URL') ?>views/inicio/js/demo/chart-pie-demo.js">
    </script>

    <script>
        $("#ejecutar").click(async () => {
            const codigopio = $("#codigo").val().replace("                                        ", "");
            const nombre = $("#nombre").val().replace(".pio", "");
            let bloque = await cargar(codigopio);
            console.log(bloque);
            if (bloque.codigojs) {
                let codjs = bloque.codigojs.replace("\n", ';');
                let codpio = bloque.codigopio;
                await $.post('inicio/guardarcodigo', {
                    "codigojs": codjs,
                    "codigopio": codpio,
                    "nombre": nombre
                }, function(data) {
                    console.log('procesamiento finalizado', data);
                    window.location.href = "inicio";
                });
            } else {
                pioimprecion("<strong style=`color: #F00 !important;`>mala sintagsis pio</strong>");
            }
        });

        const cargar = async (codigopio) => {
            const req = await fetch('https://convertidor-pio-js.herokuapp.com/getjs', {
                method: 'POST',
                mode: 'cors',
                cache: 'no-cache',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({
                    piocode: codigopio
                })
            })
            let bloque = await req.json();
            return bloque.bloque ? bloque.bloque : NULL;
        }
    </script>

    <script id="codigojs">
        <?php
            if (isset($this->datos->codigojs)) {
                echo $this->datos->codigojs;
            } else {
                echo 'pioimprecion("hola mundo con pio")';
            }
        ?>

        function pioimprecion(...args) {
            $("#salida").append(`el lenguaje pio dice: ${args} <br>`)
        }

        function sumapollitos(a, b) {
            return a + b;
        }

        function multiplicarpollitos(a, b) {
            return a * b;
        }

        function restarpollitos(a, b) {
            return a - b;
        }

        function difidirpollitos(a, b) {
            return a / b;
        }

        function pollitoraiz(a) {
            return Math.sqrt(x);
        }

        function pollitoelevado(a, b) {
            return Math.pow(a, b);
        }

        function $if(cond, consecuencia, alternativa) {
            if (cond()) {
                return consecuencia();
            } else {
                return alternativa();
            }
        }

        function pollitosiguales(x, y) {
            return x === y;
        }

        function rangopio(comienzo, fin) {
            const resultado = [];
            for (let i = 0; i < fin; i++) {
                resultado.push(i);
            }
            return resultado;
        }

        function buclepio(array, funcion) {
            array.forEach(funcion);
        }
    </script>

</body>

</html>