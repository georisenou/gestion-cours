<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Directeur - Login</title>

    <!-- Custom fonts for this template-->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    @vite(['resources/css/sb-admin-2.min.css', 'resources/vendor/fontawesome-free/css/all.min.css','resources/vendor/jquery/jquery.min.js', 'resources/vendor/bootstrap/js/bootstrap.bundle.min.js', 'resources/vendor/jquery-easing/jquery.easing.min.js', 'resources/js/sb-admin-2.min.js', 'resources/vendor/chart.js/Chart.min.js', 'resources/js/demo/chart-area-demo.js', 'resources/js/demo/chart-pie-demo.js'])

</head>

<body class="bg-gradient-primary">
    <div class="container" style="margin-top: 90px;">
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
                                        <h1 class="h4 text-gray-900 mb-4">Bienvenu!!!!!</h1>
                                    </div>
                                    <form action="{{route('login-directeurs')}}" method="post" class="user">
                                        @csrf
                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-user" name="email" id="email" aria-describedby="emailHelp" placeholder="Enter votre adresse email">
                                            @if ($errors->has('email'))
                                            <p class="text-danger">{{$errors->first('email')}}</p>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user" name="password" id="password" placeholder="Password">
                                            @if ($errors->has('password'))
                                            <p class="text-danger">{{$errors->first('password')}}</p>
                                            @endif
                                        </div>
                                        @if ($message = Session::get('echec'))
                                        <p class="text-danger">{{$message}}</p>
                                        @endif
                                        <button type="submit" class="btn btn-primary btn-user btn-block">
                                            Login
                                        </button>
                                        <hr>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>