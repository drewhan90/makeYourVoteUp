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

    <main class="mp-main">
        <!-- MAP SECTION-->
        <section class="map-section">
            <div class="map-svg">
                <?php echo file_get_contents("svg/complete-canada-map.svg"); ?>
            </div>
        </section>

        <!-- PARTY DESCRIPTION SECTION -->
        <section class="mp-list-section">
            <div class="row">
                <table class="table-spacing small-12 medium-12 large-12 columns" id="mp"></table>
            </div>
        </section>
    </main>

    <script>

    </script>
    <?php include 'partials/footer.php';?>
