<main id="main">
    <!-- ======= Inmuebles Section ======= -->
    <section class="breadcrumbs">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <h2>Inmuebles</h2>
                <ol>
                    <li><a href="index.php">Inicio</a></li>
                    <li>Inmuebles</li>
                </ol>
            </div>
        </div>
    </section>
    <!-- End Inmuebles Section -->

    <!-- ======= About Section ======= -->
    <section class="about" data-aos="fade-up">
        <div id="contenido">
            <div class="container">
                <table>
                    <tr>
                    <tr align="center">
                        <th width=110>
                            <h3 data-tr="Añadir" style="font-size: 18px;">Añadir</h3>
                        </th>
                        <th width=150>
                            <h3 data-tr="Dummies" style="font-size: 18px;">Cargar datos</h3>
                        </th>
                        <th width=150>
                            <h3 data-tr="Borrar todo" style="font-size: 18px;">Borrar todo</h3>
                        </th>
                    </tr>
                    <tr align="center">
                        <th>
                            <p><a href="index.php?page=controller_inmo&op=create"><img src="assets/img/agregarcasa.png"
                                        width="50" height="50"></a></p>
                        </th>
                        <th>
                            <p><a href="index.php?page=controller_inmo&op=dummies"><img src="assets/img/dummies.png"
                                        width="50" height="50"></a></p>
                        </th>
                        <th>
                            <p><a href="index.php?page=controller_inmo&op=delete_all"><img
                                        src="assets/img/deleteall.png" width="50" height="50"></a></p>
                        </th>
                    </tr>
                </table>
                <br>

                <table data-aos="fade-up" style="border-collapse: separate; border-spacing: 0 30px;">
                    <th colspan="6">
                        <h3>LISTA DE INMUEBLES</h3>
                    </th>
                    <br>

                    <tr>
                        <td width=150><b>Catastro</b></td>
                        <td width=350><b>Descripcion</b></td>
                        <td width=200><b>Precio</b></td>
                        <td width=200><b>Habs</b></td>
                        <td width=250><b>Banyos</b></td>
                        <th width=850><b></b></th>
                    </tr>
                    <?php
                    if ($rdo->num_rows === 0) {
                        echo '<tr>';
                        echo '<br>';
                        echo '<td align="center"  colspan="3">NO HAY NINGUN INMUEBLE</td>';
                        echo '</tr>';
                    } else {
                        foreach ($rdo as $row) {
                            echo '<tr>';
                            echo '<td width=150>' . $row['id_ref'] . '</td>';
                            echo '<td width=350>' . $row['descripcion'] . '</td>';
                            echo '<td width=200>' . $row['precio'] . '</td>';
                            echo '<td width=200>' . $row['habs'] . '</td>';
                            echo '<td width=250>' . $row['banyos'] . '</td>';
                            echo '<td width=850>';

                            echo '<a class="id Button_principal" id="' . $row['id'] . '"><i class="bi bi-book"></i></a>';  //READ EN MODAL
                            //    echo '<a class="Button_blue" href="index.php?page=controller_inmo&op=read&id_ref='.$row['id_ref'].'">Read</a>';
                            echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
                            echo '<a class="Button_segundario" href="index.php?page=controller_inmo&op=update&id=' . $row['id'] . '"><i class="bi bi-pencil-square"></i></a>';
                            echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
                            echo '<a class="Button_red" href="index.php?page=controller_inmo&op=delete&id=' . $row['id'] . '"><i class="bi bi-x-circle"></i></a>';
                            echo '</td>';
                            echo '</tr>';
                        }
                    }
                    ?>

                </table>
                <br>
            </div>
        </div>
        </div>
</main>


<!-- modal window v1-->
<!-- <section id="inmo_modal">
    <div id="details_inmo" hidden>
        <div id="details">
            <div id="container">
                Catastro: <div id="id_ref"></div><br>
                Descripcion: <div id="descripcion"></div><br>
                Tipo: <div id="tipo"></div><br>
                Opcion: <div id="opcion"></div><br>
                M2: <div id="m2"></div><br>
                Precio: <div id="precio"></div><br>
                Habs: <div id="habs"></div><br>
                Banyos: <div id="banyos"></div><br>
                Ascensor: <div id="ascensor"></div><br>
                Fecha: <div id="fecha"></div><br>
            </div>
        </div>
    </div>
</section> -->

<!-- modal window v2-->
<section id="inmo_modal">

</section>
