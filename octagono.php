<?php 

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Ejercicio Octágono - Primer Corte</title>
        <meta http-equiv="Expires" content="0">
        <meta http-equiv="Last-Modified" content="0">
        <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
        <meta http-equiv="Pragma" content="no-cache">
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=7">
        <link rel="stylesheet" href="css/index.css?v=echo(rand())">
    </head>
    <body>
        <nav>
            <div id="nav-container">
               <h1><a href="index.php" id="nav-logo">Primer corte</a>
               </h1>
                <ul>
                    <li><a href="#" class="nav-item">Item 1 </a></li>
                    <li><a href="#" class="nav-item">Item 2 </a></li>
                </ul>
            </div>
        </nav>

        <div id="selection-card">
           <div class="title">
           <h3 id="card-title">Actividades de primer corte</h3>
            <p class="title-desc">Seleccione entre uno de los siguientes botones, 
                cada uno le llevará para una pagina correspondiente a susodicha actividad</p>
           </div>

           <div class="sel-buttons">
               <button class="btn" id="btn1">Calculo de Hipotenusa de un trianguo rectangulo</button>
               <button class="btn" id="btn2">Calculo del area de un octagono regular</button>
               <button class="btn" id="btn3">Calculo de Hipotenusa de un trianguo rectangulo</button>
           </div>
        </div>

        <footer>
            <div class="footer-content">

            </div>
        </footer>

        <script>
            const btn1 = document.getElementById('btn1')
            const btn2 = document.getElementById('btn2')
            const btn3 = document.getElementById('btn3')

            btn1.onclick = function () {
                location.replace('hipotenusa.php')
            }

            btn2.onclick = function () {
                location.replace('octagono.php')
            }
            btn3.onclick = function () {
                location.replace('hipotenusa.php')
            }
        </script>
    </body>
</html>