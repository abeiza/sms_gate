<div class="top-br">
		<div style="width:50%; float:left;">
			<span style="padding:15px;font-size:12px;font-family:calibri;color:#666"><a style="text-decoration:none;color:#666; padding-right:10px;" href="<?php echo base_url();?>index.php/">Home</a> <i style="padding-right:10px;" class="fa fa-angle-double-right"></i> <strong>Master Product Category</strong></span>
		</div>
	</div>
</div>
<!-- page content -->
 <div class="body" style="background-color:#f1f1f1;">
	<div>
		<div id="container">
			<div style="margin-bottom:10px;text-align:center;">
				<h2 style="color:#666;margin-left:10px;margin-bottom:0px;"><i class="fa fa-sitemap" style="margin-right:5px;"></i>Master Product Type</h2>
				<p style="font-size:12px;color:#666;margin-left:10px;">Module Master Product Type menampung data master product type sebagai acuan dalam pembuatan report (Laporan) yang berkaitan dengan sms gateway.</p>
			</div>
			<div id="body">
					<?php 
						$phpgrid -> enable_edit("INLINE",'CRU'); 

						//$phpgrid->add_column("actions", array('name'=>'actions',
						//	'index'=>'actions',
						//	'width'=>'70',
						//	'formatter'=>'actions',
						//	'formatoptions'=>array('keys'=>true, 'editbutton'=>true , 'delbutton'=>false)),'Actions');
						
						//$phpgrid -> enable_edit('FORM', 'R');
						$phpgrid->set_theme('smoothness');
					
						$phpgrid->set_col_hidden('CreateDt');
						$phpgrid->set_col_hidden('UpdateDt');
						$phpgrid->set_col_hidden('SyncDt');
						$phpgrid->set_col_hidden('Status_Proses');
						$phpgrid->set_col_hidden('ObjectID');
						
						$phpgrid->set_caption("<h4><i class='fa fa-th-large' style='margin-right:5px;color:#444;'></i>Table Product Type</h4>");
						$phpgrid->set_col_title('ID_TIPE_PRODUCT','ID Product Type');
						$phpgrid->set_col_title('NAMA_TIPE_PRODUCT','Product Type');
						$phpgrid->set_col_title('STATUS','Status');
						//$phpgrid->enable_advanced_search(true);
						$phpgrid -> set_col_edittype("STATUS", "autocomplete", "1:Active;0:Non Active;", false);
						//$phpgrid->set_dimension(800,350);
						
						$phpgrid->enable_autowidth(true);
						$phpgrid->enable_autoheight(true);
						
						$phpgrid -> enable_search(true);
						$phpgrid -> set_col_readonly("ObjectID,ID_TIPE_PRODUCT"); 
						$phpgrid->enable_export('EXCEL');
						
						$phpgrid->display(); 
					?>
				</div>
			</div>
		</div>
	</div>