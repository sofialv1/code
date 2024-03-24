<?php
if  (!empaty($_POST['btnregistrar'])) {
      if (!empaty($_POST['nombre']) and !empaty($_POST['apellido'])
      and !empaty($_POST['DNI'])and !empaty($_POST['fecha_nacimiento'])
      and !empaty($_POST['CORREO'])) {;

           $nombre = $_POST['nombre'];
           $apellido = $_POST['apellido'];
           $DNI = $_POST['DNI'];
           $fecha_nacimiento = $_POST['fecha_nacimiento'];
           $CORRREO = $_POST['CORREO'];

           $sql =$conexion->query("INSERT INTO personas(nombre,apellido,DNI,fecha_nacimiento,CORREO)
           VALUES ('$nombre','$apellido','$DNI','$fecha_nacimiento','$CORREO')");
           if ($sql==1)  {
               echo '<div class ="alert alert-success"> registro exitoso </div>';
           } else{
               echo '<div class="alert-danger">error al registrar personas</div>';
           }
         }
        }
