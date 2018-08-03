@extends('layouts.app')

@section('content')
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-8 col-md-offset-2 align-items-center justify-content-center my-0 mx-auto">
				<div class="card">
					<div class="card-header">
						Lista de Categorías
						<a href="{{ route('categories.create') }}" class="btn btn-sm btn-primary float-right" >
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
							@foreach ($categories as $category)
								<tr>
									<td>{{ $category->id }}</td>
									<td>{{ $category->name }}</td>
									<td width="10px">
										<a href="{{ route('categories.show', $category->id) }}" class="btn btn-sm btn-secondary float-right" >
										Ver
									</a>
									</td>
									<td width="10px">
										<a href="{{ route('categories.edit', $category->id) }}" class="btn btn-sm btn-secondary float-right" >
										Editar
									</a>
									</td>
									<td width="10px">
										{!! Form::open(['route'=>['categories.destroy', $category->id],
										'method'=>'DELETE']) !!}

											<button class="btn btn-sm btn-danger">Eliminar</button>

										{!! Form::Close() !!}
									</td>
								</tr>
							@endforeach
						</tbody>

					</table>
					{{ $categories->render() }}
				</div>
			</div>
			</div>
		</div>

	</div>
@endsection