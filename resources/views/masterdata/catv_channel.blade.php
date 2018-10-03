@extends('layout.layout')
@section('title')
    Master Data
@endsection
@section('link1')
    Master Data
@endsection
@section('link2')
    CATV Channel
@endsection
@section('content')

<div class="card col-md-12">
    <div class="card-body">
        <div class="row">
        <!--row-->
          <div class="col-md-12">
              <a href="{{ url('masterdata/catv_channel/add') }}" id="btn_tambah" class="btn-sm btn-info"><span class="fa fa-plus-square"></span>&nbsp;Tambah Data</a>
          </div>
        </div>
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
                        <td width="30%">
                            <a class="btn btn-warning btn-xs" title="Edit"  href="{{ url('masterdata/catv_channel/editView', ['id' => $catv->id]) }}">
                                <i class="fa fa-pencil"></i>
                            </a>
                            <a class="btn btn-danger btn-xs hapusan" title="Hapus" href="{{ url('masterdata/catv_channel/delete', ['id' => $catv->id]) }}">
                                <i class="fa fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@push('script-footer')
<script type="text/javascript">

</script>
@endpush

@endsection
