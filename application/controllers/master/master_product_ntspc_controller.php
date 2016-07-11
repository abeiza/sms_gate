<?php if(!defined('BASEPATH'))exit('No Direct Script Access Allowed'); 
	class Master_Product_Ntspc_Controller extends CI_Controller{
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
				$data['phpgrid'] = $this->ci_phpgrid->master_product_ntspc();
				
				// load libary
				//$this->load->library('breadcrumb',$config);

				// add breadcrumbs
				//$this->breadcrumb->appendCrumb('Home', '/');
				//$this->breadcrumb->appendCrumb('Page', '/page');

				
				$this->load->view('others/topt.php');
				$this->load->view('others/navigationt.php');
				$this->load->view('master/master_product_ntspc_view',$data);
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
		
		function export_excel(){
			//load librarynya terlebih dahulu
            //jika digunakan terus menerus lebih baik load ini ditaruh di auto load
            $this->load->library("Excel/PHPExcel");
            $objPHPExcel = new PHPExcel();
 
            //set Sheet yang akan diolah 
            $objPHPExcel->setActiveSheetIndex(0);
			//$objPHPExcel->mergeCells("A1:S1");
			/*$header = 'a4:s4';
			$objPHPExcel->getStyle($header)->getFill()->setFillType(\PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setARGB('00ffff00');
			$style = array(
				'font' => array('bold' => true,),
				'alignment' => array('horizontal' => \PHPExcel_Style_Alignment::HORIZONTAL_CENTER,),
				);
			$objPHPExcel->getStyle($header)->applyFromArray($style);*/
			$objPHPExcel->setActiveSheetIndex(0)
                    //mengisikan value pada tiap-tiap cell, A1 itu alamat cellnya 
                    //Hello merupakan isinya
                                        ->setCellValue('A1', 'MASTER DATA PRODUCT SPESIFICS')
                                        ->setCellValue('A2', 'SMS GATEWAY')
                                        ->setCellValue('A4', 'StartDt')
										->setCellValue('B4', 'EndDt')
										->setCellValue('C4', 'PRODUCT CODE PRINCIPLE')
										->setCellValue('D4', 'NAMA PRODUCT');
                    //mengisikan value pada tiap-tiap cell, A1 itu alamat cellnya 
                    //Hello merupakan isinya
			
			$query1 = $this->db->query("select * from Ms_Spesifikasi ORDER by NAMA_PRODUCT desc");
			$i = 5;

			foreach($query1->result() as $prd){
				$objPHPExcel->setActiveSheetIndex(0)
							->setCellValue('A'.$i, $prd->StartDt)
							->setCellValue('B'.$i, $prd->EndDt)
							->setCellValue('C'.$i, $prd->PRODUCT_KODE_PRINCIPLE)
							->setCellValue('D'.$i, $prd->NAMA_PRODUCT);
				$i++;
			}
			
            //set title pada sheet (me rename nama sheet)
            $objPHPExcel->getActiveSheet()->setTitle('Master PRODUCT');
 
            //mulai menyimpan excel format xlsx, kalau ingin xls ganti Excel2007 menjadi Excel5          
            $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
 
            //sesuaikan headernya 
            header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
            header("Cache-Control: no-store, no-cache, must-revalidate");
            header("Cache-Control: post-check=0, pre-check=0", false);
            header("Pragma: no-cache");
            header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
            //ubah nama file saat diunduh
            header('Content-Disposition: attachment;filename="msprodctNTSPC"'.date('YMdHis').'".xls"');
            //unduh file
			$objWriter->save("php://output");
            //Mulai dari create object PHPExcel itu ada dokumentasi lengkapnya di PHPExcel, 
            // Folder Documentation dan Example
            // untuk belajar lebih jauh mengenai PHPExcel silakan buka disitu	
		}

	}
/*End of file master_product_controller.php*/
/*Location:.application/controllers/master/master_product_controller.php*/