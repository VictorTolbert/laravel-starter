<div class="purplebenefits">
    <div class="mobileimage">
        <script src="https://code.createjs.com/createjs-2015.11.26.min.js"></script>
        <script type="text/javascript" src="http://dkbefyqbv3475.cloudfront.net/wp-content/cache/minify/a15a5.js.gzip"></script>

        <script>
            var canvas, stage, exportRoot;

            function init() {
                // --- write your JS code here ---

                createjs.MotionGuidePlugin.install();

                canvas = document.getElementById("canvas");
                exportRoot = new lib.waves4();

                stage = new createjs.Stage(canvas);
                stage.addChild(exportRoot);
                stage.update();

                createjs.Ticker.setFPS(lib.properties.fps);
                createjs.Ticker.addEventListener("tick", stage);
            }
        </script>
        <canvas id="canvas" width="1900" height="714" style="background-color: transparent;"></canvas>
    </div>
</div>
