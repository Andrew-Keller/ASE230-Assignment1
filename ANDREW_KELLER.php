<?php
	/*this comment was added in testingmerging branch*/
	$name = 'Andrew Keller';
	$picture = "images/profile.jpg";
	$desiredJobTitle = "Business Analyst";
	$email = 'kellera11@mymail.nku.edu';
	$number = '513 555 5855';
	$linkedIn = 'https://www.linkedin.com/in/-andrew-keller';
	$gitHub = 'https://github.com/andrew-keller';
	$website = 'andrewkeller.dev';
	$summary = 'I am a senior CIT student wokring on a degree in Web and Database Administration. My main focus is in data analytics and data storage. My passion is solving problems with creative solutions and finding out what I can accomplish.';
	$interests = ["Hiking", "Snowboarding", "Building"];
	$skills = array(
		"skill0" => array("Problem Solving", "90"), 
		"skill1" => array("HTML/CSS", "80"),
		"skill2" => array("PHP", "75"),
		"skill3" => array("Python", "85"),
		"skill4" => array("Java", "50"),
	);
	$education = array(
		"edu1" => array("General Education", "Amelia High School","2014 - 2016"), 
		"edu2" => array("BS Computer Information Technology", "Northern Kentucky University","2020 - 2023"), 
	);
	$language = array(
		"lang0" => array("English", "(Native)"),
		"lang1" => array("Spanish", "(Learning)")

	);
	$otherskill = ["GitHub","MacOS","Project Management"];
	$project = array(
		"project0" => array("Hairstylist Website","In INF 286 my group worked on updating a website we found on the internet. This was a static website.","https://github.com/andrew-keller/HeadHunterHairstyling/","images/hhlogo.png"),
		"project1" => array("Class Photo Book","In ASE 230 I worked with a team member to create a website with four with detail pages. We created it to load dynamically using functions and loops.","https://github.com/andrew-keller/Class-Photo-Book/", "images/gitHublogo.png"),

	);
	$roles = array(
		"encore" => array(
			"title" => "Service Desk analyst",
			"company" => "Encore Technologies",
			"tenure" => "March 2023 - Present",
			"description" => "IT support desk assisting customers of a range of businesses with IT related issues.",
			"tech0" => "Microsoft Office",
			"tech1" => "Service Now",
			"tech2" => "Microsoft Azure"
		),
		"lowes" => array(
			"title" => "Customer Service Associate",
			"company" => "Lowes Companies, Inc.",
			"tenure" => "March 2022 - March 2023",
			"description" => "Assisting customers throughout the Building Materials department as well as Pro sales. I operated a forklift and reach truck to assist building operations and customer material handling.",
			"tech0" => "Microsoft Office",
			"tech1" => "Android",
			"tech2" => ""
		),
		"eastgate" => array(
			"title" => "Maintenance Technician",
			"company" => "RiverValley Communities",
			"tenure" => "August 2020 - August 2022",
			"description" => "General upkeep and service of property with ~150 homes. I also restored homes to be ready for new tenants. My work included genreal construction, pest management, and repairing damage to homes.",
			"acheivements" => "Oversaw the install of homes and worked closely with the Property Manager to have a <85"."%" ." occupancy rate.",
			"tech0" => "Microsoft Office",
			"tech1" => "",
			"tech2" => ""
		
		)
			);
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <title><?=$name.'\'s Resume'?></title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content=<?=$name.'\'s Resume'?>>
    <meta name="author" content=<?=$name?>>    
    <link rel="shortcut icon" href="favicon.ico"> 
    
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
    
    <!-- FontAwesome JS-->
	<script defer src="assets/fontawesome/js/all.min.js"></script>
       
    <!-- Theme CSS -->  
    <link id="theme-style" rel="stylesheet" href="assets/css/pillar-1.css">
</head> 
<body>
    <article class="resume-wrapper text-center position-relative">
	    <div class="resume-wrapper-inner mx-auto text-start bg-white shadow-lg">
		    <header class="resume-header pt-4 pt-md-0">
			    <div class="row">
				    <div class="col-block col-md-auto resume-picture-holder text-center text-md-start">
				    	  <img class="picture" src=<?=$picture?> alt="">
				      
				    </div><!--//col-->
				    <div class="col">
					    <div class="row p-4 justify-content-center justify-content-md-between">
						    <div class="primary-info col-auto">
							    <h1 class="name mt-0 mb-1 text-white text-uppercase text-uppercase"><?=$name?></h1>
							    <div class="title mb-3"><?=$desiredJobTitle?></div>
							    <ul class="list-unstyled">
								    <li class="mb-2"><a class="text-link" href=<?=$email?>><i class="far fa-envelope fa-fw me-2" data-fa-transform="grow-3"></i><?=$email?></a></li>
								    <li><a class="text-link" href="#"><i class="fas fa-mobile-alt fa-fw me-2" data-fa-transform="grow-6"></i><?=$number?></a></li>
							    </ul>
						    </div><!--//primary-info-->
						    <div class="secondary-info col-auto mt-2">
							    <ul class="resume-social list-unstyled">
					                <li class="mb-3"><a class="text-link" href="<?=$linkedIn?>"><span class="fa-container text-center me-2"><i class="fab fa-linkedin-in fa-fw"></i></span><?=$linkedIn?></a></li>
					                <li class="mb-3"><a class="text-link" href="<?=$gitHub?>"><span class="fa-container text-center me-2"><i class="fab fa-github-alt fa-fw"></i></span><?=$gitHub?></a></li>
					                <li><a class="text-link" href="#"><span class="fa-container text-center me-2"><i class="fas fa-globe"></i></span><?=$website?></a></li>
							    </ul>
						    </div><!--//secondary-info-->
					    </div><!--//row-->
					    
				    </div><!--//col-->
			    </div><!--//row-->
		    </header>
		    <div class="resume-body p-5">
			    <section class="resume-section summary-section mb-5 mt-5">
				    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3"><?='Summary'?></h2>
				    <div class="resume-section-content">
					    <p class="mb-0"><?=$summary?></p>
				    </div>
			    </section><!--//summary-section-->
			    <div class="row">
				    <div class="col-lg-9">
					    <section class="resume-section experience-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3"><?='Work Experience'?></h2>
						    <div class="resume-section-content">
							    <div class="resume-timeline position-relative">
							    	<?php foreach($roles as $job)
							    	{ ?>
								    <article class="resume-timeline-item position-relative pb-5">
									    <div class="resume-timeline-item-header mb-2">
										    <div class="d-flex flex-column flex-md-row">
										        <h3 class="resume-position-title font-weight-bold mb-1"><?=$job['title']?></h3>
										        <div class="resume-company-name ms-auto"><?=$job['company']?></div>
										    </div><!--//row-->
										    <div class="resume-position-time"><?=$job['tenure']?></div>
									    </div><!--//resume-timeline-item-header-->
									    <div class="resume-timeline-item-desc">
										    <p><?=$job['description']?></p>
										   <?php if(empty($job['acheivements'])) { } else  { ?>
										    <h4 class="resume-timeline-item-desc-heading font-weight-bold"><?='Achievements:'?></h4>
										    <ul>
												<li><?=$job['acheivements']?></li>
											</ul>
											    <?php } ?>
										    <h4 class="resume-timeline-item-desc-heading font-weight-bold"><?= 'Technologies used:'?></h4>
										    <ul class="list-inline">
											    <li class="list-inline-item"><span class="badge bg-secondary badge-pill"><?=$job['tech0']?></span></li>
											    <li class="list-inline-item"><span class="badge bg-secondary badge-pill"><?=$job['tech1']?></span></li>
											    <li class="list-inline-item"><span class="badge bg-secondary badge-pill"><?=$job['tech2']?></span></li>
										    </ul>
									    </div><!--//resume-timeline-item-desc-->
								    </article><!--//resume-timeline-item-->
								    <?php }  ?>		
							    </div><!--//resume-timeline-->
						    </div>
					    </section><!--//projects-section-->
				    </div>
				    <div class="col-lg-3">
					    <section class="resume-section skills-section mb-5"><!--//Skills section-->
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3"><?= "Skills " . "&amp;" ." Tools"?></h2>
						    <div class="resume-section-content">
						        <div class="resume-skill-item">
							        <ul class="list-unstyled mb-4">
							        
								        <li class="mb-2">
								            <div class="resume-skill-name"><?= $skills["skill0"][0] ?></div>
									        <div class="progress resume-progress">
											    <div class="progress-bar theme-progress-bar-dark" role="progressbar" style="width: <?=$skills["skill0"][1].'%' ?>" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
								        </li>
								        <li class="mb-2">
								            <div class="resume-skill-name"><?= $skills["skill1"][0]  ?></div>
									        <div class="progress resume-progress">
											    <div class="progress-bar theme-progress-bar-dark" role="progressbar" style="width: <?=$skills["skill1"][1].'%' ?>" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
								        </li>
								        <li class="mb-2">
								            <div class="resume-skill-name"><?= $skills['skill2'][0] ?></div>
									        <div class="progress resume-progress">
											    <div class="progress-bar theme-progress-bar-dark" role="progressbar" style="width: <?=$skills["skill2"][1].'%' ?>" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
								        </li>
								        
								        <li class="mb-2">
								            <div class="resume-skill-name"><?= $skills['skill3'][0] ?></div>
									        <div class="progress resume-progress">
											    <div class="progress-bar theme-progress-bar-dark" role="progressbar" style="width: <?=$skills["skill3"][1].'%' ?>" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
								        </li>
								        <li class="mb-2">
								            <div class="resume-skill-name"><?= $skills['skill4'][0] ?></div>
									        <div class="progress resume-progress">
											    <div class="progress-bar theme-progress-bar-dark" role="progressbar" style="width: <?=$skills["skill4"][1].'%' ?>" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
								        </li>
							        </ul>
						        </div>
						        <div class="resume-skill-item"><!--//resume-skill-item-->
						            <h4 class="resume-skills-cat font-weight-bold"><?="Others"?></h4>
						            <ul class="list-inline">
						            	<?php foreach($otherskill as $skill){ ?>
							            <li class="list-inline-item"><span class="badge badge-light"><?=$skill?></span></li>
							            <?php } ?>
						            </ul>
						        </div><!--//resume-skill-item-->
						    </div><!--resume-section-content-->
					    </section><!--//skills-section-->
					    <section class="resume-section education-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3"><?='Education'?></h2>
						    <div class="resume-section-content">
							    <ul class="list-unstyled">
								    <li class="mb-2">
								        <div class="resume-degree font-weight-bold"><?= $education["edu1"][0]?> </div>
								        <div class="resume-degree-org"><?= $education["edu1"][1]?></div>
								        <div class="resume-degree-time"><?= $education["edu1"][2]?></div>
								    </li>
								    <li>
								        <div class="resume-degree font-weight-bold"><?= $education["edu2"][0]?></div>
								        <div class="resume-degree-org"><?= $education["edu2"][1]?></div>
								        <div class="resume-degree-time"><?= $education["edu2"][2]?></div>
								    </li>
							    </ul>
						    </div>
					    </section><!--//award-section-no-awards -->
						<!--//language section-->
					    <section class="resume-section language-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3"><?='Languages'?></h2>
						    <div class="resume-section-content">
							    <ul class="list-unstyled resume-lang-list">
								    <li class="mb-2"><span class="resume-lang-name font-weight-bold"><?=$language['lang0'][0]?></span> <small class="text-muted font-weight-normal"><?=$language['lang0'][1]?></small></li>
								    <li class="mb-2 align-middle"><span class="resume-lang-name font-weight-bold"><?=$language['lang1'][0]?></span> <small class="text-muted font-weight-normal"><?=$language['lang1'][1]?></small></li>
							    </ul>
						    </div>
					    </section><!--//intersets section-->
					    <section class="resume-section interests-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3"><?='Interests'?></h2>
						    <div class="resume-section-content">
							    <ul class="list-unstyled">
								    <li class="mb-1"><?= $interests[0] ?></li>
								    <li class="mb-1"><?= $interests[1] ?></li>
								    <li class="mb-1"><?= $interests[2] ?></li>
							    </ul>
						    </div>
					    </section><!--//projects-section-->
				    </div>
			    </div><!--//row-->
				<section class="resume-section experience-section mb-5">
					<h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3"><?='Projects'?></h2>
					<div class="row mt-4">
						<div class="col-md-4">
							<div class="card">
								<img src=<?=$project["project0"][3]?> alt=<?= $project["project0"][0]?> class="card-img-top">
								<div class="card-body">
									<h5 class="card-title"><?=$project["project0"][0]?></h5>
									<p class="card-text"><?= $project["project0"][1]?></p>
									<a class="btn btn-outline-primary" href=<?=$project["project0"][2]?>><?='Check it out on GitHub!'?></a>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="card">
								<img src=<?=$project["project1"][3]?> alt= <?=$project["project1"][0]?> class="card-img-top">
								<div class="card-body">
									<h5 class="card-title"><?=$project["project1"][0]?> </h5>
									<p class="card-text"><?=$project["project1"][1]?> </p>
									<a class="btn btn-outline-primary" href=<?=$project["project1"][2]?> ><?= 'Check it out on GitHub!'?></a>
								</div>
							</div>
						</div>
					</div>
				</section><!--//projects-section-->
		    </div><!--//resume-body-->
		    
		    
	    </div>
    </article> 

    
    <footer class="footer text-center pt-2 pb-5">
	    <!--/* This template is free as long as you keep the footer attribution link. If you'd like to use the template without the attribution link, you can buy the commercial license via our website: themes.3rdwavemedia.com Thank you for your support. :) */-->
        <small class="copyright"><?='Designed with '?><span class="sr-only"><?='love '?></span><i class="fas fa-heart"></i><?=' '.$name?></small>
    </footer>

    

</body>
</html> 

