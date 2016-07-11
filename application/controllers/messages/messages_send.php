<?php if(!defined('BASEPATH'))exit('No direct script access allowed');
	class Messages_Send extends CI_Controller{
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
				$page = $this->uri->segment(4);
				$limit = 5;
				if(!$page){
					$offset = 0;
				}else{
					$offset = $page;
				}
				if($this->session->userdata('level') != 'programmer'){
					$sms = $this->db->query("select * from new_outbox where new_outbox_admin='".$this->session->userdata('nama')."'");
				}else{
					$sms = $this->db->query("select * from new_outbox");
				}
				
				$config['total_rows'] = $sms->num_rows();
				$config['base_url'] = base_url()."index.php/messages/messages_send/index/";
				$config['per_page'] = $limit;
				$config['uri_segment'] = 4;
				$config['full_tag_open'] = "<div class='pagination'><ul>";
				$config['full_tag_close'] = "</ul></div>";
				
				$config['next_link'] = "Next &gt;";
				$config['next_tag_open'] = "<li>";
				$config['next_tag_close'] = "</li>";
				
				$config['prev_link'] = "&lt; Prev";
				$config['prev_tag_open'] = "<li>";
				$config['prev_tag_close'] = "</li>";
				
				$config['first_link'] = "<span class='paging-arrow'>&laquo; First</span>";
				$config['first_tag_open'] = "<li>";
				$config['first_tag_close'] = "</li>";
				
				$config['last_link'] = "<span class='paging-arrow'>Last &raquo;</span>";
				$config['last_tag_open'] = "<li>";
				$config['last_tag_close'] = "</li>";

				$config['cur_tag_open'] = "<li><span style='color:#fff;background-color:#666; padding: 5px 10px;'>";
				$config['cur_tag_close'] = "</span></li>";
				
				$config['num_tag_open'] = "<li>";
				$config['num_tag_close'] = "</li>";
				
				$config['num_links'] = 2;
				
				$this->pagination->initialize($config);
				$data['paging'] = $this->pagination->create_links();
				
				if($this->session->userdata('level') != 'programmer'){
					$data['sms'] = $this->db->query("select * from (select row_number() over (order by new_outbox_id asc) as rownum, * from new_outbox) new_outbox where new_outbox.new_outbox_admin='".$this->session->userdata('nama')."' and new_outbox.rownum > ".$offset." AND new_outbox.rownum <= ".$hasil = $offset + $limit." order by new_outbox.new_outbox_id desc");
				}else{
					$data['sms'] = $this->db->query("select * from (select row_number() over (order by new_outbox_id asc) as rownum, * from new_outbox) new_outbox where new_outbox.rownum > ".$offset." AND new_outbox.rownum <= ".$hasil = $offset + $limit." order by new_outbox.new_outbox_id desc");
				}
				$data['total_sms'] = $sms->num_rows();
				$this->load->view('others/topt.php');
				$this->load->view('others/navigationt.php');
				$this->load->view('messages/messages_send',$data);
				$this->load->view('others/footert.php');
				$this->load->view('others/bottomt.php');
			}
		}
		
		function send_act(){
			$cek = $this->session->userdata('success_data');
			if(empty($cek)){
				?>
				<script>
					window.location.href = '<?php echo base_url();?>';
				</script>
				<?php
			}else{
				$this->form_validation->set_rules('message', 'Message Column', 'required');
				if ($this->form_validation->run()) {
					$sms = $this->input->post('message');
					$to = $this->input->post('no');
					if(strlen($sms) <= 153){
						//$query = $this->model_app->get_query("select * from Table_BA");
						//foreach($query->result() as $con){
							$data['DestinationNumber'] = $to;//$con->CONTACT;
							$data['TextDecoded'] = $sms;
							$data['CreatorID'] = 'Gammu';
							$insert = $this->model_app->insert_datamy('outbox',$data);
							
							$data1['new_outbox_no'] = $to;//$con->CONTACT;
							$data1['new_outbox_text'] = $sms;
							$data1['new_outbox_admin'] = $this->session->userdata('nama');
							
							date_default_timezone_set('Asia/Jakarta');
							$data1['new_outbox_in'] = date("Y-m-d H:i:s");
							$insert2 = $this->model_app->insert_data('new_outbox', $data1);
							
							if(!$insert && !$insert2){
								$this->session->set_flashdata("send_result",'<div><span style="color:#F17A72; font-size:12px;">*Sorry Your Message Failed to be Processed.. Please Try Again.. </span></div>');
								Header("Location:".base_url()."index.php/messages/messages_send/");
							}else if($insert && !$insert2){
								$this->session->set_flashdata("send_result",'<div><span style="color:#5CB85C; font-size:12px;">*Your Message was Sent Successfully But Didnt Save</span></div>');
								Header("Location:".base_url()."index.php/messages/messages_send/");
							}else if(!$insert && $insert2){
								$this->session->set_flashdata("send_result",'<div><span style="color:#5CB85C; font-size:12px;">*Your Message has been Successfully Saved But Didnt Send</span></div>');
								Header("Location:".base_url()."index.php/messages/messages_send/");
							}else if($insert && $insert2){
								$this->session->set_flashdata("send_result",'<div><span style="color:#5CB85C; font-size:12px;">*Send Message was Successfully</span></div>');
								Header("Location:".base_url()."index.php/messages/messages_send/");
							}
						//}
					}else{
						$this->session->set_flashdata("send_result",'<div><span style="color:#F17A72; font-size:12px;">*Sorry character maximum only 160 character.. Please check your message.. </span></div>');
						Header("Location:".base_url()."index.php/messages/messages_send/");
					}
				}else{
					$this->index();
				}	
			}
		}
	}
/*End of file messages_send.php*/
/*Location:.application/controllers/messages/messages_send.php*/