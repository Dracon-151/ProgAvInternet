<!DOCTYPE html>
<html>
    <head>
        <title>Canvas</title>
    </head>
    <body>
        <canvas width="800" height="600" id="cvs">
          Hola tu navegador no funciona
        </canvas>

        <script>
          var canvas = null;
          var ctx = null;

        function run()
        {
            canvas = document.getElementById('cvs');
            ctx = canvas.getContext('2d');
            paint();
        }

        window.requestAnimationFrame = (function () {
        return window.requestAnimationFrame ||
            window.webkitRequestAnimationFrame ||
            window.mozRequestAnimationFrame ||
            function (callback) {
                window.setTimeout(callback, 17);
            };
        }());

        window.addEventListener('load', run(), false);

        var figura = false;
        var tamano = 25;
        var color = "rgb(138,209,138)";
        var xMov = 0;
        var yMov = 0;

        function paint(){

            window.requestAnimationFrame(paint);
            ctx.fillStyle = "rgb(255,255,255)";
            ctx.fillRect(0,0,800,600);
            ctx.fill();
            ctx.stroke();
        
            xMov +=5;

            if(xMov > 800) xMov = 0;
            if(yMov > 600) yMov = 0;
            ctx.fillStyle = color;
            ctx.strokeStyle = color;
            if(figura){
                ctx.beginPath();
                ctx.arc(xMov+tamano,yMov+tamano, tamano, 0, 2 * Math.PI);
                ctx.stroke();
                ctx.fill();
            }else{
                ctx.fillRect(xMov,yMov,(tamano*2),(tamano*2));
            }
        }
        </script>
    </body>
</html>
