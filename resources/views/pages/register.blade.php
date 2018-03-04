<!doctype html>
<html lang="en">
    @include('templates.partials._header')
    <body class="full-screen register" >
        @include('templates.partials._nav-index')
        <div class="wrapper">
            <div class="page-header" style="background-image: url('assets/img/bg.jpg');">
                <div class="filter"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-7 ml-auto">
                            <div class="info info-horizontal" style="margin-top: -60px">
                                <div class="icon">
                                    <i class="fa fa-umbrella"></i>
                                </div>
                                <div class="description">
                                    <h3> Langsung </h3>
                                    <p>Pemilih yang terdaftar wajib memilih secara langsung tanpa diwakilkan kepada siapapun.</p>
                                </div>
                            </div>
                            <div class="info info-horizontal" style="margin-top: -60px">
                                <div class="icon">
                                    <i class="fa fa-map-signs"></i>
                                </div>
                                <div class="description">
                                    <h3> Umum </h3>
                                    <p>Pemilih yang terdaftar yang telah memenuhi syarat usia ( yang telah berumur 17 tahun ke atas) dapat menggunakan hak suaranya tanpa adanya pengecualian yaitu hak aktif dan hak pasif.</p>
                                </div>
                            </div>
                            <div class="info info-horizontal" style="margin-top: -60px">
                                <div class="icon">
                                    <i class="fa fa-user-secret"></i>
                                </div>
                                <div class="description">
                                    <h3> Bebas </h3>
                                    <p>Bebas berarti pemilih memiliki kebebasan untuk menggunakan hak suaranya sesuai hati nuraninya tanpa adanya paksaan dari pihak manapun </p>
                                </div>
                            </div>
                            <div class="info info-horizontal" style="margin-top: -60px">
                                <div class="icon">
                                    <i class="fa fa-user-secret"></i>
                                </div>
                                <div class="description">
                                    <h3> Rahasia </h3>
                                    <p>Pemilih pada saat memilih dan menggunakan hak suaranya dipastikan tidak akan diketahui oleh orang lain atas apa yang telah dipilihnya.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 col-sm-5 col-12 mr-auto">
                            <div class="card card-register">
                                <h3 class="card-title text-center">Daftar</h3>

                                <div class="division"></div>
                                <form class="register-form">
                                    <input type="text" class="form-control" placeholder="Email">

                                    <input type="password" class="form-control" placeholder="Password">

                                    <input type="password" class="form-control" placeholder="Confirm Password">

                                    <button class="btn btn-block btn-round">Register</button>
                                </form>
                                <div class="login">
                                    <p>Sudah punya akun? <a href="#0" data-toggle="modal" data-target="#loginModal">Log in</a>.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="demo-footer text-center">
                    <h6>&copy; <script>document.write(new Date().getFullYear())</script>, made with <i class="fa fa-heart heart"></i> by Creative Tim</h6>
                </div>
            </div>
        </div>

    </body>

    <!-- Core JS Files -->
    <script src="../assets/js/jquery-3.2.1.min.js" type="text/javascript"></script>
    <script src="../assets/js/jquery-ui-1.12.1.custom.min.js" type="text/javascript"></script>
    <script src="../assets/js/popper.js" type="text/javascript"></script>
    <script src="../assets/js/bootstrap.min.js" type="text/javascript"></script>

    <!--  Plugins for Select -->
    <script src="../assets/js/bootstrap-select.js"></script>

    <!--  Plugins for DateTimePicker -->
    <script src="../assets/js/moment.min.js"></script>
    <script src="../assets/js/bootstrap-datetimepicker.min.js"></script>

    <!-- Control Center for Paper Kit: parallax effects, scripts for the example pages etc -->
    <script src="../assets/js/paper-kit.js?v=2.1.0"></script>
</html>
