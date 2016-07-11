<?php if(!defined('BASEPATH'))exit('No Direct Script Access Allowed'); 
	class Master_Area_Controller extends CI_Controller{
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
			}else if($this->session->userdata('area') == 'all'){
				$this->load->library('ci_phpgrid');
				$data['phpgrid'] = $this->ci_phpgrid->master_area();
				
				$this->load->view('others/topt.php');
				$this->load->view('others/navigationt.php');
				$this->load->view('master/master_area_view',$data);
				$this->load->view('others/footert.php');
				$this->load->view('others/bottomt.php');
			}else{
				?>
				<script>
					window.location.href = '<?php echo base_url();?>';
				</script>
				<?php
			}
		}
	}
/*End of file master_area_controller.php*/
/*Location:.application/controllers/master/master_area_controller.php*/