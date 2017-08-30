
<div class="page-header">
	<!-- BEGIN HEADER TOP -->
	<div class="page-header-top">  
		<div class="container">
			<!-- BEGIN LOGO -->
			<div class="page-logo">
				<?php
				$index= rand(2055, 9625);
				?>
				<a href="index.php?x=<?php echo $index;?>"><img src="../../assets/icon/logo12.png" alt="logo" class="logo-default"></a>
			</div>
			<!-- END LOGO -->
			<!-- BEGIN RESPONSIVE MENU TOGGLER -->
			<a href="javascript:;" class="menu-toggler"></a>
			<!-- END RESPONSIVE MENU TOGGLER --> 
			 					<div class="top-menu">
                                    <ul class="nav navbar-nav pull-right">
                                        <!-- BEGIN NOTIFICATION DROPDOWN -->
                                        <!-- DOC: Apply "dropdown-hoverable" class after "dropdown" and remove data-toggle="dropdown" data-hover="dropdown" data-close-others="true" attributes to enable hover dropdown mode -->
                                        <!-- DOC: Remove "dropdown-hoverable" and add data-toggle="dropdown" data-hover="dropdown" data-close-others="true" attributes to the below A element with dropdown-toggle class -->
                                        <li class="dropdown dropdown-extended dropdown-notification dropdown-dark" id="header_notification_bar">
                                            <a href="javascript:;" class="dropdown-toggle"   >
                                                <i class="icon-bell"></i>
                                                <span class="badge badge-default"><?php echo $q_num; ?> </span>
                                            </a>

                                        </li>
										<li class="dropdown dropdown-extended dropdown-notification dropdown-dark" id="header_notification_bar">
                                            <a href="javascript:;" class="dropdown-toggle"   >
                                                <i class="icon-calendar"></i>
                                                <span class="badge badge-default"><?php echo $questionid; ?></span>
                                            </a> 
                                        </li>

										<li class="dropdown dropdown-extended dropdown-notification dropdown-dark" id="header_notification_bar">
                                            <a href="javascript:;" class="dropdown-toggle"     >
                                                <i class="icon-calendar"></i>
                                                <span class="badge badge-default"><?php echo $current_q; ?></span>
                                            </a> 
                                        </li>
 
                                    </ul>
                                </div>





























		</div>
	</div>
	<!-- END HEADER TOP -->
	<!-- BEGIN HEADER MENU -->
	<div class="page-header-menu">
		<div class="container">
			<!-- BEGIN HEADER SEARCH BOX -->
			<form class="search-form" action="extra_search.html" method="GET">
				<div class="input-group">
					<input type="text" class="form-control" placeholder="Search" name="query">
					<span class="input-group-btn">
					<a href="javascript:;" class="btn submit"><i class="icon-magnifier"></i></a>
					</span>
				</div>
			</form>
			<!-- END HEADER SEARCH BOX -->
			<!-- BEGIN MEGA MENU -->
			<!-- DOC: Apply "hor-menu-light" class after the "hor-menu" class below to have a horizontal menu with white background -->
			<!-- DOC: Remove data-hover="dropdown" and data-close-others="true" attributes below to disable the dropdown opening on mouse hover -->
			<div class="hor-menu">
				<ul class="nav navbar-nav">
					<li class="active">
						<a href="index.html">Dashboard</a>
					</li>
					<li class="menu-dropdown classic-menu-dropdown">
						<a data-hover="megamenu-dropdown" data-close-others="true" data-toggle="dropdown" href="javascript:;">
						Extra <i class="fa fa-angle-down"></i>
						</a>
						<ul class="dropdown-menu pull-left">
							<li class="dropdown-submenu">
								<a href=javascript:;>
								<i class="icon-briefcase"></i>
								Data Tables </a>
								<ul class="dropdown-menu">
									<li class="active">
										<a href="http://172.20.2.182:8012/phpmyadmin/">
										phpMyAdmin </a>
									</li>
									<li class=" ">
										<a href="question.php">
										question.php </a>
									</li>
									<li class=" ">
										<a href="question1.php">
										Q 1 </a>
									</li> 
									<li class=" ">
										<a href="question2.php">
										Q 2 </a>
									</li> 
									<li class=" ">
										<a href="question3.php">
										Q 3 </a>
									</li> 
								</ul>
							</li>
							<li class=" dropdown-submenu">
								<a href=javascript:;>
								<i class="icon-wallet"></i>
								Portlets </a>
								<ul class="dropdown-menu">
									<li class=" ">
										<a href="portlet_general.html">
										General Portlets </a>
									</li>
									<li class=" ">
										<a href="portlet_general2.html">
										New Portlets #1 <span class="badge badge-roundless badge-danger">new</span>
										</a>
									</li>
									<li class=" ">
										<a href="portlet_general3.html">
										New Portlets #2 <span class="badge badge-roundless badge-danger">new</span>
										</a>
									</li>
									<li class=" ">
										<a href="portlet_ajax.html">
										Ajax Portlets </a>
									</li>
									<li class=" ">
										<a href="portlet_draggable.html">
										Draggable Portlets </a>
									</li>
								</ul>
							</li>
							<li class=" dropdown-submenu">
								<a href=javascript:;>
								<i class="icon-bar-chart"></i>
								Charts </a>
								<ul class="dropdown-menu">
									<li class=" ">
										<a href="charts_amcharts.html">
										Amchart </a>
									</li>
									<li class=" ">
										<a href="charts_flotcharts.html">
										Flotchart </a>
									</li>
								</ul>
							</li>
							<li class=" dropdown-submenu">
								<a href=javascript:;>
								<i class="icon-pointer"></i>
								Maps </a>
								<ul class="dropdown-menu">
									<li class=" ">
										<a href="maps_google.html">
										Google Maps </a>
									</li>
									<li class=" ">
										<a href="maps_vector.html">
										Vector Maps </a>
									</li>
								</ul>
							</li>
							<li class=" dropdown-submenu">
								<a href=javascript:;>
								<i class="icon-puzzle"></i>
								Multi Level </a>
								<ul class="dropdown-menu">
									<li class=" ">
										<a href="javascript:;">
										<i class="icon-settings"></i>
										Item 1 </a>
									</li>
									<li class=" ">
										<a href="javascript:;">
										<i class="icon-user"></i>
										Item 2 </a>
									</li>
									<li class=" ">
										<a href="javascript:;">
										<i class="icon-globe"></i>
										Item 3 </a>
									</li>
									<li class=" dropdown-submenu">
										<a href="javascript:;">
										<i class="icon-folder"></i>
										Sub Items </a>
										<ul class="dropdown-menu">
											<li class=" ">
												<a href="javascript:;">
												Item 1 </a>
											</li>
											<li class=" ">
												<a href="javascript:;">
												Item 2 </a>
											</li>
											<li class=" ">
												<a href="javascript:;">
												Item 3 </a>
											</li>
											<li class=" ">
												<a href="javascript:;">
												Item 4 </a>
											</li>
										</ul>
									</li>
									<li class=" ">
										<a href="javascript:;">
										<i class="icon-share"></i>
										Item 4 </a>
									</li>
									<li class=" ">
										<a href="javascript:;">
										<i class="icon-bar-chart"></i>
										Item 5 </a>
									</li>
								</ul>
							</li>
						</ul>
					</li>
				</ul>
			</div>
			<!-- END MEGA MENU -->
		</div>
	</div>
	<!-- END HEADER MENU -->
</div>
