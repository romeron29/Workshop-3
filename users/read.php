<?php
    require('../utils/connection.php');
    $conn = getConnection(); 
    $query = "select id_user, firstname, lastname, email, role,  nombre_provincia from user 
    inner join province 
    on user.province = province.id_provincia;";
    $result = mysqli_query($conn,$query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ver Usuarios</title>
    </head>
    <body>
        <div>
            <h2>
                Usuarios registrados
            </h2>
            <table>
                <thead>
                    
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Last Name</th>
                        <th>Username</th>
                        <th>Rol</th>
                        <th>Province</th>
                    </tr>
                </thead>
                <tbody>
                <?php while($row = mysqli_fetch_array($result)):?>
                    <tr>
                        <th><?= $row['id_user']?></th>
                        <th><?= $row['firstname']?></</th>
                        <th><?= $row['lastname']?></</th>
                        <th><?= $row['email']?></</th>
                        <th><?= $row['role']?></</th>
                        <th><?= $row['nombre_provincia']?></</th>
                        <th><a href="update.php?id=<?= $row['id_user']?>">Modificar</a></th>
                        <th><a href="delete.php?id=<?= $row['id_user']?>">Eliminar</a></th>
                    </tr>
                    <?php endwhile;?>
                </tbody>
            </table>
        </div>
        
    </body>
</html>