<?php

class StudentModel extends CI_Model
{
   
    public function student_data()
    {
        $studclass=$this->student_class();
        return $stud_name="kaustubh". "<br>Class :". $studclass;
    }

    private function student_class(){
        return $stud_class="MCA";



    }
    public function student_show($id){
        if($id == '1')
        { return $result= "User 1";}
        else if($id == '2')
        { return $result= "User 2";}
        else
        { return $result = $id." is not a Valid User";}
    }

    public function demo(){
        return $title ="From StudentModel- demo";
    }




}

?>