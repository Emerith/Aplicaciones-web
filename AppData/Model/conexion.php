<?php
namespace AppData\Model;
class conexion
{

    private $datos=array("server"=>"localhost","user"=>"root","password"=>"", "base"=>"eventos");
    public $stm;


    private $conexion;

    function __construct()
    {
        $this->conexion=new \mysqli($this->datos["server"],$this->datos["user"], $this->datos["password"],$this->datos["base"]);
        $this->conexion->set_charset("utf8");
    }

    public function QuerySimple($sql)
    {
        $this->conexion->query($sql) or die (mysqli_error($this->conexion));
    }
    public function proc($a,$b,$c,$d,$e,$f,$g,$h)
    {
        $sql="insert into eventos (Nombre,descripcion,id_categoria,lugar,fecha,fecha_fin,horario,img) values (?,?,?,?,?,?,?,?)";
        $stm=$this->conexion->prepare($sql) or die (mysqli_error($this->conexion));
        $stm->bind_param('ssssssss',$a,$b,$c,$d,$e,$f,$g,$h);
        $stm->execute();
    }

    public function proc2($a,$b,$c,$d,$e,$f,$g,$h)
    {
        $sql="update eventos set Nombre=?, descripcion=?,lugar=?, fecha=?, Fecha_fin=?, Horario=? ,img=? where id_evento=?";
        $stm=$this->conexion->prepare($sql) or die (mysqli_error($this->conexion));
        $stm->bind_param('ssssssss',$a,$b,$c,$d,$e,$f,$g,$h);
        $stm->execute();

    }

    public function QueryResultado($sql)
    {
        $datos=$this->conexion->query($sql) or die (mysqli_error($this->conexion));
        return $datos;
    }

    public function __destruct()
    {
        $this->conexion->close();
    }
}
