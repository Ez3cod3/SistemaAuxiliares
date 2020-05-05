<?php 
require_once('conexion.php');
$conexion=Conectar();


    if(isset($_REQUEST['cambiar']))
    {
        $num= $_POST["count"];// $res['numer'];
        $counta=0;
        while($counta < $num){
            $a=  $_POST["a".$counta]; //ide usus
            $c=0; //habilitado ?
            if($_POST["c".$counta]){
                $c=1;
            }
            $consulta = "UPDATE usuario SET HABILITADO_US='$c' WHERE COD_SIS_US = '$a'";
            $query=mysql_query($consulta);
            $counta++;
        }
        header("Location:lis_usuarios.php?m=3");    
    }
//HABILITAR USUARIO CON SU ROL
//
    if(isset($_REQUEST['habilitar_usuario_rol']))
    {
        $num= $_POST["count"];// $res['numer'];
        echo $num."<br>";
        $counta=0;
        while($counta < $num){
            $a=  $_POST["a".$counta]; //ide usus
            echo "esto es a ".$a;
            $c=0; //habilitado ?
            if($_POST["c".$counta]){
                $c=1;
            }
            $consulta = "UPDATE id_rol_usuario SET US_HABILITADO='$c' WHERE COD_SIS_US = '$a'";
            $query=mysql_query($consulta);
            $counta++;
        }
        header("Location:lis_user.php?m=3");    
    }





//INSERTAR ROL
    if(isset($_REQUEST['insert_rol']))
    {
        // Recuperando variables rol -----------------
        $newRol = $_POST['rol'];
        $newDesRol = $_POST['des_rol'];
        $consulta1="INSERT INTO `rol`(ID_ROL, NOM_ROL, DESCRIPCION_ROL) VALUES (null,'$newRol','$newDesRol')";
        
        $query1=mysqli_query($conexion, $consulta1);
        header("Location:lista_rol.php?m=3");     
    }
//FIN INSERTAR ROL
if(isset($_REQUEST['cambiar_materia']))
    {
        $num= $_POST["count"];// $res['numer'];
        $counta=0;
        while($counta < $num){
            $a=  $_POST["a".$counta]; //ide usus
            $c=0; //habilitado ?
            if($_POST["c".$counta]){
                $c=1;
            }
            $consulta = "UPDATE materia SET HABILITADO='$c' WHERE COD_MAT = '$a'";
            $query=mysql_query($consulta);
            $counta++;
        }
        header("Location:lis_mat.php?m=3");    
    }

if(isset($_REQUEST['asig_rol']))
    {
        // Recuperando variables Asignacion Rol Funcion -----------------
        $newRol1 = $_POST['rol1'];
        $newFunc1 = $_POST['func1'];
        $consulta1="INSERT INTO rol_fun VALUES (NULL, '$newRol1', '$newFunc1 ');";
        $query1=mysqli_query($conexion, $consulta1);
        header("Location:asig_rol_fun.php?m=3");       
    }
//asignar formulario
    if(isset($_REQUEST['asig_form']))
    {
        // Recuperando variables -----------------
        $newform1 = $_POST['form1'];
        $newFunc1 = $_POST['func2'];
        $consulta1="INSERT INTO fun_for VALUES (NULL, '".$newFunc1."', '".$newform1."');";
        $query1=mysqli_query($conexion, $consulta1);
        header("Location:asig_form_fun.php?m=3");       
    }
//fin asignar formulario

if(isset($_REQUEST['insert_func']))
    {
        // Recuperando variables Funcion -----------------
        $newFunc = $_POST['funcion'];
        $newDesFunc = $_POST['des_fun'];
        $consulta1="INSERT INTO funcion VALUES (4, '".$newFunc."', '".$newDesFunc."')";
        $query1=mysqli_query($conexion, $consulta1);
        header("Location:lista_fun.php?m=3");        
    }

if(isset($_REQUEST['insert_form']))
    {
        // Recuperando variables Formulario-----------------
        $newForm = $_POST['form'];
        $newUrl = $_POST['url_form'];
        $newDes = $_POST['des_form'];
        $imgForm = $_FILES['img_form']['name'];
        $ruta5 = $_FILES['img_form']['tmp_name'];
        $destino5 = "img/formularios/".$imgForm;
        copy($ruta5, $destino5);
        $consulta1="INSERT INTO formulario VALUES (default,'".$newForm."','".$destino5."','".$newUrl."','".$newDes."')";
        $query1=mysql_query($consulta1);
        header("Location:lis_form.php?m=3");        
    }

?>