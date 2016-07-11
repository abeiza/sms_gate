<div class="top-br">
		<div style="width:50%; float:left;">
			<span style="padding:15px;font-size:12px;font-family:calibri;color:#666"><a style="text-decoration:none;color:#666; padding-right:10px;" href="<?php echo base_url();?>index.php/">Home</a> <i style="padding-right:10px;" class="fa fa-angle-double-right"></i> <strong>Final SMS</strong></span>
		</div>
		<div style="width:50%; float:left;text-align:right;">
			<a href="#" style="color:#fff;background:#666;padding:3px 5px;margin:3px;border-radius:3px;"><i class="fa fa-undo" style="font-size:12px;"><span style="font-family:calibri;"> Undo</span></i></a>
		</div>
	</div>
</div>
<!-- page content -->
   <div class="body" style="background-color:#f1f1f1;">
	  <div>
		<div id="container" style="margin-left:10px">
		  <h2 style="color:#666;margin-left:10px">Final SMS</h2>
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
						$header->set_col_hidden("RefObjectID");
						
						$header->enable_search(true);
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
						
						$header->set_col_edittype("Name", "autocomplete", $data, false);
						
						$detail->enable_search(true);
						//$detail->enable_advanced_search(true);
						$detail->set_col_title('ID_PRODUCT','Product ID');
						$detail->set_col_title('NAMA_PRODUCT','Product Name');
						$detail->set_col_title('PRODUCT_KODE_PRINCIPLE','Product ID');
						$detail->set_caption('Table Detail Information Messages');
						
						$header->enable_edit('FORM', 'R');
						$detail->enable_edit('FORM', 'R');
						
						$header->set_sortname('ReceiveDt', 'DESC');
						
						$header->set_theme('smoothness');
						$header->set_dimension(1330, false);
						$detail->set_pagesize(40);
						$header->enable_export('EXCEL');
						$detail->enable_export('EXCEL');
						$header->display();﻿
						
						//$phpgrid->display(); 
					?>
				</div>
			</div>
		</div>
	</div>