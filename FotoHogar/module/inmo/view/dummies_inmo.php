<main id="main">
    <div id="contenido">
        <form autocomplete="on" method="post" name="dummies_inmo" id="dummies_inmo"><br>
            <table border='0' align="center">
                <tr>
                    <th width=100% align="center">
                        <h3>¿Quieres cargar los datos de los inmuebles?</h3>
                    </th>
                    <input type="hidden" id="id_ref" name="id_ref" placeholder="id_ref" value="" />
                </tr>
            </table>
            <br><br>
            <table border='0' align="center">
                <tr>
                    <td width=680 align="center"><input name="Submit" type="button" class="Button_principal"
                            onclick="operacion_inmo('dummies')" value="Aceptar" /></td>
                    <td width=680 align="center"><a class="Button_red"
                            href="index.php?page=controller_inmo&op=list">Cancelar</a></td>
                </tr>
            </table>
            <br><br>
        </form>
    </div>
</main>