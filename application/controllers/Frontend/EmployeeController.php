<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EmployeeController extends CI_Controller {

    public function index()
    { 
        $this->load->view('template/header');  

        $this->load->model('EmployeeModel');
        //method 1: to get result in $data['employee'] ,pass it to the employee view with $data
        // $data['employee']=$this->EmployeeModel->getEmployee();
        // $this->load->view('frontend/employee', $data);    
        $employee=$this->EmployeeModel->getEmployee();
        $this->load->view('frontend/employee', ['employee' =>$employee]); 


        $this->load->view('template/footer'); 
 
    }
     
    public function create()
    {
        $this->load->view('template/header');   
        $this->load->view('frontend/create'); 
        $this->load->view('template/footer');   
    }

    public function store()
    {

        $this->form_validation->set_rules('first_name','First Name','required');
        $this->form_validation->set_rules('last_name','Last Name','required');
        $this->form_validation->set_rules('phone','Contact information','required');
        $this->form_validation->set_rules('email','valid email address','required');

        if($this->form_validation->run())
        {
            $data = [
                'first_name'=> $this->input->post('first_name'),
                'last_name'=> $this->input->post('last_name'),
                'phone'=> $this->input->post('phone'),
                'email'=> $this->input->post('email')
            ];
            $this->load->model('EmployeeModel','emp');
            $this->emp->insertEmployee($data);
            redirect(base_url('employee'));

        }
        else
        {
           $this->create();
        //    redirect(base_url('employee/add'));
        }
        // var_dump($data);
    }

    public function edit($id)
    {
        $this->load->view('template/header'); 
        $this->load->model('EmployeeModel');
        $data['employee'] = $this->EmployeeModel->editEmployee($id);  
        $this->load->view('frontend/edit', $data); 
        $this->load->view('template/footer');  
    }
}

?>