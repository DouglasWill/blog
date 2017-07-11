@extends('layouts.app')

@section('content')

 <div id="content-wrap">
        <div class="row">
   	        <div id="main" class="eight columns">

	   		<article class="entry">

					<header class="entry-header">

						<h2 class="entry-title">
							<a href="single.html" title="">Hey, We Love Open Sans!</a>
						</h2> 				 
					
						<div class="entry-meta">
							<ul>
								<li>July 12, 2014</li>
								<span class="meta-sep">&bull;</span>								
								<li><a href="#" title="" rel="category tag">Ghost</a></li>
								<span class="meta-sep">&bull;</span>
								<li>John Doe</li>
							</ul>
						</div> 
					 
					</header> 
					
					<div class="entry-content">
						<p>Duis ex ad cupidatat tempor Excepteur cillum cupidatat fugiat nostrud cupidatat dolor sunt sint sit nisi est eu exercitation incididunt adipisicing veniam velit id fugiat enim mollit amet anim veniam dolor dolor irure velit commodo cillum sit nulla ullamco magna amet magna cupidatat qui labore cillum sit in tempor veniam consequat non laborum adipisicing aliqua ea nisi sint ut quis proident ullamco ut dolore culpa occaecat ut laboris in sit minim cupidatat ut dolor voluptate enim veniam consequat occaecat fugiat in adipisicing in amet Ut nulla nisi non ut enim aliqua laborum mollit quis nostrud sed sed.</p>
					</div> 

				</article> <!-- end entry -->
   	
   		</div> <!-- end main -->

   		<div id="sidebar" class="four columns">
   			<div class="widget widget_search">
                  <h3>Search</h3> 
                  <form action="#">

                     <input type="text" value="Pesquisar" onblur="if(this.value == '') { this.value = 'Search here...'; }" onfocus="if (this.value == 'Search here...') { this.value = ''; }" class="text-search">
                     <input type="submit" value="" class="submit-search">

                  </form>
               </div>

		<div class="widget widget_text group">
		    <img class="avatar border-white" src="{{ asset('../../../../sobre/img/perfil.jpg') }}" alt="..."/>

   			<p>Tentar passar um pouco das minhas experiências e aprendizado .</p>

   		</div>

		<div class="widget widget_popular">
            <h3>Post populares.</h3>

               <ul class="link-list">
                  <li><a href="#">Sint cillum consectetur voluptate.</a></li>
                  <li><a href="#">Lorem ipsum Ullamco commodo.</a></li>
                  <li><a href="#">Fugiat minim eiusmod do.</a></li>                     
               </ul>
                  
            </div>
   	</div> <!-- end sidebar -->
</div> <!-- end row -->
</div> <!-- end content-wrap -->

@section('footer')

   <footer>
      <div class="row">
         <p class="copyright">&copy; Copyright 2017 Factory. &nbsp;</p>
      </div> <!-- End row -->

      <div id="go-top"><a class="smoothscroll" title="Back to Top" href="#top"><i class="fa fa-chevron-up"></i></a></div>

   </footer> <!-- End Footer-->

        @endsection

@endsection