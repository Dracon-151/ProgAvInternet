<!DOCTYPE html>
<html>
    <head>
        <title>Canvas</title>
    </head>
    <body>
        <canvas width="800" height="720" id="cvs">
          Hola tu navegador no funciona
        </canvas>

        <img id="imagen" src="img/boombot.png" style="display: none">
        <script>
          var canvas = document.getElementById('cvs');
          var ctx = canvas.getContext('2d');

          /*ctx.fillStyle = "rgb(138,138,209)";
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
          */

          ctx.font = "80px Arial";
          ctx.fillStyle = "rgb(255,100,100)";
          ctx.fillText("Hola mundo", 100, 100);
          ctx.strokeText("Hola mundo", 100, 200);
          
          
          var grd = ctx.createLinearGradient(500,300,700,380);
          grd.addColorStop(0,  "orange")
          grd.addColorStop(1,  "purple")
          ctx.fillStyle = grd;
          ctx.fillRect(500,300,200,80);
          
          
          var grd = ctx.createRadialGradient(600,380,5,600,380,150);
          grd.addColorStop(0,  "red")
          grd.addColorStop(1,  "white")
          ctx.fillStyle = grd;
          ctx.fillRect(500,300,200,160);

          var img = document.getElementById("imagen");
          ctx.drawImage(img, 200, 200, 150, 150);

          canvas.addEventListener("click", function (e){              
            ctx.strokeStyle = "rgb(100, 100, 100)";
            ctx.fillStyle = "rgba(138,138,209, 0.8)";
            ctx.beginPath();
            ctx.arc(e.offsetX,e.offsetY , 25, 0, 2 * Math.PI);
            ctx.stroke();
            ctx.fill();
          });
          
          canvas.addEventListener("mouseover", function (e){

            var r = Math.random()*255;
            var g = Math.random()*255;
            var b = Math.random()*255;
                        
            ctx.strokeStyle = "rgb(100, 100, 100)";
            ctx.fillStyle = "rgba(" + r + "," + g + "," + b + ", 0.8)";
          });

          canvas.addEventListener("click", function (e){
            ctx.beginPath();
            ctx.arc(e.offsetX,e.offsetY , 25, 0, 2 * Math.PI);
            ctx.stroke();
            ctx.fill();
          });

        </script>
    </body>
</html>
