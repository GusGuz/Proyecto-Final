<?php 
    include("../conexion.php");
    $con=conectar();
    include('../header.php');
    $sql="SELECT * FROM `pelicula`";
    $query=mysqli_query($con,$sql);

    $row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> PAGINA PELICULA</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="../style.css">
    </head>
    <body>
            <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1>Ingrese datos de la pelicula</h1>
                            <form action="insertarp.php" method="POST">
 
                                    <input type="text" class="form-control mb-3" name="nombre" placeholder="Nombre de la pelicula">
                                    <input type="text" class="form-control mb-3" name="director" placeholder="Director">
                                    <input type="text" class="form-control mb-3" name="descripcion" placeholder="Descripción">
                                    <input type="text" class="form-control mb-3" name="genero" placeholder="Genero">
                                <div class="rate">Rating: 
                                    <input type="radio" id="star5" name="rating" value="5" />
                                    <label for="star5" title="text">5 stars</label>
                                    <input type="radio" id="star4" name="rating" value="4" />
                                    <label for="star4" title="text">4 stars</label>
                                    <input type="radio" id="star3" name="rating" value="3" />
                                    <label for="star3" title="text">3 stars</label>
                                    <input type="radio" id="star2" name="rating" value="2" />
                                    <label for="star2" title="text">2 stars</label>
                                    <input type="radio" id="star1" name="rating" value="1" />
                                    <label for="star1" title="text">1 star</label>
                                </div><br/><br/><div class="bp">Fecha de Estreno</div>
                                    <input type="date" class="form-control mb-3" name="fecha_estreno" step="1" min="1910-01-01" max="2021-12-01" value="2021-12-02">
                                    <input type="submit" class="btn btn-primary">
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>Id</th>
                                        <th>Nombre</th>
                                        <th>Director</th>
                                        <th>Rating</th>
                                        <th>Descripción</th>
                                        <th>Genero</th>
                                        <th>Fecha de Estreno</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['id']?></th>
                                                <th><?php  echo $row['nombre']?></th>
                                                <th><?php  echo $row['director']?></th>
                                                <th><?php  echo $row['rating']?></th>  
                                                <th><?php  echo $row['descripcion']?></th>
                                                <th><?php  echo $row['genero']?></th>
                                                <th><?php  echo $row['fecha_estreno']?></th>
                                                <th><a href="actualizarp.php?id=<?php echo $row['id'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="deletep.php?id=<?php echo $row['id'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div>  
            </div>
    </body>
</html>