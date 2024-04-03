<main id="main">
    <br>
    <div id="contenido">
        <form autocomplete="on" method="post" name="update_inmo" id="update_inmo">
            <h1>MODIFICAR INMUEBLE</h1>
            <br>
            <table border="0" class="spaced-table" width="850">
                <tr>
                    <td>Referencia catastral: </td>
                    <td><input type="text" id="id_ref" name="id_ref" value="<?php echo $inmo['id_ref']; ?>" readonly />
                    </td>
                    <td>
                        <font color="red">
                            <span id="error_id_ref" class="error">
                            </span>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td>Descripcion: </td>
                    <td><input type="longtext" id="descripcion" name="descripcion"
                            value="<?php echo $inmo['descripcion']; ?>" /></td>
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
                            <?php
                            if ($inmo['tipo'] === 'Piso') {
                                ?>
                                <option value="Piso" selected>Piso</option>
                                <option value="Casa">Casa</option>
                                <option value="Local">Local</option>
                                <option value="Trastero">Trastero</option>
                                <option value="Garaje">Garaje</option>
                                <option value="Terreno">Terreno</option>
                                <?php
                            } else if ($inmo['tipo'] === 'Casa') {
                                ?>
                                    <option value="Piso">Piso</option>
                                    <option value="Casa" selected>Casa</option>
                                    <option value="Local">Local</option>
                                    <option value="Trastero">Trastero</option>
                                    <option value="Garaje">Garaje</option>
                                    <option value="Terreno">Terreno</option>
                                <?php
                            } else if ($inmo['tipo'] === 'Local') {
                                ?>
                                        <option value="Piso">Piso</option>
                                        <option value="Casa">Casa</option>
                                        <option value="Local" selected>Local</option>
                                        <option value="Trastero">Trastero</option>
                                        <option value="Garaje">Garaje</option>
                                        <option value="Terreno">Terreno</option>
                                <?php
                            } else if ($inmo['tipo'] === 'Trastero') {
                                ?>
                                            <option value="Piso">Piso</option>
                                            <option value="Casa">Casa</option>
                                            <option value="Local">Local</option>
                                            <option value="Trastero" selected>Trastero</option>
                                            <option value="Garaje">Garaje</option>
                                            <option value="Terreno">Terreno</option>
                                <?php
                            } else if ($inmo['tipo'] === 'Garaje') {
                                ?>
                                                <option value="Piso">Piso</option>
                                                <option value="Casa">Casa</option>
                                                <option value="Local">Local</option>
                                                <option value="Trastero">Trastero</option>
                                                <option value="Garaje" selected>Garaje</option>
                                                <option value="Terreno">Terreno</option>
                                <?php
                            } else if ($inmo['tipo'] === 'Terreno') {
                                ?>
                                                    <option value="Piso">Piso</option>
                                                    <option value="Casa">Casa</option>
                                                    <option value="Local">Local</option>
                                                    <option value="Trastero">Trastero</option>
                                                    <option value="Garaje">Garaje</option>
                                                    <option value="Terreno" selected>Terreno</option>
                                <?php
                            }
                            ?>
                        </select></td>
                    </td>
                    <td>
                        <font color="red">
                            <span id="error_tipo" class="error">
                            </span>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td>Opcion: </td>
                    <td>
                        <?php
                        $opc = explode(":", $inmo['opcion']);
                        ?>
                    <td>
                        <?php
                        $busca_array = in_array("Venta", $opc);
                        if ($busca_array) {
                            ?>
                            <input type="checkbox" id="opcion[]" name="opcion[]" value="Venta" checked />Venta
                            <?php
                        } else {
                            ?>
                            <input type="checkbox" id="opcion[]" name="opcion[]" value="Venta" />Venta
                            <?php
                        }
                        ?>
                        <?php
                        $busca_array = in_array("Alquiler", $opc);
                        if ($busca_array) {
                            ?>
                            <input type="checkbox" id="opcion[]" name="opcion[]" value="Alquiler" checked />Alquiler
                            <?php
                        } else {
                            ?>
                            <input type="checkbox" id="opcion[]" name="opcion[]" value="Alquiler" />Alquiler
                            <?php
                        }
                        ?>
                        <?php
                        $busca_array = in_array("Nueva", $opc);
                        if ($busca_array) {
                            ?>
                            <input type="checkbox" id="opcion[]" name="opcion[]" value="Nueva" checked />Nueva
                            <?php
                        } else {
                            ?>
                            <input type="checkbox" id="opcion[]" name="opcion[]" value="Nueva" />Nueva
                            <?php
                        }
                        ?>
                        <?php
                        $busca_array = in_array("Compartir", $opc);
                        if ($busca_array) {
                            ?>
                            <input type="checkbox" id="opcion[]" name="opcion[]" value="Compartir" checked />Compartir
                            <?php
                        } else {
                            ?>
                            <input type="checkbox" id="opcion[]" name="opcion[]" value="Compartir" />Compartir
                            <?php
                        }
                        ?>
                    </td>
                    <td>
                        <font color="red">
                            <span id="error_opcion" class="error">
                            </span>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td>Metros cuadrados: </td>
                    <td><input type="text" id="m2" name="m2" value="<?php echo $inmo['m2']; ?>" /></td>
                    <td>
                        <font color="red">
                            <span id="error_m2" class="error">
                            </span>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td>Precio: </td>
                    <td><input type="text" id="precio" name="precio" value="<?php echo $inmo['precio']; ?>" /></td>
                    <td>
                        <font color="red">
                            <span id="error_precio" class="error">
                            </span>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td>Habitaciones: </td>
                    <td><input type="text" id="habs" name="habs" value="<?php echo $inmo['habs']; ?>" /></td>
                    <td>
                        <font color="red">
                            <span id="error_habs" class="error">
                            </span>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td>Banyos: </td>
                    <td><input type="text" id="banyos" name="banyos" value="<?php echo $inmo['banyos']; ?>" /></td>
                    <td>
                        <font color="red">
                            <span id="error_banyos" class="error">
                            </span>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td>Ascensor: </td>
                    <td>
                        <?php
                        if ($inmo['ascensor'] === "1") {
                            ?>
                            <input type="radio" id="ascensor" name="ascensor" value="1" checked />Si
                            <input type="radio" id="ascensor" name="ascensor" value="0" />No
                            <?php
                        } else {
                            ?>
                            <input type="radio" id="ascensor" name="ascensor" value="1" />Si
                            <input type="radio" id="ascensor" name="ascensor" value="0" checked />No
                            <?php
                        }
                        ?>
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
                    <td><input type="text" id="fecha"" name=" fecha" value="<?php echo $inmo['fecha']; ?>" /></td>
                    <td>
                        <font color="red">
                            <span id="error_fecha" class="error">
                            </span>
                        </font>
                    </td>
                <tr>

<!-- EXAMEN -->
                <tr>
                    <td>Extras: </td>
                    <td>
                        <?php
                        $opc = explode(":", $inmo['extras']);
                        ?>
                    <td>
                        <?php
                        $busca_array = in_array("Piscina", $opc);
                        if ($busca_array) {
                            ?>
                            <input type="checkbox" id="extras[]" name="extras[]" value="Piscina" checked />Piscina
                            <?php
                        } else {
                            ?>
                            <input type="checkbox" id="extras[]" name="extras[]" value="Piscina" />Piscina
                            <?php
                        }
                        ?>
                        <?php
                        $busca_array = in_array("Jardin", $opc);
                        if ($busca_array) {
                            ?>
                            <input type="checkbox" id="extras[]" name="extras[]" value="Jardin" checked />Jardin
                            <?php
                        } else {
                            ?>
                            <input type="checkbox" id="extras[]" name="extras[]" value="Jardin" />Jardin
                            <?php
                        }
                        ?>
                        <?php
                        $busca_array = in_array("Trastero", $opc);
                        if ($busca_array) {
                            ?>
                            <input type="checkbox" id="extras[]" name="extras[]" value="Trastero" checked />Trastero
                            <?php
                        } else {
                            ?>
                            <input type="checkbox" id="extras[]" name="extras[]" value="Trastero" />Trastero
                            <?php
                        }
                        ?>
                        <?php
                        $busca_array = in_array("Calefaccion", $opc);
                        if ($busca_array) {
                            ?>
                            <input type="checkbox" id="extras[]" name="extras[]" value="Calefaccion" checked />Calefaccion
                            <?php
                        } else {
                            ?>
                            <input type="checkbox" id="extras[]" name="extras[]" value="Calefaccion" />Calefaccion
                            <?php
                        }
                        ?>
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
                    <td>
                        <?php
                        $opc = explode(":", $inmo['gastos']);
                        ?>
                    <td>
                        <?php
                        $busca_array = in_array("Luz", $opc);
                        if ($busca_array) {
                            ?>
                            <input type="checkbox" id="gastos[]" name="gastos[]" value="Luz" checked />Luz
                            <?php
                        } else {
                            ?>
                            <input type="checkbox" id="gastos[]" name="gastos[]" value="Luz" />Luz
                            <?php
                        }
                        ?>
                        <?php
                        $busca_array = in_array("Agua", $opc);
                        if ($busca_array) {
                            ?>
                            <input type="checkbox" id="gastos[]" name="gastos[]" value="Agua" checked />Agua
                            <?php
                        } else {
                            ?>
                            <input type="checkbox" id="gastos[]" name="gastos[]" value="Agua" />Agua
                            <?php
                        }
                        ?>
                        <?php
                        $busca_array = in_array("Basura", $opc);
                        if ($busca_array) {
                            ?>
                            <input type="checkbox" id="gastos[]" name="gastos[]" value="Basura" checked />Basura
                            <?php
                        } else {
                            ?>
                            <input type="checkbox" id="gastos[]" name="gastos[]" value="Basura" />Basura
                            <?php
                        }
                        ?>
                        <?php
                        $busca_array = in_array("Vado", $opc);
                        if ($busca_array) {
                            ?>
                            <input type="checkbox" id="gastos[]" name="gastos[]" value="Vado" checked />Vado
                            <?php
                        } else {
                            ?>
                            <input type="checkbox" id="gastos[]" name="gastos[]" value="Vado" />Vado
                            <?php
                        }
                        ?>
                    </td>
                    <td>
                        <font color="red">
                            <span id="error_gastos" class="error">
                            </span>
                        </font>
                    </td>
                </tr>
<!-- EXAMEN -->
                <tr>
                    <input type="hidden" id="id" name="id" value="<?php echo $_GET['id']; ?>" />
                    <td><input name="Submit" type="button" class="Button_red_2" onclick="validate('update')"
                            value="Modificar" /></td>
                    <td align="right"><a href="index.php?page=controller_inmo&op=list">Volver</a></td>
                </tr>
            </table>
            <br>
        </form>
    </div>
</main>