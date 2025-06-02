<?php
include 'respuestas.php';
$puntos = 0;
$total = 10;
$resultados = [];

$numero_pregunta = 1;

foreach ($respuestas_correctas as $pregunta => $respuesta_correcta) {
    $respuesta_usuario = [];

    if ($pregunta == 'p10') {
        if (isset($_POST[$pregunta])) {
            $respuesta_usuario = $_POST[$pregunta];
        } else {
            $respuesta_usuario = [];
        }

        $correcta = true;

        $cantidad_correctas = 0;
        for ($i = 0; $i < count($respuesta_correcta); $i++) {
            $encontrada = false;
            for ($j = 0; $j < count($respuesta_usuario); $j++) {
                if ($respuesta_correcta[$i] == $respuesta_usuario[$j]) {
                    $encontrada = true;
                }
            }
            if ($encontrada == true) {
                $cantidad_correctas = $cantidad_correctas + 1;
            }
        }

        if ($cantidad_correctas == count($respuesta_correcta) && count($respuesta_usuario) == count($respuesta_correcta)) {
            $correcta = true;
        } else {
            $correcta = false;
        }

    } else {
        if (isset($_POST[$pregunta])) {
            $respuesta_usuario = $_POST[$pregunta];
        } else {
            $respuesta_usuario = '';
        }

        if ($respuesta_usuario == $respuesta_correcta) {
            $correcta = true;
        } else {
            $correcta = false;
        }
    }

    if ($correcta == true) {
        $puntos = $puntos + 10;
    }

    $info = [];
    $info['numero'] = $numero_pregunta;
    $info['usuario'] = $respuesta_usuario;
    $info['correcta'] = $respuesta_correcta;
    $info['es_correcta'] = $correcta;

    $resultados[] = $info;
    $numero_pregunta = $numero_pregunta + 1;
}

$porcentaje = ($puntos * 100) / ($total * 10);

if ($porcentaje < 50) {
    $mensaje = "Seguí participando";
    $imagen = "https://easy-peasy.ai/cdn-cgi/image/quality=80,format=auto,width=700/https://media.easy-peasy.ai/2839fd9e-5c97-4239-9eb7-fc49536f4bdf/2f166216-37c6-4bf8-9fae-c6f5ad27cc90.png";
} else if ($porcentaje < 75) {
    $mensaje = "Bien";
    $imagen = "https://i.pinimg.com/564x/bd/a4/04/bda404f24a6471f3319e190bc99e3b91.jpg";
} else if ($porcentaje < 100) {
    $mensaje = "Muy bien";
    $imagen = "https://i.pinimg.com/474x/a0/2f/50/a02f502296c2f31ab09c1cbf2ad57b6d.jpg";
} else {
    $mensaje = "Excelente";
    $imagen = "https://i.pinimg.com/originals/65/3c/1f/653c1feca83b88feb5f0cbbfb1ee5d66.jpg";
}
?>

<html>
<head>
  <title>Resultados</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body class="container py-4">
  <h2>Resultados</h2>
  <p>Puntaje total: <strong><?php print $puntos; ?></strong> / <?php print $total * 10; ?></p>
  <p>Porcentaje: <?php print $porcentaje; ?>%</p>

  <?php
  for ($i = 0; $i < count($resultados); $i++) {
    $r = $resultados[$i];
    if ($r['es_correcta'] == true) {
      print "<div class='alert alert-success'>";
      print "<strong>Pregunta " . $r['numero'] . ":</strong><br>";
      print "Respuesta correcta";
      print "</div>";
    } else {
      print "<div class='alert alert-danger'>";
      print "<strong>Pregunta " . $r['numero'] . ":</strong><br>";
      print "Respuesta incorrecta<br>";
      print "La respuesta correcta era: ";

      if (gettype($r['correcta']) == "array") {
        for ($j = 0; $j < count($r['correcta']); $j++) {
          print $r['correcta'][$j] . " ";
        }
      } else {
        print $r['correcta'];
      }

      print "</div>";
    }
  }
  ?>

  <div class="text-center mt-4">
    <h4><?php print $mensaje; ?></h4>
    <img src="<?php print $imagen; ?>" alt="<?php print $mensaje; ?>" class="img-fluid" style="max-width: 300px;">
  </div>

  <div class="mt-4">
    <a href="trivia.php" class="btn btn-primary">Volver a intentar</a>
  </div>
</body>
</html>
