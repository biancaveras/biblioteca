@extends('sitelayout.template')

@section('titulo')
SIB | Início
@endsection

@section('conteudo')

<div class="row">

	<!-- card1 -->
	<div class="col-xl-4 col-md-6 mb-4 " >
		<div class="card border-left-info shadow h-100 py-2">
			<div class="card-body">
				<div class="row no-gutters align-items-center">
					<a href="{{route('novoemprestimo')}}"> 
						<div class="col mr-2">
							<div class="row no-gutters align-items-center">
								<div class="col-auto">
									<div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><i class="fas fa-clipboard-list"></i> 
									Adicionar um empréstimo  </div>
								</div>
							</div>
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>
	<!-- card2 -->
	<div class="col-xl-4 col-md-6 mb-4 " >
		<div class="card border-left-info shadow h-100 py-2">
			<div class="card-body">
				<div class="row no-gutters align-items-center">
					<a href="{{route('novolivro')}}"> 
						<div class="col mr-2">
							<div class="row no-gutters align-items-center">
								<div class="col-auto">
									<div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><i class="fas fa-book"></i> 
									Adicionar um livro  </div>
								</div>
							</div>
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>
	<!-- card3 -->
	<div class="col-xl-4 col-md-6 mb-4 " >
		<div class="card border-left-info shadow h-100 py-2">
			<div class="card-body">
				<div class="row no-gutters align-items-center">
					<a href="{{route('novocliente')}}"> 
						<div class="col mr-2">
							<div class="row no-gutters align-items-center">
								<div class="col-auto">
									<div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><i class="fas fa-user"></i> 
									Adicionar um cliente </div>
								</div>
							</div>
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>

	<div class="container-fluid">

		<!-- Page Heading -->
		<h1 class="h3 mb-2 text-gray-800">Empréstimos</h1>
		<!-- DataTales Example -->
		<div class="card shadow mb-4">
			<div class="card-body">
				<div class="table-responsive">
					<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
						<thead>
							<tr>
								<th>Cliente</th>
								<th>Funcionário</th>
								<th>Livro</th>
								<th>Data de empréstimo</th>
								<th>Data de devolução</th>
								<th>Opções</th>
							</tr>
						</thead>
						<tfoot>
							<tr>
								<th>Cliente</th>
								<th>Funcionário</th>
								<th>Livro</th>
								<th>Data de empréstimo</th>
								<th>Data de devolução</th>
								<th>Opções</th>
							</tr>
						</tfoot>
						<tbody>
							<tr>
								<td>Sâmara</td>
								<td>Bianca</td>
								<td>Ela</td>
								<td>2011/03/01</td>
								<td>2011/04/25</td>
								<td><a class="btn btn-success btn-sm" href="{{route('editaremprestimo')}}" role="button"><i class="fas fa-edit"></i></a>
                                <button type="button" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button></td>
							</tr>
							<tr>
								<td>Adrian</td>
								<td>Bianca</td>
								<td>Tokyo</td>
								<td>2011/03/01</td>
								<td>2011/07/25</td>
								<td><a class="btn btn-success btn-sm" href="{{route('editaremprestimo')}}" role="button"><i class="fas fa-edit"></i></a>
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