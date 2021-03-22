@extends('sitelayout.template')

@section('titulo')
SIB | Novo Livro
@endsection

@section('conteudo')

<div class="row">
	<div class="container-fluid">

		<!-- Page Heading -->
		<div class="d-sm-flex align-items-center justify-content-between mb-4">
			<h1 class="h3 mb-0 text-gray-800">Novo Livro</h1>
		</div>

		<div class="row">

			<!-- Area Chart -->
			<div class="col-xl-12 col-lg-12">
				<div class="card shadow mb-4">
					<div class="card-body">
						<form action="{{route('livro.salvar')}}" method="POST">
							@csrf
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label class="bmd-label-floating">Título</label>
										<input type="text" name="titulo" required="required" placeholder="Digite o livro" class="form-control">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="bmd-label-floating">Gênero</label>
										<input type="text" name="genero" required="required" placeholder="Digite o gênero" class="form-control">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="bmd-label-floating">Nacionalidade</label>
										<input type="text" name="nacionalidade" required="required" placeholder="Digite a nacionalidade" class="form-control">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="bmd-label-floating">Autor</label>
										<input type="text" name="autor" required="required" placeholder="Digite o autor(a)" class="form-control">
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<label class="bmd-label-floating">Sinopse</label>
										<textarea type="text" name="sinopse" required="required" placeholder="Digite a sinopse" class="form-control"> </textarea>
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