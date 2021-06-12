<?php
require_once 'Model/persona.php';

class PersonaController{
    
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new Persona();
    }
    
    public function Index(){
        require_once 'View/header.php';
        require_once 'View/persona.php';

    }
    
    public function Crud(){
        $alm = new Persona();
        
        if(isset($_REQUEST['idpersona'])){
            $alm = $this->model->getting($_REQUEST['idpersona']);
        }
        
        require_once 'View/header.php';
        require_once 'View/persona-editar.php';

    }
    
    public function Guardar(){
        $alm = new Persona();
        
        $alm->idpersona = $_REQUEST['idpersona'];
        $alm->nombres = $_REQUEST['Nombres'];
        $alm->dni = $_REQUEST['dni'];
        $alm->fecha_ingreso = $_REQUEST['fecha_ingreso'];
        $alm->prueba_covid = $_REQUEST['prueba_covid'];
        $alm->email = $_REQUEST['correo'];



        $alm->idpersona > 0 
           ? $this->model->Actualizar($alm)
           : $this->model->Registrar($alm);


        header('Location: index.php');
    }
    
    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['idpersona']);
        header('Location: index.php');
    }

    public function cuarentena(){


    }
}
