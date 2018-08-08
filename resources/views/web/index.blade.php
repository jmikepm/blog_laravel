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
    <div class="container justify-content-md-center align-items-center pb-6">
        
        <div class="container mt-4">
             <div class="row">
                    <div class=" col-md-4">
                        <img src="{{ asset('image/me.png') }}" alt="" class=" img-fluid float-left align-middle">
                    </div>
                    <div class=" col-md-7 mt-4">
                        <h3>Mike Peña</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime nesciunt fuga laboriosam consequatur accusamus architecto voluptas necessitatibus, incidunt, corporis iste quae ab debitis eligendi ex temporibus itaque commodi est nisi.</p>
                         <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime nesciunt fuga laboriosam consequatur accusamus architecto voluptas necessitatibus, incidunt, corporis iste quae ab debitis eligendi ex temporibus itaque commodi est nisi.</p>
                    </div>
                </div>
        </div>
        <div class="container skill justify-content-md-center align-items-center">
            <h1>SKILL</h1>
        </div>
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
@endsection