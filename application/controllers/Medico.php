<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Medico extends CI_Controller {


   public $medico;


   /**
    * Get All Data from this method.
    *
    * @return Response
   */
   public function __construct() {
      parent::__construct(); 


      $this->load->library('form_validation');
      $this->load->library('session');
      $this->load->model('medico_Model');
 


      $this->medico = new Medico_Model();     
   }


   /**
    * Display Data this method.
    *
    * @return Response
   */
   public function index()
   {
       $data['data'] = $this->medico->get_medico();
   
       $this->load->view('theme/header');       
       $this->load->view('medico/list',$data);
       $this->load->view('theme/footer');
   }


   /**
    * Show Details this method.
    *
    * @return Response
   */
   public function show($id)
   {
      $item = $this->medico->find_item($id);


      $this->load->view('theme/header');
      $this->load->view('medico/show',array('item'=>$item));
      $this->load->view('theme/footer');
   }

   public function create()
   {
    $this->load->model("m_estados_cidades");

    $estados = $this->m_estados_cidades->retorna_estados();

    $option = "<option value=''></option>";
          foreach($estados -> result() as $linha) {
          $option .= "<option value='$linha->id'>$linha->nome</option>"; 
}

     $data['options_estados'] =
      
      $this->load->view('theme/header');
      $this->load->view('medico/create',$data);
      $this->load->view('theme/footer');   
   }


   /**
    * Store Data from this method.
    *
    * @return Response
   */
   public function store()
   {
        $this->form_validation->set_rules('nome', 'Nome', 'required');
        $this->form_validation->set_rules('crm', 'Crm', 'required');
        $this->form_validation->set_rules('especialidade_one', 'Especialidade', 'required');


        if ($this->form_validation->run() == FALSE){
            $this->session->set_flashdata('errors', validation_errors());
            redirect(base_url('medico/create'));
        }else{
           $this->itemCRUD->insert_item();
           redirect(base_url('medico'));
        }
    }


   /**
    * Edit Data from this method.
    *
    * @return Response
   */
   public function edit($id)
   {
       $item = $this->medico->find_item($id);


       $this->load->view('theme/header');
       $this->load->view('medico/edit',array('item'=>$item));
       $this->load->view('theme/footer');
   }


   /**
    * Update Data from this method.
    *
    * @return Response
   */
   public function update($id)
   {
        $this->form_validation->set_rules('nome', 'Nome', 'required');
        $this->form_validation->set_rules('crm', 'Crm', 'required');
        $this->form_validation->set_rules('especialidade_one', 'Especialidade', 'required');



        if ($this->form_validation->run() == FALSE){
            $this->session->set_flashdata('errors', validation_errors());
            redirect(base_url('medico/edit/'.$id));
        }else{ 
          $this->medico->update_item($id);
          redirect(base_url('medico'));
        }
   }


   /**
    * Delete Data from this method.
    *
    * @return Response
   */
   public function delete($id)
   {
       $item = $this->medico->delete_item($id);
       redirect(base_url('medico'));
   }

   public function busca_cidade_by_estado(){

    $this->load->model("m_estados_cidades");
    
    $produtos = $this->m_estados_cidades->retorna_cidade_by_estado();
    
    $option = "<option value=''></option>";
    foreach($cidade -> result() as $linha) {
    $option .= "<option value='$linha->cidade_id'>$linha->cidade_nome</option>"; 
    }
    
    echo $option;
    }
}