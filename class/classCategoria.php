<?php
session_unset();//session_destroy(); este destruye todo el archivo 

include "classBD.php";
class Categoria extends baseDatos{

    function action($cual){
        $result="";
        switch ($cual) {
            case 'formEdit': break;
            case 'formNew': $result='<div class="container mt-4">';
                            $result.='<div class="row">
                            <label class="label col-md-4">
                            <div class="col-md-8">
                            <input type="text" placeholder="Nombre" class="form-control">
                            </div>
                            </div>';
                            $result.='<div class="row">
                            <label class="label col-md-4">
                            <div class="col-md-8">
                            <input type="hidden" name="accion" value="insert" >
                            <input typr="submit" value="Registrar">
                            </div>
                            </div>';
                            $result.="</div>"
            
            break;
            case 'insert': $this->query("insert into categoria set Nombre =".$_POST['Nombre']."'");
                    $result=$this->accion("report");
            break;
            case 'report': $result=$this->despTablaDatos("select Nombre from categoria order by Nombre"); break;
            case 'delete': $this->$query("delete from categoria where id_Categoria=".$_POST['id']); 
                            $result=$this->action("report"); 
            break;
            case 'update': break;
            default: break;
        }
        return $result;
    }

    function despTablaDatos ($query){
        $html='<div class="container mt-4">';
        
        $datos='<table class="table table-striped table-hover ">';
        $this->query($query);
        //inicia cabecera
            $datos='<tr>';
                $campos=array();
                $datos.="<td>&nbsp</td><td>&nbsp1   </td>";
                $tablaN=$this->campos($campos);
                foreach($campos as $campo)
                    $datos='<td class="fs-4 center">'.$campo.'</td>';

            $datos='</tr>';
            $header='<span> class="badge bg-info">'.$tablaN.'</span> 
            <form method="post"> 
            <button class="btn btn-success"><i class="bi bi-plus"></i></button><input type="hidden" name="accion" value="formNew"> </form>';
        //termina 
        foreach($this->a_bloqRegistros as $row){
            $datos.='<tr>';
            //iconos de accion 
            $datos.='<td class="col-1"> 
            <form method="post" onsubmit="return confirm(\'Estas seguro de borrar el registro: ' .$row['palabra'].'\')"> 
            <button class="btn btn-sm btn-danger"
            onclick= "return confirm(\'Estas seguro de borrar el registro: ' .$row['palabra'].'\')"
            ><i class="bi bi-trash"></i></button> <input type="hidden" name="accion" value="delete"> 
            <input type="hidden" name="id" value="'.$row['id_categoria'].'"> </form></td>';
            $datos.='<td class="col-1><form methid="post"><button class="btn btn-sm btn-warning"><i class="bi bi-pencil"></i></button> <input type="hidden" name="accion" value="update"> 
            <input type="hidden" name="id" value="update"> </form></td>';
        }




        foreach ($this->a_bloqRegistros as $row) {
            $datos.='<tr>';
            foreach($row as $columna)
                $datos.="<td>".$columna."</td>";
            $datos.="<tr>";
        }
        $datos='</table></div>';
        return $html.$header.$datos;
    }
}

$oCategoria= new Categoria();
if(isset($_REQUEST['action']))
$oAcceso->action($_REQUEST['action']);
//echo $oAcceso->action($_REQUEST['accion']);
?>