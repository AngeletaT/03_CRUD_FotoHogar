<?php

function validate_cat($id_ref)
{
    $sql = "SELECT * FROM inmuebles WHERE id_ref='$id_ref'";

    $conexion = connect::con();
    $res = mysqli_query($conexion, $sql);
    $res = $res->num_rows;
    connect::close($conexion);
    return $res;
}

function validate()
{

    $check = true;

    $id_ref = $_POST['id_ref'];
    $validate_cat = validate_cat($id_ref);

    if ($validate_cat !== 0) {
        echo '<script language="javascript">setTimeout(() => {
                toastr.error("El DNI no puede estar repetido");
            }, 1000);</script>';
        $check = false;
    }

    return $check;
}

function validate_for_update()
{

    $check = true;

    $id_ref = $_POST['id_ref'];
    $validate_cat = validate_cat($id_ref);

    if ($validate_cat !== 1) {
        echo '<script language="javascript">setTimeout(() => {
                toastr.success("Vas a actualizar la vivienda");
            }, 1000);</script>';
        $check = true;
    }

    return $check;
}
?>