<?php
$pg = "sobre_mi";
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="shortcut icon" href="../portfolio(SM)/imagenes/favicon.ico" />

    <title>Sobre mí</title>
</head>

<body id="sobre-mi">
    <?php include_once "header.php"; ?>
    <!--MAIN-->
    <main>
        <div class="container">
            <div class="row">
                <div class="col-sm-5 col-12 mt-4">
                    <h1 class="mt-sm-4 pb-sm-4">Sobre mí</h1>
                    <p class="pb-sm-5"> Apasionado por el mundo de la tecnología, estudiante de sistemas en formación </p>
                    <a href="contacto.html" class="btn btn-rojo">Enviar mensaje</a>
                </div>
                <div class="col-sm-3 col-12 mt-4 offset-sm-2">
                    <img src="imagenes/me.jpeg" alt="" class="img-fluid img-circle">
                </div>
            </div>
        </div>
        <section id="tecnologias" class="color-gradiente pb-5">
            <div class="container">
                <div class="row">
                    <div class="col-12 my-sm-5 text-white">
                        <h2>Stack tecnológico</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-2 col-6 text-center">
                        <div class="px-4 py-5 mx-0 card mx-0 mb-4 mb-sm-0">
                            <h3>Javascript</h3>
                            <img class="mx-auto d-block img-fluid" width="60" src="imagenes/icon-js.jpeg" alt="Javascript" title="Javascript">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 text-center">
                        <div class="px-4 py-5 mx-0 card mx-0 mb-4 mb-sm-0">
                            <h3>PHP</h3>
                            <img class="mx-auto d-block img-fluid" width="60" src="imagenes/icon-php.jpg" alt="Javascript" title="Javascript">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 text-center">
                        <div class="px-4 py-5 mx-0 card mx-0 mb-4 mb-sm-0">
                            <h3>HTML5</h3>
                            <img class="mx-auto d-block img-fluid" width="60" src="imagenes/icon-html5.png" alt="Javascript" title="Javascript">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 text-center">
                        <div class="px-4 py-5 mx-0 card mx-0 mb-4 mb-sm-0">
                            <h3>React.js</h3>
                            <img class="mx-auto d-block img-fluid" width="60" src="imagenes/icon-react.js.png" alt="Javascript" title="Javascript">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 text-center">
                        <div class="px-4 py-5 mx-0 card mx-0 mb-4 mb-sm-0">
                            <h3>jQuery</h3>
                            <img class="mx-auto d-block img-fluid" width="60" src="imagenes/icon-jquery.jpg" alt="Javascript" title="Javascript">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 text-center">
                        <div class="px-4 py-5 mx-0 card mx-0 mb-4 mb-sm-0">
                            <h3>Bootstrap</h3>
                            <img class="mx-auto d-block img-fluid" width="60" src="imagenes/icon-bootstrap.png" alt="Javascript" title="Javascript">
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-sm-2 col-6 text-center">
                        <div class="px-4 py-5 mx-0 card mx-0 mb-4 mb-sm-0">
                            <h3>Laravel</h3>
                            <img class="mx-auto d-block img-fluid" width="60" src="imagenes/icon-laravel.png" alt="Javascript" title="Javascript">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 text-center">
                        <div class="px-4 py-5 mx-0 card mx-0 mb-4 mb-sm-0" <h3>MySQL</h3>
                            <img class="mx-auto d-block img-fluid" width="60" src="imagenes/icon-mysql.png" alt="Javascript" title="Javascript">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 text-center">
                        <div class="px-4 py-5 mx-0 card mx-0 mb-4 mb-sm-0">
                            <h3>CSS</h3>
                            <img class="mx-auto d-block img-fluid" width="60" src="imagenes/icon-css.png" alt="Javascript" title="Javascript">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 text-center">
                        <div class="px-4 py-5 mx-0 card mx-0 mb-4 mb-sm-0">
                            <h3>Git</h3>
                            <img class="mx-auto d-block img-fluid" width="60" src="imagenes/icon-git.png" alt="Javascript" title="Javascript">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 text-center">
                        <div class="px-4 py-5 mx-0 card mx-0 mb-4 mb-sm-0">
                            <h3>Apache</h3>
                            <img class="mx-auto d-block img-fluid" width="60" src="imagenes/icon-apache.jpg" alt="Javascript" title="Javascript">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 text-center">
                        <div class="px-4 py-5 mx-0 card mx-0 mb-4 mb-sm-0">
                            <h3>Mercadopago</h3>
                            <img class="mx-auto d-block img-fluid" width="60" src="imagenes/icon-mp.jpg" alt="Javascript" title="Javascript">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="idiomas">
            <div class="container">
                <div class="row py-5 mx-0">
                    <div class="col-sm-6 col-12">
                        <div class="row me-sm-1 bg-white card-idiomas shadow">
                            <div class="col-4 card text-center">
                                <i class="fas fa-comment-alt"></i>
                            </div>
                            <div class="col-8 p-5">
                                <h2>IDIOMAS</h2>
                                <ul>
                                    <li>
                                        ESPAÑOL - Nativo
                                    </li>
                                    <li>
                                        INGlÉS - Level 3 de 8
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="row ms-sm-2 bg-white card-idiomas shadow">
                            <div class="col-4 card text-center">
                                <i class="fas fa-star"></i>
                            </div>
                            <div class="col-8 p-5">
                                <h2>HOBBIES</h2>
                                <ul>
                                    <li>
                                        VIOLINISTA
                                    </li>
                                    <li>
                                        NATACIÓN
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="formacion" class="container">
            <div class="row">
                <div class="col-12 pt-5 pb-4">
                    <h2><i class="fas fa-graduation-cap"></i> Formación acádémica</h2>
                </div>
            </div>
            <div class="row shadow bg-white">
                <div class="col-2 px-5 py-3 my-auto d-none d-sm-block">
                    <img src="imagenes/logo-depcsuite.svg" tittle="depcsuite" class="img-fluid baw">
                </div>
                <div class="col-12- col-sm-10 p-3">
                    <h3>Programador Full Stack</h3>
                    <h4>DEPCSUITE SA</h4>
                    <h5>2021</h5>
                    <p> Laravel, PHP, HTML, CSS, Javascript, jQuery, AJAX, React.js, Bootstrap, GitLab, HTTP Apache2, SSL, MySQL, HAProxy,
                        ProFTPd, virtualización con VMware ESXi, GNU/Linux Debian.</p>
                </div>
            </div>
            <div class="row shadow bg-white">
                <div class="col-2 px-5 py-3 my-auto d-none d-sm-block">
                    <img src="imagenes/udo.jpg" tittle="depcsuite" class="img-fluid baw">
                </div>
                <div class="col-12- col-sm-10 p-3">
                    <h3>Ingeniería de sistemas</h3>
                    <h4>UNIVERSIDAD DE ORIENTE</h4>
                    <h5>2017-2018</h5>
                    <p> Materias aprobadas "13" = Segundo semestre</p>
                </div>
            </div>
        </section>
    </main>
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>