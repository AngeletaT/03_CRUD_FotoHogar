<main id="main">
    <br>
    <div id="contenido">
        <form autocomplete="on" method="post" name="alta_inmo" id="alta_inmo">
            <h1>REGISTRO NUEVO</h1>
            <br>
            <table border="0" class="spaced-table" width="850">
                <tr>
                    <td>Referencia catastral: </td>
                    <td><input type="text" id="id_ref" name="id_ref" value="" /></td>
                    <td>
                        <font color="red">
                            <span id="error_id_ref" class="error">
                            </span>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td>Descripcion: </td>
                    <td><input type="longtext" id="descripcion" name="descripcion" value="" /></td>
                    <td>
                        <font color="red">
                            <span id="error_descripcion" class="error">
                            </span>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td>Tipo: </td>
                    <td><select id="tipo" name="tipo">
                            <option value="Casa">Casa</option>
                            <option value="Piso">Piso</option>
                            <option value="Local">Local</option>
                            <option value="Trastero">Trastero</option>
                            <option value="Garaje">Garaje</option>
                            <option value="Terreno">Terreno</option>
                        </select></td>
                    </td>
                    <td>
                        <font color="red">
                            <span id="error_tipo" class="error">
                            </span>
                        </font>
                    </td>
                </tr>
                <!-- EXAMEN -->
                <tr>
                    <td>Opcion: </td>
                    <td><input type="checkbox" id="opcion[]" name="opcion[]" value="Venta" />Venta
                        <input type="checkbox" id="opcion[]" name="opcion[]" value="Alquiler" />Alquiler
                        <input type="checkbox" id="opcion[]" name="opcion[]" value="Nueva" />Nueva
                        <input type="checkbox" id="opcion[]" name="opcion[]" value="Compartir" />Compartir
                    </td>
                    <td>
                        <font color="red">
                            <span id="error_opcion" class="error">
                            </span>
                        </font>
                    </td>
                </tr>
                <!-- EXAMEN -->
                <tr>
                    <td>Metros cuadrados: </td>
                    <td><input type="text" id="m2" name="m2" value="" /></td>
                    <td>
                        <font color="red">
                            <span id="error_m2" class="error">
                            </span>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td>Precio: </td>
                    <td><input type="text" id="precio" name="precio" value="" /></td>
                    <td>
                        <font color="red">
                            <span id="error_precio" class="error">
                            </span>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td>Habitaciones: </td>
                    <td><input type="text" id="habs" name="habs" value="" /></td>
                    <td>
                        <font color="red">
                            <span id="error_habs" class="error">
                            </span>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td>Banyos: </td>
                    <td><input type="text" id="banyos" name="banyos" value="" /></td>
                    <td>
                        <font color="red">
                            <span id="error_banyos" class="error">
                            </span>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td>Ascensor: </td>
                    <td><input type="radio" id="ascensor" name="ascensor" value="1" />Si
                        <input type="radio" id="ascensor" name="ascensor" value="0" />No
                    </td>
                    <td>
                        <font color="red">
                            <span id="error_ascensor" class="error">
                            </span>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td>Fecha Publicacion: </td>
                    <td><input type="text" id="fecha"" name=" fecha" value="" /></td>
                    <td>
                        <font color="red">
                            <span id="error_fecha" class="error">
                            </span>
                        </font>
                    </td>
                </tr>
<!-- EXAMEN -->
                <tr>
                    <td>Extras: </td>
                    <td><input type="checkbox" id="extras[]" name="extras[]" value="Piscina" />Piscina
                        <input type="checkbox" id="extras[]" name="extras[]" value="Jardin" />Jardin
                        <input type="checkbox" id="extras[]" name="extras[]" value="Trastero" />Trastero
                        <input type="checkbox" id="extras[]" name="extras[]" value="Calefaccion" />Calefaccion
                    </td>
                    <td>
                        <font color="red">
                            <span id="error_extras" class="error">
                            </span>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td>Gastos: </td>
                    <td><input type="checkbox" id="gastos[]" name="gastos[]" value="Luz" />Luz
                        <input type="checkbox" id="gastos[]" name="gastos[]" value="Agua" />Agua
                        <input type="checkbox" id="gastos[]" name="gastos[]" value="Basura" />Basura
                        <input type="checkbox" id="gastos[]" name="gastos[]" value="Vado" />Vado
                    </td>
                    <td>
                        <font color="red">
                            <span id="error_gastos" class="error">
                            </span>
                        </font>
                    </td>
                </tr>
<!-- EXAMEN -->
            </table>
            <br>
            <table border="0" class="spaced-table" width="480">
                <tr>
                    <td><input name="Submit" type="button" class="Button_red_2" onclick="validate('create')"
                            value="Enviar" /></td>
                    <td align="right"><a href="index.php?page=controller_inmo&op=list">Volver</a></td>
                </tr>
            </table>
            <br>
        </form>
    </div>
</main>