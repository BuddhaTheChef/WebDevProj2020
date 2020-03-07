<?php
//application/controllers/Tutorials.php

class Users extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->config->set_item('active','Tutorials');//sets CSS class as active for Tutorials
        $this->load->model('Tutorials_model');
        $this->load->helper('url_helper');
    }

    public function index()
    {
        $this->config->set_item('title','Tutorials List');
        $data['tutorials'] = $this->Tutorials_model->get_tutorials();
        $data['title'] = 'Tutorials';
        $this->load->view('Tutorials/index', $data);
    }

    public function view($id = 0)
    {
        if($id==0){show_404();}
        $this->config->set_item('title','Tutorials Page');
        $data['tutorials'] = $this->Tutorials_model->get_tutorials($id);
        if(empty($data['tutorials'])){show_404();}
        $data['title'] = $data['tutorials']['FirstName'] . $data['tutorials']['LastName'] . ' tutorials page';     
        $this->load->view('tutorials/view', $data);
    }
   
    public function create()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $data['title'] = 'Add your tutorials';

        $this->form_validation->set_rules('FirstName', 'First Name', 'required');
        $this->form_validation->set_rules('LastName', 'Last Name', 'required');
        $this->form_validation->set_rules('Email', 'Email', 'required');

        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('tutorials/create', $data);
        }
        else
        {
            $id = $this->Tutorials_model->create_tutorials();
            if($id !== false){//id of data returned
                feedback('Data entered successfully!','info');
                redirect('tutorials/view/' . $id);
            }else{//error
                feedback('Data NOT entered!','error');
                redirect('tutorials/create');
            }
        }
    }//end create()
    
    public function update($id=0)
    {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $data['title'] = 'Update Tutorials Data';

        $this->form_validation->set_rules('FirstName', 'First Name', 'required');
        $this->form_validation->set_rules('LastName', 'Last Name', 'required');
        $this->form_validation->set_rules('Email', 'Email', 'required');

        if ($this->form_validation->run() === FALSE)
        {
            $data['tutorials'] = $this->Tutorials_model->get_tutorials($id);
            $this->load->view('tutorials/update', $data);
        }
        else
        {
            $id = $this->Tutorials_model->update_tutorials($this->input->post('tutorialsID'));
            if($id !== false){//id of data returned
                feedback('Data updated successfully!','info');
                redirect('tutorials/view/' . $this->input->post('tutorialsID'));
            }else{//error
                feedback('Data NOT updated!','error');
                redirect('tutorials/update/' . $this->input->post('tutorialsID'));
            }
        }
    }//end update()
    
    public function delete($id=0){
        $myReturn = $this->Tutorials_model->delete_tutorials($id);
        if($myReturn !== false){//delete successful
            feedback('Data deleted successfully!','info');
            redirect('tutorials/');
        }else{//error
            feedback('Data NOT deleted!','error');
            redirect('tutorials/');
        }
    }//end delete()

}