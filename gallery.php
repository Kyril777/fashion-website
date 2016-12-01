<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" 
"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Gallery</title>
	
	<!-- Styling. -->
	<style type="text/css">
		#gallery-container{
			height: 850px;
		}
		
		#gallery-div{
			width: 905px;
			margin: auto 0;
			height: 775px;
			margin-left: 5px;
		}
		
		@media only screen and (min-width: 481px) and (max-width: 768px){
			#gallery-container{
				height: 1050px;
			}			
		}
		
		@media only screen and (min-width: 0px) and (max-width: 480px){
			#gallery-container{
				height: 1200px;
			}	
		}
		
			#mainImage
			{
				width: 540px;
				height: 520px;
				border: 3px solid #CACACA;	
				float: left;
			}
				
			.imgStyle
			{
				height: 60px;
				width: 60px;
				border: 3px solid #CACACA;
			}
			
			#pics
			{
				margin-left: 216px;
				width: 570px;
				margin-top: 10px;
				float: left;
				cursor: pointer;
			}
	
			@media only screen and (min-width: 481px) and (max-width: 768px){
			.container{
				width: 400px;
				height: 1200px;
			}
			
			#gallery-div{
				float: left;
				width: 545px;
			}
				
				#mainImage
				{
					width: 540px;
					height: 384px;
				}
			
				
				#pics
				{
					margin-left: 0px;
					width:560px;
				}
				
				.imgStyle
				{
					height: 125px;
					width: 125px;
				}
			}
			
			@media only screen and (min-width: 0px) and (max-width: 480px){
			.container{
				width: 479px;
				height: 1250px;
			}
			
			#gallery-div{
				width: 479px;
				float: left;
			}
						
				#mainImage
				{
					width: 420px;
					height: 302px;
				}
				
				#pics
				{
					width:440px;
					margin-left: 0px;
				}
				
				.imgStyle
				{
					height: 100px;
					width: 100px;
				}

			}
			
		#gallery-side{
			width: 340px;
			height: 600px;
			margin-left: 5px;
			background: url('img/gallery-side-background.png') no-repeat;
			opacity: 0.8;
			z-index: 60;
			bottom: 50px;
			left: 765px;
			position: relative;
		}
		
		#gallery-side-heading{
			text-transform: uppercase;
			color: #ffff00;
			text-shadow: 2px 2px 2px rgba(150, 150, 150, 1);
			font-size: 4.0em;
			text-align: center;
			vertical-align: middle;
			top: 50px;
		}
	
		#gallery-side-subheading{
			text-transform: uppercase;
			color: #fff;
			font-size: 2.0em;
			text-align: center;
			vertical-align: middle;
		}
		
		
		@media only screen and (min-width: 0px) and (max-width: 768px){
			#gallery-side{
				display: none;
			}
		}
		
		/* Beginning of footer. */	
		#footer{
			bottom: -200px;
		}
		
		@media only screen and (min-width: 481px) and (max-width: 768px){
			#footer{
				bottom: -600px;
			}
		}
		
		@media only screen and (min-width: 0px) and (max-width: 480px){
			#footer{
				bottom: -825px;
			}
		}
		
		/* End of footer. */
	</style>
	
</head>
<body>
	<div id="gallery-container">
		<div id="gallery-div">
			<div class="title-heading"><img src="img/gallery.png" class="title-image" /></div>
			<div id="photo_viewer">
				<img src="img/01.png" id="mainImage" />
				<br />
				<div id="pics" onclick="changeImage(event)">
					<img class="imgStyle" src="img/01.png" /><!-- Image source: <a href="http://www.freepik.com/free-vector/hand-painted-fashion-women_715464.htm">Designed by Freepik</a> -->
					<img class="imgStyle" src="img/02.png" /><!-- Image source: <a href="http://www.freepik.com/free-vector/fashion-collection_798014.htm">Designed by Freepik</a> -->
					<img class="imgStyle" src="img/03.png" /><!-- Image source: <a href="http://www.freepik.com/free-vector/summer-party-poster-in-memphis-style_874948.htm">Designed by Freepik</a> -->
					<img class="imgStyle" src="img/04.png" /><!-- Image source: <a href="http://www.freepik.com/free-vector/fashion-show-invitation_798831.htm">Designed by Freepik</a> -->
					<img class="imgStyle" src="img/05.png" /><!-- Image source: <a href="http://www.freepik.com/free-vector/sketched-fashion-models-in-a-fashion-show_717813.htm">Designed by Freepik</a> -->
					<img class="imgStyle" src="img/06.png" /><!-- Image source: <a href='http://www.freepik.com/free-vector/watercolor-fashion-poster_799323.htm'>Designed by Freepik</a> -->
					<img class="imgStyle" src="img/07.png" /><!-- Image source: <a href='http://www.freepik.com/free-vector/fashion-girl-with-boho-chic-clothes_854010.htm'>Designed by Freepik</a> -->
					<img class="imgStyle" src="img/08.png" /><!-- Image source: <a href='http://www.freepik.com/free-vector/party-background-with-pink-lights_824009.htm'>Designed by Freepik</a> -->
					<br /><img class="imgStyle" src="img/09.png" /><!-- Image source: <a href="http://www.freepik.com/free-vector/fashion-lettering-background_715906.htm">Designed by Freepik</a> -->
					<img class="imgStyle" src="img/10.png" /><!-- Image source: <a href='http://www.freepik.com/free-vector/pink-wedding-dress_716689.htm'>Designed by Freepik</a> -->
					<img class="imgStyle" src="img/11.png" /><!-- Image source: <a href='http://www.freepik.com/free-vector/trendy-pink-glasses_717814.htm'>Designed by Freepik</a> -->
					<img class="imgStyle" src="img/12.png" /><!-- Image source: <a href='http://www.freepik.com/free-vector/professional-photographer-illustration_829526.htm'>Designed by Freepik</a> -->
					<img class="imgStyle" src="img/13.png" /><!-- Image source: <a href="http://www.freepik.com/free-vector/women-fashion-complements_874988.htm">Designed by Freepik</a> -->
					<img class="imgStyle" src="img/14.png" /><!-- Image source: <a href="http://www.freepik.com/free-vector/elegant-men-s-clothing_818734.htm">Designed by Freepik</a> -->
					<img class="imgStyle" src="img/15.png" /><!-- Image source: <a href="http://www.freepik.com/free-photos-vectors/icon">Icon vector designed by Freepik</a> -->
					<img class="imgStyle" src="img/16.png" /><!-- Image source: <a href='http://www.freepik.com/free-vector/hand-drawn-men-style_811410.htm'>Designed by Freepik</a> -->
				</div><!-- End of pics. -->
			</div><!-- End of photo_viewer. -->
			
			<!-- Side bar for gallery container. May contain banners, advertisements, link. etc... -->
			<div id="gallery-side"></div>

		</div><!-- End of gallery-div. -->
	</div><!-- End of gallery container. -->
	
	<!-- JavaScript. -->
	<script type="text/javascript">
	/* Changes img#mainImage upon onclick to one of the imgStyle classes. */
		function changeImage(event)
		{
			event = event || window.event;
			
			var targetElement = event.target || event.srcElement;
			
			if (targetElement.tagName == "IMG" )
			{
				document.getElementById("mainImage").src = targetElement.getAttribute("src");
			}
		}	
	</script>
		
	</body>
</html>