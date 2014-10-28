<?php

	$title = 'BANDWIDTHBOYS';

	include 'php/nav.php';	
	include 'php/header.php';



?>
<html>
	<body>
		<div id='wrapper'>
			<div id='bioView' >
				<h3>BIO</h3>
				<p>
					bwboys is a group of dudes who circlejrk on twitter and tinychat and make bb music wit sc
					bwboys is a group of dudes who circlejrk on twitter and tinychat and make bb music wit sc
					bwboys is a group of dudes who circlejrk on twitter and tinychat and make bb music wit sc
					bwboys is a group of dudes who circlejrk on twitter and tinychat and make bb music wit sc
					bwboys is a group of dudes who circlejrk on twitter and tinychat and make bb music wit sc
					bwboys is a group of dudes who circlejrk on twitter and tinychat and make bb music wit sc
				<p>
			</div>
			<div id='blogView'>
				<?php
					//number of posts to display
					$numPosts = 2;
					for ($i=0; $i<3;$i++)
					{
						$request_url = "http://youcanbefalco.tumblr.com/api/read?type=post&start=".$i." &num=1";
						$xml = simplexml_load_file($request_url);
						$title = $xml->posts->post->{'regular-title'};
						$date= $xml->posts->post['date'];
						$title =$date ."-- ". $title; 
						$post = $xml->posts->post->{'regular-body'};
						$link = $xml->posts->post['url'];
						echo '<div class=blogPost>';
							echo '<h4>'.$title.'</h4>';
							echo '<p>'.$post.'</p>';
						echo '</div>';
					}
				?>
			</div>
		</div>
	</body>
</html>

