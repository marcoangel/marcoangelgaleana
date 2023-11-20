<?php include_once("lang.php");?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Marco A.</title>
        <link rel="icon" type="image/x-icon" href="assets/img/favicon2.png" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet" type="text/css" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <?php include_once("includes/".$_SESSION['lang']."/nav.php");?>
        <div class="container-fluid p-0">
            <?php
                include_once("includes/".$_SESSION['lang']."/about.php");
                include_once("includes/".$_SESSION['lang']."/education.php");
                include_once("includes/".$_SESSION['lang']."/experience.php");
                include_once("includes/".$_SESSION['lang']."/skills.php");
                include_once("includes/".$_SESSION['lang']."/portafolio.php");
                include_once("includes/".$_SESSION['lang']."/contact.php");
            ?>
            <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 11">
                <div id="alert" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                    <div class="toast-header">
                        <div id="alerticon"></div>
                        <strong class="me-auto" id="alertitle"></strong>
                        <small class="text-muted" id="alerttime"></small>
                        <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                    </div>
                    <div class="toast-body" id="alertmessage">
                    </div>
                </div>
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>