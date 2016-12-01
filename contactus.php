<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" 
"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Contact Form</title>
	
	<!-- Styling. -->
	<style type="text/css">
		#contact-container{
			height: 850px;
		}
		
		#contact-form{
			height: 335px;
			float: left;
			margin-left: 5px;
			width: 500px;
		}
		
		#contact-side{
			width: 340px;
			height: 600px;
			margin-left: 5px;
			background: #ff5db1; /* Old browsers */
			background: -moz-linear-gradient(top,  #ff5db1 3%, #ef017c 47%); /* FF3.6-15 */
			background: -webkit-linear-gradient(top,  #ff5db1 3%,#ef017c 47%); /* Chrome10-25,Safari5.1-6 */
			background: linear-gradient(to bottom,  #ff5db1 3%,#ef017c 47%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
			filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ff5db1', endColorstr='#ef017c',GradientType=0 ); /* IE6-9 */	
			z-index: 30;
			top: -325px;
			float: left;
			left: 550px;
			position: relative;
		}
		
		@media only screen and (min-width: 481px) and (max-width: 768px){
			#contact-container{
				height: 850px;
			}			
		}
		
		@media only screen and (min-width: 0px) and (max-width: 480px){
			#contact-container{
				height: 1100px;
			}	
		}

		@media only screen and (min-width: 0px) and (max-width: 768px){
			#contact-side{
				display: none;
			}
		}
		
		.commentFormWrapper{
			padding-top: 20px;
			padding-left: 20px;
		}
		
		.commentFormLabel, #commentPrompt{
			font-size: 150%;
			color: #CC5490;
			text-transform: lowercase;
			font-weight: bold;
		}

		
		.commentFormInput{
			height: 40px;
			width: 500px;
			font-size: 24px;
			border-radius: 5px;
		}
		
		textarea{
			resize: none;
			border-radius: 5px;
		}
		
		.commentFormTextArea{
			height: 200px;
			width: 500px;
			font-size: 24px;
		}
		
		.btn {
			background: #3498db;
			background-image: -webkit-linear-gradient(top, #3498db, #2980b9);
			background-image: -moz-linear-gradient(top, #3498db, #2980b9);
			background-image: -ms-linear-gradient(top, #3498db, #2980b9);
			background-image: -o-linear-gradient(top, #3498db, #2980b9);
			background-image: linear-gradient(to bottom, #3498db, #2980b9);
			-webkit-border-radius: 28;
			-moz-border-radius: 28;
			border-radius: 28px;
			text-shadow: 1px 1px 3px #d426d4;
			font-family: Arial;
			color: #ffffff;
			font-size: 20px;
			padding: 10px 20px 10px 20px;
			text-decoration: none;
		}

		.btn:hover {
			cursor: pointer;
			background: #008B00;
			background-image: -webkit-linear-gradient(top, #008B00, #32cd32);
			background-image: -moz-linear-gradient(top, #008B00, #32cd32);
			background-image: -ms-linear-gradient(top, #008B00, #32cd32);
			background-image: -o-linear-gradient(top, #008B00, #32cd32);
			background-image: linear-gradient(to bottom, #008B00, #32cd32);
			text-decoration: none;
		}
		
		#contact-side-heading{
			text-transform: uppercase;
			color: #fff;
			font-size: 3.5em;
			text-align: center;
			vertical-align: middle;
		}
		
		#contact-side-subheading{
			text-transform: uppercase;
			color: #000;
			font-size: 2.0em;
			text-align: center;
			vertical-align: middle;
			text-shadow: 2px 2px 2px rgba(150, 150, 150, 1);
		}
		

		@media only screen and (min-width: 481px) and (max-width: 768px){
			.contact-container{
				height: 1100px;
			}
			
		}
		
		@media only screen and (min-width: 0px) and (max-width: 480px){
			
			.contact-container{
				height: 1250px;
			}
			
			.commentFormInput{
				height: 30px;
				width: 400px;
				font-size: 18px;
			}
			
			.commentFormTextArea{
				height: 170px;
				width: 400px;
				font-size: 18px;
			}
			
		}
		
		#footer{
			bottom: -200px;
		}
		
		@media only screen and (min-width: 481px) and (max-width: 768px){
			#footer{
				bottom: -400px;
			}
		}
		
		@media only screen and (min-width: 0px) and (max-width: 480px){
			#footer{
				bottom: -700px;
			}	
		}
	
	</style>
	<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.3.min.js" integrity="sha256-aaODHAgvwQW1bFOGXMeX+pC4PZIPsvn2h1sArYOhgXQ="   crossorigin="anonymous"></script>
	<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.15.0/jquery.validate.min.js"></script>
	<script type="text/javascript" src="script.js"></script>

</head>
<body>
	<div id="contact-container">
		<div id="contact-form">
		<div class="title-heading"><img src="img/contact.png" class="title-image" /></div>
			<div class="commentFormWrapper">
				<form method="post" action="content/processing_data.php">
					<div class="commentFormLabel"><span class="first-letter">N</span>ame</div>	
					<input id="commentName" name="commentName" onkeyup="validateName()" class="commentFormInput" type="text" /><br />
					<label id="commentNamePrompt" class="commentFormLabel"></label><br /><br />
					
					<div class="commentFormLabel"><span class="first-letter">P</span>hone Number</div>
					<input id="commentPhone" name="commentPhone" onkeyup="validatePhone()" class="commentFormInput" type="text" /><br />
					<label id="commentPhonePrompt" class="commentFormLabel"></label><br /><br />

					<div class="commentFormLabel"><span class="first-letter">E</span>mail</div>
					<input id="commentEmail" name="commentEmail" onkeyup="validateEmail()" class="commentFormInput" type="text"/><br />
					<label id="commentEmailPrompt" class="commentFormLabel"></label><br /><br />
					
					<div class="commentFormLabel"><span class="first-letter">C</span>omment</div>
					<textarea id="commentMessage" name="commentMessage" onkeyup="validateComment()" class="commentFormTextArea"></textarea><br />
					<label id="commentMessagePrompt" class="commentFormLabel"></label>	<br/>
					
					<input type="submit" id="submit "class="btn" onclick="validateCommentForm()" value="submit"> 
					<label id="commentPrompt"></label>
					
				</form><!-- End of form. -->
				
				<div class="clearBoth"></div>

			</div><!-- End of commentFormWrapper. -->
		</div><!-- End of contact-form. -->
		
		<!-- Side bar for contact form. May contain banners, advertisements, link. etc... -->
		<div id="contact-side">
			<h2 id="contact-side-heading">A Boutique That Mean Business</h2>
			<h3 id="contact-side-subheading">Get to Know Us...<br/> Or Let Us Get to Know You!</h3>
		</div><!-- End of contact-side. -->
		
	</div><!-- End of contact-container. -->
</body>
</html>