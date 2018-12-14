@extends('layout.layout')
@section('title')
    Master Data
@endsection
@section('link1')
    Program TV
@endsection
@section('link2')
    List Program TV
@endsection
@section('link3')
    <div class="col-md-12">
        <a href="{{ url('masterdata/program/add') }}" id="btn_tambah" class="btn-sm btn-info"><span class="fa fa-plus-square"></span>&nbsp;Tambah Data</a>
    </div>
@endsection
@section('content')

    <div class="table-responsive">
        <table id="myTable" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th style="text-align: center;">Id</th>
                    <th style="text-align: center;">Kode Channel</th>
                    <th style="text-align: center;">Program TV</th>
                    <th style="text-align: center;">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($rs as $key => $program)
                    <tr>
                        <td>{{ $program->id }}</td>
                        <td>{{ $program->kode_channel }}</td>
                        <td>{{ $program->program }}</td>
                        <td width="30%">
                            <a class="btn btn-warning waves-effect btn-xs" title="Ubah"  href="{{ url('masterdata/program/editView', ['id' => $program->id]) }}">
                                <i class="material-icons">create</i>
                            </a>
                            <a class="btn btn-danger waves-effect btn-xs" title="Hapus" href="{{ url('masterdata/program/delete', ['id' => $program->id]) }}">
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
