@extends('layout.layout')
@section('title')
    Master Data
@endsection
@section('link1')
    Lokasi Area
@endsection
@section('link2')
    Ubah
@endsection
@section('link3')
    <div class="">
        <h3 class="box-title m-t-15">Lokasi Area</h3>
    </div>
@endsection
@section('link4')
    <div class="">
        <button type="button" onclick="history.back()" class="btn-sm bg-cyan pull-right" style="margin-right: 5px"><i class="fa fa-backward"></i>&nbsp;Kembali</button>
    </div>
@endsection
@section('content')

    <form action="{{ url('masterdata/lokasi_area/edit') }}" class="form-horizontal">
        <div class="form-body">
            <div class="row">
                <input type="text" name="id" value="{{ $rs->id }}" hidden>
                <input type="text" name="nama_area_lama" value="{{ $rs->nama_area }}" hidden>

                <div class="col-md-12">
                    <div class="form-group row">
                        <label class="control-label text-right col-md-3">Nama Area</label>
                        <div class="col-md-8">
                            <div class="form-line">
                                <input type="text" name="nama_area" id="nama_area" class="form-control" value="{{ $rs->nama_area }}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="form-actions">
            <div class="row">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-offset-1">
                            <button type="submit" class="btn btn-success">Submit</button>
                            <button type="button" id="btn_cancel" class="btn btn-warning">Cancel</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-6"> </div>
            </div>
        </div>
    </form>

    @push('scripts')
    <script>
        $('#btn_cancel').click(function(){
            location.reload();
        })
    </script>
    @endpush
@endsection
