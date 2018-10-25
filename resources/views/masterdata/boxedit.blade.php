@extends('layout.layout')
@section('title')
    Master Data
@endsection
@section('link1')
    Master Data
@endsection
@section('link2')
    Box Baru
@endsection
@section('content')

    <div class="col-lg-12">
        <div class="card card-outline-info">
            <div class="card-body">
                <form action="{{ url('masterdata/box/edit') }}" class="form-horizontal">
                    <div class="form-body">
                        <h3 class="box-title m-t-15">Box</h3>
                        <hr class="m-t-0 m-b-40">
                        <div class="row">
                            <div class="col-md-12">
                                <input type="hidden" name="id" value="{{ $rs->id }}">
                                <input type="hidden" name="nama_box_lama" value="{{ $rs->nama_box }}">
                                <input type="hidden" name="id_area_lama" value="{{ $rs->id_area }}">
                                <input type="hidden" name="ukuran_box_lama" value="{{ $rs->ukuran_box }}">

                                <div class="form-group row">
                                    <label class="control-label text-right col-md-3">Lokasi Area</label>
                                    <div class="col-md-8">
                                        <select id="nama_area" name="nama_area" class="form-control custom-select" style="width: 100%">
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
                                <div class="form-group row">
                                    <label class="control-label text-right col-md-3">Nama Box</label>
                                    <div class="col-md-8">
                                        <input type="text" id="nama_box" name="nama_box" class="form-control" value="{{$rs->nama_box}}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="control-label text-right col-md-3">Ukuran Box</label>
                                    <div class="col-md-8">
                                        <input type="text" id="ukuran_box" name="ukuran_box" class="form-control" value="{{$rs->ukuran_box}}">
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
                                    <div class="col-md-offset-3 col-md-9">
                                        <button type="submit" class="btn btn-success">Submit</button>
                                        <button type="button" id="btn_cancel" class="btn btn-inverse">Cancel</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6"> </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    @push('scripts')
    <script>
    $('#btn_cancel').click(function(){
        location.reload();
    })
    </script>
    @endpush
@endsection
