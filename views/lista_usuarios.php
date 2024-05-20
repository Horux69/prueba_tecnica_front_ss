<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DataTables Integration</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.1.0/css/buttons.dataTables.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="./css/datatable.css">
</head>

<body>
    <div class="contenedor">

        <?php
        // Inicio de la tabla
        $tableHTML = '<table id="example" class="table-rounded">';

        // Encabezados de la tabla
        $tableHTML .= '<thead><tr>';
        $tableHTML .= '<th>Ver Mas</th>';
        $tableHTML .= '<th>Acciones</th>';
        $tableHTML .= '<th>Cedula</th>';
        $tableHTML .= '<th>Nombres</th>';
        $tableHTML .= '<th>Apellidos</th>';
        $tableHTML .= '<th>Telefono</th>';
        $tableHTML .= '<th>Correo</th>';
        $tableHTML .= '<th>Ciudad</th>';
        $tableHTML .= '</tr></thead>';

        // Cuerpo de la tabla
        $tableHTML .= '<tbody>';
        foreach ($data as $row) {
            $tableHTML .= '<tr>';
            $tableHTML .= "<td><button type='button' class='botonVerMas'><i class='material-icons icon-color'>add</i></button></td>";
            $tableHTML .= "<td>
                                <div class='btnAcciones'>
                                <a class='btnEditar'><i class='material-icons iconoM'>edit</i></a>
                                <a class='btnEliminar'><i class='material-icons iconoM'>delete</i></a>
                                </div>
                            </td>";
            $tableHTML .= '<td>' . htmlspecialchars($row['cedula']) . '</td>';
            $tableHTML .= '<td>' . htmlspecialchars($row['nombres']) . '</td>';
            $tableHTML .= '<td>' . htmlspecialchars($row['apellidos']) . '</td>';
            $tableHTML .= '<td>' . htmlspecialchars($row['telefono']) . '</td>';
            $tableHTML .= '<td>' . htmlspecialchars($row['correo']) . '</td>';
            $tableHTML .= '<td>' . htmlspecialchars($row['ciudad']) . '</td>';
            $tableHTML .= '</tr>';
        }
        $tableHTML .= '</tbody>';

        // Fin de la tabla
        $tableHTML .= '</table>';

        // Imprimir la tabla
        echo $tableHTML;

        ?>

    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/2.1.0/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/2.1.0/js/buttons.flash.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/2.1.0/js/buttons.html5.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/2.1.0/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
    <script src="./js/dataTable.js"></script>
</body>

</html>