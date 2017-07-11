<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Blog</title>
    <!-- web-fonts -->
    <link href='https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,500' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <!-- off-canvas -->
    <link href="{{ asset('../../../../contact/css/mobile-menu.css') }}" rel="stylesheet">
    <!-- font-awesome -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">    
    <!-- Flat Icon -->
    <link href="fonts/flaticon/flaticon.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"
          integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    
    <!-- Style CSS -->
    <link href="{{ asset('../../../../contact/css/style.css') }}" rel="stylesheet">

    <link href="{{ asset('../../../../style/css/default.css') }}" rel="stylesheet">
    <link href="{{ asset('../../../../style/css/layout.css') }}" rel="stylesheet">
    <link href="{{ asset('../../../../style/css/media-queries.css') }}" rel="stylesheet">

</head>
<body>

<header id="top">
   	<div class="row">
   		<div class="header-content twelve columns">
		      <h1 id="logo-text"><a href="{{ url('/contato') }}" title="">Contato</a></h1>
			</div>			
	   </div>

	   <nav id="nav-wrap"> 

	   	<a class="mobile-btn" href="#nav-wrap" title="Show navigation">Show Menu</a>
		   <a class="mobile-btn" href="#" title="Hide navigation">Hide Menu</a>

	   	<div class="row">    		            
			<ul id="nav" class="nav">
			      <li><a href="{{ url('/') }}">Home</a></li>
	                  <li class="current"><a href="{{ url('/contato') }}">Contato</a></li>	
	                  <li><a href="{{ url('/about') }}">Sobre</a></li>
			</ul> <!-- end #nav -->			   	 
	   	</div> 
	   </nav> <!-- end #nav-wrap --> 	     
   </header> <!-- Header End -->

@yield('content')

@yield('footer')

<script src="{{ asset('../../../../contact/js/jquery-2.1.4.min.js') }}"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"
        integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS"
        crossorigin="anonymous"></script>

<script src="{{ asset('../../../../contact/js/smoothscroll.js') }}"></script>
<script src="{{ asset('../../../../contact/js/mobile-menu.js') }}"></script>
<script src="{{ asset('../../../../contact/js/scripts.js') }}"></script>

</body>
</html>