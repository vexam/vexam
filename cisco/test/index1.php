<?php 
// Start the session
session_start(); 
include "include/head.php";
//## Connect to DB
require_once('include/dbconnect.php');
//## Get question id from URL   
?> 
</head> 
<!-- END HEAD -->
<!-- BEGIN BODY -->
<!-- DOC: Apply "page-header-menu-fixed" class to set the mega menu fixed  -->
<!-- DOC: Apply "page-header-top-fixed" class to set the top menu fixed  -->
<body>
<!-- BEGIN HEADER -->
<?php include "include/header.php";  ?>
<!-- END HEADER -->

<!-- BEGIN PAGE CONTAINER --> 
<div class="page-container"> 
	<!-- BEGIN PAGE CONTENT -->
	
	<div class="page-content">
		<div class="container"> 
					


				<!-- BEGIN PAGE CONTENT INNER -->
				<div class="row margin-top-10">
					<div class="col-md-9 col-sm-12">
						<!-- BEGIN PORTLET-->
						<div class="portlet light "> 
							<div class="portlet-body">  
													<?php  
													$values = range(1, 100); // 1,2,3,4...-> 50
													$array = array_combine($values, $values);
													//Print Each Item in ine 
													// echo '<pre>'; print_r($array); echo '</pre>';
													$_SESSION["favcolor"] = array() ;
													$_SESSION["favcolor"] = 42 ;
													 ?>		  

 
								 <ul class="ulx">
								 <?php foreach ($array as $value) {
									    echo '<li class="lix"><a href="q1">'.$value.'</a></li>';
									} ?> 
								</ul> 
 
	 						</div>
	 						<style>
.MOX{
    display: block;
    color: #000;
    background-color: #FFF; 
 	 padding-top: 10px;
    font-family:Verdana; 
    text-align:center;  

     border-color: #CCC;
     border-style: solid;
     border-width: 1px;
     width: 40px;
     height: 40px;
     float: left; 
	

}
	 						</style>
					<div class="row">
						<div class="col-md-4"> 
							<?php foreach ($array as $value) {
										    echo '<div class="MOX">'.$value*10.'</div>';
										} ?>   
						</div>
					</div>




						</div>
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
include "include/script01.php";
?>
<!-- Additional Script for bootstrab -->
<script src="global/plugins/bootbox/bootbox.min.js" type="text/javascript"></script>
<script src="admin/pages/scripts/ui-alert-dialog-api.js"></script>
<script>
	$(document).on("click", "#demo_1", function(e) {bootbox.alert("dss", function() {console.log("Alert Callback");});});
	function myAnswer() {var x = document.getElementById('myDIV');if (x.style.display === 'none') {x.style.display = 'block';} else {x.style.display = 'none';}} 
</script>
</body>
<!-- END BODY -->
</html>