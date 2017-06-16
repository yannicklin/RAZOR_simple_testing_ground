<?php
    $PageTitle="D3 - OMG Particles";

    function customPageHeader(){
        ?>
        <script src="http://cdnjs.cloudflare.com/ajax/libs/d3/3.4.6/d3.min.js" charset="utf-8"></script>
        <?php
    }

    include_once('head.php');
    ?>
    <!-- Wrap the rest of the page in another container to center all the content. -->
    <div id="D3-Graph" style="margin: 0; background: #111; min-width: 600px;"></div>

    <!-- D3 Script -->
    <script>
        var width = Math.max(600, innerWidth),
        height = Math.max(400, innerHeight);

        var x1 = width / 2,
        y1 = height / 2,
        x0 = x1,
        y0 = y1,
        i = 0,
        r = 200,
        τ = 2 * Math.PI;

        var canvas = d3.select("#D3-Graph").append("canvas")
        .attr("width", width)
        .attr("height", height)
        .on("ontouchstart" in document ? "touchmove" : "mousemove", move);

        var context = canvas.node().getContext("2d");
        context.globalCompositeOperation = "lighter";
        context.lineWidth = 2;

        d3.timer(function() {
        context.clearRect(0, 0, width, height);

        var z = d3.hsl(++i % 360, 1, .5).rgb(),
        c = "rgba(" + z.r + "," + z.g + "," + z.b + ",",
        x = x0 += (x1 - x0) * .1,
        y = y0 += (y1 - y0) * .1;

        d3.select({}).transition()
        .duration(2000)
        .ease(Math.sqrt)
        .tween("circle", function() {
        return function(t) {
        context.strokeStyle = c + (1 - t) + ")";
        context.beginPath();
        context.arc(x, y, r * t, 0, τ);
        context.stroke();
        };
        });
        });

        function move() {
        var mouse = d3.mouse(this);
        x1 = mouse[0];
        y1 = mouse[1];
        d3.event.preventDefault();
        }
    </script>
    <?php
    include_once('foot.php');
?>