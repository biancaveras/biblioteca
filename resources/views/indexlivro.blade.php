@extends('sitelayout.template')

@section('titulo')
SIB | Livros
@endsection

@section('conteudo')

<div class="row">
	<div class="container-fluid">

		<!-- Page Heading -->
		<h1 class="h3 mb-2 text-gray-800">Livros</h1>
		<!-- DataTales Example -->
		<div class="card shadow mb-4">
			<div class="card-body">
				<div class="table-responsive">
					<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
						<thead>
							<tr>
								<th>Título</th>
								<th>Gênero</th>
								<th>Nacionalidade</th>
								<th>Autor</th>
								<th>Sinopse</th>
								<th>Opções</th>
							</tr>
						</thead>
						<tfoot>
							<tr>
								<th>Título</th>
								<th>Gênero</th>
								<th>Nacionalidade</th>
								<th>Autor</th>
								<th>Sinopse</th>
								<th>Opções</th>
							</tr>
						</tfoot>
						<tbody>
							@foreach ( $livros as $livro )	
							<tr>							
								<td>{{ $livro->titulo }}</td>
								<td>{{ $livro->genero }}</td>
								<td>{{ $livro->nacionalidade }}</td>
								<td>{{ $livro->autor }}</td>
								<td>{{ $livro->sinopse }}</td>

								<td>
									<button title="Editar" class="btn btn-success btn-sm" onclick="window.location.href='{{route('livro.editar', [$livro->id])}}'"><i class="fas fa-edit"></i></button>
									<form action="{{route('livro.excluir', [$livro->id])}}" method="POST">
										@csrf
										@method('DELETE')
										<button class="btn btn-danger btn-sm" type="submit">
											<i class="fas fa-trash"></i>
										</button>
									</form>
								</td>
							</tr>
							@endforeach

						</tbody>
					</table>
				</div>
			</div>
		</div>

	</div>
	<!-- /.container-fluid -->

</div>

@endsection