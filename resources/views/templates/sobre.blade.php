@extends('layouts.app_sobre')

@section('content')

 <div id="content-wrap">
    <div class="row">
   	    <div id="main" class="eight columns">

	   		<article class="entry">
				<header class="entry-header">
					<h2 class="entry-title">
						<a href="single.html" title="">Quem é Douglas William e quais são seus projetos atuais</a>
					</h2> 				 	 
				</header> 

				<br><div class="entry-content">
					<p>Meu nome é Douglas William, sou pernambucano, 24 anos. Me formei em Análise e Desenvolvimento de Sistemas em 2015 na Faculdade de Filosofia, Ciencias e Letras de Caruaru, em Caruaru-PE.</p>
                    <p>Fanático por tecnologias, antes da graduação e principalmente durante e depois gasto praticamente todo meu tempo livre brincando com com tecnologias acessíveis. </p>
                    <p>Estou focado no projeto pessoal um app e uma plataforma web.</p>
					</div> 
			</article> <!-- end entry -->
   	    </div> <!-- end main -->

    <div id="sidebar" class="four columns">
	    <div class="widget widget_text group">
		<img class="avatar border-white" src="{{ asset('../../../../sobre/img/perfil.jpg') }}" alt="..."/>

   			<p>Tentar passar um pouco das minhas experiências e aprendizado .</p>

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