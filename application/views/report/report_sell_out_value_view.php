						<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
						<script>
						$(function() {
							$("#export").click(function(){
								var url = '<?php echo base_url();?>index.php/report/sellingout_value_report/';
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
									<span style="padding:15px;font-size:12px;font-family:calibri;color:#666"><a style="text-decoration:none;color:#666; padding-right:10px;" href="<?php echo base_url();?>index.php/">Home</a> <i style="padding-right:10px;" class="fa fa-angle-double-right"></i> <strong>Selling Out by Value</strong></span>
								</div>
							</div>
						</div>
						<div class="body" style="background-color:#f1f1f1;padding-bottom:20px;">
							<div id="container">
							<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
							<div style="margin-left:10px;margin-top:20px;margin-bottom:60px;background-color:transparent;padding:0px 20px;">
								<h2 style="color:#666;margin-left:10px;margin-bottom:0px;text-align:center;"><i class="fa fa-line-chart" style="margin-right:5px;"></i>Selling Out by Value</h2>
									<p style="font-size:12px;color:#666;margin-left:10px;text-align:center;width:530px;margin:auto;margin-top:20px;">Module Selling Out by Unit (Reporting) merupakan salah satu module reporting, digunakan untuk melihat angka penjualan per produk (Value) dari tiap BA pada tiap harinya.</p>
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
										$phpgrid->set_caption("<h4 style='color:#444;'><i class='fa fa-th-large' style='margin-right:5px;'></i>Pivot Table (Selling Out by Value)</h4>");
										//$phpgrid -> enable_advanced_search(true);
										$phpgrid->set_theme('smoothness');
										//$phpgrid->enable_autowidth(true);
										//$phpgrid->enable_autoheight(true);
										//$phpgrid->set_scroll(true);
										//$phpgrid->set_col_width('NAMA_KBA',700);
										//$phpgrid->set_col_width('NAMA_TL',700);
										//$phpgrid->set_col_width('NAMA_BA',700);
										$phpgrid->set_col_width('Tahun',100);
										$phpgrid->set_col_width('Bulan',70);
										$phpgrid->set_dimension(1350, 400, false);
							
										//$phpgrid->set_col_frozen('Tahun')->set_col_frozen('Bulan')->set_col_frozen('NAMA_KBA')->set_col_frozen('NAMA_TL')->set_col_frozen('NAMA_BA');
										//$phpgrid->set_col_width('YearTotal',500);
										
										$phpgrid->set_col_title("H1", "1");
										$phpgrid->set_col_title("H2", "2");
										$phpgrid->set_col_title("H3", "3");
										$phpgrid->set_col_title("H4", "4");
										$phpgrid->set_col_title("H5", "5");
										$phpgrid->set_col_title("H6", "6");
										$phpgrid->set_col_title("H7", "7");
										$phpgrid->set_col_title("H8", "8");
										$phpgrid->set_col_title("H9", "9");
										$phpgrid->set_col_title("H10", "10");
										$phpgrid->set_col_title("H11", "11");
										$phpgrid->set_col_title("H12", "12");
										$phpgrid->set_col_title("H13", "13");
										$phpgrid->set_col_title("H14", "14");
										$phpgrid->set_col_title("H15", "15");
										$phpgrid->set_col_title("H16", "16");
										$phpgrid->set_col_title("H17", "17");
										$phpgrid->set_col_title("H18", "18");
										$phpgrid->set_col_title("H19", "19");
										$phpgrid->set_col_title("H20", "20");
										$phpgrid->set_col_title("H21", "21");
										$phpgrid->set_col_title("H22", "22");
										$phpgrid->set_col_title("H23", "23");
										$phpgrid->set_col_title("H24", "24");
										$phpgrid->set_col_title("H25", "25");
										$phpgrid->set_col_title("H26", "26");
										$phpgrid->set_col_title("H27", "27");
										$phpgrid->set_col_title("H28", "28");
										$phpgrid->set_col_title("H29", "29");
										$phpgrid->set_col_title("H30", "30");
										$phpgrid->set_col_title("H31", "31");
										$phpgrid->set_col_title("TotalValue", "Total");
										
										
										$phpgrid->set_col_align("H1","right");
										$phpgrid->set_col_align("H2","right");
										$phpgrid->set_col_align("H3","right");
										$phpgrid->set_col_align("H4","right");
										$phpgrid->set_col_align("H5","right");
										$phpgrid->set_col_align("H6","right");
										$phpgrid->set_col_align("H7","right");
										$phpgrid->set_col_align("H8","right");
										$phpgrid->set_col_align("H9","right");
										$phpgrid->set_col_align("H10","right");
										$phpgrid->set_col_align("H11","right");
										$phpgrid->set_col_align("H12","right");
										$phpgrid->set_col_align("H13","right");
										$phpgrid->set_col_align("H14","right");
										$phpgrid->set_col_align("H15","right");
										$phpgrid->set_col_align("H16","right");
										$phpgrid->set_col_align("H17","right");
										$phpgrid->set_col_align("H18","right");
										$phpgrid->set_col_align("H19","right");
										$phpgrid->set_col_align("H20","right");
										$phpgrid->set_col_align("H21","right");
										$phpgrid->set_col_align("H22","right");
										$phpgrid->set_col_align("H23","right");
										$phpgrid->set_col_align("H24","right");
										$phpgrid->set_col_align("H25","right");
										$phpgrid->set_col_align("H26","right");
										$phpgrid->set_col_align("H27","right");
										$phpgrid->set_col_align("H28","right");
										$phpgrid->set_col_align("H29","right");
										$phpgrid->set_col_align("H30","right");
										$phpgrid->set_col_align("H31","right");
										$phpgrid->set_col_align("TotalValue","right");
										
											$phpgrid->set_conditional_value("H1", "==0", array(
											"TCellValue"=>"-"));
											$phpgrid->set_conditional_value("H2", "==0", array(
											"TCellValue"=>"-"));
											$phpgrid->set_conditional_value("H3", "==0", array(
											"TCellValue"=>"-"));
											$phpgrid->set_conditional_value("H4", "==0", array(
											"TCellValue"=>"-"));
											$phpgrid->set_conditional_value("H5", "==0", array(
											"TCellValue"=>"-"));
											$phpgrid->set_conditional_value("H6", "==0", array(
											"TCellValue"=>"-"));
											$phpgrid->set_conditional_value("H7", "==0", array(
											"TCellValue"=>"-"));
											$phpgrid->set_conditional_value("H8", "==0", array(
											"TCellValue"=>"-"));
											$phpgrid->set_conditional_value("H9", "==0", array(
											"TCellValue"=>"-"));
											$phpgrid->set_conditional_value("H10", "==0", array(
											"TCellValue"=>"-"));
											$phpgrid->set_conditional_value("H11", "==0", array(
											"TCellValue"=>"-"));
											$phpgrid->set_conditional_value("H12", "==0", array(
											"TCellValue"=>"-"));
											$phpgrid->set_conditional_value("H13", "==0", array(
											"TCellValue"=>"-"));
											$phpgrid->set_conditional_value("H14", "==0", array(
											"TCellValue"=>"-"));
											$phpgrid->set_conditional_value("H15", "==0", array(
											"TCellValue"=>"-"));
											$phpgrid->set_conditional_value("H16", "==0", array(
											"TCellValue"=>"-"));
											$phpgrid->set_conditional_value("H17", "==0", array(
											"TCellValue"=>"-"));
											$phpgrid->set_conditional_value("H18", "==0", array(
											"TCellValue"=>"-"));
											$phpgrid->set_conditional_value("H19", "==0", array(
											"TCellValue"=>"-"));
											$phpgrid->set_conditional_value("H20", "==0", array(
											"TCellValue"=>"-"));
											$phpgrid->set_conditional_value("H21", "==0", array(
											"TCellValue"=>"-"));
											$phpgrid->set_conditional_value("H22", "==0", array(
											"TCellValue"=>"-"));
											$phpgrid->set_conditional_value("H23", "==0", array(
											"TCellValue"=>"-"));
											$phpgrid->set_conditional_value("H24", "==0", array(
											"TCellValue"=>"-"));
											$phpgrid->set_conditional_value("H25", "==0", array(
											"TCellValue"=>"-"));
											$phpgrid->set_conditional_value("H26", "==0", array(
											"TCellValue"=>"-"));
											$phpgrid->set_conditional_value("H27", "==0", array(
											"TCellValue"=>"-"));
											$phpgrid->set_conditional_value("H28", "==0", array(
											"TCellValue"=>"-"));
											$phpgrid->set_conditional_value("H29", "==0", array(
											"TCellValue"=>"-"));
											$phpgrid->set_conditional_value("H30", "==0", array(
											"TCellValue"=>"-"));
											$phpgrid->set_conditional_value("H31", "==0", array(
											"TCellValue"=>"-"));
										
										$phpgrid->set_col_align("Tahun","center");
										$phpgrid->set_col_align("Bulan","center");
										
										//$phpgrid->enable_export('EXCEL');
										$phpgrid->display(); 
									?>
								</div>
							</div>
						</div>