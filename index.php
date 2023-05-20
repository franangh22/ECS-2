<?php
    require_once 'modelo/claseUsuario.php';

        $ClassUser = new Usuario();
        $ClassUser->Id = 3;
        $ClassUser->NombreUsuario = "fran";
        $ClassUser->Clave = "adminadmin";
        $ClassUser->Email = "example@mailto.com";
        $ClassUser->Nombre = "Franco";
        $ClassUser->Apellido = "Anghilante";
        $ClassUser->FechaNacimiento = "05/03/2001";
        $ClassUser->NroDocumento = 43008057;
        $ClassUser->FechaAlta = "19/05/2023 VIERNES";
        $ClassUser->MostrarDatos();
?>