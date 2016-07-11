<div class="top-br">
		<div style="width:50%; float:left;">
			<span style="padding:15px;font-size:12px;font-family:calibri;color:#666"><a style="text-decoration:none;color:#666; padding-right:10px;" href="<?php echo base_url();?>index.php/">Home</a> <i style="padding-right:10px;" class="fa fa-angle-double-right"></i> <strong>Master Beauty Advisor</strong></span>
		</div>
	</div>
</div>
<script>
	function validationTL(value, colname) {
    //var rowId = jQuery("#Ms_BA").jqGrid('getGridParam','selrow');
	//var id = '#' + rowId + '_' + 'ID_TL';
	$.ajax({
		type: "GET",
        dataType: "JSON",
		url: "<?php echo base_url();?>index.php/master/master_ba_controller/valid_tl/"+value,
		cache: false,
		success: function(status){
			if(status === "")
				alert("Not Avaliable");
			else
				alert("Avaliable");
		},						
		error: function(){						
			alert("Not Avaliable");
		}
	});
	}
</script>
<!-- page content -->
 <div class="body" style="background-color:#f1f1f1;">
	<div>
		<div id="container">
			<div>
			<?php echo form_open('master/master_ba_controller/export_excel/');?>
				<div style="margin-bottom:10px;text-align:center;">
					<h2 style="color:#666;margin-left:10px;margin-bottom:0px;"><i class="fa fa-users" style="margin-right:5px;"></i>Master BA</h2>
					<p style="font-size:12px;color:#666;margin-left:10px;">Module Master BA menampung data master dari BA sebagai acuan dalam validasi data dari SMS BA.</p>
					<button style="margiin-top:-2px;"><i class="fa fa-file-excel-o" style="margin-right:5px;"></i>Export</button>
				</div>
				<i style="font-size:12px;color:#666;margin-left:10px;">Note : Mohon dipastikan kode BA ataupun kode TL yang mengatasi BA yang akan diinput sudah diinput dengan benar.</i>
			<?php echo form_close();?>
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
						$phpgrid -> enable_search(true);
						//$phpgrid -> set_col_readonly("ObjectID,ID_BA"); 
						//$phpgrid->enable_advanced_search(true);
						$phpgrid->set_col_title('ObjectID','Object ID');
						$phpgrid->set_col_title('ID_BA','Beauty Advisor ID');
						$phpgrid->set_col_title('NAMA_BA','Beauty Advisor Name');
						$phpgrid->set_col_title('ID_TL','TL ID');
						$phpgrid->set_col_title('TGL_JOIN','Date Join');
						$phpgrid->set_col_title('TELP_BA','Phone No.');
						$phpgrid->set_col_title('STATUS','Status');
						$phpgrid->set_caption("<h4><i class='fa fa-th-large' style='margin-right:5px;color:#444;'></i>Table Master Beauty Advisor</h4>");
						
						//$phpgrid->set_col_customrule('ID_TL', 'validationTL');
						$query = $this->model_app->getQuerySrv("select ID_TL, NAMA_TL from Ms_TL");
						foreach($query->result() as $db){
							$data .= $db->ID_TL.':'.$db->ID_TL.' - '.$db->NAMA_TL.';';
						}
						$phpgrid->set_col_edittype("ID_TL", "autocomplete", $data, false);
						
						$phpgrid->set_sortname('ID_BA', 'ASC');
						
						if($this->session->userdata('area') != 'all'){
							if($this->session->userdata('level') == 'kba'){
								$phpgrid->set_query_filter("ID_BA IN (SELECT a.ID_BA FROM Ms_BA as a, Ms_TL as b WHERE a.ID_TL=b.ID_TL and b.ID_KBA='".$this->session->userdata('username')."')");
							}else if($this->session->userdata('level') == 'tl'){
								$phpgrid->set_query_filter("ID_TL='".$this->session->userdata('username')."'");
							}
						}
						
						$phpgrid->set_col_edittype("STATUS", "autocomplete", "1:Active;0:Non Active;", false);
						$phpgrid->set_col_hidden('CreateDt');
						$phpgrid->set_col_hidden('UpdateDt');
						$phpgrid->set_col_hidden('SyncDt');
						$phpgrid->set_col_hidden('Status_Proses');
						$phpgrid->set_col_hidden('ObjectID');
						
						$phpgrid->set_col_hidden('Ms_TL.ID_TL');
						
						$phpgrid->enable_autowidth(true);
						$phpgrid->enable_autoheight(true);
						
						$phpgrid->set_theme('smoothness');
						$phpgrid->set_dimension(800,350);
						//$phpgrid->enable_export('EXCEL');
						
						$phpgrid->display(); 
					?>
				</div>
			</div>
		</div>
	</div>