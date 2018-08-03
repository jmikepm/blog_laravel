@extends('layouts.app')

@section('content')
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-8 col-md-offset-2 align-items-center justify-content-center my-0 mx-auto">
				<div class="card">
					<div class="card-header">
						Lista de Entradas
						<a href="{{ route('posts.create') }}" class="btn btn-sm btn-primary float-right" >
						Crear
						</a>
					</div>

				<div class="card-body">
					<table class="table table-striped table-hover">
						<thead>
							<tr>
								<th width="10px">Id</th>
								<th>Nombre</th>
								<th colspan="3">&nbsp;</th>
							</tr>
						</thead>
						<tbody>
							@foreach ($posts as $post)
								<tr>
									<td>{{ $post->id }}</td>
									<td>{{ $post->name }}</td>
									<td width="10px">
										<a href="{{ route('posts.show', $post->id) }}" class="btn btn-sm btn-secondary float-right" >
										Ver
									</a>
									</td>
									<td width="10px">
										<a href="{{ route('posts.edit', $post->id) }}" class="btn btn-sm btn-secondary float-right" >
										Editar
									</a>
									</td>
									<td width="10px">
										{!! Form::open(['route'=>['posts.destroy', $post->id],
										'method'=>'DELETE']) !!}

											<button class="btn btn-sm btn-danger">Eliminar</button>

										{!! Form::Close() !!}
									</td>
								</tr>
							@endforeach
						</tbody>

					</table>
					{{ $posts->render() }}
				</div>
			</div>
			</div>
		</div>

	</div>
@endsection