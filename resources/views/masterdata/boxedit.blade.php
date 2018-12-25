@extends('layout.layout')
@section('title')
    Master Data
@endsection
@section('link1')
    Box
@endsection
@section('link2')
    Ubah
@endsection
@section('link3')
    <h3 class="">Box</h3>
@endsection
@section('link4')
    <div class="">
        <button type="button" onclick="history.back()" class="btn-sm bg-cyan pull-right" style="margin-right: 5px"><i class="fa fa-backward"></i>&nbsp;Kembali</button>
    </div>
@endsection
@section('content')


    <form action="{{ url('masterdata/box/edit') }}" class="form-horizontal">
        <div class="form-body">
            <div class="row">
                <div class="col-md-12">
                    <input type="hidden" name="id" value="{{ $rs->id }}">
                    <input type="hidden" name="nama_box_lama" value="{{ $rs->nama_box }}">
                    <input type="hidden" name="id_area_lama" value="{{ $rs->id_area }}">
                    <input type="hidden" name="ukuran_box_lama" value="{{ $rs->ukuran_box }}">

                    <div class="form-group row">
                        <label class="control-label text-right col-md-3">Lokasi Area</label>
                        <div class="col-md-8">
                            <div class="form-line">
                                <select id="nama_area" name="nama_area" class="form-control show-tick" style="width: 100%">
                                    @foreach($lokasi_area as $area)
                                        @if($rs->nama_area == $area->nama_area)
                                            <option value="{{$area->id}}" selected="selected">{{$area->nama_area}}</option>
                                        @else
                                            <option value="{{$area->id}}">{{$area->nama_area}}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="control-label text-right col-md-3">Nama Box</label>
                        <div class="col-md-8">
                            <div class="form-line">
                                <input type="text" id="nama_box" name="nama_box" class="form-control" value="{{$rs->nama_box}}">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="control-label text-right col-md-3">Ukuran Box</label>
                        <div class="col-md-8">
                            <div class="form-line">
                                <input type="text" id="ukuran_box" name="ukuran_box" class="form-control" value="{{$rs->ukuran_box}}">
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
