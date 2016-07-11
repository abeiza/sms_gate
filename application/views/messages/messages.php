	<div class="top-br">
		<div style="width:50%; float:left;">
			<span style="padding:15px;font-size:12px;font-family:calibri;color:#666"><a style="text-decoration:none;color:#666; padding-right:10px;" href="<?php echo base_url();?>index.php/">Home</a> <i style="padding-right:10px;" class="fa fa-angle-double-right"></i> <strong>Inbox SMS</strong></span>
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
		<div id="container">
				<div>
					<h2 style="color:#666;margin-left:10px;margin-bottom:0px;"><i class="fa fa-inbox" style="margin-right:5px;"></i>Inbox SMS</h2>
					<p style="font-size:12px;color:#666;margin-left:10px;margin-bottom:0px;">Module Inbox SMS ini menampung data sms yang sudah tervalidasi dengan status valid/true ataupun invalid.</p>
					<i style="font-size:12px;color:#666;margin-left:10px;">Note : SMS yang ditampung tidak termasuk sms yang salah format pengetikkan.</i>
				</div>
				<div style="margin:10px;font-size:12px;text-align:right;">
					<?php echo form_open('messages/messages_inbox/export_excel/');?>
						<label for="from">From :</label>
						<i class="fa fa-calendar"><input style="background:transparent;border:none; padding-left:10px;border-bottom:1px solid #b2b2b2" type="text" id="from" name="from" placeholder="dd/mm/yyyy" readonly/></i>
						<label for="from">To :</label>
						<i class="fa fa-calendar"><input style="background:transparent;border:none; padding-left:10px; border-bottom:1px solid #b2b2b2" type="text" id="to" name="to" placeholder="dd/mm/yyyy" readonly/></i>
						<button style="color:#666;"><i class="fa fa-file-excel-o" style="margin-right:5px;"></i>Export</button>
					<?php echo form_close();?>
				</div>
			<div id="body">
					<?php 
						//$phpgrid -> enable_edit("INLINE");

						/*$phpgrid->add_column("actions", array('name'=>'actions',
							'index'=>'actions',
							'width'=>'70',
							'formatter'=>'actions',
							'formatoptions'=>array('keys'=>true, 'editbutton'=>false , 'delbutton'=>false)),'Actions');
						*/
						$phpgrid->set_col_width('ReceiveDt',150);
						$phpgrid->set_col_width('SenderNumber',170);
						$phpgrid->set_col_width('TextSMS',170);
						$phpgrid->set_col_width('ID_BA',85);
						$phpgrid->set_col_width('ID_TL',75);
						$phpgrid->set_col_width('ID_KBA',85);
						$phpgrid->set_col_width('ID_AREA',60);
						$phpgrid->set_col_width('COVERAGE_KBA',150);
						$phpgrid->set_col_width('FreqSMS',60);
						$phpgrid->set_col_width('ProcessedDt',150);
						$phpgrid->set_col_width('Processed',100);
						$phpgrid->set_col_align('FreqSMS','center');
						$phpgrid->set_col_align('Processed','center');
						
						$phpgrid->set_col_title("ReceiveDt", "Receive");
						$phpgrid->set_col_title("ID_BA", "ID BA");
						$phpgrid->set_col_title("NAMA_BA", "BA");
						$phpgrid->set_col_title("ID_TL", "ID TL");
						$phpgrid->set_col_title("NAMA_TL", "TL");
						$phpgrid->set_col_title("COVERAGE_TL", "COVERAGE TL");
						$phpgrid->set_col_title("ID_KBA", "ID KBA");
						$phpgrid->set_col_title("COVERAGE_KBA", "COVERAGE KBA");
						$phpgrid->set_col_title("NAMA_KBA", "KBA");
						$phpgrid->set_col_title("ID_AREA", "AREA");
						$phpgrid->set_col_title("FreqSMS", "FREQ");
						$phpgrid->set_col_title("ReceiveDt", "Receive");
						$phpgrid->set_col_title("ReceiveDt", "Receive");
						$phpgrid->set_col_title("ReceiveDt", "Receive");
						
						if($this->session->userdata('area') != 'all'){
							$phpgrid->set_query_filter("ReceiveDt >= DATEADD(MONTH, -1, GETDATE()) AND ID_KBA='".$this->session->userdata('ID_KBA')."'");
						}
						
						$phpgrid->set_col_hidden('COVERAGE_TL');
						$phpgrid->enable_search(true);
						$phpgrid->enable_edit('FORM', 'R');
						$phpgrid->set_caption("<h4 style='color:#444;'><i class='fa fa-th-large' style='margin-right:5px;'></i>Table Inbox Messages</h4>");
						//$phpgrid -> enable_advanced_search(true);
						$phpgrid->set_theme('smoothness');
						$phpgrid->set_sortname('ReceiveDt', 'DESC');
						$phpgrid->set_col_hidden('ObjectID');
						//$phpgrid->set_dimension(auto, 350); 
						$phpgrid->enable_autowidth(true);
						$phpgrid->enable_autoheight(true);
						//$phpgrid->enable_export('EXCEL');
						$phpgrid->display(); 
					?>
				</div>
			</div>
		</div>
	</div>