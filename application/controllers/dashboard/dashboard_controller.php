<?php if(!defined('BASEPATH'))exit('No Direct Script Access Alowed');
	class Dashboard_Controller extends CI_Controller{
		function __construct(){
			parent::__construct();
		}
		
		function index(){
			$cek = $this->session->userdata('success_data');
			if(!empty($cek)){
				$this->load->library('ci_phpgrid');
				$data['phpgrid'] = $this->ci_phpgrid->messages_original();
				
				$this->load->view('others/topt.php');
				$this->load->view('others/navigationt.php');
				$this->load->view('messages/messages_original',$data);
				//$this->load->view('dashboard/dashboard_view');
				$this->load->view('others/footert.php');
				$this->load->view('others/bottomt.php');
			}else{
				Header('Location:'.base_url());
			}
		}
	}
/*End of file dashboard_controller.php*/
/*Location:.application/dashboard/dashboard_controller.php*/