<?php
	require('header.php');
?>

<style>
	#capabilities-items {
		padding: 0px;
		margin: 0px;
	}
	#capabilities-items li {
		list-style-type: none;
		text-align: center;
		font-size: 1.8em;
		line-height: 2.8em;
		background-color: #092E40;
		margin-bottom: 15px;
		letter-spacing: 1px;
		color: #fff;
		cursor: pointer;
	}
	#capabilities-items li i {
		vertical-align: -5px;
		width: 0px;
		overflow: hidden;
	}
	#capabilities-items li:hover i {
		width: 40px;
	}
</style>

<div class="container-fluid">
	<div class="row">
		<div class="col-md-12" id="header-image">
			<img src="images/home-header.jpg">
			<div class="down-arrows">
				
			</div>
		</div>
	</div>
</div>

<div class="container-fluid bg-lightblue">
	<div class="container">
		<div class="row">
			<div class="col-md-offset-1 col-md-10 text-center" style="padding: 60px 0px; font-size: 1.5em; line-height: 1.8em;">
				At Manabotix, we believe there are no obstacles an engineered <br>
				approach cannot solve. We deliver custom solutions that breakthrough <br>
				barriers to help you achieve that competitive advantage.
			</div>
		</div>
	</div>
</div>

<div class="container" style="padding: 30px 0px;">
	<div class="row">
		<div class="col-md-8" style="padding-right: 30px;">
			<h3>ABOUT</h3>
			<p style="font-size: 1.2em; letter-spacing: 0.6px;">
				Manabotix provides specialised engineering expertise and smart automation
				solutions for clients across many sectors. We deliver solutions for safety, productivity,
				and asset management issues—so that you can achieve your business objectives.
				<br><br>
				<b>We practice what we preach and believe engineering solutions require:</b>
			</p>
			<img src="images/about.png" style="width: 100%;">
		</div>
		<div class="col-md-4" style="border: 3px solid #A7C244; margin-top: 20px;">
			<div class="text-center" style="width: 100%; height: 100%;">
				<h3>MEET THE BRAINS</h3>
				<div class="col-md-6">
					<div style="height: 130px; width: 130px; display: inline-block; background-color: #ccc;"></div>
					<h5>Dr Stuart McCarthy</h5>
					<div class="text-center">
						An experienced engineer and manager, Stuart has a keen business acumen. This, coupled with an agile mind and a desire for creating a positive influence on business culture, makes him top of his game.
					</div>
				</div>
				<div class="col-md-6">
					<div style="height: 130px; width: 130px; display: inline-block; background-color: #ccc;"></div>
					<h5>Daniel Mcleod</h5>
					<div class="text-center">
						A dedicated professional, this mechatronic engineer has more than 8 years’ experience under his belt. Daniel is equipped with expert programming knowledge and an amazing maths brain. What a combination! 
					</div>
				</div>
				<div class="col-md-12">
					<a href="#" class="btn btn-clear" style="margin: 30px 0px;">
						LEARN MORE <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
					</a>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="container-fluid bg-lightblue">
	<div class="container" style="padding: 30px 0px;">
		<div class="row">
			<div class="col-md-8">
				<h3>CAPABILITIES</h3>
				<p style="font-size: 1.2em; letter-spacing: 0.6px;">
					When we know the why—we can develop the what. The Manabotix team is committed to a thorough understanding of your business obstacles, enabling us to deliver to you a flexible, tailored solution. This would usually be a combination of operating environment awareness, machinery systems, and software solutions, to garner improved productivity, safety, and asset management—depending on your focus.
					<br><br>
					We know our engineering expertise can help solve the toughest of challenges, and our dedicated team have successfully worked on projects across many disparate sectors.
					<br><br>
					<b>Our expertise includes</b>
					<div class="col-md-6">
						<ul>
							<li>Professional engineering services, mechanical, electrical, IT&T, and project management</li>
							<li>Automation solutions, and turnkey system delivery</li>
							<li>Software solutions for control, data acquisition, and analytics</li>
						</ul>
					</div>
					<div class="col-md-6">
						<ul>
							<li>Sensors and instrumentation, positioning, localisation, environment awareness (mapping, SLAM)</li>
							<li>Control systems: embedded, PLC, SCADA, data acquisition, and decision-making</li>
							<li>Test, instrumentation, measurement, analysis, trouble-shooting</li>
						</ul>
					</div>
				</p>
			</div>
			<div class="col-md-4" style="margin-top: 20px;">
				<ul id="capabilities-items">
					<li>PIT TO PORT<i class="fa fa-long-arrow-right" aria-hidden="true"></i></li>
					<li>AGRICULTURE<i class="fa fa-long-arrow-right" aria-hidden="true"></i></li>
					<li>CIVIL<i class="fa fa-long-arrow-right" aria-hidden="true"></i></li>
					<li>RAIL<i class="fa fa-long-arrow-right" aria-hidden="true"></i></li>
					<li>BUSINESS APPRECIATION<i class="fa fa-long-arrow-right" aria-hidden="true"></i></li>
				</ul>
			</div>
		</div>
	</div>
</div>

<div class="container" style="padding: 60px 0px 80px 0px;">
	<div class="row">
		<div class="col-md-5">
			<h3 class="text-green" style="line-height: 1.5em">GOT A KINK IN THE SYSTEM? TWO HEADS ARE BETTER THAN ONE — <b>WHY NOT GET IN TOUCH?</b></h3>
			<p style="font-size: 1.5em; letter-spacing: 0.6px; line-height: 1.3em;">
				See how our approach can deliver the results you need to overcome even the most challenging of obstacles.
				<br><br>
				<b>Manabotix Pty Ltd</b><br>
				GPO Box 2339, Brisbane Q 4001
				<br><br>
				<b>P:</b> +61 408 981 388<br>
				<b>E:</b> info@manabotix.com<br>
				<b>ABN:</b> 71 614 498 501
			</p>
		</div>
		<div class="col-md-7" style="border: 3px solid #A7C244; margin-top: 20px;">
			<div class="text-center" style="width: 100%; height: 400px;">
				<h3>Contact form</h3>
			</div>
		</div>
	</div>
</div>

<?php
	require('footer.php');
?>