@extends('sitelayout.template')

@section('titulo')
SIB | Editar Cliente
@endsection

@section('conteudo')

<div class="row">
	<div class="container-fluid">

		<!-- Page Heading -->
		<div class="d-sm-flex align-items-center justify-content-between mb-4">
			<h1 class="h3 mb-0 text-gray-800">Editar Cliente</h1>
		</div>

		<div class="row">

			<!-- Area Chart -->
			<div class="col-xl-12 col-lg-12">
				<div class="card shadow mb-4">
					<div class="card-body">
						<form method="POST" action="{{route('cliente.update', [$cliente->id])}}">
							@method('PUT')
							@csrf
							<div class="row">
								<div class="col-md-5">
									<div class="form-group">
										<label class="bmd-label-floating">Nome</label>
										<input type="text" name="nome" value="{{$cliente->nome}}" required="required" placeholder="Digite o nome" class="form-control">
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label class="bmd-label-floating">CPF</label>
										<input type="text" name="cpf" value="{{$cliente->cpf}}" required="required" placeholder="Digite o cpf" class="form-control">
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<label class="bmd-label-floating">Estado</label>
										<input type="text" name="estado" value="{{$cliente->estado}}" required="required" placeholder="Digite o estado" class="form-control">
									</div>
								</div>
								<div class="col-md-5">
									<div class="form-group">
										<label class="bmd-label-floating">Logradouro</label>
										<input type="text" name="logradouro" value="{{$cliente->logradouro}}" required="required" placeholder="Digite o logradouro" class="form-control">
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label class="bmd-label-floating">Cidade</label>
										<input type="text" name="cidade" value="{{$cliente->cidade}}" required="required" placeholder="Digite a cidade" class="form-control">
									</div>
								</div>
								
								<div class="col-md-3">
									<div class="form-group">
										<label class="bmd-label-floating">Número</label>
										<input type="number" name="numero" value="{{$cliente->numero}}" required="required"placeholder="Digite o número"  class="form-control">
									</div>
								</div>
								<div class="col-md-5">
									<div class="form-group">
										<label class="bmd-label-floating">E-mail</label>
										<input type="email" name="email" value="{{$cliente->email}}" required="required" placeholder="Digite o e-mail" class="form-control">
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label class="bmd-label-floating">Telefone</label>
										<input type="text" name="telefone" value="{{$cliente->telefone}}" required="required" placeholder="Digite o telefone" class="form-control">
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