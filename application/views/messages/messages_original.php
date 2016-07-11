	<div class="top-br">
		<div style="width:50%; float:left;">
			<span style="padding:15px;font-size:12px;font-family:calibri;color:#666"><a style="text-decoration:none;color:#666; padding-right:10px;" href="<?php echo base_url();?>index.php/">Home</a> <i style="padding-right:10px;" class="fa fa-angle-double-right"></i> <strong>Original SMS</strong></span>
		</div>
	</div>
</div>
<link href="<?php echo base_url(); ?>assets/css/jquery.ui.datepicker.css" rel="stylesheet">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/jquery.ui.theme.css" />

<script src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.ui.datepicker.js"></script>
<!--<link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">-->
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/smoothness/jquery-ui.css" />
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
<script src="<?php echo base_url();?>assets/js/jquery.ui.core.js"></script>
<script src="<?php echo base_url();?>assets/js/jquery.ui.widget.js"></script>
<script>
$(function() {
	$( "#from" ).datepicker({
		defaultDate: "+1w",
		changeMonth: true,
		numberOfMonths: 3,
		onClose: function( selectedDate ) {
			$( "#to" ).datepicker( "option", "minDate", selectedDate );
		}
	});
	$( "#to" ).datepicker({
		defaultDate: "+1w",
		changeMonth: true,
		numberOfMonths: 3,
		onClose: function( selectedDate ) {
			$( "#from" ).datepicker( "option", "maxDate", selectedDate );
		}
	});
});
</script>
<!-- page content -->
 <div class="body" style="background-color:#f1f1f1;">
	<div>
		<div id="container" style="">
			<div style="text-align:center;">
				<h2 style="color:#666;margin-left:10px"><i class='fa fa-envelope' style='margin-right:5px'></i>Original SMS</h2>
				<p style="font-size:12px;color:#666;margin-left:10px;margin-bottom:0px;">Module Original SMS ini menampung data sms yang belum divalidasi dan belum diolah oleh system.</p>
				<span style="font-size:12px;color:#666;">Data yang dihasilkan masih belum bisa digunakan untuk menjadi sebuah informasi.</span>
				<p></p>
			</div>
			<div style="margin:10px;font-size:12px;text-align:center;">
				<?php echo form_open('messages/messages_original/export_excel/');?>
					<label for="from">From :</label>
					<i class="fa fa-calendar"><input style="background:transparent;border:none; padding-left:10px; border-bottom:1px solid #b2b2b2" type="text" id="from" name="from" placeholder="dd/mm/yyyy" readonly/></i>
					<label for="from">To :</label>
					<i class="fa fa-calendar"><input style="background:transparent;border:none; padding-left:10px; border-bottom:1px solid #b2b2b2" type="text" id="to" name="to" placeholder="dd/mm/yyyy" readonly/></i>
					<button style="color:#666;"><i class="fa fa-file-excel-o" style="margin-right:10px;"></i>Export</button>
				<?php echo form_close();?>
			</div>
			<div id="body">
					<?php 
						//$phpgrid -> enable_edit("INLINE"); 

						/*$phpgrid->add_column("actions", array('name'=>'actions',
							'index'=>'actions',
							'width'=>'70',
							'formatter'=>'actions',
							'formatoptions'=>array('keys'=>true, 'editbutton'=>true , 'delbutton'=>false)),'Actions');
						*/
						$phpgrid->enable_edit('FORM', 'R');
						$phpgrid->set_col_hidden('Text');
						$phpgrid->set_col_hidden('SMSCNumber');
						$phpgrid->set_col_hidden('Class');
						$phpgrid->set_col_hidden('Coding');
						$phpgrid->set_col_hidden('RecipientID');
						$phpgrid->set_col_hidden('object_id');
						
						//$phpgrid->enable_advanced_search(true);
						$phpgrid->enable_search(true);
						//$phpgrid->set_dimension(false, 50); 
						$phpgrid->enable_autowidth(true);

						//$phpgrid->set_col_width('ReceivingDateTime',70);
						//$phpgrid->set_col_width('SenderNumber',50);
						//$phpgrid->set_col_width('UDH',30);
						//$phpgrid->set_col_width('Processed',30);
						$phpgrid->set_col_align('Processed','center');
						
						$phpgrid->set_col_title('object_id','Object ID');
						$phpgrid->set_caption("<h4 style='color:#444;'><i class='fa fa-th-large' style='margin-right:5px;'></i>Table Original Messages</h4>");
						$phpgrid->set_sortname('ReceivingDateTime', 'DESC');
						$phpgrid->set_theme('smoothness');
						$phpgrid->set_query_filter("ReceivingDateTime >= DATEADD(MONTH, -1, GETDATE())");
						$phpgrid->set_dimension(auto, 350); 
						$phpgrid->enable_autowidth(true);
						
						//$phpgrid->enable_export('EXCEL');
						
						$phpgrid->display(); 
					?>
				</div>
			</div>
		</div>
	</div>