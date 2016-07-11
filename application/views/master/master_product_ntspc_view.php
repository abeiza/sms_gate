<div class="top-br">
		<div style="width:50%; float:left;">
			<span style="padding:15px;font-size:12px;font-family:calibri;color:#666"><a style="text-decoration:none;color:#666; padding-right:10px;" href="<?php echo base_url();?>index.php/">Home</a> <i style="padding-right:10px;" class="fa fa-angle-double-right"></i> <strong>Master Product</strong></span>
		</div>
	</div>
</div>
<div class="body" style="background-color:#f1f1f1;">
	<div>
		<div id="container">
			<?php echo form_open('master/master_product_ntspc_controller/export_excel/');?>
				<div style="margin-bottom:10px;text-align:center;">
					<h2 style="color:#666;margin-left:10px;margin-bottom:0px;"><i class="fa fa-tags" style="margin-right:5px;"></i>Master Product Exclude</h2>
					<p style="font-size:12px;color:#666;margin-left:10px;">Module Master Product Exclude menampung data master Product tertentu sebagai acuan dalam pembuatan report (Laporan) yang berkaitan dengan sms gateway.</p>
					<button style="margiin-top:-2px;"><i class="fa fa-file-excel-o" style="margin-right:5px;"></i>Export</button>
				</div>
			<?php echo form_close();?>
			<div id="body">        
			<?php 
			$phpgrid -> enable_edit("INLINE",'CRU'); 

			/*$phpgrid->add_column("actions", array('name'=>'actions',
				'index'=>'actions',
				'width'=>'70',
				'formatter'=>'actions',
				'formatoptions'=>array('keys'=>true, 'editbutton'=>true , 'delbutton'=>false)),'Actions');
			*/
			//$phpgrid -> enable_edit('FORM', 'CRU');
			
			/*$phpgrid -> set_col_property("ID_PRODUCT", array("formoptions"=>array("rowpos"=>1,"colpos"=>1)));
			$phpgrid -> set_col_property("NAMA_PRODUCT", array("formoptions"=>array("rowpos"=>1,"colpos"=>2)));
			$phpgrid -> set_col_property("ID_TYPE_PRODUCT", array("formoptions"=>array("rowpos"=>2,"colpos"=>1)));
			$phpgrid -> set_col_property("HET", array("formoptions"=>array("rowpos"=>2,"colpos"=>2)));
			$phpgrid -> set_col_property("VOLUME", array("formoptions"=>array("rowpos"=>3,"colpos"=>1)));
			$phpgrid -> set_col_property("SATUAN", array("formoptions"=>array("rowpos"=>3,"colpos"=>2)));
			$phpgrid -> set_col_property("STATUS", array("formoptions"=>array("rowpos"=>4,"colpos"=>1)));
			$phpgrid -> set_col_property("PRODUCT_KODE_PRINCIPLE", array("formoptions"=>array("rowpos"=>4,"colpos"=>2)));
			$phpgrid -> set_col_property("F10", array("formoptions"=>array("rowpos"=>5,"colpos"=>1)));
			$phpgrid -> set_col_property("F11", array("formoptions"=>array("rowpos"=>6,"colpos"=>1)));
			$phpgrid -> set_col_property("F12", array("formoptions"=>array("rowpos"=>7,"colpos"=>1)));
			$phpgrid -> set_col_property("DESCRIPTION_PRINCIPLE", array("editoptions"=>array("style"=>"width:95%;")));
			*/
			//$phpgrid -> set_col_property("F10", array("formoptions"=>array("rowpos"=>1,"colpos"=>2)));
			//$phpgrid -> set_col_property("F11", array("formoptions"=>array("rowpos"=>2,"colpos"=>2)));
			//$phpgrid -> set_col_property("F12", array("formoptions"=>array("rowpos"=>3,"colpos"=>2)));
			
			/*$phpgrid -> set_col_hidden("F10");
			$phpgrid -> set_col_hidden("F11");
			$phpgrid -> set_col_hidden("F12");
			$phpgrid -> set_col_hidden("STATUS");
			
			$phpgrid->set_col_hidden('CreateDt');
			$phpgrid->set_col_hidden('UpdateDt');
			$phpgrid->set_col_hidden('SyncDt');
			$phpgrid->set_col_hidden('Status_Proses');
			$phpgrid->set_col_hidden('ObjectID');
			$phpgrid -> enable_search(true);
			//$phpgrid -> set_col_readonly("ObjectID,ID_PRODUCT"); 
			//$phpgrid->enable_advanced_search(true);
			$phpgrid->set_col_title('ID_PRODUCT','Product ID');
			$phpgrid->set_col_title('NAMA_PRODUCT','Product Name');
			$phpgrid->set_col_title('ID_TIPE_PRODUCT','Type Product');
			$phpgrid->set_col_title('HET','Het');
			$phpgrid->set_col_title('VOLUME','Volume');
			$phpgrid->set_col_title('SATUAN','Unit');
			$phpgrid->set_col_title('PRODUCT_KODE_PRINCIPLE','Product Principle ID');
			$phpgrid->set_col_title('DESCRIPTION_PRINCIPLE','Description');
			$phpgrid->set_col_title('STATUS','Status');
			$phpgrid -> set_col_edittype("STATUS", "autocomplete", "1:Active;0:Non Active;", false);*/
			$phpgrid->set_col_hidden('ObjectID');
			$phpgrid->set_caption("<h4><i class='fa fa-th-large' style='margin-right:5px;color:#444;'></i>Table Product</h4>");
					
			//$phpgrid->set_dimension(1330, 350); 
			
			$phpgrid->set_theme('smoothness');
			$phpgrid->enable_autowidth(true);
			$phpgrid->enable_autoheight(true);
			//$phpgrid->enable_export('EXCEL');
			$phpgrid->enable_debug(false);
			$phpgrid->display(); 
		?>
		</div>
	</div>
</div>