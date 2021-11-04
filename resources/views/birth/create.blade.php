@extends('layouts.app')

@section('content')

<div class="container-table100">
    <div id="page-content-wrapper">
        <div class="row">
            <div class="col-lg-12">

                <h5 class="mb-3 font-weight-bold">
                    Tambah Data Persalinan
                </h5>
                <div class="table100 ver1 m-b-110 table-responsive" style="width:100%; padding: 50px;">

                    <form action="{{ route('birth.store')}}" method="POST">
                        @csrf
                        <div class="form-group row">
                            <label class="col-form-label col-sm-2">Tanggal Kelahiran <span
                                    class="text-danger">*</span></label>
                            <div class='col-sm-10'>
                                <input class="form-control" type="datetime-local" name="date_of_birth" required
                                    oninvalid="this.setCustomValidity('Data Tanggal dan Jam Kelahiran Tidak Boleh Kosong')"
                                    oninput="setCustomValidity('')">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-form-label col-sm-2">Jenis Kelamin <span
                                    class="text-danger">*</span></label>
                            <div class="col-sm-10">
                                <select class="form-control form-control-sm" name="gender" required
                                    oninvalid="this.setCustomValidity('Data Jenis Kelamin Tidak Boleh Kosong')"
                                    oninput="setCustomValidity('')">
                                    <option value="Laki-Laki">Laki-Laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-form-label col-sm-2">Berat Bayi <span class="text-danger">*</span></label>
                            <div class="col-sm-10">
                                <div class="input-group input-group-sm">
                                    <input type="number" class="form-control form-control-sm" placeholder="Berat Bayi"
                                        name="weight" required
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
                                    <input type="number" class="form-control form-control-sm" placeholder="Panjang Bayi"
                                        name="length" required
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
                                <input type="text" class="form-control form-control-sm" placeholder="Nama Lengkap Ibu"
                                    name="mother_name" required
                                    oninvalid="this.setCustomValidity('Data Nama Lengkap Ibu Tidak Boleh Kosong')"
                                    oninput="setCustomValidity('')">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-form-label col-sm-2">Tanggal Lahir Ibu</label>
                            <div class='col-sm-10'>
                                <input class="date form-control" type="text" name="mother_birth">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-form-label col-sm-2">Usia Gestasi <span
                                    class="text-danger">*</span></label>
                            <div class="col-sm-10">
                                <div class="input-group input-group-sm">
                                    <input type="number" class="form-control form-control-sm" placeholder="Usia Gestasi"
                                        name="gestational_age" required
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
                                        placeholder="Durasi Persalinan. Contoh: 1:30" name="givebirth_duration" required
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
                                <select class="form-control form-control-sm" name="givebirth_type" required
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
                                <textarea class="form-control form-control-sm" rows="5" placeholder="Catatan Persalinan"
                                    name="notes"></textarea>
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
    <!-- Page Content -->
</div>

@endsection
