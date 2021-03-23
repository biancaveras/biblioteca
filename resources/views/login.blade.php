<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SIB | Login</title>
    <link rel="shortcut icon" href="{{asset('resume/img/icon.png')}}" type="image/x-icon">

    <!-- Custom fonts for this template-->
    <link href="{{asset('resume/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('resume/css/sb-admin-2.css')}}" rel="stylesheet">

</head>

<body class="bg-gradient-info">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">SIB Login</h1>
                                    </div>
                                    <form class="user" action="{{url('/login')}}" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-user"
                                            id="exampleInputEmail" required="required" name="email" aria-describedby="emailHelp"
                                            placeholder="Digite seu e-mail">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                            id="exampleInputPassword" required="required" name="password" placeholder="Senha">
                                        </div>
                                        <button type="submit" class="btn btn-info btn-user btn-block">
                                            Login
                                        </button>
                                        <hr>
                                        <div class="text-center">
                                            <a class="small" href="{{url('/register')}}">Registrar novo usuário</a>
                                        </div>
                                        <!--
                                        <div class="text-center">
                                            <a class="small" href="{{route('password.request')}}">Esqueceu a senha?</a>
                                        </div>
                                    -->
                                    
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>

<!-- Bootstrap core JavaScript-->
<script src="{{asset('resume/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('resume/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

<!-- Core plugin JavaScript-->
<script src="{{asset('resume/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

<!-- Custom scripts for all pages-->
<script src="{{asset('resume/js/sb-admin-2.min.js')}}"></script>

</body>

</html>