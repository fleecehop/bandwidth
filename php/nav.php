<!doctype html>
<html lang="en">

<head>
	<link rel="icon" href="img/favicon.ico" />
 	
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/snowfallstyles.css"></link>
	<link rel="stylesheet" href="css/jquery.terminal.css"></link>

	<script type='text/javascript' src='js/jquery-2.1.1.min.js'></script>
	<script type='text/javascript' src='js/bootstrap.js'></script>
	<script type='text/javascript' src='js/moment.min.js'></script>
	<script type='text/javascript' src='js/tabsloader.js'></script>
	<script type='text/javascript' src='js/snowfall.min.js'></script>
	<script type='text/javascript' src='js/matrixloader.js'></script>
	<script type='text/javascript' src='js/jquery.terminal-min.js'></script>
	<script type='text/javascript' src='js/jquery.mousewheel-min.js'></script>

	<script type='text/javascript' src='js/tilde.js'></script>

	<meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
	
	<!-- GOOGLE ANALYTICS for stats -->
    <script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-55447516-2', 'auto');
		ga('send', 'pageview');
	</script>

	<!--[if IE]>
	<style>
	body {
	    margin: 0;
	    padding: 0;
	}
	.tilda {
	    position: absolute;
	}
	</style>
	<script>
	jQuery(document).ready(function($) {
	   $(window).scroll(function() {
	      $('.tilda').each(function() {
	         $(this).css({top: $('body').prop('scrollTop')});
	      });
	   });
	});
	</script>
	<![endif]-->
	
</head>

<!-- DIV FOR CONSOLE -->
<div id="tilda"></div>

<body style="background-color: #000000">
	<div style='position:fixed; z-index:-1;'>
		<canvas id="q"></canvas>
	</div>

	<div class='logodiv'  align='center'>
			<img  src='img/bandwidthscriptwhite.png' alt='logo'  style='position=fixed; z-index: 0;width:250px;height:100px;cursor:pointer'></img>
	</div>


	<nav class="navbar navbar-bandwidth navText"  role="navigation">
	  <div class="container-fluid">
	    <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="navbar-header active">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar" style='background-color:black;'></span>
	        <span class="icon-bar" style='background-color:black;'></span>
	       <span class="icon-bar"  style='background-color:black;'></span>
	      </button>
	     
	     	<!--Bandwidthboys brand on right of navbar
	      	<a class="navbar-brand" href="index.php" style='color:black'>BANDWIDTHBOYS</a>
	  		-->
	    </div>

	    <!-- Collect the nav links, forms, and other content for toggling -->
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      <ul class="nav navbar-nav" id="MainTabs">
	      	<li><a href="index.php" style='color:black' id="homeTab">BIO/BLOG</a></li>
	      	<li><a href="merch/" style='color:black' id="merchTab">MERCH</a></li>
	        <li><a href="releases/" style='color:black'id="releasesTab">RELEASES</a></li>
	        <!--
	        	<li><a href="homies/" style='color:black' id="homiesTab">HOMIES</a></li>
	        -->
	        <li><a href="live/" style='color:black' id="liveTab">LIVE</a></li>
	        
	        
	        <!--
	        <li><a href="team.php" id="teamTab">SOUNDCLOUD</a></li>
	        <li><a href="team.php" id="teamTab">TWITTER</a></li>
	        
	        <li class="dropdown" >
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown" id="mediaTab">MEDIA<span class="caret"></span></a>
	          <ul class="dropdown-menu inverse-dropdown" role="menu">
	            <li><a href="mediaSounds.php">MUSIC</a></li>
	            <li class="divider"></li>
	            <li><a href="mediaVisuals.php">TWITTER</a></li>

	          </ul>
	        </li>
	    -->
	       <!-- <li><a href="blog.php" id="blogTab">BLOG</a></li> -->
	      </ul>


	      <!--
	      <form class="navbar-form navbar-left" role="search">
	        <div class="form-group">
	          <input type="text" class="form-control" placeholder="Search">
	        </div>
	        <button type="submit" class="btn btn-default">Submit</button>
	      </form>
			-->

	      <ul class="nav navbar-nav navbar-right">
	        <li>
	        	<a href="http://soundcloud.com/bandwidthboys">
	        		<!--<img src='img/soundcloud1.png'>-->
	        		<img src="img/soundcloud1.png" alt="Follow bandwidthboys on soundcloud"  style="width:20px;height:20px;cursor:pointer"></img>
	        	</a>
	        </li>
	        <li>
	        	<a href="http://twitter.com/bandwidthboys">
	        		<img src="img/twitter.png" alt="Follow bandwidthboys on twitter"  style="width:20px;height:20px;cursor:pointer"></img>
	        	</a>
	        </li>
	      </ul>  
	        
	      <!--
	        <li class="dropdown">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
	          <ul class="dropdown-menu" role="menu">
	            <li><a href="#">Action</a></li>
	            <li><a href="#">Another action</a></li>
	            <li><a href="#">Something else here</a></li>
	            <li class="divider"></li>
	            <li><a href="#">Separated link</a></li>
	          </ul>
	        </li>
	      
	  		-->
	    </div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>
</body>	

</html>

<script>
$(function() {
  
	//--------script for snow easter egg
    $('.logodiv').click(function(){
		//snowFall.snow(document.body);
		matrix();
    })

});
</script>