@extends('layout.layout')
@section('title')
    Master Data
@endsection
@section('link1')
    Master Data
@endsection
@section('link2')
    Material Baru
@endsection
@section('content')

    <div class="col-lg-12">
        <div class="card card-outline-info">
            <div class="card-body">
                <form action="{{ url('masterdata/material/edit') }}" class="form-horizontal">
                    <div class="form-body">
                        <h3 class="box-title m-t-15">Material</h3>
                        <hr class="m-t-0 m-b-40">
                        <div class="row">
                            <div class="col-md-12">
                                <input type="hidden" name="id" value="{{ $rs->id }}">
                                <input type="hidden" name="material_lama" value="{{ $rs->nama_material }}">

                                <div class="form-group row">
                                    <label class="control-label text-right col-md-3">Nama Material</label>
                                    <div class="col-md-8">
                                        <input type="text" id="nama_material" name="nama_material" class="form-control" value="{{$rs->nama_material}}">
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
            $('#nama_material').val('')
        })
    </script>
    @endpush
@endsection
