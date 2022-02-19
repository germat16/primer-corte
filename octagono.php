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