<!doctype html>
<html lang="en">
    @include('templates.partials._header')
    <body class="full-screen login">
        <nav class="navbar navbar-expand-lg fixed-top navbar-transparent nav-down" color-on-scroll="500">
            <div class="container">
                <div class="navbar-translate">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="/home">KPU USD</a>
                    </div>
                </div>
            </div>
        </nav>
        <div class="wrapper">
            <div class="page-header" style="background-image: url('../assets/img/sections/bruno-abatti.jpg');">
                <div class="filter"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-sm-6 ml-auto mr-auto">
                            <div class="card card-register">
                                <h3 class="card-title">Silahkan login</h3>
                                <form class="register-form">
                                    <label>Email</label>
                                    <input type="email" class="form-control no-border" placeholder="Email">

                                    <label>Password</label>
                                    <input type="password" class="form-control no-border" placeholder="Password">
                                    <button class="btn btn-danger btn-block btn-round">Login</button>
                                </form>
                                <div class="forgot">
                                    <a href="#paper-kit" class="btn btn-link btn-danger">Lupa password?</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="demo-footer text-center">
                        <h6>&copy; <script>document.write(new Date().getFullYear())</script>, made with <i class="fa fa-heart heart"></i> by Creative Tim</h6>
                    </div>
                </div>
            </div>
        </div>

    </body>

    <!-- Core JS Files -->
    <script src="../assets/js/jquery-3.2.1.min.js" type="text/javascript"></script>
    <script src="../assets/js/jquery-ui-1.12.1.custom.min.js" type="text/javascript"></script>
    <script src="../assets/js/popper.js" type="text/javascript"></script>
    <script src="../assets/js/bootstrap.min.js" type="text/javascript"></script>

    <!-- Control Center for Paper Kit: parallax effects, scripts for the example pages etc -->
    <script src="../assets/js/paper-kit.js?v=2.1.0"></script>

</html>
