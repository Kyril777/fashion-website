<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" 
"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>About Us</title>
	
	<!-- Styling. -->
	<style type="text/css">
		.container{
			width: 900px;
			height: 1150px;
		}
		
		#shopper{
			width: 500px;
			float: left;
		}
		
		#friends{
			margin-left: 35px;
			width: 150px;
			float: left;
		}

		#footer{
			bottom: -500px;
		}
		
		.about-desc{
			color: #4C0000;
		}
		
		.about-desc-extra{
			color: #4C0000;
		}
		
		@media only screen and (min-width: 481px) and (max-width: 768px){
			#footer{
				bottom: -700px;
			}
		}
		
		@media only screen and (min-width: 0px) and (max-width: 480px){
			#footer{
				bottom: -1300px;
			}
		}
		
		#table{
			display: none;
		}
		
		#accordion{
			width: 250px;
		}
				
		#accordion_list, dt, dd, a{
			margin: auto;
			padding: 0;
			color: #1a0000;
		}
		
		#accordion a{
			text-decoration: none;
			outline: none;
		}
		
		#accordion_list{
			width: 200px;
		}
		
		#accordion dt{
			border-bottom: 1px solid black;
			background: #ff00bf;
			background: -moz-linear-gradient(to top left, #ff00bf, white, #ff00bf);
			background: -webkit-gradient(to top left, #ff00bf, white, #ff00bf);
			background: -webkit-linear-gradient(to top left, #ff00bf, white, #ff00bf);
			background: -o-linear-gradient(to top left, #ff00bf, white, #ff00bf);
			background: -ms-linear-gradient(to top left, #ff00bf, white, #ff00bf);
			background: linear-gradient(to top left, #ff00bf, white, #ff00bf);
			font-weight: bold;
			text-align: center;
		}

		.friend{
			background: white;
			color: black;
		}
		
		@media only screen and (min-width: 481px) and (max-width: 768px){
			.container{
				width: 767px;
				height: 1400px;
			}
			
			#accordion{
				width: 200px;
			}
			
			#shopper{
				padding: 5px;
			}

		}
		
		@media only screen and (min-width: 0px) and (max-width: 480px){	
			.container{
				width: 479px;
				height: 2000px;
			}
		
			#shopper{
				width: 440px;
				marginleft: 10px;
				margin-right: 10px;
			}
			
			#friends{
				display: none;
			}
			
			#table{
				display: inline;
			}
			
			
			#shopping-image{
				display: none;
			}	
			
			.secondary-title{
				text-align: center;
			}
			
			.about-desc{
				font-size: .75em;
				padding: 5px;
			}
			
			.about-desc-extra{
				display: none;
			}	
		}
	</style>
	
	<!-- Javascipt. -->
	<script type="text/javascript">
	/* Provides slide up/slide down functionality to accordion. */
		$(function(){
			$("dd:not(:first)").hide();
			$("dt a").click(function(){
				$("dd").slideUp("fast");
				$(this).parent("dt").next("dd").slideDown("normal");
			});
		});
	</script>
</head>
<body>
	<div class="container">
	
		<!-- Shopper image and about us text. -->
		<div id="shopper">
			<div class="title-heading"><img src="img/about.png" class="title-image" /></div>
			<img src="img/shopper.png" id="shopping-image" /><!-- Img src: <a href='http://www.freepik.com/free-vector/glossy-woman-profile-silhouette-floral-design_715778.htm'>Designed by Freepik</a> -->
			<h2 class="secondary-title"><span class="first-letter">L</span>ots of Experience (Impressed?)</h2>
			<p class="about-desc"><span class="first-letter">L</span>orem ipsum dolor sit amet, nullam sollicitudin mi, consectetuer ante sit duis libero et vestibulum, ullamcorper vestibulum arcu et euismod, euismod libero integer fermentum dolor aliquet amet. In suspendisse ipsum lacus nullam. Enim id at nulla, wisi sit autem mus tortor, imperdiet per. Ipsum nec mi nullam, lobortis in ultrices, augue justo eu vitae metus lorem nec, ac sed. Scelerisque magnis lacinia ipsum. Interdum lectus feugiat hac, metus nibh litora a hendrerit.</p>
			<br />
			<h2 class="secondary-title"><span class="first-letter">W</span>ell, We Don't Mean to Brag</h2>
			<p class="about-desc"><span class="first-letter">A</span>t vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.</p>
			<p class="about-desc-extra"><span class="first-letter">N</span>am libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. <br />Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae.<br />Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur.</p>
		</div><!-- End of shopper. -->
			
			
		<div id="friends">
			<div id="accordion">
				<dl id="accordion-list">
				
					<!-- Friend heading. -->
					<dt class="accordion-panel">Your Friends Here</dt>
					
					<!-- Vivian's slide. -->
					<dt class="accordion-panel"><a href="#" class="item">Vivian, President</a></dt>
					<dd class="friend">
						<p><span class="first-letter">N</span>am libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus. At vero eos et accusamus.</p>
						<img src="img/Vivian.png">
					</dd><!-- End of friend class. -->
					
					<!-- Sara's slide. -->
					<dt><a href="#" class="item">Sara, Lead Designer</a></dt>
					<dd class="friend">
						<img src="img/Sara.png">
						<p><span class="first-letter">N</span>ulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. Enim justo arco, rhoncus ut, imperdiet a, venenatis.</p>
					</dd><!-- End of friend class. -->
					
					<!-- Leslie's slide. -->
					<dt><a href="#" class="item">Leslie, Assistant Designer</a></dt>
					<dd class="friend">
						<p><span class="first-letter">S</span>ed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore.</p>
						<img src="img/Leslie.png">
					</dd><!-- End of friend class. -->
					
					<!-- End of Cindy's slide. -->
					<dt><a href="#"class="item">Cindy, Assistant Designer</a></dt>
					<dd class="friend">
						<img src="img/Cindy.png">
						<p><span class="first-letter">Q</span>uasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit. totam rem aperia.</p>
					</dd><!-- End of friend class. -->
					
					<!-- End of Kevin's slide. -->
					<dt><a href="#"class="item">Kevin, Photographer</a></dt>
					<dd class="friend">
						<p><span class="first-letter">S</span>ed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit. </p>
						<img src="img/Kevin.png">
					</dd><!-- End of friend class. -->
					
					<!-- End of Jo's slide. -->
					<dt><a href="#"class="item">Jo, Marketing Manager</a></dt>
					<dd class="friend">
						<img src="img/Jo.png">
						<p><span class="first-letter">D</span>olor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat.</p>
					</dd><!-- End of friend class. -->
					
					<!-- End of Lori's slide. -->
					<dt><a href="#"class="item">Lori, Office Manager</a></dt>
					<dd class="friend">
						<p><span class="first-letter">U</span>t enim ad minima veniam, quis nostrum ullam impedit quo minus id quod maxime, nisi ut aliquid ex ea commodi consequatur? </p>
						<img src="img/Lori.png">
					</dd><!-- End of friend class. -->
					
					<!-- End of Carter's slide. -->
					<dt><a href="#"class="item">Carter, Intern</a></dt>
					<dd class="friend">
						<img src="img/Carter.png">
						<p><span class="first-letter">E</span>t harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil.</p>
					</dd><!-- End of friend class. -->
					
				</dl><!-- End of accordion-list. -->
			</div><!-- End of accordion. -->
		</div><!-- End of friend. -->
			
			
		<!-- Bio table appears when container has 480px width. The accordion is displayed to none.  -->
		<style type="text/css">
			table{
				border-collapse: collapse;
			}
				
			caption{
				font-size: .8125em;
				font-weight: bold;
				margin-bottom: .5em;
			}
				
			tbody{
				width: 100%;
			}
				
			th, td{
				font-size: .875em;
				padding: .5em, .75em;
			}
				
			td{
				border: 1px solid #000;
				width: 600px;
			}
				
			#caption-title{
				background: linear-gradient(#c0c0c0, #fff);
				margin: auto;
				color: #ff33cc;
				font-size: 1.25em;
				width: 180px;
			}
				
			.name-title{
				font-weight: bold;
				text-align: center;
			}
				
			.bio-picture{
				display:block;
				margin:auto;
				height: 40%;
				width: 27%;
			}
				
			.bio-desc{
				padding: 5px;
			}
				
		</style>
			
		<table id="table">
		
			<!-- Table heading. -->
			<caption id="caption-title">Your Friends Here</caption>
			<tbody id="team-bio">
				<!-- Vivian's Bio -->
				<tr>
					<td class="name-title">Vivian, President</td>
					<td rowspan="2" class="bio-desc"><b>About Vivian: </b>nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus. At vero eos et accusamus.</td>					
				</tr>
				<tr>
					<td><img src="img/Vivian.png" class="bio-picture"/></td>					
				</tr>
				
				<!-- Sara's Bio -->
				<tr>
					<td class="name-title">Sara, Lead Designer</td>
					<td rowspan="2" class="bio-desc"><b>About Sara: </b>nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. Enim justo arco, rhoncus ut, imperdiet a, venenatis.</td>					
				</tr>
				<tr>
					<td><img src="img/Sara.png" class="bio-picture"/></td>					
				</tr>
				
				<!-- Leslie's Bio -->
				<tr>
					<td class="name-title">Leslie, Assistant Designer</td>
					<td rowspan="2" class="bio-desc"><b>About Leslie: </b>sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam gloss beefer.</td>					
				</tr>
				<tr>
					<td><img src="img/Leslie.png" class="bio-picture"/></td>					
				</tr>
				
				<!-- Cindy's Bio -->
				<tr>
					<td class="name-title">Cindy, Assistant Designer</td>
					<td rowspan="2" class="bio-desc"><b>About Cindy: </b>quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit. Arco!</td>					
				</tr>
				<tr>
					<td><img src="img/Cindy.png" class="bio-picture"/></td>					
				</tr>		
				
				<!-- Kevin's Bio -->
				<tr>
					<td class="name-title">Kevin, Photographer</td>
					<td rowspan="2" class="bio-desc"><b>About Kevin: </b>sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia.</td>					
				</tr>
				<tr>
					<td><img src="img/Kevin.png" class="bio-picture"/></td>					
				</tr>
				
				<!-- Jo's Bio -->
				<tr>
					<td class="name-title">Jo, Marketing Manager</td>
					<td rowspan="2" class="bio-desc"><b>About Jo: </b>dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam. Arco aussi!</td>					
				</tr>
				<tr>
					<td><img src="img/Jo.png" class="bio-picture"/></td>					
				</tr>
				
				<!-- Lori's Bio -->
				<tr>
					<td class="name-title">Lori, Office Manager</td>
					<td rowspan="2" class="bio-desc"><b>About Lori:  </b>ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ea. Quis autem vel eum iure.</td>					
				</tr>
				<tr>
					<td><img src="img/Lori.png" class="bio-picture"/></td>					
				</tr>
				
				<!-- Carter's Bio -->
				<tr>
					<td class="name-title">Carter, Intern</td>
					<td rowspan="2" class="bio-desc"><b>About Carter:  </b>et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi quo minus id quod maxime.</td>					
				</tr>
				<tr>
					<td><img src="img/Carter.png" class="bio-picture"/></td>					
				</tr>
			</tbody><!-- End of team-bio. -->
		</table><!-- End of table. -->
			
	</div><!-- End of container. -->

</body>
</html>