@extends('sitelayout.template')

@section('titulo')
SIB | Novo Funcionário
@endsection

@section('conteudo')

<div class="row">
	<div class="container-fluid">

		<!-- Page Heading -->
		<div class="d-sm-flex align-items-center justify-content-between mb-4">
			<h1 class="h3 mb-0 text-gray-800">Novo Funcionário</h1>
		</div>

		<div class="row">

			<!-- Area Chart -->
			<div class="col-xl-12 col-lg-12">
				<div class="card shadow mb-4">
					<div class="card-body">
						<form>
							<div class="row">
								<div class="col-md-5">
									<div class="form-group">
										<label class="bmd-label-floating">Nome</label>
										<input type="text" placeholder="Digite o nome" class="form-control">
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label class="bmd-label-floating">CPF</label>
										<input type="text" placeholder="Digite o cpf" class="form-control">
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<label class="bmd-label-floating">Estado</label>
										<input type="text" placeholder="Digite o estado" class="form-control">
									</div>
								</div>
								<div class="col-md-5">
									<div class="form-group">
										<label class="bmd-label-floating">Logradouro</label>
										<input type="text" placeholder="Digite o logradouro" class="form-control">
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label class="bmd-label-floating">Cidade</label>
										<input type="text" placeholder="Digite a cidade" class="form-control">
									</div>
								</div>
								
								<div class="col-md-3">
									<div class="form-group">
										<label class="bmd-label-floating">Número</label>
										<input type="text" placeholder="Digite o número"  class="form-control">
									</div>
								</div>
								<div class="col-md-5">
									<div class="form-group">
										<label class="bmd-label-floating">E-mail</label>
										<input type="text" placeholder="Digite o e-mail" class="form-control">
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label class="bmd-label-floating">Telefone</label>
										<input type="text" placeholder="Digite o telefone" class="form-control">
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<label class="bmd-label-floating">Função</label>
										<input type="text" placeholder="Digite a função" class="form-control">
									</div>
								</div>
							</div>
							<a class="btn btn-secondary" href="{{route('indexfuncionario')}}" role="button">Adicionar</a>
						</form>
					</div>
				</div>
			</div>

		</div>
	</div>
	<!-- /.container-fluid -->
</div>

@endsection