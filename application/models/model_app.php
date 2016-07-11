<?php if(!defined('BASEPATH'))exit('No direct script access allowed');
	class Model_App extends CI_Model{
		function __construct(){
			parent::__construct();
		}
		
		function get_data($table){
			//$this->load->database('default',FALSE,TRUE);
			return $this->db->get($table);
		}
		
		function get_data_limit($table,$limit,$offset){
			//$this->load->database('default',FALSE,TRUE);
			return $this->db->get($table, $limit, $offset);
		}
		
		function get_query($data){
			$this->load->database('default',FALSE,TRUE);
			return $this->db->query($data);
		}
		
		function get_where($table,$pk,$id){
			//$this->load->database('default',FALSE,TRUE);
			$this->db->where($pk,$id);
			return $this->db->get($table);
		}
		
		function get_where_limit($table,$pk,$id,$limit,$offset){
			//$this->load->database('default',FALSE,TRUE);
			$this->db->where($pk,$id);
			return $this->db->get($table,$limit,$offset);
		}
		
		function get_data_multi_join($table1, $table2, $table3, $table4, $pk2, $pk3, $pk4){
			//$this->load->database('default',FALSE,TRUE);
			$this->db->select('*');
			$this->db->from($table1);
			$this->db->join($table2, $pk2);
			$this->db->join($table3, $pk3);
			$this->db->join($table4, $pk4);
			return $this->db->get();
		}
		
		function get_data_multi_join_where($table1, $table2, $table3, $table4, $pk2, $pk3, $pk4, $pk5, $pk6){
			//$this->load->database('default',FALSE,TRUE);
			$this->db->select('*');
			$this->db->from($table1);
			$this->db->where($pk5,$pk6);
			$this->db->join($table2, $pk2);
			$this->db->join($table3, $pk3);
			$this->db->join($table4, $pk4);
			return $this->db->get();
		}
		
		function get_data_multi_join_limit($table1, $table2, $table3, $table4, $pk2, $pk3, $pk4, $limit, $offset){
			//$this->load->database('default',FALSE,TRUE);
			$this->db->select('*');
			$this->db->from($table1);
			$this->db->join($table2, $pk2);
			$this->db->join($table3, $pk3);
			$this->db->join($table4, $pk4);
			$this->db->limit($limit,$offset);
			return $this->db->get();
		}
		
		function get_two_multi_join_limit($table1, $table3, $table4, $pk3, $pk4, $limit, $offset){
			//$this->load->database('default',FALSE,TRUE);
			$this->db->select('*');
			$this->db->from($table1);
			$this->db->join($table3, $pk3);
			$this->db->join($table4, $pk4);
			$this->db->limit($limit,$offset);
			return $this->db->get();
		}
		
		function get_two_multi_join_where($table1, $table2, $table4, $pk2, $pk4, $pk5, $pk6){
			//$this->load->database('default',FALSE,TRUE);
			$this->db->select('*');
			$this->db->from($table1);
			$this->db->where($pk5,$pk6);
			$this->db->join($table2, $pk2);
			$this->db->join($table4, $pk4);
			return $this->db->get();
		}
		
		function update_data($table, $pk, $id, $data){
			//$this->load->database('default',FALSE,TRUE);
			$this->db->where($pk,$id);
			return $this->db->update($table,$data);
		}
		
		function delete_data($table, $pk, $id){
			//$this->load->database('default',FALSE,TRUE);
			$this->db->where($pk,$id);
			return $this->db->delete($table);
		}
		
		function login_data($pwd,$user){
			//$this->load->database('default',FALSE,TRUE);
			$data = $this->db->query("SELECT * FROM tbl_pegawai WHERE username='".$user."' AND password='".$pwd."'");
			if($data->num_rows() > 0){
				foreach($data->result() as $db){
					$sess_data['success_data'] = 'statusloginsuccess';
					$sess_data['kd_pegawai'] = $db->kd_pegawai;
					$sess_data['nama'] = $db->nama;
					$sess_data['username'] = $db->username;
					$sess_data['password'] = $db->password;
					$sess_data['level'] = $db->posisi;
					$sess_data['area'] = $db->area;
					if($db->posisi == 'tl'){
						$posisi = $this->db->query("SELECT * FROM Ms_TL, Ms_KBA WHERE Ms_TL.ID_TL='".$db->username."' and Ms_TL.ID_KBA = Ms_KBA.ID_KBA");
						foreach($posisi->result() as $pos){
							$sess_data['ID_KBA'] = $pos->ID_KBA; 
							$sess_data['NAMA_TL'] = $pos->NAMA_TL; 
							$sess_data['NAMA_KBA'] = $pos->NAMA_KBA; 
						}
					}elseif($db->posisi == 'kba'){
						$posisi = $this->db->query("SELECT * FROM Ms_TL, Ms_KBA WHERE Ms_TL.ID_TL='".$db->username."' and Ms_TL.ID_KBA = Ms_KBA.ID_KBA");
						foreach($posisi->result() as $pos){
						$sess_data['ID_KBA'] = $db->username; 
						$sess_data['NAMA_TL'] = $pos->NAMA_TL; 
						$sess_data['NAMA_KBA'] = $pos->NAMA_KBA; 
						}
					}
					$this->session->set_userdata($sess_data);
				}
				?>
				<script>
					window.location.href = '<?php echo base_url();?>index.php/dashboard/dashboard_controller';
				</script>
			<?php
			}else{
				$this->session->set_flashdata('login_result','Sorry your data is invalid. . . Please try again. . . ');
				Header('Location:'.base_url().'index.php/login/login_controller');
			}
		}
		
		function getMaxKode($table, $pk, $kode)
		{
			//$this->load->database('default',FALSE,TRUE);
			$q = $this->db->query("select MAX(RIGHT(".$pk.",4)) as kd_max from ".$table."");
			$kd = "";
			if($q->num_rows()>0)
			{
				foreach($q->result() as $k)
				{
					$tmp = ((int)$k->kd_max)+1;
					$kd = sprintf("%04s", $tmp);
				}
			}
			else
			{
				$kd = "0001";
			}	
			return $kode.$kd;
		}
		
		function getQueryMy($data){
			$this->load->database('mysql_dbs',FALSE,TRUE);
			return $this->db->query($data);
		}
		
		function getQuerySrv($data){
			$this->load->database('default',FALSE,TRUE);
			return $this->db->query($data);
		}
		
		function insert_datamy($table, $data){
			$this->load->database('mysql_dbs',FALSE,TRUE);
			return $this->db->insert($table,$data);
		}
		
		function insert_data($table, $data){
			$this->load->database('default',FALSE,TRUE);
			return $this->db->insert($table,$data);
		}
	}
/*End of file model_app.php*/
/*Location:.application/models/model_app.php*/