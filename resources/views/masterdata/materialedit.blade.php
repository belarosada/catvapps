@extends('layout.layout')
@section('title')
    Master Data
@endsection
@section('link1')
    Material
@endsection
@section('link2')
    Ubah
@endsection
@section('link3')
    <h3 class="">Material</h3>
@endsection
@section('link4')
    <div class="">
        <button type="button" onclick="history.back()" class="btn-sm bg-cyan pull-right" style="margin-right: 5px"><i class="fa fa-backward"></i>&nbsp;Kembali</button>
    </div>
@endsection
@section('content')

    <form action="{{ url('masterdata/material/edit') }}" class="form-horizontal">
        <div class="form-body">
            <div class="row">
                <div class="col-md-12">
                    <input type="hidden" name="id" value="{{ $rs->id }}">
                    <input type="hidden" name="material_lama" value="{{ $rs->nama_material }}">

                    <div class="form-group row">
                        <label class="control-label text-right col-md-3">Nama Material</label>
                        <div class="col-md-8">
                            <div class="form-line">
                                <input type="text" id="nama_material" name="nama_material" class="form-control" value="{{$rs->nama_material}}">
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
        $('#nama_material').val('')
    })
    </script>
@endpush

@endsection
