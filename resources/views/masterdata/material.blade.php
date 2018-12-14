@extends('layout.layout')
@section('title')
    Master Data
@endsection
@section('link1')
    Material
@endsection
@section('link2')
    List
@endsection
@section('link3')
    <div class="">
        <a href="{{ url('masterdata/material/add') }}" id="btn_tambah" class="btn-sm btn-info"><span class="fa fa-plus-square"></span>&nbsp;Tambah Data</a>
    </div>
@endsection
@section('content')

    <div class="table-responsive">
        <table id="myTable" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th style="text-align: center;">Id</th>
                    <th style="text-align: center;">Nama Material</th>
                    <th style="text-align: center;">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($rs as $key => $material)
                    <tr>
                        <td>{{ $material->id }}</td>
                        <td>{{ $material->nama_material }}</td>
                        <td width="30%">
                            <a class="btn btn-warning waves-effect btn-xs" title="Edit"  href="{{ url('masterdata/material/editView', ['id' => $material->id]) }}">
                                <i class="material-icons">create</i>
                            </a>
                            <a class="btn btn-danger waves-effect btn-xs" title="Hapus" href="{{ url('masterdata/material/delete', ['id' => $material->id]) }}">
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
