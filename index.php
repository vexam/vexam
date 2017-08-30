<?php
include "assets/include/head.php";
?>
</head> 
<!-- END HEAD -->
<!-- BEGIN BODY -->
<!-- DOC: Apply "page-header-menu-fixed" class to set the mega menu fixed  -->
<!-- DOC: Apply "page-header-top-fixed" class to set the top menu fixed  -->
<body>
<!-- BEGIN HEADER -->
<?php

include "assets/include/header.php";
?>
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
							<div class="portlet-body form">
								<il><h1><a href="cisco/ccna/question.php">CCNA</a></h1></il>
							</div>
						</div> 
					</div>
					<!-- END PORTLET-->  
				</div>
				<div class="col-md-3 col-sm-12">
					<!-- BEGIN PORTLET--> 
					<?php
					include "assets/include/portlet.php";
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
include "assets/include/footer.php";
include "assets/include/script01.php";



?>

<script src="assets/global/plugins/bootbox/bootbox.min.js" type="text/javascript"></script>
<script src="assets/admin/pages/scripts/ui-alert-dialog-api.js"></script>
<script>
	$(document).on("click", "#demo_1", function(e) {
		bootbox.alert("dss", function() {console.log("Alert Callback");});
	});

	function myAnswer() {
		var x = document.getElementById('myDIV');
		if (x.style.display === 'none') {
			x.style.display = 'block';
		} else {
			x.style.display = 'none';
		}
	} 
</script>
</body>
<!-- END BODY -->
</html>