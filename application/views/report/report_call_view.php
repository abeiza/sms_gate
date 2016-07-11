						<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
						<script>
						$(function() {
							$("#export").click(function(){
								var url = '<?php echo base_url();?>index.php/report/EC_report/';
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
									<span style="padding:15px;font-size:12px;font-family:calibri;color:#666"><a style="text-decoration:none;color:#666; padding-right:10px;" href="<?php echo base_url();?>index.php/">Home</a> <i style="padding-right:10px;" class="fa fa-angle-double-right"></i> <strong>Call vs Effective Call</strong></span>
								</div>
							</div>
						</div>
						<div class="body" style="background-color:#f1f1f1;padding-bottom:20px;">
							<div id="container">
							<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
							<div style="margin-left:10px;margin-top:20px;margin-bottom:60px;background-color:transparent;padding:0px 20px;">
								<h2 style="color:#666;margin-left:10px;margin-bottom:0px;text-align:center;"><i class="fa fa-bullhorn" style="margin-right:5px;"></i>Call vs Effective Call</h2>
									<p style="font-size:12px;color:#666;margin-left:10px;text-align:center;width:530px;margin:auto;margin-top:20px;">Module Call vs Effective Call merupakan module reporting untuk membandingkan antara call dan effective call dari kegiatan BA.</p>
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
										$phpgrid->set_caption("<h4 style='color:#444;'><i class='fa fa-th-large' style='margin-right:5px;'></i>Pivot Table (Call vs Effective Call / EC)</h4>");
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
										
										$phpgrid->set_col_width("H1C", 50);
										$phpgrid->set_col_width("H2C", 50);
										$phpgrid->set_col_width("H3C", 50);
										$phpgrid->set_col_width("H4C", 50);
										$phpgrid->set_col_width("H5C", 50);
										$phpgrid->set_col_width("H6C", 50);
										$phpgrid->set_col_width("H7C", 50);
										$phpgrid->set_col_width("H8C", 50);
										$phpgrid->set_col_width("H9C", 50);
										$phpgrid->set_col_width("H10C", 50);
										$phpgrid->set_col_width("H11C", 50);
										$phpgrid->set_col_width("H12C", 50);
										$phpgrid->set_col_width("H13C", 50);
										$phpgrid->set_col_width("H14C", 50);
										$phpgrid->set_col_width("H15C", 50);
										$phpgrid->set_col_width("H16C", 50);
										$phpgrid->set_col_width("H17C", 50);
										$phpgrid->set_col_width("H18C", 50);
										$phpgrid->set_col_width("H19C", 50);
										$phpgrid->set_col_width("H20C", 50);
										$phpgrid->set_col_width("H21C", 50);
										$phpgrid->set_col_width("H22C", 50);
										$phpgrid->set_col_width("H23C", 50);
										$phpgrid->set_col_width("H24C", 50);
										$phpgrid->set_col_width("H25C", 50);
										$phpgrid->set_col_width("H26C", 50);
										$phpgrid->set_col_width("H27C", 50);
										$phpgrid->set_col_width("H28C", 50);
										$phpgrid->set_col_width("H29C", 50);
										$phpgrid->set_col_width("H30C", 50);
										$phpgrid->set_col_width("H31C", 50);
										
										$phpgrid->set_col_width("H1EC", 50);
										$phpgrid->set_col_width("H2EC", 50);
										$phpgrid->set_col_width("H3EC", 50);
										$phpgrid->set_col_width("H4EC", 50);
										$phpgrid->set_col_width("H5EC", 50);
										$phpgrid->set_col_width("H6EC", 50);
										$phpgrid->set_col_width("H7EC", 50);
										$phpgrid->set_col_width("H8EC", 50);
										$phpgrid->set_col_width("H9EC", 50);
										$phpgrid->set_col_width("H10EC", 50);
										$phpgrid->set_col_width("H11EC", 50);
										$phpgrid->set_col_width("H12EC", 50);
										$phpgrid->set_col_width("H13EC", 50);
										$phpgrid->set_col_width("H14EC", 50);
										$phpgrid->set_col_width("H15EC", 50);
										$phpgrid->set_col_width("H16EC", 50);
										$phpgrid->set_col_width("H17EC", 50);
										$phpgrid->set_col_width("H18EC", 50);
										$phpgrid->set_col_width("H19EC", 50);
										$phpgrid->set_col_width("H20EC", 50);
										$phpgrid->set_col_width("H21EC", 50);
										$phpgrid->set_col_width("H22EC", 50);
										$phpgrid->set_col_width("H23EC", 50);
										$phpgrid->set_col_width("H24EC", 50);
										$phpgrid->set_col_width("H25EC", 50);
										$phpgrid->set_col_width("H26EC", 50);
										$phpgrid->set_col_width("H27EC", 50);
										$phpgrid->set_col_width("H28EC", 50);
										$phpgrid->set_col_width("H29EC", 50);
										$phpgrid->set_col_width("H30EC", 50);
										$phpgrid->set_col_width("H31EC", 50);
										
										$phpgrid->set_col_title("H1C", "Call");
										$phpgrid->set_col_title("H1EC", "EC");
										$phpgrid->set_col_title("H2C", "Call");
										$phpgrid->set_col_title("H2EC", "EC");
										$phpgrid->set_col_title("H3C", "Call");
										$phpgrid->set_col_title("H3EC", "EC");
										$phpgrid->set_col_title("H4C", "Call");
										$phpgrid->set_col_title("H4EC", "EC");
										$phpgrid->set_col_title("H5C", "Call");
										$phpgrid->set_col_title("H5EC", "EC");
										$phpgrid->set_col_title("H6C", "Call");
										$phpgrid->set_col_title("H6EC", "EC");
										$phpgrid->set_col_title("H7C", "Call");
										$phpgrid->set_col_title("H7EC", "EC");
										$phpgrid->set_col_title("H8C", "Call");
										$phpgrid->set_col_title("H8EC", "EC");
										$phpgrid->set_col_title("H9C", "Call");
										$phpgrid->set_col_title("H9EC", "EC");
										$phpgrid->set_col_title("H10C", "Call");
										$phpgrid->set_col_title("H10EC", "EC");
										$phpgrid->set_col_title("H11C", "Call");
										$phpgrid->set_col_title("H11EC", "EC");
										$phpgrid->set_col_title("H12C", "Call");
										$phpgrid->set_col_title("H12EC", "EC");
										$phpgrid->set_col_title("H13C", "Call");
										$phpgrid->set_col_title("H13EC", "EC");
										$phpgrid->set_col_title("H14C", "Call");
										$phpgrid->set_col_title("H14EC", "EC");
										$phpgrid->set_col_title("H15C", "Call");
										$phpgrid->set_col_title("H15EC", "EC");
										$phpgrid->set_col_title("H16C", "Call");
										$phpgrid->set_col_title("H16EC", "EC");
										$phpgrid->set_col_title("H17C", "Call");
										$phpgrid->set_col_title("H17EC", "EC");
										$phpgrid->set_col_title("H18C", "Call");
										$phpgrid->set_col_title("H18EC", "EC");
										$phpgrid->set_col_title("H19C", "Call");
										$phpgrid->set_col_title("H19EC", "EC");
										$phpgrid->set_col_title("H20C", "Call");
										$phpgrid->set_col_title("H20EC", "EC");
										$phpgrid->set_col_title("H21C", "Call");
										$phpgrid->set_col_title("H21EC", "EC");
										$phpgrid->set_col_title("H22C", "Call");
										$phpgrid->set_col_title("H22EC", "EC");
										$phpgrid->set_col_title("H23C", "Call");
										$phpgrid->set_col_title("H23EC", "EC");
										$phpgrid->set_col_title("H24C", "Call");
										$phpgrid->set_col_title("H24EC", "EC");
										$phpgrid->set_col_title("H25C", "Call");
										$phpgrid->set_col_title("H25EC", "EC");
										$phpgrid->set_col_title("H26C", "Call");
										$phpgrid->set_col_title("H26EC", "EC");
										$phpgrid->set_col_title("H27C", "Call");
										$phpgrid->set_col_title("H27EC", "EC");
										$phpgrid->set_col_title("H28C", "Call");
										$phpgrid->set_col_title("H28EC", "EC");
										$phpgrid->set_col_title("H29C", "Call");
										$phpgrid->set_col_title("H29EC", "EC");
										$phpgrid->set_col_title("H30C", "Call");
										$phpgrid->set_col_title("H30EC", "EC");
										$phpgrid->set_col_title("H31C", "Call");
										$phpgrid->set_col_title("H31EC", "EC");
										
											$phpgrid->set_conditional_value("H1C", "==0", array(
											"TCellValue"=>"-"));
											$phpgrid->set_conditional_value("H2C", "==0", array(
											"TCellValue"=>"-"));
											$phpgrid->set_conditional_value("H3C", "==0", array(
											"TCellValue"=>"-"));
											$phpgrid->set_conditional_value("H4C", "==0", array(
											"TCellValue"=>"-"));
											$phpgrid->set_conditional_value("H5C", "==0", array(
											"TCellValue"=>"-"));
											$phpgrid->set_conditional_value("H6C", "==0", array(
											"TCellValue"=>"-"));
											$phpgrid->set_conditional_value("H7C", "==0", array(
											"TCellValue"=>"-"));
											$phpgrid->set_conditional_value("H8C", "==0", array(
											"TCellValue"=>"-"));
											$phpgrid->set_conditional_value("H9C", "==0", array(
											"TCellValue"=>"-"));
											$phpgrid->set_conditional_value("H10C", "==0", array(
											"TCellValue"=>"-"));
											$phpgrid->set_conditional_value("H11C", "==0", array(
											"TCellValue"=>"-"));
											$phpgrid->set_conditional_value("H12C", "==0", array(
											"TCellValue"=>"-"));
											$phpgrid->set_conditional_value("H13C", "==0", array(
											"TCellValue"=>"-"));
											$phpgrid->set_conditional_value("H14C", "==0", array(
											"TCellValue"=>"-"));
											$phpgrid->set_conditional_value("H15C", "==0", array(
											"TCellValue"=>"-"));
											$phpgrid->set_conditional_value("H16C", "==0", array(
											"TCellValue"=>"-"));
											$phpgrid->set_conditional_value("H17C", "==0", array(
											"TCellValue"=>"-"));
											$phpgrid->set_conditional_value("H18C", "==0", array(
											"TCellValue"=>"-"));
											$phpgrid->set_conditional_value("H19C", "==0", array(
											"TCellValue"=>"-"));
											$phpgrid->set_conditional_value("H20C", "==0", array(
											"TCellValue"=>"-"));
											$phpgrid->set_conditional_value("H21C", "==0", array(
											"TCellValue"=>"-"));
											$phpgrid->set_conditional_value("H22C", "==0", array(
											"TCellValue"=>"-"));
											$phpgrid->set_conditional_value("H23C", "==0", array(
											"TCellValue"=>"-"));
											$phpgrid->set_conditional_value("H24C", "==0", array(
											"TCellValue"=>"-"));
											$phpgrid->set_conditional_value("H25C", "==0", array(
											"TCellValue"=>"-"));
											$phpgrid->set_conditional_value("H26C", "==0", array(
											"TCellValue"=>"-"));
											$phpgrid->set_conditional_value("H27C", "==0", array(
											"TCellValue"=>"-"));
											$phpgrid->set_conditional_value("H28C", "==0", array(
											"TCellValue"=>"-"));
											$phpgrid->set_conditional_value("H29C", "==0", array(
											"TCellValue"=>"-"));
											$phpgrid->set_conditional_value("H30C", "==0", array(
											"TCellValue"=>"-"));
											$phpgrid->set_conditional_value("H31C", "==0", array(
											"TCellValue"=>"-"));
											
											
											
											$phpgrid->set_conditional_value("H1EC", "==0", array(
											"TCellValue"=>"-"));
											$phpgrid->set_conditional_value("H2EC", "==0", array(
											"TCellValue"=>"-"));
											$phpgrid->set_conditional_value("H3EC", "==0", array(
											"TCellValue"=>"-"));
											$phpgrid->set_conditional_value("H4EC", "==0", array(
											"TCellValue"=>"-"));
											$phpgrid->set_conditional_value("H5EC", "==0", array(
											"TCellValue"=>"-"));
											$phpgrid->set_conditional_value("H6EC", "==0", array(
											"TCellValue"=>"-"));
											$phpgrid->set_conditional_value("H7EC", "==0", array(
											"TCellValue"=>"-"));
											$phpgrid->set_conditional_value("H8EC", "==0", array(
											"TCellValue"=>"-"));
											$phpgrid->set_conditional_value("H9EC", "==0", array(
											"TCellValue"=>"-"));
											$phpgrid->set_conditional_value("H10EC", "==0", array(
											"TCellValue"=>"-"));
											$phpgrid->set_conditional_value("H11EC", "==0", array(
											"TCellValue"=>"-"));
											$phpgrid->set_conditional_value("H12EC", "==0", array(
											"TCellValue"=>"-"));
											$phpgrid->set_conditional_value("H13EC", "==0", array(
											"TCellValue"=>"-"));
											$phpgrid->set_conditional_value("H14EC", "==0", array(
											"TCellValue"=>"-"));
											$phpgrid->set_conditional_value("H15EC", "==0", array(
											"TCellValue"=>"-"));
											$phpgrid->set_conditional_value("H16EC", "==0", array(
											"TCellValue"=>"-"));
											$phpgrid->set_conditional_value("H17EC", "==0", array(
											"TCellValue"=>"-"));
											$phpgrid->set_conditional_value("H18EC", "==0", array(
											"TCellValue"=>"-"));
											$phpgrid->set_conditional_value("H19EC", "==0", array(
											"TCellValue"=>"-"));
											$phpgrid->set_conditional_value("H20EC", "==0", array(
											"TCellValue"=>"-"));
											$phpgrid->set_conditional_value("H21EC", "==0", array(
											"TCellValue"=>"-"));
											$phpgrid->set_conditional_value("H22EC", "==0", array(
											"TCellValue"=>"-"));
											$phpgrid->set_conditional_value("H23EC", "==0", array(
											"TCellValue"=>"-"));
											$phpgrid->set_conditional_value("H24EC", "==0", array(
											"TCellValue"=>"-"));
											$phpgrid->set_conditional_value("H25EC", "==0", array(
											"TCellValue"=>"-"));
											$phpgrid->set_conditional_value("H26EC", "==0", array(
											"TCellValue"=>"-"));
											$phpgrid->set_conditional_value("H27EC", "==0", array(
											"TCellValue"=>"-"));
											$phpgrid->set_conditional_value("H28EC", "==0", array(
											"TCellValue"=>"-"));
											$phpgrid->set_conditional_value("H29EC", "==0", array(
											"TCellValue"=>"-"));
											$phpgrid->set_conditional_value("H30EC", "==0", array(
											"TCellValue"=>"-"));
											$phpgrid->set_conditional_value("H31EC", "==0", array(
											"TCellValue"=>"-"));
										
										$phpgrid->set_grid_method('setGroupHeaders', 
										array(
											array('useColSpanStyle'=>true),
											'groupHeaders'=>array(
											array('startColumnName'=>'H1C',
											'numberOfColumns'=>2,
											'titleText'=>'Day 1'),
											array('startColumnName'=>'H2C',
											'numberOfColumns'=>2,
											'titleText'=>'Day 2'),
											array('startColumnName'=>'H3C',
											'numberOfColumns'=>2,
											'titleText'=>'Day 3'),
											array('startColumnName'=>'H4C',
											'numberOfColumns'=>2,
											'titleText'=>'Day 4'),
											array('startColumnName'=>'H5C',
											'numberOfColumns'=>2,
											'titleText'=>'Day 5'),
											array('startColumnName'=>'H6C',
											'numberOfColumns'=>2,
											'titleText'=>'Day 6'),
											array('startColumnName'=>'H7C',
											'numberOfColumns'=>2,
											'titleText'=>'Day 7'),
											array('startColumnName'=>'H8C',
											'numberOfColumns'=>2,
											'titleText'=>'Day 8'),
											array('startColumnName'=>'H9C',
											'numberOfColumns'=>2,
											'titleText'=>'Day 9'),
											array('startColumnName'=>'H10C',
											'numberOfColumns'=>2,
											'titleText'=>'Day 10'),
											array('startColumnName'=>'H11C',
											'numberOfColumns'=>2,
											'titleText'=>'Day 11'),
											array('startColumnName'=>'H12C',
											'numberOfColumns'=>2,
											'titleText'=>'Day 12'),
											array('startColumnName'=>'H13C',
											'numberOfColumns'=>2,
											'titleText'=>'Day 13'),
											array('startColumnName'=>'H14C',
											'numberOfColumns'=>2,
											'titleText'=>'Day 14'),
											array('startColumnName'=>'H15C',
											'numberOfColumns'=>2,
											'titleText'=>'Day 15'),
											array('startColumnName'=>'H16C',
											'numberOfColumns'=>2,
											'titleText'=>'Day 16'),
											array('startColumnName'=>'H17C',
											'numberOfColumns'=>2,
											'titleText'=>'Day 17'),
											array('startColumnName'=>'H18C',
											'numberOfColumns'=>2,
											'titleText'=>'Day 18'),
											array('startColumnName'=>'H19C',
											'numberOfColumns'=>2,
											'titleText'=>'Day 19'),
											array('startColumnName'=>'H20C',
											'numberOfColumns'=>2,
											'titleText'=>'Day 20'),
											array('startColumnName'=>'H21C',
											'numberOfColumns'=>2,
											'titleText'=>'Day 21'),
											array('startColumnName'=>'H22C',
											'numberOfColumns'=>2,
											'titleText'=>'Day 22'),
											array('startColumnName'=>'H23C',
											'numberOfColumns'=>2,
											'titleText'=>'Day 23'),
											array('startColumnName'=>'H24C',
											'numberOfColumns'=>2,
											'titleText'=>'Day 24'),
											array('startColumnName'=>'H25C',
											'numberOfColumns'=>2,
											'titleText'=>'Day 25'),
											array('startColumnName'=>'H26C',
											'numberOfColumns'=>2,
											'titleText'=>'Day 26'),
											array('startColumnName'=>'H27C',
											'numberOfColumns'=>2,
											'titleText'=>'Day 27'),
											array('startColumnName'=>'H28C',
											'numberOfColumns'=>2,
											'titleText'=>'Day 28'),
											array('startColumnName'=>'H29C',
											'numberOfColumns'=>2,
											'titleText'=>'Day 29'),
											array('startColumnName'=>'H30C',
											'numberOfColumns'=>2,
											'titleText'=>'Day 30'),
											array('startColumnName'=>'H31C',
											'numberOfColumns'=>2,
											'titleText'=>'Day 31')											
										)));
										
										//$phpgrid->enable_export('EXCEL');
										$phpgrid->display(); 
									?>
								</div>
							</div>
						</div>