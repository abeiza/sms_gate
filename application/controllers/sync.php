<?php if(!defined('BASEPATH'))exit('No Direct Script Access Allowed');
	class Sync extends CI_Controller{
		function __construct(){
			parent::__construct();
		}
		
		function index(){
			$this->sync_area();
			$this->sync_ba();
			$this->sync_kba();
			$this->sync_outlet();
			$this->sync_product();
			$this->sync_category();
			$this->sync_tl();
			?>
			<script>
				window.location.href = '<?php echo base_url();?>index.php/dashboard/dashboard_controller';
				alert("Sync Proses is finish");
			</script>
			<?php 
		}
		
		function sync_message(){
			$this->sync_new_inbox();
			$this->sync_final_inbox();
			?>
			<script>
				window.location.href = '<?php echo base_url();?>index.php/dashboard/dashboard_controller';
				alert("Sync Proses is finish");
			</script>
			<?php
		}
		
		function sync_new_inbox(){
			$query5 = $this->model_app->getQueryMy("select * from new_inbox where status='unsync'");
			foreach($query5->result() as $db){
				$query_insert = $this->model_app->getQuerySrv("insert into new_inbox (object_id,ReceivingDateTime,Text,SenderNumber,Coding,UDH,SMSCNumber,Class,TextDecoded,RecipientID,Processed,ReplySMS) VALUES 
				('".$db->object_id."','".$db->ReceivingDateTime."','".$db->Text."','".$db->SenderNumber."','".$db->Coding."','".$db->UDH."','".$db->SMSCNumber."','".$db->Class."','".$db->TextDecoded."','".$db->RecipientID."','".$db->Processed."','".$db->ReplySMS."')");
				$query_update = $this->model_app->getQueryMy("update new_inbox set status='sync' where object_id='".$db->object_id."'");
			}
		}
		
		function sync_final_inbox(){
			$query6 = $this->model_app->getQueryMy("select * from final_inbox where status='unsync'");
			foreach($query6->result() as $db){
				$query_insert = $this->model_app->getQuerySrv("insert into Final_Inbox (ReceiveDt,SenderNumber,FreqSMS,TextSMS,Processed,ProcessedDt,ReplySMS) VALUES 
				('".$db->ReceiveDt."','".$db->SenderNumber."','".$db->FreqSMS."','".$db->TextSMS."','".$db->Processed."','".$db->ProcessedDt."','".$db->ReplySMS."')");
				$query_update = $this->model_app->getQueryMy("update final_inbox set status='sync' where ObjectID='".$db->ObjectID."'");
			}
		}
		
		function sync_outlet(){
			$query1 = $this->model_app->getQuerySrv("select * from Ms_OUTLET WHERE Status_Proses = 'Unsync' OR Status_Proses = '' order by ObjectID");
			
			foreach($query1->result() as $db){
				/*echo $db->ID_OUTLET;
				echo "<br>";
				echo $db->NAMA_OUTLET;
				echo "<br>";
				echo $db->ID_BA;
				echo "<br>";
				echo $db->STATUS;
				echo "<br>";
				echo "<br>";
				echo "<br>";*/
				$query2 = $this->model_app->getQueryMy("select ObjectID from ms_outlet where ObjectID='". $db->ObjectID ."' ");
				if($query2->num_rows() > 0){
					$insert1 = $this->model_app->getQueryMy("UPDATE ms_outlet SET ID_OUTLET='".$db->ID_OUTLET."',ParentOutlet='".$db->ParentOutlet."',NAMA_OUTLET='".$db->NAMA_OUTLET."',ID_BA='".$db->ID_BA."',STATUS='".$db->STATUS."',ID_AREA='".$db->ID_AREA."' WHERE ObjectID='".$db->ObjectID."'");
					$this->load->database('default',FALSE,TRUE);
					$insert2 = $this->model_app->getQuerySrv("update ms_outlet set Status_Proses='Sync', SyncDt=GETDATE() where ObjectID='".$db->ObjectID."'");
				}else{
					$insert1 = $this->model_app->getQueryMy("INSERT INTO ms_outlet (ObjectID,ID_OUTLET,ParentOutlet,NAMA_OUTLET,ID_BA,STATUS,ID_AREA) VALUES ('".$db->ObjectID."','".$db->ID_OUTLET."','".$db->ParentOutlet."','".$db->NAMA_OUTLET."','".$db->ID_BA."','".$db->STATUS."','".$db->ID_AREA."')");
					$this->load->database('default',FALSE,TRUE);
					$insert2 = $this->model_app->getQuerySrv("update ms_outlet set Status_Proses='Sync', SyncDt=GETDATE() where ObjectID='".$db->ObjectID."'");
				}
			}
		}
		
		function sync_category(){
			$query1 = $this->model_app->getQuerySrv("select * from Ms_PRODUCT_CATEGORY WHERE Status_Proses = 'Unsync' OR Status_Proses = '' order by ObjectID");
			
			foreach($query1->result() as $db){
				/*echo $db->ID_TIPE_PRODUCT;
				echo "<br>";
				echo $db->NAMA_TIPE_PRODUCT;
				echo "<br>";
				echo $db->STATUS;
				echo "<br>";
				echo "<br>";
				echo "<br>";*/
				$query2 = $this->model_app->getQueryMy("select ObjectID from ms_product_category where ObjectID='". $db->ObjectID ."' ");
				if($query2->num_rows() > 0){
					$insert1 = $this->model_app->getQueryMy("UPDATE Ms_PRODUCT_CATEGORY SET ID_TIPE_PRODUCT='".$db->ID_TIPE_PRODUCT."', NAMA_TIPE_PRODUCT='".$db->NAMA_TIPE_PRODUCT."',STATUS='".$db->STATUS."' WHERE ObjectID='".$db->ObjectID."'");
					$this->load->database('default',FALSE,TRUE);
					$insert2 = $this->model_app->getQuerySrv("update Ms_PRODUCT_CATEGORY set Status_Proses='Sync', SyncDt=GETDATE() where ObjectID='".$db->ObjectID."'");
				}else{
					$insert1 = $this->model_app->getQueryMy("INSERT INTO Ms_PRODUCT_CATEGORY (ObjectID,ID_TIPE_PRODUCT,NAMA_TIPE_PRODUCT,STATUS) VALUES ('".$db->ObjectID."','".$db->ID_TIPE_PRODUCT."','".$db->NAMA_TIPE_PRODUCT."','".$db->STATUS."')");
					$this->load->database('default',FALSE,TRUE);
					$insert2 = $this->model_app->getQuerySrv("update Ms_PRODUCT_CATEGORY set Status_Proses='Sync', SyncDt=GETDATE() where ObjectID='".$db->ObjectID."'");
				}
			}
		}
		
		function sync_ba(){
			$query1 = $this->model_app->getQuerySrv("select * from Ms_BA WHERE Status_Proses = 'Unsync' OR Status_Proses = '' order by ObjectID");
			
			foreach($query1->result() as $db){
				/*echo $db->ID_BA;
				echo "<br>";
				echo $db->NAMA_BA;
				echo "<br>";
				echo $db->ID_TL;
				echo "<br>";
				echo $db->STATUS;
				echo "<br>";
				echo "<br>";
				echo "<br>";*/
				$query2 = $this->model_app->getQueryMy("select ObjectID from ms_ba where ObjectID='". $db->ObjectID ."' ");
				if($query2->num_rows() > 0){
					$insert1 = $this->model_app->getQueryMy("UPDATE ms_ba SET ID_BA='".$db->ID_BA."',NAMA_BA='".$db->NAMA_BA."',ID_TL='".$db->ID_TL."',STATUS='".$db->STATUS."' WHERE ObjectID='".$db->ObjectID."'");
					$this->load->database('default',FALSE,TRUE);
					$insert2 = $this->model_app->getQuerySrv("update ms_ba set Status_Proses='Sync', SyncDt=GETDATE() where ObjectID='".$db->ObjectID."'");
				}else{
					$insert1 = $this->model_app->getQueryMy("INSERT INTO ms_ba (ObjectID,ID_BA,NAMA_BA,ID_TL,STATUS) VALUES ('".$db->ObjectID."','".$db->ID_BA."','".$db->NAMA_BA."','".$db->ID_TL."','".$db->STATUS."')");
					$this->load->database('default',FALSE,TRUE);
					$insert2 = $this->model_app->getQuerySrv("update ms_ba set Status_Proses='Sync', SyncDt=GETDATE() where ObjectID='".$db->ObjectID."'");
				}
			}
		}
		
		function sync_area(){
			$query1 = $this->model_app->getQuerySrv("select * from Ms_AREA WHERE Status_Proses = 'Unsync' order by ObjectID");
			
			foreach($query1->result() as $db){
				/*echo $db->ID_AREA;
				echo "<br>";
				echo $db->NAMA_AREA;
				echo "<br>";
				echo $db->NAMA_RSM;
				echo "<br>";
				echo "<br>";
				echo "<br>";*/
				$query2 = $this->model_app->getQueryMy("select ObjectID from ms_area where ObjectID='". $db->ObjectID ."' ");
				if($query2->num_rows() > 0){
					$insert1 = $this->model_app->getQueryMy("UPDATE ms_area SET ID_AREA='".$db->ID_AREA."',NAMA_AREA='".$db->NAMA_AREA."',NAMA_RSM='".$db->NAMA_RSM."' WHERE ObjectID='".$db->ObjectID."'");
					$this->load->database('default',FALSE,TRUE);
					$insert2 = $this->model_app->getQuerySrv("update ms_area set Status_Proses='Sync', SyncDt=GETDATE() where ObjectID='".$db->ObjectID."'");
				}else{
					$insert1 = $this->model_app->getQueryMy("INSERT INTO ms_area (ObjectID,ID_AREA,NAMA_AREA,NAMA_RSM) VALUES ('".$db->ObjectID."','".$db->ID_AREA."','".$db->NAMA_AREA."','".$db->NAMA_RSM."')");
					$this->load->database('default',FALSE,TRUE);
					$insert2 = $this->model_app->getQuerySrv("update ms_area set Status_Proses='Sync', SyncDt=GETDATE() where ObjectID='".$db->ObjectID."'");
				}
			}
		}
		
		function sync_kba(){
			$query1 = $this->model_app->getQuerySrv("select * from Ms_KBA WHERE Status_Proses = 'Unsync' order by ObjectID");
			
			foreach($query1->result() as $db){
				/*echo $db->ID_KBA;
				echo "<br>";
				echo $db->KODE_KBA;
				echo "<br>";
				echo $db->NAMA_KBA;
				echo "<br>";
				echo $db->COVERAGE_KBA;
				echo "<br>";
				echo $db->STATUS;
				echo "<br>";
				echo "<br>";
				echo "<br>";*/
				$query2 = $this->model_app->getQueryMy("select ObjectID from ms_kba where ObjectID='". $db->ObjectID ."' ");
				if($query2->num_rows() > 0){
					$insert1 = $this->model_app->getQueryMy("UPDATE ms_kba SET ID_KBA='".$db->ID_KBA."',KODE_KBA='".$db->KODE_KBA."',NAMA_KBA='".$db->NAMA_KBA."',COVERAGE_KBA='".$db->COVERAGE_KBA."',STATUS='".$db->STATUS."' WHERE ObjectID='".$db->ObjectID."'");
					$this->load->database('default',FALSE,TRUE);
					$insert2 = $this->model_app->getQuerySrv("update ms_kba set Status_Proses='Sync', SyncDt=GETDATE() where ObjectID='".$db->ObjectID."'");
				}else{
					$insert1 = $this->model_app->getQueryMy("INSERT INTO ms_kba (ObjectID,ID_KBA,KODE_KBA,NAMA_KBA,COVERAGE_KBA,STATUS) VALUES ('".$db->ObjectID."','".$db->ID_KBA."','".$db->KODE_KBA."','".$db->NAMA_KBA."','".$db->COVERAGE_KBA."','".$db->STATUS."')");
					$this->load->database('default',FALSE,TRUE);
					$insert2 = $this->model_app->getQuerySrv("update ms_kba set Status_Proses='Sync', SyncDt=GETDATE() where ObjectID='".$db->ObjectID."'");
				}
			}
		}
		
		function sync_tl(){
			$query1 = $this->model_app->getQuerySrv("select * from Ms_TL WHERE Status_Proses = 'Unsync' order by ObjectID");
			
			foreach($query1->result() as $db){
				/*echo $db->ID_TL;
				echo "<br>";
				echo $db->KODE_TL;
				echo "<br>";
				echo $db->NAMA_TL;
				echo "<br>";
				echo $db->COVERAGE_TL;
				echo "<br>";
				echo $db->ID_KBA;
				echo "<br>";
				echo $db->ID_AREA;
				echo "<br>";
				echo $db->STATUS;
				echo "<br>";
				echo "<br>";
				echo "<br>";*/
				$query2 = $this->model_app->getQueryMy("select ObjectID from ms_tl where ObjectID='". $db->ObjectID ."' ");
				if($query2->num_rows() > 0){
					$insert1 = $this->model_app->getQueryMy("UPDATE ms_tl SET ID_TL='".$db->ID_TL."',KODE_TL='".$db->KODE_TL."',NAMA_TL='".$db->NAMA_TL."',COVERAGE_TL='".$db->COVERAGE_TL."',ID_KBA='".$db->ID_KBA."',ID_AREA='".$db->ID_AREA."',STATUS='".$db->STATUS."' WHERE ObjectID='".$db->ObjectID."'");
					$this->load->database('default',FALSE,TRUE);
					$insert2 = $this->model_app->getQuerySrv("update ms_tl set Status_Proses='Sync', SyncDt=GETDATE() where ObjectID='".$db->ObjectID."'");
				}else{
					$insert1 = $this->model_app->getQueryMy("INSERT INTO ms_tl (ObjectID,ID_TL,KODE_TL,NAMA_TL,COVERAGE_TL,ID_KBA,ID_AREA,STATUS) VALUES ('".$db->ObjectID."','".$db->ID_TL."','".$db->KODE_TL."','".$db->NAMA_TL."','".$db->COVERAGE_TL."','".$db->ID_KBA."','".$db->ID_AREA."','".$db->STATUS."')");
					$this->load->database('default',FALSE,TRUE);
					$insert2 = $this->model_app->getQuerySrv("update ms_tl set Status_Proses='Sync', SyncDt=GETDATE() where ObjectID='".$db->ObjectID."'");
				}
			}
		}
		
		function sync_product(){
			$query1 = $this->model_app->getQuerySrv("select * from Ms_PRODUCT WHERE Status_Proses='Unsync' order by ObjectID ");
			
			foreach($query1->result() as $db){
				/*echo $db->ID_PRODUCT;
				echo "<br>";
				echo $db->NAMA_PRODUCT;
				echo "<br>";
				echo $db->ID_TIPE_PRODUCT;
				echo "<br>";
				echo $db->HET;
				echo "<br>";
				echo $db->VOLUME;
				echo "<br>";
				echo $db->SATUAN;
				echo "<br>";
				echo $db->STATUS;
				echo "<br>";
				echo $db->PRODUCT_KODE_PRINCIPLE;
				echo "<br>";
				echo $db->DESCRIPTION_PRINCIPLE;
				echo "<br>";
				echo $db->F10;
				echo "<br>";
				echo $db->F11;
				echo "<br>";
				echo $db->F12;
				echo "<br>";
				echo "<br>";
				echo "<br>";*/
				$query2 = $this->model_app->getQueryMy("select ObjectID from Ms_PRODUCT where ObjectID='". $db->ObjectID ."' ");
				if($query2->num_rows() > 0){
					$insert1 = $this->model_app->getQueryMy(
					"UPDATE ms_product SET ID_PRODUCT='".$db->ID_PRODUCT."', NAMA_PRODUCT='".$db->NAMA_PRODUCT."',ID_TIPE_PRODUCT='".$db->ID_TIPE_PRODUCT."',HET='".$db->HET."',VOLUME='".$db->VOLUME."',SATUAN='".$db->SATUAN."',STATUS='".$db->STATUS."',PRODUCT_KODE_PRINCIPLE='".$db->PRODUCT_KODE_PRINCIPLE."',DESCRIPTION_PRINCIPLE='".$db->DESCRIPTION_PRINCIPLE."' WHERE ObjectID='".$db->ObjectID."'");
					$this->load->database('default',FALSE,TRUE);
					$insert2 = $this->model_app->getQuerySrv("update ms_product set Status_Proses='Sync', SyncDt=GETDATE() where ObjectID='".$db->ObjectID."'");
				}else{
					$insert1 = $this->model_app->getQueryMy(
					"INSERT INTO ms_product (ObjectID,ID_PRODUCT,NAMA_PRODUCT,ID_TIPE_PRODUCT,HET,VOLUME,SATUAN,STATUS,PRODUCT_KODE_PRINCIPLE,DESCRIPTION_PRINCIPLE) 
					VALUES ('".$db->ObjectID."','".$db->ID_PRODUCT."','".$db->NAMA_PRODUCT."','".$db->ID_TIPE_PRODUCT."','".$db->HET."','".$db->VOLUME."','".$db->SATUAN."','".$db->STATUS."','".$db->PRODUCT_KODE_PRINCIPLE."','".$db->DESCRIPTION_PRINCIPLE."')");
					$this->load->database('default',FALSE,TRUE);
					$insert2 = $this->model_app->getQuerySrv("update ms_product set Status_Proses='Sync', SyncDt=GETDATE() where ObjectID='".$db->ObjectID."'");
				}
			}
		}
		
		
	}
/*End of file sync.php*/
/*Location:.application/controllers/sync.php*/