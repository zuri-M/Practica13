<!DOCTYPE html>
<html lang="es-mx">
<head>
    <meta charset="UTF-8">
    <title>IntroPhp7 Grupo XA</title>
    <link rel="stylesheet" href="css/estilos.css"/>
    <link rel="stylesheet" href="css/menu.css"/>
    <link rel="stylesheet" href="css/problemas.css"/>
    <link href="https://fonts.googleapis.com/css?family=Rambla" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
</head>
<body>
   <section class="wrapper">
    <header>
      <h1 class="logo"><a href="index.html">IntroPHP7</a></h1>
      <nav>
      <ul>
        <li><a href="index.php" class="current">Inicio</a></li>
        <li><a href=galaxia.php>Galaxia</a></li>
      </ul>
      </nav>
    </header>
    <section id="contenedor">
      <section  class="problema">
        <h2>Problema: Calcula la velocidad de escape de la tierra</h2>
        <p>Descripción:</p>
        <p>G es la constante gravitatoria<br>
           M es la masa de la tierra<br>
           r es la distancia radial entre G y M <br>
        </p>
      </section>
<section class="formulas">
        <h2>Fórmulas</h2>
        Escape de la tierra: v=sqrt(2G M/r)<br>
      </section>
      <section class="datos">
        <h2>Datos:</h2>
        G= 6.67 x 10^11 Nm^2/Kg^2 <br>
        M= 5.98 x10^27 Kg <br>
        r= 6.37 x 10^8 cm.
      </section>
      <section class="calculos">
        <h2>Solución</h2>
        <p>El escape de la tierra es:<br>  
            sqrt(2*6.67 x 10^11 Nm^2/Kg^2*5.98 x10^27 Kg/6.37 x 10^8 cm) <br></p>
        <button onclick="velocidad_escape ();">Presiona para calcular</button>
      </section>
<?php
     function velocidad_escape (){
      var G=6.67*Math.pow(10,-11);
      var M=5.98*Math.pow(10,24);
      var r=6.37*Math.pow(10,6);
      var velocidad= Math.sqrt(2*G*M/r);
      var d=document.getElementById("resultadoA");
      d.innerHTML=velocidad+' km/s';
      }
?>
<section class="resultado">
        <h2>Resultado:</h2>
        <div id="resultadoA"></div>
      </section>
    </section>
    <footer class="pie">
     Creative Commons versión 4.0 SciSoft 2024
    </footer>
    </section>
</body>
</html>
