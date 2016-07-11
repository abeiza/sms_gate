						<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
						<script>
						$(function() {
							$("#export").click(function(){
								var url = '<?php echo base_url();?>index.php/report/recap_sellout_report_ntspc/';
								//you dont need the .each, because you are selecting by id
								var bulan = $('#bulan').val();
								var tahun = $('#tahun').val();
								//Redirects
								window.location.href = url + tahun + '/' + bulan;
								return false;
							});
						});
						</script>	
							<div class="top-br">
								<div style="width:50%; float:left;">
									<span style="padding:15px;font-size:12px;font-family:calibri;color:#666"><a style="text-decoration:none;color:#666; padding-right:10px;" href="<?php echo base_url();?>index.php/">Home</a> <i style="padding-right:10px;" class="fa fa-angle-double-right"></i> <strong>Recapitulation Selling Out (NOT SPECIFIC PRODUCTS)</strong></span>
								</div>
							</div>
						</div>
						<div class="body" style="background-color:#f1f1f1;padding-bottom:20px;">
							<div id="container">
							<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
							<div style="margin-left:10px;margin-top:20px;margin-bottom:60px;background-color:transparent;padding:0px 20px;">
								<h2 style="color:#666;margin-left:10px;margin-bottom:0px;text-align:center;"><i class="fa fa-bar-chart" style=""></i><i class="fa fa-close" style="margin-right:5px;font-size:12px;margin-left:-10px;margin-top:-4px;color:#fb654e;"></i>Recapitulation Selling Out (NOT SPECIFIC PRODUCTS)</h2>
									<p style="font-size:12px;color:#666;margin-left:10px;text-align:center;width:530px;margin:auto;margin-top:20px;">Module Recapitulation Selling Out merupakan module reporting yang menampilkan data rekapitulasi dari penjualan product dengan kriteria tertentu berdasarkan sms BA.</p>
								<h6 style="margin:5px">Filter by Year and Month</h6>
								<div style="float:left;">
									<div style="padding:5px">
										<label for="x" class="col-sm-3 control-label">Month :</label>
										<div style="width:100%;">
											<select id="bulan" name="bulan" id="bulan" style="width:100%;height:23px;border-radius:3px;border: solid 1px #DADADA;box-shadow: 0 0 5px rgba(123, 123, 123, 0.2);padding:1px 10px;">
												<?php 
													foreach(range('1', '12') as $m) : 
													if(isset($_POST['bulan']))
													{
														?>
													 <option value="<?php echo $m; ?>" <?php if ($_POST['bulan'] == $m) { echo 'selected="selected"'; } ?>>
														<?php echo date('F', mktime(0, 0, 0, $m, 10)) ?>
													 </option>
												<?php 
													}else{
														?>
													 <option value="<?php echo $m; ?>" <?php if (date('n') == $m) { echo 'selected="selected"'; } ?>>
														<?php echo date('F', mktime(0, 0, 0, $m, 10)) ?>
													 </option>
												<?php	
													}
													endforeach; ?>
										   </select>
										</div>
									</div>
								</div>
								<div style="float:left;">
									<div style="padding:5px">
										<label for="x" class="col-sm-3 control-label">Year :</label>
										<div style="width:100%;">
											<input id="tahun" name="tahun" placeholder="YYYY - Year" value="<?php if(isset($_POST['tahun'])){echo $_POST['tahun'];}else{echo date('Y');}?>" type="number" style="border-radius:3px;border: solid 1px #DADADA;box-shadow: 0 0 5px rgba(123, 123, 123, 0.2);height:18px;padding:1px 10px;"/>
										</div>
									</div>
								</div>
								<div style="float:left;margin-top:25px;">
									<a id="export"><button type="button" id="exportbtn" class="btn btn-flat btn-md btn-primary" style="color:#666;"><i class="fa fa-file-excel-o" style="margin-right:5px;color:#666;"></i>Export</button></a>
									<button type="submit" name="submit" class="btn btn-flat btn-md btn-primary" style="color:#666;"><i class="fa fa-binoculars" style="margin-right:5px;color:#666;"></i>View</button>
								</div>
								</form>
							</div>
								<div id="body">
									<?php 
										if(isset($_POST['submit'])) 
										{ 
											$bulan = $_POST['bulan'];
											$tahun = $_POST['tahun'];	
											if($this->session->userdata('area') != 'all'){
												$phpgrid->set_query_filter("Tahun='".$tahun."' and Bulan='".$bulan."' and NAMA_KBA='".$this->session->userdata('NAMA_KBA')."'");
											}else{
												$phpgrid->set_query_filter("Tahun='".$tahun."' and Bulan='".$bulan."'");
											}
										}else{
											if($this->session->userdata('area') != 'all'){
												$phpgrid->set_query_filter("Tahun='".date('Y')."' and Bulan='".date('m')."' and NAMA_KBA='".$this->session->userdata('NAMA_KBA')."'");
											}else{
												$phpgrid->set_query_filter("Tahun='".date('Y')."' and Bulan='".date('m')."'");
											}
										}
										//$phpgrid->set_query_filter("Tahun='2016' and Bulan='4'");
										$phpgrid->enable_search(true);
										$phpgrid->enable_edit('FORM', 'R');
										$phpgrid->set_caption("<h4 style='color:#444;'><i class='fa fa-th-large' style='margin-right:5px;'></i>Pivot Table Recapitulation Selling Out</h4>");
										//$phpgrid -> enable_advanced_search(true);
										$phpgrid->set_theme('smoothness');
										//$phpgrid->enable_autowidth(true);
										//$phpgrid->enable_autoheight(true);
										$phpgrid->set_dimension(1350, 400, false);
							
										//$phpgrid->set_col_frozen('Tahun')->set_col_frozen('Bulan')->set_col_frozen('NAMA_KBA')->set_col_frozen('NAMA_TL')->set_col_frozen('NAMA_BA');
										//$phpgrid->set_col_width('NAMA_KBA',700);
										//$phpgrid->set_col_width('NAMA_TL',700);
										$phpgrid->set_col_width('NAMA_BA',250);
										$phpgrid->set_col_width('Tahun',100);
										$phpgrid->set_col_width('Bulan',70);
										//$phpgrid->set_col_width('YearTotal',500);
										
										$phpgrid->set_col_align('Tahun', 'center');
										$phpgrid->set_col_align('Bulan', 'center');
										
										
										$phpgrid->set_col_title("PurbasariQty", "Qty / Unit");
										$phpgrid->set_col_title("PurbasariValue", "Value");
										$phpgrid->set_col_title("AmaraQty", "Qty / Unit");
										$phpgrid->set_col_title("AmaraValue", "Value");
										$phpgrid->set_col_title("NewCellQty", "Qty / Unit");
										$phpgrid->set_col_title("NewCellValue", "Value");
										$phpgrid->set_col_title("KannaQty", "Qty / Unit");
										$phpgrid->set_col_title("KannaValue", "Value");
										$phpgrid->set_col_title("TotalQty", "Unit");
										$phpgrid->set_col_title("TotalValue", "Amount");
										
										$phpgrid->set_grid_method('setGroupHeaders', 
										array(
											array('useColSpanStyle'=>true),
											'groupHeaders'=>array(
											array('startColumnName'=>'PurbasariQty',
											'numberOfColumns'=>2,
											'titleText'=>'PURBASARI'),
											array('startColumnName'=>'AmaraQty',
											'numberOfColumns'=>2,
											'titleText'=>'AMARA'),
											array('startColumnName'=>'NewCellQty',
											'numberOfColumns'=>2,
											'titleText'=>'NEW CELL'),
											array('startColumnName'=>'KannaQty',
											'numberOfColumns'=>2,
											'titleText'=>'KANNA'),
											array('startColumnName'=>'TotalQty',
											'numberOfColumns'=>2,
											'titleText'=>'TOTAL')											
										)));
										
										/*$phpgrid->set_col_currency("PurbasariQty", "", "", ",", 2, "0.00");
										$phpgrid->set_col_currency("PurbasariValue", "", "", ",", 2, "0.00");
										$phpgrid->set_col_currency("AmaraQty", "", "", ",", 2, "0.00");
										$phpgrid->set_col_currency("AmaraValue", "", "", ",", 2, "0.00");
										$phpgrid->set_col_currency("NewCellQty", "", "", ",", 2, "0.00");
										$phpgrid->set_col_currency("NewCellValue", "", "", ",", 2, "0.00");
										$phpgrid->set_col_currency("KannaQty", "", "", ",", 2, "0.00");
										$phpgrid->set_col_currency("KannaValue", "", "", ",", 2, "0.00");
										$phpgrid->set_col_currency("TotalQty", "", "", ",", 2, "0.00");
										$phpgrid->set_col_currency("TotalValue", "", "", ",", 2, "0.00");*/
										
										//$phpgrid->enable_export('EXCEL');
										$phpgrid->display(); 
									?>
								</div>
							</div>
						</div>