<!doctype html>
<html lang="en">

<head>
	<link rel="icon" href="img/favicon.ico" />
 	
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/snowfallstyles.css"></link>
	<link rel="stylesheet" href="css/jquery.terminal.css"></link>
	<link rel="stylesheet" href="css/amaran.min.css">
	<link rel="stylesheet" href="css/ryanhuff.css">


	<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600' rel='stylesheet' type='text/css'>    

	<script type='text/javascript' src='js/jquery-2.1.1.min.js'></script>
	<script type='text/javascript' src='js/bootstrap.js'></script>
	<script type='text/javascript' src='js/moment.min.js'></script>
	<script type='text/javascript' src='js/tabsloader.js'></script>
	<script type='text/javascript' src='js/snowfall.min.js'></script>
	<script type='text/javascript' src='js/matrixloader.js'></script>
	<script type='text/javascript' src='js/jquery.terminal-min.js'></script>
	<script type='text/javascript' src='js/jquery.mousewheel-min.js'></script>
	<script type='text/javascript' src='js/jquery.slimscroll.min.js'></script>
	<script type='text/javascript' src="js/jquery.amaran.min.js"></script>

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

	<div class='logodiv' id='logodiv' align='center'>
		<br>
			<img  src='img/bandwidthscriptwhitecropped.png' alt='logo'  style='position=fixed; z-index: 0;width:140px;height:28px;cursor:pointer'></img>
	</div>

	<br>
	<nav class="navbar navbar-bandwidth navText" id='navbar'  role="navigation">
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
	      	<li><a href="index.php" style='color:black' id="homeTab">BIO/NEWS</a></li>
	      	<li><a href="https://soundcloud.com/bandwidthboys" style='color:black' id="soundcloudTab">SOUNDCLOUD</a></li>
	        <li><a href="http://bandwidthboysforever.bandcamp.com/" style='color:black'id="bandcampTab">BANDCAMP</a></li>
	        <!--
	        	<li><a href="homies/" style='color:black' id="homiesTab">HOMIES</a></li>
	        -->
	        <li><a href="live/" style='color:black' id="liveTab">STREAM</a></li>
	        
	        
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

		<script>
		/*
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
	      */
	      </script>

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

<style>
	/* THIS ANIMATION STYLING GOES WITH RYANHUFF.CSS */

	/* keyframes for rotating animation */
	@-webkit-keyframes spin {
	  from { transform: rotateY(0); }
	  to   { transform: rotateY(360deg); }
	}
	@-o-keyframes spin {
	  from { transform: rotateY(0); }
	  to   { transform: rotateY(360deg); }
	}
	@-moz-keyframes spin {
	  from { transform: rotateY(0); }
	  to   { transform: rotateY(360deg); }
	}
	@keyframes spin {
	  from { transform: rotateY(0); }
	  to   { transform: rotateY(360deg); }
	}

</style>

</html>

<script>

$(function() {

	var minNotificationWidth = 600;

	//make sure the news portion loads in correct width
	$('.blogPost').css("width","80%");


	//on load get width used for testing
	var width=$(window).width();
	console.log("width =" + width);

	//window size
	$( window ).resize(function() {
		width=$(window).width();
		console.log("width =" + width);

		if(width < 850){

			$('#bioView').css("width","100%");
			$('#blogView').css("width","100%");
			$('.blogPost').css("width","80%");

		}
		else{

			$('#bioView').css("width","40%");
			$('#blogView').css("width","60%");
			$('.blogPost').css("width","80%");
					
		}
	});

	function falcoNotification(){

		if(width > minNotificationWidth){

			//loads when the page loads falco//twitter
			$.amaran({

				content:{
					img:'img/falco2.png',
					themeName:'myTheme',
				},

				clearAll:true,

				delay:'5000',

				themeTemplate:function(data){
					return '<div class="mydiv" id="bwtwitter"><div class="icon" style="width:50px;height:50px;position:relative;float:left;"><img id="falcoface" src="'+data.img + '" style="max-width:100%;"></div><div class="info" style="padding-top: 10px;"><span class="title">Follow<br>@BandWidthBoys</span></div></div>';
				},

				position:'top right'
			});

			//when falcos face gets hovered, change
			$('[id=falcoface]')
				.mouseover(function() { 
					var src = "img/falco1.png";
					$(this).attr("src", src);
				})
				.mouseout(function() {
					var src = "img/falco2.png";
					$(this).attr("src", src);
			});
			
			//if falco clicked navigate to twitter
			$('[id=bwtwitter]').click(function(event) {
				window.location.assign('http://twitter.com/BandWidthBoys')
			});
		}
	}

	function crockNotification(){

		if(width > minNotificationWidth){
			//notifications
				$.amaran({

					content:{
						img:'img/crocktoberfest.jpg',
						themeName:'myTheme',
						message1:'Ryan Huff',
						message2:'is online!'
					},

					clearAll:true,
					
					delay:'3000',

					themeTemplate:function(data){
						return '<div class="mydiv" id="crockLink"><div class="icon" style="position:absolute;float:left; margin-left:10px; top:0px;"><div class="wrapper"><div class="cube"><b class="front"><img src="'+ data.img + '" /></b><b class="back"><img src="'+ data.img + '" /></b><b class="top"></b><b class="bottom"></b><b class="left"><img src="'+ data.img + '" /></b><b class="right"><img src="'+ data.img + '" /></b></div></div></div><div class="info" style="padding-top: 10px; margin-left:90px;  position:relative; width=100%;"><span class="title">'+ data.message1 + '</span><br><span>'+ data.message2 + '</span></div></div>';
					},

					position:'top right'
				});

				//if crock is clicked nav to fleecehop.com
				$('[id=crockLink]').click(function(event) {
					window.location.assign('live')
				});
		}
	}

	function fleeceNotification(){
		if(width > minNotificationWidth){
			//notifications
			$.amaran({

				content:{
					img:'img/fleecemain3i.png',
					themeName:'myTheme',
					message1:'site by',
					message2:'fleece'
				},

				clearAll:true,

				delay:'5000',

				themeTemplate:function(data){
					return '<div class="mydiv" id="fleeceLink" ><div class="icon" style="position:absolute;float:left; margin-left:10px; top:0px;"><div class="wrapper"><div class="cube"><b class="front"><img src="'+ data.img + '" /></b><b class="back"><img src="'+ data.img + '" /></b><b class="top"></b><b class="bottom"></b><b class="left"><img src="'+ data.img + '" /></b><b class="right"><img src="'+ data.img + '" /></b></div></div></div><div class="info" style="padding-top: 10px; margin-left:90px;  position:relative; width=100%;"><span class="title">'+ data.message1 + '</span><br><span>'+ data.message2 + '</span></div></div>';
				},

				position:'top right'
			});

			//if fleece is clicked nav to fleecehop.com
			$('[id=fleeceLink]').click(function(event) {
				window.location.assign('http://fleecehop.com')
			});
		}
	}



	//if the width of the window is greater than minNotificationWidth, show notifications
	if (width > minNotificationWidth)
    {
		//loads when the page loads falco//twitter
		falcoNotification();

		//every 10 seconds ryan huff is online
		setInterval(function(){

			crockNotification();

		},10000);

		//every 15 seconds fleece
		setInterval(function(){

			fleeceNotification();

		},15000);

		//every 25 seconds Falco//twitter
		setInterval(function(){

			falcoNotification();

		},25000);
				

	}

		//when falcos face gets hovered, change
		jQuery('[id=falcoface]')
			.mouseover(function() { 
				var src = "img/falco1.png";
				$(this).attr("src", src);
			})
			.mouseout(function() {
				var src = "img/falco2.png";
				$(this).attr("src", src);
		});

		jQuery('[id=bwtwitter]').click(function(event) {
			window.location.assign('http://twitter.com/BandWidthBoys')
		});
	  
			
	//}

	//--------script for snow easter egg
	$('.logodiv').click(function(){
		//snowFall.snow(document.body);
		matrix();
	})

});
</script>