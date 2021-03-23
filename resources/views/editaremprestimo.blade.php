@extends('sitelayout.template')

@section('titulo')
SIB | Editar Empréstimo
@endsection

@section('conteudo')

<div class="row">
	<div class="container-fluid">

		<!-- Page Heading -->
		<div class="d-sm-flex align-items-center justify-content-between mb-4">
			<h1 class="h3 mb-0 text-gray-800">Editar Empréstimo</h1>
		</div>

		<div class="row">

			<!-- Area Chart -->
			<div class="col-xl-12 col-lg-12">
				<div class="card shadow mb-4">
					<div class="card-body">
						<form method="POST" action="{{route('emprestimo.update', [$emprestimo->id])}}">
							@method('PUT')
							@csrf
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label for="cliente">Cliente</label>
										<select name="cliente_id" class="form-control browser-default custom-select" required id="cliente">
											@foreach ($clientes as $cliente)
											<option value="{{$cliente->id}}" 
												<?php 
												if($cliente->id==$emprestimo->cliente->id){
													echo "selected='selected'";
												}
												?>
												>
												{{$cliente->nome}}
											</option>
											@endforeach

										</select>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="fun">Funcionário</label>
										<select name="funcionario_id" class="form-control browser-default custom-select" required id="fun">
											@foreach ($funcionarios as $funcionario)
											<option value="{{$funcionario->id}}"
												<?php 
												if($funcionario->id==$emprestimo->funcionario->id){
													echo "selected='selected'";
												}
												?>
												>
												{{$funcionario->nome}}
											</option>
											@endforeach

										</select>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="livro">Livro</label>
										<select name="livro_id" class="form-control browser-default custom-select" required id="livro">
											@foreach ($livros as $livro)
											<option value="{{$livro->id}}"
												<?php 
												if($livro->id==$emprestimo->livro->id){
													echo "selected='selected'";
												}
												?>
												>
												{{$livro->titulo}}
											</option>
											@endforeach

										</select>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="bmd-label-floating">Data de empréstimo</label>
										<input required="required" value="{{$emprestimo->dt_inicio}}" name="dt_inicio" type="date" class="form-control">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="bmd-label-floating">Data de devolução</label>
										<input required="required" value="{{$emprestimo->dt_fim}}" name="dt_fim" type="date" class="form-control">
									</div>
								</div>
							</div>
							<input type="submit" value="Salvar" class="btn btn-secondary">
						</form>
					</div>
				</div>
			</div>

		</div>
	</div>
	<!-- /.container-fluid -->
</div>

@endsection