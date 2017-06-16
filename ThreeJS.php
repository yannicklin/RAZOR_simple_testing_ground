<?php
    $PageTitle="Three JS";

    function customPageHeader(){
        ?>
        <script src="http://cdnjs.cloudflare.com/ajax/libs/d3/3.4.6/d3.min.js" charset="utf-8"></script>
        <style>

            #threeJS-Container {overflow: hidden; padding: 0; margin: 0; color: #222; background-color: #BBB; font-family: arial; font-size: 100%;}
            #info .top {position: static; top: 0px; width: 100%; padding: 5px; text-align: center;}
            #info a {color: #66F; text-decoration: none;}
            #info a:hover {text-decoration: underline;}
        </style>
        <script src="js/threejs/2014/three.js/Three.js"></script>
        <script src="js/threejs/2014/three.js/Detector.js"></script>
        <!-- https://github.com/mrdoob/stats.js -->
        <script src="js/threejs/2014/three.js/Stats.js"></script>

        <script src="js/threejs/2014/threex/THREEx.screenshot.js"></script>
        <script src="js/threejs/2014/threex/THREEx.FullScreen.js"></script>
        <script src="js/threejs/2014/threex/THREEx.WindowResize.js"></script>
        <script src="js/threejs/2014/threex.dragpancontrols.js"></script>
        <?php
    }

    include_once('head.php');
    ?>
    <!-- Wrap the rest of the page in another container to center all the content. -->
    <!-- three.js container -->
    <div id="threeJS-Container">
        <!-- info on screen display -->
        <div id="info">
            <div class="top" id="inlineDoc">
                - <i>p</i> for screenshot
            </div>
        </div>
    </div>

    <script type="text/javascript">
        var stats, scene, renderer;
        var camera, cameraControls;

        if( !init() )	animate();

        // init the scene
        function init(){

            if( Detector.webgl ){
                renderer = new THREE.WebGLRenderer({
                    antialias		: true,	// to get smoother output
                    preserveDrawingBuffer	: true	// to allow screenshot
                });
                renderer.setClearColorHex( 0xBBBBBB, 1 );
                // uncomment if webgl is required
                //}else{
                //	Detector.addGetWebGLMessage();
                //	return true;
            }else{
                renderer	= new THREE.CanvasRenderer();
            }
            renderer.setSize( window.innerWidth, window.innerHeight );
            document.getElementById('threeJS-Container').appendChild(renderer.domElement);

            // add Stats.js - https://github.com/mrdoob/stats.js
            stats = new Stats();
            stats.domElement.style.position	= 'relative';
            stats.domElement.style.bottom	= '5px';
            stats.domElement.style.left	= '5px';
            document.getElementById('threeJS-Container').appendChild( stats.domElement );

            // create a scene
            scene = new THREE.Scene();

            // put a camera in the scene
            camera = new THREE.PerspectiveCamera(35, window.innerWidth / window.innerHeight, 1, 10000 );
            camera.position.set(0, 0, 5);
            scene.add(camera);

            // create a camera contol
            cameraControls	= new THREEx.DragPanControls(camera);

            // transparently support window resize
            THREEx.WindowResize.bind(renderer, camera);
            // allow 'p' to make screenshot
            THREEx.Screenshot.bindKey(renderer);
            // allow 'f' to go fullscreen where this feature is supported
            if( THREEx.FullScreen.available() ){
                THREEx.FullScreen.bindKey();
                document.getElementById('inlineDoc').innerHTML	+= "- <i>f</i> for fullscreen";
            }

            // here you add your objects
            // - you will most likely replace this part by your own
            var geometry	= new THREE.TorusGeometry( 1, 0.42 );
            var material	= new THREE.MeshNormalMaterial();
            var mesh	= new THREE.Mesh( geometry, material );
            scene.add( mesh );
        }

        // animation loop
        function animate() {

            // loop on request animation loop
            // - it has to be at the begining of the function
            // - see details at http://my.opera.com/emoller/blog/2011/12/20/requestanimationframe-for-smart-er-animating
            requestAnimationFrame( animate );

            // do the render
            render();

            // update stats
            stats.update();
        }

        // render the scene
        function render() {

            // update camera controls
            cameraControls.update();

            // actually render the scene
            renderer.render( scene, camera );
        }
    </script>
    <?php
    include_once('foot.php');
?>