<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class model_empleados extends CI_Model {
    
    public function crear($data) {
        $this->load->database();
        $this->db->insert('empleados', $data);
    }
    public function listarEmpleados() {
        $this->load->database();
        $query=$this->db->get('empleados');
        return $query->result_array();
    }
    public function eliminarEmpleados($id) {
        $this->load->database();
        $this->db->where('id', $id);
        $this->db->delete('empleados');
    }
    public function getInfoLogin($pPassword,$pEmail) {
        $this->load->database();
        $this->db->where('password',$pPassword);
        $this->db->where('email',$pEmail);
        $query=$this->db->get('empleados');
        return $query->result_array();
    }
    

}

?>