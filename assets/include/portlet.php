					<?php
					$q_TotalNumber=19;
					$ActivQ=15; 
					?>
					<!-- BEGIN PORTLET-->
					<div class="portlet light ">
						<div class="portlet-title">
							<div class="caption caption-md">
								<i class="icon-bar-chart theme-font hide"></i>
								<span class="caption-subject theme-font bold uppercase">Questions </span>
								<span class="caption-helper hide">weekly stats...</span>
							</div>
							<div class="actions">
								<div class="btn-group btn-group-devided" data-toggle="buttons">
									<?php
										for($i=1;$i<=$q_TotalNumber;$i++){
										if($i==$ActivQ)
											{$is_Activ="active";}else{$is_Activ="";}
									?>
									<label class="btn btn-transparent grey-salsa btn-circle btn-sm <?php echo $is_Activ;?>">
									<input type="radio" name="options" class="toggle" ><?php echo $i;?></label>
									<?php
										}
									?>
								</div>
							</div>
						</div>
						 
					</div>
					<!-- END PORTLET-->