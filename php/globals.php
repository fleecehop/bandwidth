<?php
	//person object to hold all of the attributes
	class person
	{
	    public $name;
	    public $description;
	    public $image;
	 	public $soundcloud;
	    public $twitter;
	    public $youtube;
		  
	}

	$myPerson = new person();

	//Parse returned data into objects to an array
	$myPerson->name 		= 'COCK';
	$myPerson->description  = 'artist//producer';
	$myPerson->image 		= 'crock.jpg';
	$myPerson->soundcloud 	= 'https://soundcloud.com/crockiscool';
	$myPerson->twitter 		= 'https://twitter.com/CROCKisCOOL';
	$myPerson->youtube 		= '';

	//push onto array	
	$people = array($myPerson);
	

	$myPerson = new person();

	//Parse returned data into objects to an array
	$myPerson->name 		= 'COCK';
	$myPerson->description  = 'artist//producer';
	$myPerson->image 		= 'crock.jpg';
	$myPerson->soundcloud 	= 'https://soundcloud.com/crockiscool';
	$myPerson->twitter 		= 'https://twitter.com/CROCKisCOOL';
	$myPerson->youtube 		= '';


	array_push($people,$myPerson);

	$myPerson = new person();

	//Parse returned data into objects to an array
	$myPerson->name 		= 'COCK';
	$myPerson->description  = 'artist//producer';
	$myPerson->image 		= 'crock.jpg';
	$myPerson->soundcloud 	= 'https://soundcloud.com/crockiscool';
	$myPerson->twitter 		= 'https://twitter.com/CROCKisCOOL';
	$myPerson->youtube 		= '';

	array_push($people,$myPerson);

	$myPerson = new person();

	//Parse returned data into objects to an array
	$myPerson->name 		= 'COCK';
	$myPerson->description  = 'artist//producer';
	$myPerson->image 		= 'crock.jpg';
	$myPerson->soundcloud 	= 'https://soundcloud.com/crockiscool';
	$myPerson->twitter 		= 'https://twitter.com/CROCKisCOOL';
	$myPerson->youtube 		= '';

	array_push($people,$myPerson);

	$myPerson = new person();

	//Parse returned data into objects to an array
	$myPerson->name 		= 'COCK';
	$myPerson->description  = 'artist//producer';
	$myPerson->image 		= 'crock.jpg';
	$myPerson->soundcloud 	= 'https://soundcloud.com/crockiscool';
	$myPerson->twitter 		= 'https://twitter.com/CROCKisCOOL';
	$myPerson->youtube 		= '';

	array_push($people,$myPerson);

	$myPerson = new person();

	//Parse returned data into objects to an array
	$myPerson->name 		= 'COCK';
	$myPerson->description  = 'artist//producer';
	$myPerson->image 		= 'crock.jpg';
	$myPerson->soundcloud 	= 'https://soundcloud.com/crockiscool';
	$myPerson->twitter 		= 'https://twitter.com/CROCKisCOOL';
	$myPerson->youtube 		= '';

	array_push($people,$myPerson);

	$myPerson = new person();

	//Parse returned data into objects to an array
	$myPerson->name 		= 'COCK';
	$myPerson->description  = 'artist//producer';
	$myPerson->image 		= 'crock.jpg';
	$myPerson->soundcloud 	= 'https://soundcloud.com/crockiscool';
	$myPerson->twitter 		= 'https://twitter.com/CROCKisCOOL';
	$myPerson->youtube 		= '';


	array_push($people,$myPerson);

	$myPerson = new person();

		//Parse returned data into objects to an array
	$myPerson->name 		= 'COCK';
	$myPerson->description  = 'artist//producer';
	$myPerson->image 		= 'crock.jpg';
	$myPerson->soundcloud 	= 'https://soundcloud.com/crockiscool';
	$myPerson->twitter 		= 'https://twitter.com/CROCKisCOOL';
	$myPerson->youtube 		= '';

	array_push($people,$myPerson);

	echo json_encode($people);

?>