<?php if(!defined('BASEPATH'))exit('No Direct Script Access Allowed');

class Ping extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->helper('file');
	}
	
	function index(){
		//$this->load->view("upload");
		$max_query = $this->db->query("SELECT max([Tgl]) as tgl FROM [SMS_Live].[dbo].[View_ADI_Qlik_Absen] where [Tahun] = '2016' and [Bulan] = '5'");
		foreach($max_query->result() as $x){
			echo $max_tgl = $x->tgl;
		}
		$alpha = 'A';
		$tgli = 1;
		for ($i = 1; $i <= $max_tgl; $i++) {
				echo $alpha.'5'.' adalah '.$tgli.'<br/>';
		$tgl++;
		$alpha++;
		}
	}
	
	public function form(){
		$this->load->view("upload");
	}

	public function proses()
	{
		//$this->form_validation->set_rules('kode','ID distributor column','required|max_length[6]|trim');
		//$this->form_validation->set_rules('tahun','year column','required|numeric|min_length[4]|max_length[4]|trim');
		//$this->form_validation->set_rules('bulan','month column','required');
		//if($this->form_validation->run() == false){
		//	$this->index();
		//}else{
			$config['upload_path'] = './temp_upload/';
			$config['allowed_types'] = 'xls';
			$config['max_size'] = '10000';
			$this->load->library('upload', $config);
 
			if ( ! $this->upload->do_upload('excel')) {
				// jika validasi file gagal, kirim parameter error ke index
				echo "error";
				//$this->index($error);
			} else {
			  // jika berhasil upload ambil data dan masukkan ke database
			  $upload_data = $this->upload->data();
 
			  // load library Excell_Reader
			  $this->load->library('Excel_reader');
 
			  //tentukan file
			  $this->excel_reader->setOutputEncoding('230787');
			  $file = $upload_data['full_path'];
			  $this->excel_reader->read($file);
			  error_reporting(E_ALL ^ E_NOTICE);
			  
			  // array data
			  $data = $this->excel_reader->sheets[0];
			  //$tgl = $this->session->userdata('username').date("YmdHis");
			  $dataexcel = Array();
			  for ($i = 2; $i <= $data['numRows']; $i++) {
				if ($data['cells'][$i][2] == '')
				   break;
				   $dataexcel[$i - 2]['ID_OUTLET'] = $data['cells'][$i][1];
				   $dataexcel[$i - 2]['NAMA_OUTLET'] = $data['cells'][$i][2];
				   $dataexcel[$i - 2]['ID_BA'] = $data['cells'][$i][3];
				   $dataexcel[$i - 2]['STATUS'] = $data['cells'][$i][4];
				   $dataexcel[$i - 2]['ID_AREA'] = $data['cells'][$i][5];
				   //$dataexcel[$i - 2]['ID_AREA'] = $data['cells'][$i][6];
				   //$dataexcel[$i - 2]['Status_Proses'] = $data['cells'][$i][7];
			  }
			  
			  //$dataexcel['tgl'] = $tgl; 
			  
			  //load model
			  $this->load->model('Data_model_a');
			  $this->Data_model_a->loaddata($dataexcel);
			  

			  //$kode = $this->input->post('kode');
			  //$bulan = $this->input->post('bulan');
			  //$tahun = $this->input->post('tahun');
			  //$sess_data['result'] = 'true';
			  //$this->session->set_userdata($sess_data);
			  
			  //$insert_temp = $this->db->query("insert into tbl_Upload_Temp values ('".$tgl."','".$kode."','".$bulan."','".$tahun."','".$this->session->userdata('username')."','".date("Y-m-d H:i:s")."')");
			  
			  //delete file
			  $file = $upload_data['file_name'];
			  $path = './temp_upload/' . $file;
			  unlink($path);
			  }
		//$this->session->set_flashdata('upload_result','');
		//Header('Location:'.base_url().'index.php/dashboard/dashboard_c/result/'.$tgl.'/'.$kode.'/'.$bulan.'/'.$tahun);
	}
}

/*End of file ping.php*/
/*Location:.application/controllers/ping.php*/