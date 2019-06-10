<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_estados_cidades extends CI_Model{

function __construct()
{
parent::__construct();
}

public function retorna_estados()
{

$this->db->order_by("nome", "asc");
$consulta = $this->db->get("estado");

return $consulta;
}


public function retorna_cidade_by_estado() {

    $id_departamento = $this->input->post("id_estado");
    
    $this->db->where("estado", $id_departamento);
    
    $this->db->order_by("nome", "asc");
    
    $consulta = $this->db->get("cidade");
    
    return $consulta;
    }

}