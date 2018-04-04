<?php
class Curd extends CI_Controller{
    function __construct() {
        parent::__construct();
        $this->load->model('inse');
        $this->load->library('form_validation');
        $this->load->helper('url');
        $this->load->library('email');
        $this->load->library('session');
        }
    public  function index(){
       $data['print']=$this->inse->all();
       $this->load->view('view',$data);
    }
    public function insert(){
        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');

        //Validating Name Field
        $this->form_validation->set_rules('name', 'name', 'required|min_length[5]|max_length[15]');
        
        //Validating Email Field
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[news.email]');
        $this->form_validation->set_rules('phone', 'phone', 'required|min_length[9]');
        
       
        
        if ($this->form_validation->run() == FALSE) {
        $this->load->view('insert');
        } else {
        //Setting values for tabel columns
        $data['name'] = $this->input->post('name');
        $data['email'] =$this->input->post('email');
        $data['address']= $this->input->post('phone');
       $test= $this->inse->inser($data);
        if($test){
           
            $this->session->set_flashdata('success_msg', 'Registered successfully.Now login to your account.');
            $this->load->view("view.php");
          }
          else{
          
            $this->session->set_flashdata('error_msg', 'Error occured,Try again.');
            redirect('index.php/Curd/insert');
          }
       
        }
    }   
        public function store(){
            $user_login=array(
                'name'=>$this->input->post('name'),
                'email'=>$this->input->post('email')
                );
                
                $data=$this->inse->login($user_login['name'],$user_login['email']);
                if($data){
                    $this->session->set_userdata('name',$data['name']);
                    $this->session->set_userdata('email',$data['email']);
                    $this->session->set_userdata('address',$data['address']);
                   
            
                    $this->load->view('user_profile.php');
                }
                else{
                    $this->session->set_flashdata('error_msg', 'Error occured,Try again.');
                    $this->load->view("login.php");
            
                  }
        }
        public function del($email){
            $this->inse->del($email);
            redirect('index.php', 'refresh');
        }


        public function user_logout(){

            $this->session->sess_destroy();
            redirect('index.php', 'refresh');
          }
    
}
?>