<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class StudentController extends CI_Controller {

    public function index()
    { 
         $this->load->model('StudentModel','stud');   

         //step 2: Get the Data
         $student = $this->stud->student_data();
 
         //step 3: Display the data
         echo "Student name :" . $student;  
    }
    public function show($id){
        // echo $id;
        // student_showc
        $this->load->model('StudentModel','stud');   
        $select_stud= $this->stud->student_show($id);
        echo $select_stud;
    }
}

?>




























<!--  
//method 1
        //step 1: Load the model
        $this->load->model('StudentModel');   

        //step 2: Get the Data
        // $student = $this->StudentModel->student_data();

        //step 3: Display the data
        echo "$student";  




//method 2
            //step 1: Load the model
            $this->load->model('StudentModel');   


            //step 2: Get the Data 
            $student = new StudentModel;
            $student = $student -> student_data();

            //step 3: Display the data
            echo "$student";


//method 3  -->
