<link rel="stylesheet" href="css/amaran.min.css">
<link rel="stylesheet" href="css/ryanhuff.css">


<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600' rel='stylesheet' type='text/css'>


<script type='text/javascript' src='js/jquery-2.1.1.min.js'></script>
<script type='text/javascript' src="js/jquery.amaran.min.js"></script>


<style>
	
	body{
		background-color: black;
	}

	/* keyframes for rotating animation */
	@-webkit-keyframes spin {
	  from { transform: rotateY(0); }
	  to   { transform: rotateY(360deg); }
	}

</style>



<script>

$(function() {
	
	//notifications
	$.amaran({

		content:{
			img:'img/crocktoberfest.jpg',
			themeName:'myTheme',
			message1:'Ryan Huff',
			message2:'is online!'
		},

		delay:'50000',

		themeTemplate:function(data){
			return '<div class="mydiv" ><div class="icon" style="position:relative;float:left;"><div class="wrapper"><div class="cube"><b class="front"><img src="'+ data.img + '" /></b><b class="back"><img src="'+ data.img + '" /></b><b class="top"></b><b class="bottom"></b><b class="left"><img src="'+ data.img + '" /></b><b class="right"><img src="'+ data.img + '" /></b></div></div></div><div class="info" style="padding-top: 10px; margin-left:90px;  position:relative; width=100%;"><span class="title">'+ data.message1 + '</span><br><span>'+ data.message2 + '</span></div></div>';
		},

		position:'bottom right'
	});

	//notifications
	$.amaran({

		content:{
			img:'img/falco2.png',
			themeName:'myTheme',
			message1:'Falco',
			message2:'is online!'
		},

		delay:'4000',

		themeTemplate:function(data){
			return '<div class="mydiv" ><div class="icon" style="position:relative;float:left; "><div class="wrapper"><div class="cube"><b class="front"><img src="'+ data.img + '" /></b><b class="back"><img src="'+ data.img + '" /></b><b class="top"></b><b class="bottom"></b><b class="left"><img src="'+ data.img + '" /></b><b class="right"><img src="'+ data.img + '" /></b></div></div></div><div class="info" style="padding-top: 10px; margin-left:90px;  position:relative; width=100%;"><span class="title">'+ data.message1 + '</span><br><span>'+ data.message2 + '</span></div></div>';
		},

		position:'bottom right'
	});

	//notifications
	$.amaran({

		content:{
			img:'img/falco2.png',
			themeName:'myTheme',
			message1:'coolFalco',
			message2:'is online!'
		},

		delay:'50000',

		themeTemplate:function(data){
			return '<div class="mydiv" ><div class="icon" style="position:relative;float:left;"><div class="wrapper"><div class="cube"><b class="front"><img src="'+ data.img + '" /></b><b class="back"><img src="'+ data.img + '" /></b><b class="top"></b><b class="bottom"></b><b class="left"><img src="'+ data.img + '" /></b><b class="right"><img src="'+ data.img + '" /></b></div></div></div><div class="info" style="padding-top: 10px; margin-left:90px;  position:relative; width=100%;"><span class="title">'+ data.message1 + '</span><br><span>'+ data.message2 + '</span></div></div>';
		},

		position:'bottom right'
	});


});
</script>