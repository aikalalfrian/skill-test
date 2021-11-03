@extends('layouts.app')

@section('content')
<div class="container-table100">
    <div id="page-content-wrapper">
        <div class="row">
            <div class="col-lg-12">

                <h5 class="mb-3 font-weight-bold">
                    Data Persalinan
                </h5>
                <div class="table100 ver1 m-b-110 table-responsive" style="width:100%; padding: 50px;">
                    <table id="example" class="table table-striped table-bordered" style="width:100%;">
                        <thead>
                            <tr class="row100 head">
                                <th class="text-center">Tanggal Kelahiran</th>
                                <th class="text-center">Jam Kelahiran</th>
                                <th class="text-center">Nama Ibu</th>
                                <th class="text-center">Usia Ibu</th>
                                <th class="text-center">Jenis Persalinan</th>
                                <th class="text-center">Jenis Persalinan</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($lahir as $persalinan)
                            <tr class="">
                                <td class="text-center">{{ $persalinan->tanggal_lahir }}</td>
                                <td class="text-center">{{ $persalinan->jam_lahir }}</td>
                                <td class="text-center">{{ $persalinan->nama_ibu }}</td>
                                @php
                                $birthday = $persalinan->lahir_ibu;
                                $age =
                                Carbon\Carbon::parse($birthday)->diff(Carbon\Carbon::now())->format('%y
                                Tahun, %m Bulan and %d Hari');
                                @endphp
                                <td class="text-center">{{ $age }}</td>
                                <td class="text-center">{{ $persalinan->jenis_persalinan }}</td>
                                <td class="text-center">
                                    <form action="{{ route('persalinan.destroy',$persalinan->id) }}" method="POST"
                                        class="text-center">

                                        <a class="btn btn-info btn-sm"
                                            href="{{ route('persalinan.show',$persalinan->id) }}">Show</a>

                                        <a class="btn btn-primary btn-sm"
                                            href="{{ route('persalinan.edit',$persalinan->id) }}">Edit</a>

                                        @csrf
                                        @method('DELETE')

                                        <button type="submit" class="btn btn-danger btn-sm"
                                            onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
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



<script>
    $(document).ready( function () {
        $('#example').DataTable({
            paging: false,

        });
    } );
</script>
@endsection
