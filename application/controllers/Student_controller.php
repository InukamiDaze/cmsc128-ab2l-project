<?php
    if(!defined('BASEPATH')) exit('No direct script access allowed');
    
    class Student_controller extends CI_Controller{

        function __construct(){
            parent::__construct();

            $this->load->model('Student_model');

        }

        public function index(){
            $data['user_list'] = $this->users_model->get_all_users();

            $this->load->view('Student_view_all', $data);
        }
        
        public function add_form(){
            $this->load->view('Student_insert');

        }
        
        public function insert_new_user(){
            $udata['name'] = $this->input->post('name');
            $udata['email'] = $this->input->post('email');
            $udata['address'] = $this->input->post('address');
            $udata['mobile'] = $this->input->post('mobile');

            $res = $this->Student_model->insert_student_to_db($udata);

            //change this
            if($res){
                header('location:'.base_url()."index.php/users/".$this->index());

            }

        }
        
        public function update(){
            $mdata['name'] = $_POST['name'];
            $mdata['email'] = $_POST['email'];
            $mdata['address'] = $_POST['address'];
            $mdata['mobile'] = $_POST['mobile'];

            $res = $this->Student_model->update_info($mdata, $_POST['id']);

            if($res){
                header('location:'.base_url()."index.php/users/".$this->index());
            }

        }
        
        public function delete($id){
            $this->users_model->delete_a_student($id);

            $this->index();
        }

    }    
?>

