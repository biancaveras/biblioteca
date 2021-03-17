@extends('sitelayout.template')

@section('titulo')
SIB | Funcionários
@endsection

@section('conteudo')

<div class="row">
	<div class="container-fluid">

		<!-- Page Heading -->
		<h1 class="h3 mb-2 text-gray-800">Funcionários</h1>
		<!-- DataTales Example -->
		<div class="card shadow mb-4">
			<div class="card-body">
				<div class="table-responsive">
					<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
						<thead>
							<tr>
								<th>Nome</th>
								<th>Função</th>
								<th>CPF</th>
								<th>Estado</th>
								<th>Cidade</th>
								<th>Logradouro</th>
								<th>Número</th>
								<th>E-mail</th>
								<th>Telefone</th>
							</tr>
						</thead>
						<tfoot>
							<tr>
								<th>Nome</th>
								<th>Função</th>
								<th>CPF</th>
								<th>Estado</th>
								<th>Cidade</th>
								<th>Logradouro</th>
								<th>Número</th>
								<th>E-mail</th>
								<th>Telefone</th>
							</tr>
						</tfoot>
						<tbody>
							<tr>
								<td>Sâmara</td>
								<td>Mesária</td>
								<td>5454554545</td>
								<td>RN</td>
								<td>Jucurutu</td>
								<td>Rua das Flores</td>
								<td>00</td>
								<td>samara@hotmail.com</td>
								<td>99658621</td>
							</tr>
							<tr>
								<td>Bianca</td>
								<td>Dona</td>
								<td>123124231</td>
								<td>RN</td>
								<td>Jucurutu</td>
								<td>Rua das Flores</td>
								<td>00</td>
								<td>bianca@hotmail.com</td>
								<td>99658621</td>
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