@extends('layouts.app')

@section('content')

<div class="container-table100">
    <div id="page-content-wrapper">
        <div class="row">
            <div class="col-lg-12">

                <h5 class="mb-3 font-weight-bold">
                    Edit Data Persalinan
                </h5>
                <div class="card">
                    <div class="card-body">

                        <form action="{{ route('persalinan.update', $lahir->id)}}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group row">
                                <label class="col-form-label col-sm-2">Tanggal Kelahiran <span
                                        class="text-danger">*</span></label>
                                <div class='col-sm-10'>
                                    <input class="date form-control" type="text" placeholder="{{$lahir->waktu_lahir}}"
                                        name="tanggal_lahir">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-sm-2">Jam Kelahiran <span
                                        class="text-danger">*</span></label>
                                <div class="col-sm-10">
                                    <div class="input-group input-group-sm">
                                        <input type="time" class="form-control form-control-sm"
                                            placeholder="Jam Kelahiran. Contoh: 1:30" name="jam_lahir" required>

                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">Jam dan Menit</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-sm-2">Jenis Kelamin <span
                                        class="text-danger">*</span></label>
                                <div class="col-sm-10">
                                    <select class="form-control form-control-sm" name="jenis_kelamin">
                                        <option value="Laki-Laki">Laki-Laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-sm-2">Berat Bayi <span
                                        class="text-danger">*</span></label>
                                <div class="col-sm-10">
                                    <div class="input-group input-group-sm">
                                        <input type="number" class="form-control form-control-sm"
                                            placeholder="{{$lahir->berat}}" name="berat">
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
                                        <input type="number" class="form-control form-control-sm"
                                            placeholder="{{$lahir->panjang}}" name="panjang">
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
                                    <input type="text" class="form-control form-control-sm"
                                        placeholder="{{$lahir->nama_ibu}}" name="nama_ibu">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-sm-2">Tanggal Lahir Ibu</label>
                                <div class='col-sm-10'>
                                    <input class="date form-control" type="text" placeholder="{{$lahir->lahir_ibu}}"
                                        name="lahir_ibu">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-sm-2">Usia Gestasi <span
                                        class="text-danger">*</span></label>
                                <div class="col-sm-10">
                                    <div class="input-group input-group-sm">
                                        <input type="number" class="form-control form-control-sm"
                                            placeholder="{{$lahir->usia_gestasi}}" name="usia_gestasi">
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
                                        <input type="time" class="form-control form-control-sm"
                                            placeholder="Durasi Persalinan. Contoh: 1:30" name="lama_persalinan">

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
                                    <select class="form-control form-control-sm" name="jenis_persalinan">
                                        <option value="Normal">Normal</option>
                                        <option value="Dibantu Alat">Dibantu Alat</option>
                                        <option value="Caesar">Caesar</option>
                                        <option value="Waterbirth">Waterbirth</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-sm-2">Catatan</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control form-control-sm" rows="5"
                                        placeholder="{{$lahir->catatan}}" name="catatan"></textarea>
                                </div>
                            </div>


                            <div class="form-group row">
                                <div class="col-sm-2"></div>
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                            </div>
                        </form>
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
