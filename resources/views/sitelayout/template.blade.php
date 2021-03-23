<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('titulo', 'SIB')</title>
    <link rel="shortcut icon" href="{{asset('resume/img/icon.png')}}" type="image/x-icon">

    <!-- Custom fonts for this template-->
    <link href="{{asset('resume/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('resume/css/sb-admin-2.min.css')}}" rel="stylesheet">
    <link href="{{asset('resume/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-info sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('emprestimo.index')}}">
               
                <img src="{{asset('resume/img/logo.png')}}" style="width: 70px">
              
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="{{route('emprestimo.index')}}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Início</span></a>
            </li>
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item active">
                <a class="nav-link collapsed" href="index.html" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-user"></i>
                    <span>Clientes</span></a>

                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Clientes</h6>
                        <a class="collapse-item" href="{{route('cliente.index')}}">Index</a>
                        @can('super-user')
                        <a class="collapse-item" href="{{route('cliente.create')}}">Novo Cliente</a>
                        @endcan
                    </div>
                </div>
            </li>
            <hr class="sidebar-divider my-0">
            <li class="nav-item active">
                <a class="nav-link collapsed" href="index.html" data-toggle="collapse" data-target="#collapseTwo1" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="far fa-address-card"></i>
                    <span>Funcionários</span></a>

                <div id="collapseTwo1" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Funcionários</h6>
                        <a class="collapse-item" href="{{route('funcionario.index')}}">Index</a>
                        @can('super-user')
                        <a class="collapse-item" href="{{route('funcionario.create')}}">Novo Funcionário</a>
                        @endcan
                    </div>
                </div>
            </li>
            <hr class="sidebar-divider my-0">
            <li class="nav-item active">
                <a class="nav-link collapsed" href="index.html" data-toggle="collapse" data-target="#collapseTwo2" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-book"></i>
                    <span>Livros</span></a>

                <div id="collapseTwo2" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Livros</h6>
                        <a class="collapse-item" href="{{route('livro.index')}}">Index</a>
                        @can('super-user')
                        <a class="collapse-item" href="{{route('livro.create')}}">Novo Livro</a>
                        @endcan
                    </div>
                </div>
            </li>
            <hr class="sidebar-divider my-0">
            <li class="nav-item active">
                <a class="nav-link collapsed" href="index.html" data-toggle="collapse" data-target="#collapseTwo3" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-clipboard-list"></i>
                    <span>Empréstimos</span></a>

                <div id="collapseTwo3" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Empréstimos</h6>
                        <a class="collapse-item" href="{{route('emprestimo.index')}}">Index</a>
                        @can('super-user')
                        <a class="collapse-item" href="{{route('emprestimo.create')}}">Novo Empréstimo</a>
                        @endcan
                    </div>
                </div>
            </li>
            <hr class="sidebar-divider my-0">
            @if(Auth::check())
            <li class="nav-item active">
                <a class="nav-link" href="#" onclick="document.getElementById('logout').submit(); return false">
                    <i class="fas fa-sign-out-alt"></i>
                    <span>Sair</span></a>
            </li>
            <form action="{{route('logout')}}" method="POST" id="logout">
                @csrf
            </form>
            @endif

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                    </ul>

                </nav>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                	@yield('conteudo')

                </div> 
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Sistema Institucional de Bibliotecas &copy; 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Bootstrap core JavaScript-->
    <script src="{{asset('resume/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('resume/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset('resume/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{asset('resume/js/sb-admin-2.min.js')}}"></script>

    <!-- Page level plugins -->
    <script src="{{asset('resume/vendor/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('resume/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

    <!-- Page level custom scripts -->
    <script src="{{asset('resume/js/demo/datatables-demo.js')}}"></script>

    <!-- Page level plugins -->
    <script src="{{asset('resume/vendor/chart.js/Chart.min.js')}}"></script>

    <!-- Page level custom scripts -->
    <script src="{{asset('resume/js/demo/chart-area-demo.js')}}"></script>
    <script src="{{asset('resume/js/demo/chart-pie-demo.js')}}"></script>



</body>

</html>


	