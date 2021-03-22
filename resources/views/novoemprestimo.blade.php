@extends('sitelayout.template')

@section('titulo')
SIB | Novo Empréstimo
@endsection

@section('conteudo')

<div class="row">
	<div class="container-fluid">

		<!-- Page Heading -->
		<div class="d-sm-flex align-items-center justify-content-between mb-4">
			<h1 class="h3 mb-0 text-gray-800">Novo Empréstimo</h1>
		</div>

		<div class="row">

			<!-- Area Chart -->
			<div class="col-xl-12 col-lg-12">
				<div class="card shadow mb-4">
					<div class="card-body">
						<form action="{{route('emprestimo.salvar')}}" method="POST">
							@csrf
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label for="cliente">Cliente</label>
										<select name="cliente" class="form-control browser-default custom-select" required id="cliente">
											@foreach ($clientes as $cliente)
											<option value="{{$cliente->id}}">{{$cliente->nome}}</option>
											@endforeach

										</select>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="fun">Funcionário</label>
										<select name="funcionario" class="form-control browser-default custom-select" required id="fun">
											@foreach ($funcionarios as $funcionario)
											<option value="{{$funcionario->id}}">{{$funcionario->nome}}</option>
											@endforeach

										</select>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="livro">Livro</label>
										<select name="livro" class="form-control browser-default custom-select" required id="livro">
											@foreach ($livros as $livro)
											<option value="{{$livro->id}}">{{$livro->titulo}}</option>
											@endforeach

										</select>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="bmd-label-floating">Data de empréstimo</label>
										<input required="required" name="dt_inicio" type="date" class="form-control">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="bmd-label-floating">Data de devolução</label>
										<input required="required" name="dt_fim" type="date" class="form-control">
									</div>
								</div>
							</div>
							<button class="btn btn-secondary">Adicionar</button>
						</form>
					</div>
				</div>
			</div>

		</div>
	</div>
	<!-- /.container-fluid -->
</div>

@endsection