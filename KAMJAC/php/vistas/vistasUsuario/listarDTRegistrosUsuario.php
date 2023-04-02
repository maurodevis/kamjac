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
//        print_r($_SESSION['listaDecotizacion']);
//        echo "</pre>";
        if (isset($_SESSION['listaDeUsuario'])) {

            $listaDeUsuario = $_SESSION['listaDeUsuario'];
            unset($_SESSION['listaDeUsuario']);
        }
        ?>
        <table id="Usuario" class="table-responsive table-hover table-bordered table-striped" style="width:100%">
            <thead>
                <tr>
                        <th>Id_usuario</th> 
                        <th>nombre</th> 
                        <th>apellido</th> 
                        <th>Num_doc</th>
                        <th>Fecha_nacimiento</th> 
                        <th>Email</th> 
                        <th>Direccion</th>
                        <th>telefono</th> 
                        <th>Edit</th> 
                        <th>Delete</th>


                    </tr>
            </thead>
            <tbody>
                <?php
                    $i = 0;
                    foreach ($listaDeUsuario as $key => $value) {
                        ?>
                        <tr>
                            <td><?php echo $listaDeUsuario[$i]->Id_usuario; ?></td>    
                            <td><?php echo $listaDeUsuario[$i]->nombre; ?></td>  
                            <td><?php echo $listaDeUsuario[$i]->apellido; ?></td>
                            <td><?php echo $listaDeUsuario[$i]->Num_doc; ?></td>
                            <td><?php echo $listaDeUsuario[$i]->Fecha_nacimiento; ?></td>
                            <td><?php echo $listaDeUsuario[$i]->Email; ?></td> 
                            <td><?php echo $listaDeUsuario[$i]->Direccion; ?></td> 
                            <td><?php echo $listaDeUsuario[$i]->telefono; ?></td>  
                            

                            <td><a href="Controladorprincipal.php?ruta=actualizarUsuario&idAct=">Actualizar</a></td> 


                            <td><a href="Controladorprincipal.php?ruta=eliminarUsuarion&idAct=">Eliminar</a></td>  


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
                    $('#Usuario').DataTable({
                        pageLength: 5,
                        lengthMenu: [[5, 10, 15, 20], [5, 10, 15, 20]],
                    });
                });
            </script>     
            <!--**************************************** -->
            <!--**************************************** -->  
        </body>
    </html>
