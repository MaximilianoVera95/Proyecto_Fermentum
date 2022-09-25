<?php

include('conectar.php');

global $conecta;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cervecería Fermentum</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <form action="rangoBD.php" class="form-register" method="post">
        <h1 class="form__title">Tanques de Cerveza Fermentum: Rango de Temperatura</h1>
        <div class="container--flex">
            <label for="" class="form__label">Serie</label>
            <select name="serie" id="" class="form__select">
                <option value="tanque1">tanque1</option>
                <option value="tanque2">tanque2</option>
                <option value="tanque3">tanque3</option>
                <option value="tanque4">tanque4</option>
                <option value="tanque5">tanque5</option>
                <option value="tanque6">tanque6</option>
                <option value="tanque7">tanque7</option>
                <option value="tanque8">tanque8</option>
                <option value="tanque9">tanque9</option>
                <option value="tanque10">tanque10</option>
            </select>
        </div>


        <div class="container--flex">
            <label for="" class="form__label">Estado de Alarma</label>
            <select name="Alarma" id="" class="form__select">
                <option value="1"> 1 (Activar) </option>
                <option value="0"> 0 (Desactivar) </option>
            </select>
        </div>


        <div class="container--flex">
            <label for="" class="form__label">Valor Mínimo</label>
            <input type="text" class="form__input" name="minimo" required>
        </div>
        <div class="container--flex">
            <label for="" class="form__label">Valor Máximo</label>
            <input type="text" class="form__input" name="maximo" required>
        </div>
        <input type="submit" class="form__submit">

        <div class="container--flex">
        <table border="1" class="form__tabla">
            <thead>
            <tr>
                <th>Serie</th>
                <th>Última modificación</th>
                <th>Temp.Mín</th>
                <th>Temp.Máx</th>
                <th>Alarma</th>
            </tr>
            </thead>

            <?php
                $sql="SELECT * FROM `tanque1`";
                $result=mysqli_query($conecta,$sql);

                while($mostrar=mysqli_fetch_array($result)){
            ?>

            <tr>
                <td><?php echo $mostrar['serie'] ?></td>
                <td><?php echo $mostrar['fecha'] ?></td>
                <td><?php echo $mostrar['minimo'] ?></td>
                <td><?php echo $mostrar['maximo'] ?></td>
                <td><?php echo $mostrar['Alarma'] ?></td>
            </tr>
        <?php
            }
        ?>
        </table>
        </div>

        <div class="container--flex">
        <table border="1" class="form__tabla">
        <thead>
            <tr>
                <th>Serie</th>
                <th>Última modificación</th>
                <th>Temp.Mín</th>
                <th>Temp.Máx</th>
                <th>Alarma</th>
            </tr>
        </thead>
            <?php
                $sql="SELECT * FROM `tanque2`";
                $result=mysqli_query($conecta,$sql);

                while($mostrar=mysqli_fetch_array($result)){
            ?>

            <tr>
                <td><?php echo $mostrar['serie'] ?></td>
                <td><?php echo $mostrar['fecha'] ?></td>
                <td><?php echo $mostrar['minimo'] ?></td>
                <td><?php echo $mostrar['maximo'] ?></td>
                <td><?php echo $mostrar['Alarma'] ?></td>
            </tr>
        <?php
            }
        ?>
        </table>
        </div>

        <div class="container--flex">
        <table border="1" class="form__tabla">
        <thead>
            <tr>
                <th>Serie</th>
                <th>Última modificación</th>
                <th>Temp.Mín</th>
                <th>Temp.Máx</th>
                <th>Alarma</th>
            </tr>
        </thead>
            <?php
                $sql="SELECT * FROM `tanque3`";
                $result=mysqli_query($conecta,$sql);

                while($mostrar=mysqli_fetch_array($result)){
            ?>

            <tr>
                <td><?php echo $mostrar['serie'] ?></td>
                <td><?php echo $mostrar['fecha'] ?></td>
                <td><?php echo $mostrar['minimo'] ?></td>
                <td><?php echo $mostrar['maximo'] ?></td>
                <td><?php echo $mostrar['Alarma'] ?></td>
            </tr>
        <?php
            }
        ?>
        </table>
        </div>

        <div class="container--flex">
        <table border="1" class="form__tabla">
        <thead>
            <tr>
                <th>Serie</th>
                <th>Última modificación</th>
                <th>Temp.Mín</th>
                <th>Temp.Máx</th>
                <th>Alarma</th>
            </tr>
        </thead>
            <?php
                $sql="SELECT * FROM `tanque4`";
                $result=mysqli_query($conecta,$sql);

                while($mostrar=mysqli_fetch_array($result)){
            ?>

            <tr>
                <td><?php echo $mostrar['serie'] ?></td>
                <td><?php echo $mostrar['fecha'] ?></td>
                <td><?php echo $mostrar['minimo'] ?></td>
                <td><?php echo $mostrar['maximo'] ?></td>
                <td><?php echo $mostrar['Alarma'] ?></td>
            </tr>
        <?php
            }
        ?>
        </table>
        </div>

        <div class="container--flex">
        <table border="1" class="form__tabla">
        <thead>
            <tr>
                <th>Serie</th>
                <th>Última modificación</th>
                <th>Temp.Mín</th>
                <th>Temp.Máx</th>
                <th>Alarma</th>
            </tr>
        </thead>
            <?php
                $sql="SELECT * FROM `tanque5`";
                $result=mysqli_query($conecta,$sql);

                while($mostrar=mysqli_fetch_array($result)){
            ?>

            <tr>
                <td><?php echo $mostrar['serie'] ?></td>
                <td><?php echo $mostrar['fecha'] ?></td>
                <td><?php echo $mostrar['minimo'] ?></td>
                <td><?php echo $mostrar['maximo'] ?></td>
                <td><?php echo $mostrar['Alarma'] ?></td>
            </tr>
        <?php
            }
        ?>
        </table>
        </div>

        <div class="container--flex">
        <table border="1" class="form__tabla">
        <thead>
            <tr>
                <th>Serie</th>
                <th>Última modificación</th>
                <th>Temp.Mín</th>
                <th>Temp.Máx</th>
                <th>Alarma</th>
            </tr>
        </thead>
            <?php
                $sql="SELECT * FROM `tanque6`";
                $result=mysqli_query($conecta,$sql);

                while($mostrar=mysqli_fetch_array($result)){
            ?>

            <tr>
                <td><?php echo $mostrar['serie'] ?></td>
                <td><?php echo $mostrar['fecha'] ?></td>
                <td><?php echo $mostrar['minimo'] ?></td>
                <td><?php echo $mostrar['maximo'] ?></td>
                <td><?php echo $mostrar['Alarma'] ?></td>
            </tr>
        <?php
            }
        ?>
        </table>
        </div>

        <div class="container--flex">
        <table border="1" class="form__tabla">
        <thead>
            <tr>
                <th>Serie</th>
                <th>Última modificación</th>
                <th>Temp.Mín</th>
                <th>Temp.Máx</th>
                <th>Alarma</th>
            </tr>
        </thead>
            <?php
                $sql="SELECT * FROM `tanque7`";
                $result=mysqli_query($conecta,$sql);

                while($mostrar=mysqli_fetch_array($result)){
            ?>

            <tr>
                <td><?php echo $mostrar['serie'] ?></td>
                <td><?php echo $mostrar['fecha'] ?></td>
                <td><?php echo $mostrar['minimo'] ?></td>
                <td><?php echo $mostrar['maximo'] ?></td>
                <td><?php echo $mostrar['Alarma'] ?></td>
            </tr>
        <?php
            }
        ?>
        </table>
        </div>


        <div class="container--flex">
        <table border="1" class="form__tabla">
        <thead>
            <tr>
                <th>Serie</th>
                <th>Última modificación</th>
                <th>Temp.Mín</th>
                <th>Temp.Máx</th>
                <th>Alarma</th>
            </tr>
        </thead>
            <?php
                $sql="SELECT * FROM `tanque8`";
                $result=mysqli_query($conecta,$sql);

                while($mostrar=mysqli_fetch_array($result)){
            ?>

            <tr>
                <td><?php echo $mostrar['serie'] ?></td>
                <td><?php echo $mostrar['fecha'] ?></td>
                <td><?php echo $mostrar['minimo'] ?></td>
                <td><?php echo $mostrar['maximo'] ?></td>
                <td><?php echo $mostrar['Alarma'] ?></td>
            </tr>
        <?php
            }
        ?>
        </table>
        </div>

        <div class="container--flex">
        <table border="1" class="form__tabla">
        <thead>
            <tr>
                <th>Serie</th>
                <th>Última modificación</th>
                <th>Temp.Mín</th>
                <th>Temp.Máx</th>
                <th>Alarma</th>
            </tr>
        </thead>
            <?php
                $sql="SELECT * FROM `tanque9`";
                $result=mysqli_query($conecta,$sql);

                while($mostrar=mysqli_fetch_array($result)){
            ?>

            <tr>
                <td><?php echo $mostrar['serie'] ?></td>
                <td><?php echo $mostrar['fecha'] ?></td>
                <td><?php echo $mostrar['minimo'] ?></td>
                <td><?php echo $mostrar['maximo'] ?></td>
                <td><?php echo $mostrar['Alarma'] ?></td>
            </tr>
        <?php
            }
        ?>
        </table>
        </div>

        <div class="container--flex">
        <table border="1" class="form__tabla">
        <thead>
            <tr>
                <th>Serie</th>
                <th>Última modificación</th>
                <th>Temp.Mín</th>
                <th>Temp.Máx</th>
                <th>Alarma</th>
            </tr>
        </thead>
            <?php
                $sql="SELECT * FROM `tanque10`";
                $result=mysqli_query($conecta,$sql);

                while($mostrar=mysqli_fetch_array($result)){
            ?>

            <tr>
                <td><?php echo $mostrar['serie'] ?></td>
                <td><?php echo $mostrar['fecha'] ?></td>
                <td><?php echo $mostrar['minimo'] ?></td>
                <td><?php echo $mostrar['maximo'] ?></td>
                <td><?php echo $mostrar['Alarma'] ?></td>
            </tr>
        <?php
            }
        ?>
        </table>
        </div>


    </form>
</body>
</html>
