@extends('layouts.app')

@section('content')

<div class="container-table100">
    <div id="page-content-wrapper">
        <div class="row">
            <div class="col-lg-12">

                <h5 class="mb-3 font-weight-bold">
                    Detail Data Persalinan
                </h5>
                <div class="card">
                    <div class="card-body">
                        <div class="form-group row">
                            <label class="col-form-label col-sm-2">Tanggal Kelahiran <span
                                    class="text-danger">*</span></label>
                            <div class='col-sm-10'>
                                <input class="date form-control" type="text" value="{{$lahir->tanggal_lahir}}" disabled>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-form-label col-sm-2">Jam Kelahiran <span
                                    class="text-danger">*</span></label>
                            <div class='col-sm-10'>
                                <input class="date form-control" type="text" value="{{$lahir->jam_lahir}}" disabled>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-form-label col-sm-2">Jenis Kelamin <span
                                    class="text-danger">*</span></label>
                            <div class="col-sm-10">
                                <input class="date form-control" type="text" value="{{$lahir->jenis_kelamin}}" disabled>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-form-label col-sm-2">Berat Bayi <span class="text-danger">*</span></label>
                            <div class="col-sm-10">
                                <div class="input-group input-group-sm">
                                    <input type="number" class="form-control form-control-sm" placeholder="Berat Bayi"
                                        name="berat" value="{{$lahir->berat}}" disabled>
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">KG</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-form-label col-sm-2">Panjang Bayi <span
                                    class="text-danger">*</span></label>
                            <div class="col-sm-10">
                                <div class="input-group input-group-sm">
                                    <input type="number" class="form-control form-control-sm" placeholder="Panjang Bayi"
                                        name="panjang" value="{{$lahir->panjang}}" disabled>
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">CM</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-form-label col-sm-2">Nama Lengkap Ibu <span
                                    class="text-danger">*</span></label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control form-control-sm" placeholder="Nama Lengkap Ibu"
                                    name="nama_ibu" value="{{$lahir->nama_ibu}}" disabled>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-form-label col-sm-2">Tanggal Lahir Ibu <span
                                    class="text-danger">*</span></label>
                            <div class='col-sm-10'>
                                <input class="date form-control" type="text" name="lahir_ibu"
                                    value="{{$lahir->lahir_ibu}}" disabled>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-form-label col-sm-2">Usia Gestasi <span
                                    class="text-danger">*</span></label>
                            <div class="col-sm-10">
                                <div class="input-group input-group-sm">
                                    <input type="number" class="form-control form-control-sm" placeholder="Usia Gestasi"
                                        name="usia_gestasi" value="{{$lahir->usia_gestasi}}" disabled>
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">Minggu</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-form-label col-sm-2">Durasi Persalinan <span
                                    class="text-danger">*</span></label>
                            <div class="col-sm-10">
                                <div class="input-group input-group-sm">
                                    <input type="text" class="form-control form-control-sm"
                                        placeholder="Durasi Persalinan. Contoh: 1:30" name="lama_persalinan"
                                        value="{{$lahir->lama_persalinan}}" disabled>

                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">Jam dan Menit</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-form-label col-sm-2">Jenis Persalinan <span
                                    class="text-danger">*</span></label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control form-control-sm" name="jenis_persalinan"
                                    value="{{$lahir->jenis_persalinan}}" disabled>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-form-label col-sm-2">Catatan <span class="text-danger">*</span></label>
                            <div class="col-sm-10">
                                <textarea class="form-control form-control-sm" rows="5" name="catatan"
                                    disabled>{{$lahir->catatan}}</textarea>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
    <!-- Page Content -->
</div>
<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<script src="vendor/bootstrap/js/popper.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="vendor/select2/select2.min.js"></script>
<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script src="js/main.js"></script>
@endsection
