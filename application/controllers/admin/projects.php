<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Projects extends CI_Controller {
    private $custom_errors = array();
    public function __construct() {
        parent::__construct();
        $this->load->library('form_validation', 'image_lib');
        $this->load->model('project');

         if (!$this->session->userdata('is_admin_login')) {
            redirect('admin/home');
        }
    }
    

    public function index() {
        $this->data['page'] = 'projects';
        $this->data['projects'] = $this->project->getAllProjects();

        $this->load->view('admin/project/vwListProjects',$this->data);
    }

    public function create() {
        $this->load->library('upload');
        $this->data['page'] = 'Create project';
        $this->form_validation->set_rules('title', 'Title', 'required|max_length[255]');            
        $this->form_validation->set_rules('url', 'URL', 'required|xss_clean|max_length[255]');          
        $this->form_validation->set_rules('description', 'Description', 'required');
        $this->form_validation->set_error_delimiters('<br /><span class="error">', '</span>');


        if ($this->form_validation->run() == FALSE) {// validation hasn't been passed
                $this->load->view('admin/project/vwCreateProject',$this->data);
        } else { // passed validation proceed to post success logic
                
                // build array for the model
                $form_data = array(
                            'projectTitle' => @$this->input->post('title'),
                            'projectURL' => @$this->input->post('url'),
                            'projectAuthor' => @$this->input->post('author'),
                            'projectDescription' => @$this->input->post('description'),
                            'dateUpdated' => date("Y-m-d H:i:s")
                    );

                $this->upload->initialize(array(
                    'encrypt_name' => TRUE,
                    'upload_path'   => 'uploads/',
                    'allowed_types' => 'jpg|jpeg|gif|png',
                    'max_size' => 4000,
                    'remove_spaces' => TRUE,
                ));
               
                //upload thumbnail
                if($this->upload->do_multi_upload('thumbnail')) {
                    #$data_to_store['img'] = implode(';', $_FILES['featuredimg']['name']);
                    $newthumbnailname = @$this->upload->data();
                    $form_data['projectThumbnail'] = $newthumbnailname['file_name'];
                    $this->session->set_flashdata('flash_message', $this->upload->get_multi_upload_data());
                }
                else {
                    $this->session->set_flashdata('flash_message', 'not_updated');
                }

            
                if ($this->project->SaveForm($form_data) == TRUE) {
                    redirect('admin/projects');  
                } 
        }  
    }

    public function edit() {
        $this->load->library('upload');

        $this->data['page'] = 'Edit project';
        $this->form_validation->set_rules('title', 'Title', 'required|max_length[255]');            
        $this->form_validation->set_rules('url', 'URL', 'required|xss_clean|max_length[255]');          
        $this->form_validation->set_rules('description', 'Description', 'required');
        $this->form_validation->set_error_delimiters('<br /><span class="error">', '</span>');

        $currentProjectID = $this->uri->segment(4);
        $this->data['currentProject'] = $this->project->getProjectByID($currentProjectID);


        if ($this->form_validation->run() == FALSE) {// validation hasn't been passed
                $this->load->view('admin/project/vwEditProject',$this->data);
        } else { 
                
                $form_data = array(
                            'projectTitle' => @$this->input->post('title'),
                            'projectURL' => @$this->input->post('url'),
                            'projectAuthor' => @$this->input->post('author'),
                            'projectDescription' => @$this->input->post('description'),
                            'dateUpdated' => date("Y-m-d H:i:s")
                    );

                $this->upload->initialize(array(
                    'encrypt_name' => TRUE,
                    'upload_path'   => 'uploads/',
                    'allowed_types' => 'jpg|jpeg|gif|png',
                    'max_size' => 4000,
                    'remove_spaces' => TRUE,
                ));
               
                //upload thumbnail
                if($this->upload->do_multi_upload('thumbnail')) {
                    #$data_to_store['img'] = implode(';', $_FILES['featuredimg']['name']);
                    $newthumbnailname = @$this->upload->data();
                    $form_data['projectThumbnail'] = $newthumbnailname['file_name'];
                    $this->session->set_flashdata('flash_message', $this->upload->get_multi_upload_data());
                }
                else {
                    $this->session->set_flashdata('flash_message', 'not_updated');
                }

            
                if ($this->project->EditForm($form_data, $currentProjectID) == TRUE) { 
                    redirect('admin/projects');   
                } 
            }  
    }

    public function delete() {
       $currentProjectID = $this->uri->segment(4);
       $this->project->deleteProjectByID($currentProjectID);
       redirect('admin/projects');
    }


}
