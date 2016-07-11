<?php if(!defined('BASEPATH'))exit('No direct script access allowed');
	class Messages_Inbox extends CI_Controller{
		
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
				$data['phpgrid'] = $this->ci_phpgrid->messages_inbox();
				
				$this->load->view('others/topt.php');
				$this->load->view('others/navigationt.php');
				$this->load->view('messages/messages',$data);
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
                                        ->setCellValue('A1', 'INFORMATION TRANSACTION DATA (INBOX SMS)')
                                        ->setCellValue('A2', 'RESULT SMS GATEWAY')
                                        ->setCellValue('A3', 'period '.$from.' to '.$to)
                                        ->setCellValue('A4', 'RECEIVE DATE')
										->setCellValue('B4', 'SENDER NUMBER')
										->setCellValue('C4', 'BA ID From Message')
										->setCellValue('D4', 'FREQ SMS')
										->setCellValue('E4', 'TEXTSMS')
										->setCellValue('F4', 'PROCESSED STATUS')
										->setCellValue('G4', 'PROCESSED DATE')
										->setCellValue('H4', 'REPLY SMS');
                    //mengisikan value pada tiap-tiap cell, A1 itu alamat cellnya 
                    //Hello merupakan isinya
			if($from == null or $to == null){
				$query1 = $this->db->query("select * from Final_Inbox order by ReceiveDt desc");
			}else if($from == null and $to == null){
				$query1 = $this->db->query("select * from Final_Inbox order by ReceiveDt desc");
			}else{
				$query1 = $this->db->query("select * from Final_Inbox WHERE ReceiveDt >= '".$from."' and ReceiveDt <= DATEADD(day, +1, '".$to."') order by ReceiveDt desc");
			}
			//$query1 = $this->db->query("select * from Final_Inbox WHERE ReceiveDt >= '".$from."' and [ReceiveDt] <= DATEADD(day, +1, '".$to."') order by ReceiveDt desc");
			$i = 5;

			foreach($query1->result() as $inbox){
				$objPHPExcel->setActiveSheetIndex(0)
							->setCellValue('A'.$i, $inbox->ReceiveDt)
							->setCellValue('B'.$i, $inbox->SenderNumber)
							->setCellValue('C'.$i, $inbox->ID_BA)
							->setCellValue('D'.$i, $inbox->FreqSMS)
							->setCellValue('E'.$i, $inbox->TextSMS)
							->setCellValue('F'.$i, $inbox->Processed)
							->setCellValue('G'.$i, $inbox->ProcessedDt)
							->setCellValue('H'.$i, $inbox->ReplySMS);
				$i++;
			}
			
            //set title pada sheet (me rename nama sheet)
            $objPHPExcel->getActiveSheet()->setTitle('INBOX SMS');
 
            //mulai menyimpan excel format xlsx, kalau ingin xls ganti Excel2007 menjadi Excel5          
            $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
 
            //sesuaikan headernya 
            header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
            header("Cache-Control: no-store, no-cache, must-revalidate");
            header("Cache-Control: post-check=0, pre-check=0", false);
            header("Pragma: no-cache");
            header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
            //ubah nama file saat diunduh
            header('Content-Disposition: attachment;filename="inboxsms"'.date('YMdHis').'".xls"');
            //unduh file
			$objWriter->save("php://output");
            //Mulai dari create object PHPExcel itu ada dokumentasi lengkapnya di PHPExcel, 
            // Folder Documentation dan Example
            // untuk belajar lebih jauh mengenai PHPExcel silakan buka disitu	
		}
	}
/*End of file messages_inbox.php*/
/*Location:.application/controllers/messages_inbox.php*/