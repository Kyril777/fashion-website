<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" 
"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Two Hearts Agency</title>
	
	<!-- Styling. -->
	<style type="text/css">
		.index-container{
			width: 580px;
			float: left;
			height: 1100px;
		}
		
		#new{
			margin-top: 50px;
			width: 780px;
			float: left;
		}
		
		#signup-txt{
			font-weight: bold;
			font-size: 1.25em;
			color: #e6005c;
		}
		
		#button-signup{
			background:#5CCD00;
			background:-moz-linear-gradient(top,#5CCD00 0%,#4AA400 100%);
			background:-webkit-gradient(linear,left top,left bottom,color-stop(0%,#5CCD00),color-stop(100%,#4AA400));
			background:-webkit-linear-gradient(top,#5CCD00 0%,#4AA400 100%);
			background:-o-linear-gradient(top,#5CCD00 0%,#4AA400 100%);
			background:-ms-linear-gradient(top,#5CCD00 0%,#4AA400 100%);
			background:linear-gradient(top,#5CCD00 0%,#4AA400 100%);
			filter: progid: DXImageTransform.Microsoft.gradient( startColorstr='#5CCD00', endColorstr='#4AA400',GradientType=0);
			padding:10px 15px;
			color:#fff;
			font-family:'Helvetica Neue',sans-serif;
			font-size:16px;
			border-radius:5px;
			-moz-border-radius:5px;
			-webkit-border-radius:5px;
			border:1px solid #459A00;
		}

		#button-signup:hover{
			background: blue;
			background:-moz-linear-gradient(top,blue 0%,blue 100%);
			background:-webkit-gradient(linear,left top,left bottom,color-stop(0%,blue),color-stop(100%, blue));
			background:-webkit-linear-gradient(top,blue 0%, blue 100%);
			background:-o-linear-gradient(top,blue 0%, blue 100%);
			background:-ms-linear-gradient(top,blue 0%,blue 100%);
			background:linear-gradient(top,blue 0%, blue 100%);
			filter: progid: DXImageTransform.Microsoft.gradient( startColorstr='blue', endColorstr='blue',GradientType=0);
			padding:10px 15px;
			color:#fff;
			font-family:'Helvetica Neue',sans-serif;
			font-size:16px;
			border-radius:5px;
			-moz-border-radius:5px;
			-webkit-border-radius:5px;
			border:1px solid #459A00;
		}
		
		#article-block{
			margin-top: 50px;
			width: 780px;
			float: left;
		}
		
		.article{
			width: 170px;
			float: left;
			padding: 5px;
			margin-right: 10px;
		}
			
		.art-title{
			background: linear-gradient(silver, white);
			padding: 1px;
			font-weight: bold;
			font-size: .9em;
			text-align: center;
			color: #330000;
		}
		
		.art-excerpt{
			color: #4C0000;
		}
		
		
		@media only screen and (min-width: 0px) and (max-width: 480px){
			.index-container{
				height: 1600px;
			}
			
			#new{
				width: 470px;
				padding-left: 10px;
			}
			
			#article-block{
				padding: 10px;
				width: 480px;
				margin-bottom: 50px;
			}
		
			.article{
				width: 440px;
				padding: 5px;
			}
			
			.article-pic{
				margin: 0 auto;
			}

		}
		
		/* Countdown  */
		
		h1#countdown-header{
			color: #7e7e7e;
			text-align: center;
			font-size: 44px;
			letter-spacing: 10px;
		}
		

		#body-countdown{
			margin-top: -100px;
			width: 900px;
			background: url('img/Eyes.png') no-repeat center center;
			height: 500px;
		}

		#del-countdown{
			width: 100%;
			margin: 15% auto;
		}

		#clock span{
			float: left;
			text-align: center;
			font-size: 84px;
			margin: 0 2.5%;
			color: #fff;
			padding: 20px;
			width: 20%;
			border-radius: 20px;
			-moz-box-sizing: border-box;
			box-sizing: border-box;
		}

		#clock span:nth-child(1){
			background: #fa5559;
		}

		#clock span:nth-child(2){
			background: #26c2b9;
		}

		#clock span:nth-child(3){
			background: #f6be58;
		}

		#clock span:nth-child(4){
			background: #2dcb74;
		}

		#clock:after{
			content: "";
			display: block;
			clear: both;
		}

		#units span{
			float: left;
			width: 25%;
			text-align: center;
			margin-top: 38px;
			color: #7e7e7e;
			text-transform: uppercase;
			font-size: 13px;
			letter-spacing: 2px;
			text-shadow: 1px 1px 1px rgba(10,10,10, 0.7);
		}

		span.turn{
			animation: turn 0.7s ease forwards;
		}

		@keyframes turn{
			0%{transform: rotateX(0deg)}
			100%{transform: rotateX(360deg)}
		}
		
		
		@media only screen and (min-width: 481px) and (max-width: 768px){
			#body-countdown{
				width: 650px;
				height: 400px;
			}
			
			#clock span{
				font-size: 44px;
				padding: 10px;
				width: 20%;
			}
		}
		
		@media only screen and (min-width: 0px) and (max-width: 480px){
			#body-countdown{
				width: 475px;
				margin-top: -75px;
			}
			
			#clock span{
				font-size: 38px;
				margin: 0 2.5%;
				padding: 20px;
				width: 20%;
			}
		}
		
		/* End of countdown. */	
	</style>

</head>


<body>
	<div class="index-container">
		
		<!-- Countdown. -->
		<div id="body-countdown">
			<div id="del-countdown">
				<h1 id="countdown-header">Countdown to<br/>SummerShow</h1>
				<div id="clock"></div>
				<div id="units">
					<span>Days</span>
					<span>Hours</span>
					<span>Minutes</span>
					<span>Seconds</span>				
				</div><!-- End of units. -->
			</div><!-- End of del-countdown. -->
		</div><!-- End of body-countdown. -->

		<!-- New announcement. -->
		<div id="new">
			<span id="signup-txt"><span class="first-letter" style="background-color:#C0C0C0; border-radius: 5px;" >H</span>as tollit nonumes eu, duo ut aeque maluisset molestiae. Porro efficiendi cotidieque ea has, ne quo eligendi platonem. Eos fabellas facilisis corrumpit ne. Te nostrum gubergren vis, soluta partiendo cu eam. Et vim putent ponderum, ius apeirian senserit explicari ad.</span>
			<br />
		</div><!-- End of new. -->
		
		<!-- Article block. -->
		<div id="article-block">
		
			<div class="article first-art">
				<img src="img/first-tn.png" class="article-pic" /><!-- Image source: <a href="http://www.freepik.com/free-vector/fashionable-icons_796618.htm">Designed by Freepik</a> -->
				<div class="art-title">Don't Stop Me Now</div>
				<div class="art-excerpt">
					Accusamus scripserit vel ea. In omnesque delectus theophrastus nec, ad duo saepe essent elaboraret. Sea ut magna everti.
				</div><!-- End of art-excerpt. -->
			</div><!-- End of article. -->

			<div class="article second-art">
				<img src="img/second-tn.png" class="article-pic" /><!-- Image source: <a href="http://www.freepik.com/free-vector/fashionable-icons_796618.htm">Designed by Freepik</a> -->
				<div class="art-title">Want to Break Free</div>
				<div class="art-excerpt">
					Qui ex novum hendrerit, ad similique vituperata eloquentiam vim. Ea reque facer pro, ne integre assentior. 
				</div><!-- End of art-excerpt. -->
			</div><!-- End of article. -->

			<div class="article third-art">
				<img src="img/third-tn.png" class="article-pic" /><!-- Image source: <a href="http://www.freepik.com/free-vector/fashionable-icons_796618.htm">Designed by Freepik</a> -->
				<div class="art-title">The Show Must Go</div>
				<div class="art-excerpt">
					Ea ius salutatus intellegam reprehendunt, rebum fugit accommodare cum ut. Ut suscipit consequuntur per. <br /> 
				</div><!-- End of art-excerpt. -->
			</div><!-- End of article. -->

			<div class="article fourth-art">
				<img src="img/fourth-tn.png" class="article-pic" /><!-- Image source: <a href="http://www.freepik.com/free-vector/fashionable-icons_796618.htm">Designed by Freepik</a> -->
				<div class="art-title">A Night at the Opera</div>
				<div class="art-excerpt">
					Pri ne probatus accusata elaboraret, tale movet sententiae eu quo. Sale errem deleniti no est, ea nec viderer vivendo.<br />
				</div><!-- End of art-excerpt. -->
			</div><!-- End of article. -->
			
		</div><!-- End of article-block. -->
			
	</div><!-- End of index-container. -->
</body>