<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\MovieModel;

class Movies extends Controller{
    
    public function index(){
        $movie = new movieModel();
        $datos['movies'] = $movie -> orderBy('id','ASC') ->findAll();
        $datos['cabecera'] = view('template/cabecera');
        $datos['pie'] = view('template/piepagina');
        
        return view('movies/listMovie', $datos);
    }

    public function crear(){
        
        $datos['cabecera'] = view('template/cabecera');
        $datos['pie'] = view('template/piepagina');
        return view('movies/crearMovie', $datos);
    }

    public function guardar(){
        $movie = new movieModel();

                $datos =[
                    'title'=>$this-> request ->getVar('title'),
                    'synopsis'=>$this-> request ->getVar('synopsis'),
                    'year'=>$this-> request ->getVar('year'),
                    'cover'=>$this-> request ->getVar('cover'),
                ];
                $movie-> insert ($datos);
         return $this ->response->redirect(site_url('/listMovie'));
    }

    public function borrar($id=null){
        $movie = new movieModel();
        $datosUser = $movie->where('id',$id)->first();

        $movie ->where('id',$id)->delete($id);
        return $this ->response->redirect(site_url('/listMovie'));

    }

    public function editar($id=null){

        $movie = new movieModel();
        $datos['movie'] = $movie -> where('id',$id) -> first();

        $datos['cabecera'] = view('template/cabecera');
        $datos['pie'] = view('template/piepagina');

        return view('movies/editMovie',$datos);
    }

    public function actualizar(){
        
        $movie = new movieModel();
        $datos =[
            'title'=>$this-> request ->getVar('title'),
            'synopsis'=>$this-> request ->getVar('synopsis'),
            'year'=>$this-> request ->getVar('year'),
            'cover'=>$this-> request ->getVar('cover'),
        ];
        $id = $this->request->getVar('id');

        $movie-> update ($id,$datos);
    return $this ->response->redirect(site_url('/listMovie'));
    }

}