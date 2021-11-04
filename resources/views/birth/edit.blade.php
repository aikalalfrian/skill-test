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

                        <form action="{{ route('birth.update', $newborn->id)}}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group row">
                                <label class="col-form-label col-sm-2">Tanggal Kelahiran <span
                                        class="text-danger">*</span></label>
                                <div class='col-sm-10'>
                                    <input class="date form-control" type="text"
                                        placeholder="{{$newborn->date_of_birth}}" name="tanggal_lahir" required
                                        oninvalid="this.setCustomValidity('Data Tanggal Kelahiran Tidak Boleh Kosong')"
                                        oninput="setCustomValidity('')">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-sm-2">Jam Kelahiran <span
                                        class="text-danger">*</span></label>
                                <div class="col-sm-10">
                                    <div class="input-group input-group-sm">
                                        <input type="time" class="form-control form-control-sm"
                                            placeholder="{{$newborn->birth_time}}" name="jam_lahir" required
                                            oninvalid="this.setCustomValidity('Data Jam Kelahiran Tidak Boleh Kosong')"
                                            oninput="setCustomValidity('')">

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
                                    <select class="form-control form-control-sm" name="jenis_kelamin" required
                                        oninvalid="this.setCustomValidity('Data Jenis Kelamin Tidak Boleh Kosong')"
                                        oninput="setCustomValidity('')">
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
                                            placeholder="{{$newborn->weight}}" name="berat" required
                                            oninvalid="this.setCustomValidity('Data Berat Bayi Tidak Boleh Kosong')"
                                            oninput="setCustomValidity('')">
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
                                            placeholder="{{$newborn->length}}" name="panjang" required
                                            oninvalid="this.setCustomValidity('Data Panjang Bayi Tidak Boleh Kosong')"
                                            oninput="setCustomValidity('')">
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
                                        placeholder="{{$newborn->mother_name}}" name="nama_ibu" required
                                        oninvalid="this.setCustomValidity('Data Nama Lengkap Ibu Tidak Boleh Kosong')"
                                        oninput="setCustomValidity('')">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-sm-2">Tanggal Lahir Ibu</label>
                                <div class='col-sm-10'>
                                    <input class="date form-control" type="text"
                                        placeholder="{{$newborn->mother_birth}}" name="lahir_ibu">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-sm-2">Usia Gestasi <span
                                        class="text-danger">*</span></label>
                                <div class="col-sm-10">
                                    <div class="input-group input-group-sm">
                                        <input type="number" class="form-control form-control-sm"
                                            placeholder="{{$newborn->gestational_age}}" name="usia_gestasi" required
                                            oninvalid="this.setCustomValidity('Data Usia Gestasi Tidak Boleh Kosong')"
                                            oninput="setCustomValidity('')">
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
                                            placeholder="Durasi Persalinan. Contoh: 1:30" name="lama_persalinan"
                                            required
                                            oninvalid="this.setCustomValidity('Data Durasi Persalinan Tidak Boleh Kosong')"
                                            oninput="setCustomValidity('')">

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
                                    <select class="form-control form-control-sm" name="jenis_persalinan" required
                                        oninvalid="this.setCustomValidity('Data Jenis Persalinan Tidak Boleh Kosong')"
                                        oninput="setCustomValidity('')">
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
                                        placeholder="{{$newborn->notes}}" name="catatan"></textarea>
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

@endsection
