@extends('sitelayout.template')

@section('titulo')
SIB | Clientes
@endsection

@section('conteudo')

<div class="row">
	<div class="container-fluid">

		<!-- Page Heading -->
		<h1 class="h3 mb-2 text-gray-800">Clientes</h1>
		<!-- DataTales Example -->
		<div class="card shadow mb-4">
			<div class="card-body">
				<div class="table-responsive">
					<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
						<thead>
							<tr>
								<th>Nome</th>
								<th>CPF</th>
								<th>Endereço</th>
								<th>E-mail</th>
								<th>Telefone</th>
								<th>Opções</th>
							</tr>
						</thead>
						<tfoot>
							<tr>
								<th>Nome</th>
								<th>CPF</th>
								<th>Endereço</th>
								<th>E-mail</th>
								<th>Telefone</th>
								<th>Opções</th>
							</tr>
						</tfoot>
						<tbody>
							@foreach ( $clientes as $cliente )	
							<tr>							
								<td>{{ $cliente->nome }}</td>
								<td>{{ $cliente->cpf }}</td>
								<td>{{ $cliente->logradouro }}, {{ $cliente->numero }}. {{ $cliente->cidade }}/{{ $cliente->estado }}</td>
								<td>{{ $cliente->email }}</td>
								<td>{{ $cliente->telefone }}</td>
								
								<td>
									<button title="Editar" class="btn btn-success btn-sm" onclick="window.location.href='{{route('cliente.editar', [$cliente->id])}}'"><i class="fas fa-edit"></i></button>
									<form action="{{route('cliente.excluir', [$cliente->id])}}" method="POST">
										@csrf
										@method('DELETE')
										<button class="btn btn-danger btn-sm" type="submit"><i class="fas fa-trash"></i></button>
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