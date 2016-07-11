	<div class="top-br">
		<div style="width:50%; float:left;">
			<span style="padding:15px;font-size:12px;font-family:calibri;color:#666"><a style="text-decoration:none;color:#666; padding-right:10px;" href="<?php echo base_url();?>index.php/">Home</a> <i style="padding-right:10px;" class="fa fa-angle-double-right"></i> <strong>SMS Broadcast</strong></span>
		</div>
	</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
<script src="<?php echo base_url();?>assets/js/jquery.masked.js" type="text/javascript"></script>
<script>
$(document).ready(function(){
	$("#no").keydown(function (e) {
        // Allow: backspace, delete, tab, escape, enter and .
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
             // Allow: Ctrl+A
            (e.keyCode == 65 && e.ctrlKey === true) ||
             // Allow: Ctrl+C
            (e.keyCode == 67 && e.ctrlKey === true) ||
             // Allow: Ctrl+X
            (e.keyCode == 88 && e.ctrlKey === true) ||
             // Allow: home, end, left, right
            (e.keyCode >= 35 && e.keyCode <= 39)) {
                 // let it happen, don't do anything
                 return;
        }
        // Ensure that it is a number and stop the keypress
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
            e.preventDefault();
        }
    });
});
</script>
<script>
	function hit_teks()
	{
		var teks,min;
		min = 0;
		teks = min+(document.form1.message.value.length);
		teks2 = teks/150;
		document.form1.leng.value = teks;
		//document.form1.leng_m.value = parseInt(teks2)+1;
	}
</script>
<!-- page content -->
<div class="body" style="background-color:#f1f1f1;width:100%;">
	<div>
		<div id="container" style="margin-left:10px">
			<div style="width:50%;float:left;">
				<h2 style="color:#666;margin-left:10px;margin-bottom:0px;"><i class="fa fa-send" style="margin-right:5px;"></i>SMS Broadcast</h2>
				<p style="font-size:12px;color:#666;margin-left:10px;">Module SMS Broadcast adalah fitur sms gateway yang digunakan untuk mengirimkan SMS ke hanya satu nomor destinasi.</p>
				<div style="width:98%; margin:30px 1%;float:left;">
				<?php echo $this->session->flashdata('send_result');?>
				<span style="font-style:italic;color:red;font-size:12px;"><?php echo validation_errors();?></span>
					<?php 
						$attributes = array('name' => 'form1', 'id' => 'form1');
						echo form_open('messages/messages_send/send_act',$attributes);
					?>
						<label style="width:100%;float:left">To :</label>
						<input style="outline:none;width:98%;float:left;background-color:transparent;border:none;border-bottom:1px solid #ccc;padding:10px 1%;" name="no" id="no" placeholder="eg : 08xx-xxxx-xxxx"/>
						<label style="width:100%;float:left;margin-top:10px;">Message Text:</label>
						<textarea style="outline:none;width:98%;float:left;height:200px;margin:10px 0px;padding:10px 1%;border:1px solid #ccc;border-radius:3px;" name="message" OnFocus="hit_teks();" maxlength="150"
			OnClick="hit_teks();" ONCHANGE="hit_teks();" onKeydown="hit_teks();"
			onKeyup="hit_teks();"></textarea>
						<div style="width:50%;float:left;height:20px;font-size:12px;">Char : <input style="width:30px;background:transparent;border:none;" id="leng" value="0"/>/150</div>
						<div style="width:50%;float:left;height:20px; text-align:right;font-style:italic;color:red;font-size:12px;">* Note : SMS hanya bisa dikirim 150 karakter</div>
						<button type="submit" style="margin:20px 0px; border-radius:3px; background-color: #FFF; border-color: #CCC;display:inline-block;color:#73879C;font-weight: normal;text-align: center;vertical-align: middle;cursor: pointer;background-image: none;border: 1px solid #ccc;white-space: nowrap;padding: 6px 12px;font-size: 14px;line-height: 1.42857;-moz-user-select: none;"><span class="fa fa-send" style="padding-right:5px;"></span>Send</button>
					<?php echo form_close();?>
				</div>
			</div>
			<div style="width:50%;float:left;">
				<h2 style="color:#666;margin-left:10px;margin-bottom:0px;"><i class="fa fa-envelope" style="margin-right:-3px;"></i><i class="fa fa-arrow-right" style="margin-right:5px;color:#fb654e;font-size:16px;"></i>Table Outbox</h2>
				<p style="font-size:12px;color:#666;margin-left:10px;">Module SMS Broadcast adalah fitur sms gateway yang digunakan untuk mengirimkan SMS ke hanya satu nomor destinasi.</p>
				<style>
					table{
						border:1px solid #666; 
						border-collapse:collapse;
						width:100%;
						float:left;
						color:#666;
						font-size:12px;
					}
					
					table tr td{
						border:1px solid #666; 
						padding:10px;
					}
					
					.pagination{
						float:left;
						margin-top:5px;
					}
					
					.pagination ul{
						margin:0px;
						padding:0px;
					}
					
					.pagination ul li{
						list-style:none;
						float:left;
						margin:3px;
						font-size:12px;
					}
					
					.pagination ul li a{
						text-decoration:none;
						color:#666;
					}
				</style>
				<div style="width:98%; margin:30px 1%;float:left;height:350px;overflow:auto;">
					<table>
						<thead>
							<tr>
								<td>Account Name</td>
								<td>Destination Number</td>
								<td style="width:40%;">TextSMS</td>
								<td>Sent Date</td>
							</tr>
						</thead>
						<tbody>
							<?php 
								foreach($sms->result() as $db){
							?>
								<tr>
									<td><?php echo $db->new_outbox_admin;?></td>
									<td><?php echo $db->new_outbox_no;?></td>
									<td><?php echo $db->new_outbox_text;?></td>
									<td><?php echo $db->new_outbox_in;?></td>
								</tr>
							<?php 
								}
							?>
						</tbody>
					</table>
					<div style="float:right;width:49%;font-size:12px; color:#666; text-align:right;margin-right:1%;">
						<?php echo 'Total '.$total_sms.' Items';?>
					</div>
					<div style="float:right;width:50%;">
						<?php echo $paging;?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>