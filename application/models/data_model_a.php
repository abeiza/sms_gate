<?php
	if (!defined('BASEPATH'))exit('No direct script access allowed');

	class Data_model_a extends CI_Model {

		//public $table = 'tbl_Upload_STM';
		//public $id = 'id_pegawai';
		//public $order = 'DESC';

		function __construct() {
			parent::__construct();
			date_default_timezone_set('Asia/Jakarta');
		}

		//ini untuk memasukkan kedalam tabel pegawai
		function loaddata($dataarray) {
			/*$this->db->query("
					CREATE TABLE ".$tgl."(
					ObjectID int identity(1,1),
					Kode_Distributor varchar(30),
					Tahun int,
					Bulan int,
					Tgl_Transaksi datetime,
					Salesman varchar(70),
					Type_Outlet varchar(70),
					Kode_Outlet varchar(10),
					Nama_Outlet varchar(150),
					Kode_Produk varchar(15),
					Unit int,
					HET float,
					Value_HET float,
					Status bit,
					UploadDate datetime,
					UploadUsername varchar(50)
					)
			
			");*/
			/*$this->db->query("
					CREATE TABLE ".$tgl."(
					ObjectID int auto_increment,
					Kode_Distributor varchar(30),
					Tahun int,
					Bulan int,
					Tgl_Transaksi datetime,
					Salesman varchar(70),
					Type_Outlet varchar(70),
					Kode_Outlet varchar(10),
					Nama_Outlet varchar(150),
					Kode_Produk varchar(15),
					Unit int,
					HET float,
					Value_HET float,
					UploadDate datetime,
					UploadUsername varchar(50),
					PRIMARY KEY(ObjectID)
					)
			
			");*/
			//$temp_count = $this->db->query("select count(ObjectID) from tbl_Upload_Temp");
			//if($temp_count > 0){
			//	$this->db->query("Delete from tbl_Upload_Temp");
			//}
			
			for ($i = 0; $i < count($dataarray); $i++) {
				echo $data['ID_OUTLET'] = $dataarray[$i]['ID_OUTLET'];
				//echo $data['ParentOutlet'] = $dataarray[$i]['ParentOutlet'];
				echo $data['NAMA_OUTLET'] = $dataarray[$i]['NAMA_OUTLET'];
				echo $data['ID_BA'] = $dataarray[$i]['ID_BA'];
				echo $data['STATUS'] = TRUE;
				echo $data['ID_AREA'] = $dataarray[$i]['ID_AREA'];
				//$data['STATUS'] = TRUE;
				//$data['ID_AREA'] = $dataarray[$i]['ID_AREA'];
				//$data['Status_Proses'] = $dataarray[$i]['Status_Proses'];
				
				$this->db->insert("Ms_OUTLET", $data);
				//}
			}
		}
	}