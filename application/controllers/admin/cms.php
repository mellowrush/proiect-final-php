<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Cms extends CI_Controller {
/**
 * ark Admin Panel for Codeigniter 
 * Author: Abhishek R. Kaushik
 * downloaded from http://devzone.co.in
 *
 */
    public function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('page_model');
         if (!$this->session->userdata('is_admin_login')) {
            redirect('admin/home');
        }
    }

    public function index() {
        $this->data['page'] = 'cms';
        $this->data['cms'] = $this->page_model->getAllPages();
        $this->load->view('admin/cms/vwManageCMS',$this->data);
    }

    public function add_cms() {
        $this->data['page'] = 'cms';
        
        $this->form_validation->set_rules('label', 'Page label', 'required|max_length[255]');            
        $this->form_validation->set_rules('content', 'Content', 'required');
        $this->form_validation->set_error_delimiters('<br /><span class="error">', '</span>');


        if ($this->form_validation->run() == FALSE) {// validation hasn't been passed
            $this->load->view('admin/cms/vwAddCMS',$this->data);
        } else { 
                
                $form_data = array(
                            'label' => @$this->input->post('label'),
                            'content' => @$this->input->post('content'),
                            'dateAdded' => date("Y-m-d H:i:s"),
                            'dateModified' => date("Y-m-d H:i:s")
                    );
            
                if ($this->page_model->SaveForm($form_data) == TRUE) { 
                    redirect('admin/cms');   
                } 
            }  

    }

    public function edit_cms($id='') {
        $this->data['page'] = 'Edit project';
        $this->form_validation->set_rules('label', 'Page label', 'required|max_length[255]');            
        $this->form_validation->set_rules('content', 'Content', 'required');
        $this->form_validation->set_error_delimiters('<br /><span class="error">', '</span>');

        $currentProjectID = $this->uri->segment(4);
        $this->data['cms'] = $this->page_model->getPageByID($currentProjectID);


        if ($this->form_validation->run() == FALSE) {// validation hasn't been passed
                $this->load->view('admin/cms/vwEditCMS',$this->data);
        } else { 
                
                $form_data = array(
                            'label' => @$this->input->post('label'),
                            'content' => @$this->input->post('content'),
                            'dateModified' => date("Y-m-d H:i:s")
                    );
            
                if ($this->page_model->EditForm($form_data, $currentProjectID) == TRUE) { 
                    redirect('admin/cms');   
                } 
            }  
    }
   
    
    public function update_cms() {
          
           $id = $_POST['pst_id'];
           $new_content = $_POST['tst_content'];
            
        if(isset($id) && !empty($id) ){
             $sql = "update tbl_cms set `content`='".$new_content."' where id=".$id;
             $val = $this->db->query($sql,array($new_content ,$id ));
             redirect('admin/cms/edit_cms/'.$id);
        }
        
        $this->data['page'] = 'cms';
        $this->load->view('admin/cms/vwEditCMS',$this->data);
    }

    public function delete() {
       $currentPage = $this->uri->segment(4);
       $this->page_model->deletePageByID($currentPage);
       redirect('admin/cms');
    }
    

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */