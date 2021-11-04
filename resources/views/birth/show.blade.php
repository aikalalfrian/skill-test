@extends('layouts.app')

@section('content')

<div class="container-table100">
    <div id="page-content-wrapper">
        <div class="row">
            <div class="col-lg-12">

                <h5 class="mb-3 font-weight-bold">
                    Detail Data Persalinan
                </h5>
                <div class="table100 ver1 m-b-110 table-responsive" style="width:100%; padding: 50px;">
                    <div class="form-group row">
                        <label class="col-form-label col-sm-2">Tanggal Kelahiran</label>
                        <div class='col-sm-10'>
                            <input class="form-control" type="text" value="{{$newborn->date_of_birth}}" disabled>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-form-label col-sm-2">Jenis Kelamin</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" value="{{$newborn->gender}}" disabled>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-form-label col-sm-2">Berat Bayi</label>
                        <div class="col-sm-10">
                            <div class="input-group input-group-sm">
                                <input type="number" class="form-control form-control-sm" placeholder="Berat Bayi"
                                    name="berat" value="{{$newborn->weight}}" disabled>
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">KG</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-form-label col-sm-2">Panjang Bayi</label>
                        <div class="col-sm-10">
                            <div class="input-group input-group-sm">
                                <input type="number" class="form-control form-control-sm" placeholder="Panjang Bayi"
                                    name="panjang" value="{{$newborn->length}}" disabled>
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">CM</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-form-label col-sm-2">Nama Lengkap Ibu</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control form-control-sm" placeholder="Nama Lengkap Ibu"
                                name="nama_ibu" value="{{$newborn->mother_name}}" disabled>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-form-label col-sm-2">Tanggal Lahir Ibu</label>
                        <div class='col-sm-10'>
                            <input class="date form-control" type="text" name="lahir_ibu"
                                value="{{$newborn->mother_birth}}" disabled>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-form-label col-sm-2">Usia Gestasi</label>
                        <div class="col-sm-10">
                            <div class="input-group input-group-sm">
                                <input type="number" class="form-control form-control-sm" placeholder="Usia Gestasi"
                                    name="usia_gestasi" value="{{$newborn->gestational_age}}" disabled>
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">Minggu</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-form-label col-sm-2">Durasi Persalinan</label>
                        <div class="col-sm-10">
                            <div class="input-group input-group-sm">
                                <input type="text" class="form-control form-control-sm"
                                    placeholder="Durasi Persalinan. Contoh: 1:30" name="lama_persalinan"
                                    value="{{$newborn->givebirth_duration}}" disabled>

                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">Jam dan Menit</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-form-label col-sm-2">Jenis Persalinan</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control form-control-sm" name="jenis_persalinan"
                                value="{{$newborn->givebirth_type}}" disabled>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-form-label col-sm-2">Catatan</label>
                        <div class="col-sm-10">
                            <textarea class="form-control form-control-sm" rows="5" name="catatan"
                                disabled>{{$newborn->notes}}</textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- Page Content -->
</div>

@endsection
