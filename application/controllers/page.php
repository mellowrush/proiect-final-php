<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Page extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('page_model');
    }

    public function index() {
        $label = $this->uri->segment(2);

        $this->data['page'] = '';

        if($this->page_model->getPageByLabel($label)) 
            $this->data['page']= $this->page_model->getPageByLabel($label);

        $this->load->view('vwPage',$this->data);
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */