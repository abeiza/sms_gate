							<div class="top-br">
								<div style="width:50%; float:left;">
									<span style="padding:15px;font-size:12px;font-family:calibri;color:#666"><a style="text-decoration:none;color:#666; padding-right:10px;" href="<?php echo base_url();?>index.php/">Home</a> <i style="padding-right:10px;" class="fa fa-angle-double-right"></i> <strong>Export Messages Data</strong></span>
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
						<div class="body" style="background-color:#f1f1f1;padding-bottom:20px;width:100%;">
							<?php
								echo form_open("report/sms_report/");
							?>
							<div style="margin:20px 10px;width:500px;background-color:transparent;padding:0px 20px;">
								<h2 style="color:#666;margin-left:10px;margin-bottom:0px;"><i class="fa fa-clipboard" style="margin-right:5px;"></i>Export Message Data</h2>
								<p style="font-size:12px;color:#666;margin-left:10px;">Module Export Message Data adalah fitur yang digunakan untuk export data by excel | spreadsheet yang telah diterima dan telah diproses oleh system, baik yang berstatus valid / true maupun invalid.</p>
							<h6 style="margin:10px">Receive Date (SMS)</h6>
							<div style="width:45%;float:left;margin-left:5px;">
								<div style="padding:5px">
									<label for="x" class="col-sm-3 control-label">From :</label>
									<div style="width:90%;">
										<i class="fa fa-calendar"><input style="padding-left:10px;background:transparent;border:none;border-bottom:1px solid #d2d2d2;" value="<?php echo date('m/d/Y');?>" readonly type="text" id="from" name="from"/></i>
									</div>
								</div>
							</div>
							<div style="width:45%;float:left;margin-left:5px;">
								<div style="padding:5px">
									<label for="x" class="col-sm-3 control-label">To :</label>
									<div style="width:90%;">
										<i class="fa fa-calendar"><input style="padding-left:10px;background:transparent;border:none;border-bottom:1px solid #d2d2d2;" value="<?php echo date('m/d/Y');?>" readonly style="width:100%" type="text" id="to" name="to"/></i>
									</div>
								</div>
							</div>
							<div style="width:100%;float:left;padding:5px;margin-left:5px;color:#666">
								<div class="col-sm-8">
								  <button type="submit" id="exportbtn" class="btn btn-flat btn-md btn-primary"><i class="fa fa-file-excel-o" style="margin-right:5px"></i>Export</button>
								</div>
							</div>
							</div>
							<?php
								echo form_close();
							?>
						</div>