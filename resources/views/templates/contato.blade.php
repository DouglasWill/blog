@extends('layouts.app_contato')

@section('content')
  
    </section> <!-- contact-detail -->
        <section class="contact-section">
            <div class="container">
                <div class="section-title text-center">
                    <h2>Se você tiver alguma dúvida ou comentário,
                    <br>ou gostaria apenas de dar alguma sugestão,
                    <br>Sinta-se à vontade para entrar em contato.</h2>
                </div>

    <div class="contact-form mt-50">

        <form action="">
                      
            <div class="row">
                <div class="col-md-4">
                    
                    <div class="form-group">
                        <label for="assunto" class="sr-only">Nome</label>
                            <input type="text" class="form-control" required="" id="nome" placeholder="Nome">
                    </div>
                          
                    <div class="form-group">
                        <label for="assunto" class="sr-only">Assunto</label>
                            <input type="text" class="form-control" required="" id="assunto" placeholder="Assunto">
                    </div>

                    <div class="form-group">
                        <label for="emailTwo" class="sr-only">Email</label>
                            <input type="email" class="form-control" required="" id="emailTwo" placeholder="Email Address">
                          </div>
                        </div> <!-- col-md-4 -->

                    <div class="col-md-8">
                        <div class="form-group">
                            <label for="mensagem" class="sr-only">Mensagem</label>
                            <textarea class="form-control" required="" rows="7" placeholder="Mensagem"></textarea>
                          </div>
                        </div> <!-- col-md-8 -->
                      </div><!-- /.row-->

                      <button type="submit" class="btn btn-primary btn-lg pull-right">Enviar</button>
                    </form>
                  </div> <!-- contact-form -->
                </div>
              </section> <!-- contact-section -->

@section('footer')

<footer>
      <div class="row">

         <p class="copyright">&copy; Copyright 2017 Factory. &nbsp;</p>
        
      </div> <!-- End row -->

      <div id="go-top"><a class="smoothscroll" title="Back to Top" href="#top"><i class="fa fa-chevron-up"></i></a></div>

   </footer> <!-- End Footer-->

        @endsection
        </div

@endsection
