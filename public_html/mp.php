<?php include 'partials/header.php';?>
    <!-- PAGE TITLE SECTION-->
    <section class="title-section">
        <h1>who's my mp</h1>
    </section>

    <main onload="loadXMLDoc('', '')" class="mp-main">
        <!-- MAP SECTION-->
        <section class="map-section">
            <div class="map-svg">
                <?php echo file_get_contents("svg/complete-canada-map.svg"); ?>
            </div>
        </section>

        <!-- PARTY DESCRIPTION SECTION -->
        <section class="mp-list-section">
            <table id="mp"></table>
        </section>
    </main>

    <script>

    </script>
    <?php include 'partials/footer.php';?>
