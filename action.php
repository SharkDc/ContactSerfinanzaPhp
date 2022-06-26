<?php
include('config.php');
date_default_timezone_set("America/Bogota");
setlocale(LC_ALL, 'es_ES');

$metodoAction  = (int) filter_var($_REQUEST['metodo'], FILTER_SANITIZE_NUMBER_INT);

//$metodoAction ==1, es crear un registro nuevo
if($metodoAction == 1){

    $Nombre       = filter_var($_POST['nombre'], FILTER_SANITIZE_STRING);
    $Pais           = filter_var($_POST['pais'], FILTER_SANITIZE_STRING);
    $Celular         = filter_var($_POST['celular'], FILTER_SANITIZE_STRING);
    $Correo        = filter_var($_POST['correo'], FILTER_SANITIZE_STRING);
    
  
   
    $SqlInsert = ("INSERT INTO contacto(
        nombre,
        pais,
        celular,
        correo
    )
    VALUES(
        '".$Nombre."',
        '".$Pais."',
        '".$Celular."',
        '".$Correo."'
    )");
    $resulInsert = mysqli_query($con, $SqlInsert);
    header("Location:index.php?a=1");

}


// //Actualizar   
// if($metodoAction == 2){
//     $id      = (int) filter_var($_REQUEST['id'], FILTER_SANITIZE_NUMBER_INT);

//     $namefull       = filter_var($_POST['Nombre'], FILTER_SANITIZE_STRING);
//     $pais           = filter_var($_POST['pais'], FILTER_SANITIZE_STRING);
//     $celular         = (int) filter_var($_POST['celular'], FILTER_SANITIZE_NUMBER_INT);
//     $correo        = filter_var($_POST['correo'], FILTER_SANITIZE_STRING);

//     $Update    = ("UPDATE contacto
//         SET Nombre='$namefull',
//         pais='$pais', 
//         celular='$celular', 
//         correo='$correo'
//         WHERE id='$id' ");
//     $resultadoUpdate = mysqli_query($con, $Update);


    

//   header("Location:formEditar.php?update=1&id=$id");
//  }



// //Eliminar 
// if($metodoAction == 3){
//     $id  = (int) filter_var($_REQUEST['id'], FILTER_SANITIZE_NUMBER_INT);

//     $SqlDelete = ("DELETE FROM contacto WHERE  id='$id'");
//     $resultDelete = mysqli_query($con, $SqlDelete);
    
   
    
//     $msj ="Alumno Borrado correctamente.";
//     header("Location:index.php?deletAlumno=1&mensaje=".$msj);
 
// }

?>