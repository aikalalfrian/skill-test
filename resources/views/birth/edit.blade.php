@extends('layouts.app')

@section('content')

<div class="container-table100">
    <div id="page-content-wrapper">
        <div class="row">
            <div class="col-lg-12">

                <h5 class="mb-3 font-weight-bold">
                    Edit Data Persalinan
                </h5>
                <div class="table100 ver1 m-b-110 table-responsive" style="width:100%; padding: 50px;">

                    <form action="{{ route('birth.update', $newborn->id)}}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group row">
                            <label class="col-form-label col-sm-2">Tanggal Kelahiran <span
                                    class="text-danger">*</span></label>
                            <div class='col-sm-10'>
                                <input class="form-control" type="datetime-local" name="date_of_birth" required
                                    oninvalid="this.setCustomValidity('Data Tanggal dan Jam Kelahiran Tidak Boleh Kosong')"
                                    oninput="setCustomValidity('')" value="{{$newborn->date_of_birth}}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-form-label col-sm-2">Jenis Kelamin <span
                                    class="text-danger">*</span></label>
                            <div class="col-sm-10">
                                <select class="form-control form-control-sm" name="gender" required
                                    oninvalid="this.setCustomValidity('Data Jenis Kelamin Tidak Boleh Kosong')"
                                    oninput="setCustomValidity('')">
                                    <option value="Laki-Laki" @if ($newborn->gender =='Laki-Laki' )
                                        selected="selected"
                                        @endif>
                                        Laki-Laki</option>
                                    <option value="Perempuan" @if ($newborn->gender =='Perempuan' )
                                        selected="selected"
                                        @endif>Perempuan</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-form-label col-sm-2">Berat Bayi <span class="text-danger">*</span></label>
                            <div class="col-sm-10">
                                <div class="input-group input-group-sm">
                                    <input type="number" class="form-control form-control-sm" name="weight" required
                                        oninvalid="this.setCustomValidity('Data Berat Bayi Tidak Boleh Kosong')"
                                        oninput="setCustomValidity('')" value="{{$newborn->weight}}">
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
                                    <input type="number" class="form-control form-control-sm" name="length" required
                                        oninvalid="this.setCustomValidity('Data Panjang Bayi Tidak Boleh Kosong')"
                                        oninput="setCustomValidity('')" value="{{$newborn->length}}">
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
                                <input type="text" class="form-control form-control-sm" name="mother_name" required
                                    oninvalid="this.setCustomValidity('Data Nama Lengkap Ibu Tidak Boleh Kosong')"
                                    oninput="setCustomValidity('')" value="{{$newborn->mother_name}}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-form-label col-sm-2">Tanggal Lahir Ibu</label>
                            <div class='col-sm-10'>
                                <input class="date form-control" type="text" value="{{$newborn->mother_birth}}"
                                    name="mother_birth">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-form-label col-sm-2">Usia Gestasi <span
                                    class="text-danger">*</span></label>
                            <div class="col-sm-10">
                                <div class="input-group input-group-sm">
                                    <input type="number" class="form-control form-control-sm" name="gestational_age"
                                        required
                                        oninvalid="this.setCustomValidity('Data Usia Gestasi Tidak Boleh Kosong')"
                                        oninput="setCustomValidity('')" value="{{$newborn->gestational_age}}">
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
                                    <input type="time" class="form-control form-control-sm" name="givebirth_duration"
                                        required
                                        oninvalid="this.setCustomValidity('Data Durasi Persalinan Tidak Boleh Kosong')"
                                        oninput="setCustomValidity('')" value="{{$newborn->givebirth_duration}}">

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
                                    <option value="Normal" @if ($newborn->givebirth_type =='Normal' )
                                        selected="selected"
                                        @endif>
                                        Normal</option>
                                    <option value="Dibantu Alat" @if ($newborn->givebirth_type =='Dibantu Alat' )
                                        selected="selected"
                                        @endif>Dibantu Alat</option>

                                    <option value="Caesar" @if ($newborn->givebirth_type =='Caesar' )
                                        selected="selected"
                                        @endif>Caesar</option>
                                    <option value="Waterbirth" @if ($newborn->givebirth_type =='Waterbirth' )
                                        selected="selected"
                                        @endif>Waterbirth</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-form-label col-sm-2">Catatan</label>
                            <div class="col-sm-10">
                                <textarea class="form-control form-control-sm" rows="5" value="{{$newborn->notes}}"
                                    name="notes">{{$newborn->notes}}</textarea>
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
