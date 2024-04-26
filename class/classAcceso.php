<?php
include "../class/classBD.php";
session_start();

//session_unset();//session_destroy(); este destruye todo el archivo 


class Acceso extends baseDatos{

    function action($cual){
        $result="";

        switch ($cual) {
            case 'login':
                $result=$this->login();
                break;
            case 'newUser':
                $result=$this->newUser();
                break;
            case 'recordPwd':
                $result=$this->recordPwd();
                break;
            default:
                break;
        }
        return $result;
    }
    
    //CREACION DE LA FUNCION PARA INICIAR SESION 
    function login(){
        //DEFINIR VARIABLES 
        $email=$_POST['email'];
        $clave=$_POST['clave'];
        $capchat=$_POST['capchat'];
        $capchat_login=$_SESSION['capt_login'];

        if($capchat != null && $capchat == $capchat_login){

            if($email != null && $clave != null){//VERIFICACION DEL CORREO 
                        $querySelectUser = "SELECT * FROM usuario where email= '{$email}' and clave= '{$clave}'";//SI NO FUNCIONA EL TEST METER LA CONSULTA AQUI 
                        $registro=$this->getRecord($querySelectUser);

                if($this->a_numRegistros==1){//VERIFICACION SI EXISTE LOS DATOS INGRESADOS 
                    $_SESSION['nombre']=$registro->nombre." ".$registro->apellidos;
                    $_SESSION['email']=$registro->email;
                    $_SESSION['id_usuario']=$registro->id_usuario;

                    switch ($registro -> tipo_usuario) {
                        case 1:
                            header("location: ../HTML/home.php");
                            break;
                        case 2:
                            header("location: ../admin/indexAdmin.php");
                            break;
                         default:
                            header("location: ../HTML/home.php");
                            break;
                    }
                    

                }else{
                    header("location: ../HTML/login.php?m=1");//ERROR DE CREDENCIALES no se encontró exactamente un registro
                    exit;
                }        
            }else{
                header("location: ../HTML/login.php?m=2"); // ERROR DE CAMPOS VACIOS,  no se enviaron los datos requeridos 
                exit;   
            }
        }else{
            header("location: ../HTML/login.php?m=3"); // ERROR de capchat 
            exit;
        }
    }

    //CREACION DE LA FUNCION PARA REGISTRAR NUEVO USUARIO 
    function newUser(){
        //VARIABLES 
        $nombre=$_POST['nombre'];
        $apellidos=$_POST['apellidos'];
        $email=$_POST['email'];
        $clave=$_POST['clave'];
        $capchat=$_POST['capchat'];
        $capchat_newUser=$_SESSION['capt_record'];


        if($email != null && $clave != null && $capchat != null && $nombre != null && $apellidos != null){
            if($capchat_newUser != $capchat){
                header("location: ../HTML/registro.php?m=3"); //error capchat registro 
                exit;
            }
        }


        require '../resource/class.smtp.php';
        require '../resource/class.phpmailer.php';
        
        $mail = new PHPMailer(true);
        try {
            // Configurar el servidor SMTP
            $mail->isSMTP();
            $mail->Host = 'smtp.example.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'flores.jorge.1j@gmail.com';
            $mail->Password = 'Mandojorge22';
            $mail->SMTPSecure = 'tls';
            $mail->Port = 587;
        
            // Configurar el correo electrónico
            $mail->setFrom('tu_correo@example.com', 'Tu Nombre');
            $mail->addAddress('correo_destino@example.com', 'Nombre Destinatario');
            $mail->Subject = 'Asunto del correo';
            $mail->Body = 'Contenido del correo electrónico';
        
            // Enviar el correo electrónico
            $mail->send();
            echo '¡El correo electrónico ha sido enviado!';
        } catch (Exception $e) {
            echo 'Error al enviar el correo electrónico: ' . $mail->ErrorInfo;
        }

    }


    //CREACION DE LA FUNCION PARA RECORDAR CONTRASEÑA 
    function recordPwd(){

    }


/*
    $cadena="ABCDEFGHIJKLMNPQRSTUVWXYZ123456789123456789";
    $numeC=strlen($cadena);
    $nuevPWD="";
    for ($i=0; $i<8; $i++)//generacion de password 
        $nuevPWD.=$cadena[rand()%$numeC]; 

$cad="insert into usuario set nombre='".$_POST['nombre']."', apellidos='".$_POST['apellidos']."', email='".$_POST['correo']."', clave=password('".$nuevPWD."'), fechaUltiAcceso='".date("Y-m-d");


 include("../resource/class.phpmailer.php");
 include("../resource/class.smtp.php");

$mail = new PHPMailer();
$mail->IsSMTP();
    $mail->Host="smtp.gmail.com"; //mail.google
    $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for GMail
    $mail->Port = 465;     // set the SMTP port for the GMAIL server
    $mail->SMTPDebug  = 1;  // enables SMTP debug information (for testing)
                              // 1 = errors and messages
                              // 2 = messages only
    $mail->SMTPAuth = true;   //enable SMTP authentication
    
    $mail->Username =   "20031296@itcelaya.edu.mx"; // SMTP account username
    $mail->Password = "nvzu twde sdjh ryas";  // SMTP account password -----> poner la clave que da google 
      
    $mail->From="";
    $mail->FromName="";
    $mail->Subject = "Registro completo";
    $mail->MsgHTML("<h1>BIENVENIDO ".$_POST['nombre']." ".$_POST['apellidos']."</h1><h2> tu clave de acceso es : ".$nuevPWD."</h2>");
    $mail->AddAddress($_POST['correo']);
    //$mail->AddAddress("admin@admin.com");
    if (!$mail->Send()) 
          echo  "Error: " . $mail->ErrorInfo;
    else { 
      open();  
      $this->query($cad);
      $result=mysqli_query($cad);
      var_dump($result);
           header("location: home.php?e=7"); }
}*/

}


$oAcceso= new Acceso();
if(isset($_REQUEST['action']))
$oAcceso->action($_REQUEST['action']);
//echo $oAcceso->action($_REQUEST['accion']);
?>