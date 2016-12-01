<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" 
"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Press</title>
	
	<!-- Styling. -->
	<style type="text/css">
		#press-container{
			width: 900px;
			height: 800px;
		}
		
		#magazine-container{
			width: 600px;
			margin: auto 0;
			margin-left: 5px;
			height: 400px;
			float: left;
		}

		@media only screen and (min-width: 481px) and (max-width: 768px){
			#press-container{
				height: 800px;
			}	

			#magazine-container{
				height: 795px;
			}			
		}
		
		@media only screen and (min-width: 0px) and (max-width: 480px){
			#press-container{
				height: 1245px;
			}	

			#magazine-container{
				height: 1240px;
			}		
		}		
		
		#press-side{
			width: 340px;
			height: 600px;
			margin-left: 5px;
			background: #fcfbfd; /* Old Browsers */
			background: -webkit-linear-gradient(top,#fcfbfd,#d2d0d3); /*Safari 5.1-6*/
			background: -o-linear-gradient(top,#fcfbfd,#d2d0d3); /*Opera 11.1-12*/
			background: -moz-linear-gradient(top,#fcfbfd,#d2d0d3); /*Fx 3.6-15*/
			background: linear-gradient(to bottom, #fcfbfd, #d2d0d3); /*Standard*/
			float: left;
			z-index: 30;
			top: -390px;
			left: 615px;
			position: relative;
		}
		
		#press-side-heading{
			text-transform: uppercase;
			color: #ff69b4;
			text-shadow: 2px 2px 2px rgba(150, 150, 150, 1);
			font-size: 3.5em;
			text-align: center;
			vertical-align: middle;
		}
		
		#press-side-subheading{
			text-transform: uppercase;
			color: #fff;
			font-size: 2.0em;
			text-align: center;
			vertical-align: middle;
			padding: 10px;
		}
		
		@media only screen and (min-width: 0px) and (max-width: 768px){
			#press-side{
				display: none;
			}
		}
	
		.mags{
			float: left;
		}
		
		#pop_background{
			position: fixed;
			width: 100%;
			height: 100%;
			top: 0;
			left: 0;
			background: #000;
			opacity: .8;
			z-index: 100;
			display: none;
		}

		#pop_box, #cerar, #off, #ferme, #fechadas, #gesluit, #schlieben, #prope, #stanga{
			position: absolute;
			left: -10px;
			top: 220px;
			background: #fff;
			width: 430px;
			margin: 100px 0 0 35%;
			padding: 20px;
			z-index: 100;
			display: none;
		}

		#close{
			width: 30px;
			height: 30px;
			border-radius: 50%;
			border-radius: 1px solid #999;
			text-align: center;
			line-height: 30px;
			font-size: 30px;
			float: right;
			cursor: pointer;
		}
		
		
		@media only screen and (min-width: 481px) and (max-width: 768px){
			.container{
				height: 1000px
			}
		}
		
		
		@media only screen and (min-width: 0px) and (max-width: 480px){
			.container{
				width: 479px;
				height: 1800px;
			}
			
			
			#magazine-container{
				width: 440px;
			}
		}
		
		/* Beginning of footer. */	
		#footer{
			bottom: -250px;
		}
		
		@media only screen and (min-width: 481px) and (max-width: 768px){
			#footer{
				bottom: -400px;
			}
		}
		
		@media only screen and (min-width: 0px) and (max-width: 480px){
			#footer{
				bottom: -1300px;
			}
		}
		
		/* End of footer. */

	</style>
</head>
<body>
	<div id="press-container">

		<!-- The individual magazines that pop upon click. -->
		<div id="pop_background"></div>
		<div id="pop_box">
			<span id="close">&times;</span>
			<div width="545" height="380"><img src="img/Ostentation.png"><br/>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</div>
		</div>

		<div id="cerar">
			<span id="close">&times;</span>
			<div width="545" height="380"><img src="img/Spotlight.png"><br/>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.</div>
		</div>

		<div id="off">
			<span id="close">&times;</span>
			<div width="545" height="380"><img src="img/MainAvenue.png"><br/>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. </div>
		</div>	
		
		<div id="ferme">
			<span id="close">&times;</span>
			<div width="545" height="380"><img src="img/GV.png"><br/>Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc, quis gravida magna mi a libero. </div>
		</div>
		
		<div id="fechadas">
			<span id="close">&times;</span>
			<div width="545" height="380"><img src="img/Vainglory.png"><br/>Vestibulum purus quam, scelerisque ut, mollis sed, nonummy id, metus. Nullam accumsan lorem in dui. Cras ultricies mi eu turpis hendrerit fringilla. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In ac dui quis mi consectetuer lacinia. Maecenas malesuada. Praesent congue erat at massa. Sed cursus turpis vitae tortor. Donec posuere vulputate arcu.</div>
		</div>
		
		<div id="gesluit">
			<span id="close">&times;</span>
			<div width="545" height="380"><img src="img/Seven.png"><br/>Phasellus accumsan cursus velit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed aliquam, nisi quis porttitor congue, elit erat euismod orci, ac placerat dolor lectus quis orci. Phasellus consectetuer vestibulum elit. Aenean tellus metus, bibendum sed, posuere ac, mattis non, nunc. Vestibulum fringilla pede sit amet augue. </div>
		</div>
		
		<div id="schlieben">
			<span id="close">&times;</span>
			<div width="545" height="380"><img src="img/CanvasState.png"><br />Aenean tellus metus, bibendum sed, posuere ac, mattis non, nunc. Vestibulum fringilla pede sit amet augue. In turpis. Pellentesque posuere. Praesent turpis. Aenean posuere, tortor sed cursus feugiat, nunc augue blandit nunc, eu sollicitudin urna dolor sagittis lacus. Donec elit libero, sodales nec, volutpat a, suscipit non, turpis. Nullam sagittis. </div>
		</div>
		
		<div id="prope">
			<span id="close">&times;</span>
			<div width="545" height="380"><img src="img/HeavyCloud.png"><br/>Suspendisse pulvinar, augue ac venenatis condimentum, sem libero volutpat nibh, nec pellentesque velit pede quis nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Fusce id purus. Ut varius tincidunt libero. Phasellus dolor. Maecenas vestibulum mollis </div>
		</div>
		
		<div id="stanga">
			<span id="close">&times;</span>
			<div width="545" height="380"><img src="img/Yes.png"><br />Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. </div>
		</div>
		
		<!-- The actual gallery that appears. -->
		<div id="magazine-container">
			<div class="title-heading"><img src="img/press.png" class="title-image" /></div>
			<a href="#" id="open" class="mags">
				<div id="vid00"><img src="img/Ostentation.png" height="" width="200"></div><!-- Image src: <a href="http://www.freepik.com/free-vector/sketched-fashion-girl-with-pink-dress_717810.htm">Designed by Freepik</a> -->
			</a>
			<a href="#" id="abrir" class="mags">
				<div id="vid00"><img src="img/Spotlight.png" height="" width="200"></div>
			</a>
			<a href="#" id="on" class="mags">
				<div id="vid00"><img src="img/MainAvenue.png" height="" width="200"></div><!-- Image src: <a href="http://www.freepik.com/free-vector/couples-in-love-collection_834579.htm">Designed by Freepik</a> -->
			</a>
			<a href="#" id="ouvrir" class="mags">
				<div id="vid00"><img src="img/GV.png" height="" width="200"></div><!-- Image src: <a href="http://www.freepik.com/free-photos-vectors/abstract">Abstract vector designed by Balasoiu - Freepik.com</a> -->
			</a>
			<a href="#" id="aberto" class="mags">
				<div id="vid00"><img src="img/Vainglory.png" height="" width="200"></div><!-- Image src: <a href="http://www.freepik.com/free-vector/couples-in-love-collection_834579.htm">Designed by Freepik</a> -->
			</a>
			<a href="#" id="oop" class="mags">
				<div id="vid00"><img src="img/Seven.png" height="" width="200"></div><!-- Image src: <a href="http://www.freepik.com/free-vector/watercolor-fashion-girl_806014.htm">Designed by Freepik</a> -->
			</a>
			<a href="#" id="offnen" class="mags">
				<div id="vid00"><img src="img/CanvasState.png" height="" width="200"></div><!-- Image src: <a href="http://www.freepik.com/free-vector/cute-boho-girl-outfit_851822.htm">Designed by Freepik</a>  -->
			</a>
			<a href="#" id="apertus" class="mags">
				<div id="vid00"><img src="img/HeavyCloud.png" height="" width="200"></div><!-- Image src: <a href='http://www.freepik.com/free-vector/woman-with-different-clothes_798095.htm'>Designed by Freepik</a> -->
			</a>
			<a href="#" id="oppen" class="mags">
				<div id="vid00"><img src="img/Yes.png" height="" width="200"></div><!-- Image src: <a href="http://www.freepik.com/free-vector/lovers-in-paris_766979.htm">Designed by Freepik</a> -->
			</a>
		</div><!-- End of magazine-contaner. -->
		
		<!-- Side bar for press. May contain banners, advertisements, link. etc... -->
		<div id="press-side">
			<h2 id="press-side-heading"><br/>Do You Like What You See?</h2>
			<h3 id="press-side-subheading">Follow us on Facebook for our latest shenanigans.</h3>
		</div>
			
	</div><!-- End of press-container. -->
</body>

	<!-- JavaScript. -->
	<script type="text/javascript">
	/* Individually fades in and fades out the pop background and pop boxes. */
		$(document).ready(function(){
		/*  Block # 1  */
			$('#open').click(function(){
				
				$('#pop_background').fadeIn();
				$('#pop_box').fadeIn();
				return false;
			});
			
			$('#close').click(function(){
				
				$('#pop_background').fadeOut();
				$('#pop_box').fadeOut();
				return false;
			});
			
			$('#pop_background').click(function(){
					
				$('#pop_background').fadeOut();
				$('#pop_box').fadeOut();
				return false;		
			});
			
		/*  Block # 2  */			
			$('#abrir').click(function(){
				
				$('#pop_background').fadeIn();
				$('#cerar').fadeIn();
				return false;
			});
			
			$('#cerar').click(function(){
				
				$('#pop_background').fadeOut();
				$('#cerar').fadeOut();
				return false;
			});
			
			$('#pop_background').click(function(){
					
				$('#pop_background').fadeOut();
				$('#cerar').fadeOut();
				return false;		
			});

		/*  Block # 3  */
			$('#on').click(function(){
				
				$('#pop_background').fadeIn();
				$('#off').fadeIn();
				return false;
			});
			
			$('#off').click(function(){
				
				$('#pop_background').fadeOut();
				$('#off').fadeOut();
				return false;
			});
			
			$('#pop_background').click(function(){
					
				$('#pop_background').fadeOut();
				$('#off').fadeOut();
				return false;		
			});
	
		/*  Block # 4  */
			$('#ouvrir').click(function(){
				
				$('#pop_background').fadeIn();
				$('#ferme').fadeIn();
				return false;
			});
			
			$('#ferme').click(function(){
				
				$('#pop_background').fadeOut();
				$('#ferme').fadeOut();
				return false;
			});
			
			$('#pop_background').click(function(){
					
				$('#pop_background').fadeOut();
				$('#ferme').fadeOut();
				return false;		
			});
	
		/*  Block # 5  */
			$('#aberto').click(function(){
				
				$('#pop_background').fadeIn();
				$('#fechadas').fadeIn();
				return false;
			});
			
			$('#fechadas').click(function(){
				
				$('#pop_background').fadeOut();
				$('#fechadas').fadeOut();
				return false;
			});
			
			$('#pop_background').click(function(){
					
				$('#pop_background').fadeOut();
				$('#fechadas').fadeOut();
				return false;		
			});
			
		/*  Block # 6  */
			$('#oop').click(function(){
				
				$('#pop_background').fadeIn();
				$('#gesluit').fadeIn();
				return false;
			});
			
			$('#gesluit').click(function(){
				
				$('#pop_background').fadeOut();
				$('#gesluit').fadeOut();
				return false;
			});
			
			$('#pop_background').click(function(){
					
				$('#pop_background').fadeOut();
				$('#gesluit').fadeOut();
				return false;		
			});
			
		/*  Block # 7  */
			$('#offnen').click(function(){
				
				$('#pop_background').fadeIn();
				$('#schlieben').fadeIn();
				return false;
			});
			
			$('#schlieben').click(function(){
				
				$('#pop_background').fadeOut();
				$('#schlieben').fadeOut();
				return false;
			});
			
			$('#pop_background').click(function(){
					
				$('#pop_background').fadeOut();
				$('#schlieben').fadeOut();
				return false;		
			});
			
		/*  Block # 8  */
			$('#apertus').click(function(){
				
				$('#pop_background').fadeIn();
				$('#prope').fadeIn();
				return false;
			});
			
			$('#prope').click(function(){
				
				$('#pop_background').fadeOut();
				$('#prope').fadeOut();
				return false;
			});
			
			$('#pop_background').click(function(){
					
				$('#pop_background').fadeOut();
				$('#prope').fadeOut();
				return false;		
			});
			
		/*  Block # 9  */
			$('#oppen').click(function(){
				
				$('#pop_background').fadeIn();
				$('#stanga').fadeIn();
				return false;
			});
			
			$('#stanga').click(function(){
				
				$('#pop_background').fadeOut();
				$('#stanga').fadeOut();
				return false;
			});
			
			$('#pop_background').click(function(){
					
				$('#pop_background').fadeOut();
				$('#stanga').fadeOut();
				return false;		
			});		
	});
	</script>
</html>