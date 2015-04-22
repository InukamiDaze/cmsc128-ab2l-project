<?php
    class Student_model extends CI_Model {
    
        function __construct(){
            parent::__construct();
    
            $this->load->database("students");
        }
    
        public function get_all_users(){
            $query = $this->db->get('students');

            return $query->result();
        }
        
        public function insert_student_to_db($data){
            return $this->db->insert('students', $data);
        
        }
        
        public function getById($id){
            $query = $this->db->get_where('students',array('id'=>$id));
            return $query->row_array();
        }
        
        public function edit(){
            $id = $this->uri->segment(3);
            $data['students'] = $this->Student_model->getById($id);
            $this->load->view('Student_edit', $data);
        }
        
        public function update_info($data,$id){
            $this->db->where('students.id',$id);

            return $this->db->update('students', $data);
        }

        public function delete_a_student($id){
            $this->db->where('students.id',$id);

            return $this->db->delete('students');
        }



    }
 
?>