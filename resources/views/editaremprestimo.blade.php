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
						<form>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label class="bmd-label-floating">Cliente</label>
										<input type="text"  class="form-control">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="bmd-label-floating">Funcionário</label>
										<input type="text" class="form-control">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="bmd-label-floating">Livro</label>
										<input type="text" class="form-control">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="bmd-label-floating">Data de empréstimo</label>
										<input type="date" class="form-control">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="bmd-label-floating">Data de devolução</label>
										<input type="date" class="form-control">
									</div>
								</div>
							</div>
							<a class="btn btn-secondary" href="{{route('inicio')}}" role="button">Salvar</a>
						</form>
					</div>
				</div>
			</div>

		</div>
	</div>
	<!-- /.container-fluid -->
</div>

@endsection