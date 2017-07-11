<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<meta name="csrf-token" content="{{ csrf_token() }}">
    
    <title>Blog</title>

    <link href="{{ asset('../../../../style/css/default.css') }}" rel="stylesheet">
    <link href="{{ asset('../../../../style/css/layout.css') }}" rel="stylesheet">
    <link href="{{ asset('../../../../style/css/media-queries.css') }}" rel="stylesheet">

</head>
<body>

<!-- Header
   ================================================== -->
   <header id="top">
   	<div class="row">
   		<div class="header-content twelve columns">
		      <h1 id="logo-text"><a href="{{ url('/') }}" title="">Sobre</a></h1>
			</div>			
	   </div>

	   <nav id="nav-wrap"> 

	   	<a class="mobile-btn" href="#nav-wrap" title="Show navigation">Show Menu</a>
		   <a class="mobile-btn" href="#" title="Hide navigation">Hide Menu</a>

	   	<div class="row">    		            
			<ul id="nav" class="nav">
			    <li><a href="{{ url('/') }}">Home</a></li>
	            <li><a href="{{ url('/contato') }}">Contato</a></li>	
	            <li class="current"><a href="{{ url('/about') }}">Sobre</a></li>
			</ul> <!-- end #nav -->			   	 
	   	</div> 
	   </nav> <!-- end #nav-wrap --> 	     
   </header> <!-- Header End -->

@yield('content')

@yield('footer')

<script src="{{ asset('../../../../style/js/modernizr.js') }}"></script>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
   <script>window.jQuery || document.write('<script src="{{ asset('../../../../style/js/jquery-1.10.2.min.js') }}"><\/script>')</script>
   <script type="text/javascript" src="{{ asset('../../../../style/js/jquery-migrate-1.2.1.min.js') }}"></script>  
   <script src="js/main.js"></script>

</body>
</html>