					<?php 
					$ActivQ=$questionid;
					?> 
					<!-- BEGIN PORTLET-->
					<div class="portlet light ">
						<div class="portlet-title">
							<div class="caption caption-md">
								<i class="icon-bar-chart theme-font hide"></i>
								<span class="caption-subject theme-font bold uppercase">Questions </span> 
							</div> 
						</div>
						  		<ul class="ulx">
								 <?php foreach ($array as $value) { 
										 if($value==$ActivQ){$IsActiv="lixA";}else{$IsActiv="lix";} 
									    echo '<li class="'.$IsActiv.'"><a href="question.php?questionid='.$value.'">'.$value.'</a></li>';
									} ?> 
								</ul>
					</div>
					<!-- END PORTLET-->