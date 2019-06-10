<?php


class Medico_Model extends CI_Model{


    public function get_medico(){
        if(!empty($this->input->get("search"))){
          $this->db->like('nome', $this->input->get("search"));
          $this->db->or_like('crm', $this->input->get("search")); 
        }
        $query = $this->db->get("medicos");
        return $query->result();
    }


    public function insert_item()
    {    
        $data = array(
            'id' => $this->input->post('id'),
            'nome' => $this->input->post('nome'),
            'crm' => $this->input->post('crm'),
            'telefone' => $this->input->post('telefone'),
            'cidade' => $this->input->post('cidade'),
            'estado' => $this->input->post('estado'),
            'epecialidade_one' => $this->input->post('especialidade_one'),
            'especialidade_two' => $this->input->post('especilaidade_two')
        );
        return $this->db->insert('medicos', $data);
    }


    public function update_item($id) 
    {
        $data=array(
            'id' => $this->input->post('id'),
            'nome' => $this->input->post('nome'),
            'crm' => $this->input->post('crm'),
            'telefone' => $this->input->post('telefone'),
            'cidade' => $this->input->post('cidade'),
            'estado' => $this->input->post('estado'),
            'epecialidade_one' => $this->input->post('especialidade_one'),
            'especialidade_two' => $this->input->post('especilaidade_two')
        );
        if($id==0){
            return $this->db->insert('medicos',$data);
        }else{
            $this->db->where('id',$id);
            return $this->db->update('medicos',$data);
        }        
    }


    public function find_item($id)
    {
        return $this->db->get_where('medicos', array('id' => $id))->row();
    }


    public function delete_item($id)
    {
        return $this->db->delete('medicos', array('id' => $id));
    }
}
?>