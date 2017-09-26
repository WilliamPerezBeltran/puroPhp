<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    public function index() {
        $this->load->library('session');
        $this->load->library('form_validation');
        $this->form_validation->set_rules('password', 'password', 'required|max_length[8]');
        $this->form_validation->set_rules('email', 'email', 'required');
        if ($this->form_validation->run()) {
            $data['password'] = md5($this->input->post('password'));
            $data['email'] = $this->input->post('email');
            $this->load->model('model_empleados');
            $resultado = $this->model_empleados->getInfoLogin($data['password'], $data['email']);
            if (count($resultado) == 1) {
                $newdata = array(
                    'usuario' => true,
                    'idUsuario' => $resultado[0]['ID'],
                    'nombre' => $resultado[0]['nombre'],
                );
                $this->session->set_userdata($newdata);
                redirect('datos/profile');
            } else {
                
            }
        }



        $this->load->view('login');
    }

}
