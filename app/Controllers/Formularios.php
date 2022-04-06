<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Formulario;

class Formularios extends Controller{

    
    public function index(){ 
        $formulario= new Formulario();
        $datos['formularios']= $formulario->orderBy('id','ASC')->findALL();

        $datos['cabecera']=view('template/cabecera');
        $datos['pie']=view('template/piepagina');

        return view('formularios/personas', $datos);

    }    

    public function crear(){

        $datos['cabecera']=view('template/cabecera');
        $datos['pie']=view('template/piepagina');

    return view('formularios/crear', $datos);
    }

    public function guardar(){

    $formulario= new Formulario();

    $datos=[
        'nombre'=>$this->request->getVar('nombre'),
        'email'=>$this->request->getVar('email'),
        'nro_documento'=>$this->request->getVar('nro_documento')
    ];

    $formulario->insert($datos);
    
    return $this->response->redirect(base_url('/personas'));

 }
    public function borrar($id=null){

        $formulario= new Formulario();

        $datosFormulario=$formulario->where('id',$id)->first();

        $formulario->where('id',$id)->delete($id);

    return $this->response->redirect(base_url('/personas'));
    }  

    public function editar($id=null){
        
        $formulario= new Formulario();

        $datos['formulario']=$formulario->where('id',$id)->first();
        
        $datos['cabecera']=view('template/cabecera');
        $datos['pie']=view('template/piepagina');


        return view('formularios/editar', $datos);
        
        return $this->response->redirect(base_url('/personas'));
    }
    public function actualizar(){
        $formulario= new Formulario();

        $datos=[
            'nombre'=>$this->request->getVar('nombre'),     
            'email'=>$this->request->getVar('email'),  
            'nro_documento'=>$this->request->getVar('nro_documento'),  
        ];
        $id= $this->request->getVar('id');
   
        $formulario->update($id,$datos);

        return $this->response->redirect(base_url('/personas'));
    }

    public function getshow(){

        $db      = \Config\Database::connect();
        $builder = $db->table('persona a');
        $builder->select('a.id ,a.nombre, a.email, a.nro_documento, b.ing_nombre');
        $builder->join('ingeniero b','a.id_persona=b.id_persona');
        $query = $builder->get();
        $datos = $query->getResultArray();
        //var_dump($datos);
        $datos['datos']= $datos;

        $datos['cabecera']=view('template/cabecera');
        $datos['pie']=view('template/piepagina');

        return view('paginas/searching', $datos);
}
    
    public function search(){ 

        $formulario= new Formulario();

        $datos=[
            'id'=>$formulario->orderBy('id','ASC')->findALL(),
            'nombre'=> $formulario->orderBy('nombre','ASC')->findALL(),
            'email'=> $formulario->orderBy('email','ASC')->findALL(),
            'nro_documento'=> $formulario->orderBy('nro_documento','ASC')->findALL(),
        ];
        $datos['cabecera']=view('template/cabecera');
        $datos['pie']=view('template/piepagina');

        return view('paginas/home', $datos);
    }

}   