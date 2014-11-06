<?php
	
	//todo: play with crocks pic

	$title = 'BANDWIDTHBOYS';

	include 'php/nav.php';	
	include 'php/header.php';



?>
<html>
	<style>

		
	</style>
	

	<body>
		
		<div id='wrapper' class='onehunned'>
			<div id='bioView' >
				<h3>BIO</h3>
				<p>
					<i>Bandwidth Boys</i> is a group of music producers who have come together to make a collective place to enjoy 
					music and collaborate to push ourselves to a higher standard. It was started by <a href='https://twitter.com/YouCanBeFalco'>Falco</a> in 2014 with beat battles
					using <a href='http://localhost/bandwidth/live.php'>tinychat</a> to stream live broadcasts and push live content to internet users worldwide. For updates and more
					join us on <a href='https://twitter.com/BandWidthBoys'>twitter</a>. 	
				</p>
			</div>
			<div id='blogView' >
				<!--<div style='border-bottom: 1px solid #444;'>-->
				<div>
					<h3>NEWS</h3>
				</div>

				<div id='blogViewer' >
					<br>
					<?php
						//number of posts to display
						$numPosts = 2;

						for ($i=0; $i<$numPosts;$i++)
						{
							$request_url = "http://youcanbefalco.tumblr.com/api/read?type=post&start=".$i." &num=1";
							$xml = simplexml_load_file($request_url);
							$title = $xml->posts->post->{'regular-title'};
							$date= $xml->posts->post['date'];
									
							
							$ddate= explode(" ",$date);
							$title = "<i>" . $ddate[0] . " " .  $ddate[1] . " " . $ddate[2] . "</i> //// ". $title; 
							
							$post = $xml->posts->post->{'regular-body'};
							$link = $xml->posts->post['url'];
							echo '<div class=blogPost>';
								echo '<h5>&nbsp;&nbsp;'.$title.'</h5>';
								echo ''.$post.'';
							echo '</div>';
						}
					?>
				</div>
			</div>
		</div>
	</body>
	<script>
		$(function(){
			$("body").height($(window).height());
			$("#wrapper").height($(window).height() - $('#logodiv').height() - $('#navbar').height() - 25) ;
			$( window ).resize(function() {
  				$('#blogView').css('height','80%');
			});
			//$('#blogView').css('height','100%');
			$('#blogViewer').slimScroll({
				height:'100%',
				color: 'white'
			});
			$('#blogView').css('width','55%');
			$('#blogViewer').css('width','100%');


		});
		
	</script>
</html>

