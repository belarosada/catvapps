@extends('layout.layout')
@section('title')
    Master Data
@endsection
@section('link1')
    CATV Channel
@endsection
@section('link2')
    List
@endsection
@section('link3')
    <div class="">
        <a href="{{ url('masterdata/catv_channel/add') }}" id="btn_tambah" class="btn-sm btn-info"><span class="fa fa-plus-square"></span>&nbsp;Tambah Data</a>
    </div>
@endsection
@section('content')

    <div class="table-responsive">
        <table id="myTable" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th style="text-align: center;">Id</th>
                    <th style="text-align: center;">Kode Channel</th>
                    <th style="text-align: center;">Frekuensi</th>
                    <th style="text-align: center;">HE RF Level</th>
                    <th style="text-align: center;">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($rs as $key => $catv)
                    <tr>
                        <td>{{ $catv->id }}</td>
                        <td>{{ $catv->kode_channel }}</td>
                        <td>{{ $catv->frekuensi }}</td>
                        <td>{{ $catv->rf_level }}</td>
                        <td width="10%">
                            <a type="button" title="Ubah" class="btn btn-warning waves-effect btn-xs"  href="{{ url('masterdata/catv_channel/editView', ['id' => $catv->id]) }}">
                                <i class="material-icons">create</i>
                            </a>
                            <a type="button" title="Hapus" class="btn btn-danger waves-effect btn-xs"  href="{{ url('masterdata/catv_channel/delete', ['id' => $catv->id]) }}">
                                <i class="material-icons">delete</i>
                            </a>
                            {{-- <a class="btn bg-red waves-effect btn-xs" title="Edit"  href="{{ url('masterdata/catv_channel/editView', ['id' => $catv->id]) }}">
                                <i class="fa fa-pencil"></i>
                            </a>
                            <a class="btn btn-danger btn-xs hapusan" title="Hapus" href="{{ url('masterdata/catv_channel/delete', ['id' => $catv->id]) }}">
                                <i class="fa fa-trash"></i> --}}
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
