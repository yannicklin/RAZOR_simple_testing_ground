<?php
    $PageTitle="HomePage";

    function customPageHeader(){
        ?>
        <script src="js/holder.js"></script>
        <?php
    }

    include_once('head.php');
    ?>
        <!-- Wrap the rest of the page in another container to center all the content. -->
        <div class="jumbotron" style="background: #666666 url('8GuO3.png') repeat right top; padding-top: 12px;">
            <h1>Hello, Hero!</h1>
            <p>What can I explain more ?!</p>

            <!-- Nav tabs -->
            <ul class="nav nav-tabs" id="home-Tab">
                <li class="active"><a href="#tab-home" data-toggle="tab">Home</a></li>
                <li><a href="#GitHub" data-toggle="tab">GitHub</a></li>
                <li><a href="#D3" data-toggle="tab">D3</a></li>
                <li><a href="#HighCharts" data-toggle="tab">HighCharts</a></li>
                <li><a href="#ThreeJS" data-toggle="tab">ThreeJS</a></li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
                <div class="tab-pane fade in active" id="tab-home">
                    <p> Amazing JS: Holder! It can show dummy space holder picture with any size.
                        <blockquote> <div class="glyphicon glyphicon-picture"></div>holder.js/90%x180 </blockquote>
                        <img data-src="holder.js/90%x180" alt="..." />
                    </p>
                </div>
                <div class="tab-pane fade" id="GitHub">
                    <p> <strong>Current Working Projects in GitHub</strong> <br />
                        GitHub is the collection of all opensoure codes/plugins/scripts.
                        <br />
                        <a class="btn btn-primary btn-lg glyphicon glyphicon-pencil" id="btn-GitHub-bootstrap-player" role="button" href="GitHub-bootstrap-player.php">BootStrap Player</a>
                    </p>
                </div>
                <div class="tab-pane fade" id="D3">
                    <p> <strong>D3.js -> Data-Driven Documents JavaScript Library</strong> <br />
                        D3.js is a JavaScript library for manipulating documents based on data. D3 helps you bring data to life using HTML, SVG and CSS. D3's emphasis on web standards gives you the full capabilities of modern browsers without tying yourself to a proprietary framework, combining powerful visualization components and a data-driven approach to DOM manipulation.
                        <br />
                        <a class="btn btn-primary btn-lg glyphicon glyphicon-pencil" id="btn-D3" role="button" href="D3.php">Normal</a>
                        <a class="btn btn-primary btn-lg glyphicon glyphicon-pencil" id="btn-D3-CSV" role="button" href="D3-CSV.php">CSV</a>
                        <a class="btn btn-primary btn-lg glyphicon glyphicon-pencil" id="btn-D3-Special" role="button" href="D3-Special.php">Special</a>
                    </p>
                </div>
                <div class="tab-pane fade" id="HighCharts">
                    <p> <strong>HighCharts, Create interactive charts easily for your web projects</strong> <br />
                        Highsoft AS is the company behind Highcharts JS, the JavaScript charting engine, and Highslide JS, the image and media viewer.
                        <br />
                        <a class="btn btn-primary btn-lg glyphicon glyphicon-pencil" id="btn-HighChart" role="button" href="HC.php">HighChart</a>
                        <a class="btn btn-primary btn-lg glyphicon glyphicon-pencil" id="btn-HighStock" role="button" href="HS.php">HighStock</a>
                    </p>
                </div>
                <div class="tab-pane fade" id="ThreeJS">
                    <p> <strong>Three JS -> A JavaScript 3D Library which makes WebGL simpler</strong> <br />
                        Three.js is a lightweight cross-browser JavaScript library/API used to create and display animated 3D computer graphics on a Web browser. Three.js scripts may be used in conjunction with the HTML5 canvas element, SVG or WebGL.
                        <br />
                        <a class="btn btn-primary btn-lg glyphicon glyphicon-eye-open" id="btn-ThreeJS" role="button" href="ThreeJS.php">ThreeJS</a>
                    </p>
                </div>
            </div>
        </div>
    <?php
    include_once('foot.php');
?>