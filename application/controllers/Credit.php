<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Credit extends CI_Controller {

    public function index()
    {
        $this->load->model('model_credit');
        $data['credits'] = $this->model_credit->getAllCredit();
        $this->load->view('liste',$data);
    }

    public function credit()
    {
        $id_Credit =  $this->input->post('credit');
        $this->load->model('model_credit');
        $credits = $this->model_credit->getAllCredit();
        for ($i=0; $i < count($credits); $i++) { 
            if ($id_Credit == $credits[$i]['id_Credit']) {
                $this->model_credit->insertGestionCredit($id_Credit);
            }else {
                // $data['error'] = "Veuillez selectionner l'un des montant ci-dessous !";
                // $this->load->view('credit',$data);
                redirect('credit');
            }
        } 
    }

    public function acceptCredit()
    {
        
    }
}

?>