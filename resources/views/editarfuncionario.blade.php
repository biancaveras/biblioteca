@extends('sitelayout.template')

@section('titulo')
SIB | Editar Funcionário
@endsection

@section('conteudo')

<div class="row">
	<div class="container-fluid">

		<!-- Page Heading -->
		<div class="d-sm-flex align-items-center justify-content-between mb-4">
			<h1 class="h3 mb-0 text-gray-800">Editar Funcionário</h1>
		</div>

		<div class="row">

			<!-- Area Chart -->
			<div class="col-xl-12 col-lg-12">
				<div class="card shadow mb-4">
					<div class="card-body">
						<form method="POST" action="{{route('funcionario.update', [$funcionario->id])}}">
							@method('PUT')
							@csrf
							<div class="row">
								<div class="col-md-5">
									<div class="form-group">
										<label class="bmd-label-floating">Nome</label>
										<input type="text" value="{{$funcionario->nome}}" required="required" name="nome" placeholder="Digite o nome" class="form-control">
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label class="bmd-label-floating">CPF</label>
										<input type="text" value="{{$funcionario->cpf}}" required="required" name="cpf" placeholder="Digite o cpf" class="form-control">
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<label class="bmd-label-floating">Estado</label>
										<input type="text" value="{{$funcionario->estado}}" required="required" name="estado" placeholder="Digite o estado" class="form-control">
									</div>
								</div>
								<div class="col-md-5">
									<div class="form-group">
										<label class="bmd-label-floating">Logradouro</label>
										<input type="text" value="{{$funcionario->logradouro}}" required="required" name="logradouro" placeholder="Digite o logradouro" class="form-control">
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label class="bmd-label-floating">Cidade</label>
										<input type="text" value="{{$funcionario->cidade}}" required="required" name="cidade" placeholder="Digite a cidade" class="form-control">
									</div>
								</div>
								
								<div class="col-md-3">
									<div class="form-group">
										<label class="bmd-label-floating">Número</label>
										<input type="number" value="{{$funcionario->numero}}" required="required" name="numero" placeholder="Digite o número"  class="form-control">
									</div>
								</div>
								<div class="col-md-5">
									<div class="form-group">
										<label class="bmd-label-floating">E-mail</label>
										<input type="email" value="{{$funcionario->email}}" required="required" name="email" placeholder="Digite o e-mail" class="form-control">
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label class="bmd-label-floating">Telefone</label>
										<input type="text" value="{{$funcionario->telefone}}" required="required" name="telefone" placeholder="Digite o telefone" class="form-control">
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<label class="bmd-label-floating">Função</label>
										<input type="text" value="{{$funcionario->funcao}}" required="required" name="funcao" placeholder="Digite a função" class="form-control">
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