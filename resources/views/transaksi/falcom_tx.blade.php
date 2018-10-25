@extends('layout.layout')
@section('title')
    Transaksi
@endsection
@section('link1')
    CATV HeadEnd
@endsection
@section('link2')
    Falcom Tx
@endsection
@section('content')

<div class="card col-md-12">
    <div class="card-body">
        <div class="row">
        <!--row-->
          <div class="col-md-12">
              <a href="{{ url('transaksi/catv_headend/falcom_tx/add') }}" id="btn_tambah" class="btn-sm btn-info"><span class="fa fa-plus-square"></span>&nbsp;Tambah Data</a>
          </div>
        </div>
        <div class="table-responsive">
            <table id="myTable" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th style="text-align: center;">Tanggal</th>
                        <th style="text-align: center;">CATV Ch</th>
                        <th style="text-align: center;">Freq. (Mhz)</th>
                        <th style="text-align: center;">Program TV</th>
                        <th style="text-align: center;">HE RF Level</th>
                        <th style="text-align: center;">Level</th>
                        <th style="text-align: center;">CNR</th>
                        <!--<th style="text-align: center;">Aksi</th>-->
                    </tr>
                </thead>
                <tbody>
                    @foreach($rs as $key => $tr)
                    <tr>
                        <td>{{ $tr->tanggal_falcom }}</td>
                        <td>{{ $tr->kode_channel }}</td>
                        <td>{{ $tr->frekuensi }}</td>
                        <td>{{ $tr->program }}</td>
                        <td>{{ $tr->rf_level }}</td>
                        <td>{{ $tr->level_falcom }}</td>
                        <td>{{ $tr->cnr_falcom }}</td>
                        <!--<td>
                            <a class="btn btn-warning btn-xs" title="Edit"  href="{{ url('masterdata/tr_channel/editView', ['id' => $tr->id]) }}">
                                <i class="fa fa-pencil"></i>
                            </a>
                            <a class="btn btn-danger btn-xs hapusan" title="Hapus" href="{{ url('masterdata/tr_channel/delete', ['id' => $tr->id]) }}">
                                <i class="fa fa-trash"></i>
                            </a>
                        </td>-->
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
