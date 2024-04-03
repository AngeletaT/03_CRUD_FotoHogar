// FUNCIONES DE VALIDACIONES
function validate_catastro(texto) {
  if (texto.length > 0) {
    var reg = /^[0-9]{4}[A-Za-z]{1}$/;
    return reg.test(texto);
  }
  return false;
}

function validate_campo(texto) {
  if (texto.length > 0) {
    return true;
  }
  return false;
}

function validate_tipo(texto) {
  var i;
  var ok = 0;
  for (i = 0; i < texto.length; i++) {
    if (texto[i].checked) {
      ok = 1;
    }
  }

  if (ok == 1) {
    return true;
  }
  if (ok == 0) {
    return false;
  }
}

function validate_checkbox(array) {
  var i;
  var ok = 0;
  for (i = 0; i < array.length; i++) {
    if (array[i].checked) {
      ok = 1;
    }
  }

  if (ok == 1) {
    return true;
  }
  if (ok == 0) {
    return false;
  }
}

function validate_ascensor(texto) {
  var i;
  var ok = 0;
  for (i = 0; i < texto.length; i++) {
    if (texto[i].checked) {
      ok = 1;
    }
  }

  if (ok == 1) {
    return true;
  }
  if (ok == 0) {
    return false;
  }
}

function validate_fecha(texto) {
  if (texto.length > 0) {
    return true;
  }
  return false;
}

// FUNCION DE VALIDACION PRINCIPAL
function validate(operacion) {
  // console.log('hola validate js');
  // return false;

  var check = true;

  var v_id_ref = document.getElementById("id_ref").value;
  // console.log(v_id_ref);
  // return false;
  var v_descripcion = document.getElementById("descripcion").value;
  // console.log(v_descripcion);
  // return false;
  var v_tipo = document.getElementById("tipo").value;
  // console.log(v_tipo);
  // return false;
  var v_opcion = document.getElementsByName("opcion[]");
  var v_m2 = document.getElementById("m2").value;
  var v_precio = document.getElementById("precio").value;
  var v_habs = document.getElementById("habs").value;
  var v_banyos = document.getElementById("banyos").value;
  var v_ascensor = document.getElementsByName("ascensor");
  // console.log(v_ascensor);
  // return false;
  var v_publicado = document.getElementById("fecha").value;
  var v_extras = document.getElementsByName("extras[]");

  var r_id_ref = validate_catastro(v_id_ref);
  // console.log(r_id_ref);
  // return false;
  var r_descripcion = validate_campo(v_descripcion);
  var r_tipo = validate_campo(v_tipo);
  var r_opcion = validate_checkbox(v_opcion);
  var r_m2 = validate_campo(v_m2);
  var r_precio = validate_campo(v_precio);
  var r_habs = validate_campo(v_habs);
  var r_banyos = validate_campo(v_banyos);
  var r_ascensor = validate_ascensor(v_ascensor);
  //cambiado a validate_campo porque no funciona validate_ascensor
  var r_publicado = validate_fecha(v_publicado);
  var r_extras = validate_checkbox(v_extras);

  if (!r_id_ref) {
    document.getElementById("error_id_ref").innerHTML =
      " * La referencia catastral introducida no es valida";
    // console.log(r_id_ref);
    // return false;
    check = false;
  } else {
    document.getElementById("error_id_ref").innerHTML = "";
  }
  if (!r_descripcion) {
    document.getElementById("error_descripcion").innerHTML =
      " * La descripcion introducida no es valida";
    check = false;
  } else {
    document.getElementById("error_descripcion").innerHTML = "";
  }
  if (!r_tipo) {
    document.getElementById("error_tipo").innerHTML =
      " * No has seleccionado ningun tipo";
    check = false;
  } else {
    document.getElementById("error_tipo").innerHTML = "";
  }
  if (!r_opcion) {
    document.getElementById("error_opcion").innerHTML =
      " * No has seleccionado ninguna opcion";
    check = false;
  } else {
    document.getElementById("error_opcion").innerHTML = "";
  }
  if (!r_m2) {
    document.getElementById("error_m2").innerHTML =
      " * Los metros cuadrados introducidos no son validos";
    check = false;
  } else {
    document.getElementById("error_m2").innerHTML = "";
  }
  if (!r_precio) {
    document.getElementById("error_precio").innerHTML =
      " * El precio introducido no es valido";
    check = false;
  } else {
    document.getElementById("error_precio").innerHTML = "";
  }
  if (!r_habs) {
    document.getElementById("error_habs").innerHTML =
      " * Las habitaciones introducidas no es valida";
    check = false;
  } else {
    document.getElementById("error_habs").innerHTML = "";
  }
  if (!r_banyos) {
    document.getElementById("error_banyos").innerHTML =
      " * Los banyos introducidos no es valido";
    check = false;
  } else {
    document.getElementById("error_banyos").innerHTML = "";
  }
  if (!r_ascensor) {
    document.getElementById("error_ascensor").innerHTML =
      " * No has seleccionado ningun campo";
    check = false;
  } else {
    document.getElementById("error_ascensor").innerHTML = "";
  }
  if (!r_publicado) {
    document.getElementById("error_fecha").innerHTML =
      " * No has seleccionado ninguna fecha";
    check = false;
  } else {
    document.getElementById("error_fecha").innerHTML = "";
  }
  if (!r_extras) {
    document.getElementById("error_extras").innerHTML =
      " * No has seleccionado ningun extras";
    check = false;
  } else {
    document.getElementById("error_extras").innerHTML = "";
  }

  // return check;

  if (check) {
    if (operacion == "create") {
      document.getElementById("alta_inmo").submit();
      document.getElementById("alta_inmo").action =
        "index.php?page=controller_inmo&op=create";
    }
    if (operacion == "update") {
      document.getElementById("update_inmo").submit();
      document.getElementById("update_inmo").action =
        "index.php?page=controller_inmo&op=update";
    }
  }
}

// FUNCIONES DE OPERACIONES
function operacion_inmo(operacion) {
  if (operacion == "delete") {
    document.getElementById("delete_inmo").submit();
    document.getElementById("delete_inmo").action =
      "index.php?page=controller_inmo&op=delete";
  }
  if (operacion == "delete_all") {
    document.getElementById("delete_all_inmo").submit();
    document.getElementById("delete_all_inmo").action =
      "index.php?page=controller_inmo&op=delete_all";
  }
  if (operacion == "dummies") {
    document.getElementById("dummies_inmo").submit();
    document.getElementById("dummies_inmo").action =
      "index.php?page=controller_inmo&op=dummies";
  }
}

// FUNCIONES DE MODAL V2
function showModal(id, descripcion) {
  $("#details_inmo").show();
  $("#inmo_modal").dialog({
    title: "Inmueble: " + descripcion,
    width: 850,
    height: 500,
    resizable: "false",
    modal: "true",
    hide: "fold",
    show: "fold",
    buttons: {
      Update: function () {
        window.location.href =
          "index.php?page=controller_inmo&op=update&id=" + id;
      },
      Delete: function () {
        window.location.href =
          "index.php?page=controller_inmo&op=delete&id=" + id;
      },
    },
  });
}

function loadContentModal() {
  $(".id").click(function () {
    var id = this.getAttribute("id");
    // $.get('/angela/02_MVC_CRUD/module/inmo/controller/controller_inmo.php?op=read_modal&id=' + id, 'GET', 'JSON')
    ajaxPromise(
      "module/inmo/controller/controller_inmo.php?op=read_modal&id=" + id,
      "GET",
      "JSON"
    )
      .then(function (data) {
        // console.log(data);
        // var data = JSON.parse(data);
        $("<div></div>").attr("id", "details_inmo").appendTo("#inmo_modal");
        $("<div></div>").attr("id", "container").appendTo("#details_inmo");
        $("#container").empty();
        $("<div></div>").attr("id", "inmo_content").appendTo("#container");
        $("#inmo_content").html(function () {
          var content = "";
          for (row in data) {
            content +=
              "<br><span>" +
              row +
              ": <span id =" +
              row +
              ">" +
              data[row] +
              "</span></span>";
          }
          return content;
        });
        showModal(data.id, data.descripcion);
      })
      .catch(function (error) {
        console.log(error);
        // window.location.href = 'index.php?module=errors&op=503&desc=List error';
      });
  });
}

$(document).ready(function () {
  loadContentModal();
});
