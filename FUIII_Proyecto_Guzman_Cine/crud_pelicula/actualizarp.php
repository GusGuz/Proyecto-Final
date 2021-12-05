<?php 
    include("../conexion.php");
    $con=conectar();

    $id=$_GET['id'];
$sql="SELECT * FROM pelicula WHERE id='$id'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <<link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="../style.css">
    </head>
    <body>
                <div class="container mt-5">
                    <form action="updatep.php" method="POST">
                                <input type="hidden" name="id" value="<?php echo $row['id']  ?>">
                                <input type="text" class="form-control mb-3" name="nombre" placeholder="Nombre" value="<?php echo $row['nombre']  ?>">
                                <input type="text" class="form-control mb-3" name="director" placeholder="Director" value="<?php echo $row['director']  ?>">
                                <input type="text" class="form-control mb-3" name="rating" placeholder="Rating" value="<?php echo $row['rating']  ?>">
                                <input type="text" class="form-control mb-3" name="descripcion" placeholder="Descripción" value="<?php echo $row['descripcion']  ?>">
                                <input type="text" class="form-control mb-3" name="genero" placeholder="Genero" value="<?php echo $row['genero']  ?>">
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
                                <input type="date" class="form-control mb-3" name="fecha_estreno" step="1" min="1910-01-01" max="2021-12-01" value="<?php echo $row['fecha_estreno']  ?>">
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>