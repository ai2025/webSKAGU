@extends('tempbase')

@section('content')

    <!-- ======= inputDataAlumni Section ======= -->
    <section id="inputDataAlumni" class="inputDataAlumni">
    <div class="container">
            <div class="row">
                <div class="col-lg-4" data-aos="fade-right">
                    <div class="section-title">
                    <h2 style="top: 90px; width: 500px;">Input Data Alumni</h2>
                    </div>
                        <form action="forms/inputDataAlumni.blade.php" method="post" role="form" class="php-email-form mt-4" style ="padding-top:60px">
                        <div class="form-row">
                            <div class="col-md-6 form-group">
                            <label> Nama Alumni : </label>
                                <input type="text" name="name" class="form-control" id="name" placeholder="" data-rule="minlen:4" data-msg="Lengkapi Data!" style="width: 376px;"/>
                                <div class="validate"></div>
                            </div>
                            <div class="col-md-6 form-group">
                            <label style="margin-left: 300px;width: 80px;"> NIS :  </label>
                                <input type="text" class="form-control" name="nis" id="nis" placeholder="" data-rule="nis" data-msg="Lengkapi Data!" style="width: 376px;margin-top: 0px;margin-left: 295px;" />
                                <div class="validate"></div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 form-group">
                            <label> Tempat Lahir : </label>
                                <input type="text" name="tmptLahir" class="form-control" id="tmptLahir" placeholder="" data-rule="minlen:4" data-msg="Lengkapi Data!" style="width: 376px;"/>
                                <div class="validate"></div>
                            </div>
                            <div class="col-md-6 form-group">
                            <label style="margin-left: 300px;width: 110px;"> Tanggal Lahir : </label>
                                <input type="date" class="form-control" name="tglLahir" id="tglLahir" placeholder="" data-rule="tglLahir" data-msg="Lengkapi Data!" style="width: 376px;margin-top: 0px;margin-left: 295px;" />
                                <div class="validate"></div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 form-group">
                            <label> No. HP :  </label>
                                <input type="text" name="telp" class="form-control" id="telp" placeholder="" data-rule="minlen:4" data-msg="Lengkapi Data!" style="width: 376px;"/>
                                <div class="validate"></div>
                            </div>
                            <div class="col-md-6 form-group">
                            <label style="margin-left: 300px;width: 110px;"> Email : </label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="" data-rule="email" data-msg="Lengkapi Data!" style="width: 376px;margin-top: 0px;margin-left: 295px;" />
                                <div class="validate"></div>
                            </div>
                        </div>
                        <div class="form-row">
                        <div class="col-md-6 form-group">
                            <label> Jenis Kelamin :  </label>
                            <br>
                            <input type="radio" id="male" name="gender" value="male">
                            <label for="male">Laki-laki</label><br>
                            <input type="radio" id="female" name="gender" value="female">
                            <label for="female">Perempuan</label><br>
                                <!-- <input type="radio" class="form-control" value="Laki-laki" checked="checked" name="jk" id="jk" style="width: 20px;margin-top: 0px;" />
                                <span class="wpcf7-list-item-label">Laki - Laki</span>
                                <input type="radio" class="form-control" checked="checked" name="jk" id="jk" value="Perempuan" style="width: 20px;margin-top: 0px;" />
                                <span class="wpcf7-list-item-label">Perempuan</span> -->
                                
                                <div class="validate"></div>
                            </div>
                            <div class="col-md-6 form-group">
                            <label style="margin-left: 300px;width: 120px;"> Paket Keahlian :  </label>
                                <input type="text" name="jurusan" class="form-control" id="jurusan" placeholder="" data-rule="minlen:4" data-msg="Lengkapi Data!" style="width: 376px;margin-top: 0px;margin-left: 295px;"/>
                                <div class="validate"></div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 form-group">
                            <label> Tahun Lulus :  </label>
                                <input type="text" name="thnLulus" class="form-control" id="thnLulus" placeholder="" data-rule="minlen:4" data-msg="Lengkapi Data!" style="width: 376px;"/>
                                <div class="validate"></div>
                            </div>
                            <div class="col-md-6 form-group">
                            <label style="margin-left: 300px;width: 110px;"> PKL : </label>
                                <input type="text" class="form-control" name="pkl" id="pkl" placeholder="" data-rule="pkl" data-msg="Lengkapi Data!" style="width: 376px;margin-top: 0px;margin-left: 295px;" />
                                <div class="validate"></div>
                            </div>
                        </div>
                        
                        <div class="form-row">
                            <div class="col-md-6 form-group">
                            <label> Pengalaman Kerja :  </label>
                                <input type="text" name="kerja" class="form-control" id="kerja" placeholder="" data-rule="minlen:4" data-msg="Lengkapi Data!" style="width: 376px;"/>
                                <div class="validate"></div>
                            </div>
                            <div class="col-md-6 form-group">
                            <label style="margin-left: 300px;width: 180px;"> Status Pekerjaan :  </label>
                                <select name="status" class="form-control" name="status" id="status" placeholder="" data-rule="status" data-msg="Lengkapi Data!" style="width: 376px;margin-top: 0px;margin-left: 295px;">
                                    <option value ="Bekerja">Bekerja</option>
                                    <option value ="Kuliah">Kuliah</option>
                                    <option value ="Bekerja">Tidak keduanya</option>
                                </select>
                                <div class="validate"></div>
                            </div>
                        </div>
                        <div class="form-group">
                        <label> Tempat Bekerja / Kuliah :  </label>
                            <input type="text" class="form-control" name="tempat" id="tempat" placeholder="" data-rule="minlen:4" data-msg="Lengkapi Data!" style="width: 376px;"/>
                            <div class="validate"></div>
                        </div>
                        <!-- <div class="form-group">
                            <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                            <div class="validate"></div>
                        </div> -->
                        <div class="mb-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Data anda akan terkirim. Terima kasih!</div>
                        </div>
                        <div class="text-center"><button type="submit">Submit</button></div>
                </div>
                
            </div>

        </div>
    </section><!-- End InputDataAlumni Section -->