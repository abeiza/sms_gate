<?php if(!defined('BASEPATH'))exit('No direct script access allowed');
	class Messages_Information extends CI_Controller{
		function __construct(){
			parent::__construct();
		}
		
		function index(){
			$cek = $this->session->userdata('success_data');
			if(empty($cek)){
				?>
				<script>
					window.location.href = '<?php echo base_url();?>';
				</script>
				<?php
			}else{
				$this->load->library('ci_phpgrid');
				$data['header'] = $this->ci_phpgrid->messages_information_header();
				$data['detail'] = $this->ci_phpgrid->messages_information_detail();
				
				$this->load->view('others/topt.php');
				$this->load->view('others/navigationt.php');
				$this->load->view('messages/messages_information',$data);
				$this->load->view('others/footert.php');
				$this->load->view('others/bottomt.php');
			}
		}
	}
/*End of file messages_information.php*/
/*Location:.application/controllers/messages/messages_information.php*/