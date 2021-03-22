@extends('sitelayout.template')

@section('titulo')
SIB | Editar Livro
@endsection

@section('conteudo')

<div class="row">
	<div class="container-fluid">

		<!-- Page Heading -->
		<div class="d-sm-flex align-items-center justify-content-between mb-4">
			<h1 class="h3 mb-0 text-gray-800">Editar Livro</h1>
		</div>

		<div class="row">

			<!-- Area Chart -->
			<div class="col-xl-12 col-lg-12">
				<div class="card shadow mb-4">
					<div class="card-body">
						<form method="POST" action="{{route('livro.update', [$livro->id])}}">
							@method('PUT')
							@csrf
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label class="bmd-label-floating">Título</label>
										<input type="text" required="required" name="titulo" value="{{$livro->titulo}}" placeholder="Digite o livro" class="form-control">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="bmd-label-floating">Gênero</label>
										<input type="text" required="required" name="genero" value="{{$livro->genero}}" placeholder="Digite o gênero" class="form-control">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="bmd-label-floating">Nacionalidade</label>
										<input type="text" required="required" name="nacionalidade" value="{{$livro->nacionalidade}}" placeholder="Digite a nacionalidade" class="form-control">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="bmd-label-floating">Autor</label>
										<input type="text" required="required" name="autor" value="{{$livro->autor}}" placeholder="Digite o autor(a)" class="form-control">
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<label class="bmd-label-floating">Sinopse</label>
										<textarea type="text" required="required" name="sinopse" placeholder="Digite a sinopse" class="form-control">{{$livro->sinopse}}
										</textarea>
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