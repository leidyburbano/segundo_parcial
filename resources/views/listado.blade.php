@extends('Layout.master')
@section('content')
    <br><br>
    <h1 class="text-center">EDITORIAL</h1>
    <br>
    <div class="container ">
        <table class="table ">
            <thead class="table-danger">
                <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Dirección</th>
                <th scope="col">Ciudad</th>
                <th scope="col">Telefono  </th>
                </tr>
            </thead>
            <tbody class="table-warning ">
                @foreach($editoriales as $e)
                <tr>
                <th scope="row">{{$e->id}}</th>
                <td> {{$e->nombre}}</td>
                <td> {{$e->direccion}}</td>
                <td> {{$e->ciudad}}</td>
                <td> {{$e->telefono}}</td>        
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <br><br>
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
@stop