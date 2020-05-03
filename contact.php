<!DOCTYPE html>
<html lang="en">
<head>
<title>GGM AWkUANAW::Contact</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link href="css/style.css" type="text/css" rel="stylesheet" media="all">   
<link href="css/font-awesome.css" rel="stylesheet"> <!-- font-awesome icons -->
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />
<!-- //Custom Theme files -->  
<!-- web-fonts -->   
<link href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700,800" rel="stylesheet">
<!-- //web-fonts -->
</head>
<body> 
	<!-- banner -->
	<div class="w3ls-banner about-w3lsbanner">
		<div class="w3lsbanner-info">
			<!-- header -->
			<div class="header">
				<div class="container">   
					<div class="agile_header_grid"> 
						<div class="header-mdl agileits-logo"> 
							<h1><a href="index.html">GGM AWkUANAW</a></h1> 
						</div>
						<div class="agileits_w3layouts_sign_in">
							<ul>
								<li><a href="#myModal2" data-toggle="modal" class="play-icon"><i class="fa fa-heart-o"></i>Give</a></li>
								<li>Call us : <span>(+234)703 0681 749</span></li>
							</ul>
						</div>
						<div class="clearfix"> </div>
					</div> 
					<div class="header-nav"><!-- header-two --> 	
						<nav class="navbar navbar-default">
							<div class="navbar-header">
								<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button> 
							</div>
							<!-- top-nav -->
							<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
								<ul class="nav navbar-nav cl-effect-16">
									<li><a href="index.html" class="active">Home</a></li>
									<li><a href="about.html">About</a></li>
									<li><a href="#">Events</a></li> 
									<li><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Our Church <span class="caret"></span></a>
										<ul class="dropdown-menu">
											<li><a href="#">Ministries</a></li>
											<li><a href="#">Groups</a></li>
										</ul>
									</li>
									
									<li><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Media Library <span class="caret"></span></a>
										<ul class="dropdown-menu">
											<li><a href="#">Audios</a></li>
											<li><a href="#">Videos</a></li>
										</ul>
									<li><a href="contact.html" data-hover="Contact">Contact</a></li>
								</ul> 
								<div class="clearfix"> </div>	
							</div>
						</nav>    
					</div>	
				</div>	
			</div>	
			<!-- //header -->  
		</div>	
	</div>	
	<!-- //banner --> 
	<!-- contact -->
		
	<div class="contact">
		<div class="container">   
			<h3 class="agileits-title w3title2">Contact Us</h3>
			<div class="map-pos">
				<div class="col-md-4 address-row">
					<div class="col-xs-2 address-left">
						<span class="glyphicon glyphicon-home" aria-hidden="true"></span>
					</div>
					<div class="col-xs-10 address-right">
						<h5>Visit Us</h5>
						<p>25 one day road Enugu State </p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-4 address-row w3-agileits">
					<div class="col-xs-2 address-left">
						<span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
					</div>
					<div class="col-xs-10 address-right">
						<h5>Mail Us</h5>
						<p><a href="graceglorycathedralawk@gmail.com"> info@graceglorycathedral</a></p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-4 address-row">
					<div class="col-xs-2 address-left">
						<span class="glyphicon glyphicon-phone" aria-hidden="true"></span>
					</div>
					<div class="col-xs-10 address-right">
						<h5>Call Us</h5>
						<p>(+234)703 0681 749</p>
					</div>
					<div class="clearfix"> </div>
				</div>   
			</div> 

			<!-- This is where the form started-->
		<?php
		if(isset($_POST["submitButton"])){
			processForm(); // If the user submits the form, call this function
		}else{
			displayForm(array()); // Display This if the the user loads the page
		}

		function validateFields($fieldName, $missingFields){ // Validating the label i.e putting the red color to show an error.
			if(in_array($fieldName, $missingFields)){
				echo 'class="onError"';
			}
		}

		function setValue($fieldName){ // Sets the value of the previous so that user don't need to retype
			if(isset($_POST[$fieldName])){
				echo $_POST[$fieldName];
			}
		}

		function setChecked($fieldName, $fieldValue){
			if(isset($_POST[$fieldName]) and $_POST[$fieldName]== $fieldValue){
				echo 'checked = "checked"';
			}
		}

		function setSelected($fieldName, $fieldValue){
			if(isset($_POST[$fieldName]) and $_POST[$fieldName] == $fieldValue){
				echo 'selected = "selected"';
			}
		}


		function processForm(){
			$requiredFields = array("Name","Email", "Mobile", "Message"); // The name of the
			$missingFields = array();

			foreach($requiredFields as $requiredField){ // For each of the required fields,
				if(!isset(($_POST[$requiredField])) or !trim($_POST[$requiredField])){ // If any of them has no value
					$missingFields[] = $requiredField;  // Put them in the missing field array
				}
			}
			if($missingFields){ // if there is any missing field,
				displayForm($missingFields); // display the form with those fields marked error
			}else{
				displayThanks();
				insertToDb(); // if there is no missing field , display the congrats/ thenks message
			}
		}

		function displayForm($missingFields){
		?>
		 <?php if($missingFields){ ?>
		<p class="alert alert-danger"> There are some problem with the form you submitted, Kindly rectify and submit again </p>
		<?php } ?>
			<form method="post">
				<div class="col-sm-6 contact-left">
					<input type="text" name="Name" placeholder="Your Name" required="" <?php validateFields("Name",$missingFields )?> value="<?php setValue("Name") ?>">

					<input type="email" name="Email" placeholder="Email" required="" <?php validateFields("Email",$missingFields ) ?> value="<?php setValue("Email") ?>">
					
					<input type="text" name="Mobile" placeholder="Mobile Number" required="" <?php validateFields("Mobile",$missingFields ) ?> value="<?php setValue("Mobile") ?>">

				</div>
				<div class="col-sm-6 contact-right">
					<textarea name="Message" placeholder="Message" required="" <?php validateFields("Message",$missingFields ) ?>> <?php setValue("Message") ?> </textarea>
					<button type="submit"  name="submitButton" class="btn btn-outline-primary"> Submit </button>
				</div>

				<div class="clearfix"></div>
			</form>
			<?php
				}
				function displayThanks(){
					echo "<h1> Your request have been recieves, just wait till we are done </h1>";
				insertToDb(); // if there is no missing field , display the congrats/ thenks message
				// sendMailToManager(); // This fucntion sends mail to the manager of the company
				}
			?>
		</div>
	</div>  
	<?php

    function  insertToDb(){
        $dsn = "mysql:host=localhost;dbname=ggm_contact";
        $username = "root";
        $password = "";

        try{
            $conn = new PDO($dsn, $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch(PDOException $e){
            echo "Connection failed: " . $e->getMessage();
        }

        $deName = $_POST["Name"];
        $phoneNumber = $_POST["Mobile"];
        $email = $_POST["Email"];
        $messages = $_POST["Message"];
        $contactDate = date("Y-m-d");

        $sql = "INSERT INTO ggm_info(deName, mobile, emailAddress, orderDate, messages )  VALUES(:clientName, :mobile, :emailAddress,  :orderDate,:messages)";

        try{
            $st = $conn->prepare($sql);
            $st->bindValue(":clientName", $deName, PDO::PARAM_STR);
            $st->bindValue(":mobile", $phoneNumber, PDO::PARAM_STR);
            $st->bindValue(":emailAddress", $email, PDO::PARAM_STR);
            $st->bindValue(":messages", $messages, PDO::PARAM_STR);
            $st->bindValue(":orderDate", $contactDate, PDO::PARAM_STR);
            $st->execute();
        }catch(PDOException $e){
            die("Query failed: ". $e->getMessage());
        }
    }

    // function  sendMailToManager(){
    //     $name = $_POST["client_Name"];
    //     $email = $_POST["email_Address"];
    //     $phoneNumber = $_POST["mobile_NO"];

    //     $to = "";// The email of the person to be sent to , if you have a so many recipient, then it should be splitted with commas
    //     $username = "info@pillarpole.com"; // The domamin email, where the mail is coming from
    //     $password = "IAmVicman@1999"; // The password of the mail in the top
    //     $from = "Rock-Tama Waters <info@pillarpole.com>"; // The domamin email, where the mail is coming from
    //     $subject  = "Customer's Contact"; // It is like a subtopic, or the name of the company the mail is coming from
    //     $message = "Dear Manager,<br><br>
    //                  this is to inform you that a request have.";
    //     // The body of the maill, akind of the content
    //     $request = $_POST["messages"]; // The body of the maill, akind of the content
    //     $headers = array('From'=>$from, 'To'=>$to, 'Subject'=>$subject); // This is an array containing the header, where the mail is coming from and going.

    //         $text = ''; // text versions of email.
    //         $html = "<html><body>
    //          $message <br><br>
    //          <b>Name: </b> $name <br><br>
    //          <b>Phone Number: </b> $phoneNumber <br><br>
    //          <b>Email: </b> $email<br><br>
    //          <b>Request:  </b>$request

    //          </body></html>"; // html versions of email.

    //         $crlf = "\n";

    //         $mime = new Mail_mime($crlf);
    //         $mime->setTXTBody($text);
    //         $mime->setHTMLBody($html);
    //         //do not ever try to call these lines in reverse order
    //         $body = $mime->get();
    //         $headers = $mime->headers($headers);


    //     $smtp = Mail::factory('smtp', array('host'=>localhost, 'auth'=>true, 'username'=>$username, 'password'=>$password, 'port'=> 25));
    //     $mail = $smtp->send($to, $headers, $body);
    //     if(PEAR::isError($mail)){
    //         echo "<p>".  $mail->getMessage(). "</p>";
    //     }else{
    //         echo "";
    //     }
    // }
?>

	<!-- //contact --> 
	<div class="map">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24174.906176932098!2d-73.98255489041246!3d40.765031876857535!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c258bf12dbe975%3A0xf6bac5dd7bc5f711!2sPookie+and+Sebastian!5e0!3m2!1sen!2sin!4v1482923320436"></iframe> 
	</div> 
	<!-- news letter -->
	<div class="subscribe jarallax">
		<div class="sub-agileinfo">
			<div class="container">
				<h3 class="agileits-title w3title1">Get our free newsletter</h3>
				<p>Subscribe to get our newsletter</p>
				<form>
					<input type="email" name="email" placeholder="Email Address" class="user" required="">
					<input type="submit" value="Subscribe">
				</form>
				<p class="spam">We never share your information or use it to spam you</p>
			</div> 
		</div>
	</div><!-- //news letter -->
	<!-- footer -->
	<div class="footer">
		<div class="footer-top">
			<div class="container">
				<div class="footer-grids">
					<div class="col-md-3 col-sm-6 footer-logo">
						<div class="agileits-logo"> 
							<h2><a href="index.html">GGM AWKUNANAW</a></h2> 
						</div>
						<p>Enjoy an awesome experince in God's Presence</p>
					</div>
					<div class="col-md-3 col-sm-6 footer-grid">
						<h3>Navigation</h3>
						<ul>
							<li><a href="index.html">Home</a> </li>
							<li><a href="about.html">About</a></li> 
							<li><a href="#">Events</a></li>
							<li><a href="#">Our church</a></li>
							<li><a href="#">Media Library</a></li>
							<li><a href="contact.html">Contact</a></li>
						</ul>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
		<div class="footer-bottom">
			<div class="container">
				<p>© 2020 GGM AWKUNANAW. All rights reserved | Design by <a href="#">Grace Media</a></p>
			</div>
		</div>
	</div>
	<!-- //footer -->
	
	<!-- modal sign in  -->
	<div class="modal bnr-modal about-modal w3-agileits fade" id="myModal2" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div> 
				<div class="modal-body login-page "><!-- login-page -->      
					<div class="sap_tabs">
						<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
							<ul class="resp-tabs-list">
								<li></li>
							</ul>	 
							<div class="clearfix"> </div>	
							<div class="resp-tabs-container">
								<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
									<div class="agileits-login">
										<form action="#" method="post">
											<input type="text" class="Name" name="Name" placeholder="Name" required=""/>
											<input type="text" class="Amount" name="Amount" placeholder="Amount" required=""/>
											<div class="wthree-text"> 
												<div class="clearfix"> </div>
											</div>  
											<div class="w3ls-submit"> 
												<input type="submit" value="Give">  	
											</div>	
										</form>
									</div> 
								</div>
							</div>	
						</div>
						<div class="clearfix"> </div>
					</div>   
				</div> <!-- //login-page -->
			</div>
		</div>
	</div>
	<!-- //modal sign in -->  
	<!-- js --> 
	<script src="js/jquery-2.2.3.min.js"></script>  
	<!-- //js -->  
	<!-- ResponsiveTabs js -->
	<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
	<script type="text/javascript">
		$(document).ready(function () {
			$('#horizontalTab').easyResponsiveTabs({
				type: 'default', //Types: default, vertical, accordion           
				width: 'auto', //auto or any width like 600px
				fit: true   // 100% fit in a container
			});
		});
	</script>
	<!-- //ResponsiveTabs js -->  
	<!-- jarallax -->  
	<script src="js/SmoothScroll.min.js"></script> 
	<script src="js/jarallax.js"></script> 
	<script type="text/javascript">
		/* init Jarallax */
		$('.jarallax').jarallax({
			speed: 0.5,
			imgWidth: 1366,
			imgHeight: 768
		})
	</script>  
	<!-- //jarallax -->  
	<!-- start-smooth-scrolling -->
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>	
	<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
			
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
	</script>
	<!-- //end-smooth-scrolling -->	
	<!-- smooth-scrolling-of-move-up -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
			};
			*/
			
			$().UItoTop({ easingType: 'easeOutQuart' });
			
		});
	</script>
	<!-- //smooth-scrolling-of-move-up --> 
	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/bootstrap.js"></script>
</body>
</html>