<?php if(!defined('BASEPATH'))exit('No Direct Script Access Allowed');
	class Welcome extends CI_Controller{
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
				$this->load->library('ci_phpgrid');
				$data['phpgrid'] = $this->ci_phpgrid->messages_original();
				
				$this->load->view('others/topt.php');
				$this->load->view('others/navigationt.php');
				$this->load->view('messages/messages_original',$data);
				$this->load->view('others/footert.php');
				$this->load->view('others/bottomt.php');
			}
		}
	}
/*End of file welcome.php*/
/*Location:.application/controllers/welcome.php*/