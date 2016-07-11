<?php if(!defined('BASEPATH'))exit('No Direct Script Access Allowed'); 
	class Master_Outlet_Controller extends CI_Controller{
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
				$data['phpgrid'] = $this->ci_phpgrid->master_outlet();
				
				$this->load->view('others/topt.php');
				$this->load->view('others/navigationt.php');
				$this->load->view('master/master_outlet_view',$data);
				$this->load->view('others/footert.php');
				$this->load->view('others/bottomt.php');
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
                                        ->setCellValue('A1', 'MASTER DATA OUTLET')
                                        ->setCellValue('A2', 'MASTER DATA SMS GATEWAY')
                                        ->setCellValue('A4', 'ID OUTLET')
										->setCellValue('B4', 'PARENT OUTLET')
										->setCellValue('C4', 'NAMA OUTET')
										->setCellValue('D4', 'ID BA')
										->setCellValue('E4', 'ID AREA')
										->setCellValue('F4', 'STATUS');
                    //mengisikan value pada tiap-tiap cell, A1 itu alamat cellnya 
                    //Hello merupakan isinya
			
			$query1 = $this->db->query("select * from Ms_OUTLET ORDER by ID_OUTLET desc");
			$i = 5;

			foreach($query1->result() as $outlet){
				$objPHPExcel->setActiveSheetIndex(0)
							->setCellValue('A'.$i, $outlet->ID_OUTLET)
							->setCellValue('B'.$i, $outlet->ParentOutlet)
							->setCellValue('C'.$i, $outlet->NAMA_OUTLET)
							->setCellValue('D'.$i, $outlet->ID_BA)
							->setCellValue('E'.$i, $outlet->ID_AREA);
							if($outlet->STATUS === '0'){
								$status = 'Non Active';
							}else{
								$status = 'Active';
							}
				$objPHPExcel->setActiveSheetIndex(0)
							->setCellValue('F'.$i, $status);
				$i++;
			}
			
            //set title pada sheet (me rename nama sheet)
            $objPHPExcel->getActiveSheet()->setTitle('Master OUTLET');
 
            //mulai menyimpan excel format xlsx, kalau ingin xls ganti Excel2007 menjadi Excel5          
            $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
 
            //sesuaikan headernya 
            header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
            header("Cache-Control: no-store, no-cache, must-revalidate");
            header("Cache-Control: post-check=0, pre-check=0", false);
            header("Pragma: no-cache");
            header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
            //ubah nama file saat diunduh
            header('Content-Disposition: attachment;filename="msotl"'.date('YMdHis').'".xls"');
            //unduh file
			$objWriter->save("php://output");
            //Mulai dari create object PHPExcel itu ada dokumentasi lengkapnya di PHPExcel, 
            // Folder Documentation dan Example
            // untuk belajar lebih jauh mengenai PHPExcel silakan buka disitu	
		}

	}
/*End of file master_outlet_controller.php*/
/*Location:.application/controllers/master/master_outlet_controller.php*/