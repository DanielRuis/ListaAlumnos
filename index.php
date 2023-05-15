<?php
    $hostname="localhost";
    $username="dano";
    $password="31342522DErx<";
    $database="ListaAlumnos";

    $mysqli=mysqli_connect($hostname,$username,$password,$database);

    if ($mysqli){
        echo("Connecting to database " . $database);
    }else{
        die("Error connecting: " . mysqli_connect_error());
    }

    //Hace la consulta de alumnos
    $query="SELECT * FROM lista";
    $result=mysqli_query($mysqli,$query);



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <script src="../js/controller.js" defer></script>
    <title>Lista de alumnos</title>
</head>
<body>
    <nav>
        <h1>Lista de alumnos</h1>
    </nav>
    <section class="container">
        <!--Contenedor de la lista de alumnos-->
        <div id="tablaContainer">
            <table>
                <thead>
                    <tr>
                        <th>Matricula</th>
                        <th>Nombre</th>
                        <th>Correo</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        if (mysqli_num_rows($result)>0){
                            while ($row=mysqli_fetch_assoc($result)){
                                echo "<tr>";
                                echo "<td>".$row['matricula']."</td>";
                                echo "<td>".$row['nombre']."</td>";
                                echo "<td>".$row['correo']."</td>";
                                echo "</tr>";
                            }
                        }else{
                            echo "<h2>No hay datos</h2>";
                        }
                    ?>
                    
                </tbody>

            </table>
        </div>
        <!--Contenedor de agregar o eliminar contacto-->
        <div class="izquierda">
            <div id="barAdd" class="bar">
                <h2>Añadir alumno</h2>
            </div>
            <div id="barUpdate" class="bar">
                <h2>Modificar alumno</h2>
            </div>
            <div id="barDelete" class="bar">
                <h2>Borrar alumno</h2>
            </div>
            <div class="containerPrincipal inactive" id="addView">
                <div id="addContainer">
                    <h2>Agregue los datos</h2>
                    <form>
                        <h3>Matricula</h2>
                        <input type="text" id="matriAdd">
                        <h3>Nombre</h2>
                        <input type="text" id="nameAdd">
                        <h3>Correo</h2>
                        <input type="email" id="correoAdd">
                        <button id="buttonAdd" class="buttonBueno">Añadir</button>
                    </form>
                    <h3 id="infoAdd"></h3>
                </div>
            </div>
            <div class="containerPrincipal inactive" id="updateView">
                <div id="updateContainer">
                    <h2>Agregue la matricula a modificar </h2>
                    <form>
                        <h3>Matricula</h2>
                        <input type="text" id="matriUpdate">
                        <button id="buttonSearch1" class="buttonAzul">Buscar</button>
                        <h3>Nombre</h2>
                        <input type="text" id="nameUpdate">
                        <h3>Correo</h2>
                        <input type="email" id="correoUpdate">
                        <button id="buttonAdd" class="buttonBueno">Actualizar</button>
                        
                    </form>
                    <h3 id="infoDelete"></h3>
                </div>
            </div>
            <div class="containerPrincipal inactive" id="deleteView">
                <div id="deleteContainer">
                    <h2>Agregue la matricula a eliminar </h2>
                    <form>
                        <h3>Matricula</h2>
                        <input type="text" id="matriDelete">
                        <button id="buttonDelete" class="buttonRojo">Eliminar</button>
                    </form>
                    <h3 id="infoUpdate"></h3>
                </div>
            </div>
        </div>
        
        
    </section>
</body>
</html>