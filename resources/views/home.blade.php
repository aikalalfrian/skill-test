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
                            @foreach ($newborn as $newborns)
                            <tr class="">
                                <td class="text-center">{{ $newborns->date_of_birth }}</td>
                                <td class="text-center">{{ $newborns->birth_time }}</td>
                                <td class="text-center">{{ $newborns->mother_name }}</td>
                                @php
                                $birthday = $newborns->mother_birth;
                                $age =
                                Carbon\Carbon::parse($birthday)->diff(Carbon\Carbon::now())->format('%y
                                Tahun, %m Bulan and %d Hari');
                                @endphp
                                <td class="text-center">{{ $age }}</td>
                                <td class="text-center">{{ $newborns->givebirth_type }}</td>
                                <td class="text-center">
                                    <form action="{{ route('birth.destroy', $newborns->id) }}" method="POST"
                                        class="text-center">

                                        <a class="btn btn-info btn-sm"
                                            href="{{ route('birth.show', $newborns->id) }}">Show</a>

                                        <a class="btn btn-primary btn-sm"
                                            href="{{ route('birth.edit', $newborns->id) }}">Edit</a>

                                        @csrf
                                        @method('DELETE')

                                        <button type="submit" class="btn btn-danger btn-sm"
                                            onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Ini?')">Delete</button>
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

<script>
    $(document).ready( function () {
        $('#example').DataTable({
            paging: false,

        });
    } );
</script>
@endsection
