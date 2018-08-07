@extends('layouts.app')
@section('content')
    <div class="container justify-content-md-center align-items-center">
        <div class="col-md-8 col-md-offset-2 align-items-center justify-content-center my-0 mx-auto">
        <h1 class="ml-3 pt-2">{{ $post->name }}</h1>
        
            <div class="card panel-default">
                <div class="card-heading ml-3 pt-2">
                Categoria
                <a href="{{ route('category', $post->category->slug ) }}">{{ $post->category->name }}</a>
                </div>
                <hr>
                <div class="card-body">
                    @if($post->file)
                        <img src="{{ $post->file }}" alt="" class="img-fluid">
                    @endif
                    {{ $post->excerpt }}
                   <hr>
                   {!! $post->body !!}
                   <hr>
                   Etiquetas
                   @foreach($post->tags as $tag)
                    <a href="{{ route('tag', $tag->slug ) }}">
                        {{ $tag->name }}
                    </a>
                   @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection