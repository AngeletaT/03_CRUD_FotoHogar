<main id="main">
    <br>
    <div id="contenido">
        <form autocomplete="on" method="post" name="delete_inmo" id="delete_inmo">
            <table border='0' align="center">
                <tr>
                    <th width=100% align="center">
                        <h3>¿Desea seguro borrar la vivienda
                            <?php echo $inmo['id_ref']; ?>
                            <?php echo $inmo['descripcion']; ?>?
                        </h3>
                    </th>
                </tr>
            </table>
            <br><br>
            <table border='0' align="center">
                <tr>
                    <input type="hidden" id="id" name="id" value="<?php echo $_GET['id']; ?>" />
                    <td width=680 align="center"><input name="Submit" type="button" class="Button_principal"
                            onclick="operacion_inmo('delete')" value="Aceptar"></td>
                    <td width=680 align="center"><a class="Button_red"
                            href="index.php?page=controller_inmo&op=list">Cancelar</a></td>
                </tr>
            </table>
            <br><br>
        </form>
    </div>
</main>