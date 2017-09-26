<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Datos extends Auth_Controller {
    public function __construct() {
        parent::__construct();//echo $this->session->userdata('idusuario');die;
        $this->load->library('session');
    }
 public function registroEmpleado() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('nombre', 'nombre', 'required');
        $this->form_validation->set_rules('apellido', 'apellido', 'required');
        $this->form_validation->set_rules('telefono', 'telefono', 'required|numeric');
        $this->form_validation->set_rules('password', 'password', 'required');
        $this->form_validation->set_rules('email', 'email', 'required');
        if ($this->form_validation->run()) {
            $data['nombre'] = $this->input->post('nombre');
            $data['apellido'] = $this->input->post('apellido');
            $data['telefono'] = $this->input->post('telefono');
            $data['password'] =md5($this->input->post('password')) ;
            $data['email'] = $this->input->post('email');
            $this->load->model('model_empleados');
            $this->model_empleados->crear($data);
            redirect('Datos/listarEmpleado');
        } else {
            $this->load->view('templates/header');
            $this->load->view('templates/aside');
            $this->load->view('registroEmpleado');
            $this->load->view('templates/footer');
        }
    }

    public function listarEmpleado() {
         
        $this->load->model('model_empleados');
        $info['informacion']=$this->model_empleados->listarEmpleados();
        $this->load->view('templates/header');
        $this->load->view('templates/aside');
        $this->load->view('listarEmpleado', $info);
        $this->load->view('templates/footer');
        
    }

    public function eliminarEmpleados($id) {
        $this->load->model('model_empleados');
        $this->model_empleados->eliminarEmpleados($id);
        redirect('Datos/listarEmpleado');
    }
    
    public function agregarComics() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('nombre', 'nombre', 'required');
        if (empty($_FILES['foto']['name'])) {
            $this->form_validation->set_rules('foto', 'foto', 'required');
        }else{
            $nameFoto=$_FILES['foto']['name'];
            $extensionFoto=explode(".",$nameFoto);
        }
        
        if ($this->form_validation->run()) {
            $this->load->library('upload');
            //carga la foto)
            $config['upload_path'] = 'imagenesComics';
            $config['allowed_types'] = 'jpg|png|jpeg|gif';
            $archivo = date('YmdHis');
            $config['file_name'] = 'foto'.$archivo.'.'.$extensionFoto[1];
            $config['file_ext_tolower'] = true;
            $this->upload->initialize($config);
            $this->upload->do_upload('foto');
            echo $this->upload->display_errors();
            
            $data['nombre'] = $this->input->post('nombre');
            $data['foto'] = $config['file_name'];
            $this->load->model('model_comics');
            $this->model_comics->crear($data);
            redirect('Datos/listarComics');
        } else {
            $this->load->view('templates/header');
        $this->load->view('templates/aside');
        $this->load->view('agregarComics');
        $this->load->view('templates/footer');   
        }
        
        
    }
    public function listarComics() {
         
            $this->load->model('model_comics');
            $data['comics']=$this->model_comics->listarComics();
            $this->load->view('templates/header');
            $this->load->view('templates/aside');
            $this->load->view('listarComics', $data);
            $this->load->view('templates/footer');
    }
    public function buscarTituloComics() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('nombre', 'Titulo', 'required');
        
        if ($this->form_validation->run()) {
            
            
            $nombre= $this->input->post('nombre');
            $this->load->model('model_comics');
            $data['comics']=$this->model_comics->buscarTituloComics($nombre);
            var_dump($data['comics']);
            if($data['comics']==NULL){
               redirect('Datos/comicsNoEncontrado'); 
            }else{
                $this->load->view('templates/header');
            $this->load->view('templates/aside');
            $this->load->view('listarcomicsEncontrado', $data);
            $this->load->view('templates/footer');
            }
            
        } else {
            $this->load->view('templates/header');
        $this->load->view('templates/aside');
        $this->load->view('buscarTituloComics');
        $this->load->view('templates/footer');   
        }
        

    }
    public function comicsNoEncontrado() {
            $this->load->view('templates/header');
            $this->load->view('templates/aside');
            $this->load->view('comicsNoEncontrado');
            $this->load->view('templates/footer');
    }
    public function profile() {
         $this->load->view('templates/header');
         $this->load->view('templates/aside');
         $this->load->view('profile');
         $this->load->view('templates/footer');
        
    }
    public function salir() {
        $this->load->library('session');
        $this->session->sess_destroy();
        redirect('/', 'location', 301);
    }
    
    
 
}
