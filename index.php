<?php
session_start();
session_destroy();
require_once 'settings/all_header.php';
require_once 'settings/connection.php';
?>
<script type="text/javascript">
	$(document).ready(function(){
		$("#myModal").modal('show');		
	});
</script>
</head>
<body style="width:80%;margin:auto">
<div id="myModal" class="modal fade">
    <div class="modal-dialog modal-lg modal-sm modal-md">
        <div class="modal-content">
            <div class="modal-header label-primary" >
                <button type="button" style="color:RED;font-family:comic sans ms;font-size:20px;font-weight:bold" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" style="color:WHITE;font-family:comic sans ms;font-size:25px;font-weight:bold">ONLINE CLEARANCE SYSTEM</h4>
            </div>
            <div class="modal-body" style="font-family:comic sans ms;font-size:15px;font-weight:bold">
                <p  >Bayero University Kano - Kano State Nigeria.</p>
				<p >The Project Online Clearance System is Designed By :</p>
				<p> Jamila Idris - Reg No : CST/17/SWE/00027 .</p>
				<br>
				<p >In Partial Fulfillment of the requirement for the award of Bachelors Degree (B.Sc) in Software Engineering - Bayero University Kano - 2022</p><br>
				<p  style="color:red">Supervised By : Dr. Abubakar. A. Rashid .</p>
				
                <p class="text-warning"><small>Copyright © 2023</small></p>
            </div>
            <div class="modal-footer label-primary">
                <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>


<div class="container-fluid" >
	<div class="row">
			<?php
				require_once 'settings/nav_top.php';
			?> 
	</div>	
	<!-- middle content starts here where vertical nav slides and news ticker statr -->
	<div class="row" style="background-color:#CCFFFF;">
		<!-- middle content ends here where vertical nav slides and news ticker ends -->
		<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6" style="vertical-spacing:3px;word-spacing:3px;line-height:150%;background-color:#CCCCFF;text-align:justify">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<h4 style="font-weight:bold;background-color:grey;color:white;padding:10px 5px 10px 5px"> About Online Clearance System <h4/>
				<hr/>
				<p style="">Online clearance system is a research work that will help build an effective information management for the Bayero University Kano. It is aimed at developing a system for making clearance after graduation hitch free. The designed software will serve as a more reliable and effective means of undertaking students clearance, remove all forms of delay and stress as well as enable you understand the procedures involved as well as how to do your clearance online.</p>
				<p> This project work made use of data collected from the University, materials and journals from various authors and software was developed to effectively achieve the aims of this project...<a class="btn btn-success"href="#">Read more</a></p>
			</div>
			
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<h4 style="font-weight:bold;background-color:grey;color:white;padding:10px 5px 10px 5px"> Brief Outlines <h4/>
				<hr/>
				<p>The process of clearing students after their graduation required that students be cleared in various departments and information units.<br/>
				Among which are :
				<ol>
					<li>Library fine (Which include Overdue or Lost Library Materials)</li>
					<li>Departmental Dues (Which include all the Departmental Association dues and other Departmental mandatory dues)</li>
					<li>Faculty Dues (Which include all the Faculty Association dues and other Faculty mandatory dues)</li>
					<li>Information and book store charges</li>
					<li>Residence Hall Charges (Rental, Damage and Maintenance Charges among others)</li>
					<li>Return of Athletic Equipments</li>
					<li>Student Union Fine</li>
				</ol>
				</p>
				<p> At each clearance section a staff is assigned the duty to access the students application for clearance and either clear the students for further processing after which the student can now print the clearance acknowledgement slip which will then be forwarded to their respective Faculties...<a class="btn btn-success" href="#">Read more</a></p>
				<h4 style="font-weight:bold;background-color:grey;color:white;padding:10px 5px 10px 5px"><h4/>
			</div>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<h4 style="font-weight:bold;background-color:#CC99CC;color:white;padding:10px 5px 10px 5px"> Procedures For New Application <h4/>
				<p class="btn btn-primary" style="margin-bottom:10px;margin-top:10px;">Step 1 : Generate Application ID</p>
				<p>Follow the steps bellow :</p>
				<P><ol>
					<li>Click on Generate application ID</li>
					<li>Key in your Email Address and Matriculation / Registration N<u>o</u></li>
					<li><strong>Click Generate App ID to Generate Application ID</strong>  <a style="color:red;" href="generate_pin.php">Click Here To Start >> </a></li> 
				</ol>
				
				</P>
				<p class="btn btn-info" style="margin-bottom:10px;margin-top:10px;">Step 2 : Login To Complete Your Application</p>
				<p>Follow the steps bellow :</p>
				<P><ol>
					<li>Click on Complete Application</li>
					<li>Provide your Application ID and Matriculation / Registration N<u>o</u></li>
					<li style="color:red"><strong>Click Continue</strong></li>
					<li><strong>Provide all the required information in the registration form (scanned passport photograph (jpeg/jpg and <=100kb)</strong></li>
					<li><strong>Click Submit to Preview all the information you provided</strong></li>
					<li><strong>Click Continue to Complete the registration or edit to Edit the informations</strong>  <a style="color:red;" href="login_to_profile.php">Click Here To Start >> </a></li> 
				</ol></P>
				<p class="btn btn-success" style="margin-bottom:10px;margin-top:10px;">Step 3 : Check Application / Clearance Status</p>
				<p>Follow the steps bellow :</p>
				<P><ol>
					<li>Click on Check Application Status</li>
					<li>Provide your Application ID and Matriculation / Registration N<u>o</u></li>
					<li style="color:red"><strong>Click Continue</strong></li>
					<li><strong>After Login Successfully Click on Check Application Status</strong></li>
					<li>Your Application / Clearance Slip will be downloaded to your system if the Clearance process is Completed at every departments <a style="color:red;" href="login_status.php">Click Here To Start >> </a></li> 
				</ol></P>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="margin-bottom:10px;margin-top:10px;background-color:grey;text-align:centre">
			<hr/>
				<p style="text-align:center"><a href="generate_pin.php"><span class="btn btn-primary">Generate application ID</span></a> | <a href="login_to_profile.php"><span class="btn btn-info">Complete Application</span></a> | <a href="login_status.php"><span class="btn btn-success">Check Application Status</span></p>
			<hr/>
			</div>
		</div>
	</div>
	
	<div class="row" style="font-weight:bold;background-color:#CCCCFF;padding:10px 5px 10px 5px">
		<?php
			require_once 'settings/comment.php';
		?>
	</div>
		<?php require_once 'settings/footer_file.php';?>
 </div>
</body>
</html>  
