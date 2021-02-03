@extends('Layout.master')
@section('content')
<h1 class="text-center">libreria </h1>    
    <div class=" container">
    
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
            <img src="https://cdn.lavoz.com.ar/sites/default/files/styles/width_1072/public/nota_periodistica/caperucita_1554988307.jpg" alt="Los Angeles">
        
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
        </a>
        </div>
        <br>
    </div>


   <footer class="bg-danger text-white text-center text-lg-start">
      <!-- Grid container -->
      <div class="container p-4 bg-Dark ">
          <!--Grid row-->
          <div class="row">
          <!--Grid column-->
          <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
              <h3 class="text-uppercase">BIENVENIDOS  </h3>

              <h5>
              Las librerías también pueden vender libros usados. Estas tiendas, por lo general, s
              e dedican a una serie de código de programación, un conjunto de código que alguien ha hecho para que tú puedes reutilizar dentro de tus proyectos. El objetivo es
               sencillo, hacer más fácil y rápido el desarrollo de ciertas funciones dentro de tu app..
              </h5>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
              <h5 class="text-uppercase"> Siguenos en nuestras Redes Sociales</h5>
              <br>
              <ul class="list-unstyled mb-0">
              <li>
                  <a href="#!" class="text-white"> Facebook</a>
              </li>
              <li>
                  <a href="#!" class="text-white">https://www.facebook.com/LibreriaCaperucitaRoja@gmail.com</a>
              </li>
              <br>
              <li>
                  <a href="#!" class="text-white">WhatsApp</a>
              </li>
              <li>
                  <a href="#!" class="text-white">725 44 89</a>
              </li>
              </ul>
          </div>
          <!--Grid column-->
          </div>
          <!--Grid row-->
      </div>
      <!-- Grid container -->

      <!-- Copyright -->
      <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.8)">
          Leidy Viviana Burbano Prado @2021 
          <a class="text-white"> </a>
      </div>
      <!-- Copyright -->

  </footer> 

</div>

@stop