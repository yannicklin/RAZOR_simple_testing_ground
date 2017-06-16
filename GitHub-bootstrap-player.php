<?php
    $PageTitle="GitHub - BootStrap Player";

    function customPageHeader(){
        ?>
        <link href="css/bootstrap_player.css" rel="stylesheet">
        <?php
    };

    include_once('head.php');
    ?>
    <!-- Wrap the rest of the page in another container to center all the content. -->
    <div class="container">
        <div class="jumbotron">
            <h2>bootstrap3_player</h2>
            <p><a href="https://github.com/TWOUDIA/bootstrap_player/blob/master/index.html">index.html</a>
                shows the very simple html needed to include bootstrap3_player in your page.</p>
            <a role="button" class="btn btn-primary btn-lg" href="https://github.com/TWOUDIA/bootstrap_player">
                <span class="glyphicon glyphicon-download" aria-hidden="true"></span> GitHub
            </a>
        </div>

        <div class="row col-md-8 col-md-offset-2 col-xs-12">
            <audio controls
                   data-info-album-art="https://farm8.staticflickr.com/7630/16897890018_ea1e266f92_z.jpg"
                   data-info-album-title="Wolfenstein The New Order"
                   data-info-artist="House of the Rising Sun"
                   data-info-title="Wilbert Eckart & Volksmusik Stars"
                   data-info-label="Independent"
                   data-info-year="2014"
                   data-info-att="Wilbert Eckart & Volksmusik Stars"
                   data-info-att-link="https://github.com/TWOUDIA">
                <source src="media/wilbert-eckart-und-seine-volksmusik-stars-house-of-the-rising-sun.ogg" type="audio/ogg" />
                <source src="media/wilbert-eckart-und-seine-volksmusik-stars-house-of-the-rising-sun.mp3" type="audio/mpeg" />
                <a href="https://www.youtube.com/watch?v=x_artPecEaM" target="_new">Wilbert Eckart & Volksmusik Stars</a>
                An html5-capable browser is required to play this audio.
            </audio>
        </div>

        <div class="row col-md-6 col-md-offset-3 col-xs-12">
            <audio controls>
                <source src="http://www.w3schools.com/html/horse.ogg" type="audio/ogg" />
                <source src="http://www.w3schools.com/html/horse.mp3" type="audio/mpeg" />
                <a href="http://www.w3schools.com/html/horse.mp3">horse</a>
                An html5-capable browser is required to play this audio.
            </audio>
        </div>

        <footer class="row col-md-6 col-md-offset-3 col-xs-12">
            <div class="list-group">
                <a  class="list-group-item" href="https://www.flickr.com/photos/65092514@N08/16897890018">
                    Picture of Wolfenstein</a>
                <a  class="list-group-item" href="http://glyphicons.com/">
                    Glyphicons.com provide the Halflings glyphs font that comes free of cost with Bootstrap 3</a>
            </div>
        </footer>

    </div><!-- container -->
    <?php
        function customPageFooter(){
            ?>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
            <script src="js/bootstrap_player.js"></script>
            <?php
        };

        include_once('foot.php');
?>