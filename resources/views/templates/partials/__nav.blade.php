<div class="container">
    <div class="navbar-translate">
        <div class="navbar-header">
            <a class="navbar-brand" href="/home">KPU USD</a>
        </div>
        <button class="navbar-toggler navbar-burger" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar"></span>
            <span class="navbar-toggler-bar"></span>
            <span class="navbar-toggler-bar"></span>
        </button>
    </div>
    <div class="collapse navbar-collapse">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="javascript:void(0)" data-toggle="dropdown">Kelola Kandidat</a>
                <ul class="dropdown-menu dropdown-menu-right dropdown-danger">
                    <a class="dropdown-item" href="/addcandidate"><i class="nc-icon nc-simple-add"></i>&nbsp; Tambah Kandidat</a>
                    <a class="dropdown-item" href="/candidate"><i class="nc-icon nc-bullet-list-67"></i>&nbsp; Lihat Daftar Kandidat</a>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle"  data-toggle="dropdown" href="javascript:void(0)">Kelola Voting</a>
                <ul class="dropdown-menu dropdown-menu-right dropdown-danger">
                    <a class="dropdown-item" href="/addvoting"><i class="nc-icon nc-simple-add"></i>&nbsp; Tambah Voting</a>
                    <a class="dropdown-item" href="/voting"><i class="nc-icon nc-bullet-list-67"></i>&nbsp; Lihat Daftar Voting</a>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/viewresult" data-scroll="true" href="javascript:void(0)">Lihat Hasil Voting</a>
            </li>
            <li class="nav-item">
                <!-- login modal -->
                <button type="button" class="btn btn-round btn-danger" data-toggle="modal" data-target="#loginModal">
                    <i class="nc-icon nc-lock-circle-open"></i>&nbsp; Login
                </button>
                <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-hidden="false">
                    <div class="modal-dialog modal-register">
                        <div class="modal-content">
                            <div class="modal-header no-border-header text-center">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <h6 class="text-muted">Selamat datang</h6>
                                <h3 class="modal-title text-center">KPU USD</h3>
                                <p>Silahkan Login</p>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label>NIM</label>
                                    <input type="text" value="" placeholder="NIM" class="form-control" />
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" value="" placeholder="Password" class="form-control" />
                                </div>
                                <button class="btn btn-block btn-round btn-danger"> Log in</button>
                            </div>
                            <div class="modal-footer no-border-footer">
                                <span class="text-muted  text-center">Belum mendaftar? <a href="/register">Daftar disini</a></span>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</div>