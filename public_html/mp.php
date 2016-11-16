<!doctype html>
<html class="no-js" lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Make Your Vote Up</title>
    <link rel="stylesheet" href="css/foundation.css">
    <link rel="stylesheet" href="css/flexslider.css" type="text/css">
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="css/mike-footer.app.css">
</head>

<body onload="loadXMLDoc('', '')">

    <?php include 'partials/mike-header.php';?>
    <!-- PAGE TITLE SECTION-->
    <section class="title-section">
        <h1>who's my mp</h1>
    </section>

    <main class="mp-main">
        <!-- MAP SECTION-->
        <section class="map-section">
            <div class="map-svg">
                <?php echo file_get_contents("svg/complete-canada-map2.svg"); ?>
            </div>
        </section>

        <!-- PARTY DESCRIPTION SECTION -->
        <section class="mp-list-section">
            <table class="table-spacing" id="mp"></table>
        </section>
    </main>

    <?php include 'partials/mike-footer.php';?>

    <!-- JQUERY -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <!-- DEFALUT JS -->
    <script src="js/vendor/jquery.js"></script>
    <script src="js/vendor/what-input.js"></script>
    <script src="js/vendor/foundation.js"></script>
    <script src="js/jquery.flexslider.js"></script>
    <!-- XML -->
    <script src="js/xml-table-generator.js"></script>
    <!-- SVG JS -->
    <script src="js/svg-animate.js"></script>
</body>

</html>
