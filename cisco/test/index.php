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
													/* 
													$a = array_fill(5, 6, 'banana');
													$b = array_fill(-2, 4, 'pear');
													print_r($a);
													print_r($b); 
													// The above example will output:
													Array
													(
													    [5]  => banana
													    [6]  => banana
													    [7]  => banana
													    [8]  => banana
													    [9]  => banana
													    [10] => banana
													)
													Array
													(
													    [-2] => pear
													    [0] => pear
													    [1] => pear
													    [2] => pear
													)
													$values = range(1, 50);
													$array = array_combine($values, $values);
													*/
													$values = range(1, 50); // 1,2,3,4...-> 50
													$array = array_combine($values, $values);
													//Print Each Item in ine 
													// echo '<pre>'; print_r($array); echo '</pre>';
													$_SESSION["favcolor"] = array() ;
													$_SESSION["favcolor"] = 42 ;
													 ?>		  


<style> 
.ulx {
    list-style-type: none;
    margin: 0;
    padding: 1;
    overflow: hidden;
    background-color: #333;
}
.lix {
    float: left;
}
.lix a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

/* Change the link color to #111 (black) on hover */
.lix a:hover {
    background-color: #111;
}
 </style>
								 <ul class="ulx">
								  <li class="lix"><a href="default.asp">Home</a></li>
								  <li class="lix"><a href="news.asp">News</a></li>
								  <li class="lix"><a href="contact.asp">Contact</a></li>
								  <li class="lix"><a href="about.asp">About</a></li>
								</ul> 




<style>
.badgex {
 background:#252d47; 
 color:#fff;
 font-size:12px;    
 text-align:center;
 float: left
}
</style>
								 <div  class="badgex">
								  
								  15
								</div>
								<div   class="badgex">
								  
								  15
								</div>
	 						</div> 
						</div>
						<!-- END PORTLET-->  
					</div>
					<div class="col-md-3 col-sm-12">
						<!-- BEGIN PORTLET--> 
						<?php
						include "include/portlet.php";
						?>
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