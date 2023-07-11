<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Suggestion extends CI_Controller {

    public function suggerer() {
        // var_dump($this->session->get_userdata('thisuser'));
        $this->load->model('model_regime');
        echo $type = $this->input->post('type'); 
        echo $age = $this->input->post('age');
        echo $poids_actuel = $this->input->post('poids');
        echo $poids_new = $this->input->post('newPoids');
        echo $diff = ($poids_new-$poids_actuel)*1000;
        var_dump($this->session->get_userdata('user')['user']);
        $listeRegime = $this->model_regime->suggestionPlat($type, $diff);
        $idRegime = $this->model_regime->insertRegime($listeRegime, $this->session->get_userdata('user')['user']);
        redirect('suggestion/regime/'.$idRegime);
    }
    
    public function regime($idRegime) {
        $this->load->model('model_regime');
        $liste = $this->model_regime->getConstitutionRegime($idRegime);
        $data = array(
            'liste' => $liste,
        );
        $this->load->view('liste', $data);
    }

}

?>

;