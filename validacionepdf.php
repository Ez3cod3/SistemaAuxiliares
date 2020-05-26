<?php
include("conexion.php");
$conexion = Conectar();
$hoy = date("Y-m-d");
$con=$_GET['con'];
header("Content-Disposition: attachment; filename=Reporte$hoy.doc");
 $total=0;
          //$sql="";
          
          //$res=mysqli_query($conexion, $sql)or die("problema con la consulta");
          //$dato=mysqli_fetch_array($res);
         
         // $dato1=mysqli_fetch_array($res1);
         // $doc_uni=$dato1['DOC_UNI'];
         // $consulta2="select * from usuario where CI_USER = '$doc_uni'";
         // $query2=mysqli_query($conexion, $consulta2);
          //$dato2=mysqlI_fetch_array($query2);
          //if (mysqli_fetch_array($res) == null) {
          //  $aux3="(No tiene notas subidas al sistemas)";
         // }else{
          //  $aux3="";
          //}

?>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
 <div style="text-align: center;text-decoration:underline;">

   <h4>Lista de Validacion de postulantes por Documentcion entregada - <?php echo "$con"; ?></h4>
 </div>
  
  
   
     <table  border='1' cellpadding='2' cellspacing='0'>
        <tr>
          <td><h6><strong>Nro</strong></h6></td>
          <td><h6><strong>NOMBRE COMPLETO</strong></h6></td>
          <td><h6><strong>Validacion</strong></h6></td>
          <td><h6><strong>Observaciones</strong></h6></td>
          
        </tr>
        <?php
       include_once('conexion.php');
                      $conexion=Conectar();
                      $cont=0;
                      $consulta="select * from postulacion where COD_CONVOCATORIA =  '$con' ";
                      $query=mysqli_query($conexion, $consulta);  
                      $identi=0;
                      while($dato=mysqli_fetch_array($query))
                      {
                        $aux = $dato['ID_POSTULANTE'];
                        $consulta11= "select * from postulante where ID_POSTULANTE = $aux";
                        $query11=mysqli_query($conexion, $consulta11);  
                        $dato11=mysqli_fetch_array($query11);

                        $cont++;
                        ?>
                        <tr>
                          <td ><?php echo "$cont"; ?></td>
                          <td ><?php echo "".$dato11['NOM_POSTULANTE'].""; ?> <?php echo "".$dato11['APE_PAT_POSTULANTE'].""; ?> <?php echo "".$dato11['APE_MAT_POSTULANTE'].""; ?></td>
                          <?php 
                          include_once('conexion.php');
                          $conexion=Conectar();
                          $aux1 = $dato['ID_POSTULACION'];
                          $consulta22="select * from validacion where ID_POSTULACION = $aux1 and validar = '0'" ;
                          $query22=mysqli_query($conexion, $consulta22);
                          if ($dato22=mysqli_fetch_array($query22)) {
                            ?>
                            <td >Invalido</td>
                            <td>
                            <?php
                            $consulta33="select * from validacion where ID_POSTULACION = $aux1 and validar = '0'";
                            $query33=mysqli_query($conexion, $consulta33);
                            while ($dato33=mysqli_fetch_array($query33)) {
                              $aux2 = $dato33['ID_DOCUMENTO'];
                              $consulta44= "select * from documento where ID_DOCUMENTO = $aux2";
                              $query44=mysqli_query($conexion, $consulta44);
                              $dato44=mysqli_fetch_array($query44);
                              ?>
                              <?php echo "".$dato44['NOM_DOCUMENTO'].""; ?>-<?php echo "".$dato33['OBS_VAL'].""; ?>
                              <?php  
                            }
                            ?>
                            </td>


                         
                         
                          
                          <?php 
                          }else
                          {
                            ?>
                             <td >Valido</td>
                          <td >Sin observaciones</td>

                            <?php 

                          }

                           ?>
                          
                          
                          
                    <?php
                      }
                    ?>
         
          
          
          

       
          
      </table>

  <table class="sa_signature_box" style=" padding-top: 2em; margin-top: 2em;">

  
 



<tr>


<td >
 

</td>
</tr>
</table>


     