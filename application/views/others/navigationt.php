<div class="header">
	<div class="top-header">
		<div class="span50">
			<div class="container">
			<a style="color:#444"><i class="fa fa-mobile fa-3x"></i><span style="margin-left:5px; font-size:22px;">SMS Gateway</span></a>
			</div>
		</div>
		<div class="span50">
			<div class="container">
				<span style="width:100%;float:left; font-size:12px;color:#666;">Welcome <b><?php echo $this->session->userdata('nama');?></b> |  <a href="<?php echo base_url();?>index.php/login/login_controller/logout_proses" style="color:#666;text-decoration:none;"><i class="fa fa-sign-out" style="margin-right:5px;"></i>Logout</a></span>
				<form>
				<input style="width:70%;float:left;border-radius:5px;border:1px solid #666;padding:3px 15px;margin-right:5px" type="text"/>
				<button type="submit" style="background-color:#666;border:1px solid #666; border-radius:3px;padding:2px 5px;"><i class="fa fa-search" style="color:#fff;"></i><span style="font-family:calibri;margin-left:5px;color:#fff;">Search</span></button>
				</form>
			</div>
		</div>
	</div>
	<div class="top-nav">
		<nav id="menu-wrap">    
			<ul id="menu">
				<li>
					<a href="<?php echo base_url(); ?>index.php/dashboard/dashboard_controller" style="padding:9px 15px 9px 15px"><span class="fa fa-home" style="font-size:20px;"></span></a></li>
				<li>
					<a href=""><span class="fa fa-envelope" style="margin-right:5px;"></span>Data SMS</a>
					<ul>
						<li>
							<a href="<?php echo base_url();?>index.php/messages/messages_original">Original SMS</a>	
						</li>
						<li>
							<a href="<?php echo base_url();?>index.php/messages/messages_inbox">Inbox SMS</a>	
						</li>
						<li>
							<a href="<?php echo base_url();?>index.php/messages/messages_send">SMS Broadcast</a>	
						</li>
						<li>
							<a href="<?php echo base_url();?>index.php/report/form_sms/">Export Message Data</a>	
						</li>
						<!--<li>
							<a href="<?php //echo base_url();?>index.php/messages/messages_information">Information</a>			
						</li>-->
					</ul>
				</li>
				<li>
					<a href="<?php echo base_url();?>index.php/messages/messages_information"><span class="fa fa-briefcase" style="margin-right:5px;"></span>Sales</a>
					<ul>
						<li>
							<a href="<?php echo base_url();?>index.php/messages/messages_information">Data Sales</a>	
						</li>
						<!--<li>
							<a href="<?php echo base_url();?>index.php/messages/messages_final">Master Detail Final Sales</a>	
						</li>-->
						<!--<li>
							<a href="<?php echo base_url();?>index.php/messages/messages_sub">SubGrid Sales</a>	
						</li>-->
					</ul>
					<!--<ul>

						<li>
							<a href="">Under Construction</a>
							<ul>
								<li>
									<a href="">Under Construction</a>		
									<ul>
										<li><a href="">Under Construction</a></li>
										<li><a href="">Under Construction</a></li>

										<li><a href="">Under Construction</a></li>
									</ul>							
								</li>
								<li>
									<a href="">Under Construction</a>
									<ul>
										<li><a href="">Under Construction</a></li>
										<li><a href="">Under Construction</a></li>

										<li><a href="">Under Construction</a></li>
									</ul>							
								</li>
								<li>
									<a href="">Under Construction</a>
									<ul>
										<li><a href="">Under Construction</a></li>
										<li><a href="">Under Construction</a></li>

										<li><a href="">Under Construction</a></li>
									</ul>							
								</li>
							</ul>					
						</li>
						<li>
							<a href="">Under Construction</a>
							<ul>
								<li>

									<a href="">Under Construction</a>
									<ul>
										<li><a href="">Under Construction</a></li>
										<li><a href="">Under Construction</a></li>
										<li><a href="">Under Construction</a></li>
									</ul>							
								</li>

								<li>
									<a href="">Under Construction</a>
									<ul>
										<li><a href="">Under Construction</a></li>
										<li><a href="">Under Construction</a></li>
										<li><a href="">Under Construction</a></li>
									</ul>							
								</li>

								<li>
									<a href="">Under Construction</a>
									<ul>
										<li><a href="">Under Construction</a></li>
										<li><a href="">Under Construction</a></li>
										<li><a href="">Under Construction</a></li>
									</ul>							
								</li>

							</ul>					
						</li>
						<li>
							<a href="">Under Construction</a>
							<ul>
								<li>
									<a href="">Under Construction</a>
									<ul>

										<li><a href="">Under Construction</a></li>
										<li><a href="">Under Construction</a></li>
										<li><a href="">Under Construction</a></li>
									</ul>							
								</li>
								<li>
									<a href="">Under Construction</a>

									<ul>
										<li><a href="">Under Construction</a></li>
										<li><a href="">Under Construction</a></li>
										<li><a href="">Under Construction</a></li>
									</ul>							
								</li>
								<li>
									<a href="">Under Construction</a>

									<ul>
										<li><a href="">Under Construction</a></li>
										<li><a href="">Under Construction</a></li>
										<li><a href="">Under Construction</a></li>
									</ul>							
								</li>
							</ul>					
						</li>

					</ul>-->		
				</li>
				<li><a href="<?php echo base_url();?>index.php/report/"><span class="fa fa-line-chart" style="margin-right:5px;"></span>Report</a>
					<ul>
						<li>
							<a href="<?php echo base_url();?>index.php/report/form_absen/">BA Absent</a>	
						</li>
						<li>
							<a href="<?php echo base_url();?>index.php/report/form_call_ec">BA Call & Effective  Call</a>	
						</li>
						<li>
							<a href="#">BA Performance</a>	
							<ul>
								<li>
									<a href="<?php echo base_url();?>index.php/report/form_performance_unit">Performance by Unit</a>	
								</li>
								<li>
									<a href="<?php echo base_url();?>index.php/report/form_performance_value">Performance by Value</a>	
								</li>
							</ul>
						</li>
						<li>
							<a href="#">Selling Out</a>	
							<ul>
								<li>
									<a href="<?php echo base_url();?>index.php/report/form_sellout_unit">Selling Out by Unit</a>	
								</li>
								<li>
									<a href="<?php echo base_url();?>index.php/report/form_sellout_value">Selling Out by Value</a>	
								</li>
								<li>
									<a href="<?php echo base_url();?>index.php/report/form_recap">Recapitulation by Brand</a>	
								</li>
							</ul>
						</li>
						<li>
							<a href="#">Selling Out Exclude Prd.</a>	
							<ul>
								<li>
									<a href="<?php echo base_url();?>index.php/report/form_performance_unit_ntspc">Performance by Unit</a>	
								</li>
								<li>
									<a href="<?php echo base_url();?>index.php/report/form_performance_value_ntspc">Performance by Value</a>	
								</li>
								<li>
									<a href="<?php echo base_url();?>index.php/report/form_sellout_unit_ntspc">Selling Out by Unit</a>	
								</li>
								<li>
									<a href="<?php echo base_url();?>index.php/report/form_sellout_value_ntspc">Selling Out by Value</a>	
								</li>
								<li>
									<a href="<?php echo base_url();?>index.php/report/form_recap_ntspc">Recapitulation by Brand</a>	
								</li>
							</ul>
						</li>
					</ul>
				</li>
				<li><a href="#"><span class="fa fa-archive" style="margin-right:5px;"></span>Master Data</a>
					<ul>
						<li>
							<a href="<?php echo base_url();?>index.php/master/master_ba_controller">Master BA</a>	
						</li>
						<li>
							<a href="<?php echo base_url();?>index.php/master/master_outlet_controller">Master Outlet</a>	
						</li>
						<?php 
							if($this->session->userdata('level') != 'tl'){
						?>
						<li>
							<a href="<?php echo base_url();?>index.php/master/master_tl_controller">Master TL</a>	
						</li>
						<?php
							}
						?>
						<?php 
							if($this->session->userdata('area') == 'all'){
						?>
						<li>
							<a href="<?php echo base_url();?>index.php/master/master_kba_controller">Master KBA</a>			
						</li>
						<li>
							<a href="<?php echo base_url();?>index.php/master/master_area_controller">Master Area</a>	
						</li>
						<li>
							<a href="<?php echo base_url();?>index.php/master/master_product_controller">Master Product</a>	
						</li>
						<li>
							<a href="<?php echo base_url();?>index.php/master/master_product_ntspc_controller">Master Product Exclude</a>	
						</li>
						<li>
							<a href="<?php echo base_url();?>index.php/master/master_category_controller">Master Product Type</a>			
						</li>
						<?php 
							}
						?>
					</ul>
				</li>
				<li><a href="<?php echo base_url();?>index.php/sync"><span class="fa fa-refresh" style="margin-right:5px;"></span>Sync Master Data</a></li>
				<!--<li><a href="<?php //echo base_url();?>index.php/sync/sync_message"><span class="fa fa-refresh" style="margin-right:5px;"></span>Sync SMS</a></li>-->
			</ul>
		</nav>
	</div>