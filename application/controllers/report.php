<?php if(!defined('BASEPATH'))exit('No Direct Script Access Allowed');
	class Report extends CI_Controller{
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
				$this->load->view('others/topt.php');
				$this->load->view('others/navigationt.php');
				$this->load->view('underconstruct');
				$this->load->view('others/footert.php');
				$this->load->view('others/bottomt.php');
			}
		}
		
		function form_sms(){
			$cek = $this->session->userdata('success_data');
			if(empty($cek)){
				?>
				<script>
					window.location.href = '<?php echo base_url();?>';
				</script>
				<?php
			}else{
				//$this->load->library('ci_phpgrid');
				//$data['phpgrid'] = $this->ci_phpgrid->messages_inbox();
				$this->load->view('others/topt.php');
				$this->load->view('others/navigationt.php');
				$this->load->view('report/report_view');
				$this->load->view('others/footert.php');
				$this->load->view('others/bottomt.php');
			}
		}
		
		function form_absen(){
			$cek = $this->session->userdata('success_data');
			if(empty($cek)){
				?>
				<script>
					window.location.href = '<?php echo base_url();?>';
				</script>
				<?php
			}else{
				$this->load->library('ci_phpgrid');
				$data['phpgrid'] = $this->ci_phpgrid->pivot_absensi();
				$this->load->view('others/topt.php');
				$this->load->view('others/navigationt.php');
				$this->load->view('report/report_absen_view',$data);
				$this->load->view('others/footert.php');
				$this->load->view('others/bottomt.php');
			}
		}
		
		function form_call_ec(){
			$cek = $this->session->userdata('success_data');
			if(empty($cek)){
				?>
				<script>
					window.location.href = '<?php echo base_url();?>';
				</script>
				<?php
			}else{
				$this->load->library('ci_phpgrid');
				$data['phpgrid'] = $this->ci_phpgrid->pivot_call_ec();
				$this->load->view('others/topt.php');
				$this->load->view('others/navigationt.php');
				$this->load->view('report/report_call_view',$data);
				$this->load->view('others/footert.php');
				$this->load->view('others/bottomt.php');
			}
		}
		
		function form_sellout_unit(){
			$cek = $this->session->userdata('success_data');
			if(empty($cek)){
				?>
				<script>
					window.location.href = '<?php echo base_url();?>';
				</script>
				<?php
			}else{
				$this->load->library('ci_phpgrid');
				$data['phpgrid'] = $this->ci_phpgrid->pivot_sellout_unit();
				$this->load->view('others/topt.php');
				$this->load->view('others/navigationt.php');
				$this->load->view('report/report_sell_out_unit_view',$data);
				$this->load->view('others/footert.php');
				$this->load->view('others/bottomt.php');
			}
		}
		
		function form_sellout_value(){
			$cek = $this->session->userdata('success_data');
			if(empty($cek)){
				?>
				<script>
					window.location.href = '<?php echo base_url();?>';
				</script>
				<?php
			}else{
				$this->load->library('ci_phpgrid');
				$data['phpgrid'] = $this->ci_phpgrid->pivot_sellout_value();
				$this->load->view('others/topt.php');
				$this->load->view('others/navigationt.php');
				$this->load->view('report/report_sell_out_value_view',$data);
				$this->load->view('others/footert.php');
				$this->load->view('others/bottomt.php');
			}
		}
		//recap_sellout_report
		function form_recap(){
			$cek = $this->session->userdata('success_data');
			if(empty($cek)){
				?>
				<script>
					window.location.href = '<?php echo base_url();?>';
				</script>
				<?php
			}else{
				$this->load->library('ci_phpgrid');
				$data['phpgrid'] = $this->ci_phpgrid->pivot_recap_sellout();
				$this->load->view('others/topt.php');
				$this->load->view('others/navigationt.php');
				$this->load->view('report/report_recap_sellout',$data);
				$this->load->view('others/footert.php');
				$this->load->view('others/bottomt.php');
			}
		}
		
		function form_performance_unit(){
			$cek = $this->session->userdata('success_data');
			if(empty($cek)){
				?>
				<script>
					window.location.href = '<?php echo base_url();?>';
				</script>
				<?php
			}else{
				$this->load->library('ci_phpgrid');
				$data['phpgrid'] = $this->ci_phpgrid->pivot_performance_unit();
				$this->load->view('others/topt.php');
				$this->load->view('others/navigationt.php');
				$this->load->view('report/report_performance_unit_view',$data);
				$this->load->view('others/footert.php');
				$this->load->view('others/bottomt.php');
			}
		}
		
		function form_performance_value(){
			$cek = $this->session->userdata('success_data');
			if(empty($cek)){
				?>
				<script>
					window.location.href = '<?php echo base_url();?>';
				</script>
				<?php
			}else{
				$this->load->library('ci_phpgrid');
				$data['phpgrid'] = $this->ci_phpgrid->pivot_performance_value();
				$this->load->view('others/topt.php');
				$this->load->view('others/navigationt.php');
				$this->load->view('report/report_performance_value_view',$data);
				$this->load->view('others/footert.php');
				$this->load->view('others/bottomt.php');
			}
		}
		
		
		
		
		
		
		
		
		
		function form_sellout_unit_ntspc(){
			$cek = $this->session->userdata('success_data');
			if(empty($cek)){
				?>
				<script>
					window.location.href = '<?php echo base_url();?>';
				</script>
				<?php
			}else{
				$this->load->library('ci_phpgrid');
				$data['phpgrid'] = $this->ci_phpgrid->pivot_sellout_unit_ntspc();
				$this->load->view('others/topt.php');
				$this->load->view('others/navigationt.php');
				$this->load->view('report/report_sell_out_unit_ntspc_view',$data);
				$this->load->view('others/footert.php');
				$this->load->view('others/bottomt.php');
			}
		}
		
		function form_sellout_value_ntspc(){
			$cek = $this->session->userdata('success_data');
			if(empty($cek)){
				?>
				<script>
					window.location.href = '<?php echo base_url();?>';
				</script>
				<?php
			}else{
				$this->load->library('ci_phpgrid');
				$data['phpgrid'] = $this->ci_phpgrid->pivot_sellout_value_ntspc();
				$this->load->view('others/topt.php');
				$this->load->view('others/navigationt.php');
				$this->load->view('report/report_sell_out_value_ntspc_view',$data);
				$this->load->view('others/footert.php');
				$this->load->view('others/bottomt.php');
			}
		}
		//recap_sellout_report
		function form_recap_ntspc(){
			$cek = $this->session->userdata('success_data');
			if(empty($cek)){
				?>
				<script>
					window.location.href = '<?php echo base_url();?>';
				</script>
				<?php
			}else{
				$this->load->library('ci_phpgrid');
				$data['phpgrid'] = $this->ci_phpgrid->pivot_recap_sellout_ntspc();
				$this->load->view('others/topt.php');
				$this->load->view('others/navigationt.php');
				$this->load->view('report/report_recap_sellout_ntspc',$data);
				$this->load->view('others/footert.php');
				$this->load->view('others/bottomt.php');
			}
		}
		
		function form_performance_unit_ntspc(){
			$cek = $this->session->userdata('success_data');
			if(empty($cek)){
				?>
				<script>
					window.location.href = '<?php echo base_url();?>';
				</script>
				<?php
			}else{
				$this->load->library('ci_phpgrid');
				$data['phpgrid'] = $this->ci_phpgrid->pivot_performance_unit_ntspc();
				$this->load->view('others/topt.php');
				$this->load->view('others/navigationt.php');
				$this->load->view('report/report_performance_unit_ntspc_view',$data);
				$this->load->view('others/footert.php');
				$this->load->view('others/bottomt.php');
			}
		}
		
		function form_performance_value_ntspc(){
			$cek = $this->session->userdata('success_data');
			if(empty($cek)){
				?>
				<script>
					window.location.href = '<?php echo base_url();?>';
				</script>
				<?php
			}else{
				$this->load->library('ci_phpgrid');
				$data['phpgrid'] = $this->ci_phpgrid->pivot_performance_value_ntspc();
				$this->load->view('others/topt.php');
				$this->load->view('others/navigationt.php');
				$this->load->view('report/report_performance_value_ntspc_view',$data);
				$this->load->view('others/footert.php');
				$this->load->view('others/bottomt.php');
			}
		}
		
		
		
		
		
		
		
		function form_daily_sales_ba(){
			$this->load->view('others/topt.php');
			$this->load->view('others/navigationt.php');
			$this->load->view('report/report_daily_ba_view');
			$this->load->view('others/footert.php');
			$this->load->view('others/bottomt.php');
		}
		
		function daily_sales_report_by_ba(){
			$this->load->library("Excel/PHPExcel");
			$from = $this->input->post('from');
			$to = $this->input->post('to');
            //membuat objek PHPExcel
            $objPHPExcel = new PHPExcel();
 
            //set Sheet yang akan diolah 
            $objPHPExcel->setActiveSheetIndex(0);
			
			$objPHPExcel->setActiveSheetIndex(0)
                    //mengisikan value pada tiap-tiap cell, A1 itu alamat cellnya 
                    //Hello merupakan isinya
                                        ->setCellValue('A1', 'SALES REPORT BY PIVOT')
                                        ->setCellValue('A2', 'RESULT SMS GATEWAY')
                                        ->setCellValue('A3', 'period '.$from.' to '.$to)
                                        ->setCellValue('A4', 'ReceiveDt')
										->setCellValue('B4', 'ProcessedDt')
										->setCellValue('C4', 'TransDt')
										->setCellValue('D4', 'SenderNumber')
										->setCellValue('E4', 'ID_OUTLET')
										->setCellValue('F4', 'NAMA_OUTLET')
										->setCellValue('G4', 'AREA')
										->setCellValue('H4', 'ID_BA')
										->setCellValue('I4', 'NAMA BA')
										->setCellValue('J4', 'ID_TL')
										->setCellValue('K4', 'NAMA_TL')
										->setCellValue('L4', 'ID_KBA')
										->setCellValue('M4', 'NAMA_KBA')
										->setCellValue('N4', 'COVERAGE_KBA')
										->setCellValue('O4', 'ID_PRODUCT')
										->setCellValue('P4', 'NAMA_PRODUCT')
										->setCellValue('Q4', 'PRODUCT_KODE_PRINCIPLE')
										->setCellValue('R4', 'DESCRIPTION_PRINCIPLE')
										->setCellValue('S4', 'Qty');
                    //mengisikan value pada tiap-tiap cell, A1 itu alamat cellnya 
                    //Hello merupakan isinya
			$query1 = $this->db->query("select * from [View_Evan_Laporan_Harian] WHERE [TransDt] >= '".$from."' and [TransDt] <= DATEADD(day, +1, '".$to."') order by [TransDt] desc");
			$i = 5;

			foreach($query1->result() as $sales){
				$objPHPExcel->setActiveSheetIndex(0)
							->setCellValue('A'.$i, $sales->ReceiveDt)
							->setCellValue('B'.$i, $sales->ProcessedDt)
							->setCellValue('C'.$i, $sales->TransDt)
							->setCellValue('D'.$i, $sales->SenderNumber)
							->setCellValue('E'.$i, $sales->ID_OUTLET)
							->setCellValue('F'.$i, $sales->NAMA_OUTLET);
							$sales1 = $this->db->query("select ID_AREA from Ms_OUTLET where ID_OUTLET='".$sales->ID_OUTLET."'");
							foreach($sales1->result() as $area){
								$objPHPExcel->setActiveSheetIndex(0)
								->setCellValue('G'.$i, $area->ID_AREA);
							}
							$objPHPExcel->setActiveSheetIndex(0)
							->setCellValue('H'.$i, $sales->ID_BA);
							
							if($sales->ID_BA == '' or $sales->ID_BA == null){
								$objPHPExcel->setActiveSheetIndex(0)
									->setCellValue('I'.$i, '')
									->setCellValue('J'.$i, '')
									->setCellValue('K'.$i, '')
									->setCellValue('L'.$i, '')
									->setCellValue('M'.$i, '')
									->setCellValue('N'.$i, '');
							}else{
								$sales2 = $this->db->query("select NAMA_BA, ID_TL from Ms_BA where ID_BA='".$sales->ID_BA."'");
								foreach($sales2->result() as $ba){
									$objPHPExcel->setActiveSheetIndex(0)
									->setCellValue('I'.$i, $ba->NAMA_BA)
									->setCellValue('J'.$i, $ba->ID_TL);
										$sales3 = $this->db->query("select NAMA_TL, ID_KBA from Ms_TL where ID_TL='".$ba->ID_TL."'");
										foreach($sales3->result() as $tl){
											$objPHPExcel->setActiveSheetIndex(0)
											->setCellValue('K'.$i, $tl->NAMA_TL)
											->setCellValue('L'.$i, $tl->ID_KBA);
												$sales4 = $this->db->query("select NAMA_KBA, COVERAGE_KBA from Ms_KBA where ID_KBA='".$tl->ID_KBA."'");
												foreach($sales4->result() as $kba){
													$objPHPExcel->setActiveSheetIndex(0)
													->setCellValue('M'.$i, $kba->NAMA_KBA)
													->setCellValue('N'.$i, $kba->COVERAGE_KBA);
												}
										}
								}
							}
							$objPHPExcel->setActiveSheetIndex(0)
							->setCellValue('O'.$i, $sales->ID_PRODUCT)
							->setCellValue('P'.$i, $sales->NAMA_PRODUCT)
							->setCellValue('Q'.$i, $sales->PRODUCT_KODE_PRINCIPLE)
							->setCellValue('R'.$i, $sales->DESCRIPTION_PRINCIPLE)
							->setCellValue('S'.$i, $sales->Qty);
				$i++;
			}
			
            //set title pada sheet (me rename nama sheet)
            $objPHPExcel->getActiveSheet()->setTitle('Data ABSENT');
 
            //mulai menyimpan excel format xlsx, kalau ingin xls ganti Excel2007 menjadi Excel5          
            $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
 
            //sesuaikan headernya 
            header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
            header("Cache-Control: no-store, no-cache, must-revalidate");
            header("Cache-Control: post-check=0, pre-check=0", false);
            header("Pragma: no-cache");
            header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
            //ubah nama file saat diunduh
            header('Content-Disposition: attachment;filename="infoabsent.xls"');
            //unduh file
			$objWriter->save("php://output");
            //Mulai dari create object PHPExcel itu ada dokumentasi lengkapnya di PHPExcel, 
            // Folder Documentation dan Example
            // untuk belajar lebih jauh mengenai PHPExcel silakan buka disitu
		}
		
		function recap_sellout_report(){
			$this->load->library("Excel/PHPExcel");
			$tahun = $this->uri->segment(3);
			$bulan = $this->uri->segment(4);
            //membuat objek PHPExcel
            $objPHPExcel = new PHPExcel();
			
			$objPHPExcel->setActiveSheetIndex(0);
			
			$objPHPExcel->setActiveSheetIndex(0)
                    //mengisikan value pada tiap-tiap cell, A1 itu alamat cellnya 
                    //Hello merupakan isinya
                                        ->setCellValue('A1', 'RECAPITULATION SELL OUT BY BRAND')
                                        ->setCellValue('A2', 'Presensi Beauty Advisor (Valid SMS)')
                                        ->setCellValue('A3', 'period '.$tahun.', '.$bulan)
                                        ->setCellValue('A5', 'Tahun')
										->setCellValue('B5', 'Bulan')
										->setCellValue('C5', 'Nama KBA')
										->setCellValue('D5', 'Nama TL')
										->setCellValue('E5', 'Nama BA')
										
										->setCellValue('F4', 'PURBASARI')
										->setCellValue('F5', 'QTY / UNIT')
										->setCellValue('G5', 'VALUE / AMOUNT')
										
										->setCellValue('H4', 'AMARA')
										->setCellValue('H5', 'QTY / UNIT')
										->setCellValue('I5', 'VALUE / AMOUNT')
										
										->setCellValue('J4', 'NEW CELL')
										->setCellValue('J5', 'QTY / UNIT')
										->setCellValue('K5', 'VALUE / AMOUNT')
										
										->setCellValue('L4', 'KANNA')
										->setCellValue('L5', 'QTY / UNIT')
										->setCellValue('M5', 'VALUE / AMOUNT')
										
										->setCellValue('N4', 'TOTAL')
										->setCellValue('N5', 'QTY / UNIT')
										->setCellValue('O5', 'VALUE / AMOUNT');
			
			if($this->session->userdata('area') != 'all'){
				$query1 = $this->db->query("select * from Pivot_Recap_Sell_Out WHERE Tahun='".$tahun."' and Bulan='".$bulan."' and NAMA_KBA='".$this->session->userdata('NAMA_KBA')."' order by Tahun desc, Bulan asc, NAMA_KBA asc, NAMA_TL asc, NAMA_BA asc");
			}else{
				$query1 = $this->db->query("select * from Pivot_Recap_Sell_Out WHERE Tahun='".$tahun."' and Bulan='".$bulan."' order by Tahun desc, Bulan asc, NAMA_KBA asc, NAMA_TL asc, NAMA_BA asc");
			}
			$i = 6;
			foreach($query1->result() as $absen){
				$objPHPExcel->setActiveSheetIndex(0)
							->setCellValue('A'.$i, $absen->Tahun)
							->setCellValue('B'.$i, $absen->Bulan)
							->setCellValue('C'.$i, $absen->NAMA_KBA)
							->setCellValue('D'.$i, $absen->NAMA_TL)
							->setCellValue('E'.$i, $absen->NAMA_BA)
							->setCellValue('F'.$i, $absen->PurbasariQty)
							->setCellValue('G'.$i, $absen->PurbasariValue)
							->setCellValue('H'.$i, $absen->AmaraQty)
							->setCellValue('I'.$i, $absen->AmaraValue)
							->setCellValue('J'.$i, $absen->NewCellQty)
							->setCellValue('K'.$i, $absen->NewCellValue)
							->setCellValue('L'.$i, $absen->KannaQty)
							->setCellValue('M'.$i, $absen->KannaValue)
							->setCellValue('N'.$i, $absen->TotalQty)
							->setCellValue('O'.$i, $absen->TotalValue);
						$i++;
			}
			
			//set title pada sheet (me rename nama sheet)
            $objPHPExcel->getActiveSheet()->setTitle('RECAPITULATION');
 
            //mulai menyimpan excel format xlsx, kalau ingin xls ganti Excel2007 menjadi Excel5          
            $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
 
            //sesuaikan headernya 
            header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
            header("Cache-Control: no-store, no-cache, must-revalidate");
            header("Cache-Control: post-check=0, pre-check=0", false);
            header("Pragma: no-cache");
            header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
            //ubah nama file saat diunduh
            header('Content-Disposition: attachment;filename="BARecapSellOutBrands.xls"');
            //unduh file
			$objWriter->save("php://output");
            //Mulai dari create object PHPExcel itu ada dokumentasi lengkapnya di PHPExcel, 
            // Folder Documentation dan Example
            // untuk belajar lebih jauh mengenai PHPExcel silakan buka disitu
		}
		
		function sellingout_qty_report(){
			ini_set('memory_limit', '-1');

			$this->load->library("Excel/PHPExcel");
			$tahun = $this->uri->segment(3);
			$bulan = $this->uri->segment(4);
            //membuat objek PHPExcel
            $objPHPExcel = new PHPExcel();
			
			$objPHPExcel->setActiveSheetIndex(0);
			
			$objPHPExcel->setActiveSheetIndex(0)
                    //mengisikan value pada tiap-tiap cell, A1 itu alamat cellnya 
                    //Hello merupakan isinya
                                        ->setCellValue('A1', 'SELLING OUT BY UNIT')
                                        ->setCellValue('A2', 'Presensi Beauty Advisor (Valid SMS)')
                                        ->setCellValue('A3', 'period '.$tahun.', '.$bulan)
                                        ->setCellValue('A4', 'Tahun')
										->setCellValue('B4', 'Bulan')
										->setCellValue('C4', 'Nama KBA')
										->setCellValue('D4', 'Nama TL')
										->setCellValue('E4', 'Nama BA')
										->setCellValue('F4', 'Brand')
										->setCellValue('G4', 'ProductGroup')
										->setCellValue('H4', 'DescBaru')
										->setCellValue('I4', 'Hari ke 1')
										->setCellValue('J4', 'Hari ke 2')
										->setCellValue('K4', 'Hari ke 3')
										->setCellValue('L4', 'Hari ke 4')
										->setCellValue('M4', 'Hari ke 5')
										->setCellValue('N4', 'Hari ke 6')
										->setCellValue('O4', 'Hari ke 7')
										->setCellValue('P4', 'Hari ke 8')
										->setCellValue('Q4', 'Hari ke 9')
										->setCellValue('R4', 'Hari ke 10')
										->setCellValue('S4', 'Hari ke 11')
										->setCellValue('T4', 'Hari ke 12')
										->setCellValue('U4', 'Hari ke 13')
										->setCellValue('V4', 'Hari ke 14')
										->setCellValue('W4', 'Hari ke 15')
										->setCellValue('X4', 'Hari ke 16')
										->setCellValue('Y4', 'Hari ke 17')
										->setCellValue('Z4', 'Hari ke 18')
										->setCellValue('AA4', 'Hari ke 19')
										->setCellValue('AB4', 'Hari ke 20')
										->setCellValue('AC4', 'Hari ke 21')
										->setCellValue('AD4', 'Hari ke 22')
										->setCellValue('AE4', 'Hari ke 23')
										->setCellValue('AF4', 'Hari ke 24')
										->setCellValue('AG4', 'Hari ke 25')
										->setCellValue('AH4', 'Hari ke 26')
										->setCellValue('AI4', 'Hari ke 27')
										->setCellValue('AJ4', 'Hari ke 28')
										->setCellValue('AK4', 'Hari ke 29')
										->setCellValue('AL4', 'Hari ke 30')
										->setCellValue('AM4', 'Hari ke 31')
										->setCellValue('AN4', 'Total Unit');
			
			if($this->session->userdata('area') != 'all'){
				$query1 = $this->db->query("select * from PivotSellProductUnit WHERE Tahun='".$tahun."' and Bulan='".$bulan."' and NAMA_KBA='".$this->session->userdata('NAMA_KBA')."' order by Tahun desc, Bulan asc, NAMA_KBA asc, NAMA_TL asc, NAMA_BA asc, Brand asc, ProductGroup asc, DescBaru asc");
			}else{
				$query1 = $this->db->query("select * from PivotSellProductUnit WHERE Tahun='".$tahun."' and Bulan='".$bulan."' order by Tahun desc, Bulan asc, NAMA_KBA asc, NAMA_TL asc, NAMA_BA asc, Brand asc, ProductGroup asc, DescBaru asc");
			}
			$i = 5;
			foreach($query1->result() as $absen){
				$objPHPExcel->setActiveSheetIndex(0)
							->setCellValue('A'.$i, $absen->Tahun)
							->setCellValue('B'.$i, $absen->Bulan)
							->setCellValue('C'.$i, $absen->NAMA_KBA)
							->setCellValue('D'.$i, $absen->NAMA_TL)
							->setCellValue('E'.$i, $absen->NAMA_BA)
							->setCellValue('F'.$i, $absen->Brand)
							->setCellValue('G'.$i, $absen->ProductGroup)
							->setCellValue('H'.$i, $absen->DescBaru)
							->setCellValue('I'.$i, $absen->H1)
							->setCellValue('J'.$i, $absen->H2)
							->setCellValue('K'.$i, $absen->H3)
							->setCellValue('L'.$i, $absen->H4)
							->setCellValue('M'.$i, $absen->H5)
							->setCellValue('N'.$i, $absen->H6)
							->setCellValue('O'.$i, $absen->H7)
							->setCellValue('P'.$i, $absen->H8)
							->setCellValue('Q'.$i, $absen->H9)
							->setCellValue('R'.$i, $absen->H10)
							->setCellValue('S'.$i, $absen->H11)
							->setCellValue('T'.$i, $absen->H12)
							->setCellValue('U'.$i, $absen->H13)
							->setCellValue('V'.$i, $absen->H14)
							->setCellValue('W'.$i, $absen->H15)
							->setCellValue('X'.$i, $absen->H16)
							->setCellValue('Y'.$i, $absen->H17)
							->setCellValue('Z'.$i, $absen->H18)
							->setCellValue('AA'.$i, $absen->H19)
							->setCellValue('AB'.$i, $absen->H20)
							->setCellValue('AC'.$i, $absen->H21)
							->setCellValue('AD'.$i, $absen->H22)
							->setCellValue('AE'.$i, $absen->H23)
							->setCellValue('AF'.$i, $absen->H24)
							->setCellValue('AG'.$i, $absen->H25)
							->setCellValue('AH'.$i, $absen->H26)
							->setCellValue('AI'.$i, $absen->H27)
							->setCellValue('AJ'.$i, $absen->H28)
							->setCellValue('AK'.$i, $absen->H29)
							->setCellValue('AL'.$i, $absen->H30)
							->setCellValue('AM'.$i, $absen->H31)
							->setCellValue('AN'.$i, $absen->TotalUnit);
						$i++;
			}
			//set title pada sheet (me rename nama sheet)
            $objPHPExcel->getActiveSheet()->setTitle('SELLING OUT BY UNIT');
			
			
			//$objPHPExcel->disconnectWorksheets(); 
			//unset($objPHPExcel);
			//$i++;
			
            //mulai menyimpan excel format xlsx, kalau ingin xls ganti Excel2007 menjadi Excel5          
            $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
 
            //sesuaikan headernya 
            header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
            header("Cache-Control: no-store, no-cache, must-revalidate");
            header("Cache-Control: post-check=0, pre-check=0", false);
            header("Pragma: no-cache");
            header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
            //ubah nama file saat diunduh
            header('Content-Disposition: attachment;filename="SellingoutUnit.xls"');
            //unduh file
			$objWriter->save("php://output");
            //Mulai dari create object PHPExcel itu ada dokumentasi lengkapnya di PHPExcel, 
            // Folder Documentation dan Example
            // untuk belajar lebih jauh mengenai PHPExcel silakan buka disitu
			
		}
		
		function sellingout_value_report(){
			ini_set('memory_limit', '-1');
			$this->load->library("Excel/PHPExcel");
			$tahun = $this->uri->segment(3);
			$bulan = $this->uri->segment(4);
            //membuat objek PHPExcel
            $objPHPExcel = new PHPExcel();
			
			$objPHPExcel->setActiveSheetIndex(0);
			
			$objPHPExcel->setActiveSheetIndex(0)
                    //mengisikan value pada tiap-tiap cell, A1 itu alamat cellnya 
                    //Hello merupakan isinya
                                        ->setCellValue('A1', 'SELLING OUT BY VALUE')
                                        ->setCellValue('A2', 'Presensi Beauty Advisor (Valid SMS)')
                                        ->setCellValue('A3', 'period '.$tahun.', '.$bulan)
                                        ->setCellValue('A4', 'Tahun')
										->setCellValue('B4', 'Bulan')
										->setCellValue('C4', 'Nama KBA')
										->setCellValue('D4', 'Nama TL')
										->setCellValue('E4', 'Nama BA')
										->setCellValue('F4', 'Brand')
										->setCellValue('G4', 'ProductGroup')
										->setCellValue('H4', 'DescBaru')
										->setCellValue('I4', 'Hari ke 1')
										->setCellValue('J4', 'Hari ke 2')
										->setCellValue('K4', 'Hari ke 3')
										->setCellValue('L4', 'Hari ke 4')
										->setCellValue('M4', 'Hari ke 5')
										->setCellValue('N4', 'Hari ke 6')
										->setCellValue('O4', 'Hari ke 7')
										->setCellValue('P4', 'Hari ke 8')
										->setCellValue('Q4', 'Hari ke 9')
										->setCellValue('R4', 'Hari ke 10')
										->setCellValue('S4', 'Hari ke 11')
										->setCellValue('T4', 'Hari ke 12')
										->setCellValue('U4', 'Hari ke 13')
										->setCellValue('V4', 'Hari ke 14')
										->setCellValue('W4', 'Hari ke 15')
										->setCellValue('X4', 'Hari ke 16')
										->setCellValue('Y4', 'Hari ke 17')
										->setCellValue('Z4', 'Hari ke 18')
										->setCellValue('AA4', 'Hari ke 19')
										->setCellValue('AB4', 'Hari ke 20')
										->setCellValue('AC4', 'Hari ke 21')
										->setCellValue('AD4', 'Hari ke 22')
										->setCellValue('AE4', 'Hari ke 23')
										->setCellValue('AF4', 'Hari ke 24')
										->setCellValue('AG4', 'Hari ke 25')
										->setCellValue('AH4', 'Hari ke 26')
										->setCellValue('AI4', 'Hari ke 27')
										->setCellValue('AJ4', 'Hari ke 28')
										->setCellValue('AK4', 'Hari ke 29')
										->setCellValue('AL4', 'Hari ke 30')
										->setCellValue('AM4', 'Hari ke 31')
										->setCellValue('AN4', 'Total Value');
			
			if($this->session->userdata('area') != 'all'){
				$query1 = $this->db->query("select * from PivotSellProductValue WHERE Tahun='".$tahun."' and Bulan='".$bulan."' and NAMA_KBA='".$this->session->userdata('NAMA_KBA')."' order by Tahun desc, Bulan asc, NAMA_KBA asc, NAMA_TL asc, NAMA_BA asc, Brand asc, ProductGroup asc, DescBaru asc");
			}else{
				$query1 = $this->db->query("select * from PivotSellProductValue WHERE Tahun='".$tahun."' and Bulan='".$bulan."' order by Tahun desc, Bulan asc, NAMA_KBA asc, NAMA_TL asc, NAMA_BA asc, Brand asc, ProductGroup asc, DescBaru asc");
			}
			$i = 5;
			foreach($query1->result() as $absen){
				$objPHPExcel->setActiveSheetIndex(0)
							->setCellValue('A'.$i, $absen->Tahun)
							->setCellValue('B'.$i, $absen->Bulan)
							->setCellValue('C'.$i, $absen->NAMA_KBA)
							->setCellValue('D'.$i, $absen->NAMA_TL)
							->setCellValue('E'.$i, $absen->NAMA_BA)
							->setCellValue('F'.$i, $absen->Brand)
							->setCellValue('G'.$i, $absen->ProductGroup)
							->setCellValue('H'.$i, $absen->DescBaru)
							->setCellValue('I'.$i, $absen->H1)
							->setCellValue('J'.$i, $absen->H2)
							->setCellValue('K'.$i, $absen->H3)
							->setCellValue('L'.$i, $absen->H4)
							->setCellValue('M'.$i, $absen->H5)
							->setCellValue('N'.$i, $absen->H6)
							->setCellValue('O'.$i, $absen->H7)
							->setCellValue('P'.$i, $absen->H8)
							->setCellValue('Q'.$i, $absen->H9)
							->setCellValue('R'.$i, $absen->H10)
							->setCellValue('S'.$i, $absen->H11)
							->setCellValue('T'.$i, $absen->H12)
							->setCellValue('U'.$i, $absen->H13)
							->setCellValue('V'.$i, $absen->H14)
							->setCellValue('W'.$i, $absen->H15)
							->setCellValue('X'.$i, $absen->H16)
							->setCellValue('Y'.$i, $absen->H17)
							->setCellValue('Z'.$i, $absen->H18)
							->setCellValue('AA'.$i, $absen->H19)
							->setCellValue('AB'.$i, $absen->H20)
							->setCellValue('AC'.$i, $absen->H21)
							->setCellValue('AD'.$i, $absen->H22)
							->setCellValue('AE'.$i, $absen->H23)
							->setCellValue('AF'.$i, $absen->H24)
							->setCellValue('AG'.$i, $absen->H25)
							->setCellValue('AH'.$i, $absen->H26)
							->setCellValue('AI'.$i, $absen->H27)
							->setCellValue('AJ'.$i, $absen->H28)
							->setCellValue('AK'.$i, $absen->H29)
							->setCellValue('AL'.$i, $absen->H30)
							->setCellValue('AM'.$i, $absen->H31)
							->setCellValue('AN'.$i, $absen->TotalValue);
						$i++;
			}
			
			//set title pada sheet (me rename nama sheet)
            $objPHPExcel->getActiveSheet()->setTitle('SELLING OUT BY VALUE');
 
            //mulai menyimpan excel format xlsx, kalau ingin xls ganti Excel2007 menjadi Excel5          
            $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
 
            //sesuaikan headernya 
            header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
            header("Cache-Control: no-store, no-cache, must-revalidate");
            header("Cache-Control: post-check=0, pre-check=0", false);
            header("Pragma: no-cache");
            header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
            //ubah nama file saat diunduh
            header('Content-Disposition: attachment;filename="SellingoutValue.xls"');
            //unduh file
			$objWriter->save("php://output");
            //Mulai dari create object PHPExcel itu ada dokumentasi lengkapnya di PHPExcel, 
            // Folder Documentation dan Example
            // untuk belajar lebih jauh mengenai PHPExcel silakan buka disitu
			
		}
		
		function performance_qty_report(){
			$this->load->library("Excel/PHPExcel");
			$tahun = $this->uri->segment(3);
			$bulan = $this->uri->segment(4);
            //membuat objek PHPExcel
            $objPHPExcel = new PHPExcel();
			
			$objPHPExcel->setActiveSheetIndex(0);
			
			$objPHPExcel->setActiveSheetIndex(0)
                    //mengisikan value pada tiap-tiap cell, A1 itu alamat cellnya 
                    //Hello merupakan isinya
                                        ->setCellValue('A1', 'BA PERFORMANCE BY UNIT')
                                        ->setCellValue('A2', 'Presensi Beauty Advisor (Valid SMS)')
                                        ->setCellValue('A3', 'period '.$tahun.', '.$bulan)
                                        ->setCellValue('A4', 'Tahun')
										->setCellValue('B4', 'Bulan')
										->setCellValue('C4', 'Nama KBA')
										->setCellValue('D4', 'Nama TL')
										->setCellValue('E4', 'Nama BA')
										->setCellValue('F4', 'Hari ke 1')
										->setCellValue('G4', 'Hari ke 2')
										->setCellValue('H4', 'Hari ke 3')
										->setCellValue('I4', 'Hari ke 4')
										->setCellValue('J4', 'Hari ke 5')
										->setCellValue('K4', 'Hari ke 6')
										->setCellValue('L4', 'Hari ke 7')
										->setCellValue('M4', 'Hari ke 8')
										->setCellValue('N4', 'Hari ke 9')
										->setCellValue('O4', 'Hari ke 10')
										->setCellValue('P4', 'Hari ke 11')
										->setCellValue('Q4', 'Hari ke 12')
										->setCellValue('R4', 'Hari ke 13')
										->setCellValue('S4', 'Hari ke 14')
										->setCellValue('T4', 'Hari ke 15')
										->setCellValue('U4', 'Hari ke 16')
										->setCellValue('V4', 'Hari ke 17')
										->setCellValue('W4', 'Hari ke 18')
										->setCellValue('X4', 'Hari ke 19')
										->setCellValue('Y4', 'Hari ke 20')
										->setCellValue('Z4', 'Hari ke 21')
										->setCellValue('AA4', 'Hari ke 22')
										->setCellValue('AB4', 'Hari ke 23')
										->setCellValue('AC4', 'Hari ke 24')
										->setCellValue('AD4', 'Hari ke 25')
										->setCellValue('AE4', 'Hari ke 26')
										->setCellValue('AF4', 'Hari ke 27')
										->setCellValue('AG4', 'Hari ke 28')
										->setCellValue('AH4', 'Hari ke 29')
										->setCellValue('AI4', 'Hari ke 30')
										->setCellValue('AJ4', 'Hari ke 31')
										->setCellValue('AK4', 'Total Unit');
			
			if($this->session->userdata('area') != 'all'){
				$query1 = $this->db->query("select * from PivotPerformanceUnit WHERE Tahun='".$tahun."' and Bulan='".$bulan."' and NAMA_KBA='".$this->session->userdata('NAMA_KBA')."' order by Tahun desc, Bulan asc, NAMA_KBA asc, NAMA_TL asc, NAMA_BA asc");
			}else{
				$query1 = $this->db->query("select * from PivotPerformanceUnit WHERE Tahun='".$tahun."' and Bulan='".$bulan."' order by Tahun desc, Bulan asc, NAMA_KBA asc, NAMA_TL asc, NAMA_BA asc");
			}
			$i = 5;
			foreach($query1->result() as $absen){
				$objPHPExcel->setActiveSheetIndex(0)
							->setCellValue('A'.$i, $absen->Tahun)
							->setCellValue('B'.$i, $absen->Bulan)
							->setCellValue('C'.$i, $absen->NAMA_KBA)
							->setCellValue('D'.$i, $absen->NAMA_TL)
							->setCellValue('E'.$i, $absen->NAMA_BA)
							->setCellValue('F'.$i, $absen->H1)
							->setCellValue('G'.$i, $absen->H2)
							->setCellValue('H'.$i, $absen->H3)
							->setCellValue('I'.$i, $absen->H4)
							->setCellValue('J'.$i, $absen->H5)
							->setCellValue('K'.$i, $absen->H6)
							->setCellValue('L'.$i, $absen->H7)
							->setCellValue('M'.$i, $absen->H8)
							->setCellValue('N'.$i, $absen->H9)
							->setCellValue('O'.$i, $absen->H10)
							->setCellValue('P'.$i, $absen->H11)
							->setCellValue('Q'.$i, $absen->H12)
							->setCellValue('R'.$i, $absen->H13)
							->setCellValue('S'.$i, $absen->H14)
							->setCellValue('T'.$i, $absen->H15)
							->setCellValue('U'.$i, $absen->H16)
							->setCellValue('V'.$i, $absen->H17)
							->setCellValue('W'.$i, $absen->H18)
							->setCellValue('X'.$i, $absen->H19)
							->setCellValue('Y'.$i, $absen->H20)
							->setCellValue('Z'.$i, $absen->H21)
							->setCellValue('AA'.$i, $absen->H22)
							->setCellValue('AB'.$i, $absen->H23)
							->setCellValue('AC'.$i, $absen->H24)
							->setCellValue('AD'.$i, $absen->H25)
							->setCellValue('AE'.$i, $absen->H26)
							->setCellValue('AF'.$i, $absen->H27)
							->setCellValue('AG'.$i, $absen->H28)
							->setCellValue('AH'.$i, $absen->H29)
							->setCellValue('AI'.$i, $absen->H30)
							->setCellValue('AJ'.$i, $absen->H31)
							->setCellValue('AK'.$i, $absen->TotalUnit);
						$i++;
			}
			
			//set title pada sheet (me rename nama sheet)
            $objPHPExcel->getActiveSheet()->setTitle('BA PERFORMANCE BY UNIT');
 
            //mulai menyimpan excel format xlsx, kalau ingin xls ganti Excel2007 menjadi Excel5          
            $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
 
            //sesuaikan headernya 
            header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
            header("Cache-Control: no-store, no-cache, must-revalidate");
            header("Cache-Control: post-check=0, pre-check=0", false);
            header("Pragma: no-cache");
            header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
            //ubah nama file saat diunduh
            header('Content-Disposition: attachment;filename="BAPerformanceUnit.xls"');
            //unduh file
			$objWriter->save("php://output");
            //Mulai dari create object PHPExcel itu ada dokumentasi lengkapnya di PHPExcel, 
            // Folder Documentation dan Example
            // untuk belajar lebih jauh mengenai PHPExcel silakan buka disitu
			
		}
		
		function performance_value_report(){
			$this->load->library("Excel/PHPExcel");
			$tahun = $this->uri->segment(3);
			$bulan = $this->uri->segment(4);
            //membuat objek PHPExcel
            $objPHPExcel = new PHPExcel();
			
			$objPHPExcel->setActiveSheetIndex(0);
			
			$objPHPExcel->setActiveSheetIndex(0)
                    //mengisikan value pada tiap-tiap cell, A1 itu alamat cellnya 
                    //Hello merupakan isinya
                                        ->setCellValue('A1', 'BA PERFORMANCE BY VALUE')
                                        ->setCellValue('A2', 'Presensi Beauty Advisor (Valid SMS)')
                                        ->setCellValue('A3', 'period '.$tahun.', '.$bulan)
                                        ->setCellValue('A4', 'Tahun')
										->setCellValue('B4', 'Bulan')
										->setCellValue('C4', 'Nama KBA')
										->setCellValue('D4', 'Nama TL')
										->setCellValue('E4', 'Nama BA')
										->setCellValue('F4', 'Hari ke 1')
										->setCellValue('G4', 'Hari ke 2')
										->setCellValue('H4', 'Hari ke 3')
										->setCellValue('I4', 'Hari ke 4')
										->setCellValue('J4', 'Hari ke 5')
										->setCellValue('K4', 'Hari ke 6')
										->setCellValue('L4', 'Hari ke 7')
										->setCellValue('M4', 'Hari ke 8')
										->setCellValue('N4', 'Hari ke 9')
										->setCellValue('O4', 'Hari ke 10')
										->setCellValue('P4', 'Hari ke 11')
										->setCellValue('Q4', 'Hari ke 12')
										->setCellValue('R4', 'Hari ke 13')
										->setCellValue('S4', 'Hari ke 14')
										->setCellValue('T4', 'Hari ke 15')
										->setCellValue('U4', 'Hari ke 16')
										->setCellValue('V4', 'Hari ke 17')
										->setCellValue('W4', 'Hari ke 18')
										->setCellValue('X4', 'Hari ke 19')
										->setCellValue('Y4', 'Hari ke 20')
										->setCellValue('Z4', 'Hari ke 21')
										->setCellValue('AA4', 'Hari ke 22')
										->setCellValue('AB4', 'Hari ke 23')
										->setCellValue('AC4', 'Hari ke 24')
										->setCellValue('AD4', 'Hari ke 25')
										->setCellValue('AE4', 'Hari ke 26')
										->setCellValue('AF4', 'Hari ke 27')
										->setCellValue('AG4', 'Hari ke 28')
										->setCellValue('AH4', 'Hari ke 29')
										->setCellValue('AI4', 'Hari ke 30')
										->setCellValue('AJ4', 'Hari ke 31')
										->setCellValue('AK4', 'Total Amount');
			if($this->session->userdata('area') != 'all'){
				$query1 = $this->db->query("select * from PivotPerformanceValue WHERE Tahun='".$tahun."' and Bulan='".$bulan."' and NAMA_KBA='".$this->session->userdata('NAMA_KBA')."' order by Tahun desc, Bulan asc, NAMA_KBA asc, NAMA_TL asc, NAMA_BA asc");
			}else{
				$query1 = $this->db->query("select * from PivotPerformanceValue WHERE Tahun='".$tahun."' and Bulan='".$bulan."' order by Tahun desc, Bulan asc, NAMA_KBA asc, NAMA_TL asc, NAMA_BA asc");
			}
			$i = 5;
			foreach($query1->result() as $absen){
				$objPHPExcel->setActiveSheetIndex(0)
							->setCellValue('A'.$i, $absen->Tahun)
							->setCellValue('B'.$i, $absen->Bulan)
							->setCellValue('C'.$i, $absen->NAMA_KBA)
							->setCellValue('D'.$i, $absen->NAMA_TL)
							->setCellValue('E'.$i, $absen->NAMA_BA)
							->setCellValue('F'.$i, $absen->H1)
							->setCellValue('G'.$i, $absen->H2)
							->setCellValue('H'.$i, $absen->H3)
							->setCellValue('I'.$i, $absen->H4)
							->setCellValue('J'.$i, $absen->H5)
							->setCellValue('K'.$i, $absen->H6)
							->setCellValue('L'.$i, $absen->H7)
							->setCellValue('M'.$i, $absen->H8)
							->setCellValue('N'.$i, $absen->H9)
							->setCellValue('O'.$i, $absen->H10)
							->setCellValue('P'.$i, $absen->H11)
							->setCellValue('Q'.$i, $absen->H12)
							->setCellValue('R'.$i, $absen->H13)
							->setCellValue('S'.$i, $absen->H14)
							->setCellValue('T'.$i, $absen->H15)
							->setCellValue('U'.$i, $absen->H16)
							->setCellValue('V'.$i, $absen->H17)
							->setCellValue('W'.$i, $absen->H18)
							->setCellValue('X'.$i, $absen->H19)
							->setCellValue('Y'.$i, $absen->H20)
							->setCellValue('Z'.$i, $absen->H21)
							->setCellValue('AA'.$i, $absen->H22)
							->setCellValue('AB'.$i, $absen->H23)
							->setCellValue('AC'.$i, $absen->H24)
							->setCellValue('AD'.$i, $absen->H25)
							->setCellValue('AE'.$i, $absen->H26)
							->setCellValue('AF'.$i, $absen->H27)
							->setCellValue('AG'.$i, $absen->H28)
							->setCellValue('AH'.$i, $absen->H29)
							->setCellValue('AI'.$i, $absen->H30)
							->setCellValue('AJ'.$i, $absen->H31)
							->setCellValue('AK'.$i, $absen->TotalValue);
						$i++;
			}
			
			//set title pada sheet (me rename nama sheet)
            $objPHPExcel->getActiveSheet()->setTitle('BA PERFORMANCE BY VALUE');
 
            //mulai menyimpan excel format xlsx, kalau ingin xls ganti Excel2007 menjadi Excel5          
            $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
 
            //sesuaikan headernya 
            header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
            header("Cache-Control: no-store, no-cache, must-revalidate");
            header("Cache-Control: post-check=0, pre-check=0", false);
            header("Pragma: no-cache");
            header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
            //ubah nama file saat diunduh
            header('Content-Disposition: attachment;filename="BAPerformanceValue.xls"');
            //unduh file
			$objWriter->save("php://output");
            //Mulai dari create object PHPExcel itu ada dokumentasi lengkapnya di PHPExcel, 
            // Folder Documentation dan Example
            // untuk belajar lebih jauh mengenai PHPExcel silakan buka disitu
			
		}
		
		function EC_report(){
			$this->load->library("Excel/PHPExcel");
			$tahun = $this->uri->segment(3);
			$bulan = $this->uri->segment(4);
            //membuat objek PHPExcel
            $objPHPExcel = new PHPExcel();
			
			$objPHPExcel->setActiveSheetIndex(0);
			
			$objPHPExcel->setActiveSheetIndex(0)
                    //mengisikan value pada tiap-tiap cell, A1 itu alamat cellnya 
                    //Hello merupakan isinya
                                        ->setCellValue('A1', 'BA CALL vs Effective Call')
                                        ->setCellValue('A2', 'Presensi Beauty Advisor (Valid SMS)')
                                        ->setCellValue('A3', 'period '.$tahun.', '.$bulan)
                                        ->setCellValue('A5', 'Tahun')
										->setCellValue('B5', 'Bulan')
										->setCellValue('C5', 'Nama KBA')
										->setCellValue('D5', 'Nama TL')
										->setCellValue('E5', 'Nama BA')
										->setCellValue('F4', 'DAY 1')
										->setCellValue('F5', 'Call')
										->setCellValue('G5', 'EC')
										->setCellValue('H4', 'DAY 2')
										->setCellValue('H5', 'Call')
										->setCellValue('I5', 'EC')
										->setCellValue('J4', 'DAY 3')
										->setCellValue('J5', 'Call')
										->setCellValue('K5', 'EC')
										->setCellValue('L4', 'DAY 4')
										->setCellValue('L5', 'Call')
										->setCellValue('M5', 'EC')
										->setCellValue('N4', 'DAY 5')
										->setCellValue('N5', 'Call')
										->setCellValue('O5', 'EC')
										->setCellValue('P4', 'DAY 6')
										->setCellValue('P5', 'Call')
										->setCellValue('Q5', 'EC')
										->setCellValue('R4', 'DAY 7')
										->setCellValue('R5', 'Call')
										->setCellValue('S5', 'EC')
										->setCellValue('T4', 'DAY 8')
										->setCellValue('T5', 'Call')
										->setCellValue('U5', 'EC')
										->setCellValue('V4', 'DAY 9')
										->setCellValue('V5', 'Call')
										->setCellValue('W5', 'EC')
										->setCellValue('X4', 'DAY 10')
										->setCellValue('X5', 'Call')
										->setCellValue('Y5', 'EC')
										->setCellValue('Z4', 'DAY 11')
										->setCellValue('Z5', 'Call')
										->setCellValue('AA5', 'EC')
										->setCellValue('AB4', 'DAY 12')
										->setCellValue('AB5', 'Call')
										->setCellValue('AC5', 'EC')
										->setCellValue('AD4', 'DAY 13')
										->setCellValue('AD5', 'Call')
										->setCellValue('AE5', 'EC')
										->setCellValue('AF4', 'DAY 14')
										->setCellValue('AF5', 'Call')
										->setCellValue('AG5', 'EC')
										->setCellValue('AH4', 'DAY 15')
										->setCellValue('AH5', 'Call')
										->setCellValue('AI5', 'EC')
										->setCellValue('AJ4', 'DAY 16')
										->setCellValue('AJ5', 'Call')
										->setCellValue('AK5', 'EC')
										->setCellValue('AL4', 'DAY 17')
										->setCellValue('AL5', 'Call')
										->setCellValue('AM5', 'EC')
										->setCellValue('AN4', 'DAY 18')
										->setCellValue('AN5', 'Call')
										->setCellValue('AO5', 'EC')
										->setCellValue('AP4', 'DAY 19')
										->setCellValue('AP5', 'Call')
										->setCellValue('AQ5', 'EC')
										->setCellValue('AR4', 'DAY 20')
										->setCellValue('AR5', 'Call')
										->setCellValue('AS5', 'EC')
										->setCellValue('AT4', 'DAY 21')
										->setCellValue('AT5', 'Call')
										->setCellValue('AU5', 'EC')
										->setCellValue('AV4', 'DAY 22')
										->setCellValue('AV5', 'Call')
										->setCellValue('AW5', 'EC')
										->setCellValue('AX4', 'DAY 23')
										->setCellValue('AX5', 'Call')
										->setCellValue('AY5', 'EC')
										->setCellValue('AZ4', 'DAY 24')
										->setCellValue('AZ5', 'Call')
										->setCellValue('BA5', 'EC')
										->setCellValue('BB4', 'DAY 25')
										->setCellValue('BB5', 'Call')
										->setCellValue('BC5', 'EC')
										->setCellValue('BD4', 'DAY 26')
										->setCellValue('BD5', 'Call')
										->setCellValue('BE5', 'EC')
										->setCellValue('BF4', 'DAY 27')
										->setCellValue('BF5', 'Call')
										->setCellValue('BG5', 'EC')
										->setCellValue('BH4', 'DAY 28')
										->setCellValue('BH5', 'Call')
										->setCellValue('BI5', 'EC')
										->setCellValue('BJ4', 'DAY 29')
										->setCellValue('BJ5', 'Call')
										->setCellValue('BK5', 'EC')
										->setCellValue('BL4', 'DAY 30')
										->setCellValue('BL5', 'Call')
										->setCellValue('BM5', 'EC')
										->setCellValue('BN4', 'DAY 31')
										->setCellValue('BN5', 'Call')
										->setCellValue('BO5', 'EC')
										->setCellValue('BP5', 'Total Call')
										->setCellValue('BQ5', 'Total EC');
			
			if($this->session->userdata('area') != 'all'){
				$query1 = $this->db->query("select * from PivotCall WHERE Tahun='".$tahun."' and Bulan='".$bulan."' and NAMA_KBA='".$this->session->userdata('NAMA_KBA')."' order by Tahun desc, Bulan asc, NAMA_KBA asc, NAMA_TL asc, NAMA_BA asc");
			}else{
				$query1 = $this->db->query("select * from PivotCall WHERE Tahun='".$tahun."' and Bulan='".$bulan."' order by Tahun desc, Bulan asc, NAMA_KBA asc, NAMA_TL asc, NAMA_BA asc");
			}
			
			$i = 6;
			foreach($query1->result() as $call){
				$objPHPExcel->setActiveSheetIndex(0)
										->setCellValue('A'.$i, $call->Tahun)
										->setCellValue('B'.$i, $call->Bulan)
										->setCellValue('C'.$i, $call->NAMA_KBA)
										->setCellValue('D'.$i, $call->NAMA_TL)
										->setCellValue('E'.$i, $call->NAMA_BA)
										->setCellValue('F'.$i, $call->H1C)
										->setCellValue('G'.$i, $call->H1EC)
										->setCellValue('H'.$i, $call->H2C)
										->setCellValue('I'.$i, $call->H2EC)
										->setCellValue('J'.$i, $call->H3C)
										->setCellValue('K'.$i, $call->H3EC)
										->setCellValue('L'.$i, $call->H4C)
										->setCellValue('M'.$i, $call->H4EC)
										->setCellValue('N'.$i, $call->H5C)
										->setCellValue('O'.$i, $call->H5EC)
										->setCellValue('P'.$i, $call->H6C)
										->setCellValue('Q'.$i, $call->H6EC)
										->setCellValue('R'.$i, $call->H7C)
										->setCellValue('S'.$i, $call->H7EC)
										->setCellValue('T'.$i, $call->H8C)
										->setCellValue('U'.$i, $call->H8EC)
										->setCellValue('V'.$i, $call->H9C)
										->setCellValue('W'.$i, $call->H9EC)
										->setCellValue('X'.$i, $call->H10C)
										->setCellValue('Y'.$i, $call->H10EC)
										->setCellValue('Z'.$i, $call->H11C)
										->setCellValue('AA'.$i, $call->H11EC)
										->setCellValue('AB'.$i, $call->H12C)
										->setCellValue('AC'.$i, $call->H12EC)
										->setCellValue('AD'.$i, $call->H13C)
										->setCellValue('AE'.$i, $call->H13EC)
										->setCellValue('AF'.$i, $call->H14C)
										->setCellValue('AG'.$i, $call->H14EC)
										->setCellValue('AH'.$i, $call->H15C)
										->setCellValue('AI'.$i, $call->H15EC)
										->setCellValue('AJ'.$i, $call->H16C)
										->setCellValue('AK'.$i, $call->H16EC)
										->setCellValue('AL'.$i, $call->H17C)
										->setCellValue('AM'.$i, $call->H17EC)
										->setCellValue('AN'.$i, $call->H18C)
										->setCellValue('AO'.$i, $call->H18EC)
										->setCellValue('AP'.$i, $call->H19C)
										->setCellValue('AQ'.$i, $call->H19EC)
										->setCellValue('AR'.$i, $call->H20C)
										->setCellValue('AS'.$i, $call->H20EC)
										->setCellValue('AT'.$i, $call->H21C)
										->setCellValue('AU'.$i, $call->H21EC)
										->setCellValue('AV'.$i, $call->H22C)
										->setCellValue('AW'.$i, $call->H22EC)
										->setCellValue('AX'.$i, $call->H23C)
										->setCellValue('AY'.$i, $call->H23EC)
										->setCellValue('AZ'.$i, $call->H24C)
										->setCellValue('BA'.$i, $call->H24EC)
										->setCellValue('BB'.$i, $call->H25C)
										->setCellValue('BC'.$i, $call->H25EC)
										->setCellValue('BD'.$i, $call->H26C)
										->setCellValue('BE'.$i, $call->H26EC)
										->setCellValue('BF'.$i, $call->H27C)
										->setCellValue('BG'.$i, $call->H27EC)
										->setCellValue('BH'.$i, $call->H28C)
										->setCellValue('BI'.$i, $call->H28EC)
										->setCellValue('BJ'.$i, $call->H29C)
										->setCellValue('BK'.$i, $call->H29EC)
										->setCellValue('BL'.$i, $call->H30C)
										->setCellValue('BM'.$i, $call->H30EC)
										->setCellValue('BN'.$i, $call->H31C)
										->setCellValue('BO'.$i, $call->H31EC)
										->setCellValue('BP'.$i, $call->TotalCall)
										->setCellValue('BQ'.$i, $call->TotalEC);
						$i++;
			}
			
			//set title pada sheet (me rename nama sheet)
            $objPHPExcel->getActiveSheet()->setTitle('BA Call & EC');
 
            //mulai menyimpan excel format xlsx, kalau ingin xls ganti Excel2007 menjadi Excel5          
            $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
 
            //sesuaikan headernya 
            header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
            header("Cache-Control: no-store, no-cache, must-revalidate");
            header("Cache-Control: post-check=0, pre-check=0", false);
            header("Pragma: no-cache");
            header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
            //ubah nama file saat diunduh
            header('Content-Disposition: attachment;filename="BACallEC.xls"');
            //unduh file
			$objWriter->save("php://output");
            //Mulai dari create object PHPExcel itu ada dokumentasi lengkapnya di PHPExcel, 
            // Folder Documentation dan Example
            // untuk belajar lebih jauh mengenai PHPExcel silakan buka disitu
			
		}
		
		function absent_report(){
			$this->load->library("Excel/PHPExcel");
			$tahun = $this->uri->segment(3);
			$bulan = $this->uri->segment(4);
            //membuat objek PHPExcel
            $objPHPExcel = new PHPExcel();
			
			$objPHPExcel->setActiveSheetIndex(0);
			
			$objPHPExcel->setActiveSheetIndex(0)
                    //mengisikan value pada tiap-tiap cell, A1 itu alamat cellnya 
                    //Hello merupakan isinya
                                        ->setCellValue('A1', 'BA ABSENT')
                                        ->setCellValue('A2', 'Presensi Beauty Advisor (Valid SMS)')
                                        ->setCellValue('A3', 'period '.$tahun.', '.$bulan)
                                        ->setCellValue('A4', 'Tahun')
										->setCellValue('B4', 'Bulan')
										->setCellValue('C4', 'Nama KBA')
										->setCellValue('D4', 'Nama TL')
										->setCellValue('E4', 'Nama BA')
										->setCellValue('F4', 'Hari ke 1')
										->setCellValue('G4', 'Hari ke 2')
										->setCellValue('H4', 'Hari ke 3')
										->setCellValue('I4', 'Hari ke 4')
										->setCellValue('J4', 'Hari ke 5')
										->setCellValue('K4', 'Hari ke 6')
										->setCellValue('L4', 'Hari ke 7')
										->setCellValue('M4', 'Hari ke 8')
										->setCellValue('N4', 'Hari ke 9')
										->setCellValue('O4', 'Hari ke 10')
										->setCellValue('P4', 'Hari ke 11')
										->setCellValue('Q4', 'Hari ke 12')
										->setCellValue('R4', 'Hari ke 13')
										->setCellValue('S4', 'Hari ke 14')
										->setCellValue('T4', 'Hari ke 15')
										->setCellValue('U4', 'Hari ke 16')
										->setCellValue('V4', 'Hari ke 17')
										->setCellValue('W4', 'Hari ke 18')
										->setCellValue('X4', 'Hari ke 19')
										->setCellValue('Y4', 'Hari ke 20')
										->setCellValue('Z4', 'Hari ke 21')
										->setCellValue('AA4', 'Hari ke 22')
										->setCellValue('AB4', 'Hari ke 23')
										->setCellValue('AC4', 'Hari ke 24')
										->setCellValue('AD4', 'Hari ke 25')
										->setCellValue('AE4', 'Hari ke 26')
										->setCellValue('AF4', 'Hari ke 27')
										->setCellValue('AG4', 'Hari ke 28')
										->setCellValue('AH4', 'Hari ke 29')
										->setCellValue('AI4', 'Hari ke 30')
										->setCellValue('AJ4', 'Hari ke 31');
			
			if($this->session->userdata('area') != 'all'){
				$query1 = $this->db->query("select * from PivotAbsen WHERE Tahun='".$tahun."' and Bulan='".$bulan."' and NAMA_KBA='".$this->session->userdata('NAMA_KBA')."' order by Tahun desc, Bulan asc, NAMA_KBA asc, NAMA_TL asc, NAMA_BA asc");
			}else{
				$query1 = $this->db->query("select * from PivotAbsen WHERE Tahun='".$tahun."' and Bulan='".$bulan."' order by Tahun desc, Bulan asc, NAMA_KBA asc, NAMA_TL asc, NAMA_BA asc");
			}
			
			$i = 5;
			foreach($query1->result() as $absen){
				$objPHPExcel->setActiveSheetIndex(0)
							->setCellValue('A'.$i, $absen->Tahun)
							->setCellValue('B'.$i, $absen->Bulan)
							->setCellValue('C'.$i, $absen->NAMA_KBA)
							->setCellValue('D'.$i, $absen->NAMA_TL)
							->setCellValue('E'.$i, $absen->NAMA_BA)
							->setCellValue('F'.$i, $absen->H1)
							->setCellValue('G'.$i, $absen->H2)
							->setCellValue('H'.$i, $absen->H3)
							->setCellValue('I'.$i, $absen->H4)
							->setCellValue('J'.$i, $absen->H5)
							->setCellValue('K'.$i, $absen->H6)
							->setCellValue('L'.$i, $absen->H7)
							->setCellValue('M'.$i, $absen->H8)
							->setCellValue('N'.$i, $absen->H9)
							->setCellValue('O'.$i, $absen->H10)
							->setCellValue('P'.$i, $absen->H11)
							->setCellValue('Q'.$i, $absen->H12)
							->setCellValue('R'.$i, $absen->H13)
							->setCellValue('S'.$i, $absen->H14)
							->setCellValue('T'.$i, $absen->H15)
							->setCellValue('U'.$i, $absen->H16)
							->setCellValue('V'.$i, $absen->H17)
							->setCellValue('W'.$i, $absen->H18)
							->setCellValue('X'.$i, $absen->H19)
							->setCellValue('Y'.$i, $absen->H20)
							->setCellValue('Z'.$i, $absen->H21)
							->setCellValue('AA'.$i, $absen->H22)
							->setCellValue('AB'.$i, $absen->H23)
							->setCellValue('AC'.$i, $absen->H24)
							->setCellValue('AD'.$i, $absen->H25)
							->setCellValue('AE'.$i, $absen->H26)
							->setCellValue('AF'.$i, $absen->H27)
							->setCellValue('AG'.$i, $absen->H28)
							->setCellValue('AH'.$i, $absen->H29)
							->setCellValue('AI'.$i, $absen->H30)
							->setCellValue('AJ'.$i, $absen->H31);
						$i++;
			}
			
			//set title pada sheet (me rename nama sheet)
            $objPHPExcel->getActiveSheet()->setTitle('ABSEN BA');
 
            //mulai menyimpan excel format xlsx, kalau ingin xls ganti Excel2007 menjadi Excel5          
            $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
 
            //sesuaikan headernya 
            header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
            header("Cache-Control: no-store, no-cache, must-revalidate");
            header("Cache-Control: post-check=0, pre-check=0", false);
            header("Pragma: no-cache");
            header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
            //ubah nama file saat diunduh
            header('Content-Disposition: attachment;filename="absentBA.xls"');
            //unduh file
			$objWriter->save("php://output");
            //Mulai dari create object PHPExcel itu ada dokumentasi lengkapnya di PHPExcel, 
            // Folder Documentation dan Example
            // untuk belajar lebih jauh mengenai PHPExcel silakan buka disitu
			
		}
		
		function sms_report(){
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
                                        ->setCellValue('A1', 'DAILY REPORT SMS GATEWAY')
                                        ->setCellValue('A2', 'RESULT SMS GATEWAY')
                                        ->setCellValue('A3', 'period '.$from.' to '.$to)
                                        ->setCellValue('A4', 'RECEIVE DATE')
										->setCellValue('B4', 'SENDER NUMBER')
										->setCellValue('C4', 'BA ID From Message')
										->setCellValue('D4', 'BA Name')
										->setCellValue('E4', 'TL ID')
										->setCellValue('F4', 'TL NAME')
										->setCellValue('G4', 'TL COVERAGE')
										->setCellValue('H4', 'KBA ID')
										->setCellValue('I4', 'AREA ID')
										->setCellValue('J4', 'OUTLET ID FROM MESSAGE')
										->setCellValue('K4', 'OUTLET NAME')
										->setCellValue('L4', 'BA ID')
										->setCellValue('M4', 'OUTLET AREA')
										->setCellValue('N4', 'MATCH BA STATUS')
										->setCellValue('O4', 'FREQ SMS')
										->setCellValue('P4', 'TEXTSMS')
										->setCellValue('Q4', 'PROCESSED STATUS')
										->setCellValue('R4', 'PROCESSED DATE')
										->setCellValue('S4', 'REPLY SMS');
                    //mengisikan value pada tiap-tiap cell, A1 itu alamat cellnya 
                    //Hello merupakan isinya
			$query1 = $this->db->query("select * from Final_Inbox WHERE ReceiveDt >= '".$from."' and [ReceiveDt] <= DATEADD(day, +1, '".$to."') order by ReceiveDt desc");
			$i = 5;

			foreach($query1->result() as $final){
				//echo $final->ReceiveDt;
				$pos = strpos(substr($final->TextSMS,13,8),'#');
				if($pos){
					$kode_toko = substr($final->TextSMS,13,6);
				}else{
					$kode_toko = substr($final->TextSMS,13,8);
				}
				$objPHPExcel->setActiveSheetIndex(0)
							->setCellValue('A'.$i, $final->ReceiveDt)
							->setCellValue('B'.$i, $final->SenderNumber)
							->setCellValue('C'.$i, $final->ID_BA);
				$query2 = $this->db->query("select * from Ms_BA WHERE ID_BA='".$final->ID_BA."' order by ID_BA desc");
				foreach($query2->result() as $ba){
					$objPHPExcel->setActiveSheetIndex(0)
						->setCellValue('D'.$i, $ba->NAMA_BA)
						->setCellValue('E'.$i, $ba->ID_TL);
					$query3 = $this->db->query("select * from Ms_TL WHERE ID_TL='".$ba->ID_TL."' order by ID_TL desc");
					foreach($query3->result() as $tl){
						$objPHPExcel->setActiveSheetIndex(0)
							->setCellValue('F'.$i, $tl->NAMA_TL)
							->setCellValue('G'.$i, $tl->COVERAGE_TL)
							->setCellValue('H'.$i, $tl->ID_KBA)
							->setCellValue('I'.$i, $tl->ID_AREA);
					}
				}
				
				$objPHPExcel->setActiveSheetIndex(0)
					->setCellValue('J'.$i, $kode_toko);
				
				$query4 = $this->db->query("select * from Ms_OUTLET WHERE ID_OUTLET='".$kode_toko."' order by ID_OUTLET desc");
				foreach($query4->result() as $outlet){
				$objPHPExcel->setActiveSheetIndex(0)
					->setCellValue('K'.$i, $outlet->NAMA_OUTLET)
					->setCellValue('L'.$i, $outlet->ID_BA)
					->setCellValue('M'.$i, $outlet->ID_AREA);
				}
					
							if($outlet->ID_BA == $final->ID_BA){
								$objPHPExcel->setActiveSheetIndex(0)->setCellValue('N'.$i, 'MATCH');
							}else{
								$objPHPExcel->setActiveSheetIndex(0)->setCellValue('N'.$i, 'DIFFERENT');
							}
							$objPHPExcel->setActiveSheetIndex(0)
							->setCellValue('O'.$i, $final->FreqSMS)
							->setCellValue('P'.$i, $final->TextSMS)
							->setCellValue('Q'.$i, $final->Processed)
							->setCellValue('R'.$i, $final->ProcessedDt)
							->setCellValue('S'.$i, $final->ReplySMS);
							$i++;
			}
			
            //set title pada sheet (me rename nama sheet)
            $objPHPExcel->getActiveSheet()->setTitle('Data SMS');
 
            //mulai menyimpan excel format xlsx, kalau ingin xls ganti Excel2007 menjadi Excel5          
            $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
 
            //sesuaikan headernya 
            header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
            header("Cache-Control: no-store, no-cache, must-revalidate");
            header("Cache-Control: post-check=0, pre-check=0", false);
            header("Pragma: no-cache");
            header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
            //ubah nama file saat diunduh
            header('Content-Disposition: attachment;filename="datasms.xls"');
            //unduh file
			$objWriter->save("php://output");
            //Mulai dari create object PHPExcel itu ada dokumentasi lengkapnya di PHPExcel, 
            // Folder Documentation dan Example
            // untuk belajar lebih jauh mengenai PHPExcel silakan buka disitu
			
		}

		/*function absent_report(){
			//load librarynya terlebih dahulu
            //jika digunakan terus menerus lebih baik load ini ditaruh di auto load
            $this->load->library("Excel/PHPExcel");
			$bulan = $this->input->post('bulan');
			$tahun = $this->input->post('tahun');
            //membuat objek PHPExcel
            $objPHPExcel = new PHPExcel();
 
            //set Sheet yang akan diolah 
            $objPHPExcel->setActiveSheetIndex(0);
			
			$objPHPExcel->setActiveSheetIndex(0)
                                        ->setCellValue('A1', 'DATA INFORMATION FOR PIVOT ABSENT')
                                        ->setCellValue('A2', 'RESULT SMS GATEWAY')
                                        ->setCellValue('A3', 'period '.$tahun.' , '.date('F', mktime(0, 0, 0, $bulan, 10)));
                                    
			//$data_query = $this->db->query("SELECT distinct [View_ADI_Qlik_Absen].[ID_BA], [Ms_BA].[NAMA_BA], [Ms_TL].[NAMA_TL],[Ms_KBA].[NAMA_KBA] FROM [SMS_Live].[dbo].[View_ADI_Qlik_Absen],[SMS_Live].[dbo].[Ms_BA],[SMS_Live].[dbo].[Ms_TL],[SMS_Live].[dbo].[Ms_KBA] where [View_ADI_Qlik_Absen].[ID_BA]=[Ms_BA].[ID_BA] and [Ms_TL].[ID_TL]=[Ms_BA].[ID_TL] and [Ms_KBA].[ID_KBA]=[Ms_TL].[ID_KBA] and [View_ADI_Qlik_Absen].[Tahun] = '2016' and [View_ADI_Qlik_Absen].[Bulan] = '5' and  [Ms_KBA].[ID_KBA] = 'KO001' and [Ms_TL].[ID_TL] = 'TL001' ORDER BY [Ms_KBA].[NAMA_KBA],[Ms_TL].[NAMA_TL],[Ms_BA].[NAMA_BA]");
			$data_query = $this->db->query("SELECT distinct [ID_BA], [NAMA_BA], [NAMA_TL], [NAMA_KBA] FROM [SMS_Live].[dbo].[View_EVAN_Qlik_Absen] where [Tahun] = '2016' and [Bulan] = '5' and  [ID_KBA] = 'KO001' and [ID_TL] = 'TL001' ORDER BY [NAMA_KBA],[NAMA_TL],[NAMA_BA]");
			$max_query = $this->db->query("SELECT max([Tgl]) as tgl FROM [SMS_Live].[dbo].[View_EVAN_Qlik_Absen] where [Tahun] = '2016' and [Bulan] = '5'");
			foreach($max_query->result() as $max){
				$max_tgl = $max->tgl;
			}
			
			$alpha = 'E';
			$row = '5';
			$tgl = 1;
			$objPHPExcel->setActiveSheetIndex(0)
						->setCellValue('A5', "NAMA KBA")
						->setCellValue('B5', "NAMA TL")
						->setCellValue('C5', "NAMA BA")
						->setCellValue('D5', "TGL");

			for ($i = 1; $i <= $max_tgl; $i++) {
				//Header Field
				
				$objPHPExcel->setActiveSheetIndex(0)
							->setCellValue($alpha.$row, $tgl);
				$tgl++;
				$alpha++;
			}
			
			$urut = 6;
			foreach($data_query->result() as $ba){
				$objPHPExcel->setActiveSheetIndex(0)
							->setCellValue('A'.$urut, $ba->NAMA_KBA)
							->setCellValue('B'.$urut, $ba->NAMA_TL)
							->setCellValue('C'.$urut, $ba->NAMA_BA);
				$urut++;
			}
			$urut2 = 6;
			$alpha2 = 'E';
			$tgl2 = 1;
			foreach($data_query->result() as $ba){
				/*$objPHPExcel->setActiveSheetIndex(0)
							->setCellValue('A'.$urut, $ba->NAMA_KBA)
							->setCellValue('B'.$urut, $ba->NAMA_TL)
							->setCellValue('C'.$urut, $ba->NAMA_BA);*/
			/*	for ($i = 1; $i <= $max_tgl; $i++) {
					$query_absent = $this->db->query("SELECT [ID_BA] FROM [SMS_Live].[dbo].[View_EVAN_Qlik_Absen] where [Tahun] = '2016' and [Bulan] = '5' and [Tgl] = '".$tgl2."' and [ID_BA]='".$ba->ID_BA."' ORDER BY [Tahun] desc,[Bulan],[Tgl],[ID_BA]");
					if($query_absent->num_rows() == 0){
						$objPHPExcel->setActiveSheetIndex(0)
								->setCellValue($alpha2.$urut2, '-');
					}
					else{
						$objPHPExcel->setActiveSheetIndex(0)
								->setCellValue($alpha2.$urut2, '1');
					}			
					$tgl2++;
					$alpha2++;
				}
				
				$urut2++;
				$alpha2 = 'E';
				$tgl2 = 1;
			}
			
            //set title pada sheet (me rename nama sheet)
            $objPHPExcel->getActiveSheet()->setTitle('Data ABSENT');
 
            //mulai menyimpan excel format xlsx, kalau ingin xls ganti Excel2007 menjadi Excel5          
            $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
 
            //sesuaikan headernya 
            header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
            header("Cache-Control: no-store, no-cache, must-revalidate");
            header("Cache-Control: post-check=0, pre-check=0", false);
            header("Pragma: no-cache");
            header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
            //ubah nama file saat diunduh
            header('Content-Disposition: attachment;filename="infoabsent"'.date('YMdHis').'".xls"');
            //unduh file
			$objWriter->save("php://output");
            //Mulai dari create object PHPExcel itu ada dokumentasi lengkapnya di PHPExcel, 
            // Folder Documentation dan Example
            // untuk belajar lebih jauh mengenai PHPExcel silakan buka disitu
		}*/
		
		
		
		function recap_sellout_report_ntspc(){
			$this->load->library("Excel/PHPExcel");
			$tahun = $this->uri->segment(3);
			$bulan = $this->uri->segment(4);
            //membuat objek PHPExcel
            $objPHPExcel = new PHPExcel();
			
			$objPHPExcel->setActiveSheetIndex(0);
			
			$objPHPExcel->setActiveSheetIndex(0)
                    //mengisikan value pada tiap-tiap cell, A1 itu alamat cellnya 
                    //Hello merupakan isinya
                                        ->setCellValue('A1', 'RECAPITULATION SELL OUT BY BRAND (NOT SPECIFIC PRODUCTS)')
                                        ->setCellValue('A2', 'Presensi Beauty Advisor (Valid SMS)')
                                        ->setCellValue('A3', 'period '.$tahun.', '.$bulan)
                                        ->setCellValue('A5', 'Tahun')
										->setCellValue('B5', 'Bulan')
										->setCellValue('C5', 'Nama KBA')
										->setCellValue('D5', 'Nama TL')
										->setCellValue('E5', 'Nama BA')
										
										->setCellValue('F4', 'PURBASARI')
										->setCellValue('F5', 'QTY / UNIT')
										->setCellValue('G5', 'VALUE / AMOUNT')
										
										->setCellValue('H4', 'AMARA')
										->setCellValue('H5', 'QTY / UNIT')
										->setCellValue('I5', 'VALUE / AMOUNT')
										
										->setCellValue('J4', 'NEW CELL')
										->setCellValue('J5', 'QTY / UNIT')
										->setCellValue('K5', 'VALUE / AMOUNT')
										
										->setCellValue('L4', 'KANNA')
										->setCellValue('L5', 'QTY / UNIT')
										->setCellValue('M5', 'VALUE / AMOUNT')
										
										->setCellValue('N4', 'TOTAL')
										->setCellValue('N5', 'QTY / UNIT')
										->setCellValue('O5', 'VALUE / AMOUNT');
			
			if($this->session->userdata('area') != 'all'){
				$query1 = $this->db->query("select * from Pivot_Recap_Sell_Out_NTSPC WHERE Tahun='".$tahun."' and Bulan='".$bulan."' and NAMA_KBA='".$this->session->userdata('NAMA_KBA')."' order by Tahun desc, Bulan asc, NAMA_KBA asc, NAMA_TL asc, NAMA_BA asc");
			}else{
				$query1 = $this->db->query("select * from Pivot_Recap_Sell_Out_NTSPC WHERE Tahun='".$tahun."' and Bulan='".$bulan."' order by Tahun desc, Bulan asc, NAMA_KBA asc, NAMA_TL asc, NAMA_BA asc");
			}
			$i = 6;
			foreach($query1->result() as $absen){
				$objPHPExcel->setActiveSheetIndex(0)
							->setCellValue('A'.$i, $absen->Tahun)
							->setCellValue('B'.$i, $absen->Bulan)
							->setCellValue('C'.$i, $absen->NAMA_KBA)
							->setCellValue('D'.$i, $absen->NAMA_TL)
							->setCellValue('E'.$i, $absen->NAMA_BA)
							->setCellValue('F'.$i, $absen->PurbasariQty)
							->setCellValue('G'.$i, $absen->PurbasariValue)
							->setCellValue('H'.$i, $absen->AmaraQty)
							->setCellValue('I'.$i, $absen->AmaraValue)
							->setCellValue('J'.$i, $absen->NewCellQty)
							->setCellValue('K'.$i, $absen->NewCellValue)
							->setCellValue('L'.$i, $absen->KannaQty)
							->setCellValue('M'.$i, $absen->KannaValue)
							->setCellValue('N'.$i, $absen->TotalQty)
							->setCellValue('O'.$i, $absen->TotalValue);
						$i++;
			}
			
			//set title pada sheet (me rename nama sheet)
            $objPHPExcel->getActiveSheet()->setTitle('RECAPITULATION NTSPC');
 
            //mulai menyimpan excel format xlsx, kalau ingin xls ganti Excel2007 menjadi Excel5          
            $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
 
            //sesuaikan headernya 
            header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
            header("Cache-Control: no-store, no-cache, must-revalidate");
            header("Cache-Control: post-check=0, pre-check=0", false);
            header("Pragma: no-cache");
            header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
            //ubah nama file saat diunduh
            header('Content-Disposition: attachment;filename="BARecapSellOutBrandsNTSPC.xls"');
            //unduh file
			$objWriter->save("php://output");
            //Mulai dari create object PHPExcel itu ada dokumentasi lengkapnya di PHPExcel, 
            // Folder Documentation dan Example
            // untuk belajar lebih jauh mengenai PHPExcel silakan buka disitu
		}
		
		function sellingout_qty_report_ntspc(){
			ini_set('memory_limit', '-1');

			$this->load->library("Excel/PHPExcel");
			$tahun = $this->uri->segment(3);
			$bulan = $this->uri->segment(4);
            //membuat objek PHPExcel
            $objPHPExcel = new PHPExcel();
			
			$objPHPExcel->setActiveSheetIndex(0);
			
			$objPHPExcel->setActiveSheetIndex(0)
                    //mengisikan value pada tiap-tiap cell, A1 itu alamat cellnya 
                    //Hello merupakan isinya
                                        ->setCellValue('A1', 'SELLING OUT BY UNIT (NOT SPECIFIC PRODUCTS)')
                                        ->setCellValue('A2', 'Presensi Beauty Advisor (Valid SMS)')
                                        ->setCellValue('A3', 'period '.$tahun.', '.$bulan)
                                        ->setCellValue('A4', 'Tahun')
										->setCellValue('B4', 'Bulan')
										->setCellValue('C4', 'Nama KBA')
										->setCellValue('D4', 'Nama TL')
										->setCellValue('E4', 'Nama BA')
										->setCellValue('F4', 'Brand')
										->setCellValue('G4', 'ProductGroup')
										->setCellValue('H4', 'DescBaru')
										->setCellValue('I4', 'Hari ke 1')
										->setCellValue('J4', 'Hari ke 2')
										->setCellValue('K4', 'Hari ke 3')
										->setCellValue('L4', 'Hari ke 4')
										->setCellValue('M4', 'Hari ke 5')
										->setCellValue('N4', 'Hari ke 6')
										->setCellValue('O4', 'Hari ke 7')
										->setCellValue('P4', 'Hari ke 8')
										->setCellValue('Q4', 'Hari ke 9')
										->setCellValue('R4', 'Hari ke 10')
										->setCellValue('S4', 'Hari ke 11')
										->setCellValue('T4', 'Hari ke 12')
										->setCellValue('U4', 'Hari ke 13')
										->setCellValue('V4', 'Hari ke 14')
										->setCellValue('W4', 'Hari ke 15')
										->setCellValue('X4', 'Hari ke 16')
										->setCellValue('Y4', 'Hari ke 17')
										->setCellValue('Z4', 'Hari ke 18')
										->setCellValue('AA4', 'Hari ke 19')
										->setCellValue('AB4', 'Hari ke 20')
										->setCellValue('AC4', 'Hari ke 21')
										->setCellValue('AD4', 'Hari ke 22')
										->setCellValue('AE4', 'Hari ke 23')
										->setCellValue('AF4', 'Hari ke 24')
										->setCellValue('AG4', 'Hari ke 25')
										->setCellValue('AH4', 'Hari ke 26')
										->setCellValue('AI4', 'Hari ke 27')
										->setCellValue('AJ4', 'Hari ke 28')
										->setCellValue('AK4', 'Hari ke 29')
										->setCellValue('AL4', 'Hari ke 30')
										->setCellValue('AM4', 'Hari ke 31')
										->setCellValue('AN4', 'Total Unit');
			
			if($this->session->userdata('area') != 'all'){
				$query1 = $this->db->query("select * from PivotSellProductUnitNTSPC WHERE Tahun='".$tahun."' and Bulan='".$bulan."' and NAMA_KBA='".$this->session->userdata('NAMA_KBA')."' order by Tahun desc, Bulan asc, NAMA_KBA asc, NAMA_TL asc, NAMA_BA asc, Brand asc, ProductGroup asc, DescBaru asc");
			}else{
				$query1 = $this->db->query("select * from PivotSellProductUnitNTSPC WHERE Tahun='".$tahun."' and Bulan='".$bulan."' order by Tahun desc, Bulan asc, NAMA_KBA asc, NAMA_TL asc, NAMA_BA asc, Brand asc, ProductGroup asc, DescBaru asc");
			}
			$i = 5;
			foreach($query1->result() as $absen){
				$objPHPExcel->setActiveSheetIndex(0)
							->setCellValue('A'.$i, $absen->Tahun)
							->setCellValue('B'.$i, $absen->Bulan)
							->setCellValue('C'.$i, $absen->NAMA_KBA)
							->setCellValue('D'.$i, $absen->NAMA_TL)
							->setCellValue('E'.$i, $absen->NAMA_BA)
							->setCellValue('F'.$i, $absen->Brand)
							->setCellValue('G'.$i, $absen->ProductGroup)
							->setCellValue('H'.$i, $absen->DescBaru)
							->setCellValue('I'.$i, $absen->H1)
							->setCellValue('J'.$i, $absen->H2)
							->setCellValue('K'.$i, $absen->H3)
							->setCellValue('L'.$i, $absen->H4)
							->setCellValue('M'.$i, $absen->H5)
							->setCellValue('N'.$i, $absen->H6)
							->setCellValue('O'.$i, $absen->H7)
							->setCellValue('P'.$i, $absen->H8)
							->setCellValue('Q'.$i, $absen->H9)
							->setCellValue('R'.$i, $absen->H10)
							->setCellValue('S'.$i, $absen->H11)
							->setCellValue('T'.$i, $absen->H12)
							->setCellValue('U'.$i, $absen->H13)
							->setCellValue('V'.$i, $absen->H14)
							->setCellValue('W'.$i, $absen->H15)
							->setCellValue('X'.$i, $absen->H16)
							->setCellValue('Y'.$i, $absen->H17)
							->setCellValue('Z'.$i, $absen->H18)
							->setCellValue('AA'.$i, $absen->H19)
							->setCellValue('AB'.$i, $absen->H20)
							->setCellValue('AC'.$i, $absen->H21)
							->setCellValue('AD'.$i, $absen->H22)
							->setCellValue('AE'.$i, $absen->H23)
							->setCellValue('AF'.$i, $absen->H24)
							->setCellValue('AG'.$i, $absen->H25)
							->setCellValue('AH'.$i, $absen->H26)
							->setCellValue('AI'.$i, $absen->H27)
							->setCellValue('AJ'.$i, $absen->H28)
							->setCellValue('AK'.$i, $absen->H29)
							->setCellValue('AL'.$i, $absen->H30)
							->setCellValue('AM'.$i, $absen->H31)
							->setCellValue('AN'.$i, $absen->TotalUnit);
						$i++;
			}
			//set title pada sheet (me rename nama sheet)
            $objPHPExcel->getActiveSheet()->setTitle('SELLOUT UNIT NTSPC');
			
			
			//$objPHPExcel->disconnectWorksheets(); 
			//unset($objPHPExcel);
			//$i++;
			
            //mulai menyimpan excel format xlsx, kalau ingin xls ganti Excel2007 menjadi Excel5          
            $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
 
            //sesuaikan headernya 
            header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
            header("Cache-Control: no-store, no-cache, must-revalidate");
            header("Cache-Control: post-check=0, pre-check=0", false);
            header("Pragma: no-cache");
            header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
            //ubah nama file saat diunduh
            header('Content-Disposition: attachment;filename="SellingoutUnitNTSPC.xls"');
            //unduh file
			$objWriter->save("php://output");
            //Mulai dari create object PHPExcel itu ada dokumentasi lengkapnya di PHPExcel, 
            // Folder Documentation dan Example
            // untuk belajar lebih jauh mengenai PHPExcel silakan buka disitu
			
		}
		
		function sellingout_value_report_ntspc(){
			ini_set('memory_limit', '-1');
			$this->load->library("Excel/PHPExcel");
			$tahun = $this->uri->segment(3);
			$bulan = $this->uri->segment(4);
            //membuat objek PHPExcel
            $objPHPExcel = new PHPExcel();
			
			$objPHPExcel->setActiveSheetIndex(0);
			
			$objPHPExcel->setActiveSheetIndex(0)
                    //mengisikan value pada tiap-tiap cell, A1 itu alamat cellnya 
                    //Hello merupakan isinya
                                        ->setCellValue('A1', 'SELLING OUT BY VALUE (NOT SPECIFIC PRODUCTS)')
                                        ->setCellValue('A2', 'Presensi Beauty Advisor (Valid SMS)')
                                        ->setCellValue('A3', 'period '.$tahun.', '.$bulan)
                                        ->setCellValue('A4', 'Tahun')
										->setCellValue('B4', 'Bulan')
										->setCellValue('C4', 'Nama KBA')
										->setCellValue('D4', 'Nama TL')
										->setCellValue('E4', 'Nama BA')
										->setCellValue('F4', 'Brand')
										->setCellValue('G4', 'ProductGroup')
										->setCellValue('H4', 'DescBaru')
										->setCellValue('I4', 'Hari ke 1')
										->setCellValue('J4', 'Hari ke 2')
										->setCellValue('K4', 'Hari ke 3')
										->setCellValue('L4', 'Hari ke 4')
										->setCellValue('M4', 'Hari ke 5')
										->setCellValue('N4', 'Hari ke 6')
										->setCellValue('O4', 'Hari ke 7')
										->setCellValue('P4', 'Hari ke 8')
										->setCellValue('Q4', 'Hari ke 9')
										->setCellValue('R4', 'Hari ke 10')
										->setCellValue('S4', 'Hari ke 11')
										->setCellValue('T4', 'Hari ke 12')
										->setCellValue('U4', 'Hari ke 13')
										->setCellValue('V4', 'Hari ke 14')
										->setCellValue('W4', 'Hari ke 15')
										->setCellValue('X4', 'Hari ke 16')
										->setCellValue('Y4', 'Hari ke 17')
										->setCellValue('Z4', 'Hari ke 18')
										->setCellValue('AA4', 'Hari ke 19')
										->setCellValue('AB4', 'Hari ke 20')
										->setCellValue('AC4', 'Hari ke 21')
										->setCellValue('AD4', 'Hari ke 22')
										->setCellValue('AE4', 'Hari ke 23')
										->setCellValue('AF4', 'Hari ke 24')
										->setCellValue('AG4', 'Hari ke 25')
										->setCellValue('AH4', 'Hari ke 26')
										->setCellValue('AI4', 'Hari ke 27')
										->setCellValue('AJ4', 'Hari ke 28')
										->setCellValue('AK4', 'Hari ke 29')
										->setCellValue('AL4', 'Hari ke 30')
										->setCellValue('AM4', 'Hari ke 31')
										->setCellValue('AN4', 'Total Value');
			
			if($this->session->userdata('area') != 'all'){
				$query1 = $this->db->query("select * from PivotSellProductValueNTSPC WHERE Tahun='".$tahun."' and Bulan='".$bulan."' and NAMA_KBA='".$this->session->userdata('NAMA_KBA')."' order by Tahun desc, Bulan asc, NAMA_KBA asc, NAMA_TL asc, NAMA_BA asc, Brand asc, ProductGroup asc, DescBaru asc");
			}else{
				$query1 = $this->db->query("select * from PivotSellProductValueNTSPC WHERE Tahun='".$tahun."' and Bulan='".$bulan."' order by Tahun desc, Bulan asc, NAMA_KBA asc, NAMA_TL asc, NAMA_BA asc, Brand asc, ProductGroup asc, DescBaru asc");
			}
			$i = 5;
			foreach($query1->result() as $absen){
				$objPHPExcel->setActiveSheetIndex(0)
							->setCellValue('A'.$i, $absen->Tahun)
							->setCellValue('B'.$i, $absen->Bulan)
							->setCellValue('C'.$i, $absen->NAMA_KBA)
							->setCellValue('D'.$i, $absen->NAMA_TL)
							->setCellValue('E'.$i, $absen->NAMA_BA)
							->setCellValue('F'.$i, $absen->Brand)
							->setCellValue('G'.$i, $absen->ProductGroup)
							->setCellValue('H'.$i, $absen->DescBaru)
							->setCellValue('I'.$i, $absen->H1)
							->setCellValue('J'.$i, $absen->H2)
							->setCellValue('K'.$i, $absen->H3)
							->setCellValue('L'.$i, $absen->H4)
							->setCellValue('M'.$i, $absen->H5)
							->setCellValue('N'.$i, $absen->H6)
							->setCellValue('O'.$i, $absen->H7)
							->setCellValue('P'.$i, $absen->H8)
							->setCellValue('Q'.$i, $absen->H9)
							->setCellValue('R'.$i, $absen->H10)
							->setCellValue('S'.$i, $absen->H11)
							->setCellValue('T'.$i, $absen->H12)
							->setCellValue('U'.$i, $absen->H13)
							->setCellValue('V'.$i, $absen->H14)
							->setCellValue('W'.$i, $absen->H15)
							->setCellValue('X'.$i, $absen->H16)
							->setCellValue('Y'.$i, $absen->H17)
							->setCellValue('Z'.$i, $absen->H18)
							->setCellValue('AA'.$i, $absen->H19)
							->setCellValue('AB'.$i, $absen->H20)
							->setCellValue('AC'.$i, $absen->H21)
							->setCellValue('AD'.$i, $absen->H22)
							->setCellValue('AE'.$i, $absen->H23)
							->setCellValue('AF'.$i, $absen->H24)
							->setCellValue('AG'.$i, $absen->H25)
							->setCellValue('AH'.$i, $absen->H26)
							->setCellValue('AI'.$i, $absen->H27)
							->setCellValue('AJ'.$i, $absen->H28)
							->setCellValue('AK'.$i, $absen->H29)
							->setCellValue('AL'.$i, $absen->H30)
							->setCellValue('AM'.$i, $absen->H31)
							->setCellValue('AN'.$i, $absen->TotalValue);
						$i++;
			}
			
			//set title pada sheet (me rename nama sheet)
            $objPHPExcel->getActiveSheet()->setTitle('SELLOUT VALUE NTSPC');
 
            //mulai menyimpan excel format xlsx, kalau ingin xls ganti Excel2007 menjadi Excel5          
            $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
 
            //sesuaikan headernya 
            header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
            header("Cache-Control: no-store, no-cache, must-revalidate");
            header("Cache-Control: post-check=0, pre-check=0", false);
            header("Pragma: no-cache");
            header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
            //ubah nama file saat diunduh
            header('Content-Disposition: attachment;filename="SellingoutValueNTSPC.xls"');
            //unduh file
			$objWriter->save("php://output");
            //Mulai dari create object PHPExcel itu ada dokumentasi lengkapnya di PHPExcel, 
            // Folder Documentation dan Example
            // untuk belajar lebih jauh mengenai PHPExcel silakan buka disitu
			
		}
		
		function performance_qty_report_ntspc(){
			$this->load->library("Excel/PHPExcel");
			$tahun = $this->uri->segment(3);
			$bulan = $this->uri->segment(4);
            //membuat objek PHPExcel
            $objPHPExcel = new PHPExcel();
			
			$objPHPExcel->setActiveSheetIndex(0);
			
			$objPHPExcel->setActiveSheetIndex(0)
                    //mengisikan value pada tiap-tiap cell, A1 itu alamat cellnya 
                    //Hello merupakan isinya
                                        ->setCellValue('A1', 'BA PERFORMANCE BY UNIT (NOT SPECIFIC PRODUCTS)')
                                        ->setCellValue('A2', 'Presensi Beauty Advisor (Valid SMS)')
                                        ->setCellValue('A3', 'period '.$tahun.', '.$bulan)
                                        ->setCellValue('A4', 'Tahun')
										->setCellValue('B4', 'Bulan')
										->setCellValue('C4', 'Nama KBA')
										->setCellValue('D4', 'Nama TL')
										->setCellValue('E4', 'Nama BA')
										->setCellValue('F4', 'Hari ke 1')
										->setCellValue('G4', 'Hari ke 2')
										->setCellValue('H4', 'Hari ke 3')
										->setCellValue('I4', 'Hari ke 4')
										->setCellValue('J4', 'Hari ke 5')
										->setCellValue('K4', 'Hari ke 6')
										->setCellValue('L4', 'Hari ke 7')
										->setCellValue('M4', 'Hari ke 8')
										->setCellValue('N4', 'Hari ke 9')
										->setCellValue('O4', 'Hari ke 10')
										->setCellValue('P4', 'Hari ke 11')
										->setCellValue('Q4', 'Hari ke 12')
										->setCellValue('R4', 'Hari ke 13')
										->setCellValue('S4', 'Hari ke 14')
										->setCellValue('T4', 'Hari ke 15')
										->setCellValue('U4', 'Hari ke 16')
										->setCellValue('V4', 'Hari ke 17')
										->setCellValue('W4', 'Hari ke 18')
										->setCellValue('X4', 'Hari ke 19')
										->setCellValue('Y4', 'Hari ke 20')
										->setCellValue('Z4', 'Hari ke 21')
										->setCellValue('AA4', 'Hari ke 22')
										->setCellValue('AB4', 'Hari ke 23')
										->setCellValue('AC4', 'Hari ke 24')
										->setCellValue('AD4', 'Hari ke 25')
										->setCellValue('AE4', 'Hari ke 26')
										->setCellValue('AF4', 'Hari ke 27')
										->setCellValue('AG4', 'Hari ke 28')
										->setCellValue('AH4', 'Hari ke 29')
										->setCellValue('AI4', 'Hari ke 30')
										->setCellValue('AJ4', 'Hari ke 31')
										->setCellValue('AK4', 'Total Unit');
			
			if($this->session->userdata('area') != 'all'){
				$query1 = $this->db->query("select * from PivotPerformanceUnitNTSPC WHERE Tahun='".$tahun."' and Bulan='".$bulan."' and NAMA_KBA='".$this->session->userdata('NAMA_KBA')."' order by Tahun desc, Bulan asc, NAMA_KBA asc, NAMA_TL asc, NAMA_BA asc");
			}else{
				$query1 = $this->db->query("select * from PivotPerformanceUnitNTSPC WHERE Tahun='".$tahun."' and Bulan='".$bulan."' order by Tahun desc, Bulan asc, NAMA_KBA asc, NAMA_TL asc, NAMA_BA asc");
			}
			$i = 5;
			foreach($query1->result() as $absen){
				$objPHPExcel->setActiveSheetIndex(0)
							->setCellValue('A'.$i, $absen->Tahun)
							->setCellValue('B'.$i, $absen->Bulan)
							->setCellValue('C'.$i, $absen->NAMA_KBA)
							->setCellValue('D'.$i, $absen->NAMA_TL)
							->setCellValue('E'.$i, $absen->NAMA_BA)
							->setCellValue('F'.$i, $absen->H1)
							->setCellValue('G'.$i, $absen->H2)
							->setCellValue('H'.$i, $absen->H3)
							->setCellValue('I'.$i, $absen->H4)
							->setCellValue('J'.$i, $absen->H5)
							->setCellValue('K'.$i, $absen->H6)
							->setCellValue('L'.$i, $absen->H7)
							->setCellValue('M'.$i, $absen->H8)
							->setCellValue('N'.$i, $absen->H9)
							->setCellValue('O'.$i, $absen->H10)
							->setCellValue('P'.$i, $absen->H11)
							->setCellValue('Q'.$i, $absen->H12)
							->setCellValue('R'.$i, $absen->H13)
							->setCellValue('S'.$i, $absen->H14)
							->setCellValue('T'.$i, $absen->H15)
							->setCellValue('U'.$i, $absen->H16)
							->setCellValue('V'.$i, $absen->H17)
							->setCellValue('W'.$i, $absen->H18)
							->setCellValue('X'.$i, $absen->H19)
							->setCellValue('Y'.$i, $absen->H20)
							->setCellValue('Z'.$i, $absen->H21)
							->setCellValue('AA'.$i, $absen->H22)
							->setCellValue('AB'.$i, $absen->H23)
							->setCellValue('AC'.$i, $absen->H24)
							->setCellValue('AD'.$i, $absen->H25)
							->setCellValue('AE'.$i, $absen->H26)
							->setCellValue('AF'.$i, $absen->H27)
							->setCellValue('AG'.$i, $absen->H28)
							->setCellValue('AH'.$i, $absen->H29)
							->setCellValue('AI'.$i, $absen->H30)
							->setCellValue('AJ'.$i, $absen->H31)
							->setCellValue('AK'.$i, $absen->TotalUnit);
						$i++;
			}
			
			//set title pada sheet (me rename nama sheet)
            $objPHPExcel->getActiveSheet()->setTitle('PRFRMNC UNIT NTSPC');
 
            //mulai menyimpan excel format xlsx, kalau ingin xls ganti Excel2007 menjadi Excel5          
            $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
 
            //sesuaikan headernya 
            header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
            header("Cache-Control: no-store, no-cache, must-revalidate");
            header("Cache-Control: post-check=0, pre-check=0", false);
            header("Pragma: no-cache");
            header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
            //ubah nama file saat diunduh
            header('Content-Disposition: attachment;filename="BAPerformanceUnitNTSPC.xls"');
            //unduh file
			$objWriter->save("php://output");
            //Mulai dari create object PHPExcel itu ada dokumentasi lengkapnya di PHPExcel, 
            // Folder Documentation dan Example
            // untuk belajar lebih jauh mengenai PHPExcel silakan buka disitu
			
		}
		
		function performance_value_report_ntspc(){
			$this->load->library("Excel/PHPExcel");
			$tahun = $this->uri->segment(3);
			$bulan = $this->uri->segment(4);
            //membuat objek PHPExcel
            $objPHPExcel = new PHPExcel();
			
			$objPHPExcel->setActiveSheetIndex(0);
			
			$objPHPExcel->setActiveSheetIndex(0)
                    //mengisikan value pada tiap-tiap cell, A1 itu alamat cellnya 
                    //Hello merupakan isinya
                                        ->setCellValue('A1', 'BA PERFORMANCE BY VALUE (NOT SPECIFIC PRODUCTS)')
                                        ->setCellValue('A2', 'Presensi Beauty Advisor (Valid SMS)')
                                        ->setCellValue('A3', 'period '.$tahun.', '.$bulan)
                                        ->setCellValue('A4', 'Tahun')
										->setCellValue('B4', 'Bulan')
										->setCellValue('C4', 'Nama KBA')
										->setCellValue('D4', 'Nama TL')
										->setCellValue('E4', 'Nama BA')
										->setCellValue('F4', 'Hari ke 1')
										->setCellValue('G4', 'Hari ke 2')
										->setCellValue('H4', 'Hari ke 3')
										->setCellValue('I4', 'Hari ke 4')
										->setCellValue('J4', 'Hari ke 5')
										->setCellValue('K4', 'Hari ke 6')
										->setCellValue('L4', 'Hari ke 7')
										->setCellValue('M4', 'Hari ke 8')
										->setCellValue('N4', 'Hari ke 9')
										->setCellValue('O4', 'Hari ke 10')
										->setCellValue('P4', 'Hari ke 11')
										->setCellValue('Q4', 'Hari ke 12')
										->setCellValue('R4', 'Hari ke 13')
										->setCellValue('S4', 'Hari ke 14')
										->setCellValue('T4', 'Hari ke 15')
										->setCellValue('U4', 'Hari ke 16')
										->setCellValue('V4', 'Hari ke 17')
										->setCellValue('W4', 'Hari ke 18')
										->setCellValue('X4', 'Hari ke 19')
										->setCellValue('Y4', 'Hari ke 20')
										->setCellValue('Z4', 'Hari ke 21')
										->setCellValue('AA4', 'Hari ke 22')
										->setCellValue('AB4', 'Hari ke 23')
										->setCellValue('AC4', 'Hari ke 24')
										->setCellValue('AD4', 'Hari ke 25')
										->setCellValue('AE4', 'Hari ke 26')
										->setCellValue('AF4', 'Hari ke 27')
										->setCellValue('AG4', 'Hari ke 28')
										->setCellValue('AH4', 'Hari ke 29')
										->setCellValue('AI4', 'Hari ke 30')
										->setCellValue('AJ4', 'Hari ke 31')
										->setCellValue('AK4', 'Total Amount');
			if($this->session->userdata('area') != 'all'){
				$query1 = $this->db->query("select * from PivotPerformanceValueNTSPC WHERE Tahun='".$tahun."' and Bulan='".$bulan."' and NAMA_KBA='".$this->session->userdata('NAMA_KBA')."' order by Tahun desc, Bulan asc, NAMA_KBA asc, NAMA_TL asc, NAMA_BA asc");
			}else{
				$query1 = $this->db->query("select * from PivotPerformanceValueNTSPC WHERE Tahun='".$tahun."' and Bulan='".$bulan."' order by Tahun desc, Bulan asc, NAMA_KBA asc, NAMA_TL asc, NAMA_BA asc");
			}
			$i = 5;
			foreach($query1->result() as $absen){
				$objPHPExcel->setActiveSheetIndex(0)
							->setCellValue('A'.$i, $absen->Tahun)
							->setCellValue('B'.$i, $absen->Bulan)
							->setCellValue('C'.$i, $absen->NAMA_KBA)
							->setCellValue('D'.$i, $absen->NAMA_TL)
							->setCellValue('E'.$i, $absen->NAMA_BA)
							->setCellValue('F'.$i, $absen->H1)
							->setCellValue('G'.$i, $absen->H2)
							->setCellValue('H'.$i, $absen->H3)
							->setCellValue('I'.$i, $absen->H4)
							->setCellValue('J'.$i, $absen->H5)
							->setCellValue('K'.$i, $absen->H6)
							->setCellValue('L'.$i, $absen->H7)
							->setCellValue('M'.$i, $absen->H8)
							->setCellValue('N'.$i, $absen->H9)
							->setCellValue('O'.$i, $absen->H10)
							->setCellValue('P'.$i, $absen->H11)
							->setCellValue('Q'.$i, $absen->H12)
							->setCellValue('R'.$i, $absen->H13)
							->setCellValue('S'.$i, $absen->H14)
							->setCellValue('T'.$i, $absen->H15)
							->setCellValue('U'.$i, $absen->H16)
							->setCellValue('V'.$i, $absen->H17)
							->setCellValue('W'.$i, $absen->H18)
							->setCellValue('X'.$i, $absen->H19)
							->setCellValue('Y'.$i, $absen->H20)
							->setCellValue('Z'.$i, $absen->H21)
							->setCellValue('AA'.$i, $absen->H22)
							->setCellValue('AB'.$i, $absen->H23)
							->setCellValue('AC'.$i, $absen->H24)
							->setCellValue('AD'.$i, $absen->H25)
							->setCellValue('AE'.$i, $absen->H26)
							->setCellValue('AF'.$i, $absen->H27)
							->setCellValue('AG'.$i, $absen->H28)
							->setCellValue('AH'.$i, $absen->H29)
							->setCellValue('AI'.$i, $absen->H30)
							->setCellValue('AJ'.$i, $absen->H31)
							->setCellValue('AK'.$i, $absen->TotalValue);
						$i++;
			}
			
			//set title pada sheet (me rename nama sheet)
            $objPHPExcel->getActiveSheet()->setTitle('PRFRMNC VALUE NTFC');
 
            //mulai menyimpan excel format xlsx, kalau ingin xls ganti Excel2007 menjadi Excel5          
            $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
 
            //sesuaikan headernya 
            header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
            header("Cache-Control: no-store, no-cache, must-revalidate");
            header("Cache-Control: post-check=0, pre-check=0", false);
            header("Pragma: no-cache");
            header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
            //ubah nama file saat diunduh
            header('Content-Disposition: attachment;filename="BAPerformanceValueNTFC.xls"');
            //unduh file
			$objWriter->save("php://output");
            //Mulai dari create object PHPExcel itu ada dokumentasi lengkapnya di PHPExcel, 
            // Folder Documentation dan Example
            // untuk belajar lebih jauh mengenai PHPExcel silakan buka disitu
			
		}
	}
/*End of file report.php*/
/*Lacation:.application/controllers/report.php*/