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
        var player1 = null;
        var player2 = null;
        var paredes = null;
        var direccion = 1;
        var puntos = 0;
        var speed = 5;
        var pause = false;

        function run()
        {
            canvas = document.getElementById('cvs');
            ctx = canvas.getContext('2d');

            player1 = new Cuadro(200,200,50,50,"rgb(138,209,138");
            player2 = new Cuadro(300,300,25,25,"rgb(209,138,138");
            paredes = [new Cuadro(80,175,25,250,"rgb(105,100,100"), 
                    new Cuadro(720,175,25,250,"rgb(1050100,100"), 
                    new Cuadro(110,80,600,25,"rgb(100,100,100"), 
                    new Cuadro(110,500,600,25,"rgb(100,100,100")];
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

        document.addEventListener("keydown", function(e){
            console.log(e.keyCode);

            if(!pause){
                if(e.keyCode == 37 || e.keyCode == 65){
                    direccion = 2;
                }
                if(e.keyCode == 38 || e.keyCode == 87){
                    direccion = 4;
                }
                if(e.keyCode == 39 || e.keyCode == 68){
                    direccion = 1;
                }
                if(e.keyCode == 40 || e.keyCode == 83){
                    direccion = 3;
                }
            }
            if(e.keyCode == 32){
                pause = !pause;
            }
        });



        function paint(){

            window.requestAnimationFrame(paint);
            ctx.fillStyle = "rgb(255,255,255)";
            ctx.fillRect(0,0,800,600);
            
            ctx.font = "20px Arial";
            ctx.fillStyle = "rgb(100,100,100)";
            ctx.fillText("Puntos: " + puntos, 50, 50);

            bounds();

            if(!pause){
                move();
            }

            for (var i = 0; i < paredes.length; i++) {
                paredes[i].paint(ctx);
                if(player1.se_tocan(paredes[i])){
                    switch(direccion){
                        case 1:
                            player1.x -= speed;
                        break;
                        case 2:
                            player1.x += speed;
                        break;
                        case 3:
                            player1.y -= speed;
                        break;
                        case 4:
                            player1.y += speed;
                        break;
                    }
                }
            }

            player1.paint(ctx);

            if(player1.se_tocan(player2)){
                player2.x = Math.random()* 500 + 100;
                player2.y = Math.random()* 200 + 200;
                player1.c = "rgb(" + Math.random()*255 + "," + Math.random()*255 + "," + Math.random()*255 + ")";
                    puntos += 10;
                    speed += 0.5;
            }
            player2.paint(ctx);

            if(pause){
                ctx.fillStyle = "rgba(0,0,0,0.4)";
                ctx.fillRect(0,0,800,600);
                
                ctx.font = "20px Arial";
                ctx.fillStyle = "rgb(255,255,255)";
                ctx.fillText("Pausa", 350, 320);
            }
        }

        function bounds(){
            if(player1.x > 800) player1.x = 0;
            if(player1.y > 600) player1.y = 0;
            if(player1.x < 0) player1.x = 800;
            if(player1.y < 0) player1.y = 600;
            if(player2.x > 800) player2.x = 0;
            if(player2.y > 600) player2.y = 0;
            if(player2.x < 0) player2.x = 800;
            if(player2.y < 0) player2.y = 600;
        }

        function move(){
            switch(direccion){
                case 1:
                    player1.x += speed;
                break;
                case 2:
                    player1.x -= speed;
                break;
                case 3:
                    player1.y += speed;
                break;
                case 4:
                    player1.y -= speed;
                break;
            }
        }

        function Cuadro(x, y, w, h, c){
            this.x = x;
            this.y = y;
            this.w = w;
            this.h = h;
            this.c = c;

            this.paint = function(ctx){
                ctx.fillStyle = this.c;
                ctx.fillRect(this.x, this.y, this.w, this.h);
                ctx.strokeRect(this.x, this.y, this.w, this.h);
            }

            this.se_tocan = function (target) { 

                if(this.x < target.x + target.w &&
                this.x + this.w > target.x && 
                this.y < target.y + target.h && 
                this.y + this.h > target.y){
                    return true;
                }
            };
        }
        </script>
    </body>
</html>
