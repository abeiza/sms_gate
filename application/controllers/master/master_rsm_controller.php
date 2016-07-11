<?php if(!defined('BASEPATH'))exit('No Direct Script Access Allowed'); 
	class Master_Rsm_Controller extends CI_Controller{
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
				$data['phpgrid'] = $this->ci_phpgrid->master_rsm();
				
				$this->load->view('others/top.php');
				$this->load->view('others/side-navigation.php');
				$this->load->view('others/top-navigation.php');
				$this->load->view('master/master_rsm_view',$data);
				$this->load->view('others/footer.php');
				$this->load->view('others/bottom2.php');
			}
		}
	}
/*End of file master_rsm_controller.php*/
/*Location:.application/controllers/master/master_rsm_controller.php*/