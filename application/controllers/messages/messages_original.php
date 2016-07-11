<?php if(!defined('BASEPATH'))exit('No direct script access allowed');
	class Messages_Original extends CI_Controller{
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
				$data['phpgrid'] = $this->ci_phpgrid->messages_original();
				
				$this->load->view('others/topt.php');
				$this->load->view('others/navigationt.php');
				$this->load->view('messages/messages_original',$data);
				$this->load->view('others/footert.php');
				$this->load->view('others/bottomt.php');
			}
		}
		
		function export_excel(){
			//load librarynya terlebih dahulu
            //jika digunakan terus menerus lebih baik load ini ditaruh di auto load
            $this->load->library("Excel/PHPExcel");
			$from = $this->input->post('from');
			$to = $this->input->post('to');
            //membuat objek PHPExcel
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
                                        ->setCellValue('A1', 'INFORMATION DATA SMS(ORIGINAL SMS)')
                                        ->setCellValue('A2', 'RESULT SMS GATEWAY')
                                        ->setCellValue('A3', 'period '.$from.' to '.$to)
                                        ->setCellValue('A4', 'RECEIVE DATE TIME')
										->setCellValue('B4', 'SENDER NUMBER')
										->setCellValue('C4', 'UDH')
										->setCellValue('D4', 'TEXT DECODED')
										->setCellValue('E4', 'PROCESSED')
										->setCellValue('F4', 'REPLY SMS');
                    //mengisikan value pada tiap-tiap cell, A1 itu alamat cellnya 
                    //Hello merupakan isinya
			if($from == null or $to == null){
				$query1 = $this->db->query("select * from new_inbox order by ReceivingDateTime desc");
			}else if($from == null and $to == null){
				$query1 = $this->db->query("select * from new_inbox order by ReceivingDateTime desc");
			}else{
				$query1 = $this->db->query("select * from new_inbox WHERE [ReceivingDateTime] >= '".$from."' and [ReceivingDateTime] <= DATEADD(day, +1, '".$to."') order by [ReceivingDateTime] desc");
			}
			//$query1 = $this->db->query("select * from new_inbox WHERE [ReceivingDateTime] >= '".$from."' and [ReceivingDateTime] <= DATEADD(day, +1, '".$to."') order by [ReceivingDateTime] desc");
			$i = 5;

			foreach($query1->result() as $original){
				$objPHPExcel->setActiveSheetIndex(0)
							->setCellValue('A'.$i, $original->ReceivingDateTime)
							->setCellValue('B'.$i, $original->SenderNumber)
							->setCellValue('C'.$i, $original->UDH)
							->setCellValue('D'.$i, $original->TextDecoded)
							->setCellValue('E'.$i, $original->Processed)
							->setCellValue('F'.$i, $original->ReplySMS);
				$i++;
			}
			
            //set title pada sheet (me rename nama sheet)
            $objPHPExcel->getActiveSheet()->setTitle('ORIGINAL SMS');
 
            //mulai menyimpan excel format xlsx, kalau ingin xls ganti Excel2007 menjadi Excel5          
            $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
 
            //sesuaikan headernya 
            header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
            header("Cache-Control: no-store, no-cache, must-revalidate");
            header("Cache-Control: post-check=0, pre-check=0", false);
            header("Pragma: no-cache");
            header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
            //ubah nama file saat diunduh
            header('Content-Disposition: attachment;filename="originalmessage"'.date('YMdHis').'".xls"');
            //unduh file
			$objWriter->save("php://output");
            //Mulai dari create object PHPExcel itu ada dokumentasi lengkapnya di PHPExcel, 
            // Folder Documentation dan Example
            // untuk belajar lebih jauh mengenai PHPExcel silakan buka disitu	
		}
	}
/*End of file messages_original.php*/
/*Location:.application/controllers/messages/messages_original.php*/