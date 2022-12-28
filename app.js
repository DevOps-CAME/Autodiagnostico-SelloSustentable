//jQuery time
var current_fs, next_fs, previous_fs; //fieldsets
var left, opacity, scale; //fieldset properties which we will animate
var animating; //flag to prevent quick multi-click glitches

var inputs = document.querySelectorAll("#paso1 input[type=text]");

animating = true;

function resetearClases() {
  $("#paso1").removeClass("siguiente");
  $("#paso2").removeClass("siguiente");
  $("#paso3").removeClass("siguiente");
  $("#paso4").removeClass("siguiente");
  $("#pasoFinal").removeClass("siguiente");

  $("#paso1").removeClass("anterior");
  $("#paso2").removeClass("anterior");
  $("#paso3").removeClass("anterior");
  $("#paso4").removeClass("anterior");
  $("#pasoFinal").removeClass("anterior");
}

function guardarEnBase(){
	$.ajax({
		type: "POST",
		url: "init_database.php",
		data: $("#autodiagnostico").serialize(), // Serializa los datos del formulario y los envía al servidor
		success: function (response) {
		  // Código a ejecutar en caso de éxito aquí
		  console.log(response);
		},
		error: function (response) {
			console.log(response);
		  // Código a ejecutar en caso de error aquí
		}
	  });
}
function actualizarBase(){
	$('#respuesta').val($('#textoResultado').text());
	$.ajax({
		type: "POST",
		url: "update_database.php",
		data: $("#autodiagnostico").serialize(), // Serializa los datos del formulario y los envía al servidor
		success: function (response) {
		  // Código a ejecutar en caso de éxito aquí
		  console.log(response);
		},
		error: function (response) {
			console.log(response);
		  // Código a ejecutar en caso de error aquí
		}
	  });
}

$("#paso1_next").click(function () {
  current_fs = $(this).parent();

  // get all the inputs within the submitted form
  for (var i = 0; i < inputs.length; i++) {
    if (inputs[i].value.trim() === "") {
      console.log("Error!!");
      alert("Tiene que llenar todos los campos");
      return false;
    }
  }

  //Veo si eligió alguna opción en la pregunta
  var check_p1 = 0;
  check_p1 = $("input:radio[name=p1]:checked").val();
  if (check_p1 == 1) {
    resetearClases();
    $("#paso1").addClass("anterior");
    $("#paso2").addClass("siguiente");
    console.log("1: voy al paso 2");
	guardarEnBase();
	siguientePaso();
    return true;
  }
  if (check_p1 == 0) {
    console.log("0: voy al paso final");
    resetearClases();
    $("#paso1").addClass("anterior");
    $("#pasoFinal").addClass("siguiente");
    $("#textoResultado").html(
      "El <b>Sello CAME Sustentable</b> es una herramienta para empresas que se encuentren habilitadas para comercializar sus productos y servicios por la autoridad competente. Te pedimos que nos vuelvas a contactar cuando completes el proceso de habilitación. Si sos emprendedor/a o estás iniciando tu idea de negocio, te invitamos a contactar a CAME Incuba (<a href ='mailto:incubadora@came.org.ar'>incubadora@came.org.ar</a>) para orientarte en lo que necesites"
    );
	guardarEnBase();
	siguientePaso();
    return true;
  } else {
    alert("Tiene que elegir una respuesta");
    return false;
  }



});

$("#paso2_next").click(function () {
  current_fs = $(this).parent();

  check_p2 = $("input:radio[name=p2]:checked").val();
  check_p3 = $("input:radio[name=p3]:checked").val();
  if (check_p2 == undefined || check_p3 == undefined) {
    alert("Tiene que elegir una respuesta");
    return false;
  }
  if (check_p2 == 1 || check_p3 == 1) {
    resetearClases();
    $("#paso2").addClass("anterior");
    $("#paso3").addClass("siguiente");
    console.log("alguna ok");
	actualizarBase();
    siguientePaso();
    return true;
  }
  if (check_p2 == 0 && check_p3 == 0) {
    console.log("0: voy al paso final");
    resetearClases();
    //  $("#paso2").css("display", "none");
    $("#paso2").addClass("anterior");
    $("#pasoFinal").addClass("siguiente");
    $("#textoResultado").html(
      "Con la orientación de nuestro equipo técnico podrás implementar los requisitos que te faltan para obtener el nivel 1 del sello. Comunicate por correo electrónico para recibir más información: <a href ='mailto:sellocamesustentable@came.org.ar'>sellocamesustentable@came.org.ar</a>"
    );
	actualizarBase();
    siguientePaso();
    return true;
  } else {
    alert("Tiene que elegir una respuesta");
    return false;
  }
});

$("#paso3_next").click(function () {
  current_fs = $(this).parent();
  var check_p4 = 0;
  var check_p5 = 0;
  var check_p6 = 0;
  var check_p7 = 0;
  var check_p8 = 0;
  var check_p9 = 0;
  var check_p10 = 0;
  check_p4 = parseFloat($("input:radio[name=p4]:checked").val());
  check_p5 = parseFloat($("input:radio[name=p5]:checked").val());
  check_p6 = parseFloat($("input:radio[name=p6]:checked").val());
  check_p7 = parseFloat($("input:radio[name=p7]:checked").val());
  check_p8 = parseFloat($("input:radio[name=p8]:checked").val());
  check_p9 = parseFloat($("input:radio[name=p9]:checked").val());
  check_p10 = parseFloat($("input:radio[name=p10]:checked").val());

  promedio =
    check_p4 + check_p5 + check_p6 + check_p7 + check_p8 + check_p9 + check_p10;

  if (promedio >= 3) {
    resetearClases();
    $("#paso3").addClass("anterior");
    $("#paso4").addClass("siguiente");
    console.log("alguna ok");
	actualizarBase();
    siguientePaso();
    return true;
  }
  if (promedio < 3) {
    console.log("0: voy al paso final");
    resetearClases();
    //  $("#paso2").css("display", "none");
    $("#paso3").addClass("anterior");
    $("#pasoFinal").addClass("siguiente");
    $("#textoResultado").html(
      "Con la orientación de nuestros técnicos, podrás implementar los requisitos que te faltan para obtener el nivel 2 del Sello. Comunicate por correo electrónico para recibir más información: <a href ='mailto:sellocamesustentable@came.org.ar'>sellocamesustentable@came.org.ar</a>"
    );
	actualizarBase();
    siguientePaso();
    return true;
  }
});

$("#paso4_next").click(function () {
  resetearClases();
  $("#paso4").addClass("anterior");
  $("#pasoFinal").addClass("siguiente");
  current_fs = $(this).parent();
  var check_p11 = 0;
  var check_p12 = 0;
  var check_p13 = 0;
  var check_p14 = 0;
  var check_p15 = 0;
  check_p11 = parseFloat($("input:radio[name=p11]:checked").val());
  check_p12 = parseFloat($("input:radio[name=p12]:checked").val());
  check_p13 = parseFloat($("input:radio[name=p13]:checked").val());
  check_p14 = parseFloat($("input:radio[name=p14]:checked").val());
  check_p15 = parseFloat($("input:radio[name=p15]:checked").val());

  promedio2 = check_p11 + check_p12 + check_p13 + check_p14 + check_p15;

  if (promedio >= 2) {
    resetearClases();
    $("#paso4").addClass("anterior");
    $("#pasoFinal").addClass("siguiente");
    $("#textoResultado").html(
      "Con la orientación de nuestros técnicos, podrás implementar los requisitos que te faltan para obtener el nivel 3 del Sello. Comunicate por correo electrónico para recibir más información: <a href ='mailto:sellocamesustentable@came.org.ar'>sellocamesustentable@came.org.ar</a>"
    );
    console.log("alguna ok");
	actualizarBase();
    siguientePaso();
    return true;
  }
  if (promedio < 2) {
    console.log("0: voy al paso final");
    resetearClases();
    //$("#paso2").css("display", "none");
    $("#paso4").addClass("anterior");
    $("#pasoFinal").addClass("siguiente");
    $("#textoResultado").html(
      "Estás muy cerca de poder certificar el Sello en el nivel 2 o, si lo deseas, solicitar la implementación para poder llegar al nivel 3. Comunicate por correo electrónico para recibir más información: <a href ='mailto:sellocamesustentable@came.org.ar'>sellocamesustentable@came.org.ar</a>"
    );
	actualizarBase();
    siguientePaso();
    return true;
  }
});

function siguientePaso() {
	$('#respuesta').val($('#textoResultado').text());

  next_fs = $(".siguiente");
  next_fs.show();
  //hide the current fieldset with style
  current_fs.animate(
    { opacity: 0 },
    {
      step: function (now, mx) {
        //as the opacity of current_fs reduces to 0 - stored in "now"
        //1. scale current_fs down to 80%
        scale = 1 - (1 - now) * 0.2;
        //2. bring next_fs from the right(50%)
        left = now * 50 + "%";
        //3. increase opacity of next_fs to 1 as it moves in
        opacity = 1 - now;
        current_fs.css({
          transform: "scale(" + scale + ")",
          position: "absolute",
        });
        next_fs.css({ left: left, opacity: opacity });
      },
      duration: 800,
      complete: function () {
        current_fs.hide();
        animating = false;
      },
      //this comes from the custom easing plugin
      easing: "easeInOutBack",
    }
  );
}

$(".previous").click(function () {
  if (animating) return false;
  animating = true;

  current_fs = $(this).parent();
  //previous_fs = $(this).parent().prev();
  previous_fs = $(".anterior");

  //de-activate current step on progressbar
  //$("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

  //show the previous fieldset
  previous_fs.show();
  //hide the current fieldset with style
  current_fs.animate(
    { opacity: 0 },
    {
      step: function (now, mx) {
        //as the opacity of current_fs reduces to 0 - stored in "now"
        //1. scale previous_fs from 80% to 100%
        scale = 0.8 + (1 - now) * 0.2;
        //2. take current_fs to the right(50%) - from 0%
        left = (1 - now) * 50 + "%";
        //3. increase opacity of previous_fs to 1 as it moves in
        opacity = 1 - now;
        current_fs.css({ left: left });
        previous_fs.css({
          transform: "scale(" + scale + ")",
          opacity: opacity,
        });
      },
      duration: 800,
      complete: function () {
        current_fs.hide();
        animating = false;
      },
      //this comes from the custom easing plugin
      easing: "easeInOutBack",
    }
  );

  $("#paso3_prev").click(function () {
    resetearClases();
    $("#paso1").addClass("anterior");
    $("#paso2").addClass("siguiente");
  });
  $("#paso4_prev").click(function () {
    resetearClases();
    $("#paso2").addClass("anterior");
    $("#paso4").addClass("siguiente");
  });

  $("#pasoFinal_prev").click(function () {
    resetearClases();
    $("#paso3").addClass("anterior");
    $("#pasoFinal").addClass("siguiente");
  });
});

