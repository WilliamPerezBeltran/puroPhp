<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class model_comics extends CI_Model {
    
    public function crear($data) {
        $this->load->database();
        $this->db->insert('comics', $data);
    }
    public function listarComics() {
        $this->load->database();
        $query=$this->db->get('comics');
        return $query->result_array();
    }
    public function buscarTituloComics($nombre) {
        $this->load->database();
        $this->db->where('nombre', $nombre);
        $query = $this->db->get('comics');
        return $query->row_array();
    }
    
    

}

?>