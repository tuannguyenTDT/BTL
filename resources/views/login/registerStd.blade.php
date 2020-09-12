<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Register</title>

    <!-- Custom fonts for this template-->
    <link href="{{asset('templates/admin/vendor/fontawesome-free/css/all.min.css')}} " rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('templates/admin/css/sb-admin-2.min.css')}} " rel="stylesheet">

</head>

<body class="bg-gradient-primary">

<div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                <div class="col-lg-7">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Tạo tài khoản sinh viên!</h1>
                        </div>
                        <form class="user" action="{{route('login.registerStdPost')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="Họ và tên" name="name">
                                </div>
                                <div class="col-sm-6">
                                    <input type="email" class="form-control form-control-user" id="exampleLastName" placeholder="Email" name="email">
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" id="exampleInputEmail" placeholder="Địa chỉ" name="address">
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password" name="password">
                                </div>
                                <div class="col-sm-6">
                                    <input type="password" class="form-control form-control-user" id="exampleRepeatPassword" placeholder="Repeat Password" name="repeatPassword">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Giới tính</label>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="sex" id="inlineRadio1" value="Nam">
                                    <label class="form-check-label" for="inlineRadio1">Nam</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="sex" id="inlineRadio2" value="Nữ">
                                    <label class="form-check-label" for="inlineRadio2">Nữ</label>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-3 col-form-label">Ngày sinh</label>
                                <div class="col-sm-5">
                                    <input type="date" class="form-control" id="inputEmail3" placeholder="Ngày sinh" name="birthday">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="number" class="form-control form-control-user"  placeholder="Số điện thoại" name="phoneNum">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Link Cv</label>
                                <div class="col-sm-6">
                                    <input type="file" class="form-control form-control-file"  placeholder="Tải lên Cv" name="linkCv">
                                </div>
                            </div>

                            <input type="submit" class="btn btn-primary btn-user btn-block" value="Đăng ký" >
                            <hr>
                            <a href="index.html" class="btn btn-google btn-user btn-block">
                                <i class="fab fa-google fa-fw"></i> Register with Google
                            </a>
                            <a href="index.html" class="btn btn-facebook btn-user btn-block">
                                <i class="fab fa-facebook-f fa-fw"></i> Register with Facebook
                            </a>
                        </form>
                        <hr>
                        <div class="text-center">
                            <a class="small" href="{{route('login.index')}}">Đã có tài khoản. Trở lại trang đăng nhập!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<!-- Bootstrap core JavaScript-->
<script src="{{asset('templates/admin/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('templates/admin/vendor/bootstrap/js/bootstrap.bundle.min.js')}} "></script>

<!-- Core plugin JavaScript-->
<script src="{{asset('templates/admin/vendor/jquery-easing/jquery.easing.min.js')}} "></script>

<!-- Custom scripts for all pages-->
<script src="{{asset('templates/admin/js/sb-admin-2.min.js')}}"></script>

</body>

</html>
