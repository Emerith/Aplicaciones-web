<?php

namespace AppData\Controller;


class CulturalesController
{
    private $eventos;
    public function __construct()
    {
        $this->eventos= new \AppData\Model\Culturales();

    }
    public function index()
    {
        $datos1=$this->eventos->getAll();
        $datos[0]=$datos1;
        return $datos;
    }
    public function agregar()
    {

        if($_POST)
        {
            $nombre=$_FILES['imagen']['name'];
            $tmp=$_FILES['imagen']['tmp_name'];
            $bytes=file_get_contents($tmp);

            $this->eventos->set('Nombre',$_POST["Nombre"]);
            $this->eventos->set('descripcion',$_POST["descripcion"]);
            $this->eventos->set('img',$bytes);
            $this->eventos->set('lugar',$_POST["lugar"]);
            $this->eventos->set('fecha',$_POST["fecha"]);
            $this->eventos->set('Fecha_fin',$_POST["Fecha_fin"]);
            $this->eventos->set('Horario',$_POST["Horario"]);
            $datos[1]=false;
            if(mysqli_num_rows($this->eventos->verify())==0) {

                $this->eventos->add();
                header("Location:".URL."Culturales");
                $datos[1]=true;
            }
            $datos[0]=$this->eventos->getAll();
            header("Location:".URL."Culturales");
            return $datos;
        }
    }

    public function eliminar($id)
    {
        $this->eventos->delete($id[0]);
        $datos1=$this->eventos->getAll();
        $datos[0]=$datos1;
        return $datos;
    }


    public function modificar ($id)
    {
        $datos=$this->eventos->edit($id[0]);
        print_r(json_encode(mysqli_fetch_assoc($datos)));
    }
    public function getimg ($id)
    {
        $datos=$this->eventos->getImg($id[0]);
        while($row=mysqli_fetch_array($datos))
        {
            echo "
                <div class='col-sm'>"
            ?>
            <img class='card-img-top' alt='Card image cap' style=' height:80px;' src='data:image/jpg; base64, <?php echo base64_encode($row[0]); ?>'/>
            <?php echo"                
                </div>";
        }
    }
    public function actualizar($id)
    {
        print_r($_POST);
        if($_POST)
        {
            $nombre=$_FILES['imagen']['name'];
            $tmp=$_FILES['imagen']['tmp_name'];
            $bytes=file_get_contents($tmp);
            $this->eventos->set('id_evento',$_POST["id"]);
            $this->eventos->set('Nombre',$_POST["Nombre"]);
            $this->eventos->set('descripcion',$_POST["descripcion"]);
            $this->eventos->set('lugar',$_POST["lugar"]);
            $this->eventos->set('fecha',$_POST["fecha"]);
            $this->eventos->set('Fecha_fin',$_POST["Fecha_fin"]);
            $this->eventos->set('Horario',$_POST["Horario"]);
            $this->eventos->set('img',$bytes);
            $this->eventos->update();
            header("Location:".URL."Culturales");
        }

    }
}