<?

class baseDatos{
    var $a_conn;
    var $a_server;
    var $a_user;
    var $a_password;
    var $a_dataBase;
    var $a_bloqRegistros;
    var $a_numRegistros; 

    function __construct(){
        $this-> a_password="1234";  //para acceder a cualquier elemento de la clase se usa $this->;
        $this-> a_user="basta";
        $this-> a_dataBase="basta";
        $this-> a_server="localhost";
    }

    function open(){
        $this->a_conn = mysqli_connect($this->a_server,$this->a_user,$this->a_password,$this->a_dataBase) or die (">>> CONNECT FAILED <<<");
    }

    function close(){
        mysqli_close($this->a_conn);
    }

    function query($queryP){
        $this->open();
        $this->a_bloqRegistros=mysqli_query($this->a_conn,$queryP);
        if (strpos("SELECT",strtoupper($queryP))!==false)
        $this->a_numRegistros=mysqli_num_rows($this->a_bloqRegistros);
        $this->close();
    }

    function campos(&$campos){
        $campos=array();
        for($campoN=0; $campoN<mysqli_num_fields($this->a_numRegistros); $campoN++){
            $campo=mysqli_fetch_field_direct($this->a_bloqRegistros,$campoN);
            $tabla=$campo->table;
            array_push($campos,$campo->name);
        }
        return $campos;
    }

    function getRecord($queryP){
        $this->open();
        $this->a_bloqRegistros=mysqli_query($this->a_conn,$queryP);
        $this->a_numRegistros=mysqli_num_rows($this->a_bloqRegistros);
        $this->close();
        return mysqli_fetch_object($this->a_bloqRegistros);
    }
}

$oBD=new baseDatos();

?>