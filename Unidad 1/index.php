<!DOCTYPE html>
<html>
    <head>
        <title>Canvas</title>
    </head>
    <body>
        <canvas width="1000" height="720" id="cvs">
          Hola tu navegador no funciona
        </canvas>

        <script>
          var canvas = document.getElementById('cvs');
          var ctx = canvas.getContext('2d');

          ctx.fillStyle = "rgb(138,138,209)";
          ctx.fillRect(50,50,60,60);

          ctx.fillStyle = "rgba(209,138,138, 0.9)";
          ctx.fillRect(90,90,60,60);

          ctx.fillStyle = "rgba(138,138,209, 0.8)";
          ctx.fillRect(130,130,60,60);
          
          
          ctx.strokeStyle = "rgb(100, 100, 100)";
          ctx.moveTo(100,100);
          ctx.lineTo(200,150);
          ctx.stroke();

          ctx.fillStyle = "rgb(237, 119, 213)";
          ctx.moveTo(300,300);
          ctx.lineTo(325,375);
          ctx.lineTo(400,400);
          ctx.lineTo(300,300);
          ctx.fill();
          ctx.stroke();

          ctx.strokeStyle = "rgb(100, 100, 100)";
          ctx.fillStyle = "rgba(138,138,209, 0.8)";

          ctx.beginPath();
          ctx.arc(500,100, 50, 0, 2 * Math.PI);
          ctx.stroke();
          ctx.fill();

          ctx.beginPath();
          ctx.arc(600,100, 50, 0, 2 * Math.PI);
          ctx.stroke();

        </script>
    </body>
</html>
