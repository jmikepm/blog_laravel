@extends('layouts.app')
@section('content')
    <div class="container justify-content-md-center align-items-center pb-6">
        <div class="col-md-8 col-md-offset-2 align-items-center justify-content-center my-0 mx-auto">
            <hr>
        <h1 class="my-0 mx-auto text-center">Bienvenidos </h1>
        </div>
        <div class="container">
            
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
        
        
         
        <div class="row my-5">
            @foreach($posts as $post)
            <div class="col-md-4 d-inline">
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