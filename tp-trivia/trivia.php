<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Trivia sobre Uñas</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body class="container py-4">
  <h1>Uñas y Manicuria</h1>
  <form action="procesar.php" method="post">

    <div class="mb-3">
      <label>1. ¿Qué producto se usa para proteger la uña?</label><br>
      <input type="radio" name="p1" value="a"> Ultrabond<br>
      <input type="radio" name="p1" value="b"> Base Coat<br>
      <input type="radio" name="p1" value="c"> Top Coat 
    </div>

    <div class="mb-3">
      <label>2. ¿Cuál es la función principal de la cutícula?</label><br>
      <input type="radio" name="p2" value="a"> Decorar<br>
      <input type="radio" name="p2" value="b"> Hidratar<br>
      <input type="radio" name="p2" value="c"> Proteger la matriz de la uña
    </div>

    <div class="mb-3">
      <label>3. ¿Qué herramienta se usa para empujar la cutícula?</label><br>
      <input type="radio" name="p3" value="a"> Lima<br>
      <input type="radio" name="p3" value="b"> Empujador<br>
      <input type="radio" name="p3" value="c"> Alicate
    </div>

    <div class="mb-3">
      <label>4. ¿Cada cuánto tiempo se recomienda realizar una manicura?</label><br>
      <input type="radio" name="p4" value="a"> Cada 1-2 semanas<br>
      <input type="radio" name="p4" value="b"> Cada 2 meses<br>
      <input type="radio" name="p4" value="c"> Cada 6 meses
    </div>

    <div class="mb-3">
      <label>5. ¿Qué producto se usa para proteger el esmalte y alargar su duración?</label><br>
      <input type="radio" name="p5" value="a"> Base coat<br>
      <input type="radio" name="p5" value="b"> Removedor<br>
      <input type="radio" name="p5" value="c"> Top coat
    </div>

    <div class="mb-3">
      <label>6. ¿Cual de estos puede dañar las uñas si se utiliza en exceso?</label><br>
      <input type="radio" name="p6" value="a"> Base Coat<br>
      <input type="radio" name="p6" value="b"> Lima de cartón<br>
      <input type="radio" name="p6" value="c"> Crema hidratante
    </div>

    <div class="mb-3">
      <label>7. ¿Qué significa que una uña esté amarilla?</label><br>
      <input type="radio" name="p7" value="a"> Es normal<br>
      <input type="radio" name="p7" value="b"> Es signo de buena salud<br>
      <input type="radio" name="p7" value="c"> Puede indicar hongo
    </div>

    <div class="mb-3">
      <label>8. ¿Qué tipo de uña es más propensa a romperse?</label><br>
      <input type="radio" name="p8" value="a"> Uña débil y delgada<br>
      <input type="radio" name="p8" value="b"> Uña fuerte<br>
      <input type="radio" name="p8" value="c"> Uña con esmalte gel
    </div>

    <div class="mb-3">
      <label>9. ¿Qué se debe hacer antes de aplicar esmalte?</label><br>
      <input type="radio" name="p9" value="a"> Limpiar con alcohol<br>
      <input type="radio" name="p9" value="b"> Preparar la uña<br>
      <input type="radio" name="p9" value="c"> Pintar directamente
    </div>

    <div class="mb-3">
      <label>10. ¿Qué cuidados ayudan a mantener uñas saludables? (multiples opciones)</label><br>
      <input type="checkbox" name="p10[]" value="a"> Hidratarlas<br>
      <input type="checkbox" name="p10[]" value="b"> Morderlas<br>
      <input type="checkbox" name="p10[]" value="c"> Usar guantes al limpiar
    </div>

    <button type="submit" class="btn btn-primary">Calcular Puntaje</button>
  </form>
</body>
</html>
