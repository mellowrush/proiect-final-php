<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Single_project extends CI_Controller {
   
    public function __construct() {
        parent::__construct();
        $this->load->model('project');
    }

    public function index() {
        $currentProjectID = $this->uri->segment(2);
        $currentProject = $this->project->getProjectByID($currentProjectID);
        $this->data['currentProject'] = $currentProject;
        $this->load->view('vwSingleProject',$this->data);
    }


}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */