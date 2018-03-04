<!doctype html>
<html lang="en">
    @include('templates.partials._header')
    <body class="add-product">
        @include('templates.partials._nav-section')
        <div class="wrapper">
            <div class="main">
                <div class="section">
                    <div class="container">
                        <h3>Tambah Kandidat</h3>
                        <form>
                            <div class="row">
                                <div class="col-md-5 col-sm-5">
                                    <h6>Foto</h6>
                                    <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                        <div class="fileinput-new thumbnail img-no-padding" style="max-width: 370px; max-height: 250px;">
                                            <img src="../assets/img/image_placeholder.jpg" alt="...">
                                        </div>
                                        <div class="fileinput-preview fileinput-exists thumbnail img-no-padding" style="max-width: 370px; max-height: 250px;"></div>
                                        <div>
                                            <span class="btn btn-outline-default btn-round btn-file"><span class="fileinput-new">Pilih Foto</span><span class="fileinput-exists">Change</span><input type="file" name="..."></span>
                                            <a href="#paper-kit" class="btn btn-link btn-danger fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-7 col-sm-7">
                                    <div class="form-group">
                                        <h6>Nama <span class="icon-danger">*</span></h6>
                                        <input type="text" class="form-control border-input" required="true" placeholder="Nama Kandidat">
                                    </div>
                                    <div class="form-group">
                                        <h6>Angkatan <span class="icon-danger">*</span></h6>
                                        <input type="text" class="form-control border-input" required="true" placeholder="Angkatan">
                                    </div>
                                    <div class="form-group">
                                        <h6>Program Studi <span class="icon-danger">*</span></h6>
                                        <select name="program_studi" class="selectpicker" data-size="10" data-width="auto" data-style="btn btn-outline-default btn-round" data-menu-style="dropdown-default">
                                            <option disabled selected> Pilih Program Studi</option>
                                            <option value="Bimbingan dan Konseling">Bimbingan dan Konseling</option>
                                            <option value="Pendidikan Agama Katolik">Pendidikan Agama Katolik</option>
                                            <option value="Pendidikan Guru Sekolah Dasar">Pendidikan Guru Sekolah Dasar</option>
                                            <option value="Pendidikan Bahasa Inggris">Pendidikan Bahasa Inggris</option>
                                            <option value="Pendidikan Sastra Indonesia">Pendidikan Sastra Indonesia</option>
                                            <option value="Pendidikan Ekonomi">Pendidikan Ekonomi</option>
                                            <option value="Pendidikan Akuntansi">Pendidikan Akuntansi</option>
                                            <option value="Pendidikan Matematika">Pendidikan Matematika</option>
                                            <option value="Pendidikan Fisika">Pendidikan Fisika</option>
                                            <option value="Pendidikan Biologi">Pendidikan Biologi</option>
                                            <option value="Pendidikan Kimia">Pendidikan Kimia</option>
                                            <option value="Akuntansi">Akuntansi</option>
                                            <option value="Manajemen">Manajemen</option>
                                            <option value="Ekonomi">Ekonomi</option>
                                            <option value="Sastra Indonesia">Sastra Indonesia</option>
                                            <option value="Sastra Inggris">Sastra Inggris</option>
                                            <option value="Sejarah">Sejarah</option>
                                            <option value="Teknik Elektro">Teknik Elektro</option>
                                            <option value="Teknik Mesin">Teknik Mesin</option>
                                            <option value="Teknik Informatika">Teknik Informatika</option>
                                            <option value="Matematika">Matematika</option>
                                            <option value="Farmasi">Farmasi</option>
                                            <option value="Psikologi">Psikologi</option>
                                            <option value="Teologi">Teologi</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <h6>Misi</h6>
                                        <textarea class="form-control" placeholder="Misi" rows="13", maxlength="150" ></textarea>
                                    </div>
                                    <div class="form-group">
                                        <h6>Visi</h6>
                                        <textarea class="form-control" placeholder="Visi" rows="13", maxlength="150" ></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row buttons-row">
                                <div class="col-md-4 col-sm-4">
                                    <!--<button class="btn btn-outline-danger btn-block btn-round">Cancel</button>-->
                                </div>
                                <div class="col-md-4 col-sm-4">
                                    <button class="btn btn-outline-primary btn-block btn-round">Save</button>
                                </div>
                                <div class="col-md-4 col-sm-4">
                                    <button class="btn btn-outline-danger btn-block btn-round">Cancel</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @include('templates.partials._footer')
    </body>
    @include('templates.partials._script')
</html>
