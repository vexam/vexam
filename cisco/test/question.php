<?php
include "include/head.php";
//## Connect to DB
require_once('include/dbconnect.php');
//## Get question id from URL
if(isset($_GET['questionid'])){$questionid=$_GET['questionid'];}else{$questionid=1;	}
//## connection to question Table 
//## Select All CCNA Qustion
$q_con 		= $connection->query("SELECT * FROM `question` WHERE q_category=1")or die(header('Location: 400.php'));
$q_num		= $q_con->num_rows;  //## Qustion numbers
//## Select only question ID
$q_con 		= $connection->query("SELECT * FROM `question` WHERE ID=$questionid and q_category=1")or die(header('Location: 400.php'));
$q_row 		= $q_con->fetch_assoc();
$q_type 	= $q_row["q_type"];
$question 	=$q_row["question"];
$q_id 		= $q_row["ID"];
//## connection to answer Table
$a_con 		= $connection->query("SELECT * FROM answer WHERE Question_ID=$q_id")or die(header('Location: 400.php'));
//## connection to explanation Table
$e_con 		= $connection->query("SELECT * FROM explanation WHERE Question_ID=$q_id")or die(header('Location: 400.php'));
$e_row 		= $e_con->fetch_assoc();  
$explanation= $e_row["Explanation"];	
//##  create array for answers
$Ans_form_group= array();
//##  reset variables 
$Ans_Full=$IsCorrect=""; 
//##  switch type of qustions 1:OneChoice  2:MultipleChoices 3:Matching
 
switch ($q_type) {
    case 1: //##  One Choice 
        while($a_row = $a_con->fetch_assoc()) {  	//##  fetch answers from DB and add the radio before eache  <div style='float:left;'> </div> <div style='float:right;'>
										$Ans_form_group[]= array("	<div class='mt-radio-list'>
																	<label class='mt-radio mt-radio-outline'>  
																	<input type='radio' name='optionsRadios' id='optionsRadios'".$a_row['ID']."value='".$a_row['IsCorrect']."'>".$a_row['Answer']."
																	<span></span></label></div>");
													//## save the correct anser in $IsCorrect
										if($a_row['IsCorrect']=="1"){$IsCorrect.=$a_row['Answer'];} 
									}
		shuffle($Ans_form_group); //## shuffle Array
		foreach($Ans_form_group as list($value)){$Ans_Full.=$value;} 	//## save all Answers after shuffled in $Ans_Full
        break;

    case 2: //## Multiple Choices
        while($a_row = $a_con->fetch_assoc()) {  	//##  fetch answers from DB and add the radio before eache  <div style='float:left;'> </div> <div style='float:right;'>
										$Ans_form_group[]= array('	<div class="mt-checkbox-list">
																	<input type="checkbox" value="'.$a_row["ID"].'" name="'.$a_row["IsCorrect"].'" />
																	<label class="mt-checkbox mt-checkbox-outline">'.$a_row["Answer"].'
      																<span></span></label></div>');
													//## save the correct anser in $IsCorrect
										if($a_row['IsCorrect']=="1"){$IsCorrect=$a_row['Answer'];} 
									}
		shuffle($Ans_form_group); //## shuffle Array
		foreach($Ans_form_group as list($value)){$Ans_Full.=$value;} 	//## save all Answers after shuffled in $Ans_Full
        break;

    case 3: //## Matching
        echo "";
        break;

    default:
        echo "Error";
}
$Ans_Full= '<div class="radio-list"><table>'.$Ans_Full.'</table></div>'; 		//## add bootstrab DIV and Classand save it $Ans_Full 

$values = range(1, $q_num); 				// 1,2,3,4...-> noumber of qustions in one array
$array = array_combine($values, $values); 	// 1,2,3,4...-> noumber of qustions in one array



//################### START HTML #######################
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
						<div class="note note-info">
								<div class="form-actions right" style="float:right; ">
										<a href="javascript:;" class="btn btn-icon-only red">
										<i class="fa fa-flag"></i>
										</a>  
										<?php if($questionid>1){ ?>
										<a href="question.php?questionid=<?php echo $questionid-1; ?>" class="btn btn-icon-only default">
										<i class="fa fa-arrow-left"></i>
										</a> 
										<?php } ?>
										<?php if($questionid<$q_num){ ?>
										<a href="question.php?questionid=<?php echo $questionid+1; ?>" class="btn btn-icon-only blue">
										<i class="fa fa-arrow-right"></i>
										</a>  
										<?php } ?> 
								</div>
								<?php echo $question; ?><br>&nbsp;
									 
									
							</div>

							<div class="portlet-body form">
							<form role="form">
								<div class="form-body">
									<div class="form-group"> 

											<?php echo $Ans_Full; ?> 

									</div>  
									<div class="form-actions right">
										<div class="col-sm-12">
										 <a href="http://www.cisco.com/"><img style="width: 100%;" src="../../img/ads/ads001.jpg"></a></div>
									</div>
								</div>
							</form> 
							</div>
						</div> 
					</div>
					<!-- END PORTLET--> 
					<div class="portlet box green ">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-flag"></i>Answers 
							</div> 
							<div class="tools">
								<a href="#ANS" class="collapse" onclick="myAnswer()">
								</a>
							</div>
						</div>
						<div class="portlet-body" style="display: none" id="myDIV">
								<div class="portlet-body" >
								<a name="ANS"></a>
								<h3>Answer</h3>
								<p>
								
									<?php echo $IsCorrect; ?>

								</p>
								<?php if(isset($explanation)){ ?>
								<h3>Explanation</h3>
								<p>
										
									<?php echo $explanation; ?>

								</p>
								<?php } ?>
								</div>
						</div>
					</div>
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