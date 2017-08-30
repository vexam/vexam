					<?php 
					if(isset($questionid)){
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
							<div class="portlet-body"> 
							 <div class="tabbable tabbable-tabdrop">
                                            <ul class="nav nav-tabs">
                                                <li class="active">
                                                    <a href="#tab1" data-toggle="tab"> All</a>
                                                </li>
                                                <li>
                                                    <a href="#tab2" data-toggle="tab">Flag</a>
                                                </li>
                                                <li>
                                                    <a href="#tab3" data-toggle="tab">X</a>
                                                </li> 
                                            </ul>    
                                            <div class="tab-content">
                                                <div class="tab-pane active" id="tab1">
                                                   <div class="scroller" style="height: 339px;" data-always-visible="1" data-rail-visible="0">
                                                        <ul class="feeds">
                                                            <li> 
                                                                <div class="cont">
                                                                <div class="cont-col1"> 
                                                                 <ul class="ulx"> 
																	 <?php foreach ($array as $value) { 
																			 if($value==$ActivQ){$IsActiv="lixA";}else{$IsActiv="lix";} 
																		    echo '<li class="'.$IsActiv.'"><a href="question.php?questionid='.$value.'">'.$value.'</a></li>';
																		} ?> 
																	</ul>  
                                                                </div> 
                                                                </div> 
                                                            </li> 
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="tab2">
													
													<div class="scroller" style="height: 339px;" data-always-visible="1" data-rail-visible="0">
                                                        <ul class="feeds">
                                                            <li> 
                                                                <div class="cont">
                                                                <div class="cont-col1"> 
                                                                 <ul class="ulx"> 
																	 <?php foreach ($array as $value) { 
																			 if($value==$ActivQ){$IsActiv="lixA";}else{$IsActiv="lix";} 
																		    echo '<li class="'.$IsActiv.'"><a href="question.php?questionid='.$value.'">'.$value.'</a></li>';
																		} ?> 
																	</ul>  
                                                                </div> 
                                                                </div> 
                                                            </li> 
                                                        </ul>
                                                    </div>

                                					

 
                                                </div>
                                                <div class="tab-pane" id="tab3">
                                                    <p> Howdy, I'm in Section 3. </p>
                                                </div>
                                                <div class="tab-pane" id="tab4">
                                                    <p> Howdy, I'm in Section 4. </p>
                                                </div>
                                                <div class="tab-pane" id="tab5">
                                                    <p> Howdy, I'm in Section 5. </p>
                                                </div>
                                                <div class="tab-pane" id="tab6">
                                                    <p> Howdy, I'm in Section 6. </p>
                                                </div>
                                                <div class="tab-pane" id="tab7">
                                                    <p> Howdy, I'm in Section 7. </p>
                                                </div>
                                                <div class="tab-pane" id="tab8">
                                                    <p> Howdy, I'm in Section 8. </p>
                                                </div>
                                                <div class="tab-pane" id="tab9">
                                                    <p> Howdy, I'm in Section 9. </p>
                                                </div>
                                            </div>
                                        </div>
                                       
                            </div> 
                             <div class="portlet-body">
                                                            <!--BEGIN TABS-->
                                                            <div class="tab-content">
                                                                <div class="tab-pane active" id="tab_1_1">
                                                                    
                                                                    

                                                                </div>
                                                            </div>
                                                        </div>			  		
					</div>
					<!-- END PORTLET-->
					<?php } ?>