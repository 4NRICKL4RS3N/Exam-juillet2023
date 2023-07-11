<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Suggestion extends CI_Controller {

    public function suggerer() {
        $this->load->model('model_regime');
        echo $type = $this->input->post('type'); 
        echo $age = $this->input->post('age');
        echo $poids_actuel = $this->input->post('poids');
        echo $poids_new = $this->input->post('newPoids');
        echo $diff = ($poids_new-$poids_actuel)*1000;
        var_dump($this->model_regime->suggestionPlat($type, $diff));
    }

}

?>