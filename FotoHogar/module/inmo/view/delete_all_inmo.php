<main id="main">
    <br>
    <div id="contenido">
        <form autocomplete="on" method="post" name="delete_all_inmo" id="delete_all_inmo">
            <table border='0' align="center">
                <tr>
                    <th width=100% align="center">
                        <h3>¿Estás seguro de que quieres eliminar toda la lista de inmuebles?</h3>
                    </th>
                    <input type="hidden" id="id_ref" name="id_ref" placeholder="id_ref" value="" />
                </tr>
            </table>
            <br><br>
            <table border='0' align="center">
                <tr>
                    <td width=680 align="center"><input name="Submit" type="button" class="Button_principal"
                            onclick="operacion_inmo('delete_all')" value="Aceptar"/></td>
                    <td width=680 align="center"><a class="Button_red"
                            href="index.php?page=controller_inmo&op=list">Cancelar</a></td>
                </tr>
            </table>
            <br><br>
        </form>
    </div>
</main>