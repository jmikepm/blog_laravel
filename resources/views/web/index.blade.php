@extends('layouts.app')
<div class="container">
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100 img-fluid" style="height: 300px;" src="{{ asset('image/head.jpg') }}" alt="First slide">
          <div class="carousel-caption  d-md-block">
            <h2>Miguel Peña </h2> 
            <h4>Desarrollador Web / Ing. En Sistemas Computacionales</h4>   
          </div>
        </div>
      </div>
    </div>
</div>
@section('content')
    <div class="container-fluid justify-content-md-center align-items-center pb-6">
        <div class="row py-5">
          <div class="col-10 my-0 mx-auto">
            <div class="row">
              <div class="col-4">
                <div class="row">
                  <div class="col-10 text-center">
                    <img src="{{ asset('image/me.png') }}" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="col-6 text-left">
                <h2>I'm <span>My name</span></h2>
                <h6>Web developer(ISC)</h6>
                <hr>
                <div class="row">
                  <div class="col-10">
                    <ul class="list-group info">
                      <li class="list-group-item d-flex justify-content-between align-items-center infolist">
                        Age
                        <span class="badge badge-pill">26</span>
                      </li>
                      <li class="list-group-item d-flex justify-content-between align-items-center infolist">
                        Address
                        <span class="badge badge-pill">Sta Fé INFONAVIT 01209 Ciudad de México, CDMX</span>
                      </li>
                      <li class="list-group-item d-flex justify-content-between align-items-center infolist">
                        e-mail
                        <span class="badge badge-pill">jmiguelpm14@gmail.com</span>
                      </li>
                      <li class="list-group-item d-flex justify-content-between align-items-center infolist">
                        phone
                        <span class="badge badge-pill">2731151621</span>
                      </li>
                    </ul>
                  </div>
                </div>
                
              </div>
              
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="row">
              <div class="col-12">
                <nav class="navbar navbar-expand-lg navbar-light bg-danger">
                  <div class="my-0 mx-auto" id="navbarNav">
                    <ul class="navbar-nav my-0 mx-auto listsocial">
                      <li class="nav-item px-2 py-2">
                        <a class="nav-link social" href="#"><ion-icon name="logo-instagram"></ion-icon></a>
                      </li>
                      <li class="nav-item px-2 py-2">
                        <a class="nav-link social" href="#"><ion-icon name="logo-facebook"></ion-icon></a>
                      </li>
                      <li class="nav-item px-2 py-2">
                        <a class="nav-link social" href="#"><ion-icon name="logo-twitter"></ion-icon></a>
                      </li>
                      <li class="nav-item px-2 py-2">
                        <a class="nav-link social" href="#"><ion-icon name="logo-googleplus"></ion-icon></a>
                      </li>
                      <li class="nav-item px-2 py-2">
                        <a class="nav-link social" href="#"><ion-icon name="logo-linkedin"></ion-icon></a>
                      </li>
                      <li class="nav-item px-2 py-2">
                        <a class="nav-link social" href="#"><ion-icon name="logo-youtube"></ion-icon></a>
                      </li>
                    </ul>
                  </div>
                </nav>
              </div>
            </div>
          </div>
        </div>
        <div class="container mt-4">
             <div class="row">
                    <div class=" col-md-12 mt-4 text-center">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime nesciunt fuga laboriosam consequatur accusamus architecto voluptas necessitatibus, incidunt, corporis iste quae ab debitis eligendi ex temporibus itaque commodi est nisi.</p>
                         <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime nesciunt fuga laboriosam consequatur accusamus architecto voluptas necessitatibus, incidunt, corporis iste quae ab debitis eligendi ex temporibus itaque commodi est nisi.</p>
                    </div>
                </div>
        </div>
        <div class="container col-md-8">
          <div class="container skill justify-content-md-center align-items-center">
              <h1 class="text-center">SKILL</h1>
              <div class="row">
                <div class="col-10">
                  <div class="row">
                    <div class="col-4">
                      <span>Java</span>
                    </div>
                    <div class="col-4">
                      <span>PHP</span>
                    </div>
                    <div class="col-4">
                      <span>MySql</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-10">
                  <div class="row">
                    <div class="col-4">
                      <span>JavaScript</span>
                    </div>
                    <div class="col-4">
                      <span>HTML 5</span>
                    </div>
                    <div class="col-4">
                      <span>CSS 3</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-10">
                  <div class="row">
                    <div class="col-4">
                      <span>Yii Framework</span>
                    </div>
                    <div class="col-4">
                      <span>Angular</span>
                    </div>
                    <div class="col-4">
                      <span>Laravel</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-10">
                  <div class="row">
                    <div class="col-4">
                      <span>BootsTrap</span>
                    </div>
                    <div class="col-4">
                      <span>VueJS</span>
                    </div>
                  </div>
                </div>
              </div>
              
             
          </div>
        </div>

        <div class="container">
          <div class="row text-center">
            <h1 class=" text-center">Experiencie</h1>
            <div class="col-md-12 justify-content-center align-items-center">
              <div class="card text-white bg-primary mb-3 col-sm-4 work" style="max-width: 18rem;">
                <div class="card-header">
                  <h4 class="jobTit">Ariadna S.A. de C.V.</h4>
                  <h6 class="jobDate">De Septiembre 2016 - actualmente</h6>
              </div>
                <div class="card-body">
                  <p class="card-text">Desarrollo y mantenimiento de sistemas web. Maquetación con HTML 5, CSS 3, Bootstrap y Jquery, adaptadps a moviles. Modelación y desarrollo de Bases de Datos. Desarrollo de mailings adaptables a moviles y así mismo envío masivo de email para hacer comunicación de las diversas campañas mediante plataforma de mailchimp</p>
                </div>
              </div>

              <div class="card text-white bg-primary mb-3 col-sm-4 work" style="max-width: 18rem;">
                <div class="card-header">
                  <h4 class="jobTit">Mora Digital/Matrix</h4>
                  <h6 class="jobDate">De Agosto 2016 a Enero de 2016</h6> 
                </div>
                <div class="card-body">
                  <p class="card-text">Practicas profesionales, maquetación de sitios web con HTML5,CSS3 Bootstrap y Jquery, adaptable a moviles.</p>
                </div>
              </div>
            </div>

            <div class="col-md-12">
              <div class="card text-white bg-primary mb-3 col-sm-4 work" style="max-width: 18rem;">
                <div class="card-header">
                  <h4 class="jobTit">Centro Comunitario de Aprendizaje CCA</h4>
                  <h6 class="jobDate">De Abril 2011 a Septiembre de 2016</h6>
                </div>
                <div class="card-body">
                  <p class="card-text">Sector gubernamental, me desempeñaba como docente impartiendo clases de informática paqueteria office,html5, mantenimiendo de redcableada  interna.</p>
                </div>
              </div>

              <div class="card text-white bg-primary mb-3 col-sm-4 work" style="max-width: 18rem;">
                <div class="card-header ">Header</div>
                <div class="card-body">
                  <h5 class="card-title">Primary card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
    <div class="row ">
      <h1 class="justify-content-md-center align-items-center text-center">BLOG</h1>
      <div class="row my-5">
                @foreach($posts as $post)
                <div class="col-lg-4 d-inline">
                    <div class="card " style="width: 18rem;">
                          @if($post->file)
                            <img src="{{ $post->file }}" alt="" class="card-img-top">
                        @endif
                          <div class="card-body">
                            <h5 class="card-title">{{ $post->name }}</h5>
                            <p class="card-text">{{ $post->excerpt }}</p>
                          </div>
                          
                          <div class="card-body">
                            <a href="{{ route('post', $post->slug) }} " class="card-link">Ver mas</a>
                          </div>
                    </div>
                </div>
             @endforeach
            </div>
    </div>
        

        


    </div>
@endsection