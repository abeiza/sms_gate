<div class="top-br">
		<div style="width:50%; float:left;">
			<span style="padding:15px;font-size:12px;font-family:calibri;color:#666"><a style="text-decoration:none;color:#666; padding-right:10px;" href="<?php echo base_url();?>index.php/">Home</a> <i style="padding-right:10px;" class="fa fa-angle-double-right"></i> <strong>SubGrid Sales</strong></span>
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
			<h2 style="color:#666;margin-left:10px">Information Sub Master</h2>
			<div id="body">
					<?php 
						
						$header->enable_edit("INLINE", "CRUD");
						$detail->enable_edit("INLINE", "CRUD");
						
						/*$phpgrid -> enable_edit('FORM', 'R');
						$phpgrid -> set_col_hidden('Text');
						$phpgrid -> set_col_hidden('Coding');
						$phpgrid -> set_col_hidden('RecipientID');
						
						$phpgrid->enable_advanced_search(true);
						
						$phpgrid->set_dimension(1330, false); 
						
						$phpgrid->set_col_title('object_id','Object ID');
						$phpgrid->set_caption('Table Original Messages');
						$phpgrid -> set_sortname('ReceivingDateTime', 'DESC');*/
						$header->set_theme('smoothness');
					
						$header->set_subgrid($detail, 'ObjectID');
						
						$header->display(); 
					?>
				</div>
			</div>
		</div>
	</div>