@extends('layout.layout')
@section('title')
    Master Data
@endsection
@section('link1')
    Master Data
@endsection
@section('link2')
    Lokasi Area
@endsection
@section('content')

<div class="card col-md-12">
    <div class="card-body">
        <div class="row">
        <!--row-->
          <div class="col-md-12">
              <a href="{{ url('masterdata/lokasi_area/add') }}" id="btn_tambah" class="btn-sm btn-info"><span class="fa fa-plus-square"></span>&nbsp;Tambah Data</a>
          </div>
        </div>
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
                            <a class="btn btn-warning btn-xs" title="Edit"  href="{{ url('masterdata/lokasi_area/editView', ['id' => $area->id]) }}">
                                <i class="fa fa-pencil"></i>
                            </a>
                            <a class="btn btn-danger btn-xs hapusan" title="Hapus" href="{{ url('masterdata/lokasi_area/delete', ['id' => $area->id]) }}">
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
