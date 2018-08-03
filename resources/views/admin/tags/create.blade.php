@extends('layouts.app')

@section('content')
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-8 col-md-offset-2 align-items-center justify-content-center my-0 mx-auto">
				<div class="card">
					<div class="card-header">
						Crear Etiquetas
					</div>

				<div class="card-body">
					
					{!! Form::open(['route'=> 'tags.store']) !!}
						@include('admin.tags.partials.form')
					{!! Form::close() !!}

				</div>
			</div>
			</div>
		</div>

	</div>
@endsection