<?php
session_start();
require_once 'settings/all_header.php';
require_once 'settings/connection.php';
$sec="Act_Me";$err=$notice_msg=$er_msg=$er_msg2=$msg2=$msg="";
$_SESSION['page_authy'] = SHA1("W@YERADAVURUKUSTAS#YUR");
$link ="0";
if(!isset($_GET['m_']) || !isset($_GET['l_w'])){
		header("location index.php");
}
if($_GET['m_'] != $_SESSION['page_authy'] || $_GET['l_w'] != $sec ){
	header("location index.php");
}
$date500 = new DateTime("Now");
$J = date_format($date500,"D");
$Q = date_format($date500,"d-F-Y, h:i:s A");
$dateprint_V = $J.", ".$Q;
$dateprint = "Printed On: ".$J.", ".$Q;	
$txtexit=$txtent=$txtduration=$txtaward=$txtmodestudy=$txtentrance=$txtdept=$txtfaculty=$txttempadd=$txtlgov=$txtPermadd =$txtstate=$txtnationality=$txtreligion=$txtgender=$txtAPhone=$txtPhone=$txtoname=$txtfname=$txttitle=$date_reg="";
?>

</head>
<body style="width:80%;margin:auto">
<div class="container-fluid" >
		<div class="row hidden-print">
			<?php
				require_once 'settings/nav_top_staff.php';
			?> 
		</div>
	
	<!-- middle content starts here where vertical nav slides and news ticker statr -->
	<div class="row" >
		<div class="imageupload panel panel-info">
			<div class="panel-heading clearfix">
				<h3 class="panel-title pull-left">Welcome - <?php echo $_SESSION['staff_name']; ?> , To Staff Dashboard !!</h3>
			</div>
		</div>
		<?php echo $notice_msg;?>
		<?php echo $er_msg;?>
		<?php echo $er_msg2;?>
		<!-- middle content ends here where vertical nav slides and news ticker ends -->
		<form role="form"  name="reg_form"  id="form" class="form-vertical" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" enctype="multipart/form-data" method="POST">
			<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3" style="margin-bottom:10px;margin-top:10px;text-align:centre;padding-top:10px;">
				<img  style="height:300px" class="img-responsive img-thumbnail" src="settings/images/buk.png"> </img>
			</div>
				<!-- ends copy bootstrap-imageupload. -->
			<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5" style="margin-bottom:10px;margin-top:10px;text-align:centre;padding-top:10px">
				<h4>Staff Name : <span><b><?php echo $_SESSION['staff_name'];?></b></span></h4>
				<hr/>
				<h4>Staff ID :<?php echo $_SESSION['staff_id'];?></h4>
				<hr/>
				<h4>Faculty : <?php echo $_SESSION['staff_faculty'];?></h4>
				<hr/>
				<h4>Department : <span style="color:red;"><b><?php echo $_SESSION['staff_dept'];?></b></span></h4>
				<hr/>
				<h4>Clearance Section : <span><b><?php echo $_SESSION['clearance_section'];?></b></span></h4>
				<hr/>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4" style="margin-bottom:10px;margin-top:10px;text-align:centre;padding-top:10px">
				<div id="accordion" class="panel-group">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title ">
								<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"> My Menu </a>
								<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" class="glyphicon glyphicon-chevron-down pull-right"></a>
							</h4>
						</div>
						<div id="collapseOne" class="panel-collapse collapse in">
							<div class="panel-body">
								<div class="list-group">
								
								<?php	
									echo '<a style="color:red;text-weight:bold;" class="list-group-item" href="all_pending_app.php?m_='.$_SESSION['page_authy'].'&l_w='.$sec.'&statuscheck='."check".'" >
										<span class="glyphicon glyphicon-pencil"></span> View All Pending Application <span class="glyphicon glyphicon-circle-arrow-right pull-right"></span>
									</a>
										<a style="color:black;text-weight:bold;" class="list-group-item"  href="all_rejected_app.php?m_='.$_SESSION['page_authy'].'&l_w='.$sec.'">
											<span class="glyphicon glyphicon-list"></span> View All Rejected Application <span class="glyphicon glyphicon-circle-arrow-right pull-right"></span>
										</a>
									<a style="color:black;text-weight:bold;" class="list-group-item" href="all_approved_app.php?m_='.$_SESSION['page_authy'].'&l_w='.$sec.'">
										<span class="glyphicon glyphicon-list"></span> View All Approved Applications <span class="glyphicon glyphicon-circle-arrow-right pull-right"></span>
									</a>
									<a href="staff_login.php" class="list-group-item">
										<span class="glyphicon glyphicon-log-out"></span> Log Out  <span class="glyphicon glyphicon-circle-arrow-right pull-right"></span>
									</a>';
									?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</form>
	</div>

	<div class="row hidden-print" style="font-weight:bold;background-color:#CCCCFF;padding:10px 5px 10px 5px">
		<?php
			require_once 'settings/comment.php';
		?>
	</div>
		<?php require_once 'settings/footer_file.php';?>
 </div>
</body>
</html>  
