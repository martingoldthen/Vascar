<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Vascar</title>
    <link rel="icon" href="../favicon.ico">
    <!-- Bootstrap core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="../css/agency.css" rel="stylesheet">
    <link href="../css/propio.css" rel="stylesheet">

</head>

<body id="page-top">

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
        <a id="logo" class="navbar-brand js-scroll-trigger" href="../index.html">VASCAR</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav text-uppercase ml-auto">
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="../index.html#nosotros">Nosotros</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="../index.html#flota">Flota</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="../index.html#servicios">Servicios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="../html/contact.html">Contacto</a>
                </li>
            </ul>
        </div>
    </div>
</nav>


<!-- Contact -->
<section id="success">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <br><br>
                <h2 class="section-heading text-uppercase"><span class="white_text">Perfecto</span></h2>
                <h3 class="section-subheading text-muted"><span class="white_text">Tu mensaje ha sido enviado, en breve nos
                pondremos en contacto contigo</span></h3>
                <h3 class="section-subheading text-muted"><span class="white_text">
                        <a id="linkhome" href="../index.html">Volver a la página principal</a>
                    </span></h3>

                <div id="tabla">
                    <?php
                    require_once 'connect.php';
                    $sql = "SELECT name, mail, phone, message FROM users LIMIT 7";
                    $statement = $db->prepare($sql);
                    $statement->execute();

                    echo "<table rules=\"all\" style=\"border-color: #666;\" cellpadding=\"10\" align=\"center\">
    <tr style=\"text-align: center; background: #942734; color: white\"><td colspan=\"2\">Otros clientes satisfechos dijeron</td></tr>";
                    while ($fila = $statement->fetch()) {
                        echo "<tr style=\"background-color:white; opacity: 0.8 \">";
                        echo "<td>" . $fila[0] . "</td>";
                        echo "<td>" . $fila[3] . "</td>";
                        echo "</tr>";
                    }

                    echo "</table>";
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Bootstrap core JavaScript -->
<script src="../vendor/jquery/jquery.min.js"></script>
<script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Plugin JavaScript -->
<script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Contact form JavaScript -->
<script src="../js/jqBootstrapValidation.js"></script>
<script src="../js/contact_me.js"></script>

<!-- Custom scripts for this template -->
<script src="../js/agency.min.js"></script>
<script src="../js/fading_form.js"></script>

</body>

</html>