<!DOCTYPE html>
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--LAS siguientes lìneas se agregan con el propòsito de dar funcionalidad a un DataTable-->
        <!--**************************************** -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css"> 
        <!--**************************************** -->
    </head>

    <body>

        <?php
//        echo "<pre>";
//        print_r($_GET);
//        print_r($_SESSION['listaDeaccesorio']);
//        echo "</pre>";
        if (isset($_SESSION['listaDeaccesorio'])) {

            $listaDeaccesorio = $_SESSION['listaDeaccesorio'];
            unset($_SESSION['listaDeaccesorio']);
        }
        ?>
        <table id="accesorio" class="table-responsive table-hover table-bordered table-striped" style="width:100%">
            <thead>
                <tr>
                    <th>Id_accesorio</th> 
                    <th>Nombre</th> 
                    <th>Precio</th> 
                    <th>Tipos_de_accesorio</th>
                    <!--<th>Estado</th>--> 
                    

                    <th>Edit</th> 
                    <th>Delete</th>


                </tr>
            </thead>
            <tbody>
                <?php
                $i = 0;
                foreach ($listaDeaccesorio as $key => $value) {
                    ?>
                    <tr>
                        <td><?php echo $listaDeaccesorio[$i]->Id_accesorio; ?></td>  
                        <td><?php echo $listaDeaccesorio[$i]->Nombre; ?></td>  
                        <td><?php echo $listaDeaccesorio[$i]->Precio; ?></td>  
                        <td><?php echo $listaDeaccesorio[$i]->Tipos_de_accesorio; ?></td>
                        <!--<td>d>-->  
                        

                        <td><a href="Controlador.php?ruta=actualizaraccesorio&idAct=">Actualizar</a></td> 


                        <td><a href="Controlador.php?ruta=eliminaraccesorio&idAct=">Eliminar</a></td>  


                    </tr> 
                    <?php
                    $i++;
                }
                ?>                

            </tbody>
        </table>


        <!--**************************************** -->  
        <!--LAS siguientes lìneas se agregan con el propòsito de dar funcionalidad a un DataTable-->
        <!--**************************************** -->
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                $('#accesorio').DataTable({
                    pageLength: 5,
                    lengthMenu: [[5, 10, 15, 20], [5, 10, 15, 20]],
                });
            });
        </script>     
        <!--**************************************** -->
        <!--**************************************** -->  
    </body>
</html>



