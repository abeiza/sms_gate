<div class="top-br">
		<div style="width:50%; float:left;">
			<span style="padding:15px;font-size:12px;font-family:calibri;color:#666"><a style="text-decoration:none;color:#666; padding-right:10px;" href="<?php echo base_url();?>index.php/">Home</a> <i style="padding-right:10px;" class="fa fa-angle-double-right"></i> <strong>Data Sales</strong></span>
		</div>
	</div>
</div>
<!-- page content -->
   <div class="body" style="background-color:#f1f1f1;">
	  <div>
		<div id="container">
				<div style="margin-bottom:20px;">
					<h2 style="color:#666;margin-left:10px;margin-bottom:0px;"><i class="fa fa-info-circle" style="margin-right:5px;"></i>Data Sales (Detail Items from SMS)</h2>
					<p style="font-size:12px;color:#666;margin-left:10px;margin-bottom:0px;">Module Data Sales merupakan module penterjemah sms yang dikirimkan oleh BA dengan tujuan untuk dapat melihat detail dari item-item yang terjual.</p>
					<i style="font-size:12px;color:#666;margin-left:10px;">Note : Data yang ditapung hanya SMS yang valid dari proses validasinya.</i>
				</div>
			<div id="body">
					<?php 
						$header->set_masterdetail($detail, 'ParentObjectID');
						$header->enable_edit()->set_col_readonly("ParentObjectID");
						$detail->enable_edit();
						
						$detail->set_col_hidden("DESCRIPTION_PRINCIPLE");
						$detail->set_col_hidden("ID_OUTLET");
						$detail->set_col_hidden("ObjectID");
						$detail->set_col_hidden("ID_PRODUCT");
						$detail->set_col_hidden("TransDt");
						$detail->set_col_hidden("ParentObjectID");
						$header->set_col_hidden("RefObjectID");
						$header->set_col_hidden("ParentObjectID");
						
						//$header->enable_advanced_search(true);
						$header->set_col_title('ID_OUTLET','Outlet ID');
						$header->set_col_title('NAMA_OUTLET','Outlet Name');
						$header->set_col_title('ID_BA','BA ID');
						$header->set_col_title('Name','Nama BA');
						$header->set_col_title('ParentObjectID','ObjectID');
						$header->set_caption('Table Header Information Messages');
						
						$query = $this->model_app->getQuerySrv("select ID_BA, NAMA_BA from Ms_BA");
						foreach($query->result() as $db){
							$data .= $db->ID_BA.':'.$db->NAMA_BA.';';
						}
						
						$header -> set_col_edittype("Name", "autocomplete", $data, false);
						
						//$detail->enable_advanced_search(true);
						$detail->set_col_title('ID_PRODUCT','Product ID');
						$detail->set_col_title('NAMA_PRODUCT','Product Name');
						$detail->set_col_title('PRODUCT_KODE_PRINCIPLE','Product ID');
						$detail->set_caption('Table Detail Information Messages');
						
						$header->enable_edit('INLINE', 'R');
						//$header->set_pagesize(10);
						if($this->session->userdata('area') != 'all'){
							$detail->enable_edit('INLINE', 'R');
						}else{
							$detail->enable_edit('INLINE', 'UR');
						}
						
						$header->set_caption("<h4 style='color:#444;'><i class='fa fa-th-large' style='margin-right:5px;'></i>Data Sales</h4>");
						$detail->set_caption("<h4 style='color:#444;'><i class='fa fa-th-large' style='margin-right:5px;'></i>Detail Items</h4>");
										
						$header->enable_autowidth(true);
						$detail->enable_autowidth(true);
						$header->enable_autoheight(true);
						$detail->enable_autoheight(true);
						
						//$header->set_scroll(true);
						//$detail->set_scroll(true);
						$header->set_sortname('ReceiveDt', 'DESC');
						
						$header->set_theme('smoothness');
						//$header->set_dimension(1330, false);
						//$detail->set_pagesize(20);
						
						//$header->enable_export('EXCEL');
						//$detail->enable_export('EXCEL');
						
						$header->display();﻿
						
						//$phpgrid->display(); 
					?>
				</div>
			</div>
		</div>
	</div>