<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Cuestionario de autodiagnóstico - Sello CAME Sustentable</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
  <link rel="stylesheet" href="style.css" />
  <?php include 'connect.php'; ?>
</head>

<body>
  <!-- https://came.ar/sustentable/autodiagnostico -->
  <!-- Header -->
  <div class="container">
    <div class="row justify-content-md-center">
      <div class="mt-4 col-md-auto">
        <img width="250px" src="imgs/CAME-Sustentable.png" alt="Sello CAME Sustentable"
          title="Sello CAME Sustentable" />
      </div>

      <h1 class="titulo">Cuestionario de autodiagnóstico</h1>
    </div>
  </div>
  <!-- /Header -->
  
  <!-- multistep form -->
  <form id="autodiagnostico" class="d-flex justify-content-center">

    <!-- Pregunta 1 -->
    <fieldset id="paso1" class="anterior">
      <div class="input-group mb-3">
        <input placeholder="Nombre" name="nombre" id="nombre" type="text" aria-label="nombre" class="form-control"
          required />
        <input placeholder="Mail" name="mail" id="mail" type="text" aria-label="mail" class="form-control" required />
        <input placeholder="Teléfono" name="tel" id="tel" type="text" aria-label="tel" class="form-control" required />
      </div>
      <div class="input-group mb-3">
        <input placeholder="Empresa" name="empresa" id="empresa" type="text" aria-label="Empresa" class="form-control"
          required />
        <input placeholder="Rubro" name="rubro" id="rubro" type="text" aria-label="Rubro" class="form-control"
          required />
      </div>

      <h3 class="fs-subtitle">
        ¿El establecimiento se encuentra habilitado por la autoridad
        competente?
      </h3>
      <div class="mb-4">
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="p1" id="inlineRadio1" value="1" />
          <label class="form-check-label" for="inlineRadio1">Si</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="p1" id="inlineRadio2" value="0" />
          <label class="form-check-label" for="inlineRadio2">No</label>
        </div>
      </div>
      <div class="feedback"></div>
      <input id="paso1_next" type="button" name="next" class="next action-button" value="Siguiente" />
    </fieldset>

    <!-- Pregunta 2 -->
    <fieldset id="paso2" class="siguiente">
      <div class="mb-4">
        <h3 class="fs-subtitle">
          ¿Cumple las Buenas Prácticas Agrícolas o las Buenas Prácticas de
          Manufactura, según aplique a su actividad?
        </h3>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="p2" id="inlineRadio1" value="1" />
          <label class="form-check-label" for="inlineRadio1">Si</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="p2" id="inlineRadio2" value="0" />
          <label class="form-check-label" for="inlineRadio2">No</label>
        </div>
      </div>
      <div class="mb-4">
        <h3 class="fs-subtitle">
          ¿Tiene procedimientos documentados y registros de control?
        </h3>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="p3" id="inlineRadio1" value="1" />
          <label class="form-check-label" for="inlineRadio1">Si</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="p3" id="inlineRadio2" value="0" />
          <label class="form-check-label" for="inlineRadio2">No</label>
        </div>
      </div>
      <div class="feedback"></div>
      <input id="paso2_prev" type="button" name="previous" class="previous action-button" value="Anterior" />
      <input id="paso2_next" type="button" name="next" class="next action-button" value="Siguiente" />
    </fieldset>

    <!-- Pregunta 3 -->
    <fieldset id="paso3">
      <div class="mb-4">
        <h3 class="fs-subtitle">
          ¿Tiene una política de gestión y objetivos de sustentabilidad
          definidos?
        </h3>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="p4" id="inlineRadio1" value="1" />
          <label class="form-check-label" for="inlineRadio1">Si</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="p4" id="inlineRadio2" value="0" />
          <label class="form-check-label" for="inlineRadio2">No</label>
        </div>
      </div>

      <div class="mb-4">
        <h3 class="fs-subtitle">
          ¿Tiene procedimiento de compras responsables?
        </h3>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="p5" id="inlineRadio1" value="1" />
          <label class="form-check-label" for="inlineRadio1">Si</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="p5" id="inlineRadio2" value="0" />
          <label class="form-check-label" for="inlineRadio2">No</label>
        </div>
      </div>

      <div class="mb-4">
        <h3 class="fs-subtitle">
          ¿Realiza prácticas para el ahorro y uso eficiente del agua y la
          energía?
        </h3>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="p6" id="inlineRadio1" value="1" />
          <label class="form-check-label" for="inlineRadio1">Si</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="p6" id="inlineRadio2" value="0" />
          <label class="form-check-label" for="inlineRadio2">No</label>
        </div>
      </div>

      <div class="mb-4">
        <h3 class="fs-subtitle">
          ¿Realiza prácticas para la reducción de la generación de residuos,
          la promoción del reciclaje y la economía circular?
        </h3>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="p7" id="inlineRadio1" value="1" />
          <label class="form-check-label" for="inlineRadio1">Si</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="p7" id="inlineRadio2" value="0" />
          <label class="form-check-label" for="inlineRadio2">No</label>
        </div>
      </div>

      <div class="mb-4">
        <h3 class="fs-subtitle">
          ¿Promueve la equidad de género a través de prácticas y proyectos
          concretos?
        </h3>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="p8" id="inlineRadio1" value="1" />
          <label class="form-check-label" for="inlineRadio1">Si</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="p8" id="inlineRadio2" value="0" />
          <label class="form-check-label" for="inlineRadio2">No</label>
        </div>
      </div>

      <div class="mb-4">
        <h3 class="fs-subtitle">
          ¿Promueve la inclusión laboral de personas con discapacidad?
        </h3>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="p9" id="inlineRadio1" value="1" />
          <label class="form-check-label" for="inlineRadio1">Si</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="p9" id="inlineRadio2" value="0" />
          <label class="form-check-label" for="inlineRadio2">No</label>
        </div>
      </div>

      <div class="mb-4">
        <h3 class="fs-subtitle">
          ¿Tiene un sistema de indicadores que permitan medir el desempeño de
          la organización y el cumplimiento de objetivos propuestos?
        </h3>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="p10" id="inlineRadio1" value="1" />
          <label class="form-check-label" for="inlineRadio1">Si</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="p10" id="inlineRadio2" value="0" />
          <label class="form-check-label" for="inlineRadio2">No</label>
        </div>
      </div>
      <div class="feedback"></div>
      <input id="paso3_prev" type="button" name="previous" class="previous action-button" value="Anterior" />
      <input id="paso3_next" type="button" name="next" class="next action-button" value="Siguiente" />
    </fieldset>

    <!-- Pregunta 4 -->
    <fieldset id="paso4">
      <div class="mb-4">
        <h3 class="fs-subtitle">
          ¿Realiza prácticas de comercio justo con proveedores y clientes?
        </h3>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="p11" id="inlineRadio1" value="1" />
          <label class="form-check-label" for="inlineRadio1">Si</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="p11" id="inlineRadio2" value="0" />
          <label class="form-check-label" for="inlineRadio2">No</label>
        </div>
      </div>

      <div class="mb-4">
        <h3 class="fs-subtitle">
          ¿Cuenta con procedimientos para el registro y atención de quejas y
          reclamos, incluyendo el retiro de los productos, cuando sea
          necesario?
        </h3>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="p12" id="inlineRadio1" value="1" />
          <label class="form-check-label" for="inlineRadio1">Si</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="p12" id="inlineRadio2" value="0" />
          <label class="form-check-label" for="inlineRadio2">No</label>
        </div>
      </div>

      <div class="mb-4">
        <h3 class="fs-subtitle">
          ¿Realiza una evaluación de los proveedores para verificar el
          cumplimiento de la política de compras responsables?
        </h3>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="p13" id="inlineRadio1" value="1" />
          <label class="form-check-label" for="inlineRadio1">Si</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="p13" id="inlineRadio2" value="0" />
          <label class="form-check-label" for="inlineRadio2">No</label>
        </div>
      </div>

      <div class="mb-4">
        <h3 class="fs-subtitle">¿Tiene Código de Conducta?</h3>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="p14" id="inlineRadio1" value="1" />
          <label class="form-check-label" for="inlineRadio1">Si</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="p14" id="inlineRadio2" value="0" />
          <label class="form-check-label" for="inlineRadio2">No</label>
        </div>
      </div>

      <div class="mb-4">
        <h3 class="fs-subtitle">
          ¿Publica el reporte de sustentabilidad de la organización?
        </h3>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="p15" id="inlineRadio1" value="1" />
          <label class="form-check-label" for="inlineRadio1">Si</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="p15" id="inlineRadio2" value="0" />
          <label class="form-check-label" for="inlineRadio2">No</label>
        </div>
      </div>
      <div class="feedback"></div>
      <input id="paso4_prev" type="button" name="previous" class="previous action-button" value="Anterior" />
      <input id="paso4_next" type="button" name="next" class="next action-button" value="Siguiente" />
    </fieldset>

    <!-- Paso final - Resultado -->
    <fieldset id="pasoFinal">
      <h2 class="fs-title"><strong>Resultado del autodiagnóstico</strong></h2>

      <div class="mb-4">
        <p id="textoResultado"></p>
      </div>
      <input id="respuesta" type="hidden" name="respuesta" />
      <input id="pasoFinal_prev" type="button" name="previous" class="previous action-button" value="Anterior" />
    </fieldset>
  </form>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<script src="app.js"></script>

</html>