<?php if(!defined('BASEPATH'))exit('No Direct Script Access Allowed');
	class Login_Controller extends CI_Controller{
		function __construct(){
			parent::__construct();
		}
		
		function index(){
			$cek = $this->session->userdata('success_data');
			if(empty($cek)){
				//$this->load->view('others/top.php');
				$this->load->view("login/login_view.php");
				//$this->load->view('others/bottom.php');
			}else{
				$this->load->view("others/navigation.php");
				$this->load->view("dashboard/dashboard_view.php");
			}
		}
		
		function login_proses(){
			$usr = $this->input->post('username');
			$pwd = $this->input->post('password');
			$this->form_validation->set_rules("username","Username Account","required");
			$this->form_validation->set_rules("password","Password Account","required");
			if($this->form_validation->run() == false){
				$this->index();
			}else{
				$this->model_app->login_data(md5($pwd),$usr);
			}
		}
		
		function logout_proses(){
			$cek = $this->session->userdata('success_data');
			if($cek){
				$this->session->sess_destroy();
				?>
				<script>
					window.location.href = '<?php echo base_url();?>index.php/';
				</script>
			<?php
			}else{
				?>
				<script>
					window.location.href = '<?php echo base_url();?>index.php/';
				</script>
			<?php
			}
		}
	}
/*End of file login_controller.php*/
/*Location:.application/controllers/login/login_controller.php*/