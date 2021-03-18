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
							<tr>
								<td>A garota que roubava livros</td>
								<td>Romance</td>
								<td>Brasil</td>
								<td>Sâmara</td>
								<td>A trajetória de Liesel Meminger é contada por uma narradora mórbida, surpreendentemente simpática. Ao perceber que a pequena ladra de livros lhe escapa, a Morte afeiçoa-se à menina e rastreia suas pegadas de 1939 a 1943. Traços de uma sobrevivente: a mãe comunista, perseguida pelo nazismo, envia Liesel e o irmão para o subúrbio pobre de uma cidade alemã, onde um casal se dispõe a adotá-los por dinheiro. O garoto morre no trajeto e é enterrado por um coveiro que deixa cair um livro na neve</td>
								<td><a class="btn btn-success btn-sm" href="{{route('editarlivro')}}" role="button"><i class="fas fa-edit"></i></a>
                                <button type="button" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button></td>
							</tr>
							<tr>
								<td>A garota que roubava livros</td>
								<td>Romance</td>
								<td>Brasil</td>
								<td>Sâmara</td>
								<td>A trajetória de Liesel Meminger é contada por uma narradora mórbida, surpreendentemente simpática. Ao perceber que a pequena ladra de livros lhe escapa, a Morte afeiçoa-se à menina e rastreia suas pegadas de 1939 a 1943. Traços de uma sobrevivente: a mãe comunista, perseguida pelo nazismo, envia Liesel e o irmão para o subúrbio pobre de uma cidade alemã, onde um casal se dispõe a adotá-los por dinheiro. O garoto morre no trajeto e é enterrado por um coveiro que deixa cair um livro na neve</td>
								<td><a class="btn btn-success btn-sm" href="{{route('editarlivro')}}" role="button"><i class="fas fa-edit"></i></a>
                                <button type="button" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>

	</div>
	<!-- /.container-fluid -->

</div>

@endsection