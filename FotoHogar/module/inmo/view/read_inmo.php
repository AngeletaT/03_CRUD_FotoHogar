<div id="contenido">
    <h1>Informacion de la vivienda</h1>
    <p>
    <table border='2'>
        <tr>
            <td>Referencia catastral: </td>
            <td>
                <?php
                    echo $inmo['id_ref'];
                ?>
            </td>
        </tr>
    
        <tr>
            <td>Descripcion: </td>
            <td>
                <?php
                    echo $inmo['descripcion'];
                ?>
            </td>
        </tr>
        
        <tr>
            <td>Tipo: </td>
            <td>
                <?php
                    echo $inmo['tipo'];
                ?>
            </td>
        </tr>
        
        <tr>
            <td>Opcion: </td>
            <td>
                <?php
                    echo $inmo['opcion'];
                ?>
            </td>
        </tr>
        
        <tr>
            <td>Metros cuadrados: </td>
            <td>
                <?php
                    echo $inmo['m2'];
                ?>
            </td>
        </tr>
        
        <tr>
            <td>Precio: </td>
            <td>
                <?php
                    echo $inmo['precio'];
                ?>
            </td>
        </tr>
        
        <tr>
            <td>Habitaciones: </td>
            <td>
                <?php
                    echo $inmo['habs'];
                ?>
            </td>
            
        </tr>
        
        <tr>
            <td>Banyos: </td>
            <td>
                <?php
                    echo $inmo['banyos'];
                ?>
            </td>
        </tr>
        
        <tr>
            <td>Ascensor: </td>
            <td>
                <?php
                    echo $inmo['ascensor'];
                ?>
            </td>
        </tr>
        
        <tr>
            <td>Fecha de publicacion: </td>
            <td>
                <?php
                    echo $inmo['fecha'];
                ?>
            </td>
        </tr>
        
    </table>
    </p>
    <p><a href="index.php?page=controller_user&op=list">Volver</a></p>
</div>