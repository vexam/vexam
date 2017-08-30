<?php
$page ="question.php?questionid=0";
$sec = "2";
header("Refresh: $sec; url=$page");
session_start();
include "include/head.php";  
?>
</head> 
<!-- END HEAD -->
<!-- BEGIN BODY -->
<!-- DOC: Apply "page-header-menu-fixed" class to set the mega menu fixed  -->
<!-- DOC: Apply "page-header-top-fixed" class to set the top menu fixed  -->
<body> 
<?php 
include "include/header.php";
require_once('include/dbconnect.php');
//$q_con 		= $connection->query("SELECT * FROM `question` WHERE q_category=1 and ID<5")or die(header('Location: 400.php'));
$q_con 		= $connection->query("SELECT * FROM `question` WHERE q_category=1")or die(header('Location: 400.php'));
$_SESSION['q_num']=$q_con->num_rows;
$q_count	= $_SESSION['q_num'];
$questionid = range(1,$q_count);
$_SESSION['qno_r']	= range(0,($q_count-1));	// { 1,2,3,4,5,6,7,8,9,10,..........}
shuffle($questionid);  
$_SESSION['questionid']=$questionid; 			// { 25, 256, 81 ,96 ,95, 85, 7,5,..........}
$_SESSION['current_q']=0;
?>
<!-- BEGIN HEADER --> 
<!-- END HEADER --> 
<!-- BEGIN PAGE CONTAINER -->
<div class="page-container"> 
	<!-- BEGIN PAGE CONTENT -->
	<div class="page-content">
		<div class="container"> 
			<!-- BEGIN PAGE CONTENT INNER -->
			<div class="row margin-top-10">
				<div class="col-md-12 col-sm-12">
					<!-- BEGIN PORTLET--> 
					<div class="col-md-2"></div>
					<div class="col-md-8">
						<img src="../../img/loading.jpg" style="text-align: center;"> 
					</div>
					<div class="col-md-2"></div>
					<!-- END PORTLET-->  
				</div> 
			</div>  
			<!-- END PAGE CONTENT INNER -->
		</div>
	</div>
	<!-- END PAGE CONTENT -->
</div>
<!-- END PAGE CONTAINER -->
<?php
include "include/footer.php"; 
?>
<!-- Additional Script for bootstrab -->
<script src="global/plugins/bootbox/bootbox.min.js" type="text/javascript"></script>
<script src="admin/pages/scripts/ui-alert-dialog-api.js"></script>
 
</body>
<!-- END BODY -->
</html>