@extends('layouts.app')
@section('content')
    <div class="container justify-content-md-center align-items-center">
        <div class="col-md-8 col-md-offset-2 align-items-center justify-content-center my-0 mx-auto">
        <h1>Lista de articulos </h1>
        @foreach($posts as $post)
            <div class="card panel-default">
                <div class="card-heading">
                <h5 class="ml-3 pt-2">{{ $post->name }}</h5>
                </div>

                <div class="card-body">
                    @if($post->file)
                        <img src="{{ $post->file }}" alt="" class="img-fluid">
                    @endif
                    {{ $post->excerpt }}
                    <a href="{{ route('post', $post->slug) }} " class="pull-right">Leer mas</a>
                </div>
            </div>
        @endforeach
        {{ $posts->render() }}
        </div>
    </div>
@endsection