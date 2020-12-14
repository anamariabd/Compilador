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
                        <h6 class="collapse-header">Login Screens:</h6>
                        <a class="collapse-item" href="login.html">Login</a>
                        <a class="collapse-item" href="register.html">Register</a>
                        <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
                        <div class="collapse-divider"></div>
                        <h6 class="collapse-header">Other Pages:</h6>
                        <a class="collapse-item" href="404.html">404 Page</a>
                        <a class="collapse-item" href="blank.html">Blank Page</a>
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
                                                echo 'index.pio';
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
                                        <textarea name="codigo" id="codigo" class="form-control" style="height: 100%;">
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
                                    <h6 class="m-0 font-weight-bold text-primary">Otros Lenguajes</h6>
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
                        </div>

                        <div class="col-lg-6 mb-4">

                            <!-- Illustrations -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Illustrations</h6>
                                </div>
                                <div class="card-body">
                                    <div class="text-center">
                                        <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;"
                                            src="img/undraw_posting_photo.svg" alt="">
                                    </div>
                                    <p>Add some quality, svg illustrations to your project courtesy of <a
                                            target="_blank" rel="nofollow" href="https://undraw.co/">unDraw</a>, a
                                        constantly updated collection of beautiful svg images that you can use
                                        completely free and without attribution!</p>
                                    <a target="_blank" rel="nofollow" href="https://undraw.co/">Browse Illustrations on
                                        unDraw &rarr;</a>
                                </div>
                            </div>

                            <!-- Approach -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Development Approach</h6>
                                </div>
                                <div class="card-body">
                                    <p>SB Admin 2 makes extensive use of Bootstrap 4 utility classes in order to reduce
                                        CSS bloat and poor page performance. Custom CSS classes are used to create
                                        custom components and custom utility classes.</p>
                                    <p class="mb-0">Before working with this theme, you should become familiar with the
                                        Bootstrap framework, especially the utility classes.</p>
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
            const codigopio = $("#codigo").val();
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
            const req = await fetch('http://localhost:8010/getjs', {
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
            if (cond) {
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

        function bluclepiodo(condicion, ejecucion) {
            do {
                ejecucion();
            } while (condicion());
        }
    </script>

</body>

</html>