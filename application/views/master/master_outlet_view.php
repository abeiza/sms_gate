<div class="top-br">
		<div style="width:50%; float:left;">
			<span style="padding:15px;font-size:12px;font-family:calibri;color:#666"><a style="text-decoration:none;color:#666; padding-right:10px;" href="<?php echo base_url();?>index.php/">Home</a> <i style="padding-right:10px;" class="fa fa-angle-double-right"></i> <strong>Master Outlet</strong></span>
		</div>
	</div>
</div>
<!-- page content -->
 <div class="body" style="background-color:#f1f1f1;">
	<div>
		<div id="container">
			<?php echo form_open('master/master_outlet_controller/export_excel/');?>
				<div style="margin-bottom:10px;text-align:center;">
					<h2 style="color:#666;margin-left:10px;margin-bottom:0px;"><i class="fa fa-building" style="margin-right:5px;"></i>Master Outlet</h2>
					<p style="font-size:12px;color:#666;margin-left:10px;">Module Master Outlet menampung data master outlet guna sebagai acuan dalam analisa dalam pembuatan laporan yang berkaitan dengan sms gateway.</p>
					<button style="margiin-top:-2px;"><i class="fa fa-file-excel-o" style="margin-right:5px;"></i>Export</button>
				</div>			
			<?php echo form_close();?>
			<div id="body">
					<?php 
						$phpgrid -> enable_edit("INLINE",'CRU'); 

						//$phpgrid->add_column("actions", array('name'=>'actions',
						//	'index'=>'actions',
						//	'width'=>'70',
						//	'formatter'=>'actions',
						//	'formatoptions'=>array('keys'=>true, 'editbutton'=>true , 'delbutton'=>false)),'Actions');
						
						//$phpgrid -> enable_edit('FORM', 'R');
						$phpgrid -> enable_search(true);
						//$phpgrid -> set_col_readonly("ObjectID,ID_OUTLET"); 
						//$phpgrid->enable_advanced_search(true);
						$phpgrid->set_col_title('ObjectID','Object ID');
						$phpgrid->set_col_title('ID_BA','Beauty Advisor ID');
						$phpgrid->set_col_title('NAMA_OUTLET','Outlet Name');
						$phpgrid->set_col_title('ID_OUTLET','Outlet STM');
						$phpgrid->set_col_title('ParentOutlet','Outlet BA');
						$phpgrid->set_col_title('STATUS','Status');
						$phpgrid->set_caption("<h4><i class='fa fa-th-large' style='margin-right:5px;color:#444;'></i>Table Master Outlet</h4>");
						$phpgrid->set_col_hidden('ParentOutlet');
						$phpgrid->set_col_hidden('CreateDt');
						$phpgrid->set_col_hidden('UpdateDt');
						$phpgrid->set_col_hidden('SyncDt');
						$phpgrid->set_col_hidden('Status_Proses');
						$phpgrid->set_col_hidden('ObjectID');
						$phpgrid -> set_col_edittype("STATUS", "autocomplete", "1:Active;0:Non Active;", false);
						
						$query = $this->model_app->getQuerySrv("select ID_BA, NAMA_BA from Ms_BA");
						foreach($query->result() as $db){
							$data .= $db->ID_BA.':'.$db->ID_BA.' - '.$db->NAMA_BA.';';
						}
						$phpgrid -> set_col_edittype("ID_BA", "autocomplete", $data, false);
						
						if($this->session->userdata('area') != 'all'){
							if($this->session->userdata('level') == 'kba'){
								$phpgrid->set_query_filter("ID_BA IN (SELECT a.ID_BA FROM Ms_BA as a, Ms_TL as b WHERE a.ID_TL=b.ID_TL and b.ID_KBA='".$this->session->userdata('username')."')");
							}else if($this->session->userdata('level') == 'tl'){
								$phpgrid->set_query_filter("ID_BA IN (SELECT ID_BA FROM Ms_BA WHERE ID_TL='".$this->session->userdata('username')."')");
							}
						}
						
						$phpgrid-> set_sortname('ID_OUTLET', 'ASC');
						//$phpgrid->set_dimension(1330, 350);
						$phpgrid->enable_autowidth(true);
						$phpgrid->enable_autoheight(true);
						$phpgrid->set_theme('smoothness');
						//$phpgrid->enable_export('EXCEL');
					
						$phpgrid->display(); 
					?>
				</div>
			</div>
		</div>
	</div>