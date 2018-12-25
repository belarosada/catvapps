@extends('layout.layout')
@section('title')
    Master Data
@endsection
@section('link1')
    Lokasi Area
@endsection
@section('link2')
    List
@endsection
@section('link3')
    <div class="">
        <a href="{{ url('masterdata/lokasi_area/add') }}" id="btn_tambah" class="btn-sm btn-info"><span class="fa fa-plus-square"></span>&nbsp;Tambah Data</a>
    </div>
@endsection
@section('content')

    <div class="table-responsive">
        <table id="myTable" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th style="text-align: center;">Id</th>
                    <th style="text-align: center;">Nama Area</th>
                    <th style="text-align: center;">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($rs as $key => $area)
                    <tr>
                        <td>{{ $area->id }}</td>
                        <td>{{ $area->nama_area }}</td>
                        <td width="30%">
                            <a class="btn btn-warning waves-effect btn-xs" title="Ubah"  href="{{ url('masterdata/lokasi_area/editView', ['id' => $area->id]) }}">
                                <i class="material-icons">create</i>
                            </a>
                            <a class="btn btn-danger waves-effect btn-xs" title="Hapus" href="{{ url('masterdata/lokasi_area/delete', ['id' => $area->id]) }}">
                                <i class="material-icons">delete</i>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@push('scripts')
<script type="text/javascript">

    $(document).ready( function () {
        $('#myTable').DataTable();
    });

</script>
@endpush

@endsection
