<!-- page content -->
    <div class="right_col" role="main">
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">		
				<h2>Master Data RSM</h2>
				<hr/>
				<div id="body">
					<?php 
						$phpgrid -> enable_edit("INLINE"); 

						$phpgrid->add_column("actions", array('name'=>'actions',
							'index'=>'actions',
							'width'=>'70',
							'formatter'=>'actions',
							'formatoptions'=>array('keys'=>true, 'editbutton'=>true , 'delbutton'=>false)),'Actions');
						
						$phpgrid->set_dimension(800,300);
						$phpgrid -> enable_edit('FORM', 'R');
						$phpgrid->set_theme('flick');
					
						$phpgrid->display(); 
					?>
				</div>
			</div>
		</div>
